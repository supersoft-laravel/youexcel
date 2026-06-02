@extends('website.app')

@section('content')

<style>
    .section-header {
        background: linear-gradient(135deg, #1a2a3a 0%, #2c3e50 100%) !important;
        color: white !important;
        padding: 180px 0 40px 0 !important;
        /*margin-top: 120px;*/
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
        background: linear-gradient(rgb(48 48 48 / 85%), rgba(0, 40, 104, 0.9)),
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
            <h2>YouExcel Career Connect – FAQs</h2>
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
                        YouExcel Career Connect – 
                        <strong>FAQs</strong>
                    </p>
                </div>

                <div class="accordion-style1 wow fadeInUp mt-4" data-wow-delay="0.2s">
                    <h3 class="fw-bold text-center mb-4">YouExcel Career Connect – FAQs</h3>
                    <div class="accordion" id="careerConnectFAQ">
                
                        <!-- Q1 -->
                        <div class="accordion-item border rounded shadow-sm mb-3">
                            <div class="accordion-header" id="heading1">
                                <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1">
                                    1. What is ‘YouExcel Career Connect’?
                                </button>
                            </div>
                            <div id="collapse1" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    YouExcel Career Connect is an initiative to connect students, alumni, and employers by providing access to job, internship, and freelancing opportunities.
                                </div>
                            </div>
                        </div>
                
                        <!-- Q2 -->
                        <div class="accordion-item border rounded shadow-sm mb-3">
                            <div class="accordion-header" id="heading2">
                                <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2">
                                    2. Who can register for Career Connect?
                                </button>
                            </div>
                            <div id="collapse2" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Current students, alumni of YouExcel, and employers looking for skilled candidates can register.
                                </div>
                            </div>
                        </div>
                
                        <!-- Q3 -->
                        <div class="accordion-item border rounded shadow-sm mb-3">
                            <div class="accordion-header" id="heading3">
                                <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3">
                                    3. How can I apply for job or freelancing opportunities?
                                </button>
                            </div>
                            <div id="collapse3" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Fill out the <a href="https://youexceltraining.com/career-connect/student_alumni" target="_blank" class="text-primary fw-semibold">Students/Alumni Form</a> on the YouExcel Career Connect page. 
                                    Our team will reach out with suitable opportunities.
                                </div>
                            </div>
                        </div>
                
                        <!-- Q4 -->
                        <div class="accordion-item border rounded shadow-sm mb-3">
                            <div class="accordion-header" id="heading4">
                                <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4">
                                    4. I’m an employer. How can I share my hiring requirements?
                                </button>
                            </div>
                            <div id="collapse4" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Simply fill out the <a href="https://youexceltraining.com/career-connect/employer_partnership" target="_blank" class="text-primary fw-semibold">Employer Form</a> to share your hiring needs. 
                                    Our team will provide shortlisted candidates accordingly.
                                </div>
                            </div>
                        </div>
                
                        <!-- Q5 -->
                        <div class="accordion-item border rounded shadow-sm mb-3">
                            <div class="accordion-header" id="heading5">
                                <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5">
                                    5. Does YouExcel provide career counselling or guidance sessions?
                                </button>
                            </div>
                            <div id="collapse5" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Yes! You can fill out the <a href="https://youexceltraining.com/career-connect/career_guidance" target="_blank" class="text-primary fw-semibold">Career Guidance Form</a> to schedule a counselling session with our career experts.
                                </div>
                            </div>
                        </div>
                
                        <!-- Q6 -->
                        <div class="accordion-item border rounded shadow-sm mb-3">
                            <div class="accordion-header" id="heading6">
                                <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6">
                                    6. Is there any fee for joining YouExcel Career Connect?
                                </button>
                            </div>
                            <div id="collapse6" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    No, registration for Career Connect is completely free.
                                </div>
                            </div>
                        </div>
                
                        <!-- Q7 -->
                        <div class="accordion-item border rounded shadow-sm mb-3">
                            <div class="accordion-header" id="heading7">
                                <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7">
                                    7. How will I know if I’m shortlisted for a job or session?
                                </button>
                            </div>
                            <div id="collapse7" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Once your form is submitted, our team will review your details and contact you through email, call, or WhatsApp.
                                </div>
                            </div>
                        </div>
                
                        <!-- Q8 -->
                        <div class="accordion-item border rounded shadow-sm mb-3">
                            <div class="accordion-header" id="heading8">
                                <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8">
                                    8. Can I update my information after submitting the form?
                                </button>
                            </div>
                            <div id="collapse8" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Yes, you can resubmit the form with updated information or contact our support team.
                                </div>
                            </div>
                        </div>
                
                        <!-- Q9 -->
                        <div class="accordion-item border rounded shadow-sm mb-3">
                            <div class="accordion-header" id="heading9">
                                <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9">
                                    9. Where can I find more updates about Career Connect?
                                </button>
                            </div>
                            <div id="collapse9" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    You can follow YouExcel’s official pages or stay active in the 
                                    <a href="https://chat.whatsapp.com/C7VCO3EzN9f19fOi8POHSl" target="_blank" class="text-primary fw-semibold">Career Connect WhatsApp group</a> 
                                    for the latest updates.
                                </div>
                            </div>
                        </div>
                
                        <!-- Q10 -->
                        <div class="accordion-item border rounded shadow-sm mb-3">
                            <div class="accordion-header" id="heading10">
                                <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10">
                                    10. Who can I contact for more information?
                                </button>
                            </div>
                            <div id="collapse10" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    You can reach us at 
                                    <a href="mailto:career.connect@youexceltraining.com" class="text-primary fw-semibold">career.connect@youexceltraining.com</a> 
                                    or visit 
                                    <a href="https://youexceltraining.com/career-connect" target="_blank" class="text-primary fw-semibold">YouExcel Career Connect</a>.
                                </div>
                            </div>
                        </div>
                
                    </div>
                
                    <div class="text-center mt-4">
                        <p>Still have questions? Visit our <a href="{{ url('contact') }}">Help Center</a> or contact our <a href="{{ url('contact') }}">Support Team</a>.</p>
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
