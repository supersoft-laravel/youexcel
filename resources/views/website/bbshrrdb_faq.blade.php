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
</style>

<section class="space-top space-extra-bottom section-header">
    <div class="bg-pattern"></div>
    <div class="container section-content text-center">
        <div class="section-title">
            <h2>Frequently Asked Questions</h2>
            <p>
                YouExcel now introducing 100% Free Skills Development Program for Youth in Sindh
            </p>
        </div>
    </div>
</section>

<section class="space-extra-bottom">
    <div class="container">
        <div class="row gx-50">
            <div class="col-lg-7 col-xl-8 mb-40 mb-lg-0">
                <div class="title-area wow fadeInUp text-center text-lg-start" data-wow-delay="0.1s">
                    <!--<h1 class="sec-title h1">Frequently Asked Questions</h1>-->
                    <p class="mt-3">
                        YouExcel now introduces the 
                        <strong>Skills Development Program for Youth in Sindh</strong>.
                    </p>
                    <p class="mt-2">
                        These FAQs are designed for <strong>100% Free of Cost Trainings</strong> being launched at YouExcel. 
                        We encourage you to read this complete page. For further questions, visit our office or call 
                        <a href="tel:+922137121738">021-37121738</a>, <a href="tel:+923346699336">0334-6699336</a>.
                    </p>
                </div>

                <div class="accordion-style1 wow fadeInUp mt-4" data-wow-delay="0.2s">
                    <div class="accordion" id="accordionExample">

                        <!-- Q1 -->
                        <div class="accordion-item border rounded shadow-sm mb-3">
                            <div class="accordion-header" id="heading1">
                                <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1">
                                    1. What are the Free of Cost courses available?
                                </button>
                            </div>
                            <div id="collapse1" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <table class="table table-bordered table-striped align-middle text-center">
                                        <thead class="table-light">
                                            <tr>
                                                <th>S. No.</th>
                                                <th>Course Name</th>
                                                <th>Duration</th>
                                                <th>Training Link</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Big Data Analytics with Power BI</td>
                                                <td>6 Months</td>
                                                <td><a href="{{ url('pdf/bbshrrdb/Big-Data-Analytics-with-Power-BI.pdf') }}" class="text-primary fw-semibold" download>Download</a></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Web Development with Python</td>
                                                <td>6 Months</td>
                                                <td><a href="{{ url('pdf/bbshrrdb/Web-Development-with-Python.pdf') }}" class="text-primary fw-semibold" download>Download</a></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Customer Services and Sales Representative</td>
                                                <td>5 Months</td>
                                                <td><a href="{{ url('pdf/bbshrrdb/Customer-Services-and-Sales-Representative.pdf') }}" class="text-primary fw-semibold" download>Download</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p class="mb-0"><em>*Note: Course outlines may be updated anytime by the Government Authority.</em></p>
                                </div>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion-item border rounded shadow-sm mb-3">
                            <div class="accordion-header" id="heading2">
                                <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2">
                                    2. What is the Eligibility Criteria for applying to the course?
                                </button>
                            </div>
                            <div id="collapse2" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <ul class="list-unstyled ms-2">
                                        <li>✅ Age limit between 18–35 years</li>
                                        <li>✅ Minimum Qualification: Intermediate</li>
                                        <li>✅ Must have a valid CNIC and domicile of Sindh</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion-item border rounded shadow-sm mb-3">
                            <div class="accordion-header" id="heading3">
                                <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3">
                                    3. What is the process of registration?
                                </button>
                            </div>
                            <div id="collapse3" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <ul>
                                        <li>📋 Fill the <a href="https://youexceltraining.com/enquiry-form-project-bbshrrdb" target="_blank">Enquiry Form</a>.</li>
                                        <li>🏫 Visit YouExcel today with required documents to register.</li>
                                        <li>📍 Location: <a href="https://maps.app.goo.gl/EDR1J7oucv12oi7X8" target="_blank">Click Here</a></li>
                                        <li>🕘 Timings: 9 AM to 8 PM | Open all 7 days</li>
                                        <li>☎️ Help Desk: 0334-6699336 | 0336-2586699</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion-item border rounded shadow-sm mb-3">
                            <div class="accordion-header" id="heading4">
                                <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4">
                                    4. What is the training mode, duration, and start date?
                                </button>
                            </div>
                            <div id="collapse4" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <ul>
                                        <li>🏢 Physical On-Campus hands-on practical classes (Duration: 5–6 Months)</li>
                                        <li>💻 Online option not available</li>
                                        <li>🗓️ Class start date will be announced soon</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion-item border rounded shadow-sm mb-3">
                            <div class="accordion-header" id="heading5">
                                <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5">
                                    5. What are the tentative Days and Timings of classes?
                                </button>
                            </div>
                            <div id="collapse5" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <p><strong>Days:</strong> Monday to Friday</p>
                                    <p><strong>Timings:</strong> 9:00 AM to 1:00 PM (Morning shift only)</p>
                                </div>
                            </div>
                        </div>

                        <!-- Q6 -->
                        <div class="accordion-item border rounded shadow-sm mb-3">
                            <div class="accordion-header" id="heading6">
                                <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6">
                                    6. What are the required documents?
                                </button>
                            </div>
                            <div id="collapse6" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <ul>
                                        <li>🎓 Last education degree/mark sheet photocopy</li>
                                        <li>🪪 Valid CNIC photocopy of candidate</li>
                                        <li>👨‍👩‍👧‍👦 Father/Guardian CNIC photocopy</li>
                                        <li>📸 Two recent photographs</li>
                                        <li>📍 Submit documents at: Suite 503–505, 5th Floor, Al Samad Tower, Gulshan-e-Iqbal, Karachi</li>
                                        <li><a href="https://maps.app.goo.gl/EDR1J7oucv12oi7X8" target="_blank">Google Maps Link</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Q7 -->
                        <div class="accordion-item border rounded shadow-sm mb-3">
                            <div class="accordion-header" id="heading7">
                                <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7">
                                    7. How to Apply for registration?
                                </button>
                            </div>
                            <div id="collapse7" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <p>Apply online via the <a href="https://youexceltraining.com/enquiry-form-project-bbshrrdb" target="_blank">Enquiry Form</a> or visit YouExcel with your documents to register. Contact our helpdesk for any assistance.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Q8 -->
                        <div class="accordion-item border rounded shadow-sm mb-3">
                            <div class="accordion-header" id="heading8">
                                <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8">
                                    8. Will I get a job after the training?
                                </button>
                            </div>
                            <div id="collapse8" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <p>
                                        The training is designed to create employment, freelancing, and entrepreneurial opportunities. 
                                        YouExcel will facilitate job placements and interviews, but your success depends on your performance, skills, and dedication.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Q9 -->
                        <div class="accordion-item border rounded shadow-sm mb-3">
                            <div class="accordion-header" id="heading9">
                                <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9">
                                    9. Where will I get the certificate from?
                                </button>
                            </div>
                            <div id="collapse9" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <p>
                                        Upon completion of training and fulfilling all requirements, you will receive certification from 
                                        <strong>YouExcel</strong> and the <strong>Trade Testing Board, Government of Sindh</strong>, 
                                        recognized nationally and internationally.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Q10 -->
                        <div class="accordion-item border rounded shadow-sm mb-3">
                            <div class="accordion-header" id="heading10">
                                <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10">
                                    10. Are there any hidden charges in this training?
                                </button>
                            </div>
                            <div id="collapse10" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <p>No! The training and certification are completely free of cost — 100% sponsored by the Government of Sindh.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Q11 -->
                        <div class="accordion-item border rounded shadow-sm mb-3">
                            <div class="accordion-header" id="heading11">
                                <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11">
                                    11. Do you have any testimonials or success stories?
                                </button>
                            </div>
                            <div id="collapse11" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <ul>
                                        <li><a href="https://youtu.be/Q_UqyHImyqg?feature=shared" target="_blank">YouTube Testimonial</a></li>
                                        <li><a href="https://www.facebook.com/share/v/15t4Q1CXRA/" target="_blank">Facebook Video</a></li>
                                        <li><a href="https://www.linkedin.com/feed/update/urn:li:activity:7325576805740920832" target="_blank">LinkedIn Post</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Q12 -->
                        <div class="accordion-item border rounded shadow-sm mb-3">
                            <div class="accordion-header" id="heading12">
                                <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse12">
                                    12. Does YouExcel have an IT Lab and hands-on practical training?
                                </button>
                            </div>
                            <div id="collapse12" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <p>
                                        Yes! YouExcel offers a fully equipped, purpose-built IT training lab with projectors, laptops, 
                                        air-conditioned classrooms, Wi-Fi, and a professional environment for practical, hands-on learning.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="text-center mt-4">
                        <p>Have more questions? Visit our <a href="{{ url('contact') }}">Help Center</a> or contact our <a href="{{ url('contact') }}">Support Team</a>.</p>
                    </div>
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
