@extends('website.app')

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
        font-size: 1.1rem;
        max-width: 900px;
        margin: 0 auto 10px;
        color: #fff;
        opacity: 0.95;
    }
    .accordion-item{
        padding: 15px 10px 0px 15px;
    }
    .accordion-style1 .accordion-body {
        padding: 0px;
    }
    .accordion-button::before,
    .accordion-button::after {
        content: none !important;
        display: none !important;
    }
    .accordion-style1 .accordion-button {
        padding: 20px 10px;
    }
    .accordion-style1 .accordion-item {
        padding-left: 20px;
    }

</style>

<section class="space-top space-extra-bottom section-header">
    <div class="bg-pattern"></div>
    <div class="container section-content text-center">
        <div class="section-title">
            <h2>Frequently Asked Questions</h2>
            <p>
                YouExcel in partnership with Prime Minister Youth Skill Development Program, NAVTTC, Govt of Pakistan now introducing 100% Free of Cost Training
            </p>
        </div>
    </div>
</section>

<section class="space-extra-bottom">
    <div class="container">
        <div class="row gx-50">
            <div class="col-lg-7 col-xl-8 mb-40 mb-lg-0">
                <div class="title-area wow fadeInUp text-center text-lg-start" data-wow-delay="0.1s">
                    <p class="mt-2">
                        We have designed Frequently Asked Questions (FAQs) for 
                        <strong>100% Free of Cost Trainings</strong> being launched at YouExcel in partnership with NAVTTC, Govt. of Pakistan for your learning and skills development.
                        Please read this complete document. For further assistance, visit YouExcel office or call 
                        <a href="tel:+923346699336">0334-6699336</a>.
                    </p>
                </div>
                
                <!-- POST REGISTRATION FAQS -->
                <div class="accordion-style1 wow fadeInUp mt-4" data-wow-delay="0.2s">
                    <h2 class="accordion-header" id="postFaqHeading">
                        <button class="accordion-button fw-bold" style="font-size: 25px; background: #e7f1ff; margin-bottom: 15px;" type="button" data-bs-toggle="collapse"
                            data-bs-target="#postFaqCollapse" aria-expanded="false" aria-controls="postFaqCollapse">
                            Post Registration FAQs
                        </button>
                    </h2>
                
                    <div id="postFaqCollapse" class="accordion-collapse collapse show" data-bs-parent="#mainFaqAccordion">
                        <div class="accordion-body">
                
                            <!-- 🔽 POST FAQ ACCORDION (Inner) -->
                            <div class="accordion" id="postAccordion">
                                <!-- Q1 -->
                                <div class="accordion-item border rounded shadow-sm mb-3">
                                    <div class="accordion-header" id="heading1">
                                        <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse1">
                                            1. I have registered in the NAVTTC training – What’s the next step?
                                        </button>
                                    </div>
                                    <div id="collapse1" class="accordion-collapse collapse show">
                                        <div class="accordion-body">
                                            <p>
                                                There will be a National Testing Service (NTS) test physically conducted at YouExcel
                                                premises.
                                                We expect the test to happen tentatively between <strong>15-Dec-2025 to
                                                    31-Dec-2025</strong>.
                                                However, the exact date and time are yet to be announced and in rare occasions may go
                                                beyond
                                                31-Dec-2025. You will be notified via call and message regarding the exact date and
                                                time.
                                                The test will most likely be conducted in morning or afternoon shifts. You must appear
                                                at the allocated time; no change will be allowed, otherwise you will be marked absent.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                
                                <!-- Q2 -->
                                <div class="accordion-item border rounded shadow-sm mb-3">
                                    <div class="accordion-header" id="heading2">
                                        <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse2">
                                            2. What if I miss the test?
                                        </button>
                                    </div>
                                    <div id="collapse2" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <p>
                                                Attendance in the NTS test is <strong>mandatory</strong>. If you are marked absent,
                                                you will not qualify for the training merit list.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                
                                <!-- Q3 -->
                                <div class="accordion-item border rounded shadow-sm mb-3">
                                    <div class="accordion-header" id="heading3">
                                        <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse3">
                                            3. What is the NTS test and how should I prepare for it?
                                        </button>
                                    </div>
                                    <div id="collapse3" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <p>
                                                The NTS test is generally a simple and straightforward test.
                                                It evaluates <strong>General Knowledge, basic Mathematics, and basic English</strong>.
                                                With a clear and focused approach, most candidates can easily pass the test.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                
                                <!-- Q4 -->
                                <div class="accordion-item border rounded shadow-sm mb-3">
                                    <div class="accordion-header" id="heading4">
                                        <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse4">
                                            4. What will happen after the NTS test?
                                        </button>
                                    </div>
                                    <div id="collapse4" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <p>
                                                After the test, the papers will be checked.
                                                Candidates who secure the highest marks will be shortlisted
                                                and invited to commence training based on the official merit list.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                
                                <!-- Q5 -->
                                <div class="accordion-item border rounded shadow-sm mb-3">
                                    <div class="accordion-header" id="heading5">
                                        <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse5">
                                            5. Do I need to bring anything on the test day?
                                        </button>
                                    </div>
                                    <div id="collapse5" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <p>
                                                Please bring your <strong>original CNIC</strong> and copies of your
                                                <strong>last educational documents</strong>. Although you may have already
                                                submitted the required documents at YouExcel, carrying them will be helpful.
                                                Soft copies may be shown if originals are inconvenient, but hard copies are preferred.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                
                                <!-- Q6 -->
                                <div class="accordion-item border rounded shadow-sm mb-3">
                                    <div class="accordion-header" id="heading6">
                                        <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse6">
                                            6. How long will the test paper last?
                                        </button>
                                    </div>
                                    <div id="collapse6" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <p>
                                                Based on experience, you should allow <strong>3 to 4 hours</strong> for the test.
                                                The exact duration will be confirmed once further information is received
                                                from the government department.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                
                                <!-- Q7 -->
                                <div class="accordion-item border rounded shadow-sm mb-3">
                                    <div class="accordion-header" id="heading7">
                                        <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse7">
                                            7. Can my parent or relative accompany me on the test day?
                                        </button>
                                    </div>
                                    <div id="collapse7" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <p>
                                                Due to limited seating capacity, we prefer minimal crowd on the test day.
                                                However, if absolutely necessary, a parent or relative may accompany you
                                                and will be requested to wait outside the test venue.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                
                                <!-- Q8 -->
                                <div class="accordion-item border rounded shadow-sm mb-3">
                                    <div class="accordion-header" id="heading8">
                                        <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse8">
                                            8. Can I bring a mobile phone, calculator, or any device on the test day?
                                        </button>
                                    </div>
                                    <div id="collapse8" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <p>
                                                Carrying a <strong>mobile phone or any electronic device</strong>
                                                inside the test room is strictly prohibited.
                                                There is no facility to store personal belongings.
                                                YouExcel will not be responsible for any lost items,
                                                so it is strongly advised not to bring such devices.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                
                                <!-- Q9 -->
                                <div class="accordion-item border rounded shadow-sm mb-3">
                                    <div class="accordion-header" id="heading9">
                                        <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse9">
                                            9. What stationery should I bring on the test day?
                                        </button>
                                    </div>
                                    <div id="collapse9" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <p>
                                                Please bring a <strong>pencil, eraser (rubber), and sharpener</strong>
                                                with you on the test day.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                
                                <!-- Q10 -->
                                <div class="accordion-item border rounded shadow-sm mb-3">
                                    <div class="accordion-header" id="heading10">
                                        <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse10">
                                            10. For further information or assistance, whom should I contact?
                                        </button>
                                    </div>
                                    <div id="collapse10" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <p>
                                                For any further information or assistance, please contact:
                                                <strong>0334-6699336</strong>.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                
                        </div>
                    </div>
                </div>
            
                <!-- PRE REGISTRATION FAQS -->
                <div class="accordion-style1 wow fadeInUp mt-4" data-wow-delay="0.2s">
                    <h2 class="accordion-header" id="preFaqHeading">
                        <button class="accordion-button collapsed fw-bold" style="font-size: 25px; background: #e7f1ff; margin-bottom: 15px;" type="button" data-bs-toggle="collapse"
                            data-bs-target="#preFaqCollapse" aria-expanded="true" aria-controls="preFaqCollapse">
                            Pre Registration FAQs
                        </button>
                    </h2>
                
                    <div id="preFaqCollapse" class="accordion-collapse collapse" data-bs-parent="#mainFaqAccordion">
                        <div class="accordion-body">
                
                            <!-- 🔽 PRE FAQ ACCORDION (Inner) -->
                            <div class="accordion" id="preAccordion">
                                <!-- Q11 -->
                                <div class="accordion-item border rounded shadow-sm mb-3">
                                    <div class="accordion-header" id="heading11">
                                        <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse11">
                                            11. What are the Free of Cost courses available?
                                        </button>
                                    </div>
                
                                    <div id="collapse11" class="accordion-collapse collapse show">
                                        <div class="accordion-body">
                
                                            <ul class="p-0 m-0">
                
                                                <!-- 1 -->
                                                <li class="mb-3 pb-2 border-bottom">
                                                    <strong>1. Artificial Intelligence (Machine Learning)</strong>
                                                    <ul class="mt-2">
                                                        <li><strong>Sector:</strong> Information Technology</li>
                                                        <li><strong>Qualification:</strong> 5th Semester students enrolled in HEC
                                                            approved IT/CS/MIS/Stats/Math program</li>
                                                        <li><strong>Duration:</strong> 3 Months</li>
                                                        <li><strong>Training Link:</strong>
                                                            <a href="{{asset('pdf/navttc/AI_MACHINE_LEARNING_DEAP_LEARNING_3_Months.pdf')}}"
                                                                target="_blank" class="text-primary fw-semibold">Download</a>
                                                        </li>
                                                    </ul>
                                                </li>
                
                                                <!-- 2 -->
                                                <li class="mb-3 pb-2 border-bottom">
                                                    <strong>2. Cyber Security</strong>
                                                    <ul class="mt-2">
                                                        <li><strong>Sector:</strong> Information Technology</li>
                                                        <li><strong>Qualification:</strong> 5th Semester students enrolled in HEC
                                                            approved IT/CS/MIS/Stats/Math program</li>
                                                        <li><strong>Duration:</strong> 3 Months</li>
                                                        <li><strong>Training Link:</strong>
                                                            <a href="{{asset('pdf/navttc/CYBER_SECURITY_CEH_3_Months.pdf')}}"
                                                                target="_blank" class="text-primary fw-semibold">Download</a>
                                                        </li>
                                                    </ul>
                                                </li>
                
                                                <!-- 3 -->
                                                <li class="mb-3 pb-2 border-bottom">
                                                    <strong>3. Digital Marketing & SEO</strong>
                                                    <ul class="mt-2">
                                                        <li><strong>Sector:</strong> Information Technology</li>
                                                        <li><strong>Qualification:</strong> Intermediate</li>
                                                        <li><strong>Duration:</strong> 3 Months</li>
                                                        <li><strong>Training Link:</strong>
                                                            <a href="{{asset('pdf/navttc/DIGITAL_MARKETING_AND_SEO_3_Months.pdf')}}"
                                                                target="_blank" class="text-primary fw-semibold">Download</a>
                                                        </li>
                                                    </ul>
                                                </li>
                
                                                <!-- 4 -->
                                                <li class="mb-3 pb-2 border-bottom">
                                                    <strong>4. Data Analysis using Python</strong>
                                                    <ul class="mt-2">
                                                        <li><strong>Sector:</strong> Banking & Finance</li>
                                                        <li><strong>Qualification:</strong>
                                                            B.Com / Economics / Statistics / Banking / Finance / ACCA / CS / IT / Math /
                                                            ICMA Inter / CA Inter / PIPFA / BBA
                                                        </li>
                                                        <li><strong>Duration:</strong> 2 Months</li>
                                                        <li><strong>Training Link:</strong>
                                                            <a href="{{asset('pdf/navttc/Data_Analysis_using_Python_March_2025_Update.docx')}}"
                                                                target="_blank" class="text-primary fw-semibold">Download</a>
                                                        </li>
                                                    </ul>
                                                </li>
                
                                                <!-- 5 -->
                                                <li class="mb-3 pb-2 border-bottom">
                                                    <strong>5. MS Power BI</strong>
                                                    <ul class="mt-2">
                                                        <li><strong>Sector:</strong> Banking & Finance</li>
                                                        <li><strong>Qualification:</strong>
                                                            B.Com / Economics / Statistics / Banking / Finance / ACCA / CS / IT / Math /
                                                            ICMA Inter / CA Inter / PIPFA / BBA
                                                        </li>
                                                        <li><strong>Duration:</strong> 2 Months</li>
                                                        <li><strong>Training Link:</strong>
                                                            <a href="{{asset('pdf/navttc/MICROSOFT_POWER_BI.pdf')}}" target="_blank"
                                                                class="text-primary fw-semibold">Download</a>
                                                        </li>
                                                    </ul>
                                                </li>
                
                                            </ul>
                
                                            <p class="mb-0">
                                                <em>*Please note: Course outlines may be updated at any time by Government
                                                    Authority.</em>
                                            </p>
                
                                        </div>
                                    </div>
                                </div>
                
                
                                <!-- Q12 -->
                                <div class="accordion-item border rounded shadow-sm mb-3">
                                    <div class="accordion-header" id="heading12">
                                        <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse12">
                                            12. What is the Eligibility Criteria for applying?
                                        </button>
                                    </div>
                                    <div id="collapse12" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Minimum Qualification: Check the table above</li>
                                                <li>Age limit: 18–40 years</li>
                                                <li>Must have a valid CNIC and Domicile of Sindh</li>
                                                <li>Must NOT have availed NAVTTC training program before</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                
                                <!-- Q13 -->
                                <div class="accordion-item border rounded shadow-sm mb-3">
                                    <div class="accordion-header" id="heading13">
                                        <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse13">
                                            13. What is the process of registration?
                                        </button>
                                    </div>
                                    <div id="collapse13" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <p><strong>To confirm your registration, follow the steps below:</strong></p>
                
                                            <ul>
                                                <li>
                                                    <strong>Step 1: Fill Enquiry Form:</strong>
                                                    <a href="https://youexceltraining.com/enquiry-form-project" target="_blank">Click
                                                        Here</a>
                                                </li>
                
                                                <li>
                                                    <strong>Step 2:</strong> Visit YouExcel with required documents to complete your
                                                    registration. <br>
                                                    Location (Map):
                                                    <a href="https://maps.app.goo.gl/EDR1J7oucv12oi7X8" target="_blank">Click Here</a>
                                                </li>
                
                                                <li><strong>Visit Hours:</strong> 9:00 AM to 8:00 PM — Open all 7 days</li>
                                                <li><strong>Online Help Desk:</strong> 0334-6699336</li>
                                            </ul>
                
                                            <p><strong>Required Documents:</strong></p>
                                            <ul>
                                                <li>Last education degree / mark sheet (photocopy)</li>
                                                <li>Valid CNIC photocopy of candidate</li>
                                                <li>Father/Guardian CNIC photocopy</li>
                                                <li>One recent photograph</li>
                                            </ul>
                
                                            <p><strong>Join our WhatsApp Group for updates and information:</strong><br>
                                                <a href="https://chat.whatsapp.com/HJO96Y3i36Z29JeNHJaYqd" target="_blank">
                                                    Click Here to Join
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                
                
                                <!-- Q14 -->
                                <div class="accordion-item border rounded shadow-sm mb-3">
                                    <div class="accordion-header" id="heading14">
                                        <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse14">
                                            14. What is the training mode, duration & start date?
                                        </button>
                                    </div>
                                    <div id="collapse14" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Physical On-Campus hands-on practical classes</li>
                                                <li>Duration: 02–03 Months</li>
                                                <li>Online classes NOT available</li>
                                                <li>Class start date will be announced soon</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                
                                <!-- Q15 -->
                                <div class="accordion-item border rounded shadow-sm mb-3">
                                    <div class="accordion-header" id="heading15">
                                        <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse15">
                                            15. What are the tentative Days & Timings?
                                        </button>
                                    </div>
                                    <div id="collapse15" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <p><strong>Days:</strong> Monday to Friday</p>
                                            <p><strong>Timings (Tentative):</strong></p>
                                            <ul>
                                                <li>9:00 AM – 12:30 PM (Morning)</li>
                                                <li>1:00 PM – 4:30 PM (Afternoon)</li>
                                                <li>6:00 PM – 9:30 PM (Evening)</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                
                                <!-- Q16 -->
                                <div class="accordion-item border rounded shadow-sm mb-3">
                                    <div class="accordion-header" id="heading16">
                                        <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse16">
                                            16. What documents are required?
                                        </button>
                                    </div>
                                    <div id="collapse16" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Last education document / marksheet photocopy</li>
                                                <li>Valid CNIC photocopy</li>
                                                <li>Father/Guardian CNIC photocopy</li>
                                                <li>One recent photograph</li>
                                                <li>Submit all documents at YouExcel (Suite 503-505, Al Samad Tower, Gulshan-e-Iqbal)
                                                </li>
                                                <li>Google Maps:
                                                    <a href="https://maps.app.goo.gl/EDR1J7oucv12oi7X8" target="_blank">Click here</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                
                                <!-- Q17 -->
                                <div class="accordion-item border rounded shadow-sm mb-3">
                                    <div class="accordion-header" id="heading17">
                                        <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse17">
                                            17. What will happen after registration and When will the training commence?
                                        </button>
                                    </div>
                                    <div id="collapse17" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <p>
                                                Upon completion of online NAVTTC Portal registration, there will be a test conducted and
                                                a Merit list will be generated of students who will be invited to attend the classes.
                                                This process may take some time and we expect the training to tentatively commence in
                                                the second week of January 2026.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                
                                <!-- Q18 -->
                                <div class="accordion-item border rounded shadow-sm mb-3">
                                    <div class="accordion-header" id="heading18">
                                        <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse18">
                                            18. Will I get a job after the training?
                                        </button>
                                    </div>
                                    <div id="collapse18" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <p>
                                                This training aims to create employment, freelancing and entrepreneurial opportunities.
                                                YouExcel will facilitate interviews and job placements towards the end of training.
                                                Your success depends on your performance, dedication, and skills learned during
                                                training.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                
                                <!-- Q19 -->
                                <div class="accordion-item border rounded shadow-sm mb-3">
                                    <div class="accordion-header" id="heading19">
                                        <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse19">
                                            19. Where will I get the certificate from?
                                        </button>
                                    </div>
                                    <div id="collapse19" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <p>
                                                After successful completion of training (attendance, assignments, exams),
                                                you will receive certification from **NAVTTC, Govt. of Pakistan** which is
                                                internationally recognized.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                
                                <!-- Q20 -->
                                <div class="accordion-item border rounded shadow-sm mb-3">
                                    <div class="accordion-header" id="heading20">
                                        <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse20">
                                            20. Are there any hidden charges?
                                        </button>
                                    </div>
                                    <div id="collapse20" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <p><strong>No!</strong> Training and certification are 100% free of cost.</p>
                                        </div>
                                    </div>
                                </div>
                
                                <!-- Q21 -->
                                <div class="accordion-item border rounded shadow-sm mb-3">
                                    <div class="accordion-header" id="heading21">
                                        <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse21">
                                            21. Any testimonials or success stories?
                                        </button>
                                    </div>
                                    <div id="collapse21" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <ul>
                                                <li><a href="https://youtu.be/Q_UqyHImyqg" target="_blank">YouTube Testimonial</a></li>
                                                <li><a href="https://www.facebook.com/share/v/15t4Q1CXRA/" target="_blank">Facebook
                                                        Testimonial</a></li>
                                                <li><a href="https://www.linkedin.com/feed/update/urn:li:activity:7325576805740920832"
                                                        target="_blank">LinkedIn Testimonial</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                
                                <!-- Q22 -->
                                <div class="accordion-item border rounded shadow-sm mb-3">
                                    <div class="accordion-header" id="heading22">
                                        <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse22">
                                            22. Does YouExcel have an IT Lab for practical training?
                                        </button>
                                    </div>
                                    <div id="collapse22" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <p>
                                                Yes! YouExcel Training Center is equipped with projectors, laptops, Wi-Fi,
                                                air-conditioned classes, dedicated security, and a professional training environment.
                                                For virtual campus visit, please click here: <a
                                                    href="https://youtu.be/yXST0QQBA4E?si=e1VnnwQI9YSPMDny" target="_blank">Youtube
                                                    Link</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                
                        </div>
                    </div>
                
                </div>

            
                    <div class="text-center mt-4">
                        <p>
                            Have more questions? Visit our 
                            <a href="{{ url('contact') }}">Help Center</a> 
                            or contact our 
                            <a href="{{ url('contact') }}">Support Team</a>.
                        </p>
                    </div>
                </div>

            <div class="col-lg-4">
                <div class="row">
                    <div class="col-md-7 col-lg-12">
                        <div class="img-box5 mega-hover wow fadeInUp" data-wow-delay="0.3s">
                            <div class="box-content text-center">
                                <h3 class="img-title mb-2">Free Training Registration</h3>
                                <p class="img-text mb-3">Apply now for 100% Free of Cost Skill Development Programs</p>
                                <a href="https://youexceltraining.com/enquiry-form-project-bbshrrdb" class="vs-btn">Apply Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-12">
                        <div class="media-style5 wow fadeInUp mt-4" data-wow-delay="0.4s">
                            <span class="icon"><i class="fal fa-user-alt"></i></span>
                            <h5 class="media-title">Admission Helpdesk</h5>
                            <a class="phone text-white d-block" href="tel:+922137121738"><i class="fal fa-phone-alt"></i> +92-21-37121738</a>
                            <a class="phone text-white d-block" href="tel:+923346699336"><i class="fal fa-phone-alt"></i> +92-334-6699336</a>
                            <a class="mail d-block" href="mailto:info@youexceltraining.com"><i class="fal fa-envelope"></i> info@youexceltraining.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const accordionButtons = document.querySelectorAll('.accordion-button');

    accordionButtons.forEach(button => {
        button.addEventListener('click', function (e) {
            const targetSelector = this.getAttribute('data-bs-target');
            const target = document.querySelector(targetSelector);
            const bsCollapse = bootstrap.Collapse.getOrCreateInstance(target);
            const isOpen = target.classList.contains('show');

            // Prevent Bootstrap’s default toggle so we can control manually
            e.preventDefault();

            if (isOpen) {
                bsCollapse.hide();
                this.classList.add('collapsed');
            } else {
                bsCollapse.show();
                this.classList.remove('collapsed');
            }
        });
    });
});
</script>



@endsection
