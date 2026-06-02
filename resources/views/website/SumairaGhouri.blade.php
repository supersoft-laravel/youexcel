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
                                <img style="height: 200px" src="https://youexceltraining.com/img/Yourexcel-img/sumaira-ghouri.jpg"
                                     alt="banner">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl order-lg-1 mb-4 mb-md-0">
                    <div class="team-details">
                        <h2 class="team-name h2">Sumaira Ghouri</h2>
                        <p class="team-degi">Advanced MS Excel: Business Intelligence with Data Visualization and Data Analytics with Tableau</p>
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
                Sumaira Ghouri, is The First Female Microsoft Office Corporate Trainer in Pakistan, Certified Microsoft Office Specialist (MOS) Master Level. She is a Corporate Trainer, Course Facilitator, Lecturer and Public Speaker having more than 10 years’ experience working in the Human Resource and General Administration fields holding progressively more challenging positions from HR Generalist to Manager Training. She has trained and taught more than 2,000 business professionals and worked in multiple industries which adds to a much-diversified background. The practical approach of her training sessions ensures maximum return on investment for the participants and Organizations.</p>
            <div class="list-style1 vs-list mb-4 mt-2">
                <ul>
                    <b>Certifications:</b>
                    <li>Microsoft Office Specialist (MOS) Master Level</li>
                    <li>Certified Microsoft Office Specialist (MOS) Master Level</li>
                    <li>MBA in HR & MIS</li>
                    <li>Masters in Economics</li>
                    <li>B.Ed., B.Sc [Honors]</li>
                    <li>PGD Labour Laws & Labour Administration (1st Position Holder & Gold Medalist from NILAT)</li>
                    <li>DIT</li>
                </ul>
            </div>
        </div>
    </section>
    
    @include('website.sections.courses-redirection-section')
@endsection
