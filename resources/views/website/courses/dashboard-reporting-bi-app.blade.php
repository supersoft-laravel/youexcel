@extends('website.app', ['title' => 'Dashboard Reporting & Analysis with BI Applications'])

@section('title', 'Dashboard Reporting & Analysis with BI Applications')

@section('content')
    @include('website.courses.sections.css')

    <section class="space-top space-extra-bottom section-header">
        <div class="bg-pattern"></div>
        <div class="container section-content text-center">
            <div class="section-title">
                <h2>
                    Master Data-Driven Insights: Launch Your Career in Excel, Power BI & Tableau Dashboards and Analytics
                </h2>
            </div>
        </div>
    </section>

    <div class="my-4">
        <div class="main-card">

            <!-- TITLE -->
            <div class="mb-3">
                <div style="color:#ffb400">
                    @for ($i = 1; $i <= 5; $i++)
                        @if ($course->rating >= $i)
                            <i class="fa-solid fa-star star-filled"></i>
                        @elseif ($course->rating >= $i - 0.5)
                            <i class="fa-solid fa-star-half-stroke star-filled"></i>
                        @else
                            <i class="fa-regular fa-star star-empty"></i>
                        @endif
                    @endfor
                </div>
                <h4 class="fw-bold mt-2">
                    {{ $course->coursename }}
                </h4>
            </div>

            <div class="row g-4">

                <!-- LEFT SIDE -->
                <div class="col-lg-8">

                    <!-- HERO VIDEO ONLY -->
                    <div class="hero-video mb-4">
                        <div class="video-container">
                            <video autoplay muted loop playsinline>
                                <source src="{{ asset($course->video_url ?? 'uploads/courses/videos/default.mp4') }}" type="video/mp4">
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
                                Program Fee & Certificate Detail
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#recommendation-for">
                                Recommendation For
                            </button>
                        </li>
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
                                This program is designed to build strong data visualization and
                                dashboarding skills using Excel, Power BI, and Tableau Public. Participants will learn how
                                to clean
                                and model data, create interactive dashboards, apply visualization best practices, and
                                publish
                                insights for business users. The focus is hands-on, practical, and business-oriented ideal
                                for
                                professionals who want to move from raw data to decision-ready dashboards.
                            </p>
                        </div>

                        <!-- OUTLINES -->
                        <div class="tab-pane fade" id="outlines">

                            @if($course->outline_pdf)

                                <div class="pdf-card mt-4">
    
                                    <!-- PDF Header -->
                                    <div class="pdf-header">
                                        <h6 class="mb-0">Course Outline (PDF)</h6>
                                    </div>
    
                                    <!-- PDF Viewer -->
                                    <div class="pdf-viewer">
                                        <iframe src="{{ asset($course->outline_pdf) }}" title="ERP SAP Course Outline PDF">
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
                                            <i class="fas fa-chart-line text-primary fs-4 me-3 mt-1"></i>
                                            <p class="mb-0" style="font-size: 15px; color: #333;">
                                                Understand dashboard design principles and select the right visuals to
                                                deliver meaningful
                                                business insights.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Outcome 2 -->
                                    <div class="col-md-12">
                                        <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                                            style="border-left: 5px solid #6610f2;">
                                            <i class="fas fa-broom fs-4 me-3 mt-1" style="color:#6610f2;"></i>
                                            <p class="mb-0" style="font-size: 15px; color: #333;">
                                                Clean, transform, and structure data using Excel Power Query, Power BI Power
                                                Query, and Tableau
                                                data preparation tools.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Outcome 3 -->
                                    <div class="col-md-12">
                                        <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                                            style="border-left: 5px solid #198754;">
                                            <i class="fas fa-table text-success fs-4 me-3 mt-1"></i>
                                            <p class="mb-0" style="font-size: 15px; color: #333;">
                                                Build interactive Excel dashboards using PivotTables, Pivot Charts, slicers,
                                                and Power Pivot.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Outcome 4 -->
                                    <div class="col-md-12">
                                        <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                                            style="border-left: 5px solid #fd7e14;">
                                            <i class="fas fa-database text-warning fs-4 me-3 mt-1"></i>
                                            <p class="mb-0" style="font-size: 15px; color: #333;">
                                                Create optimized data models and manage relationships efficiently in Power
                                                BI.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Outcome 5 -->
                                    <div class="col-md-12">
                                        <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                                            style="border-left: 5px solid #dc3545;">
                                            <i class="fas fa-calculator text-danger fs-4 me-3 mt-1"></i>
                                            <p class="mb-0" style="font-size: 15px; color: #333;">
                                                Write basic to intermediate DAX measures for KPIs and time-based performance
                                                analysis.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Outcome 6 -->
                                    <div class="col-md-12">
                                        <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                                            style="border-left: 5px solid #20c997;">
                                            <i class="fas fa-layer-group text-info fs-4 me-3 mt-1"></i>
                                            <p class="mb-0" style="font-size: 15px; color: #333;">
                                                Design interactive Power BI reports with drill-throughs, bookmarks,
                                                tooltips, and publish them
                                                using Power BI Service.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Outcome 7 -->
                                    <div class="col-md-12">
                                        <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                                            style="border-left: 5px solid #0dcaf0;">
                                            <i class="fas fa-chart-pie fs-4 me-3 mt-1" style="color:#0dcaf0;"></i>
                                            <p class="mb-0" style="font-size: 15px; color: #333;">
                                                Build and publish Tableau Public dashboards using calculated fields and
                                                table calculations.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Outcome 8 -->
                                    <div class="col-md-12">
                                        <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                                            style="border-left: 5px solid #6f42c1;">
                                            <i class="fas fa-tachometer-alt fs-4 me-3 mt-1" style="color:#6f42c1;"></i>
                                            <p class="mb-0" style="font-size: 15px; color: #333;">
                                                Apply visualization, usability, and performance best practices across Excel,
                                                Power BI, and
                                                Tableau.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Outcome 9 -->
                                    <div class="col-md-12">
                                        <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                                            style="border-left: 5px solid #198754;">
                                            <i class="fas fa-user-tie text-success fs-4 me-3 mt-1"></i>
                                            <p class="mb-0" style="font-size: 15px; color: #333;">
                                                Confidently present data-driven insights to business and non-technical
                                                stakeholders.
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
                                                <h3 class="trainer-name">Tahir Ali</h3>
                                                <div class="profile-header row">
                                                    <p class="col-md-8">
                                                        <b>Tahir Ali</b> is a Master’s degree holder, Microsoft Certified Trainer, and holds the Microsoft Power BI Data Analyst (PL-300) Certification, enabling him to deliver industry-aligned, business-focused analytics and BI training.
                                                    </p>
                                                    <div class="trainer-image-wrapper col-md-4">
                                                        <img src="{{ asset('img/trainer/new2/Tahir-Ali-BI-APPLICATION.png') }}"
                                                            alt="Trainer Image">
                                                        <span class="trainer-badge">
                                                            <i class="fas fa-star"></i> Expert
                                                        </span>
                                                    </div>
                                                </div>

                                                <p>
                                                     With over 16 years of professional experience, he is a highly motivated corporate trainer who has designed and delivered impactful training programs across diverse industries. He has successfully trained both small and large groups, specializing in professional learning methodologies and instructional design while integrating modern instructional technologies for both onsite and virtual training sessions. His approach is practical, outcome-driven, and aligned with real-world business needs.
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
                                                <i class="fas fa-briefcase text-warning fs-4 me-3 mt-1"></i>
                                                <p class="mb-0" style="font-size: 15px; color: #444;">
                                                    100% job and business-oriented training.
                                                </p>
                                            </div>
                                        </div>

                                        <!-- Service 2 -->
                                        <div class="col-md-12">
                                            <div class="d-flex align-items-start p-3 bg-white rounded shadow-sm h-100"
                                                style="border-left: 5px solid #17a2b8;">
                                                <i class="fas fa-certificate text-info fs-4 me-3 mt-1"></i>
                                                <p class="mb-0" style="font-size: 15px; color: #444;">
                                                    Certificate of completion recognized from the Trade Testing Board, Government of Pakistan.
                                                </p>
                                            </div>
                                        </div>

                                        <!-- Service 3 -->
                                        <div class="col-md-12">
                                            <div class="d-flex align-items-start p-3 bg-white rounded shadow-sm h-100"
                                                style="border-left: 5px solid #28a745;">
                                                <i class="fas fa-user-graduate text-success fs-4 me-3 mt-1"></i>
                                                <p class="mb-0" style="font-size: 15px; color: #444;">
                                                    Claim Continuing Professional Development (CPD) hours for the training.
                                                </p>
                                            </div>
                                        </div>

                                        <!-- Service 4 -->
                                        <div class="col-md-12">
                                            <div class="d-flex align-items-start p-3 bg-white rounded shadow-sm h-100"
                                                style="border-left: 5px solid #dc3545;">
                                                <i class="fas fa-video text-danger fs-4 me-3 mt-1"></i>
                                                <p class="mb-0" style="font-size: 15px; color: #444;">
                                                    Video recorded sessions with personalized Learning Management System (LMS) access for lifetime.
                                                </p>
                                            </div>
                                        </div>

                                        <!-- Service 5 -->
                                        <div class="col-md-12">
                                            <div class="d-flex align-items-start p-3 bg-white rounded shadow-sm h-100"
                                                style="border-left: 5px solid #ffc107;">
                                                <i class="fas fa-laptop-house text-warning fs-4 me-3 mt-1"></i>
                                                <p class="mb-0" style="font-size: 15px; color: #444;">
                                                    Fully equipped training center venue for on-campus sessions, with laptops, projectors, and air-conditioning.
                                                </p>
                                            </div>
                                        </div>

                                        <!-- Service 6 -->
                                        <div class="col-md-12">
                                            <div class="d-flex align-items-start p-3 bg-white rounded shadow-sm h-100"
                                                style="border-left: 5px solid #0d6efd;">
                                                <i class="fas fa-chalkboard-teacher text-primary fs-4 me-3 mt-1"></i>
                                                <p class="mb-0" style="font-size: 15px; color: #444;">
                                                    Live physical on-campus and interactive online sessions.
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </section>

                        </div>


                        <!-- Pre Requisities -->
                        <div class="tab-pane fade" id="pre-requisites" role="tabpanel">

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
                                                        <i class="fas fa-lightbulb"
                                                            style="color:#0d6efd; font-size:16px;"></i>
                                                    </div>
                                                    <h6 style="margin:0; font-weight:600; color:#0d6efd;">Pre-Requisites
                                                    </h6>
                                                </div>
                                                <p style="font-size:14px; color:#333; margin:0;">
                                                    Basic computer literacy, Familiarity with Microsoft Excel fundamentals (tables, basic formulas, charts), Basic understanding of business data (sales, finance, operations, HR, etc.), No prior experience with Power BI or Tableau is required (concepts are covered progressively)
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
                                    
                                        <!-- Program Fee -->
                                        <div class="col-md-12" style="margin-top: 0px;">
                                            <div class="fee-card">
                                                <h6 class="fw-bold">Program Fee</h6>
                                                <ul class="fee-list">
                                                    <li>PKR {{ $course->lump_sum_fee }}/-</li>
                                                    <li>Installment facility available</li>
                                                </ul>
                                            </div>
                                        </div>
                                    
                                        <!-- Program Details -->
                                        <div class="col-md-12" style="margin-top: 0px;">
                                            <div class="fee-card">
                                                <h6 class="fw-bold">Certificate</h6>
                                                <p class="mb-2 ml-3">Upon successful completion of the training, participant will receive a Trade Testing Board, Government of Sindh endorsed certificate featuring secure QR code-based verification.</p>
                                                <p class="mb-2 ml-3">Terms & Conditions apply.</p>
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
                                                    Anyone from any background
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
                            <strong><small>{{ $course->difficulty }}</small></strong>
                        </div>

                        <div class="info-row">
                            <span>Duration</span>
                            <strong>{{ $course->duration }} hours</strong>
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
                            <strong>{{ $course->lump_sum_fee ?? 'N/A' }}</strong>
                        </div>

                        @if (isset($course->image))
                            <div class="info-row">
                                <span>Brochure</span>
                                <strong><a href="{{ $course->image }}" class="btn btn-link"> Download Now</a></strong>
                            </div>
                        @endif

                        <a href="{{ route('registration-form-course', $course->slug) }}"
                            class="apply-btn mt-3">Register Now</a>
                        <a href="{{ route('web.enquiry', $course->slug) }}"
                            class="apply-btn2">Enquire Now</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
    <!-- ================= Get In Touch Section ================= -->
    @include('website.courses.sections.contact', ['courseName' => $course->coursename ?? ''])
@endsection
