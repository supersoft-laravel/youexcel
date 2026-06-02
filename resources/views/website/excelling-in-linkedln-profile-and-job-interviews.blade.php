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
                                Excelling in LINKEDIN profile and Job Interviews
                                <div>
                                    {{--                                    <a type="button" data-toggle="modal" data-target="#financeModal"><i--}}
                                    {{--                                            class="fa fa-play-circle" aria-hidden="true" style="color: #fff"></i></a>--}}
                                    <!-- <a href="video-demo-financial-modeling" target="_blank"><i class="fa fa-play-circle" aria-hidden="true" style="color: #fff"></i></a> -->
                                </div>
                                {{--                                <div>--}}
                                {{--                                    <a href="#" data-toggle="modal" data-target="#financeModal"><h5--}}
                                {{--                                            style="color: #fff; text-decoration:underline;">View video demo</h5></a>--}}
                                <!-- <a href="video-demo-financial-modeling" target="_blank"><h5 style="color: #fff; text-decoration:underline;">View video demo</h5></a> -->
                                {{--                                </div>--}}
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
                                        <h1 class="mb-3">Excelling in Linkedln profile and Job Interviews</span></h1>
                                        {{--                                        <iframe class="youtube-video" src="https://www.youtube.com/embed/SM6wH6DKLiQ"--}}
                                        {{--                                                title="YouTube video player" frameborder="0"--}}
                                        {{--                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"--}}
                                        {{--                                                allowfullscreen></iframe>--}}
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
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#course-outline">Course Outline</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#trainer">Trainer Profile</a>--}}
{{--                </li>--}}
                <li class="nav-item">
                    <a class="nav-link" href="#duration">Duration</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Pre-requisite">Pre-Requisite</a>
                </li>
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#Value-added-Services">Value-added Services</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#Career-paths">Career Paths</a>--}}
{{--                </li>--}}
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
                    <p>This workshop will provide information about interviewing techniques & LinkedIn profiles to
                        impress a potential employer. Learners will understand the different modern types of interviews,
                        that employers use in online or physical interviews. Learners will be able to prepare for
                        questions that may be asked and also use the STAR approach to answer competency-based questions.
                        Also, there are many tips and tricks to excel at LinkedIn which the workshop will cover through
                        personalized training to create profiles and power up your career opportunities.

                    </p>
                </div>
                <div class="col-lg-12">
                    <div class="card p-4">
                        <h4>WHAT YOU WILL LEARN</h4>
                        <div class="row mt-4">
                            <div class="col-lg-6">
                                <ul style="display: flex;">
                                    <span><i class="fas fa-check" aria-hidden="true"></i></span>&emsp; <p
                                        style="font-size: 17px;"> What to expect at an interview?
                                    </p>
                                </ul>
                            </div>
                            <div class="col-lg-6" id="course-outline">
                                <ul style="display: flex;">
                                    <span><i class="fas fa-check" aria-hidden="true"></i></span>&emsp; <p
                                        style="font-size: 17px;"> How to plan a career move with interviews?
                                    </p>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul style="display: flex;">
                                    <span><i class="fas fa-check" aria-hidden="true"></i></span>&emsp; <p
                                        style="font-size: 17px;"> A practice interview with an industry expert.
                                        </p>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul style="display: flex;">
                                    <span><i class="fas fa-check" aria-hidden="true"></i></span>&emsp; <p
                                        style="font-size: 17px;">Constructive feedback on how to improve your employability skillset.</p>
                                </ul>
                            </div>


                            <div class="col-lg-6">
                                <ul style="display: flex;">
                                    <span><i class="fas fa-check" aria-hidden="true"></i></span>&emsp; <p
                                        style="font-size: 17px;">Interview concepts and their purposes.
                                    </p>
                                </ul>
                            </div>

                            <div class="col-lg-6">
                                <ul style="display: flex;">
                                    <span><i class="fas fa-check" aria-hidden="true"></i></span>&emsp; <p
                                        style="font-size: 17px;">How to give an online interview via Zoom or any other application
                                    </p>
                                </ul>
                            </div>

                            <div class="col-lg-6">
                                <ul style="display: flex;">
                                    <span><i class="fas fa-check" aria-hidden="true"></i></span>&emsp; <p
                                        style="font-size: 17px;">Get hired at your dream job.
                                    </p>
                                </ul>
                            </div>

                            <div class="col-lg-6">
                                <ul style="display: flex;">
                                    <span><i class="fas fa-check" aria-hidden="true"></i></span>&emsp; <p
                                        style="font-size: 17px;">Dress to Impress and win your next career opportunity.
                                    </p>
                                </ul>
                            </div>

                            <div class="col-lg-6">
                                <ul style="display: flex;">
                                    <span><i class="fas fa-check" aria-hidden="true"></i></span>&emsp; <p
                                        style="font-size: 17px;">Learn why LinkedIn has become an essential platform for career opportunities

                                    </p>
                                </ul>
                            </div>

                            <div class="col-lg-6">
                                <ul style="display: flex;">
                                    <span><i class="fas fa-check" aria-hidden="true"></i></span>&emsp; <p
                                        style="font-size: 17px;">Gain a foundation on how to create and optimize LinkedIn Profile


                                    </p>
                                </ul>
                            </div>

                            <div class="col-lg-6">
                                <ul style="display: flex;">
                                    <span><i class="fas fa-check" aria-hidden="true"></i></span>&emsp; <p
                                        style="font-size: 17px;">How to close an interview for lasting positive impressions?


                                    </p>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

{{--    <section class="mt-5">--}}
{{--        <div class="container">--}}
{{--            <div class="row mb-5">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <h2 class="mt-5">COURSE OUTLINE:</h2>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-lg-6 mt-3">--}}
{{--                            <div class="card">--}}
{{--                                <div class="card-header">--}}
{{--                                    <h3><span style="color: red;">CFMA</span> Fundamental Level </h3>--}}
{{--                                </div>--}}
{{--                                <div class="card-body">--}}
{{--                                    <div class="panel-group" id="accordion">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-lg-12">--}}
{{--                                                <div class="bg-black">--}}
{{--                                                    <div class="panel-heading">--}}
{{--                                                        <a class="collapsed" data-bs-toggle="collapse"--}}
{{--                                                           data-parent="#accordion"--}}
{{--                                                           href="#collapse-amenities1">--}}
{{--                                                            <h5 class="panel-title">--}}
{{--                                                                <div class="row">--}}
{{--                                                                    <div class="col-lg-3">--}}
{{--                                                                        <span class="f-white">Chapter 1</span>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="col-lg-9">--}}
{{--                                                                        <p class="paragraph-collapse">Excel Basics</p>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </h5>--}}
{{--                                                        </a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div id="collapse-amenities1" class="panel-collapse collapse">--}}
{{--                                                    <div class="panel-body">--}}
{{--                                                        <!-- child parent start 1 -->--}}
{{--                                                        <div class="panel-heading">--}}
{{--                                                            <a class="collapsed" data-bs-toggle="collapse"--}}
{{--                                                               data-parent="#accordion" href="#colapse-1">--}}
{{--                                                                <h5 class="panel-title">1.1 Spreadsheet Essentials</h5>--}}
{{--                                                            </a>--}}
{{--                                                        </div>--}}
{{--                                                        <div id="colapse-1" class="collapse">--}}
{{--                                                            <ul>--}}
{{--                                                                <li>Inserting Text, Numbers and formulas</li>--}}
{{--                                                                <li>Data types, Cell references and ranges</li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- child parent End 1 -->--}}

{{--                                                        <!-- child parent start 2 -->--}}
{{--                                                        <a class="collapsed hide" data-bs-toggle="collapse"--}}
{{--                                                           data-parent="#accordion" href="#colapse-2">--}}
{{--                                                            <h5 class="panel-title">1.2 Apply Basic Functions</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <div id="colapse-2" class="collapse">--}}
{{--                                                            <ul>--}}
{{--                                                                <li>Sum(), Average(), Count(), Max(), Min(), Today(),--}}
{{--                                                                    Now()--}}
{{--                                                                </li>--}}
{{--                                                                <li>Common mistakes in data handlings</li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- child parent End 2 -->--}}

{{--                                                        <!-- child parent start 3 -->--}}
{{--                                                        <a class="collapsed" data-bs-toggle="collapse"--}}
{{--                                                           data-parent="#accordion"--}}
{{--                                                           href="#colapse-3">--}}
{{--                                                            <h5 class="panel-title">1.3 Basic Formattings</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <div id="colapse-3" class="collapse">--}}
{{--                                                            <ul>--}}
{{--                                                                <li>Basic formattings, styles and tables</li>--}}
{{--                                                                <li>Password protection, Locked and Hidden</li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- child parent End 3 -->--}}

{{--                                                        <!-- child parent start 4 -->--}}
{{--                                                        <a class="collapsed" data-bs-toggle="collapse"--}}
{{--                                                           data-parent="#accordion"--}}
{{--                                                           href="#colapse-4">--}}
{{--                                                            <h5 class="panel-title">1.4 Conditional Formattings</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <div id="colapse-4" class="collapse">--}}
{{--                                                            <ul>--}}
{{--                                                                <li>Apply basic calculations sales report</li>--}}
{{--                                                                <li>Highlight values with conditional formattings</li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- child parent End 4 -->--}}
{{--                                                        <!-- child parent start 5 -->--}}
{{--                                                        <a class="collapsed" data-bs-toggle="collapse"--}}
{{--                                                           data-parent="#accordion"--}}
{{--                                                           href="#colapse-5">--}}
{{--                                                            <h5 class="panel-title">1.5 Basic Charts</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <div id="colapse-5" class="collapse">--}}
{{--                                                            <ul>--}}
{{--                                                                <li>Insert Column, Pie, Line and Bar charts</li>--}}
{{--                                                                <li>Change data sources and format charts</li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- child parent End 5 -->--}}

{{--                                                        <!-- child parent start 6 -->--}}
{{--                                                        <a class="collapsed" data-bs-toggle="collapse"--}}
{{--                                                           data-parent="#accordion"--}}
{{--                                                           href="#colapse-6">--}}
{{--                                                            <h5 class="panel-title">1.6 Data Tools</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <div id="colapse-6" class="collapse">--}}
{{--                                                            <ul>--}}
{{--                                                                <li>Data Filter, Sort and Subtotals</li>--}}
{{--                                                                <li>Advance filter with multiple criteria</li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- child parent End 6 -->--}}

{{--                                                        <!-- child parent start 7 -->--}}
{{--                                                        <a class="collapsed" data-bs-toggle="collapse"--}}
{{--                                                           data-parent="#accordion"--}}
{{--                                                           href="#colapse-7">--}}
{{--                                                            <h5 class="panel-title">1.7 Go To Special</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <div id="colapse-7" class="collapse">--}}
{{--                                                            <ul>--}}
{{--                                                                <li>Constants, Formulas, Blanks</li>--}}
{{--                                                                <li>Paste formattings with visible cells only</li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- child parent End 7 -->--}}

{{--                                                        <!-- child parent start 8 -->--}}
{{--                                                        <a class="collapsed" data-bs-toggle="collapse"--}}
{{--                                                           data-parent="#accordion"--}}
{{--                                                           href="#colapse-8">--}}
{{--                                                            <h5 class="panel-title">1.8 Project timeline</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <div id="colapse-8" class="collapse">--}}
{{--                                                            <ul>--}}
{{--                                                                <li>Durations, task completed and required days</li>--}}
{{--                                                                <li>Stacked Bar Chart</li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- child parent End 8 -->--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="col-lg-12">--}}
{{--                                                <div class="bg-black">--}}
{{--                                                    <div class="panel-heading">--}}
{{--                                                        <a class="collapsed" data-bs-toggle="collapse"--}}
{{--                                                           data-parent="#accordion"--}}
{{--                                                           href="#collapse-amenities2">--}}
{{--                                                            <h5 class="panel-title">--}}
{{--                                                                <div class="row">--}}
{{--                                                                    <div class="col-lg-3">--}}
{{--                                                                        <span class="f-white">Chapter 2</span>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="col-lg-9">--}}
{{--                                                                        <p class="paragraph-collapse">Employee--}}
{{--                                                                            Performance--}}
{{--                                                                            Evaluation</p>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </h5>--}}
{{--                                                        </a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div id="collapse-amenities2" class="panel-collapse collapse">--}}
{{--                                                    <div class="panel-body">--}}
{{--                                                        <!-- child parent start 1 -->--}}
{{--                                                        <div class="panel-heading">--}}
{{--                                                            <a class="collapsed" data-bs-toggle="collapse"--}}
{{--                                                               data-parent="#accordion" href="#colapse-a1">--}}
{{--                                                                <h5 class="panel-title">2.1 Create references</h5>--}}
{{--                                                            </a>--}}
{{--                                                        </div>--}}
{{--                                                        <div id="colapse-a1" class="collapse">--}}
{{--                                                            <ul>--}}
{{--                                                                <li>Relative and Absolute references</li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- child parent End 1 -->--}}

{{--                                                        <!-- child parent start 2 -->--}}
{{--                                                        <a class="collapsed hide" data-bs-toggle="collapse"--}}
{{--                                                           data-parent="#accordion" href="#colapse-a2">--}}
{{--                                                            <h5 class="panel-title">2.2 Apply simple conditions</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <div id="colapse-a2" class="collapse">--}}
{{--                                                            <ul>--}}
{{--                                                                <li>If() and Countif() functions</li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- child parent End 2 -->--}}

{{--                                                        <!-- child parent start 3 -->--}}
{{--                                                        <a class="collapsed" data-bs-toggle="collapse"--}}
{{--                                                           data-parent="#accordion"--}}
{{--                                                           href="#colapse-a3">--}}
{{--                                                            <h5 class="panel-title">2.3 Apply multiple conditions</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <div id="colapse-a3" class="collapse">--}}
{{--                                                            <ul>--}}
{{--                                                                <li>Nested if() based on false</li>--}}
{{--                                                                <li>Calculate performance level, position and remarks--}}
{{--                                                                </li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- child parent End 3 -->--}}

{{--                                                        <!-- child parent start 4 -->--}}
{{--                                                        <a class="collapsed" data-bs-toggle="collapse"--}}
{{--                                                           data-parent="#accordion"--}}
{{--                                                           href="#colapse-a4">--}}
{{--                                                            <h5 class="panel-title">2.4 Calculate Positions</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <div id="colapse-a4" class="collapse">--}}
{{--                                                            <ul>--}}
{{--                                                                <li>Apply rank.eq() function</li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- child parent End 4 -->--}}
{{--                                                        <!-- child parent start 5 -->--}}
{{--                                                        <a class="collapsed" data-bs-toggle="collapse"--}}
{{--                                                           data-parent="#accordion"--}}
{{--                                                           href="#colapse-a5">--}}
{{--                                                            <h5 class="panel-title">2.5 Data validation</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <div id="colapse-a5" class="collapse">--}}
{{--                                                            <ul>--}}
{{--                                                                <li>Restrict user's inputs</li>--}}
{{--                                                                <li>Employee codes dynamic list range</li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- child parent End 5 -->--}}

{{--                                                        <!-- child parent start 6 -->--}}
{{--                                                        <a class="collapsed" data-bs-toggle="collapse"--}}
{{--                                                           data-parent="#accordion"--}}
{{--                                                           href="#colapse-a6">--}}
{{--                                                            <h5 class="panel-title">2.6 Dynamic Report</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <div id="colapse-a6" class="collapse">--}}
{{--                                                            <ul>--}}
{{--                                                                <li>Vlookup() and Hlookup() criteria, ranges, output--}}
{{--                                                                    column--}}
{{--                                                                </li>--}}
{{--                                                                <li>Row() function for dynamic column outputs</li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- child parent End 6 -->--}}

{{--                                                        <!-- child parent start 7 -->--}}
{{--                                                        <a class="collapsed" data-bs-toggle="collapse"--}}
{{--                                                           data-parent="#accordion"--}}
{{--                                                           href="#colapse-a7">--}}
{{--                                                            <h5 class="panel-title">2.7 Conditional formattings</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <div id="colapse-a7" class="collapse">--}}
{{--                                                            <ul>--}}
{{--                                                                <li>Format specific text, rules applied in order</li>--}}
{{--                                                                <li>Symbolic representation Rept() function</li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- child parent End 7 -->--}}

{{--                                                        <!-- child parent start 8 -->--}}
{{--                                                        <a class="collapsed" data-bs-toggle="collapse"--}}
{{--                                                           data-parent="#accordion"--}}
{{--                                                           href="#colapse-a8">--}}
{{--                                                            <h5 class="panel-title">2.8 Department statistics</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <div id="colapse-a8" class="collapse">--}}
{{--                                                            <ul>--}}
{{--                                                                <li>Vlookup() constraint</li>--}}
{{--                                                                <li>Replace Vlookup() with Index() and Match()</li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- child parent End 8 -->--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="col-lg-12">--}}
{{--                                                <div class="bg-black">--}}
{{--                                                    <div class="panel-heading">--}}
{{--                                                        <a class="collapsed" data-bs-toggle="collapse"--}}
{{--                                                           data-parent="#accordion"--}}
{{--                                                           href="#collapse-amenities3">--}}
{{--                                                            <h5 class="panel-title">--}}
{{--                                                                <div class="row">--}}
{{--                                                                    <div class="col-lg-3">--}}
{{--                                                                        <span class="f-white">Chapter 3</span>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="col-lg-9">--}}
{{--                                                                        <p class="paragraph-collapse">Accounting Model--}}
{{--                                                                            and--}}
{{--                                                                            Data Visualization</p>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </h5>--}}
{{--                                                        </a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div id="collapse-amenities3" class="panel-collapse collapse">--}}
{{--                                                    <div class="panel-body">--}}
{{--                                                        <!-- child parent start 1 -->--}}
{{--                                                        <div class="panel-heading">--}}
{{--                                                            <a class="collapsed" data-bs-toggle="collapse"--}}
{{--                                                               data-parent="#accordion" href="#colapse-b1">--}}
{{--                                                                <h5 class="panel-title">3.1 Understand Data</h5>--}}
{{--                                                            </a>--}}
{{--                                                        </div>--}}
{{--                                                        <div id="colapse-b1" class="collapse">--}}
{{--                                                            <ul>--}}
{{--                                                                <li>Databases and records</li>--}}
{{--                                                                <li>User input interface and data structures</li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- child parent End 1 -->--}}

{{--                                                        <!-- child parent start 2 -->--}}
{{--                                                        <a class="collapsed hide" data-bs-toggle="collapse"--}}
{{--                                                           data-parent="#accordion" href="#colapse-b2">--}}
{{--                                                            <h5 class="panel-title">3.2 Create a Trail Balance</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <div id="colapse-b2" class="collapse">--}}
{{--                                                            <ul>--}}
{{--                                                                <li>Link with Accounts, Sales and Purchases Data</li>--}}
{{--                                                                <li>Using functions Sumifs(), Vlookup()</li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- child parent End 2 -->--}}

{{--                                                        <!-- child parent start 3 -->--}}
{{--                                                        <a class="collapsed" data-bs-toggle="collapse"--}}
{{--                                                           data-parent="#accordion"--}}
{{--                                                           href="#colapse-b3">--}}
{{--                                                            <h5 class="panel-title">3.3 Prepare a stock summary</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <div id="colapse-b3" class="collapse">--}}
{{--                                                            <ul>--}}
{{--                                                                <li>Link with Purchase and Sale Registers</li>--}}
{{--                                                                <li>Closing Stock Value, Cost of Goods Sold</li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- child parent End 3 -->--}}

{{--                                                        <!-- child parent start 4 -->--}}
{{--                                                        <a class="collapsed" data-bs-toggle="collapse"--}}
{{--                                                           data-parent="#accordion"--}}
{{--                                                           href="#colapse-b4">--}}
{{--                                                            <h5 class="panel-title">3.4 Orders and Transactions</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <div id="colapse-b4" class="collapse">--}}
{{--                                                            <ul>--}}
{{--                                                                <li>Link Purchase and Sale Orders with Transactions</li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- child parent End 4 -->--}}
{{--                                                        <!-- child parent start 5 -->--}}
{{--                                                        <a class="collapsed" data-bs-toggle="collapse"--}}
{{--                                                           data-parent="#accordion"--}}
{{--                                                           href="#colapse-b5">--}}
{{--                                                            <h5 class="panel-title">3.5 Top 5 Balances</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <div id="colapse-b5" class="collapse">--}}
{{--                                                            <ul>--}}
{{--                                                                <li>Rank out Stock Balances using Rank.eq()</li>--}}
{{--                                                                <li>Rank out Receivables and Payables</li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- child parent End 5 -->--}}

{{--                                                        <!-- child parent start 6 -->--}}
{{--                                                        <a class="collapsed" data-bs-toggle="collapse"--}}
{{--                                                           data-parent="#accordion"--}}
{{--                                                           href="#colapse-b6">--}}
{{--                                                            <h5 class="panel-title">3.6 Summary for Dashboard</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <div id="colapse-b6" class="collapse">--}}
{{--                                                            <ul>--}}
{{--                                                                <li>Create Summaries of Stocks. Debtor, funds position--}}
{{--                                                                </li>--}}
{{--                                                                <li>Additonal function iferror()</li>--}}
{{--                                                                <li>Developer tool scroll bar</li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- child parent End 6 -->--}}

{{--                                                        <!-- child parent start 7 -->--}}
{{--                                                        <a class="collapsed" data-bs-toggle="collapse"--}}
{{--                                                           data-parent="#accordion"--}}
{{--                                                           href="#colapse-b7">--}}
{{--                                                            <h5 class="panel-title">3.7 Create a Dashboard</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <div id="colapse-b7" class="collapse">--}}
{{--                                                            <ul>--}}
{{--                                                                <li>Insert Charts, Shapes and Pictures</li>--}}
{{--                                                                <li>Camera Option, grouping objects</li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- child parent End 7 -->--}}

{{--                                                        <!-- child parent start 8 -->--}}
{{--                                                        <a class="collapsed">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">3.8 Navigation Tabs</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 8 -->--}}

{{--                                                        <!-- child parent start 9 -->--}}
{{--                                                        <a class="collapsed">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">3.9 Dynamic Sales--}}
{{--                                                                Invoice</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 9 -->--}}

{{--                                                        <!-- child parent start 10 -->--}}
{{--                                                        <a class="collapsed" data-bs-toggle="collapse"--}}
{{--                                                           data-parent="#accordion"--}}
{{--                                                           href="#colapse-b10">--}}
{{--                                                            <h5 class="panel-title">3.10 Maturity Statements</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <div id="colapse-b10" class="collapse">--}}
{{--                                                            <ul>--}}
{{--                                                                <li>Debtor Analysis</li>--}}
{{--                                                                <li>Creditor Analysis</li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- child parent End 10 -->--}}

{{--                                                        <!-- child parent start 11 -->--}}
{{--                                                        <a class="collapsed" data-bs-toggle="collapse"--}}
{{--                                                           data-parent="#accordion"--}}
{{--                                                           href="#colapse-b11">--}}
{{--                                                            <h5 class="panel-title">3.11 Impact on Cash Flows</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <div id="colapse-b11" class="collapse">--}}
{{--                                                            <ul>--}}
{{--                                                                <li>Calculate Debtors and Creditors impact on Cash Flows--}}
{{--                                                                </li>--}}
{{--                                                                <li>Link with Debtor and Creditor Analysis</li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- child parent End 11 -->--}}

{{--                                                        <!-- child parent start 12 -->--}}
{{--                                                        <a class="collapsed" data-bs-toggle="collapse"--}}
{{--                                                           data-parent="#accordion"--}}
{{--                                                           href="#colapse-b12">--}}
{{--                                                            <h5 class="panel-title">3.12 Financial Statements</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <div id="colapse-b12" class="collapse">--}}
{{--                                                            <ul>--}}
{{--                                                                <li>Statement of Financial position, and Profit or--}}
{{--                                                                    Loss--}}
{{--                                                                </li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- child parent End 12 -->--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="col-lg-12">--}}
{{--                                                <div class="bg-black">--}}
{{--                                                    <div class="panel-heading">--}}
{{--                                                        <a class="collapsed" data-bs-toggle="collapse"--}}
{{--                                                           data-parent="#accordion"--}}
{{--                                                           href="#collapse-amenities4">--}}
{{--                                                            <h5 class="panel-title">--}}
{{--                                                                <div class="row">--}}
{{--                                                                    <div class="col-lg-3">--}}
{{--                                                                        <span class="f-white">Chapter 4</span>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="col-lg-9">--}}
{{--                                                                        <p class="paragraph-collapse">Dashboards</p>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </h5>--}}
{{--                                                        </a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div id="collapse-amenities4" class="panel-collapse collapse">--}}
{{--                                                    <div class="panel-body">--}}
{{--                                                        <!-- child parent start 1 -->--}}
{{--                                                        <div class="panel-heading">--}}
{{--                                                            <a class="collapsed">--}}
{{--                                                                <h5 class="panel-title1 mt-3 mb-0">4.1 Dashboard--}}
{{--                                                                    Prerequisites</h5>--}}
{{--                                                            </a>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- child parent End 1 -->--}}

{{--                                                        <!-- child parent start 2 -->--}}
{{--                                                        <a class="collapsed hide" data-bs-toggle="collapse"--}}
{{--                                                           data-parent="#accordion" href="#colapse-c2">--}}
{{--                                                            <h5 class="panel-title">4.2 Pivot Tables</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <div id="colapse-c2" class="collapse">--}}
{{--                                                            <ul>--}}
{{--                                                                <li>Insert a Pivot Table and create different--}}
{{--                                                                    summaries--}}
{{--                                                                </li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- child parent End 2 -->--}}

{{--                                                        <!-- child parent start 3 -->--}}
{{--                                                        <a class="collapsed" data-bs-toggle="collapse"--}}
{{--                                                           data-parent="#accordion"--}}
{{--                                                           href="#colapse-c3">--}}
{{--                                                            <h5 class="panel-title">4.3 Pivot Charts</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <div id="colapse-c3" class="collapse">--}}
{{--                                                            <ul>--}}
{{--                                                                <li>Insert a Pivot Charts</li>--}}
{{--                                                                <li>Chart formatting tools</li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- child parent End 3 -->--}}

{{--                                                        <!-- child parent start 4 -->--}}
{{--                                                        <a class="collapsed">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">4.4 Slicers and report--}}
{{--                                                                connections</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 4 -->--}}
{{--                                                        <!-- child parent start 5 -->--}}
{{--                                                        <a class="collapsed" data-bs-toggle="collapse"--}}
{{--                                                           data-parent="#accordion"--}}
{{--                                                           href="#colapse-c5">--}}
{{--                                                            <h5 class="panel-title">4.5 Insert Table</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <div id="colapse-c5" class="collapse">--}}
{{--                                                            <ul>--}}
{{--                                                                <li>Insert table and insert pivot table</li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- child parent End 5 -->--}}

{{--                                                        <!-- child parent start 6 -->--}}
{{--                                                        <a class="collapsed" data-bs-toggle="collapse"--}}
{{--                                                           data-parent="#accordion"--}}
{{--                                                           href="#colapse-c6">--}}
{{--                                                            <h5 class="panel-title">4.6 Combo Chart</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <div id="colapse-c6" class="collapse">--}}
{{--                                                            <ul>--}}
{{--                                                                <li>Insert combo chart with secondary axis</li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- child parent End 6 -->--}}

{{--                                                        <!-- child parent start 7 -->--}}
{{--                                                        <a class="collapsed" data-bs-toggle="collapse"--}}
{{--                                                           data-parent="#accordion"--}}
{{--                                                           href="#colapse-c7">--}}
{{--                                                            <h5 class="panel-title">4.7 Insert timeline</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <div id="colapse-c7" class="collapse">--}}
{{--                                                            <ul>--}}
{{--                                                                <li>Insert timeline and format it</li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- child parent End 7 -->--}}

{{--                                                        <!-- child parent start 8 -->--}}
{{--                                                        <a class="collapsed" data-bs-toggle="collapse"--}}
{{--                                                           data-parent="#accordion"--}}
{{--                                                           href="#colapse-c8">--}}
{{--                                                            <h5 class="panel-title">4.8 Sparklines</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <div id="colapse-c8" class="collapse">--}}
{{--                                                            <ul>--}}
{{--                                                                <li>Create summary for sparklines</li>--}}
{{--                                                                <li>Insert group sparklines and format it</li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- child parent End 8 -->--}}

{{--                                                        <!-- child parent start 9 -->--}}
{{--                                                        <a class="collapsed" data-bs-toggle="collapse"--}}
{{--                                                           data-parent="#accordion"--}}
{{--                                                           href="#colapse-c9">--}}
{{--                                                            <h5 class="panel-title">4.9 3D Map</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <div id="colapse-c9" class="collapse">--}}
{{--                                                            <ul>--}}
{{--                                                                <li>Insert multiple tables and add to data model</li>--}}
{{--                                                                <li>Add different layers and formattings</li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- child parent End 9 -->--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="col-lg-12">--}}
{{--                                                <div class="bg-black">--}}
{{--                                                    <div class="panel-heading">--}}
{{--                                                        <a class="collapsed" data-bs-toggle="collapse"--}}
{{--                                                           data-parent="#accordion"--}}
{{--                                                           href="#collapse-amenities5">--}}
{{--                                                            <h5 class="panel-title">--}}
{{--                                                                <div class="row">--}}
{{--                                                                    <div class="col-lg-3">--}}
{{--                                                                        <span class="f-white">Chapter 5</span>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="col-lg-9">--}}
{{--                                                                        <p class="paragraph-collapse">What if Analysis--}}
{{--                                                                            and--}}
{{--                                                                            Financial Functions</p>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </h5>--}}
{{--                                                        </a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div id="collapse-amenities5" class="panel-collapse collapse">--}}
{{--                                                    <div class="panel-body">--}}
{{--                                                        <!-- child parent start 1 -->--}}
{{--                                                        <div class="panel-heading">--}}
{{--                                                            <a class="collapsed">--}}
{{--                                                                <h5 class="panel-title1 mt-3 mb-0">5.1 Calculater for--}}
{{--                                                                    Loans - PMT() |--}}
{{--                                                                    Dynamic Amortization Table</h5>--}}
{{--                                                            </a>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- child parent End 1 -->--}}

{{--                                                        <!-- child parent start 2 -->--}}
{{--                                                        <a class="collapsed hide">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">5.2 Goal seek and--}}
{{--                                                                solver</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 2 -->--}}

{{--                                                        <!-- child parent start 3 -->--}}
{{--                                                        <a class="collapsed">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">5.3 Complex Case--}}
{{--                                                                Solver</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 3 -->--}}

{{--                                                        <!-- child parent start 4 -->--}}
{{--                                                        <a class="collapsed">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">5.4 Dynamic Data Table |--}}
{{--                                                                Conditional--}}
{{--                                                                Formatting</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 4 -->--}}
{{--                                                        <!-- child parent start 5 -->--}}
{{--                                                        <a class="collapsed">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">5.5 Future value of an--}}
{{--                                                                investment - FV()--}}
{{--                                                            </h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 5 -->--}}

{{--                                                        <!-- child parent start 6 -->--}}
{{--                                                        <a class="collapsed">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">5.6 Scenario Analysis |--}}
{{--                                                                offset(),--}}
{{--                                                                Eomonth()</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 6 -->--}}

{{--                                                        <!-- child parent start 7 -->--}}
{{--                                                        <a class="collapsed">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">5.7 PV(), NPV(), XNPV(),--}}
{{--                                                                IRR()</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 7 -->--}}

{{--                                                        <!-- child parent start 8 -->--}}
{{--                                                        <a class="collapsed">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">5.8 Scenario Manager |--}}
{{--                                                                Name Manager |--}}
{{--                                                                Scenario Summary</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 8 -->--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="col-lg-12">--}}
{{--                                                <div class="bg-black">--}}
{{--                                                    <div class="panel-heading">--}}
{{--                                                        <a class="collapsed" data-bs-toggle="collapse"--}}
{{--                                                           data-parent="#accordion"--}}
{{--                                                           href="#collapse-amenities6">--}}
{{--                                                            <h5 class="panel-title">--}}
{{--                                                                <div class="row">--}}
{{--                                                                    <div class="col-lg-3">--}}
{{--                                                                        <span class="f-white">Chapter 6</span>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="col-lg-9">--}}
{{--                                                                        <p class="paragraph-collapse">Macros</p>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </h5>--}}
{{--                                                        </a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div id="collapse-amenities6" class="panel-collapse collapse">--}}
{{--                                                    <div class="panel-body">--}}
{{--                                                        <!-- child parent start 1 -->--}}
{{--                                                        <div class="panel-heading">--}}
{{--                                                            <a class="collapsed">--}}
{{--                                                                <h5 class="panel-title1 mt-3 mb-0">6.1 Create a macro--}}
{{--                                                                    for Sales Summary--}}
{{--                                                                    - sort and subtotal</h5>--}}
{{--                                                            </a>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- child parent End 1 -->--}}

{{--                                                        <!-- child parent start 2 -->--}}
{{--                                                        <a class="collapsed hide">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">6.2 Create a macro for--}}
{{--                                                                posting records ---}}
{{--                                                                locked cell and sheet protection</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 2 -->--}}

{{--                                                        <!-- child parent start 3 -->--}}
{{--                                                        <a class="collapsed">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">6.3 Add records in--}}
{{--                                                                database - use--}}
{{--                                                                relative references</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 3 -->--}}

{{--                                                        <!-- child parent start 4 -->--}}
{{--                                                        <a class="collapsed">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">6.4 Add records in--}}
{{--                                                                database - use--}}
{{--                                                                relative references</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 4 -->--}}
{{--                                                        <!-- child parent start 5 -->--}}
{{--                                                        <a class="collapsed">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">6.5 VBA editor - lock--}}
{{--                                                                project for--}}
{{--                                                                viewing</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 5 -->--}}

{{--                                                        <!-- child parent start 6 -->--}}
{{--                                                        <a class="collapsed">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">6.6 Bulk record--}}
{{--                                                                postings</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 6 -->--}}

{{--                                                        <!-- child parent start 7 -->--}}
{{--                                                        <a class="collapsed">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">6.7 Fetch records from--}}
{{--                                                                different--}}
{{--                                                                database - Advanced filter with macro</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 7 -->--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="col-lg-12">--}}
{{--                                                <div class="bg-black">--}}
{{--                                                    <div class="panel-heading">--}}
{{--                                                        <a class="collapsed" data-bs-toggle="collapse"--}}
{{--                                                           data-parent="#accordion"--}}
{{--                                                           href="#collapse-amenities7">--}}
{{--                                                            <h5 class="panel-title">--}}
{{--                                                                <div class="row">--}}
{{--                                                                    <div class="col-lg-3">--}}
{{--                                                                        <span class="f-white">Chapter 7</span>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="col-lg-9">--}}
{{--                                                                        <p class="paragraph-collapse">Three Statement--}}
{{--                                                                            Model--}}
{{--                                                                            and Ratio Analysis</p>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </h5>--}}
{{--                                                        </a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div id="collapse-amenities7" class="panel-collapse collapse">--}}
{{--                                                    <div class="panel-body">--}}
{{--                                                        <!-- child parent start 1 -->--}}
{{--                                                        <div class="panel-heading">--}}
{{--                                                            <a class="collapsed">--}}
{{--                                                                <h5 class="panel-title1 mt-3 mb-0">7.1 Structure and--}}
{{--                                                                    layout of three--}}
{{--                                                                    statement model</h5>--}}
{{--                                                            </a>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- child parent End 1 -->--}}

{{--                                                        <!-- child parent start 2 -->--}}
{{--                                                        <a class="collapsed hide">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">7.2 Input historical--}}
{{--                                                                financial data into--}}
{{--                                                                excel</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 2 -->--}}

{{--                                                        <!-- child parent start 3 -->--}}
{{--                                                        <a class="collapsed">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">7.3 Create Income--}}
{{--                                                                statement assumptions--}}
{{--                                                            </h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 3 -->--}}

{{--                                                        <!-- child parent start 4 -->--}}
{{--                                                        <a class="collapsed">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">7.4 Create Balance sheet--}}
{{--                                                                assumptions--}}
{{--                                                            </h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 4 -->--}}
{{--                                                        <!-- child parent start 5 -->--}}
{{--                                                        <a class="collapsed">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">7.5 Forecast the income--}}
{{--                                                                statement,--}}
{{--                                                                balance sheet and Cash flows</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 5 -->--}}

{{--                                                        <!-- child parent start 6 -->--}}
{{--                                                        <a class="collapsed" data-bs-toggle="collapse"--}}
{{--                                                           data-parent="#accordion"--}}
{{--                                                           href="#colapse-f6">--}}
{{--                                                            <h5 class="panel-title">7.6 Ratio Analysis</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <div id="colapse-f6" class="collapse">--}}
{{--                                                            <ul>--}}
{{--                                                                <li>Common Size Analysis</li>--}}
{{--                                                                <li>Growth Ratios</li>--}}
{{--                                                                <li>Activity Ratios</li>--}}
{{--                                                                <li>Liquidity Ratios</li>--}}
{{--                                                                <li>Profitability Ratios</li>--}}
{{--                                                                <li>Valuation Ratios</li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- child parent End 6 -->--}}

{{--                                                        <!-- child parent start 7 -->--}}
{{--                                                        <a class="collapsed">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">6.7 Graphical--}}
{{--                                                                representation of ratios--}}
{{--                                                            </h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 7 -->--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- <div class="card-footer">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-lg-3">--}}
{{--                                            <h5>Module 1</h5>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-lg-9">--}}
{{--                                            <h5>Fundamental Level </h5>--}}
{{--                                        </div>--}}

{{--                                        <div class="col-lg-3 mt-2">--}}
{{--                                            <h5>Duration</h5>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-lg-6 mt-2">--}}
{{--                                            <h5>8 Weeks / 24 Sessions </h5>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-lg-3">--}}
{{--                                            <a href="#" class="btn btn-outline-primary" data-toggle="modal" data-target="#Lead-form">Enquire Now</a>--}}
{{--                                        </div>--}}

{{--                                        <div class="col-lg-3">--}}
{{--                                            <h5>Training Hours</h5>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-lg-9">--}}
{{--                                            <h5>24 Hours </h5>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                </div> -->--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-6 mt-3">--}}
{{--                            <div class="card">--}}
{{--                                <div class="card-header">--}}
{{--                                    <h3><span style="color: red;">CFMA</span> Professional Level </h3>--}}
{{--                                </div>--}}
{{--                                <div class="card-body">--}}
{{--                                    <div class="panel-group" id="accordion">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-lg-12">--}}
{{--                                                <div class="bg-black">--}}
{{--                                                    <div class="panel-heading">--}}
{{--                                                        <a class="collapsed" data-bs-toggle="collapse"--}}
{{--                                                           data-parent="#accordion"--}}
{{--                                                           href="#collapse-amenities11">--}}
{{--                                                            <h5 class="panel-title">--}}
{{--                                                                <div class="row">--}}
{{--                                                                    <div class="col-lg-3">--}}
{{--                                                                        <span class="f-white">Chapter 8</span>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="col-lg-9">--}}
{{--                                                                        <p class="paragraph-collapse">Feasibility Study--}}
{{--                                                                            - A--}}
{{--                                                                            New Business</p>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </h5>--}}
{{--                                                        </a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div id="collapse-amenities11" class="panel-collapse collapse">--}}
{{--                                                    <div class="panel-body">--}}
{{--                                                        <!-- child parent start 1 -->--}}
{{--                                                        <div class="panel-heading">--}}
{{--                                                            <a class="collapsed">--}}
{{--                                                                <h5 class="panel-title1 mt-3 mb-0">8.1 Basic research--}}
{{--                                                                    data for a new--}}
{{--                                                                    business</h5>--}}
{{--                                                            </a>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- child parent End 1 -->--}}

{{--                                                        <!-- child parent start 2 -->--}}
{{--                                                        <a class="collapsed hide">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">8.2 Financial Ratios</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 2 -->--}}

{{--                                                        <!-- child parent start 3 -->--}}
{{--                                                        <a class="collapsed">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">8.3 Investment--}}
{{--                                                                Parameters</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 3 -->--}}

{{--                                                        <!-- child parent start 4 -->--}}
{{--                                                        <a class="collapsed">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">8.4 Finance--}}
{{--                                                                Parameters</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 4 -->--}}
{{--                                                        <!-- child parent start 5 -->--}}
{{--                                                        <a class="collapsed">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">8.5 Shareholdings and--}}
{{--                                                                Dividends</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 5 -->--}}

{{--                                                        <!-- child parent start 6 -->--}}
{{--                                                        <a class="collapsed">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">8.6 Income Statements--}}
{{--                                                                Analysis</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 6 -->--}}

{{--                                                        <!-- child parent start 7 -->--}}
{{--                                                        <a class="collapsed">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">8.7 Balance Sheets--}}
{{--                                                                Analysis</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 7 -->--}}

{{--                                                        <!-- child parent start 8 -->--}}
{{--                                                        <a class="collapsed">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">8.8 Cash Flows--}}
{{--                                                                Analysis</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 8 -->--}}

{{--                                                        <!-- child parent start 9 -->--}}
{{--                                                        <a class="collapsed">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">8.8 Dynamic Dashboard,--}}
{{--                                                                variables and--}}
{{--                                                                drivers</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 8 -->--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="col-lg-12">--}}
{{--                                                <div class="bg-black">--}}
{{--                                                    <div class="panel-heading">--}}
{{--                                                        <a class="collapsed" data-bs-toggle="collapse"--}}
{{--                                                           data-parent="#accordion"--}}
{{--                                                           href="#collapse-amenitiesh2">--}}
{{--                                                            <h5 class="panel-title">--}}
{{--                                                                <div class="row">--}}
{{--                                                                    <div class="col-lg-3">--}}
{{--                                                                        <span class="f-white">Chapter 9</span>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="col-lg-9">--}}
{{--                                                                        <p class="paragraph-collapse">Budget--}}
{{--                                                                            Forecasting</p>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </h5>--}}
{{--                                                        </a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div id="collapse-amenitiesh2" class="panel-collapse collapse">--}}
{{--                                                    <div class="panel-body">--}}
{{--                                                        <!-- child parent start 1 -->--}}
{{--                                                        <div class="panel-heading">--}}
{{--                                                            <a class="collapsed">--}}
{{--                                                                <h5 class="panel-title1 mt-3 mb-0">9.1 Monthly--}}
{{--                                                                    historical data of--}}
{{--                                                                    revenue compoenents, COGS, and expenses</h5>--}}
{{--                                                            </a>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- child parent End 1 -->--}}

{{--                                                        <!-- child parent start 2 -->--}}
{{--                                                        <a class="collapsed hide">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">9.2 Last year mothly--}}
{{--                                                                budgeted data</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 2 -->--}}

{{--                                                        <!-- child parent start 3 -->--}}
{{--                                                        <a class="collapsed">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">9.3 Actual v/s Budgeted--}}
{{--                                                                Comparasion</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 3 -->--}}

{{--                                                        <!-- child parent start 4 -->--}}
{{--                                                        <a class="collapsed">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">9.4 Budget forecast ---}}
{{--                                                                simple linear--}}
{{--                                                                trend</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 4 -->--}}
{{--                                                        <!-- child parent start 5 -->--}}
{{--                                                        <a class="collapsed">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">9.5 Forecast Seasonality--}}
{{--                                                                with confidence--}}
{{--                                                                Interval</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 5 -->--}}

{{--                                                        <!-- child parent start 6 -->--}}
{{--                                                        <a class="collapsed">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">9.6 Graphical--}}
{{--                                                                representation of--}}
{{--                                                                historical and forecasted data</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 6 -->--}}

{{--                                                        <!-- child parent start 7 -->--}}
{{--                                                        <a class="collapsed">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">9.7 Forecast sheet</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 7 -->--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="col-lg-12">--}}
{{--                                                <div class="bg-black">--}}
{{--                                                    <div class="panel-heading">--}}
{{--                                                        <a class="collapsed" data-bs-toggle="collapse"--}}
{{--                                                           data-parent="#accordion"--}}
{{--                                                           href="#collapse-amenitiesi3">--}}
{{--                                                            <h5 class="panel-title">--}}
{{--                                                                <div class="row">--}}
{{--                                                                    <div class="col-lg-3">--}}
{{--                                                                        <span class="f-white">Chapter 10</span>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="col-lg-9">--}}
{{--                                                                        <p class="paragraph-collapse">Dynamic--}}
{{--                                                                            Connections--}}
{{--                                                                            and Power Query</p>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </h5>--}}
{{--                                                        </a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div id="collapse-amenitiesi3" class="panel-collapse collapse">--}}
{{--                                                    <div class="panel-body">--}}
{{--                                                        <!-- child parent start 1 -->--}}
{{--                                                        <div class="panel-heading">--}}
{{--                                                            <a class="collapsed">--}}
{{--                                                                <h5 class="panel-title1 mt-3 mb-0">10.1 Project internal--}}
{{--                                                                    and external--}}
{{--                                                                    links</h5>--}}
{{--                                                            </a>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- child parent End 1 -->--}}

{{--                                                        <!-- child parent start 2 -->--}}
{{--                                                        <a class="collapsed hide">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">10.2 Setup sheet for--}}
{{--                                                                dynamic referneces,--}}
{{--                                                                Cell(), Find(), Left(), Concatenate()</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 2 -->--}}

{{--                                                        <!-- child parent start 3 -->--}}
{{--                                                        <a class="collapsed">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">10.3 Generate dynamic--}}
{{--                                                                reports using--}}
{{--                                                                indirect()</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 3 -->--}}

{{--                                                        <!-- child parent start 4 -->--}}
{{--                                                        <a class="collapsed">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">10.4 Indirect function--}}
{{--                                                                constraint with--}}
{{--                                                                closed source file</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 4 -->--}}
{{--                                                        <!-- child parent start 5 -->--}}
{{--                                                        <a class="collapsed">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">10.5 Power Query solves--}}
{{--                                                                the issue</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 5 -->--}}

{{--                                                        <!-- child parent start 6 -->--}}
{{--                                                        <a class="collapsed">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">10.6 Dynamic path--}}
{{--                                                                query</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 6 -->--}}

{{--                                                        <!-- child parent start 7 -->--}}
{{--                                                        <a class="collapsed">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">10.7 Arrange Transform--}}
{{--                                                                and Clean Data--}}
{{--                                                                from power query</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 7 -->--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="col-lg-12">--}}
{{--                                                <div class="bg-black">--}}
{{--                                                    <div class="panel-heading">--}}
{{--                                                        <a class="collapsed" data-bs-toggle="collapse"--}}
{{--                                                           data-parent="#accordion"--}}
{{--                                                           href="#collapse-amenitiesj4">--}}
{{--                                                            <h5 class="panel-title">--}}
{{--                                                                <div class="row">--}}
{{--                                                                    <div class="col-lg-3">--}}
{{--                                                                        <span class="f-white">Chapter 11</span>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="col-lg-9">--}}
{{--                                                                        <p class="paragraph-collapse">Power--}}
{{--                                                                            Dashboards</p>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </h5>--}}
{{--                                                        </a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div id="collapse-amenitiesj4" class="panel-collapse collapse">--}}
{{--                                                    <div class="panel-body">--}}
{{--                                                        <!-- child parent start 1 -->--}}
{{--                                                        <div class="panel-heading">--}}
{{--                                                            <a class="collapsed">--}}
{{--                                                                <h5 class="panel-title1 mt-3 mb-0">11.1 Get Data from--}}
{{--                                                                    different--}}
{{--                                                                    resources</h5>--}}
{{--                                                            </a>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- child parent End 1 -->--}}

{{--                                                        <!-- child parent start 2 -->--}}
{{--                                                        <a class="collapsed hide">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">11.2 Dimension--}}
{{--                                                                Tables</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 2 -->--}}

{{--                                                        <!-- child parent start 3 -->--}}
{{--                                                        <a class="collapsed">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">11.3 Create relationship--}}
{{--                                                                with data files--}}
{{--                                                                and dimensions</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 3 -->--}}

{{--                                                        <!-- child parent start 4 -->--}}
{{--                                                        <a class="collapsed">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">11.4 Insert pivot tables--}}
{{--                                                                and create--}}
{{--                                                                summaries</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 4 -->--}}
{{--                                                        <!-- child parent start 5 -->--}}
{{--                                                        <a class="collapsed">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">11.5 Add columns in--}}
{{--                                                                loaded data model--}}
{{--                                                            </h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 5 -->--}}

{{--                                                        <!-- child parent start 6 -->--}}
{{--                                                        <a class="collapsed">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">11.6 Power query for--}}
{{--                                                                dynamic path</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 6 -->--}}

{{--                                                        <!-- child parent start 7 -->--}}
{{--                                                        <a class="collapsed" data-bs-toggle="collapse"--}}
{{--                                                           data-parent="#accordion"--}}
{{--                                                           href="#colapse-j7">--}}
{{--                                                            <h5 class="panel-title">11.7 Create dynamic and Power--}}
{{--                                                                dashboard--}}
{{--                                                            </h5>--}}
{{--                                                        </a>--}}
{{--                                                        <div id="colapse-j7" class="collapse">--}}
{{--                                                            <ul>--}}
{{--                                                                <li>Insert timeline and format it</li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- child parent End 7 -->--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="col-lg-12">--}}
{{--                                                <div class="bg-black">--}}
{{--                                                    <div class="panel-heading">--}}
{{--                                                        <a class="collapsed" data-bs-toggle="collapse"--}}
{{--                                                           data-parent="#accordion"--}}
{{--                                                           href="#collapse-amenitiesk5">--}}
{{--                                                            <h5 class="panel-title">--}}
{{--                                                                <div class="row">--}}
{{--                                                                    <div class="col-lg-3">--}}
{{--                                                                        <span class="f-white">Chapter 12</span>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="col-lg-9">--}}
{{--                                                                        <p class="paragraph-collapse">Stock Trading--}}
{{--                                                                            Model--}}
{{--                                                                        </p>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </h5>--}}
{{--                                                        </a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div id="collapse-amenitiesk5" class="panel-collapse collapse">--}}
{{--                                                    <div class="panel-body">--}}
{{--                                                        <!-- child parent start 1 -->--}}
{{--                                                        <div class="panel-heading">--}}
{{--                                                            <a class="collapsed">--}}
{{--                                                                <h5 class="panel-title1 mt-3 mb-0">12.1 Stock market--}}
{{--                                                                    indices, P/E--}}
{{--                                                                    ratio, market capitalization, dividends and--}}
{{--                                                                    volumes</h5>--}}
{{--                                                            </a>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- child parent End 1 -->--}}

{{--                                                        <!-- child parent start 2 -->--}}
{{--                                                        <a class="collapsed hide">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">12.2 Primary and--}}
{{--                                                                secondary objectives of--}}
{{--                                                                a stock model</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 2 -->--}}

{{--                                                        <!-- child parent start 3 -->--}}
{{--                                                        <a class="collapsed">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">12.3 Adjusted returns,--}}
{{--                                                                ex-dates</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 3 -->--}}

{{--                                                        <!-- child parent start 4 -->--}}
{{--                                                        <a class="collapsed" data-bs-toggle="collapse"--}}
{{--                                                           data-parent="#accordion"--}}
{{--                                                           href="#colapse-k4">--}}
{{--                                                            <h5 class="panel-title">12.4 Calculate the volatility--}}
{{--                                                                risks</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <div id="colapse-k4" class="collapse">--}}
{{--                                                            <li>Variance</li>--}}
{{--                                                            <li>Standard Deviation</li>--}}
{{--                                                            <li>Co-Variance</li>--}}
{{--                                                            <li>Correlation</li>--}}
{{--                                                            <li>Beta</li>--}}
{{--                                                            <ul>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- child parent End 4 -->--}}
{{--                                                        <!-- child parent start 5 -->--}}
{{--                                                        <a class="collapsed">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">12.5 Import data from--}}
{{--                                                                different--}}
{{--                                                                resources--}}
{{--                                                            </h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 5 -->--}}

{{--                                                        <!-- child parent start 6 -->--}}
{{--                                                        <a class="collapsed">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">12.6 Get Live Data from--}}
{{--                                                                Stock Exchange--}}
{{--                                                            </h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 6 -->--}}

{{--                                                        <!-- child parent start 7 -->--}}
{{--                                                        <a class="collapsed">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">12.7 Setup a trading--}}
{{--                                                                strategy</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 7 -->--}}

{{--                                                        <!-- child parent start 8 -->--}}
{{--                                                        <a class="collapsed">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">12.8 Record a Macro for--}}
{{--                                                                automated trades--}}
{{--                                                            </h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 8 -->--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="col-lg-12">--}}
{{--                                                <div class="bg-black">--}}
{{--                                                    <div class="panel-heading">--}}
{{--                                                        <a class="collapsed" data-bs-toggle="collapse"--}}
{{--                                                           data-parent="#accordion"--}}
{{--                                                           href="#collapse-amenitiesl6">--}}
{{--                                                            <h5 class="panel-title">--}}
{{--                                                                <div class="row">--}}
{{--                                                                    <div class="col-lg-3">--}}
{{--                                                                        <span class="f-white">Chapter 13</span>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="col-lg-9">--}}
{{--                                                                        <p class="paragraph-collapse">Comparative Case--}}
{{--                                                                            Study--}}
{{--                                                                        </p>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </h5>--}}
{{--                                                        </a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div id="collapse-amenitiesl6" class="panel-collapse collapse">--}}
{{--                                                    <div class="panel-body">--}}
{{--                                                        <!-- child parent start 1 -->--}}
{{--                                                        <div class="panel-heading">--}}
{{--                                                            <a class="collapsed">--}}
{{--                                                                <h5 class="panel-title1 mt-3 mb-0">13.1 Setup a--}}
{{--                                                                    centerilized database--}}
{{--                                                                    for company financials</h5>--}}
{{--                                                            </a>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- child parent End 1 -->--}}

{{--                                                        <!-- child parent start 2 -->--}}
{{--                                                        <a class="collapsed hide">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">13.2 Analyse company--}}
{{--                                                                financials and take--}}
{{--                                                                inputs required relevant facts</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 2 -->--}}

{{--                                                        <!-- child parent start 3 -->--}}
{{--                                                        <a class="collapsed">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">13.3 Link reports for--}}
{{--                                                                comparative study--}}
{{--                                                            </h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 3 -->--}}

{{--                                                        <!-- child parent start 4 -->--}}
{{--                                                        <a class="collapsed" data-bs-toggle="collapse"--}}
{{--                                                           data-parent="#accordion"--}}
{{--                                                           href="#colapse-l4">--}}
{{--                                                            <h5 class="panel-title">13.4 Comparative Income Statement--}}
{{--                                                                Analysis</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <div id="colapse-l4" class="collapse">--}}
{{--                                                            <ul>--}}
{{--                                                                <li>Vertical and Horizontal Analysis</li>--}}
{{--                                                                <li>Trend Analysis</li>--}}
{{--                                                                <li>Business Risks</li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- child parent End 4 -->--}}
{{--                                                        <!-- child parent start 5 -->--}}
{{--                                                        <a class="collapsed" data-bs-toggle="collapse"--}}
{{--                                                           data-parent="#accordion"--}}
{{--                                                           href="#colapse-l5">--}}
{{--                                                            <h5 class="panel-title">13.5 Comparative Balance Sheet--}}
{{--                                                                Analysis--}}
{{--                                                            </h5>--}}
{{--                                                        </a>--}}
{{--                                                        <div id="colapse-l5" class="collapse">--}}
{{--                                                            <ul>--}}
{{--                                                                <li>Vertical Analysis</li>--}}
{{--                                                                <li>Liquidity Ratio Analysis</li>--}}
{{--                                                                <li>Turnover Ratios</li>--}}
{{--                                                                <li>Operating Profibility</li>--}}
{{--                                                                <li>Valuation</li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- child parent End 5 -->--}}

{{--                                                        <!-- child parent start 6 -->--}}
{{--                                                        <a class="collapsed">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">13.6 Comparative--}}
{{--                                                                Graphical Analysis</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 6 -->--}}

{{--                                                        <!-- child parent start 7 -->--}}
{{--                                                        <a class="collapsed">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">13.7 Company--}}
{{--                                                                Valuation</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 7 -->--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="col-lg-12">--}}
{{--                                                <div class="bg-black" id="trainer">--}}
{{--                                                    <div class="panel-heading">--}}
{{--                                                        <a class="collapsed" data-bs-toggle="collapse"--}}
{{--                                                           data-parent="#accordion"--}}
{{--                                                           href="#collapse-amenitiesm7">--}}
{{--                                                            <h5 class="panel-title">--}}
{{--                                                                <div class="row">--}}
{{--                                                                    <div class="col-lg-3">--}}
{{--                                                                        <span class="f-white">Chapter 14</span>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="col-lg-9">--}}
{{--                                                                        <p class="paragraph-collapse">Discounted Cash--}}
{{--                                                                            Flow--}}
{{--                                                                            Valuation</p>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </h5>--}}
{{--                                                        </a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div id="collapse-amenitiesm7" class="panel-collapse collapse">--}}
{{--                                                    <div class="panel-body">--}}
{{--                                                        <!-- child parent start 1 -->--}}
{{--                                                        <div class="panel-heading">--}}
{{--                                                            <a class="collapsed">--}}
{{--                                                                <h5 class="panel-title1 mt-3 mb-0">14.1 Income Statement--}}
{{--                                                                    Projections--}}
{{--                                                                </h5>--}}
{{--                                                            </a>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- child parent End 1 -->--}}

{{--                                                        <!-- child parent start 2 -->--}}
{{--                                                        <a class="collapsed hide">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">14.2 Working Capital--}}
{{--                                                                Projections</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 2 -->--}}

{{--                                                        <!-- child parent start 3 -->--}}
{{--                                                        <a class="collapsed">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">14.3 Forecasting Free--}}
{{--                                                                Cash Flows (FCFs)--}}
{{--                                                            </h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 3 -->--}}

{{--                                                        <!-- child parent start 4 -->--}}
{{--                                                        <a class="collapsed" data-bs-toggle="collapse"--}}
{{--                                                           data-parent="#accordion"--}}
{{--                                                           href="#colapse-m4">--}}
{{--                                                            <h5 class="panel-title">14.4 Calculate the discount rate--}}
{{--                                                                (WACC)--}}
{{--                                                            </h5>--}}
{{--                                                        </a>--}}
{{--                                                        <div id="colapse-m4" class="collapse">--}}
{{--                                                            <ul>--}}
{{--                                                                <li>Risk Free rate</li>--}}
{{--                                                                <li>Market risk premium</li>--}}
{{--                                                                <li>Stock beta</li>--}}
{{--                                                                <li>Cost of equity</li>--}}
{{--                                                                <li>Pre-tax and After tax cost of debt</li>--}}
{{--                                                                <li>Capital Structure</li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- child parent End 4 -->--}}
{{--                                                        <!-- child parent start 5 -->--}}
{{--                                                        <a class="collapsed">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">14.5 Discount the FCFs--}}
{{--                                                                (NPV of explicit--}}
{{--                                                                period)</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 5 -->--}}

{{--                                                        <!-- child parent start 6 -->--}}
{{--                                                        <a class="collapsed" data-bs-toggle="collapse"--}}
{{--                                                           data-parent="#accordion"--}}
{{--                                                           href="#colapse-m6">--}}
{{--                                                            <h5 class="panel-title">14.6 Terminal Values and NPV of--}}
{{--                                                                terminal--}}
{{--                                                                values</h5>--}}
{{--                                                        </a>--}}
{{--                                                        <div id="colapse-m6" class="collapse">--}}
{{--                                                            <ul>--}}
{{--                                                                <li>Perpitual growths</li>--}}
{{--                                                                <li>Exit Multiple</li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- child parent End 6 -->--}}

{{--                                                        <!-- child parent start 7 -->--}}
{{--                                                        <a class="collapsed" data-bs-toggle="collapse"--}}
{{--                                                           data-parent="#accordion"--}}
{{--                                                           href="#colapse-m7">--}}
{{--                                                            <h5 class="panel-title">14.7 Calculate the Intrinsic Value--}}
{{--                                                            </h5>--}}
{{--                                                        </a>--}}
{{--                                                        <div id="colapse-m7" class="collapse">--}}
{{--                                                            <ul>--}}
{{--                                                                <li>Enterprise Value @ Perpetual Growth</li>--}}
{{--                                                                <li>Enterprise Value @ Exit EBIDTA Multiple</li>--}}
{{--                                                                <li>Net Debts</li>--}}
{{--                                                                <li>Equity Value</li>--}}
{{--                                                                <li>Intrinsic Values per Share</li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- child parent End 7 -->--}}


{{--                                                        <!-- child parent start 8 -->--}}
{{--                                                        <a class="collapsed">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">14.8 Sensitivity Analysis--}}
{{--                                                                of Share Price--}}
{{--                                                                and terminal value--}}
{{--                                                            </h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 8 -->--}}


{{--                                                        <!-- child parent start 9 -->--}}
{{--                                                        <a class="collapsed" data-bs-toggle="collapse"--}}
{{--                                                           data-parent="#accordion"--}}
{{--                                                           href="#colapse-m9">--}}
{{--                                                            <h5 class="panel-title">14.9 DCF Calculator assumptions--}}
{{--                                                            </h5>--}}
{{--                                                        </a>--}}
{{--                                                        <div id="colapse-m9" class="collapse">--}}
{{--                                                            <ul>--}}
{{--                                                                <li>Dynamic Assumptions</li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- child parent End 9 -->--}}


{{--                                                        <!-- child parent start 10 -->--}}
{{--                                                        <a class="collapsed" data-bs-toggle="collapse"--}}
{{--                                                           data-parent="#accordion"--}}
{{--                                                           href="#colapse-m10">--}}
{{--                                                            <h5 class="panel-title">14.10 Calculate intrinsic values--}}
{{--                                                            </h5>--}}
{{--                                                        </a>--}}
{{--                                                        <div id="colapse-m10" class="collapse">--}}
{{--                                                            <ul>--}}
{{--                                                                <li>Share Price @ Perpetual Growth</li>--}}
{{--                                                                <li>Share Price @ Exit EBIDTA Multiple</li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- child parent End 10 -->--}}


{{--                                                        <!-- child parent start 11 -->--}}
{{--                                                        <a class="collapsed">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">14.11 Sensitivity--}}
{{--                                                                analysis and impact of--}}
{{--                                                                change in assumptions--}}
{{--                                                            </h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 11 -->--}}


{{--                                                        <!-- child parent start 12 -->--}}
{{--                                                        <a class="collapsed">--}}
{{--                                                            <h5 class="panel-title1 mt-3 mb-0">14.12 Graphical--}}
{{--                                                                representation--}}
{{--                                                            </h5>--}}
{{--                                                        </a>--}}
{{--                                                        <!-- child parent End 12 -->--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- <div class="card-footer">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-lg-3">--}}
{{--                                            <h5>Module 2</h5>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-lg-9">--}}
{{--                                            <h5>Professional Level </h5>--}}
{{--                                        </div>--}}

{{--                                        <div class="col-lg-3 mt-2">--}}
{{--                                            <h5>Duration</h5>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-lg-6 mt-2">--}}
{{--                                            <h5>8 Weeks / 24 Sessions </h5>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-lg-3">--}}
{{--                                            <a href="#" class="btn btn-outline-primary" data-toggle="modal" data-target="#Lead-form">Enquire Now</a>--}}
{{--                                        </div>--}}

{{--                                        <div class="col-lg-3">--}}
{{--                                            <h5>Training Hours</h5>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-lg-9">--}}
{{--                                            <h5>24 Hours </h5>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                </div> -->--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        </div>--}}
{{--    </section>--}}

    <!-- modal box Lead Form start  -->


{{--    <section id="trainer">--}}
{{--        <div class="container">--}}
{{--            <div class="row mt-5">--}}
{{--                <div class="col-lg-12 text-center">--}}
{{--                    <h2>TRAINER PROFILE</h2>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row padding-top-sectio">--}}
{{--                <div class="col-lg-5 mt-5 mb-5">--}}
{{--                    <h2>Tanweer Bukhsh</h2>--}}
{{--                    <h4>--}}
{{--                        Financial Modeling--}}
{{--                        <br>--}}
{{--                    </h4>--}}
{{--                    <p class="designation">--}}
{{--                        Masters Economics Financial Modeler at GM Richko Group--}}
{{--                    </p>--}}
{{--                    <div class="mb-4">--}}
{{--                        <p>--}}
{{--                            Tanweer Bukhsh is currently serving as General Manager at Richko Group and is a visiting--}}
{{--                            faculty--}}
{{--                            member at YouExcel. He is a Masters degree holder in Economics from Karachi University.--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                    <div id="duration">--}}
{{--                        <a href="Tanveer-Bukhsh" class="btn btn-outline-primary">View More</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-1"></div>--}}
{{--                <div class="col-lg-6 mt-5 mb-5">--}}
{{--                    <div class="image-wrapperrr">--}}
{{--                        <img class="images1" src="img/Yourexcel-img/financial-modeling1.png"/>--}}
{{--                    </div>--}}
{{--                    <div id="Pre-requisite"></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <section id="Value-added-Services">

    </section>
    <section>
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>DURATION</h2>
                </div>
            </div>
            <div class="row" id="Career-paths">
                <div class="col-lg-4"></div>
                <div class="col-lg-4 mt-3 text-center">
                    <td>4 Hours</td>
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
                <div class="col-lg-4">
                    <!-- <table class="table table-bordered">
                        <tbody>
                            <tr> -->
                    <td>This course is for students, fresh graduates, and mid-career professionals aiming for better career opportunities in 2023.
                    </td>
                    <!-- </tr>
                </tbody>
            </table> -->

                </div>
            </div>
        </div>
    </section>


{{--    <section>--}}
{{--        <div class="container mt-5 mb-5">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12 text-center">--}}
{{--                    <h2>VALUE ADDED SERVICES</h2>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-4"></div>--}}
{{--                <div class="col-lg-4">--}}
{{--                    <ul>--}}
{{--                        <li>Experienced professional trainers with practical field exposure</li>--}}
{{--                        <li>100% job and business oriented training</li>--}}
{{--                        <li>Certificate of completion recognized from Trade Testing Board, Government of Pakistan</li>--}}
{{--                        <li>Claim Continuing Professional Development (CPD) hours for the training</li>--}}
{{--                        <li>Video recorded session with personalized Learning Management System (LMS) access login id--}}
{{--                        </li>--}}
{{--                        <li>Lifetime access to exclusive YouExcel alumni via WhatsApp and Facebook groups</li>--}}
{{--                        <li>Fully equipped training center venue for on-campus trainings readily available with laptops,--}}
{{--                            projectors and air-conditioning--}}
{{--                        </li>--}}
{{--                        <li>Virtual training facility available</li>--}}
{{--                        <li>Guest speaker sessions for latest market insights from business leaders</li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div></div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--    <section>--}}
{{--        <div class="container mt-5 mb-5">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12 text-center">--}}
{{--                    <h2>CAREER-PATHS</h2>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-4"></div>--}}
{{--                <div class="col-lg-4">--}}
{{--                    <ul>--}}
{{--                        <li> Financial Planning and Analysis (FP&A)</li>--}}
{{--                        <li> Investment Banking Analyst</li>--}}
{{--                        <li id="Registation-form"> Finance Analyst</li>--}}
{{--                        <li> Business Advisory</li>--}}
{{--                        <li> Finance Officer</li>--}}
{{--                        <li> Accountant</li>--}}
{{--                        <li> Finance Manager</li>--}}
{{--                        <li> Other areas of Finance Analysis</li>--}}
{{--                        <li> Credit Aalyst</li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div></div>--}}
{{--        </div>--}}
{{--    </section>--}}

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
                        <a class="btn btn-lmslogin mb-4 btn-lg"
                           href="Registration-Form/Excelling-in-Linkedln-profile-and-Job-Interviews">Click here to Register
                            Online </a>

                        <!--<a class="btn btn-lmslogin mb-4 btn-lg"-->

                        <!--   href="{{url("/course_checkout/Financial Modeling and Analysis/25780")}}">Buy Now</a>-->
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
