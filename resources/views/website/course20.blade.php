@extends('website.app', ['title' => 'Dashboard Reporting & Analysis with BI Applications'])

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
<section class="space-top space-extra-bottom section-header">
    <div class="bg-pattern"></div>
    <div class="container section-content text-center">
        <div class="section-title">
            <h2>
                Master Data-Driven Insights: Launch Your Career in Excel, Power BI & Tableau Dashboards and Analytics
            </h2>
        </div>
    </div>
</section>

<section class="course-details pt-3 pb-5">
    <div class="container">

        <div class="row flex-row-reverse">
            <div class="col-lg-4">
                <div class="course-meta-box wow fadeInUp ">
                    <div class="text-center mb-2 mt-2">
                        <h5 class="fw-bold text-uppercase border-bottom pb-2 d-inline-block"
                            style="border-color: #0d6efd;">
                            What’s Inside the Course
                        </h5>
                    </div>
                    <table>
                        <tbody>
                            <tr class="mb-4">
                                <td>
                                    <img src="{{ asset('img/courses/bi-applications.jpeg') }}" alt="Dashboard Reporting & Analysis with BI Applications">
                                </td>
                            </tr>
                            <!--<tr>-->
                            <!--    <td><i class="fas fa-money-bill-wave"></i> Total Fee: {{ $programFee ?? 'N/A' }}-->
                            <!--    </td>-->
                            <!--</tr>-->
                            <tr>
                                <td><i class="fas fa-calendar-alt"></i> Next Batch Schedule:
                                    {{ $nextBatchSchedule ?? 'Contact Admissions Team' }}</td>
                            </tr>
                            <tr>
                                <td><i class="far fa-hourglass"></i> Duration: 36 Hours</td>
                            </tr>
                            <tr style="padding-top: 8px;">
                                <td>
                                    <i class="far fa-suitcase"></i>Difficulty Level: Basic to Advanced
                                </td>
                            </tr>
                            <tr style="padding-top: 8px; padding-bottom: 20px;">
                                <td>
                                    <div style="margin-bottom: 10px;"><i class="far fa-money"></i>Course Fee (PKR):
                                    </div>
                                    <ul style="padding-left: 15px;">
                                        <li>Monthly Installment: {{ $programFee ?? 'N/A' }}</li>
                                        <li>Lump Sum: {{ $lumpSumFee ?? 'N/A'}}</li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    @if ($pdf)
                    <a href="{{ $pdf }}" class="vs-btn"> Download Brochure
                        Now</a><br /><br />
                    @endif
                    <a href="https://youexceltraining.com/enquiry-form/dashboard-reporting-and-analysis-with-bi-applications" class="vs-btn">Enquire
                        Now</a><br />
                </div>
            </div>
            <div class="col-lg-8">
                <div class="course-category wow fadeInUp ">
                    <a href="#">Get Started Learning With </a>
                </div>
                <h2 class="course-title animate__animated animate__bounceInDown">Dashboard Reporting & Analysis with BI
                    Applications</h2>
                <div class="course-review"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                        class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>( 5.0 )
                </div>
                <div class="mb-3">
                    <img src="{{ asset('img/courses/bi-applications.jpeg') }}" alt="Dashboard Reporting & Analysis with BI Applications" />
                </div>
                <div class="mb-2 mt-2">
                    <h4 class="fw-bold text-uppercase border-bottom pb-2 d-inline-block" style="border-color: #0d6efd;">
                        Program Overview
                    </h4>
                </div>
                <p class="wow fadeInDown pb-3">This program is designed to build strong data visualization and
                    dashboarding skills using Excel, Power BI, and Tableau Public. Participants will learn how to clean
                    and model data, create interactive dashboards, apply visualization best practices, and publish
                    insights for business users. The focus is hands-on, practical, and business-oriented ideal for
                    professionals who want to move from raw data to decision-ready dashboards.</p>
                <div class="mb-2 mt-2">
                    <h4 class="fw-bold text-uppercase border-bottom pb-2 d-inline-block" style="border-color: #0d6efd;">
                        Training Outline
                    </h4>
                </div>
            </div>
            <div class="col-lg-12">
                <!-- Buttons for Expand All and Close All -->
                <div class="mb-4 d-flex gap-2">
                    <button class="vs-btn btn btn-primary d-flex align-items-center gap-2 px-4 py-2"
                        onclick="expandAll()">
                        <i class="fas fa-plus-square"></i>
                        <span>Expand All</span>
                    </button>
                    <button class="vs-btn btn btn-secondary d-flex align-items-center gap-2 px-4 py-2"
                        onclick="closeAll()">
                        <i class="fas fa-minus-square"></i>
                        <span>Close All</span>
                    </button>
                </div>
                <div class="accordion accordion-style4" id="accordionExample">

                    <!-- Module 01 -->
                    <div class="accordion-item">
                        <div class="accordion-header d-flex" id="headingOne">
                            <button class="accordion-button justify-content-between" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                <span class="button-label">Module 01</span>
                                Microsoft Excel Dashboard Reporting
                                <i class="fas fa-angle-down"></i>
                            </button>
                        </div>
                        <div id="collapseOne" class="accordion-collapse collapse">
                            <div class="accordion-body wow fadeInUp">
                                <div class="syllabus-list">
                                    <div class="syllabus-content">
                                        <li class="syllabustext"><strong>Dashboard Foundations</strong></li>
                                        <li class="syllabustext">Purpose & types of dashboards</li>
                                        <li class="syllabustext">Dashboard design principles</li>

                                        <li class="syllabustext"><strong>Data Cleaning & Preparation</strong></li>
                                        <li class="syllabustext">Structuring raw data & validation</li>
                                        <li class="syllabustext">Preparing tables for analysis</li>
                                        <li class="syllabustext">Named & dynamic ranges</li>

                                        <li class="syllabustext"><strong>PivotTables for Analysis</strong></li>
                                        <li class="syllabustext">Grouping, filtering, sorting</li>
                                        <li class="syllabustext">Calculated fields</li>
                                        <li class="syllabustext">Linking & refreshing multiple tables</li>

                                        <li class="syllabustext"><strong>Power Query Automation</strong></li>
                                        <li class="syllabustext">Importing, merging & appending data</li>
                                        <li class="syllabustext">Column transformations</li>
                                        <li class="syllabustext">Automated refresh</li>

                                        <li class="syllabustext"><strong>Power Pivot & Data Modeling</strong></li>
                                        <li class="syllabustext">Relationships & data models</li>
                                        <li class="syllabustext">Basic to intermediate DAX</li>

                                        <li class="syllabustext"><strong>Final Interactive Dashboard</strong></li>
                                        <li class="syllabustext">Slicers, timelines & navigation</li>
                                        <li class="syllabustext">Publishing & sharing best practices</li>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Module 02 -->
                    <div class="accordion-item">
                        <div class="accordion-header d-flex" id="headingTwo">
                            <button class="accordion-button justify-content-between" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                <span class="button-label">Module 02</span>
                                Microsoft Power BI
                                <i class="fas fa-angle-down"></i>
                            </button>
                        </div>
                        <div id="collapseTwo" class="accordion-collapse collapse">
                            <div class="accordion-body wow fadeInUp">
                                <div class="syllabus-list">
                                    <div class="syllabus-content">
                                        <li class="syllabustext"><strong>Data Modelling Review</strong></li>
                                        <li class="syllabustext">Star schema & relationships</li>
                                        <li class="syllabustext">Model optimization</li>

                                        <li class="syllabustext"><strong>Power Query Advanced</strong></li>
                                        <li class="syllabustext">Advanced transformations</li>
                                        <li class="syllabustext">Custom columns & parameters</li>

                                        <li class="syllabustext"><strong>Intermediate DAX</strong></li>
                                        <li class="syllabustext">Row & filter context</li>
                                        <li class="syllabustext">Time intelligence (YTD, MTD, QTD)</li>
                                        <li class="syllabustext">CALCULATE, FILTER, ALL</li>

                                        <li class="syllabustext"><strong>Visualization Best Practices</strong></li>
                                        <li class="syllabustext">Interactive reports</li>
                                        <li class="syllabustext">Bookmarks & buttons</li>

                                        <li class="syllabustext"><strong>Power BI Service</strong></li>
                                        <li class="syllabustext">Publishing & scheduled refresh</li>
                                        <li class="syllabustext">Workspaces & apps</li>

                                        <li class="syllabustext"><strong>Advanced Features</strong></li>
                                        <li class="syllabustext">Tooltips, drill-through & Q&A</li>
                                        <li class="syllabustext">Custom visuals & dataflows</li>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Module 03 -->
                    <div class="accordion-item">
                        <div class="accordion-header d-flex" id="headingThree">
                            <button class="accordion-button justify-content-between" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                <span class="button-label">Module 03</span>
                                Tableau Public (Basic to Intermediate)
                                <i class="fas fa-angle-down"></i>
                            </button>
                        </div>
                        <div id="collapseThree" class="accordion-collapse collapse">
                            <div class="accordion-body wow fadeInUp">
                                <div class="syllabus-list">
                                    <div class="syllabus-content">
                                        <li class="syllabustext"><strong>Getting Started</strong></li>
                                        <li class="syllabustext">Installation & interface overview</li>
                                        <li class="syllabustext">Connecting Excel, CSV & Google Sheets</li>

                                        <li class="syllabustext"><strong>Data Preparation</strong></li>
                                        <li class="syllabustext">Data Interpreter & cleaning</li>
                                        <li class="syllabustext">Pivoting, splitting & joins</li>

                                        <li class="syllabustext"><strong>Visualizations</strong></li>
                                        <li class="syllabustext">Bar, line, pie & map charts</li>
                                        <li class="syllabustext">Heatmaps & dual-axis charts</li>
                                        <li class="syllabustext">Filters, groups & sets</li>

                                        <li class="syllabustext"><strong>Calculated Fields</strong></li>
                                        <li class="syllabustext">Date, string & logical functions</li>
                                        <li class="syllabustext">Table calculations & running totals</li>

                                        <li class="syllabustext"><strong>Dashboards & Interactivity</strong></li>
                                        <li class="syllabustext">Dashboard actions & formatting</li>
                                        <li class="syllabustext">Optimizing for Tableau Public</li>
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
    </div>
</section>

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

            <!-- Outcome 1 -->
            <div class="col-md-6">
                <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                    style="border-left: 5px solid #0d6efd;">
                    <i class="fas fa-chart-line text-primary fs-4 me-3 mt-1"></i>
                    <p class="mb-0" style="font-size: 15px; color: #333;">
                        Understand dashboard design principles and select the right visuals to deliver meaningful
                        business insights.
                    </p>
                </div>
            </div>

            <!-- Outcome 2 -->
            <div class="col-md-6">
                <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                    style="border-left: 5px solid #6610f2;">
                    <i class="fas fa-broom fs-4 me-3 mt-1" style="color:#6610f2;"></i>
                    <p class="mb-0" style="font-size: 15px; color: #333;">
                        Clean, transform, and structure data using Excel Power Query, Power BI Power Query, and Tableau
                        data preparation tools.
                    </p>
                </div>
            </div>

            <!-- Outcome 3 -->
            <div class="col-md-6">
                <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                    style="border-left: 5px solid #198754;">
                    <i class="fas fa-table text-success fs-4 me-3 mt-1"></i>
                    <p class="mb-0" style="font-size: 15px; color: #333;">
                        Build interactive Excel dashboards using PivotTables, Pivot Charts, slicers, and Power Pivot.
                    </p>
                </div>
            </div>

            <!-- Outcome 4 -->
            <div class="col-md-6">
                <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                    style="border-left: 5px solid #fd7e14;">
                    <i class="fas fa-database text-warning fs-4 me-3 mt-1"></i>
                    <p class="mb-0" style="font-size: 15px; color: #333;">
                        Create optimized data models and manage relationships efficiently in Power BI.
                    </p>
                </div>
            </div>

            <!-- Outcome 5 -->
            <div class="col-md-6">
                <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                    style="border-left: 5px solid #dc3545;">
                    <i class="fas fa-calculator text-danger fs-4 me-3 mt-1"></i>
                    <p class="mb-0" style="font-size: 15px; color: #333;">
                        Write basic to intermediate DAX measures for KPIs and time-based performance analysis.
                    </p>
                </div>
            </div>

            <!-- Outcome 6 -->
            <div class="col-md-6">
                <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                    style="border-left: 5px solid #20c997;">
                    <i class="fas fa-layer-group text-info fs-4 me-3 mt-1"></i>
                    <p class="mb-0" style="font-size: 15px; color: #333;">
                        Design interactive Power BI reports with drill-throughs, bookmarks, tooltips, and publish them
                        using Power BI Service.
                    </p>
                </div>
            </div>

            <!-- Outcome 7 -->
            <div class="col-md-6">
                <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                    style="border-left: 5px solid #0dcaf0;">
                    <i class="fas fa-chart-pie fs-4 me-3 mt-1" style="color:#0dcaf0;"></i>
                    <p class="mb-0" style="font-size: 15px; color: #333;">
                        Build and publish Tableau Public dashboards using calculated fields and table calculations.
                    </p>
                </div>
            </div>

            <!-- Outcome 8 -->
            <div class="col-md-6">
                <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                    style="border-left: 5px solid #6f42c1;">
                    <i class="fas fa-tachometer-alt fs-4 me-3 mt-1" style="color:#6f42c1;"></i>
                    <p class="mb-0" style="font-size: 15px; color: #333;">
                        Apply visualization, usability, and performance best practices across Excel, Power BI, and
                        Tableau.
                    </p>
                </div>
            </div>

            <!-- Outcome 9 -->
            <div class="col-md-6">
                <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                    style="border-left: 5px solid #198754;">
                    <i class="fas fa-user-tie text-success fs-4 me-3 mt-1"></i>
                    <p class="mb-0" style="font-size: 15px; color: #333;">
                        Confidently present data-driven insights to business and non-technical stakeholders.
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

            <!-- Feature 1 -->
            <div class="col-sm-6 col-lg-4">
                <div class="card h-100 text-center shadow-sm border-0"
                    style="display: flex; justify-content: center; align-items: center; border-radius: 15px; transition: all 0.3s ease; padding: 30px; background: #fff;"
                    onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)';"
                    onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.05)';">
                    <img src="https://youexceltraining.com/img/icon/training-icon-1-1.svg" alt="icon"
                        style="width: 60px; margin-bottom: 20px;">
                    <h6 style="font-weight: 600; color: #212529;">
                        End-to-end Business Intelligence training using Excel, Power BI & Tableau
                    </h6>
                </div>
            </div>

            <!-- Feature 2 -->
            <div class="col-sm-6 col-lg-4">
                <div class="card h-100 text-center shadow-sm border-0"
                    style="display: flex; justify-content: center; align-items: center; border-radius: 15px; transition: all 0.3s ease; padding: 30px; background: #fff;"
                    onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)';"
                    onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.05)';">
                    <img src="https://youexceltraining.com/img/icon/training-icon-1-2.svg" alt="icon"
                        style="width: 60px; margin-bottom: 20px;">
                    <h6 style="font-weight: 600; color: #212529;">
                        Hands-on dashboards, reports, and real-world business case studies
                    </h6>
                </div>
            </div>

            <!-- Feature 3 -->
            <div class="col-sm-6 col-lg-4">
                <div class="card h-100 text-center shadow-sm border-0"
                    style="display: flex; justify-content: center; align-items: center; border-radius: 15px; transition: all 0.3s ease; padding: 30px; background: #fff;"
                    onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)';"
                    onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.05)';">
                    <img src="https://youexceltraining.com/img/icon/training-icon-1-3.svg" alt="icon"
                        style="width: 60px; margin-bottom: 20px;">
                    <h6 style="font-weight: 600; color: #212529;">
                        Strong focus on data modeling, DAX, and analytical thinking
                    </h6>
                </div>
            </div>

            <!-- Feature 4 -->
            <div class="col-sm-6 col-lg-6">
                <div class="card h-100 text-center shadow-sm border-0"
                    style="display: flex; justify-content: center; align-items: center; border-radius: 15px; transition: all 0.3s ease; padding: 30px; background: #fff;"
                    onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)';"
                    onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.05)';">
                    <img src="https://youexceltraining.com/img/icon/training-icon-1-4.svg" alt="icon"
                        style="width: 60px; margin-bottom: 20px;">
                    <h6 style="font-weight: 600; color: #212529;">
                        Industry-standard reporting workflows using Power BI Service & Tableau Public
                    </h6>
                </div>
            </div>

            <!-- Feature 5 -->
            <div class="col-sm-6 col-lg-6">
                <div class="card h-100 text-center shadow-sm border-0"
                    style="display: flex; justify-content: center; align-items: center; border-radius: 15px; transition: all 0.3s ease; padding: 30px; background: #fff;"
                    onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)';"
                    onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.05)';">
                    <img src="https://youexceltraining.com/img/icon/training-icon-1-5.svg" alt="icon"
                        style="width: 60px; margin-bottom: 20px;">
                    <h6 style="font-weight: 600; color: #212529;">
                        Job-ready portfolio with interactive dashboards and presentations
                    </h6>
                </div>
            </div>

        </div>
    </div>
</section>


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
                        <div
                            style="width:40px; height:40px; border-radius:50%; background:#0d6efd1a; display:flex; align-items:center; justify-content:center; margin-right:10px;">
                            <i class="fas fa-users" style="color:#0d6efd; font-size:16px;"></i>
                        </div>
                        <h6 style="margin:0; font-weight:600; color:#0d6efd;">Recommended For</h6>
                    </div>
                    <p style="font-size:14px; color:#333; margin:0;">
                        Anyone from any background
                    </p>
                </div>
            </div>

            <!-- Difficulty Level -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm text-start p-3" style="border-radius:12px; background:#fff;">
                    <div class="d-flex align-items-center mb-2">
                        <div
                            style="width:40px; height:40px; border-radius:50%; background:#0d6efd1a; display:flex; align-items:center; justify-content:center; margin-right:10px;">
                            <i class="fas fa-signal" style="color:#0d6efd; font-size:16px;"></i>
                        </div>
                        <h6 style="margin:0; font-weight:600; color:#0d6efd;">Difficulty Level</h6>
                    </div>
                    <p style="font-size:14px; color:#333; margin:0;">Basic to Advanced</p>
                </div>
            </div>

            <!-- Pre-Requisites -->
            <div class="col-lg-4 col-md-12">
                <div class="card h-100 border-0 shadow-sm text-start p-3" style="border-radius:12px; background:#fff;">
                    <div class="d-flex align-items-center mb-2">
                        <div
                            style="width:40px; height:40px; border-radius:50%; background:#0d6efd1a; display:flex; align-items:center; justify-content:center; margin-right:10px;">
                            <i class="fas fa-lightbulb" style="color:#0d6efd; font-size:16px;"></i>
                        </div>
                        <h6 style="margin:0; font-weight:600; color:#0d6efd;">Pre-Requisites</h6>
                    </div>
                    <p style="font-size:14px; color:#333; margin:0;">
                        Basic computer literacy, Familiarity with Microsoft Excel fundamentals (tables, basic formulas, charts), Basic understanding of business data (sales, finance, operations, HR, etc.), No prior experience with Power BI or Tableau is required (concepts are covered progressively)
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

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
                        <b>Tahir Ali</b> is a Master’s degree holder, Microsoft Certified Trainer, and holds the Microsoft Power BI Data Analyst (PL-300) Certification, enabling him to deliver industry-aligned, business-focused analytics and BI training.
                    </p>
                    <p class="mb-4" style="font-size: 15px; color: #555; line-height: 1.7;">
                        With over 16 years of professional experience, he is a highly motivated corporate trainer who has designed and delivered impactful training programs across diverse industries. He has successfully trained both small and large groups, specializing in professional learning methodologies and instructional design while integrating modern instructional technologies for both onsite and virtual training sessions. His approach is practical, outcome-driven, and aligned with real-world business needs.
                    </p>
                </div>
            </div>

            <!-- Right Side (Trainer Image) -->
            <div class="col-lg-4 col-md-5 text-center">
                <div class="position-relative d-inline-block">
                    <img src="{{ asset('img/trainer/new/Tahir-Ali.png') }}" alt="Trainer - Tahir Ali"
                        class="img-fluid rounded-circle border border-3 border-warning shadow-sm"
                        style="height: 230px; width: 230px; object-fit: cover;">
                    <span
                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning text-dark shadow-sm px-3 py-1"
                        style="font-size: 13px;">
                        <i class="fas fa-star me-1"></i> Expert
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

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

            <!-- Service 1 -->
            <div class="col-md-6">
                <div class="d-flex align-items-start p-3 bg-white rounded shadow-sm h-100"
                    style="border-left: 5px solid #ffc107;">
                    <i class="fas fa-briefcase text-warning fs-4 me-3 mt-1"></i>
                    <p class="mb-0" style="font-size: 15px; color: #444;">
                        100% job and business-oriented training.
                    </p>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="col-md-6">
                <div class="d-flex align-items-start p-3 bg-white rounded shadow-sm h-100"
                    style="border-left: 5px solid #17a2b8;">
                    <i class="fas fa-certificate text-info fs-4 me-3 mt-1"></i>
                    <p class="mb-0" style="font-size: 15px; color: #444;">
                        Certificate of completion recognized from the Trade Testing Board, Government of Pakistan.
                    </p>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="col-md-6">
                <div class="d-flex align-items-start p-3 bg-white rounded shadow-sm h-100"
                    style="border-left: 5px solid #28a745;">
                    <i class="fas fa-user-graduate text-success fs-4 me-3 mt-1"></i>
                    <p class="mb-0" style="font-size: 15px; color: #444;">
                        Claim Continuing Professional Development (CPD) hours for the training.
                    </p>
                </div>
            </div>

            <!-- Service 4 -->
            <div class="col-md-6">
                <div class="d-flex align-items-start p-3 bg-white rounded shadow-sm h-100"
                    style="border-left: 5px solid #dc3545;">
                    <i class="fas fa-video text-danger fs-4 me-3 mt-1"></i>
                    <p class="mb-0" style="font-size: 15px; color: #444;">
                        Video recorded sessions with personalized Learning Management System (LMS) access for lifetime.
                    </p>
                </div>
            </div>

            <!-- Service 5 -->
            <div class="col-md-6">
                <div class="d-flex align-items-start p-3 bg-white rounded shadow-sm h-100"
                    style="border-left: 5px solid #ffc107;">
                    <i class="fas fa-laptop-house text-warning fs-4 me-3 mt-1"></i>
                    <p class="mb-0" style="font-size: 15px; color: #444;">
                        Fully equipped training center venue for on-campus sessions, with laptops, projectors, and air-conditioning.
                    </p>
                </div>
            </div>

            <!-- Service 6 -->
            <div class="col-md-6">
                <div class="d-flex align-items-start p-3 bg-white rounded shadow-sm h-100"
                    style="border-left: 5px solid #0d6efd;">
                    <i class="fas fa-chalkboard-teacher text-primary fs-4 me-3 mt-1"></i>
                    <p class="mb-0" style="font-size: 15px; color: #444;">
                        Live physical on-campus and interactive online sessions.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="py-5">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-12 col-xxl-12">
                <div class="text-center mb-4">
                    <h4 class="fw-bold text-uppercase border-bottom pb-2 d-inline-block" style="border-color: #0d6efd;">
                        REAL PEOPLE REAL TESTIMONIALS
                    </h4>
                </div>
                <div class="elfsight-app-180aecff-7be3-49b6-9603-28a80d740006">
                    @include('website.sections.review-section', ['activeTab' => 'powerbi'])</div>
            </div>
        </div>
    </div>
</section>

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
        <a href="../Registration-Form/Dashboard-Reporting-and-Analysis-With-BI-Applications" class="btn btn-lg fw-bold"
            style="background-color: #ffc107; color: #000; padding: 16px 45px; font-size: 18px; border-radius: 50px; box-shadow: 0 4px 15px rgba(0,0,0,0.2); transition: all 0.3s;">
            <i class="fas fa-user-edit me-2"></i> REGISTER NOW
        </a>

        <!-- Optional Note -->
        <p class="mt-3" style="font-size: 14px; color: #fff;">
            Limited seats available — reserve your spot today!
        </p>
    </div>
</section>
@endsection