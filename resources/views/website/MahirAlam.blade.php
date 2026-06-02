@extends('website.app')

@section('content')

     <div class="breadcumb-wrapper " >
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Trainer Profile</h1>
                <!--<p class="breadcumb-text">Search over 200 individual encyclopedias and reference books.</p>-->
         
            </div>
        </div>
    </div><!--==============================
      Team Area
  ==============================-->
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row justify-content-center align-items-center gx-80 mb-lg-4 pb-3">
                <div class="col-lg-5 col-xl-auto order-lg-2 mb-4 mb-lg-0 pb-2 pb-lg-0">
                    <div class="img-box1 style3">
                        <div class="vs-circle">
                            <div class="mega-hover">
                                <img style="height: 280px"
                                     src="{{ asset('/img/trainer/mahir.jpeg') }}"
                                     alt="banner">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl order-lg-1 mb-4 mb-md-0">
                    <div class="team-details">
                        <h2 class="team-name h2"> Syed Mahir Alam</h2>
                        <p class="team-degi">Tax Management with Returns Filing</p>
                        <p class="team-degi">Managing partner at Haider Shamsi & Co. Chartered Accountants</p>
                        {{--                        <span class="team-courses">100+ Lessons Completed</span>--}}
                        {{--                        <span class="team-rate"><span class="team-price">$14 </span>/ per hour</span>--}}
                        <p class="team-experi">10+ years experience</p>
                        <div class="team-review"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                        <div class="social-style2">
                           
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
               
            </div>
                         <h4 class="border-title2">Brief Bio</h4>
            <p>
            Mahir is a managing partner at Haider Shamsi & Co. Chartered Accountants, He has been handling the affairs of the firm since 2018. Further, He has an experience for designing and implementing cost and financial accounting system for different manufacturing and trading companies such as Midas Safety Inc., World Bank Project (PIFRA-II), KPMG TH & Co. He has more than 11 years of theoretical knowledge and practical experience of cost and financial accounting, auditing and taxation.</p>

         
        </div>
    </section>
    
    @include('website.sections.courses-redirection-section')
@endsection
