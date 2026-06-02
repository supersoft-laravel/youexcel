@extends('website.app', ['title' => 'Become a GenAI Developer'])

@section('content')
    @include('website.courses.sections.css')

    <section class="space-top space-extra-bottom section-header">
        <div class="bg-pattern"></div>
        <div class="container section-content text-center">
            <div class="section-title">
                <h2>
                    Build Intelligent Systems: Launch Your Career in Generative AI, Automation, and Scalable Cloud Solutions
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
                                This is a focused 78-hour program designed to build practical,
                                industry-ready skills in modern Generative AI. The bootcamp covers the complete GenAI
                                workflow from
                                Python fundamentals to LangChain, LangGraph, FastAPI backend development, Docker-based
                                deployment,
                                AWS cloud workflows, and LLM fine tuning. The training is fully hands-on, enabling
                                participants to
                                build and deploy real-world AI applications.
                            </p>
                            <p class="mb-2">
                                Through guided labs and mini projects, learners will gain practical
                                experience in RAG systems, AI agents, production-grade APIs, and custom LLM pipelines
                                developing the
                                essential engineering skills required in today’s AI-driven industry.
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

                                <div class="row g-4">

                                    <div class="col-md-12">
                                        <div class="outcome-card border-primary">
                                            <i class="fas fa-code text-primary"></i>
                                            <p>
                                                Build strong Python foundations and write clean, modular code for real-world
                                                AI and automation use cases.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="outcome-card border-purple">
                                            <i class="fas fa-robot text-purple"></i>
                                            <p>
                                                Design and implement Generative AI solutions using Prompt Engineering,
                                                LangChain, RAG pipelines,
                                                and Vector Databases.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="outcome-card border-success">
                                            <i class="fas fa-project-diagram text-success"></i>
                                            <p>
                                                Create autonomous AI agents and intelligent workflows using modern agent
                                                frameworks.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="outcome-card border-warning">
                                            <i class="fas fa-network-wired text-warning"></i>
                                            <p>
                                                Develop and integrate production-ready backend APIs and AI services.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="outcome-card border-danger">
                                            <i class="fas fa-cloud-upload-alt text-danger"></i>
                                            <p>
                                                Containerize, deploy, and manage scalable GenAI applications using Docker
                                                and cloud platforms (AWS).
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="outcome-card border-info">
                                            <i class="fas fa-graduation-cap text-info"></i>
                                            <p>
                                                Capstone project covering development, fine-tuning, deployment, and
                                                automation.
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
                                                <h3 class="trainer-name">Muhammad Osama</h3>
                                                <div class="profile-header row">
                                                    <p class="col-md-8">
                                                        <b>Muhammad Osama</b> is a skilled AI Engineer with over 3 years of
                                                        professional experience in
                                                        designing and developing intelligent AI-driven applications. He has
                                                        worked extensively across
                                                        Computer Vision, Generative AI, and Agentic AI systems, delivering
                                                        practical, real-world
                                                        solutions.
                                                    </p>
                                                    <div class="trainer-image-wrapper col-md-4">
                                                        <img src="{{ asset('img/trainer/new2/Muhammad-Osama-GEN AI.png') }}"
                                                            alt="Trainer Image">
                                                        <span class="trainer-badge">
                                                            <i class="fas fa-star"></i> Expert
                                                        </span>
                                                    </div>
                                                </div>

                                                <p>
                                                    He possesses strong expertise in Large Language Models (LLMs) and
                                                    Python, with hands-on
                                                    experience using LangChain, LangGraph, FastAPI, and Dockerization to
                                                    build scalable,
                                                    production-ready AI applications. His work focuses on creating robust,
                                                    efficient, and
                                                    deployment-ready AI systems that solve complex business and automation
                                                    challenges.
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </section>

                        </div>

                        <!-- VALUE ADDITIONS TAB -->
                        <div class="tab-pane fade" id="value-additions" role="tabpanel">

                            <section class="py-5 value-section">
                                <div class="container">

                                    <!-- Services Grid -->
                                    <div class="row g-4">

                                        <div class="col-md-12">
                                            <div class="value-card border-warning">
                                                <i class="fas fa-briefcase text-warning"></i>
                                                <p>
                                                    100% job and business-oriented training.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="value-card border-info">
                                                <i class="fas fa-certificate text-info"></i>
                                                <p>
                                                    Certificate of completion recognized by the Trade Testing Board,
                                                    Government of Pakistan.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="value-card border-success">
                                                <i class="fas fa-user-graduate text-success"></i>
                                                <p>
                                                    Claim Continuing Professional Development (CPD) hours for the training.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="value-card border-danger">
                                                <i class="fas fa-video text-danger"></i>
                                                <p>
                                                    Video recorded sessions with personalized LMS access for lifetime
                                                    learning.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="value-card border-warning">
                                                <i class="fas fa-laptop-house text-warning"></i>
                                                <p>
                                                    Fully equipped training center with laptops, projectors, and
                                                    air-conditioned classrooms.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="value-card border-primary">
                                                <i class="fas fa-chalkboard-teacher text-primary"></i>
                                                <p>
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
                                                    Basic computer literacy
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
