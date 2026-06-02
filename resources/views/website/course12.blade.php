@extends('website.app', ['title' => 'Cyber Security Mastery'])

@push('style')
    .hover-effect:hover {
    color: #3747ff;
    }
@endpush
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
                    Cyber Security Mastery : Protect yourself and your Organization
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

                                    <td> <img src="https://youexceltraining.com/img/Yourexcel-img/csm.jpeg" /> </td>
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
                            <a href="{{ $pdf }}" class="vs-btn"> Download
                                Brochure Now</a><br /><br />
                        @endif
                        <a href="https://youexceltraining.com/enquiry-form/cyber-security-mastery" class="vs-btn">Enquire
                            Now</a><br /><br />
                        <!--<a href="contact.html" class="vs-btn" style="padding:3.5px 40px; line-height:22px">Corporate <br> Training Consultancy</a>-->
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="course-category wow fadeInUp ">
                        <a href="#">Get Started Learning with</a>
                    </div>
                    <h2 class="course-title animate__animated animate__bounceInDown">Cyber Security Mastery </h2>
                    <div class="course-review"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>( 5.0 )
                    </div>
                    <div class="mb-3">
                        <img src="https://youexceltraining.com/img/Yourexcel-img/csmb.jpeg" />
                    </div>
                    <div class="mb-2 mt-2">
                        <h4 class="fw-bold text-uppercase border-bottom pb-2 d-inline-block" style="border-color: #0d6efd;">
                            Program Overview
                        </h4>
                    </div>
                    <p class="wow fadeInDown pb-3">
                        In an increasingly digital world, the importance of Cyber Security cannot be overstated. "Cyber
                        Security Mastery" training program is designed to provide participants with a solid understanding of
                        the core concepts, principles, and best practices in cybersecurity. It also serves as a foundational
                        knowledge base for individuals looking to embark on a career in cybersecurity or anyone interested
                        in enhancing their cybersecurity awareness.</p>

                    <div class="mb-2 mt-2">
                        <h4 class="fw-bold text-uppercase border-bottom pb-2 d-inline-block" style="border-color: #0d6efd;">
                            Training Outline
                        </h4>
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
                                        Information Security Fundamentals, Laws and Regulations
                                        <i class="fas fa-angle-down"></i> </button>
                                </div>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="accordionExample">

                                    <div class="accordion-body wow fadeInDown">
                                        <div class="syllabus-list">

                                            <div class="syllabus-content">
                                                <li class="syllabustext">Security, Functionality, and Usability Triangle
                                                </li>
                                                <li class="syllabustext">Classification of Attacks</li>
                                                <li class="syllabustext">Information Security Attack Vectors</li>
                                                <li class="syllabustext">Elements of Information Security</li>
                                                <div class="hover-effect" style="cursor: pointer;">
                                                    <strong>Practical Lab Activities:</strong> <span>Installation of
                                                        VMs</span>
                                                </div>
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
                                        Ethical Hacking Fundamentals
                                        <i class="fas fa-angle-down"></i> </button>
                                </div>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="accordionExample">

                                    <div class="accordion-body wow fadeInUp ">
                                        <div class="syllabus-list">
                                            <div class="syllabus-content">
                                                <li class="syllabustext">Information Security Laws and Regulations</li>
                                                <li class="syllabustext">Hacking Concepts and Hacker Classes</li>
                                                <li class="syllabustext">Different Phases of Hacking Cycle</li>
                                                <ol class="syllabus-content" type="1">
                                                    <li style="list-style: decimal !important;">Reconnaissance</li>
                                                    <li style="list-style: decimal !important;">Scanning</li>
                                                    <li style="list-style: decimal !important;">Gaining access</li>
                                                    <li style="list-style: decimal !important;">Maintaining access</li>
                                                    <li style="list-style: decimal !important;">Clearing tracks</li>
                                                </ol>
                                                <li class="syllabustext">Scope and Tools of Ethical Hacking with an </li>
                                                {{-- <strong>Practical Lab Activities:</strong>
                                            <p>Installation of Linux over VMs</p> --}}
                                                <div class="hover-effect" style="cursor: pointer;">
                                                    <strong>Practical Lab Activities:</strong> <span>Installation of Linux
                                                        over VMs</span>
                                                </div>
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
                                        Information Security Threats and vulnerability Assessment
                                        <i class="fas fa-angle-down"></i> </button>
                                </div>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="accordionExample">

                                    <div class="accordion-body wow fadeInUp ">
                                        <div class="syllabus-list">
                                            <div class="syllabus-content">
                                                {{-- <h6 class="syllabustitle">Introduction</h6> --}}
                                                <li class="syllabustext">Common Techniques Attackers use to Distribute
                                                    Malware
                                                    on the Web</li>
                                                <li class="syllabustext">Different Types of Malware and Malware
                                                    Countermeasures
                                                </li>
                                                <li class="syllabustext">Vulnerability and Vulnerability Classification
                                                </li>
                                                <li class="syllabustext">Vulnerability Assessment and Types of
                                                    Vulnerability
                                                    Assessment</li>
                                                <li class="syllabustext">Vulnerability Assessment Tools and Vulnerability
                                                    Exploitation</li>
                                                <div class="hover-effect" style="cursor: pointer;">
                                                    <strong>Practical Lab Activities:</strong> <span>Practically exploring
                                                        Linux, having Sudo Overview and Navigating The File
                                                        System</span>
                                                </div>
                                                {{-- <strong>Practical Lab Activities:</strong>
                                            <p>Practically exploring Linux, having Sudo Overview and Navigating The File
                                                System</p> --}}
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
                                        <span class="button-label">Module 4</span>
                                        Social Engineering and Countermeasure
                                        <i class="fas fa-angle-down"></i> </button>
                                </div>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="accordionExample">

                                    <div class="accordion-body wow fadeInDown">
                                        <div class="syllabus-list">

                                            <div class="syllabus-content">
                                                {{--                                            <h6 class="syllabustitle">Introduction</h6> --}}
                                                <li class="syllabustext">Social Engineering foundation</li>
                                                <li class="syllabustext">Various Social Engineering Techniques</li>
                                                <li class="syllabustext">Insider Threats</li>
                                                <li class="syllabustext">Identity Theft</li>
                                                <li class="syllabustext">Different Social Engineering Countermeasures</li>
                                                <li class="syllabustext">Different Insider Threats and Identity Theft
                                                    Countermeasures</li>
                                                <div class="hover-effect" style="cursor: pointer;">
                                                    <strong>Practical Lab Activities:</strong> <span>User Previliges, Common
                                                        Network Commands, View Creating and Editing Files</span>
                                                </div>
                                                {{-- <strong>Practical Lab Activities:</strong>
                                            <p>User Previliges, Common Network Commands, View Creating and Editing Files</p> --}}
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
                                        Network Level Attack and Countermeasure
                                        <i class="fas fa-angle-down"></i> </button>
                                </div>
                                <div id="collapseFour1" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="accordionExample">

                                    <div class="accordion-body wow fadeInDown">
                                        <div class="syllabus-list">

                                            <div class="syllabus-content">
                                                {{--                                            <h6 class="syllabustitle">Introduction</h6> --}}
                                                <li class="syllabustext">Basics Of Networking</li>
                                                <li class="syllabustext">Packet Sniffing and Types of Sniffing</li>
                                                <li class="syllabustext">Various Sniffing Techniques and Tools</li>
                                                <li class="syllabustext">Different Sniffing Countermeasures</li>
                                                <li class="syllabustext">Different Types of DoS and DDoS Attacks</li>
                                                <li class="syllabustext">Different DoS/DDoS Attack Tools</li>
                                                <li class="syllabustext">Different DoS/DDoS Attack Countermeasures and
                                                    Protection Tools</li>
                                                <li class="syllabustext">Hijacking and Types of Session Hijacking</li>
                                                <li class="syllabustext">Different Session Hijacking Tools and
                                                    Countermeasures
                                                </li>
                                                <div class="hover-effect" style="cursor: pointer;">
                                                    <strong>Practical Lab Activities:</strong> <span>User Privileges, Common
                                                        Network Commands, View Creating and Editing Files</span>
                                                </div>
                                                {{-- <strong>Practical Lab Activities:</strong>
                                            <p>User Privileges, Common Network Commands, View Creating and Editing Files</p> --}}
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
                                        Web Application Attacks and Countermeasures
                                        <i class="fas fa-angle-down"></i> </button>
                                </div>
                                <div id="collapseFour2" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="accordionExample">

                                    <div class="accordion-body wow fadeInDown">
                                        <div class="syllabus-list">

                                            <div class="syllabus-content">
                                                <li class="syllabustext">Web Server Attacks</li>
                                                <li class="syllabustext">Web Server Attacks and Attack Countermeasures</li>
                                                <li class="syllabustext">Web Application Attacks</li>
                                                <li class="syllabustext">Web Application Attacks and Countermeasures</li>
                                                <li class="syllabustext">SQL Injection Attacks</li>
                                                <li class="syllabustext">SQL Injection Attacks and Countermeasures</li>
                                                <div class="hover-effect" style="cursor: pointer;">
                                                    <strong>Practical Lab Activities:</strong> <span>Scripting with
                                                        Bash</span>
                                                </div>
                                                {{-- <strong>Practical Lab Activities:</strong>
                                            <p>Scripting with Bash</p> --}}



                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item wow fadeInUp ">
                                <div class="accordion-header d-flex" id="headingFour">
                                    <button class="accordion-button justify-content-between " type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFour5" aria-expanded="false"
                                        aria-controls="collapseFour5">
                                        <span class="button-label">Module 7</span>
                                        Wireless Attacks and Countermeasures
                                        <i class="fas fa-angle-down"></i> </button>
                                </div>
                                <div id="collapseFour5" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="accordionExample">

                                    <div class="accordion-body wow fadeInDown">
                                        <div class="syllabus-list">

                                            <div class="syllabus-content">
                                                {{--                                            <h6 class="syllabustitle">Introduction</h6> --}}
                                                <li class="syllabustext">Wireless</li>
                                                <li class="syllabustext">Wireless Network-Specific Attack Techniques</li>
                                                <li class="syllabustext">Bluetooth Attacks</li>
                                                <li class="syllabustext">Wireless Attack Countermeasures</li>
                                                <div class="hover-effect" style="cursor: pointer;">
                                                    <strong>Practical Lab Activities:</strong> <span>Python
                                                        Installation</span>
                                                </div>
                                                {{-- <strong>Practical Lab Activities:</strong>
                                            <p>Python Installation</p> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- model start --}}
                            <div class="accordion-item wow fadeInUp ">
                                <div class="accordion-header d-flex" id="headingFour">
                                    <button class="accordion-button justify-content-between " type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFour8" aria-expanded="false"
                                        aria-controls="collapseFour8">
                                        <span class="button-label">Module 8</span>
                                        Mobile Attacks and Countermeasures
                                        <i class="fas fa-angle-down"></i> </button>
                                </div>
                                <div id="collapseFour8" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="accordionExample">

                                    <div class="accordion-body wow fadeInDown">
                                        <div class="syllabus-list">

                                            <div class="syllabus-content">
                                                {{--                                            <h6 class="syllabustitle">Introduction</h6> --}}
                                                <li class="syllabustext">Mobile Attacks and Countermeasures</li>
                                                <li class="syllabustext">Mobile Platform Attack Vectors and Vulnerabilities
                                                </li>
                                                <li class="syllabustext">Mobile Device Management (MDM) Concept</li>
                                                <li class="syllabustext">Mobile Attack Countermeasures</li>
                                                <div class="hover-effect" style="cursor: pointer;">
                                                    <strong>Practical Lab Activities:</strong> <span>Python Strings and
                                                        Arithmetic Operations</span>
                                                </div>
                                                {{-- <strong>Practical Lab Activities:</strong>
                                            <p>Python Strings and Arithmetic Operations</p> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- model end --}}
                            {{-- model start --}}
                            <div class="accordion-item wow fadeInUp ">
                                <div class="accordion-header d-flex" id="headingFour">
                                    <button class="accordion-button justify-content-between " type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFour9" aria-expanded="false"
                                        aria-controls="collapseFour9">
                                        <span class="button-label">Module 9</span>
                                        IoT and OT Attacks and Countermeasures
                                        <i class="fas fa-angle-down"></i> </button>
                                </div>
                                <div id="collapseFour9" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="accordionExample">

                                    <div class="accordion-body wow fadeInDown">
                                        <div class="syllabus-list">

                                            <div class="syllabus-content">
                                                <h6 class="syllabustitle">IoT Attacks</h6>
                                                <li class="syllabustext">IoT Concepts</li>
                                                <li class="syllabustext">IoT Threats and Attacks</li>
                                                <li class="syllabustext">IoT Attack Countermeasures</li>
                                                <h6 class="syllabustitle mt-3">OT Attacks</h6>
                                                <li class="syllabustext">OT Concepts</li>
                                                <li class="syllabustext">OT Threats and Attacks</li>
                                                <li class="syllabustext">OT Attack Countermeasures</li>
                                                <div class="hover-effect" style="cursor: pointer;">
                                                    <strong>Practical Lab Activities:</strong> <span>Python Level
                                                        1-Variables and Basic Methods and User Input</span>
                                                </div>
                                                {{-- <strong>Practical Lab Activities:</strong>
                                            <p>Python Level 1-Variables and Basic Methods and User Input</p> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- model end --}}
                            {{-- model start --}}
                            <div class="accordion-item wow fadeInUp ">
                                <div class="accordion-header d-flex" id="headingFour">
                                    <button class="accordion-button justify-content-between " type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFour10" aria-expanded="false"
                                        aria-controls="collapseFour10">
                                        <span class="button-label">Module 10</span>
                                        Cloud Computing Threats and Countermeasures
                                        <i class="fas fa-angle-down"></i> </button>
                                </div>
                                <div id="collapseFour10" class="accordion-collapse collapse"
                                    aria-labelledby="headingFour" data-bs-parent="accordionExample">

                                    <div class="accordion-body wow fadeInDown">
                                        <div class="syllabus-list">

                                            <div class="syllabus-content">
                                                {{--                                            <h6 class="syllabustitle">Introduction</h6> --}}
                                                <li class="syllabustext">Cloud Computing Concepts</li>
                                                <li class="syllabustext">Container Technology</li>
                                                <li class="syllabustext">Cloud Computing Threats</li>
                                                <li class="syllabustext">Cloud Attack Countermeasures</li>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- model end --}}
                            {{-- model start --}}
                            <div class="accordion-item wow fadeInUp ">
                                <div class="accordion-header d-flex" id="headingFour">
                                    <button class="accordion-button justify-content-between " type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFour11" aria-expanded="false"
                                        aria-controls="collapseFour11">
                                        <span class="button-label">Module 11</span>
                                        Penetration Testing Fundamentals
                                        <i class="fas fa-angle-down"></i> </button>
                                </div>
                                <div id="collapseFour11" class="accordion-collapse collapse"
                                    aria-labelledby="headingFour" data-bs-parent="accordionExample">

                                    <div class="accordion-body wow fadeInDown">
                                        <div class="syllabus-list">

                                            <div class="syllabus-content">
                                                {{--                                            <h6 class="syllabustitle">Introduction</h6> --}}
                                                <li class="syllabustext">Fundamentals of Penetration Testing and its
                                                    Benefits
                                                </li>
                                                <li class="syllabustext">Strategies and Phases of Penetration Testing</li>
                                                <li class="syllabustext">Guidelines and Recommendations for Penetration
                                                    Testing
                                                </li>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- model end --}}
                            {{-- model start --}}
                            <div class="accordion-item wow fadeInUp ">
                                <div class="accordion-header d-flex" id="headingFour">
                                    <button class="accordion-button justify-content-between " type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFour12" aria-expanded="false"
                                        aria-controls="collapseFour12">
                                        <span class="button-label">Module 12</span>
                                        Cryptography
                                        <i class="fas fa-angle-down"></i> </button>
                                </div>
                                <div id="collapseFour12" class="accordion-collapse collapse"
                                    aria-labelledby="headingFour" data-bs-parent="accordionExample">

                                    <div class="accordion-body wow fadeInDown">
                                        <div class="syllabus-list">

                                            <div class="syllabus-content">
                                                {{--                                            <h6 class="syllabustitle">Introduction</h6> --}}
                                                <li class="syllabustext">Cryptography Concepts</li>
                                                <li class="syllabustext">Encryption Algorithms</li>
                                                <li class="syllabustext">Cryptography Tools</li>
                                                <li class="syllabustext">Public Key Infrastructure (PKI)</li>
                                                <li class="syllabustext">Email Encryption</li>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- model end --}}



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
                            Illustrate Information security threats and vulnerabilities, types of malwares, and
                            vulnerability assessments
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                        style="border-left: 5px solid #6610f2;">
                        <i class="fas fa-database text-purple fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #333;">
                            Identify common tools and techniques used by cybersecurity analysts
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                        style="border-left: 5px solid #198754;">
                        <i class="fas fa-brain text-success fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #333;">
                            Evaluate Network-level attacks including sniffing, denial-of-service, and session hijacking,
                            and their countermeasures
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100"
                        style="border-left: 5px solid #fd7e14;">
                        <i class="fas fa-chart-line text-warning fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #333;">
                            Application-level attacks including webserver exploitation, OWASP top10 attacks, and SQL
                            injection and their countermeasures
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
                        <h6 style="font-weight: 600; color: #212529;">Comprehensive Coverage</h6>
                        <p>Addresses key aspects of cybersecurity including information security fundamentals, ethical
                            hacking, threat and vulnerability assessment, social engineering, network and web application
                            security, and penetration testing.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="card h-100 text-center shadow-sm border-0"
                        style="display: flex; justify-content: center; align-items: center; border-radius: 15px; transition: all 0.3s ease; padding: 30px; background: #fff;"
                        onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)';"
                        onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.05)';">
                        <img src="https://youexceltraining.com/img/icon/training-icon-1-2.svg" alt="icon"
                            style="width: 60px; margin-bottom: 20px;">
                        <h6 style="font-weight: 600; color: #212529;">Preventive Measures</h6>
                        <p> Focuses on countermeasures for various cyber threats like malware, social engineering, DoS/DDoS,
                            session hijacking, and web application attacks.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="card h-100 text-center shadow-sm border-0"
                        style="display: flex; justify-content: center; align-items: center; border-radius: 15px; transition: all 0.3s ease; padding: 30px; background: #fff;"
                        onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)';"
                        onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.05)';">
                        <img src="https://youexceltraining.com/img/icon/training-icon-1-3.svg" alt="icon"
                            style="width: 60px; margin-bottom: 20px;">
                        <h6 style="font-weight: 600; color: #212529;">Legal and Ethical Awareness</h6>
                        <p>Covers information security laws and regulations, emphasizing ethical hacking principles and
                            legal compliance.</p>
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
                            IT professionals, students pursuing a career in Cyber Security, small business owners and Anyone
                            interested in understanding Cyber Security
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
                            Basic computer literacy, no prior cybersecurity knowledge required
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
                        <h5 class="fw-bold mb-3" style="font-size: 26px;">Jahanzeb Feroz</h5>
                        <p class="mb-4" style="font-size: 15px; color: #555; line-height: 1.7;">
                            <b>Jahanzeb Feroz</b> is a Cybersecurity professional with over 10 years of industry experience,
                            currently serving as a
                            Deputy Manager Cyber Security / Penetration Testing at Engro Corporation.
                        </p>

                        <h6 class="fw-semibold mb-2">
                            <i class="fas fa-certificate text-warning me-2"></i>Professional Certifications
                        </h6>
                        <ul class="list-unstyled mb-0">
                            <li><i class="fas fa-check-circle text-success me-2"></i>Master's degree in Management
                                Information Systems (IBT)</li>
                            <li><i class="fas fa-check-circle text-success me-2"></i>Bachelors in Electronic Engineering
                                (SSUET)</li>
                            <li><i class="fas fa-check-circle text-success me-2"></i>Internationally recognized
                                Certifications which included Certified Ethical Hacker</li>
                            <li><i class="fas fa-check-circle text-success me-2"></i>CRTP (in progress)</li>
                            <li><i class="fas fa-check-circle text-success me-2"></i>eWPTX</li>
                            <li><i class="fas fa-check-circle text-success me-2"></i>CCSP</li>
                            <li><i class="fas fa-check-circle text-success me-2"></i>JNCIA</li>
                            <li><i class="fas fa-check-circle text-success me-2"></i>CCNA Security</li>
                            <li><i class="fas fa-check-circle text-success me-2"></i>CCNA</li>
                            <li><i class="fas fa-check-circle text-success me-2"></i>CCNP</li>
                            <li><i class="fas fa-check-circle text-success me-2"></i>IBM-AIX</li>
                            <li><i class="fas fa-check-circle text-success me-2"></i>MITRE ATT&CK Defender</li>
                            <li><i class="fas fa-check-circle text-success me-2"></i>Cisco Next Generation Firewall (NGFW)
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Right Side (Trainer Image) -->
                <div class="col-lg-4 col-md-5 text-center">
                    <div class="position-relative d-inline-block">
                        <img src="{{ asset('img/trainer/new/Jahanzeb-Feroz.png') }}" alt="Trainer - Jahanzeb Feroz Khan"
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
                            Video recorded session with personalized Learning Management System (LMS) access login id
                            for 12 months
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
            <a href="../Registration-Form/cyber-security-mastery" class="btn btn-lg fw-bold"
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
