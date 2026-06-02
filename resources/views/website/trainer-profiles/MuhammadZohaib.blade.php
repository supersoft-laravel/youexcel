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
                            <img src="{{ asset('img/trainer/Muhammad-Zohaib.png') }}" alt="banner">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl order-lg-1 mb-4 mb-md-0">
                <div class="team-details">
                    <h2 class="team-name h2">Muhammad Zohaib</h2>
                    <p class="team-degi">Computerized Accounting</p>
                    <p class="team-experi">10+ years experience</p>
                    <div class="team-review"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                    <!--<div class="social-style2">-->

                    <!--    <a href="https://www.linkedin.com/in/kashifmughalg/"><i-->
                    <!--            class="fab fa-linkedin-in"></i></a>-->
                    <!--</div>-->
                </div>
            </div>

        </div>
        <h4 class="border-title2">Brief Bio</h4>

        <p>
            Mr. Muhammad Zohaib is have 10 years practical experience of working in industry and as a trainer.
        </p>
        <br>
        <p>
            He is currently serving as Manager Accounts at Bahria University. He is qualified MBA with a specialization in Finance from Muhammad Ali Jinnah University, Karachi. Additionally, he has completed various relevant trainings in his field to enhance his professional and academic qualification. 
        </p>
        <br>
        <p>
            He has firm grip on delivering skilled comprehensive training programs that cover a wide range of software applications including, QuickBooks, Tally, Peachtree and customized ERP systems as well. His proven ability to simplify complex technical concepts to facilitate learning experiences, ensuring participants improve their efficacy in computerized accounting applications. 
        </p>

        <!--<div class="list-style1 vs-list mb-4 mt-2">-->
        <!--    <ul>-->
        <!--        <b>Certifications:</b>-->
        <!--        <li>MCS, MS (SE)</li>-->
        <!--        <li>ERP Diploma from IBA</li>-->
        <!--        <li>Data Science Diploma from NED</li>-->
        <!--        <li>DIT from SBTE</li>-->
        <!--        <li>Certification in Project Management</li>-->
        <!--        <li>Certification in Mobile Development</li>-->
        <!--        <li>Certification in AWS</li>-->
        <!--    </ul>-->
        <!--</div>-->
    </div>
</section>


@include('website.sections.courses-redirection-section')
@endsection