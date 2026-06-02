<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;
use App\Models\Trainers;
use App\Models\LeadCorporate;
use App\Models\Program;
use App\Models\Calendar;
use Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class CoursesController extends Controller
{
    public function adminCourses()
    {
        $courses = Courses::all();
        return view("adminpanel.courses.index", compact('courses'));
    }
    
    public function createCourse()
    {
        $trainers = Trainers::where('is_active', '1')->get();
        return view("adminpanel.courses.create", compact('trainers'));
    }
    
    function storeCourse(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'coursename' => 'required|string|max:255',
            'slug' => 'required|string|unique:courses,slug',
            'tagline' => 'required|string',
            'trainer_id' => 'required|exists:trainers,id',
            'difficulty' => 'required|string|max:255',
            'rating' => 'required|numeric|min:1|max:5',
            'duration' => 'required|integer|min:0',
            'sessions' => 'nullable|integer|min:0',
            'brouchure' => 'nullable|file|max:10240',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'video_url' => 'nullable|file|mimes:mp4,mov,avi,wmv|max:20240',
            'outline_pdf' => 'nullable|file|max:10240',
            'lump_sum_fee' => 'required|string|max:255',
            'zoho_id' => 'required|string|max:255',
            'overview' => 'required|string',
            'prerequisites' => 'required|string',
            'recommendation' => 'required|string',
            'outcomes' => 'required|array',
            'outcomes.*' => 'string',
            'meta_title' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', $validator->errors()->first());
        }

        try {
            DB::beginTransaction();
            $lastPosition = Courses::max('position');
            $course = new Courses();
            $course->coursename = $request->coursename;
            $course->slug = $request->slug;
            $course->tagline = $request->tagline;
            $course->trainer_id = $request->trainer_id;
            $course->difficulty = $request->difficulty;
            $course->rating = $request->rating;
            $course->duration = $request->duration;
            $course->sessions = $request->sessions ?? 0;
            $course->lump_sum_fee = $request->lump_sum_fee;
            $course->zoho_id = $request->zoho_id;
            $course->overview = $request->overview;
            $course->prerequisites = $request->prerequisites;
            $course->recommendation = $request->recommendation;
            $course->position = $lastPosition ? $lastPosition + 1 : 1;
            $course->outcomes = json_encode($request->outcomes);
            $course->meta_title = $request->meta_title;
            $course->meta_description = $request->meta_description;
            $course->meta_keywords = $request->meta_keywords;
            
            if ($request->hasFile('brouchure')) {
                $brouchure = $request->file('brouchure');
                $brouchure_ext = $brouchure->getClientOriginalExtension();
                $brouchure_name = time() . '_brouchure.' . $brouchure_ext;

                $brouchure_path = 'uploads/courses/brouchures';
                $brouchure->move(public_path($brouchure_path), $brouchure_name);
                $course->image = $brouchure_path . "/" . $brouchure_name;
            }
            
            if ($request->hasFile('image_url')) {
                $image_url = $request->file('image_url');
                $image_url_ext = $image_url->getClientOriginalExtension();
                $image_url_name = time() . '_image.' . $image_url_ext;

                $image_url_path = 'uploads/courses/images';
                $image_url->move(public_path($image_url_path), $image_url_name);
                $course->image_url = $image_url_path . "/" . $image_url_name;
            }
            
            if ($request->hasFile('video_url')) {
                $video_url = $request->file('video_url');
                $video_url_ext = $video_url->getClientOriginalExtension();
                $video_url_name = time() . 'video.' . $video_url_ext;

                $video_url_path = 'uploads/courses/videos';
                $video_url->move(public_path($video_url_path), $video_url_name);
                $course->video_url = $video_url_path . "/" . $video_url_name;
            }
            
            if ($request->hasFile('outline_pdf')) {
                $outline_pdf = $request->file('outline_pdf');
                $outline_pdf_ext = $outline_pdf->getClientOriginalExtension();
                $outline_pdf_name = time() . 'video.' . $outline_pdf_ext;

                $outline_pdf_path = 'uploads/courses/outlines';
                $outline_pdf->move(public_path($outline_pdf_path), $outline_pdf_name);
                $course->outline_pdf = $outline_pdf_path . "/" . $outline_pdf_name;
            }
            
            $course->save();

            DB::commit();
            return redirect()->route('courses.index')->with('success', 'Course Created Successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Course Store Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', $th->getMessage());
            throw $th;
        }
    }
    
    public function editCourse($id)
    {
        $course = Courses::find($id);
        $trainers = Trainers::where('is_active', '1')->get();
        return view("adminpanel.courses.edit", compact('course','trainers'));
    }
    
    function updateCourse(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'coursename' => 'required|string|max:255',
            'slug' => 'required|string|unique:courses,slug,'.$id,
            'tagline' => 'required|string',
            'trainer_id' => 'required|exists:trainers,id',
            'difficulty' => 'required|string|max:255',
            'rating' => 'required|numeric|min:1|max:5',
            'duration' => 'required|integer|min:0',
            'sessions' => 'nullable|integer|min:0',
            'brouchure' => 'nullable|file|max:10240',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'video_url' => 'nullable|file|mimes:mp4,mov,avi,wmv|max:20240',
            'outline_pdf' => 'nullable|file|max:10240',
            'lump_sum_fee' => 'required|string|max:255',
            'zoho_id' => 'nullable|string|max:255',
            'overview' => 'required|string',
            'prerequisites' => 'required|string',
            'recommendation' => 'required|string',
            'outcomes' => 'required|array',
            'outcomes.*' => 'string',
            'meta_title' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            Log::error('Validation Error in updateRestaurantReview', [
                'errors' => $validator->errors()->toArray(),
                'input' => $request->all(),
            ]);
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', $validator->errors()->first());
        }

        try {
            DB::beginTransaction();
            $course = Courses::findOrFail($id);
            $course->coursename = $request->coursename;
            $course->slug = $request->slug;
            $course->tagline = $request->tagline;
            $course->trainer_id = $request->trainer_id;
            $course->difficulty = $request->difficulty;
            $course->rating = $request->rating;
            $course->duration = $request->duration;
            $course->sessions = $request->sessions ?? 0;
            $course->lump_sum_fee = $request->lump_sum_fee;
            $course->zoho_id = $request->zoho_id;
            $course->overview = $request->overview;
            $course->prerequisites = $request->prerequisites;
            $course->recommendation = $request->recommendation;
            $course->outcomes = json_encode($request->outcomes);
            $course->meta_title = $request->meta_title;
            $course->meta_description = $request->meta_description;
            $course->meta_keywords = $request->meta_keywords;
            
            if ($request->hasFile('brouchure')) {
                if (isset($course->image) && File::exists(public_path($course->image))) {
                    File::delete(public_path($course->image));
                }
                $brouchure = $request->file('brouchure');
                $brouchure_ext = $brouchure->getClientOriginalExtension();
                $brouchure_name = time() . '_brouchure.' . $brouchure_ext;

                $brouchure_path = 'uploads/courses/brouchures';
                $brouchure->move(public_path($brouchure_path), $brouchure_name);
                $course->image = $brouchure_path . "/" . $brouchure_name;
            }
            
            if ($request->hasFile('image_url')) {
                if (isset($course->image_url) && File::exists(public_path($course->image_url))) {
                    File::delete(public_path($course->image_url));
                }
                $image_url = $request->file('image_url');
                $image_url_ext = $image_url->getClientOriginalExtension();
                $image_url_name = time() . '_image.' . $image_url_ext;

                $image_url_path = 'uploads/courses/images';
                $image_url->move(public_path($image_url_path), $image_url_name);
                $course->image_url = $image_url_path . "/" . $image_url_name;
            }
            
            if ($request->hasFile('video_url') && $request->file('video_url')->isValid()) {

                if (isset($course->video_url) && File::exists(public_path($course->video_url))) {
                    File::delete(public_path($course->video_url));
                }
            
                $video = $request->file('video_url');
                $name = time() . '_video.' . $video->getClientOriginalExtension();
                $path = 'uploads/courses/videos';
            
                $video->move(public_path($path), $name);
                $course->video_url = $path . '/' . $name;
            }
            
            if ($request->hasFile('outline_pdf')) {
                if (isset($course->outline_pdf) && File::exists(public_path($course->outline_pdf))) {
                    File::delete(public_path($course->outline_pdf));
                }
                $outline_pdf = $request->file('outline_pdf');
                $outline_pdf_ext = $outline_pdf->getClientOriginalExtension();
                $outline_pdf_name = time() . 'video.' . $outline_pdf_ext;

                $outline_pdf_path = 'uploads/courses/outlines';
                $outline_pdf->move(public_path($outline_pdf_path), $outline_pdf_name);
                $course->outline_pdf = $outline_pdf_path . "/" . $outline_pdf_name;
            }
            
            $course->save();

            DB::commit();
            return redirect()->route('courses.index')->with('success', 'Course Updated Successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Course Updation Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', $th->getMessage());
            throw $th;
        }
    }
    
    public function updateStatus(string $id)
    {
        try {
            $course = Courses::findOrFail($id);
            $message = $course->is_active == '1' ? 'Course Deactivated Successfully' : 'Course Activated Successfully';
            if ($course->is_active == '1') {
                $course->is_active = '0';
                $course->save();
            } else {
                $course->is_active = '1';
                $course->save();
            }
            return redirect()->back()->with('success', $message);
        } catch (\Throwable $th) {
            Log::error('Course Status Updation Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', $th->getMessage());
            throw $th;
        }
    }

    function delete($id)
    {
        try {
            $course = Courses::findOrFail($id);
            $course->delete();
            return redirect()->back()->with('success', 'Course deleted successfully!');
        } catch (\Throwable $th) {
            Log::error('Course Deletion Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', $th->getMessage());
            throw $th;
        }
    }
    
    public function shuffleShow()
    {
        try {
            $courses = Courses::orderBy('position', 'asc')->get();
            return view('adminpanel.courses.shuffle', compact('courses'));
        } catch (\Throwable $th) {
            Log::error('Courses Shuffle Show Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', $th->getMessage());
            throw $th;
        }
    }
    public function shuffleStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'ids' => 'required|array',
            'ids.*' => 'exists:courses,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()->first(),
            ], 404);
        }
        try {
            foreach ($request->ids as $index => $courseId) {
                Courses::where('id', $courseId)->update(['position' => $index + 1]);
            }
            return response()->json([
                'success' => true,
                'message' => 'Courses Shuffled Successfully!',
            ], 200);
        } catch (\Throwable $th) {
            Log::error('Courses Shuffle Store Failed', ['error' => $th->getMessage()]);
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong! Please try again later',
            ], 404);
            throw $th;
        }
    }
    
    
    
    //Website
    public function coursesPage()
    {
        $data = Courses::where('is_active', '1')
            ->orderByRaw('CAST(position AS UNSIGNED) ASC')
            ->get();
        
        return view("website.courses.courses",["courses"=>$data]);
    }
    public function courseDetails($slug)
    {
        $course = Courses::where('is_active', '1')
            ->where('slug', $slug)
            ->first();
            
        $nextDate = Calendar::where('course_id', $course->id)
            ->where('is_active', '1')
            ->whereDate('class_date', '>=', Carbon::today())
            ->orderBy('class_date', 'asc')
            ->value('class_date');
    
        $nextBatchSchedule = $nextDate 
            ? Carbon::parse($nextDate)->format('d-M-Y') 
            : null;
        
        return view("website.courses.course-details", compact('course', 'nextBatchSchedule'));
    }
    
    
    
    
    public function index()
    {
        $data=Courses::all();
        return view("adminpanel.view-courses",["data"=>$data]);
    }
     function getCourses()
    {
        $courses = Courses::all();
        return response()->json($courses);
    }
    
    // function addcourses(Request $req)
    // {
    //     $Course= new Courses;
    //     $Course->coursename=$req->coursename;
    //     $Course->position=$req->position;
    //     $Course->duration=$req->duration;
    //     $Course->save();
    //     return redirect('add-course');
    // }

    public function CorporateLead() 
    {
        $data = LeadCorporate::orderBy('id', 'DESC')->get();

        return view('adminpanel.corporate_leadform', compact('data'));
    }
    
    public function bulkDelete(Request $request)
    {
        $ids = $request->ids;
    
        if (!$ids) {
            return back()->with('error', 'No records selected.');
        }
    
        LeadCorporate::whereIn('id', $ids)->delete();
    
        return back()->with('success', 'Selected records deleted successfully.');
    }

    public function Programshow()  
    {
        $programs = Program::orderBy("program_name","asc")->get();
        return view('adminpanel.program_name', compact('programs'));
    }

    public function ProgramStore(Request $req)  
    {
        // dd($req->all());
        Program::create([
            'program_name' => $req->program_name,
        ]);

        return redirect()->back();
        
    }

    function DeleteProgram($id)
    {
        $data= Program::find($id);
        $data->delete();
        return redirect()->back();
    }
    
    function show()
    {
        $data= Courses::orderBy("coursename","asc")->get();
        // return view('add-course', ['Courses'=>$data]);
        return view('adminpanel.add-course', compact('data'));
    }
    
    function editShowdata($id)
    {
        $Course= Courses::find($id);
        return view('adminpanel.edit', compact('Course'));
    }

    public function EditProgram($id)  
    {
        $program = Program::where('id', $id)->first();

        return view('adminpanel.edit_program', compact('program'));
    }

    
    public function UpdateProgram(Request $req, $id)  
    {
        Program::findOrFail($id)->update([
            'program_name' => $req->program_name
        ]);
        return redirect()->route('program.name');
    }

    function editCourses(Request $req, $id)
    {
        $Course= Courses::find($id);
        $Course->coursename=$req->coursename;
        $Course->position=$req->position;
        $Course->duration=$req->duration;
        $Course->save();
        return redirect('add-course');
    }
    
    public function logout($id)
    {
        return view('login-form.main-page', ['user' => User::findOrFail($id)]);
    }
    
    
    public function show_pdf()
    {
        $course = Courses::all();
        return view('adminpanel.add-brochure', compact('course'));
    }
    
    public function store_pdf(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required|exists:courses,id',
                'image' => 'required|file|mimes:pdf|max:500000',
            ]);
    
            $resource = Courses::find($request->title);
            if (!$resource) {
                return redirect()->route('add-brochure')->with('red', 'Invalid Course ID.');
            }
    
            if (!is_null($resource->image)) {
                return redirect()->route('add-brochure')->with('red', 'File already uploaded. Please delete it first.');
            }
    
            if ($request->hasFile('image')) {
                $file = $request->file('image');
            
                // Get only the file extension (e.g., 'pdf')
                $extension = $file->getClientOriginalExtension();
            
                // Create a short and unique filename using current timestamp
                $filename = time() . '.' . $extension;
            
                $destinationPath = public_path('img/yourexcel-img');
            
                // Ensure directory exists
                if (!file_exists($destinationPath)) {
                    mkdir($destinationPath, 0775, true);
                }
            
                // Move the uploaded file
                $file->move($destinationPath, $filename);
            
                // Save file path (short) in DB
                $resource->image = '/img/yourexcel-img/' . $filename;
                $resource->save();
            
                return redirect()->route('add-brochure')->with('success', 'File uploaded successfully.');
            }
    
    
    
            return redirect()->route('add-brochure')->with('red', 'No file was uploaded.');
    
        } catch (\Throwable $e) {
            Log::error('PDF Upload Error: ' . $e->getMessage());
            return redirect()->route('add-brochure')->with('red', 'Something went wrong. Check logs for more details.');
        }
    }

    public function delete_pdf($id)
    {
         $data= Courses::find($id);
         $data->image = null;
         $data->save();
        return redirect()->route('add-brochure')->with('del', 'File  Delete successfully');
    }
    
    //Courses

    public function advancedExcel()
    {
        $course= Courses::find(18);
        $nextDate = Calendar::where('course_id', $course->id)
            ->where('is_active', '1')
            ->whereDate('class_date', '>=', Carbon::today()) // only future dates
            ->orderBy('class_date', 'asc') // nearest first
            ->value('class_date'); // get only one date
    
        $nextBatchSchedule = $nextDate 
            ? Carbon::parse($nextDate)->format('d-M-Y') 
            : null;
        return view('website.courses.advanced-ms-excel', compact('nextBatchSchedule', 'course'));
    }
    
    public function dataScience()
    {
        $course= Courses::find(43);
        $nextDate = Calendar::where('course_id', $course->id)
            ->where('is_active', '1')
            ->whereDate('class_date', '>=', Carbon::today())
            ->orderBy('class_date', 'asc')
            ->value('class_date');
    
        $nextBatchSchedule = $nextDate 
            ? Carbon::parse($nextDate)->format('d-M-Y') 
            : null;
        return view('website.courses.data-science', compact('course','nextBatchSchedule'));
    }
    
    public function dashboardReportingBIApp()
    {
        $course = Courses::find(65);
        $nextDate = Calendar::where('course_id', $course->id)
            ->where('is_active', '1')
            ->whereDate('class_date', '>=', Carbon::today())
            ->orderBy('class_date', 'asc')
            ->value('class_date');
    
        $nextBatchSchedule = $nextDate 
            ? Carbon::parse($nextDate)->format('d-M-Y') 
            : null;
        return view('website.courses.dashboard-reporting-bi-app', compact('course','nextBatchSchedule'));
    }
    
    public function genAICourse()
    {
        $course = Courses::find(64);
        $nextDate = Calendar::where('course_id', $course->id)
            ->where('is_active', '1')
            ->whereDate('class_date', '>=', Carbon::today())
            ->orderBy('class_date', 'asc')
            ->value('class_date');
    
        $nextBatchSchedule = $nextDate 
            ? Carbon::parse($nextDate)->format('d-M-Y') 
            : null;
        return view('website.courses.genai-developer', compact('course','nextBatchSchedule'));
    }
    
    public function dashboardReportingPowerBI()
    {
        $course = Courses::find(34);
        $nextDate = Calendar::where('course_id', $course->id)
            ->where('is_active', '1')
            ->whereDate('class_date', '>=', Carbon::today())
            ->orderBy('class_date', 'asc')
            ->value('class_date');
    
        $nextBatchSchedule = $nextDate 
            ? Carbon::parse($nextDate)->format('d-M-Y') 
            : null;
        return view('website.courses.dashboard-reporting-powerbi', compact('course','nextBatchSchedule'));
    }

    public function financialModeling()
    {
        $course = Courses::find(31);
        $nextDate = Calendar::where('course_id', $course->id)
            ->where('is_active', '1')
            ->whereDate('class_date', '>=', Carbon::today())
            ->orderBy('class_date', 'asc')
            ->value('class_date');
    
        $nextBatchSchedule = $nextDate 
            ? Carbon::parse($nextDate)->format('d-M-Y') 
            : null;
        return view('website.courses.financial-modeling', compact('course','nextBatchSchedule'));
    }
    
    public function cyberSecurity()
    {
        $course = Courses::find(52);
        $nextDate = Calendar::where('course_id', $course->id)
            ->where('is_active', '1')
            ->whereDate('class_date', '>=', Carbon::today())
            ->orderBy('class_date', 'asc')
            ->value('class_date');
    
        $nextBatchSchedule = $nextDate 
            ? Carbon::parse($nextDate)->format('d-M-Y') 
            : null;
        return view('website.courses.cyber-security', compact('course','nextBatchSchedule'));
    }

    public function edukaanspecialist()
    {
        $course = Courses::find(55);
        $nextDate = Calendar::where('course_id', $course->id)
            ->where('is_active', '1')
            ->whereDate('class_date', '>=', Carbon::today())
            ->orderBy('class_date', 'asc')
            ->value('class_date');
    
        $nextBatchSchedule = $nextDate 
            ? Carbon::parse($nextDate)->format('d-M-Y') 
            : null;
        return view('website.courses.e-dukaan', compact('course','nextBatchSchedule'));
    }
    
    public function aiIntegratedOffice()
    {
        $course = Courses::find(62);
        $nextDate = Calendar::where('course_id', $course->id)
            ->where('is_active', '1')
            ->whereDate('class_date', '>=', Carbon::today())
            ->orderBy('class_date', 'asc')
            ->value('class_date');
    
        $nextBatchSchedule = $nextDate 
            ? Carbon::parse($nextDate)->format('d-M-Y') 
            : null;
         return view('website.courses.ms-office', compact('course','nextBatchSchedule'));
    }

    public function presentingWithImpact()
    {
        $course = Courses::find(51);
        $nextDate = Calendar::where('course_id', $course->id)
            ->where('is_active', '1')
            ->whereDate('class_date', '>=', Carbon::today())
            ->orderBy('class_date', 'asc')
            ->value('class_date');
    
        $nextBatchSchedule = $nextDate 
            ? Carbon::parse($nextDate)->format('d-M-Y') 
            : null;
        return view('website.courses.presentation-impact', compact('course','nextBatchSchedule'));
    }
    
    public function speakToLead()
    {
        $course = Courses::find(66);
        $nextDate = Calendar::where('course_id', $course->id)
            ->where('is_active', '1')
            ->whereDate('class_date', '>=', Carbon::today())
            ->orderBy('class_date', 'asc')
            ->value('class_date');
    
        $nextBatchSchedule = $nextDate 
            ? Carbon::parse($nextDate)->format('d-M-Y') 
            : null;
        return view('website.courses.speak-to-lead', compact('course','nextBatchSchedule'));
    }
    
    

    public function excelMastery()
    {
         $data= Courses::find(41);
        $pdf = $data->image;
        return view('website.course1', compact('pdf'));
    }

    public function sqlAnalytics()
    {
        
        // $data= Courses::find(46);
        // $pdf = $data->image;
        return view('website.course3');
    }
    public function financialModelingSelf()
    {
         $data= Courses::find(31);
        $pdf = $data->image;
        $calendars = Calendar::where('course_id', 31)
            ->where('is_active', '1')
            ->orderBy('class_date')
            ->pluck('class_date');
    
        $nextBatchSchedule = $calendars
            ->map(fn ($date) => Carbon::parse($date)->format('d-M-Y'))
            ->whenEmpty(fn () => null)
            ?->implode(', ');
        $programFee = $data->program_fee ?? null;
        $lumpSumFee = $data->lump_sum_fee ?? null;
        $outlinePdf = $data->outline_pdf ?? null;
        $videoURL = $data->video_url ?? null;
        return view('website.course15', compact('pdf','nextBatchSchedule', 'programFee', 'lumpSumFee', 'outlinePdf', 'videoURL'));
    }

    public function cit()
    {
         $data= Courses::find(49);
        $pdf = $data->image;
        return view('website.course6', compact('pdf'));
    }

    public function pythonDataAnalysis()
    {
         $data= Courses::find(47);
        //  dd($data);
        $pdf = $data->image ?? '';
        return view('website.course7', compact('pdf'));
    }

    public function pythonDataAnalysisAzure()
    {
         $data= Courses::find(61);
        //  dd($data);
        $pdf = $data->image ?? '';
        $nextDate = Calendar::where('course_id', 61)
            ->where('is_active', '1')
            ->whereDate('class_date', '>=', Carbon::today()) // only future dates
            ->orderBy('class_date', 'asc') // nearest first
            ->value('class_date'); // get only one date
    
        $nextBatchSchedule = $nextDate 
            ? Carbon::parse($nextDate)->format('d-M-Y') 
            : null;
        $programFee = $data->program_fee ?? null;
        $lumpSumFee = $data->lump_sum_fee ?? null;
        $outlinePdf = $data->outline_pdf ?? null;
        $videoURL = $data->video_url ?? null;
        return view('website.course17', compact('pdf','nextBatchSchedule', 'programFee', 'lumpSumFee', 'outlinePdf', 'videoURL'));
    }
    public function entrepreneurshipCourse()
    {
         $data= Courses::find(63);
        //  dd($data);
        $pdf = $data->image ?? '';
        $nextDate = Calendar::where('course_id', 63)
            ->where('is_active', '1')
            ->whereDate('class_date', '>=', Carbon::today()) // only future dates
            ->orderBy('class_date', 'asc') // nearest first
            ->value('class_date'); // get only one date
    
        $nextBatchSchedule = $nextDate 
            ? Carbon::parse($nextDate)->format('d-M-Y') 
            : null;
        $programFee = $data->program_fee ?? null;
        $lumpSumFee = $data->lump_sum_fee ?? null;
        $outlinePdf = $data->outline_pdf ?? null;
        $videoURL = $data->video_url ?? null;
        return view('website.courses.entrepreneurship', compact('pdf','nextBatchSchedule', 'programFee', 'lumpSumFee', 'outlinePdf', 'videoURL'));
    }

    public function taxManagement()
    {
         $data= Courses::find(21);
        $pdf = $data->image;
        $nextDate = Calendar::where('course_id', 21)
            ->where('is_active', '1')
            ->whereDate('class_date', '>=', Carbon::today()) // only future dates
            ->orderBy('class_date', 'asc') // nearest first
            ->value('class_date'); // get only one date
    
        $nextBatchSchedule = $nextDate 
            ? Carbon::parse($nextDate)->format('d-M-Y') 
            : null;
        $programFee = $data->program_fee ?? null;
        $lumpSumFee = $data->lump_sum_fee ?? null;
        $outlinePdf = $data->outline_pdf ?? null;
        $videoURL = $data->video_url ?? null;
        return view('website.course8', compact('pdf','nextBatchSchedule', 'programFee', 'lumpSumFee', 'outlinePdf', 'videoURL'));
    }

    public function visualizingExcelDashboardsPowerPoint()
    {
         $data= Courses::find(50);
        $pdf = $data->image;
        return view('website.course9', compact('pdf'));
    }
    public function newDataScience()
    {
        $data= Courses::find(43);
        $pdf = $data->image;
        $calendars = Calendar::where('course_id', 43)
            ->where('is_active', '1')
            ->orderBy('class_date')
            ->pluck('class_date');
    
        // $nextBatchSchedule = $calendars
        //     ->map(fn ($date) => Carbon::parse($date)->format('d-M-Y'))
        //     ->whenEmpty(fn () => null)
        //     ?->implode(', ');
        
        $nextDate = Calendar::where('course_id', 43)
            ->where('is_active', '1')
            ->whereDate('class_date', '>=', Carbon::today()) // only future dates
            ->orderBy('class_date', 'asc') // nearest first
            ->value('class_date'); // get only one date
    
        $nextBatchSchedule = $nextDate 
            ? Carbon::parse($nextDate)->format('d-M-Y') 
            : null;
        $programFee = $data->program_fee ?? null;
        $lumpSumFee = $data->lump_sum_fee ?? null;
        $outlinePdf = $data->outline_pdf ?? null;
        $videoURL = $data->video_url ?? null;
        return view('website.courses.data-science', compact('pdf','nextBatchSchedule', 'programFee', 'lumpSumFee', 'outlinePdf', 'videoURL'));
    }

    public function msFabric()
    {
         $data= Courses::find(45);
        $pdf = $data->image;
        return view('website.course11', compact('pdf'));
    }
     public function ComputerizedAccounting()
    {
        $data= Courses::find(44);
        $pdf = $data->image;
        $nextDate = Calendar::where('course_id', 44)
            ->where('is_active', '1')
            ->whereDate('class_date', '>=', Carbon::today()) // only future dates
            ->orderBy('class_date', 'asc') // nearest first
            ->value('class_date'); // get only one date
    
        $nextBatchSchedule = $nextDate 
            ? Carbon::parse($nextDate)->format('d-M-Y') 
            : null;
        $programFee = $data->program_fee ?? null;
        $lumpSumFee = $data->lump_sum_fee ?? null;
        $outlinePdf = $data->outline_pdf ?? null;
        $videoURL = $data->video_url ?? null;
        return view('website.course14', compact('pdf','nextBatchSchedule', 'programFee', 'lumpSumFee', 'outlinePdf', 'videoURL'));
    }
    
    
    //Admin Panel Add Program Fee
    function addProgramFee()
    {
        $entries= Courses::orderBy("coursename","asc")->get();
        // return view('add-course', ['Courses'=>$data]);
        return view('adminpanel.add-program-fee', compact('entries'));
    }
    
    function storeProgramFee(Request $request)
    {
        $request->validate([
            'course_id' => 'required|array',
            'course_id.*' => 'exists:courses,id',
            'program_fee' => 'required|array',
            'program_fee.*' => 'string|max:255',
            'lump_sum_fee' => 'required|array',
            'lump_sum_fee.*' => 'string|max:255',
        ]);
        
        for ($i = 0; $i < count($request->course_id); $i++) {
            $course = Courses::find($request->course_id[$i]); // ✅ FIXED
            if ($course) {
                $course->program_fee = $request->program_fee[$i];
                $course->lump_sum_fee = $request->lump_sum_fee[$i];
                $course->save();
            }
        }
        
        return redirect()->route('add.program-fee')->with('success', 'Entries added successfully!');
    }
    
    public function updateProgramFee(Request $request)
    {
        $request->validate([
            'course_id'   => 'required|exists:courses,id',
            'program_fee' => 'required|string|max:255',
            'lump_sum_fee'=> 'required|string|max:255',
        ]);
    
        $course = Courses::findOrFail($request->course_id);
    
        $course->program_fee  = $request->program_fee;
        $course->lump_sum_fee = $request->lump_sum_fee;
        $course->save();
    
        return response()->json([
            'status'  => true,
            'message' => 'Program fee updated successfully!'
        ]);
    }
}
