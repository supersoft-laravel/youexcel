<?php

namespace App\Http\Controllers;
use App\Models\Courses;
use App\Models\TrustedCompany;
use App\Models\Program;
use App\Models\RecognizedLogo;
use App\Models\Application;
use App\Models\SupportForm;
use App\Models\OneMinuteFeedback;
use App\Models\CertificateRequest;
use App\Models\ScholarshipRequest;
use App\Models\Newsletter;
use Session;
use Mail;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }
    
    public function home()
    {
        $courses = Courses::where('is_active', '1')
            ->orderByRaw('CAST(position AS UNSIGNED) ASC')
            ->get();
        return view('website.pages.home', compact('courses'));
    }
    
    public function affiliations()
    {
        $recogLogos = RecognizedLogo::where('is_active', '1')
            ->orderByRaw('CAST(position AS UNSIGNED) ASC')
            ->get();
        return view('website.pages.affiliations', compact('recogLogos'));
    }

    function showtable()
    {
        $data = SupportForm::all();
        // return view('add-course', ['Courses'=>$data]);
        return view('adminpanel.view-Supportform', compact('data'));
    }

    function delete($id)
    {
        $data = SupportForm::find($id);
        $data->delete();
        return redirect('view-Suppotform');
    }
    
    public function subscribeNewsletter(Request $request)
    {
        $email = $request->input('newsletter-email');
    
        if (!$email) {
            return back()->with('error', 'Please Enter the email to get subscribed.');
        }
    
        $newsletter = new Newsletter();
        $newsletter->email = $email;
        $newsletter->save();
    
        return back()->with('success', 'You Successfully Subscribed to Newsletters.');
    }
    
    public function suppotFormBulkDelete(Request $request)
    {
        $ids = $request->ids;
    
        if (!$ids) {
            return back()->with('error', 'No records selected.');
        }
    
        SupportForm::whereIn('id', $ids)->delete();
    
        return back()->with('success', 'Selected records deleted successfully.');
    }
    
      public function trainer_profiles()
    {
        return view("website.trainer-profiles");
    }
    
      public function thankYou()
    {
        return view("website.thank-you");
    }
      public function certificateForm()
    {
        $courses=Courses::orderBy("coursename","asc")->get();
        return view("website.certificate-form", compact('courses'));
    }
    
    public function certificateSubmit(Request $req)
    {
        $req->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:255',
            'course_name' => 'required|string|max:255',
            'batch_number' => 'required|string|max:100',
            'delivery_mode' => 'required|in:On-campus,Courier',
            'delivery_option' => 'nullable|string',
            'payment_screenshot' => 'nullable|image|max:2048',
            'g-recaptcha-response' => 'required',
        ]);
    
        try {
            // Verify reCAPTCHA
            $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret' => '6LcCcgErAAAAAGSNCKqdrhJSuFA1vOjs-r--1Mje',
                'response' => $req['g-recaptcha-response'],
            ]);
    
            if (!($response->json()['success'] ?? false)) {
                return back()->withErrors(['captcha' => 'reCAPTCHA verification failed. Please try again.']);
            }
    
            // Save to database
            $certificate = new CertificateRequest();
            $certificate->full_name = $req->full_name;
            $certificate->email = $req->email;
            $certificate->phone = $req->phone;
            $certificate->course_name = $req->course_name;
            $certificate->batch_number = $req->batch_number;
            $certificate->delivery_mode = $req->delivery_mode;
            $certificate->delivery_option = $req->delivery_option;
            $certificate->zc_gad = $req->zc_gad ?? null;
    
            // Handle file upload
            if ($req->hasFile('payment_screenshot')) {
                $file = $req->file('payment_screenshot');
                $filename = time() . '_' . $file->getClientOriginalName();
                $destination = public_path('uploads/certificates');
                $file->move($destination, $filename);
                $certificate->payment_screenshot = 'uploads/certificates/' . $filename;
            }
    
            $certificate->save();
    
            // Email data
            $email_data = [
                "full_name" => $req->full_name,
                "email" => $req->email,
                "phone" => $req->phone,
                "course_name" => $req->course_name,
                "batch_number" => $req->batch_number,
                "delivery_mode" => $req->delivery_mode,
                "delivery_option" => $req->delivery_option,
            ];
    
            $to_name = $req->full_name;
            $user_email = $req->email;
    
            // Send to user
            Mail::send("emails.certificate-mail", ["email_data" => $email_data], function ($message) use ($to_name, $user_email) {
                $message->to($user_email, $to_name)
                        ->subject("Certificate Collection/Delivery Request Received – YouExcel")
                        ->from("info@youexceltraining.com", "YouExcel Training");
            });
    
            // Send to internal team
            $internal_emails = [
                'support@youexceltraining.com',
                'shaikhaliyan.hussain@youexceltraining.com',
            ];
    
            foreach ($internal_emails as $internal_email) {
                Mail::send("emails.certificate-mail-admin", ["email_data" => $email_data], function ($message) use ($to_name, $internal_email, $certificate) {
                    $message->to($internal_email, $to_name)
                            ->subject("New Certificate Collection/Delivery Request Received")
                            ->from("info@youexceltraining.com", "YouExcel Training");
            
                    // Attach payment screenshot if available
                    if (!empty($certificate->payment_screenshot) && file_exists(public_path($certificate->payment_screenshot))) {
                        $message->attach(public_path($certificate->payment_screenshot));
                    }
                });
            }

    
            Session::flash('success', 'Certificate request submitted successfully!');
            return redirect()->route('thankyou');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Something went wrong. Please try again.']);
        }
    }
    
      public function scholarshipForm()
    {
        $courses=Courses::orderBy("coursename","asc")->get();
        return view("website.scholarship-form", compact('courses'));
    }
    
    public function scholarshipSubmit(Request $req)
    {
        $req->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:255',
            'course_name' => 'required|string|max:255',
            'current_education' => 'required|string|max:255',
            'dob' => 'required|date',
            'address' => 'nullable|string',
            'employement_status' => 'required|string|max:255',
            'company_name' => 'nullable|string|max:255',
            'designation' => 'nullable|string|max:255',
            'reason' => 'nullable|string|max:255',
            'g-recaptcha-response' => 'required',
        ]);
    
        try {
            // Verify reCAPTCHA
            $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret' => '6LcCcgErAAAAAGSNCKqdrhJSuFA1vOjs-r--1Mje',
                'response' => $req['g-recaptcha-response'],
            ]);
    
            if (!($response->json()['success'] ?? false)) {
                return back()->withErrors(['captcha' => 'reCAPTCHA verification failed. Please try again.']);
            }
    
            // Save to database
            $scholarship = new ScholarshipRequest();
            $scholarship->full_name = $req->full_name;
            $scholarship->email = $req->email;
            $scholarship->phone = $req->phone;
            $scholarship->course_name = $req->course_name;
            $scholarship->current_education = $req->current_education;
            $scholarship->dob = $req->dob;
            $scholarship->address = $req->address;
            $scholarship->employement_status = $req->employement_status;
            $scholarship->company_name = $req->company_name;
            $scholarship->designation = $req->designation;
            $scholarship->reason = $req->reason;
            $scholarship->save();
    
            // Email data
            $email_data = [
                "full_name" => $req->full_name,
                "email" => $req->email,
                "phone" => $req->phone,
                "course_name" => $req->course_name,
                "current_education" => $req->current_education,
                "dob" => $req->dob,
                "address" => $req->address,
                "employement_status" => $req->employement_status,
                "company_name" => $req->company_name,
                "designation" => $req->designation,
                "reason" => $req->reason,
            ];
    
            $to_name = $req->full_name;
            $user_email = $req->email;
    
            // Send to user
            Mail::send("emails.scholarship-mail", ["email_data" => $email_data], function ($message) use ($to_name, $user_email) {
                $message->to($user_email, $to_name)
                        ->subject("Scholarship Request Received – YouExcel")
                        ->from("info@youexceltraining.com", "YouExcel Training");
            });
    
            // Send to internal team
            $internal_emails = [
                'support@youexceltraining.com',
                'shaikhaliyan.hussain@youexceltraining.com',
            ];
    
            foreach ($internal_emails as $internal_email) {
                Mail::send("emails.scholarship-mail-admin", ["email_data" => $email_data], function ($message) use ($to_name, $internal_email) {
                    $message->to($internal_email, $to_name)
                            ->subject("New Scholarship Request Received – YouExcel")
                            ->from("info@youexceltraining.com", "YouExcel Training");
                });
            }

    
            Session::flash('success', 'Scholarship request submitted successfully!');
            return redirect()->route('thankyou');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Something went wrong. Please try again.']);
        }
    }
    
    public function oneMintFeedbackForm($course)
    {
        $courseName = $course;
        return view("website.one-minute-feedback-form", compact('courseName'));
    }
    
    public function oneMintFeedbackFormSubmit(Request $req)
    {
        $req->validate([
            'training_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'batch_no' => 'required|string|max:255',
            'name' => 'nullable|string|max:255',
            'date_of_session' => 'nullable|date',
            'session_on_time' => 'required|in:Agree,Neutral,Disagree',
            'topics_relevant_sequence' => 'required|in:Agree,Neutral,Disagree',
            'clarity_of_content' => 'required|in:Agree,Neutral,Disagree',
            'facilities_provided' => 'required|in:Agree,Neutral,Disagree',
            'training_successful' => 'required|in:Agree,Neutral,Disagree',
            'remarks' => 'nullable|string|max:2000',
            'g-recaptcha-response' => 'required',
        ]);
    
        try {
            // Verify reCAPTCHA
            $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret' => '6LcCcgErAAAAAGSNCKqdrhJSuFA1vOjs-r--1Mje',
                'response' => $req['g-recaptcha-response'],
            ]);
    
            if (!($response->json()['success'] ?? false)) {
                return back()->withErrors(['captcha' => 'reCAPTCHA verification failed. Please try again.']);
            }
    
            // Save to database
            $feedback = new OneMinuteFeedback();
            $feedback->training_name = $req->training_name;
            $feedback->email = $req->email;
            $feedback->batch_no = $req->batch_no;
            $feedback->name = $req->name;
            $feedback->date_of_session = $req->date_of_session;
            $feedback->session_on_time = $req->session_on_time;
            $feedback->topics_relevant_sequence = $req->topics_relevant_sequence;
            $feedback->clarity_of_content = $req->clarity_of_content;
            $feedback->facilities_provided = $req->facilities_provided;
            $feedback->training_successful = $req->training_successful;
            $feedback->remarks = $req->remarks;
            $feedback->save();
    
            // Email data
            $email_data = [
                "training_name" => $req->training_name,
            ];
    
            $to_name = $req->name;
            $user_email = $req->email;

    
            Session::flash('success', 'Your feedback has been submitted successfully!');
            return redirect()->route('thankyou');
        } catch (\Exception $e) {
            Log::error('One Minute Feedback submission failed', [
        'error_message' => $e->getMessage(),
        'trace' => $e->getTraceAsString(),
        'request_data' => $req->all(),
    ]);
            return back()->withErrors(['error' => 'Something went wrong. Please try again.']);
        }
    }
    


    // public function addsupportform(Request $req)
    // {
    //     $req->validate([
    //         'g-recaptcha-response' => 'required',
    //     ]);

    //     $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
    //         'secret' => '6LcCcgErAAAAAGSNCKqdrhJSuFA1vOjs-r--1Mje',
    //         'response' => $req['g-recaptcha-response'],
    //     ]);
    //     $data = $response->json();

    //     if (!$data['success']) {
    //         // Handle failure (e.g., show an error message)
    //         return redirect()->back()->withErrors(['captcha' => 'reCAPTCHA verification failed. Please try again.']);
    //     }
    //     $leadform = new SupportForm;

    //     $leadform->name = $req->name;
    //     $leadform->email = $req->phone;
    //     $leadform->course = $req->course;
    //     $leadform->batchno = $req->batchno;
    //     $leadform->contact = $req->email;
    //     $leadform->comments = $req->comments;

    //     $details = [
    //         'name' => $req->name,
    //         'phone' => $req->phone,
    //         'email' => $req->email,
    //         'comments' => $req->comments
    //     ];

    //     $leadform->save();

    //     $datamail = $req->all();
    //     $datamail = [
    //         "name" => $req->name,
    //         "coursesintrested" => $req->course,
    //     ];


    //     $to_name = $req->name;
    //     $to_email = $req->email;
    //     $to_email_one = 'youexcel.connect@gmail.com';
    //     $to_email_two = 'muneera.amer@youexceltraining.com';
    //     $to_email_three = 'youexcel.connect@gmail.com';
    //     // $to_email_four = 'muneera.amer@youexceltraining.com';

    //     Mail::send("emails.Leadformmail", ["email_data" => $datamail], function ($message) use ($to_name, $to_email, $req) {
    //         $message->to($to_email, $to_name)->subject("Thanks for contacting YouExcel");
    //         $message->from("info@youexceltraining.com", "YouExcel Training");
    //     });

    //     // Mail::send("emails.Leadformmail", ["email_data" => $datamail], function ($message) use ($to_name, $to_email_one, $req) {
    //     //     $message->to($to_email_one, $to_name)->subject("Thanks for contacting YouExcel");
    //     //     $message->from("info@youexceltraining.com", "YouExcel Training");
    //     // });
    //     // Mail::send("emails.Leadformmail", ["email_data" => $datamail], function ($message) use ($to_name, $to_email_two, $req) {
    //     //     $message->to($to_email_two, $to_name)->subject("Thanks for contacting YouExcel");
    //     //     $message->from("info@youexceltraining.com", "YouExcel Training");
    //     // });
    //     Mail::send("emails.Leadformmail", ["email_data" => $datamail], function ($message) use ($to_name, $to_email_three, $req) {
    //         $message->to($to_email_three, $to_name)->subject("Thanks for contacting YouExcel");
    //         $message->from("info@youexceltraining.com", "YouExcel Training");
    //     });
    //     // Mail::send("emails.Leadformmail", ["email_data" => $datamail], function ($message) use ($to_name, $to_email_four, $req) {
    //     //     $message->to($to_email_four, $to_name)->subject("Thanks for contacting YouExcel");
    //     //     $message->from("info@youexceltraining.com", "YouExcel Training");
    //     // });

    //     Session::flash('appoinmentbooked', 'Appoinment has been Successfully !!');

    //     // Mail::to($req)->send(new ContactMail($details));
    //     // Mail::to('youexceltraining@gmail.com')->send(new ContactMail($details));
    //     // $leadform->save();
    //     // Session::flash('appoinmentbooked','Appoinment has been Successfully !!');
    //     return redirect('/');
    // }
    
    private function fetchZohoAccessToken()
    {
        $url = 'https://accounts.zoho.com/oauth/v2/token';

        $params = [
            'refresh_token' => '1000.6a865f8632c73d0ef36ad98e8576d690.515bb046d8c792614ff5d8dec0f5fdcd',
            'client_id' => '1000.Z86Z41CPQS2Q73YZY0DVBZAF912DWX',
            'client_secret' => 'c9d7b4573571ac16707810c546e8d5486fa0d64a08',
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


    public function addsupportform(Request $req)
    {
        $req->validate([
            'g-recaptcha-response' => 'required',
            'attachments' => 'nullable|array',
            'attachments.*' => 'file|max:2048',
            'course_id' => 'required|exists:courses,id',
        ]);
    
        try {
            // Verify reCAPTCHA
            $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret' => '6LcCcgErAAAAAGSNCKqdrhJSuFA1vOjs-r--1Mje',
                'response' => $req['g-recaptcha-response'],
            ]);
    
            $data = $response->json();
    
            if (!$data['success']) {
                return redirect()->back()->withErrors(['captcha' => 'reCAPTCHA verification failed. Please try again.']);
            }
            
            $course = Courses::findOrFail($req->course_id);
    
            // Save lead
            $leadform = new SupportForm;
            $leadform->name = $req->name;
            $leadform->email = $req->email;
            $leadform->course = $course->coursename;
            $leadform->request_type = $req->request_type;
            $leadform->batchno = $req->batchno;
            $leadform->contact = $req->phone;
            $leadform->comments = $req->comments;
            
            $attachments = [];
            $attachmentPaths = [];

            if ($req->hasFile('attachments')) {
                $uploadDir = public_path('uploads/support');
                if (!file_exists($uploadDir)) {
                    mkdir($uploadDir, 0755, true);  // Ensure directory exists
                }
        
                foreach ($req->file('attachments') as $file) {
                    if ($file->isValid()) {
                        $originalName = $file->getClientOriginalName();
                        $filename = time() . '_' . $originalName;
                        $fullPath = $uploadDir . '/' . $filename;
        
                        $file->move($uploadDir, $filename);
                        $attachments[] = url('uploads/support/' . $filename); 
                        $attachmentPaths[] = $fullPath;
                    }
                }
            }
            
            $leadform->attachments = json_encode($attachments);
            $leadform->save();
            
            $accessToken = $this->fetchZohoAccessToken();
            
            $searchResponse = Http::withHeaders([
                "Authorization" => "Bearer $accessToken",
                "orgId" => "862403155" // your Zoho Desk orgId
            ])->get("https://desk.zoho.com/api/v1/contacts/search", [
                "email" => $req->email
            ]);
            
            // \Log::info('Zoho Search Contact Result: ' . $searchResponse);

            if ($searchResponse != '' && $searchResponse->successful() && $searchResponse['count'] > 0) {
                // ✅ Contact exists
                $contactId = $searchResponse['data'][0]['id'];
                // \Log::info('Zoho Search Contact ID: ' . $contactId);
            } else {
                // ✅ Contact not found → create new one
                $createResponse = Http::withHeaders([
                    "Authorization" => "Bearer $accessToken",
                    "Content-Type" => "application/json",
                    "orgId" => "862403155"
                ])->post("https://desk.zoho.com/api/v1/contacts", [
                    "firstName" => $req->name,
                    "lastName" => "N/A",
                    "email" => $req->email,
                    "phone" => $req->phone,
                    "type" => "EndUser"
                ]);
                
                // \Log::info('Zoho Ctreate Contact Result: ' . $createResponse);

                if ($createResponse->successful()) {
                    $contactId = $createResponse['id'] ?? $createResponse->json()['id'];
                    
                    // \Log::info('Zoho Ctreate Contact ID: ' . $contactId);
                }
            }

            $zohoData = [
                "ticketNumber" => "773",
                "subCategory" => "Sub General",
                "statusType" => "Open",
                "subject" => $req->request_type ?? "API Submission from Support Form",
                "departmentId" => "1038836000000006907",
                "channel" => "Email",
                "description" => $req->comments ?? "No description provided",
                "language" => "English",
                "source" => [
                    "appName" => null,
                    "extId" => null,
                    "type" => "SYSTEM",
                    "permalink" => null,
                    "appPhotoURL" => null
                ],
                "email" => $req->email ?? "test123@zylker.com",
                "customerResponseTime" => now()->format('Y-m-d\TH:i:s.v\Z'), // with milliseconds
                "contactId" => $contactId ?? "1038836000006430001",
                "threadCount" => "1", // must be string
                "priority" => "High",
                "phone" => $req->phone ?? "1 888 900 9646",
                "category" => $req->request_type ?? "LMS Access",
                "cf" => [
                    "cf_batch" => $req->batchno ?? "Test Batch",
                    "cf_course_name" => $course->coursename ?? "N/A"
                ],
                "productId" => $course->zoho_product_id ?? "1038836000000437001", // new field from Postman
                "status" => "Open"
            ];


            // dd($accessToken, $zohoData );


            // dd($accessToken);
            if (!is_array($accessToken)) {
                try {
                    $zohoResponse = Http::withHeaders([
                        "Authorization" => "Bearer $accessToken",
                        "Content-Type" => "application/json"
                    ])->post("https://desk.zoho.com/api/v1/tickets", $zohoData);

                    if (!$zohoResponse->successful()) {
                        // dd($zohoResponse->body());
                        \Log::error('Zoho API Error: ' . $zohoResponse->body());
                    }
                    
                    $ticket = $zohoResponse->json();
                    $ticketId = $ticket['id'] ?? null;
                    
                    if ($ticketId && count($attachmentPaths) > 0) {
                        \Log::info('Zoho Attachment Request Ticket ID: ' . $ticketId);
                        foreach ($attachmentPaths as $index => $fullPath) {
                            if (file_exists($fullPath) && is_readable($fullPath)) {
                                $originalFile = $req->file('attachments')[$index];
                                $originalName = $originalFile->getClientOriginalName();
                                $fileSize = filesize($fullPath) / 1024;
                                $mimeType = mime_content_type($fullPath);
                    
                                // Validate file
                                $allowedMimes = ['image/jpeg', 'image/png', 'application/pdf'];
                                if (!in_array($mimeType, $allowedMimes)) {
                                    \Log::error('Invalid MIME type for ' . $fullPath . ': ' . $mimeType);
                                    continue;
                                }
                                if ($mimeType === 'image/jpeg') {
                                    $imageInfo = getimagesize($fullPath);
                                    if ($imageInfo === false) {
                                        \Log::error('Invalid JPEG file: ' . $fullPath);
                                        continue;
                                    }
                                    // \Log::info('JPEG Info: ' . json_encode($imageInfo));
                                }
                    
                                // \Log::info("Uploading file: $fullPath, Size: $fileSize KB, MIME: $mimeType, Original Name: $originalName");
                    
                                $fileStream = fopen($fullPath, 'r');
                                if ($fileStream === false) {
                                    \Log::error('Failed to open file stream: ' . $fullPath);
                                    continue;
                                }
                    
                                $uploadResponse = Http::withHeaders([
                                    "Authorization" => "Bearer $accessToken",
                                    "orgId" => "862403155",
                                ])
                                ->attach(
                                    'file',   // required field name
                                    fopen($fullPath, 'r'),
                                    $originalName
                                )
                                ->post("https://desk.zoho.com/api/v1/tickets/{$ticketId}/attachments");
                    
                                fclose($fileStream);
                    
                                if (!$uploadResponse->successful()) {
                                    \Log::error('Zoho Attachment Upload Error for ' . $originalName . ': Status ' . $uploadResponse->status() . ', Body: ' . $uploadResponse->body());
                                } else {
                                    \Log::info('Zoho Attachment Uploaded: ' . $originalName . ' - Status: ' . $uploadResponse->status() . ', Body: ' . $uploadResponse->body());
                                }
                            } else {
                                \Log::error('File not found or not readable: ' . $fullPath);
                            }
                        }
                    }



                } catch (\Exception $e) {
                    \Log::error('Zoho API Exception: ' . $e->getMessage());
                }
            } else {
                \Log::error('Zoho Access Token Error: ' . json_encode($accessToken));
            }
            
            // Email data
            $datamail = [
                "name" => $req->name,
                "email" => $req->email,
                "phone" => $req->phone,
                "comments" => $req->comments,
                "batchno" => $req->batchno,
                "coursesintrested" => $req->course ?? 'Others',
            ];
    
            $to_name = $req->name;
            $user_email = $req->email;
    
            // Send to user
            Mail::send("emails.support-form-mail", ["email_data" => $datamail], function ($message) use ($to_name, $user_email) {
                $message->to($user_email, $to_name)
                        ->subject("We’ve Received Your Support Request – YouExcel")
                        ->from("info@youexceltraining.com", "YouExcel Training");
            });
    
            // Send to internal team
            $internal_emails = [
                'support@youexceltraining.com',
                'shaikhaliyan.hussain@youexceltraining.com',
            ];
    
            foreach ($internal_emails as $internal_email) {
                Mail::send("emails.support-mail-for-admin", ["email_data" => $datamail], function ($message) use ($to_name, $internal_email) {
                    $message->to($internal_email, $to_name)
                            ->subject("New Support Form Submission")
                            ->from("info@youexceltraining.com", "YouExcel Training");
                });
            }
    
            Session::flash('appoinmentbooked', 'Appointment has been booked successfully!');
            // return redirect('/');
            return redirect()->route('thankyou')->with('success', 'Form Submitted Successfully!');
        } catch (\Exception $e) {
            // Log error or handle accordingly
            return redirect()->back()->withErrors(['error' => 'Something went wrong. Please try again.']);
        }
    }

    
    public function support_form()
    {
        $courses=Courses::orderBy("coursename","asc")->get();
        return view("website.pages.forms.support-form",["courses"=>$courses]);
    }



    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function freeTrainingForm($course)
    {
        $course=str_replace("-"," ",$course);
        return view('website.Application-Form',['course'=>$course]);

    }

     public function validate_email(Request $request)
    {
        $email_check = Application::where("email", $request->myemail)->first();
        return response()->json($email_check, 200);
    }

    public function feedback_form()
    {
        $courses=Courses::orderBy("coursename","asc")->get();

        return view('website.pages.forms.Feedback-Form',['courses'=>$courses]);

    }

    public function enquiry_form()
    {
        $courses=Courses::orderBy("position","asc")->get();
        return view('website.enquiry-form',['courses'=>$courses]);
    }

    public function enquiry_corporate()
    {
        $program = Program::orderBy("program_name","asc")->get();
        return view('website.pages.enquiry-forms.enquiry-coporate',compact('program'));
    }

    public function enquiry_form_custom()
    {
        $courses=Courses::orderBy("coursename","asc")->get();
        return view('website.enquiryform',['courses'=>$courses]);
    }


    public function enquiry_form_BBSHRRDB()
    {
        $courses=Courses::orderBy("coursename","asc")->get();
        return view('website.enquiryformBBS',['courses'=>$courses]);
    }

    public function query($course_name = null)
    {
        // dd($course);
        if($course_name){
            $course = Courses::where('slug', $course_name)->first();
            $course_name = $course->coursename;
            $courses = Courses::orderBy("position","asc")->get();
            return view("website.pages.enquiry-forms.enquiry-form", compact('course_name','course','courses'));
        }else{
            $courses = Courses::orderBy("position","asc")->get();
            return view("website.pages.enquiry-forms.enquiry-form", compact('courses'));
        }
    }
    
    public function executiveDashboard()
    {
        
        $trustedCompanies = TrustedCompany::where('is_active', '1')
                    ->orderByRaw('CAST(position AS UNSIGNED) ASC')
                    ->limit(12)
                    ->get();
                    
        $program = Program::orderBy("program_name","asc")->get();
        return view("website.pages.executive-dashboard", compact('trustedCompanies', 'program'));
    }





}
