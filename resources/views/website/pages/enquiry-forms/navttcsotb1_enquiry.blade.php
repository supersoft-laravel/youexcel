@extends('website.app')

@section('title', '100% Government Funded AI-Powered Skills of Tomorrow – Enquiry Form')

@section('content')

<style>
    .section-header {
        background: linear-gradient(135deg, #1a2a3a 0%, #2c3e50 100%) !important;
        color: white !important;
        padding: 180px 0 40px 0 !important;
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

    .section-title h2 {
        font-weight: 700;
        color: #fff;
        font-size: 2.2rem;
        margin-bottom: 12px;
        position: relative;
        z-index: 1;
        line-height: 1.3;
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
        position: relative;
        z-index: 1;
    }
</style>

{{-- ── Hero Header ── --}}
<section class="space-top space-extra-bottom section-header">
    <div class="bg-pattern"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="section-title text-center position-relative">
                    <h2>
                        100% GOVERNMENT FUNDED<br>
                        AI-POWERED SKILLS OF TOMORROW
                    </h2>
                    <p>
                        <strong>Prime Minister Youth Skill Development (NAVTTC)</strong>
                        in collaboration with <strong>YouExcel</strong>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ── Enquiry Form ── --}}
<section class="section-demofeature">
    <div class="container top-padding-register">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="card mb-5">
                    <div class="card-body" style="overflow-x: hidden;">

                        <div class="col-lg-12 text-center mb-4">
                            <img src="{{ asset('img/Yourexcel-img/excel-logo-new.png') }}" alt="YouExcel Logo" style="width: 170px;">
                        </div>

                        <p class="text-center">
                            This is only an Enquiry Form. You still have to Register in the NAVTTC PORTAL.
                            Please visit YouExcel to complete registration.
                        </p>

                        <h4 class="text-center">Project Enquiry Form</h4>

                        {{-- Submits to the same endpoint used by the existing project_form --}}
                        <form action="{{ route('store.project.website') }}" method="POST">
                            @csrf
                            <div class="row">

                                {{-- Name --}}
                                <div class="col-lg-4">
                                    <label for="name">Name <span style="color: red;">*</span></label>
                                    <input name="name" id="name" class="form-control"
                                           placeholder="Your Name" required type="text">
                                </div>

                                {{-- Contact No --}}
                                <div class="col-lg-3">
                                    <label for="phone">Contact No <span style="color: red;">*</span></label>
                                    <input class="form-control" name="phone" id="phone"
                                           placeholder="Phone No" required type="tel">
                                </div>

                                {{-- WhatsApp No --}}
                                <div class="col-lg-5">
                                    <label for="whatsapp">WhatsApp No (Mention again if Contact No is same)</label>
                                    <input class="form-control" name="whatsapp" id="whatsapp"
                                           placeholder="03XX-XXXXXXX" type="tel">
                                </div>

                                {{-- Email --}}
                                <div class="col-lg-6">
                                    <label for="email">Email <span style="color: red;">*</span></label>
                                    <input name="email" id="email" placeholder="Your Email Address"
                                           class="form-control"
                                           pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                                           required type="email">
                                </div>

                                {{-- ── Trade Preference — exactly 6 SOTB options ── --}}
                                <div class="col-lg-6">
                                    <label for="project_name">Trade Preference <span style="color: red;">*</span></label>
                                    <select class="form-control select2" name="project_name[]"
                                            id="project_name" multiple required>
                                        <option value="Earning Money through Freelancing">Earning Money through Freelancing</option>
                                        <option value="AI for Everyone">AI for Everyone</option>
                                        <option value="AI Augmented Digital Marketing &amp; SEO">AI Augmented Digital Marketing &amp; SEO</option>
                                        <option value="AI Powered Ecommerce">AI Powered Ecommerce</option>
                                        <option value="AI Augmented Graphic Design &amp; Video Editing">AI Augmented Graphic Design &amp; Video Editing</option>
                                        <option value="AI Financial Analyst with Power BI">AI Financial Analyst with Power BI</option>
                                    </select>
                                </div>

                                {{-- Age --}}
                                <div class="col-lg-6">
                                    <label for="age">Age <span style="color: red;">*</span></label>
                                    <select name="age" id="age" class="form-control" required>
                                        <option value="" disabled selected>Select Age</option>
                                        @for ($i = 18; $i <= 40; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>

                                {{-- City --}}
                                <div class="col-lg-6">
                                    <label for="city">City <span style="color: red;">*</span></label>
                                    <input name="city" id="city" placeholder="Your City"
                                           class="form-control" required type="text">
                                </div>

                                {{-- ── Last Education + Eligibility Criteria side by side ── --}}
                                {{-- Last Education --}}
                                <div class="col-lg-6 mt-3">
                                    <label>Last Education <span style="color: red;">*</span></label>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="last_education"
                                               id="edu_postgrad" value="Post Graduate" required>
                                        <label class="form-check-label" for="edu_postgrad">Post Graduate</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="last_education"
                                               id="edu_grad" value="Graduate">
                                        <label class="form-check-label" for="edu_grad">Graduate</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="last_education"
                                               id="edu_undergrad" value="Under Graduate">
                                        <label class="form-check-label" for="edu_undergrad">Under Graduate</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="last_education"
                                               id="edu_intermediate" value="Intermediate / A Levels">
                                        <label class="form-check-label" for="edu_intermediate">Intermediate / A Levels</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="last_education"
                                               id="edu_matric" value="Matric / O Levels">
                                        <label class="form-check-label" for="edu_matric">Matric / O Levels</label>
                                    </div>
                                </div>

                                {{-- Eligibility Criteria --}}
                                <div class="col-lg-6 mt-3">
                                    <div style="background:#f0f4ff;border-left:4px solid #002347;border-radius:6px;padding:14px 18px;height:100%;">
                                        <p style="font-weight:700;color:#002347;margin-bottom:8px;">Eligibility Criteria</p>
                                        <ul style="margin:0;padding-left:18px;font-size:0.93rem;color:#333;">
                                            <li>Valid CNIC holder</li>
                                            <li>Minimum Qualification: Intermediate</li>
                                            <li>For Power BI Course: 14 Years of Education Required</li>
                                            <li>Must not have availed NAVTTC training course before</li>
                                        </ul>
                                    </div>
                                </div>

                                {{-- Preferred Timing --}}
                                <label style="font-weight: bold; margin-top: 5px;">
                                    Preferred Timing (Tentative)
                                </label>

                                <div class="col-lg-4">
                                    <div>
                                        <input type="checkbox" id="morning" name="preferred_timing[]" value="Morning">
                                        <label for="morning">Morning (9:00 AM to 12:30 PM)</label>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div>
                                        <input type="checkbox" id="afternoon" name="preferred_timing[]" value="Afternoon">
                                        <label for="afternoon">Afternoon (1:00 PM to 4:30 PM)</label>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div>
                                        <input type="checkbox" id="evening" name="preferred_timing[]" value="Evening">
                                        <label for="evening">Evening (6:00 PM to 9:30 PM)</label>
                                    </div>
                                </div>

                                {{-- Comments --}}
                                <div class="col-lg-12">
                                    <label for="comments">Comments</label>
                                    <textarea class="form-control" name="comments" id="comments"
                                              rows="3" placeholder="Enter Comments..."></textarea>
                                </div>

                                {{-- reCAPTCHA --}}
                                <div class="col-md-12 mt-3">
                                    <div class="g-recaptcha"
                                         data-sitekey="6LcCcgErAAAAAMj6AI5jc5za50PCchfFValVBY7Y">
                                    </div>
                                </div>

                            </div>{{-- /row --}}

                            <div class="row pl-4">
                                <div class="col-12 text-center">
                                    <br>
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

@endsection

{{-- reCAPTCHA script --}}
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
