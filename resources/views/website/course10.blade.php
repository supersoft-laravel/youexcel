@extends('website.app', ['title' => 'Data Science and Analytics '])

@section('title', 'Data Science Course | Tableau & R Language in Karachi')
@section('meta_description', 'Enroll in our Data Science, Tableau & R Language Course in Karachi to gain hands-on skills in Python, machine learning, and data analysis.')
@section('meta_keywords', 'Data Science Course in Karachi, Tableau & R Language in Karachi')

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
                    The World need Millions of Data Scientists - Start Your Journey Here!
                </h2>
            </div>
        </div>
    </section>
    <!--==============================
      Course Area
  ==============================-->
    <section class="course-details pt-3 pb-5">
        <div class="container">
           <div class="row flex-row-reverse">
                <div class="col-lg-4">
                    <div class="course-meta-box wow fadeInUp ">
                        <div class="text-center mb-2 mt-2">
                            <h5 class="fw-bold text-uppercase border-bottom pb-2 d-inline-block" style="border-color: #0d6efd;">
                                What’s Inside the Course
                            </h5>
                        </div>
                        <table>
                            <tbody>
                               <tr class=" mb-4">
                                    <td>
                                        @include('website.sections.video-section', ['videoId' => '1ndju0Rn4co'])
                                    </td>
                                    <!--<td> <img src="https://youexceltraining.com/img/Yourexcel-img/dsci.jpg" /> </td>-->
                                 </tr> 
                                
                            <tr>
                            <!--<tr>-->
                            <!--    <td><i class="fas fa-money-bill-wave"></i> Total Fee: {{ $programFee ?? 'N/A' }}</td>-->
                            <!--</tr>-->
                            <tr>
                                <td><i class="fas fa-calendar-alt"></i> Next Batch Schedule: {{ $nextBatchSchedule ?? 'Contact Admissions Team' }}</td>
                            </tr>

                            <td ><i class="far fa-hourglass"></i> Duration: 60 hours</td>
                           </tr>
                            <tr style="padding-top: 8px;">
                                <td>
                                <i class="far fa-suitcase"></i>Difficulty Level:  Beginners to Intermediate</td>
                             </tr>  
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
                            <!--<tr>-->
                            <!--    <td><i class="far fa-suitcase"></i>This Training also includes:</td>-->
                            <!--     </tr>    <tr>-->
                            <!--    <td>-->
                                    
                            <!--        <li> <i class="fas fa-check"></i> Physical On-Campus and Online Training</li>-->
                            <!--           <li> <i class="fas fa-check"></i> Hands-On Case Study based learning</li>-->
                            <!--              <li> <i class="fas fa-check"></i> Expert Guidance</li>-->
                            <!--                 <li> <i class="fas fa-check"></i> Lifetime WhatsApp support</li>-->
                            <!--                    <li> <i class="fas fa-check"></i> Networking community access</li>-->
                            <!--         <li> <i class="fas fa-check"></i> Government Endorsed Certificate</li>-->
                                     
                            <!--       </td>-->
                            <!--</tr>-->
                          
                            </tbody>
                        </table>
                          @if($pdf == "" )
                                      
                                      @else
                        <a href="{{$pdf}}" class="vs-btn"> Download Brochure Now</a><br/><br/>
                        
                          @endif
                        <a href="https://youexceltraining.com/enquiry-form/data-science-and-analytics" class="vs-btn">Enquire Now</a><br/><br/>
                        <!--<a href="contact.html" class="vs-btn" style="padding:3.5px 40px; line-height:22px">Corporate <br> Training Consultancy</a>-->
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="course-category wow fadeInUp ">
                      <a href="#">Get Started Learning with  </a>
                    </div>
                    <h2 class="course-title animate__animated animate__bounceInDown">Data Science & Analytics (Excel, Power BI, Tableau, Python, SQL, R, Machine Learning, GitHub, Deployment)</h2>
                    <div class="course-review"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>( 5.0 )
                    </div>
                         <div class="mb-3">
                          <img src="https://youexceltraining.com/img/Yourexcel-img/dscip.jpg" /> 
                     </div>
                    <div class="mb-2 mt-2">
                        <h4 class="fw-bold text-uppercase border-bottom pb-2 d-inline-block" style="border-color: #0d6efd;">
                            Program Overview
                        </h4>
                    </div>
                    <p  class="wow fadeInDown pb-3">
                        This training equips aspiring data professionals with hands-on skills in MS Excel, MS Power BI, Tableau, Python, SQL, R Language and Machine Learning Model to transform, analyze data and visualize data to extract trends and insights. Focused on real-world applications and projects, it prepares you for data science, upskilling, or machine learning deployment in a data-driven world.</p>  
                        <div class="mb-2 mt-2">
                        <h4 class="fw-bold text-uppercase border-bottom pb-2 d-inline-block" style="border-color: #0d6efd;">
                            Training Outline
                        </h4>
                    </div>
                        </div>
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
                        <div class="accordion-item  wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingOne">
                                <button class="accordion-button justify-content-between" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span class="button-label">Module 1</span>
                                     Introduction to Data Science
                                                  <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            <li class="syllabustext">Definition and importance</li>
                                            <li class="syllabustext">Data science workflow</li>
                                            <li class="syllabustext">Applications in various industries</li>
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
                                    Data Analysis with Excel           
                                    <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInUp ">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <li class="syllabustext">Advanced Excel functions and formulas</li>
                                            <li class="syllabustext">Data cleaning and preparation in MS Excel</li>
                                            <li class="syllabustext">PivotTables and Pivot Charts</li>

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
                                    Data Visualization with Power BI 
                                  <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInUp ">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <li class="syllabustext">Overview of Power BI interface</li>
                                            <li class="syllabustext">Connecting to data sources</li>
                                            <li class="syllabustext">Creating and customizing visualizations</li>
                                            <li class="syllabustext">Building interactive dashboards</li>
                                            <li class="syllabustext">Sharing and publishing reports</li>
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
                                    Power BI with Tools
                                  <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="accordionExample">
                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <li class="syllabustext">Power Query advanced applications</li>
                                            <li class="syllabustext">Data modeling with Power Pivot</li>
                                            <li class="syllabustext">DAX for data analysis</li>
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
                                    Advanced Data Visualization with Tableau
                                                                      <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour1" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            <li class="syllabustext">Getting started with Tableau</li>
                                            <li class="syllabustext">Data connections and preparation</li>
                                            <li class="syllabustext">Creating advanced visualizations</li>
                                            <li class="syllabustext">Dashboard design best practices</li>
                                            <li class="syllabustext">Storytelling with data</li>
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
                                    Fundamentals of Python Programming
                                  <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour2" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <li class="syllabustext">Python programming basics (Clarity of What, why and how)</li>
                                            <li class="syllabustext">Input, output concepts</li>
                                            <li class="syllabustext">Variables, Loops Concepts</li>
                                            <li class="syllabustext">Functions, Packages, Modules Concepts</li>
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
                                        Programming for Data Science with Python
                                  <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour5" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="accordionExample">
                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <li class="syllabustext">Key libraries (NumPy, pandas, matplotlib, seaborn, markdown)</li>
                                            <li class="syllabustext">Data manipulation and analysis</li>
                                            <li class="syllabustext">End to End Data analysis project</li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour7" aria-expanded="false"
                                        aria-controls="collapseFour7">
                                    <span class="button-label">Module 8B</span>
                                    Foundation of SQL and Databases  
                                  <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour7" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="accordionExample">
                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <li class="syllabustext">What is SQL and why is it used?</li>
                                            <li class="syllabustext">Flavors of SQL</li>
                                            <li class="syllabustext">Tables rows and columns</li>
                                            <li class="syllabustext">Concept of ERD (Entity Relationship Diagram)</li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingEight8B">
                                <button class="accordion-button justify-content-between " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseEight8B" aria-expanded="false"
                                        aria-controls="collapseEight8B">
                                    <span class="button-label">Module 8B</span>
                                    Statements, Function and Analysis using SQL  
                                  <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseEight8B" class="accordion-collapse collapse" aria-labelledby="headingEight8B"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                           <li class="syllabustext">Syntax Familiarity of Select Statements and Techniques of Ordering and filtering Results</li>
                                            <li class="syllabustext">Using WHERE clause</li>
                                            <li class="syllabustext">Sum, Count, min, max, Data types, Functions and Calculations </li>
                                            <li class="syllabustext">SQL for Data Analytics (Project based Learning)</li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingNine">
                                <button class="accordion-button justify-content-between " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseNine9" aria-expanded="false"
                                        aria-controls="collapseNine9">
                                    <span class="button-label">Module 9</span>
                                    Data Analysis and Visualization with R  
                                  <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseNine9" class="accordion-collapse collapse" aria-labelledby="headingNine"
                                 data-bs-parent="accordionExample">
                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <li class="syllabustext">Introduction to R programming</li>
                                            <li class="syllabustext">Data manipulation with dplyr</li>
                                            <li class="syllabustext">Data visualization with ggplot2</li>
                                            <li class="syllabustext">Statistical analysis and modeling</li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingTen">
                                <button class="accordion-button justify-content-between " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTen10" aria-expanded="false"
                                        aria-controls="collapseTen10">
                                    <span class="button-label">Module 10</span>
                                    Introduction to Machine Learning  
                                  <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseTen10" class="accordion-collapse collapse" aria-labelledby="headingTen"
                                 data-bs-parent="accordionExample">
                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <li class="syllabustext">Definition, scope, and key concepts</li>
                                            <li class="syllabustext">Real-world examples of ML applications</li>
                                            <li class="syllabustext">Comparison with traditional programming</li>
                                            <li class="syllabustext">Supervised, unsupervised, and reinforcement learning</li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingEleven">
                                <button class="accordion-button justify-content-between " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseEleven11" aria-expanded="false"
                                        aria-controls="collapseEleven11">
                                    <span class="button-label">Module 11</span>
                                    Executable Machine Learning / ML Model Development  
                                  <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseEleven11" class="accordion-collapse collapse" aria-labelledby="headingEleven"
                                 data-bs-parent="accordionExample">
                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <li class="syllabustext">Importance of reproducibility in ML projects</li>
                                            <li class="syllabustext">Introduction to tools like Jupyter Notebook, Google Colab, or IDEs (e.g., PyCharm)</li>
                                            <li class="syllabustext">Data Preprocessing and Feature Engineering*</li>
                                            <li class="syllabustext">Importing datasets using libraries like Pandas</li>
                                            <li class="syllabustext">Cleaning and preprocessing data: Handling missing values, scaling, encoding categorical variables</li>
                                            <li class="syllabustext">Feature selection and engineering techniques</li>
                                            <li class="syllabustext">Train-test split and cross-validation setup</li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingTwelve12A">
                                <button class="accordion-button justify-content-between " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwelve12A" aria-expanded="false"
                                        aria-controls="collapseTwelve12A">
                                    <span class="button-label">Module 12A</span>
                                    Machine Learning and CI/CD Pipeline for deployment 
                                  <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseTwelve12A" class="accordion-collapse collapse" aria-labelledby="headingTwelve12A"
                                 data-bs-parent="accordionExample">
                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <li class="syllabustext">Continuous Integration: Automating the testing and integration of code</li>
                                            <li class="syllabustext">Continuous Deployment: Automating the deployment process</li>
                                            <li class="syllabustext">
                                                Overview of Git for version control:
                                                <ul class="mx-5" style="list-style-type: circle;">
                                                    <li>Repositories, commits, branches, and pull requests</li>
                                                    <li>Setting up a GitHub repository for ML projects</li>
                                                    <li>Collaborating on code and managing updates in ML workflow</li>
                                                </ul>
                                            </li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingTwelve12B">
                                <button class="accordion-button justify-content-between " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwelve12B" aria-expanded="false"
                                        aria-controls="collapseTwelve12B">
                                    <span class="button-label">Module 12B</span>
                                    Deployment of ML Models (2025 Update)  
                                  <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseTwelve12B" class="accordion-collapse collapse" aria-labelledby="headingTwelve12B"
                                 data-bs-parent="accordionExample">
                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <li class="syllabustext">On-Premises Deployment: Running the model locally using Flask/Streamlit</li>
                                            <li class="syllabustext">Serverless platform for ML based application Deployment</li>
                                            <li class="syllabustext">Definition and importance</li>
                                            <li class="syllabustext">Data science workflow</li>
                                            <li class="syllabustext">Applications in various industries</li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingTwelve13">
                                <button class="accordion-button justify-content-between " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwelve13" aria-expanded="false"
                                        aria-controls="collapseTwelve13">
                                    <span class="button-label">Module 13</span>
                                    Data Science & Analytics Employability Skills  
                                  <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseTwelve13" class="accordion-collapse collapse" aria-labelledby="headingTwelve13"
                                 data-bs-parent="accordionExample">
                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <li class="syllabustext">Enabling LinkedIn, GitHub, Kaggle platform for professional networking in Data Science track</li>
                                            <li class="syllabustext">Profiling Freelance portfolio at Upwork and Fiverr to gain income-earning opportunities</li>
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
                            Create Impactful Visualizations using advanced data analysis and cleaning using Excel, Power BI, and SQL
                        </p>
                    </div>
                </div>
    
                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100" 
                         style="border-left: 5px solid #6610f2;">
                        <i class="fas fa-database text-purple fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #333;">
                            Gain skills in Python for data manipulation and analysis using popular libraries like Pandas, NumPy, Matplotlib, and Seaborn for data science projects
                        </p>
                    </div>
                </div>
    
                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100" 
                         style="border-left: 5px solid #198754;">
                        <i class="fas fa-brain text-success fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #333;">
                            Design and interact with relational databases such as SQL queries for data analysis and decision-making
                        </p>
                    </div>
                </div>
    
                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100" 
                         style="border-left: 5px solid #fd7e14;">
                        <i class="fas fa-chart-line text-warning fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #333;">
                            Learn the fundamentals of machine learning, including supervised, unsupervised, and reinforcement learning
                        </p>
                    </div>
                </div>
    
                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100" 
                         style="border-left: 5px solid #dc3545;">
                        <i class="fas fa-clock text-danger fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #333;">
                            Deploy machine learning applications using Flask, Streamlit , or serverless platforms
                        </p>
                    </div>
                </div>
    
                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-light rounded shadow-sm h-100" 
                         style="border-left: 5px solid #20c997;">
                        <i class="fas fa-share-square text-info fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #333;">
                            Gain practical experience by completing hands-on projects in data analysis, visualization, and machine learning
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
          <div class="col-sm-6 col-lg-6">
            <div class="card h-100 text-center shadow-sm border-0"
              style="display: flex; justify-content: center; align-items: center; border-radius: 15px; transition: all 0.3s ease; padding: 30px; background: #fff;"
              onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)';"
              onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.05)';">
              <img src="https://youexceltraining.com/img/icon/training-icon-1-1.svg" alt="icon"
                style="width: 60px; margin-bottom: 20px;">
              <h6 style="font-weight: 600; color: #212529;">Full-Stack Data Science Training</h6>
              <p>Covers data wrangling, visualization, SQL queries, Python libraries and R programming</p>
            </div>
          </div>
    
          <div class="col-sm-6 col-lg-6">
            <div class="card h-100 text-center shadow-sm border-0"
              style="display: flex; justify-content: center; align-items: center; border-radius: 15px; transition: all 0.3s ease; padding: 30px; background: #fff;"
              onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)';"
              onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.05)';">
              <img src="https://youexceltraining.com/img/icon/training-icon-1-2.svg" alt="icon"
                style="width: 60px; margin-bottom: 20px;">
              <h6 style="font-weight: 600; color: #212529;">Advanced Data Processing</h6>
              <p>Includes Power Query, DAX, feature engineering, and data modeling for optimized analytics</p>
            </div>
          </div>
    
          <div class="col-sm-6 col-lg-6">
            <div class="card h-100 text-center shadow-sm border-0"
              style="display: flex; justify-content: center; align-items: center; border-radius: 15px; transition: all 0.3s ease; padding: 30px; background: #fff;"
              onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)';"
              onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.05)';">
              <img src="https://youexceltraining.com/img/icon/training-icon-1-3.svg" alt="icon"
                style="width: 60px; margin-bottom: 20px;">
              <h6 style="font-weight: 600; color: #212529;">ML & AI Integration</h6>
              <p>Covers supervised, unsupervised learning, and ML pipelines</p>
            </div>
          </div>
    
          <div class="col-sm-6 col-lg-6">
            <div class="card h-100 text-center shadow-sm border-0"
              style="display: flex; justify-content: center; align-items: center; border-radius: 15px; transition: all 0.3s ease; padding: 30px; background: #fff;"
              onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)';"
              onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.05)';">
              <img src="https://youexceltraining.com/img/icon/training-icon-1-4.svg" alt="icon"
                style="width: 60px; margin-bottom: 20px;">
              <h6 style="font-weight: 600; color: #212529;">Real-World Applications</h6>
              <p>Hands-on projects in data analytics, dashboarding, and ML workflows, ensuring industry-relevant expertise</p>
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
            <div class="card h-100 border-0 shadow-sm text-start p-3" style="border-radius:12px; background:#fff;">
              <div class="d-flex align-items-center mb-2">
                <div style="width:40px; height:40px; border-radius:50%; background:#0d6efd1a; display:flex; align-items:center; justify-content:center; margin-right:10px;">
                  <i class="fas fa-users" style="color:#0d6efd; font-size:16px;"></i>
                </div>
                <h6 style="margin:0; font-weight:600; color:#0d6efd;">Recommended For</h6>
              </div>
              <p style="font-size:14px; color:#333; margin:0;">
                Business & Finance Professionals
              </p>
              <p style="font-size:14px; color:#333; margin:0;">
                IT & Software Professionals
              </p>
              <p style="font-size:14px; color:#333; margin:0;">
                Aspiring Students & Job Seekers seeking to a carer as Data Analysts & Scientists
              </p>
            </div>
          </div>
    
          <!-- Difficulty Level -->
          <div class="col-lg-4 col-md-6">
            <div class="card h-100 border-0 shadow-sm text-start p-3" style="border-radius:12px; background:#fff;">
              <div class="d-flex align-items-center mb-2">
                <div style="width:40px; height:40px; border-radius:50%; background:#0d6efd1a; display:flex; align-items:center; justify-content:center; margin-right:10px;">
                  <i class="fas fa-signal" style="color:#0d6efd; font-size:16px;"></i>
                </div>
                <h6 style="margin:0; font-weight:600; color:#0d6efd;">Difficulty Level</h6>
              </div>
              <p style="font-size:14px; color:#333; margin:0;">Beginners to Intermediate</p>
            </div>
          </div>
    
          <!-- Pre-Requisites -->
          <div class="col-lg-4 col-md-12">
            <div class="card h-100 border-0 shadow-sm text-start p-3" style="border-radius:12px; background:#fff;">
              <div class="d-flex align-items-center mb-2">
                <div style="width:40px; height:40px; border-radius:50%; background:#0d6efd1a; display:flex; align-items:center; justify-content:center; margin-right:10px;">
                  <i class="fas fa-lightbulb" style="color:#0d6efd; font-size:16px;"></i>
                </div>
                <h6 style="margin:0; font-weight:600; color:#0d6efd;">Pre-Requisites</h6>
              </div>
              <p style="font-size:14px; color:#333; margin:0;">
                Basic computer literacy, familiarity with Windows operating
                                                system
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
                        <h5 class="fw-bold mb-3" style="font-size: 26px;">M. Rafay Shaikh</h5>
                        <p class="mb-4" style="font-size: 15px; color: #555; line-height: 1.7;">
                            M. Rafay Shaikh’s technical expertise includes Data Science, Power BI, PySpark, Python, Photoshop, Computer Vision, Machine Learning, Web Development, and Azure DevOps. He has led projects like a Book Recommender System, an NLP-based medical diary, and Lungs Cancer Detection using CNN. He holds an MS in Software Engineering and a BS in Software Engineering from Sir Syed University
                            Rafay Shaikh is a skilled Lecturer at Sir Syed University of Engineering and Technology, where he teaches Web Engineering and Introduction to Computing. He also coordinates the departmental CMS, oversees the AI Lab, and advises the IEEE Computational Society at SSUET. Rafay was recognized with 2nd place in the Faculty Training Program by Sindh HEC.
                        </p>
                        <p class="mb-4" style="font-size: 15px; color: #555; line-height: 1.7;">
                            Rafay has also held leadership roles in IEEE Karachi Section, organizing numerous events and sessions. He is the Founding Advisor of the IEEE Computational Intelligence Society at SSUET.
                        </p>
                        <p class="mb-4" style="font-size: 15px; color: #555; line-height: 1.7;">
                            Previously, Rafay was an IT Support Engineer at Dumb TV, managing websites, domains, servers, and social media.
                        </p>
    
                        <!--<h6 class="fw-semibold mb-2">-->
                        <!--    <i class="fas fa-certificate text-warning me-2"></i>Professional Certifications-->
                        <!--</h6>-->
                        <!--<ul class="list-unstyled mb-0">-->
                        <!--    <li><i class="fas fa-check-circle text-success me-2"></i>Microsoft Power BI Data Analyst PL300 Certification 2025</li>-->
                        <!--    <li><i class="fas fa-check-circle text-success me-2"></i>Microsoft Certified Trainer</li>-->
                        <!--</ul>-->
                    </div>
                </div>
    
                <!-- Right Side (Trainer Image) -->
                <div class="col-lg-4 col-md-5 text-center">
                    <div class="position-relative d-inline-block">
                        <img src="{{ asset('img/trainer/new/M-Rafay-Shaikh.png') }}" 
                             alt="Trainer - M. Rafay Shaikh"
                             class="img-fluid rounded-circle border border-3 border-warning shadow-sm"
                             style="height: 230px; width: 230px; object-fit: cover;">
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning text-dark shadow-sm px-3 py-1" style="font-size: 13px;">
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
                            Lifetime video recorded session with personalized Learning Management System (LMS) access login ID for months
                        </p>
                    </div>
                </div>
    
                <div class="col-md-6">
                    <div class="d-flex align-items-start p-3 bg-white rounded shadow-sm h-100" 
                         style="border-left: 5px solid #17a2b8;">
                        <i class="fab fa-whatsapp text-info fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #444;">
                            Lifetime WhatsApp post-training support
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
                         style="border-left: 5px solid #ffc107;">
                        <i class="fas fa-laptop-house text-warning fs-4 me-3 mt-1"></i>
                        <p class="mb-0" style="font-size: 15px; color: #444;">
                            Fully equipped training center venue for on-campus trainings readily available with laptops, projectors, and air-conditioning
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
                        <h4 class="fw-bold text-uppercase border-bottom pb-2 d-inline-block" style="border-color: #0d6efd;">
                            REAL PEOPLE REAL TESTIMONIALS
                        </h4>
                    </div>
                    <div class="elfsight-app-180aecff-7be3-49b6-9603-28a80d740006">@include('website.sections.review-section', ['activeTab' => 'powerbi'])</div>


                </div>
            </div>
        </div>
    </section>
  
  <section class="py-5 m-3 cta-style2">
    <div class="container text-center">
        <!-- Section Title -->
        <h2 class="fw-bold mb-3" style="font-size: 36px; color: #fff;">
            Become <span style="color: #ffc107;">Smarter</span> in Just <span style="color: #0d6efd;">60 Hours</span>
        </h2>
        <p class="mb-4" style="font-size: 16px; color: #fff; max-width: 700px; margin: 0 auto;">
            Gain practical, hands-on skills through interactive sessions led by industry experts.  
            Enhance your career prospects with our intensive training program.
        </p>

        <!-- CTA Button -->
        <a href="../Registration-Form/data-science-and-analytics"
           class="btn btn-lg fw-bold" 
           style="background-color: #ffc107; color: #000; padding: 16px 45px; font-size: 18px; border-radius: 50px; box-shadow: 0 4px 15px rgba(0,0,0,0.2); transition: all 0.3s;">
            <i class="fas fa-user-edit me-2"></i> REGISTER NOW
        </a>

        <!-- Optional Note -->
        <p class="mt-3" style="font-size: 14px; color: #fff;">
            Limited seats available — reserve your spot today!
        </p>
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
