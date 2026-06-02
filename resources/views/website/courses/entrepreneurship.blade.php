@extends('website.app', ['title' => 'ENTREPRENEURSHIP'])

@section('content')
    @include('website.courses.sections.css')

    <section class="space-top space-extra-bottom section-header">
        <div class="bg-pattern"></div>
        <div class="container section-content text-center">
            <div class="section-title">
                <h2>
                    Turn Ideas into Impact: Start Your Entrepreneurship Journey with Innovation,
                    Strategy, and AI-Driven Growth
                </h2>
            </div>
        </div>
    </section>

    <div class="my-4">
        <div class="main-card">

            <!-- TITLE -->
            <div class="mb-3">
                <div style="color:#ffb400">★★★★★</div>
                <h4 class="fw-bold mt-2">
                    ENTREPRENEURSHIP
                </h4>
            </div>

            <div class="row g-4">

                <!-- LEFT SIDE -->
                <div class="col-lg-8">

                    <!-- HERO VIDEO ONLY -->
                    <div class="hero-video mb-4">
                        <div class="video-container">
                            <video autoplay muted loop playsinline>
                                <source src="{{ asset($videoURL ?? 'uploads/courses/videos/default.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                    </div>

                    <!-- TABS -->
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#overview">
                                Program Overview
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#outlines">
                                Program Outlines
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#outcomes">
                                Learning Outcomes
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#trainer-profile">
                                Trainer Profile
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#pre-requisites">
                                Pre-requisites
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#program-fee-detail">
                                Program & Fee Detail
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#recommendation-for">
                                Recommendation For
                            </button>
                        </li>
                        <!--<li class="nav-item">-->
                        <!--    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#salient-features">-->
                        <!--        Salient Features-->
                        <!--    </button>-->
                        <!--</li>-->
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#value-additions">
                                Value Added Services
                            </button>
                        </li>
                    </ul>

                    <div class="tab-content">

                        <!-- OVERVIEW -->
                        <div class="tab-pane fade show active" id="overview">
                            <h6 class="fw-bold mt-3">Program Overview</h6>
                            <p class="mb-2">
                                The Entrepreneurship program is designed to equip you with the strategic
                                mindset, practical tools, and leadership capabilities needed to identify opportunities,
                                drive
                                innovation, and build sustainable ventures within startups, organizations, or independent.
                            </p>
                            <p class="mb-2">
                                This program focuses on real-world application, combining entrepreneurial
                                theory with hands-on problem-solving. Participants learn how to evaluate market
                                opportunities,
                                develop scalable business models, manage risk, and make data-driven decisions in dynamic and
                                competitive environments. The course emphasizes innovation, intrapreneurship, and value
                                creation
                                across industries.
                            </p>
                        </div>

                        <!-- OUTLINES -->
                        <div class="tab-pane fade" id="outlines">

                            @if($outlinePdf)

                                <div class="pdf-card mt-4">
    
                                    <!-- PDF Header -->
                                    <div class="pdf-header">
                                        <h6 class="mb-0">Course Outline (PDF)</h6>
                                        <!--<a href="{{ $pdf }}" download class="btn btn-sm btn-outline-secondary">-->
                                        <!--    Download PDF-->
                                        <!--</a>-->
                                    </div>
    
                                    <!-- PDF Viewer -->
                                    <div class="pdf-viewer">
                                        <iframe src="{{ asset($outlinePdf) }}" title="ERP SAP Course Outline PDF">
                                        </iframe>
                                    </div>
    
                                </div>
                                
                            @else
                            
                                <p>No Outlines Found</p>
                            
                            @endif

                        </div>

                        <!-- OUTCOMES -->
                        <div class="tab-pane fade" id="outcomes">

                            <div class="outcomes-wrapper mt-4">
                                <div class="row gy-3">

                                    <!-- Outcome 1 -->
                                    <div class="col-md-12">
                                        <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                                            style="border-left: 5px solid #0d6efd;">
                                            <i class="fas fa-lightbulb text-primary fs-4 me-3 mt-1"></i>
                                            <p class="mb-0" style="font-size: 15px; color: #333;">
                                                Gain knowledge in opportunity recognition, customer discovery, lean startup
                                                methodologies,
                                                financial planning, marketing & growth strategies, funding readiness, and
                                                legal & ethical
                                                considerations.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Outcome 2 -->
                                    <div class="col-md-12">
                                        <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                                            style="border-left: 5px solid #6610f2;">
                                            <i class="fas fa-search-dollar fs-4 me-3 mt-1" style="color:#6610f2;"></i>
                                            <p class="mb-0" style="font-size: 15px; color: #333;">
                                                Apply entrepreneurial thinking to solve real-world business and
                                                organizational challenges.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Outcome 3 -->
                                    <div class="col-md-12">
                                        <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                                            style="border-left: 5px solid #198754;">
                                            <i class="fas fa-check-circle text-success fs-4 me-3 mt-1"></i>
                                            <p class="mb-0" style="font-size: 15px; color: #333;">
                                                Identify, evaluate, and validate new business opportunities using structured
                                                frameworks and
                                                market insights.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Outcome 4 -->
                                    <div class="col-md-12">
                                        <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                                            style="border-left: 5px solid #fd7e14;">
                                            <i class="fas fa-project-diagram text-warning fs-4 me-3 mt-1"></i>
                                            <p class="mb-0" style="font-size: 15px; color: #333;">
                                                Design, develop, and clearly communicate viable business models and
                                                strategic plans.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Outcome 5 -->
                                    <div class="col-md-12">
                                        <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                                            style="border-left: 5px solid #dc3545;">
                                            <i class="fas fa-brain text-danger fs-4 me-3 mt-1"></i>
                                            <p class="mb-0" style="font-size: 15px; color: #333;">
                                                Lead innovation initiatives while effectively managing uncertainty, risk,
                                                and change.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Outcome 6 -->
                                    <div class="col-md-12">
                                        <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                                            style="border-left: 5px solid #20c997;">
                                            <i class="fas fa-rocket text-info fs-4 me-3 mt-1"></i>
                                            <p class="mb-0" style="font-size: 15px; color: #333;">
                                                Develop actionable and practical plans for launching new ventures or scaling
                                                existing
                                                businesses.
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <!-- TRAINER PROFILE TAB -->
                        <div class="tab-pane fade" id="trainer-profile" role="tabpanel">

                            <section class="py-5 trainer-section">
                                <div class="container">

                                    <div class="row align-items-center">

                                        <!-- Trainer Content -->
                                        <div class="col-lg-12 mb-4">
                                            <div class="trainer-card">
                                                <h3 class="trainer-name">Sayyid Yasir Ali</h3>
                                                <div class="profile-header row">
                                                    <p class="col-md-8">
                                                        <b>Sayyid Yasir Ali</b> is a seasoned professional with over 20
                                                        years of experience in the
                                                        financial sector, having led multiple initiatives as a Project Head
                                                        for FinTech and HealthTech
                                                        ventures. He is an accomplished Business Consultant, Entrepreneur,
                                                        Career Coach, and Social
                                                        Worker, with extensive experience mentoring startups across Spain,
                                                        Africa, and Pakistan.
                                                    </p>
                                                    <div class="trainer-image-wrapper col-md-4">
                                                        <img src="{{ asset('img/trainer/new2/Sayyid-Yasir-Ali-ENTREPRENEURSHIP.png') }}"
                                                            alt="Trainer Image">
                                                        <span class="trainer-badge">
                                                            <i class="fas fa-star"></i> Expert
                                                        </span>
                                                    </div>
                                                </div>
                                                <p>
                                                    He holds a Master’s degree in Business Administration and is currently
                                                    pursuing a Master of
                                                    Philosophy (MPhil). His professional credentials include certifications
                                                    in Entrepreneurship and
                                                    AAOIFI (Shariah Standards), reflecting his strong expertise in Islamic
                                                    finance, business
                                                    strategy, and startup development.
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </section>

                        </div>

                        <!-- VALUE ADDITIONS TAB -->
                        <div class="tab-pane fade" id="value-additions" role="tabpanel">

                            <section class="py-4 value-section" style="background-color: #f8f9fa;">
                                <div class="container">

                                    <div class="row gy-3">

                                        <!-- Service 1 -->
                                        <div class="col-md-12">
                                            <div class="d-flex align-items-start p-3 bg-white rounded shadow-sm h-100"
                                                style="border-left: 5px solid #ffc107;">
                                                <i class="fas fa-video text-warning fs-4 me-3 mt-1"></i>
                                                <p class="mb-0" style="font-size: 15px; color: #444;">
                                                    100% job and business-oriented training.
                                                </p>
                                            </div>
                                        </div>

                                        <!-- Service 2 -->
                                        <div class="col-md-12">
                                            <div class="d-flex align-items-start p-3 bg-white rounded shadow-sm h-100"
                                                style="border-left: 5px solid #17a2b8;">
                                                <i class="fab fa-whatsapp text-info fs-4 me-3 mt-1"></i>
                                                <p class="mb-0" style="font-size: 15px; color: #444;">
                                                    Certificate of completion recognized from Trade Testing Board,
                                                    Government of Pakistan
                                                </p>
                                            </div>
                                        </div>

                                        <!-- Service 3 -->
                                        <div class="col-md-12">
                                            <div class="d-flex align-items-start p-3 bg-white rounded shadow-sm h-100"
                                                style="border-left: 5px solid #28a745;">
                                                <i class="fas fa-briefcase text-success fs-4 me-3 mt-1"></i>
                                                <p class="mb-0" style="font-size: 15px; color: #444;">
                                                    Claim Continuing Professional Development (CPD) hours for the training.
                                                </p>
                                            </div>
                                        </div>

                                        <!-- Service 4 -->
                                        <div class="col-md-12">
                                            <div class="d-flex align-items-start p-3 bg-white rounded shadow-sm h-100"
                                                style="border-left: 5px solid #dc3545;">
                                                <i class="fas fa-certificate text-danger fs-4 me-3 mt-1"></i>
                                                <p class="mb-0" style="font-size: 15px; color: #444;">
                                                    Video recorded session with personalized Learning Management System
                                                    (LMS) access login id for
                                                    Lifetime
                                                </p>
                                            </div>
                                        </div>

                                        <!-- Service 5 -->
                                        <div class="col-md-12">
                                            <div class="d-flex align-items-start p-3 bg-white rounded shadow-sm h-100"
                                                style="border-left: 5px solid #ffc107;">
                                                <i class="fas fa-laptop-house text-warning fs-4 me-3 mt-1"></i>
                                                <p class="mb-0" style="font-size: 15px; color: #444;">
                                                    Fully equipped training center venue for on-campus training readily
                                                    available with laptops,
                                                    projectors and air-conditioning
                                                </p>
                                            </div>
                                        </div>

                                        <!-- Service 6 -->
                                        <div class="col-md-12">
                                            <div class="d-flex align-items-start p-3 bg-white rounded shadow-sm h-100"
                                                style="border-left: 5px solid #0d6efd;">
                                                <i class="fas fa-chalkboard-teacher text-primary fs-4 me-3 mt-1"></i>
                                                <p class="mb-0" style="font-size: 15px; color: #444;">
                                                    Live physical on-campus and online sessions
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </section>

                        </div>

                        <!-- Program Fee Detail -->
                        <div class="tab-pane fade" id="program-fee-detail" role="tabpanel">

                            <section class="py-5 value-section">
                                <div class="container">

                                    <!-- Services Grid -->
                                    <div class="row g-4">
                                        <!-- Enrollment Procedure -->
                                        <div class="col-md-12">
                                            <div class="fee-card">
                                                <h6 class="fw-bold">Enrollment Procedure</h6>
                                                <ul class="fee-list">
                                                    <li>Upon enrollment, a fee of Rs. 1,000/- is applicable.</li>
                                                    <li>After payment confirmation, the on-campus test/interview date will be shared via email.</li>
                                                    <li>Shortlisted candidates will be notified through email.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    
                                        <!-- Program Fee -->
                                        <div class="col-md-12" style="margin-top: 0px;">
                                            <div class="fee-card">
                                                <h6 class="fw-bold">Program Fee</h6>
                                                <ul class="fee-list">
                                                    <li>PKR {{ $lumpSumFee }}/-</li>
                                                    <li>Installment facility available</li>
                                                </ul>
                                            </div>
                                        </div>
                                    
                                        <!-- Program Details -->
                                        <div class="col-md-12" style="margin-top: 0px;">
                                            <div class="fee-card">
                                                <h6 class="fw-bold">Program Details</h6>
                                                <ul class="fee-list">
                                                    <li>24 Hours Program-</li>
                                                    <li>On-site Physical Sessions</li>
                                                    <li>Youexcel Main Campus</li>
                                                </ul>
                                            </div>
                                        </div>
                                        
                                        <!--Policies-->
                                        <div class="col-md-12" style="margin-top: 0px;">
                                            <div class="fee-card">
                                                <h6 class="fw-bold">Policies</h6>
                                                <ul class="fee-list">
                                                    <li><a href="{{ url('Student-Policy') }}" target="_blank" class="btn btn-link">Student Policy</a></li>
                                                    <li><a href="{{ url('Policies') }}" target="_blank" class="btn btn-link">Refund Policy</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!--<div class="col-md-12"-->
                                        <!--    style="display: flex; flex-direction: column; justify-content: center; align-items: center;">-->
                                        <!--    <h4>Student Policy</h4>-->
                                        <!--    <a href="{{ url('Student-Policy') }}" style="width: 60%;"-->
                                        <!--        class="apply-btn">Visit Student policy</a>-->
                                        <!--</div>-->
                                        <!--<div class="col-md-12"-->
                                        <!--    style="display: flex; flex-direction: column; justify-content: center; align-items: center;">-->
                                        <!--    <h4>Refund Policy</h4>-->
                                        <!--    <a href="{{ url('Policies') }}" style="width: 60%;" class="apply-btn">Visit-->
                                        <!--        Refund policy</a>-->
                                        <!--</div>-->

                                    </div>
                                </div>
                            </section>

                        </div>

                        <!-- Program Fee Detail -->
                        <div class="tab-pane fade" id="program-fee-detail" role="tabpanel">

                            <section class="py-5 value-section">
                                <div class="container">

                                    <!-- Services Grid -->
                                    <div class="row g-4">

                                        <div class="col-md-12"
                                            style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
                                            <h4>Student Policy</h4>
                                            <a href="{{ url('Student-Policy') }}" style="width: 60%;"
                                                class="apply-btn">Visit Student policy</a>
                                        </div>
                                        <div class="col-md-12"
                                            style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
                                            <h4>Refund Policy</h4>
                                            <a href="{{ url('Policies') }}" style="width: 60%;" class="apply-btn">Visit
                                                Refund policy</a>
                                        </div>

                                    </div>
                                </div>
                            </section>

                        </div>

                        <!-- Recommendation For -->
                        <div class="tab-pane fade" id="recommendation-for" role="tabpanel">

                            <section class="py-5 value-section">
                                <div class="container">

                                    <!-- Services Grid -->
                                    <div class="row g-4">

                                        <div class="col-lg-12 col-md-12">
                                            <div class="card h-100 border-0 shadow-sm text-start p-3"
                                                style="border-radius:12px; background:#fff;">
                                                <div class="d-flex align-items-center mb-2">
                                                    <div
                                                        style="width:40px; height:40px; border-radius:50%; background:#0d6efd1a; display:flex; align-items:center; justify-content:center; margin-right:10px;">
                                                        <i class="fas fa-users"
                                                            style="color:#0d6efd; font-size:16px;"></i>
                                                    </div>
                                                    <h6 style="margin:0; font-weight:600; color:#0d6efd;">Recommendation
                                                        For</h6>
                                                </div>
                                                <p style="font-size:14px; color:#333; margin:0;">
                                                    Aspiring Entrepreneurs, Early-Stage Startup Founders, Small Business
                                                    Owners, Professionals
                                                    Seeking Career Transition, Corporate Employees / Intrapreneurs,
                                                    Freelancers & Solopreneurs,
                                                    Investors & Mentors
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </section>

                        </div>
                    </div>
                </div>

                <!-- RIGHT SIDE -->
                <div class="col-lg-4">
                    <div class="price-card">
                        <div class="price">Detail in a Snapshot</div>

                        <div class="info-row">
                            <span>Level of Difficulty</span>
                            <strong><small>Intermediate to Advance</small></strong>
                        </div>

                        <div class="info-row">
                            <span>Duration</span>
                            <strong>24 hours</strong>
                        </div>

                        <div class="info-row">
                            <span>Schedule</span>
                            <strong>{{ $nextBatchSchedule ?? 'Contact Admissions Team' }}</strong>
                        </div>

                        <div class="info-row">
                            <span>Registration Status</span>
                            <strong class="text-success">Open</strong>
                        </div>
                        <div class="info-row">
                            <span style="text-align: left;">Program Fee<br><small>Installment facility available*</small></span>
                            <strong>{{ $lumpSumFee ?? 'N/A' }}</strong>
                        </div>

                        @if ($pdf == '')
                        @else
                            <div class="info-row">
                                <span>Brochure</span>
                                <strong><a href="{{ $pdf }}" class="btn btn-link"> Download Now</a></strong>
                            </div>
                        @endif

                        <a href="https://youexceltraining.com/Registration-Form/entrepreneurship"
                            class="apply-btn mt-3">Register Now</a>
                        <a href="https://youexceltraining.com/enquiry-form/entrepreneurship"
                            class="apply-btn2">Enquire Now</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
    <!-- ================= Get In Touch Section ================= -->
    @include('website.courses.sections.contact', ['courseName' => 'ENTREPRENEURSHIP'])

    <!--<section class="py-5 m-3 cta-style2">-->
    <!--    <div class="container text-center">-->
            <!-- Section Title -->
    <!--        <h2 class="fw-bold mb-3" style="font-size: 36px; color: #fff;">-->
    <!--            Become <span style="color: #ffc107;">Smarter</span> in Just <span style="color: #0d6efd;">24 Hours</span>-->
    <!--        </h2>-->
    <!--        <p class="mb-4" style="font-size: 16px; color: #fff; max-width: 700px; margin: 0 auto;">-->
    <!--            Gain practical, hands-on skills through interactive sessions led by industry experts.-->
    <!--            Enhance your career prospects with our intensive training program.-->
    <!--        </p>-->

            <!-- CTA Button -->
    <!--        <a href="https://youexceltraining.com/enquiry-form/entrepreneurship" class="btn btn-lg fw-bold"-->
    <!--            style="background-color: #ffc107; color: #000; padding: 16px 45px; font-size: 18px; border-radius: 50px; box-shadow: 0 4px 15px rgba(0,0,0,0.2); transition: all 0.3s;">-->
    <!--            <i class="fas fa-user-edit me-2"></i> ENQUIRE NOW-->
    <!--        </a>-->

            <!-- Optional Note -->
    <!--        <p class="mt-3" style="font-size: 14px; color: #fff;">-->
    <!--            Limited seats available — reserve your spot today!-->
    <!--        </p>-->
    <!--    </div>-->
    <!--</section>-->
@endsection
