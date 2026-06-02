@extends('website.app', ['title' => 'ENTREPRENEURSHIP'])

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
                Turn Ideas into Impact: Start Your Entrepreneurship Journey with Innovation,
                Strategy, and AI-Driven Growth
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
                                    <img src="https://youexceltraining.com/img/Yourexcel-img/entrepreneurship-banner.jpg">
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
                                <td><i class="far fa-hourglass"></i> Duration: 24 Hours</td>
                            </tr>
                            <tr style="padding-top: 8px;">
                                <td>
                                    <i class="far fa-suitcase"></i>Difficulty Level: Intermediate to Advance
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
                    <a href="https://youexceltraining.com/enquiry-form/entrepreneurship"
                        class="vs-btn">Enquire
                        Now</a><br />
                </div>
            </div>
            <div class="col-lg-8">
                <div class="course-category wow fadeInUp ">
                    <a href="#">Get Started Learning With </a>
                </div>
                <h2 class="course-title animate__animated animate__bounceInDown">ENTREPRENEURSHIP</h2>
                <div class="course-review"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                        class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>( 5.0 )
                </div>
                <div class="mb-3">
                    <img src="https://youexceltraining.com/img/Yourexcel-img/entrepreneurship-banner.jpg" />
                </div>
                <div class="mb-2 mt-2">
                    <h4 class="fw-bold text-uppercase border-bottom pb-2 d-inline-block" style="border-color: #0d6efd;">
                        Program Overview
                    </h4>
                </div>
                <p class="wow fadeInDown pb-3">The Entrepreneurship program is designed to equip you with the strategic
                    mindset, practical tools, and leadership capabilities needed to identify opportunities, drive
                    innovation, and build sustainable ventures within startups, organizations, or independent
                    enterprises.</p>
                <p class="wow fadeInDown pb-3">This program focuses on real-world application, combining entrepreneurial
                    theory with hands-on problem-solving. Participants learn how to evaluate market opportunities,
                    develop scalable business models, manage risk, and make data-driven decisions in dynamic and
                    competitive environments. The course emphasizes innovation, intrapreneurship, and value creation
                    across industries.</p>

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
                                Identifying Business Opportunities
                                <i class="fas fa-angle-down"></i>
                            </button>
                        </div>
                        <div id="collapseOne" class="accordion-collapse collapse">
                            <div class="accordion-body wow fadeInUp">
                                <div class="syllabus-list">
                                    <div class="syllabus-content">
                                        <li class="syllabustext">Idea generation techniques (brainstorming, design
                                            thinking)</li>
                                        <li class="syllabustext">Problem-solving</li>
                                        <li class="syllabustext">Market gaps & innovation opportunities</li>
                                        <li class="syllabustext">Industry, technology & consumer trend analysis</li>
                                        <li class="syllabustext">Value creation & differentiation</li>
                                        <li class="syllabustext">Market demand & size evaluation</li>
                                        <li class="syllabustext">Feasibility, resources & capabilities</li>
                                        <li class="syllabustext">Competitive advantage identification</li>
                                        <li class="syllabustext">Idea screening & prioritization</li>
                                        <li class="syllabustext">Early validation & feedback</li>
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
                                Market Research & Customer Discovery
                                <i class="fas fa-angle-down"></i>
                            </button>
                        </div>
                        <div id="collapseTwo" class="accordion-collapse collapse">
                            <div class="accordion-body wow fadeInUp">
                                <div class="syllabus-list">
                                    <div class="syllabus-content">
                                        <li class="syllabustext">Customer problems, needs & behaviors</li>
                                        <li class="syllabustext">Target customers & personas</li>
                                        <li class="syllabustext">Market segmentation</li>
                                        <li class="syllabustext">Market sizing (TAM, SAM, SOM)</li>
                                        <li class="syllabustext">Industry & trend analysis</li>
                                        <li class="syllabustext">Competitive landscape</li>
                                        <li class="syllabustext">Value proposition testing</li>
                                        <li class="syllabustext">Customer interviews</li>
                                        <li class="syllabustext">Surveys & observation</li>
                                        <li class="syllabustext">Insight analysis & validation</li>
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
                                Business Model Canvas & Strategic Tools
                                <i class="fas fa-angle-down"></i>
                            </button>
                        </div>
                        <div id="collapseThree" class="accordion-collapse collapse">
                            <div class="accordion-body wow fadeInUp">
                                <div class="syllabus-list">
                                    <div class="syllabus-content">
                                        <li class="syllabustext">Business Model Canvas</li>
                                        <li class="syllabustext">SWOT Analysis</li>
                                        <li class="syllabustext">PESTEL Analysis</li>
                                        <li class="syllabustext">BCG Matrix</li>
                                        <li class="syllabustext">Red Ocean & Blue Ocean strategy</li>
                                        <li class="syllabustext">Porter’s Five Forces</li>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Module 04 -->
                    <div class="accordion-item">
                        <div class="accordion-header d-flex" id="headingFour">
                            <button class="accordion-button justify-content-between" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                <span class="button-label">Module 04</span>
                                Financial Literacy for Entrepreneurs
                                <i class="fas fa-angle-down"></i>
                            </button>
                        </div>
                        <div id="collapseFour" class="accordion-collapse collapse">
                            <div class="accordion-body wow fadeInUp">
                                <div class="syllabus-list">
                                    <div class="syllabus-content">
                                        <li class="syllabustext">CAPEX & OPEX</li>
                                        <li class="syllabustext">Cash flow management</li>
                                        <li class="syllabustext">Pricing strategies</li>
                                        <li class="syllabustext">Break-even analysis</li>
                                        <li class="syllabustext">Funding options</li>
                                        <li class="syllabustext">Financial forecasting basics</li>
                                        <li class="syllabustext">Debt & equity management</li>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Module 05 -->
                    <div class="accordion-item">
                        <div class="accordion-header d-flex" id="headingFive">
                            <button class="accordion-button justify-content-between" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseFive">
                                <span class="button-label">Module 05</span>
                                Legal & Ethical Issues
                                <i class="fas fa-angle-down"></i>
                            </button>
                        </div>
                        <div id="collapseFive" class="accordion-collapse collapse">
                            <div class="accordion-body wow fadeInUp">
                                <div class="syllabus-list">
                                    <div class="syllabus-content">
                                        <li class="syllabustext">Forms of business ownership</li>
                                        <li class="syllabustext">Licensing & permits</li>
                                        <li class="syllabustext">Contracts & agreements</li>
                                        <li class="syllabustext">Business ethics</li>
                                        <li class="syllabustext">Intellectual Property protection</li>
                                        <li class="syllabustext">Environmental regulations</li>
                                        <li class="syllabustext">Corporate Social Responsibility</li>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Module 06 -->
                    <div class="accordion-item">
                        <div class="accordion-header d-flex" id="headingSix">
                            <button class="accordion-button justify-content-between" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseSix">
                                <span class="button-label">Module 06</span>
                                Marketing & Branding
                                <i class="fas fa-angle-down"></i>
                            </button>
                        </div>
                        <div id="collapseSix" class="accordion-collapse collapse">
                            <div class="accordion-body wow fadeInUp">
                                <div class="syllabus-list">
                                    <div class="syllabus-content">
                                        <li class="syllabustext">Marketing channels</li>
                                        <li class="syllabustext">Advertising & promotion</li>
                                        <li class="syllabustext">Brand identity</li>
                                        <li class="syllabustext">Brand positioning</li>
                                        <li class="syllabustext">Customer acquisition strategies</li>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Module 07 -->
                    <div class="accordion-item">
                        <div class="accordion-header d-flex" id="headingSeven">
                            <button class="accordion-button justify-content-between" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseSeven">
                                <span class="button-label">Module 07</span>
                                Building & Managing a Team
                                <i class="fas fa-angle-down"></i>
                            </button>
                        </div>
                        <div id="collapseSeven" class="accordion-collapse collapse">
                            <div class="accordion-body wow fadeInUp">
                                <div class="syllabus-list">
                                    <div class="syllabus-content">
                                        <li class="syllabustext">Leadership & management</li>
                                        <li class="syllabustext">Startup roles & responsibilities</li>
                                        <li class="syllabustext">Hiring process</li>
                                        <li class="syllabustext">Effective communication</li>
                                        <li class="syllabustext">Motivation & culture</li>
                                        <li class="syllabustext">Team diversity</li>
                                        <li class="syllabustext">Conflict resolution</li>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Module 08 -->
                    <div class="accordion-item">
                        <div class="accordion-header d-flex" id="headingEight">
                            <button class="accordion-button justify-content-between" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseEight">
                                <span class="button-label">Module 08</span>
                                Operations & Business Launch
                                <i class="fas fa-angle-down"></i>
                            </button>
                        </div>
                        <div id="collapseEight" class="accordion-collapse collapse">
                            <div class="accordion-body wow fadeInUp">
                                <div class="syllabus-list">
                                    <div class="syllabus-content">
                                        <li class="syllabustext">Setting up operations</li>
                                        <li class="syllabustext">Supply chain basics</li>
                                        <li class="syllabustext">Quality control</li>
                                        <li class="syllabustext">Launch planning & execution</li>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Module 09 -->
                    <div class="accordion-item">
                        <div class="accordion-header d-flex" id="headingNine">
                            <button class="accordion-button justify-content-between" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseNine">
                                <span class="button-label">Module 09</span>
                                Growth Strategies & Scaling
                                <i class="fas fa-angle-down"></i>
                            </button>
                        </div>
                        <div id="collapseNine" class="accordion-collapse collapse">
                            <div class="accordion-body wow fadeInUp">
                                <div class="syllabus-list">
                                    <div class="syllabus-content">
                                        <li class="syllabustext">Scaling startups</li>
                                        <li class="syllabustext">Strategic partnerships</li>
                                        <li class="syllabustext">Continuous innovation</li>
                                        <li class="syllabustext">Monitoring KPIs</li>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Module 10 -->
                    <div class="accordion-item">
                        <div class="accordion-header d-flex" id="headingTen">
                            <button class="accordion-button justify-content-between" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseTen">
                                <span class="button-label">Module 10</span>
                                AI for Startups & Entrepreneurs
                                <i class="fas fa-angle-down"></i>
                            </button>
                        </div>
                        <div id="collapseTen" class="accordion-collapse collapse">
                            <div class="accordion-body wow fadeInUp">
                                <div class="syllabus-list">
                                    <div class="syllabus-content">
                                        <li class="syllabustext">What AI really is (no hype)</li>
                                        <li class="syllabustext">Types of AI (LLMs, vision, automation)</li>
                                        <li class="syllabustext">AI tools & techniques</li>
                                        <li class="syllabustext">AI for idea & market validation</li>
                                        <li class="syllabustext">AI in product development</li>
                                        <li class="syllabustext">AI for marketing & growth</li>
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

            <div class="col-md-6">
                <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                    style="border-left: 5px solid #0d6efd;">
                    <i class="fas fa-lightbulb text-primary fs-4 me-3 mt-1"></i>
                    <p class="mb-0" style="font-size: 15px; color: #333;">
                        Gain knowledge in opportunity recognition, customer discovery, lean startup methodologies,
                        financial planning, marketing & growth strategies, funding readiness, and legal & ethical
                        considerations.
                    </p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                    style="border-left: 5px solid #6610f2;">
                    <i class="fas fa-search-dollar text-purple fs-4 me-3 mt-1"></i>
                    <p class="mb-0" style="font-size: 15px; color: #333;">
                        Apply entrepreneurial thinking to solve real-world business and organizational challenges.
                    </p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                    style="border-left: 5px solid #198754;">
                    <i class="fas fa-check-circle text-success fs-4 me-3 mt-1"></i>
                    <p class="mb-0" style="font-size: 15px; color: #333;">
                        Identify, evaluate, and validate new business opportunities using structured frameworks and
                        market insights.
                    </p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                    style="border-left: 5px solid #fd7e14;">
                    <i class="fas fa-project-diagram text-warning fs-4 me-3 mt-1"></i>
                    <p class="mb-0" style="font-size: 15px; color: #333;">
                        Design, develop, and clearly communicate viable business models and strategic plans.
                    </p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                    style="border-left: 5px solid #dc3545;">
                    <i class="fas fa-brain text-danger fs-4 me-3 mt-1"></i>
                    <p class="mb-0" style="font-size: 15px; color: #333;">
                        Lead innovation initiatives while effectively managing uncertainty, risk, and change.
                    </p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                    style="border-left: 5px solid #20c997;">
                    <i class="fas fa-rocket text-info fs-4 me-3 mt-1"></i>
                    <p class="mb-0" style="font-size: 15px; color: #333;">
                        Develop actionable and practical plans for launching new ventures or scaling existing
                        businesses.
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
            <div class="col-sm-6 col-lg-6">
                <div class="card h-100 text-center shadow-sm border-0"
                    style="display: flex; justify-content: center; align-items: center; border-radius: 15px; transition: all 0.3s ease; padding: 30px; background: #fff;"
                    onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)';"
                    onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.05)';">
                    <img src="https://youexceltraining.com/img/icon/training-icon-1-1.svg" alt="icon"
                        style="width: 60px; margin-bottom: 20px;">
                    <h6 style="font-weight: 600; color: #212529;">
                        End-to-End Entrepreneurship Framework covering idea generation to business launch and scaling.
                    </h6>
                </div>
            </div>

            <!-- Feature 2 -->
            <div class="col-sm-6 col-lg-6">
                <div class="card h-100 text-center shadow-sm border-0"
                    style="display: flex; justify-content: center; align-items: center; border-radius: 15px; transition: all 0.3s ease; padding: 30px; background: #fff;"
                    onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)';"
                    onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.05)';">
                    <img src="https://youexceltraining.com/img/icon/training-icon-1-2.svg" alt="icon"
                        style="width: 60px; margin-bottom: 20px;">
                    <h6 style="font-weight: 600; color: #212529;">
                        Practical, real-world learning through case studies, simulations, and hands-on projects.
                    </h6>
                </div>
            </div>

            <!-- Feature 3 -->
            <div class="col-sm-6 col-lg-6">
                <div class="card h-100 text-center shadow-sm border-0"
                    style="display: flex; justify-content: center; align-items: center; border-radius: 15px; transition: all 0.3s ease; padding: 30px; background: #fff;"
                    onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)';"
                    onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.05)';">
                    <img src="https://youexceltraining.com/img/icon/training-icon-1-3.svg" alt="icon"
                        style="width: 60px; margin-bottom: 20px;">
                    <h6 style="font-weight: 600; color: #212529;">
                        Financial planning, growth strategies, and AI-driven skills for modern startups.
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
                        Leadership development and innovation readiness to manage uncertainty and scale confidently.
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
                        Aspiring Entrepreneurs, Early-Stage Startup Founders, Small Business Owners, Professionals
                        Seeking Career Transition, Corporate Employees / Intrapreneurs, Freelancers & Solopreneurs,
                        Investors & Mentors
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
                    <p style="font-size:14px; color:#333; margin:0;">Intermediate to Advance</p>
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
                        Women led Startups / business, Minimum 2 years of startup running experience, 2 years of
                        professional experience, Traction, Existing Businesses
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
                    <h5 class="fw-bold mb-3" style="font-size: 26px;">Sayyid Yasir Ali</h5>
                    <p class="mb-4" style="font-size: 15px; color: #555; line-height: 1.7;">
                        <b>Sayyid Yasir Ali</b> is a seasoned professional with over 20 years of experience in the
                        financial sector, having led multiple initiatives as a Project Head for FinTech and HealthTech
                        ventures. He is an accomplished Business Consultant, Entrepreneur, Career Coach, and Social
                        Worker, with extensive experience mentoring startups across Spain, Africa, and Pakistan.
                    </p>
                    <p class="mb-4" style="font-size: 15px; color: #555; line-height: 1.7;">
                        He holds a Master’s degree in Business Administration and is currently pursuing a Master of
                        Philosophy (MPhil). His professional credentials include certifications in Entrepreneurship and
                        AAOIFI (Shariah Standards), reflecting his strong expertise in Islamic finance, business
                        strategy, and startup development.
                    </p>
                </div>
            </div>

            <!-- Right Side (Trainer Image) -->
            <div class="col-lg-4 col-md-5 text-center">
                <div class="position-relative d-inline-block">
                    <img src="{{ asset('img/trainer/new/Sayyid-Yasir-Ali.png') }}" alt="Trainer - Sayyid Yasir Ali"
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
                        100% job and business-oriented training.
                    </p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="d-flex align-items-start p-3 bg-white rounded shadow-sm h-100"
                    style="border-left: 5px solid #17a2b8;">
                    <i class="fab fa-whatsapp text-info fs-4 me-3 mt-1"></i>
                    <p class="mb-0" style="font-size: 15px; color: #444;">
                        Certificate of completion recognized from Trade Testing Board, Government of Pakistan
                    </p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="d-flex align-items-start p-3 bg-white rounded shadow-sm h-100"
                    style="border-left: 5px solid #28a745;">
                    <i class="fas fa-briefcase text-success fs-4 me-3 mt-1"></i>
                    <p class="mb-0" style="font-size: 15px; color: #444;">
                        Claim Continuing Professional Development (CPD) hours for the training.
                    </p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="d-flex align-items-start p-3 bg-white rounded shadow-sm h-100"
                    style="border-left: 5px solid #dc3545;">
                    <i class="fas fa-certificate text-danger fs-4 me-3 mt-1"></i>
                    <p class="mb-0" style="font-size: 15px; color: #444;">
                        Video recorded session with personalized Learning Management System (LMS) access login id for
                        Lifetime
                    </p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="d-flex align-items-start p-3 bg-white rounded shadow-sm h-100"
                    style="border-left: 5px solid #ffc107;">
                    <i class="fas fa-laptop-house text-warning fs-4 me-3 mt-1"></i>
                    <p class="mb-0" style="font-size: 15px; color: #444;">
                        Fully equipped training center venue for on-campus training readily available with laptops,
                        projectors and air-conditioning
                    </p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="d-flex align-items-start p-3 bg-white rounded shadow-sm h-100"
                    style="border-left: 5px solid #0d6efd;">
                    <i class="fas fa-chalkboard-teacher text-primary fs-4 me-3 mt-1"></i>
                    <p class="mb-0" style="font-size: 15px; color: #444;">
                        Live physical on-campus and online sessions
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
                    @include('website.sections.review-section', ['activeTab' => 'all'])</div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 m-3 cta-style2">
    <div class="container text-center">
        <!-- Section Title -->
        <h2 class="fw-bold mb-3" style="font-size: 36px; color: #fff;">
            Become <span style="color: #ffc107;">Smarter</span> in Just <span style="color: #0d6efd;">24 Hours</span>
        </h2>
        <p class="mb-4" style="font-size: 16px; color: #fff; max-width: 700px; margin: 0 auto;">
            Gain practical, hands-on skills through interactive sessions led by industry experts.
            Enhance your career prospects with our intensive training program.
        </p>

        <!-- CTA Button -->
        <a href="../Registration-Form/entrepreneurship" class="btn btn-lg fw-bold"
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