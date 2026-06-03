@extends('website.app')

@section('title', 'NAVTTC Skills of Tomorrow FAQs – YouExcel')
@section('meta_description', 'Frequently Asked Questions for 100% Free of Cost NAVTTC Skills of Tomorrow Training Programme 2026 at YouExcel, Karachi. Pre and Post Registration questions answered.')

@section('content')

<style>
    .section-header {
        background: linear-gradient(135deg, #1a2a3a 0%, #2c3e50 100%) !important;
        color: white !important;
        padding: 180px 0 40px 0 !important;
        position: relative !important;
        overflow: hidden !important;
    }
    .section-header::before {
        content: "";
        position: absolute;
        top: 0; left: 0;
        width: 100%; height: 100%;
        background: linear-gradient(rgba(0, 40, 104, 0.85), rgba(0, 40, 104, 0.9)),
                    url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');
        background-size: cover;
        background-position: center;
        z-index: 0;
    }
    .section-content { position: relative; z-index: 2; }
    .section-title { padding-bottom: 0; }
    .section-title h2 {
        font-weight: 700;
        color: #fff;
        font-size: 2rem;
        margin-bottom: 20px;
        line-height: 1.4;
    }
    .section-title p {
        font-size: 1.1rem;
        max-width: 900px;
        margin: 0 auto 10px;
        color: #fff;
        opacity: 0.95;
    }
    .accordion-item { padding: 15px 10px 0 15px; }
    .accordion-style1 .accordion-body { padding: 0; }
    .accordion-button::before,
    .accordion-button::after { content: none !important; display: none !important; }
    .accordion-style1 .accordion-button { padding: 20px 10px; }
    .accordion-style1 .accordion-item { padding-left: 20px; }

    /* Course table */
    .faq-table { width: 100%; border-collapse: collapse; font-size: 0.93rem; }
    .faq-table th {
        background: #002347;
        color: #fff;
        padding: 10px 14px;
        text-align: left;
    }
    .faq-table td { padding: 9px 14px; border-bottom: 1px solid #e3e8f0; }
    .faq-table tr:nth-child(even) td { background: #f7f9fc; }
    @media (max-width: 575px) {
        .faq-table thead { display: none; }
        .faq-table td { display: block; border-bottom: none; padding: 6px 10px; }
        .faq-table tr { border: 1px solid #e3e8f0; border-radius: 6px; margin-bottom: 10px; display: block; }
    }
</style>

{{-- ── Hero ── --}}
<section class="space-top space-extra-bottom section-header">
    <div class="bg-pattern"></div>
    <div class="container section-content text-center">
        <div class="section-title">
            <h2>NAVTTC Skills of Tomorrow – FAQs</h2>
            <p>
                100% Free of Cost Training Programme 2026 &mdash;
                <strong>YouExcel in partnership with NAVTTC, Govt. of Pakistan</strong>
            </p>
        </div>
    </div>
</section>

{{-- ── FAQ Body ── --}}
<section class="space-extra-bottom">
    <div class="container">
        <div class="row gx-50">

            {{-- ── Left: Accordions ── --}}
            <div class="col-lg-7 col-xl-8 mb-40 mb-lg-0">

                <div class="title-area wow fadeInUp text-center text-lg-start" data-wow-delay="0.1s">
                    <p class="mt-2">
                        We have designed these FAQs for <strong>100% Free of Cost Trainings</strong>
                        being launched at YouExcel in partnership with
                        <strong>NAVTTC, Govt. of Pakistan</strong>.
                        Please read this complete document. For further assistance, visit
                        YouExcel or call <a href="tel:+923346699336">0334-6699336</a>.
                    </p>
                </div>

                {{-- ══════════════════════════════════════
                     PRE-REGISTRATION QUESTIONS
                ══════════════════════════════════════ --}}
                <div class="accordion-style1 wow fadeInUp mt-4" data-wow-delay="0.2s">
                    <h2 class="accordion-header" id="preHeading">
                        <button class="accordion-button fw-bold"
                                style="font-size:25px;background:#e7f1ff;margin-bottom:15px;"
                                type="button" data-bs-toggle="collapse"
                                data-bs-target="#preCollapse"
                                aria-expanded="true">
                            Pre-Registration Questions
                        </button>
                    </h2>
                    <div id="preCollapse" class="accordion-collapse collapse show">
                        <div class="accordion-body">
                            <div class="accordion" id="preAccordion">

                                {{-- Q1 --}}
                                <div class="accordion-item border rounded shadow-sm mb-3">
                                    <div class="accordion-header" id="ph1">
                                        <button class="accordion-button fw-semibold" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#pc1">
                                            1. What are the Free of Cost courses available?
                                        </button>
                                    </div>
                                    <div id="pc1" class="accordion-collapse collapse show">
                                        <div class="accordion-body">
                                            <table class="faq-table mb-3">
                                                <thead>
                                                    <tr>
                                                        <th>S. No.</th>
                                                        <th>Course Name</th>
                                                        <th>Required Qualification</th>
                                                        <th>Duration</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr><td>1</td><td>Earning Money through Freelancing</td><td>Intermediate</td><td>3 Months</td></tr>
                                                    <tr><td>2</td><td>AI for Everyone</td><td>Intermediate</td><td>3 Months</td></tr>
                                                    <tr><td>3</td><td>AI Augmented Digital Marketing &amp; SEO</td><td>Intermediate</td><td>3 Months</td></tr>
                                                    <tr><td>4</td><td>AI Powered Ecommerce</td><td>Intermediate</td><td>3 Months</td></tr>
                                                    <tr><td>5</td><td>AI Augmented Graphic Design &amp; Video Editing</td><td>Intermediate</td><td>3 Months</td></tr>
                                                    <tr><td>6</td><td>AI Financial Analyst with Power BI</td><td>14 years of Education</td><td>3 Months</td></tr>
                                                </tbody>
                                            </table>
                                            <p><em>*Please note the course outlines will be shared by Government Authority when classes begin.</em></p>
                                        </div>
                                    </div>
                                </div>

                                {{-- Q2 --}}
                                <div class="accordion-item border rounded shadow-sm mb-3">
                                    <div class="accordion-header" id="ph2">
                                        <button class="accordion-button collapsed fw-semibold" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#pc2">
                                            2. What is the Eligibility Criteria of applying in the course?
                                        </button>
                                    </div>
                                    <div id="pc2" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Valid CNIC holder</li>
                                                <li>Minimum Qualification: Intermediate</li>
                                                <li>For Power BI Course: 14 Years of Education Required</li>
                                                <li>Must not have availed NAVTTC training course before</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                {{-- Q3 --}}
                                <div class="accordion-item border rounded shadow-sm mb-3">
                                    <div class="accordion-header" id="ph3">
                                        <button class="accordion-button collapsed fw-semibold" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#pc3">
                                            3. What is the process of registration?
                                        </button>
                                    </div>
                                    <div id="pc3" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <p><strong>Step 1:</strong></p>
                                            <ul>
                                                <li>Fill Enquiry Form: <a href="{{ route('enquiry.navttcsotb1') }}">Click Here</a></li>
                                            </ul>
                                            <p><strong>Step 2:</strong></p>
                                            <ul>
                                                <li>Visit YouExcel with Required Documents to <strong>'complete'</strong> registration process.</li>
                                                <li>Please note: Visiting YouExcel with Required Documents is important to complete registration. If you are unable to visit, you must call/message at ONLINE HELP DESK to help you register online.</li>
                                                <li>Visit Location: <a href="https://maps.app.goo.gl/EDR1J7oucv12oi7X8" target="_blank">Google Maps</a></li>
                                                <li>Visiting Hours: 9:00 AM to 9:00 PM (Open all 7 days)</li>
                                                <li>Online Help Desk: 0334-6699336 | 0335-6699336</li>
                                            </ul>
                                            <p><strong>Required Documents:</strong></p>
                                            <ol>
                                                <li>Photocopy of last education degree / mark sheet</li>
                                                <li>Photocopy of valid CNIC (Candidate)</li>
                                                <li>Photocopy of Father/Guardian CNIC</li>
                                                <li>One recent passport-size photograph</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>

                                {{-- Q4 --}}
                                <div class="accordion-item border rounded shadow-sm mb-3">
                                    <div class="accordion-header" id="ph4">
                                        <button class="accordion-button collapsed fw-semibold" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#pc4">
                                            4. What is the training mode, training duration and when will it start?
                                        </button>
                                    </div>
                                    <div id="pc4" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Physical On-Campus hands-on practical classes for <strong>03 Months</strong> duration. Online option not available.</li>
                                                <li>The class start date is yet to be announced.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                {{-- Q5 --}}
                                <div class="accordion-item border rounded shadow-sm mb-3">
                                    <div class="accordion-header" id="ph5">
                                        <button class="accordion-button collapsed fw-semibold" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#pc5">
                                            5. What are the tentative Days and Timings of regular classes?
                                        </button>
                                    </div>
                                    <div id="pc5" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <p><strong>Days:</strong> Monday to Friday</p>
                                            <p><strong>Timings (Tentative 3 slots):</strong></p>
                                            <ul>
                                                <li>9:00 AM to 12:30 PM (Morning)</li>
                                                <li>1:00 PM to 4:30 PM (Afternoon)</li>
                                                <li>6:00 PM to 9:30 PM (Evening)</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                {{-- Q6 --}}
                                <div class="accordion-item border rounded shadow-sm mb-3">
                                    <div class="accordion-header" id="ph6">
                                        <button class="accordion-button collapsed fw-semibold" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#pc6">
                                            6. What are the documents required? (One Set)
                                        </button>
                                    </div>
                                    <div id="pc6" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Last education documents/mark sheet photocopy</li>
                                                <li>Valid CNIC photocopy of Candidate</li>
                                                <li>Father/Guardian CNIC photocopy</li>
                                                <li>One recent photograph</li>
                                                <li>Submit your documents hard copy at YouExcel venue (Suite: 503-505, 5th Floor, Al Samad Tower, Block 13-B, Main University Road, Gulshan-e-Iqbal, Karachi, Pakistan)</li>
                                                <li>Google Maps Link: <a href="https://maps.app.goo.gl/EDR1J7oucv12oi7X8" target="_blank">Click here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                {{-- Q7 --}}
                                <div class="accordion-item border rounded shadow-sm mb-3">
                                    <div class="accordion-header" id="ph7">
                                        <button class="accordion-button collapsed fw-semibold" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#pc7">
                                            7. Will I get a Job after the training?
                                        </button>
                                    </div>
                                    <div id="pc7" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <p>This 100% free of cost training has the ultimate objective of generating employment, freelancing and entrepreneurial opportunities among the youth of Pakistan. Since YouExcel has stronger industry linkages, we will be facilitating you for interviews and job placement towards the end of training. Ultimately, you are the owner of your destiny. You will have to grab all the opportunities provided and work hard to perform well at interviews to secure merit-based job placements and internships based on your performance and apply all the skills learned during the training.</p>
                                        </div>
                                    </div>
                                </div>

                                {{-- Q8 --}}
                                <div class="accordion-item border rounded shadow-sm mb-3">
                                    <div class="accordion-header" id="ph8">
                                        <button class="accordion-button collapsed fw-semibold" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#pc8">
                                            8. Where will I get certificate from?
                                        </button>
                                    </div>
                                    <div id="pc8" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Upon completion of training (attending classes regularly, submitting assignments, giving final exam and fulfilling any other requirements given by NAVTTC, Govt. of Pakistan), you will get certification from <strong>NAVTTC, Govt. of Pakistan</strong> which is highly credible and recognized internationally for employment and earning prospects.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                {{-- Q9 --}}
                                <div class="accordion-item border rounded shadow-sm mb-3">
                                    <div class="accordion-header" id="ph9">
                                        <button class="accordion-button collapsed fw-semibold" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#pc9">
                                            9. Any hidden charges we must pay in this training?
                                        </button>
                                    </div>
                                    <div id="pc9" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <ul>
                                                <li><strong>No!</strong> It's 100% free of cost training and international certification is also free of charges.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                {{-- Q10 --}}
                                <div class="accordion-item border rounded shadow-sm mb-3">
                                    <div class="accordion-header" id="ph10">
                                        <button class="accordion-button collapsed fw-semibold" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#pc10">
                                            10. Do you have any testimonials or success stories from past NAVTTC training?
                                        </button>
                                    </div>
                                    <div id="pc10" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Testimonial from participants: <a href="https://youtu.be/Q_UqyHImyqg?feature=shared" target="_blank">YouTube</a></li>
                                                <li>Testimonial from participants: <a href="https://www.facebook.com/share/v/15t4Q1CXRA/" target="_blank">Facebook</a></li>
                                                <li>Testimonial from participant: <a href="https://www.linkedin.com/feed/update/urn:li:activity:7325576805740920832" target="_blank">LinkedIn</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                {{-- Q11 --}}
                                <div class="accordion-item border rounded shadow-sm mb-3">
                                    <div class="accordion-header" id="ph11">
                                        <button class="accordion-button collapsed fw-semibold" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#pc11">
                                            11. Does YouExcel have an IT Lab, and will I have hands-on practical training?
                                        </button>
                                    </div>
                                    <div id="pc11" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Yes, indeed. YouExcel Training center is a purpose-built venue with access to projectors, laptops, air-conditioned classes, Wi-Fi access, dedicated security personnel and an overall professional ambience.</li>
                                                <li>To visit the YouExcel campus virtually, please visit: <a href="https://www.youtube.com/watch?v=yXST0QQBA4E" target="_blank">YouTube Campus Tour</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>{{-- /preAccordion --}}
                        </div>
                    </div>
                </div>{{-- /Pre-Registration --}}

                {{-- ══════════════════════════════════════
                     POST-REGISTRATION QUESTIONS
                ══════════════════════════════════════ --}}
                <div class="accordion-style1 wow fadeInUp mt-4" data-wow-delay="0.2s">
                    <h2 class="accordion-header" id="postHeading">
                        <button class="accordion-button collapsed fw-bold"
                                style="font-size:25px;background:#e7f1ff;margin-bottom:15px;"
                                type="button" data-bs-toggle="collapse"
                                data-bs-target="#postCollapse"
                                aria-expanded="false">
                            Post-Registration Questions
                        </button>
                    </h2>
                    <div id="postCollapse" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <div class="accordion" id="postAccordion">

                                {{-- Q13 --}}
                                <div class="accordion-item border rounded shadow-sm mb-3">
                                    <div class="accordion-header" id="qh13">
                                        <button class="accordion-button fw-semibold" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#qc13">
                                            13. I have registered in the NAVTTC training — What's the next step?
                                        </button>
                                    </div>
                                    <div id="qc13" class="accordion-collapse collapse show">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>There will be a National Testing Service (NTS) test physically conducted at YouExcel premises. We expect the test to happen tentatively in the <strong>last week of June 2026</strong>. However, the exact date and time are yet to be announced. You will be notified via call and message regarding the exact date and time. The test will most likely be conducted in morning or afternoon shifts. You must appear at the allocated time; no change will be allowed, otherwise you will be marked absent.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                {{-- Q14 --}}
                                <div class="accordion-item border rounded shadow-sm mb-3">
                                    <div class="accordion-header" id="qh14">
                                        <button class="accordion-button collapsed fw-semibold" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#qc14">
                                            14. What if I miss the test?
                                        </button>
                                    </div>
                                    <div id="qc14" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>The attendance is <strong>MUST</strong> in the NTS test and as such you will not qualify for training merit list if marked Absent.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                {{-- Q15 --}}
                                <div class="accordion-item border rounded shadow-sm mb-3">
                                    <div class="accordion-header" id="qh15">
                                        <button class="accordion-button collapsed fw-semibold" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#qc15">
                                            15. What is NTS test and how shall I prepare for it?
                                        </button>
                                    </div>
                                    <div id="qc15" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>The NTS test is usually a relatively easy test. It tests on your General Knowledge, basic Math and basic English which can be easily passed provided you attempt with an open mind.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                {{-- Q16 --}}
                                <div class="accordion-item border rounded shadow-sm mb-3">
                                    <div class="accordion-header" id="qh16">
                                        <button class="accordion-button collapsed fw-semibold" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#qc16">
                                            16. What will happen after NTS Test?
                                        </button>
                                    </div>
                                    <div id="qc16" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>The papers will be checked and those who pass the test with highest marks will be invited to commence the training through the Merit list.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                {{-- Q17 --}}
                                <div class="accordion-item border rounded shadow-sm mb-3">
                                    <div class="accordion-header" id="qh17">
                                        <button class="accordion-button collapsed fw-semibold" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#qc17">
                                            17. Do I need to bring anything on the test day?
                                        </button>
                                    </div>
                                    <div id="qc17" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Please bring your Original CNIC, copies of last education documents which may be checked. Although you may have submitted the Required Documents already at YouExcel. However, keeping qualification documents with yourself will be more helpful. You can keep a soft copy of record to show as well if it is inconvenient to bring originals, although as reminded it is preferable to bring your documents in hard copy.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                {{-- Q18 --}}
                                <div class="accordion-item border rounded shadow-sm mb-3">
                                    <div class="accordion-header" id="qh18">
                                        <button class="accordion-button collapsed fw-semibold" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#qc18">
                                            18. How long will the test paper last?
                                        </button>
                                    </div>
                                    <div id="qc18" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Based on the experience, you should leave a margin of <strong>3 to 4 hours</strong> for the test paper. However, the exact duration will be informed as we receive further information from the government department.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                {{-- Q19 --}}
                                <div class="accordion-item border rounded shadow-sm mb-3">
                                    <div class="accordion-header" id="qh19">
                                        <button class="accordion-button collapsed fw-semibold" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#qc19">
                                            19. Can my parent/relative accompany me on the NTS test day?
                                        </button>
                                    </div>
                                    <div id="qc19" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>We prefer not to have too much crowd on the test date as there is a limited space seating for visitors. However, if there is dire need for the parent or relative to be with you, in that case the visitor may be requested to be seated outside the test venue.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                {{-- Q20 --}}
                                <div class="accordion-item border rounded shadow-sm mb-3">
                                    <div class="accordion-header" id="qh20">
                                        <button class="accordion-button collapsed fw-semibold" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#qc20">
                                            20. Can I bring a Cell phone, calculator or any device on the NTS Test Day?
                                        </button>
                                    </div>
                                    <div id="qc20" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>It is strictly not allowed to carry a cell phone or any other device with yourself in the test room. There is no facility of keeping cell phones and therefore it is in your own favor not to carry a cell phone or any other device which may cause stress for yourself to keep it safe. YouExcel will not be responsible for your belongings, and you must ensure to take care of your belongings at all times during your stay for the test.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                {{-- Q21 --}}
                                <div class="accordion-item border rounded shadow-sm mb-3">
                                    <div class="accordion-header" id="qh21">
                                        <button class="accordion-button collapsed fw-semibold" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#qc21">
                                            21. What stationery shall I bring on the test day?
                                        </button>
                                    </div>
                                    <div id="qc21" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Please ensure to bring a <strong>pencil, rubber and sharpener</strong> with yourself on the test day.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                {{-- Q22 --}}
                                <div class="accordion-item border rounded shadow-sm mb-3">
                                    <div class="accordion-header" id="qh22">
                                        <button class="accordion-button collapsed fw-semibold" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#qc22">
                                            22. For any further information or assistance, where shall I contact?
                                        </button>
                                    </div>
                                    <div id="qc22" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>You can contact at <a href="tel:+923346699336"><strong>0334-6699336</strong></a> for further guidance.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>{{-- /postAccordion --}}
                        </div>
                    </div>
                </div>{{-- /Post-Registration --}}

                <div class="text-center mt-4">
                    <p>
                        Have more questions? Visit our
                        <a href="{{ url('contact') }}">Help Center</a>
                        or contact our
                        <a href="{{ url('contact') }}">Support Team</a>.
                    </p>
                </div>

            </div>{{-- /col-lg-7 --}}

            {{-- ── Right Sidebar ── --}}
            <div class="col-lg-4 col-xl-4">
                <div class="row">
                    <div class="col-md-7 col-lg-12">
                        <div class="img-box5 mega-hover wow fadeInUp" data-wow-delay="0.3s">
                            <div class="box-content text-center">
                                <h3 class="img-title mb-2">Free Training Registration</h3>
                                <p class="img-text mb-3">Apply now for the 100% Government Funded Skills of Tomorrow Program</p>
                                <a href="{{ route('enquiry.navttcsotb1') }}" class="vs-btn">Apply Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-12">
                        <div class="media-style5 wow fadeInUp mt-4" data-wow-delay="0.4s">
                            <span class="icon"><i class="fal fa-user-alt"></i></span>
                            <h5 class="media-title">Admission Helpdesk</h5>
                            <a class="phone text-white d-block" href="tel:+922137121738">
                                <i class="fal fa-phone-alt"></i> +92-21-37121738
                            </a>
                            <a class="phone text-white d-block" href="tel:+923346699336">
                                <i class="fal fa-phone-alt"></i> +92-334-6699336
                            </a>
                            <a class="mail d-block" href="mailto:info@youexceltraining.com">
                                <i class="fal fa-envelope"></i> info@youexceltraining.com
                            </a>
                        </div>
                    </div>
                </div>
            </div>{{-- /col-lg-4 --}}

        </div>{{-- /row --}}
    </div>{{-- /container --}}
</section>

{{-- Accordion fix: stopPropagation to prevent double Bootstrap 5 firing --}}
<script>
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll('.accordion-button').forEach(function (btn) {
        btn.addEventListener('click', function (e) {
            e.stopPropagation();
            var target = document.querySelector(this.getAttribute('data-bs-target'));
            if (!target) return;
            var bs = bootstrap.Collapse.getOrCreateInstance(target, { toggle: false });
            if (target.classList.contains('show')) {
                bs.hide(); this.classList.add('collapsed');
            } else {
                bs.show(); this.classList.remove('collapsed');
            }
        });
    });
});
</script>

@endsection
