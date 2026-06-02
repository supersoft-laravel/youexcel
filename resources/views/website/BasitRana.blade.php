@extends('website.app')

@section('content')
    <div class="breadcumb-wrapper " >
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Trainer Profile</h1>
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
                                  src="https://youexceltraining.com/img/trainer/basit.jpg" 
                                     alt="banner">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl order-lg-1 mb-4 mb-md-0">
                    <div class="team-details">
                        <h2 class="team-name h2">Muhammad Basit Rana a.k.a MBR HR Walay</h2>
                        <p class="team-degi">Customer Services Specialist</p>
                        {{--                        <span class="team-courses">100+ Lessons Completed</span>--}}
                        {{--                        <span class="team-rate"><span class="team-price">$14 </span>/ per hour</span>--}}
                        <p class="team-experi">26+ years experience</p>
                        <div class="team-review"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                        <div class="social-style2">
              
                            <a href="https://www.linkedin.com/in/mbrana/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            
            </div>
                         <h4 class="border-title2">Brief Bio</h4>
            <p>
                I, Muhammad Basit Rana (a.k.a. MBR HR WALAY), am a Founder & Ideologist at HR WALAY, an HR Family, and
                Director at HR WALAY Institute (SMC-Pvt) Ltd. I am a Business Ally whose focus is to drive best-of-class
                as well as considerable learning regime among the society and play an influential role in bringing
                positive change in people's lives throughout my professional life of 26 years.</p>
            <p>I have served in various management positions in renowned conglomerates of UAE & Pakistan with a broad
                range of responsibilities ranging from career counseling, capacity development professional training,
                human resource management, business development, customer services, administration, and sales &
                distribution management.</p>
            <p>I have completed my Master's Degree major in HRM from the Institute of Business & Technology - BIZTEK,
                Karachi, and Certified Human Resource Practitioner (CHRP) from Concord Certification Corporation
                (Canada). Also, Certified Professional Trainer (TTT) from Pakistan Industrial Technical Assistance
                Centre (PITAC). Further, I have completed my Post-Graduate Diploma in Labour Administration and Welfare
                from the National Institute of Labour Administration and Training with distinguishing marks. MBR
                believes in optimism to transform his learning and experiences with positive psychology among
                people.</p>
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
