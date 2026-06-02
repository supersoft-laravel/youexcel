<!--================ Start Header Menu Area =================-->
@extends('website.app')
<!--================ End Header Menu Area =================-->

<!--================ Start Home Banner Area =================-->
@section('content')
<section class="banner-img-cdra" style="background-color: #e8e8e8;">
    <div class="banner_inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-text1 main-banner-padding text-center">
                        <h2 class="text-uppercase mt-4 mb-5 banner-heading">
                                Data Science with BI Reporting
                            <!-- <div>
                                <a href="video-demo-financial-modeling" target="_blank"><i class="fa fa-play-circle"
                                        aria-hidden="true" style="color: #fff"></i></a>
                            </div>
                            <div>
                                <a href="video-demo-financial-modeling" target="_blank">
                                    <h5 style="color: #fff; text-decoration:underline;">View video demo</h5>
                                </a>
                            </div> -->
{{--                            <div>--}}
{{--                                <a type="button" data-toggle="modal" data-target="#financeModal"><i class="fa fa-play-circle" aria-hidden="true" style="color: #fff"></i></a>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <a href="#" data-toggle="modal" data-target="#financeModal"><h5 style="color: #fff; text-decoration:underline;">View video demo</h5></a>--}}
{{--                            </div>--}}
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
<div class="modal fade" id="financeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <h1 class="mb-3">Financial Modeling & Analysis</span></h1>
                        <iframe class="youtube-video" src="https://www.youtube.com/embed/SM6wH6DKLiQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                <a class="nav-link" href="#Value-added-Services">Value-added Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#Career-paths">Career Paths</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#Registation_form">Registration Form</a>
            </li>
        </ul>
    </div>

</nav>
<!-- navbar end  -->
<section id="outcome">
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8 mt-5 mb-5">
                <h2>ABOUT THE COURSE:</h2>
                <p>This is an introductory course designed for data analysis. It is best suited for
                 the professionals who report report business insights to take data-driven
                 management decisions in the field of marketing, finance, HR, supply chain,
                 health care or digital marketing. The course is also for the programmers
                 who want to add valuable insights on raw data by using data science.
                </p>
            </div>
            <div class="col-lg-12">
                <div class="card p-4">
                    <h4>WHAT YOU WILL LEARN</h4>
                    <div class="row mt-4" id="course-outline">
                        <div class="col-lg-6">
                            <ul style="display: flex;">
                                <span><i class="fas fa-check" aria-hidden="true"></i></span>&emsp; <p
                                    style="font-size: 17px;"> Acquire datasets from the web</p>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul style="display: flex;">
                                <span><i class="fas fa-check" aria-hidden="true"></i></span>&emsp; <p
                                    style="font-size: 17px;"> Clean and preprocess data sets</p>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul style="display: flex;">
                                <span><i class="fas fa-check" aria-hidden="true"></i></span>&emsp; <p
                                    style="font-size: 17px;"> Tabulate data</p>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul style="display: flex;">
                                <span><i class="fas fa-check" aria-hidden="true"></i></span>&emsp; <p
                                    style="font-size: 17px;"> Filter Relevant data, based on
                                    the optimized objective</p>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul style="display: flex;">
                                <span><i class="fas fa-check" aria-hidden="true"></i></span>&emsp; <p
                                    style="font-size: 17px;"> Visualize data for impactful presentation</p>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul style="display: flex;">
                                <span><i class="fas fa-check" aria-hidden="true"></i></span>&emsp; <p
                                    style="font-size: 17px;"> Predict future trends using data science techniques</p>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!------------------- Module Colapse start  ----------->

<section class="mt-5">
<div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="mt-5">COURSE OUTLINE:</h2>
                <div class="row">
                    <div class="col-lg-6 mt-2">
                        <div class="panel-group" id="accordion1">
                            <div class="card">
                                <div class="card-header">
                                    <a class="collapsed" data-bs-toggle="collapse" data-parent="#accordion1"
                                        href="#collapse-amenities1">
                                        <h3 class="panel-title"><span style="color: red;">Module 1:</span> Introduction to PowerBI:</h3>
                                    </a>
                                </div>
                                <div id="collapse-amenities1" class="panel-collapse collapse">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12">

                                                    <ul>
                                                        <p class="li-line-height">1.1 Top Menu</p>
                                                        <p class="li-line-height">1.2 Side Panels</p>
                                                        <p class="li-line-height">1.3 Query Editor</p>
                                                    </ul>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-6 mt-2">
                        <div class="panel-group" id="accordion2">
                            <div class="card">
                                <div class="card-header">
                                    <a class="collapsed" data-bs-toggle="collapse" data-parent="#accordion2"
                                        href="#collapse-amenities2">
                                        <h3 class="panel-title"><span style="color: red;">Module 2:</span> Data Visualizations</h3>
                                    </a>
                                </div>
                                <div id="collapse-amenities2" class="panel-collapse collapse">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                    <ul>
                                                        <p class="li-line-height">2.1 Box Plot</p>
                                                        <p class="li-line-height">2.2 Bar Chart</p>
                                                        <p class="li-line-height">2.3 Stack Bar Chart</p>
                                                        <p class="li-line-height">2.4 Pie Chart</p>
                                                        <p class="li-line-height">2.5 Time Series</p>
                                                        <p class="li-line-height">2.6 Decomposition</p>
                                                    </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 mt-2">
                        <div class="panel-group" id="accordion">
                            <div class="card">
                                <div class="card-header">
                                    <a class="collapsed" data-bs-toggle="collapse" data-parent="#accordion"
                                        href="#collapse-amenities3">
                                        <h3 class="panel-title"><span style="color: red;">Module 3:</span> How to load data</h3>
                                    </a>
                                </div>
                                <div id="collapse-amenities3" class="panel-collapse collapse">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <ul>
                                                    <p class="li-line-height">3.1 Load CSV/Excel files
                                                    </p>
                                                    <p class="li-line-height">3.2 Load data from Web</p>
                                                    <p class="li-line-height">3.3 How to add visualizations from marketplace
                                                    </p>
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
                                        <h3 class="panel-title"><span style="color: red;">Module 4:</span> Acquiring Data & Big Data</h3>
                                    </a>
                                </div>
                                <div id="collapse-amenities4" class="panel-collapse collapse">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                    <ul>
                                                        <p class="li-line-height">4.1 What is Big Data
                                                        </p>
                                                        <p class="li-line-height">4.2 Streaming Live Data</p>
                                                        <p class="li-line-height">4.3 Downloading Sample dataset</p>
                                                    </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 mt-2">
                        <div class="panel-group" id="accordion">
                            <div class="card">
                                <div class="card-header">
                                    <a class="collapsed" data-bs-toggle="collapse" data-parent="#accordion"
                                        href="#collapse-amenities5">
                                        <h3 class="panel-title"><span style="color: red;">Module 5:</span> Data Modelling</h3>
                                    </a>
                                </div>
                                <div id="collapse-amenities5" class="panel-collapse collapse">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                    <ul>
                                                        <p class="li-line-height">5.1 Connecting tables in Power BI
                                                        </p>
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
                                        <h3 class="panel-title"><span style="color: red;">Module 6:</span> DAX</h3>
                                    </a>
                                </div>
                                <div id="collapse-amenities6" class="panel-collapse collapse">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                    <ul>
                                                        <p class="li-line-height">6.1 Running Simple DAX Queries
                                                        </p>
                                                    </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 mt-2">
                        <div class="panel-group" id="accordion">
                            <div class="card">
                                <div class="card-header">
                                    <a class="collapsed" data-bs-toggle="collapse" data-parent="#accordion"
                                        href="#collapse-amenities7">
                                        <h3 class="panel-title"><span style="color: red;">Module 7:</span> Types Of Data</h3>
                                        <br>
                                    </a>
                                </div>
                                <div id="collapse-amenities7" class="panel-collapse collapse">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                    <ul>
                                                        <p class="li-line-height">7.1 Continuous and Discrete
                                                        </p>
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
                                <div class="card-header py-3">
                                    <a class="collapsed" data-bs-toggle="collapse" data-parent="#accordion"
                                        href="#collapse-amenities8">
                                        <h3 class="panel-title"><span style="color: red;">Module 8:</span> Basics of Data Analysis</h3>
                                    </a>
                                </div>
                                <div id="collapse-amenities8" class="panel-collapse collapse">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                    <ul>
                                                        <p class="li-line-height">8.1 Binning and Grouping
                                                        </p>
                                                        <p class="li-line-height">8.2 Skew and Tail Analysis
                                                        </p>
                                                    </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 mt-2">
                        <div class="panel-group" id="accordion">
                            <div class="card">
                                <div class="card-header">
                                    <a class="collapsed" data-bs-toggle="collapse" data-parent="#accordion"
                                        href="#collapse-amenities9">
                                        <h3 class="panel-title"><span style="color: red;">Module 9:</span> Feature Engineering</h3>
                                    </a>
                                </div>
                                <div id="collapse-amenities9" class="panel-collapse collapse">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                    <ul>
                                                        <p class="li-line-height">9.1 Identifying patterns</p>
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
                                        <h3 class="panel-title"><span style="color: red;">Module 10:</span> Data cleaning</h3>
                                    </a>
                                </div>
                                <div id="collapse-amenities10" class="panel-collapse collapse">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                    <ul>
                                                        <p class="li-line-height">10.1 Handling Sparse Data</p>
                                                        <p class="li-line-height">10.2 Using Frequency and Median (percentile) to clean data</p>
                                                        <p class="li-line-height">10.3 Different types of averages used for data cleaning</p>
                                                        <p class="li-line-height">10.4 Using Mode for categorical data</p>
                                                    </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 mt-2">
                        <div class="panel-group" id="accordion">
                            <div class="card" id="trainer">
                                <div class="card-header">
                                    <a class="collapsed" data-bs-toggle="collapse" data-parent="#accordion"
                                        href="#collapse-amenities11">
                                        <h3 class="panel-title"><span style="color: red;">Module 11:</span> Trend Analysis
                                        </h3>
                                    </a>
                                </div>
                                <div id="collapse-amenities11" class="panel-collapse collapse">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                    <ul>
                                                        <p class="li-line-height">11.1 Handling Cyclucal Data
                                                        </p>
                                                        <p class="li-line-height">11.2 Identifying Trends
                                                        </p>
                                                        <p class="li-line-height">11.3 Dashboard Actionable Insights</p>
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
                                        href="#collapse-amenities12">
                                        <h3 class="panel-title"><span style="color: red;">Module 12:</span> Introduction to Python
                                        </h3><br>
                                    </a>
                                </div>
                                <div id="collapse-amenities12" class="panel-collapse collapse">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                    <ul>
                                                        <p class="li-line-height">12.1 Basics of Collaboratory</p>
                                                        <p class="li-line-height">12.2 Introduction to syntax, keywords and data types</p>
                                                        <p class="li-line-height">12.3 Loops and conditions</p>
                                                        <p class="li-line-height">12.4 Basic libraries: NumPy, SciPy and Pandas</p>
                                                        <p class="li-line-height">12.5 Data Acquisition, types of data files</p>
                                                        <p class="li-line-height">12.6 Web scraping</p>
                                                        <p class="li-line-height">12.7 Data handling using Pandas library</p>
                                                    </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel-group" id="accordion">
                            <div class="card" id="trainer">
                                <div class="card-header py-3">
                                    <a class="collapsed" data-bs-toggle="collapse" data-parent="#accordion"
                                        href="#collapse-amenities11">
                                        <h3 class="panel-title"><span style="color: red;">Module 13:</span> SQL
                                        </h3>
                                    </a>
                                </div>
                                <div id="collapse-amenities11" class="panel-collapse collapse">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                    <ul>
                                                        <p class="li-line-height">13.1 Selecting columns
                                                        </p>
                                                        <p class="li-line-height">13.2 Filter tables
                                                        </p>
                                                        <p class="li-line-height">13.3 Aggregate functions to summarize data and gain useful insights</p>
                                                        <p class="li-line-height">13.4 Use aliases to make your results more readable</p>
                                                        <p class="li-line-height">13.5 Sorting and grouping your results</p>
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
                                        href="#collapse-amenities12">
                                        <h3 class="panel-title"><span style="color: red;">Module 14:</span> Advanced Analytics
                                        </h3><br>
                                    </a>
                                </div>
                                <div id="collapse-amenities12" class="panel-collapse collapse">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                    <ul>
                                                        <p class="li-line-height">14.1 Marketing Analytics</p>
                                                        <p class="li-line-height">14.2 Know Your Customer Analytics</p>
                                                    </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 mt-2">
                        <div class="panel-group" id="accordion">
                            <div class="card" id="trainer">
                                <div class="card-header py-3">
                                    <a class="collapsed" data-bs-toggle="collapse" data-parent="#accordion"
                                        href="#collapse-amenities11">
                                        <h3 class="panel-title"><span style="color: red;">Module 15:</span> Forecasting Techniques
                                        </h3>
                                    </a>
                                </div>
                                <div id="collapse-amenities11" class="panel-collapse collapse">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                    <ul>
                                                        <p class="li-line-height">15.1 Cluster Analysis
                                                        </p>
                                                        <p class="li-line-height">15.2 Classifications Analysis
                                                        </p>
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
                                        href="#collapse-amenities12">
                                        <h3 class="panel-title"><span style="color: red;">Module 16:</span> Statistical Data Analysis
                                        </h3><br>
                                    </a>
                                </div>
                                <div id="collapse-amenities12" class="panel-collapse collapse">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                    <ul>
                                                        <p class="li-line-height">16.1 Introduction to linear regression</p>
                                                        <p class="li-line-height">16.2 Applying linear regression on big data</p>
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
                </div>
        </section>
<!-- Module Colapse start  -->

<section>
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-12 text-center">
                <h2>TRAINER PROFILE</h2>
            </div>
        </div>
        <div class="row padding-top-section">
            <div class="col-lg-6 mt-5 mb-5">
                <div class="image-wrapperrr image-wrapperrr1" data-aos="fade-down">
                    <img class="images11" src="img/Yourexcel-img/pic-1.png" />
                </div>
            </div>

            <div class="col-lg-1"></div>
            <div class="col-lg-5 mt-5 mb-5" data-aos="fade-down">
                <h2>Farah Mehboob</h2>
                <h4>
                    Data Science with BI Reporting
                    <br>
                </h4>
                <p class="designation">
                    CEO of Valider
                    UNITAR qualified on Introduction to Data Governance For Monitoring The SGDS
                    RWRI Alumni
                    Founding member of ASPIRE Pakistan
                    Motivational Speaker
                </p>
                <div class="mb-4" id="duration">
                    <p>
                        Farah Mehboob is a Tech Entrepreneur. She has worked as an Analyst at Afiniti and taught data science
                        courses at different forums. Farah is listed on United Nation's Information Security Hall of Fame.
                    </p>
                </div>
                <div>
                    <a href="Farah-Mehboob" class="btn btn-lmslogin1">View More</a>
                </div>

            </div>
        </div>
    </div>
</section>
<div id="Pre-requisite"></div>
<section>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>DURATION</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4 mt-3 text-center">
                            <td>20 hours</td>
            </div>
        </div>
    </div>
</section>
<div id="Career-paths"></div>

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
                            <td class="text-center"> A working knowledge of Management Information Systems, ability to use Microsoft Word
                                and background in basic math and statistics(ability to apply linear regression).
                            </td>

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
                <h2>CAREER-PATHS</h2>
            </div>
        </div>
        <div class="row" id="Registation-form">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <ul>
                    <div id="Value-added-Services"></div>
                    <li> MIS Reporting Analyst</li>
                    <li> Business Intelligence Analyst</li>
                    <li> Data Analyst </li>
                    <li> Data Visualization Specialist</li>
                    <li> Quantitative Analyst</li>
                    <li> Data Scientist</li>
                    <li> IT Operations Analyst</li>
                </ul>
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
                    <li>Lifetime access to exclusive YouExcel alumni via WhatsApp and Facebook groups</li>
                    <li>Fully equipped training center venue for on-campus trainings readily available with laptops,
                        projectors and air-conditioning
                    </li>
                    <div id="Registation_form"></div>

                    <li>Virtual training facility available</li>
                    <li>Guest  speaker sessions for latest market insights from business leaders</li>
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
                    <a class="btn btn-lmslogin mb-4 btn-lg" href="Registration-Form/Data-Science-with-BI-Reporting">Click here to Register Online </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
<!-- ====================== End CEO Area ======================== -->
