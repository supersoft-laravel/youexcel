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
        padding: 80px 0;
    }
    
    .section-title h2 {
        font-weight: 700;
        color: #fff;
        font-size: 2.5rem;
        margin-bottom: 20px;
        position: relative;
    }
    
    .section-title h2::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: #ff9800;
        border-radius: 2px;
        margin-bottom: 10px;
    }
    
    .section-title p {
        font-size: 1.1rem;
        max-width: 700px;
        margin: 30px auto 0;
        color: #fff;
        opacity: 0.9;
    }
</style>

<section class="space-top space-extra-bottom section-header">
    <div class="bg-pattern"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="section-title text-center position-relative">
                    <h2>Frequently Asked Questions</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="space-top space-extra-bottom">
   <div class="container">
      <div class="row gx-50">
         <div class="col-lg-7 col-xl-8 mb-40 mb-lg-0">
            <div class="title-area wow fadeInUp text-center text-lg-start wow-animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
               <!--<span class="sec-subtitle">FREQUENTLY ASKED QUESTIONS</span>-->
               <h1 class="sec-title h1">Frequently Asked Questions</h1>
            </div>
            <div class="accordion-style1 wow fadeInUp wow-animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
               <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                     <div class="accordion-header" id="headingOne"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">What are the entry requirement for taking admission in YouExcel?</button></div>
                     <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <p>Kindly check Pre-Requisite section of each training program by choosing the course from <a href="https://youexceltraining.com/courses">Link Here</a> </p>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <div class="accordion-header" id="headingTwo"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">How can I register and transfer my fee?</button></div>
                     <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <p>To facilitate smooth payment transfer experience, we have bank transfer, Jazz Cash, Easypaisa or cash submission options available. You will receive payment details in an-auto-generated email upon registration <a href="https://youexceltraining.com/registration_form">Link Here</a></p>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item active">
                     <div class="accordion-header" id="headingThree"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">How to get access to YouExcel LMS? </button></div>
                     <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <p>A. Once you have completed the payment process and shared your payment screenshot at 0334-3016699. Please note, it may take upto 24 hours to provide access to LMS. Please watch simple tutorial steps to access the YouExcel LMS.</p>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <div class="accordion-header" id="headingFour"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">How long is the LMS Access provided for?</button></div>
                     <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <p>The LMS access is available for 12 months from Training Program start date. The recordings are available on online streaming basis only due to intellectual copyrights. The duration may vary for corporate customized trainings.</p>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <div class="accordion-header" id="headingFive"><button class="accordion-button collapsed" type="button"
                     data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">What modes do you offer for training sessions?</button></div>
                     <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <p>We offer On-Campus and Online via Zoom modes.</p>
                        </div>
                     </div>
                  </div>
                  
                  
                    <div class="accordion-item">
                     <div class="accordion-header" id="headingFivea"><button class="accordion-button collapsed"
                     type="button" data-bs-toggle="collapse" data-bs-target="#collapseFivea" aria-expanded="false" aria-controls="collapseFive">How about if I want to  attend combination of On-Campus and online session? Can I switch the mode of attending the classes during training?</button></div>
                     <div id="collapseFivea" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <p>Yes! You can. It is up to your choice whether you want to entirely attend sessions On-campus or online or a combination of both.</p>
                        </div>
                     </div>
                  </div>
                    <div class="accordion-item">
                     <div class="accordion-header" id="headingFives"><button class="accordion-button collapsed"
                     type="button" data-bs-toggle="collapse" data-bs-target="#collapseFives" aria-expanded="false" aria-controls="collapseFive">When will be the certificate issued after completion of the training?</button></div>
                     <div id="collapseFives" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <p>After the submission of final project, it may take up to 6 to 8 weeks to process the certificates as we have to get the certificates endorsed by external body. </p>
                        </div>
                     </div>
                  </div>
                    <div class="accordion-item">
                     <div class="accordion-header" id="headingFived"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFived" aria-expanded="false" aria-controls="collapseFive">Can I transfer to myself another batch?</button></div>
                     <div id="collapseFived" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <p>Although we encourage you to attend the same batch that you have been enrolled in. However, we do understand sometimes it becomes challenging to continue taking classes and you would want to rejoin later in another batch. Please mention the reason for the transfer at youexcel.connect@gmail.com and upon approval from YouExcel management, we may transfer you to another incoming batch. Terms and conditions apply which can be share upon enquiry at YouExcel customer service on 0334-3016699.</p>
                        </div>
                     </div>
                  </div>
                    <div class="accordion-item">
                     <div class="accordion-header" id="headingFivef"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFivef" aria-expanded="false" aria-controls="collapseFive">Is there any difference of fee, if I attend online sessions or on-campus sessions?</button></div>
                     <div id="collapseFivef" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <p>To make things simple, On-Campus training and Online fee is same.</p>
                        </div>
                     </div>
                  </div>
                    <div class="accordion-item">
                     <div class="accordion-header" id="headingFivee"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFivee" aria-expanded="false" aria-controls="collapseFive">Will I get a certificate of completion? If yes, from where?</button></div>
                     <div id="collapseFivee" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <p>Yes! We provide recognized Government endorsed Trade Testing Board certificates of completion.</p>
                        </div>
                     </div>
                  </div>
                    <div class="accordion-item">
                     <div class="accordion-header" id="headingFivew"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFivew" aria-expanded="false" aria-controls="collapseFive">Do you offer hands-on practice in IT Labs?</button></div>
                     <div id="collapseFivew" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <p>Yes! All are trainings are hand-on practical case study based. We do give you an opportunity to practice under trainer supervision.  </p>
                        </div>
                     </div>
                  </div>
                    <div class="accordion-item">
                     <div class="accordion-header" id="headingFiveq"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFiveq" aria-expanded="false" aria-controls="collapseFive">Where is your training venue located?</button></div>
                     <div id="collapseFiveq" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <p>We are currently based in Karachi at: Suite: 503-506, 5th Floor, Al Samad Tower, Block 13-B, Main University Road, Gulshan-e-Iqbal, Karachi, Pakistan.</p>
                        </div>
                     </div>
                  </div>
                    <div class="accordion-item">
                     <div class="accordion-header" id="headingFivec"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFivec" aria-expanded="false" aria-controls="collapseFive">Do you offer customized in-house and external corporate trainings?</button></div>
                     <div id="collapseFivec" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <p>Yes! We do provide customized in-house and external corporate trainings. Please contact our training consultants at 0331-3016699 or email at farhanq@youexceltraining.com for more information.</p>
                        </div>
                     </div>
                  </div>
                    <div class="accordion-item">
                     <div class="accordion-header" id="headingFive1"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive1" aria-expanded="false" aria-controls="collapseFive">Can you share any testimonials or success stories from past trainings?</button></div>
                     <div id="collapseFive1" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <p>We have plenty of success stories and testimonials mentioned on our official YouTube channel: https://youtube.com/@youexceltraining?feature=shared </p>
                        </div>
                     </div>
                  </div>
                    <div class="accordion-item">
                     <div class="accordion-header" id="headingFive2"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive2" aria-expanded="false" aria-controls="collapseFive">Who do I contact for support as I still can't get access on LMS?</button></div>
                     <div id="collapseFive2" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <p>Please contact on 0334-5669933 or email at youexcel.connect@gmail.com for facilitation.</p>
                        </div>
                     </div>
                  </div>
                    <div class="accordion-item">
                     <div class="accordion-header" id="headingFive3"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive3" aria-expanded="false" aria-controls="collapseFive">I have to change my registered email id on LMS and add a new email id. Who do I contact to make this change?</button></div>
                     <div id="collapseFive3" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <p>Please contact on 0334-5669933 or email at youexcel.connect@gmail.com for facilitation.</p>
                        </div>
                     </div>
                  </div>
                    <div class="accordion-item">
                     <div class="accordion-header" id="headingFive5"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive5" aria-expanded="false" aria-controls="collapseFive">Do I need to bring my own laptop for practice?</button></div>
                     <div id="collapseFive5" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <p>YouExcel is fully equipped with laptops at its venue center. However, you can bring your own laptop for practice as well.</p>
                        </div>
                     </div>
                  </div>
                    <div class="accordion-item">
                     <div class="accordion-header" id="headingFivej"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFivej" aria-expanded="false" aria-controls="collapseFive">Where do I park my car near your venue? Is there any designated parking space?</button></div>
                     <div id="collapseFivej" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <p>You can you park at a ground available few meters away from Samad Tower or there is parking available at the back of Samad Tower building or you</p>
                        </div>
                     </div>
                  </div>
                    <div class="accordion-item">
                     <div class="accordion-header" id="headingFivei"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFivei" aria-expanded="false" aria-controls="collapseFive">Please inform me the procedure to apply for scholarship?</button></div>
                     <div id="collapseFivei" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <p>Please email an application at scholarships@youexceltraining.com by mentioning your reasons for scholarship along with any supporting documentation which may support your application.</p>
                        </div>
                     </div>
                  </div>
                    <div class="accordion-item">
                     <div class="accordion-header" id="headingFiveu"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFiveu" aria-expanded="false" aria-controls="collapseFive">Will I be able to get internship opportunities?</button></div>
                     <div id="collapseFiveu" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <p>Yes, we do share from time to time internship opportunities in our WhatsApp groups.</p>
                        </div>
                     </div>
                  </div>
                    <div class="accordion-item">
                     <div class="accordion-header" id="headingFiveo"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFiveo" aria-expanded="false" aria-controls="collapseFive">What is lifetime WhatsApp support?</button></div>
                     <div id="collapseFiveo" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <p>To facilitate post-training, we have WhatsApp lifetime support available which means even if the training completes, the batch WhatsAppp groups are still active and you can ask any question to support you with your query.</p>
                        </div>
                     </div>
                  </div>
              
                  
               </div>
               <span class="support-link">Have more questions? Check our <a href="contact">Help center</a> or contact our <a href="contact">support team</a></span>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="row">
               <div class="col-md-7 col-lg-12">
                  <div class="img-box5 mega-hover wow fadeInUp wow-animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                     <!--<div class="img-1"><img class="w-100" src="{{asset('assets/img/about/about-2-4.jpg')}}" alt="About Img"></div>-->
                     <div class="box-content">
                        <h3 class="img-title">Online Course Registration</h3>
                        <p class="img-text">Top 20 courses among our 1350+ free online courses by experts</p>
                        <a href="contact" class="vs-btn">Apply Today</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-5 col-lg-12">
                  <div class="media-style5 wow fadeInUp wow-animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                     <span class="icon"><i class="fas fa-headset"></i></span>
                     <h5 class="media-title">Admission Process</h5>
                     <a class="phone text-white" tel:"+92-21-37121738"><i class="fal fa-phone-alt "></i>+92-21-37121738</a> <a class="mail" href="mailto:info@youexceltraining.com "><i class="fal fa-envelope"></i>info@youexceltraining.com </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection
