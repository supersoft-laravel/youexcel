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
                                            'AI for Everyone',
                                            'AI Augmented Digital Marketing & SEO',
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

    {{-- ══ Student Testimonials Carousel ══ --}}
    <section style="background:#f7f9fc;padding:60px 0 70px;">
        <div class="container">
            <h2 class="text-center fw-bold mb-5" style="color:#1a2a3a;">Student Testimonials</h2>

            <div style="position:relative;max-width:1200px;margin:0 auto;">

                {{-- Left arrow --}}
                <button id="sotb-prev"
                        style="position:absolute;left:-28px;top:50%;transform:translateY(-50%);z-index:10;
                               background:transparent;border:none;color:#002347;font-size:22px;
                               cursor:pointer;padding:0;line-height:1;">
                    <i class="fas fa-chevron-left"></i>
                </button>

                {{-- Carousel viewport --}}
                <div id="sotb-viewport" style="overflow:hidden;">
                    <div id="sotb-track" style="display:flex;transition:transform 0.5s ease;">

                        @php
                            $testimonials = [
                                ['id'=>'ckvKV-aYuPQ', 'name'=>'Bakhtawar Shah',  'batch'=>'Digital Marketing 2022'],
                                ['id'=>'Q_UqyHImyqg', 'name'=>'Hammad',          'batch'=>'PMYSDP Batch 2018'],
                                ['id'=>'x0-DUqhSoaY', 'name'=>'Ureba Abdul Jabbar','batch'=>'Digital Marketing 2022'],
                                ['id'=>'_1--NjJ8qfE', 'name'=>'Student',         'batch'=>'YouExcel Alumni'],
                            ];
                        @endphp

                        @foreach ($testimonials as $t)
                        <div class="sotb-slide" style="flex:0 0 calc(100% / 3);padding:0 10px;box-sizing:border-box;">
                            <div style="border-radius:12px;overflow:hidden;box-shadow:0 4px 16px rgba(0,0,0,0.1);
                                        cursor:pointer;background:#000;position:relative;"
                                 onclick="sotbPlay('{{ $t['id'] }}')">
                                <img src="https://img.youtube.com/vi/{{ $t['id'] }}/mqdefault.jpg"
                                     alt="{{ $t['name'] }}"
                                     style="width:100%;height:220px;object-fit:cover;display:block;opacity:0.88;">
                                {{-- Play button overlay --}}
                                <div style="position:absolute;inset:0;display:flex;align-items:center;justify-content:center;">
                                    <div style="width:52px;height:52px;background:rgba(220,0,0,0.88);
                                                border-radius:50%;display:flex;align-items:center;justify-content:center;
                                                transition:transform 0.2s;">
                                        <i class="fas fa-play" style="color:#fff;font-size:18px;margin-left:4px;"></i>
                                    </div>
                                </div>
                                {{-- Name badge --}}
                                <div style="position:absolute;bottom:0;left:0;right:0;
                                            background:linear-gradient(transparent,rgba(0,0,0,0.75));
                                            padding:20px 14px 10px;">
                                    <div style="color:#fff;font-weight:700;font-size:0.85rem;">{{ $t['name'] }}</div>
                                    <div style="color:rgba(255,255,255,0.8);font-size:0.78rem;">{{ $t['batch'] }}</div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>

                {{-- Right arrow --}}
                <button id="sotb-next"
                        style="position:absolute;right:-28px;top:50%;transform:translateY(-50%);z-index:10;
                               background:transparent;border:none;color:#002347;font-size:22px;
                               cursor:pointer;padding:0;line-height:1;">
                    <i class="fas fa-chevron-right"></i>
                </button>

            </div>

            {{-- Dot indicators --}}
            <div id="sotb-dots" style="display:flex;justify-content:center;gap:8px;margin-top:24px;"></div>

        </div>
    </section>

    {{-- Video modal --}}
    <div id="sotbModal" style="display:none;position:fixed;inset:0;background:rgba(0,0,0,0.88);z-index:9999;align-items:center;justify-content:center;">
        <div style="width:90%;max-width:860px;position:relative;">
            <div onclick="sotbClose()"
                 style="position:absolute;top:-40px;right:0;width:34px;height:34px;
                        background:rgba(200,0,0,0.85);border-radius:50%;display:flex;
                        align-items:center;justify-content:center;cursor:pointer;">
                <i class="fas fa-times" style="color:#fff;font-size:15px;"></i>
            </div>
            <div style="position:relative;padding-bottom:56.25%;height:0;border-radius:10px;overflow:hidden;">
                <iframe id="sotbIframe" src=""
                        allow="accelerometer;autoplay;clipboard-write;encrypted-media;gyroscope;picture-in-picture"
                        allowfullscreen
                        style="position:absolute;inset:0;width:100%;height:100%;border:none;"></iframe>
            </div>
        </div>
    </div>

    <script>
    (function () {
        var total     = 4;   // total video cards
        var visible   = 3;   // cards shown at once
        var maxIndex  = total - visible; // 1
        var current   = 0;
        var autoTimer = null;

        var track     = document.getElementById('sotb-track');
        var viewport  = document.getElementById('sotb-viewport');
        var dotsBox   = document.getElementById('sotb-dots');

        // Build dot indicators
        for (var d = 0; d <= maxIndex; d++) {
            var dot = document.createElement('div');
            dot.setAttribute('data-idx', d);
            dot.style.cssText = 'width:10px;height:10px;border-radius:50%;cursor:pointer;transition:background 0.3s;';
            dot.style.background = d === 0 ? '#002347' : '#c0cad6';
            dot.addEventListener('click', (function(i){ return function(){ goTo(i); resetTimer(); }; })(d));
            dotsBox.appendChild(dot);
        }

        function updateDots() {
            var dots = dotsBox.querySelectorAll('div');
            dots.forEach(function(d, i) {
                d.style.background = i === current ? '#002347' : '#c0cad6';
            });
        }

        function goTo(n) {
            current = ((n % (maxIndex + 1)) + (maxIndex + 1)) % (maxIndex + 1);
            var itemW = viewport.offsetWidth / visible;
            track.style.transform = 'translateX(' + (-current * itemW) + 'px)';
            updateDots();
        }

        document.getElementById('sotb-prev').addEventListener('click', function () {
            goTo(current - 1); resetTimer();
        });
        document.getElementById('sotb-next').addEventListener('click', function () {
            goTo(current + 1); resetTimer();
        });

        function startTimer() {
            autoTimer = setInterval(function () { goTo(current + 1); }, 4000);
        }
        function resetTimer() {
            clearInterval(autoTimer); startTimer();
        }

        // Recalc on resize
        window.addEventListener('resize', function () { goTo(current); });

        startTimer();

        // Modal
        window.sotbPlay = function (id) {
            document.getElementById('sotbIframe').src = 'https://www.youtube.com/embed/' + id + '?autoplay=1';
            document.getElementById('sotbModal').style.display = 'flex';
            document.body.style.overflow = 'hidden';
            clearInterval(autoTimer);
        };
        window.sotbClose = function () {
            document.getElementById('sotbIframe').src = '';
            document.getElementById('sotbModal').style.display = 'none';
            document.body.style.overflow = '';
            startTimer();
        };
        document.addEventListener('click', function (e) {
            if (e.target === document.getElementById('sotbModal')) window.sotbClose();
        });

        // Mobile: show 1 visible
        function applyResponsive() {
            var slides = document.querySelectorAll('.sotb-slide');
            if (window.innerWidth < 768) {
                visible = 1; maxIndex = total - 1;
                slides.forEach(function(s){ s.style.flex = '0 0 100%'; });
            } else if (window.innerWidth < 992) {
                visible = 2; maxIndex = total - 2;
                slides.forEach(function(s){ s.style.flex = '0 0 50%'; });
            } else {
                visible = 3; maxIndex = total - 3;
                slides.forEach(function(s){ s.style.flex = '0 0 calc(100% / 3)'; });
            }
            goTo(0);
        }
        applyResponsive();
        window.addEventListener('resize', applyResponsive);
    })();
    </script>

@endsection
