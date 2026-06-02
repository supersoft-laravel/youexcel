@extends('website.app')

@section('content')

<div class="breadcumb-wrapper ">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Trainer Profile</h1>
        </div>
    </div>
</div>
<!--==============================
      Team Area
  ==============================-->
<section class="space-top space-extra-bottom">
    <div class="container">
        <div class="row justify-content-center align-items-center gx-80 mb-lg-4 pb-3">
            <div class="col-lg-5 col-xl-auto order-lg-2 mb-4 mb-lg-0 pb-2 pb-lg-0">
                <div class="img-box1 style3">
                    <div class="vs-circle">
                        <div class="mega-hover">
                            <img src="{{ asset('img/trainer/Kashif-Mughal.png') }}" alt="banner">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl order-lg-1 mb-4 mb-md-0">
                <div class="team-details">
                    <h2 class="team-name h2">Kashif Mughal</h2>
                    <p class="team-degi">Data Mining and Business Intelligence</p>
                    <p class="team-experi">20+ years experience</p>
                    <div class="team-review"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                    <div class="social-style2">

                        <a href="https://www.linkedin.com/in/kashifmughalg/"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>

        </div>
        <h4 class="border-title2">Brief Bio</h4>

        <p>
            Kashif Mughal is a seasoned IT professional with over 20 years of experience, currently serving as a Faculty position at Sir Syed University of Engineering & Technology.
        </p>
        <br>
        <p>
            Over the course of his career, he has effectively taught a variety of courses across multiple degree programs. He is recognized for his dedication to lifelong learning and his commitment to employing innovative teaching methodologies.
        </p>

        <div class="list-style1 vs-list mb-4 mt-2">
            <ul>
                <b>Certifications:</b>
                <li>MCS, MS (SE)</li>
                <li>ERP Diploma from IBA</li>
                <li>Data Science Diploma from NED</li>
                <li>DIT from SBTE</li>
                <li>Certification in Project Management</li>
                <li>Certification in Mobile Development</li>
                <li>Certification in AWS</li>
            </ul>
        </div>
    </div>
</section>

@include('website.sections.courses-redirection-section')
@endsection