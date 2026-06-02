<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CareerForm;
use App\Models\CareerPosition;
use App\Mail\ContactMail;
use Mail;
use Session;
use Auth;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class CareerFormController extends Controller
{
    function addregistration(Request $req)
    {
        try {
            // Validate reCAPTCHA
            $req->validate([
                'g-recaptcha-response' => 'required',
            ]);
    
            // Verify reCAPTCHA with Google
            try {
                $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                    'secret' => '6LcCcgErAAAAAGSNCKqdrhJSuFA1vOjs-r--1Mje',
                    'response' => $req['g-recaptcha-response'],
                ]);
                $data = $response->json();
    
                if (!$data['success']) {
                    return redirect()->back()->withErrors(['captcha' => 'reCAPTCHA verification failed.']);
                }
            } catch (\Exception $e) {
                Log::error('reCAPTCHA verification failed: ' . $e->getMessage());
                return back()->withErrors(['captcha' => 'reCAPTCHA verification error.']);
            }
    
            // Create and save CareerForm
            $careerform = new CareerForm;
    
            // Handle file upload
            $fileName = null;

            if ($req->hasFile('filee')) {
                try {
                    $file = $req->file('filee');
                    $fileName = md5(time()) . '.' . $file->getClientOriginalExtension();
                    $file->move(public_path('/files/'), $fileName);
                    $careerform->Image = $fileName;
                } catch (\Exception $e) {
                    Log::error('File upload failed: ' . $e->getMessage());
                    return back()->withErrors(['filee' => 'File upload failed.']);
                }
            }
    
            // Fill other fields
            $careerform->Fullname = $req->fullname;
            $careerform->Cellno = $req->cellno;
            $careerform->Email = $req->email;
            $careerform->city = $req->city;
            $careerform->linkedin = $req->linkedin;
            $careerform->PositionApplyingFor = $req->applyfor;
            $careerform->Coverletter = $req->coverletter;
    
            // Save to database
            try {
                $careerform->save();
            } catch (\Exception $e) {
                Log::error('Database save failed: ' . $e->getMessage());
                return back()->withErrors(['save' => 'Could not save form data.']);
            }
    
            // Prepare email data
            $email_data = [
                "name" => $req->fullname,
                "cfma" => $req->cfma ?? '',
                "cellno" => $req->cellno ?? '',
                "position" => $req->applyfor,
                "coverletter" => $req->coverletter,
            ];
    
            $to_name = $req->fullname;
            $to_email = $req->email;
            $to_email_one = 'career@youexceltraining.com';
    
            $subject = "Application Received – YouExcel Careers";
            $adminSubject = "New Career Request Received";
    
            // Send email to applicant and internal address
            try {
                Mail::send("emails.career-user-mail", ["email_data" => $email_data], function ($message) use ($subject, $to_name, $to_email) {
                    $message->to($to_email, $to_name)->subject($subject);
                    $message->from("support@youexceltraining.com", "Youexcel");
                });
    
                Mail::send("emails.career-admin-mail", ["email_data" => $email_data], function ($message) use ($adminSubject, $to_name, $to_email_one, $fileName) {
                    $message->to($to_email_one, $to_name)->subject($adminSubject);
                    $message->from("support@youexceltraining.com", "Youexcel");
                
                    $filePath = public_path('/files/' . $fileName);
                    if (file_exists($filePath)) {
                        $message->attach($filePath, [
                            'as' => 'Resume_' . $to_name . '.' . pathinfo($filePath, PATHINFO_EXTENSION),
                            'mime' => mime_content_type($filePath),
                        ]);
                    }
                });

            } catch (\Exception $e) {
                Log::error('Email sending failed: ' . $e->getMessage());
                // return back()->withErrors(['email' => 'Failed to send confirmation email.']);
            }
    
            Session::flash('appoinmentbooked', 'Thank you for applying !!');
            return redirect()->route('thankyou')->with('success', 'Form Submitted Successfully!');
        } catch (\Throwable $e) {
            // Catch any other unexpected errors
            Log::error('Unexpected error in CareerFormController@addregistration: ' . $e->getMessage());
            return back()->withErrors(['unexpected' => 'Something went wrong. Please try again later.']);
        }
    }
//     function addregistration(Request $req)
//     {
//         $req->validate([
//             'g-recaptcha-response' => 'required',
//         ]);

//         $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
//             'secret' => '6LcCcgErAAAAAGSNCKqdrhJSuFA1vOjs-r--1Mje',
//             'response' => $req['g-recaptcha-response'],
//         ]);
//         $data = $response->json();

//         if (!$data['success']) {
//             // Handle failure (e.g., show an error message)
//             return redirect()->back()->withErrors(['captcha' => 'reCAPTCHA verification failed. Please try again.']);
//         }
//         $careerform = new CareerForm;
//         if ($req->file('filee')) {
//             $file = $req->file('filee');
//             // foreach ($request->file('images') as $index => $file) {
//             $fileOriginalName = $file->getClientOriginalName();
//             $extension = $file->getClientOriginalExtension();
//             $fileName = md5(time()) . '.' . $extension;
//             $file->move(public_path() . '/files/', $fileName);
// //                $file->storeAs('careerimg/', $fileName);
//             // }
//             $careerform->Image = $fileName;
//         }

//         $careerform->Fullname = $req->fullname;
//         $careerform->Cellno = $req->cellno;
//         $careerform->Email = $req->email;
//         $careerform->PositionApplyingFor = $req->applyfor;
//         $careerform->Coverletter = $req->coverletter;

//         $details = [
//             'name' => $req->fullname,
//             'phone' => $req->phone,
//             'email' => $req->email,
//             'coursesintrested' => $req->coursesintrested,
//             'comments' => $req->comments
//         ];

//         $careerform->save();

//         $data = $req->all();
//         $data = [
//             "name" => $req->fullname,
//             "cfma" => $req->cfma,
//             "position" => $req->applyfor,
//         ];


//         $to_name = $req->fullname;
//         $to_email = $req->email;
//         $to_email_one = 'career@youexceltraining.com';
// //        $to_email_two = 'youexceltraining@gmail.com';
// //        $to_email_three = 'youexcel.connect@gmail.com';
// //        $to_email_four = 'muneera.amer@youexceltraining.com';

// //        dd("Done");

//         $subj="Thank you for applying for." .$req->applyfor ."at YouExcel";

//         Mail::send("emails.ContactMail", ["email_data" => $data], function ($message) use ($subj,$to_name, $to_email, $req) {
//             $message->to($to_email, $to_name)->subject($subj);
//             $message->from("support@youexceltraining.com", "Youexcel");
//         });

//         Mail::send("emails.ContactMail", ["email_data" => $data], function ($message) use ($subj,$to_name, $to_email_one, $req) {
//             $message->to($to_email_one, $to_name)->subject($subj);
//             $message->from("support@youexceltraining.com", "Youexcel");
//         });


//         Session::flash('appoinmentbooked', 'Thank you for applying !!');
//         // return redirect('/Careers');
//         return redirect()->route('thankyou')->with('success', 'Form Submitted Successfully!');

//         // Mail::to($req)->send(new ContactMail($details));
//         // Mail::to('youexceltraining@gmail.com')->send(new ContactMail($details));
//         // $careerform->save();
//         // Session::flash('appoinmentbooked','Appoinment has been Successfully !!');
//         // return redirect('/Careers');
//     }

    function showtable()
    {
        $data = CareerForm::all();
        // return view('add-course', ['Courses'=>$data]);
        return view('adminpanel.view-careers', compact('data'));
    }
    function websiteCareerForm()
    {
        $positions = CareerPosition::where('status', '1')->get();
        // return view('add-course', ['Courses'=>$data]);
        return view('website.pages.careers', compact('positions'));
    }

    function delete($id)
    {
        $data = CareerForm::find($id);
        $data->delete();
        return redirect('view-careers');
    }
    
    public function bulkDelete(Request $request)
    {
        $ids = $request->ids;
    
        if (!$ids) {
            return back()->with('error', 'No records selected.');
        }
    
        CareerForm::whereIn('id', $ids)->delete();
    
        return back()->with('success', 'Selected records deleted successfully.');
    }

}
