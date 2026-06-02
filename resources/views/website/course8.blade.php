@extends('website.app')

@section('title', 'Tax Management with Returns Filing Course in Karachi Pakistan')
@section('meta_description',
    'Join the Tax Management with Returns Filing Course in Karachi, Pakistan. Master tax laws,
    filing procedures, and effective management strategies for businesses and individuals.')
@section('meta_keywords', 'Tax Management with Returns Filing Course in Karachi Pakistan')


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
                    Fast-Track Your Tax Career: Enrol Now to Master Tax Management & Returns Filing!
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
                                    <!--<td> <img src="https://youexceltraining.com/img/Yourexcel-img/tax.jpg" /> </td>-->
                                    <td>
                                        @include('website.sections.video-section', [
                                            'videoId' => '9jZmW3oUHnk',
                                        ])
                                    </td>
                                </tr>
                                <!--<tr>-->
                                <!--    <td><i class="fas fa-money-bill-wave"></i> Total Fee: {{ $programFee ?? 'N/A' }}-->
                                <!--    </td>-->
                                <!--</tr>-->
                                <tr>
                                    <td><i class="fas fa-calendar-alt"></i> Next Batch Schedule:
                                        {{ $nextBatchSchedule ?? 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <td><i class="far fa-hourglass"></i> Duration: 60 hours</td>
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
                            </tbody>
                        </table>
                        @if ($pdf == '')
                        @else
                            <a href="{{ $pdf }}" class="vs-btn"> Download Brochure Now</a><br /><br />
                        @endif
                        <a href="https://youexceltraining.com/enquiry-form/tax-management-with-return-filing"
                            class="vs-btn">Enquire Now</a><br /><br />
                        <!--<a href="contact.html" class="vs-btn" style="padding:3.5px 40px; line-height:22px">Corporate <br> Training Consultancy</a>-->
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="course-category wow fadeInUp ">
                        <div class="course-category wow fadeInUp ">
                            <a href="#">Get Started Learning with </a>
                        </div>
                    </div>
                    <h2 class="course-title animate__animated animate__bounceInDown">Tax Management with Returns Filing
                    </h2>
                    <div class="course-review"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>( 5.0 )
                    </div>
                    <div class="mb-3">
                        <img src="https://youexceltraining.com/img/Yourexcel-img/taxb.jpg" />
                    </div>
                    <div class="mb-2 mt-2">
                        <h4 class="fw-bold text-uppercase border-bottom pb-2 d-inline-block" style="border-color: #0d6efd;">
                            Program Overview
                        </h4>
                    </div>
                    <p class="wow fadeInDown pb-3">Tax Management with Returns Filing will help in understanding the tax
                        laws and will enable the participant to understand and apply the practical implications of tax laws
                        in Pakistan. It will benefit the participant as a tool to make effective taxation management
                        planning strategies by following tax structure and tax laws in Pakistan.

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
                                    Salaried income
                                    <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            <li class="syllabustext">Taxable salary and benefits</li>
                                            <li class="syllabustext">Allowable deductions</li>
                                            <li class="syllabustext">Reliefs available to salaried individuals</li>
                                            <li class="syllabustext">Section 149 and its impact on employees</li>
                                            <li class="syllabustext">Tax planning for salaried individuals</li>
                                            <li class="syllabustext">Salary Tax Calculator</li>



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
                                    Business Income
                                    <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInUp ">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <li class="syllabustext">Taxable and exempt business income</li>
                                            <li class="syllabustext">Tax withheld on income u/s 153</li>
                                            <li class="syllabustext">Allowable expenses</li>
                                            <li class="syllabustext">Tax depreciation and allowances</li>
                                            <li class="syllabustext">Role of sales tax in business income tax calculations
                                            </li>
                                            <li class="syllabustext">Market practice and real FBR cases</li>
                                            <li class="syllabustext">Practical demonstration on Iris portal</li>
                                            <li class="syllabustext">Using portals for verification</li>
                                            <li class="syllabustext">Accounting methodology followed</li>
                                            <li class="syllabustext">Analyzing MIS Reporting feature in IRIS Portal</li>


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
                                    Property Income
                                    <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInUp ">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            {{--                                            <h6 class="syllabustitle">Introduction</h6> --}}
                                            <li class="syllabustext">Rental income</li>
                                            <li class="syllabustext">Allowances</li>
                                            <li class="syllabustext">Practical case studies and implications</li>
                                            <li class="syllabustext">Tax planning for property income</li>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between " type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    <span class="button-label">Module 4 (A)</span>
                                    Capital Gains tax
                                    <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <h6 class="syllabustitle">Introduction</h6> --}}
                                            <li class="syllabustext">Moveable and immovable property</li>
                                            <li class="syllabustext">Holding period definition</li>
                                            <li class="syllabustext">Assets exempt from CGT</li>
                                            <li class="syllabustext">Role of transfer of legal title of asset in capital
                                                gains</li>




                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFourB">
                                <button class="accordion-button justify-content-between " type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    <span class="button-label">Module 4 (B)</span>
                                    Taxation under Section 7E ***2025 UPDATE***
                                    <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            <li class="syllabustext">Understanding of Section 7E for immovable property
                                                eligibility and exclusion</li>
                                            <li class="syllabustext">Computational aspect of Tax under Section 7E</li>
                                            <li class="syllabustext">Return component of immovable property under Section
                                                7E</li>
                                            <li class="syllabustext">Certificate generation under Section 7E from return of
                                                income</li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between " type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour1" aria-expanded="false"
                                    aria-controls="collapseFour1">
                                    <span class="button-label">Module 5</span>
                                    Iris portal navigation
                                    <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour1" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <h6 class="syllabustitle">Introduction</h6> --}}
                                            <li class="syllabustext">Iris – for challan generation</li>
                                            <li class="syllabustext">Iris portal – for income tax, taxation reports on
                                                payments and GST filing</li>
                                            <li class="syllabustext">E.fbr – for challan generation</li>
                                            <li class="syllabustext">Bulk challan generation through FBR template</li>
                                            <li class="syllabustext">Maloomat – for tracking tax withheld</li>
                                            <li class="syllabustext">Verification portal – for tax status verification</li>





                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between " type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour2" aria-expanded="false"
                                    aria-controls="collapseFour2">
                                    <span class="button-label">Module 6</span>
                                    Sales Tax
                                    <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour2" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <h6 class="syllabustitle">Introduction</h6> --}}
                                            <li class="syllabustext">GST rules</li>
                                            <li class="syllabustext">VAT mode – input and output tax rules</li>
                                            <li class="syllabustext">Invoicing requirement (goods code, NTN etc)</li>
                                            <li class="syllabustext">Null return filing</li>
                                            <li class="syllabustext">SRB filing and portal navigation</li>



                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between " type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour3" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    <span class="button-label">Module 7</span>
                                    Individual status verification
                                    <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour3" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <h6 class="syllabustitle">Introduction</h6> --}}
                                            <li class="syllabustext">Active taxpayer list</li>
                                            <li class="syllabustext">Registration certificate</li>
                                            <li class="syllabustext">Sales tax status</li>
                                            <li class="syllabustext">SRB verification</li>
                                            <li class="syllabustext">Change of particulars including password and pin</li>



                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between " type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour4" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    <span class="button-label">Module 8</span>
                                    Return filing training
                                    <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour4" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <h6 class="syllabustitle">Introduction</h6> --}}
                                            <li class="syllabustext">Income forms</li>
                                            <li class="syllabustext">Wealth statements</li>
                                            <li class="syllabustext">Reconciliation of income to wealth</li>
                                            <li class="syllabustext">Practical case studies</li>
                                            <li class="syllabustext">Salaried individual filing template and income tax
                                                calculator</li>




                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between " type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour5" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    <span class="button-label">Module 9</span>
                                    Registration in Income Tax
                                    <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour5" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <h6 class="syllabustitle">Introduction</h6> --}}
                                            <li class="syllabustext">Individual; Association of persons; Company;
                                                Non-profit organizations</li>




                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between " type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour6" aria-expanded="false"
                                    aria-controls="collapseFour6">
                                    <span class="button-label">Module 10</span>
                                    Taxation Regimes
                                    <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour6" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <h6 class="syllabustitle">Introduction</h6> --}}
                                            <li class="syllabustext">Explanation of normal tax, final tax, and minimum tax
                                                regimes</p>



                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between " type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour77" aria-expanded="false"
                                    aria-controls="collapseFour7">
                                    <span class="button-label">Module 11</span>
                                    Withholding tax matters
                                    <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour77" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <h6 class="syllabustitle">Introduction</h6> --}}
                                            <li class="syllabustext">In-depth exploration of withholding tax sections,
                                                rates, exemptions, and adjustments</li>
                                            <li class="syllabustext">Responsibilities and rights of withholding agents</li>
                                            <li class="syllabustext">How to prepare and submit withholding tax statements
                                            </li>
                                            <li class="syllabustext">How to prepare withholding tax challans and generation
                                                of CPRs</li>




                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between " type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour7" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    <span class="button-label">Module 12</span>
                                    Departmental Correspondence income tax
                                    <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour7" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <h6 class="syllabustitle">Introduction</h6> --}}
                                            <li class="syllabustext">Handling departmental notices, proceedings, and audits
                                            </li>
                                            <li class="syllabustext">Techniques for effectively responding to inquiries and
                                                discussions with tax officers</li>
                                            <li class="syllabustext">Insights into different assessment types and their
                                                procedures</li>



                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between " type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour8" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    <span class="button-label">Module 13</span>
                                    Practical procedure involve in calming refunds
                                    <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour8" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <h6 class="syllabustitle">Introduction</h6> --}}
                                            <li class="syllabustext">Explanation of the process to claim tax refunds</li>




                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between " type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour9" aria-expanded="false"
                                    aria-controls="collapseFour9">
                                    <span class="button-label">Module 14</span>
                                    Appeal procedure
                                    <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour9" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <h6 class="syllabustitle">Introduction</h6> --}}
                                            <li class="syllabustext">Segregation of Appellate forum based on size of order
                                            </li>
                                            <li class="syllabustext">Detailed guidance on filing appeals, drafting facts
                                                and grounds of appeal</li>
                                            <li class="syllabustext">Applying for a stay and representing before higher
                                                courts</li>




                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between " type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour0" aria-expanded="false"
                                    aria-controls="collapseFour0">
                                    <span class="button-label">Module 15</span>
                                    Sale Tax
                                    <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour0" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <h6 class="syllabustitle">Introduction</h6> --}}
                                            <li class="syllabustext">A comprehensive exploration of the scope of tax on
                                                goods and services, covering taxability, registration requirements, and tax
                                                liability determination for major sectors</li>
                                            <li class="syllabustext">Exploration of withholding taxes under both federal
                                                and provincial laws, with a focus on practical examples</li>
                                            <li class="syllabustext">Detailed understanding of input tax adjustment,
                                                including what input taxes are available for suppliers and how to deal with
                                                reduced-rate goods and services</li>
                                            <li class="syllabustext">Comprehensive insight into sales tax record-keeping,
                                                with practical examples of documents such as sales tax invoices,
                                                purchase/sale/stock registers, and debit/credit notes representing before
                                                higher courts.</li>
                                            <li class="syllabustext">Thorough coverage of audit and assessment procedures
                                                within the context of sales tax</li>
                                            <li class="syllabustext">Appeal process, enhancing their ability to navigate
                                                this aspect effectively</li>
                                            <li class="syllabustext">Preparation and submission of sales tax returns,
                                                encompassing for major sectors</li>




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
                            Learning how to read and navigate income tax ordinance </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                        style="border-left: 5px solid #6610f2;">
                        <i class="fas fa-database text-purple fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #333;">
                            Navigation of various FBR portals
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                        style="border-left: 5px solid #198754;">
                        <i class="fas fa-brain text-success fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #333;">
                            E-filing through IRIS Portal
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                        style="border-left: 5px solid #fd7e14;">
                        <i class="fas fa-chart-line text-warning fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #333;">
                            Registration in FBR for income tax
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                        style="border-left: 5px solid #dc3545;">
                        <i class="fas fa-clock text-danger fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #333;">
                            Application of SRB Sales tax
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                        style="border-left: 5px solid #20c997;">
                        <i class="fas fa-share-square text-info fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #333;">
                            Application of SRB Sales tax
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                        style="border-left: 5px solid #20c997;">
                        <i class="fas fa-share-square text-info fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #333;">
                            Explanation of Taxation regimes
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                        style="border-left: 5px solid #20c997;">
                        <i class="fas fa-share-square text-info fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #333;">
                            Practicality of Withholding tax matters
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                        style="border-left: 5px solid #20c997;">
                        <i class="fas fa-share-square text-info fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #333;">
                            Departmental correspondence of Income Tax
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                        style="border-left: 5px solid #20c997;">
                        <i class="fas fa-share-square text-info fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #333;">
                            Explanation of Taxation regimesEffectively follow Appeal procedures
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                        style="border-left: 5px solid #20c997;">
                        <i class="fas fa-share-square text-info fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #333;">
                            Application of Sales Tax matters
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                        style="border-left: 5px solid #20c997;">
                        <i class="fas fa-share-square text-info fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #333;">
                            Practical industry-related case studies to provide hands-on
                            simulation experience
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
                        <h6 style="font-weight: 600; color: #212529;">Tax Regulations covering the tax laws, regulations,
                            and updates to ensure compliance</h6>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="card h-100 text-center shadow-sm border-0"
                        style="display: flex; justify-content: center; align-items: center; border-radius: 15px; transition: all 0.3s ease; padding: 30px; background: #fff;"
                        onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)';"
                        onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.05)';">
                        <img src="https://youexceltraining.com/img/icon/training-icon-1-2.svg" alt="icon"
                            style="width: 60px; margin-bottom: 20px;">
                        <h6 style="font-weight: 600; color: #212529;">Tax Planning Strategies for individuals and
                            businesses</h6>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="card h-100 text-center shadow-sm border-0"
                        style="display: flex; justify-content: center; align-items: center; border-radius: 15px; transition: all 0.3s ease; padding: 30px; background: #fff;"
                        onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)';"
                        onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.05)';">
                        <img src="https://youexceltraining.com/img/icon/training-icon-1-3.svg" alt="icon"
                            style="width: 60px; margin-bottom: 20px;">
                        <h6 style="font-weight: 600; color: #212529;">Risk Mitigation to help identify and address
                            potential tax-related risks, reducing the likelihood
                            of penalties</h6>
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
                            Accounting and Finance Team
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
                            Basic knowledge of Accounting and MS Excel
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
                        <h5 class="fw-bold mb-3" style="font-size: 26px;">Syed Mahir Alam</h5>
                        <p class="mb-4" style="font-size: 15px; color: #555; line-height: 1.7;">
                            <b>Syed Mahir Alam</b> is a managing partner at Haider Shamsi & Co.
                            Chartered Accountants, He has been handling the affairs of the firm since 2018. Further, He has
                            an experience for designing and implementing cost and financial accounting system for different
                            manufacturing and trading companies such as Midas Safety Inc. World Bank Project (PIFRA-II),
                            KPMG TH & Co., Chartered Accountants. He has more than 11 years of theoretical knowledge and
                            practical experience of cost and financial accounting, auditing and taxation.
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
                        <img src="{{ asset('img/trainer/mahir.jpg') }}" alt="Trainer - Syed Mahir Alam"
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
                            100% job and business oriented training
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-white rounded shadow-sm h-100"
                        style="border-left: 5px solid #17a2b8;">
                        <i class="fab fa-whatsapp text-info fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #444;">
                            Certificate of completion recognized from Trade Testing Board,
                            Government of Pakistan
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-white rounded shadow-sm h-100"
                        style="border-left: 5px solid #28a745;">
                        <i class="fas fa-briefcase text-success fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #444;">
                            Claim Continuing Professional Development (CPD) hours for the
                            training
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-white rounded shadow-sm h-100"
                        style="border-left: 5px solid #dc3545;">
                        <i class="fas fa-certificate text-danger fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #444;">
                            Video recorded session with personalized Learning Management System
                            (LMS) access login id for 12 months
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-white rounded shadow-sm h-100"
                        style="border-left: 5px solid #ffc107;">
                        <i class="fas fa-laptop-house text-warning fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #444;">
                            Fully equipped training center venue for on-campus trainings readily
                            available with laptops, projectors and air-conditioning
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
            <a href="../Registration-Form/tax-management-with-return-filing" class="btn btn-lg fw-bold"
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
