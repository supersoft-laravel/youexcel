@extends('website.app')

@section('title', 'Microsoft Excel Mastery Course in Karachi Pakistan')
@section('meta_description', 'Enroll in the Microsoft Excel Mastery Course in Karachi, Pakistan. Learn advanced Excel skills to boost your career with expert training and hands-on experience.')
@section('meta_keywords', 'Microsoft Excel Mastery Course in Karachi Pakistan')

@section('content')
    <div class="breadcumb-wrapper " data-bg-src="">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                             <h1 class="breadcumb-title">Work Smarter, Not Harder - Let Excel Automation Features work for You: Learn Excel Now!</h1>
                
            </div>
        </div>
    </div> <!--==============================
      Course Area
  ==============================-->
    <section class="course-details pt-4 pb-5">
        <!--<div class="container">-->
        <!--    <div class="mega-hover course-img   ">    {{-- <img src="https://youexceltraining.com/public/v2/public/assets/img/course-details-2-1.jpg" alt="girl">-->
        <!--    </div> --}}-->
        <!--    <video width="1294" height="610" autoplay muted loop style="display:none">-->
        <!--        <source src="https://upworkmasterclass.io/wp-content/uploads/2023/12/Testimonial-Video-Updated.mp4"-->
        <!--            type="video/mp4">-->
        <!--        <source src="https://upworkmasterclass.io/wp-content/uploads/2023/12/Testimonial-Video-Updated.mp4"-->
        <!--            type="video/ogg">-->
    
        <!--    </video>-->
        <!--    </div>-->
         <div class="container">
            <div class="row flex-row-reverse ">
                <div class="col-lg-4">
                    <div class="course-meta-box   ">
                        <table>
                            <tbody>
                                  <tr class=" mb-4">
                                      
                      <td> <img src="https://youexceltraining.com/img/Yourexcel-img/em.jpg" /> </td>
                     </tr> 
                                
                            <tr>
                            <td ><i class="far fa-hourglass"></i> Duration:  &nbsp; 12 hours</td>
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
                            <!--<tr>-->
                            <!--    <th><i class="far fa-suitcase"></i>Certificate of Completion:</th>-->
                            <!--    <td>SomeText</td>-->
                            <!--</tr>-->
{{--                            <tr>--}}
{{--                                <th><i class="far fa-clock"></i>Pre-Requisite:</th>--}}
{{--                                <td>Intermediate level<br/> of MS Excel skills<br/>--}}
{{--                                    Hands on knowledge of pivot tables</td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <th><i class="far fa-user-alt"></i>Student:</th>--}}
{{--                                <td>204 Students</td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <th><i class="far fa-suitcase"></i>Course Type:</th>--}}
{{--                                <td>100% online</td>--}}
{{--                            </tr>--}}
                            </tbody>
                        </table>
                          @if($pdf == "" )
                                      
                                      @else
                        <a href="{{$pdf}}" class="vs-btn"> Download Brochure Now</a><br/><br/>
                        
                          @endif
                        <a href="https://youexceltraining.com/enquiry-form/advanced-ms-excel" class="vs-btn">Enquire Now</a><br/><br/>
                        <!--<a href="contact.html" class="vs-btn" style="padding:3.5px 40px; line-height:22px">Corporate <br> Training Consultancy</a>-->
                    </div>


                  



                </div>
                <div class="col-lg-8">
                    <div class="course-category   ">
                             <a href="#">Get Started Learning with  </a>
                    </div>
                    <h2 class="course-title animate__animated animate__bounceInDown">Microsoft Excel Mastery </h2>
                    <div class="course-review"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-stroke"></i>
( 4.8 )
                    </div>
                    
                     <div class="mb-3">
                          <img src="https://youexceltraining.com/img/Yourexcel-img/emb.jpg" /> 
                     </div>
                    <h5 class="border-title2   ">Overview</h5>
                    <p  class="pb-3 ">This comprehensive Microsoft Excel course is designed to take you from a beginner to an intermediate level user.
                    Whether you're new to Excel or looking to enhance your skills, this course will cover essential concepts, 
                    functions, and features to help you become proficient in spreadsheet management and data analysis. Whether you want to organize data, apply data management tool or apply calculations for efficiently analyzing through Graphs and Charts, this training has got you covered. Learn the most in-demand skill required in almost any industry you can think of and become a specialist in it.</p> 

<h5 class="border-title2 pt-3  ">Training Outline</h5>
     </div>


 <div class="row flex-row-reverse" style="padding:0">
     <!--<div class="col-lg-4">-->
  
     
     
     
     <!--</div>-->
      <div class="col-lg-12" style="padding:0">
     
     
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

                    <div class="accordion accordion-style4" id="accordionExample" >
                        <div class="accordion-item    "  >
                            <div class="accordion-header" style="    display: flex;    justify-content: space-between; item-align:center">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne"  style="  justify-content: space-between;" aria-expanded="true" aria-controls="collapseOne">
                                    <span class="button-label">Module 1</span>
                             Excel Fundamentals <i class="fas fa-angle-down"></i>
                                </button> 
                            </div>
                            <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body  ">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                        <li class="syllabustext">Overview of Excel interface</li >
<li class="syllabustext">Understanding workbooks, worksheets, and cells</li >
<li class="syllabustext">Navigating and customizing the ribbon</li >
<li class="syllabustext">Quick analysis tools</li >
<li class="syllabustext">Customizing the Quick Access Toolbar</li >
<li class="syllabustext">Understanding cells, rows, columns, and ranges</li >
<li class="syllabustext">Insert / Delete Rows and columns</li >
<li class="syllabustext">Cells sizing</li >
<li class="syllabustext">Editing Features</li >
<li class="syllabustext">Wrap Text, Merge Cells and other alignment techniques</li >

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item   ">
                            <div class="accordion-header" id="headingTwo">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"  style="  justify-content: space-between;"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <span class="button-label">Module 2</span>
                                   Data Entry, Table Creation and Formatting <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body   ">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                       <li class="syllabustext">Entering data and labels</li >
<li class="syllabustext">Basic formatting (font, color, alignment)</li >
<li class="syllabustext">Format Painter use</li >
<li class="syllabustext">Cell styles and themes</li >
<li class="syllabustext">Paste Special & other pasting options</li >
<li class="syllabustext">Table Creation for data analyzation and filtration</li >
<li class="syllabustext">Time-saving keyboard shortcuts</li >


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item ">
                            <div class="accordion-header" id="headingThree">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"  style="  justify-content: space-between;"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                    <span class="button-label">Module 3</span>
                                  Basic Excel Formulae and Functions <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body   ">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            {{--                                            <p class="fs-md syllabustitle">Introduction</p>--}}
                                      <li class="syllabustext">Introduction to Excel formulae and functions</li >
<li class="syllabustext">Arithmetic operations and basic mathematical functions</li >
<li class="syllabustext">Using SUM, AVERAGE, COUNT, and other common formulae</li >
<li class="syllabustext">Relational and logical operators (>, <, =, <>, >=, <=, AND, OR)</li >
<li class="syllabustext">Using AutoSum and AutoFill</li >
<li class="syllabustext">Cell referencing (relative, absolute, mixed)</li >
<li class="syllabustext">Sorting and filtering data</li >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item   ">
                            <div class="accordion-header" id="headingFour">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"  style="  justify-content: space-between;"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                    <span class="button-label">Module 4</span>Data Management, Collaboration and Protection <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body  ">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <p class="fs-md syllabustitle">Introduction</p>--}}
                                          <li class="syllabustext">Data validation and drop-down lists</li >
<li class="syllabustext">Managing and removing duplicates</li >
<li class="syllabustext">Linking data between sheets and workbooks</li >
<li class="syllabustext">Sharing and collaborating on workbooks</li >
<li class="syllabustext">Protecting worksheets and workbooks</li >
<li class="syllabustext">Track changes and comments</li >


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                           <div class="accordion-item   ">
                            <div class="accordion-header" id="headingFour">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"  style="  justify-content: space-between;"
                                        data-bs-target="#collapseFour1" aria-expanded="false"
                                        aria-controls="collapseFour1">
                                    <span class="button-label">Module 5</span>Advanced Formatting & Styling Charts and Graphs <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="collapseFour1" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body  ">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <p class="fs-md syllabustitle">Introduction</p>--}}
                                       <li class="syllabustext">Conditional formatting for data visualization</li >
<li class="syllabustext">Customizing and applying templates and illustrations</li >
<li class="syllabustext">Creating and customizing charts</li >
<li class="syllabustext">Using different chart types (bar, line, pie, etc.)</li >
<li class="syllabustext">Adding trend lines and data labels</li >
<li class="syllabustext">Creating dynamic charts with named ranges</li >

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                               <div class="accordion-item   ">
                            <div class="accordion-header" id="headingFour">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"  style="  justify-content: space-between;"
                                        data-bs-target="#collapseFour2" aria-expanded="false"
                                        aria-controls="collapseFour2">
                                    <span class="button-label">Module 6</span>Advanced Excel Functions and Formulae with Application <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="collapseFour2" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body  ">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <p class="fs-md syllabustitle">Introduction</p>--}}
                                     <li class="syllabustext">Logical functions with IF condition (IF, AND, OR)</li >
<li class="syllabustext">SUMIF, COUNTIF, AVERAGEIF, IFERROR</li >


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                               <div class="accordion-item   ">
                            <div class="accordion-header" id="headingFour">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"  style="  justify-content: space-between;"
                                        data-bs-target="#collapseFour3" aria-expanded="false"
                                        aria-controls="collapseFour3">
                                    <span class="button-label">Module 7</span>Other Advance Excel Formulae with Application <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="collapseFour3" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body  ">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <p class="fs-md syllabustitle">Introduction</p>--}}
                                    <li class="syllabustext">Lookup functions (VLOOKUP, HLOOKUP, MATCH)</li >
<li class="syllabustext">CONCATENATE, TEXTJOIN</li >

    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                               <div class="accordion-item   ">
                            <div class="accordion-header" id="headingFour" >
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"  style="  justify-content: space-between;"
                                        data-bs-target="#collapseFour4" aria-expanded="false"
                                        aria-controls="collapseFour4">
                                    <span class="button-label">Module 8</span>PivotTables and Pivot Charts <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="collapseFour4" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body  ">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <p class="fs-md syllabustitle">Introduction</p>--}}
                  <li class="syllabustext">Introduction to PivotTables for data summarization</li >
<li class="syllabustext">Creating PivotTables from different data sources</li >
<li class="syllabustext">Customizing and formatting PivotTables</li >
<li class="syllabustext">Introduction to Pivot Charts for visual representation of data</li >


                                        </div>
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

<section class=" pb-3" id="div2">
   <div class="container"
      >
      <div class=" text-left">
     

         <h5 class="border-title2">Learning Outcomes</h5>
      </div>
      <div class="row align-items-start">
         <div class="col-md-6 col-lg process-inner1 order-2 order-lg-1">
              <div class="process-style1 d-flex align-items-center">
               <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                 <p class="fs-md process-title">Build a solid foundation in understanding the Excel interface</p>
               
               </div>
            </div>
           <div class="process-style1 d-flex align-items-center">
  <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <p class="fs-md process-title">Learn formulas and functions to become a professional MS Excel user</p>
              
               </div>
            </div>
                <div class="process-style1 d-flex align-items-center">
        <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <p class="fs-md process-title">Apply shortcut keys to efficiently use MS Excel and save precious reporting time</p>
            
               </div>
            </div>
            <div class="process-style1 d-flex align-items-center">
             <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <p class="fs-md process-title">Build charts and graphs to analyze data and make meaningful decisions</p>
                 
               </div>
            </div>
         </div>
         <!--<div class="col-lg-5 order-3 order-lg-2 mb-30 mb-md-5 mb-lg-0">-->
         <!--  <div class="img-box3 mb-30">-->
         <!--      <div class="img-1 mega-hover"><img src="https://html.vecurosoft.com/educino/demo/assets/img/about/about-2-1.png" alt="banner"></div>-->
         <!--      <div class="shape-dotted jump"></div>-->
         <!--   </div>-->
           
            
         <!--</div>-->
        
      </div>
   </div>
</section>
<section class=" pt-3 pb-3 background-image" >
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
                <div class="d-flex justify-content-end">
                </div>
               <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-1.svg" alt="icon"></div>
               <h5 class="media-title">Spreadsheet Organization</h5>
               
               <p class="fs-md" >Create, manage, and organize data in rows and columns efficiently<p>
            </div>
         </div>
         <div class="col-sm-6 col-xl-4">
            <div class="media-style9">
                    <div class="d-flex justify-content-end">
                </div>
               <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-2.svg" alt="icon"></div>
               <h5 class="media-title">Formulas and Functions</h5>
               <p class="fs-md" >Use built-in formulas to automate data calculation for reporting</p>
            </div>
         </div>
         <div class="col-sm-6 col-xl-4">
            <div class="media-style9">
                        <div class="d-flex justify-content-end">
                </div>
               <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-3.svg" alt="icon"></div>
               <h5 class="media-title">Basic Data Analysis Tools</h5>
             <p class="fs-md" >Use built-in formulas to automate data calculation for reporting</p>
            </div>
         </div>
         <div class="col-sm-6 col-xl-4">
            <div class="media-style9">
                        <div class="d-flex justify-content-end">
                </div>
               <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-4.svg" alt="icon"></div>
               <h5 class="media-title">Conditional Formatting </h5>  
               <p class="fs-md" >Apply formatting rules based on cell values, making it easy to highlight important data points.</p>
            </div>
         </div>
         <div class="col-sm-6 col-xl-4">
            <div class="media-style9">
                        <div class="d-flex justify-content-end">
                </div>
               <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-5.svg" alt="icon"></div>
               <h5 class="media-title">Data Visualization</h5>
              <p class="fs-md" >Visualize data patterns and trends by creating various charts, graphs and Dashboards</p>
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
                  <p class="fs-md process-title">Sales Analysis</p>
                 
                  </div>
                        </div>
                        
                          <div class="process-style1 d-flex align-items-center">
              <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <p class="fs-md process-title"> Marketing Analysis </p>
                 
                  </div>
                        </div>
                          <div class="process-style1 d-flex align-items-center">
              <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <p class="fs-md process-title"> Business Analysts </p>
                 
                  </div>
                        </div>  <div class="process-style1 d-flex align-items-center">
              <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <p class="fs-md process-title"> Finance & Accounts</p>
                 
                  </div>
                        </div>
          </div>
          <div class="col-sm-6 col-xl-4">
              <div class="process-style1 d-flex align-items-center">
              <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <p class="fs-md process-title">Project Managers </p>
                 
                  </div>
                        </div>
                        
                          <div class="process-style1 d-flex align-items-center">
              <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <p class="fs-md process-title">Operations and Logistics Manager</p>
                 
                  </div>
                        </div>
                          <div class="process-style1 d-flex align-items-center">
              <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <p class="fs-md process-title"> HR Professionals</p>
                 
                  </div>
                        </div>  <div class="process-style1 d-flex align-items-center">
              <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <p class="fs-md process-title"> IT Professionals</p>
                 
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
                      <h5 class="border-title2 ">Trainer Profile</h5>
       </div>
         <div class="col-lg-6" style="padding:0">
            <div class="title-area mb-4">
   
               <h5 class="sec-title mb-3 mb-lg-4" style="font-size: 30px;
">Farhan Shahid Qazi</h5>
               <p class="fs-md about-text pe-xl-5 me-xl-3">Farhan Shahid Qazi is Founder and Chief Visionary Officer at YouExcel. He is a member of Association of Chartered Certified Accountant (ACCA) by profession. He has graduated in Applied Accounting from Oxford Brookes University, UK. He has also completed ‘Train the Trainer’ certificate from Association of Talent Development, USA.

</p> 
<br>
<br><br>
<p class="fs-md about-text pe-xl-5 me-xl-3">
Farhan’s cross-cultural 12 plus years of international business exposure of working in London, Dubai and Karachi in various organization including in a Fortune 500 company has enabled him to positively influence youth on achieving their career goals and learning employability skills through his educational entrepreneurial venture registered as YouExcel.
</p> 
            </div>
        
         </div>
            <div class="col-lg-6" style="padding:0">
            <div class="img-box3 mb-30">
               <div class="img-1 mega-hover"><img class="" src="https://youexceltraining.com/img/new/Farhan-Shahid-Qazi.png" alt="About Img" style="
    width: 502px;
    border-radius: 50px;
"></div>
               <div class="shape-dotted jump"></div>
            </div>
         </div>
      </div>
   </div>
</section>
                    
                    
                    
                  <br>  
                      <br>  
                      <br>  
                    
<!--                    <div class="container pt-5 ">-->
<!--                    <h5 class="border-title2">Value Added Services:</h5>-->

<!--                    <div class="list-style1 vs-list   ">-->
<!--                  <ul>-->
<!--                    <li>Experienced professional trainers with practical field exposure</li>-->
<!--                    <li>100% job and business oriented training.</li>-->
<!--                    <li>Certificate of completion recognized from Trade Testing Board, Government of Pakistan.</li>-->
<!--                    <li>Claim Continuing Professional Development (CPD) hours for the training.</li>-->
<!--                    <li>Video recorded session with personalized Learning Management System (LMS) access login id for 6 months</li>-->
<!--                    <li>Fully equipped training center venue for on-campus trainings readily available with laptops, projectors and air-conditioning</li>-->
<!--                    <li>Live physical on-campus and online sessions</li>-->
<!--</ul>-->

<!--                    </div>-->
<!--</div>-->


    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->

    
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

                    <div class="elfsight-app-180aecff-7be3-49b6-9603-28a80d740006">
                        @include('website.sections.review-section', ['activeTab' => 'excel'])
                    </div>
                    
                
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
               
             <h2 class=" pt-1  text-white">Become smarter in just 12 hours </h2>
             <!--<p class=" pt-1 fs-md text-white">Enter your email id to get latest updates and  amazing discounts</p>-->
               <br>
               
               </div>
               </div>
                  <div class="row gx-100 gy-4 pb-5 justify-content-md-center ">
               
                <div class="col-lg-10 col-xl-10 col-xxl-10 pb-5 ">   
                
                <form class="newsletter-form d-flex flex-row justify-content-center align-items-center">
                   <a href="../Registration-Form/advanced-ms-excel" class="vs-btn style2"><i class="far fa-angle-right"></i>GET REGISTERED HERE</a>
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
