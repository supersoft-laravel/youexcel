<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="loadContentRoute" content="{{ route('loadContent') }}">
    <link rel="icon" href="{{ asset('img/Yourexcel-img/favicon.png') }}">


    <!-- Title -->
    <title>@yield('title', 'Advanced Excel For Data Analysis Course in Karachi')</title>
    <!-- Meta Description -->
    <meta name="description" content="@yield('meta_description', 'YouExcel, established in 2019, is a leading Data Science, AI, and Business Technology training institute in Pakistan, committed to developing industry-ready talent and strengthening organizational capabilities through practical, high-impact learning programs.')">
    <!-- Meta Keywords -->
    <meta name="keywords" content="@yield('meta_keywords', 'advanced excel course in karachi, excel for data analysis, financial modeling in excel, excel financial modeling')">
    
        <!-- Open Graph Tags -->
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('meta_title')" />
    <meta property="og:description" content="@yield('meta_description')" />
    @if (request()->is('/'))
        <meta property="og:url" content="https://youexceltraining.com/" />
    @else
        <meta property="og:url" content="{{ url()->current() }}" />
    @endif
    <meta property="og:site_name" content="Youexcel Training">
    <meta property="og:image" content="@yield('img_url')"> 
    <!--, url('img/social-og.png')-->
    <meta property="og:image:width" content="1600">
    <meta property="og:image:height" content="846">
    <meta property="og:image:type" content="image/png">
    
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('meta_title')">
    <meta name="twitter:description" content="@yield('meta_description')">
    <meta name="twitter:image" content="@yield('img_url', url('img/social-og.png'))">
    
    <!-- slider our clients  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css">
    <link rel="stylesheet" href="https://youexceltraining.com/vendors/owl-carousel/owl.carousel.min.css">
    <!-- slider our clients -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/nice-select/css/nice-select.css') }}">
    <!-- cards animation start -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.0/dist/aos.css" type="text/css">
    <!-- cards animation end -->

    {{-- start Gallery All scc --}}
    <link href="{{ asset('gallery/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('gallery/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('gallery/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('gallery/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('gallery/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    {{-- end Gallery All scc --}}

    <!-- Favicons -->
    {{-- <link href="{{ asset('gallery/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('gallery/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon"> --}}

    <!-- gallery Main CSS File -->
    <link href="{{ asset('gallery/assets/css/main.css') }}" rel="stylesheet">

    <!-- float button whatsapp start  -->
    <link rel="stylesheet" href="{{ asset('css/floating-wpp.min.css') }}">
    <!-- float button whatsapp end  -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.min.css') }}">
    <!-- collapse button start CFMA  -->
    <!--<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css">-->
    <!-- collapse button End CFMA  -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        crossorigin="anonymous">

    <!-- dropdown search  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/css/bootstrap-select.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> --}}
    <!--<script-->
        <!--    src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/js/bootstrap-select.min.js"></script>-->
    <!-- dropdown search  -->

    <!-- google Reviews  -->
    <link rel="stylesheet" href="https://cdn.rawgit.com/stevenmonson/googleReviews/master/google-places.css">

    <!-- main css -->
    <!--<link rel="stylesheet" href="{{ asset('css/styles.css') }}">-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <!-- <link rel="stylesheet" href="{{ asset('css/funnel.css') }}"> -->

    <!-- freedemo start  -->
    <link href="https://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel="Stylesheet" type="text/css" />


    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.0/dist/aos.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.compat.css" />


    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }
        (window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1489135055047191');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=1489135055047191&ev=PageView&noscript=1" />
    </noscript> <!-- End Meta Pixel Code -->

    <!-- Google tag (gtag.js) -->
    <!--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-256458410-1"></script>-->
    <!--<script>-->
    <!--    window.dataLayer = window.dataLayer || [];-->

    <!--    function gtag() {-->
    <!--        dataLayer.push(arguments);-->
    <!--    }-->
    <!--    gtag('js', new Date());-->

    <!--    gtag('config', 'UA-256458410-1');-->
    <!--</script>-->
    
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZKBXRL631E"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-ZKBXRL631E');
    </script>

    <style>
        @stack('style')

        .modal-dialog {
            max-width: 80%;

        }

        .row .form-group {
            margin: 0;
        }

        .wrapper {
            width: 90%;
            max-width: 34.37em;


            position: absolute;
            transform: translate(-50%, -50%);
            top: 50%;
            left: 25%;

            border-radius: 1em;

        }

        #wheel {
            max-height: inherit;
            width: inherit;
            top: 0;
            padding: 0;
        }

        @keyframes rotate {
            100% {
                transform: rotate(360deg);
            }
        }

        .img {
            position: absolute;
            width: 1em;
            top: 38%;
            right: -9%;
        }

        #final-value {
            font-size: 1.5em;
            text-align: center;
            margin-top: 1.5em;
            color: #202020;
            font-weight: 500;
        }

        @media screen and (max-width: 768px) {
            .wrapper {
                font-size: 12px;
            }

            .img {
                right: -5%;
            }
        }


        .action {
            position: fixed;
            bottom: 50px;
            right: 50px;
            width: 50px;
            height: 50px;
            background: #fff;
            border-radius: 50%;
            cursor: pointer;
            box-shadow: 0 5px 5px rgba(0, 0, 0, 0.1);
        }

        .action span {
            position: relative;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #a13dea;
            font-size: 2em;
            transition: .3s ease-in-out;
        }

        .action.active span {
            transform: rotate(135deg);
        }

        .ul {
            right: 6%;
            position: fixed;
            bottom: 55px;
            background: #fff;
            max-width: 250px;
            padding: 20px;
            border-radius: 20px;
            opacity: 0;
            visibility: hidden;
            transition: .3s;
        }

        .ul.active {
            bottom: 65px;
            opacity: 1;
            visibility: visible;
            transition: .3s;
        }

        .header-social a .fa-brands {
            transition: color 0.2s ease;
        }

        .header-social .facebook-f:hover {
            color: #3b5998;
            /* Facebook blue */
        }

        .header-social .instagram:hover {
            color: #e4405f;
            /* Instagram pink */
        }

        .header-social .youtube:hover {
            color: #ff0000;
            /* YouTube red */
        }

        .header-social .linkedin-in:hover {
            color: #0077b5;
            /* LinkedIn blue */
        }



        .form-control {
            display: block;
            width: 100%;
            padding: 1rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }

        select.form-control:not([size]):not([multiple]) {
            height: calc(3.3rem + 2px);
        }

        svg {
            fill: white;
        }

        .btn-reviews,
        .btn-lmslogin {
            display: inline-block;
            font-weight: 400;
            line-height: 1.5;
            width: 100%;
            text-align: center;
            text-decoration: none;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            border: 1px solid transparent;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            border-radius: 0.25rem;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            border-radius: 0px;
            margin-top: 10px !important;
            background-color: #F8A223;
            color: #fff;
        }


        @media (max-width: 480px) {
            .header_area .navbar-collapse {
                max-height: 350px;
            }
        }

        @media (max-width: 767px) {
            .Logo1 {
                width: 130px;
                display: none !important;
            }
        }

        @media (max-width: 767px) {
            .Logo45 {
                width: 130px;
                display: block !important;
            }

            .float-right {
                float: none !important;
            }
        }

        /*.modal-dialog {*/
        /*    display: inline-block !important;*/
        /*    left:10%;*/
        /*}*/
        @media (max-width: 600px) {
            .modal-dialog {
                left: 0%;
                top: 4%;
            }

            .modal-header {
                padding: 0rem 0rem;

            }

        }
    </style>
    <!-- free demo end  -->

    <!-- links live  -->
    <meta property="og:url" content="https://youexceltraining.com/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="YouExcel">
    <meta name="description"
        content="YouExcel, established in 2019, is a leading Data Science, AI, and Business Technology training institute in Pakistan, committed to developing industry-ready talent and strengthening organizational capabilities through practical, high-impact learning programs.">
    <meta property="og:image" content="https://youexceltraining.com/img/Yourexcel-img/Youexcel-logowhite.png">

    <title>YouExcel</title>

    <style>
        .swal-modal .swal-text {
            text-align: center;
        }

        /* get button start  */
        .dfBDQI {
            position: absolute;
            bottom: -1.6em;
            text-align: center;
            white-space: nowrap;
            text-decoration: none;
            width: 60px;
            right: -0.4em;
            font-family: Roboto, "Helvetica Neue", sans-serif;
            font-size: 0px !important;
            line-height: 11px;
            border: 0px;
            max-width: inherit;
            color: rgb(175, 175, 175) !important;
        }

        /* get button end  */
        a li {
            color: #7b838a;
        }

        .eapps-widget-toolbar {
            display: none !important;
        }

        .dmopMx {
            display: none !important;
        }

        @media (max-width: 991px) {
            .header_area .navbar-collapse {
                max-height: 340px;

            }
        }
    </style>
    <!-- links live  -->

    <!--<script async src="https://www.googletagmanager.com/gtag/js?id=G-RWYF7CZYLY"></script>-->
    <!--<script>-->
    <!--    window.dataLayer = window.dataLayer || [];-->

    <!--    function gtag() {-->
    <!--        dataLayer.push(arguments);-->
    <!--    }-->
    <!--    gtag('js', new Date());-->

    <!--    gtag('config', 'G-RWYF7CZYLY');-->
    <!--</script>-->
    
    <meta name="p:domain_verify" content="6bd09dc0bf3d28b49508485dc9bc30e3"/>
    
    <meta name="google-site-verification" content="W8c-xYA4Y-9kK1d83No6kNmkpFwKJBViTHqHfQSpY6k" />
</head>

<body class="page-width">
    <script type="text/javascript" src="https://crm.zoho.com/crm/javascript/zcga.js"></script>
    @include('website.layouts.loader')
    @include('website.layouts.Header-new')
    @yield('content')
    @include('website.layouts.footer')


    {{--  <a class="scrollToTopp scroll-btnn show" onclick="actionToggle();"><i class="fa-solid fa-pen-to-square"></i></a> --}}

    <form action="/nomanform" method="POST">
        @csrf
        <div class="ul" style="background-color: #f3f1f0; border: 3px solid #084298; z-index:1;">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" name="name" id="name" placeholder="Complete Name" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" name="whatsapp" id="whatsapp" placeholder="WhatsApp No.">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" name="phone" id="phone" placeholder="Contact No.">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" name="email" id="email" placeholder="Email Address">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <select name="coursesintrested" id="subjectt">
                            <option selected hidden disabled>Select Course</option>
                            <option value="Excel Mastery">Excel Mastery</option>
                            <option value="Advanced Excel">Advanced Excel</option>
                            <!-- Add more options here -->
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input name="city" placeholder="Your City" required type="text">
                    </div>
                </div>
                <div class="form-group">
                    <input name="comments" placeholder="Comments" type="text">
                </div>
                <button type="submit" id="spin-btn" class="vs-btn py-3">Enquire Now!</button>
            </div>
        </div>
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>



    <script src="{{ asset('gallery/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('gallery/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('gallery/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('gallery/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('gallery/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('gallery/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('gallery/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <!--<script src="{{ asset('gallery/assets/js/gallery_main.js') }}"></script>-->



    <script src="{{ asset('js/popper.js') }}"></script>
    <!--<script src="{{ asset('js/bootstrap.min.js') }}"></script>-->
    <!--<script src="{{ asset('vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>-->
    <script src="{{ asset('vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/owl-carousel-thumb.min.js') }}"></script>
    <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('js/mail-script.js') }}"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="{{ asset('js/gmaps.min.js') }}"></script>
    <!--<script src="{{ asset('js/theme.js') }}"></script>-->

    <script>
        window.$zoho = window.$zoho || {};
        $zoho.salesiq = $zoho.salesiq || {
            ready: function() {}
        }
    </script>
    <script id="zsiqscript"
        src="https://salesiq.zohopublic.com/widget?wc=siqd6b8d1e5582f414fdcdfc663ef54fab72c53dc84a89ddb07cbe7ea1a65c325d6" defer></script>

        <!-- Meta Pixel Code -->
        <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '881109340397927');
        fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=881109340397927&ev=PageView&noscript=1"
        /></noscript>
        <!-- End Meta Pixel Code -->        



    <!-- Jquery -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" defer></script>
    <script src="{{ asset('js/vendor/jquery-3.6.0.min.js') }}"></script>
    <!-- Slick Slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <!-- Bootstrap -->
    <!--<script src="assets/js/bootstrap.min.js"></script> -->
    <!-- <script src="assets/js/popper.min.js">
        < script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity = "sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin = "anonymous" >
    </script>
@stack('scripts')
<!-- Wow.js Animation -->

    <!-- Magnific Popup -->
    <script src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
    <script>
        //     AOS.init({
        //         duration: 3000,
        //     })


        function actionToggle() {
            const action = document.querySelector('.ul');
            action.classList.toggle('active')
        }
    </script>




    <script>
        /* const accordionItems = document.querySelectorAll('.accordion-button');
        accordionItems.forEach(item => {
          item.addEventListener('click', function() {
            const icon = this.querySelector('.fas');
            if (this.getAttribute('aria-expanded') === 'true') {
              icon.classList.remove('fa-angle-down');
              icon.classList.add('fa-angle-up');
            } else {
              icon.classList.remove('fa-angle-up');
              icon.classList.add('fa-angle-down');
            }
          });
          }); */

        /* $("#accordionExample").on("hide.bs.collapse show.bs.collapse", e => {
            $(e.target).prev().find("i:last-child").toggleClass("fas fa-chevron-circle-down fas fa-chevron-circle-up");
        }); */
        const accordionItems = document.querySelectorAll('.accordion-button');

        accordionItems.forEach(item => {
            item.addEventListener('click', function() {
                const icon = this.querySelector('.fas');

                // Check if the current item is expanded
                const isExpanded = this.getAttribute('aria-expanded') === 'true';

                // Toggle icon based on the state
                if (isExpanded) {
                    icon.classList.remove('fa-angle-down');
                    icon.classList.add('fa-angle-up');
                } else {
                    icon.classList.remove('fa-angle-up');
                    icon.classList.add('fa-angle-down');
                }
            });
        });



        $(document).ready(function() {
            $.ajax({
                url: "{{ route('get-courses') }}", // Route for fetching courses
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    // Process and populate select element with retrieved courses
                    data.forEach(function(course) {
                        $('#subjectt').append(new Option(course.coursename, course.id));
                        $('#subjectYX').append(new Option(course.coursename, course.id));
                        $('#subjectY').append(new Option(course.coursename, course.coursename));

                    });

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error("AJAX Error:", textStatus, errorThrown);
                    // Handle errors appropriately (e.g., display an error message)
                }
            });

        });
    </script>

    <script type="text/javascript">
        function printpage() {

            var printButton = document.getElementById("printpagebutton");
            printButton.style.visibility = 'hidden';

            //Print the page content
            window.print()
            printButton.style.visibility = 'visible';
        }
    </script>


    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Main Js File -->
    <script src="{{ asset('js/main.js') }}"></script>

    <script>
        $('.responsive').slick({
            dots: false,
            infinite: true,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            focusOnSelect: false,
            focusOnChange: false,
            accessibility: false,
            pauseOnFocus: false,
            pauseOnHover: false,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });

        document.addEventListener("DOMContentLoaded", function() {
            var prevScrollpos = window.pageYOffset;

            window.onscroll = function() {
                var currentScrollPos = window.pageYOffset;

                if (prevScrollpos > currentScrollPos) {
                    // Show the top line and navbar when scrolling up

                    document.getElementById("navbar").style.top =
                        "0px"; // Adjust based on your top line/header height

                } else {
                    // Hide the top line and navbar when scrolling down

                    document.getElementById("navbar").style.top = "-5px";
                    //document.getElementById("navbar").style.backgroundColor = "#fff";
                    var menuLinks = document.querySelectorAll('.menu-style1 > ul > li > a');

                    // Add mouseover event listener
                    menuLinks.forEach(function(link) {
                        link.addEventListener('mouseover', function() {
                            this.style.color = '#fdcb47'; // Set the text color on hover
                        });

                        // Add mouseout event listener
                        link.addEventListener('mouseout', function() {
                            this.style.color =
                                '#000000'; // Set the text color to black on mouseout
                        });
                    });



                }
                if (currentScrollPos === 0) {
                    document.getElementById("navbar").style.top = "27px";
                    //document.getElementById("navbar").style.backgroundColor = "#fff";
                }

                prevScrollpos = currentScrollPos;
            };
        });
    </script>











    <!-- PRE LOADER START  -->
    <script src="{{ asset('js/images-slider.js') }}"></script>



    <script>
        AOS.init({
            duration: 3000,
        })
    </script>

    <!-- /GetButton.io widget -->

    <!-- script popup start  -->
    <script src="https://unpkg.com/sweetalert@2.1.2/dist/sweetalert.min.js"></script>

    @if (Session::has('leadvalidafail'))
        <script>
            swal("ERROR", "{{ Session::get('leadvalidafail') }}", "error");
        </script>
    @endif

    @if (Session::has('appoinmentbooked'))
        <script>
            swal("THANK YOU", "Your form has been submitted.\nYou will get a confirmation email soon.", "success");
        </script>
    @endif

    @if (Session::has('democonfirm'))
    <script>
        swal("THANK YOU", "{{ Session::get('democonfirm') }}", "success");
    </script>
    @endif

    @if (Session::has('OneMintFeedBackForm'))
    <script>
        swal("THANK YOU", "{{ Session::get('OneMintFeedBackForm') }}", "success");
    </script>
    @endif

    @if (Session::has('paymentproof'))
        <script>
            swal("Oops", "Your form not submitted.\n Please Upload Your Proof of Payment File.", "error");
        </script>
    @endif

    @if (Session::has('websiteproject_success'))
        <script>
            swal("Success", "{{ Session::get('websiteproject_success') }}", "success");
        </script>
    @endif

    @if (Session::has('websiteproject_error'))
        <script>
            swal("Oops", "{{ Session::get('websiteproject_error') }}", "error");
        </script>
    @endif

    @if (Session::has('leadcorporate_success'))
        <script>
            swal("Success", "{{ Session::get('leadcorporate_success') }}", "success");
        </script>
    @endif

    @if (Session::has('leadcorporate_error'))
        <script>
            swal("Oops", "{{ Session::get('leadcorporate_error') }}", "error");
        </script>
    @endif
    @if (Session::has('error'))
        <script>
            swal("Oops", "{{ Session::get('error') }}", "error");
        </script>
    @endif

    @if (Session::has('appoinmentt'))
        <script>
            const el = document.createElement('div')
            el.innerHTML = "Joint Your whatsapp group <a href='{{ Session::get('appoinmentt') }}'> Goto Chat</a>";
            swal({
                title: "THANK YOU",
                content: el
            });
        </script>
    @endif

    @if (Session::has('tna2025'))
        <script>
            // Create a custom SweetAlert content with message and a button
            const el = document.createElement('div');
            el.innerHTML = `
            <p>{{ Session::get('tna2025') }}</p> <!-- Success message -->
            <a href="{{ Session::get('course') }}" class="btn btn-primary" style="margin-top: 10px; text-decoration: none; padding: 10px 15px; color: white; background-color: #007bff; border-radius: 5px;">Go to Courses</a>
        `;

            // Show SweetAlert
            swal({
                title: "Thank You!",
                content: el,
                icon: "success",
                button: false, // Disable default button
            });
        </script>
    @endif


    <!-- checkbox enable disable Start -->
    <script>
        $('#yourBox').change(function() {
            $('yourText').attr('disabled', !this.checked)
        });
    </script>
    <!-- checkbox enable disable End -->

    <!-- collapse button Start CFMA  -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
        "use strict";
    </script>
    <!-- collapse button Start CFMA  -->

    <!-- Contact No Validation start -->
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
    <script>
        $(":input").inputmask();

        function checkNumber3() {
            str = document.getElementById('cnic').value;
            console.log(str)
            if (str.substring(0, 2) == '03') {
                jQuery('#submit').prop("disabled", false);
            } else {
                alert('Please enter correct Contact Number');
                jQuery('#submit').prop("disabled", true);
                return false;
            }
        }
    </script>
    <!-- Contact No Validation end -->

    <!-- slider our clients  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fontawesome-iconpicker/3.2.0/js/fontawesome-iconpicker.min.js">
    </script>

    <script>
        $('.responsive').slick({
            dots: false,
            infinite: true,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            focusOnSelect: false,
            focusOnChange: false,
            accessibility: false,
            pauseOnFocus: false,
            pauseOnHover: false,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    </script>






    <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/css/intlTelInput.css" rel="stylesheet"
        media="screen">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/intlTelInput.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/intlTelInput.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/utils.js"></script>





    <!-- Print Document -->
    <script type="text/javascript">
        function printpage() {

            var printButton = document.getElementById("printpagebutton");
            printButton.style.visibility = 'hidden';

            //Print the page content
            window.print()
            printButton.style.visibility = 'visible';
        }
    </script>

    <!-- funnel 1st Video -->
    <script>
        $(".box-video").click(function() {
            $('iframe', this)[0].src += "&amp;autoplay=1";
            $(this).addClass('open');
        });
    </script>


    <script>
        $(document).ready(function() {
            $("#player").click(function() {


                $(".feed-item--video").fadeOut(4000).css("display", "none");


                $(".video-player-main iframe").fadeIn(2000).css("display", "block");

                return false;


            });
        });
    </script>

    <!-- date disable  -->
    <script language="javascript">
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0');
        var yyyy = today.getFullYear();

        today = yyyy + '-' + mm + '-' + dd;
        $('#date').attr('min', today);
    </script>
    <!-- date disable  -->

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <!-- free demo end  -->

    <!-- video start  -->
    <script>
        // poster frame click event
        $(document).on('click', '.js-videoPoster', function(ev) {
            ev.preventDefault();
            var $poster = $(this);
            var $wrapper = $poster.closest('.js-videoWrapper');
            videoPlay($wrapper);
        });

        // play the targeted video (and hide the poster frame)
        function videoPlay($wrapper) {
            var $iframe = $wrapper.find('.js-videoIframe');
            var src = $iframe.data('src');
            // hide poster
            $wrapper.addClass('videoWrapperActive');
            // add iframe src in, starting the video
            $iframe.attr('src', src);
        }

        // stop the targeted/all videos (and re-instate the poster frames)
        function videoStop($wrapper) {
            // if we're stopping all videos on page
            if (!$wrapper) {
                var $wrapper = $('.js-videoWrapper');
                var $iframe = $('.js-videoIframe');
                // if we're stopping a particular video
            } else {
                var $iframe = $wrapper.find('.js-videoIframe');
            }
            // reveal poster
            $wrapper.removeClass('videoWrapperActive');
            // remove youtube link, stopping the video from playing in the background
            $iframe.attr('src', '');
        }
    </script>
    <!-- video end  -->


    <script>
        $(function() {
            $("#email").focusout(function() {
                let myemail = $(this).val()
                let url = '{{ url('/validate_email') }}'
                console.log(url);
                $.ajax({
                    url: url,
                    type: "GET",
                    data: {
                        myemail: myemail,
                    },
                    success: function(data) {
                        if (data.id == null) {
                            $(".email-error").css("display", "none")
                        } else {
                            $(".email-error").css("display", "block")
                            $("#email").val();
                        }
                    }
                });
            });
        });
    </script>
</body>

</html>
