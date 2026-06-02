<!--================ Start Header Menu Area =================-->
@extends('website.app', ['title' => 'Home'])
<!--================ End Header Menu Area =================-->

<!--================ Start Home Banner Area =================-->
@section('content')

<style>
    .video-section {
        position: relative;
        width: 100%;
        height: 100vh;
        overflow: hidden;
    }
    
    /* Custom Color Overlay */
    .video-section::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(3, 33, 62, 0.3); /* #03213e with opacity */
        z-index: 2;
    }
    
    .bg-video {
        position: absolute;
        top: 50%;
        left: 50%;
        min-width: 100%;
        min-height: 100%;
        width: auto;
        height: auto;
        transform: translate(-50%, -50%);
        object-fit: cover;
        z-index: 1;
    }
    
    .video-content {
        position: relative;
        z-index: 3;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        color: #fff;
        text-align: center;
    }

    .video-content h1 {
        color: #fff;
    }

    .video-content p {
        color: #fff;
    }
    
    @media (max-width: 576px) {
        .cta-section {
            padding: 0px;
        }
        .cta-section h2 {
            font-size: 25px;
        }
        .cta-section .cta-buttons {
            flex-wrap: wrap;
            gap: 10px;
        }
        .cta-section .vs-btn {
            font-size: 10px;
        }
    }

</style>
    <section class="main-section1 video-section">
        <video class="bg-video" autoplay muted loop playsinline>
            <source src="https://youexceltraining.com/video/home-vid.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    
        <!-- Optional overlay content -->
        <div class="video-content">
            <h1>Welcome to YouExcel</h1>
            <p>Learn Skills That Matter</p>
        </div>
    </section>
    
    <!--==============================
          Trusted Companies
      ==============================-->
    @include('website.sections.trusted-companies-carousel')
    
    <!--==============================
          Course Area
      ==============================-->
    <section class="space-extra-bottom">
        <div class="container-lg">
            <div class="title-area text-center wow fadeInUp" data-wow-delay="0.3s">
                <!--<div class="sec-icon">-->
                <!--    <div class="vs-circle"></div>-->
                <!--</div>-->
                <!--<span class="sec-subtitle">WELCOME TO Youexcel Training</span>-->
                <h2 class="sec-title ">Explore our Hi-Tech Programs</h2>
            </div>
            @include('website.sections.courses-section');
        </div>
    </section>
    
    <!--==============================
      Recognized by
      ==============================-->
    @include('website/sections/recognized-logos-section')

    <section class="py-5 cta-section" data-bg-src="{{ asset('img/bg/blog-single-divider-bg-1-1.jpg') }}">
        <div class="container">
            <div class="row justify-content-center text-center text-lg-start">
                <div class="col-lg-12 mb-40 mb-lg-0 justify-content-center text-center">
                    <h2 class="mt-2 h2 mb-5">Fast track your career progress by booking a session with Career Growth Specialists</h2>
                    <div class="d-flex justify-content-around cta-buttons">
                        <a href="{{ url('/enquiry-form') }}" class="vs-btn style3"></i>Open Enrollments Enquiry Form</a>
                        <a href="{{ url('/enquiry-form-corporate') }}" class="vs-btn style3"></i>Request a Corporate Training Proposal</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Get the button that opens the modal
            var openModalBtn = document.getElementById("openModalBtn");

            // Get the modal
            var modal = document.getElementById("myModal");

            // When the user clicks on the button, open the modal
            openModalBtn.addEventListener("click", function() {
                modal.style.display = "block";
            });

            // Get the <span> element that closes the modal
            var closeBtn = modal.querySelector(".close");

            // When the user clicks on <span> (x), close the modal
            closeBtn.addEventListener("click", function() {
                modal.style.display = "none";
            });

            // When the user clicks anywhere outside of the modal, close it
            window.addEventListener("click", function(event) {
                if (event.target === modal) {
                    modal.style.display = "none";
                }
            });
        });
    </script>
@endpush
<!-- ====================== End CEO Area ======================== -->
