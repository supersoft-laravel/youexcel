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
                            <img src="{{ asset('img/trainer/Jahanzeb-Feroz-Khan.jpg') }}" alt="banner">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl order-lg-1 mb-4 mb-md-0">
                <div class="team-details">
                    <h2 class="team-name h2">Jahanzeb Feroz Khan</h2>
                    <p class="team-degi">Digital Forensic and Cyber Security Expert</p>
                    <p class="team-experi">10+ years experience</p>
                    <div class="team-review"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                    <div class="social-style2">

                        <a href="https://www.linkedin.com/in/jahanzeb-feroze-khan-6a09b061/"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>

        </div>
        <h4 class="border-title2">Brief Bio</h4>

        <p>
            Cybersecurity professional with over 10 years of industry experience, currently serving as a Deputy Manager
            Cyber Security / Penetration Testing at Engro Corporation.
        </p>

        <div class="list-style1 vs-list mb-4 mt-2">
            <ul>
                <b>Certifications:</b>
                <li>Master's degree in Management Information Systems (IBT)</li>
                <li>Bachelors in Electronic Engineering (SSUET)</li>
                <li>Internationally recognized Certifications which included Certified Ethical Hacker</li>
                <li>CRTP (in progress)</li>
                <li>eWPTX</li>
                <li>CCSP</li>
                <li>JNCIA</li>
                <li>CCNA Security</li>
                <li>CCNA</li>
                <li>CCNP</li>
                <li>CCNA</li>
                <li>IBM-AIX</li>
                <li>MITRE ATT&amp;CK Defender</li>
                <li>Cisco Next Generation Firewall (NGFW)</li>

            </ul>
        </div>
    </div>
</section>

@include('website.sections.courses-redirection-section')
@endsection