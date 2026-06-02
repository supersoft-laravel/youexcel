<!--================ Start Header Menu Area =================-->
@extends('website.app')
<!--================ End Header Menu Area =================-->

<!--================ Start Home Banner Area =================-->
@section('content')
    <section class="banner-img-cfma" style="background-color: #e8e8e8;">
        <div class="banner_inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-text1 main-banner-padding text-center">
                            <h2 class="text-uppercase mt-4 mb-5 banner-heading">
                                Customer Services Specialist
                                <div>
                                    <!--<a type="button" data-toggle="modal" data-target="#financeModal"><i class="fa fa-play-circle" aria-hidden="true" style="color: #fff"></i></a>-->
                                    <!-- <a href="video-demo-financial-modeling" target="_blank"><i class="fa fa-play-circle" aria-hidden="true" style="color: #fff"></i></a> -->
                                </div>
                                <div>
                                    <!--<a href="#" data-toggle="modal" data-target="#financeModal"><h5 style="color: #fff; text-decoration:underline;">View video demo</h5></a>-->
                                    <!-- <a href="video-demo-financial-modeling" target="_blank"><h5 style="color: #fff; text-decoration:underline;">View video demo</h5></a> -->
                                </div>
                                <!-- Button trigger modal -->
                            </h2>
                        </div>
                        <div id="about"></div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="financeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <!-- <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="font-size:40px;">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div> -->
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="font-size:40px;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <section class="section-demofeature">
                        <div class="container ">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="text-center mb-3 mt-3">
                                        <h1 class="mb-3">Customer Services Specialist </span></h1>
                                        <iframe class="youtube-video" src="https://www.youtube.com/embed/SM6wH6DKLiQ"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary btn-lg" data-dismiss="modal">Close</button> -->
                </div>
            </div>
        </div>
    </div>

    <!-- navbar start  -->
    <nav class="navbar navbar1 navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <div class="collapse navbar-collapse mt-2" id="navbarSupportedContent1">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#outcome">Learning Outcomes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#course-outline">Course Outline</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#trainer">Trainer Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#duration">Duration</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#Pre-requisite">Pre-Requisite</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Value-added-Services">Value added Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Career-paths">Career Paths</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Registation-form">Registration Form</a>
                </li>
            </ul>
        </div>

    </nav>
    <!-- navbar end  -->
    <section>
        <div class="container mt-5" id="outcome">
            <div class="row">
                <div class="col-lg-8 mt-5 mb-5">
                    <h2>ABOUT THE COURSE:</h2>
                    <p> This program introduces the participants with every aspect of customer experience. What is the
                        best way to handle difficult customers? It further develops understanding to meet Customers’
                        needs and fulfill the customer expectation to ensure your business grows exponentially. By
                        completing this training, you will be able to prepare, develop career skills for customer
                        service call center and client facilitation and become communication expert. You will also be
                        able to achieve recognized certificate of completion endorsed by Trade Testing Board Sindh,
                        Government of Sindh.
                    </p>
                </div>
                <div class="col-lg-12">
                    <div class="card p-4">
                        <h4>WHAT YOU WILL LEARN</h4>
                        <div class="row mt-4">
                            <div class="col-lg-6">
                                <ul style="display: flex;">
                                    <span><i class="fas fa-check" aria-hidden="true"></i></span>&emsp;
                                    <p
                                        style="font-size: 17px;">Clearly understand Customer Services role
                                    </p>
                                </ul>
                            </div>
                            <div class="col-lg-6" id="course-outline">
                                <ul style="display: flex;">
                                    <span><i class="fas fa-check" aria-hidden="true"></i></span>&emsp; <p
                                        style="font-size: 17px;">Highlight the importance of service standards and their
                                        impact on a customer’s experience.</p>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul style="display: flex;">
                                    <span><i class="fas fa-check" aria-hidden="true"></i></span>&emsp; <p
                                        style="font-size: 17px;">Explain service language and its importance in
                                        communicating with customers. </p>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul style="display: flex;">
                                    <span><i class="fas fa-check" aria-hidden="true"></i></span>&emsp; <p
                                        style="font-size: 17px;"> S.M.A.R.T. goals prepare and deliver </p>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul style="display: flex;">
                                    <span><i class="fas fa-check" aria-hidden="true"></i></span>&emsp; <p
                                        style="font-size: 17px;">Positive mind-set services </p>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul style="display: flex;">
                                    <span><i class="fas fa-check" aria-hidden="true"></i></span>&emsp; <p
                                        style="font-size: 17px;">Problem solving approach </p>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul style="display: flex;">
                                    <span><i class="fas fa-check" aria-hidden="true"></i></span>&emsp; <p
                                        style="font-size: 17px;">Various strategies to deal with different types of
                                        customers </p>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul style="display: flex;">
                                    <span><i class="fas fa-check" aria-hidden="true"></i></span>&emsp; <p
                                        style="font-size: 17px;">Verbal and Non-Verbal communication skills </p>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul style="display: flex;">
                                    <span><i class="fas fa-check" aria-hidden="true"></i></span>&emsp; <p
                                        style="font-size: 17px;">Tele-customer services </p>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul style="display: flex;">
                                    <span><i class="fas fa-check" aria-hidden="true"></i></span>&emsp; <p
                                        style="font-size: 17px;">Key Sales knowledge, skills and values </p>
                                </ul>
                            </div>

                            <div class="col-lg-6">
                                <ul style="display: flex;">
                                    <span><i class="fas fa-check" aria-hidden="true"></i></span>&emsp; <p
                                        style="font-size: 17px;">Positive thinking and professionalism </p>
                                </ul>
                            </div>

                            <div class="col-lg-6">
                                <ul style="display: flex;">
                                    <span><i class="fas fa-check" aria-hidden="true"></i></span>&emsp; <p
                                        style="font-size: 17px;">Business dynamics in terms of services </p>
                                </ul>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-12">
                    <h2 class="mt-5">COURSE OUTLINE:</h2>
                    <div class="row">

                        <div class="col-lg-6 mt-2">
                            <div class="panel-group" id="accordion2">
                                <div class="card">
                                    <div class="card-header">
                                        <a class="collapsed" data-bs-toggle="collapse" data-parent="#accordion2"
                                           href="#collapse-amenities2">
                                            <h3 class="panel-title"><span style="color: red;">Module 1:</span>Provide
                                                Organization’s Intro. & Product Info to the customer </h3>
                                        </a>
                                    </div>
                                    <div id="collapse-amenities2" class="panel-collapse collapse">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <ul>
                                                        <li>Daily Habits – Activity</li>
                                                        <li>Intro to Customer Services</li>
                                                        <li>Services and Classification with example</li>
                                                        <li>Difference of Goods and Services</li>
                                                        <li>Concepts of Products and Consumption</li>
                                                        <li>Distinguish Services/Goods</li>
                                                        <li>Evaluation of Goods and Services in relation to market</li>
                                                        <li>Organizational Challenges in terms of Customer Services with
                                                            their reasons
                                                        </li>
                                                        <li>Difference of Goods and Services</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                  


                    <div class="col-lg-6 mt-2">
                        <div class="panel-group" id="accordion">
                            <div class="card">
                                <div class="card-header">
                                    <a class="collapsed" data-bs-toggle="collapse" data-parent="#accordion"
                                       href="#collapse-amenities3">
                                        <h3 class="panel-title"><span style="color: red;">Module 2:</span>Communication
                                            as a skill </h3>
                                    </a>
                                </div>
                                <div id="collapse-amenities3" class="panel-collapse collapse">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <ul>
                                                    <li>Decipher Customer services as a skill</li>
                                                    <li>Organization structure and spam of control</li>
                                                    <li>Identify Communication tools and its practices</li>
                                                    <li>7’Cs of effective communication</li>
                                                    <li>Jargon and terminology</li>
                                                    <li>Importance of Positive words</li>

                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-2">
                        <div class="panel-group" id="accordion">
                            <div class="card">
                                <div class="card-header">
                                    <a class="collapsed" data-bs-toggle="collapse" data-parent="#accordion"
                                       href="#collapse-amenities4">
                                        <h3 class="panel-title"><span style="color: red;">Module 3:</span>– Develop
                                            Customer Services as a professional Skills </h3>
                                    </a>
                                </div>
                                <div id="collapse-amenities4" class="panel-collapse collapse">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <ul>
                                                    <li>Listening skills</li>
                                                    <li>Questioning skills</li>
                                                    <li>Communication barriers</li>
                                                    <li>Causes of barriers, outcome & and strategies to avoid
                                                        barriers
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-2">
                        <div class="panel-group" id="accordion">
                            <div class="card">
                                <div class="card-header">
                                    <a class="collapsed" data-bs-toggle="collapse" data-parent="#accordion"
                                       href="#collapse-amenities5">
                                        <h3 class="panel-title"><span style="color: red;">Module 4:</span>Read
                                            Customer Body language
                                        </h3>
                                    </a>
                                </div>
                                <div id="collapse-amenities5" class="panel-collapse collapse">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <ul>
                                                    <li>Assess personality gestures</li>
                                                    <li>Identify voice personality</li>
                                                    <li>Disappointments and Dissatisfaction</li>
                                                    <li>How to deal with rude customer</li>
                                                    <li>Statement that helps you to deal with difficult customers
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-6 mt-2">
                        <div class="panel-group" id="accordion">
                            <div class="card">
                                <div class="card-header">
                                    <a class="collapsed" data-bs-toggle="collapse" data-parent="#accordion"
                                       href="#collapse-amenities6">
                                        <h3 class="panel-title"><span style="color: red;">Module 5:</span>Modern
                                            written communication skills
                                        </h3>
                                    </a>
                                </div>
                                <div id="collapse-amenities6" class="panel-collapse collapse">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <ul>
                                                    <li>Email etiquettes</li>
                                                    <li>Types of responses</li>
                                                    <li>Chat scripts</li>
                                                    <li>Customer services phrase to use</li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-6 mt-2">
                        <div class="panel-group" id="accordion">
                            <div class="card">
                                <div class="card-header">
                                    <a class="collapsed" data-bs-toggle="collapse" data-parent="#accordion"
                                       href="#collapse-amenities7">
                                        <h3 class="panel-title"><span style="color: red;">Module 6:</span>
                                            Work Effectively as a Customer Services/ Sales Environment
                                        </h3>
                                    </a>
                                </div>
                                <div id="collapse-amenities7" class="panel-collapse collapse">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <ul>
                                                    <li>Finding new customers and clients</li>
                                                    <li>Identify the customer needs</li>
                                                    <li>Planning for initial contacts</li>
                                                    <li>Convert potential lead into client</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-6 mt-2">
                        <div class="panel-group" id="accordion">
                            <div class="card">
                                <div class="card-header">
                                    <a class="collapsed" data-bs-toggle="collapse" data-parent="#accordion"
                                       href="#collapse-amenities8">
                                        <h3 class="panel-title"><span style="color: red;">Module 7:</span>
                                            Team Building Skills
                                        </h3>
                                    </a>
                                </div>
                                <div id="collapse-amenities8" class="panel-collapse collapse">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <ul>
                                                    <li>Vertical and horizontal communication</li>
                                                    <li>Team work</li>
                                                    <li>Problem solving</li>
                                                    <li>Leadership</li>
                                                    <li>SWOT Analysis</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-2">
                        <div class="panel-group" id="accordion">
                            <div class="card">
                                <div class="card-header">
                                    <a class="collapsed" data-bs-toggle="collapse" data-parent="#accordion"
                                       href="#collapse-amenities9">
                                        <h3 class="panel-title"><span style="color: red;">Module 8:</span>
                                            Call Centre
                                        </h3>
                                    </a>
                                </div>
                                <div id="collapse-amenities9" class="panel-collapse collapse">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <ul>
                                                    <li>Introduction to call center</li>
                                                    <li>How it measures the performance</li>
                                                    <li>Typical role in Call center</li>
                                                    <li>Organizational structure</li>
                                                    <li>Purpose and responsibility of Call Centre Agent</li>
                                                    <li>Skill required for Call Centre Agent
                                                        <ul>
                                                            <li>Administration skill</li>
                                                            <li>Soft skill</li>
                                                            <li>Technical skill</li>
                                                            <li>Call center mock call scripts</li>
                                                        </ul>
                                                    </li>
                                                    <li>Types of responses</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-6 mt-2">
                        <div class="panel-group" id="accordion">
                            <div class="card">
                                <div class="card-header">
                                    <a class="collapsed" data-bs-toggle="collapse" data-parent="#accordion"
                                       href="#collapse-amenities10">
                                        <h3 class="panel-title"><span style="color: red;">Module 9:</span>
                                            Office Management
                                        </h3>
                                    </a>
                                </div>
                                <div id="collapse-amenities10" class="panel-collapse collapse">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <ul>
                                                    <li>MIS Reporting</li>
                                                    <li>File and record management</li>
                                                    <li>Coordinating skills</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-2">
                        <div class="panel-group" id="accordion">
                            <div class="card">
                                <div class="card-header">
                                    <a class="collapsed" data-bs-toggle="collapse" data-parent="#accordion"
                                       href="#collapse-amenities11">
                                        <h3 class="panel-title"><span style="color: red;">Module 10:</span>
                                           Develop Competencies in Social Media for Customer Services
                                        </h3>
                                    </a>
                                </div>
                                <div id="collapse-amenities11" class="panel-collapse collapse">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <ul>
                                                    <li>LinkedIn</li>
                                                    <li>Social Media</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- modal box Lead Form start  -->
    <!-- Modal -->
    <div class="modal fade" id="Lead-form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="register_form">
                        <img src="img/Yourexcel-img/excel-logo-new.png" class="Logo" alt="">
                        <h3 style="text-align: lef;">Enquire Now</h3>
                        <p style="text-align: lef;">Our representative will contact you!</p>
                        <form class="form_area" action="{{url('nomanform')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 form_group">
                                    <input name="name" placeholder="Your Name" required="" type="text">
                                    <input name="phone" id="phone" placeholder="Phone No" required="" type="tel">
                                    <!-- <input name="datetime" placeholder="Date & Time" required="" type="datetime-local"> -->
                                    <input name="email" placeholder="Your Email Address"
                                           pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" required=""
                                           type="email">
                                    <!-- <input name="coursesintrested" placeholder="Course You are Intrested In " required=""
                                        type="text"> -->
                                    <!-- <input type="search" placeholder="Type of Courses"> -->
                                    <select class="selectpicker" name="coursesintrested" id="coursesintrested" multiple
                                            aria-label="Default select example" data-live-search="true"
                                            placeholder="Choose from dropdown list">
                                        <!-- <option value="Choose from dropdown list" selected readonly>Choose from dropdown list</option> -->
                                        <option value="Financial Modeling and Analysis">Financial Modeling and
                                            Analysis
                                        </option>
                                        <option value="Dashboard Reporting and Analysis with Power BI">Dashboard
                                            Reporting and Analysis with Power BI
                                        </option>
                                        <option
                                            value="Advanced MS Excel: Business Intelligence with Data Visualization">
                                            Advanced MS Excel: Business Intelligence with Data Visualization
                                        </option>
                                        <option value="Data Analytics with Tableau">Data Analytics with Tableau</option>
                                        <option value="Computerized Accounting (Peachtree; Quick books)">Computerized
                                            Accounting (Peachtree; Quick books)
                                        </option>
                                        <option value="Financial Accounting">Financial Accounting</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    <input name="comments" placeholder="Comments (optional) " required="" type="text">
                                    <div class="captcha">
                                        <div class="spinner">
                                            <label>
                                                <input type="checkbox" onclick="$(this).attr('disabled','disabled');"
                                                       required>
                                                <span class="checkmark"><span>&nbsp;</span></span>
                                            </label>
                                        </div>
                                        <div class="text1">
                                            I'm not a robot
                                        </div>
                                        <div class="logo">
                                            <img src="img/Yourexcel-img/captcha.PNG"/>
                                            <p>reCAPTCHA</p>
                                            <!-- <small>Privacy - Terms</small> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <button type="submit" id="submit" class="primary-btn">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal box Lead Form start  -->
    <section id="trainer">
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-12 text-center">
                    <h2>TRAINER PROFILE</h2>
                </div>
            </div>
            <div class="row padding-top-sectio">
                <div class="col-lg-5 mt-5 mb-5">
                    <h2>Muhammad Basit Rana a.k.a MBR HR Walay</h2>
                    <h4>
                        Customer Services Specialist
                        <br>
                    </h4>
                    <p class="designation">
                        Lead Effective Trainer, Communion Sciences Expert and Career Consultant
                    </p>
                    <div class="mb-4">
                        <p>
                            I, Muhammad Basit Rana (a.k.a. MBR HR WALAY), am a Founder & Ideologist at HR WALAY,
                            an HR Family, and Director at HR WALAY Institute (SMC-Pvt) Ltd. I am a Business Ally
                            whose focus is to drive best-of-class as well as considerable learning regime among
                            the society and play an influential role in bringing positive change in people's
                            lives throughout my professional life of 26 years.
                        </p>
                    </div>
                    <div id="duration">
                        <a href="Basit-Rana" class="btn btn-outline-primary">View More</a>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6 mt-5 mb-5 text-center">
                    <div class="image-wrapperrr">
                        <img class="images1" style="height: 438px;width: 524px"
                             src="img/Yourexcel-img/basit_rana.png"/>
                    </div>
                    <div id="Pre-requisite"></div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>DURATION</h2>
                </div>
            </div>
            <div id="Value-added-Services"></div>

            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4 mt-3 text-center">
                    <td>48 Hours</td>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>PRE-REQUISITE</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4 text-center">
                    <!-- <table class="table table-bordered">
                        <tbody>
                            <tr> -->
                    <td>Anyone can join</td>
                    <!-- </tr>
                </tbody>
            </table> -->
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>VALUE ADDED SERVICES</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <ul>
                        <li>Experienced professional trainers with practical field exposure</li>
                        <li>100% job and business oriented training</li>
                        <li>Certificate of completion recognized from Trade Testing Board, Government of Pakistan</li>
                        <li>Claim Continuing Professional Development (CPD) hours for the training</li>
                        <li>Video recorded session with personalized Learning Management System (LMS) access login id
                        </li>
                        <div id="Career-paths"></div>

                        <li>Lifetime access to exclusive YouExcel alumni via WhatsApp and Facebook groups</li>
                        <li>Fully equipped training center venue for on-campus trainings readily available with laptops,
                            projectors and air-conditioning
                        </li>
                        <li>Virtual training facility available</li>
                        <li>Guest speaker sessions for latest market insights from business leaders</li>
                    </ul>
                </div>
            </div>
            <div></div>
        </div>
    </section>


    <section>
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>CAREER-PATHS</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <ul>
                        <li>Customer Services Officer</li>
                        <li>Tele Sales Representative</li>
                        <li>Front Desk Officer</li>
                        <div id="Registation-form"></div>
                        <li>Call Center Agent / Superviso</li>
                        <li>Sales Officer</li>
                        <li>Office Assistant</li>
                    </ul>
                </div>
            </div>
            <div></div>
        </div>
    </section>

    <section>
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>REGISTRATION FORM</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <div class="col-lg-12 text-center">
                        <a class="btn btn-lmslogin mb-4 btn-lg" href="Registration-Form/Customer-Services-Specialist">Click
                            here to Register
                            Online </a>
                    </div>
                    <!-- button hover  -->
                    <!-- <div class="center">
                       <a href=""> <button class="hover-btn">
                            <svg width="100%" height="100%" viewBox="0 0 180 60" class="border">
                                <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
                                <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
                            </svg>
                            <span>HOVER ME</span>
                        </button></a>
                    </div> -->
                    <!-- button hover  -->

                </div>
            </div>
        </div>
    </section>

    <!--================ Start Registration Area =================-->
    <!-- <div class="section_gap registration_area" id="Registation-form">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="row clock_sec clockdiv" id="clockdiv">
                        <div class="col-lg-12">
                            <h1 class="mb-3">Register Now</h1>
                            <p>
                                There is a moment in the life of any aspiring astronomer that it is time to buy that first
                                telescope. It’s exciting to think about setting up your own viewing station.
                            </p>
                        </div>
                        <div class="ml-3">
                            <a href="Registration-Form" class="btn btn-lg w-100 btn-view-courses">REGISTRATION FORM</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> -->
    <!--================ End Registration Area =================-->
@endsection
<!-- ====================== End CEO Area ======================== -->
