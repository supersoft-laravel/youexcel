@extends('website.app')

@section('title', 'Dashboard Reporting & Analysis with Power BI Course in Karachi')
@section('meta_description', 'Enroll in the Dashboard Reporting & Analysis with Power BI Course in Karachi. Learn to create interactive dashboards and advanced reports to elevate your data skills.')
@section('meta_keywords', 'Dashboard Reporting & Analysis with Power BI Course in Karachi')


@section('content')
<style>
    .section-header {
        background: linear-gradient(135deg, #1a2a3a 0%, #2c3e50 100%) !important;
        color: white !important;
        padding: 60px 0 40px 0 !important;
        margin-top: 120px;
        position: relative !important;
        overflow: hidden !important;
    }

    .section-header::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(rgba(0, 40, 104, 0.85), rgba(0, 40, 104, 0.9)), 
                    url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');
        background-size: cover;
        background-position: center;
        z-index: 0;
    }

    .section-content {
        position: relative;
        z-index: 2;
    }

    .section-title {
        padding-bottom: 0px;
    }
    .section-title h2 {
        font-weight: 700;
        color: #fff;
        font-size: 2rem;
        margin-bottom: 20px;
        position: relative;
        line-height: 1.4;
    }

    .section-title p {
        font-size: 1.25rem;
        max-width: 900px;
        margin: 0 auto 10px;
        color: #fff;
        opacity: 0.95;
    }
</style>
    <!--<div class="breadcumb-wrapper " data-bg-src="">-->
    <!--    <div class="container z-index-common">-->
    <!--        <div class="breadcumb-content">-->
    <!--            <h1 class="breadcumb-title">Stop Guessing, Start knowing Your Data: Take Admission to Master Power BI-->
    <!--                Visualization Skills</h1>-->
    <!--            {{--                <p class="breadcumb-text">Search over 200 individual encyclopedias and reference books.</p> --}}-->
                <!--<div class="breadcumb-menu-wrap">-->
                <!--    <ul class="breadcumb-menu">-->
                <!--        <li><a href="{{ url('/') }}">Home</a></li>-->
                <!--        <li>Dashboard Reporting & Analysis with Power BI</li>-->
                <!--    </ul>-->
                <!--</div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div> -->
    
    <section class="space-top space-extra-bottom section-header">
        <div class="bg-pattern"></div>
        <div class="container section-content text-center">
            <div class="section-title">
                <h2>
                    Start Knowing your Data with Meaningful Insights: Take Admission to Master Power BI
                </h2>
            </div>
        </div>
    </section>
    
    
    <!--==============================
              Course Area
          ==============================-->
    <section class="course-details pb-3 pt-3">
        <div class="container">

            <div class="row flex-row-reverse">
                <div class="col-lg-4">
                    <div class="course-meta-box wow fadeInUp ">
                    <div class="text-center mb-2 mt-2">
                        <h5 class="fw-bold text-uppercase border-bottom pb-2 d-inline-block" style="border-color: #0d6efd;">
                            What’s Inside the Course
                        </h5>
                    </div>
                        <table>
                            <tbody>
                                <tr class=" mb-4">

                                    <td>
                                        @include('website.sections.video-section', ['videoId' => 'vMfuac6WyMY'])
                                    </td>
                                    <!--<td> <img src="https://youexceltraining.com/img/Yourexcel-img/pbi.jpg" /> </td>-->
                                </tr>
                                
                                <!--<tr>-->
                                <!--    <td><i class="fas fa-money-bill-wave"></i> Total Fee: {{ $programFee ?? 'N/A' }}</td>-->
                                <!--</tr>-->
                                <tr>
                                    <td><i class="fas fa-calendar-alt"></i> Next Batch Schedule: {{ $nextBatchSchedule ?? 'Contact Admissions Team' }}</td>
                                </tr>

                                <tr>
                                    <td><i class="far fa-hourglass"></i> Duration: 36 hours</td>
                                </tr>
                                <tr style="padding-top: 8px;">
                                    <td>
                                        <i class="far fa-suitcase"></i>Difficulty Level: Basic to Advanced
                                    </td>
                                </tr>
                                <tr style="padding-top: 8px; padding-bottom: 20px;">
                                    <td>
                                        <div style="margin-bottom: 10px;"><i class="far fa-money"></i>Course Fee (PKR):</div>
                                        <ul style="padding-left: 15px;">
                                            <li>Monthly Installment: {{ $programFee ?? 'N/A' }}</li>
                                            <li>Lump Sum: {{ $lumpSumFee ?? 'N/A'}}</li>
                                        </ul>
                                    </td>
                                 </tr>  
                                <!--<tr>-->
                                <!--    <td><i class="far fa-suitcase"></i>This Training also includes:</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                <!--    <td>-->

                                <!--        <li> <i class="fas fa-check"></i> Physical On-Campus and Online Training</li>-->
                                <!--        <li> <i class="fas fa-check"></i> Hands-On Case Study based learning</li>-->
                                <!--        <li> <i class="fas fa-check"></i> Expert Guidance</li>-->
                                <!--        <li> <i class="fas fa-check"></i> Lifetime WhatsApp support</li>-->
                                <!--        <li> <i class="fas fa-check"></i> Networking community access</li>-->
                                <!--        <li> <i class="fas fa-check"></i> Government Endorsed Certificate</li>-->

                                <!--    </td>-->
                            </tbody>
                        </table>
                        @if ($pdf == '')
                        @else
                            <a href="{{ $pdf }}" class="vs-btn">Download
                                Brochure Now</a><br /><br />
                        @endif
                        <a href="https://youexceltraining.com/enquiry-form/dashboard-reporting-with-power-bi"
                            class="vs-btn">Enquire Now</a><br /><br />
                        <!--<a href="contact.html" class="vs-btn" style="padding:3.5px 40px; line-height:22px">Corporate <br> Training Consultancy</a>-->
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="course-category wow fadeInUp ">
                        <a href="#">Get Started Learning with </a>
                    </div>
                    <h2 class="course-title animate__animated animate__bounceInDown">Dashboard Reporting and Analysis with Excel & Power BI </h2>
                    <div class="course-review"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>( 5.0 )
                    </div>
                    <div class="mb-3">
                        <img src="https://youexceltraining.com/img/Yourexcel-img/pbib.jpg" />
                    </div>
                    <div class="mb-2 mt-2">
                        <h4 class="fw-bold text-uppercase border-bottom pb-2 d-inline-block" style="border-color: #0d6efd;">
                            Program Overview
                        </h4>
                    </div>
                    <!--<h5 class="border-title2 wow fadeInUp ">Program Overview</h5>-->

                    <p class="wow fadeInDown">Gain practical expertise in developing dynamic dashboards and data-driven reports using MS Excel and Power BI. This program equips participants to clean, transform, and model data, apply DAX for powerful analytics, and present insights through AI-enhanced visualization and reporting tools. Equip yourself with the tools top analysts use to deliver real business insights that impact decision making process of the organization.</p>


                    <!--<h5 class="border-title2 wow fadeInUp ">Training Outline</h5>-->
                    <div class="mb-2 mt-2">
                        <h4 class="fw-bold text-uppercase border-bottom pb-2 d-inline-block" style="border-color: #0d6efd;">
                            Training Outline
                        </h4>
                    </div>

                </div>
                <div class="col-lg-12">
                    <!-- Buttons for Expand All and Close All -->
                    <div class="mb-4 d-flex gap-2">
                        <button class="vs-btn btn btn-primary d-flex align-items-center gap-2 px-4 py-2" onclick="expandAll()">
                            <i class="fas fa-plus-square"></i>
                            <span>Expand All</span>
                        </button>
                        <button class="vs-btn btn btn-secondary d-flex align-items-center gap-2 px-4 py-2" onclick="closeAll()">
                            <i class="fas fa-minus-square"></i>
                            <span>Close All</span>
                        </button>
                    </div>
                    <div class="accordion accordion-style4" id="accordionExample">
                        <div class="accordion-item active wow fadeInUp">
                            <div class="accordion-header d-flex" id="headingOne">
                                <button class="accordion-button justify-content-between" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    <span class="button-label">Module 1</span>
                                    Data Analysis for Business Intelligence in MS Excel
                                    <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="accordionExample">
                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <ul>
                                                <li class="syllabustext">Power tools for analytics and decision-making</li>
                                                <li class="syllabustext">PivotTables, slicers, and interactive dashboards</li>
                                                <li class="syllabustext">Data models, DAX basics, and PowerPivot</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="accordion-item wow fadeInUp">
                            <div class="accordion-header d-flex" id="headingTwo">
                                <button class="accordion-button justify-content-between" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    <span class="button-label">Module 2</span>
                                    Power Query – Data Cleaning and Transformation
                                    <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="accordionExample">
                                <div class="accordion-body wow fadeInUp">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <ul>
                                                <li class="syllabustext">Introduction to Power Query for Data Transformation</li>
                                                <li class="syllabustext">Understanding the ETL (Extract, Transform, Load) Process</li>
                                                <li class="syllabustext">Connecting to Multiple Data Sources (Excel, CSV, SQL, Web)</li>
                                                <li class="syllabustext">Data Profiling and Quality Checks</li>
                                                <li class="syllabustext">Transforming Columns and Rows</li>
                                                <li class="syllabustext">Combining and Merging Queries</li>
                                                <li class="syllabustext">Creating and Managing Calendar Tables</li>
                                                <li class="syllabustext">Shaping Data for Dashboards</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp">
                            <div class="accordion-header d-flex" id="headingThree">
                                <button class="accordion-button justify-content-between" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    <span class="button-label">Module 3</span>
                                    Power BI Desktop – Data Integration and Modeling
                                    <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="accordionExample">
                                <div class="accordion-body wow fadeInUp">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <ul>
                                                <li class="syllabustext">Introduction to Power BI Desktop Interface</li>
                                                <li class="syllabustext">Importing and Combining Data from Multiple Sources</li>
                                                <li class="syllabustext">Working with the Power Query Editor in Power BI</li>
                                                <li class="syllabustext">Building Relationships and Star Schemas</li>
                                                <li class="syllabustext">Configuring Metadata and Table Properties</li>
                                                <li class="syllabustext">Creating Calculated Columns and Measures</li>
                                                <li class="syllabustext">Time Intelligence and Date Functions in DAX</li>
                                                <li class="syllabustext">Managing Model Granularity and Performance</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="accordion-item wow fadeInUp">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour66" aria-expanded="false"
                                    aria-controls="collapseFour66">
                                    <span class="button-label">Module 4</span>
                                    Designing Dashboards and Reports
                                    <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="collapseFour66" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="accordionExample">
                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <ul>
                                                <li class="syllabustext">Understanding Report and Visualization Concepts</li>
                                                <li class="syllabustext">Choosing Effective Visuals for Different Data Types</li>
                                                <li class="syllabustext">Working with Filters, Slicers, and Drilldowns</li>
                                                <li class="syllabustext">Custom Visuals and Conditional Formatting</li>
                                                <li class="syllabustext">Themes, Layouts, and Report Design Best Practices</li>
                                                <li class="syllabustext">Hierarchies and Dynamic Navigation Pages</li>
                                                <li class="syllabustext">Creating Paginated Reports</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="accordion-item wow fadeInUp">
                            <div class="accordion-header d-flex" id="headingFive">
                                <button class="accordion-button justify-content-between" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                                    aria-controls="collapseFive">
                                    <span class="button-label">Module 5</span> 
                                    Advanced Analytics and AI Features
                                    <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="accordionExample">
                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <ul>
                                                <li class="syllabustext">Using the Analytics Pane for Trendlines and Forecasts</li>
                                                <li class="syllabustext">Grouping, Binning, and Clustering Data</li>
                                                <li class="syllabustext">Smart Narratives and Natural Language (Q&A) Visuals</li>
                                                <li class="syllabustext">Decomposition Tree and Key Influencers Visual</li>
                                                <li class="syllabustext">What-If Analysis and Sensitivity Scenarios</li>
                                                <li class="syllabustext">Anomaly Detection and Quick Insights</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="accordion-item wow fadeInUp">
                            <div class="accordion-header d-flex" id="headingSix">
                                <button class="accordion-button justify-content-between" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false"
                                    aria-controls="collapseSix">
                                    <span class="button-label">Module 6</span> 
                                    Managing Workspaces and Datasets
                                    <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="accordionExample">
                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <ul>
                                                <li class="syllabustext">Understanding Power BI Workspaces</li>
                                                <li class="syllabustext">Managing Roles and Permissions</li>
                                                <li class="syllabustext">Creating and Publishing Dashboards</li>
                                                <li class="syllabustext">Working with Shared Datasets</li>
                                                <li class="syllabustext">Scheduling Data Refreshes and Gateway Configuration</li>
                                                <li class="syllabustext">Implementing Row-Level Security (RLS)</li>
                                                <li class="syllabustext">Monitoring Usage Metrics and Lineage</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="accordion-item wow fadeInUp">
                            <div class="accordion-header d-flex" id="headingSeven">
                                <button class="accordion-button justify-content-between" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false"
                                    aria-controls="collapseSeven">
                                    <span class="button-label">Module 7</span> 
                                    SQL Integration with Power BI
                                    <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                                data-bs-parent="accordionExample">
                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <ul>
                                                <li class="syllabustext">Understanding SQL for Data Analysis</li>
                                                <li class="syllabustext">Connecting Power BI to SQL Server</li>
                                                <li class="syllabustext">Using SQL Queries within Power BI</li>
                                                <li class="syllabustext">Creating Views and Optimizing Query Performance</li>
                                                <li class="syllabustext">Combining SQL and Power BI Transformations</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="accordion-item wow fadeInUp">
                            <div class="accordion-header d-flex" id="headingEight">
                                <button class="accordion-button justify-content-between" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false"
                                    aria-controls="collapseEight">
                                    <span class="button-label">Module 8</span> 
                                    Generative AI for Data Analysis
                                    <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                                data-bs-parent="accordionExample">
                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <ul>
                                                <li class="syllabustext">Understanding Generative vs Predictive AI</li>
                                                <li class="syllabustext">AI-Assisted Data Cleaning and Profiling Plans</li>
                                                <li class="syllabustext">Using AI Tools (ChatGPT, Copilot) for DAX, SQL, and Formula Generation</li>
                                                <li class="syllabustext">Automating Executive Summaries and Insights</li>
                                                <li class="syllabustext">AI Chart and Dashboard Recommendations</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    function expandAll() {
                        const collapses = document.querySelectorAll('.accordion-collapse');
                        collapses.forEach(collapse => {
                            const bsCollapse = new bootstrap.Collapse(collapse, {
                                toggle: false
                            });
                            bsCollapse.show();
                        });
                    }
               
                    function closeAll() {
                        const collapses = document.querySelectorAll('.accordion-collapse');
                        collapses.forEach(collapse => {
                            const bsCollapse = new bootstrap.Collapse(collapse, {
                                toggle: false
                            });
                            bsCollapse.hide();
                        });
                    }
                </script>
            </div>
        </div>
    </section>


    <!--<section class="pb-3" id="div2">-->
    <!--    <div class="container">-->
    <!--        <div class="text-left">-->
    <!--            <h5 class="border-title2">Learning Outcomes</h5>-->
    <!--        </div>-->
    <!--        <div class="row align-items-start">-->
    <!--            <div class="col-md-12 col-lg process-inner1 order-2 order-lg-1">-->
    <!--                <div class="process-style1 d-flex align-items-center">-->
    <!--                    <span class="process-number"><i class="fas fa-circle"></i></span>-->
    <!--                    <div class="process-content">-->
    <!--                        <p class="fs-md process-title">Clean and transform raw data using Power Query.</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="process-style1 d-flex align-items-center">-->
    <!--                    <span class="process-number"><i class="fas fa-circle"></i></span>-->
    <!--                    <div class="process-content">-->
    <!--                        <p class="fs-md process-title">Combine and model data from multiple sources in Power BI.</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="process-style1 d-flex align-items-center">-->
    <!--                    <span class="process-number"><i class="fas fa-circle"></i></span>-->
    <!--                    <div class="process-content">-->
    <!--                        <p class="fs-md process-title">Create analytical insights using DAX (Calculated Columns & Measures).</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="process-style1 d-flex align-items-center">-->
    <!--                    <span class="process-number"><i class="fas fa-circle"></i></span>-->
    <!--                    <div class="process-content">-->
    <!--                        <p class="fs-md process-title">Design interactive dashboards with filters, slicers, and drilldowns.</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="process-style1 d-flex align-items-center">-->
    <!--                    <span class="process-number"><i class="fas fa-circle"></i></span>-->
    <!--                    <div class="process-content">-->
    <!--                        <p class="fs-md process-title">Apply Time Intelligence and advanced analytics for trend and performance analysis.</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="process-style1 d-flex align-items-center">-->
    <!--                    <span class="process-number"><i class="fas fa-circle"></i></span>-->
    <!--                    <div class="process-content">-->
    <!--                        <p class="fs-md process-title">Publish and share dashboards securely through Power BI Service.</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    
    <section class="py-4" id="div2" style="background-color: #ffffff;">
        <div class="container">
            <!-- Section Title -->
            <div class="text-center mb-4">
                <h4 class="fw-bold text-uppercase border-bottom pb-2 d-inline-block" style="border-color: #0d6efd;">
                    Learning Outcomes
                </h4>
            </div>
    
            <!-- Outcomes Grid -->
            <div class="row gy-3">
                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100" 
                         style="border-left: 5px solid #0d6efd;">
                        <i class="fas fa-broom text-primary fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #333;">
                            Clean and transform raw data using Power Query.
                        </p>
                    </div>
                </div>
    
                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100" 
                         style="border-left: 5px solid #6610f2;">
                        <i class="fas fa-database text-purple fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #333;">
                            Combine and model data from multiple sources in Power BI.
                        </p>
                    </div>
                </div>
    
                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100" 
                         style="border-left: 5px solid #198754;">
                        <i class="fas fa-brain text-success fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #333;">
                            Create analytical insights using DAX (Calculated Columns & Measures).
                        </p>
                    </div>
                </div>
    
                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100" 
                         style="border-left: 5px solid #fd7e14;">
                        <i class="fas fa-chart-line text-warning fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #333;">
                            Design interactive dashboards with filters, slicers, and drilldowns.
                        </p>
                    </div>
                </div>
    
                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100" 
                         style="border-left: 5px solid #dc3545;">
                        <i class="fas fa-clock text-danger fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #333;">
                            Apply Time Intelligence and advanced analytics for trend and performance analysis.
                        </p>
                    </div>
                </div>
    
                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100" 
                         style="border-left: 5px solid #20c997;">
                        <i class="fas fa-share-square text-info fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #333;">
                            Publish and share dashboards securely through Power BI Service.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section class="pt-3 pb-3 background-image">
      <div class="container">
        <div class="text-center mb-4">
            <h4 class="fw-bold text-uppercase border-bottom pb-2 d-inline-block" style="border-color: #0d6efd;">
                Salient Features
            </h4>
        </div>
        <div class="row g-4">
          <!-- Feature Card -->
          <div class="col-sm-6 col-lg-4">
            <div class="card h-100 text-center shadow-sm border-0"
              style="display: flex; justify-content: center; align-items: center; border-radius: 15px; transition: all 0.3s ease; padding: 30px; background: #fff;"
              onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)';"
              onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.05)';">
              <img src="https://youexceltraining.com/img/icon/training-icon-1-1.svg" alt="icon"
                style="width: 60px; margin-bottom: 20px;">
              <h6 style="font-weight: 600; color: #212529;">Workflow automation with Power Automate</h6>
            </div>
          </div>
    
          <div class="col-sm-6 col-lg-4">
            <div class="card h-100 text-center shadow-sm border-0"
              style="display: flex; justify-content: center; align-items: center; border-radius: 15px; transition: all 0.3s ease; padding: 30px; background: #fff;"
              onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)';"
              onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.05)';">
              <img src="https://youexceltraining.com/img/icon/training-icon-1-2.svg" alt="icon"
                style="width: 60px; margin-bottom: 20px;">
              <h6 style="font-weight: 600; color: #212529;">Data Integration with Scalable Solution</h6>
            </div>
          </div>
    
          <div class="col-sm-6 col-lg-4">
            <div class="card h-100 text-center shadow-sm border-0"
              style="display: flex; justify-content: center; align-items: center; border-radius: 15px; transition: all 0.3s ease; padding: 30px; background: #fff;"
              onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)';"
              onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.05)';">
              <img src="https://youexceltraining.com/img/icon/training-icon-1-3.svg" alt="icon"
                style="width: 60px; margin-bottom: 20px;">
              <h6 style="font-weight: 600; color: #212529;">Interactive Real-time Visual Analytics</h6>
            </div>
          </div>
    
          <div class="col-sm-6 col-lg-4">
            <div class="card h-100 text-center shadow-sm border-0"
              style="display: flex; justify-content: center; align-items: center; border-radius: 15px; transition: all 0.3s ease; padding: 30px; background: #fff;"
              onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)';"
              onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.05)';">
              <img src="https://youexceltraining.com/img/icon/training-icon-1-4.svg" alt="icon"
                style="width: 60px; margin-bottom: 20px;">
              <h6 style="font-weight: 600; color: #212529;">Smart Narrative using AI Capabilities</h6>
            </div>
          </div>
    
          <div class="col-sm-6 col-lg-4">
            <div class="card h-100 text-center shadow-sm border-0"
              style="display: flex; justify-content: center; align-items: center; border-radius: 15px; transition: all 0.3s ease; padding: 30px; background: #fff;"
              onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)';"
              onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.05)';">
              <img src="https://youexceltraining.com/img/icon/training-icon-1-5.svg" alt="icon"
                style="width: 60px; margin-bottom: 20px;">
              <h6 style="font-weight: 600; color: #212529;">Collaborative Reporting</h6>
            </div>
          </div>
    
          <div class="col-sm-6 col-lg-4">
            <div class="card h-100 text-center shadow-sm border-0"
              style="display: flex; justify-content: center; align-items: center; border-radius: 15px; transition: all 0.3s ease; padding: 30px; background: #fff;"
              onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)';"
              onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.05)';">
              <img src="https://youexceltraining.com/img/icon/training-icon-1-5.svg" alt="icon"
                style="width: 60px; margin-bottom: 20px;">
              <h6 style="font-weight: 600; color: #212529;">Cross-platform Access</h6>
            </div>
          </div>
        </div>
      </div>
    </section>


    

    <!--<section class="pt-3 pb-3">-->
    <!--    <div class="container">-->
    <!--        <div class="row gx-80 align-items-center">-->
    <!--            <div class="col-md-12">-->
    <!--                <h5 class="border-title2 pb-3">Recommended For</h5>-->
    <!--            </div>-->
    <!--            <div class="col-xl-10">-->
    <!--                <div class="row gx-80 align-items-center">-->
    <!--                    <div class="col-sm-12 col-xl-12">-->
    <!--                        <div class="process-style1 d-flex align-items-center">-->
    <!--                            <span class="process-number"><i class="fas fa-circle"></i></span>-->
    <!--                            <div class="process-content">-->
    <!--                                <p class="fs-md process-title">Data Analysts, Business Intelligence Professionals, IT Professionals, Decision Makers and Managers, Developers, Finance Professionals, Project Managers</p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    
    <!--<section class="pt-3 pb-3">-->
    <!--    <div class="container">-->
    <!--        <div class="row gx-80 align-items-center">-->
    <!--            <div class="col-md-12">-->
    <!--                <h5 class="border-title2 pb-3">Difficulty Level</h5>-->
    <!--            </div>-->
    <!--            <div class="col-xl-10">-->
    <!--                <div class="row gx-80 align-items-center">-->
    <!--                    <div class="col-sm-6 col-xl-4">-->
    <!--                        <div class="process-style1 d-flex align-items-center">-->
    <!--                            <span class="process-number"><i class="fas fa-circle"></i></span>-->
    <!--                            <div class="process-content">-->
    <!--                                <p class="fs-md process-title">Beginner to Advanced</p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    
    <!--<section class="pt-3 pb-3">-->
    <!--    <div class="container">-->
    <!--        <div class="row gx-80 align-items-center">-->
    <!--            <div class="col-md-12">-->
    <!--                <h5 class="border-title2 pb-3">Pre-Requisites</h5>-->
    <!--            </div>-->
    <!--            <div class="col-xl-10">-->
    <!--                <div class="row gx-80 align-items-center">-->
    <!--                    <div class="col-sm-6 col-xl-4">-->
    <!--                        <div class="process-style1 d-flex align-items-center">-->
    <!--                            <span class="process-number"><i class="fas fa-circle"></i></span>-->
    <!--                            <div class="process-content">-->
    <!--                                <p class="fs-md process-title">Familiarity with Microsoft Excel and Analytical Mindset</p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    
    <section style="padding:40px 0; background:linear-gradient(135deg,#f9fafc 0%,#eef1f6 100%);">
      <div class="container">
        <div class="text-center mb-4">
            <h4 class="fw-bold text-uppercase border-bottom pb-2 d-inline-block" style="border-color: #0d6efd;">
                Course Overview
            </h4>
        </div>
    
        <div class="row g-3">
          <!-- Recommended For -->
          <div class="col-lg-4 col-md-6">
            <div class="card h-100 border-0 shadow-sm text-start p-3" style="border-radius:12px; background:#fff;">
              <div class="d-flex align-items-center mb-2">
                <div style="width:40px; height:40px; border-radius:50%; background:#0d6efd1a; display:flex; align-items:center; justify-content:center; margin-right:10px;">
                  <i class="fas fa-users" style="color:#0d6efd; font-size:16px;"></i>
                </div>
                <h6 style="margin:0; font-weight:600; color:#0d6efd;">Recommended For</h6>
              </div>
              <p style="font-size:14px; color:#333; margin:0;">
                Data Analysts, Business Intelligence Professionals, IT Experts, Managers, Developers, Finance Professionals, Project Managers.
              </p>
            </div>
          </div>
    
          <!-- Difficulty Level -->
          <div class="col-lg-4 col-md-6">
            <div class="card h-100 border-0 shadow-sm text-start p-3" style="border-radius:12px; background:#fff;">
              <div class="d-flex align-items-center mb-2">
                <div style="width:40px; height:40px; border-radius:50%; background:#0d6efd1a; display:flex; align-items:center; justify-content:center; margin-right:10px;">
                  <i class="fas fa-signal" style="color:#0d6efd; font-size:16px;"></i>
                </div>
                <h6 style="margin:0; font-weight:600; color:#0d6efd;">Difficulty Level</h6>
              </div>
              <p style="font-size:14px; color:#333; margin:0;">Beginner to Advanced</p>
            </div>
          </div>
    
          <!-- Pre-Requisites -->
          <div class="col-lg-4 col-md-12">
            <div class="card h-100 border-0 shadow-sm text-start p-3" style="border-radius:12px; background:#fff;">
              <div class="d-flex align-items-center mb-2">
                <div style="width:40px; height:40px; border-radius:50%; background:#0d6efd1a; display:flex; align-items:center; justify-content:center; margin-right:10px;">
                  <i class="fas fa-lightbulb" style="color:#0d6efd; font-size:16px;"></i>
                </div>
                <h6 style="margin:0; font-weight:600; color:#0d6efd;">Pre-Requisites</h6>
              </div>
              <p style="font-size:14px; color:#333; margin:0;">
                Familiarity with Microsoft Excel and an analytical mindset.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!--<section class="pb-3">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-xl-12">-->
    <!--                <h5 class="border-title2 ">Trainer Profile</h5>-->
    <!--            </div>-->
    <!--            <div class="col-lg-9" style="padding:0">-->
    <!--                <div class="title-area mb-4">-->
                         
    <!--                    <h5 class="sec-title mb-3 mb-lg-4" style="font-size: 30px;">Tahir Ali</h5>-->
    <!--                    <p class="fs-md about-text pe-xl-5 me-xl-3">Tahir Ali is a<b> highly motivated corporate trainer with experience -->
    <!--                        in training small and large groups </b>-->
    <!--                        across diverse industries. <b> Proven success with over 16 years </b>of professional experience of-->
    <!--                        industry in leveraging educational theories and methodologies -->
    <!--                        to design, develop, and deliver successful training programs and integrate instructional-->
    <!--                        technology to provide onsite and virtual training.-->
    <!--                    </p>-->
    <!--                </div>-->
    <!--                <h5>Professional Certifications:</h5>-->
    <!--                <div class="list-style1 vs-list mb-30">-->
    <!--                    <ul>-->
    <!--                        <li>Microsoft Power BI Data Analyst PL300 Certification 2025</li>-->
    <!--                        <li>Microsoft Certified Trainer</li>-->
    <!--                    </ul>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-3" style="padding:0">-->
    <!--                <div class="img-box3 mb-30">-->
    <!--                    <div class="img-1 mega-hover"><img class="" src="{{ asset('img/trainer/tahir.jpeg') }}"style="border-radius: 50px; height: 260px;"></div>-->
    <!--                    <div class="shape-dotted jump"></div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    
    <section class="py-4" style="background-color: #f8f9fa;">
        <div class="container">
            <div class="row align-items-center">
                <!-- Section Title -->
                <div class="col-12 mb-4 text-center">
                    <h4 class="fw-bold text-uppercase border-bottom pb-2 d-inline-block" style="border-color: #ffc107;">
                        Trainer Profile
                    </h4>
                </div>
    
                <!-- Left Side (Trainer Info) -->
                <div class="col-lg-8 col-md-7 mb-4 mb-md-0">
                    <div class="p-4 rounded shadow-sm bg-white">
                        <h5 class="fw-bold mb-3" style="font-size: 26px;">Tahir Ali</h5>
                        <p class="mb-4" style="font-size: 15px; color: #555; line-height: 1.7;">
                            <b>Tahir Ali</b> is a highly motivated corporate trainer with experience 
                            in training small and large groups across diverse industries. 
                            <b>Proven success with over 16 years</b> of professional experience 
                            in leveraging educational theories and methodologies to design, develop, 
                            and deliver successful training programs while integrating instructional
                            technology for onsite and virtual sessions.
                        </p>
    
                        <h6 class="fw-semibold mb-2">
                            <i class="fas fa-certificate text-warning me-2"></i>Professional Certifications
                        </h6>
                        <ul class="list-unstyled mb-0">
                            <li><i class="fas fa-check-circle text-success me-2"></i>Microsoft Power BI Data Analyst PL300 Certification 2025</li>
                            <li><i class="fas fa-check-circle text-success me-2"></i>Microsoft Certified Trainer</li>
                        </ul>
                    </div>
                </div>
    
                <!-- Right Side (Trainer Image) -->
                <div class="col-lg-4 col-md-5 text-center">
                    <div class="position-relative d-inline-block">
                        <img src="{{ asset('img/trainer/new/Tahir-Ali.png') }}" 
                             alt="Trainer - Tahir Ali"
                             class="img-fluid rounded-circle border border-3 border-warning shadow-sm"
                             style="height: 230px; width: 230px; object-fit: cover;">
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning text-dark shadow-sm px-3 py-1" style="font-size: 13px;">
                            <i class="fas fa-star me-1"></i> Expert
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--<section class="pb-3" id="div2">-->
    <!--    <div class="container">-->
    <!--        <div class="text-left">-->
    <!--            <h5 class="border-title2">Value Added Services</h5>-->
    <!--        </div>-->
    <!--        <div class="row align-items-start">-->
    <!--            <div class="col-md-12 col-lg process-inner1 order-2 order-lg-1">-->
    <!--                <div class="process-style1 d-flex align-items-center">-->
    <!--                    <span class="process-number"><i class="fas fa-circle"></i></span>-->
    <!--                    <div class="process-content">-->
    <!--                        <p class="fs-md process-title">Lifetime video recorded session with personalized Learning Management System (LMS) access login ID for months</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="process-style1 d-flex align-items-center">-->
    <!--                    <span class="process-number"><i class="fas fa-circle"></i></span>-->
    <!--                    <div class="process-content">-->
    <!--                        <p class="fs-md process-title">Lifetime WhatsApp post-training support</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="process-style1 d-flex align-items-center">-->
    <!--                    <span class="process-number"><i class="fas fa-circle"></i></span>-->
    <!--                    <div class="process-content">-->
    <!--                        <p class="fs-md process-title">100% job and business-oriented training</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="process-style1 d-flex align-items-center">-->
    <!--                    <span class="process-number"><i class="fas fa-circle"></i></span>-->
    <!--                    <div class="process-content">-->
    <!--                        <p class="fs-md process-title">Certificate of completion recognized from Trade Testing Board, Government of Pakistan</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="process-style1 d-flex align-items-center">-->
    <!--                    <span class="process-number"><i class="fas fa-circle"></i></span>-->
    <!--                    <div class="process-content">-->
    <!--                        <p class="fs-md process-title">Fully equipped training center venue for on-campus trainings readily available with laptops, projectors, and air-conditioning</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="process-style1 d-flex align-items-center">-->
    <!--                    <span class="process-number"><i class="fas fa-circle"></i></span>-->
    <!--                    <div class="process-content">-->
    <!--                        <p class="fs-md process-title">Live physical on-campus and online sessions facility</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="process-style1 d-flex align-items-center">-->
    <!--                    <span class="process-number"><i class="fas fa-circle"></i></span>-->
    <!--                    <div class="process-content">-->
    <!--                        <p class="fs-md process-title">Claim Continuing Professional Development (CPD) hours for the training</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <section class="py-4" id="div2" style="background-color: #f8f9fa;">
        <div class="container">
            <!-- Section Title -->
            <div class="text-center mb-4">
                <h4 class="fw-bold text-uppercase border-bottom pb-2 d-inline-block" style="border-color: #ffc107;">
                    Value Added Services
                </h4>
            </div>
    
            <!-- Services Grid -->
            <div class="row gy-3">
                <!-- Service Item -->
                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-white rounded shadow-sm h-100" 
                         style="border-left: 5px solid #ffc107;">
                        <i class="fas fa-video text-warning fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #444;">
                            Lifetime video recorded session with personalized Learning Management System (LMS) access login ID for months
                        </p>
                    </div>
                </div>
    
                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-white rounded shadow-sm h-100" 
                         style="border-left: 5px solid #17a2b8;">
                        <i class="fab fa-whatsapp text-info fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #444;">
                            Lifetime WhatsApp post-training support
                        </p>
                    </div>
                </div>
    
                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-white rounded shadow-sm h-100" 
                         style="border-left: 5px solid #28a745;">
                        <i class="fas fa-briefcase text-success fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #444;">
                            100% job and business-oriented training
                        </p>
                    </div>
                </div>
    
                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-white rounded shadow-sm h-100" 
                         style="border-left: 5px solid #dc3545;">
                        <i class="fas fa-certificate text-danger fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #444;">
                            Certificate of completion recognized from Trade Testing Board, Government of Pakistan
                        </p>
                    </div>
                </div>
    
                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-white rounded shadow-sm h-100" 
                         style="border-left: 5px solid #ffc107;">
                        <i class="fas fa-laptop-house text-warning fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #444;">
                            Fully equipped training center venue for on-campus trainings readily available with laptops, projectors, and air-conditioning
                        </p>
                    </div>
                </div>
    
                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-white rounded shadow-sm h-100" 
                         style="border-left: 5px solid #0d6efd;">
                        <i class="fas fa-chalkboard-teacher text-primary fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #444;">
                            Live physical on-campus and online sessions facility
                        </p>
                    </div>
                </div>
    
                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-white rounded shadow-sm h-100" 
                         style="border-left: 5px solid #6f42c1;">
                        <i class="fas fa-hourglass-half text-purple fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #444;">
                            Claim Continuing Professional Development (CPD) hours for the training
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-12 col-xxl-5">
                    <div class="text-center mb-4">
                        <h4 class="fw-bold text-uppercase border-bottom pb-2 d-inline-block" style="border-color: #0d6efd;">
                            REAL PEOPLE REAL TESTIMONIALS
                        </h4>
                    </div>
                    <!--<div class="title-area wow fadeInUp" data-wow-delay="0.3s">-->

                    <!--    <h2 class="sec-title h1 text-center">REAL PEOPLE REAL TESTIMONIALS</h2>-->

                    <!--</div>-->

                    <div class="elfsight-app-180aecff-7be3-49b6-9603-28a80d740006">@include('website.sections.review-section', ['activeTab' => 'powerbi'])</div>


                </div>
            </div>
        </div>
    </section>



<!--    <section class="pb-5">-->
<!--        <div class="container cta-style2" style="-->
<!--    border: 3px solid #fbce4d;-->
<!--">-->
<!--            <div class=" row gx-100 gy-4  ">-->
<!--                <div class="col-lg-12 col-xl-12 col-xxl-12 pt-2 pb-5 text-center">-->

<!--                    <h2 class=" pt-1  text-white">Become smarter in just 36 hours </h2>-->
                    <!--<p class=" pt-1 fs-md text-white">Enter your email id to get latest updates and  amazing discounts</p>-->
<!--                    <br>-->

<!--                </div>-->
<!--            </div>-->
<!--            <div class="row gx-100 gy-4 pb-5 justify-content-md-center ">-->

<!--                <div class="col-lg-10 col-xl-10 col-xxl-10 pb-5 ">-->

<!--                    <form class="newsletter-form d-flex flex-row justify-content-center align-items-center">-->
<!--                        <a href="../Registration-Form/dashboard-reporting-with-power-bi"-->
<!--                            class="vs-btn style2"><i class="far fa-angle-right"></i>GET REGISTERED HERE</a>-->
                        <!--<button type="submit" class="vs-btn mx-3">GET REGISTERED HERE</button>-->
<!--                    </form>-->
<!--                </div>-->

<!--            </div>-->
<!--        </div>-->

<!--    </section>-->

<section class="py-5 m-3 cta-style2">
    <div class="container text-center">
        <!-- Section Title -->
        <h2 class="fw-bold mb-3" style="font-size: 36px; color: #fff;">
            Become <span style="color: #ffc107;">Smarter</span> in Just <span style="color: #0d6efd;">36 Hours</span>
        </h2>
        <p class="mb-4" style="font-size: 16px; color: #fff; max-width: 700px; margin: 0 auto;">
            Gain practical, hands-on skills through interactive sessions led by industry experts.  
            Enhance your career prospects with our intensive training program.
        </p>

        <!-- CTA Button -->
        <a href="../Registration-Form/dashboard-reporting-with-power-bi"
           class="btn btn-lg fw-bold" 
           style="background-color: #ffc107; color: #000; padding: 16px 45px; font-size: 18px; border-radius: 50px; box-shadow: 0 4px 15px rgba(0,0,0,0.2); transition: all 0.3s;">
            <i class="fas fa-user-edit me-2"></i> REGISTER NOW
        </a>

        <!-- Optional Note -->
        <p class="mt-3" style="font-size: 14px; color: #fff;">
            Limited seats available — reserve your spot today!
        </p>
    </div>
</section>


    <div class="modal bd-example-modal-lg" id="myModal" style="z-index:99 ">
        <div class="modal-dialog" style="width:100% ; background-color: #f7a530;" role="document">
            <div class="modal-content"style="
            background-color: transparent;
        ">
                <div class="modal-body" style="position:relative;height: 106vh;">
                    <span class="close">&times;</span>
                    <div class="wrapper">
                        <div class="container">
                            <canvas id="wheel"></canvas>
                            <!--<button id="spin-btn">Spin</button>-->
                            <i class="fas fa-caret-left img" style=" color: #fdcf3b;font-size:80px"></i>
                        </div>
                        <div id="final-value">
                            <p>Click On The Spin Button To Start</p>
                        </div>
                    </div>
                    <form action="mail.php" class="form-stylea ajax-contact">
                        <div class="shape-mockup jump-reverse d-none d-xxl-block" data-right="11%" data-top="10%">
                            <div class="vs-rounded2"></div>
                        </div>
                        <div class="shape-mockup rotate d-none d-xxl-block" data-right="19%" data-top="13%">
                            <div class="vs-polygon2"></div>
                        </div>
                        <div class="shape-mockup jump-reverse d-none d-xxl-block" data-right="30%" data-top="13%">
                            <div class="vs-rounded2"></div>
                        </div>

                        <h2 class="">SPIN TO WIN </h2>
                        <h5 class="border-title2 fs-md ">Test your might!</h5>

                        <div class="row">


                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <input type="text" name="name" id="name"
                                        placeholder="Complete Name"required>
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <input type="text" name="number" id="number" placeholder="Cell No.">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="number" id="number" placeholder="WhatsApp No. ">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="email" id="email" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="subject" id="subject">
                                        <option selected hidden disabled>Select Course</option>
                                        <option value="Other">Other</option>
                                        <option value="Apply Scholarship">Apply Scholarship</option>
                                        <option value="Private Tutor">Private Tutor</option>
                                        <option value="Admission Session">Admission Session</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="city" placeholder="Your City" required="" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">

                            <input name="comments" placeholder="Comments" type="text">
                        </div>
                        <div class="captcha d-flex item-center mb-4">
                            <div class="spinner d-flex item-center">
                                <label class="mb-0 mt-3 mx-3">

                                    <input type="checkbox" onclick="$(this).attr('disabled','disabled');" required>
                                    <span class="checkmark"><span>&nbsp;</span></span>
                                </label>
                            </div>
                            <div class="text1">
                                I'm not a robot
                            </div>
                            <div class="logo">

                                <img src="https://youexceltraining.com/img/Yourexcel-img/captcha.PNG" />
                                <p>reCAPTCHA</p>
                                <small>Privacy - Terms</small>
                            </div>
                        </div>

                        <button id="spin-btn" class="vs-btn">Spin the wheel</button>

                        <div class="shape-mockup rotate d-none d-xxl-block" data-right="19%" data-bottom="8%">
                            <div class="vs-polygon2"></div>
                        </div>
                        <div class="shape-mockup jump-reverse d-none d-xxl-block" data-right="11%" data-bottom="8%">
                            <div class="vs-rounded2"></div>
                        </div>
                        <div class="shape-mockup jump-reverse d-none d-xxl-block" data-right="30%" data-bottom="8%">
                            <div class="vs-rounded2"></div>
                        </div>
                </div>
            </div>
        </div>
        <p class="form-messages"><span class="sr-only">For message will display here</span></p>
        </form>


    </div>
    </div>
    </div>
    </div>








    <!--==============================
@endsection
