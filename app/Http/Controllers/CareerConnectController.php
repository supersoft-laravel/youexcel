<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\CareerConnect;
use App\Models\CareerConnectJob;
use App\Models\CareerConnectEmpInterest;
use App\Models\CareerConnectCandidate;
use App\Models\JobApplication;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class CareerConnectController extends Controller
{
    public function index()
    {
        try {
            return view('website.pages.career-connect.career-connect');
        } catch (\Throwable $th) {
            Log::error('Career Connect view Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
    
    public function showForm($formType)
    {
        if (!in_array($formType, ['student_alumni', 'career_guidance', 'employer_partnership'])) {
            abort(404, 'Invalid form type');
        }
        
        $jobs = CareerConnectJob::where('status', 'approved')
            ->where(function ($q) {
                $q->whereDate('deadline', '>=', now()->toDateString())
                  ->orWhereNull('deadline');
            })
            ->get();
            
        // Get job_ref from URL if available
        $jobRef = request('job_ref');
        $selectedJobs = [];
    
        if ($jobRef) {
            $job = CareerConnectJob::where('ref_no', $jobRef)->first();
            if ($job) {
                $selectedJobs = [$job->id];
            }
        }
        
        $candidates = CareerConnectCandidate::where('status', 'approved')
        ->get();
            
        // Get job_ref from URL if available
        $candidateRef = request('candidate_ref');
        $selectedCandidates = [];
    
        if ($candidateRef) {
            $candidate = CareerConnectCandidate::where('ref_no', $candidateRef)->first();
            if ($candidate) {
                $selectedCandidates = [$candidate->id];
            }
        }

        // Fetch all expertise_areas from DB and decode JSON
        $expertiseData = CareerConnect::pluck('expertise_areas')->filter()->toArray();
        $skillsRequiredData = CareerConnect::pluck('skills_required')->filter()->toArray();
    
        $expertiseAreas = collect($expertiseData)
            ->flatMap(function ($item) {
                // Decode JSON safely
                $decoded = json_decode($item, true);
                return is_array($decoded) ? $decoded : [];
            })
            ->unique()
            ->values()
            ->toArray();
            
        $skillsRequiredAreas = collect($skillsRequiredData)
            ->flatMap(function ($item) {
                // Decode JSON safely
                $decoded = json_decode($item, true);
                return is_array($decoded) ? $decoded : [];
            })
            ->unique()
            ->values()
            ->toArray();
    
        return view('website.pages.career-connect.career-connect-form', [
            'formType' => $formType,
            'expertiseAreas' => $expertiseAreas,
            'skillsRequiredAreas' => $skillsRequiredAreas,
            'jobs' => $jobs,
            'selectedJobs' => $selectedJobs,
            'candidates' => $candidates,
            'selectedCandidates' => $selectedCandidates,
        ]);
    }
    
    public function submitForm(Request $request)
    {
        try {
            $formType = $request->input('form_type');

            // Validate form type
            if (!in_array($formType, ['student_alumni', 'career_guidance', 'employer_partnership'])) {
                Log::warning('Invalid form type provided', ['form_type' => $formType]);
                throw new \Exception('Invalid form type');
            }

            $rules = [
                'form_type' => 'required|in:student_alumni,career_guidance,employer_partnership',
                'g-recaptcha-response' => 'required',
                'confirmation_agreement' => 'required|accepted',
            ];

            if ($formType == 'student_alumni') {
                $rules = array_merge($rules, [
                    'first_name' => 'required|string|max:255',
                    'last_name' => 'required|string|max:255',
                    'email' => 'required|email|max:255',
                    'phone' => 'required|string|max:20',
                    'gender' => 'required|string|max:20',
                    'linkedin_profile' => 'nullable|url|max:255',
                    'github_profile' => 'nullable|url|max:255',
                    'portfolio_link' => 'nullable|url|max:255',
                    'resume_path' => 'required|file|mimes:pdf,doc,docx|max:2048',
                    'experience' => 'nullable|string',
                    'preferred_opportunities' => 'required|in:Job,Internship,Freelance,Hybrid,Remote',
                    'association_with_youexcel' => 'required|in:student,alumni,other',
                    'expertise_areas' => 'required|string',
                    'experience_level' => 'required|string|max:255',
                    'jobs' => 'nullable|array',
                    'jobs.*' => 'exists:career_connect_jobs,id',
                ]);
            } elseif ($formType == 'career_guidance') {
                $rules = array_merge($rules, [
                    'first_name' => 'required|string|max:255',
                    'last_name' => 'required|string|max:255',
                    'email' => 'required|email|max:255',
                    'phone' => 'required|string|max:20',
                    'gender' => 'required|string|max:20',
                    'linkedin_profile' => 'nullable|url|max:255',
                    'resume_path' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
                    'area_of_guidance' => 'required|in:Resume Optimization,LinkedIn Profile Optimization,Interview Tips,Career Counselling,Portfolio Review',
                    'experience_level' => 'required|in:Student,Fresh Graduate,Early Career,Experienced',
                    'preferred_mode' => 'required|in:Online,In-person',
                    'preferred_datetime' => 'required|date',
                    'additional_message' => 'nullable|string',
                ]);
            } elseif ($formType == 'employer_partnership') {
                $rules = array_merge($rules, [
                    'company_name' => 'required|string|max:255',
                    'contact_person_name' => 'required|string|max:255',
                    'email' => 'required|email|max:255',
                    'phone' => 'required|string|max:20',
                    'website_link' => 'nullable|url|max:255',
                    'job_title' => 'required|string|max:255',
                    'department' => 'nullable|string|max:255',
                    'experience_level' => 'required|string|max:255',
                    'job_type' => 'required|in:Full-Time,Internship,Part-Time,Freelance,On-the-Job Training',
                    'skills_required' => 'nullable|string',
                    'stipend_range' => 'nullable|string|max:255',
                    'location' => 'nullable|string|max:255',
                    'job_description' => 'nullable|string',
                    'application_deadline' => 'nullable|date',
                    'job_details_upload' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
                    'additional_message' => 'nullable|string',
                    'candidates' => 'nullable|array',
                    'candidates.*' => 'exists:career_connect_candidates,id',
                ]);
            }

            // Validate the request
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                Log::warning('Form validation failed', [
                    'errors' => $validator->errors()->toArray(),
                    'confirmation_agreement' => $request->input('confirmation_agreement')
                ]);
                return redirect()->back()->withErrors($validator)->withInput();
            }
            
            $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                    'secret' => '6LcCcgErAAAAAGSNCKqdrhJSuFA1vOjs-r--1Mje',
                    'response' => $request['g-recaptcha-response'],
                ]);
                $data = $response->json();
    
                if (!$data['success']) {
                    return redirect()->back()->withErrors(['captcha' => 'reCAPTCHA verification failed.']);
                }

            // Prepare data for storage
            $data = $request->only([
                'form_type', 'first_name', 'last_name', 'email', 'phone', 'gender', 'linkedin_profile',
                'github_profile', 'portfolio_link', 'experience', 'preferred_opportunities',
                'association_with_youexcel', 'expertise_areas', 'area_of_guidance',
                'experience_level', 'preferred_mode', 'preferred_datetime', 'additional_message',
                'company_name', 'contact_person_name', 'website_link', 'job_title', 'department',
                'job_type', 'skills_required', 'stipend_range', 'location', 'job_description',
                'application_deadline', 'confirmation_agreement'
            ]);

            // Handle file uploads
            try {
                if ($request->hasFile('resume_path')) {
                    $data['resume_path'] = $request->file('resume_path')->store('resumes', 'public');
                }

                if ($request->hasFile('job_details_upload')) {
                    $data['job_details_upload'] = $request->file('job_details_upload')->store('job_details', 'public');
                }
            } catch (\Exception $e) {
                Log::error('File upload failed', [
                    'error' => $e->getMessage(),
                    'file' => $request->hasFile('resume_path') ? 'resume_path' : 'job_details_upload'
                ]);
                throw $e;
            }

            // Handle JSON encoding for arrays

            if ($request->filled('expertise_areas')) {
                // Decode the JSON string Tagify sends
                $decoded = json_decode($request->expertise_areas, true);
            
                // Extract the 'value' from each Tagify object
                $tags = collect($decoded)->pluck('value')->filter()->values()->toArray();
            
                // Save clean JSON array
                $data['expertise_areas'] = json_encode($tags);
            }
            
            if ($request->filled('skills_required')) {
                // Decode the JSON string Tagify sends
                $decoded = json_decode($request->skills_required, true);
            
                // Extract the 'value' from each Tagify object
                $tags = collect($decoded)->pluck('value')->filter()->values()->toArray();
            
                // Save clean JSON array
                $data['skills_required'] = json_encode($tags);
            }

            // Save to database
            try {
                $careerConnect = CareerConnect::create($data);
                
                if ($request->jobs) {
                    foreach($request->jobs as $job){
                        $jobApplication = new JobApplication();
                        $jobApplication->job_id = $job;
                        $jobApplication->career_connect_id = $careerConnect->id;
                        $jobApplication->save();
                    }
                }
                
                if ($request->candidates) {
                    foreach($request->candidates as $candidate){
                        $empInterest = new CareerConnectEmpInterest();
                        $empInterest->candidate_id = $candidate;
                        $empInterest->career_connect_id = $careerConnect->id;
                        $empInterest->save();
                    }
                }
                if ($formType == 'employer_partnership') {
                    // Generate Auto REF Number
                    $lastJob = CareerConnectJob::latest('id')->first();
                    $nextNumber = $lastJob ? $lastJob->id + 1 : 1;
                    $refNo = 'JOB-' . str_pad($nextNumber, 5, '0', STR_PAD_LEFT);
                
                    // Save job
                    $careerConnectJob = new CareerConnectJob();
                    $careerConnectJob->ref_no = $refNo;
                    $careerConnectJob->job_title = $request->job_title;
                    $careerConnectJob->company_name = $request->company_name;
                    $careerConnectJob->minimum_experience = $request->experience_level;
                    $careerConnectJob->expertise = $data['skills_required'] ?? null;
                    $careerConnectJob->deadline = $request->application_deadline;
                    $careerConnectJob->save();
                }
                if ($formType == 'student_alumni') {
                    // Generate Auto REF Number
                    $lastCandidate = CareerConnectCandidate::latest('id')->first();
                    $nextNumber = $lastCandidate ? $lastCandidate->id + 1 : 1;
                    $refNo = 'CAND-' . str_pad($nextNumber, 5, '0', STR_PAD_LEFT);
                    // Save job
                    $careerConnectCandidate = new CareerConnectCandidate();
                    $careerConnectCandidate->ref_no = $refNo;
                    $careerConnectCandidate->name = $request->first_name.' '.$request->last_name;
                    $careerConnectCandidate->phone = $request->phone;
                    $careerConnectCandidate->email = $request->email;
                    $careerConnectCandidate->experience = $request->experience_level;
                    $careerConnectCandidate->expertise = $data['expertise_areas'];
                    $careerConnectCandidate->gender = $request->gender;
                    $careerConnectCandidate->save();
                }
            } catch (\Exception $e) {
                Log::error('Failed to save form data', [
                    'error' => $e->getMessage(),
                    'data' => $data
                ]);
                throw $e;
            }
            
            // ---------------- EMAIL HANDLING ----------------
            $formType = $request->input('form_type');
            
            $to_name = trim(($request->first_name ?? '') . ' ' . ($request->last_name ?? ''));
            $to_email = $request->email;
            $admin_email = 'career-connect@youexceltraining.com';
            
            switch ($formType) {
                case 'student_alumni':
                    $subject = 'Thank You for Connecting with YouExcel Career Connect';
                    $view = 'emails.student_alumni_mail';
                    break;
            
                case 'career_guidance':
                    $subject = 'Thank You for Requesting YouExcel Career Guidance';
                    $view = 'emails.career_guidance_mail';
                    break;
            
                case 'employer_partnership':
                    $subject = 'Thank You for Partnering with YouExcel Career Connect';
                    $view = 'emails.employer_partnership_mail';
                    break;
            
                default:
                    throw new \Exception('Invalid form type');
            }
            
            // Send confirmation email to applicant
            try {
                Mail::send($view, [
                    'name' => $to_name,
                    'email' => $to_email
                ], function ($message) use ($subject, $to_email, $to_name) {
                    $message->to($to_email, $to_name)
                            ->subject($subject)
                            ->from('support@youexceltraining.com', 'YouExcel Career Connect');
                });
            
                // Optional: Send a notification to admin
                // Mail::send('emails.admin_notification', [
                //     'form_type' => $formType,
                //     'name' => $to_name,
                //     'email' => $to_email,
                //     'phone' => $request->phone ?? 'N/A'
                // ], function ($message) use ($admin_email, $formType) {
                //     $message->to($admin_email)
                //             ->subject("New {$formType} Submission – YouExcel Career Connect")
                //             ->from('support@youexceltraining.com', 'YouExcel Career Connect');
                // });
            
            } catch (\Exception $e) {
                Log::error('Email sending failed: ' . $e->getMessage());
            }

            return redirect()->route('thankyou')->with('success', 'Form Submitted Successfully!');
        } catch (\Exception $e) {
            Log::error('CareerConnect form submission failed', [
                'error' => $e->getMessage(),
                'form_type' => $formType ?? 'unknown',
                'confirmation_agreement' => $request->input('confirmation_agreement') ?? 'not set'
            ]);
            return redirect()->back()->with('error', 'An error occurred while submitting the form. Please try again.')->withInput();
        }
    }
    
    public function viewFormData($formType)
    {
        try {
            // Validate form type
            if (!in_array($formType, ['student_alumni', 'career_guidance', 'employer_partnership'])) {
                Log::warning('Invalid form type for viewing data', ['form_type' => $formType]);
                abort(404, 'Invalid form type');
            }

            // Fetch data from CareerConnect model
            $forms = CareerConnect::with('jobApplications.careerConnectJob')->where('form_type', $formType)->get();
            Log::info('CareerConnect data retrieved', [
                'form_type' => $formType,
                'record_count' => $forms->count()
            ]);

            // Pass data to the view
            return view('adminpanel.career_connect_form', [
                'formType' => $formType,
                'forms' => $forms
            ]);
        } catch (\Exception $e) {
            Log::error('Failed to retrieve CareerConnect data', [
                'error' => $e->getMessage(),
                'form_type' => $formType
            ]);
            return redirect()->back()->with('error', 'An error occurred while retrieving form data.');
        }
    }
    
    // New method for single deletion
    public function deleteFormData($formType, $id)
    {
        try {
            if (!in_array($formType, ['student_alumni', 'career_guidance', 'employer_partnership'])) {
                Log::warning('Invalid form type for deletion', ['form_type' => $formType, 'id' => $id]);
                abort(404, 'Invalid form type');
            }

            $form = CareerConnect::where('form_type', $formType)->findOrFail($id);
            Log::info('Deleting CareerConnect record', ['form_type' => $formType, 'id' => $id]);

            // Delete associated files
            if ($form->resume_path && Storage::disk('public')->exists($form->resume_path)) {
                Storage::disk('public')->delete($form->resume_path);
                Log::info('Deleted resume file', ['path' => $form->resume_path]);
            }
            if ($form->job_details_upload && Storage::disk('public')->exists($form->job_details_upload)) {
                Storage::disk('public')->delete($form->job_details_upload);
                Log::info('Deleted job details file', ['path' => $form->job_details_upload]);
            }

            $form->delete();
            Log::info('CareerConnect record deleted successfully', ['form_type' => $formType, 'id' => $id]);

            return redirect()->route('admin.career-connect', $formType)->with('success', 'Record deleted successfully.');
        } catch (\Exception $e) {
            Log::error('Failed to delete CareerConnect record', [
                'error' => $e->getMessage(),
                'form_type' => $formType,
                'id' => $id
            ]);
            return redirect()->back()->with('error', 'An error occurred while deleting the record.');
        }
    }

    // New method for bulk deletion
    public function bulkDeleteFormData(Request $request, $formType)
    {
        try {
            if (!in_array($formType, ['student_alumni', 'career_guidance', 'employer_partnership'])) {
                Log::warning('Invalid form type for bulk deletion', ['form_type' => $formType]);
                abort(404, 'Invalid form type');
            }

            $ids = $request->input('ids', []);
            if (empty($ids)) {
                Log::warning('No records selected for bulk deletion', ['form_type' => $formType]);
                return redirect()->back()->with('error', 'No records selected for deletion.');
            }

            $forms = CareerConnect::where('form_type', $formType)->whereIn('id', $ids)->get();
            Log::info('Bulk deleting CareerConnect records', ['form_type' => $formType, 'ids' => $ids]);

            foreach ($forms as $form) {
                // Delete associated files
                if ($form->resume_path && Storage::disk('public')->exists($form->resume_path)) {
                    Storage::disk('public')->delete($form->resume_path);
                    Log::info('Deleted resume file', ['path' => $form->resume_path]);
                }
                if ($form->job_details_upload && Storage::disk('public')->exists($form->job_details_upload)) {
                    Storage::disk('public')->delete($form->job_details_upload);
                    Log::info('Deleted job details file', ['path' => $form->job_details_upload]);
                }
                $form->delete();
            }

            Log::info('CareerConnect records bulk deleted successfully', ['form_type' => $formType, 'ids' => $ids]);
            return redirect()->route('admin.career-connect', $formType)->with('success', 'Selected records deleted successfully.');
        } catch (\Exception $e) {
            Log::error('Failed to bulk delete CareerConnect records', [
                'error' => $e->getMessage(),
                'form_type' => $formType,
                'ids' => $ids
            ]);
            return redirect()->back()->with('error', 'An error occurred while deleting the records.');
        }
    }
    
    
    public function jobboard()
    {
        try {
            $jobs = CareerConnectJob::where('status', 'approved')
            ->where(function ($q) {
                $q->whereDate('deadline', '>=', now()->toDateString())
                  ->orWhereNull('deadline');
            })
            ->get();
            return view('website.pages.career-connect.career-connect-jobs', compact('jobs'));
        } catch (\Throwable $th) {
            Log::error('Career Connect Jobs view Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
    
    //Career Connect Jobs
    public function viewJobData()
    {
        try {
            $jobs = CareerConnectJob::get();
            return view('adminpanel.career_connect_job', [
                'jobs' => $jobs
            ]);
        } catch (\Exception $e) {
            Log::error('Failed to retrieve CareerConnectJob data', [
                'error' => $e->getMessage()
            ]);
            return redirect()->back()->with('error', 'An error occurred while retrieving form data.');
        }
    }
    
    public function approveJob($id)
    {
        $job = CareerConnectJob::findOrFail($id);
        $job->status = 'approved';
        $job->save();
    
        return redirect()->back()->with('success', 'Job approved successfully!');
    }
    public function disapproveJob($id)
    {
        $job = CareerConnectJob::findOrFail($id);
        $job->status = 'disapproved';
        $job->save();
    
        return redirect()->back()->with('success', 'Job disapproved successfully!');
    }
    
    public function deleteJobData($id)
    {
        try {
            $job = CareerConnectJob::findOrFail($id);
            $job->delete();
            return redirect()->route('admin.career-connect-jobs')->with('success', 'Record deleted successfully.');
        } catch (\Exception $e) {
            Log::error('Failed to delete CareerConnectJob record', [
                'error' => $e->getMessage()
            ]);
            return redirect()->back()->with('error', 'An error occurred while deleting the record.');
        }
    }
    
    public function editJobData($id)
    {
        try {
            $job = CareerConnectJob::findOrFail($id);
            return view('adminpanel.career_connect_job_edit', compact('job'));
        } catch (\Exception $e) {
            Log::error('Failed to edit CareerConnectJob record', [
                'error' => $e->getMessage()
            ]);
            return redirect()->back()->with('error', 'An error occurred while deleting the record.');
        }
    }
    
    public function updateJobData(Request $request, $id)
    {
        $request->validate([
            // 'ref_no' => 'required|string|max:255',
            'job_title' => 'nullable|string|max:255',
            'company_name' => 'nullable|string|max:255',
            'minimum_experience' => 'nullable|string|max:255',
            'expertise' => 'nullable|string',
            'deadline' => 'nullable|date',
            'status' => 'required|in:pending,approved,disapproved',
        ]);
    
        $job = CareerConnectJob::findOrFail($id);
    
        $expertise = array_map('trim', explode(',', $request->expertise));
    
        $job->update([
            // 'ref_no' => $request->ref_no,
            'job_title' => $request->job_title,
            'company_name' => $request->company_name,
            'minimum_experience' => $request->minimum_experience,
            'expertise' => json_encode($expertise),
            'deadline' => $request->deadline,
            'status' => $request->status,
        ]);
    
        return redirect()->route('admin.career-connect-jobs')
                         ->with('success', 'Job updated successfully!');
    }


    public function bulkDeleteJobData(Request $request)
    {
        try {
            $ids = $request->input('ids', []);
            $jobs = CareerConnectJob::whereIn('id', $ids)->get();
            foreach ($jobs as $job) {
                $job->delete();
            }
            return redirect()->route('admin.career-connect-jobs')->with('success', 'Selected records deleted successfully.');
        } catch (\Exception $e) {
            Log::error('Failed to bulk delete CareerConnectJob records', [
                'error' => $e->getMessage()
            ]);
            return redirect()->back()->with('error', 'An error occurred while deleting the records.');
        }
    }
    
    //Career Connect Candidate
    public function candidateboard()
    {
        try {
            $candidates = CareerConnectCandidate::where('status', 'approved')
            ->get();
            return view('website.pages.career-connect.career-connect-candidates', compact('candidates'));
        } catch (\Throwable $th) {
            Log::error('Career Connect Candidates view Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
    public function viewCandidateData()
    {
        try {
            $candidates = CareerConnectCandidate::get();
            return view('adminpanel.career_connect_candidate', [
                'candidates' => $candidates
            ]);
        } catch (\Exception $e) {
            Log::error('Failed to retrieve CareerConnectCandidate data', [
                'error' => $e->getMessage()
            ]);
            return redirect()->back()->with('error', 'An error occurred while retrieving form data.');
        }
    }
    
    public function approveCandidate($id)
    {
        $job = CareerConnectCandidate::findOrFail($id);
        $job->status = 'approved';
        $job->save();
    
        return redirect()->back()->with('success', 'Candidate approved successfully!');
    }
    public function disapproveCandidate($id)
    {
        $job = CareerConnectCandidate::findOrFail($id);
        $job->status = 'disapproved';
        $job->save();
    
        return redirect()->back()->with('success', 'Candidate disapproved successfully!');
    }
    
    public function deleteCandidateData($id)
    {
        try {
            $job = CareerConnectCandidate::findOrFail($id);
            $job->delete();
            return redirect()->route('admin.career-connect-candidates')->with('success', 'Record deleted successfully.');
        } catch (\Exception $e) {
            Log::error('Failed to delete CareerConnectCandidate record', [
                'error' => $e->getMessage()
            ]);
            return redirect()->back()->with('error', 'An error occurred while deleting the record.');
        }
    }
    
    public function editCandidateData($id)
    {
        try {
            $candidate = CareerConnectCandidate::findOrFail($id);
            return view('adminpanel.career_connect_candidate_edit', compact('candidate'));
        } catch (\Exception $e) {
            Log::error('Failed to edit CareerConnectCandidate record', [
                'error' => $e->getMessage()
            ]);
            return redirect()->back()->with('error', 'An error occurred while deleting the record.');
        }
    }
    
    public function updateCandidateData(Request $request, $id)
    {
        $request->validate([
            // 'ref_no' => 'required|string|max:255',
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:255',
            'gender' => 'nullable|string|max:255',
            'experience' => 'nullable|string|max:255',
            'expertise' => 'nullable|string',
            'status' => 'required|in:pending,approved,disapproved',
        ]);
    
        $candidate = CareerConnectCandidate::findOrFail($id);
    
        $expertise = array_map('trim', explode(',', $request->expertise));
    
        $candidate->update([
            // 'ref_no' => $request->ref_no,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'experience' => $request->experience,
            'expertise' => json_encode($expertise),
            'status' => $request->status,
        ]);
    
        return redirect()->route('admin.career-connect-candidates')
                         ->with('success', 'Candidate updated successfully!');
    }


    public function bulkDeleteCandidateData(Request $request)
    {
        try {
            $ids = $request->input('ids', []);
            $candidates = CareerConnectCandidate::whereIn('id', $ids)->get();
            foreach ($candidates as $candidate) {
                $candidate->delete();
            }
            return redirect()->route('admin.career-connect-jobs')->with('success', 'Selected records deleted successfully.');
        } catch (\Exception $e) {
            Log::error('Failed to bulk delete CareerConnectCandidate records', [
                'error' => $e->getMessage()
            ]);
            return redirect()->back()->with('error', 'An error occurred while deleting the records.');
        }
    }
    
}
