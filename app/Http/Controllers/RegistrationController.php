<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registers;
use App\Mail\ContactMail;
use Mail;
use Session;
use Auth;
use App\Models\Courses;
use Illuminate\Support\Facades\Http;
use Yajra\DataTables\Facades\DataTables;


class RegistrationController extends Controller
{

     function view_form()
    {
        $courses = Courses::orderBy("position","asc")->get();
        return view("website.pages.forms.registration",['courses'=>$courses]);
    }


  function view_form_old()
    {
      $courses=Courses::orderBy("position","asc")->get();
      return view("website.Registration-Form",['courses'=>$courses]);
    }
    
    
    function view_form_by_course(Request $request,$course_name)
    {
        $course = Courses::where('slug', $course_name)->first();
        if($course){
            $course_name = $course->coursename;
            return view("website.regester2", compact('course_name','course'));
        }else{
            $course_name = str_replace("-", " ", $course_name); // Replaces hyphens with spaces
            $course_name = ucwords($course_name); // Capitalizes each word
            return view("website.regester2", compact('course_name'));
        }
    }


   public function view_form_by_course_and_fee($course, $fee)
    {
        $course = str_replace("-", " ", $course);
        return view("website.my_reg_form", ['course' => $course, 'fee' => $fee]);
    }
    
    
     public function addregistrationCustom(Request $req)
    {
        
        //dd($req->all());
        $Register = new Registers;
        if ($req->file('file1')) {
            $file = $req->file('file1');
            // foreach ($request->file('images') as $index => $file) {
            $fileOriginalName = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $fileName = md5(time()) . '.' . $extension;
            $file->move(public_path() . '/files/', $fileName);
            // }
            $Register->Image = $fileName;
        }
        $Register->email = $req->email;
        $Register->chooseprogramme = $req->cfma;
        $Register->name = $req->name;
        $Register->fathername = $req->fname;
        $Register->address = $req->address;
        $Register->city = $req->city;
        $Register->employeename = $req->empname;
        $Register->designation = $req->designation;
        $Register->cellnumber = $req->cellnumber;
        $Register->dateofbirth = $req->date;
        $Register->cnic = $req->cnic;
        $Register->qualification = $req->qualification;

        $details = [
            'name' => $req->name,
            'phone' => $req->phone,
            'email' => $req->email,
            'coursesintrested' => $req->coursesintrested,
            'comments' => $req->comments
        ];


        // Mail::to($req)->send(new ContactMail($details));
        // Mail::to('nomanpeerzada9t9@gmail.com')->send(new ContactMail($details));
        $Register->save();

        $data = $req->all();
        $data = [
            "name" => $req->name,
            "cfma" => $req->cfma,
        ];


// dd($req->all());

        $to_name = $req->name;
        $to_email = $req->email;
        $to_email_one = 'send@youexceltraining.com';
        // $to_email_two = 'youexceltraining@gmail.com';
        $to_email_three = 'youexcel.connect@gmail.com';
        //$to_email_four = 'muneera.amer@youexceltraining.com';

        Mail::send("emails.ContactMail1", ["email_data" => $data], function ($message) use ($to_name, $to_email, $req) {
            $message->to($to_email, $to_name)->subject("YouExcel Training program Registration Confirmation");
            $message->from("send@youexceltraining.com", "YouExcel Training");
        });

        // Mail::send("emails.ContactMail1", ["email_data" => $data], function ($message) use ($to_name, $to_email_one, $req) {
        //     $message->to($to_email_one, $to_name)->subject("YouExcel Training program Registration Confirmation");
        //     $message->from("send@youexceltraining.com", "YouExcel Training");
        // });

        // Mail::send("emails.ContactMail1", ["email_data" => $data], function ($message) use ($to_name, $to_email_two, $req) {
        //     $message->to($to_email_two, $to_name)->subject("YouExcel Training program Registration Confirmation");
        //     $message->from("send@youexceltraining.com", "YouExcel Training");
        // });

        Mail::send("emails.ContactMail1", ["email_data" => $data], function ($message) use ($to_name, $to_email_three, $req) {
            $message->to($to_email_three, $to_name)->subject("YouExcel Training program Registration Confirmation");
            $message->from("send@youexceltraining.com", "YouExcel Training");
        });

        // Mail::send("emails.ContactMail1", ["email_data" => $data], function ($message) use ($to_name, $to_email_four, $req) {
        //     $message->to($to_email_four, $to_name)->subject("YouExcel Training program Registration Confirmation");
        //     $message->from("send@youexceltraining.com", "YouExcel Training");
        // });


        $fee = $req->fee;



            return view("website.gopayfast", ['fee' => $fee, "course" => $req->cfma, 'phone' => $req->phone,
                'email' => $req->email, "reg_id" => $Register->id]);

        Session::flash('appoinmentbooked', 'Appoinment has been Successfully !!');
        // return redirect('registration_form');
        return redirect()->route('thankyou')->with('success', 'Form Submitted Successfully!');
    }
    
    function addregistrationtwo(Request $req)
    {
        
        // dd($req->toArray());
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
            return redirect()->back()->withErrors(['captcha' => 'reCAPTCHA verification failed. Please try again.']);
        }
        
        $courseName = $req->course_name ?? 'Others';
        $courseZohoId = 0000;
        $course = null;

        if ($req->course_id) {
            $course = Courses::find($req->course_id);
            if ($course) {
                $courseName = $course->coursename;
                $courseZohoId = $course->zoho_id;
            }
        }
        
      //dd($req->all());
        $Register = new Registers;
        if ($req->file('file1')) {
            $file = $req->file('file1');
            $fileName = $file->hashName();
            $file->move(public_path('files'), $fileName);
            $Register->Image = $fileName;
        }
        
        if ($req->file('cnic_front')) {
            $file = $req->file('cnic_front');
            $fileName = $file->hashName();
            $file->move(public_path('files'), $fileName);
            $Register->cnic_front = $fileName;
        }
        
        if ($req->file('cnic_back')) {
            $file = $req->file('cnic_back');
            $fileName = $file->hashName();
            $file->move(public_path('files'), $fileName);
            $Register->cnic_back = $fileName;
        }

        $Register->email = $req->email;
        $Register->registration_type = $req->registration_type;
        $Register->chooseprogramme = $courseName;
        $Register->name = $req->name;
        $Register->fathername = $req->fname;
        $Register->address = $req->address;
        $Register->city = $req->city;
        $Register->employeename = $req->empname;
        $Register->designation = $req->designation;
        $Register->cellnumber = $req->cellnumber;
        $Register->dateofbirth = $req->date;
        $Register->cnic = $req->cnic;
        $Register->qualification = $req->qualification;

        $details = [
            'name' => $req->name,
            'phone' => $req->phone,
            'email' => $req->email,
            'coursesintrested' => $req->coursesintrested,
            'comments' => $req->comments
        ];


        // Mail::to($req)->send(new ContactMail($details));
        // Mail::to('nomanpeerzada9t9@gmail.com')->send(new ContactMail($details));
        $Register->save();
        
        $accessToken = $this->fetchZohoAccessToken();
        // Data for Zoho API
        $zohoData = [
            "data" => [
                [
                    "Email" => $req->email ?? "N/A",
                    "Complete_Address" => $req->address ?? "N/A",
                    "Course" => $courseZohoId ?? 0000,
                    "Contact_No" => $req->cellnumber ?? "N/A",
                    "City" => $req->city ?? "N/A",
                    "Qualification" => $req->qualification ?? "N/A",
                    "First_Name" => $req->name ?? "N/A",
                    "Lead_Status" => "Contacted",
                    "Job_Designation" => $req->designation ?? "N/A",
                    "Employer_Name" => $req->empname ?? "N/A",
                    "CNIC" => $req->cnic ?? "N/A",
                    "Country_Name" => "Pakistan",
                    "Designation" => $req->designation ?? "N/A",
                    "Father_Husband_s_Name" => $req->fname ?? "N/A",
                    "Date_of_Birth" => $req->date ?? "N/A",
                    "WhatsApp_Number" => $req->cellnumber ?? "N/A",
                    "Comments" => "N/A",
                    "Last_Name" => "N/A",
                    "Lead_Source" => "Registration Form",
                
                ]
            ]
        ];
        
        if (!is_array($accessToken)) {
            try {
                $zohoResponse = Http::withHeaders([
                    "Authorization" => "Bearer $accessToken",
                    "Content-Type" => "application/json"
                ])->post("https://www.zohoapis.com/crm/v7/Leads", $zohoData);
    
                if (!$zohoResponse->successful()) {
                    \Log::error('Zoho API Error: ' . $zohoResponse->body());
                }
            } catch (\Exception $e) {
                \Log::error('Zoho API Exception: ' . $e->getMessage());
            }
        } else {
            \Log::error('Zoho Access Token Error: ' . json_encode($accessToken));
        }

        $data = $req->all();
        $data = [
            "name" => $req->name,
            "cfma" => $req->cfma,
        ];


// dd($req->all());

        $to_name = $req->name;
        $to_email = $req->email;
        // $to_email_one = 'send@youexceltraining.com';
        // $to_email_two = 'youexceltraining@gmail.com';
        $to_email_three = 'youexcel.connect@gmail.com';
        // $to_email_four = 'muneera.amer@youexceltraining.com';

        Mail::send("emails.ContactMail1", ["email_data" => $data], function ($message) use ($to_name, $to_email, $req) {
            $message->to($to_email, $to_name)->subject("YouExcel Training program Registration Confirmation");
            $message->from("send@youexceltraining.com", "YouExcel Training");
        });

        // Mail::send("emails.ContactMail1", ["email_data" => $data], function ($message) use ($to_name, $to_email_one, $req) {
        //     $message->to($to_email_one, $to_name)->subject("YouExcel Training program Registration Confirmation");
        //     $message->from("send@youexceltraining.com", "YouExcel Training");
        // });

        // Mail::send("emails.ContactMail1", ["email_data" => $data], function ($message) use ($to_name, $to_email_two, $req) {
        //     $message->to($to_email_two, $to_name)->subject("YouExcel Training program Registration Confirmation");
        //     $message->from("send@youexceltraining.com", "YouExcel Training");
        // });

        Mail::send("emails.ContactMail1", ["email_data" => $data], function ($message) use ($to_name, $to_email_three, $req) {
            $message->to($to_email_three, $to_name)->subject("YouExcel Training program Registration Confirmation");
            $message->from("send@youexceltraining.com", "YouExcel Training");
        });

        // Mail::send("emails.ContactMail1", ["email_data" => $data], function ($message) use ($to_name, $to_email_four, $req) {
        //     $message->to($to_email_four, $to_name)->subject("YouExcel Training program Registration Confirmation");
        //     $message->from("send@youexceltraining.com", "YouExcel Training");
        // });


        


        if ($req->payment_method == "pay_now") {
          
         $course_fee=[
            "Advanced MS Excel"=>15000,
            "Basic to Intermediate Python Programming"=>18500,
            "Certificate in Information Technology"=>12400,
              "Certificate in Information Technology (CIT)"=>12400,
            "Certificate in Office Management Course"=>12000,
            "Computerized Accounting"=>15000,
            "Customer Services Specialist"=>28000,
            "Dashboard Reporting with Power BI"=>28000,
            "Advanced Dashboard Reporting with Power BI ( 1 month)"=>28000,
            "Data Analytics with Tableau"=>16000,
            "Data Science with BI Reporting"=>28000,
            "Excel Skills for Business Forecasting"=>11700,
            "Excelling in Linkedln profile and Job Interviews"=>1500,
            "Financial Modeling and Analysis"=>15000,
            "Tax Management with Return Filing"=>16000,
            "Financial Modeling and Analysis Advanced"=>16000,
            "Financial Modeling and Analysis Fundamental"=>16000,
        ];

        $fee= $course_fee[$req->cfma];
            return view("website.gopayfast", ['fee' => $fee, "course" => $req->cfma,'phone'=>$req->phone,
                'email'=>$req->email,"reg_id"=>$Register->id]);
        }

        Session::flash('appoinmentbooked', 'Appoinment has been Successfully !!');
        // return redirect('registration_form');
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
    
    // function addregistration(Request $req)
    // {
    //     $req->validate([
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
    //     $courses = Courses::where('duration', $req->cfma)->first();
    //     // dd($courses->duration);
    
    //     $accessToken = $this->fetchZohoAccessToken();
        
    //     if(!$req->file2) {
    
    //     $Register = new Registers;
    //     if ($req->file('file1')) {
    //         $file = $req->file('file1');
    //         $fileName = $file->hashName();
    //         $file->move(public_path('files'), $fileName);
    //         $Register->Image = $fileName;
    //     }
        
    //     if ($req->file('cnic_front')) {
    //         $file = $req->file('cnic_front');
    //         $fileName = $file->hashName();
    //         $file->move(public_path('files'), $fileName);
    //         $Register->cnic_front = $fileName;
    //     }
        
    //     if ($req->file('cnic_back')) {
    //         $file = $req->file('cnic_back');
    //         $fileName = $file->hashName();
    //         $file->move(public_path('files'), $fileName);
    //         $Register->cnic_back = $fileName;
    //     }
    //     $Register->email = $req->email;
    //     $Register->registration_type = $req->registration_type;
    //     $Register->chooseprogramme = $courses->coursename;
    //     $Register->name = $req->name;
    //     $Register->fathername = $req->fname;
    //     $Register->address = $req->address;
    //     $Register->city = $req->city;
    //     $Register->employeename = $req->empname;
    //     $Register->designation = $req->designation;
    //     $Register->cellnumber = $req->cellnumber;
    //     $Register->dateofbirth = $req->date;
    //     $Register->cnic = $req->cnic;
    //     $Register->qualification = $req->qualification;
    //     $Register->save();
    //     // Data for Zoho API
    //     $zohoData = [
    //         "data" => [
    //             [
    //                 "Email" => $req->email ?? "N/A",
    //                 "Complete_Address" => $req->address ?? "N/A",
    //                 "Course" => $courses->zoho_id ?? 0000,
    //                 "Contact_No" => $req->cellnumber ?? "N/A",
    //                 "City" => $req->city ?? "N/A",
    //                 "Qualification" => $req->qualification ?? "N/A",
    //                 "First_Name" => $req->name ?? "N/A",
    //                 "Lead_Status" => "Contacted", // Default value
    //                 "Job_Designation" => $req->designation ?? "N/A",
    //                 "Employer_Name" => $req->empname ?? "N/A",
    //                 "CNIC" => $req->cnic ?? "N/A",
    //                 "Country_Name" => "Pakistan", // Default value
    //                 "Designation" => $req->designation ?? "N/A",
    //                 "Father_Husband_s_Name" => $req->fname ?? "N/A",
    //                 "Date_of_Birth" => $req->date ?? "N/A",
    //                 "WhatsApp_Number" => $req->cellnumber ?? "N/A",
    //                 "Comments" => "N/A", // Default value
    //                 "Last_Name" => "N/A", // Default value
    //                 "Lead_Source" => "Registration Form", // Default value
                
    //             ]
    //         ]
    //     ];
    
    // // dd($accessToken, $zohoData );
    
        
    //     // dd($accessToken);
    //     if (!is_array($accessToken)) {
    //         try {
    //             $searchResponse = Http::withHeaders([
    //                 "Authorization" => "Bearer $accessToken"
    //             ])->get("https://www.zohoapis.com/crm/v7/Leads/search", [
    //                 'phone' => $req->cellnumber
    //             ]);
        
    //             // Log search status and body
    //             \Log::info('Zoho: Search request completed', [
    //                 'status' => $searchResponse->status(),
    //                 'body' => $searchResponse->body()
    //             ]);
        
    //             $searchResult = $searchResponse->successful() ? $searchResponse->json() : null;
        
    //             // 3) Decide: update or create
    //             if (isset($searchResult['data']) && count($searchResult['data']) > 0) {
    //                 // Record exists -> Update it
    //                 $leadId = $searchResult['data'][0]['id'];
        
    //                 $updateResponse = Http::withHeaders([
    //                     "Authorization" => "Bearer $accessToken",
    //                     "Content-Type" => "application/json"
    //                 ])->put("https://www.zohoapis.com/crm/v7/Leads/{$leadId}", $zohoData);
        
    //                 if (!$updateResponse->successful()) {
    //                     \Log::error('Zoho Update Error: Non-success response', [
    //                         'status' => $updateResponse->status(),
    //                         'body' => $updateResponse->body()
    //                     ]);
    //                 } else {
    //                     // Optionally log the successful update response JSON
    //                     \Log::info('Zoho: Lead updated successfully', [
    //                         'response' => $updateResponse->json()
    //                     ]);
    //                 }
        
    //             } else {
        
    //                 $createResponse = Http::withHeaders([
    //                     "Authorization" => "Bearer $accessToken",
    //                     "Content-Type" => "application/json"
    //                 ])->post("https://www.zohoapis.com/crm/v7/Leads", $zohoData);
        
    //                 if (!$createResponse->successful()) {
    //                     \Log::error('Zoho Create Error: Non-success response', [
    //                         'status' => $createResponse->status(),
    //                         'body' => $createResponse->body()
    //                     ]);
    //                 } else {
    //                     \Log::info('Zoho: Lead created successfully', [
    //                         'response' => $createResponse->json()
    //                     ]);
    //                 }
    //             }
    //         } catch (\Exception $e) {
    //             // Full exception logging
    //             \Log::error('Zoho Exception thrown during search/update/create', [
    //                 'message' => $e->getMessage(),
    //                 'trace' => $e->getTraceAsString()
    //             ]);
    //             // Optionally surface an error to session for debugging on UI (remove in prod)
    //             Session::flash('error', 'Zoho integration error. Check logs for details.');
    //         }
    //     } else {
    //         // The access token returned as an array (error), log whole thing
    //         \Log::error('Zoho Access Token Error: ', ['token_response' => $accessToken]);
    //         Session::flash('error', 'Invalid Zoho access token. Check logs.');
    //     }
    
    //     Session::flash('appoinmentbooked', 'Appointment has been successfully booked!');
    //     // return redirect('registration_form');
    //     return redirect()->route('thankyou')->with('success', 'Form Submitted Successfully!');
    
    
    
    
    //     } else {
            
        
    //     // Existing Registration Logic
    //     $Register = new Registers;
    //     if ($req->file('file1')) {
    //         $file = $req->file('file1');
    //         $extension = $file->getClientOriginalExtension();
    //         $fileName = md5(time()) . '.' . $extension;
    //         $file->move(public_path() . '/files/', $fileName);
    //         $Register->Image = $fileName;
    //     }
        
      
    
    //     $Register->email = $req->email;
    //     $Register->chooseprogramme = $courses->coursename;
    //     $Register->name = $req->name;
    //     $Register->fathername = $req->fname;
    //     $Register->address = $req->address;
    //     $Register->city = $req->city;
    //     $Register->employeename = $req->empname;
    //     $Register->designation = $req->designation;
    //     $Register->cellnumber = $req->cellnumber;
    //     $Register->dateofbirth = $req->date;
    //     $Register->cnic = $req->cnic;
    //     $Register->qualification = $req->qualification;
    //     $Register->save();
    
    //      if ($req->file('file2')) {
    //     $file2 = $req->file('file2');
    //     $extension2 = $file2->getClientOriginalExtension();
    //     $fileName2 = md5(time()) . '.' . $extension2;
    
    //     // Move the file to the public/files/ directory
    //     $filePath = public_path() . '/files/' . $fileName2;
    //     $file2->move(public_path() . '/files/', $fileName2);
    
    //     // Store file name in the database (if required)
    //     $Register->Image = $fileName2;
    
    //     // Zoho API Integration
       
    //     // try {
    //         if ($accessToken && is_string($accessToken)) {
    //             // Send the file to Zoho CRM
    //             $zohoResponse = Http::withHeaders([
    //                 "Authorization" => "Bearer $accessToken",
    //             ])->attach(
    //                 'file',                // API expects this key
    //                 file_get_contents($filePath), // Read the moved file
    //                 $fileName2             // Original file name
    //             )->post("https://www.zohoapis.com/crm/v7/files");
                
    // // dd($zohoResponse,$accessToken);
    //             // Check the response
    //             if ($zohoResponse->successful()) {
    //                 // Get the response data as an array
    //                 $responseData = $zohoResponse->json();
                    
    //                 $fileId = $responseData['data'][0]['details']['id'] ?? null;
    //             } else {
    //                 \Log::error('Zoho API Error: ' . $zohoResponse->body());
    //                 Session::flash('error', 'File upload failed: ' . $zohoResponse->body());
    //             }
    //         } else {
    //             \Log::error('Zoho Access Token Error: ' . json_encode($accessToken));
    //             Session::flash('error', 'Invalid Zoho access token.');
    //         }
    //     // } catch (\Exception $e) {
    //     //     \Log::error('Zoho API Exception: ' . $e->getMessage());
    //     //     Session::flash('error', 'An error occurred while uploading the file.');
    //     // }
    // } else {
    //     Session::flash('error', 'No file uploaded.');
    // }
    //     // Data for Zoho API
    // $zohoData = [
    //     "data" => [
    //         [
    //             "Email" => $req->email ?? "N/A",
    //             "Complete_Address" => $req->address ?? "N/A",
    //             "Course" => $courses->duration  ?? 0000, // Assuming $req->cfma contains the course value
    //             "Contact_No" => $req->cellnumber ?? "N/A",
    //             "City" => $req->city ?? "N/A",
    //             "Qualification" => $req->qualification ?? "N/A",
    //             "First_Name" => $req->name ?? "N/A",
    //             "Lead_Status" => "Contacted", // Default value
    //             "Job_Designation" => $req->designation ?? "N/A",
    //             "Employer_Name" => $req->empname ?? "N/A",
    //             "CNIC" => $req->cnic ?? "N/A",
    //             "Country_Name" => "Pakistan", // Default value
    //             "Designation" => $req->designation ?? "N/A",
    //             "Father_Husband_s_Name" => $req->fname ?? "N/A",
    //             "Date_of_Birth" => $req->date ?? "N/A",
    //             "WhatsApp_Number" => $req->cellnumber ?? "N/A",
    //             "Comments" => "N/A", // Default value
    //             "Last_Name" => "N/A", // Default value
    //             "Lead_Source" => "Registration Form", // Default value
    //             "Proof_of_Payment" => [
    //                 [
    //                     "File_Id__s" => $fileId,
    //                 ]
    //             ]
    //         ]
    //     ]
    // ];
    
        
    //     // dd($accessToken);
    //     if (!is_array($accessToken)) {
    //         try {
    //             $zohoResponse = Http::withHeaders([
    //                 "Authorization" => "Bearer $accessToken",
    //                 "Content-Type" => "application/json"
    //             ])->post("https://www.zohoapis.com/crm/v7/Leads", $zohoData);
    
    //             if (!$zohoResponse->successful()) {
    //                 \Log::error('Zoho API Error: ' . $zohoResponse->body());
    //             }
    //         } catch (\Exception $e) {
    //             \Log::error('Zoho API Exception: ' . $e->getMessage());
    //         }
    //     } else {
    //         \Log::error('Zoho Access Token Error: ' . json_encode($accessToken));
    //     }
    
    //     // Payment Processing
    //     if ($req->payment_method == "pay_now") {
    //         $course_fee = [
    //             "Advanced MS Excel" => 15000,
    //             "Basic to Intermediate Python Programming" => 18500,
    //             "Certificate in Information Technology" => 12400,
    //             "Certificate in Office Management Course" => 12000,
    //             "Computerized Accounting" => 15000,
    //             "Customer Services Specialist" => 28000,
    //             "Dashboard Reporting with Power BI" => 28000,
    //             "Advanced Dashboard Reporting with Power BI ( 1 month)" => 28000,
    //             "Data Analytics with Tableau" => 16000,
    //             "Data Science with BI Reporting" => 28000,
    //             "Excel Skills for Business Forecasting" => 11700,
    //             "Excelling in Linkedln profile and Job Interviews" => 1500,
    //             "Financial Modeling and Analysis" => 15000,
    //             "Tax Management with Return Filing" => 16000,
    //             "Financial Modeling and Analysis Advanced" => 16000,
    //             "Financial Modeling and Analysis Fundamental" => 16000,
    //         ];
    
    //         $fee = $course_fee[$req->cfma];
    //         return view("website.gopayfast", [
    //             'fee' => $fee,
    //             "course" => $req->cfma,
    //             'phone' => $req->phone,
    //             'email' => $req->email,
    //             "reg_id" => $Register->id
    //         ]);
    //     }
    
    //     Session::flash('appoinmentbooked', 'Appointment has been successfully booked!');
    //     // return redirect('registration_form');
    //     return redirect()->route('thankyou')->with('success', 'Form Submitted Successfully!');
    //     }
    // }
    
    public function addregistration(Request $req)
    {
        $req->validate([
            'g-recaptcha-response' => 'required'
        ]);
    
        /* -------------------- VERIFY RECAPTCHA -------------------- */
    
        $response = Http::asForm()->post(
            'https://www.google.com/recaptcha/api/siteverify',
            [
                'secret' => '6LcCcgErAAAAAGSNCKqdrhJSuFA1vOjs-r--1Mje',
                'response' => $req['g-recaptcha-response']
            ]
        );
    
        if (!($response->json()['success'] ?? false)) {
            return back()->withErrors([
                'captcha' => 'reCAPTCHA verification failed.'
            ]);
        }
    
        /* -------------------- GET COURSE -------------------- */
    
        $course = Courses::where('slug', $req->slug)->first();
    
        /* -------------------- SAVE REGISTRATION -------------------- */
    
        $register = new Registers();
    
        $register->email = $req->email;
        $register->registration_type = $req->registration_type;
        $register->chooseprogramme = $course ? $course->coursename : $req->other_course;
        $register->name = $req->name;
        $register->fathername = $req->fname;
        $register->address = $req->address;
        $register->city = $req->city;
        $register->employeename = $req->empname;
        $register->designation = $req->designation;
        $register->cellnumber = $req->cellnumber;
        $register->dateofbirth = $req->date;
        $register->cnic = $req->cnic;
        $register->qualification = $req->qualification;
    
        /* -------------------- FILE UPLOAD -------------------- */
    
        $register->Image = $this->uploadFile($req,'file1');
        $register->cnic_front = $this->uploadFile($req,'cnic_front');
        $register->cnic_back = $this->uploadFile($req,'cnic_back');
    
        $register->save();
    
        /* -------------------- ZOHO DATA -------------------- */
    
        $zohoData = [
            "data" => [[
                "Email" => $req->email,
                "Complete_Address" => $req->address,
                "Course" => $course->zoho_id ?? 0000,
                "Contact_No" => $req->cellnumber,
                "City" => $req->city,
                "Qualification" => $req->qualification,
                "First_Name" => $req->name,
                "Lead_Status" => "Contacted",
                "Job_Designation" => $req->designation,
                "Employer_Name" => $req->empname,
                "CNIC" => $req->cnic,
                "Country_Name" => "Pakistan",
                "Father_Husband_s_Name" => $req->fname,
                "Date_of_Birth" => $req->date,
                "WhatsApp_Number" => $req->cellnumber,
                "Lead_Source" => "Registration Form",
                "Last_Name" => "N/A"
            ]]
        ];
    
        /* -------------------- ZOHO SYNC -------------------- */
    
        $accessToken = $this->fetchZohoAccessToken();
    
        if($accessToken && is_string($accessToken))
        {
            $this->syncZohoLead($accessToken,$req->cellnumber,$zohoData);
        }
    
        /* -------------------- PAYMENT -------------------- */
    
        if ($req->payment_method == "pay_now")
        {
            $fee = $this->getCourseFee($req->cfma);
    
            return view("website.gopayfast",[
                'fee'=>$fee,
                "course"=>$req->cfma,
                'phone'=>$req->phone,
                'email'=>$req->email,
                "reg_id"=>$register->id
            ]);
        }
    
        return redirect()->route('thankyou')
            ->with('success','Form Submitted Successfully!');
    }
    
    private function uploadFile($req,$field)
    {
        if($req->file($field))
        {
            $file = $req->file($field);
            $name = $file->hashName();
            $file->move(public_path('files'),$name);
            return $name;
        }
    
        return null;
    }
    
    private function syncZohoLead($token,$phone,$data)
    {
        try{
    
            $search = Http::withHeaders([
                "Authorization"=>"Bearer $token"
            ])->get("https://www.zohoapis.com/crm/v7/Leads/search",[
                'phone'=>$phone
            ]);
    
            $result = $search->json();
    
            if(isset($result['data']))
            {
                $leadId = $result['data'][0]['id'];
    
                Http::withHeaders([
                    "Authorization"=>"Bearer $token"
                ])->put("https://www.zohoapis.com/crm/v7/Leads/$leadId",$data);
            }
            else
            {
                Http::withHeaders([
                    "Authorization"=>"Bearer $token"
                ])->post("https://www.zohoapis.com/crm/v7/Leads",$data);
            }
    
        }catch(\Exception $e){
    
            \Log::error('Zoho Error : '.$e->getMessage());
    
        }
    }
    
    private function getCourseFee($course)
    {
        $fees = [
            "Advanced MS Excel"=>15000,
            "Basic to Intermediate Python Programming"=>18500,
            "Certificate in Information Technology"=>12400,
            "Computerized Accounting"=>15000,
            "Customer Services Specialist"=>28000,
            "Dashboard Reporting with Power BI"=>28000,
            "Data Analytics with Tableau"=>16000,
            "Financial Modeling and Analysis"=>15000
        ];
    
        return $fees[$course] ?? 0;
    }



    public function payment_success(Request $request)
    {
        // dd($request->all());




        if($request->err_msg!=null)
        {
            return redirect(url("/"));
        }
        else
        {
            $user_data=Registers::find($request->basket_id);
            $course_amount=$request->transaction_amount;
            $payment_method=$request->issuer_name;



            Mail::send("emails.payment", ["user_data" => $user_data,'payment_method'=>$payment_method,'course_amount'=>$course_amount], function ($message) use ($user_data) {
                $message->to($user_data->email, $user_data->name)->subject("YouExcel Training program Registration Confirmation");
                $message->from("send@youexceltraining.com", "YouExcel Training");
            });
            //dd($user_data);
            return view("website.payment_success");
        }
        Session::flash('payment_done', 'Appoinment has been Successfully !!');
        return redirect('/');
    }

    // function showtable()
    // {
    //     $data = Registers::orderBy("id", "desc")->get();
    //     // dd($data[100]);
    //     // return view('add-course', ['Courses'=>$data]);
    //     return view('adminpanel.view-registered', compact('data'));
    // }
    
    public function showtable(Request $request)
    {
        if ($request->ajax()) {
            try {
                $data = Registers::orderBy('id', 'desc');
    
                // ✅ pehle table assign karo (return mat karo abhi)
                $table = DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('form_type', fn($row) => 'Registration Form')
                    ->addColumn('select', fn($row) => '<input type="checkbox" name="items[]" value="'.$row->id.'">')
                    ->addColumn('image', fn($row) => $row->Image ? '<a target="_blank" href="'.url('/files/'.$row->Image).'">View File</a>' : 'N/A')
                    ->addColumn('cnic_front', fn($row) => $row->cnic_front ? '<a target="_blank" href="'.url('/files/'.$row->cnic_front).'">View File</a>' : 'N/A')
                    ->addColumn('cnic_back', fn($row) => $row->cnic_back ? '<a target="_blank" href="'.url('/files/'.$row->cnic_back).'">View File</a>' : 'N/A');
    
                // ✅ permission check (chain ke bahar)
                if (auth()->user()->can('delete registration form')) {
                    $table->addColumn('action', function($row) {
                        $url = route('delete.registered', $row->id);
    
                        return '<a class="btn btn-danger delete-confirm" href="'.$url.'">
                                    <i class="fas fa-trash-alt"></i>
                                </a>';
                    });
                }
    
                // ✅ raw columns dynamic
                $rawColumns = ['select','image','cnic_front','cnic_back'];
    
                if (auth()->user()->can('delete registration form')) {
                    $rawColumns[] = 'action';
                }
    
                // ✅ final return
                return $table->rawColumns($rawColumns)->make(true);
    
            } catch (\Exception $e) {
                return response()->json(['error' => $e->getMessage()]);
            }
        }
    
        return view('adminpanel.view-registered');
    }
    
    public function exportCsv()
    {
        $fileName = 'registers.csv';

        // Select all rows you want
        $registers = Registers::select(
            'email',
            'registration_type',
            'chooseprogramme',
            'name',
            'fathername',
            'address',
            'city',
            'employeename',
            'designation',
            'cellnumber',
            'dateofbirth',
            'cnic',
            'qualification',
            'DateTime'
        )->get();

        $headers = [
            "Content-Type" => "text/csv",
            "Content-Disposition" => "attachment; filename=\"$fileName\"",
        ];

        $columns = [
            'Email',
            'Form Type',
            'Programme',
            'Name',
            'Father Name',
            'Address',
            'City',
            'Employer Name',
            'Designation',
            'Cell Number',
            'Date of Birth',
            'CNIC/National ID',
            'Qualification',
            'DateTime',
        ];

        $callback = function() use ($registers, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($registers as $row) {
                fputcsv($file, [
                    $row->email,
                    'Registration Form',
                    $row->chooseprogramme,
                    $row->name,
                    $row->fathername,
                    $row->address,
                    $row->city,
                    $row->employeename,
                    $row->designation,
                    $row->cellnumber,
                    $row->dateofbirth,
                    $row->cnic,
                    $row->qualification,
                    $row->DateTime, // virtual column
                ]);
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
    
    public function exportExcel()
    {
        $fileName = 'registers.xls';
    
        $registers = Registers::select(
            'email',
            'registration_type',
            'chooseprogramme',
            'name',
            'fathername',
            'address',
            'city',
            'employeename',
            'designation',
            'cellnumber',
            'dateofbirth',
            'cnic',
            'qualification',
            'DateTime'
        )->get();
    
        $headers = [
            "Content-Type" => "application/vnd.ms-excel",
            "Content-Disposition" => "attachment; filename=\"$fileName\"",
        ];
    
        $callback = function() use ($registers) {
            echo '<table border="1">';
            echo '<tr>';
            echo '<th>Email</th>';
            echo '<th>Form Type</th>';
            echo '<th>Choose Programme</th>';
            echo '<th>Name</th>';
            echo '<th>Father Name</th>';
            echo '<th>Address</th>';
            echo '<th>City</th>';
            echo '<th>Employer Name</th>';
            echo '<th>Designation</th>';
            echo '<th>Cell Number</th>';
            echo '<th>Date of Birth</th>';
            echo '<th>CNIC/National ID</th>';
            echo '<th>Qualification</th>';
            echo '<th>DateTime</th>';
            echo '</tr>';
    
            foreach ($registers as $row) {
                echo '<tr>';
                echo '<td>'.$row->email.'</td>';
                echo '<td>Registration Form</td>';
                echo '<td>'.$row->chooseprogramme.'</td>';
                echo '<td>'.$row->name.'</td>';
                echo '<td>'.$row->fathername.'</td>';
                echo '<td>'.$row->address.'</td>';
                echo '<td>'.$row->city.'</td>';
                echo '<td>'.$row->employeename.'</td>';
                echo '<td>'.$row->designation.'</td>';
                echo '<td>'.$row->cellnumber.'</td>';
                echo '<td>'.$row->dateofbirth.'</td>';
                echo '<td>'.$row->cnic.'</td>';
                echo '<td>'.$row->qualification.'</td>';
                echo '<td>'.$row->DateTime.'</td>';
                echo '</tr>';
            }
    
            echo '</table>';
        };
    
        return response()->stream($callback, 200, $headers);
    }



    function delete($id)
    {
        $data = Registers::find($id);
        $data->delete();
        return redirect('view-registered');
    }

    public function multiDelete(Request $request)
    {
        // dd($request->all());
        // Delete the selected items
        Registers::destroy($request->items);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Selected items deleted successfully.');
    }
}
