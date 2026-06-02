@extends('website.app', ['title' => 'Become a GenAI Developer'])

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
                Build Intelligent Systems: Launch Your Career in Generative AI, Automation, and Scalable Cloud Solutions
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
                                    <img
                                        src="https://youexceltraining.com/img/Yourexcel-img/GENAI.jpg">
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
                                <td><i class="far fa-hourglass"></i> Duration: 78 Hours</td>
                            </tr>
                            <tr style="padding-top: 8px;">
                                <td>
                                    <i class="far fa-suitcase"></i>Difficulty Level: Basic to Intermediate
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
                    <a href="https://youexceltraining.com/enquiry-form/Become-a-GenAI-Developer" class="vs-btn">Enquire
                        Now</a><br />
                </div>
            </div>
            <div class="col-lg-8">
                <div class="course-category wow fadeInUp ">
                    <a href="#">Get Started Learning With </a>
                </div>
                <h2 class="course-title animate__animated animate__bounceInDown">Become a GenAI Developer</h2>
                <div class="course-review"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                        class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>( 5.0 )
                </div>
                <div class="mb-3">
                    <img src="https://youexceltraining.com/img/Yourexcel-img/GENAI.jpg" />
                </div>
                <div class="mb-2 mt-2">
                    <h4 class="fw-bold text-uppercase border-bottom pb-2 d-inline-block" style="border-color: #0d6efd;">
                        Program Overview
                    </h4>
                </div>
                <p class="wow fadeInDown pb-3">This is a focused 78-hour program designed to build practical,
                    industry-ready skills in modern Generative AI. The bootcamp covers the complete GenAI workflow from
                    Python fundamentals to LangChain, LangGraph, FastAPI backend development, Docker-based deployment,
                    AWS cloud workflows, and LLM fine tuning. The training is fully hands-on, enabling participants to
                    build and deploy real-world AI applications.</p>
                <p class="wow fadeInDown pb-3">Through guided labs and mini projects, learners will gain practical
                    experience in RAG systems, AI agents, production-grade APIs, and custom LLM pipelines developing the
                    essential engineering skills required in today’s AI-driven industry.</p>

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
                                Advanced Python
                                <i class="fas fa-angle-down"></i>
                            </button>
                        </div>
                        <div id="collapseOne" class="accordion-collapse collapse">
                            <div class="accordion-body wow fadeInUp">
                                <div class="syllabus-list">
                                    <div class="syllabus-content">
                                        <li class="syllabustext">Basics of Python</li>
                                        <li class="syllabustext">Basic Data Types & Operators</li>
                                        <li class="syllabustext">Modules & GitHub</li>
                                        <li class="syllabustext">Lists & Operators</li>
                                        <li class="syllabustext">Container Data Types</li>
                                        <li class="syllabustext">Conditional Statements</li>
                                        <li class="syllabustext">Loops</li>
                                        <li class="syllabustext">Comprehensions & Basic Functions</li>
                                        <li class="syllabustext">Functions</li>
                                        <li class="syllabustext">Lambda Functions & Generators</li>
                                        <li class="syllabustext">Exception & File Handling</li>
                                        <li class="syllabustext">Type Hinting & Functions</li>
                                        <li class="syllabustext"><strong>Use Case (HR):</strong> Employee Attendance
                                            System</li>
                                        <li class="syllabustext"><strong>Use Case (E-Commerce):</strong> Interactive
                                            Grocery Ordering & Inventory System</li>
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
                                LangChain
                                <i class="fas fa-angle-down"></i>
                            </button>
                        </div>
                        <div id="collapseTwo" class="accordion-collapse collapse">
                            <div class="accordion-body wow fadeInUp">
                                <div class="syllabus-list">
                                    <div class="syllabus-content">
                                        <li class="syllabustext">Introduction to GenAI & LangChain</li>
                                        <li class="syllabustext">Prompt Engineering & Structured Output</li>
                                        <li class="syllabustext">Document Loaders & Chunking</li>
                                        <li class="syllabustext">Runnables & Chains</li>
                                        <li class="syllabustext">VectorDB & Retrievers</li>
                                        <li class="syllabustext">RAG</li>
                                        <li class="syllabustext">Tools</li>
                                        <li class="syllabustext">Agents</li>
                                        <li class="syllabustext">Build Agent</li>
                                        <li class="syllabustext"><strong>Use Case (General):</strong> AI-Powered
                                            Historical Fact-Checker</li>
                                        <li class="syllabustext"><strong>Use Case (Banking):</strong> Chatbot</li>
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
                                LangGraph & MCP
                                <i class="fas fa-angle-down"></i>
                            </button>
                        </div>
                        <div id="collapseThree" class="accordion-collapse collapse">
                            <div class="accordion-body wow fadeInUp">
                                <div class="syllabus-list">
                                    <div class="syllabus-content">
                                        <li class="syllabustext">Introduction to Agentic AI & LangGraph</li>
                                        <li class="syllabustext">Stateful AI Engineering in LangGraph</li>
                                        <li class="syllabustext">Intelligent Memory & Output Design</li>
                                        <li class="syllabustext">Tool Calling & API-Enabled Workflows</li>
                                        <li class="syllabustext">LLM Workflows</li>
                                        <li class="syllabustext">Agentic Workflows</li>
                                        <li class="syllabustext">Agent Demo</li>
                                        <li class="syllabustext">MCP</li>
                                        <li class="syllabustext">MCP Server</li>
                                        <li class="syllabustext"><strong>Use Case (Tourism):</strong> Travel Agent</li>
                                        <li class="syllabustext"><strong>Use Case (Education):</strong> Autonomous
                                            School Administration Agent</li>
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
                                FastAPI, n8n & Deployment
                                <i class="fas fa-angle-down"></i>
                            </button>
                        </div>
                        <div id="collapseFour" class="accordion-collapse collapse">
                            <div class="accordion-body wow fadeInUp">
                                <div class="syllabus-list">
                                    <div class="syllabus-content">
                                        <li class="syllabustext">FastAPI & Streamlit</li>
                                        <li class="syllabustext">HTTP Methods, Streaming & CRUD Operations</li>
                                        <li class="syllabustext">Pydantic</li>
                                        <li class="syllabustext">Docker Compose</li>
                                        <li class="syllabustext">AWS</li>
                                        <li class="syllabustext">n8n</li>
                                        <li class="syllabustext"><strong>Use Case:</strong> AI-Powered Document Q&A API
                                        </li>
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
                    <i class="fas fa-code text-primary fs-4 me-3 mt-1"></i>
                    <p class="mb-0" style="font-size: 15px; color: #333;">
                        Build strong Python foundations and write clean, modular code for real-world AI and automation
                        use cases.
                    </p>
                </div>
            </div>

            <!-- Outcome 2 -->
            <div class="col-md-6">
                <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                    style="border-left: 5px solid #6610f2;">
                    <i class="fas fa-robot text-purple fs-4 me-3 mt-1"></i>
                    <p class="mb-0" style="font-size: 15px; color: #333;">
                        Design and implement Generative AI solutions using Prompt Engineering, LangChain, RAG pipelines,
                        and Vector Databases.
                    </p>
                </div>
            </div>

            <!-- Outcome 3 -->
            <div class="col-md-6">
                <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                    style="border-left: 5px solid #198754;">
                    <i class="fas fa-project-diagram text-success fs-4 me-3 mt-1"></i>
                    <p class="mb-0" style="font-size: 15px; color: #333;">
                        Create autonomous AI agents and intelligent workflows using modern agent frameworks.
                    </p>
                </div>
            </div>

            <!-- Outcome 4 -->
            <div class="col-md-6">
                <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                    style="border-left: 5px solid #fd7e14;">
                    <i class="fas fa-network-wired text-warning fs-4 me-3 mt-1"></i>
                    <p class="mb-0" style="font-size: 15px; color: #333;">
                        Develop and integrate production-ready backend APIs and AI services.
                    </p>
                </div>
            </div>

            <!-- Outcome 5 -->
            <div class="col-md-6">
                <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                    style="border-left: 5px solid #dc3545;">
                    <i class="fas fa-cloud-upload-alt text-danger fs-4 me-3 mt-1"></i>
                    <p class="mb-0" style="font-size: 15px; color: #333;">
                        Containerize, deploy, and manage scalable GenAI applications using Docker and cloud platforms
                        (AWS).
                    </p>
                </div>
            </div>

            <!-- Outcome 6 -->
            <div class="col-md-6">
                <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                    style="border-left: 5px solid #20c997;">
                    <i class="fas fa-graduation-cap text-info fs-4 me-3 mt-1"></i>
                    <p class="mb-0" style="font-size: 15px; color: #333;">
                        Capstone project covering development, fine-tuning,
                        deployment, and automation.
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
                        End-to-end Python & AI Engineering training
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
                        Hands-on, real-world projects and industry use cases
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
                        Generative AI, RAG & Agentic Systems expertise
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
                        Production-ready deployment using FastAPI, Docker & AWS
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
                        Industry-aligned capstone project
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
                    <p style="font-size:14px; color:#333; margin:0;">Basic to Intermediate</p>
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
                        Basic computer literacy
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
                    <h5 class="fw-bold mb-3" style="font-size: 26px;">Muhammad Osama</h5>
                    <p class="mb-4" style="font-size: 15px; color: #555; line-height: 1.7;">
                        <b>Muhammad Osama</b> is a skilled AI Engineer with over 3 years of professional experience in
                        designing and developing intelligent AI-driven applications. He has worked extensively across
                        Computer Vision, Generative AI, and Agentic AI systems, delivering practical, real-world
                        solutions.
                    </p>
                    <p class="mb-4" style="font-size: 15px; color: #555; line-height: 1.7;">
                        He possesses strong expertise in Large Language Models (LLMs) and Python, with hands-on
                        experience using LangChain, LangGraph, FastAPI, and Dockerization to build scalable,
                        production-ready AI applications. His work focuses on creating robust, efficient, and
                        deployment-ready AI systems that solve complex business and automation challenges.
                    </p>
                </div>
            </div>

            <!-- Right Side (Trainer Image) -->
            <div class="col-lg-4 col-md-5 text-center">
                <div class="position-relative d-inline-block">
                    <img src="{{ asset('img/trainer/new/Muhammad-Osama.png') }}" alt="Trainer - Muhammad Osama"
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
                        Certificate of completion recognized by the Trade Testing Board, Government of Pakistan.
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
                        Video recorded sessions with personalized LMS access for lifetime learning.
                    </p>
                </div>
            </div>

            <!-- Service 5 -->
            <div class="col-md-6">
                <div class="d-flex align-items-start p-3 bg-white rounded shadow-sm h-100"
                    style="border-left: 5px solid #ffc107;">
                    <i class="fas fa-laptop-house text-warning fs-4 me-3 mt-1"></i>
                    <p class="mb-0" style="font-size: 15px; color: #444;">
                        Fully equipped training center with laptops, projectors, and air-conditioned classrooms.
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
                    @include('website.sections.review-section', ['activeTab' => 'all'])</div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 m-3 cta-style2">
    <div class="container text-center">
        <!-- Section Title -->
        <h2 class="fw-bold mb-3" style="font-size: 36px; color: #fff;">
            Become <span style="color: #ffc107;">Smarter</span> in Just <span style="color: #0d6efd;">78 Hours</span>
        </h2>
        <p class="mb-4" style="font-size: 16px; color: #fff; max-width: 700px; margin: 0 auto;">
            Gain practical, hands-on skills through interactive sessions led by industry experts.
            Enhance your career prospects with our intensive training program.
        </p>

        <!-- CTA Button -->
        <a href="../Registration-Form/Become-a-GenAI-Developer" class="btn btn-lg fw-bold"
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