<div class="vs-menu-wrapper">
    <div class="vs-menu-area text-center">
        <button class="vs-menu-toggle"><i class="fa-light fa-times"></i></button>
        <div class="mobile-logo">
            <a href="{{url("/")}}"><img src="https://youexceltraining.com/img/Yourexcel-img/excel-logo-new.png" alt="Educino"></a>
        </div>
        @php
            use App\Models\CalendarFile;
            $calendarFilePath = optional(CalendarFile::first())->calendar_file;
        @endphp
        <div class="vs-mobile-menu">
            <ul>
                <li>
                    <a href="{{url("/home")}}">Home</a>
                </li>
                <li>
                    <a href="{{url("/about")}}">About Us</a>
                </li>
                <li>
                    <a href="{{url("/courses")}}">Training Programs</a>
                </li>
                <li>
                    <a href="{{ route('web.corporate-customized-training') }}">Corporate Training</a>
                </li>
                <li>
                    <a href="{{ route('web.events') }}">Events</a>
                </li>
                <li>
                    <a href="{{ route('career.connect.index') }}">Career Connect</a>
                </li>
                <!--<li>-->
                <!--    <a href="{{ route('event.gallery') }}">Impact Showcase</a>-->
                <!--</li>-->
                <li class="dropdown">
                    <a href="#">Calendar <i class="fa fa-angle-down ms-1"></i></a>
                    <ul class="submenu">
                        <li><a href="{{ route('web.calendar') }}">Upcoming Programs</a></li>
                        <li><a href="{{ route('calendar.download') }}">Download Calendar</a></li>
                        <!--<li><a href="{{ asset($calendarFilePath) }}" download>Download Calendar</a></li>-->
                    </ul>
                </li>

                <li>
                    <a href="{{url("/Reviews")}}">Training Reviews</a>
                </li>
                <li>
                    <a href="https://lms.youexceltraining.com/">LMS Login</a>
                </li>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </ul>
        </div>
    </div>
</div>

<!--==============================
Header Area
==============================-->
<header class="vs-header header-layout1">
    <div class="header-top" id="header-top">
        <div class="container">
            <div class="row justify-content-between align-items-center gx-50">
                <div class="col d-none d-xl-block">
                    <div class="header-links">
                        <ul>
                            <li><i class="fa-solid fa-phone-alt"></i>Phone:  <a href="tel:+92-331-3016699">   +92-331-3016699</a>, <a href="tel:+92-21-37121738">+92-21-37121738</a></li>
                            <li><i class="fa-solid fa-envelope"></i>Email: <a href="mailto:info@youexceltraining.com "> info@youexceltraining.com </a></li>
                        </ul>
                    </div>
                </div>
                <!--<div class="col col-xl-auto d-none d-md-block">-->
                <!--    <a class="user-login" href="login-register.htmlhttps://lms.youexceltraining.com/"><i class="fa-solid fa-user-circle"></i>LMS Login</a>-->
                <!--</div>-->
                <div class="col-md-auto text-center">
                    <div class="header-social">
                        <a target="_blank" class="facebook-f" href="https://www.facebook.com/youexceltraining"><i class="fa-brands fa-facebook-f"></i></a>
                        <a target="_blank" class="instagram"  href="https://www.instagram.com/youexcel_official"><i class="fa-brands fa-instagram"></i></a>
                        <a target="_blank"  class="youtube" href="https://www.youtube.com/c/youexceltraining/videos "><i class="fa-brands fa-youtube"></i> </a>  
                        <a target="_blank"  class="linkedin-in" href="https://www.linkedin.com/company/youexceltraining"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="" id="navbar" style="position:fixed; top: 27px;    width: 100%; transition: top 0.3s ease, background-color 0.3s ease; background-color:#fff;">
        <div class="justify-content-between" >
            <div class="container-fluid  position-relative z-index-common">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="vs-logo"> <a href="{{url("/")}}"><img src="https://youexceltraining.com/img/Yourexcel-img/excel-logo-new.png" alt="logo"></a> </div>
                    </div>
                    <div class="col text-end text-xl-end">
                        <nav class="main-menu menu-style1 d-none d-lg-block">
                            <ul>
                                <li>
                                    <a href="{{url("/")}}">Home</a>
                                </li>
                                {{--  class="menu-item-has-children" dropdown --}}
                                <li>
                                    <a href="{{url("/about")}}">About Us</a>
                        <!--            <ul class="sub-menu">-->
                        <!--    <li><a href="#">Vision</a></li>-->
                        <!--    <li><a href="#">Mission</a></li>-->
                        <!--    <li><a href="#">Why YouExcel</a></li>-->
                          
                        <!--</ul>-->
                                </li>
                                <li>
                                    <a href="{{url("/courses")}}">Training Programs</a>
                            <!--        <ul class="sub-menu">-->
                            <!--<li><a href="#">SQL</a></li>-->
                            <!--<li><a href="#">Excel Mastery</a></li>-->
                             <!--<li><a href="#">•	etc</a></li>-->
                            <!--    </ul>-->
                                </li>
                                
                                <li>
                                    <a class="menu-item-has-children" href="#">Calendar</a>
                                    <ul class="sub-menu">
                                    <li><a href="{{ route('web.calendar') }}">Upcoming Programs</a></li>
                                    <li><a href="{{ route('calendar.download') }}">Download Calendar</a></li>
                                    <!--<li><a href="{{ asset($calendarFilePath) }}" download>Download Calendar</a></li>-->
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('web.corporate-customized-training') }}">Corporate Training</a>
                                </li>
                                
                                <li>
                                    <a href="{{ route('web.events') }}">Events</a>
                                </li>
                                <li>
                                    <a href="{{ route('career.connect.index') }}">Career Connect</a>
                                </li>
             
                                
                                <!--<li>-->
                                <!--    {{-- <a href="{{ url('/Events-gallery') }}">Gallery</a> --}}-->
                                <!--    <a href="{{ route('event.gallery') }}">Impact Showcase</a>-->
                                <!--</li>-->
                                <!--<li>-->
                                <!--    <a href="{{ route('website.career') }}">Career</a>-->
                                <!--</li>-->
                                  <li>
                                <a href="{{url("/Reviews")}}" class="vs-btn style3">Review</a>
                                 </li>
                                  <li>
                                        <a href="https://lms.youexceltraining.com/" class="vs-btn style3">LMS Login</a>   
                                       </li>

                            </ul>
                        </nav>
                        <button class="vs-menu-toggle d-inline-block d-lg-none" style="margin-top: 8px;"><i class="fa-light fa-bars"></i></button>
                    </div>
<!--                    <div class="col-auto d-none d-xl-block">-->
<!--                        <div class="header-btns">-->
<!--                            <button type="button" class="searchBoxTggler"><i class="far fa-search"></i></button>-->
<!--{{--                            <a href="find-program.html" class="vs-btn style4"><i class="fa-light fa-graduation-cap"></i> Find Program</a>--}}-->
<!--                        </div>-->
<!--                    </div>-->
                </div>
            </div>
        </div>
    </div>
</header>