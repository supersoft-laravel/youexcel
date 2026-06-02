<?php 

namespace App\Http\Controllers;

use App\Models\Calendar;
use App\Models\CalendarFile;
use App\Models\Courses;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Barryvdh\DomPDF\Facade\Pdf;

class CalendarController extends Controller
{
    public function index()
    {
        // Fetch unique titles
        $entries = Calendar::select('title')->distinct()->get();
        $calendarFile = CalendarFile::value('calendar_file');
        $courses = Courses::all();
        return view('adminpanel.add-calendar', compact('entries','calendarFile','courses'));
    }
    
 
    
    public function create()
    {
        // Fetch unique titles
        $entries = Calendar::select('title')->distinct()->get();
        return view('adminpanel.add-calendar', compact('entries'));
    }

    public function destroy($id)
    {
        $entry = Calendar::findOrFail($id);
        $entry->delete();
    
        return redirect()->route('add.calendar')->with('success', 'Entry deleted successfully!');
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'title' => 'required|string|max:255',
            'd_date.*' => 'required|string|max:255',
            'd_timing.*' => 'required|string|max:255',
            'class_date.*' => 'required|string|max:255',
            'class_timing.*' => 'required|string|max:255',
            'duration.*' => 'required|string|max:255',
            'course_ids.*' => 'required|exists:courses,id',
            'fees.*' => 'nullable|string|max:255',
            'monthly_fees.*' => 'nullable|string|max:255',
        ]);
        
        // Fetch all selected courses once
        $courses = Courses::whereIn('id', $request->course_ids)
                    ->get()
                    ->keyBy('id');   // Important
    
        foreach ($request->course_ids as $index => $courseId) {
    
            $course = $courses[$courseId] ?? null;
            
            if (!$course) {
                continue;
            }
    
            $courseLink = $course ? url('/courses/' . $course->slug) : null;
    
            Calendar::create([
                'title'        => $request->title,
                'course_id'    => $courseId,
                'course_name'  => $course->coursename,
                'd_date'       => $request->d_date[$index],
                'd_timing'     => $request->d_timing[$index],
                'class_date'   => $request->class_date[$index],
                'class_timing' => $request->class_timing[$index],
                'duration'     => $request->duration[$index],
                'd_btn'        => $courseLink,
                'monthly_fee'  => $request->monthly_fees[$index] ?? null,
                'fees'         => $request->fees[$index] ?? null,
            ]);
        }

        return redirect()->route('add.calendar')->with('success', 'Entries added successfully!');
    }

    public function uploadFile(Request $request)
    {
        // Validate the request
        $request->validate([
            'calendar_file' => 'required|file|mimes:pdf,doc,docx,xls,xlsx|max:4048',
        ]);
    
        $calendarFile = CalendarFile::first();
    
        if (!$calendarFile) {
            $calendarFile = new CalendarFile();
        }
    
        if ($request->hasFile('calendar_file')) {
            // Delete old file if exists
            if ($calendarFile->calendar_file && File::exists(public_path($calendarFile->calendar_file))) {
                File::delete(public_path($calendarFile->calendar_file));
            }
    
            // Upload new file
            $file = $request->file('calendar_file');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '_calendar_file.' . $extension;
    
            $uploadPath = 'calendars';
            $file->move(public_path($uploadPath), $fileName);
    
            $calendarFile->calendar_file = $uploadPath . '/' . $fileName;
        }
    
        $calendarFile->save();
    
        return redirect()->route('add.calendar')->with('success', 'Calendar file uploaded successfully.');
    }


    public function viewEntriesByTitle($title)
    {
        $entries = Calendar::where('title', $title)->get();
        return view('adminpanel.view-entries', compact('entries', 'title'));
    }

    // Method to edit entries by title
    public function edit($title)
    {
        $entries = Calendar::where('title', $title)->get();
        $courses = Courses::all();
        return view('adminpanel.edit-entries', compact('entries', 'title', 'courses'));
    }

    // Method to update entries
    // public function update(Request $request, $title)
    // {
    //     // Validate the request
    //     $request->validate([
    //         'course_name.*' => 'required|string|max:255',
    //         'd_date.*' => 'required|string|max:255',
    //         'd_timing.*' => 'required|string|max:255',
    //         'class_date.*' => 'required|string|max:255',
    //         'class_timing.*' => 'required|string|max:255',
    //         'duration.*' => 'required|string|max:255',
    //         'd_btn.*' => 'required|string|max:255',
    //         'fees.*' => 'nullable|string|max:255',
    //         'monthly_fees.*' => 'nullable|string|max:255',
    //     ]);

    //     // Update entries by title
    //     $entries = Calendar::where('title', $title)->get();
    //     foreach ($entries as $index => $entry) {
    //         $entry->update([
    //             'course_name' => $request->course_name[$index],
    //             'd_date' => $request->d_date[$index],
    //             'd_timing' => $request->d_timing[$index],
    //             'class_date' => $request->class_date[$index],
    //             'class_timing' => $request->class_timing[$index],
    //             'duration' => $request->duration[$index],
    //             'd_btn' => $request->d_btn[$index],
    //             'fees' => $request->fees[$index],
    //             'monthly_fee' => $request->monthly_fees[$index],
    //         ]);
    //     }

    //     return redirect()->route('add.calendar')->with('success', 'Entries updated successfully!');
    // }
    
    public function update(Request $request, $title)
    {
        $validated = $request->validate([
            'd_date.*' => 'required|string|max:255',
            'd_timing.*' => 'required|string|max:255',
            'class_date.*' => 'required|string|max:255',
            'class_timing.*' => 'required|string|max:255',
            'duration.*' => 'required|string|max:255',
            'course_ids.*' => 'required|exists:courses,id',
            'fees.*' => 'nullable|string|max:255',
            'monthly_fees.*' => 'nullable|string|max:255',
        ]);
    
        // Fetch existing entries by title
        $existingEntries = Calendar::where('title', $title)
                            ->orderBy('id')
                            ->get()
                            ->values();
    
        // Fetch selected courses once
        $courses = Courses::whereIn('id', $validated['course_ids'])
                    ->get()
                    ->keyBy('id');
    
        foreach ($validated['course_ids'] as $index => $courseId) {
    
            $course = $courses->get($courseId);
    
            if (!$course) {
                continue;
            }
    
            $courseLink = url('/courses/' . $course->slug);
    
            $data = [
                'course_id'    => $courseId,
                'course_name'  => $course->coursename,
                'd_date'       => $validated['d_date'][$index],
                'd_timing'     => $validated['d_timing'][$index],
                'class_date'   => $validated['class_date'][$index],
                'class_timing' => $validated['class_timing'][$index],
                'duration'     => $validated['duration'][$index],
                'd_btn'        => $courseLink,
                'monthly_fee'  => $validated['monthly_fees'][$index] ?? null,
                'fees'         => $validated['fees'][$index] ?? null,
            ];
    
            // Update existing or create new
            if (isset($existingEntries[$index])) {
                $existingEntries[$index]->update($data);
            } else {
                Calendar::create(array_merge(
                    ['title' => $title],
                    $data
                ));
            }
        }
    
        return redirect()->route('add.calendar')
            ->with('success', 'Entries updated & new entries added successfully!');
    }


    // Method to delete all entries with the same title
    public function deleteAllByTitle($title)
    {
        Calendar::where('title', $title)->delete();

        return redirect()->route('add.calendar')->with('success', 'All entries with the title "' . $title . '" have been deleted successfully!');
    }

    public function WebCalender() {
        $calendars = Calendar::with('course')->where('is_active', '1')->orderBy('class_date', 'ASC')->get()->groupBy(function ($item) {
            return Carbon::parse($item->class_date)->format('F');
        });
        return view('website.pages.calendar', compact('calendars'));
    }
    
    public function newCalender() {
        $calendars = Calendar::with('course')->where('is_active', '1')->orderBy('class_date', 'ASC')->get()->groupBy(function ($item) {
            return Carbon::parse($item->class_date)->format('F');
        });
        return view('website.pages.calendar', compact('calendars'));
    }
    
    public function updateStatus(string $id)
    {
        try {
            $calendar = Calendar::findOrFail($id);
            $message = $calendar->is_active == '1' ? 'Calendar Deactivated Successfully' : 'Calendar Activated Successfully';
            if ($calendar->is_active == '1') {
                $calendar->is_active = '0';
                $calendar->save();
            } else {
                $calendar->is_active = '1';
                $calendar->save();
            }
            return redirect()->back()->with('success', $message);
        } catch (\Throwable $th) {
            Log::error('Calendar Status Updation Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
    
    public function downloadCalendar()
    {
        $calendars = Calendar::with('course')->where('is_active', '1')
            ->orderBy('class_date', 'ASC')
            ->get()
            ->groupBy(fn($item) => \Carbon\Carbon::parse($item->class_date)->format('F'));
    
        // Load the Blade view and convert it to PDF
        $pdf = Pdf::loadView('website.pages.calendar_pdf', compact('calendars'));
    
        // (optional) agar orientation landscape chahiye
        // $pdf->setPaper('A4', 'landscape');
    
        // Return file for download
        return $pdf->download('training_calendar.pdf');
    }
}
