<!--================ Start Header Menu Area =================-->
@extends('website.app')
<!--================ End Header Menu Area =================-->

<!--================ Start Home Banner Area =================-->
@section('content')

    <section class="view-courses-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8">
                            <h2 class="text-center" style="margin-top: 150px;">ALL COURSES</h2>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <!-- <div class="owl-carousel active_course card--99"> -->


                        <div class="col-lg-4 mb-3">
                            <div class="single_course">
                                <div class="course_head">
                                    <a href="financial-modeling-analysis-fundamental">
                                        <img class="img-fluid courses-images"
                                             src="img/Yourexcel-img/financial-modeling.jpeg" alt="">
                                    </a>
                                </div>
                                <div class="course_content">
                                     <!--<span class="price">$25</span> -->
                                     <!--<span class="tag mb-4 d-inline-block">4 Months</span> -->
                                    <h4 class="mb-3">
                                        <a href="financial-modeling-analysis-fundamental">
                                            Financial Modeling & Analysis Fundamental</a> </br><p
                                                style="display: none;">.</p>
                                    </h4>
                                     <!--<p>One make creepeth man bearing their one firmament won't fowl meat over sea <br></p> -->
                                    <br>
                                    {{--                            <a href="financial-modeling-analysis">Learn More</a>--}}
                                    <a href="{{url("financial-modeling-analysis-fundamental")}}"
                                       class="btn btn-lmslogin1">Learn
                                        More</a>
                                    <a href="{{url("/enquiry-form/Financial-Modeling-&-Analysis-Fundamental")}}"
                                       class="btn btn-lmslogin1 float-right">Enquire Now</a>
                                    {{--                                    <div class="row">--}}
                                    {{--                                        <div class="text-center col-12" style="margin-top: 56px;color: #0B6DB5">--}}
                                    {{--                                            <button class="btn btn-primary">--}}
                                    {{--                                                Start today at PKR 15,346--}}
                                    {{--                                            </button>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}
                                </div>

                            </div>
                        </div>


                        <!--<div class="col-lg-4 mb-3">-->
                        <!--    <div class="single_course">-->
                        <!--        <div class="course_head">-->
                        <!--            <a href="financial-modeling-analysis-advanced">-->
                        <!--                <img class="img-fluid courses-images"-->
                        <!--                     src="img/Yourexcel-img/financial-modeling-adv.png" alt="">-->
                        <!--            </a>-->
                        <!--        </div>-->
                        <!--        <div class="course_content">-->
                                    <!-- <span class="price">$25</span> -->
                                    <!-- <span class="tag mb-4 d-inline-block">4 Months</span> -->
                        <!--            <h4 class="mb-3">-->
                        <!--                <a href="financial-modeling-analysis-advanced">-->
                        <!--                    Financial Modeling & Analysis Advanced </a> </br><p style="display: none;">-->
                        <!--                    .</p>-->
                        <!--            </h4>-->
                                    <!-- <p>One make creepeth man bearing their one firmament won't fowl meat over sea <br></p> -->
                        <!--            <br>-->
                        <!--            {{--                            <a href="financial-modeling-analysis-advanced">Learn More</a>--}}-->
                        <!--            <a href="{{url("financial-modeling-analysis-advanced")}}" class="btn btn-lmslogin1">Learn-->
                        <!--                More</a>-->
                        <!--            <a href="{{url("/enquiry-form/Financial-Modeling-&-Analysis-Advanced")}}"-->
                        <!--               class="btn btn-lmslogin1 float-right">Enquire Now</a>-->
                        <!--            {{--                                    <div class="row">--}}-->
                        <!--            {{--                                        <div class="text-center col-12" style="margin-top: 56px;color: #0B6DB5">--}}-->
                        <!--            {{--                                            <button class="btn btn-primary">--}}-->
                        <!--            {{--                                                Start today at PKR 15,346--}}-->
                        <!--            {{--                                            </button>--}}-->
                        <!--            {{--                                        </div>--}}-->
                        <!--            {{--                                    </div>--}}-->
                        <!--        </div>-->

                        <!--    </div>-->
                        <!--</div>-->


                        <div class="col-lg-4 mb-3">
                            <div class="single_course">
                                <div class="course_head">
                                    <a href="dashboard-reporting-powerbi-analysis">

                                        <img class="img-fluid courses-images" src="img/Yourexcel-img/cdra.jpeg" alt="">
                                    </a>
                                </div>
                                <div class="course_content">
                                    <!-- <span class="price">$25</span> -->
                                    <!-- <span class="tag mb-4 d-inline-block">2 Months</span> -->
                                    <h4 class="mb-3">
                                        <a href="dashboard-reporting-powerbi-analysis">
                                            Dashboard Reporting & Analysis with Power BI </a> </br>
                                    </h4>
                                    <!-- <p>One make creepeth man bearing their one firmament won't fowl meat over sea <br></p> -->
                                    <br>
                                    <a href="{{url("dashboard-reporting-powerbi-analysis")}}" class="btn btn-lmslogin1">Learn
                                        More</a>
                                    <a href="{{url("/enquiry-form/Dashboard-Reporting-&-Analysis-with-Power-BI")}}"
                                       class="btn btn-lmslogin1 float-right">Enquire Now</a>
                                    {{--                                    <div class="row">--}}
                                    {{--                                        <div class="text-center col-12" style="margin-top: 56px;color: #0B6DB5">--}}
                                    {{--                                            <button class="btn btn-primary">--}}
                                    {{--                                                Start today at PKR 19,334--}}
                                    {{--                                            </button>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        
                        
                        
                        
                        
                        <div class="col-lg-4 mb-3">
                            <div class="single_course">
                                <div class="course_head">
                                    <a href="basic-to-advanced-sql-for-data-analytics">

                                        <img class="img-fluid courses-images" src="https://cursin.net/wp-content/uploads/2023/07/sql-database-cursin.jpg.webp" alt="">
                                    </a>
                                </div>
                                <div class="course_content">
                                    <!-- <span class="price">$25</span> -->
                                    <!-- <span class="tag mb-4 d-inline-block">2 Months</span> -->
                                    <h4 class="mb-3">
                                        <a href="basic-to-advanced-sql-for-data-analytics">
                                           Basic to Advanced SQL for Data Analytics </a> </br>
                                    </h4>
                                    <!-- <p>One make creepeth man bearing their one firmament won't fowl meat over sea <br></p> -->
                                    <br>
                                    <a href="{{url("basic-to-advanced-sql-for-data-analytics")}}" class="btn btn-lmslogin1">Learn
                                        More</a>
                                    <a href="{{url("/enquiry-form/Basic-to-Advanced-SQL-for-Data-Analytics")}}"
                                       class="btn btn-lmslogin1 float-right">Enquire Now</a>
                                    {{--                                    <div class="row">--}}
                                    {{--                                        <div class="text-center col-12" style="margin-top: 56px;color: #0B6DB5">--}}
                                    {{--                                            <button class="btn btn-primary">--}}
                                    {{--                                                Start today at PKR 19,334--}}
                                    {{--                                            </button>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        
                        <!--<div class="col-lg-4 mb-3">-->
                        <!--    <div class="single_course">-->
                        <!--        <div class="course_head">-->
                        <!--            <a href="sql-in-powerbi-for-data-analytics">-->

                        <!--                <img class="img-fluid courses-images" src="https://img-c.udemycdn.com/course/750x422/902748_7bba_3.jpg" alt="">-->
                        <!--            </a>-->
                        <!--        </div>-->
                        <!--        <div class="course_content">-->
                                    <!-- <span class="price">$25</span> -->
                                    <!-- <span class="tag mb-4 d-inline-block">2 Months</span> -->
                        <!--            <h4 class="mb-3">-->
                        <!--                <a href="sql-in-powerbi-for-data-analytics">-->
                        <!--                    SQL In Power BI for Data Analytics </a> </br>-->
                        <!--            </h4>-->
                                    <!-- <p>One make creepeth man bearing their one firmament won't fowl meat over sea <br></p> -->
                        <!--            <br>-->
                        <!--            <a href="{{url("sql-in-powerbi-for-data-analytics")}}" class="btn btn-lmslogin1">Learn-->
                        <!--                More</a>-->
                        <!--            <a href="{{url("/enquiry-form/SQL-In-PowerBi-For-Data-Analytics")}}"-->
                        <!--               class="btn btn-lmslogin1 float-right">Enquire Now</a>-->
                        <!--            {{--                                    <div class="row">--}}-->
                        <!--            {{--                                        <div class="text-center col-12" style="margin-top: 56px;color: #0B6DB5">--}}-->
                        <!--            {{--                                            <button class="btn btn-primary">--}}-->
                        <!--            {{--                                                Start today at PKR 19,334--}}-->
                        <!--            {{--                                            </button>--}}-->
                        <!--            {{--                                        </div>--}}-->
                        <!--            {{--                                    </div>--}}-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->


                        {{--Required--}}
                        <div class="col-lg-4 mb-3">
                            <div class="single_course">
                                <div class="course_head">
                                    <a href="advanced-excel-business-intelligence-data-visualization">

                                        <img class="img-fluid courses-images" src="img/Yourexcel-img/msexcel.jpg"
                                             alt="">
                                    </a>
                                </div>
                                <div class="course_content">
                                    <!-- <span class="price">$25</span> -->
                                    <!-- <span class="tag mb-4 d-inline-block">2 Months</span> -->
                                    <h4 class="mb-3">
                                        <a href="advanced-excel-business-intelligence-data-visualization">
                                            Advanced MS Excel: Business Intelligence with Data Visualization</a>
                                    </h4>
                                    <!-- <p>One make creepeth man bearing their one firmament won't fowl meat over sea</p> -->
                                    {{--                            <a href="advanced-excel-business-intelligence-data-visualization">Learn More</a>--}}
                                    <a href="{{url("/advanced-excel-business-intelligence-data-visualization")}}"
                                       class="btn btn-lmslogin1">Learn More</a>
                                    <a href="{{url("/enquiry-form/Advanced-MS-Excel:Business-Intelligence-with-Data-Visualization")}}"
                                       class="btn btn-lmslogin1 float-right">Enquire Now</a>
                                    {{--                                    <div class="row">--}}
                                    {{--                                        <div class="text-center col-12" style="margin-top: 56px;color: #0B6DB5">--}}
                                    {{--                                            <button class="btn btn-primary">--}}
                                    {{--                                                Start today at PKR 15,335--}}
                                    {{--                                            </button>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}
                                </div>
                            </div>
                        </div>


                        {{--Required--}}





                        {{--Required--}}


                        {{--Required--}}


                        {{--                        <div class="col-lg-6 mb-3">--}}
                        {{--                            <div class="single_course">--}}
                        {{--                                <div class="course_head">--}}
                        {{--                                    <a href="data-analytics-tableau">--}}

                        {{--                                        <img class="img-fluid courses-images" src="img/Yourexcel-img/data-analytics.jpg"--}}
                        {{--                                             alt="">--}}
                        {{--                                    </a>--}}
                        {{--                                </div>--}}
                        {{--                                <div class="course_content">--}}
                        {{--                                    <!-- <span class="price">$25</span> -->--}}
                        {{--                                    <!-- <span class="tag mb-4 d-inline-block">1.5 Months</span> -->--}}
                        {{--                                    <h4 class="mb-3">--}}
                        {{--                                        <a href="data-analytics-tableau">--}}
                        {{--                                            Data Analytics with Tableau </a></br><p style="display: none;">.</p></br><p--}}
                        {{--                                            style="display: none;">.</p>--}}
                        {{--                                    </h4>--}}
                        {{--                                    <!-- <p>One make creepeth man bearing their one firmament won't fowl meat over sea <br></p> -->--}}
                        {{--                                    <br>--}}
                        {{--                                    --}}{{--                            <a href="data-analytics-tableau">Learn More</a>--}}
                        {{--                                    <a href="{{url("data-analytics-tableau")}}" class="btn btn-lmslogin1">Learn More</a>--}}
                        {{--                                    <a href="{{url("/enquiry-form/Data-Analytics-with-Tableau")}}"--}}
                        {{--                                       class="btn btn-lmslogin1 float-right">Enquire Now</a>--}}
                        {{--                                    --}}{{--                                    <div class="row">--}}
                        {{--                                    --}}{{--                                        <div class="text-center col-12" style="margin-top: 56px;color: #0B6DB5">--}}
                        {{--                                    --}}{{--                                            <button class="btn btn-primary">--}}
                        {{--                                    --}}{{--                                                Start today at PKR 16,368--}}
                        {{--                                    --}}{{--                                            </button>--}}
                        {{--                                    --}}{{--                                        </div>--}}
                        {{--                                    --}}{{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}


                        {{--                        <div class="row mt-5 mb-5">--}}

                        {{--Required--}}
                        {{-- <div class="col-lg-4 mb-3">
                            <div class="single_course">
                                <div class="course_head">
                                    <a href="computerized-accounting">

                                        <img class="img-fluid courses-images"
                                             src="img/Yourexcel-img/computrize-accounting.jpeg" alt="">
                                    </a>
                                </div>
                                <div class="course_content">
                                     <span class="price">$25</span> 
                                     <span class="tag mb-4 d-inline-block">3 Months</span> 
                                    <h4 class="mb-3">
                                        <a href="computerized-accounting">
                                            Computerized Accounting (Peachtree; Quick books)</a>
                                    </h4>
                                     <p>One make creepeth man bearing their one firmament won't fowl meat over sea <br></p> 
                                    <br>
                                    {{--                            <a href="computerized-accounting">Learn More</a>-}}
                                    <a href="{{url("/computerized-accounting")}}" class="btn btn-lmslogin1">Learn
                                        More</a>
                                    <a href="{{url("/enquiry-form/Computerized-Accounting-(Peachtree;-Quick-books)")}}"
                                       class="btn btn-lmslogin1 float-right">Enquire Now</a>
                                    {{--                                    <div class="row">--}}
                                    {{--                                        <div class="text-center col-12" style="margin-top: 56px;color: #0B6DB5">--}}
                                    {{--                                            <button class="btn btn-primary">--}}
                                    {{--                                                Start today at PKR 15,345--}}
                                    {{--                                            </button>--}}
                                    {{--                                        </div>-}}
                                    {{--                                    </div>-
                                </div>
                            </div>
                        </div> --}}

                        {{--                        <div class="col-lg-6 mb-3">--}}
                        {{--                            <div class="single_course">--}}
                        {{--                                <div class="course_head">--}}
                        {{--                                    --}}{{--                                <img class="img-fluid" src="img/Yourexcel-img/data-science.jpg" alt="" style="height: 200px; width: 100%;">--}}
                        {{--                                    <a href="data-science-with-bi">--}}

                        {{--                                        <img class="img-fluid courses-images" src="img/Yourexcel-img/data-science.jpg"--}}
                        {{--                                             alt="">--}}
                        {{--                                    </a>--}}
                        {{--                                </div>--}}
                        {{--                                <div class="course_content">--}}
                        {{--                                    <!-- <span class="price">$25</span> -->--}}
                        {{--                                    <!-- <span class="tag mb-4 d-inline-block">3 Months</span> -->--}}
                        {{--                                    <h4 class="mb-3">--}}
                        {{--                                        <a href="data-science-with-bi">--}}
                        {{--                                            Data Science with BI Reporting</a>--}}
                        {{--                                    </h4>--}}
                        {{--                                    <!-- <p>One make creepeth man bearing their one firmament won't fowl meat over sea <br></p> -->--}}
                        {{--                                    <br>--}}
                        {{--                                    --}}{{--                                <a href="data-science-with-bi">Learn More</a>--}}
                        {{--                                    <a href="{{url("/data-science-with-bi")}}" class="btn btn-lmslogin1">Learn More</a>--}}
                        {{--                                    <a href="{{url("/enquiry-form/Data-Science-with-BI-Reporting")}}"--}}
                        {{--                                       class="btn btn-lmslogin1 float-right">Enquire Now</a>--}}
                        {{--                                    --}}{{--                                    <div class="row">--}}
                        {{--                                    --}}{{--                                        <div class="text-center col-12" style="margin-top: 56px;color: #0B6DB5">--}}
                        {{--                                    --}}{{--                                            <button class="btn btn-primary">--}}
                        {{--                                    --}}{{--                                                Start today at PKR 18,414--}}
                        {{--                                    --}}{{--                                            </button>--}}
                        {{--                                    --}}{{--                                        </div>--}}
                        {{--                                    --}}{{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}

                        {{--Required--}}
                        <div class="col-lg-4 mb-3">
                            <div class="single_course">
                                <div class="course_head">
                                    <a href="tax-management-with-return-filing">

                                        <img class="img-fluid courses-images"
                                             src="https://zameenblog.s3.amazonaws.com/blog/wp-content/uploads/2019/09/cover-image-17.jpg"
                                             alt="">
                                    </a>
                                </div>
                                <div class="course_content">
                                    <!-- <span class="price">$25</span> -->
                                    <!-- <span class="tag mb-4 d-inline-block">3 Months</span> -->
                                    <h4 class="mb-3">
                                        <a href="tax-management-with-return-filing">
                                            Tax Management with Returns Filing</a>
                                    </h4>
                                    <!-- <p>One make creepeth man bearing their one firmament won't fowl meat over sea <br></p> -->
                                    <br>
                                    {{--                            <a href="tax-management-with-return-filing">Learn More</a>--}}
                                    <a href="{{url("/tax-management-with-return-filing")}}" class="btn btn-lmslogin1">Learn
                                        More</a>
                                    <a href="{{url("/enquiry-form/Tax-Management-with-Return-Filing")}}"
                                       class="btn btn-lmslogin1 float-right">Enquire Now</a>
                                    {{--                                    <div class="row">--}}
                                    {{--                                        <div class="text-center col-12" style="margin-top: 56px;color: #0B6DB5">--}}
                                    {{--                                            <button class="btn btn-primary">--}}
                                    {{--                                                Start today at PKR 20,460--}}
                                    {{--                                            </button>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}
                                </div>
                            </div>
                        </div>

                        {{--                        <div class="col-lg-6 mb-3">--}}
                        {{--                            <div class="single_course">--}}
                        {{--                                <div class="course_head">--}}
                        {{--                                    <a href="python-programming">--}}

                        {{--                                        <img class="img-fluid courses-images"--}}
                        {{--                                             src="https://cdn.activestate.com/wp-content/uploads/2021/12/python-coding-mistakes.jpg"--}}
                        {{--                                             alt="">--}}
                        {{--                                    </a>--}}
                        {{--                                </div>--}}
                        {{--                                <div class="course_content">--}}
                        {{--                                    <!-- <span class="price">$25</span> -->--}}
                        {{--                                    <!-- <span class="tag mb-4 d-inline-block">3 Months</span> -->--}}
                        {{--                                    <h4 class="mb-3">--}}
                        {{--                                        <a href="python-programming">--}}
                        {{--                                            Basic to Intermediate Python Programming</a>--}}
                        {{--                                    </h4>--}}
                        {{--                                    <!-- <p>One make creepeth man bearing their one firmament won't fowl meat over sea <br></p> -->--}}
                        {{--                                    <br>--}}
                        {{--                                    --}}{{--                            <a href="python-programming">Learn More</a>--}}
                        {{--                                    <a href="{{url("/python-programming")}}" class="btn btn-lmslogin1">Learn More</a>--}}
                        {{--                                    <a href="{{url("/enquiry-form/Basic-to-Intermediate-Python-Programming")}}"--}}
                        {{--                                       class="btn btn-lmslogin1 float-right">Enquire Now</a>--}}
                        {{--                                    --}}{{--                                    <div class="row">--}}
                        {{--                                    --}}{{--                                        <div class="text-center col-12" style="margin-top: 56px;color: #0B6DB5">--}}
                        {{--                                    --}}{{--                                            <button class="btn btn-primary">--}}
                        {{--                                    --}}{{--                                                Start today at PKR 18,925--}}
                        {{--                                    --}}{{--                                            </button>--}}
                        {{--                                    --}}{{--                                        </div>--}}
                        {{--                                    --}}{{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}

                        {{--Required--}}
                        <!--<div class="col-lg-6 mb-3">-->
                        <!--    <div class="single_course">-->
                        <!--        <div class="course_head">-->
                        <!--            <a href="effective-office-management-training-course">-->

                        <!--                <img class="img-fluid courses-images"-->
                        <!--                     src="http://seminar-bagus.com/wp-content/uploads/2016/10/Office-Management-Effective-Administration-skills-2.jpg"-->
                        <!--                     alt="">-->
                        <!--            </a>-->
                        <!--        </div>-->
                        <!--        <div class="course_content">-->
                        <!-- <span class="price">$25</span> -->
                        <!-- <span class="tag mb-4 d-inline-block">3 Months</span> -->
                        <!--            <h4 class="mb-3">-->
                        <!--                <a href="effective-office-management-training-course">-->
                        <!--                    Certificate in Office Management </a>-->
                        <!--            </h4>-->
                        <!-- <p>One make creepeth man bearing their one firmament won't fowl meat over sea <br></p> -->
                        <!--            <br>-->
                        <!--            {{--                            <a href="effective-office-management-training-course">Learn More</a>--}}-->
                        <!--            <a href="{{url("/effective-office-management-training-course")}}"-->
                        <!--               class="btn btn-lmslogin1">Learn More</a>-->
                        <!--            <a href="{{url("/enquiry-form/Certificate-in-Office-Management")}}"-->
                        <!--               class="btn btn-lmslogin1 float-right">Enquire Now</a>-->
                        {{--                                    <div class="row">--}}
                        {{--                                        <div class="text-center col-12" style="margin-top: 56px;color: #0B6DB5">--}}
                        {{--                                            <button class="btn btn-primary">--}}
                        {{--                                                Start today at PKR 12,276--}}
                        {{--                                            </button>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->


                        {{-- <div class="col-lg-4 mb-3">
                            <div class="single_course">
                                <div class="course_head">
                                    <a href="financial-modeling-analysis-advanced">
                                        <img class="img-fluid courses-images"
                                             src="img/Yourexcel-img/web_design.jpg" alt="">
                                    </a>
                                </div>
                                <div class="course_content">
                                    <!-- <span class="price">$25</span> -->
                                    <!-- <span class="tag mb-4 d-inline-block">4 Months</span> -->
                                    <h4 class="mb-3">
                                        <a href="ecommerce-web-design-and-development">
                                            Ecommerce Web Design and Development with (UI/UX) </a> </br><p
                                                style="display: none;">.</p>
                                    </h4>
                                    <!-- <p>One make creepeth man bearing their one firmament won't fowl meat over sea <br></p> -->
                                    <br>
                                    {{--                            <a href="financial-modeling-analysis-advanced">Learn More</a>-}}
                                    <a href="{{url("ecommerce-web-design-and-development")}}" class="btn btn-lmslogin1">Learn
                                        More</a>
                                    <a href="{{url("/enquiry-form/Ecommerce-Web-Design-and-Development")}}"
                                       class="btn btn-lmslogin1 float-right">Enquire Now</a>
                                    {{--                                    <div class="row">--}}
                                    {{--                                        <div class="text-center col-12" style="margin-top: 56px;color: #0B6DB5">--}}
                                    {{--                                            <button class="btn btn-primary">--}}
                                    {{--                                                Start today at PKR 15,346--}}
                                    {{--                                            </button>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>-}}
                                </div>

                            </div>
                        </div> --}}

                        {{--                        <div class="col-lg-6 mb-3">--}}
                        {{--                            <div class="single_course">--}}
                        {{--                                <div class="course_head">--}}
                        {{--                                    <a href="customer-services-specialist">--}}

                        {{--                                        <img class="img-fluid courses-images"--}}
                        {{--                                             src="https://hiring-assets.careerbuilder.com/media/attachments/careerbuilder-original-3206.jpg?1496237243"--}}
                        {{--                                             alt="">--}}
                        {{--                                    </a>--}}
                        {{--                                </div>--}}
                        {{--                                <div class="course_content">--}}
                        {{--                                    <!-- <span class="price">$25</span> -->--}}
                        {{--                                    <!-- <span class="tag mb-4 d-inline-block">3 Months</span> -->--}}
                        {{--                                    <h4 class="mb-3">--}}
                        {{--                                        <a href="customer-services-specialist">--}}
                        {{--                                            Customer Services Specialist</a>--}}
                        {{--                                    </h4>--}}
                        {{--                                    <!-- <p>One make creepeth man bearing their one firmament won't fowl meat over sea <br></p> -->--}}
                        {{--                                    <br>--}}
                        {{--                                    --}}{{--                            <a href="customer-services-specialist">Learn More</a>--}}
                        {{--                                    <a href="{{url("/customer-services-specialist")}}" class="btn btn-lmslogin1">Learn--}}
                        {{--                                        More</a>--}}
                        {{--                                    <a href="{{url("/enquiry-form/Customer-Services-Specialist")}}"--}}
                        {{--                                       class="btn btn-lmslogin1 float-right">Enquire Now</a>--}}
                        {{--                                    --}}{{--                                    <div class="row">--}}
                        {{--                                    --}}{{--                                        <div class="text-center col-12" style="margin-top: 56px;color: #0B6DB5">--}}
                        {{--                                    --}}{{--                                            <button class="btn btn-primary">--}}
                        {{--                                    --}}{{--                                                Start today at PKR 28,644--}}
                        {{--                                    --}}{{--                                            </button>--}}
                        {{--                                    --}}{{--                                        </div>--}}
                        {{--                                    --}}{{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}

                        {{--                        <div class="col-lg-6 mb-3">--}}
                        {{--                            <div class="single_course">--}}
                        {{--                                <div class="course_head">--}}
                        {{--                                    <a href="excelling-in-linkedln-profile-and-job-interviews">--}}

                        {{--                                        <img class="img-fluid courses-images"--}}
                        {{--                                             src="https://media.licdn.com/dms/image/C4D12AQH68s70k6Qr1A/article-cover_image-shrink_720_1280/0/1605737054567?e=2147483647&v=beta&t=5J2PBZFWdzqfwugUllDASkP1uxXzSfLGOVxGoiW3-Bc"--}}
                        {{--                                             alt="">--}}
                        {{--                                    </a>--}}
                        {{--                                </div>--}}
                        {{--                                <div class="course_content">--}}
                        {{--                                    <!-- <span class="price">$25</span> -->--}}
                        {{--                                    <!-- <span class="tag mb-4 d-inline-block">3 Months</span> -->--}}
                        {{--                                    <h4 class="mb-3">--}}
                        {{--                                        <a href="excelling-in-linkedln-profile-and-job-interviews">--}}
                        {{--                                            Excelling in Linkedln profile and Job Interviews</a>--}}
                        {{--                                    </h4>--}}
                        {{--                                    <!-- <p>One make creepeth man bearing their one firmament won't fowl meat over sea <br></p> -->--}}
                        {{--                                    <br>--}}
                        {{--                                    --}}{{--                                <a href="excelling-in-linkedln-profile-and-job-interviews">Learn More</a>--}}
                        {{--                                    <a href="{{url("/excelling-in-linkedln-profile-and-job-interviews")}}"--}}
                        {{--                                       class="btn btn-lmslogin1">Learn More</a>--}}
                        {{--                                    <a href="{{url("/enquiry-form/Excelling-in-Linkedln-profile-and-Job-Interviews")}}"--}}
                        {{--                                       class="btn btn-lmslogin1 float-right">Enquire Now</a>--}}
                        {{--                                    --}}{{--                                    <div class="row">--}}
                        {{--                                    --}}{{--                                        <div class="text-center col-12" style="margin-top: 56px;color: #0B6DB5">--}}
                        {{--                                    --}}{{--                                            <button class="btn btn-primary">--}}
                        {{--                                    --}}{{--                                                Start today at PKR 1,500--}}
                        {{--                                    --}}{{--                                            </button>--}}
                        {{--                                    --}}{{--                                        </div>--}}
                        {{--                                    --}}{{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}

                        {{--                        <div class="col-lg-6 mb-3">--}}
                        {{--                            <div class="single_course">--}}
                        {{--                                <div class="course_head">--}}
                        {{--                                    <a href="{{url("/excel-skills-for-business-forecasting")}}">--}}

                        {{--                                        <img class="img-fluid courses-images"--}}

                        {{--                                             src="{{url("/img/excel_skill.jpeg")}}"--}}
                        {{--                                             alt="">--}}
                        {{--                                    </a>--}}
                        {{--                                </div>--}}
                        {{--                                <div class="course_content">--}}
                        {{--                                    <!-- <span class="price">$25</span> -->--}}
                        {{--                                    <!-- <span class="tag mb-4 d-inline-block">3 Months</span> -->--}}
                        {{--                                    <h4 class="mb-3">--}}
                        {{--                                        <a href="{{url("/excel-skills-for-business-forecasting")}}">--}}
                        {{--                                            Excel Skills for Business Forecasting</a>--}}
                        {{--                                    </h4>--}}
                        {{--                                    <!-- <p>One make creepeth man bearing their one firmament won't fowl meat over sea <br></p> -->--}}
                        {{--                                    <br>--}}
                        {{--                                    --}}{{--                                <a href="excelling-in-linkedln-profile-and-job-interviews">Learn More</a>--}}
                        {{--                                    <a href="{{url("/excel-skills-for-business-forecasting")}}"--}}
                        {{--                                       class="btn btn-lmslogin1">Learn More</a>--}}
                        {{--                                    <a href="{{url("/enquiry-form/Excel-Skills-for-Business-Forecasting")}}"--}}
                        {{--                                       class="btn btn-lmslogin1 float-right">Enquire Now</a>--}}
                        {{--                                    --}}{{--                                    <div class="row">--}}
                        {{--                                    --}}{{--                                        <div class="text-center col-12" style="margin-top: 56px;color: #0B6DB5">--}}
                        {{--                                    --}}{{--                                            <button class="btn btn-primary">--}}
                        {{--                                    --}}{{----}}
                        {{--                                        Start today at PKR 1,500--}}
                        {{--                                    --}}{{--                                            </button>--}}
                        {{--                                    --}}{{--                                        </div>--}}
                        {{--                                    --}}{{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}

                        {{--                        </div>--}}

                        {{--Required--}}
                        {{-- <div class="col-lg-4 mb-3">
                            <div class="single_course">
                                <div class="course_head">
                                    <a href="{{url("/certificate-in-information-technology")}}">

                                        <img class="img-fluid courses-images"

                                             src="https://i0.wp.com/www.techquintal.com/wp-content/uploads/2021/05/Information-Technology.jpg?fit=1024%2C576&ssl=1"
                                             alt="">
                                    </a>
                                </div>
                                <div class="course_content">
                                    <!-- <span class="price">$25</span> -->
                                    <!-- <span class="tag mb-4 d-inline-block">3 Months</span> -->
                                    <h4 class="mb-3">
                                        <a href="{{url("/certificate-in-information-technology")}}">
                                            Certificate in Information Technology</a>
                                    </h4>
                                    <!-- <p>One make creepeth man bearing their one firmament won't fowl meat over sea <br></p> -->
                                    <br>
                                    {{--                                <a href="excelling-in-linkedln-profile-and-job-interviews">Learn More</a>-}}
                                    <a href="{{url("/certificate-in-information-technology")}}"
                                       class="btn btn-lmslogin1">Learn More</a>
                                    <a href="{{url("/enquiry-form/Certificate-in-Information-Technology")}}"
                                       class="btn btn-lmslogin1 float-right">Enquire Now</a>
                                    {{--                                    <div class="row">--}}
                                    {{--                                        <div class="text-center col-12" style="margin-top: 56px;color: #0B6DB5">--}}
                                    {{--                                            <button class="btn btn-primary">--}}
                                    {{--
                                        Start today at PKR 1,500--}}
                                    {{--                                            </button>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>-}}
                                </div>
                            </div>
                        </div> --}}

                        {{--                        </div>--}}
                        <!--<div class="col-lg-6 mb-3">-->
                        <!--    <div class="single_course">-->
                        <!--        <div class="course_head">-->
                        <!--            <img class="img-fluid courses-images" src="img/Yourexcel-img/accounting.jpg" alt="">-->
                        <!--        </div>-->
                        <!--        <div class="course_content">-->
                        <!-- <span class="price">$25</span> -->
                        <!-- <span class="tag mb-4 d-inline-block">6 Months</span> -->
                        <!--            <h4 class="mb-3">-->
                        <!--                <a href="financial-accounting">-->
                        <!--                Financial Accounting </a></br><p style="display: none;">.</p> <br><p style="display: none;">.</p>-->
                        <!--            </h4>-->
                        <!-- <p>One make creepeth man bearing their one firmament won't fowl meat over sea <br></p> -->
                        <!--            <br>-->
                        <!--            <a href="financial-accounting">Learn More</a>-->
                        <!--            <a href="#" class="btn btn-lmslogin1 float-right" data-toggle="modal"-->
                        <!--                data-target="#Lead-form">Enquire Now</a>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="col-lg-8"></div>-->
                        <!--<div class="col-lg-4 mt-5" style="margin-bottom:20px">-->
                        <!--    <div class="text-center">-->
                        <!--        <a href="compare-courses" class="btn btn-lg w-100 btn-view-courses">COMPARE COURSES</a>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<br/><br/>-->
                    </div>
                </div>
            </div>
            <div class="row text-center">
           
                          <div class="col-lg-4 mt-5" style="margin-bottom:20px">
                              </div>
                        <div class="col-lg-4 mt-5" style="margin-bottom:20px">
                            <div class="text-center">
                                <a href="compare-courses" class="btn btn-lg w-100 btn-view-courses">COMPARE COURSES</a>
                            </div>
                            </div>
                            
                              <div class="col-lg-4 mt-5" style="margin-bottom:20px">
                              </div>
                      
            </div>

            <!-- modal box Lead Form start  -->
            <!-- Modal -->
            <div class="modal fade" id="Lead-form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                 aria-hidden="true" data-backdrop="static" data-keyboard="false">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                    onClick="window.location.reload();">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="register_form">
                                <img src="img/Yourexcel-img/excel-logo-new.png" class="Logo" alt="">
                                <h3 style="text-align: lef;">Enquire Now</h3>
                                <p style="text-align: lef;">our representative will contact you.</p>
                                <form class="form_area" action="{{url('nomanform')}}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12 form_group">
                                            <input name="name" placeholder="Your Name" required="" type="text">
                                            <input name="phone" id="phone" placeholder="Phone No" required=""
                                                   type="tel">
                                            <!-- <input name="datetime" placeholder="Date & Time" required="" type="datetime-local"> -->
                                            <input name="email" placeholder="Your Email Address"
                                                   pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                                                   required=""
                                                   type="email">
                                            <!-- <input name="coursesintrested" placeholder="Course You are Intrested In " required=""
                                                type="text"> -->
                                            <!-- <input type="search" placeholder="Type of Courses"> -->
                                            <select class="selectpicker" name="coursesintrested" id="coursesintrested"
                                                    multiple
                                                    aria-label="Default select example" data-live-search="true"
                                                    placeholder="Choose from dropdown list">
                                                <!-- <option value="Choose from dropdown list" selected readonly>Choose from dropdown list</option> -->
                                                <option value="Financial Modeling and Analysis">Financial Modeling and
                                                    Analysis
                                                </option>
                                                <option value="Dashboard Reporting with Power BI">Dashboard Reporting
                                                    with Power BI
                                                </option>
                                                <option value="Advanced MS Excel">Advanced MS Excel</option>
                                                <option value="Data Analytics with Tableau">Data Analytics with Tableau
                                                </option>
                                                <option value="Computerized Accounting">Computerized Accounting</option>
                                                <option value="Tax Management with Return Filing">Tax Management with
                                                    Return Filing
                                                </option>
                                                <option value="Data Science with BI Reporting">Data Science with BI
                                                    Reporting
                                                </option>
                                                <option value="Basic to Intermediate Python Programming">Basic to
                                                    Intermediate Python Programming
                                                </option>
                                                <option value="Certificate in Office Management Course">Certificate in
                                                    Office Management Course
                                                </option>
                                                <option value="Customer Services Specialist">Customer Services
                                                    Specialist
                                                </option>
                                                <option value="Other">Other</option>
                                            </select>
                                            <input name="comments" placeholder="Comments" type="text" required="">
                                            <div class="captcha">
                                                <div class="spinner">
                                                    <label>
                                                        <input type="checkbox"
                                                               onclick="$(this).attr('disabled','disabled');"
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
                                            <button type="submit" id="submit" class="primary-btn primary-btnn">Submit
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal box Lead Form start  -->

        </div>
    </section>
@endsection
<!-- ====================== End CEO Area ======================== -->
