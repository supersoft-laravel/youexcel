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
                                <img src="{{ asset('img/trainer/tahir.jpeg') }}"
                                     alt="banner">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl order-lg-1 mb-4 mb-md-0">
                    <div class="team-details">
                        <h2 class="team-name h2">Tahir Ali</h2>
                        <p class="team-degi">Dashboard Reporting & Analysis with Power BI</p>
                        <!--<p class="team-degi">Computerized Accounting</p>-->
                        {{--                        <span class="team-courses">100+ Lessons Completed</span>--}}
                        {{--                        <span class="team-rate"><span class="team-price">$14 </span>/ per hour</span>--}}
                        <p class="team-experi">16+ years experience</p>
                        <div class="team-review"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                        <div class="social-style2">
                     
                            <a href="https://www.linkedin.com/in/tahir-ali/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
              
            </div>
            <!--<h2 class="border-title2 mb-4">History Tutor</h2>-->
              <!--<div class="col-md-6 col-lg-3 col-xl order-lg-3">-->
                         <h4 class="border-title2">Brief Bio</h4>
                   
            <p class="mb-2">
                                Tahir Ali is a highly motivated corporate trainer with experience in training small and large groups
                across diverse industries. Proven success with over 16 years of professional experience of industry in
                leveraging educational theories and methodologies to design, develop, and deliver successful training
                programs and integrate instructional technology to provide onsite and virtual training.</p>
              <p class="mb-2">  He is a Microsoft Certified Trainer, Microsoft Office Specialist Master, (Word 2013 & 2016), and Microsoft Office Specialist (PowerPoint 2013 & 2016), with an MBA in Accounting & Finance. Tahir also has a professional experience of over 16 years working with a large manufacturing group in the areas of Finance & IT.</p>

<p class="mb-2">He delivers training on Advanced MS Excel, Dashboard Reporting with MS Excel using Power Query and Power Pivot, Data Analysis and Visualization using Power BI application.</p>

                
                        <div class="list-style1 vs-list mb-4">
                            <ul>
                                <b>Certifications:</b>
                                <li>Microsoft Certified Trainer in PL-300: Microsoft Power BI Data Analyst Associate – 2025</li>
                                <li>Microsoft Office Specialist Master – 2013 & 2016</li>
                                <li>Microsoft Excel Expert - 2013 & 2016</li>
                                <li>Microsoft Word Expert - 2016</li>
                                <li>Microsoft Office Specialist - 2013 & 2016</li>
                            </ul>
                        </div>
        </div>
    </section>
    
    @include('website.sections.courses-redirection-section')
@endsection
