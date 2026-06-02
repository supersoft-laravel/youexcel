@extends('website.app', ['title' => 'Scholarship Request Form'])

@section('content')
<style>
    .section-header {
        background: linear-gradient(135deg, #1a2a3a 0%, #2c3e50 100%) !important;
        color: white !important;
        padding: 35px 0 0 0 !important;
        margin-top: 120px;
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
        background: linear-gradient(rgba(0, 40, 104, 0.8), rgba(0, 40, 104, 0.9)), url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');
        background-size: cover;
        background-position: center;
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

<section class="space-top space-extra-bottom section-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="section-title text-center position-relative mt-5">
                    <h2>Apply for a Scholarship</h2>
                    <p>Please complete the form below to submit your scholarship request.</p>
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
                        <h4 class="text-center mb-4">Scholarship Request Form</h4>

                        <form action="{{ url('scholarship-submit') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <label>Full Name <span class="text-danger">*</span></label>
                                    <input type="text" name="full_name" class="form-control" required placeholder="Your full name">
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label>Email <span class="text-danger">*</span></label>
                                    <input type="email" name="email" class="form-control" required placeholder="you@example.com">
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label>Phone <span class="text-danger">*</span></label>
                                    <input type="text" name="phone" class="form-control" required placeholder="03XX-XXXXXXX">
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label>Course Name <span class="text-danger">*</span></label>
                                    <select name="course_name" class="form-control" required>
                                        <option value="">Select Course</option>
                                        @foreach ($courses as $course)
                                            <option value="{{ $course->coursename }}">{{ $course->coursename }}</option>
                                        @endforeach
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label>Current Education <span class="text-danger">*</span></label>
                                    <input type="text" name="current_education" class="form-control" required placeholder="e.g., Intermediate, Bachelor's">
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label>Date of Birth <span class="text-danger">*</span></label>
                                    <input type="date" name="dob" class="form-control" required>
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <label>Address <span class="text-danger">*</span></label>
                                    <input type="text" name="address" class="form-control" required placeholder="Your residential address">
                                </div>
                        
                                <div class="col-lg-12 mb-3">
                                    <label>Employment Status <span class="text-danger">*</span></label>
                                    <div class="d-flex gap-4 mt-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="employement_status" id="statusEmployed" value="Employed" required>
                                            <label class="form-check-label" for="statusEmployed">Employed</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="employement_status" id="statusUnemployed" value="Unemployed">
                                            <label class="form-check-label" for="statusUnemployed">Unemployed</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="employement_status" id="statusStudent" value="Student">
                                            <label class="form-check-label" for="statusStudent">Student</label>
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="col-lg-6 mb-3">
                                    <label>Company Name</label>
                                    <input type="text" name="company_name" class="form-control" placeholder="Your company name" id="company_name" disabled>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label>Designation</label>
                                    <input type="text" name="designation" class="form-control" placeholder="Your job title/designation" id="designation" disabled>
                                </div>
                        
                                <div class="col-lg-12 mb-3">
                                    <label>Reason for Applying <span class="text-danger">*</span></label>
                                    <textarea name="reason" class="form-control" rows="4" required placeholder="Tell us why you're applying for this scholarship..."></textarea>
                                </div>
                        
                                <div class="col-md-12 mt-3 mb-3">
                                    <div class="g-recaptcha" data-sitekey="6LcCcgErAAAAAMj6AI5jc5za50PCchfFValVBY7Y"></div>
                                </div>
                        
                                <div class="mb-3">
                                    @error('g-recaptcha-response')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                        
                                <div class="col-12 text-center">
                                    <button type="submit" class="vs-btn py-3">Submit</button>
                                </div>
                            </div>
                        </form>
                        
                        <!-- Enable/disable company & designation based on employment status -->
                        <script>
                            document.addEventListener('DOMContentLoaded', function () {
                                const radios = document.querySelectorAll('input[name="employement_status"]');
                                const company = document.getElementById('company_name');
                                const designation = document.getElementById('designation');
                        
                                radios.forEach(radio => {
                                    radio.addEventListener('change', function () {
                                        if (this.value === 'Employed') {
                                            company.disabled = false;
                                            designation.disabled = false;
                                            company.required = true;
                                            designation.required = true;
                                        } else {
                                            company.disabled = true;
                                            designation.disabled = true;
                                            company.required = false;
                                            designation.required = false;
                                            company.value = '';
                                            designation.value = '';
                                        }
                                    });
                                });
                            });
                        </script>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
