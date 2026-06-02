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
                                     src="{{ asset('/img/trainer/uzair-ahmad.jpeg') }}"
                                     alt="banner">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl order-lg-1 mb-4 mb-md-0">
                    <div class="team-details">
                        <h2 class="team-name h2">Uzair Rasheed Baig</h2>
                        <p class="team-degi">Advanced MS Excel: Business Intelligence with Data Visualization</p>
                        {{--                        <span class="team-courses">100+ Lessons Completed</span>--}}
                        {{--                        <span class="team-rate"><span class="team-price">$14 </span>/ per hour</span>--}}
                        <p class="team-experi">6+ years experience</p>
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
                Experienced Business & Data Analyst and Business Operations Expert with a demonstrated history of working in the management consulting industry. Worked and consulted International NGO, Banking Sector, IT Sector & Petroleum Sector as well. Skilled in Management Information Systems (MIS), Design and Implement Soft Solutions.   </p>   <br>
            <p>
                
                He is currently associated with Systems Limited in the capacity of Associate Manager – Business Intelligence, further also serving as a seasonal consultant in Arthur Lawrence Group LLC (USA) as a Business Analyst.
            </p>
            
            <div class="list-style1 vs-list mb-4 mt-2">
                <ul>
                    <b>Certifications:</b>
                    <li>Microsoft Certified: Fabric Analytics Engineer Associate – 2025</li>
                </ul>
            </div>
           
        </div>
    </section>
    
    
    @include('website.sections.courses-redirection-section')
@endsection
