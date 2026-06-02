@extends('website.app', ['title' => 'Career Connect Form'])

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css">
<!--<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />-->
<link href="https://cdn.jsdelivr.net/npm/tom-select/dist/css/tom-select.bootstrap5.min.css" rel="stylesheet">

<style>
    .section-header {
        background: linear-gradient(135deg, #1a2a3a 0%, #2c3e50 100%) !important;
        color: white !important;
        padding: 180px 0 40px 0 !important;
        /*margin-top: 120px;*/
        position: relative !important;
        overflow: hidden !important;
    }

    .section-header::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(rgb(48 48 48 / 85%), rgba(0, 40, 104, 0.9)),
            url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');
        background-size: cover;
        background-position: center;
        z-index: 0;
    }

    .section-content {
        padding: 80px 0;
    }

    .section-title h2 {
        font-weight: 700;
        color: #fff;
        font-size: 2.5rem;
        margin-bottom: 20px;
        position: relative;
    }

    .section-title h2::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: #ff9800;
        border-radius: 2px;
    }

    .section-title p {
        font-size: 1.1rem;
        max-width: 700px;
        margin: 30px auto 0;
        color: #fff;
        opacity: 0.9;
    }
</style>

<style>
    .custom-checkbox .form-check-input {
        display: none;
    }
    .custom-checkbox .custom-checkbox-icon {
        display: inline-block;
        width: 20px;
        height: 20px;
        border: 2px solid #007bff;
        border-radius: 4px;
        vertical-align: middle;
        margin-right: 8px;
        position: relative;
    }
</style>

<style>
.ts-dropdown,
.ts-dropdown-content,
.tom-select-dropdown {
    position: absolute !important;
    z-index: 9999999 !important;
    background: #fff !important;
    border: 1px solid #ccc;
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);
}

.ts-control, .ts-wrapper {
    position: relative !important;
    z-index: 100 !important;
}
</style>


<section class="space-extra-bottom section-header">
    <div class="bg-pattern"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="section-title text-center position-relative m-5">
                    <h2>
                        <!--@if($formType == 'student_alumni')-->
                        <!--        Students & Alumni Form-->
                        <!--    @elseif($formType == 'career_guidance')-->
                        <!--        Career Guidance Form-->
                        <!--    @else-->
                        <!--        Employer / Partnership Form-->
                        <!--    @endif-->
                        Career Connect
                    </h2>
                    <p>Connecting talent, opportunity, and growth</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-demofeature">
    <div class="container top-padding-register">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="card mb-5">
                    <div class="card-body" style="overflow-x: hidden;">
                        <div class="col-lg-12 text-center mb-4">
                            <img src="{{ asset('img/Yourexcel-img/excel-logo-new.png') }}" alt="" style="width: 170px;">
                        </div>
                        @if($formType == 'student_alumni')
                            <h4 class="text-center">
                                Student & Alumni Form
                            </h4>
                            <p class="text-center px-5 mb-5">
                                This form is for students and alumni who are exploring employment or freelancing opportunities to advance their professional careers.
                            </p>
                        @elseif($formType == 'career_guidance')
                            <h4 class="text-center">
                                Career Guidance Form
                            </h4>
                            <p class="text-center px-5 mb-5">
                                This form is intended for individuals seeking personalized career guidance, mentorship, and counseling to help them make informed professional decisions.
                            </p>
                        @else
                            <h4 class="text-center">
                                Employer Form
                            </h4>
                            <p class="text-center px-5 mb-5">
                                This form is for employers and organizations looking to collaborate with YouExcel Career Connect to hire skilled, job-ready talent from our student and alumni network.
                            </p>
                        @endif
    
                        <form action="{{ route('career.connect.submit') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="form_type" value="{{ $formType }}">
    
                            <div class="row">
                                @if($formType == 'student_alumni' || $formType == 'career_guidance')
                                    <div class="col-lg-6 mb-3">
                                        <label for="first_name">First Name <span style="color:red">*</span></label>
                                        <input type="text" name="first_name" class="form-control" required placeholder="Your First Name">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="last_name">Last Name <span style="color:red">*</span></label>
                                        <input type="text" name="last_name" class="form-control" required placeholder="Your Last Name">
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="email">Email Address <span style="color:red">*</span></label>
                                        <input type="email" name="email" class="form-control" required placeholder="Your Email">
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="phone">Contact Number (Whatsapp Number) <span style="color:red">*</span></label>
                                        <input type="text" name="phone" class="form-control" required placeholder="+92 XXX-XXXXXXX">
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="gender">Gender <span style="color:red">*</span></label>
                                        <select name="gender" class="form-control" required>
                                            <option value="" disabled selected>Select Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <label for="linkedin_profile">LinkedIn Profile (optional)</label>
                                        <input type="url" name="linkedin_profile" class="form-control"  placeholder="https://linkedin.com/in/yourprofile">
                                    </div>
                                    @if($formType == 'student_alumni')
                                        <div class="col-lg-6 mb-3">
                                            <label for="github_profile">GitHub Profile (optional)</label>
                                            <input type="url" name="github_profile" class="form-control" placeholder="https://github.com/yourprofile">
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <label for="portfolio_link">Behance / Portfolio Link</label>
                                            <input type="url" name="portfolio_link" class="form-control" placeholder="https://behance.net/yourprofile">
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <label for="resume_path">Resume / CV <span style="color:red">*</span></label>
                                            <input type="file" name="resume_path" class="form-control" required accept=".pdf,.doc,.docx">
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label for="preferred_opportunities">Preferred Opportunities <span style="color:red">*</span></label>
                                            <select name="preferred_opportunities" class="form-control" required>
                                                <option value="Job">Job</option>
                                                <option value="Internship">Internship</option>
                                                <option value="Freelance">Freelance</option>
                                                <option value="Hybrid">Hybrid</option>
                                                <option value="Remote">Remote</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label for="association_with_youexcel">Association with YouExcel <span style="color:red">*</span></label>
                                            <select name="association_with_youexcel" class="form-control" required>
                                                <option value="">Select Association</option>
                                                <option value="student">Student</option>
                                                <option value="alumni">Alumni</option>
                                                <option value="other">Other</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                                <label for="experience_level">Years of Professional Experience <span style="color:red">*</span></label>
                                                <select name="experience_level" class="form-control" required>
                                                    <option value="" selected disabled>Select Experience</option>
                                                    <option value="0 - 1 Years">0 - 1 Years</option>
                                                    <option value="1 - 3 Years">1 - 3 Years</option>
                                                    <option value="3 - 5 Years">3 - 5 Years</option>
                                                    <option value="5 - 10 Years">5 - 10 Years</option>
                                                    <option value="10+ Years">10+ Years</option>
                                                </select>
                                        </div>
                                        <!--<div class="col-lg-12 mb-3">-->
                                        <!--    <label for="jobs">Interested Job Board ref. No# <span style="color:red">*</span></label>-->
                                        <!--    <select name="jobs[]" class="form-control select2" multiple required>-->
                                        <!--        <option value="" disabled>Select Jobs</option>-->
                                        
                                        <!--        @if(isset($jobs) && $jobs->count() > 0)-->
                                        <!--            @foreach($jobs as $job)-->
                                        <!--                <option value="{{ $job->id }}">{{ $job->job_title }}</option>-->
                                        <!--            @endforeach-->
                                        <!--        @endif-->
                                        <!--    </select>-->
                                        <!--</div>-->
                                        <div class="col-lg-12 mb-3">
                                            <label for="jobs">Interested Job Board ref. No# </label>
                                            <select id="jobs" name="jobs[]" class="form-control" multiple data-control="tomselect">
                                                @if(isset($jobs) && $jobs->count() > 0)
                                                    @foreach($jobs as $job)
                                                        <option value="{{ $job->id }}"
                                                            @if( (isset($selectedJobs) && in_array($job->id, $selectedJobs)) || collect(old('jobs',[]))->contains($job->id) ) selected @endif>
                                                            {{ $job->job_title }} ({{ $job->ref_no }})
                                                        </option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>

                                        <div class="col-lg-12 mb-3">
                                            <label for="expertise_areas">
                                                Specialized Area of Expertise (e.g. Power BI, Data Analysis, Tax Management)
                                                <span style="color:red">*</span>
                                            </label>
                                            <input type="text" name="expertise_areas" id="expertise_areas" class="form-control" placeholder="Type and press enter to add tags">
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <label for="experience">Experience (if any)</label>
                                            <textarea name="experience" class="form-control" placeholder="Describe your experience"></textarea>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <div class="form-check custom-checkbox">
                                                <input type="checkbox" name="confirmation_agreement" id="confirmation_agreement" value="1" class="form-check-input" required checked {{ old('confirmation_agreement') == '1' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="confirmation_agreement">
                                                    I confirm that all information provided above is accurate. I authorize YouExcel to store and share 
my profile, resume, and contact details with verified employers, recruiters, or partner organizations 
solely for the purpose of job, internship, or freelance opportunities. I understand that YouExcel will 
not be held responsible for the final hiring decisions made by third parties. 
                                                </label>
                                            </div>
                                        </div>
                                    @elseif($formType == 'career_guidance')
                                        <div class="col-lg-6 mb-3">
                                            <label for="resume_path">Resume / CV (optional)</label>
                                            <input type="file" name="resume_path" class="form-control" accept=".pdf,.doc,.docx">
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <label for="area_of_guidance">Area of Guidance <span style="color:red">*</span></label>
                                            <select name="area_of_guidance" class="form-control" required>
                                                <option value="">Select Area</option>
                                                <option value="Resume Optimization">Resume Optimization</option>
                                                <option value="LinkedIn Profile Optimization">LinkedIn Profile Optimization</option>
                                                <option value="Interview Tips">Interview Tips</option>
                                                <option value="Career Counselling">Career Counselling</option>
                                                <option value="Portfolio Review">Portfolio Review</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <label for="experience_level">Experience Level <span style="color:red">*</span></label>
                                            <select name="experience_level" class="form-control" required>
                                                <option value="">Select Level</option>
                                                <option value="Student">Student</option>
                                                <option value="Fresh Graduate">Fresh Graduate</option>
                                                <option value="Early Career">Early Career (1–3 years)</option>
                                                <option value="Experienced">Experienced (3+ years)</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <label for="preferred_mode">Preferred Mode of Session <span style="color:red">*</span></label>
                                            <select name="preferred_mode" class="form-control" required>
                                                <option value="">Select Mode</option>
                                                <option value="Online">Online (Zoom / Google Meet)</option>
                                                <option value="In-person">In-person (at YouExcel)</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <label for="preferred_datetime">Appointment Date / Time <span style="color:red">*</span></label>
                                            <input type="datetime-local" id="preferred_datetime" name="preferred_datetime" class="form-control" required>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <label for="additional_message">Additional Message / Specific Query</label>
                                            <textarea name="additional_message" class="form-control" placeholder="Your message or query"  style="min-height: 80px !important;"></textarea>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <div class="form-check custom-checkbox">
                                                <input type="checkbox" name="confirmation_agreement" id="confirmation_agreement" value="1" class="form-check-input" required checked {{ old('confirmation_agreement') == '1' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="confirmation_agreement">
                                                    I agree that YouExcel may review my provided details (including resume, LinkedIn profile, and queries) to offer career guidance and personalized recommendations. I authorize YouExcel to store and share the information if deemed necessary solely for the purpose of career guidance. I also consent to being contacted by YouExcel representatives via email or phone regarding my requested guidance session.
                                                </label>
                                            </div>
                                        </div>
                                    @endif
                                @elseif($formType == 'employer_partnership')
                                    <div class="col-lg-6 mb-3">
                                        <label for="company_name">Company Name <span style="color:red">*</span></label>
                                        <input type="text" name="company_name" class="form-control" required placeholder="Your Company Name">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="contact_person_name">Contact Person Name <span style="color:red">*</span></label>
                                        <input type="text" name="contact_person_name" class="form-control" required placeholder="Contact Person Name">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="email">Contact Email Address <span style="color:red">*</span></label>
                                        <input type="email" name="email" class="form-control" required placeholder="Your Email">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="phone">Contact Number (Whatsapp Number) <span style="color:red">*</span></label>
                                        <input type="text" name="phone" class="form-control" required placeholder="+92 XXX-XXXXXXX">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="website_link">Website Link (optional)</label>
                                        <input type="url" name="website_link" class="form-control" placeholder="https://yourwebsite.com">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="job_title">Job Title / Role <span style="color:red">*</span></label>
                                        <input type="text" name="job_title" class="form-control" required placeholder="Job Title">
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="department">Department</label>
                                        <input type="text" name="department" class="form-control" placeholder="Department">
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="job_type">Job Type <span style="color:red">*</span></label>
                                        <select name="job_type" class="form-control" required>
                                            <option value="">Select Job Type</option>
                                            <option value="Full-Time">Full-Time</option>
                                            <option value="Internship">Internship</option>
                                            <option value="Part-Time">Part-Time</option>
                                            <option value="Freelance">Freelance</option>
                                            <option value="On-the-Job Training">On-the-Job Training (OJT)</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                            <label for="experience_level">Years of Professional Experience <span style="color:red">*</span></label>
                                            <select name="experience_level" class="form-control" required>
                                                <option value="" selected disabled>Select Experience</option>
                                                <option value="0 - 1 Years">0 - 1 Years</option>
                                                <option value="1 - 3 Years">1 - 3 Years</option>
                                                <option value="3 - 5 Years">3 - 5 Years</option>
                                                <option value="5 - 10 Years">5 - 10 Years</option>
                                                <option value="10+ Years">10+ Years</option>
                                            </select>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="stipend_range">Stipend / Salary Range</label>
                                        <input type="text" name="stipend_range" class="form-control" placeholder="e.g., PKR 50,000 - 70,000">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="location">Location (City)/ Remote</label>
                                        <input type="text" name="location" class="form-control" placeholder="e.g., Karachi / Remote">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="application_deadline">Application Deadline (optional)</label>
                                        <input type="date" name="application_deadline" class="form-control">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="job_details_upload">Upload Job Description / Details (optional)</label>
                                        <input type="file" name="job_details_upload" class="form-control" accept=".pdf,.doc,.docx">
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="candidates">Interested Candidate Board ref. No# </label>
                                        <select id="candidates" name="candidates[]" class="form-control" multiple data-control="tomselect">
                                            @if(isset($candidates) && $candidates->count() > 0)
                                                @foreach($candidates as $candidate)
                                                    <option value="{{ $candidate->id }}"
                                                        @if( (isset($selectedCandidates) && in_array($candidate->id, $selectedCandidates)) || collect(old('candidates',[]))->contains($candidate->id) ) selected @endif>
                                                        {{ $candidate->name }} ({{ $candidate->ref_no }})
                                                    </option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="skills_required">Skills Required</label>
                                        <input type="text" name="skills_required" id="skills_required" class="form-control" placeholder="Type and press enter to add tags">
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="job_description">Job Description or Responsibilities (optional)</label>
                                        <textarea name="job_description" class="form-control" placeholder="Describe the job responsibilities"></textarea>
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="additional_message">Additional Message or Notes</label>
                                        <textarea name="additional_message" class="form-control" placeholder="Any additional notes"></textarea>
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                            <div class="form-check custom-checkbox">
                                                <input type="checkbox" name="confirmation_agreement" id="confirmation_agreement" value="1" class="form-check-input" required checked {{ old('confirmation_agreement') == '1' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="confirmation_agreement">
                                                I confirm that the job/internship information provided is accurate and authorized by my organization. I authorize YouExcel to store and share this opportunity with relevant candidates from their student and alumni network. I agree to maintain professional communication with applicants referred through YouExcel.
                                            </label>
                                        </div>
                                    </div>
                                @endif
    
                                <div class="col-md-12 mt-3 mb-3">
                                    <div class="g-recaptcha" data-sitekey="6LcCcgErAAAAAMj6AI5jc5za50PCchfFValVBY7Y"></div>
                                    @error('g-recaptcha-response')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row">
                                <div class="col-12 text-center">
                                    <button type="submit" class="vs-btn py-3">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>
<script src="https://cdn.jsdelivr.net/npm/tom-select/dist/js/tom-select.complete.min.js"></script>
<!--<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>-->
// <script>
//     var jq = jQuery.noConflict();
//     jq(document).ready(function () {
//         jq('.select2').select2({
//             width: '100%',
//             placeholder: "Select Jobs",
//             closeOnSelect: false,
//             allowClear: true
//         });
//     });
// </script>
<!-- Remove Select2 includes if present -->

<script>
document.addEventListener('DOMContentLoaded', function () {
    // initialize Tom Select on the select having attribute data-control="tomselect"
    var elems = document.querySelectorAll('select[data-control="tomselect"]');
    elems.forEach(function(el){
        // destroy previous instance if any (safe re-init)
        if (el.tomselect) { el.tomselect.destroy(); }

        new TomSelect(el, {
            plugins: ['remove_button'],    // show small x to remove selected item
            maxItems: null,                // null = unlimited (multiple)
            persist: false,
            create: false,                 // don't allow new items/tags, only choose existing
            hideSelected: true,
            dropdownParent: 'body',        // helps with z-index issues inside modals
            placeholder: 'Select Value',
        });
    });
});
</script>

<script>
    // Initialize Tagify for expertise_areas
    var input = document.querySelector('#expertise_areas');
    var expertiseList = @json($expertiseAreas);
    var tagify = new Tagify(input, {
        maxTags: 10,
        whitelist: expertiseList,
        dropdown: {
            enabled: 0,
            maxItems: 10
        }
    });

    // Initialize Tagify for skills_required
    var input2 = document.querySelector('#skills_required');
    var skillsRequiredList = @json($skillsRequiredAreas);
    var tagify2 = new Tagify(input2, {
        maxTags: 10,
        whitelist: skillsRequiredList,
        dropdown: {
            enabled: 0,
            maxItems: 10
        }
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        
        const dateTime = document.getElementById('preferred_datetime');
    
        dateTime.addEventListener('input', function() {
            const selected = new Date(this.value);
            const day = selected.getDay(); // 0 = Sunday, 6 = Saturday
            const hours = selected.getHours();
            const minutes = selected.getMinutes();
    
            // Pakistan Standard Time offset (+5)
            const pstOffset = 5 * 60 * 60 * 1000; // milliseconds
            const localOffset = selected.getTimezoneOffset() * 60 * 1000;
            const diff = pstOffset + localOffset;
    
            const pstDate = new Date(selected.getTime() + diff);
            const pstHours = pstDate.getHours();
            const pstMinutes = pstDate.getMinutes();
    
            // Validation: only allow Mon–Sat (1–6) and 9:00–21:00 PST
            if (day === 0 || pstHours < 9 || (pstHours >= 21 && pstMinutes > 0)) {
                alert("Please select a time between Monday and Saturday, 9:00 AM – 9:00 PM (Pakistan Standard Time).");
                this.value = '';
            }
        });
    
        // Optionally set the minimum date to current date/time
        dateTime.min = new Date().toISOString().slice(0,16);
    });
</script>


@endsection

<!-- reCAPTCHA Script -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<!-- Show delivery options only when Courier selected -->
<script>

</script>