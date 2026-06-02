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
                                     src="https://youexceltraining.com/img/Yourexcel-img/Osfh9uPk.jpeg"
                                     alt="banner">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl order-lg-1 mb-4 mb-md-0">
                    <div class="team-details">
                        <h2 class="team-name h2">Murtaza Ghazi</h2>
                        <p class="team-degi">Tax Management with Returns Filing</p>
                        {{--                        <span class="team-courses">100+ Lessons Completed</span>--}}
                        {{--                        <span class="team-rate"><span class="team-price">$14 </span>/ per hour</span>--}}
                        <p class="team-experi">8+ years experience</p>
                        <div class="team-review"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                        <div class="social-style2">
                     
                            <a href="https://www.linkedin.com/in/murtaza-ghazi-fcca-cat-mba-67a47a29/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
              
            </div>
                         <h4 class="border-title2">Brief Bio</h4>
            <p>
                Murtaza is a Fellow ACCA member. He has completed MBA from Institute of Business Administration Karachi
                in Marketing. He is a Certified Competent Communicator from Toastmasters International.Murtaza is a
                Partner IFCMG financial consultants for past 5 years and has extensive experience in taxation advisory
                services in SME sector. He has over a decade of professional experience in financial services working
                with KPMG in audit and providing deal advisory in Pakistan and Middle East. He is currently member of
                ACCA Entrepreneurship committee and member of FPCCI committee on Skills Development.</p>
{{--            <div class="list-style1 vs-list mb-4">--}}
{{--                <ul>--}}
{{--                    <li>CEO of Valider</li>--}}
{{--                    <li>UNITAR qualified on Introduction to Data Governance For Monitoring The SGDS</li>--}}
{{--                    <li>RWRI Alumni</li>--}}
{{--                    <li>Alumni Founding member of ASPIRE Pakistan</li>--}}
{{--                    <li>Motivational Speaker</li>--}}
{{--                </ul>--}}
{{--            </div>--}}
        </div>
    </section>
    
    @include('website.sections.courses-redirection-section')
@endsection
