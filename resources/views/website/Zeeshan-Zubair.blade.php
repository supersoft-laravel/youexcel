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
                                     src="{{ asset('/img/trainer/zeeshan.jpeg') }}"
                                     alt="banner">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl order-lg-1 mb-4 mb-md-0">
                    <div class="team-details">
                        <h2 class="team-name h2">Zeeshan Zubair</h2>
                        <p class="team-degi">SQL and Python for Data Analytics</p>
                        {{--                        <span class="team-courses">100+ Lessons Completed</span>--}}
                        {{--                        <span class="team-rate"><span class="team-price">$14 </span>/ per hour</span>--}}
                        <p class="team-experi">15+ years experience</p>
                        <div class="team-review"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                        <div class="social-style2">
                          
                            <a href="https://www.linkedin.com/in/zeeshan-zubair-4958a911/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
               
            </div>
                         <h4 class="border-title2">Brief Bio</h4>
             
               <p class="mb-2">  
                Zeeshan Zubair is currently working in Hilal Foods Pvt Ltd as Manager Business Intelligence. He has completed MBA-MIS from PIMSAT. He has very rich and diversified industry experience of over 15 years which includes: FMCGS, Textile and also serve as technical consultant in Inbox Pvt Ltd. And 3cs Pvt Ltd.   </p>
            <p class="mb-2">
                
                Specialized in databases i.e., Oracle & SQL Server which enables me to present the insights from the data to the organizations and also working on Data Security and Data loss prevention. Zeeshan is associated with YouExcel As the Visiting Faculty.
            </p>
            
            <div class="list-style1 vs-list mb-4 mt-2">
                <ul>
                    <b>Certifications:</b>
                    <li>Oracle Certified Professional – OCP-DBA Track</li>
                    <li>Certified Information Security Manager – CISM</li>
                </ul>
            </div>
           
        </div>
    </section>
    
    
    @include('website.sections.courses-redirection-section')
@endsection
