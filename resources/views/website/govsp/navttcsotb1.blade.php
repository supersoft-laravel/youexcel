@extends('website.app')

@section('title', '100% Government Funded AI-Powered Skills of Tomorrow – NAVTTC x YouExcel')
@section('meta_description', 'Enroll in the NAVTTC Skills of Tomorrow Program at YouExcel Karachi. 100% Government Funded AI, Freelancing, Digital Marketing, Ecommerce, Graphic Design and Power BI training.')
@section('meta_keywords', 'NAVTTC Skills of Tomorrow, government funded AI training, free AI course Karachi, YouExcel NAVTTC')

@section('content')

    {{-- Exact same CSS include as course-details.blade.php --}}
    @include('website.courses.sections.css')

    {{-- Exact same hero section as course-details.blade.php --}}
    <section class="space-top space-extra-bottom section-header">
        <div class="bg-pattern"></div>
        <div class="container section-content text-center">
            <div class="section-title">
                <h2>
                    100% GOVERNMENT FUNDED AI-POWERED SKILLS OF TOMORROW
                </h2>
                <p>
                    Prime Minister Youth Skill Development (NAVTTC) in collaboration with YouExcel
                </p>
            </div>
        </div>
    </section>

    {{-- Exact same main-card wrapper as course-details.blade.php --}}
    <div class="my-4">
        <div class="main-card">

            <!-- TITLE — same structure, no star rating for govt program -->
            <div class="mb-3">
                <div style="color:#ffb400;">
                    <i class="fa-solid fa-star star-filled"></i>
                    <i class="fa-solid fa-star star-filled"></i>
                    <i class="fa-solid fa-star star-filled"></i>
                    <i class="fa-solid fa-star star-filled"></i>
                    <i class="fa-solid fa-star star-filled"></i>
                </div>
                <h4 class="fw-bold mt-2">Skills of Tomorrow – Freelancing</h4>
            </div>

            <div class="row g-4">

                <!-- LEFT SIDE — exact same col-lg-8 as course-details.blade.php -->
                <div class="col-lg-8">

                    <!-- HERO VIDEO — exact same autoplay structure -->
                    <div class="hero-video mb-4">
                        <div class="video-container">
                            <video autoplay muted loop playsinline>
                                <source src="{{ asset($videoUrl) }}" type="video/mp4">
                            </video>
                        </div>
                    </div>

                    <!-- TABS — labels match Task 2 PDF headings exactly -->
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#sotb-intro">
                                Introduction
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#sotb-courses">
                                Courses Offered
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#sotb-details">
                                Program Details
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#sotb-reg">
                                Registration Procedure
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#sotb-docs">
                                Required Documents
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#sotb-elig">
                                Eligibility Criteria
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#sotb-why">
                                Why you should Register
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#sotb-faqs">
                                FAQs
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#sotb-videos">
                                Testimonial Videos
                            </button>
                        </li>
                    </ul>

                    <div class="tab-content">

                        <!-- INTRODUCTION -->
                        <div class="tab-pane fade show active" id="sotb-intro">
                            <h6 class="fw-bold mt-3">Introduction</h6>
                            <p>
                                The NAVTTC Skills of Tomorrow Program in collaboration with YouExcel is a
                                government-funded initiative designed to equip students and young professionals with
                                future-ready AI, freelancing, digital marketing, ecommerce, creative design, and
                                analytics skills.
                            </p>
                            <p>
                                YouExcel has been partnering with NAVTTC since 2022 to deliver practical,
                                industry-relevant training to help participants build careers, generate online income,
                                and become part of Pakistan's growing digital economy.
                            </p>
                        </div>

                        <!-- COURSES OFFERED -->
                        <div class="tab-pane fade" id="sotb-courses">

                            <div class="outcomes-wrapper mt-4">
                                <p class="fw-semibold mb-3">Courses Offered in current batch at IBA Karachi:</p>
                                <div class="row g-4">

                                    @php
                                        $sotbCourses = [
                                            'Earning Money through Freelancing',
                                            'AI for Everyone',
                                            'AI Augmented Digital Marketing & SEO',
                                            'AI Powered E-Commerce',
                                            'AI Augmented Graphic Design and Video Editing',
                                            'AI Financial Analyst with Power BI',
                                        ];
                                        $colors = ['primary','purple','success','warning','danger','info'];
                                    @endphp

                                    @foreach ($sotbCourses as $i => $c)
                                    <div class="col-md-12">
                                        <div class="outcome-card border-{{ $colors[$i % count($colors)] }}">
                                            <p><strong>{{ $i + 1 }}.</strong> {{ $c }}</p>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>

                        </div>

                        <!-- WHY YOU SHOULD REGISTER -->
                        <div class="tab-pane fade" id="sotb-why">

                            <div class="outcomes-wrapper mt-4">
                                <div class="row g-4">

                                    @php
                                        $outcomes = [
                                            '100% Government Funded Training',
                                            'Future-Ready AI & Digital Skills',
                                            'Practical Hands-On Learning',
                                            'Freelancing & Online Earning Opportunities',
                                            'Industry-Relevant Course Content',
                                            'Learn Modern AI Tools & Technologies',
                                            'Expert Trainers & Mentorship',
                                            'Portfolio & Skill Development',
                                            'Guidance for Freelancing Platforms & Online Work',
                                            'Interactive Learning Environment with Expert Faculty',
                                        ];
                                        $colors = ['primary','purple','success','warning','danger','info'];
                                    @endphp

                                    @foreach ($outcomes as $key => $outcome)
                                    <div class="col-md-12">
                                        <div class="outcome-card border-{{ $colors[$key % count($colors)] }}">
                                            <p>{{ $outcome }}</p>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>

                        </div>

                        <!-- PROGRAM DETAILS -->
                        <div class="tab-pane fade" id="sotb-details" role="tabpanel">

                            <section class="py-5 value-section">
                                <div class="container">
                                    <div class="row g-4">

                                        <div class="col-md-12">
                                            <div class="value-card border-primary">
                                                <i class="fas fa-calendar-days text-primary"></i>
                                                <p><strong>Duration:</strong> 3 months</p>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="value-card border-success">
                                                <i class="fas fa-building-columns text-success"></i>
                                                <p><strong>Mode:</strong> Physical On-Campus classes at YouExcel, Karachi</p>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="value-card border-warning">
                                                <i class="fas fa-file-lines text-warning"></i>
                                                <p><strong>Testing Requirement:</strong> A General NTS Test will be conducted by NAVTTC and NTS after registration.</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </section>

                        </div>

                        <!-- REGISTRATION PROCEDURE -->
                        <div class="tab-pane fade" id="sotb-reg" role="tabpanel">

                            <section class="py-5 value-section">
                                <div class="container">
                                    <div class="row g-4">

                                        <div class="col-md-12">
                                            <div class="value-card border-primary">
                                                <i class="fas fa-file-pen text-primary"></i>
                                                <div>
                                                    <p><strong>Step 1:</strong><br>
                                                    Fill Enquiry Form: <a href="{{ route('enquiry.navttcsotb1') }}">Click Here</a></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="value-card border-success">
                                                <i class="fas fa-building text-success"></i>
                                                <div>
                                                    <p><strong>Step 2:</strong><br>
                                                    Visit YouExcel with Required Documents to <strong>'complete'</strong> registration process.<br><br>
                                                    Please note: Visiting YouExcel with Required Documents is important to complete registration. If you are unable to visit, you must call/message at ONLINE HELP DESK to help you register online.<br><br>
                                                    <strong>Visit Location:</strong> <a href="https://maps.app.goo.gl/EDR1J7oucv12oi7X8" target="_blank">View on Google Maps</a><br>
                                                    <strong>Visiting Hours:</strong> 9:00 AM to 9:00 PM (Open all 7 days)<br>
                                                    <strong>Online Help Desk:</strong> 0334-6699336 | 0335-6699336</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </section>

                        </div>

                        <!-- REQUIRED DOCUMENTS -->
                        <div class="tab-pane fade" id="sotb-docs" role="tabpanel">

                            <section class="py-5 value-section">
                                <div class="container">
                                    <div class="row g-4">

                                        @php
                                            $docs = [
                                                ['color'=>'primary','icon'=>'fas fa-graduation-cap','text'=>'Photocopy of last education degree / mark sheet'],
                                                ['color'=>'success','icon'=>'fas fa-id-card','text'=>'Photocopy of valid CNIC (Candidate)'],
                                                ['color'=>'warning','icon'=>'fas fa-id-card','text'=>'Photocopy of Father/Guardian CNIC'],
                                                ['color'=>'danger','icon'=>'fas fa-image','text'=>'One recent passport-size photograph'],
                                            ];
                                        @endphp
                                        @foreach ($docs as $d)
                                        <div class="col-md-12">
                                            <div class="value-card border-{{ $d['color'] }}">
                                                <i class="{{ $d['icon'] }} text-{{ $d['color'] }}"></i>
                                                <p>{{ $d['text'] }}</p>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>
                            </section>

                        </div>

                        <!-- ELIGIBILITY CRITERIA -->
                        <div class="tab-pane fade" id="sotb-elig" role="tabpanel">

                            <section class="py-5 value-section">
                                <div class="container">
                                    <div class="row g-4">

                                        <div class="col-lg-12 col-md-12">
                                            <div class="card h-100 border-0 shadow-sm text-start p-3"
                                                 style="border-radius:12px; background:#fff;">
                                                <div class="d-flex align-items-center mb-2">
                                                    <div style="width:40px;height:40px;border-radius:50%;background:#0d6efd1a;display:flex;align-items:center;justify-content:center;margin-right:10px;">
                                                        <i class="fas fa-lightbulb" style="color:#0d6efd;font-size:16px;"></i>
                                                    </div>
                                                    <h6 style="margin:0;font-weight:600;color:#0d6efd;">Eligibility Criteria</h6>
                                                </div>
                                                <ul style="font-size:14px;color:#333;margin:0;padding-left:18px;">
                                                    <li>Valid CNIC holder</li>
                                                    <li>Minimum Qualification: Intermediate</li>
                                                    <li>For Power BI Course: 14 Years of Education Required</li>
                                                    <li>Must not have availed NAVTTC training course before</li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </section>

                        </div>

                        <!-- FAQs -->
                        <div class="tab-pane fade" id="sotb-faqs" role="tabpanel">

                            <section class="py-5 value-section">
                                <div class="container">
                                    <div class="row g-4">
                                        <div class="col-md-12">
                                            <div class="value-card border-primary">
                                                <i class="fas fa-circle-question text-primary"></i>
                                                <div>
                                                    <p>Please visit the link below for more information:</p>
                                                    <a href="{{ route('faqs-navttcsotb1') }}" class="apply-btn d-inline-block px-4" style="width:auto;">View All FAQs</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                        </div>

                        <!-- TESTIMONIAL VIDEOS -->
                        <div class="tab-pane fade" id="sotb-videos" role="tabpanel">

                            <section class="py-4">
                                <div class="container">
                                    <div class="row g-3">
                                        @php
                                            $vids = [
                                                'ckvKV-aYuPQ',
                                                'Q_UqyHImyqg',
                                                'x0-DUqhSoaY',
                                                '_1--NjJ8qfE',
                                                'biCYptfmT-I',
                                            ];
                                        @endphp
                                        @foreach ($vids as $vid)
                                        <div class="col-sm-6 col-md-4">
                                            <div class="card border-0 shadow-sm" style="border-radius:10px;overflow:hidden;cursor:pointer;"
                                                 onclick="sotbPlay('{{ $vid }}')">
                                                <div style="position:relative;">
                                                    <img src="https://img.youtube.com/vi/{{ $vid }}/mqdefault.jpg"
                                                         alt="Testimonial" class="img-fluid w-100"
                                                         style="height:150px;object-fit:cover;" loading="lazy">
                                                    <div style="position:absolute;inset:0;display:flex;align-items:center;justify-content:center;">
                                                        <div style="width:46px;height:46px;background:rgba(220,0,0,0.85);border-radius:50%;display:flex;align-items:center;justify-content:center;">
                                                            <i class="fas fa-play" style="color:#fff;font-size:16px;margin-left:3px;"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </section>

                            {{-- Video modal --}}
                            <div id="sotbModal" style="display:none;position:fixed;inset:0;background:rgba(0,0,0,0.88);z-index:9999;align-items:center;justify-content:center;">
                                <div style="width:90%;max-width:860px;position:relative;">
                                    <div onclick="sotbClose()" style="position:absolute;top:-40px;right:0;width:34px;height:34px;background:rgba(200,0,0,0.8);border-radius:50%;display:flex;align-items:center;justify-content:center;cursor:pointer;">
                                        <i class="fas fa-times" style="color:#fff;font-size:15px;"></i>
                                    </div>
                                    <div style="position:relative;padding-bottom:56.25%;height:0;border-radius:10px;overflow:hidden;">
                                        <iframe id="sotbIframe" src="" allow="accelerometer;autoplay;clipboard-write;encrypted-media;gyroscope;picture-in-picture" allowfullscreen
                                            style="position:absolute;inset:0;width:100%;height:100%;border:none;"></iframe>
                                    </div>
                                </div>
                            </div>
                            <script>
                            window.sotbPlay = function(id) {
                                document.getElementById('sotbIframe').src = 'https://www.youtube.com/embed/' + id + '?autoplay=1';
                                document.getElementById('sotbModal').style.display = 'flex';
                                document.body.style.overflow = 'hidden';
                            };
                            window.sotbClose = function() {
                                document.getElementById('sotbIframe').src = '';
                                document.getElementById('sotbModal').style.display = 'none';
                                document.body.style.overflow = '';
                            };
                            document.addEventListener('click', function(e) {
                                if (e.target === document.getElementById('sotbModal')) window.sotbClose();
                            });
                            </script>

                        </div>

                    </div>
                </div>

                <!-- RIGHT SIDE — exact same price-card as course-details.blade.php, updated for NAVTTC -->
                <div class="col-lg-4">
                    <div class="price-card">
                        <div class="price">Detail in a Snapshot</div>

                        <div class="info-row">
                            <span>Duration</span>
                            <strong>3 Months</strong>
                        </div>

                        <div class="info-row">
                            <span>Mode</span>
                            <strong>Physical On-Campus</strong>
                        </div>

                        <div class="info-row">
                            <span>NTS Test</span>
                            <strong>Required after Registration</strong>
                        </div>

                        <a href="{{ route('enquiry.navttcsotb1') }}" class="apply-btn mt-3">Enquire Now</a>
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSf28rhYVGN_OijOCL91cuzksr0F_FRBkqBccxy9QUIMgSYUyQ/viewform"
                           target="_blank" class="apply-btn2">YouExcel Portal</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- Exact same contact section include as course-details.blade.php --}}
    @include('website.courses.sections.contact', ['courseName' => 'Skills of Tomorrow – Freelancing (NAVTTC)'])

@endsection
