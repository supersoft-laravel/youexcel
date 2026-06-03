@extends('website.app')

@section('title', '100% Government Funded AI-Powered Skills of Tomorrow – NAVTTC x YouExcel')
@section('meta_description', 'Enroll in the NAVTTC Skills of Tomorrow Program at YouExcel Karachi. 100% Government-funded AI, Freelancing, Digital Marketing, Ecommerce, Graphic Design and Power BI courses.')
@section('meta_keywords', 'NAVTTC Skills of Tomorrow, AI courses Karachi, government funded training Pakistan, YouExcel NAVTTC, free AI training Karachi')

@section('content')

{{-- =============================================
     STYLES (page-scoped, no global overrides)
     ============================================= --}}
<style>
    /* Hero header */
    .sotb-hero {
        background: linear-gradient(135deg, #1a2a3a 0%, #2c3e50 100%);
        color: #fff;
        padding: 160px 0 80px;
        position: relative;
        overflow: hidden;
    }
    .sotb-hero::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(rgba(0, 35, 90, 0.88), rgba(0, 35, 90, 0.92)),
                    url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');
        background-size: cover;
        background-position: center;
        z-index: 0;
    }
    .sotb-hero .hero-inner {
        /* Override theme's .hero-inner { display:flex } — that was compressing
           all children into a horizontal row and squishing h1 on mobile */
        display: block !important;
        position: relative;
        z-index: 1;
        text-align: center;
        background: transparent !important;   /* theme injects background-color */
        padding-top: 0 !important;            /* theme adds 80px padding at 1199px */
        padding-bottom: 0 !important;
        min-height: 0 !important;
        overflow: visible !important;
        max-width: 100%;
        width: 100%;
    }
    .sotb-hero h1,
    .sotb-hero .hero-sub,
    .sotb-hero .badge-govt {
        white-space: normal;
        word-break: normal;
        overflow-wrap: normal;
    }
    .sotb-hero .badge-govt {
        display: inline-block;
        background: #f8a223;
        color: #1a2a3a;
        font-weight: 700;
        font-size: 0.85rem;
        letter-spacing: 1px;
        padding: 6px 18px;
        border-radius: 30px;
        margin-bottom: 20px;
        text-transform: uppercase;
    }
    .sotb-hero h1 {
        font-size: 2.4rem;
        font-weight: 800;
        line-height: 1.25;
        margin-bottom: 16px;
        color: #fff;
    }
    .sotb-hero h1 span {
        color: #f8a223;
    }
    .sotb-hero .hero-sub {
        font-size: 1.15rem;
        opacity: 0.92;
        max-width: 680px;
        margin: 0 auto 28px;
        color: #fff;
    }
    .sotb-hero .hero-actions a {
        margin: 6px 8px;
    }

    /* Section wrapper */
    .sotb-section {
        padding: 60px 0;
    }
    .sotb-section:nth-child(even) {
        background: #f7f9fc;
    }

    /* Section heading */
    .sotb-heading {
        font-size: 1.8rem;
        font-weight: 700;
        color: #1a2a3a;
        margin-bottom: 10px;
    }
    .sotb-heading-underline {
        width: 60px;
        height: 4px;
        background: #f8a223;
        border-radius: 2px;
        margin: 0 auto 30px;
    }
    .sotb-heading-underline.left {
        margin-left: 0;
    }

    /* Course cards */
    .sotb-course-card {
        background: #fff;
        border: 1px solid #e3e8f0;
        border-radius: 12px;
        padding: 24px 20px;
        height: 100%;
        transition: transform 0.25s ease, box-shadow 0.25s ease;
        text-align: center;
    }
    .sotb-course-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 28px rgba(0, 0, 0, 0.1);
    }
    .sotb-course-card .course-number {
        width: 44px;
        height: 44px;
        background: #002347;
        color: #fff;
        border-radius: 50%;
        font-size: 1.1rem;
        font-weight: 700;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 14px;
    }
    .sotb-course-card h5 {
        font-size: 1rem;
        font-weight: 600;
        color: #1a2a3a;
        margin: 0;
    }

    /* Program detail bullets */
    .sotb-detail-item {
        display: flex;
        align-items: flex-start;
        gap: 14px;
        margin-bottom: 18px;
    }
    .sotb-detail-item .icon-box {
        width: 44px;
        height: 44px;
        min-width: 44px;
        background: #002347;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #f8a223;
        font-size: 1.1rem;
    }
    .sotb-detail-item .detail-text strong {
        display: block;
        font-size: 1rem;
        color: #1a2a3a;
    }
    .sotb-detail-item .detail-text span {
        font-size: 0.92rem;
        color: #555;
    }

    /* Steps */
    .sotb-step {
        background: #fff;
        border-left: 5px solid #002347;
        border-radius: 8px;
        padding: 24px 28px;
        margin-bottom: 24px;
        box-shadow: 0 2px 12px rgba(0,0,0,0.06);
    }
    .sotb-step .step-number {
        font-size: 0.8rem;
        font-weight: 700;
        color: #f8a223;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        margin-bottom: 6px;
    }
    .sotb-step h5 {
        font-size: 1.1rem;
        font-weight: 700;
        color: #1a2a3a;
        margin-bottom: 10px;
    }

    /* Documents list */
    .sotb-doc-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .sotb-doc-list li {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 12px 16px;
        background: #fff;
        border: 1px solid #e3e8f0;
        border-radius: 8px;
        margin-bottom: 10px;
        font-size: 0.97rem;
        color: #2d3748;
    }
    .sotb-doc-list li i {
        color: #002347;
        font-size: 1rem;
        min-width: 20px;
    }

    /* Why register cards */
    .sotb-why-item {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        margin-bottom: 16px;
    }
    .sotb-why-item i {
        color: #f8a223;
        font-size: 1.2rem;
        margin-top: 2px;
        min-width: 22px;
    }
    .sotb-why-item span {
        font-size: 0.97rem;
        color: #2d3748;
    }

    /* Eligibility */
    .sotb-eligibility-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .sotb-eligibility-list li {
        padding: 10px 16px;
        border-left: 4px solid #002347;
        background: #f7f9fc;
        border-radius: 0 8px 8px 0;
        margin-bottom: 10px;
        font-size: 0.97rem;
        color: #1a2a3a;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    .sotb-eligibility-list li i {
        color: #002347;
        font-size: 1rem;
    }

    /* Video card */
    .sotb-video-card {
        background: #fff;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 16px rgba(0,0,0,0.1);
        transition: transform 0.25s ease, box-shadow 0.25s ease;
        cursor: pointer;
    }
    .sotb-video-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 28px rgba(0,0,0,0.15);
    }
    .sotb-video-thumb {
        position: relative;
        height: 190px;
        overflow: hidden;
    }
    .sotb-video-thumb img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s ease;
    }
    .sotb-video-card:hover .sotb-video-thumb img {
        transform: scale(1.05);
    }
    .sotb-play-btn {
        position: absolute;
        inset: 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .sotb-play-btn span {
        width: 54px;
        height: 54px;
        background: rgba(255, 0, 0, 0.82);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: transform 0.3s ease, background 0.3s ease;
        box-shadow: 0 4px 14px rgba(0,0,0,0.3);
    }
    .sotb-video-card:hover .sotb-play-btn span {
        transform: scale(1.12);
        background: #ff0000;
    }
    .sotb-play-btn i {
        color: #fff;
        font-size: 20px;
        margin-left: 4px;
    }

    /* Video modal */
    .sotb-modal-overlay {
        display: none;
        position: fixed;
        inset: 0;
        background: rgba(0,0,0,0.88);
        z-index: 9999;
        align-items: center;
        justify-content: center;
    }
    .sotb-modal-overlay.active {
        display: flex;
    }
    .sotb-modal-inner {
        width: 90%;
        max-width: 860px;
        position: relative;
    }
    .sotb-modal-close {
        position: absolute;
        top: -42px;
        right: 0;
        width: 38px;
        height: 38px;
        background: rgba(220,0,0,0.75);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: background 0.3s ease, transform 0.3s ease;
    }
    .sotb-modal-close:hover {
        background: #cc0000;
        transform: rotate(90deg);
    }
    .sotb-modal-close i {
        color: #fff;
        font-size: 18px;
    }
    .sotb-video-frame {
        position: relative;
        padding-bottom: 56.25%;
        height: 0;
        overflow: hidden;
        border-radius: 12px;
        box-shadow: 0 20px 50px rgba(0,0,0,0.6);
    }
    .sotb-video-frame iframe {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        border: none;
    }

    /* CTA banner */
    .sotb-cta {
        background: linear-gradient(135deg, #002347, #1a4480);
        color: #fff;
        padding: 50px 0;
        text-align: center;
    }
    .sotb-cta h3 {
        font-size: 1.7rem;
        font-weight: 700;
        color: #fff;
        margin-bottom: 10px;
    }
    .sotb-cta p {
        font-size: 1rem;
        opacity: 0.9;
        margin-bottom: 24px;
        color: #fff;
    }

    /* Responsive adjustments */
    @media (max-width: 767px) {
        /* Hero padding on mobile */
        .sotb-hero {
            padding: 120px 0 50px;
        }
        /* Hero inner: must stay block, full width, no overflow */
        .sotb-hero .hero-inner {
            max-width: 100% !important;
            width: 100% !important;
            padding-left: 0 !important;
            padding-right: 0 !important;
            overflow: visible !important;
        }
        /* Heading: readable, wraps normally */
        .sotb-hero h1 {
            font-size: 1.65rem;
            line-height: 1.3;
            white-space: normal;
            word-break: normal;
            overflow-wrap: normal;
        }
        /* Subtitle */
        .sotb-hero .hero-sub {
            font-size: 0.97rem;
            max-width: 100%;
        }
        /* Badge */
        .sotb-hero .badge-govt {
            font-size: 0.75rem;
            padding: 5px 14px;
        }
        /* Stack buttons vertically, full width */
        .sotb-hero .hero-actions {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 12px;
        }
        .sotb-hero .hero-actions a {
            display: block;
            width: 100%;
            max-width: 280px;
            margin: 0;
            text-align: center;
            box-sizing: border-box;
        }
        /* Other tweaks */
        .sotb-heading { font-size: 1.45rem; }
        .sotb-video-thumb { height: 160px; }
    }
</style>

{{-- =============================================
     1. HERO HEADER
     ============================================= --}}
<section class="sotb-hero">
    <div class="container hero-inner">
        <div class="badge-govt">100% Government Funded</div>
        <h1>AI-POWERED <span>SKILLS OF TOMORROW</span></h1>
        <p class="hero-sub">
            <strong>Prime Minister Youth Skill Development (NAVTTC)</strong><br>
            in collaboration with <strong>YouExcel</strong>
        </p>
        <div class="hero-actions">
            <a href="https://forms.gle/yko4PcMAZvBVPZdy8" target="_blank" class="vs-btn" style="background:#f8a223; color:#1a2a3a; border-color:#f8a223;">
                <i class="fa-solid fa-file-pen me-2"></i>Fill Enquiry Form
            </a>
            <a href="{{ route('navttc.sotb1') }}#registration" class="vs-btn style3">
                <i class="fa-solid fa-circle-info me-2"></i>Registration Details
            </a>
        </div>
    </div>
</section>

{{-- =============================================
     2. INTRODUCTION
     ============================================= --}}
<section class="sotb-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 text-center">
                <h2 class="sotb-heading">About the Program</h2>
                <div class="sotb-heading-underline mx-auto"></div>
                <p style="font-size:1.05rem; color:#444; line-height:1.8;">
                    The <strong>NAVTTC Skills of Tomorrow Program</strong> in collaboration with YouExcel is a
                    government-funded initiative designed to equip students and young professionals with
                    future-ready AI, freelancing, digital marketing, ecommerce, creative design, and
                    analytics skills.
                </p>
                <p style="font-size:1.05rem; color:#444; line-height:1.8;">
                    YouExcel has been partnering with NAVTTC since 2022 to deliver practical, industry-relevant
                    training to help participants build careers, generate online income, and become part of
                    Pakistan's growing digital economy.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- =============================================
     3. COURSES OFFERED
     ============================================= --}}
<section class="sotb-section">
    <div class="container">
        <div class="text-center">
            <h2 class="sotb-heading">Courses Offered</h2>
            <p class="mb-1" style="color:#666;">Current batch at <strong>IBA Karachi</strong></p>
            <div class="sotb-heading-underline mx-auto"></div>
        </div>
        <div class="row g-4 mt-2">
            @php
                $courses = [
                    ['num'=>1, 'title'=>'Earning Money through Freelancing'],
                    ['num'=>2, 'title'=>'AI for Everyone'],
                    ['num'=>3, 'title'=>'AI Augmented Digital Marketing & SEO'],
                    ['num'=>4, 'title'=>'AI Powered E-Commerce'],
                    ['num'=>5, 'title'=>'AI Augmented Graphic Design and Video Editing'],
                    ['num'=>6, 'title'=>'AI Financial Analyst with Power BI'],
                ];
            @endphp
            @foreach ($courses as $course)
            <div class="col-sm-6 col-lg-4">
                <div class="sotb-course-card">
                    <div class="course-number">{{ $course['num'] }}</div>
                    <h5>{{ $course['title'] }}</h5>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- =============================================
     4. PROGRAM DETAILS
     ============================================= --}}
<section class="sotb-section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-5 text-center text-lg-start">
                <h2 class="sotb-heading">Program Details</h2>
                <div class="sotb-heading-underline left"></div>
                <p style="color:#555; font-size:0.97rem; line-height:1.7;">
                    This program is fully funded by the Government of Pakistan under the
                    Prime Minister Youth Skill Development initiative. No fees. No hidden costs.
                </p>
            </div>
            <div class="col-lg-7">
                <div class="sotb-detail-item">
                    <div class="icon-box"><i class="fa-solid fa-calendar-days"></i></div>
                    <div class="detail-text">
                        <strong>Duration</strong>
                        <span>3 months intensive program</span>
                    </div>
                </div>
                <div class="sotb-detail-item">
                    <div class="icon-box"><i class="fa-solid fa-location-dot"></i></div>
                    <div class="detail-text">
                        <strong>Location</strong>
                        <span>Physical On-Campus classes at YouExcel, Karachi</span>
                    </div>
                </div>
                <div class="sotb-detail-item">
                    <div class="icon-box"><i class="fa-solid fa-file-lines"></i></div>
                    <div class="detail-text">
                        <strong>Testing Requirement</strong>
                        <span>A General NTS Test will be conducted by NAVTTC and NTS after registration.</span>
                    </div>
                </div>
                <div class="sotb-detail-item">
                    <div class="icon-box"><i class="fa-solid fa-hand-holding-dollar"></i></div>
                    <div class="detail-text">
                        <strong>Fee</strong>
                        <span>100% FREE — fully government funded</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- =============================================
     5. REGISTRATION PROCEDURE
     ============================================= --}}
<section class="sotb-section" id="registration">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="sotb-heading">Registration Procedure</h2>
            <div class="sotb-heading-underline mx-auto"></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <div class="sotb-step">
                    <div class="step-number">Step 1</div>
                    <h5>Fill the Google Enquiry Form</h5>
                    <p style="color:#555; margin-bottom:14px; font-size:0.97rem;">
                        Start by filling the online enquiry form to express your interest. This is quick and free.
                    </p>
                    <a href="https://forms.gle/yko4PcMAZvBVPZdy8" target="_blank" class="vs-btn style3" style="font-size:0.9rem;">
                        <i class="fa-brands fa-google me-2"></i>Fill Google Enquiry Form
                    </a>
                </div>

                <div class="sotb-step">
                    <div class="step-number">Step 2</div>
                    <h5>Visit YouExcel with Required Documents</h5>
                    <p style="color:#555; margin-bottom:10px; font-size:0.97rem;">
                        Visit YouExcel to <strong>'complete'</strong> the registration process. Bringing your documents is
                        <strong>mandatory</strong> to finalize enrollment.
                    </p>
                    <p style="color:#555; margin-bottom:14px; font-size:0.95rem;">
                        If you are unable to visit in person, call or message the
                        <strong>Online Help Desk</strong> and they will guide you to register online.
                    </p>
                    <div class="row g-2">
                        <div class="col-sm-6">
                            <a href="https://maps.app.goo.gl/EDR1J7oucv12oi7X8" target="_blank"
                               class="vs-btn style3" style="font-size:0.88rem; width:100%; text-align:center;">
                                <i class="fa-solid fa-map-location-dot me-2"></i>Visit Location
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a href="tel:+923346699336" class="vs-btn style3"
                               style="font-size:0.88rem; width:100%; text-align:center;">
                                <i class="fa-solid fa-phone me-2"></i>0334-6699336
                            </a>
                        </div>
                    </div>
                    <p class="mt-3 mb-0" style="font-size:0.9rem; color:#666;">
                        <i class="fa-solid fa-clock me-1" style="color:#f8a223;"></i>
                        <strong>Visiting Hours:</strong> 9:00 AM – 9:00 PM &nbsp;|&nbsp;
                        Open all 7 days
                        &nbsp;&nbsp;
                        <strong>Online Help Desk:</strong> 0334-6699336 | 0335-6699336
                    </p>
                </div>

            </div>
        </div>
    </div>
</section>

{{-- =============================================
     6. REQUIRED DOCUMENTS
     ============================================= --}}
<section class="sotb-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="text-center mb-4">
                    <h2 class="sotb-heading">Required Documents</h2>
                    <div class="sotb-heading-underline mx-auto"></div>
                    <p style="color:#666; font-size:0.97rem;">
                        Bring the following documents when you visit YouExcel to complete registration.
                    </p>
                </div>
                <ul class="sotb-doc-list">
                    <li><i class="fa-solid fa-graduation-cap"></i> Photocopy of last education degree / mark sheet</li>
                    <li><i class="fa-solid fa-id-card"></i> Photocopy of valid CNIC (Candidate)</li>
                    <li><i class="fa-solid fa-id-card"></i> Photocopy of Father / Guardian CNIC</li>
                    <li><i class="fa-solid fa-image"></i> One recent passport-size photograph</li>
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- =============================================
     7. ELIGIBILITY CRITERIA
     ============================================= --}}
<section class="sotb-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="text-center mb-4">
                    <h2 class="sotb-heading">Eligibility Criteria</h2>
                    <div class="sotb-heading-underline mx-auto"></div>
                </div>
                <ul class="sotb-eligibility-list">
                    <li><i class="fa-solid fa-circle-check"></i> Valid CNIC holder</li>
                    <li><i class="fa-solid fa-circle-check"></i> Minimum Qualification: Intermediate</li>
                    <li><i class="fa-solid fa-circle-check"></i> For Power BI Course: 14 Years of Education Required</li>
                    <li><i class="fa-solid fa-circle-check"></i> Must not have availed NAVTTC training course before</li>
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- =============================================
     8. WHY YOU SHOULD REGISTER
     ============================================= --}}
<section class="sotb-section">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="sotb-heading">Why You Should Register</h2>
            <div class="sotb-heading-underline mx-auto"></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="row">
                    @php
                        $reasons = [
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
                    @endphp
                    @foreach ($reasons as $reason)
                    <div class="col-sm-6">
                        <div class="sotb-why-item">
                            <i class="fa-solid fa-check-circle"></i>
                            <span>{{ $reason }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- =============================================
     9. TESTIMONIAL VIDEOS
     ============================================= --}}
<section class="sotb-section">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="sotb-heading">What Our Students Say</h2>
            <div class="sotb-heading-underline mx-auto"></div>
            <p style="color:#666; font-size:0.97rem;">Hear directly from NAVTTC program graduates</p>
        </div>

        @php
            $sotbVideos = [
                'ckvKV-aYuPQ',
                'Q_UqyHImyqg',
                'x0-DUqhSoaY',
                '_1--NjJ8qfE',
                'biCYptfmT-I',
            ];
        @endphp

        <div class="row g-4 justify-content-center">
            @foreach ($sotbVideos as $vid)
            <div class="col-sm-6 col-lg-4">
                <div class="sotb-video-card sotb-video-trigger" data-video="{{ $vid }}">
                    <div class="sotb-video-thumb">
                        <img src="https://img.youtube.com/vi/{{ $vid }}/mqdefault.jpg"
                             alt="Student testimonial video" loading="lazy">
                        <div class="sotb-play-btn">
                            <span><i class="fas fa-play"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        {{-- Video modal --}}
        <div class="sotb-modal-overlay" id="sotbVideoModal">
            <div class="sotb-modal-inner">
                <div class="sotb-modal-close" id="sotbModalClose">
                    <i class="fas fa-times"></i>
                </div>
                <div class="sotb-video-frame">
                    <iframe id="sotbIframe" src=""
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- =============================================
     10. FAQ LINK
     ============================================= --}}
<section class="sotb-section" style="padding: 50px 0;">
    <div class="container text-center">
        <h2 class="sotb-heading">Frequently Asked Questions</h2>
        <div class="sotb-heading-underline mx-auto"></div>
        <p style="color:#555; max-width:580px; margin:0 auto 24px; font-size:0.97rem;">
            Have questions about the program, testing, or enrollment process?
            Visit our dedicated FAQ page for complete answers.
        </p>
        <a href="{{ url('/faqs-navttcsotb1') }}" class="vs-btn" style="background:#002347; border-color:#002347;">
            <i class="fa-solid fa-circle-question me-2"></i>View All FAQs
        </a>
    </div>
</section>

{{-- =============================================
     11. CTA BANNER
     ============================================= --}}
<section class="sotb-cta">
    <div class="container">
        <h3>Ready to Transform Your Future?</h3>
        <p>Seats are limited. Register today and join Pakistan's AI-powered skills revolution.</p>
        <a href="https://forms.gle/yko4PcMAZvBVPZdy8" target="_blank"
           class="vs-btn" style="background:#f8a223; color:#1a2a3a; border-color:#f8a223; font-size:1rem;">
            <i class="fa-solid fa-rocket me-2"></i>Apply Now — It's Free
        </a>
    </div>
</section>

{{-- Video modal script --}}
<script>
    (function () {
        const triggers = document.querySelectorAll('.sotb-video-trigger');
        const modal    = document.getElementById('sotbVideoModal');
        const iframe   = document.getElementById('sotbIframe');
        const closeBtn = document.getElementById('sotbModalClose');

        triggers.forEach(function (card) {
            card.addEventListener('click', function () {
                var vid = card.getAttribute('data-video');
                iframe.src = 'https://www.youtube.com/embed/' + vid + '?autoplay=1';
                modal.classList.add('active');
                document.body.style.overflow = 'hidden';
            });
        });

        function closeModal() {
            modal.classList.remove('active');
            iframe.src = '';
            document.body.style.overflow = '';
        }

        closeBtn.addEventListener('click', closeModal);
        modal.addEventListener('click', function (e) {
            if (e.target === modal) closeModal();
        });
    })();
</script>

@endsection
