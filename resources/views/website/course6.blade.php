@extends('website.app')

@section('title', 'Certification in Information Technology in Karachi Pakistan')
@section('meta_description', 'Get your Certification in Information Technology in Karachi, Pakistan. Enhance your IT skills, boost your career, and gain industry-recognized qualifications.')
@section('meta_keywords', 'Certification in Information Technology in Karachi Pakistan')


@section('content')
    <div class="breadcumb-wrapper " data-bg-src="">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                             <h1 class="breadcumb-title">Code Your Way to Cool: Unlock the Secrets of IT with Our Certificate!</h1>
                {{--                <p class="breadcumb-text">Search over 200 individual encyclopedias and reference books.</p>--}}
                <!--<div class="breadcumb-menu-wrap">-->
                <!--    <ul class="breadcumb-menu">-->
                <!--        <li><a href="{{url("/")}}">Home</a></li>-->
                <!--        <li>Dashboard Reporting & Analysis with Power BI</li>-->
                <!--    </ul>-->
                <!--</div>-->
            </div>
        </div>
    </div> <!--==============================
      Course Area
  ==============================-->
    <section class="course-details pb-5 pt-3">
         <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-4">
                    <div class="course-meta-box wow fadeInUp ">
                        <table>
                            <tbody>
                                                              <tr class=" mb-4">
                                      
                        <td> <img src="https://youexceltraining.com/img/Yourexcel-img/cit.jpg" /> </td>
                     </tr> 
                                
                            <tr>
                            <td ><i class="far fa-hourglass"></i> Duration:  &nbsp; 72 hours</td>
                           </tr>
                            <tr style="padding-top: 8px;">
                                <td>
                                <i class="far fa-suitcase"></i>Difficulty Level:  &nbsp;  Beginner to Intermediate</td>
                             </tr>  
                                                         <tr>
                                <td><i class="far fa-suitcase"></i>This Training also includes:</td>
                                 </tr>    <tr>
                                <td>
                                    
                                    <li> <i class="fas fa-check"></i> Physical On-Campus and Online Training</li>
                                       <li> <i class="fas fa-check"></i> Hands-On Case Study based learning</li>
                                          <li> <i class="fas fa-check"></i> Expert Guidance</li>
                                             <li> <i class="fas fa-check"></i> Lifetime WhatsApp support</li>
                                                <li> <i class="fas fa-check"></i> Networking community access</li>
                                     <li> <i class="fas fa-check"></i> Government Endorsed Certificate</li>
                                     
                                   </td>
                            </tr>
                    
                            </tbody>
                        </table>
                          @if($pdf == "" )
                                      
                                      @else
                        <a href="{{$pdf}}" class="vs-btn">Download Brochure Now</a><br/><br/>
                        
                          @endif
                        <a href="https://youexceltraining.com/enquiry-form/cit" class="vs-btn">Enquire Now</a><br/><br/>
                        <!--<a href="contact.html" class="vs-btn" style="padding:3.5px 40px; line-height:22px">Corporate <br> Training Consultancy</a>-->
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="course-category wow fadeInUp ">
                       <a href="#">Get Started Learning with</a>
                    </div>
                    <h2 class="course-title animate__animated animate__bounceInDown">Certificate in Information Technology </h2>
                    <div class="course-review"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>( 5.0 )
                    </div>
                      <div class="mb-3">
                          <img src="https://youexceltraining.com/img/Yourexcel-img/citb.jpg" /> 
                     </div>
                    <h5 class="border-title2 wow fadeInUp ">Program Overview</h5>
                    <p  class="wow fadeInDown pb-3">Whether you're looking to enhance your office automation skills,
                         dive into the world of graphic design and video editing, explore web aesthetics,
                          or harness the power of AI in design,
                         Youexcel Institute has the right program for you. Join us and embark on a journey of growth and transformation from scratch as you acquire the
                             tools and expertise necessary to succeed in your chosen field. With experienced instructors, state-of-the-art facilities,
                              and a commitment to excellence,
                             Youexcel Institute is your gateway to a brighter future with a Government recognized certification.</p>
                    <h5 class="border-title2 wow fadeInUp ">Training Outline</h5>  </div>
                <div class="col-lg-12">
                    <!-- Buttons for Expand All and Close All -->
                    <div class="mb-4 d-flex gap-2">
                        <button class="vs-btn btn btn-primary d-flex align-items-center gap-2 px-4 py-2" onclick="expandAll()">
                            <i class="fas fa-plus-square"></i>
                            <span>Expand All</span>
                        </button>
                        <button class="vs-btn btn btn-secondary d-flex align-items-center gap-2 px-4 py-2" onclick="closeAll()">
                            <i class="fas fa-minus-square"></i>
                            <span>Close All</span>
                        </button>
                    </div>
                  <div class="accordion accordion-style4" id="accordionExample">
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingOne">
                                <button class="accordion-button justify-content-between" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span class="button-label">Module 1</span>
                                    Office Automation AI Integration
                                  <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            <li class="syllabustext">Introduction to Computing</li>
                                            <li class="syllabustext">MS Word with AI-Powered Writing and Collaboration</li>
                                            <li class="syllabustext">MS Excel with AI integration</li>
                                            <li class="syllabustext">Engaging MS PowerPoint Presentation with AI</li>
                                            <li class="syllabustext">AI-Enabled MS Outlook</li>
                                            <li class="syllabustext">Exploring how to integrate Chat GPT for document summarization, grammar checking, and content suggestions in MS Word</li>
                                            <li class="syllabustext">Google Office suite</li>
                                            

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingTwo">
                                <button class="accordion-button justify-content-between " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <span class="button-label">Module 2</span>
                                    Graphic Designing & Video Editing
                                  <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInUp ">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <li class="syllabustext">Grasping Graphic Design and Illustration Fundamentals</li>
                                            <li class="syllabustext">Perfecting Typography Design</li>
                                            <li class="syllabustext">Crafting Digital Art using Adobe Illustrator</li>
                                            <li class="syllabustext">Transitioning from Adobe Illustrator to CorelDraw</li>
                                            <li class="syllabustext">Mastering Digital Painting with Adobe Photoshop</li>
                                            <li class="syllabustext">Enhancing Photos with Adobe Lightroom</li>
                                            <li class="syllabustext">Designing for Print and Advertising</li>
                                            <li class="syllabustext">Page Layout with Adobe InDesign</li>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header d-flex" id="headingThree">
                                <button class="accordion-button justify-content-between " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                    <span class="button-label">Module 3</span>
                                    Web Aesthetics
                                  <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInUp ">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            {{--                                            <h6 class="syllabustitle">Introduction</h6>--}}
                                            <li class="syllabustext">Introduction to HTML structure</li>
                                            <li class="syllabustext">Adding text, images, and links</li>
                                            <li class="syllabustext">Styling HTML elements with CSS</li>
                                            <li class="syllabustext">JavaScript functions</li>
                                            <li class="syllabustext">Creating responsive layouts Website</li>
                                            <li class="syllabustext">Deploying a website to a hosting platform</li>
                                            <li class="syllabustext">Basics of domain registration and web hosting</li>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                    <span class="button-label">Module 4</span>Designing with AI
                                  <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <h6 class="syllabustitle">Introduction</h6>--}}
                                            <li class="syllabustext">Basics of AI in design</li>
                                            <li class="syllabustext">Setting up AI design tools</li>
                                            <li class="syllabustext">AI-enhanced graphics</li>
                                            <li class="syllabustext">AI for logos and illustrations</li>
                                            <li class="syllabustext">AI for responsive web design</li>
                                            <li class="syllabustext">Practical web design with AI</li>
                                            <li class="syllabustext">Effecting Video Editing with AI</li>
                                            


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
                                 <section class=" pb-5" id="div2">
   <div class="container">
      <div class=" text-left">
         <h5 class="border-title2">Learning Outcomes</h5>
      </div>
      <div class="row align-items-start">
         <div class="col-md-6 col-lg process-inner1 order-2 order-lg-1">
              <div class="process-style1 d-flex align-items-center">
               <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                 <h6 class="process-title">Our programs are designed to equip you with practical skills and knowledge that are in high demand in today's job market</h6>
               
               </div>
            </div>
           <div class="process-style1 d-flex align-items-center">
  <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <h6 class="process-title">We stay up-to-date with industry trends and standards to ensure that our curriculum reflects the latest developments in each field</h6>
              
               </div>
            </div>
                <div class="process-style1 d-flex align-items-center">
        <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <h6 class="process-title">They'll provide guidance, mentorship, and real-world insights to help you succeed.</h6>
            
               </div>
            </div>
            <div class="process-style1 d-flex align-items-center">
             <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <h6 class="process-title">Our focus is on practical, real-world application</h6>
                 
               </div>
            </div>
            
              <div class="process-style1 d-flex align-items-center">
             <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <h6 class="process-title">Connect with fellow students, instructors, and industry professionals, expanding your network and opening doors to new opportunities</h6>
                 
               </div>
            </div>
            
             
                
         </div>
      
        
      </div>
   </div>
</section>

            <section class=" pb-3 background-image" >
   <div class="container">
      <div class="row">
         <div class="col-xl-12 m-auto">
            <div class="title-area   -animated" data--delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: ;">
             
              
               <!--<span class="sec-subtitle">IDEAL TUTOR FOR EVERYONE</span>-->
               <h5 class="border-title2">Features and Benefits</h5>
            </div>
         </div>
      </div>
      <div class="row   -animated" data--delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: ;">
         <div class="col-sm-6 col-xl-4">
            <div class="media-style9">
              
               <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-1.svg" alt="icon"></div>
              
               
               <p>MS Word processing application for creating and editing documents</li>
            </div>
         </div>
         <div class="col-sm-6 col-xl-4">
            <div class="media-style9">
                    
               <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-2.svg" alt="icon"></div>
              
                 <p>MS Excel spreadsheet application for data analysis, calculations, and visualization</li>
            </div>
         </div>
         <div class="col-sm-6 col-xl-4">
            <div class="media-style9">
                      
               <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-3.svg" alt="icon"></div>
               <p>MS PowerPoint presentation software for creating slideshows</li>
             
            </div>
         </div>
         <div class="col-sm-6 col-xl-4">
            <div class="media-style9">
                        
               <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-4.svg" alt="icon"></div>
                 <p>MS Outlook for email and personal information management application</li>
               
            </div>
         </div>
   
       <div class="col-sm-6 col-xl-4">
            <div class="media-style9">
              
               <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-1.svg" alt="icon"></div>
              
               
               <p>Creative software tools for professional visual communication</li>
            </div>
         </div>
         <div class="col-sm-6 col-xl-4">
            <div class="media-style9">
                    
               <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-2.svg" alt="icon"></div>
              
                 <p>Layering and editing capabilities for well-designed marketing and branding</li>
            </div>
         </div>
         <div class="col-sm-6 col-xl-4">
            <div class="media-style9">
                      
               <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-3.svg" alt="icon"></div>
               <p>Responsive design for enhanced user experience on the website</li>
             
            </div>
         </div>
         <div class="col-sm-6 col-xl-4">
            <div class="media-style9">
                        
               <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-4.svg" alt="icon"></div>
                 <p>User-interface design for brand identity and consistency</li>
               
            </div>
         </div>
      </div>
      
      
   </div>
</section>
        

                  
              <section class="pt-3 pb-3">
   <div class="container">
      <div class="row gx-80 align-items-center">
                  <div class="col-md-12" >
                      <h5 class="border-title2 pb-3">Target Audience</h5>
      </div>
         <div class="col-lg-12">
              <div class="title-area mb-4">
                 <div class="process-style1 d-flex align-items-center">
              <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <p class="fs-md process-title ">Anyone interested in the field of Information Technology
 </li>
                 
                  </div>
                        </div>
              
                  </div>
         
              </div>
          </div>
    </div>
        </section>    
                 <section class="pb-3">
   <div class="container" >
      <div class="row gx-80 align-items-center">
          <div class="col-xl-12" >
                      <h5 class="border-title2 pb-2">Prerequisites</h5>
      </div>
         <div class="col-xl-12" >
            <div class="title-area mb-4">
                 <div class="process-style1 d-flex align-items-center">
              <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <p class="fs-md process-title ">Basic computer literacy, familiarity with Windows operating system
 </p>
                 
                  </div>
                        </div>
              
                  </div>
              </div>
          </div>
    </div>
        </section>      
 <section class="pb-3">
   <div class="container">
      <div class="row">
            <div class="col-xl-12" >
                      <h5 class="border-title2 pb-3">Trainer Profile</h5>
       </div>
         <div class="col-lg-6" style="padding:0">
            <div class="title-area mb-4">
   
               <h5 class="sec-title mb-3 mb-lg-4" style="    font-size: 30px;
">Dinash Malaya  </h5>
               <p class="about-text pe-xl-5 me-xl-3 fs-md">Dinash Malaya is a highly motivated corporate Trainer with experience in training small and large groups across diverse industries. Proven success with over 11 years of professional experience of industry in leveraging educational theories and methodologies to design, develop, and deliver successful training programs and integrate instructional technology to provide onsite and virtual training.</p>
            </div>
                <h5>Professional Certifications:</h5>
            <div class="list-style1 vs-list mb-30">
               <ul>
                 <li>Microsoft Certified Trainer</li>
    <li>Microsoft Office Specialist Master – 2013 &amp; 2016</li>
    <li>Microsoft Excel Expert - 2013 &amp; 2016</li>
    <li>Microsoft Word Expert - 2016</li>
    <li>Microsoft Office Specialist - 2013 &amp; 2016</li>
               </ul>
            </div>
         </div>
            <div class="col-lg-6">
            <div class="img-box3 mb-30">
               <div class="img-1 mega-hover"><img class="" src="https://youexceltraining.com/img/trainer/new/Danish-Malaya.png" alt="About Img" style="
    width: 502px;
    border-radius: 50px;
"></div>
               <div class="shape-dotted jump"></div>
            </div>
         </div>
      </div>
   </div>
</section>     
                  
   
  <section class="pb-5">
        <div class="shape-mockup jump d-none d-xxl-block" data-right="10%" data-bottom="12%">
            <div class="shape-dotted"></div>
        </div>
        <div class="shape-mockup rotate d-none d-xxl-block" data-right="48%" data-top="17%">
            <div class="vs-polygon1"></div>
        </div>
        <div class="shape-mockup jump-reverse d-none d-xxl-block" data-right="51%" data-top="21%">
            <div class="vs-rounded1"></div>
        </div>
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-12 col-xxl-5">
                    <div class="title-area wow fadeInUp" data-wow-delay="0.3s">
                     
                        <h2 class="sec-title h1">REAL PEOPLE REAL TESTIMONIALS</h2>
                        
                    </div>

<div class="elfsight-app-180aecff-7be3-49b6-9603-28a80d740006">@include('website.sections.review-section', ['activeTab' => 'general'])</div>
                    
                
            </div>
        </div>
    </section>
    
  
    
    <section class="pb-5">
           <div class="container pb-3">
               
        
                </div>
                          <div class="container cta-style2" style="
    border: 3px solid #fbce4d;
">
              <div class=" row gx-100 gy-4  ">
             <div class="col-lg-12 col-xl-12 col-xxl-12 pt-2 pb-5 text-center">         
               
             <h2 class=" pt-1  text-white">Become smarter in just 72 hours </h2>
             <!--<p class=" pt-1 fs-md text-white">Enter your email id to get latest updates and  amazing discounts</p>-->
               <br>
               
               </div>
               </div>
                  <div class="row gx-100 gy-4 pb-5 justify-content-md-center ">
               
                <div class="col-lg-10 col-xl-10 col-xxl-10 pb-5 ">   
                
                <form class="newsletter-form d-flex flex-row justify-content-center align-items-center">
                   <a href="../Registration-Form/CIT" class="vs-btn style2"><i class="far fa-angle-right"></i>GET REGISTERED HERE</a>
                    <!--<button type="submit" class="vs-btn mx-3">GET REGISTERED HERE</button>-->
                    </form>
                </div>
               
                  </div>
                  </div>
               
        </section>
    
    <div class="modal bd-example-modal-lg" id="myModal"  style="z-index:99 " >
  <div class="modal-dialog" style="width:100% ; background-color: #f7a530;" role="document">
    <div class="modal-content"style="
    background-color: transparent;
" >
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
                            <input type="text" name="name" id="name" placeholder="Complete Name"required >
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
     <input name="city" placeholder="Your City"                                            required=""
                                               type="text">
                        </div>
                        </div>
                       </div>
                           <div class="form-group">
                               
                         <input  name="comments" placeholder="Comments" type="text">
                        </div>
                         <div class="captcha d-flex item-center mb-4">
                                            <div class="spinner d-flex item-center">
                                                <label class="mb-0 mt-3 mx-3">
                                                    
                                                    <input type="checkbox"

                                                           onclick="$(this).attr('disabled','disabled');"
                                                           required>
                                                    <span class="checkmark"><span>&nbsp;</span></span>
                                                </label>
                                            </div>
                                            <div class="text1">
                                                I'm not a robot
                                            </div>
                                            <div class="logo">
                                                
                                                <img src="https://youexceltraining.com/img/Yourexcel-img/captcha.PNG"/>
                                                <p>reCAPTCHA</p>
                                                 <small>Privacy - Terms</small> 
                                            </div>
                                        </div>
                        
                         <button id="spin-btn"  class="vs-btn">Spin  the wheel</button>
                         
                      <div class="shape-mockup rotate d-none d-xxl-block" data-right="19%" data-bottom="8%">
            <div class="vs-polygon2"></div>
        </div>    <div class="shape-mockup jump-reverse d-none d-xxl-block" data-right="11%" data-bottom="8%">
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
