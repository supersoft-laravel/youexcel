<!--================ Start Header Menu Area =================-->
@extends('website.app')
<!--================ End Header Menu Area =================-->

<!--================ Start Home Banner Area =================-->
@section('content')
    <section class="banner-img-tablaue" style="background-color: #e8e8e8;">
        <div class="banner_inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-text1 main-banner-padding text-center">
                            <h2 class="text-uppercase mt-4 mb-5 banner-heading">
                                Data Analytics with TABLEAU
                                <!-- <div>
                               <a href="video-demo-financial-modeling" target="_blank"><i class="fa fa-play-circle" aria-hidden="true" style="color: #fff"></i></a>
                                </div>
                                <div>
                                <a href="video-demo-financial-modeling" target="_blank"><h5 style="color: #fff; text-decoration:underline;">View video demo</h5></a>
                                </div> -->
                                <div>
                                    <a type="button" data-toggle="modal" data-target="#financeModal"><i
                                            class="fa fa-play-circle" aria-hidden="true" style="color: #fff"></i></a>
                                </div>
                                <div>
                                    <a href="#" data-toggle="modal" data-target="#financeModal"><h5
                                            style="color: #fff; text-decoration:underline;">View video demo</h5></a>
                                </div>
                                <!-- Button trigger modal -->
                            </h2>
                            <section id="about"></section>
                        </div>
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
                                        <h1 class="mb-3">Financial Modeling & Analysis</span></h1>
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
                    <a class="nav-link" href="#Value-added-Services">Value-added Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Pre-requisite">Pre-Requisite</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Career-paths">Career Paths</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Registation-form">Registration Form</a>
                </li>
            </ul>
        </div>
        <div id="outcome"></div>
    </nav>
    <!-- navbar end  -->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-5">
                    <h2>ABOUT THE COURSE:</h2>
                    <p>Tableau is a leading data visualization, reporting, and business intelligence tool. <br>This
                        course will help you learn from basics to advanced topics. <br>Enroll now to begin your career
                        in analytics by learning Tableau.
                    </p>
                </div>
                <div class="col-lg-12">
                    <div class="card p-4">
                        <h4>WHAT YOU WILL LEARN</h4>
                        <div class="row mt-4" id="course-outline">
                            <div class="col-lg-6">
                                <ul style="display: flex;">
                                    <span><i class="fas fa-check" aria-hidden="true"></i></span>&emsp; <p
                                        style="font-size: 17px;"> Create interactive dashboards to see whole company
                                        data in
                                        one snap-shot</p>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul style="display: flex;">
                                    <span><i class="fas fa-check" aria-hidden="true"></i></span>&emsp; <p
                                        style="font-size: 17px;"> Integrate existing data with Power BI seamlessly with
                                        any
                                        source</p>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul style="display: flex;">
                                    <span><i class="fas fa-check" aria-hidden="true"></i></span>&emsp; <p
                                        style="font-size: 17px;">Organize data, and design dashboards to facilitate more
                                        data-driven business decisions with one snap-shot panoramic view of your company
                                        performance.</p>
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
                            <div class="panel-group" id="accordion">
                                <div class="card">
                                    <div class="card-header">
                                        <a class="collapsed" data-bs-toggle="collapse" data-parent="#accordion"
                                           href="#collapse-amenities1">
                                            <h3 class="panel-title"><span style="color: red;">Module 1:</span> Getting
                                                Started with Tableau</h3>
                                        </a>
                                    </div>
                                    <div id="collapse-amenities1" class="panel-collapse collapse">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <ul>
                                                        <p class="li-line-height">1.1 Getting Started with MS Excel </p>
                                                        <p class="li-line-height">1.2 Download and Install Tableau
                                                            Public
                                                        </p>
                                                        <p class="li-line-height">1.3 Load Data from MS Excel </p>
                                                        <p class="li-line-height">1.4 User Interface of Tableau Key
                                                            Takeaways </p>
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
                                           href="#collapse-amenities2">
                                            <h3 class="panel-title"><span style="color: red;">Module 2:</span> Core
                                                Tableau
                                                in Topics</h3>
                                        </a>
                                    </div>
                                    <div id="collapse-amenities2" class="panel-collapse collapse">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <ul>
                                                        <p class="li-line-height">2.1 Tableau vs MS Excel </p>
                                                        <p class="li-line-height">2.2 Tableau vs Power BI Desktop </p>
                                                        <p class="li-line-height">2.3 Dimensions vs. Measures </p>
                                                        <p class="li-line-height">2.4 Discrete vs Continuous </p>
                                                        <p class="li-line-height">2.5 Live vs Extract </p>
                                                        <p class="li-line-height">2.6 Application of Discrete and
                                                            Continuous Fields </p>
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
                                            <h3 class="panel-title"><span style="color: red;">Module 3:</span>
                                                Formatting
                                                in Tableau</h3>
                                        </a>
                                    </div>
                                    <div id="collapse-amenities3" class="panel-collapse collapse">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <ul>
                                                        <p class="li-line-height">3.1 Color, Size, Label, Detail,
                                                            Tooltip
                                                        </p>
                                                        <p class="li-line-height">3.2 Font, Alignment , Shading, Border
                                                            and Lining </p>
                                                        <p class="li-line-height">3.3 Annotation, Title & Cation </p>
                                                        <p class="li-line-height">3.4 Legends, Highlighters and themes
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
                                            <h3 class="panel-title"><span style="color: red;">Module 4:</span> Working
                                                with
                                                Metadata</h3>
                                        </a>
                                    </div>
                                    <div id="collapse-amenities4" class="panel-collapse collapse">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <ul>
                                                        <p class="li-line-height">4.1 View Data </p>
                                                        <p class="li-line-height">4.2 Data Types </p>
                                                        <p class="li-line-height">4.3 Managing Metadata </p>
                                                        <p class="li-line-height">4.4 Rename, Hide, Unhide and Sort
                                                            Columns </p>
                                                        <p class="li-line-height">4.5 Default Properties of Fields </p>
                                                        <p class="li-line-height">4.6 Title and Caption (Repeated
                                                            remove)
                                                        </p>
                                                        <p class="li-line-height">4.7 Drill Down and Hierarchies </p>
                                                        <p class="li-line-height">4.8 Combine </p>
                                                        <p class="li-line-height">4.9 Granularity </p>
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
                                            <h3 class="panel-title"><span style="color: red;">Module 5:</span> Filters
                                                in
                                                Tableau</h3>
                                            <br>
                                        </a>
                                    </div>
                                    <div id="collapse-amenities5" class="panel-collapse collapse">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <ul>
                                                        <p class="li-line-height">5.1 Filter Shelf </p>
                                                        <p class="li-line-height">5.2 Data Filter </p>
                                                        <p class="li-line-height">5.3 Interactive Filter </p>
                                                        <p class="li-line-height">5.4 Date Filter </p>
                                                        <p class="li-line-height">5.5 Advanced Interactive Filter </p>
                                                        <p class="li-line-height">5.6 Format Filter </p>
                                                        <p class="li-line-height">5.7 Dimension Filter </p>
                                                        <p class="li-line-height">5.8 Measure Filter </p>
                                                        <p class="li-line-height">5.9 Visual filter </p>
                                                        <p class="li-line-height">5.10 Data Source Filter </p>
                                                        <p class="li-line-height">5.11 Context Filter </p>
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
                                            <h3 class="panel-title"><span style="color: red;">Module 6:</span> Applying
                                                Analytics to the worksheet</h3>
                                        </a>
                                    </div>
                                    <div id="collapse-amenities6" class="panel-collapse collapse">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <ul>
                                                        <p class="li-line-height">6.1 Sets, Parameters and Group </p>
                                                        <p class="li-line-height">6.2 Calculated Fields </p>
                                                        <p class="li-line-height">6.3 Computing Using </p>
                                                        <p class="li-line-height">6.4 Date Functions </p>
                                                        <p class="li-line-height">6.5 Text Functions </p>
                                                        <p class="li-line-height">6.6 Logical Functions </p>
                                                        <p class="li-line-height">6.7 String Functions </p>
                                                        <p class="li-line-height">6.8 Lookup and Reference Functions</p>
                                                        <p class="li-line-height">6.9 Creating Bins </p>
                                                        <p class="li-line-height">6.10 Constant Line and Average
                                                            Line </p>
                                                        <p class="li-line-height">6.11 Trend Lines and Forecast </p>
                                                        <p class="li-line-height">6.12 Reference Line, Reference Band,
                                                            Distribution Band </p>
                                                        <p class="li-line-height">6.13 Table Calculations </p>
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
                                            <h3 class="panel-title"><span style="color: red;">Module 7:</span> Creating
                                                Charts in Tableau</h3>
                                        </a>
                                    </div>
                                    <div id="collapse-amenities7" class="panel-collapse collapse">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <ul>
                                                        <p class="li-line-height">7.1 Creating and Highlight Tables </p>
                                                        <p class="li-line-height">7.2 Simple Pi and Multiple Pi
                                                            Chart </p>
                                                        <p class="li-line-height">7.3 Bubble Chard and Bubble Packed
                                                            Charts </p>
                                                        <p class="li-line-height">7.4 Line Chart and Continuous vs
                                                            Discrete Line Chart </p>
                                                        <p class="li-line-height">7.5 Funnel Simple and Funnel Advanced
                                                            Chart </p>
                                                        <p class="li-line-height">7.6 Dual Combination Chart </p>
                                                        <p class="li-line-height">7.7 Bar Chart and Stacked Bar
                                                            Chart </p>
                                                        <p class="li-line-height">7.8 Scatter Plot Dual-Axis Charts </p>
                                                        <p class="li-line-height">7.9 Advanced Dunt Chart </p>
                                                        <p class="li-line-height">7.10 Treemap Chart </p>
                                                        <p class="li-line-height">7.11 Histogram and Its Advanced
                                                            use </p>
                                                        <p class="li-line-height">7.12 Box and whistler Plot Chart </p>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mt-2" id="trainer">
                            <div class="panel-group" id="accordion">
                                <div class="card">
                                    <div class="card-header">
                                        <a class="collapsed" data-bs-toggle="collapse" data-parent="#accordion"
                                           href="#collapse-amenities8">
                                            <h3 class="panel-title"><span style="color: red;">Module 8:</span> Creating
                                                Map
                                                in Tableau</h3>
                                        </a>
                                    </div>
                                    <div id="collapse-amenities8" class="panel-collapse collapse">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <ul>
                                                        <p class="li-line-height">8.1 Introduction to Map </p>
                                                        <p class="li-line-height">8.2 Map Options </p>
                                                        <p class="li-line-height">8.3 Map Layers </p>
                                                        <p class="li-line-height">8.4 Custom Territories </p>
                                                        <p class="li-line-height">8.5 3D map </p>
                                                        <p class="li-line-height">8.6 Custom Geocoding</p>
                                                        <p class="li-line-height">8.7 Action URL</p>
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
                                            <h3 class="panel-title"><span style="color: red;">Module 9:</span> Dashboard
                                                in
                                                Tableau</h3>
                                            <br>
                                        </a>
                                    </div>
                                    <div id="collapse-amenities9" class="panel-collapse collapse">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <ul>
                                                        <p class="li-line-height">9.1 Designing Principles of Dashboard
                                                        </p>
                                                        <p class="li-line-height">9.2 Working with Layout </p>
                                                        <p class="li-line-height">9.3 Objects in Dashboard </p>
                                                        <p class="li-line-height">9.4 Making Dashboards Interactive </p>
                                                        <p class="li-line-height">9.5 Best Practices for Dashboard
                                                            Creation </p>
                                                        <p class="li-line-height">9.6 End user experience guide for
                                                            Tableau</p>
                                                        <p class="li-line-height">9.7 Dashboard for Mobile Story </p>
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
                                            <h3 class="panel-title"><span style="color: red;">Module 10:</span>
                                                Modifications to Data Connections</h3>
                                        </a>
                                    </div>
                                    <div id="collapse-amenities10" class="panel-collapse collapse">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <ul>
                                                        <p class="li-line-height">10.1 Edit Data Source </p>
                                                        <p class="li-line-height">10.2 Unions</p>
                                                        <p class="li-line-height">10.3 Joins </p>
                                                        <p class="li-line-height">10.4 Data blending </p>
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
                    <h1>TRAINER PROFILE</h2>
                </div>
            </div>
            <div class="row padding-top-sectio mb-5">
                <div class="col-lg-5 mt-5 mb-5">
                    <h2>Sumaira Ghouri</h2>
                    <h4>
                        Advanced MS Excel: Business Intelligence with Data Visualization and Data Analytics with
                        Tableau
                        <br>
                    </h4>
                    <p class="designation">
                        First Female Microsoft Office Corporate Trainer in Pakistan, Certified Microsoft Office
                        Specialist
                        (MOS) Master Level MS, MBA in HR & MIS, Masters in Economics, B.Ed., B.Sc [Honors]
                    </p>
                    <div class="mb-4">
                        <p>
                            Sumaira Ghouri, is The First Female Microsoft Office Corporate Trainer in Pakistan,
                            Certified
                            Microsoft Office.
                        </p>
                    </div>
                    <div id="duration">
                        <a href="Sumaira-Ghouri" class="btn btn-outline-primary">View More</a>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6 mt-5 mb-5">
                    <div class="image-wrapperrr">
                        <img class="images1" src="img/Yourexcel-img/sumaira-ghouri.jpg"/>
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
            <div class="row">
                <div id="Value-added-Services" class="col-lg-4"></div>
                <div class="col-lg-4 mt-3 text-center">
                    <td>18 hours</td>
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
                <div class="col-lg-3"></div>
                <div class="col-lg-6 text-center mt-4">
                    <td>Intermediate level of MS Excel Skills</td>
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
                        <span id="Career-paths"></span>

                        <li>Lifetime access to exclusive YouExcel alumni via WhatsApp and Facebook groups</li>
                        <li>Fully equipped training center venue for on-campus trainings readily available with laptops,
                            projectors and air-conditioning
                        </li>
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
                    <h2>CAREER-PATHS</h2>
                </div>
            </div>
            <div class="row">
                <div id="Registation-form"></div>
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <ul>
                        <li> MIS Reporting Analyst</li>
                        <li> Business Intelligence Analyst</li>
                        <li> Data Analyst</li>
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
                    <h2>REGISTRATION FORM</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <div class="col-lg-12 text-center">
                        <a class="btn btn-lmslogin mb-4 btn-lg" href="Registration-Form/Data-Analytics-with-Tableau">Click here to Register
                            Online </a>

{{--                        <a class="btn btn-lmslogin mb-4 btn-lg"--}}

{{--                           href="{{url("/course_checkout/Data Analytics with Tableau/16368")}}">Pay Online  Fee </a>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
<!-- ====================== End CEO Area ======================== -->
