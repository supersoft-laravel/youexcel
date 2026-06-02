<?php

namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\BenazirForm;
use App\Models\ProjectRegistration;
use App\Models\WebsiteProject;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Session;
use Mail;
use Yajra\DataTables\Facades\DataTables;


use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function projectname()  
    {
        $projects = Project::orderBy("project_name","asc")->get();
        return view('adminpanel.project_name', compact('projects'));
    }

    public function projectstore(Request $request)
    {
        // dd($request);
        Project::create([
            'project_name' => $request->project_name,
        ]);
        return redirect()->route('project.name');
    }

    function deleteproject($id)
    {
        $data= Project::find($id);
        $data->delete();
        return redirect()->route('project.name');
    }

    public function editproject($id)
    {
        $project = Project::findOrFail($id);
        return view('adminpanel.edit_project', compact('project'));
    }

    public function Updateproject(Request $request, $id) 
    {
        Project::findOrFail($id)->update([
            'project_name' => $request->project_name,
        ]);
        return redirect()->route('project.name');
    }

    // public function project_form()
    // {
    //     $projects = Project::get();
    //     return view('website.project_form', compact('projects'));
    // }
    public function project_form($course = null)
    {
        try {
            // Fetch all projects from the database
            // $projects = Project::get();
            $projects = [
                // 'Artificial Intelligence (Machine Learning; Deep Learning; Communication)',
                // 'Cyber Security (CEH, CHFI)',
                // 'Data Mining / Business Intelligence',
                // 'Advance Python Programming & Applications',
                // 'Big Data Analytics Techniques',
                // 'Oracle Database SQL or PL/SQL',
                // 'Digital Forensic & Cyber Security',
                'Artificial Intelligence (Machine Learning)',
                'Cyber Security',
                'Digital Marketing & SEO',
                'Data Analysis using Python',
                'MS Power BI',
            ];
    
            // Map URL course slugs to project names dynamically
            $slugToProjectMapping = [
                'ppa' => 'Advance Python Programming & Applications',
                'dmbi' => 'Data Mining / Business Intelligence',
                'wad' => 'Advance Web Application Development',
                'pbida' => 'MS Power BI and Data Analyst Professional Certificate',
                'cs' => 'Cyber Security (CEH, CHFI)',
                'dap' => 'Data Analysis Using Python',
            ];
    
            // Find the matching course name based on the slug
            $course_name = $slugToProjectMapping[$course] ?? null;
    
            return view('website.pages.enquiry-forms.project_form', compact('projects', 'course_name'));
        } catch (\Exception $e) {
            \Log::error('Project Form Error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong. Please try again.');
        }
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


    public function storeprojectwebsite(Request $request)
    {
        // dd($request->all());
        // $request->project_name_2, $request->project_name_3);
        try {
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
            
            // Determine if project_name is an array or not
            $projectName = is_array($request->project_name)
                ? implode(',', $request->project_name)
                : $request->project_name;
                
            // Check if an entry with same phone and email already exists
            $exists = WebsiteProject::where('phone', $request->phone)
                                    ->where('email', $request->email)
                                    ->exists();
            
            if ($exists) {
                return redirect()->back()->with('error', 'You already enquired the project.');
            }
            
            // Insert data into the database
            WebsiteProject::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'whatsapp' => $request->whatsapp,
                'email' => $request->email,
                'project_name' => $projectName,
                'project_name_2' => $request->last_education,
                'project_name_3' => $request->project_name_3 ?? 'Null',
                'age' => $request->age,
                'city' => $request->city,
                'comments' => $request->comments,
                'preferred_timing' => json_encode($request->preferred_timing),
                // "Department" => "Project",
                // Store as JSON
            ]);

            $accessToken = $this->fetchZohoAccessToken();

            $zohoData = [
                "data" => [
                    [
                        "Email" => $request->email ?? "N/A", // done
                        // "Complete_Address" => $req->address ?? "N/A",
                        "Contact_No" => $request->phone ?? "N/A", // done
                        "City" => $request->city ?? "N/A", // done
                        "First_Name" => $request->name ?? "N/A", // done
                        "Last_Name" => "N/A",
                        "WhatsApp_Number" => $request->whatsapp ?? "N/A", // done
                        "Comments" => $request->comments ?? "N/A", // done
                        "Lead_Source" => "Project Enquiry", // Default value

                    ]
                ]
            ];

            // dd($accessToken, $zohoData );


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
            
            // Email data
            $email_data = [
                "name" => $request->name,
                "email" => $request->email,
                "phone" => $request->phone,
                "whatsapp" => $request->whatsapp,
                "project_name" => $projectName,
                "last_education" => $request->last_education,
                "city" => $request->city,
                "comments" => $request->comments,
                "preferred_timing" => $request->preferred_timing,
            ];
            
            $to_name = $request->name;
            $user_email = $request->email;
    
            // Send to user
            Mail::send("emails.project-user-mail", ["email_data" => $email_data], function ($message) use ($to_name, $user_email) {
                $message->to($user_email, $to_name)
                        ->subject("Skills based Training leading to Free International Certification worth approximately $100 or more")
                        ->from("info@youexceltraining.com", "YouExcel Training");
            });
    
            // Send to internal team
            $internal_emails = [
                // 'farhanq@youexceltraining.com',
                'youexcel.connect@gmail.com',
                // 'info@youexceltraining.com',
            ];
    
            foreach ($internal_emails as $internal_email) {
                Mail::send("emails.project-admin-mail", ["email_data" => $email_data], function ($message) use ($to_name, $internal_email) {
                    $message->to($internal_email, $to_name)
                            ->subject("New Project Enquiry Form Submission")
                            ->from("info@youexceltraining.com", "YouExcel Training");
                });
            }
    
            // Flash a success message to the session
            Session::flash('websiteproject_success', 'Your Form has been submitted successfully!');
        } catch (\Exception $e) {
            // Log the exception (optional)
            \Log::error('Error submitting Form: ' . $e->getMessage());
    
            // Flash an error message to the session
            Session::flash('websiteproject_error', 'Oops, something went wrong. Please try again later.');
        }
    
        // Redirect back to the form
        // return redirect()->back();
        return redirect()->to(route('thankyou') . '?project')
                 ->with('success', 'Form Submitted Successfully!');
    }
    
    public function benazir_form()
    {
        try {
            $preferences = [
                'Big Data Analytics with Power BI',
                'Web Development with Python',
                'Customer Services and Sales Representative',
            ];
    
            return view('website.pages.enquiry-forms.benazir_form', compact('preferences'));
        } catch (\Exception $e) {
            Log::error('Benazir Form Error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong. Please try again.');
        }
    }

    
    public function storeprojectbenazir(Request $request)
    {
        try {
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
                
            $exists = BenazirForm::where('contact_no', $request->contact_no)
                                    ->where('email', $request->email)
                                    ->exists();
            
            if ($exists) {
                return redirect()->back()->with('error', 'You already enquired the project.');
            }
            
            if ($request->trade_preference) {
                $trade_preference = is_array($request->trade_preference)
                    ? implode(',', $request->trade_preference)
                    : $request->trade_preference;
            } else {
                $trade_preference = null;
            }
            
            // Insert data into the database
            BenazirForm::create([
                'name' => $request->name,
                'contact_no' => $request->contact_no,
                'whatsapp_no' => $request->whatsapp_no,
                'email' => $request->email,
                'trade_preference' => $trade_preference,
                'last_education' => $request->last_education,
                'age' => $request->age,
                'city' => $request->city,
                'comments' => $request->comments,
                'preferred_timing' => json_encode($request->preferred_timing),
            ]);
            
            // Email data
            $email_data = [
                "name" => $request->name,
                "email" => $request->email,
                "contact_no" => $request->contact_no,
                "whatsapp_no" => $request->whatsapp_no,
                "last_education" => $request->last_education,
                "age" => $request->age,
                "city" => $request->city,
                "comments" => $request->comments,
                "preferred_timing" => $request->preferred_timing,
                "trade_preference" => $trade_preference,
            ];
            
            $to_name = $request->name;
            $user_email = $request->email;
    
            // Send to user
            // Mail::send("emails.bbshrrdb-user-mail", ["email_data" => $email_data], function ($message) use ($to_name, $user_email) {
            //     $message->to($user_email, $to_name)
            //             ->subject("Benazir Bhutto Shaheed Human Resource, Research and Development Board (BBSHRRDB)")
            //             ->from("info@youexceltraining.com", "YouExcel Training");
            // });
    
            // // Send to internal team
            // $internal_emails = [
            //     'youexcel.connect@gmail.com',
            //     // 'info@youexceltraining.com',
            // ];
    
            // foreach ($internal_emails as $internal_email) {
            //     Mail::send("emails.bbshrrdb-admin-mail", ["email_data" => $email_data], function ($message) use ($to_name, $internal_email) {
            //         $message->to($internal_email, $to_name)
            //                 ->subject("New BBSHRRDB Enquiry Form Submission")
            //                 ->from("info@youexceltraining.com", "YouExcel Training");
            //     });
            // }
    
            // Flash a success message to the session
            Session::flash('websiteproject_success', 'Your Form has been submitted successfully!');
            return redirect()->route('thankyou')->with('success', 'Form Submitted Successfully!');
        } catch (\Exception $e) {
            // Log the exception (optional)
            Log::error('Error submitting Form: ' . $e->getMessage());
            // Flash an error message to the session
            Session::flash('websiteproject_error', 'Oops, something went wrong. Please try again later.');
        }
    }
    
    public function registrationFormProject()
    {
        try {
            $preferences = [
                'Big Data Analytics with Power BI',
                'Web Development with Python',
                'Customer Services and Sales Representative',
            ];
    
            return view('website.pages.forms.registration_project', compact('preferences'));
        } catch (\Exception $e) {
            Log::error('Registration Form Error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong. Please try again.');
        }
    }
    
    public function registrationFormProjectStore(Request $request)
    {
        try {
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
                
            $exists = ProjectRegistration::where('contact_no', $request->contact_no)
                                    ->where('email', $request->email)
                                    ->exists();
            
            if ($exists) {
                return redirect()->back()->with('error', 'You already registered the project.');
            }
            
            if ($request->trade_preference) {
                $trade_preference = is_array($request->trade_preference)
                    ? implode(',', $request->trade_preference)
                    : $request->trade_preference;
            } else {
                $trade_preference = null;
            }
            
            // Insert data into the database
            ProjectRegistration::create([
                'name' => $request->name,
                'father_name' => $request->father_name,
                'cnic' => $request->cnic,
                'gender' => $request->gender,
                'present_address' => $request->present_address,
                'domicile' => $request->domicile,
                'contact_no' => $request->contact_no,
                'whatsapp_no' => $request->whatsapp_no,
                'email' => $request->email,
                'age' => $request->age,
                'present_district' => $request->present_district,
                'city' => $request->city,
                'trade_preference' => $trade_preference,
                'last_education' => $request->last_education,
                'status' => $request->status,
                'preferred_timing' => json_encode($request->preferred_timing),
                'comments' => $request->comments,
            ]);
            
            // Email data
            $email_data = [
                'name' => $request->name,
                'father_name' => $request->father_name,
                'cnic' => $request->cnic,
                'gender' => $request->gender,
                'present_address' => $request->present_address,
                'domicile' => $request->domicile,
                'contact_no' => $request->contact_no,
                'whatsapp_no' => $request->whatsapp_no,
                'email' => $request->email,
                'age' => $request->age,
                'present_district' => $request->present_district,
                'city' => $request->city,
                'trade_preference' => $trade_preference,
                'last_education' => $request->last_education,
                'status' => $request->status,
                'preferred_timing' => json_encode($request->preferred_timing),
                'comments' => $request->comments,
            ];
            
            $to_name = $request->name;
            $user_email = $request->email;
    
            // Send to user
            // Mail::send("emails.bbshrrdb-user-mail", ["email_data" => $email_data], function ($message) use ($to_name, $user_email) {
            //     $message->to($user_email, $to_name)
            //             ->subject("Benazir Bhutto Shaheed Human Resource, Research and Development Board (BBSHRRDB)")
            //             ->from("info@youexceltraining.com", "YouExcel Training");
            // });
    
            // // Send to internal team
            // $internal_emails = [
            //     'youexcel.connect@gmail.com',
            //     // 'info@youexceltraining.com',
            // ];
    
            // foreach ($internal_emails as $internal_email) {
            //     Mail::send("emails.bbshrrdb-admin-mail", ["email_data" => $email_data], function ($message) use ($to_name, $internal_email) {
            //         $message->to($internal_email, $to_name)
            //                 ->subject("New BBSHRRDB Enquiry Form Submission")
            //                 ->from("info@youexceltraining.com", "YouExcel Training");
            //     });
            // }
    
            // Flash a success message to the session
            Session::flash('websiteproject_success', 'Your Form has been submitted successfully!');
            return redirect()->route('thankyou')->with('success', 'Form Submitted Successfully!');
        } catch (\Exception $e) {
            // Log the exception (optional)
            Log::error('Error submitting Form: ' . $e->getMessage());
            // Flash an error message to the session
            Session::flash('websiteproject_error', 'Oops, something went wrong. Please try again later.');
        }
    }

    // function viewprojectform()
    // {
    //     $data = WebsiteProject::orderBy('id','DESC')->get();
    //     // $data = LeadForm::all();
    //     // dd($data);
    //     // return view('add-course', ['Courses'=>$data]);
    //     return view('adminpanel.view-website-project', compact('data'));
    // }
    
    public function viewprojectform(Request $request)
    {
        if ($request->ajax()) {
            try {
                $data = WebsiteProject::orderBy('id','desc');
    
                // ✅ table assign karo
                $table = DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('select', fn($row) => '<input type="checkbox" name="ids[]" value="'.$row->id.'" class="rowCheckbox">')
                    ->addColumn('preferred_timing', function($row) {
                        $timings = json_decode($row->preferred_timing, true);
                        return $timings ? implode(', ', $timings) : 'No preference selected';
                    })
                    ->addColumn('submitted_at', fn($row) => \Carbon\Carbon::parse($row->created_at)->format('d M Y, h:i A'))
                    ->addColumn('form_type', fn($row) => 'Project Form');
    
                // ✅ permission check
                if (auth()->user()->can('delete navttc enquiry form')) {
                    $table->addColumn('action', function($row) {
                        return '<a class="btn btn-danger delete-confirm" href="'.route('project.form.delete', $row->id).'">
                                    <i class="fas fa-trash-alt"></i>
                                </a>';
                    });
                }
    
                // ✅ raw columns dynamic
                $rawColumns = ['select'];
    
                if (auth()->user()->can('delete navttc enquiry form')) {
                    $rawColumns[] = 'action';
                }
    
                // ✅ return
                return $table->rawColumns($rawColumns)->make(true);
    
            } catch (\Throwable $th) {
                return response()->json(['error' => $th->getMessage()]);
            }
        }
    
        return view('adminpanel.view-website-project');
    }

    public function viewprojectformdelete($id)
    {
        WebsiteProject::findOrFail($id)->delete();
        return redirect()->back();
    }
    
    public function bulkDelete(Request $request)
    {
        $ids = $request->ids;
    
        if (!$ids) {
            return back()->with('error', 'No records selected.');
        }
    
        WebsiteProject::whereIn('id', $ids)->delete();
    
        return back()->with('success', 'Selected records deleted successfully.');
    }

    function viewbbshrrdbform()
    {
        $data = BenazirForm::orderBy('id','DESC')->get();
        return view('adminpanel.view-bbshrrdb-form', compact('data'));
    }

    public function viewbbshrrdbformdelete($id)
    {
        BenazirForm::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Form deleted successfully!');
    }
    
    public function bulkDeleteBbshrrdb(Request $request)
    {
        $ids = $request->ids;
    
        if (!$ids) {
            return back()->with('error', 'No records selected.');
        }
    
        BenazirForm::whereIn('id', $ids)->delete();
    
        return back()->with('success', 'Selected records deleted successfully.');
    }

    // function viewprojectregform()
    // {
    //     $data = ProjectRegistration::orderBy('id','DESC')->get();
    //     return view('adminpanel.view-projectregistration-form', compact('data'));
    // }
    
    public function viewprojectregform(Request $request)
    {
        if ($request->ajax()) {
            try {
                $data = ProjectRegistration::orderBy('id','desc');
    
                // ✅ table assign karo
                $table = DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('select', fn($row) => '<input type="checkbox" name="ids[]" value="'.$row->id.'" class="rowCheckbox">')
                    ->addColumn('trade_pref_1', function($row) {
                        $prefs = array_filter(array_map('trim', explode(',', $row->trade_preference)));
                        return array_values($prefs)[0] ?? 'N/A';
                    })
                    ->addColumn('trade_pref_2', function($row) {
                        $prefs = array_filter(array_map('trim', explode(',', $row->trade_preference)));
                        return array_values($prefs)[1] ?? 'N/A';
                    })
                    ->addColumn('trade_pref_3', function($row) {
                        $prefs = array_filter(array_map('trim', explode(',', $row->trade_preference)));
                        return array_values($prefs)[2] ?? 'N/A';
                    })
                    ->addColumn('preferred_timing', function($row) {
                        $timings = json_decode($row->preferred_timing, true);
                        return $timings ? implode(', ', $timings) : 'No preference selected';
                    })
                    ->addColumn('submitted_at', fn($row) => \Carbon\Carbon::parse($row->created_at)->format('d M Y, h:i A'))
                    ->addColumn('status_badge', function($row) {
                        return $row->status === 'employed'
                            ? '<span class="badge bg-success">Employed</span>'
                            : '<span class="badge bg-secondary">Unemployed</span>';
                    })
                    ->addColumn('form_type', fn($row) => 'Project Registration Form');
    
                // ✅ permission check
                if (auth()->user()->can('delete bbshrrdb registration form')) {
                    $table->addColumn('action', function($row) {
                        return '<a class="btn btn-danger delete-confirm" href="'.route('projectreg.form.delete', $row->id).'">
                                    <i class="fas fa-trash-alt"></i>
                                </a>';
                    });
                }
    
                // ✅ raw columns dynamic
                $rawColumns = ['select','status_badge'];
    
                if (auth()->user()->can('delete bbshrrdb registration form')) {
                    $rawColumns[] = 'action';
                }
    
                // ✅ return
                return $table->rawColumns($rawColumns)->make(true);
    
            } catch (\Throwable $th) {
                return response()->json(['error' => $th->getMessage()]);
            }
        }
    
        return view('adminpanel.view-projectregistration-form');
    }

    public function viewprojectregdelete($id)
    {
        ProjectRegistration::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Form deleted successfully!');
    }
    
    public function bulkDeleteProjectreg(Request $request)
    {
        $ids = $request->ids;
    
        if (!$ids) {
            return back()->with('error', 'No records selected.');
        }
    
        ProjectRegistration::whereIn('id', $ids)->delete();
    
        return back()->with('success', 'Selected records deleted successfully.');
    }


}
