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
                            <img src="{{ asset('img/trainer/Ahsan-Masroor.jpg') }}" alt="banner">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl order-lg-1 mb-4 mb-md-0">
                <div class="team-details">
                    <h2 class="team-name h2">Ahsan Masroor</h2>
                    <p class="team-degi">Data Science and Machine Learning</p>
                    <p class="team-experi">19+ years experience</p>
                    <div class="team-review"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                    <div class="social-style2">

                        <a href="https://www.linkedin.com/in/ahsan-masroor-493b2b6a/"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>

        </div>
        <h4 class="border-title2">Brief Bio</h4>

        <p>
            I am presently engaged in a Ph.D. program in Data Science and Machine Learning at KIET, which I commenced in 2022. I possess a Master of Science degree in Computer Science from Hamdard University, obtained in 2019. My academic journey includes a Master of Computer Science from the Institute of Business Technology, completed in 2016, an MSc in Applied Science (Economics) from AERC at the University of Karachi in 2006, and an MSc in Mathematics from the University of Karachi in 2004, following my Bachelor of Science (Honors) in Mathematics, Statistics, and Physics, which I completed in 2002. With over ten years of teaching experience, I have served as a Senior Lecturer at Sir Syed University of Engineering and Technology since 2012. My teaching background also includes positions at the British School in Saudi Arabia, City College of Management and IT, and Karachi Public School, where I instructed courses in Mathematics, Economics, and Statistics. My technical skills encompass programming in C++ and Python, as well as proficiency in data analysis tools such as Power BI and MATLAB, alongside a strong command of MS Office. Furthermore, I have participated in professional development workshops focusing on communication, presentation skills, and teacher training. My educational contributions include reports analyzing Karachi’s economy, money multipliers, and the economic challenges faced by Pakistan. Additionally, I hold diplomas in Computer Science and Islamic Banking, along with IT certifications, including A+ from CTTC Pakistan.
        </p>

        <div class="list-style1 vs-list mb-4 mt-2">
            <ul>
                <b>Certifications:</b>
                <li>PhD in Progress</li>
                <li>MS (CS),MSC(APP MATH)</li>
                <li>MAS(APP ECO)</li>
                <li>MCS(CS)</li>
            </ul>
        </div>
    </div>
</section>


@include('website.sections.courses-redirection-section')
@endsection