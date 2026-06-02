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
    
    }
    
    .social-side-bar {
        position: fixed;
        top: 50%;
        left: 0;
        transform: translateY(-50%);
        background: #1a1a1a; /* dark bar */
        padding: 10px 5px;
        border-radius: 0 10px 10px 0;
        display: flex;
        flex-direction: column;
        gap: 15px;
        z-index: 9999;
    }
    
    .social-side-bar a {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 40px;
        height: 40px;
        color: #fff;
        background: #2c2c2c;
        border-radius: 50%;
        transition: all 0.3s ease;
        font-size: 18px;
    }
    
    .social-side-bar a:hover {
        margin-left: 5px; /* slight movement */
        background: #ff6b00; /* theme color on hover */
        color: #fff;
    }
    
    /* Overlay */
    .popup-overlay {
        position: fixed;
        inset: 0;
        background: rgba(0,0,0,0.7);
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
        box-shadow: 0 25px 60px rgba(0,0,0,0.3);
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
        box-shadow: 0 8px 20px rgba(0,0,0,0.2);
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

</style>

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
                <input type="email" name="newsletter-email" id="newsletter-email" placeholder="Enter your email" required>

                <label class="popup-checkbox">
                    I agree to receive updates & promotional emails.
                </label>

                <button type="submit">SIGN ME UP</button>
            </form>
        </div>

    </div>
</div>

<div class="social-side-bar">
    <a href="https://www.linkedin.com/company/youexceltraining" target="_blank"><i class="fab fa-linkedin-in"></i></a>
    <a href="https://www.facebook.com/youexceltraining" target="_blank"><i class="fab fa-facebook-f"></i></a>
    <a href="https://www.instagram.com/youexcel_official" target="_blank"><i class="fab fa-instagram"></i></a>
    <a href="https://www.youtube.com/c/youexceltraining/videos" target="_blank"><i class="fab fa-youtube"></i></a>
    <a href="#" target="_blank"><i class="fab fa-pinterest"></i></a>
</div>

<footer class="footer-wrapper footer-layout1 pt-5">
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
                                <li style="margin-bottom: 15px;"><a href="{{ route('project.form') }}">PROJECT
                                        ENQUIRY</a></li>
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
                                        <a href="{{ route('faqs-navttc') }}">NAVTTC FAQs</a>
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
            if(e.target === popup){
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


