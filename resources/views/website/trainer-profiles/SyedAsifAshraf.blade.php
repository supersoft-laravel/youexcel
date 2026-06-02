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
                            <img src="{{ asset('img/trainer/Syed-Asif-Ashraf.jpg') }}" alt="banner">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl order-lg-1 mb-4 mb-md-0">
                <div class="team-details">
                    <h2 class="team-name h2">Syed Asif Ashraf</h2>
                    <p class="team-degi">Digital Marketing and Ecommerce</p>
                    <p class="team-experi">20+ years experience</p>
                    <div class="team-review"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                    <div class="social-style2">

                        <a href="https://www.linkedin.com/in/syedasifashraf/"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>

        </div>
        <h4 class="border-title2">Brief Bio</h4>

        <p>
            Syed Asif Ashraf is a learning and development and Digital Marketing Professional with an overall experience of 20 years. His education consists of an MBA in Marketing and an M.A. in Mass Communication. Asif is also a Google certified digital marketing professional. He has previously worked in renowned companies such as BOL Network, Polaris Consultants, Federal Urdu University, The Access to Future Foundation (TAF), Click 5 institute, YouExcel and has also been lead effective training in NAVTTC, Govt. Of Pakistan training projects.
        </p>

        <div class="list-style1 vs-list mb-4 mt-2">
            <ul>
                <b>Certifications:</b>
                <li>Digital Marketing and E-Commerce Certification from Google</li>
                <li>Certification in E-Commerce from Digiskills Pakistan</li>
                <li>Cloud Computing Certification from PIAIC</li>
            </ul>
        </div>
    </div>
</section>

@include('website.sections.courses-redirection-section')
@endsection