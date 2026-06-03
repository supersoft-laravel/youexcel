<style>
.custom-navbar-wrapper {
    display: flex;
    justify-content: center;
    align-items: center;
}
.custom-navbar {
    width: 95%;
    position:fixed; top: 27px;
    max-width: 1500px !important;
    /*backdrop-filter: blur(18px) !important;*/
    /*background: rgba(40, 45, 50, 0.75) !important;*/
    background: rgba(35, 35, 35, 0.2) !important;
    backdrop-filter: blur(27px) !important;
    border-radius: 20px !important;
    display: flex !important;
    justify-content: center !important;
    align-items: center !important;
    box-shadow: 0 8px 30px rgba(0,0,0,0.2) !important;
    color: #ffffff !important;
    transition: top 0.3s ease;
}
.custom-navbar.scrolled {
    width: 100% !important;
    top: 0 !important;
    border-radius: 0 !important;
    background: #150F2B !important; /* solid black */
    backdrop-filter: none !important;
    box-shadow: 0 5px 20px rgba(0,0,0,0.4) !important;
    transition: all 0.4s ease;
}
.main-menu a {
    color: #ffffff !important;
}
.main-menu ul.sub-menu a {
    color: #000 !important;
}
.vs-logo img {
    max-width: 130px !important;
}
.vs-logo-container{
    display: flex;
    justify-content: center;
    align-items: center;
}
.mobile-layer-3 {
    gap: 80px;
}

@media (max-width: 991px) {
    .custom-navbar {
        width: 100%;
        justify-content: space-between !important;
    }
    .mobile-layer-1 {
        width: 100%;
    }
    .mobile-layer-2 {
        width: 100%;
    }
    .mobile-layer-3 {
        width: 100%;
    }
}

.new-tag {
    background-color: red;
    color: white;
    font-size: 7px;
    font-weight: bold;
    padding: 2px 5px;
    border-radius: 4px;
    /*margin-left: 5px;*/
    vertical-align: super;
}
</style>

<div class="vs-menu-wrapper">
    <div class="vs-menu-area text-center">
        <button class="vs-menu-toggle"><i class="fa-light fa-times"></i></button>
        <div class="mobile-logo" style="background-color: #002347;">
            <a href="{{url("/")}}"><img src="{{ asset('img/Yourexcel-img/Youexcel-logowhite.png') }}"
                    alt="Educino"></a>
        </div>
        @php
        $calendarFilePath = optional(App\Models\CalendarFile::first())->calendar_file;
        @endphp
        <div class="vs-mobile-menu">
            <ul>
                <li class="dropdown">
                    <a href="#">Company</a>
                    <ul class="submenu">
                        <li><a href="{{ route('page.about') }}">About Us</a></li>
                        <li><a href="{{ route('career.connect.index') }}">Career Connect</a></li>
                        <li><a href="{{ route('page.affiliations') }}">Affiliations</a></li>
                    </ul>
                </li>
                <li>
                    <a class="dropdown" href="#">What We Offer</a>
                    <ul class="submenu">
                        <li><a href="{{ route('page.courses') }}">Training Programs</a></li>
                        <li><a href="{{ route('web.corporate-customized-training') }}">Corporate Programs</a></li>
                        <li><a href="{{ route('govsp.index') }}">Government Sponsored Programs</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('web.calendar') }}">Training Calendar</a>
                </li>
                <li>
                    <a href="{{ route('webinars.web') }}">Webinars <span style="margin-left: 5px;" class="new-tag">NEW</span></a>
                    
                </li>
                <li>
                    <a class="dropdown" href="#">Resources</a>
                    <ul class="submenu">
                        <li><a href="{{ route('web.events') }}">Events</a></li>
                        <li><a href="{{ route('event.gallery') }}">Gallery</a></li>
                        <li><a href="{{ route('blogs.web') }}">Blogs</a></li>
                        <li><a href="{{ route('faqs') }}">FAQs</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('page.contact') }}">Get in Touch</a>
                </li>
                <li>
                    <a href="https://lms.youexceltraining.com/" class="vs-btn style3">LMS Login</a>
                </li>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </ul>
        </div>
    </div>
</div>

<!--==============================
Header Area
==============================-->
<header class="vs-header header-layout1 custom-navbar-wrapper">
    <div class="custom-navbar" id="navbar">
        <div class="justify-content-between mobile-layer-1">
            <div class="container-fluid  position-relative z-index-common mobile-layer-2">
                <div class="row">
                    <div class="col-auto vs-logo-container">
                        <div class="vs-logo">
                            <a href="{{ route('page.home') }}">
                                <img src="{{ asset('img/Yourexcel-img/Youexcel-logowhite.png') }}" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col text-end text-xl-end" style="align-content: center;">
                        <nav class="main-menu menu-style1 d-none d-lg-block">
                            @if(request()->routeIs('web.executive-dashboard'))
                                <ul>
                                    <li>
                                        <a href="mailto:corporate@youexceltraining.com">
                                            <i class="fa-solid fa-envelope"></i>       corporate@youexceltraining.com
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tel:+92-335-6699331">
                                            <i class="fa-solid fa-phone"></i>       +92-335-6699331
                                        </a>
                                    </li>
                                    <li>
                                        <button class="btn btn-sm btn-outline-warning btn-lg text-white scrollToForm">
                                            <i class="fa-solid fa-phone"></i>       Speak to Expert
                                        </button>
                                    </li>
    
                                </ul>
                            @else
                                <ul>
                                    <li>
                                        <a class="menu-item-has-children" href="#">Company</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('page.about') }}">About Us</a></li>
                                            <li><a href="{{ route('career.connect.index') }}">Career Connect</a></li>
                                            <li><a href="{{ route('page.affiliations') }}">Affiliations</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="menu-item-has-children" href="#">What We Offer</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('page.courses') }}">Training Programs</a></li>
                                            <li><a href="{{ route('web.corporate-customized-training') }}">Corporate Programs</a></li>
                                            <li><a href="{{ route('govsp.index') }}">Government Sponsored Programs</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ route('web.calendar') }}">Training Calendar</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('webinars.web') }}">Webinars</a>
                                        <span class="new-tag">NEW</span>
                                    </li>
                                    <li>
                                        <a class="menu-item-has-children" href="#">Resources</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('web.events') }}">Events</a></li>
                                            <li><a href="{{ route('event.gallery') }}">Gallery</a></li>
                                            <li><a href="{{ route('blogs.web') }}">Blogs</a></li>
                                            <li><a href="{{ route('faqs') }}">FAQs</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ route('page.contact') }}">Get in Touch</a>
                                    </li>
                                    <li>
                                        <a href="https://lms.youexceltraining.com/" class="vs-btn style3">LMS Login</a>
                                    </li>
    
                                </ul>
                            @endif
                        </nav>
                        @if(request()->routeIs('web.executive-dashboard'))
                            <button class="btn btn-sm btn-outline-warning btn-lg text-white scrollToForm  d-inline-block d-lg-none">
                                <i class="fa-solid fa-phone"></i> Speak to Expert
                            </button>
                        @else
                        <button class="vs-menu-toggle d-inline-block d-lg-none" style="margin-top: 8px;"><i
                                class="fa-light fa-bars"></i></button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
window.addEventListener("scroll", function () {
    let navbar = document.querySelector(".custom-navbar");

    if (window.scrollY > 50) {
        navbar.classList.add("scrolled");
    } else {
        navbar.classList.remove("scrolled");
    }
});
</script>
