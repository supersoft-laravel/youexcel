@extends('website.app', ['title' => 'Data Analytics using MS Fabrics'])

@section('content')
    <div class="breadcumb-wrapper " data-bg-src="">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                             <h1 class="breadcumb-title">Data Analytics using MS Fabrics :Crafting the Next Generation of Analytics solutions</h1>
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
    <section class="course-details pt-3 pb-5">
        <div class="container">
           <div class="row flex-row-reverse">
                <div class="col-lg-4">
                    <div class="course-meta-box wow fadeInUp ">
                        <table>
                            <tbody>
                               <tr class=" mb-4">
                                      
                        <td> <img src="https://youexceltraining.com/img/Yourexcel-img/data.jpg" /> </td>
                     </tr> 
                                
                            <tr>
                            <td ><i class="far fa-hourglass"></i> Duration:  &nbsp; 24 hours</td>
                           </tr>
                            <tr style="padding-top: 8px;">
                                <td>
                                <i class="far fa-suitcase"></i>Difficulty Level:  &nbsp;  Basic  to Intermediate</td>
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
                        <a href="{{$pdf}}" class="vs-btn"> Download Brochure Now</a><br/><br/>
                        
                          @endif
                        <a href="https://youexceltraining.com/enquiry-form/ms-fabric" class="vs-btn">Enquire Now</a><br/><br/>
                        <!--<a href="contact.html" class="vs-btn" style="padding:3.5px 40px; line-height:22px">Corporate <br> Training Consultancy</a>-->
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="course-category wow fadeInUp ">
                        <a href="#">Get Started Learning with </a>
                    </div>
                    <h2 class="course-title animate__animated animate__bounceInDown">Data Science and Analytics (MS Excel, Python, Power BI, Tableau and R Language) </h2>
                    <div class="course-review"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>( 5.0 )
                    </div>
                         <div class="mb-3">
                          <img src="https://youexceltraining.com/img/Yourexcel-img/dfmsb.jpg" /> 
                     </div>
                    <h5 class="border-title2 wow fadeInUp ">Program Overview</h5>
                    <p  class="wow fadeInDown pb-3">
                        The Microsoft Fabric Analytics training aims to equip participants with comprehensive knowledge and practical skills in leveraging data analytics within the Fabric platform. Participants will learn to harness the power of data to drive informed decision-making and optimize business processes. The course focuses on developing proficiency in data extraction, transformation, and visualization techniques using Fabric's analytical tools. By the end of the training, participants will be well-versed in deploying analytics solutions that enhance organizational efficiency and effectiveness.                <div class="col-lg-12">
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
                        <div class="accordion-item  wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingOne">
                                <button class="accordion-button justify-content-between" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span class="button-label">Module 1</span>
                                    Introduction to end-to-end analytics using Microsoft Fabric
                                                  <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            <li class="syllabustext">Explore end-to-end analytics with Microsoft Fabric</li>
                                            <li class="syllabustext">Data teams and Microsoft Fabric</li>
                                            <li class="syllabustext">Enable and use Microsoft Fabric</li>                                           
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
                                    Get started with lakehouses in Microsoft Fabric            
                                                      <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInUp ">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <li class="syllabustext">Explore the Microsoft Fabric Lakehouse</li>
                                            <li class="syllabustext">Work with Microsoft Fabric Lakehouses</li>
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
                                    Use Apache Spark in Microsoft Fabric
                                  <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInUp ">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            {{--                                            <h6 class="syllabustitle">Introduction</h6>--}}
                                            <li class="syllabustext">Prepare to use Apache Spark</li>
    <li class="syllabustext">Run Spark code</li>
    <li class="syllabustext">Work with data in a Spark dataframe</li>
    <li class="syllabustext">Work with data using Spark SQL</li>
    <li class="syllabustext">Visualize data in a Spark notebook</li>                                      
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
                                    <span class="button-label">Module 4</span>
                                    Work with Delta Lake tables in Microsoft Fabric
                                  <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <h6 class="syllabustitle">Introduction</h6>--}}
                                            <li class="syllabustext">Understand Delta Lake</li>
                                            <li class="syllabustext">Create delta tables</li>
                                            <li class="syllabustext">Work with delta tables in Spark</li>
                                            <li class="syllabustext">Use delta tables with streaming data</li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour1" aria-expanded="false"
                                        aria-controls="collapseFour1">
                                    <span class="button-label">Module 5</span>
                                    Ingest Data with Dataflows Gen2 in Microsoft Fabric
                                                                      <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour1" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <h6 class="syllabustitle">Introduction</h6>--}}
                                            <li class="syllabustext">Understand Dataflows (Gen2) in Microsoft Fabric</li>
                                            <li class="syllabustext">Explore Dataflows (Gen2) in Microsoft Fabric</li>
                                            <li class="syllabustext">Integrate Dataflows (Gen2) and Pipelines in Microsoft Fabric</li>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour2" aria-expanded="false"
                                        aria-controls="collapseFour2">
                                    <span class="button-label">Module 6</span>
                                    Get started with data warehouses in Microsoft Fabric
                                  <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour2" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <h6 class="syllabustitle">Introduction</h6>--}}
                                            <li class="syllabustext">Understand data warehouse fundamentals</li>
                                            <li class="syllabustext">Understand data warehouses in Fabric</li>
                                            <li class="syllabustext">Query and transform data</li>
                                            <li class="syllabustext">Prepare data for analysis and reporting</li>
                                            <li class="syllabustext">Secure and monitor your data warehouse</li>
                                        
                                            


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour5" aria-expanded="false"
                                        aria-controls="collapseFour5">
                                    <span class="button-label">Module 7</span>
                                    Administer Microsoft Fabric
                                  <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour2" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <h6 class="syllabustitle">Introduction</h6>--}}
                                            <li class="syllabustext">Understand the Fabric Architecture</li>
    <li class="syllabustext">Understand the Fabric administrator role</li>
    <li class="syllabustext">Manage Fabric security</li>
    <li class="syllabustext">Govern data in Fabric</li>
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
                 <h6 class="process-title">
                    Utilize Fabric's analytics capabilities to extract, transform, and analyze data.
        
        </h6>
               
               </div>
            </div>
           <div class="process-style1 d-flex align-items-center">
  <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <h6 class="process-title">
                    Develop and implement data-driven strategies to solve business challenges. </h6>
              
               </div>
            </div>
                <div class="process-style1 d-flex align-items-center">
        <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <h6 class="process-title">
                    Create compelling visualizations and reports to communicate insights effectively.                </h6>
            
               </div>
            </div>
            <div class="process-style1 d-flex align-items-center">
             <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <h6 class="process-title">
                    Apply advanced analytics techniques to derive actionable insights from data.</h6>
                 
               </div>
            </div>
            <div class="process-style1 d-flex align-items-center">
                <span class="process-number"><i class="fas fa-circle"></i></span>
                  <div class="process-content">
                     <h6 class="process-title">
                        
                        Optimize business processes through the application of analytics within Fabric.</h6>
                    
                  </div>
               </div>
               <div class="process-style1 d-flex align-items-center">
                <span class="process-number"><i class="fas fa-circle"></i></span>
                  <div class="process-content">
                     <h6 class="process-title">
                        
                        Collaborate effectively with teams to integrate analytics solutions into organizational workflows.</h6>
                    
                  </div>
               </div>
                 
              
         </div>
      
        
      </div>
   </div>
</section>

            <section class="pt-3 pb-3 background-image" >
   <div class="container">
      <div class="row">
         <div class="col-xl-12 m-auto">
            <div class="title-area   -animated" data--delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: ;">
             
              
               <!--<span class="sec-subtitle">IDEAL TUTOR FOR EVERYONE</span>-->
               <h5 class="border-title2">Salient Features</h5>
            </div>
         </div>
      </div>
      <div class="row   -animated" data--delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: ;">
         <div class="col-sm-6 col-xl-4">
            <div class="media-style9">
              
               <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-1.svg" alt="icon"></div>
              
               
               <p>Seamless end-to-end analytics</p>
            </div>
         </div>
         <div class="col-sm-6 col-xl-4">
            <div class="media-style9">
                    
               <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-2.svg" alt="icon"></div>
              
                 <p>  Comprehensive Microsoft Fabric coverage</p>
            </div>
         </div>
         <div class="col-sm-6 col-xl-4">
            <div class="media-style9">
                      
               <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-3.svg" alt="icon"></div>
               <p>Lakehouse architecture for unified data management.</p>
             
            </div>
         </div>    
         <div class="col-sm-6 col-xl-4">
            <div class="media-style9">
                      
               <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-3.svg" alt="icon"></div>
               <p> Applying Apache Spark within Microsoft Fabric</p>
             
            </div>
         </div>           
     </div>
   </div>
</section>
             <section class="pt-3 pb-3">
   <div class="container" >
      <div class="row gx-80 align-items-center">
          <div class="col-md-12" >
                      <h5 class="border-title2 pb-3">Target Audience</h5>
      </div>
         <div class="col-xl-10" >
               <div class="row gx-80 align-items-center">
            <div class="col-sm-6 col-xl-4">
                  <div class="process-style1 d-flex align-items-center">
              <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <p class="fs-md process-title">Data Analyst</P >
                  </div>
                        </div>

                        <div class="process-style1 d-flex align-items-center">
                            <span class="process-number"><i class="fas fa-circle"></i></span>
                             <div class="process-content">
                                <p class="fs-md process-title">Data Scientist</P >
                                </div>
                                      </div>

                        <div class="process-style1 d-flex align-items-center">
                            <span class="process-number"><i class="fas fa-circle"></i></span>
                             <div class="process-content">
                                <p class="fs-md process-title">  MIS Reporting Analyst</P >
                                </div>
                                      </div>

                               
            
                        
          </div>
          <div class="col-sm-6 col-xl-4">
        
                        
                      

                        <div class="process-style1 d-flex align-items-center">
                        <span class="process-number"><i class="fas fa-circle"></i></span>
                        <div class="process-content">
                        <p class="fs-md process-title"> Data Visualization Specialist  </p>
                        </div>
                        </div>
                        <div class="process-style1 d-flex align-items-center">
                        <span class="process-number"><i class="fas fa-circle"></i></span>
                        <div class="process-content">
                        <p class="fs-md process-title"> Business Intelligence Analyst  </p>
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
                  <p class="fs-md process-title ">Anyone can join</p>
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
                               <h5 class="border-title2 ">Trainer Profile</h5>
                </div>
                  <div class="col-lg-6" style="padding:0">
                     <div class="title-area mb-4">
            
                        <h5 class="sec-title mb-3 mb-lg-4" style="font-size: 30px;
         ">Tahir Ali</h5>
                        <p class="fs-md about-text pe-xl-5 me-xl-3">
                            
                            Tahir Ali is a highly motivated corporate trainer with experience in training small and large groups across diverse industries. Proven success in leveraging educational theories and methodologies to design, develop, and deliver successful training programs and integrate instructional technology to provide onsite and virtual training.

                            He is a Microsoft Certified Trainer, Microsoft Office Specialist Master, (Word 2013 & 2016), and Microsoft Office Specialist (PowerPoint 2013 & 2016), with an MBA in Accounting & Finance. Tahir also has a professional experience of over 16 years working with a large manufacturing group in the areas of Finance & IT.
         </p> 
         <br>
         <br><br>
         <p class="fs-md about-text pe-xl-5 me-xl-3">
            He delivers training on Advanced MS Excel, Dashboard Reporting with MS Excel using Power Query and Power Pivot, Data Analysis and Visualization using Power BI application.
        </p> 
                     </div>
                     <h5>Professional Certifications:</h5>
                     <div class="list-style1 vs-list mb-30">
                        <ul>
                          <li>Microsoft Certified Trainer</li>
             <li>Microsoft Office Specialist Master – 2013 & 2016</li>
             <li>Microsoft Excel Expert - 2013 & 2016</li>
             <li>Microsoft Word Expert - 2016</li>
             <li>Microsoft Office Specialist - 2013 & 2016</li>
                        </ul>
                     </div>
                 
                  </div>
                     <div class="col-lg-6" style="padding:0">
                     <div class="img-box3 mb-30">
                              <div class="img-1 mega-hover"><img class="" src="{{ asset('img/trainer/new/Tahir-Ali.png') }}" alt="About Img" style="
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
            <div class="container cta-style2" style="border: 3px solid #fbce4d;">
              <div class="row gx-100 gy-4">
             <div class="col-lg-12 col-xl-12 col-xxl-12 pt-2 pb-5 text-center">         
             <h2 class=" pt-1  text-white">Become smarter in just 24 hours </h2>
             <!--<p class=" pt-1 fs-md text-white">Enter your email id to get latest updates and  amazing discounts</p>-->
               <br>
               </div>
               </div>
                  <div class="row gx-100 gy-4 pb-5 justify-content-md-center ">
                <div class="col-lg-10 col-xl-10 col-xxl-10 pb-5 ">   
                <form class="newsletter-form d-flex flex-row justify-content-center align-items-center">
                   <a href="../Registration-Form/ms-fabric" class="vs-btn style2"><i class="far fa-angle-right"></i>GET REGISTERED HERE</a>
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
