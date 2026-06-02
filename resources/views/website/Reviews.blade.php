@extends('website.app', ['title'=>'Reviews'])

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
        
        .corporate-logos {
            padding: 80px 20px;
            background: linear-gradient(135deg, #f0f4f8, #ffffff);
            text-align: center;
        }

        .corporate-logos h2 {
            font-size: 2.8rem;
            margin-bottom: 50px;
            color: #1a4480;
            position: relative;
            display: inline-block;
        }

        .corporate-logos h2::after {
            content: "";
            display: block;
            width: 60px;
            height: 4px;
            background: #ff9800;
            margin: 12px auto 0;
            border-radius: 2px;
        }

        .logo-container {
            display: flex;
            justify-content: center;
            align-items: stretch;
            gap: 40px;
            flex-wrap: wrap;
            max-width: 1100px;
            margin: auto;
        }

        .logo-card {
            background: #fff;
            padding: 20px 30px;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 140px;
            width: 300px;
        }

        .logo-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 28px rgba(0, 0, 0, 0.12);
        }

        .logo-card img {
            max-width: 100%;
            /*max-height: 100%;*/
            object-fit: contain;
        }

        @media (max-width: 768px) {
            .corporate-logos h2 {
                font-size: 2rem;
            }

            .logo-card {
                width: 160px;
                height: 120px;
                padding: 15px;
            }
        }
    </style>
    <section class="space-top space-extra-bottom section-header">
        <div class="bg-pattern"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="section-title text-center position-relative">
                        <h2>Real Voices. Real Results. Trusted by Thousands Across the Globe.</h2>
                        <p>Experience what our learners and corporate clients say after transforming skills with us—YouExcel delivers value that speaks for itself.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="view-courses-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
                    <div class="elfsight-app-180aecff-7be3-49b6-9603-28a80d740006"></div>
                </div>
                </div>
            </div>
        </div>
    </section>
        
    <!--<section class="corporate-logos">-->
    <!--    <h2>Our Corporate Partners</h2>-->
    <!--    <div class="logo-container">-->
    <!--        <div class="logo-card">-->
    <!--            <img src="{{ asset('img/corporate-logos/Habib-Girls-school.png') }}" alt="Habib Girls School Logo">-->
    <!--        </div>-->
    <!--        <div class="logo-card">-->
    <!--            <img src="{{ asset('img/corporate-logos/NICL.png') }}" alt="NICL Logo">-->
    <!--        </div>-->
    <!--        <div class="logo-card">-->
    <!--            <img src="{{ asset('img/corporate-logos/PII.jpg') }}" alt="PII Logo">-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    @include('website.sections.trusted-companies-carousel')
    
    <section class="space-top space-extra-bottom bg-title">
        <div class="container">
            <div class="title-area text-center wow fadeInUp" data-wow-delay="0.3s">
                <h2 class="sec-title h1 text-yellow">Discover why participants Love YouExcel?</h2>
            </div>
            @include('website.sections.videos-section')
        </div>
    </section>
    
    
    <div class="row mx-2">
            <div class="col-md-12 col-xl-6">
                <section ction class="pb-5">
                    <div class="container">
                    </div>
                    <div class="container cta-style2" style="border: 3px solid #fbce4d; height: 270px;">
                        <div class="row gx-100 gy-4">
                            <div class="col-lg-12 col-xl-12 col-xxl-12 pt-2 text-center">
                                <h2 class="pt-1 text-white">Ready to take the<br> next step?</h2>
                                <p class="pt-1 fs-md text-white">
                                    Join our public training batches across Tech, Business, and Career Skills.
                                </p>
                                <br>
                            </div>
                        </div>
                        <div class="row gx-100 gy-4 justify-content-md-center">
                            <div class="col-lg-10 col-xl-10 col-xxl-10 pb-5">
                                <form class="newsletter-form d-flex flex-row justify-content-center align-items-center">
                                    <a href="{{ url('/courses') }}" class="vs-btn style2">
                                        <i class="far fa-angle-right"></i> View all Courses
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-12 col-xl-6">
                <section ction class="pb-5">
                    <div class="container">
                    </div>
                    <div class="container cta-style2" style="border: 3px solid #fbce4d; height: 270px;">
                        <div class="row gx-100 gy-4">
                            <div class="col-lg-12 col-xl-12 col-xxl-12 pt-2 text-center">
                                <h2 class="pt-1 text-white">Need customized training for your team?</h2>
                                <p class="pt-1 fs-md text-white">
                                    Let’s design a solution that drives results.
                                </p>
                                <br>
                            </div>
                        </div>
                        <div class="row gx-100 gy-4 justify-content-md-center">
                            <div class="col-lg-10 col-xl-10 col-xxl-10 pb-5">
                                <form class="newsletter-form d-flex flex-row justify-content-center align-items-center">
                                    <a href="{{ route('enquiry.corporate') }}" class="vs-btn style2">
                                        <i class="far fa-angle-right"></i> Request a Corporate Training Proposal
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        

@endsection
<!-- ====================== End CEO Area ======================== -->
