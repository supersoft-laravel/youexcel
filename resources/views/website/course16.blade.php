@extends('website.app')

@section('title', 'E Dukaan Specialist Course in Karachi Pakistan')
@section('meta_description',
    'Enroll in the E Dukaan Specialist Course in Karachi, Pakistan. Learn to set up, manage,
    and optimize your online store for success in the e-commerce world.')
@section('meta_keywords', 'E Dukaan Specialist Course in Karachi Pakistan')


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
                    E-Dukaan Specialist - Get empowered to Launch your online store with ease and
                    succeed in the digital marketplace!
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
                                <tr class=" mb-4">
                                    <td> <img src="https://youexceltraining.com/img/Yourexcel-img/eduqanp.jpeg" /> </td>
                                    {{-- <td>
                                        @include('website.sections.video-section', [
                                            'videoId' => '1ndju0Rn4co',
                                        ])
                                    </td> --}}
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
                                    <td><i class="far fa-hourglass"></i> Duration: 48 hours</td>
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
                            <a href="{{ $pdf }}" class="vs-btn"> Download Brochure Now</a><br /><br />
                        @endif
                        <a href="https://youexceltraining.com/enquiry-form/e-dukan-specialist-course" class="vs-btn">Enquire
                            Now</a><br /><br />
                        <!--<a href="contact.html" class="vs-btn" style="padding:3.5px 40px; line-height:22px">Corporate <br> Training Consultancy</a>-->
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="course-category wow fadeInUp ">
                        <a href="#">Get Started Learning with</a>
                    </div>
                    <h2 class="course-title animate__animated animate__bounceInDown">E-Dukaan Specialist </h2>
                    <div class="course-review"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>( 5.0 )
                    </div>
                    <div class="mb-3">
                        <img src="https://youexceltraining.com/img/Yourexcel-img/eduqannb.jpeg" />
                    </div>
                    <div class="mb-2 mt-2">
                        <h4 class="fw-bold text-uppercase border-bottom pb-2 d-inline-block" style="border-color: #0d6efd;">
                            Program Overview
                        </h4>
                    </div>
                    <p class="wow fadeInDown pb-3">
                        YouExcel is bringing an innovative training that aims to equip participants with the necessary
                        skills and knowledge to establish and manage an online store effectively. The program focuses on
                        practical, hands-on training that covers all aspects of e-commerce, from setting up the store to
                        running campaigns online through Digital Marketing, Search Engine Marketing and Optimization.
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
                        <div class="accordion-item  wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingOne">
                                <button class="accordion-button justify-content-between" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    <span class="button-label">Module 1</span>
                                    E-Commerce – Setting up your E-Dukaan
                                    <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            <li class="syllabustext">Introduction to E-Commerce</li>
                                            <li class="syllabustext">Designing e-commerce store logos via Canva</li>
                                            <li class="syllabustext">Detailed explanation of Drop shipping</li>
                                            <li class="syllabustext">Advantages and Disadvantages of E-Commerce</li>
                                            <li class="syllabustext">Explanation of the 4p’s of Marketing</li>
                                            <li class="syllabustext">Types of E-Commerce Business Models</li>
                                            <li class="syllabustext">Step By Step Guide on Setting Up E-Commerce Stores
                                                Online</li>
                                            <li class="syllabustext">Choosing the right E-Commerce platform for your
                                                business</li>
                                            <li class="syllabustext">Explanation of Content Management System (CMS)</li>
                                            <li class="syllabustext">Using Wix and Wordpress as a CMS to create websites
                                            </li>
                                            <li class="syllabustext">Introduction to Daraz</li>
                                            <li class="syllabustext">Creating a seller account on Daraz</li>
                                            <li class="syllabustext">Daraz drop shipping process</li>
                                            <li class="syllabustext">Using Shopify as an E-Commerce Content Management
                                                System</li>
                                            <li class="syllabustext">Shopify product listing process</li>
                                            <li class="syllabustext">Shopify theme customization steps</li>
                                            <li class="syllabustext">Introduction to Amazon Affiliates</li>
                                            <li class="syllabustext">Setting up an online store on Amazon</li>
                                            <li class="syllabustext">Importance of shipping and courier management gateways
                                            </li>
                                            <li class="syllabustext">Uploading products on online stores</li>
                                            <li class="syllabustext">Application of Website Domain and Hosting</li>
                                            <li class="syllabustext">Linking domains with online stores</li>
                                            <li class="syllabustext">Search Engine Marketing Introduction</li>
                                            <li class="syllabustext">Google Ads Campaign Setup for E-Commerce</li>
                                            <li class="syllabustext">Payment methods for Shopify</li>
                                            <li class="syllabustext">Product listing strategies</li>
                                            <li class="syllabustext">Product hunting strategies</li>
                                            <li class="syllabustext">Explanation of MLM and Affiliate Marketing business
                                                models in E-Commerce</li>
                                            <li class="syllabustext">SWOT Analysis for an E-Commerce Business</li>
                                            <li class="syllabustext">Payment Gateways for E-Commerce Stores</li>
                                            <li class="syllabustext">Operations and Logistics Management in E-Commerce</li>
                                            <li class="syllabustext">Choosing winning products and launching an E-Commerce
                                                Store</li>
                                            <li class="syllabustext">Identifying Key Performance Indicators (KPI’s) for
                                                E-Commerce</li>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingTwo">
                                <button class="accordion-button justify-content-between " type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    <span class="button-label">Module 2</span>
                                    Social Media Marketing – Marketing your E-dukaan
                                    <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInUp ">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">


                                            <li class="syllabustext">Steps to follow for Facebook, Instagram, Pinterest,
                                                YouTube, Tiktok:
                                                <ul>
                                                    <li class="syllabustext">Create Page by adding your Logo and
                                                        Description</li>
                                                    <li class="syllabustext">Announcement Post and Posting Structure for
                                                        Organic Traffic Generation Strategy</li>
                                                    <li class="syllabustext">Running Paid Marketing Campaigns on Facebook
                                                    </li>
                                                    <li class="syllabustext">Application of key policies for leading
                                                        Digital Marketing Platforms like Facebook, YouTube, and Google</li>
                                                </ul>
                                            </li>
                                            <li class="syllabustext">Copywriting with Artificial Intelligence</li>
                                            <li class="syllabustext">Using WhatsApp Business for promoting products and
                                                services</li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header d-flex" id="headingThree">
                                <button class="accordion-button justify-content-between " type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    <span class="button-label">Module 3</span>
                                    E-Commerce Search Engine Optimization
                                    <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInUp ">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            {{--                                            <h6 class="syllabustitle">Introduction</h6> --}}

                                            <li class="syllabustext">Search Engine Optimization (SEO) for E-Commerce
                                                Detailed Explanation</li>
                                            <li class="syllabustext">On Page SEO Factors</li>
                                            <li class="syllabustext">Off Page SEO Factors</li>
                                            <li class="syllabustext">Technical SEO Factors</li>
                                            <li class="syllabustext">SEO Audit Report</li>

                                            </ul>

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
                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                        style="border-left: 5px solid #0d6efd;">
                        <i class="fas fa-broom text-primary fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #333;">
                            Set up online stores on Shopify, Daraz, or custom your own platform
                            by applying strategies of E-Commerce
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                        style="border-left: 5px solid #6610f2;">
                        <i class="fas fa-database text-purple fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #333;">
                            Create and manage campaigns on Facebook, Instagram, TikTok, and
                            Pinterest by applying strategies of Digital Marketing
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                        style="border-left: 5px solid #198754;">
                        <i class="fas fa-brain text-success fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #333;">
                            Implement strategies for audience engagement and brand building
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                        style="border-left: 5px solid #fd7e14;">
                        <i class="fas fa-chart-line text-warning fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #333;">
                            Develop strategies for Search Engine Marketing (SEM) and paid
                            advertising
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                        style="border-left: 5px solid #dc3545;">
                        <i class="fas fa-clock text-danger fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #333;">
                            Create and optimize Google Ads and Facebook Ads campaigns
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                        style="border-left: 5px solid #20c997;">
                        <i class="fas fa-share-square text-info fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #333;">
                            Monitor and evaluate online store performance to increase income
                            growth opportunities
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-4" id="div2" style="background-color: #ffffff;">
        <div class="container">

            <!-- Section Title -->
            <div class="text-center mb-4">
                <h4 class="fw-bold text-uppercase border-bottom pb-2 d-inline-block" style="border-color: #0d6efd;">
                    Platforms and Applications
                </h4>
            </div>

            <div class="row gy-3">

                <!-- Column 1 -->
                <div class="col-md-4">
                    <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                        style="border-left:5px solid #0d6efd;">
                        <i class="fas fa-server text-primary fs-4 me-3 mt-1"></i>
                        <p class="mb-0">Website Hosting</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                        style="border-left:5px solid #6610f2;">
                        <i class="fas fa-store text-purple fs-4 me-3 mt-1"></i>
                        <p class="mb-0">Shopify</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                        style="border-left:5px solid #198754;">
                        <i class="fab fa-amazon text-success fs-4 me-3 mt-1"></i>
                        <p class="mb-0">Amazon</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                        style="border-left:5px solid #fd7e14;">
                        <i class="fas fa-box-open text-warning fs-4 me-3 mt-1"></i>
                        <p class="mb-0">Daraz</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                        style="border-left:5px solid #dc3545;">
                        <i class="fab fa-wordpress text-danger fs-4 me-3 mt-1"></i>
                        <p class="mb-0">WordPress</p>
                    </div>
                </div>

                <!-- Column 2 -->
                <div class="col-md-4">
                    <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                        style="border-left:5px solid #20c997;">
                        <i class="fas fa-palette text-info fs-4 me-3 mt-1"></i>
                        <p class="mb-0">Canva</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                        style="border-left:5px solid #0d6efd;">
                        <i class="fab fa-instagram text-primary fs-4 me-3 mt-1"></i>
                        <p class="mb-0">Instagram</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                        style="border-left:5px solid #6610f2;">
                        <i class="fab fa-facebook text-purple fs-4 me-3 mt-1"></i>
                        <p class="mb-0">Facebook</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                        style="border-left:5px solid #198754;">
                        <i class="fab fa-whatsapp text-success fs-4 me-3 mt-1"></i>
                        <p class="mb-0">WhatsApp Business</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                        style="border-left:5px solid #fd7e14;">
                        <i class="fab fa-tiktok text-warning fs-4 me-3 mt-1"></i>
                        <p class="mb-0">TikTok</p>
                    </div>
                </div>

                <!-- Column 3 -->
                <div class="col-md-4">
                    <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                        style="border-left:5px solid #20c997;">
                        <i class="fab fa-pinterest text-info fs-4 me-3 mt-1"></i>
                        <p class="mb-0">Pinterest</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                        style="border-left:5px solid #dc3545;">
                        <i class="fab fa-google text-danger fs-4 me-3 mt-1"></i>
                        <p class="mb-0">Google Ads</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                        style="border-left:5px solid #0dcaf0;">
                        <i class="fas fa-bullhorn text-info fs-4 me-3 mt-1"></i>
                        <p class="mb-0">Meta Ads</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                        style="border-left:5px solid #6610f2;">
                        <i class="fas fa-globe text-purple fs-4 me-3 mt-1"></i>
                        <p class="mb-0">Wix.com</p>
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
                            Anyone who wants to earn online, students, housewives, business enthusiasts and aspiring
                            freelancers.
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
                        <p style="font-size:14px; color:#333; margin:0;">Basic to Intermediate</p>
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
                            Basic IT literacy is mandatory, Minimum Intermediate preferable.
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
                        <h5 class="fw-bold mb-3" style="font-size: 26px;">Syed Asif Ashraf</h5>
                        <p class="mb-4" style="font-size: 15px; color: #555; line-height: 1.7;">
                            <b>Syed Asif Ashraf</b> is a learning and development and Digital Marketing Professional with an
                            overall experience of 20 years. His education consists of an MBA in Marketing and an M.A. in
                            Mass Communication. Asif is also a Google certified digital marketing professional. He has
                            previously worked in renowned companies such as BOL Network, Polaris Consultants, Federal Urdu
                            University, The Access to Future Foundation (TAF), Click 5 institute amongst others and has also
                            been lead effective training in NAVTTC, Govt. Of Pakistan training projects.
                        </p>

                        <h6 class="fw-semibold mb-2">
                            <i class="fas fa-certificate text-warning me-2"></i>Professional Certifications
                        </h6>
                        <ul class="list-unstyled mb-0">
                            <li><i class="fas fa-check-circle text-success me-2"></i>Digital Marketing and E-Commerce
                                Certification from Google</li>
                            <li><i class="fas fa-check-circle text-success me-2"></i>Certification in E-Commerce from
                                Digiskills Pakistan</li>
                            <li><i class="fas fa-check-circle text-success me-2"></i>Cloud Computing Certification from
                                PIAIC</li>
                        </ul>
                    </div>
                </div>

                <!-- Right Side (Trainer Image) -->
                <div class="col-lg-4 col-md-5 text-center">
                    <div class="position-relative d-inline-block">
                        <img src="{{ asset('img/trainer/new/Syed-Asif-Ashraf.png') }}" alt="Trainer - Syed Asif Ashraf"
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

    <section class="py-5">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-12 col-xxl-5">
                    <div class="text-center mb-4">
                        <h4 class="fw-bold text-uppercase border-bottom pb-2 d-inline-block"
                            style="border-color: #0d6efd;">
                            REAL PEOPLE REAL TESTIMONIALS
                        </h4>
                    </div>
                    <div class="elfsight-app-180aecff-7be3-49b6-9603-28a80d740006">@include('website.sections.review-section', ['activeTab' => 'general'])</div>
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
            <a href="../Registration-Form/e-dukan-specialist-course" class="btn btn-lg fw-bold"
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
