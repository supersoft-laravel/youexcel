<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DemoConfirmation;
use App\Models\Courses;
use App\Models\OneMintFeedbackForm;
use Session;
use App\Models\DemoCourse;
use App\Models\Calendar;
use Illuminate\Support\Facades\Http;
use Mail;
use Yajra\DataTables\Facades\DataTables;

class DemoConfirmationController extends Controller
{
    public function DemoConfirmation($calendarId = null) 
    {
        if($calendarId){
            
            $singleCalendar = Calendar::where('is_active', '1')->where('id', $calendarId)->firstOrFail();
            $demoCourse = DemoCourse::get();
            return view("website.pages.forms.demo-confirm", compact('demoCourse','singleCalendar'));
        }else{
            
            $calendars = Calendar::where('is_active', '1')->orderBy('d_date', 'ASC')->get();
            $demoCourse = DemoCourse::get();
            return view("website.pages.forms.demo-confirm", compact('demoCourse','calendars')); // Passes course name to view
        }
        
    }

    public function StoreDemoConfirmation(Request $request)
    {
        $request->validate([
            'g-recaptcha-response' => 'required',
        ]);

        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => '6LcCcgErAAAAAGSNCKqdrhJSuFA1vOjs-r--1Mje',
            'response' => $request['g-recaptcha-response'],
        ]);
        $data = $response->json();

        if (!$data['success']) {
            // Handle failure (e.g., show an error message)
            return redirect()->back()->withErrors(['captcha' => 'reCAPTCHA verification failed. Please try again.']);
        }
        DemoConfirmation::create([
            'email' => $request->email,
            'name' => $request->name,
            'whatsapp' => $request->whatsapp,
            'demo' => $request->demo,
            'mode_of_attend' => $request->mode_of_attend,
        ]);
        
        // Email data
        $datamail = [
            "name" => $request->name,
            "email" => $request->email,
            "whatsapp" => $request->whatsapp,
            "demo" => $request->demo,
            "mode_of_attend" => $request->mode_of_attend,
        ];
        
        $to_name = $request->name;
        $user_email = $request->email;

        // Send to user
        Mail::send("emails.demo-mail", ["email_data" => $datamail], function ($message) use ($to_name, $user_email) {
            $message->to($user_email, $to_name)
                    ->subject("YouExcel Demo Confirmation")
                    ->from("info@youexceltraining.com", "YouExcel Training");
        });

        // Send to internal team
        $internal_emails = [
            // 'farhanq@youexceltraining.com',
            'youexcel.connect@gmail.com',
            'naveed.alam@youexceltraining',
        ];

        foreach ($internal_emails as $internal_email) {
            Mail::send("emails.demo-mail-admin", ["email_data" => $datamail], function ($message) use ($to_name, $internal_email) {
                $message->to($internal_email, $to_name)
                        ->subject("New Demo Confirmation Form Submission")
                        ->from("info@youexceltraining.com", "YouExcel Training");
            });
        }
    
        // Set flash message for success
        Session::flash('democonfirm', 'Your demo confirmation has been submitted successfully!!');
    
        // return redirect()->back();
        return redirect()->route('thankyou')->with('success', 'Form Submitted Successfully!');
    }
    
    
    // function viewDemoConfirmForm()
    // {
    //     try {
    //         $data = DemoConfirmation::orderBy('id','DESC')->get();
    //         return view('adminpanel.view-demo-confirm', compact('data'));
    //     } catch (\Throwable $th) {
    //         //throw $th;
    //         return redirect()->back()->with(['error' => $th->getMessage()]);
    //     }
    // }
    
    public function viewDemoConfirmForm(Request $request)
    {
        if ($request->ajax()) {
            try {
                $data = DemoConfirmation::orderBy('id', 'desc');
    
                // ✅ table assign karo
                $table = DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('select', fn($row) => '<input type="checkbox" name="ids[]" value="'.$row->id.'" class="rowCheckbox">');
    
                // ✅ permission check
                if (auth()->user()->can('delete demo confirmation form')) {
                    $table->addColumn('action', function($row) {
                        return '<a class="btn btn-danger delete-confirm" href="'.route('demo.form.delete', $row->id).'">
                                    <i class="fas fa-trash-alt"></i>
                                </a>';
                    });
                }
    
                // ✅ raw columns dynamic
                $rawColumns = ['select'];
    
                if (auth()->user()->can('delete demo confirmation form')) {
                    $rawColumns[] = 'action';
                }
    
                // ✅ return
                return $table->rawColumns($rawColumns)->make(true);
    
            } catch (\Throwable $th) {
                return response()->json(['error' => $th->getMessage()]);
            }
        }
    
        return view('adminpanel.view-demo-confirm');
    }

    public function viewDemoConfirmFormDelete($id)
    {
        try {
            DemoConfirmation::findOrFail($id)->delete();
            return redirect()->back()->with(['success' => 'Demo form entry deleted successfully!']);
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with(['error' => $th->getMessage()]);
        }
    }






    // 

    public function OneMintFeedForm() 
    {
        $courses = Courses::orderBy("coursename","asc")->get();
        
        return view("website.one-mint-feed-form", compact('courses')); // Passes course name to view
        
    }


    public function StoreOneMintFeedForm(Request $request)
    {

        // dd($request->all());

        $selectedCourses = $request->input('course');

        // Store the validated data in the database using the `create` method
        OneMintFeedbackForm::create([
            'course' => implode(', ', $selectedCourses),
            'batch_no' => $request->batch_no,
            'name' => $request->name,
            'session_date' => $request->session_date,
            'email' => $request->email,
            'session_time' => $request->session_time,
            'topics_relevance' => $request->topics_relevance,
            'content_clarity' => $request->content_clarity,
            'facilities_provided' => $request->facilities_provided,
            'training_success' => $request->training_success,
            'remarks' => $request->remarks
        ]);

        // Redirect or return a response

        Session::flash('OneMintFeedBackForm', 'One Minute Feedback Form submitted successfully!');


        // return redirect()->back();
        return redirect()->route('thankyou')->with('success', 'Form Submitted Successfully!');
    }
    
    //Alumni Form
    public function alumniFeedForm() 
    {
        // dd('kk');
        $courses = Courses::orderBy("coursename","asc")->get();
        return view("website.alumni-feed-form", compact('courses')); // Passes course name to view
    }

    public function StoreAlumniFeedForm(Request $request)
    {
        // Validate the request data
        $request->validate([
            'suggested_courses' => 'required|string|max:255',
            'training_consultancy' => 'required|string',
            'preferred_training_mode' => 'required|string|max:255',
            'trainer_rating' => 'required|integer|min:1|max:10',
            'most_critical_factor' => 'required|string',
            'overall_experience' => 'required|integer|min:1|max:10',
            'recommendation' => 'required|in:Yes,No',
        ]);

        // Store the validated data in the database using the `create` method
        AlumniFeedbackForm::create([
            'suggested_courses' => $request->suggested_courses,
            'training_consultancy' => $request->training_consultancy,
            'preferred_training_mode' => $request->preferred_training_mode,
            'trainer_rating' => $request->trainer_rating,
            'most_critical_factor' => $request->most_critical_factor,
            'overall_experience' => $request->overall_experience,
            'recommendation' => $request->recommendation,
        ]);

        // Flash success message
        Session::flash('AlumniFeedBackForm', 'Alumni Feedback Form submitted successfully!');

        // Redirect back
        // return redirect()->back();
        return redirect()->route('thankyou')->with('success', 'Form Submitted Successfully!');
    }
    
    
    public function bulkDelete(Request $request)
    {
        $ids = $request->ids;
    
        if (!$ids) {
            return back()->with('error', 'No records selected.');
        }
    
        DemoConfirmation::whereIn('id', $ids)->delete();
    
        return back()->with('success', 'Selected records deleted successfully.');
    }
    
    public function exportCsv()
    {
        $fileName = 'demo.csv';

        // Select all rows you want
        $registers = DemoConfirmation::select(
            'name',
            'email',
            'whatsapp',
            'demo',
            'mode_of_attend',
            'created_at'
        )->get();

        $headers = [
            "Content-Type" => "text/csv",
            "Content-Disposition" => "attachment; filename=\"$fileName\"",
        ];

        $columns = [
            'Name',
            'Email',
            'Whatsapp',
            'Programme',
            'Mode of Attend',
            'Submit At',
        ];

        $callback = function() use ($registers, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($registers as $row) {
                fputcsv($file, [
                    $row->name,
                    $row->email,
                    $row->whatsapp,
                    $row->demo,
                    $row->mode_of_attend,
                    $row->created_at->format('d M Y'),
                ]);
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
    
    public function exportExcel()
    {
        $fileName = 'demo.xls';
    
        $registers = DemoConfirmation::select(
            'name',
            'email',
            'whatsapp',
            'demo',
            'mode_of_attend',
            'created_at'
        )->get();
    
        $headers = [
            "Content-Type" => "application/vnd.ms-excel",
            "Content-Disposition" => "attachment; filename=\"$fileName\"",
        ];
    
        $callback = function() use ($registers) {
            echo '<table border="1">';
            echo '<tr>';
            echo '<th>Name</th>';
            echo '<th>Email</th>';
            echo '<th>Whatsapp</th>';
            echo '<th>Programme</th>';
            echo '<th>Mod of Attend</th>';
            echo '<th>Submit At</th>';
            echo '</tr>';
    
            foreach ($registers as $row) {
                echo '<tr>';
                echo '<td>'.$row->name.'</td>';
                echo '<td>'.$row->email.'</td>';
                echo '<td>'.$row->whatsapp.'</td>';
                echo '<td>'.$row->demo.'</td>';
                echo '<td>'.$row->mode_of_attend.'</td>';
                echo '<td>'.$row->created_at->format('d M Y').'</td>';
                echo '</tr>';
            }
    
            echo '</table>';
        };
    
        return response()->stream($callback, 200, $headers);
    }
}
