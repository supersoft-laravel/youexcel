@extends('website.app', ['title' => 'Data Science and Analytics '])

@section('title', 'Data Science Course | Tableau & R Language in Karachi')
@section('meta_description',
    'Enroll in our Data Science, Tableau & R Language Course in Karachi to gain hands-on skills
    in Python, machine learning, and data analysis.')
@section('meta_keywords', 'Data Science Course in Karachi, Tableau & R Language in Karachi')

@section('content')
    @include('website.courses.sections.css')

    <section class="space-top space-extra-bottom section-header">
        <div class="bg-pattern"></div>
        <div class="container section-content text-center">
            <div class="section-title">
                <h2>
                    The World need Millions of Data Scientists - Start Your Journey Here!
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
                                This training equips aspiring data professionals with hands-on skills in MS Excel, MS Power
                                BI, Tableau, Python, SQL, R Language and Machine Learning Model to transform, analyze data
                                and visualize data to extract trends and insights. Focused on real-world applications and
                                projects, it prepares you for data science, upskilling, or machine learning deployment in a
                                data-driven world.
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
                                            <i class="fas fa-broom text-primary"></i>
                                            <p>
                                                Create Impactful Visualizations using advanced data analysis and cleaning
                                                using Excel, Power BI,
                                                and SQL
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="outcome-card border-purple">
                                            <i class="fas fa-database text-purple"></i>
                                            <p>
                                                Gain skills in Python for data manipulation and analysis using popular
                                                libraries like Pandas,
                                                NumPy, Matplotlib, and Seaborn for data science projects
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="outcome-card border-success">
                                            <i class="fas fa-brain text-success"></i>
                                            <p>
                                                Design and interact with relational databases such as SQL queries for data
                                                analysis and
                                                decision-making
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="outcome-card border-warning">
                                            <i class="fas fa-chart-line text-warning"></i>
                                            <p>
                                                Learn the fundamentals of machine learning, including supervised,
                                                unsupervised, and
                                                reinforcement learning
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="outcome-card border-danger">
                                            <i class="fas fa-clock text-danger"></i>
                                            <p>
                                                Deploy machine learning applications using Flask, Streamlit , or serverless
                                                platforms
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="outcome-card border-info">
                                            <i class="fas fa-share-square text-info"></i>
                                            <p>
                                                Gain practical experience by completing hands-on projects in data analysis,
                                                visualization, and
                                                machine learning
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
                                                <h3 class="trainer-name">M. Rafay Shaikh</h3>
                                                <div class="profile-header row">
                                                    <p class="col-md-8">
                                                        M. Rafay Shaikh specializes in Data Science, Power BI, PySpark,
                                                        Python,
                                                        Machine Learning,
                                                        Computer Vision, Web Development, and Azure DevOps. He has led
                                                        impactful
                                                        projects including
                                                        a Book Recommendation System, NLP-based Medical Diary, and Lung
                                                        Cancer
                                                        Detection using CNN.
                                                    </p>
                                                    <div class="trainer-image-wrapper col-md-4">
                                                        <img src="{{ asset('img/trainer/new2/M-Rafay-Shaikh-DATA-SCIENCE.png') }}"
                                                            alt="Trainer Image">
                                                        <span class="trainer-badge">
                                                            <i class="fas fa-star"></i> Expert
                                                        </span>
                                                    </div>
                                                </div>

                                                <p>
                                                    He holds an MS and BS in Software Engineering from Sir Syed University
                                                    and currently serves
                                                    as a Lecturer, teaching Web Engineering and Introduction to Computing.
                                                    He also manages the
                                                    departmental CMS, oversees the AI Lab, and advises IEEE Computational
                                                    Society activities.
                                                </p>

                                                <p>
                                                    Rafay has played key leadership roles within IEEE Karachi Section and
                                                    was awarded 2nd place
                                                    in the Sindh HEC Faculty Training Program.
                                                </p>

                                                <p>
                                                    Previously, he worked as an IT Support Engineer managing servers,
                                                    websites, and digital
                                                    platforms.
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

                                        <!-- Item -->
                                        <div class="col-md-12">
                                            <div class="value-card border-warning">
                                                <i class="fas fa-video text-warning"></i>
                                                <p>
                                                    Lifetime video recorded sessions with personalized Learning Management
                                                    System (LMS)
                                                    access for months
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="value-card border-info">
                                                <i class="fab fa-whatsapp text-info"></i>
                                                <p>
                                                    Lifetime WhatsApp post-training support
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="value-card border-success">
                                                <i class="fas fa-briefcase text-success"></i>
                                                <p>
                                                    100% job and business-oriented training
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="value-card border-danger">
                                                <i class="fas fa-certificate text-danger"></i>
                                                <p>
                                                    Certificate of completion recognized by Trade Testing Board, Government
                                                    of Pakistan
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="value-card border-warning">
                                                <i class="fas fa-laptop-house text-warning"></i>
                                                <p>
                                                    Fully equipped on-campus training center with laptops, projectors, and
                                                    air-conditioning
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="value-card border-primary">
                                                <i class="fas fa-chalkboard-teacher text-primary"></i>
                                                <p>
                                                    Live physical on-campus and online sessions facility
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="value-card border-purple">
                                                <i class="fas fa-hourglass-half text-purple"></i>
                                                <p>
                                                    Claim Continuing Professional Development (CPD) hours for the training
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
                                                    Basic computer literacy, familiarity with Windows operating
                                                    system
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
                                                    Business & Finance Professionals
                                                </p>
                                                <p style="font-size:14px; color:#333; margin:0;">
                                                    IT & Software Professionals
                                                </p>
                                                <p style="font-size:14px; color:#333; margin:0;">
                                                    Aspiring Students & Job Seekers seeking to a carer as Data Analysts &
                                                    Scientists
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
