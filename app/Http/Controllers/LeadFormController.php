<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LeadForm;
use App\Models\LeadFromTwo;
use App\Models\Assesment;
use App\Models\CertificateRequest;
use App\Models\ScholarshipRequest;
use App\Models\OneMinuteFeedback;
use App\Models\OneMintFeedbackForm;
use App\Models\Program;
use App\Mail\ContactMail;
use Mail;
use Session;
use Auth;
use App\Http\Controllers\HomeController;
use App\Models\Courses;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Models\LeadCorporate;
use Carbon\Carbon;
use Yajra\DataTables\Facades\DataTables;

class LeadFormController extends Controller
{
    
    public function certificateRequests()
    {
        $data = CertificateRequest::get();
        return view('adminpanel.view-certificate-requests', compact('data'));
    }
    public function deleteCertificateRequest($id)
    {
        $certificateRequest = CertificateRequest::find($id);
        $certificateRequest->delete();
        return redirect()->route('admin.certificate-requests')->with('success', 'Certificate Request deleted successfully.');
    }
    
    public function certificateRequestbulkDelete(Request $request)
    {
        $ids = $request->ids;
    
        if (!$ids) {
            return back()->with('error', 'No records selected.');
        }
    
        CertificateRequest::whereIn('id', $ids)->delete();
    
        return back()->with('success', 'Selected records deleted successfully.');
    }
    public function scholarshipRequests()
    {
        $data = ScholarshipRequest::get();
        return view('adminpanel.view-scholarship-requests', compact('data'));
    }
    public function deleteScholarshipRequest($id)
    {
        $scholarshipRequest = ScholarshipRequest::find($id);
        $scholarshipRequest->delete();
        return redirect()->route('admin.scholarship-requests')->with('success', 'Scholarship Request deleted successfully.');
    }
    public function scholarshipRequestbulkDelete(Request $request)
    {
        $ids = $request->ids;
    
        if (!$ids) {
            return back()->with('error', 'No records selected.');
        }
    
        ScholarshipRequest::whereIn('id', $ids)->delete();
    
        return back()->with('success', 'Selected records deleted successfully.');
    }
    public function oneMinuteFeedbackForms()
    {
        // $data = OneMinuteFeedback::get();
        $data = OneMintFeedbackForm::get();
        return view('adminpanel.view-one-minute-feedbacks', compact('data'));
    }
    public function deleteOneMinuteFeedback($id)
    {
        $oneMinuteFeedback = OneMintFeedbackForm::find($id);
        $oneMinuteFeedback->delete();
        return redirect()->route('admin.one-minute-feedbacks')->with('success', 'One Minute Feedback deleted successfully.');
    }
    
    public function oneMinuteUpdateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:pending,resolved,no_action',
        ]);
    
        $feedback = OneMintFeedbackForm::findOrFail($id);
        $feedback->status = $request->status;
        $feedback->save();
    
        return response()->json(['success' => true]);
    }
    
    function getassest()
    {
        return view('website.assest');
    }
    function assesment(Request $req)
    {
        $leadform = new Assesment;

        $leadform->name = $req->name;
        $leadform->contact = $req->contact;
        $leadform->member = $req->member;
        $leadform->topic = $req->topic;
        $leadform->format = $req->format;
        $leadform->duration = $req->duration;
        $leadform->remark = $req->remark;

        $leadform->save();

        Session::flash('tna2025', 'Your Assessment Form Has Been Submitted Successfully !!');
        Session::flash('course', url('/courses'));
        return redirect()->back();
    }

    public function LeadCorporate(Request $req)
    {
        $req->validate([
            'g-recaptcha-response' => 'required',
        ]);

        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => '6LcCcgErAAAAAGSNCKqdrhJSuFA1vOjs-r--1Mje',
            'response' => $req['g-recaptcha-response'],
        ]);
        $data = $response->json();

        if (!$data['success']) {
            // Handle failure (e.g., show an error message)
            return redirect()->back()->withErrors(['captcha' => 'reCAPTCHA verification failed. Please try again.'])->with('error', 'reCaptcha Validation Error!');
        }
        try {
            $programName = 'Others';
            $programZohoId = 0000;
            $program = null;
    
            if ($req->program_id) {
                $program = Program::find($req->program_id);
                if ($program) {
                    $programName = $program->program_name;
                    $programZohoId = $program->zoho_id;
                }
            }
            // Insert data into the database
            LeadCorporate::create([
                'training_program_name' => $programName,
                'organization_name' => $req->organization_name,
                'approx_nominations' => $req->approx_nominations,
                'focal_contact_name' => $req->focal_contact_name,
                'focal_contact_number' => $req->focal_contact_number,
                'focal_contact_email' => $req->focal_contact_email,
                'remarks' => $req->remarks,
            ]);

            $accessToken = $this->fetchZohoAccessToken();

            $zohoData = [
                "data" => [
                    [
                        "Course" => $programZohoId ?? 0000,
                        "Organization_Name" => $req->organization_name ?? "N/A",
                        "Approx_No_Of_Nominations" => $req->approx_nominations ?? "N/A",
                        "Focal_Contact_Name" => $req->focal_contact_name ?? "N/A",
                        "Focal_Contact_Number" => $req->focal_contact_number ?? "N/A",
                        "Focal_Contact_Email" => $req->focal_contact_email ?? "N/A",
                        "Last_Name" => "N/A",
                        "Remarks" => $req->remarks ?? "N/A",
                        "Lead_Source" => "Corporate Enquiry",

                    ]
                ]
            ];

            // dd($accessToken);
            if (!is_array($accessToken)) {
                try {
                    $zohoResponse = Http::withHeaders([
                        "Authorization" => "Bearer $accessToken",
                        "Content-Type" => "application/json"
                    ])->post("https://www.zohoapis.com/crm/v7/Leads", $zohoData);


                    if (!$zohoResponse->successful()) {
                        // dd($zohoResponse->body());
                        \Log::error('Zoho API Error: ' . $zohoResponse->body());
                    }
                } catch (\Exception $e) {
                    \Log::error('Zoho API Exception: ' . $e->getMessage());
                }
            } else {
                \Log::error('Zoho Access Token Error: ' . json_encode($accessToken));
            }
    
            // Flash a success message to the session
            Session::flash('leadcorporate_success', 'Your Lead Corporate Form has been submitted successfully!');
            
            // 6. Send confirmation emails
            $emailData = [
                'training_program_name' => $programName,
                'organization_name' => $req->organization_name,
                'approx_nominations' => $req->approx_nominations,
                'focal_contact_name' => $req->focal_contact_name,
                'focal_contact_number' => $req->focal_contact_number,
                'focal_contact_email' => $req->focal_contact_email,
                'remarks' => $req->remarks,
            ];
    
            $recipients = [
                'farhanq@youexceltraining.com',
                'corporate@youexceltraining.com',
            ];
    
            foreach ($recipients as $email) {
                try {
                    Mail::send("emails.corporate-admin-mail", ["email_data" => $emailData], function ($message) use ($email, $req) {
                        $message->to($email, $req->name)
                            ->subject("New Corporate Enquiry Lead Submitted")
                            ->from("send@youexceltraining.com", "YouExcel Training");
                    });
                } catch (\Exception $e) {
                    \Log::error("Mail Error to $email: " . $e->getMessage());
                }
            }
    
        } catch (\Exception $e) {
            // Log the exception (optional)
            \Log::error('Error submitting Lead Corporate Form: ' . $e->getMessage());
    
            // Flash an error message to the session
            Session::flash('leadcorporate_error', 'Oops, something went wrong. Please try again later.');
        }
    
        // Redirect back to the form
        // return redirect()->back();
        return redirect()->route('thankyou')->with('success', 'Form Submitted Successfully!');
    }
    

    private function fetchZohoAccessToken()
    {
        $url = 'https://accounts.zoho.com/oauth/v2/token';

        $params = [
            'refresh_token' => '1000.ff08f6ec0e5ff50f8f21aba0a76bbd24.6b1c6e930d5926bef222c00b73281ec9',
            'client_id' => '1000.L2BP3SY8HGFW5Y55YSSGQZREXQCEZG',
            'client_secret' => 'd6e712a73fe0ba890234e948b086653e65d03dea51',
            'grant_type' => 'refresh_token',
        ];

        try {
            // Make the HTTP POST request to Zoho's token endpoint
            $response = Http::asForm()->post($url, $params);

            // Check if the response is successful
            if ($response->successful()) {
                $data = $response->json();
                return $data['access_token']; // Return the access token
            }

            // Handle non-successful responses
            return [
                'error' => true,
                'message' => $response->body(),
                'status' => $response->status(),
            ];
        } catch (\Exception $e) {
            // Catch and return any exceptions that occur
            return [
                'error' => true,
                'message' => $e->getMessage(),
            ];
        }
    }
    
    
    public function addregistration(Request $req)
    {
        try {
            // 1. Validate reCAPTCHA
            $req->validate([
                'g-recaptcha-response' => 'required',
            ]);
    
            $recaptchaResponse = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret' => env('RECAPTCHA_SECRET', '6LcCcgErAAAAAGSNCKqdrhJSuFA1vOjs-r--1Mje'),
                'response' => $req['g-recaptcha-response'],
            ])->json();
    
            if (!($recaptchaResponse['success'] ?? false)) {
                return redirect()->back()->withErrors(['captcha' => 'reCAPTCHA verification failed. Please try again.']);
            }
    
            // 2. Get course data
            $courseName = $req->coursesintrested_name ?? 'Others';
            $courseZohoId = 0000;
            $course = null;
    
            if ($req->course_id) {
                $course = Courses::find($req->course_id);
                if ($course) {
                    $courseName = $course->coursename;
                    $courseZohoId = $course->zoho_id;
                }
            }
    
            // 3. Check for duplicate submissions
            if ($course) {
                $existingEntry = LeadForm::where('Email', trim($req->email))
                    ->where('CoursesIntrested', trim($courseName))
                    ->orderBy('DateTime', 'desc')
                    ->first();
    
                if ($existingEntry && Carbon::now()->diffInHours($existingEntry->DateTime) < 24) {
                    return redirect()->back()->with('leadvalidafail', 'You can only submit this course again after 24 hours.');
                }
            }
    
            // 4. Save lead to DB
            $leadform = new LeadForm;
            $leadform->whatsapp = $req->whatsapp;
            $leadform->Name = $req->name;
            $leadform->Phone = $req->phone;
            $leadform->Email = $req->email;
            $leadform->city = $req->city;
            $leadform->CoursesIntrested = $courseName ?? 'Others';
            $leadform->Comments = $req->comments;
            $leadform->save();
    
            // 5. Send to Zoho
            $accessToken = $this->fetchZohoAccessToken();
    
            if (!is_array($accessToken)) {
                try {
                    $zohoPayload = [
                        "data" => [[
                            "Email"             => $req->email ?? "N/A",
                            "Complete_Address"  => $req->address ?? "N/A",
                            "Course"            => $courseZohoId ?? 0000,
                            "Contact_No"        => $req->phone ?? "N/A",
                            "City"              => $req->city ?? "N/A",
                            "First_Name"        => $req->name ?? "N/A",
                            "Last_Name"         => "N/A",
                            "WhatsApp_Number"   => $req->whatsapp ?? "N/A",
                            "Comments"          => $req->comments ?? "N/A",
                            "Lead_Source"       => "Enquiry Form",
                        ]]
                    ];
    
                    $zohoResponse = Http::withHeaders([
                        "Authorization" => "Bearer $accessToken",
                        "Content-Type"  => "application/json"
                    ])->post("https://www.zohoapis.com/crm/v7/Leads", $zohoPayload);
    
                    if (!$zohoResponse->successful()) {
                        \Log::error('Zoho API Error: ' . $zohoResponse->body());
                    }
                } catch (\Exception $e) {
                    \Log::error('Zoho API Exception: ' . $e->getMessage());
                }
            } else {
                \Log::error('Zoho Access Token Error: ' . json_encode($accessToken));
            }
    
            // 6. Send confirmation emails
            $emailData = [
                "name"              => $req->name,
                "coursesintrested"  => $req->coursesintrested,
            ];
    
            $recipients = [
                $req->email,
                'youexcel.connect@gmail.com',
            ];
    
            foreach ($recipients as $email) {
                try {
                    Mail::send("emails.Leadformmail", ["email_data" => $emailData], function ($message) use ($email, $req) {
                        $message->to($email, $req->name)
                            ->subject("Thanks for contacting YouExcel")
                            ->from("send@youexceltraining.com", "YouExcel Training");
                    });
                } catch (\Exception $e) {
                    \Log::error("Mail Error to $email: " . $e->getMessage());
                }
            }
    
            // 7. Set WhatsApp group link if matched
            $groupLinks = [
                'Excel Mastery'                            => 'https://chat.whatsapp.com/FwJviq20BlaGwV35eW5zv4',
                'Advanced Excel'                           => 'https://chat.whatsapp.com/BZPNHlRXzjtAyxnszSQhwN',
                'Dashboard Reporting Powerbi Analysis'     => 'https://chat.whatsapp.com/ItIaIY12UOj0U3jQm65Nth',
                'Sql Analytics'                            => 'https://chat.whatsapp.com/EywU3yz9xR2F9vr9xFHrSa',
                'Python Data Analysis'                     => 'https://chat.whatsapp.com/EywU3yz9xR2F9vr9xFHrSa',
                'Financial Modeling'                       => 'https://chat.whatsapp.com/GMGk16y41NrExVmqHUT6iE',
                'Tax Management'                           => 'https://chat.whatsapp.com/K3IIAq7xfloFyL4du4d5Wj',
                'Ai Integrated Office'                     => 'https://chat.whatsapp.com/EywU3yz9xR2F9vr9xFHrSa',
                'Cit'                                      => 'https://chat.whatsapp.com/EywU3yz9xR2F9vr9xFHrSa',
                'Visualizing Excel Dashboards Power Point' => 'https://chat.whatsapp.com/EywU3yz9xR2F9vr9xFHrSa',
                'Data Science'                             => 'https://chat.whatsapp.com/Dzv1B05ZMco1p3gXAF8k7G',
                'Ms Fabric'                                => 'https://chat.whatsapp.com/GtjGTMYBYBH6iw58hJBjqf',
                'Presenting With Impact'                   => 'https://chat.whatsapp.com/EywU3yz9xR2F9vr9xFHrSa',
                'Cyber Security'                           => 'https://chat.whatsapp.com/DVnnulrbkRqE7FFBct5cIx',
                'Computerized Accounting'                  => 'https://chat.whatsapp.com/Jr1vqkm4Erb3H3L4nA5VvM',
            ];
    
            if (array_key_exists($req->coursesintrested, $groupLinks)) {
                Session::flash('appoinmentt', $groupLinks[$req->coursesintrested]);
            }
    
            Session::flash('appoinmentbooked', 'Appoinment has been Successfully !!');
            return redirect()->route('thankyou')->with('success', 'Form Submitted Successfully!');
        } catch (\Exception $e) {
            \Log::error('addregistration() Fatal Error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An unexpected error occurred. Please try again later.');
        }
    }
    
    // public function handleEnquiry(Request $req)
    // {
    //     try {
    //         // 1. Validate reCAPTCHA
    //         $req->validate([
    //             'g-recaptcha-response' => 'required',
    //             'enquiry_type' => 'required|string',
    //         ]);
    
    //         $recaptchaResponse = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
    //             'secret'   => env('RECAPTCHA_SECRET', '6LcCcgErAAAAAGSNCKqdrhJSuFA1vOjs-r--1Mje'),
    //             'response' => $req['g-recaptcha-response'],
    //         ])->json();
    
    //         if (!($recaptchaResponse['success'] ?? false)) {
    //             return redirect()->back()->withErrors(['captcha' => 'reCAPTCHA verification failed. Please try again.']);
    //         }
    
    //         // === INDIVIDUAL LEARNER FLOW ===
    //         if ($req->enquiry_type === "individual") {
    
    //             // Course Data
    //             $courseName   = $req->coursesintrested_name ?? 'Others';
    //             $courseZohoId = 0000;
    //             $course       = null;
    
    //             if ($req->course_id) {
    //                 $course = Courses::find($req->course_id);
    //                 if ($course) {
    //                     $courseName   = $course->coursename;
    //                     $courseZohoId = $course->zoho_id;
    //                 }
    //             }
    
    //             // Check Duplicate Submissions
    //             if ($course) {
    //                 $existingEntry = LeadForm::where('Email', trim($req->email))
    //                     ->where('CoursesIntrested', trim($courseName))
    //                     ->orderBy('DateTime', 'desc')
    //                     ->first();
    
    //                 if ($existingEntry && Carbon::now()->diffInHours($existingEntry->DateTime) < 24) {
    //                     return redirect()->back()->with('leadvalidafail', 'You can only submit this course again after 24 hours.');
    //                 }
    //             }
    
    //             // Save Lead in DB
    //             $leadform = new LeadForm;
    //             $leadform->whatsapp         = $req->whatsapp;
    //             $leadform->Name             = $req->name;
    //             $leadform->Phone            = $req->phone;
    //             $leadform->Email            = $req->email;
    //             $leadform->city             = $req->city;
    //             $leadform->CoursesIntrested = $courseName ?? 'Others';
    //             $leadform->Comments         = $req->comments;
    //             $leadform->save();
    
    //             // Send to Zoho
    //             $accessToken = $this->fetchZohoAccessToken();
    //             if (!is_array($accessToken)) {
    //                 try {
    //                     $zohoPayload = [
    //                         "data" => [[
    //                             "Email"             => $req->email ?? "N/A",
    //                             "Complete_Address"  => $req->address ?? "N/A",
    //                             "Course"            => $courseZohoId ?? 0000,
    //                             "Contact_No"        => $req->phone ?? "N/A",
    //                             "City"              => $req->city ?? "N/A",
    //                             "First_Name"        => $req->name ?? "N/A",
    //                             "Last_Name"         => "N/A",
    //                             "WhatsApp_Number"   => $req->whatsapp ?? "N/A",
    //                             "Comments"          => $req->comments ?? "N/A",
    //                             "Lead_Source"       => "Enquiry Form",
    //                         ]]
    //                     ];
    
    //                     $zohoResponse = Http::withHeaders([
    //                         "Authorization" => "Bearer $accessToken",
    //                         "Content-Type"  => "application/json"
    //                     ])->post("https://www.zohoapis.com/crm/v7/Leads", $zohoPayload);
    
    //                     if (!$zohoResponse->successful()) {
    //                         \Log::error('Zoho API Error (Individual): ' . $zohoResponse->body());
    //                     }
    //                 } catch (\Exception $e) {
    //                     \Log::error('Zoho API Exception (Individual): ' . $e->getMessage());
    //                 }
    //             }
    
    //             // Send Emails
    //             $emailData = [
    //                 "name"              => $req->name,
    //                 "coursesintrested"  => $req->coursesintrested,
    //             ];
    
    //             $recipients = [$req->email, 'youexcel.connect@gmail.com'];
    
    //             foreach ($recipients as $email) {
    //                 try {
    //                     Mail::send("emails.Leadformmail", ["email_data" => $emailData], function ($message) use ($email, $req) {
    //                         $message->to($email, $req->name)
    //                             ->subject("Thanks for contacting YouExcel")
    //                             ->from("send@youexceltraining.com", "YouExcel Training");
    //                     });
    //                 } catch (\Exception $e) {
    //                     \Log::error("Mail Error to $email: " . $e->getMessage());
    //                 }
    //             }
    
    //             // WhatsApp Group Links
    //             $groupLinks = [
    //                 'Excel Mastery' => 'https://chat.whatsapp.com/FwJviq20BlaGwV35eW5zv4',
    //                 // ... other course links
    //             ];
    //             if (array_key_exists($req->coursesintrested, $groupLinks)) {
    //                 Session::flash('appoinmentt', $groupLinks[$req->coursesintrested]);
    //             }
    
    //             Session::flash('appoinmentbooked', 'Appointment has been Successfully !!');
    //         }
    
    //         // === CORPORATE FLOW ===
    //         // elseif ($req->enquiry_type === "corporate") {
    //         //     $courseName   = $req->coursesintrested_name ?? 'Others';
    //         //     $courseZohoId = 0000;
    //         //     $course       = null;
    
    //         //     if ($req->course_id) {
    //         //         $course = Courses::find($req->course_id);
    //         //         if ($course) {
    //         //             $courseName   = $course->coursename;
    //         //             $courseZohoId = $course->zoho_id;
    //         //         }
    //         //     }
    
    //         //     // Save Corporate Lead
    //         //     LeadCorporate::create([
    //         //         'training_program_name' => $courseName,
    //         //         'organization_name'     => $req->company_name,
    //         //         'approx_nominations'    => $req->participants,
    //         //         'focal_contact_name'    => $req->name,
    //         //         'focal_contact_number'  => $req->phone,
    //         //         'focal_contact_email'   => $req->email,
    //         //         'remarks'               => $req->comments,
    //         //     ]);
    
    //         //     // Send to Zoho
    //         //     $accessToken = $this->fetchZohoAccessToken();
    //         //     if (!is_array($accessToken)) {
    //         //         try {
    //         //             $zohoData = [
    //         //                 "data" => [[
    //         //                     "Course"                 => $programZohoId ?? 0000,
    //         //                     "Organization_Name"      => $req->company_name ?? "N/A",
    //         //                     "Approx_No_Of_Nominations" => $req->participants ?? "N/A",
    //         //                     "Focal_Contact_Name"     => $req->name ?? "N/A",
    //         //                     "Focal_Contact_Number"   => $req->phone ?? "N/A",
    //         //                     "Focal_Contact_Email"    => $req->email ?? "N/A",
    //         //                     "Last_Name"              => "N/A",
    //         //                     "Remarks"                => $req->comments ?? "N/A",
    //         //                     "Lead_Source"            => "Corporate Enquiry",
    //         //                 ]]
    //         //             ];
    
    //         //             $zohoResponse = Http::withHeaders([
    //         //                 "Authorization" => "Bearer $accessToken",
    //         //                 "Content-Type"  => "application/json"
    //         //             ])->post("https://www.zohoapis.com/crm/v7/Leads", $zohoData);
    
    //         //             if (!$zohoResponse->successful()) {
    //         //                 \Log::error('Zoho API Error (Corporate): ' . $zohoResponse->body());
    //         //             }
    //         //         } catch (\Exception $e) {
    //         //             \Log::error('Zoho API Exception (Corporate): ' . $e->getMessage());
    //         //         }
    //         //     }
    
    //         //     Session::flash('leadcorporate_success', 'Your Corporate Enquiry has been submitted successfully!');
    //         // }
    //         elseif ($req->enquiry_type === "corporate") {
    //             try {
    //                 // Default program
    //                 $programName   = 'Others';
    //                 $programZohoId = 0000;
    //                 $program       = null;
            
    //                 // If program_id is provided, fetch it
    //                 if ($req->course_id) {
    //                     $program = Courses::find($req->course_id);
    //                     if ($program) {
    //                         $programName   = $program->coursename;
    //                         $programZohoId = $program->zoho_id;
    //                     }
    //                 }
            
    //                 // Save Corporate Lead in DB
    //                 LeadCorporate::create([
    //                     'training_program_name' => $programName,
    //                     'organization_name'     => $req->company_name,
    //                     'approx_nominations'    => $req->participants,
    //                     'focal_contact_name'    => $req->name,
    //                     'focal_contact_number'  => $req->phone,
    //                     'focal_contact_email'   => $req->email,
    //                     'remarks'               => $req->comments,
    //                 ]);
            
    //                 // Get Zoho Access Token
    //                 $accessToken = $this->fetchZohoAccessToken();
            
    //                 if (!is_array($accessToken)) {
    //                     try {
    //                         // Prepare Zoho Data
    //                         $zohoData = [
    //                             "data" => [[
    //                                 "Course"                   => $programZohoId ?? 0000,
    //                                 "Organization_Name"        => $req->company_name ?? "N/A",
    //                                 "Approx_No_Of_Nominations" => $req->participants ?? "N/A",
    //                                 "Focal_Contact_Name"       => $req->name ?? "N/A",
    //                                 "Focal_Contact_Number"     => $req->phone ?? "N/A",
    //                                 "Focal_Contact_Email"      => $req->email ?? "N/A",
    //                                 "Last_Name"                => $req->name ?? "N/A", // Required in Zoho
    //                                 "Remarks"                  => $req->comments ?? "N/A",
    //                                 "Lead_Source"              => "Corporate Enquiry",
    //                             ]]
    //                         ];
            
    //                         // Send to Zoho
    //                         $zohoResponse = Http::withHeaders([
    //                             "Authorization" => "Bearer $accessToken",
    //                             "Content-Type"  => "application/json"
    //                         ])->post("https://www.zohoapis.com/crm/v7/Leads", $zohoData);
            
    //                         if (!$zohoResponse->successful()) {
    //                             \Log::error('Zoho API Error (Corporate): ' . $zohoResponse->body());
    //                         }
    //                     } catch (\Exception $e) {
    //                         \Log::error('Zoho API Exception (Corporate): ' . $e->getMessage());
    //                     }
    //                 } else {
    //                     \Log::error('Zoho Access Token Error: ' . json_encode($accessToken));
    //                 }
            
    //                 // Success message
    //                 Session::flash('leadcorporate_success', 'Your Corporate Enquiry has been submitted successfully!');
    //             } catch (\Exception $e) {
    //                 \Log::error('Corporate Lead Error: ' . $e->getMessage());
    //                 Session::flash('leadcorporate_error', 'Oops, something went wrong. Please try again later.');
    //             }
    //         }

    
    //         return redirect()->route('thankyou')->with('success', 'Form Submitted Successfully!');
    //     } catch (\Exception $e) {
    //         \Log::error('handleEnquiry() Fatal Error: ' . $e->getMessage());
    //         return redirect()->back()->with('error', 'An unexpected error occurred. Please try again later.');
    //     }
    // }
    
    // public function handleEnquiry(Request $req)
    // {
        
    //     try {
    //         // 1. Validate reCAPTCHA
    //         $req->validate([
    //             'g-recaptcha-response' => 'required',
    //             'enquiry_type' => 'required|string',
    //         ]);
    
    //         $recaptchaResponse = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
    //             'secret'   => env('RECAPTCHA_SECRET', '6LcCcgErAAAAAGSNCKqdrhJSuFA1vOjs-r--1Mje'),
    //             'response' => $req['g-recaptcha-response'],
    //         ])->json();
    
    //         if (!($recaptchaResponse['success'] ?? false)) {
    //             return redirect()->back()
    //                 ->withErrors(['captcha' => 'reCAPTCHA verification failed. Please try again.']);
    //         }
    
    //         // ======= PREPARE DATA =======
    //         $courseName   = 'Others';
    //         $courseZohoId = 0000;
    //         if ($req->course_id) {
    //             $course = Courses::find($req->course_id);
    //             if ($course) {
    //                 $courseName   = $course->coursename;
    //                 $courseZohoId = $course->zoho_id;
    //             }
    //         }
    
    //         // ======= SAVE IN DB =======
    //         if ($req->enquiry_type === "individual") {
    //             // Save individual lead
    //             LeadForm::create([
    //                 'whatsapp'         => $req->whatsapp,
    //                 'Name'             => $req->name,
    //                 'Phone'            => $req->phone,
    //                 'Email'            => $req->email,
    //                 'city'             => $req->city,
    //                 'CoursesIntrested' => $courseName,
    //                 'Comments'         => $req->comments,
    //             ]);
    //         } else {
    //             // Save corporate lead
    //             LeadCorporate::create([
    //                 'training_program_name' => $courseName,
    //                 'organization_name'     => $req->company_name,
    //                 'approx_nominations'    => $req->participants,
    //                 'focal_contact_name'    => $req->name,
    //                 'focal_contact_number'  => $req->phone,
    //                 'focal_contact_email'   => $req->email,
    //                 'remarks'               => $req->comments,
    //             ]);
    //         }
    
    //         // ======= COMMON ZOHO PAYLOAD =======
    //         $zohoPayload = [
    //             "Email"            => $req->email ?? "N/A",
    //             "Contact_No"       => $req->phone ?? "N/A",
    //             "City"             => $req->city ?? "N/A",
    //             "First_Name"       => $req->name ?? "N/A",
    //             "Last_Name"        => "N/A",
    //             "WhatsApp_Number"  => $req->whatsapp ?? "N/A",
    //             "Comments"         => $req->comments ?? "N/A",
    //             "Course"           => $courseZohoId ?? 0000,
    //         ];
    
    //         // ======= ADD EXTRA FIELDS BASED ON TYPE =======
    //         if ($req->enquiry_type === "individual") {
    //             $zohoPayload = array_merge($zohoPayload, [
    //                 "Lead_Source" => "Enquiry Form",
    //                 "Complete_Address" => $req->city ?? "N/A",
    //                 "Qualification" => "N/A",
    //                 "Job_Designation" => "N/A",
    //                 "Employer_Name" => "N/A",
    //                 "CNIC" => "N/A",
    //                 "Country_Name" => "Pakistan",
    //                 "Father_Husband_s_Name" => "N/A",
    //                 "Date_of_Birth" => null,
    //                 "Last_Education" => "N/A",
    //                 "Preferred_Timing_Tentative" => [],
    //                 "Department" => "Open Enrollments",
    //             ]);
    //         } else {
    //             $zohoPayload = array_merge($zohoPayload, [
    //                 "Lead_Source"              => "Corporate Enquiry",
    //                 "Organization_Name"        => $req->company_name ?? "N/A",
    //                 "Approx_No_Of_Nominations" => $req->participants ?? "N/A",
    //                 "Focal_Contact_Name"       => $req->name ?? "N/A",
    //                 "Focal_Contact_Number"     => $req->phone ?? "N/A",
    //                 "Focal_Contact_Email"      => $req->email ?? "N/A",
    //                 "Remarks"                  => $req->comments ?? "N/A",
    //                 "Department" => "Corporate",
    //             ]);
    //         }
    
    //         // ======= SEND TO ZOHO ONCE =======
    //         $accessToken = $this->fetchZohoAccessToken();
    //         if (!is_array($accessToken)) {
    //             $searchResponse = Http::withHeaders([
    //                 "Authorization" => "Bearer $accessToken"
    //             ])->get("https://www.zohoapis.com/crm/v7/Leads/search", [
    //                 'phone' => $req->phone
    //             ]);
        
    //             \Log::info('Zoho: Search Response', [
    //                 'status' => $searchResponse->status(),
    //                 'body'   => $searchResponse->body()
    //             ]);
        
    //             $searchData = $searchResponse->json();
        
    //             // ----------------------------------------
    //             // ðŸ§© STEP 6: Create or Update
    //             // ----------------------------------------
    //             if (isset($searchData['data']) && count($searchData['data']) > 0) {
    //                 // Found â†’ Update first match
    //                 $leadId = $searchData['data'][0]['id'];
    //                 \Log::info('Zoho: Lead found. Updating.', ['lead_id' => $leadId]);
        
    //                 $updateResponse = Http::withHeaders([
    //                     "Authorization" => "Bearer $accessToken",
    //                     "Content-Type" => "application/json"
    //                 ])->put("https://www.zohoapis.com/crm/v7/Leads/{$leadId}", [
    //                     'data' => [$zohoPayload]
    //                 ]);
        
    //                 if (!$updateResponse->successful()) {
    //                     \Log::error('Zoho Update Error', [
    //                         'status' => $updateResponse->status(),
    //                         'body'   => $updateResponse->body()
    //                     ]);
    //                 } else {
    //                     \Log::info('Zoho: Lead updated successfully.', ['response' => $updateResponse->json()]);
    //                 }
        
    //             } else {
    //                 // Not Found â†’ Create new
    //                 \Log::info('Zoho: No lead found. Creating new one.');
        
    //                 $createResponse = Http::withHeaders([
    //                     "Authorization" => "Bearer $accessToken",
    //                     "Content-Type"  => "application/json",
    //                 ])->post("https://www.zohoapis.com/crm/v7/Leads", [
    //                     "data" => [$zohoPayload]
    //                 ]);
        
    //                 if (!$createResponse->successful()) {
    //                     \Log::error('Zoho Create Error', [
    //                         'status' => $createResponse->status(),
    //                         'body'   => $createResponse->body()
    //                     ]);
    //                 } else {
    //                     \Log::info('Zoho: Lead created successfully.', ['response' => $createResponse->json()]);
    //                 }
    //             }
    //         }
    //         // if (!is_array($accessToken)) {
    //         //     $response = Http::withHeaders([
    //         //         "Authorization" => "Bearer $accessToken",
    //         //         "Content-Type"  => "application/json",
    //         //     ])->post("https://www.zohoapis.com/crm/v7/Leads", [
    //         //         "data" => [$zohoPayload]
    //         //     ]);
    
    //         //     if (!$response->successful()) {
    //         //         Log::error('Zoho API Error: ' . $response->body());
    //         //     }
    //         // }
    
    //         return redirect()->route('thankyou')->with('success', 'Form Submitted Successfully!');
    //     } catch (\Exception $e) {
    //         Log::error('handleEnquiry() Fatal Error: ' . $e->getMessage());
    //         return redirect()->back()->with('error', 'An unexpected error occurred. Please try again later.');
    //     }
    // }
    
    public function handleEnquiry(Request $req)
    {
        try {
            // 1. Validate reCAPTCHA
            $req->validate([
                'g-recaptcha-response' => 'required',
                'enquiry_type' => 'required|string',
            ]);
    
            $recaptchaResponse = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret'   => env('RECAPTCHA_SECRET', '6LcCcgErAAAAAGSNCKqdrhJSuFA1vOjs-r--1Mje'),
                'response' => $req['g-recaptcha-response'],
            ])->json();
    
            if (!($recaptchaResponse['success'] ?? false)) {
                return redirect()->back()
                    ->withErrors(['captcha' => 'reCAPTCHA verification failed. Please try again.']);
            }
    
            // ======= PREPARE DATA =======
            $courseName   = 'Others';
            $courseZohoId = 0000;
            if ($req->course_id) {
                $course = Courses::find($req->course_id);
                if ($course) {
                    $courseName   = $course->coursename;
                    $courseZohoId = $course->zoho_id;
                }
            }
    
            // ======= SAVE IN DB =======
            if ($req->enquiry_type === "individual") {
                LeadForm::create([
                    'whatsapp'         => $req->whatsapp,
                    'Name'             => $req->name,
                    'Phone'            => $req->phone,
                    'Email'            => $req->email,
                    'city'             => $req->city,
                    'CoursesIntrested' => $courseName,
                    'Comments'         => $req->comments,
                ]);
            } else {
                LeadCorporate::create([
                    'training_program_name' => $courseName,
                    'organization_name'     => $req->company_name,
                    'approx_nominations'    => $req->participants,
                    'focal_contact_name'    => $req->name,
                    'focal_contact_number'  => $req->phone,
                    'focal_contact_email'   => $req->email,
                    'remarks'               => $req->comments,
                ]);
            }
    
            // ======= ZOHO PAYLOAD =======
            $zohoPayload = [
                "Email"            => $req->email ?? "N/A",
                "Contact_No"       => $req->phone ?? "N/A",
                "City"             => $req->city ?? "N/A",
                "First_Name"       => $req->name ?? "N/A",
                "Last_Name"        => "N/A",
                "WhatsApp_Number"  => $req->whatsapp ?? "N/A",
                "Comments"         => $req->comments ?? "N/A",
                "Course"           => $courseZohoId ?? 0000,
            ];
    
            if ($req->enquiry_type === "individual") {
                $zohoPayload = array_merge($zohoPayload, [
                    "Lead_Source" => "Enquiry Form",
                    "Complete_Address" => $req->city ?? "N/A",
                    "Qualification" => "N/A",
                    "Job_Designation" => "N/A",
                    "Employer_Name" => "N/A",
                    "CNIC" => "N/A",
                    "Country_Name" => "Pakistan",
                    "Father_Husband_s_Name" => "N/A",
                    "Date_of_Birth" => null,
                    "Last_Education" => "N/A",
                    "Preferred_Timing_Tentative" => [],
                    "Department" => "Open Enrollments",
                ]);
            } else {
                $zohoPayload = array_merge($zohoPayload, [
                    "Lead_Source"              => "Corporate Enquiry",
                    "Organization_Name"        => $req->company_name ?? "N/A",
                    "Approx_No_Of_Nominations" => $req->participants ?? "N/A",
                    "Focal_Contact_Name"       => $req->name ?? "N/A",
                    "Focal_Contact_Number"     => $req->phone ?? "N/A",
                    "Focal_Contact_Email"      => $req->email ?? "N/A",
                    "Remarks"                  => $req->comments ?? "N/A",
                    "Department" => "Corporate",
                ]);
            }
    
            // ======= DIRECT CREATE IN ZOHO =======
            $accessToken = $this->fetchZohoAccessToken();
    
            if (!is_array($accessToken)) {
                $createResponse = Http::withHeaders([
                    "Authorization" => "Bearer $accessToken",
                    "Content-Type"  => "application/json",
                ])->post("https://www.zohoapis.com/crm/v7/Leads", [
                    "data" => [$zohoPayload]
                ]);
    
                if (!$createResponse->successful()) {
                    \Log::error('Zoho Create Error', [
                        'status' => $createResponse->status(),
                        'body'   => $createResponse->body()
                    ]);
                } else {
                    \Log::info('Zoho: Lead created successfully.', [
                        'response' => $createResponse->json()
                    ]);
                }
            }
    
            return redirect()->route('thankyou')->with('success', 'Form Submitted Successfully!');
        } catch (\Exception $e) {
            \Log::error('handleEnquiry() Fatal Error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An unexpected error occurred. Please try again later.');
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

//         if($req->course_id){
//             $course = Courses::find($req->course_id);
//             $courseName = $course->coursename;
//             $courseZohoId = $course->zoho_id;
//         }else{
//             $courseName = $req->coursesintrested_name;
//             $courseZohoId = 0000;
//         }
//         // $courses = Courses::where('duration', $req->coursesintrested)->first();
        
//         if($course){

//             // Check for duplicate email and course combination
//             $existingEntry = LeadForm::where('Email', trim($req->email))
//             ->where('CoursesIntrested', trim($courseName))
//             ->orderBy('DateTime', 'desc')
//             ->first();
        

//             if ($existingEntry) {
//                 $timeDifference = Carbon::now()->diffInHours($existingEntry->DateTime);

//                 if ($timeDifference < 24) {
//                     // Flash error to session if less than 24 hours
//                     // return redirect()->back()->with('error', 'You can only submit this course again after 24 hours.');
//                     return redirect()->back()->with('leadvalidafail', 'You can only submit this course again after 24 hours.');
//                 }
//             }
//         }
        


        

//         $accessToken = $this->fetchZohoAccessToken();
//         // dd($accessToken, $courses->coursename);
//         $leadform = new LeadForm;

//         $leadform->whatsapp = $req->whatsapp;
//         $leadform->Name = $req->name;
//         $leadform->Phone = $req->phone;
//         $leadform->Email = $req->email;
//         $leadform->city = $req->city;
//         $leadform->CoursesIntrested = $courseName ?? 'Others';
//         $leadform->Comments = $req->comments;
//         $leadform->save();

//         $zohoData = [
//             "data" => [
//                 [
//                     "Email" => $req->email ?? "N/A", // done
//                     "Complete_Address" => $req->address ?? "N/A",
//                     // "Course" => $req->coursesintrested ?? 0000, // Assuming $req->cfma contains the course value
//                     "Course" => $courseZohoId ?? 0000, // Assuming $req->cfma contains the course value
//                     "Contact_No" => $req->phone ?? "N/A", // done
//                     "City" => $req->city ?? "N/A", // done
//                     "First_Name" => $req->name ?? "N/A", // done
//                     "Last_Name" => "N/A",
//                     "WhatsApp_Number" => $req->whatsapp ?? "N/A", // done
//                     "Comments" => $req->comments ?? "N/A", // done
//                     "Lead_Source" => "Enquiry Form", // Default value
                
//                 ]
//             ]
//         ];
        
//             if (!is_array($accessToken)) {
//                 try {
//                     $zohoResponse = Http::withHeaders([
//                         "Authorization" => "Bearer $accessToken",
//                         "Content-Type" => "application/json"
//                     ])->post("https://www.zohoapis.com/crm/v7/Leads",$zohoData);
        
                 
//                     if (!$zohoResponse->successful()) {
//                         // dd($zohoResponse->body());
//                         \Log::error('Zoho API Error: ' . $zohoResponse->body());
//                     }
                
                
//                 } catch (\Exception $e) {
//                     \Log::error('Zoho API Exception: ' . $e->getMessage());
//                 }
//             } else {
//                 \Log::error('Zoho Access Token Error: ' . json_encode($accessToken));
//             }



        
//         $details = [
//             'name' => $req->name,
//             'phone' => $req->phone,
//             'email' => $req->email,
//             'coursesintrested' => $req->coursesintrested,
//             'comments' => $req->comments
//         ];


//         $datamail = $req->all();
//         $datamail = [
//             "name" => $req->name,
//             "coursesintrested" => $req->coursesintrested,
//         ];


//         $to_name = $req->name;
//         $to_email = $req->email;
//         $to_email_one = 'info@youexceltraining.com';
//         $to_email_two = 'youexceltraining@gmail.com';
//         $to_email_three = 'youexcel.connect@gmail.com';
//         $to_email_four = 'muneera.amer@youexceltraining.com';

//         Mail::send("emails.Leadformmail", ["email_data" => $datamail], function ($message) use ($to_name, $to_email, $req) {
//             $message->to($to_email, $to_name)->subject("Thanks for contacting YouExcel");
//             $message->from("send@youexceltraining.com", "YouExcel Training");
//         });

// //        Mail::send("emails.Leadformmail", ["email_data" => $datamail], function ($message) use ($to_name, $to_email_one, $req) {
// //            $message->to($to_email_one, $to_name)->subject("Thanks for contacting YouExcel");
// //            $message->from("info@youexceltraining.com", "YouExcel Training");
// //        });
// //        Mail::send("emails.Leadformmail", ["email_data" => $datamail], function ($message) use ($to_name, $to_email_two, $req) {
// //            $message->to($to_email_two, $to_name)->subject("Thanks for contacting YouExcel");
// //            $message->from("info@youexceltraining.com", "YouExcel Training");
// //        });
//         Mail::send("emails.Leadformmail", ["email_data" => $datamail], function ($message) use ($to_name, $to_email_three, $req) {
//             $message->to($to_email_three, $to_name)->subject("Thanks for contacting YouExcel");
//             $message->from("send@youexceltraining.com", "YouExcel Training");
//         });
// //        Mail::send("emails.Leadformmail", ["email_data" => $datamail], function ($message) use ($to_name, $to_email_four, $req) {
// //            $message->to($to_email_four, $to_name)->subject("Thanks for contacting YouExcel");
// //            $message->from("info@youexceltraining.com", "YouExcel Training");
// //        });

//         Session::flash('appoinmentbooked', 'Appoinment has been Successfully !!');
//     $grp=[
//     'Excel Mastery' => 'https://chat.whatsapp.com/FwJviq20BlaGwV35eW5zv4',

//     'Advanced Excel' => 'https://chat.whatsapp.com/BZPNHlRXzjtAyxnszSQhwN',

//     'Dashboard Reporting Powerbi Analysis' => 'https://chat.whatsapp.com/ItIaIY12UOj0U3jQm65Nth',

//     'Sql Analytics' => 'https://chat.whatsapp.com/EywU3yz9xR2F9vr9xFHrSa',

//     'Python Data Analysis' => 'https://chat.whatsapp.com/EywU3yz9xR2F9vr9xFHrSa',

//     'Financial Modeling' => 'https://chat.whatsapp.com/GMGk16y41NrExVmqHUT6iE',

//     'Tax Management' => 'https://chat.whatsapp.com/K3IIAq7xfloFyL4du4d5Wj',

//     'Ai Integrated Office' => 'https://chat.whatsapp.com/EywU3yz9xR2F9vr9xFHrSa',

//     'Cit' => 'https://chat.whatsapp.com/EywU3yz9xR2F9vr9xFHrSa',

//     'Visualizing Excel Dashboards Power Point' => 'https://chat.whatsapp.com/EywU3yz9xR2F9vr9xFHrSa',

//     'Data Science' => 'https://chat.whatsapp.com/Dzv1B05ZMco1p3gXAF8k7G',

//     'Ms Fabric' => 'https://chat.whatsapp.com/GtjGTMYBYBH6iw58hJBjqf',

//     'Presenting With Impact' => 'https://chat.whatsapp.com/EywU3yz9xR2F9vr9xFHrSa',

//     'Cyber Security' => 'https://chat.whatsapp.com/DVnnulrbkRqE7FFBct5cIx',

//     'Computerized Accounting' => 'https://chat.whatsapp.com/Jr1vqkm4Erb3H3L4nA5VvM'
//     ];
//     $coursesInterested = $req->coursesintrested;
//     $matchedUrls = [];

//     if (array_key_exists($coursesInterested, $grp)) {
//         $url = $grp[$coursesInterested];
//         // echo "Course: $coursesInterested - URL: $url<br>";
//             Session::flash('appoinmentt', $url);
//     }


//         // Mail::to($req)->send(new ContactMail($details));
//         // Mail::to('youexceltraining@gmail.com')->send(new ContactMail($details));
//         // $leadform->save();
//         // Session::flash('appoinmentbooked','Appoinment has been Successfully !!');
//         // return redirect('/home');
//         return redirect()->route('thankyou')->with('success', 'Form Submitted Successfully!');
//     }









    function nomanformcustom(Request $req)
    {
        // dd($req->all());
        
        $leadform = new LeadFromTwo;

        $leadform->gender = $req->gender;
        $leadform->area = $req->area;
        $leadform->Name = $req->name;
        $leadform->Phone = $req->phone;
        $leadform->Email = $req->email;
        $leadform->CoursesIntrested = $req->coursesintrested;
        $leadform->Comments = $req->comments;
           $leadform->type = "navttc";


    // $leadform->coursesintrested = $req->coursesintrested;
    $leadform->coursesintrestedsecond = $req->coursesintrestedsecond;
     $leadform->coursesintrestedthird = $req->coursesintrestedthird;
    $leadform->class_timing = $req->class_timing;
    $leadform->cnic = $req->cnic;
    $leadform->city = $req->city;
    $leadform->address = $req->address;
      $leadform->fcnic = $req->fcnic;
         $leadform->education = $req->education;
    
        $details = [
            'name' => $req->name,
            'phone' => $req->phone,
            'email' => $req->email,
            'coursesintrested' => $req->coursesintrested,
            'comments' => $req->comments
        ];

        $leadform->save();

        $datamail = $req->all();
        $datamail = [
            "name" => $req->name,
            "coursesintrested" => $req->coursesintrested,
        ];


        $to_name = $req->name;
        $to_email = $req->email;
        $to_email_one = 'info@youexceltraining.com';
        $to_email_two = 'youexceltraining@gmail.com';
        $to_email_three = 'youexcel.connect@gmail.com';
        $to_email_four = 'muneera.amer@youexceltraining.com';

        Mail::send("emails.Leadformmailcustom", ["email_data" => $datamail], function ($message) use ($to_name, $to_email, $req) {
            $message->to($to_email, $to_name)->subject("Thanks for contacting YouExcel");
            $message->from("send@youexceltraining.com", "YouExcel Training");
        });

//        Mail::send("emails.Leadformmailcustom", ["email_data" => $datamail], function ($message) use ($to_name, $to_email_one, $req) {
//            $message->to($to_email_one, $to_name)->subject("Thanks for contacting YouExcel");
//            $message->from("info@youexceltraining.com", "YouExcel Training");
//        });
//        Mail::send("emails.Leadformmailcustom", ["email_data" => $datamail], function ($message) use ($to_name, $to_email_two, $req) {
//            $message->to($to_email_two, $to_name)->subject("Thanks for contacting YouExcel");
//            $message->from("info@youexceltraining.com", "YouExcel Training");
//        });
        Mail::send("emails.Leadformmailcustom", ["email_data" => $datamail], function ($message) use ($to_name, $to_email_three, $req) {
            $message->to($to_email_three, $to_name)->subject("Thanks for contacting YouExcel");
            $message->from("send@youexceltraining.com", "YouExcel Training");
        });
//        Mail::send("emails.Leadformmailcustom", ["email_data" => $datamail], function ($message) use ($to_name, $to_email_four, $req) {
//            $message->to($to_email_four, $to_name)->subject("Thanks for contacting YouExcel");
//            $message->from("info@youexceltraining.com", "YouExcel Training");
//        });
// dd($req->all());
        Session::flash('appoinmentbooked', 'Appoinment has been Successfully !!');

        // Mail::to($req)->send(new ContactMail($details));
        // Mail::to('youexceltraining@gmail.com')->send(new ContactMail($details));
        // $leadform->save();
        // Session::flash('appoinmentbooked','Appoinment has been Successfully !!');
        return redirect('/');
    }
    function nomanformcustomBBS(Request $req)
    {
        $leadform = new LeadForm;

        $leadform->Name = $req->name;
        $leadform->Phone = $req->phone;
        $leadform->Email = $req->email;
        $leadform->CoursesIntrested = $req->coursesintrested;
        $leadform->Comments = $req->comments;

        $details = [
            'name' => $req->name,
            'phone' => $req->phone,
            'email' => $req->email,
            'coursesintrested' => $req->coursesintrested,
            'comments' => $req->comments
        ];

        $leadform->save();

        $datamail = $req->all();
        $datamail = [
            "name" => $req->name,
            "coursesintrested" => $req->coursesintrested,
        ];


        $to_name = $req->name;
        $to_email = $req->email;
        $to_email_one = 'info@youexceltraining.com';
        $to_email_two = 'youexceltraining@gmail.com';
        $to_email_three = 'youexcel.connect@gmail.com';
        $to_email_four = 'muneera.amer@youexceltraining.com';

        Mail::send("emails.LeadformmailcustomBBS", ["email_data" => $datamail], function ($message) use ($to_name, $to_email, $req) {
            $message->to($to_email, $to_name)->subject("Thanks for contacting YouExcel");
            $message->from("send@youexceltraining.com", "YouExcel Training");
        });

//        Mail::send("emails.LeadformmailcustomBBS", ["email_data" => $datamail], function ($message) use ($to_name, $to_email_one, $req) {
//            $message->to($to_email_one, $to_name)->subject("Thanks for contacting YouExcel");
//            $message->from("info@youexceltraining.com", "YouExcel Training");
//        });
//        Mail::send("emails.LeadformmailcustomBBS", ["email_data" => $datamail], function ($message) use ($to_name, $to_email_two, $req) {
//            $message->to($to_email_two, $to_name)->subject("Thanks for contacting YouExcel");
//            $message->from("info@youexceltraining.com", "YouExcel Training");
//        });
        Mail::send("emails.LeadformmailcustomBBS", ["email_data" => $datamail], function ($message) use ($to_name, $to_email_three, $req) {
            $message->to($to_email_three, $to_name)->subject("Thanks for contacting YouExcel");
            $message->from("send@youexceltraining.com", "YouExcel Training");
        });
//        Mail::send("emails.LeadformmailcustomBBS", ["email_data" => $datamail], function ($message) use ($to_name, $to_email_four, $req) {
//            $message->to($to_email_four, $to_name)->subject("Thanks for contacting YouExcel");
//            $message->from("info@youexceltraining.com", "YouExcel Training");
//        });

        Session::flash('appoinmentbooked', 'Appoinment has been Successfully !!');

        // Mail::to($req)->send(new ContactMail($details));
        // Mail::to('youexceltraining@gmail.com')->send(new ContactMail($details));
        // $leadform->save();
        // Session::flash('appoinmentbooked','Appoinment has been Successfully !!');
        return redirect('/');
    }
    
    
    public function showtableNavttcData()
    {
        $data = LeadForm::where("type","navttc")->get();
        return view('adminpanel.view-Navttc-data', compact('data'));
    }

    // function showtable()
    // {
    //     $data = LeadForm::where("type",null)->orderBy("id","desc")->get();
    //     // $data = LeadForm::all();
    //     // dd($data);
    //     // return view('add-course', ['Courses'=>$data]);
    //     return view('adminpanel.view-Leadform', compact('data'));
    // }
    
    public function showtable(Request $request)
    {
        if ($request->ajax()) {
            try {
                $data = LeadForm::where("type", null)->orderBy("id", "desc");
    
                // ✅ table assign karo
                $table = DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('select', fn($row) => '<input type="checkbox" name="items[]" value="'.$row->id.'">');
    
                // ✅ permission check
                if (auth()->user()->can('delete lead form')) {
                    $table->addColumn('action', function($row) {
                        return '<a class="btn btn-danger delete-confirm" href="view-Leadform/'.$row->id.'">
                                    <i class="fas fa-trash-alt"></i>
                                </a>';
                    });
                }
    
                // ✅ raw columns dynamic
                $rawColumns = ['select'];
    
                if (auth()->user()->can('delete lead form')) {
                    $rawColumns[] = 'action';
                }
    
                // ✅ return
                return $table->rawColumns($rawColumns)->make(true);
    
            } catch (\Exception $e) {
                return response()->json(['error' => $e->getMessage()]);
            }
        }
    
        return view('adminpanel.view-Leadform');
    }
       function showtables()
    {
        $data = LeadFromTwo::where("type",'navttc')->orderBy("id","desc")->get();
        // $data = LeadForm::all();
        // dd($data);
        // return view('add-course', ['Courses'=>$data]);
        return view('adminpanel.view-navttcdfrom', compact('data'));
    }

    public function navttcformBulkDelete(Request $request)
    {
        $ids = $request->ids;
    
        if (!$ids) {
            return back()->with('error', 'No records selected.');
        }
    
        LeadFromTwo::whereIn('id', $ids)->delete();
    
        return back()->with('success', 'Selected records deleted successfully.');
    }
    function delete($id)
    {
        $data = LeadForm::find($id);
        $data->delete();
        return redirect('view-Leadform');
    }
    
    function deleteCorporateForm($id)
    {
        $data = LeadCorporate::find($id);
        $data->delete();
        return redirect()->route('corporate.leadform')->with('success', 'Lead Corporate Form deleted successfully.');
    }

    public function oneMinuteMultiDelete(Request $request)
    {
        // dd($request->all());
        // Delete the selected items
        OneMintFeedbackForm::destroy($request->items);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Selected items deleted successfully.');
    }
    
    public function leadmultiDelete(Request $request)
    {
        // dd($request->all());
        // Delete the selected items
        LeadForm::destroy($request->items);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Selected items deleted successfully.');
    }
    
    public function exportCsv()
    {
        $fileName = 'leadForm.csv';

        // Select all rows you want
        $registers = LeadForm::select(
            'whatsapp',
            'Name',
            'Phone',
            'Email',
            'city',
            'CoursesIntrested',
            'Comments',
            'DateTime'
        )->get();

        $headers = [
            "Content-Type" => "text/csv",
            "Content-Disposition" => "attachment; filename=\"$fileName\"",
        ];

        $columns = [
            'Whatsapp',
            'Name',
            'Phone',
            'Email',
            'City',
            'Course',
            'Comments',
            'DateTime'
        ];

        $callback = function() use ($registers, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($registers as $row) {
                fputcsv($file, [
                    $row->whatsapp,
                    $row->Name,
                    $row->Phone,
                    $row->Email,
                    $row->city,
                    $row->CoursesIntrested,
                    $row->Comments,
                    $row->DateTime, // virtual column
                ]);
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
    
    public function exportExcel()
    {
        $fileName = 'leadForm.xls';
    
        $registers = LeadForm::select(
            'whatsapp',
            'Name',
            'Phone',
            'Email',
            'city',
            'CoursesIntrested',
            'Comments',
            'DateTime'
        )->get();
    
        $headers = [
            "Content-Type" => "application/vnd.ms-excel",
            "Content-Disposition" => "attachment; filename=\"$fileName\"",
        ];
    
        $callback = function() use ($registers) {
            echo '<table border="1">';
            echo '<tr>';
            echo '<th>Whatsapp</th>';
            echo '<th>Name</th>';
            echo '<th>Phone</th>';
            echo '<th>Email</th>';
            echo '<th>City</th>';
            echo '<th>Course</th>';
            echo '<th>Comments</th>';
            echo '<th>DateTime</th>';
            echo '</tr>';
    
            foreach ($registers as $row) {
                echo '<tr>';
                echo '<td>'.$row->whatsapp.'</td>';
                echo '<td>'.$row->Name.'</td>';
                echo '<td>'.$row->Phone.'</td>';
                echo '<td>'.$row->Email.'</td>';
                echo '<td>'.$row->city.'</td>';
                echo '<td>'.$row->CoursesIntrested.'</td>';
                echo '<td>'.$row->Comments.'</td>';
                echo '<td>'.$row->DateTime.'</td>';
                echo '</tr>';
            }
    
            echo '</table>';
        };
    
        return response()->stream($callback, 200, $headers);
    }

}
