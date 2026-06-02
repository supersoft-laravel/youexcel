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
                            <img src="{{ asset('img/trainer/Muhammad-Rafay-Shaikh.jpg') }}" alt="banner">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl order-lg-1 mb-4 mb-md-0">
                <div class="team-details">
                    <h2 class="team-name h2">Muhammad Rafay Shaikh</h2>
                    <p class="team-degi">Data Science and Analytics</p>
                    <p class="team-experi">9+ years experience</p>
                    <div class="team-review"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                    <div class="social-style2">

                        <a href="https://www.linkedin.com/in/hellorafayshaikh/"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>

        </div>
        <h4 class="border-title2">Brief Bio</h4>

        <p>
            M. Rafay Shaikh’s technical expertise includes Data Science, Power BI, PySpark, Python, Photoshop, Computer Vision, Machine Learning, Web Development, and Azure DevOps. He has led projects like a Book Recommender System, an NLP-based medical diary, and Lungs Cancer Detection using CNN. He holds an MS in Software Engineering and a BS in Software Engineering from Sir Syed University
        </p>
        <br>
        <p>
            Rafay Shaikh is a skilled Lecturer at Sir Syed University of Engineering and Technology, where he teaches Web Engineering and Introduction to Computing. He also coordinates the departmental CMS, oversees the AI Lab, and advises the IEEE Computational Society at SSUET. Rafay was recognized with 2nd place in the Faculty Training Program by Sindh HEC. 
        </p>
        <br>
        <p>
            Rafay has also held leadership roles in IEEE Karachi Section, organizing numerous events and sessions. He is the Founding Advisor of the IEEE Computational Intelligence Society at SSUET. 
        </p>
        <br>
        <p>
            Previously, Rafay was an IT Support Engineer at Dumb TV, managing websites, domains, servers, and social media. 
        </p>

        <div class="list-style1 vs-list mb-4 mt-2">
            <ul>
                <b>Certifications:</b>
                <li>Microsoft Certified Azure Data Science Associate</li>
                <li>MS in Software Engineering</li>
                <li>BS in Software Engineering from Sir Syed University</li>
            </ul>
        </div>
    </div>
</section>

@include('website.sections.courses-redirection-section')
@endsection