@extends('website.app')

@section('title', 'Financial Modeling and Analysis Course in Karachi Pakistan')
@section('meta_description',
    'Enroll in the Financial Modeling and Analysis Course in Karachi, Pakistan. Master
    financial forecasting, budgeting, and modeling techniques to advance your career.')
@section('meta_keywords', 'Financial Modeling and Analysis Course in Karachi Pakistan')

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
                    Transform Your Financial Analysis Skills to Next Level: Learn Financial Modeling
                    & Analysis Now!
                </h2>
            </div>
        </div>
    </section>
    <!--==============================
                              Course Area
                          ==============================-->
    <section class="course-details pt-3 pb-3">
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
                                <tr class=" mb-4">

                                    <!--<td> <img src="https://youexceltraining.com/img/Yourexcel-img/fma.jpg" /> </td>-->
                                    <td>
                                        @include('website.sections.video-section', [
                                            'videoId' => '27Mn-DACIqM',
                                        ])
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
                                    <td><i class="far fa-hourglass"></i> Duration: 24 hours</td>
                                </tr>
                                <tr style="padding-top: 8px;">
                                    <td>
                                        <i class="far fa-suitcase"></i>Difficulty Level: Basic to Intermediate
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
                            </tbody>
                        </table>
                        @if ($pdf == '')
                        @else
                            <a href="{{ $pdf }}" class="vs-btn"> Download
                                Brochure Now</a><br /><br />
                        @endif
                        <a href="https://youexceltraining.com/enquiry-form/financial-modeling-and-analysis"
                            class="vs-btn">Enquire
                            Now</a><br /><br />
                        <!--<a href="contact.html" class="vs-btn" style="padding:3.5px 40px; line-height:22px">Corporate <br> Training Consultancy</a>-->
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="course-category wow fadeInUp ">
                        <a href="#">Get Started Learning with</a>
                    </div>
                    <h2 class="course-title animate__animated animate__bounceInDown">Financial Modeling and Analysis</h2>
                    <div class="course-review"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>( 5.0 )
                    </div>
                    <div class="mb-3">
                        <img src="https://youexceltraining.com/img/Yourexcel-img/fmab.jpg" />
                    </div>
                    <div class="mb-2 mt-2">
                        <h4 class="fw-bold text-uppercase border-bottom pb-2 d-inline-block" style="border-color: #0d6efd;">
                            Program Overview
                        </h4>
                    </div>
                    <p class="wow fadeInDown pb-3">
                        The Certificate in Financial Modeling and Analysis (CFMA) is a hands-on program designed to build
                        practical expertise in financial decision-making, analysis, and business valuation. Across 24+ hours
                        of interactive training, participants will learn to structure models, analyze feasibility, conduct
                        case studies, and perform valuation exercises using real-world scenarios.
                    </p>
                    <p class="wow fadeInDown pb-3">
                        The program combines fundamentals with advanced applications, including comparative analysis, stock
                        evaluation, feasibility models, startup scaling, and integrated financial statements. Participants
                        will also be trained on the FAST-modeling approach to ensure models are Flexible, Appropriate,
                        Structured, and Transparent—a global best practice in financial modeling.
                    </p>
                    <p class="wow fadeInDown pb-3">
                        Whether you are an aspiring financial analyst, investment professional, or business decision-maker,
                        this program equips you with the tools and confidence to build dynamic models, interpret financial
                        data, and support strategic business decisions.
                    </p>
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

                        <!-- Module 1 -->
                        <div class="accordion-item active wow fadeInUp">
                            <div class="accordion-header d-flex" id="headingOne">
                                <button class="accordion-button justify-content-between" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    <span class="button-label">Module 1</span>
                                    Basics of Modeling and Analysis
                                    <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="accordionExample">
                                <div class="accordion-body wow fadeInDown">
                                    <ul>
                                        <li>Inserting text, numbers, and formulas, keeping proper calculation blocks, and
                                            using reserve lines for flexibility.</li>
                                        <li>Concept of timeline – ensuring consistency and using EOMONTH() with basic
                                            formatting.</li>
                                        <li>Application of functions – AVERAGE(), COUNT(), LARGE(), OFFSET(), and handling
                                            common data errors.</li>
                                        <li>Income statement analysis – applying IF() condition and maintaining formula
                                            consistency.</li>
                                        <li>Charts optimization – examining data using common charts with focus on axis and
                                            timelines.</li>
                                        <li>Project timelines – calculating task durations and visualizing with combo
                                            stacked bar and scatter charts.</li>
                                        <li>Flexible and dynamic approach – exploring past data to extract insights and
                                            build adaptable models.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Module 2 -->
                        <div class="accordion-item wow fadeInUp">
                            <div class="accordion-header d-flex" id="headingTwo">
                                <button class="accordion-button justify-content-between" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    <span class="button-label">Module 2</span>
                                    Feasibility Model
                                    <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="accordionExample">
                                <div class="accordion-body wow fadeInUp">
                                    <ul>
                                        <li>Basic Market Data: Research product price, cost, volume, and growth for the new
                                            business.</li>
                                        <li>Financial Ratios: Analyze financial ratios like receivables and payables.</li>
                                        <li>Capital Expenditures: Evaluate the cost of the project and investment in assets.
                                        </li>
                                        <li>Debt & Equity Financing: Examine borrowing costs and shareholder expectations.
                                        </li>
                                        <li>Financial Statement Analysis: Income Statement, Balance Sheet, and Cash Flow.
                                        </li>
                                        <li>Dynamic Dashboard: Create KPI dashboards to track variable changes.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Module 3 -->
                        <div class="accordion-item wow fadeInUp">
                            <div class="accordion-header d-flex" id="headingThree">
                                <button class="accordion-button justify-content-between" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    <span class="button-label">Module 3</span>
                                    Comparative Case Study
                                    <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="accordionExample">
                                <div class="accordion-body wow fadeInUp">
                                    <ul>
                                        <li>Establish a centralized database for company financials.</li>
                                        <li>Perform comparative annual Income Statement and Balance Sheet analysis.</li>
                                        <li>Perform comparative quarterly Income Statement and Balance Sheet analysis.</li>
                                        <li>Utilize comparative graphical analysis and valuation ratios.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Module 4 -->
                        <div class="accordion-item wow fadeInUp">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    <span class="button-label">Module 4</span>
                                    Stock Analysis
                                    <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="accordionExample">
                                <div class="accordion-body wow fadeInDown">
                                    <ul>
                                        <li>PSX listed companies, KSE-100 Index benchmark, stock screener.</li>
                                        <li>Analyze P/E ratio, market capitalization, dividends, and volumes.</li>
                                        <li>Understand objectives of a stock model (primary & secondary).</li>
                                        <li>Work with ex-dates, adjusted returns, and book closure dates.</li>
                                        <li>Measure price volatility, premium, covariance, correlation, and beta.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Module 5 -->
                        <div class="accordion-item wow fadeInUp">
                            <div class="accordion-header d-flex" id="headingFive">
                                <button class="accordion-button justify-content-between" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                                    aria-controls="collapseFive">
                                    <span class="button-label">Module 5</span>
                                    Case Study – Financial Model & Valuation
                                    <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="accordionExample">
                                <div class="accordion-body wow fadeInUp">
                                    <ul>
                                        <li>Macro-Economic Variables: GDP, CPI, exchange rates.</li>
                                        <li>Industry Specific: Trends, market size, domestic sales & exports.</li>
                                        <li>Specific Assumptions: Market share, pricing, and forecasts.</li>
                                        <li>Capacity & Utilization: Production and operational efficiency.</li>
                                        <li>Revenue & Costs: Sales and operating expenses projection.</li>
                                        <li>Assets & Depreciation: Fixed assets, depreciation schedules.</li>
                                        <li>Debt & Equity: Capital structure and financing.</li>
                                        <li>Financial Statements: Projected IS, BS, and CF.</li>
                                        <li>Valuation: DCF method to determine business value.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Module 6 -->
                        <div class="accordion-item wow fadeInUp">
                            <div class="accordion-header d-flex" id="headingSix">
                                <button class="accordion-button justify-content-between" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false"
                                    aria-controls="collapseSix">
                                    <span class="button-label">Module 6</span>
                                    FAST Approach for Startup Scaling
                                    <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="accordionExample">
                                <div class="accordion-body wow fadeInUp">
                                    <ul>
                                        <li>FAST Approach: Flexible, Appropriate, Structured, Transparent models.</li>
                                        <li>Universal Layout Principles: Separate input, calculation & output sheets.</li>
                                        <li>Time Sheet: Primary & secondary timelines and model phases.</li>
                                        <li>Calculation Sheets: Revenue, expenses, assets, capital, working capital.</li>
                                        <li>Financial Statements: Integrated IS, BS, and CF (annual & monthly).</li>
                                        <li>Capital Requirement: Equity, debt needs & investment timing.</li>
                                        <li>Scenarios: Build strategic what-if scenarios.</li>
                                        <li>Analysis: Key Metrics Dashboard for dynamic outputs.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Bonus 1 -->
                        <div class="accordion-item wow fadeInUp">
                            <div class="accordion-header d-flex" id="bonusHeadingOne">
                                <button class="accordion-button justify-content-between" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#bonusOne" aria-expanded="false"
                                    aria-controls="bonusOne">
                                    <span class="button-label">Bonus</span>
                                    Power query and Power Dashboards
                                    <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="bonusOne" class="accordion-collapse collapse" aria-labelledby="bonusHeadingOne"
                                data-bs-parent="accordionExample">
                                <div class="accordion-body wow fadeInUp">
                                    <ul>
                                        <li>Create dynamic power dashboard using power query</li>
                                    </ul>
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
                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                        style="border-left: 5px solid #0d6efd;">
                        <i class="fas fa-broom text-primary fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #333;">
                            Build structured and dynamic financial models from scratch using Excel
                            best practices. </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                        style="border-left: 5px solid #6610f2;">
                        <i class="fas fa-database text-purple fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #333;">
                            Analyze feasibility of new ventures, including market research,
                            ratios, CAPEX, and financing mix.
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                        style="border-left: 5px solid #198754;">
                        <i class="fas fa-brain text-success fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #333;">
                            Perform comparative case studies and industry benchmarking using real
                            company data.
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                        style="border-left: 5px solid #fd7e14;">
                        <i class="fas fa-chart-line text-warning fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #333;">
                            Evaluate stocks using valuation ratios, volatility measures, and
                            market benchmarks.
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                        style="border-left: 5px solid #dc3545;">
                        <i class="fas fa-clock text-danger fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #333;">
                            Develop fully integrated financial statements and business valuations
                            using DCF.
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                        style="border-left: 5px solid #20c997;">
                        <i class="fas fa-share-square text-info fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #333;">
                            Apply the FAST approach for creating transparent, scalable, and
                            scenario-based startup models.
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                        style="border-left: 5px solid #20c997;">
                        <i class="fas fa-share-square text-info fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #333;">
                            Present insights through professional dashboards and visualizations to
                            support decision-making.
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
                        <h6 style="font-weight: 600; color: #212529;">Hands-On, Excel-Based Training</h6>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="card h-100 text-center shadow-sm border-0"
                        style="display: flex; justify-content: center; align-items: center; border-radius: 15px; transition: all 0.3s ease; padding: 30px; background: #fff;"
                        onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)';"
                        onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.05)';">
                        <img src="https://youexceltraining.com/img/icon/training-icon-1-2.svg" alt="icon"
                            style="width: 60px; margin-bottom: 20px;">
                        <h6 style="font-weight: 600; color: #212529;">FAST Modeling Methodology</h6>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="card h-100 text-center shadow-sm border-0"
                        style="display: flex; justify-content: center; align-items: center; border-radius: 15px; transition: all 0.3s ease; padding: 30px; background: #fff;"
                        onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)';"
                        onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.05)';">
                        <img src="https://youexceltraining.com/img/icon/training-icon-1-3.svg" alt="icon"
                            style="width: 60px; margin-bottom: 20px;">
                        <h6 style="font-weight: 600; color: #212529;">Integrated Financial Statements</h6>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="card h-100 text-center shadow-sm border-0"
                        style="display: flex; justify-content: center; align-items: center; border-radius: 15px; transition: all 0.3s ease; padding: 30px; background: #fff;"
                        onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)';"
                        onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.05)';">
                        <img src="https://youexceltraining.com/img/icon/training-icon-1-4.svg" alt="icon"
                            style="width: 60px; margin-bottom: 20px;">
                        <h6 style="font-weight: 600; color: #212529;">Real-World Stock & Startup Modeling</h6>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="card h-100 text-center shadow-sm border-0"
                        style="display: flex; justify-content: center; align-items: center; border-radius: 15px; transition: all 0.3s ease; padding: 30px; background: #fff;"
                        onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)';"
                        onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.05)';">
                        <img src="https://youexceltraining.com/img/icon/training-icon-1-5.svg" alt="icon"
                            style="width: 60px; margin-bottom: 20px;">
                        <h6 style="font-weight: 600; color: #212529;">Government-Recognized Certification</h6>
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
                    <div class="card h-100 border-0 shadow-sm text-start p-3"
                        style="border-radius:12px; background:#fff;">
                        <div class="d-flex align-items-center mb-2">
                            <div
                                style="width:40px; height:40px; border-radius:50%; background:#0d6efd1a; display:flex; align-items:center; justify-content:center; margin-right:10px;">
                                <i class="fas fa-users" style="color:#0d6efd; font-size:16px;"></i>
                            </div>
                            <h6 style="margin:0; font-weight:600; color:#0d6efd;">Recommended For</h6>
                        </div>
                        <p style="font-size:14px; color:#333; margin:0;">
                            Finance Professionals, Business Analysts, Accountants, Data Analysts, Investment & Equity
                            Analysts, Project Managers
                        </p>
                    </div>
                </div>

                <!-- Difficulty Level -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm text-start p-3"
                        style="border-radius:12px; background:#fff;">
                        <div class="d-flex align-items-center mb-2">
                            <div
                                style="width:40px; height:40px; border-radius:50%; background:#0d6efd1a; display:flex; align-items:center; justify-content:center; margin-right:10px;">
                                <i class="fas fa-signal" style="color:#0d6efd; font-size:16px;"></i>
                            </div>
                            <h6 style="margin:0; font-weight:600; color:#0d6efd;">Difficulty Level</h6>
                        </div>
                        <p style="font-size:14px; color:#333; margin:0;">Beginners to Advanced</p>
                    </div>
                </div>

                <!-- Pre-Requisites -->
                <div class="col-lg-4 col-md-12">
                    <div class="card h-100 border-0 shadow-sm text-start p-3"
                        style="border-radius:12px; background:#fff;">
                        <div class="d-flex align-items-center mb-2">
                            <div
                                style="width:40px; height:40px; border-radius:50%; background:#0d6efd1a; display:flex; align-items:center; justify-content:center; margin-right:10px;">
                                <i class="fas fa-lightbulb" style="color:#0d6efd; font-size:16px;"></i>
                            </div>
                            <h6 style="margin:0; font-weight:600; color:#0d6efd;">Pre-Requisites</h6>
                        </div>
                        <p style="font-size:14px; color:#333; margin:0;">
                            Basic knowledge of Accounting and Finance, along with
                            familiarity with Microsoft Excel.
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
                        <h5 class="fw-bold mb-3" style="font-size: 26px;">Tanweer Bukhsh</h5>
                        <p class="mb-4" style="font-size: 15px; color: #555; line-height: 1.7;">
                            <b>Tanweer Bukhsh</b> is a Masters degree holder in Economics
                            from Karachi University. He is currently serving as GM Finance at Richko Group and is a visiting
                            faculty member at YouExcel.
                        </p>
                        <p class="mb-4" style="font-size: 15px; color: #555; line-height: 1.7;">
                            He has vast practical experience of working in equity
                            market has enabled him to apply tools and techniques in Financial Modeling and Analysis
                            training.
                        </p>
                        <p class="mb-4" style="font-size: 15px; color: #555; line-height: 1.7;">
                            He is passionate to share his practical experience of
                            over 19 years of working in the industry with his students to help learn from real-life case
                            studies.
                        </p>

                        {{-- <h6 class="fw-semibold mb-2">
                            <i class="fas fa-certificate text-warning me-2"></i>Professional Certifications
                        </h6>
                        <ul class="list-unstyled mb-0">
                            <li><i class="fas fa-check-circle text-success me-2"></i>Microsoft Power BI Data Analyst PL300 Certification 2025</li>
                            <li><i class="fas fa-check-circle text-success me-2"></i>Microsoft Certified Trainer</li>
                        </ul> --}}
                    </div>
                </div>

                <!-- Right Side (Trainer Image) -->
                <div class="col-lg-4 col-md-5 text-center">
                    <div class="position-relative d-inline-block">
                        <img src="{{ asset('img/trainer/tanweer.png') }}" alt="Trainer - Tanweer"
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
                <!-- Service Item -->
                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-white rounded shadow-sm h-100"
                        style="border-left: 5px solid #ffc107;">
                        <i class="fas fa-video text-warning fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #444;">
                            Lifetime Video recorded session with personalized Learning
                            Management System (LMS) access login id for months
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-white rounded shadow-sm h-100"
                        style="border-left: 5px solid #17a2b8;">
                        <i class="fab fa-whatsapp text-info fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #444;">
                            Lifetime WhatsApp Post training Support
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-white rounded shadow-sm h-100"
                        style="border-left: 5px solid #28a745;">
                        <i class="fas fa-briefcase text-success fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #444;">
                            100% job and business oriented training
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-white rounded shadow-sm h-100"
                        style="border-left: 5px solid #dc3545;">
                        <i class="fas fa-certificate text-danger fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #444;">
                            Certificate of completion recognized from Trade Testing
                            Board, Government of Pakistan
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-white rounded shadow-sm h-100"
                        style="border-left: 5px solid #ffc107;">
                        <i class="fas fa-laptop-house text-warning fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #444;">
                            Fully equipped training center venue for on-campus
                            trainings readily available with laptops, projectors and air-conditioning
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
            </div>
        </div>
    </section>

    <section class="pb-5">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-12 col-xxl-5">
                    <div class="text-center mb-4">
                        <h4 class="fw-bold text-uppercase border-bottom pb-2 d-inline-block"
                            style="border-color: #0d6efd;">
                            REAL PEOPLE REAL TESTIMONIALS
                        </h4>
                    </div>
                    <div class="elfsight-app-180aecff-7be3-49b6-9603-28a80d740006">@include('website.sections.review-section', ['activeTab' => 'financial-modeling'])</div>
                </div>
            </div>
        </div>
    </section>

    {{-- slider content start --}}
    <section class="space-top space-extra-bottom">
        <div class="container-lg">
            <div class="text-center mb-4">
                <h4 class="fw-bold text-uppercase border-bottom pb-2 d-inline-block" style="border-color: #0d6efd;">
                    Financial Modeling Previews
                </h4>
            </div>
            <div class="row vs-carousel wow fadeInUp" data-wow-delay="0.4s" data-slide-show="3" data-lg-slide-show="2"
                data-md-slide-show="2" data-sm-slide-show="2" data-center-mode="true" data-dots="true">

                <!-- First Slide -->
                <div class="col-sm-6 col-xl-4">
                    <div style="position: relative; overflow: hidden; border-radius: 20px 20px 0 0; height: 314px;">
                        <a href="">
                            <img class="w-100 custom-img-size" src="{{ asset('img/Yourexcel-img/fm1.png') }}"
                                alt="Course Img"
                                style="pointer-events: none; object-fit: cover; width: 100%; height: 100%; opacity: 1;">
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <div style="position: relative; overflow: hidden; border-radius: 20px 20px 0 0; height: 314px;">
                        <a href="">
                            <img class="w-100" src="{{ asset('img/Yourexcel-img/fm2.png') }}" alt="Course Img"
                                style="pointer-events: none; object-fit: cover; width: 100%; height: 100%;">
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-4">
                    <div style="position: relative; overflow: hidden; border-radius: 20px 20px 0 0; height: 314px;">
                        <a href="">
                            <img class="w-100 custom-img-size" src="{{ asset('img/Yourexcel-img/fm3.png') }}"
                                alt="Course Img"
                                style="pointer-events: none; object-fit: cover; width: 100%; height: 100%; opacity: 1;">
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <div style="position: relative; overflow: hidden; border-radius: 20px 20px 0 0; height: 314px;">
                        <a href="">
                            <img class="w-100" src="{{ asset('img/Yourexcel-img/fm4.png') }}" alt="Course Img"
                                style="pointer-events: none; object-fit: cover; width: 100%; height: 100%;">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- slider content end --}}

    <section class="space-top space-extra-bottom">
        <div class="container-lg">
            <div class="text-center mb-4">
                <h4 class="fw-bold text-uppercase border-bottom pb-2 d-inline-block" style="border-color: #0d6efd;">
                    Financial Modeling Chapter Previews Video
                </h4>
            </div>
            <div class="position-relative overflow-hidden rounded-20 mt-5">
                <img src="{{ asset('img/Yourexcel-img/fmas.png') }}" alt="blog video">
                <!-- Play Button for Fancybox Popup -->
                <a href="{{ asset('video/financial-modeling-analysis.mp4') }}"
                    class="play-btn popup-video position-center" data-fancybox="video" data-caption="My Local Video">
                    <i class="fas fa-play"></i>
                </a>
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
            <a href="../Registration-Form/financial-modeling-and-analysis" class="btn btn-lg fw-bold"
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
@endsection
