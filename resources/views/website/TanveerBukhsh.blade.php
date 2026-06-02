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
                                <img src="{{ asset('img/trainer/tanweer.png') }}"
                                     alt="banner">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl order-lg-1 mb-4 mb-md-0">
                    <div class="team-details">
                        <h2 class="team-name h2">Tanweer Bukhsh</h2>
                        <p class="team-degi">Financial Modeling</p>
                        {{--                        <span class="team-courses">100+ Lessons Completed</span>--}}
                        {{--                        <span class="team-rate"><span class="team-price">$14 </span>/ per hour</span>--}}
                        <p class="team-experi">19+ years experience</p>
                        <div class="team-review"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                        <div class="social-style2">
                            
                            <a href="https://www.linkedin.com/in/tanweerbukhsh/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
             
            </div>
                         <h4 class="border-title2">Brief Bio</h4>
            <p>Tanweer Bukhsh is a Masters degree holder in Economics from Karachi University.  <br>He is currently serving as GM Finance at Richko Group and is a visiting faculty member at YouExcel.
            <br>

He has vast practical experience of working in equity market has enabled him to apply tools and techniques in Financial Modeling and Analysis training.  <br>
He is passionate to share his practical experience of over 19 years of working in the industry with his students to help learn from real-life case studies.
</p>
{{--            <div class="list-style1 vs-list mb-4">--}}
{{--                <ul>--}}
{{--                    <li>Many professional careers impose strict A Level benchmarks</li>--}}
{{--                    <li>Build exam confidence in a calm environment</li>--}}
{{--                    <li>Interactive classroom</li>--}}
{{--                    <li>Identify strengths and weaknesses</li>--}}
{{--                    <li>A Levels are advanced level qualifications that act as a gateway to higher education</li>--}}
{{--                </ul>--}}
{{--            </div>--}}
        </div>
    </section>
    
    @include('website.sections.courses-redirection-section')
@endsection
