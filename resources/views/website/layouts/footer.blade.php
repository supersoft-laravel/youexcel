<style>
    /* Mobile footer center alignment */
    @media (max-width: 767px) {

        /* Overall footer text center */
        .sl-m-5 {
            margin-top: 20px;
        }

        .footer-wrapper {
            text-align: center;
        }

        /* Logo center */
        .footer-wrapper .logo-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        /* Logo center */
        .footer-wrapper .footer-logo img {
            margin: 0 auto;
            display: block;
        }

        /* Social icons center */
        .footer-wrapper .fa-brands {
            display: inline-block;
            margin: 0 8px;
        }

        /* Footer menus */
        .footer-wrapper ul {
            padding-left: 0;
        }

        .footer-wrapper ul li {
            list-style: none;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        /* Collapse arrows (chevrons) center ke paas */
        .footer-wrapper .float-end {
            float: none !important;
            display: inline-block;
            margin-left: 6px;
        }

        /* Contact details links center */
        .footer-wrapper .text-inherit {
            display: block;
            text-align: center;
        }

        /* Widget title text center */
        .footer-wrapper .widget_title {
            text-align: center;
            position: relative;
        }

        /* BEFORE line / decoration center */
        .footer-wrapper .widget_title::before {
            left: 50%;
            transform: translateX(-50%);
        }

        /* Agar AFTER bhi use ho raha ho */
        .footer-wrapper .widget_title::after {
            left: 50%;
            transform: translateX(-50%);
        }
        
        .copyright-wrap {
            padding: 26px 20px;
            position: relative;
            display: flex !important;
            flex-direction: column;
        }

    }

    /* ===== Sidebar Social Media (Improved) ===== */

.social-side-bar {
    position: fixed;
    top: 50%;
    left: 15px;
    transform: translateY(-50%);
    background: transparent;   /* removed black bar */
    padding: 0;
    display: flex;
    flex-direction: column;
    gap: 12px;
    z-index: 9999;
}

/* Icons */
.social-side-bar a {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 42px;
    height: 42px;
    color: #1a4480;              /* theme color */
    background: #ffffff;         /* white circle */
    border-radius: 50%;
    box-shadow: 0 5px 15px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
    font-size: 17px;
}

/* Hover */
.social-side-bar a:hover {
    transform: translateX(5px);
    background: #1a4480;
    color: #fff;
}

/* ===== Mobile Fix ===== */
@media (max-width: 768px) {

    .social-side-bar {
        top: auto;
        bottom: 15px;
        left: 50%;
        transform: translateX(-50%);
        flex-direction: row;      /* horizontal on mobile */
        gap: 10px;
    }

    .social-side-bar a {
        width: 38px;
        height: 38px;
        font-size: 15px;
    }
}

    /* Overlay */
    .popup-overlay {
        position: fixed;
        inset: 0;
        background: rgba(0, 0, 0, 0.7);
        display: flex;
        justify-content: center;
        align-items: center;
        opacity: 0;
        pointer-events: none;
        transition: 0.4s ease;
        z-index: 9999;
    }

    .popup-overlay.active {
        opacity: 1;
        pointer-events: auto;
    }

    /* Main Container */
    .popup-content {
        display: flex;
        width: 850px;
        max-width: 95%;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 25px 60px rgba(0, 0, 0, 0.3);
        transform: translateY(30px);
        transition: 0.4s ease;
    }

    .popup-overlay.active .popup-content {
        transform: translateY(0);
    }

    /* LEFT SIDE */
    .popup-left {
        width: 50%;
        background: #002347;
        color: #ffffff;
        padding: 50px 35px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }

    .popup-left img {
        width: 140px;
        margin: 0 auto 20px;
    }

    .popup-left h2 {
        font-size: 26px;
        margin-bottom: 15px;
        font-weight: 700;
        color: #fff;
    }

    .popup-left p {
        font-size: 14px;
        opacity: 0.9;
        color: #fff;
    }

    /* RIGHT SIDE */
    .popup-right {
        width: 50%;
        background: #ffffff;
        padding: 50px 35px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .popup-right h3 {
        color: #1f6fb2;
        margin-bottom: 20px;
        font-size: 22px;
    }

    /* Form */
    #newsletter-form {
        display: flex;
        flex-direction: column;
    }

    #newsletter-form input[type="email"] {
        padding: 12px 15px;
        border-radius: 8px;
        border: 2px solid #1f6fb2;
        margin-bottom: 15px;
        font-size: 14px;
        outline: none;
    }

    #newsletter-form input[type="email"]:focus {
        border-color: #f44336;
    }

    /* Checkbox */
    .popup-checkbox {
        font-size: 13px;
        margin-bottom: 20px;
        display: flex;
        gap: 8px;
        align-items: center;
        justify-content: center;
        color: #555;
    }

    /* Button */
    #newsletter-form button {
        padding: 12px;
        border-radius: 8px;
        border: none;
        background: linear-gradient(135deg, #002347, #002347);
        color: #ffffff;
        font-weight: 600;
        cursor: pointer;
        transition: 0.3s ease;
    }

    #newsletter-form button:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    /* Close Button */
    .popup-close {
        position: absolute;
        top: 15px;
        right: 20px;
        font-size: 22px;
        background: none;
        border: none;
        color: #000;
        cursor: pointer;
        z-index: 2;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .popup-content {
            flex-direction: column;
        }

        .popup-left,
        .popup-right {
            width: 100%;
            padding: 35px 25px;
        }

        .popup-left img {
            width: 100px;
        }
    }
    
    .your-modal-class {
        position: fixed;
        z-index: 9999;
        inset: 0;
        background: rgba(0,0,0,0.7);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 15px;
    }
    
    .your-modal-class .modal-content {
        background: #fff;
        border-radius: 12px;
        overflow: hidden;
        width: 100%;
        max-width: 450px;
        box-shadow: 0 10px 40px rgba(0,0,0,0.2);
        animation: fadeInUp 0.3s ease;
        position: relative;
    }
    
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(40px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    /* Close button */
    .your-modal-class .close {
        position: absolute;
        top: 10px;
        right: 12px;
        font-size: 24px;
        color: #fff;
        background: rgba(0,0,0,0.5);
        border-radius: 50%;
        width: 35px;
        height: 35px;
        text-align: center;
        line-height: 32px;
        cursor: pointer;
        z-index: 2;
    }
    
    /* Image full width */
    .your-modal-class img {
        width: 100%;
        height: auto;
        display: block;
    }
    
    /* Footer section */
    .modal-footer-custom {
        padding: 15px;
        text-align: right;
    }
    
    /* Button improvements */
    .modal-footer-custom .vs-btn {
        width: 100%;
    }
    
    /* Desktop button alignment */
    @media (min-width: 768px) {
        .modal-footer-custom .vs-btn {
            width: auto;
        }
    }
    
    /* Mobile full screen feel */
    @media (max-width: 576px) {
        .your-modal-class {
            padding: 0;
        }
    
        .your-modal-class .modal-content {
            border-radius: 0;
            /*height: 100%;*/
            max-width: 70%;
        }
    }
    </style>

@if(request()->routeIs('web.executive-dashboard'))
@else
<div id="newsletter-popup" class="popup-overlay">
    <div class="popup-content">

        <button class="popup-close">&times;</button>

        <!-- Left Side Branding -->
        <div class="popup-left">
            <img src="{{ asset('img/Yourexcel-img/Youexcel-logowhite.png') }}" alt="YouExcel Logo">
            <h2>Level Up With YouExcel</h2>
            <p>Join our community and unlock exclusive updates, training tips and offers.</p>
        </div>

        <!-- Right Side Form -->
        <div class="popup-right">
            <h3>Subscribe Now</h3>

            <form id="newsletter-form" action="{{ route('subscribe.newsletter') }}" method="POST">
                @csrf
                <input type="email" name="newsletter-email" id="newsletter-email" placeholder="Enter your email"
                    required>

                <label class="popup-checkbox">
                    I agree to receive updates & promotional emails.
                </label>

                <button type="submit">SIGN ME UP</button>
            </form>
        </div>

    </div>
</div>
@endif

<div class="social-side-bar">
    <a href="https://www.linkedin.com/company/youexceltraining" target="_blank"><i class="fab fa-linkedin-in"></i></a>
    <a href="https://www.facebook.com/youexceltraining" target="_blank"><i class="fab fa-facebook-f"></i></a>
    <a href="https://www.instagram.com/youexcel_official" target="_blank"><i class="fab fa-instagram"></i></a>
    <a href="https://www.youtube.com/c/youexceltraining/videos" target="_blank"><i class="fab fa-youtube"></i></a>
    <a href="https://www.pinterest.com/youexceltraining/" target="_blank"><i class="fab fa-pinterest"></i></a>
</div>

<style>
    /* Footer Dropdown Styling */
    .footer-menu ul {
        list-style: none;
        padding-left: 0;
    }

    .footer-menu li {
        position: relative;
    }
    .footer-menu li ul {
        display: none;
        position: absolute;
        left: 0;
        top: 100%;
        background: #1a1a1a;
        padding: 20px 5px !important;
        min-width: 220px;
        z-index: 999;
    }

    .footer-menu li ul li {
        padding: 5px 15px;
    }

    .footer-menu li:hover>ul {
        display: block;
    }

    .footer-menu li ul li ul {
        left: 100%;
        top: 0;
    }

</style>

@if(request()->routeIs('web.executive-dashboard'))
<footer class="footer-wrapper footer-layout1 pt-5">
    <div class="container">
        <div class="row">
            <!-- Column 1: Logo + About + Socials -->
            <div class="col-lg-6 col-md-6 logo-container">
                <div class="footer-logo mb-3">
                    <a href="{{ route('page.home') }}">
                        <img style="width: 100px;"
                            src="https://youexceltraining.com/img/Yourexcel-img/Youexcel-logowhite.png" alt="logo"
                            class="img-fluid">
                    </a>
                </div>

                <style>
                    .map-container iframe {
                        width: 100%;
                        height: 200px;
                        border: 0;
                        filter: grayscale(100%);
                        transition: filter 0.4s ease-in-out;
                    }

                    .map-container iframe:hover {
                        filter: grayscale(0%);
                    }
                </style>

                <div class="mt-3 map-container">
                    <iframe src="https://maps.google.com/maps?q=YouExcel,%20Karachi&t=&z=15&ie=UTF8&iwloc=&output=embed"
                        loading="lazy">
                    </iframe>
                </div>


            </div>


            <!-- Column 4: Contact + Map -->
            <div class="col-lg-6 col-md-6">
                <div class="widget nav_menu footer-widget">
                    <h3 class="widget_title">Contact Details</h3>
                    <div class="menu-all-pages-container footer-menu">
                        <ul class="menu">
                            <li>
                                <a class="text-inherit" href="tel:+922137121738">+92-21-37121738</a></p>
                            </li>
                            <li>
                                <a class="text-inherit" href="tel:+923356699331">+92-335-6699331</a></p>
                            </li>
                            <li>
                                <a class="text-inherit"
                                    href="mailto:info@youexceltraining.com">info@youexceltraining.com</a>
                            </li>
                            <li>
                                <a class="text-inherit">
                                    YouExcel, Suite: 503-505, 5th Floor, Al Samad Tower, Block 13-B,
                                    Main University Road, Gulshan-e-Iqbal, Karachi, Pakistan.
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- Copyright -->
    <div class="copyright-wrap d-flex justify-content-center">
        <p class="mb-0">
            <small>
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>
                <a href="{{ route('page.home') }}" class="text-white">YouExcel</a>.
                All Rights Reserved.
                Designed & Developed by
                <a href="https://supersofttechnology.com/" class="text-white">
                    Supersoft Technologies
                </a>.
            </small>
        </p>
    </div>
</footer>
@else
<!--Desktop Footer-->
<footer class="footer-wrapper footer-layout1 pt-5 d-none d-lg-block">
    <div class="container">
        <div class="row">
            <!-- Column 1: Logo + About + Socials -->
            <div class="col-lg-3 col-md-6 logo-container">
                <div class="footer-logo mb-3">
                    <a href="{{ route('page.home') }}">
                        <img style="width: 100px;"
                            src="https://youexceltraining.com/img/Yourexcel-img/Youexcel-logowhite.png" alt="logo"
                            class="img-fluid">
                    </a>
                </div>

                <style>
                    .map-container iframe {
                        width: 100%;
                        height: 200px;
                        border: 0;
                        filter: grayscale(100%);
                        transition: filter 0.4s ease-in-out;
                    }

                    .map-container iframe:hover {
                        filter: grayscale(0%);
                    }
                </style>

                <div class="mt-3 map-container">
                    <iframe src="https://maps.google.com/maps?q=YouExcel,%20Karachi&t=&z=15&ie=UTF8&iwloc=&output=embed"
                        loading="lazy">
                    </iframe>
                </div>


            </div>

            <!-- Column 2: Forms -->
            <div class="col-lg-3 col-md-6">
                <div class="widget footer-widget footer-menu nav_menu">
                    <h3 class="widget_title">Forms</h3>
                    <ul>

                        <!-- Inquiry Forms -->
                        <li>
                            <a href="#">Inquiry Forms</a>
                            <ul class="submenu">
                                <li><a href="{{ url('enquiry-form') }}">Open Enrollment Form</a></li>
                                <li><a href="{{ route('enquiry.corporate') }}">Corporate Inquiry Form</a></li>

                                <!-- Government Inquiry -->
                                <li>
                                    <a href="#">Government Inquiry</a>
                                    <ul>
                                        <li>
                                            <a href="#">NAVTTC</a>
                                            <ul>
                                                <li><a href="{{ route('enquiry.navttcsotb1') }}">Skills of Tomorrow Form</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('benazir.form') }}">Benazir Program</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <!-- Registration Forms -->
                        <li>
                            <a href="#">Registration Forms</a>
                            <ul class="submenu">
                                <li><a href="{{ url('registration_form') }}">Open Enrollment Form</a></li>
                                <li>
                                    <a href="#">Government</a>
                                    <ul>
                                        <li><a href="#">NAVTTC</a></li>
                                        <li><a href="{{ route('registration-form-project') }}">Benazir</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li><a href="{{ route('demo.confirmation') }}">Demo Confirmation Form</a></li>
                        <li><a href="{{ url('support-form') }}">Complaint & Support Form</a></li>
                        <li><a href="{{ url('Feedback-Form') }}">Feedback Form</a></li>

                    </ul>
                </div>
            </div>



            <!-- Column 3: Quick Links -->
            <div class="col-lg-3 col-md-6">
                <div class="widget footer-widget footer-menu nav_menu">
                    <h3 class="widget_title">Quick Links</h3>
                    <ul>

                        <li><a href="{{ url('Careers') }}">Careers</a></li>
                        <li><a href="{{ url('affiliations') }}">Affiliations</a></li>

                        <!-- Policies -->
                        <li>
                            <a href="#">Policies</a>
                            <ul class="submenu">
                                <li><a href="{{ url('Privacy-Policy') }}">Privacy Policy</a></li>
                                <li><a href="{{ url('Student-Policy') }}">Student Policy</a></li>
                                <li><a href="{{ url('Policies') }}">Refund Policy</a></li>
                                <li><a href="{{ url('Policies') }}">Appeals</a></li>
                            </ul>
                        </li>

                        <li><a href="{{ route('page.reviews') }}">Reviews</a></li>

                        <!-- FAQs -->
                        <li>
                            <a href="#">FAQs</a>
                            <ul class="submenu">
                                <li>
                                    <a href="#">NAVTTC FAQs</a>
                                    <ul>
                                        <li><a href="{{ route('faqs-navttcsotb1') }}">Skills of Tomorrow FAQs</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('faqs-bbshrrdb') }}">Benazir FAQs</a></li>
                                <li><a href="{{ route('faqs') }}">YouExcel FAQs</a></li>
                                <li><a href="{{ route('faqs-career-connect') }}">Career Connect FAQs</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>


            <!-- Column 4: Contact + Map -->
            <div class="col-lg-3 col-md-6">
                <div class="widget nav_menu footer-widget">
                    <h3 class="widget_title">Contact Details</h3>
                    <div class="menu-all-pages-container footer-menu">
                        <ul class="menu">
                            <li>
                                <a class="text-inherit" href="tel:+922137121738">+92-21-37121738</a></p>
                            </li>
                            <li>
                                <a class="text-inherit" href="tel:+923356699331">+92-335-6699331</a></p>
                            </li>
                            <li>
                                <a class="text-inherit"
                                    href="mailto:info@youexceltraining.com">info@youexceltraining.com</a>
                            </li>
                            <li>
                                <a class="text-inherit">
                                    YouExcel, Suite: 503-505, 5th Floor, Al Samad Tower, Block 13-B,
                                    Main University Road, Gulshan-e-Iqbal, Karachi, Pakistan.
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <!-- Copyright -->
    <div class="copyright-wrap d-flex justify-content-around">
        <div class="footer-social-icons">
            <a href="https://www.linkedin.com/company/youexceltraining" class="text-white me-3"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="https://www.facebook.com/youexceltraining" class="text-white me-3"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/youexcel_official" class="text-white me-3"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://www.youtube.com/c/youexceltraining/videos" class="text-white me-3"><i class="fa-brands fa-youtube"></i></a>
            <a href="https://www.pinterest.com/youexceltraining/" class="text-white"><i class="fa-brands fa-pinterest-p"></i></a>
        </div>
        <p class="mb-0">
            <small>
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>
                <a href="{{ route('page.home') }}" class="text-white">YouExcel</a>.
                All Rights Reserved.
                Designed & Developed by
                <a href="https://supersofttechnology.com/" class="text-white">
                    Supersoft Technologies
                </a>.
            </small>
        </p>
    </div>
</footer>

<!--Mobile Footer-->
<footer class="footer-wrapper footer-layout1 pt-5 d-block d-lg-none">
    <div class="container">
        <div class="row">
            <!-- Column 1: Logo + About + Socials -->
            <div class="col-lg-3 col-md-6 logo-container">
                <div class="footer-logo mb-3">
                    <a href="{{ route('page.home') }}">
                        <img style="width: 100px;" src="https://youexceltraining.com/img/Yourexcel-img/Youexcel-logowhite.png" alt="logo"
                            class="img-fluid">
                    </a>
                </div>
                <p>Let's help you start or advance your career.</p>
                <!--<p>You have a question? Let us know and our team is available to guide you.</p>-->

                <style>
                .map-container iframe {
                    width: 100%;
                    height: 200px;
                    border: 0;
                    filter: grayscale(100%);
                    transition: filter 0.4s ease-in-out;
                }
                
                .map-container iframe:hover {
                    filter: grayscale(0%);
                }
                </style>
                
                <div class="mt-3 map-container">
                    <iframe 
                        src="https://maps.google.com/maps?q=YouExcel,%20Karachi&t=&z=15&ie=UTF8&iwloc=&output=embed"
                        loading="lazy">
                    </iframe>
                </div>


            </div>

            <!-- Column 2: Forms -->
            <div class="col-lg-3 col-md-6">
                <div class="widget nav_menu footer-widget sl-m-5">
                    <h3 class="widget_title">Form Links</h3>

                    <ul class="menu">

                        <!-- Enquiry Forms Toggle -->
                        <li class="footer-collapse">
                            <a href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#enquiryForms"
                                aria-expanded="false">
                                ENQUIRY FORMS
                                <i class="fa-solid fa-chevron-down float-end mx-2"></i>
                            </a>

                            <!-- Collapsible List -->
                            <ul class="collapse mt-2" id="enquiryForms">
                                <li><a href="{{ url('enquiry-form') }}">OPEN ENROLLMENTS ENQUIRY</a></li>
                                <li><a href="{{ route('enquiry.corporate') }}">CORPORATE ENQUIRY</a></li>
                                <li><a href="{{ route('demo.confirmation') }}">DEMO CONFIRMATION</a></li>
                                <li><a href="{{ route('benazir.form') }}">BBSHRRDB ENQUIRY</a></li>
                                <li><a href="{{ route('project.form') }}">PROJECT ENQUIRY</a></li>
                                <li style="margin-bottom: 15px;"><a href="{{ route('enquiry.navttcsotb1') }}">SKILLS OF TOMORROW FORM</a></li>
                            </ul>
                        </li>

                        <!-- Other Forms (Always Visible) -->
                        <li><a href="{{ url('registration_form') }}">REGISTRATION FORM</a></li>
                        <li><a href="{{ route('registration-form-project') }}">BBSHRRDB REGISTRATION</a></li>
                        <li><a href="{{ url('Feedback-Form') }}">FEEDBACK FORM</a></li>
                        <li><a href="{{ url('support-form') }}">COMPLAINT / SUPPORT</a></li>
                        <li><a href="{{ route('career.connect.index') }}">CAREER CONNECT</a></li>

                    </ul>
                </div>
            </div>


            <!-- Column 3: Quick Links -->
            <div class="col-lg-3 col-md-6">
                <div class="widget nav_menu footer-widget">
                    <h3 class="widget_title">Quick Links</h3>
                    <div class="menu-all-pages-container footer-menu">
                        <ul class="menu">
                            <!-- Pollicies Toggle -->
                            <li class="footer-collapse">
                                <a href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#pollicies"
                                    aria-expanded="false">
                                    <span>POLLICIES</span>
                                    <i class="fa-solid fa-chevron-down float-end mx-2"></i>
                                </a>

                                <!-- Collapsible List -->
                                <ul class="collapse mt-2" id="pollicies">
                                    <li><a href="{{ url('Privacy-Policy') }}">PRIVACY POLICY</a></li>
                                    <li><a href="{{ url('Student-Policy') }}">STUDENT POLICY</a></li>
                                    <li><a href="{{ url('Policies') }}">REFUND POLICY</a></li>
                                    <li style="margin-bottom: 15px;"><a href="{{ url('Policies') }}">DIVERSITY
                                            POLICY</a></li>
                                </ul>
                            </li>
                            <!-- FAQs Toggle -->
                            <li class="footer-collapse">
                                <a href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#faqs"
                                    aria-expanded="false">
                                    <span>FAQS</span>
                                    <i class="fa-solid fa-chevron-down float-end mx-2"></i>
                                </a>

                                <!-- Collapsible List -->
                                <ul class="collapse mt-2" id="faqs">
                                    <li>
                                        <a href="{{ route('faqs-navttcsotb1') }}">SKILLS OF TOMORROW FAQs</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('faqs-bbshrrdb') }}">BBSHRRDB FAQs</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('faqs-career-connect') }}">CAREER CONNECT FAQs</a>
                                    </li>
                                    <li style="margin-bottom: 15px;">
                                        <a href="{{ route('faqs') }}">FAQs</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ url('Careers') }}">CAREERS</a>
                            </li>
                            <li>
                                <a href="{{ url('affiliations') }}">AFFILIATIONS</a>
                            </li>
                            <li>
                                <a href="{{ url('Policies') }}">ACCESSIBILITY</a>
                            </li>
                            <li>
                                <a href="{{ url('Policies') }}">APPEALS</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

            <!-- Column 4: Contact + Map -->
            <div class="col-lg-3 col-md-6">
                <div class="widget nav_menu footer-widget">
                    <h3 class="widget_title">Contact Details</h3>
                    <div class="menu-all-pages-container footer-menu">
                        <ul class="menu">
                            <li>
                                <a class="text-inherit" href="tel:+922137121738">+92-21-37121738</a></p>
                            </li>
                            <li>
                                <a class="text-inherit" href="tel:+923356699331">+92-335-6699331</a></p>
                            </li>
                            <li>
                                <a class="text-inherit"
                                    href="mailto:info@youexceltraining.com">info@youexceltraining.com</a>
                            </li>
                            <li>
                                <a class="text-inherit">
                                    YouExcel, Suite: 503-505, 5th Floor, Al Samad Tower, Block 13-B,
                                    Main University Road, Gulshan-e-Iqbal, Karachi, Pakistan.
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Copyright -->
    <div class="copyright-wrap d-flex justify-content-around">
        <div class="footer-social-icons">
            <a href="#" class="text-white me-3"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#" class="text-white me-3"><i class="fa-brands fa-twitter"></i></a>
            <a href="#" class="text-white me-3"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="#" class="text-white me-3"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" class="text-white me-3"><i class="fa-brands fa-tiktok"></i></a>
            <a href="#" class="text-white"><i class="fa-brands fa-pinterest-p"></i></a>
        </div>
        <p class="mb-0">
            <small>
                &copy;
                <script>document.write(new Date().getFullYear())</script>
                <a href="{{ route('page.home') }}" class="text-white">YouExcel</a>.
                All Rights Reserved.
                Designed & Developed by
                <a href="https://supersofttechnology.com/" class="text-white">
                    Supersoft Technologies
                </a>.
            </small>
        </p>
    </div>
</footer>
@endif
@if(request()->routeIs('page.home'))
    @php
        $resources = \App\Models\Resource::with('course')->where('status', '1')->get();
    @endphp
    
    <script>
        const enquiryBaseUrl = "{{ route('web.enquiry', '') }}";
        
        document.addEventListener('DOMContentLoaded', function () {
        
            let resources = @json($resources);
            let currentIndex = 0;
        
            if (resources.length > 0) {
                showNextModal();
            }
        
            function showNextModal() {
                if (currentIndex >= resources.length) return;
                createAndShowModal(resources[currentIndex]);
            }
        
            function createAndShowModal(data) {
        
                const modal = document.createElement('div');
                modal.className = 'your-modal-class';
        
                modal.innerHTML = `
                    <div class="modal-content">
                        <span class="close">&times;</span>
        
                        <div class="modal-body p-0">
                            <img src="${data.image_path}" alt="popup image">
        
                            <div class="modal-footer-custom">
                                <a href="${enquiryBaseUrl}/${data.course.slug}" target="_blank"
                                   class="vs-btn style3">
                                    Enquire Now
                                </a>
                            </div>
                        </div>
                    </div>
                `;
        
                document.body.appendChild(modal);
        
                // Close button
                modal.querySelector('.close').addEventListener('click', function () {
                    modal.remove();
                    currentIndex++;
                    showNextModal();
                });
        
                // Click outside to close
                modal.addEventListener('click', function (e) {
                    if (e.target === modal) {
                        modal.remove();
                        currentIndex++;
                        showNextModal();
                    }
                });
            }
        
        });
    </script>
@endif

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const popup = document.getElementById("newsletter-popup");
        const closeBtn = document.querySelector(".popup-close");
        const form = document.getElementById("newsletter-form");

        // Check if popup was already closed/submitted
        if (!localStorage.getItem("newsletterClosed")) {
            // Show popup after 5 seconds
            setTimeout(() => {
                popup.classList.add("active");
            }, 5000);
        }

        // Close popup on close button
        closeBtn.addEventListener("click", () => {
            popup.classList.remove("active");
            localStorage.setItem("newsletterClosed", "true");
        });

        // Close popup if click outside content
        popup.addEventListener("click", (e) => {
            if (e.target === popup) {
                popup.classList.remove("active");
                localStorage.setItem("newsletterClosed", "true");
            }
        });

        // Update localStorage on form submit
        form.addEventListener("submit", () => {
            localStorage.setItem("newsletterClosed", "true");
            popup.classList.remove("active"); // optional: close immediately
        });
    });
</script>
