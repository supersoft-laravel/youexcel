@extends('website.app', ['title'=>'Student Policies'])


@push('style')

   ul{list-style:none;
   padding-left: 15px;
   }

@endpush


@section('content')

<section class="pt-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <!-- <div class="col-lg-2"></div> -->
                    <div class="col-lg-10 ">
                     
                        <h2>YouExcel’s Student Policy & Procedures 2022
</h2>
 </div>
      <div class="col-lg-2 ">
             <input class="btn btn-success" id="printpagebutton" type="button" value="Print"
                            onclick="printpage()" style="float: right;" />
                    </div>
                </div>
                <div class="row mt-5 mb-5">
                    <div class="col-lg-12 printPage">
                        <h3>Please read YouExcel's Student privacy policy.</h3>
                    
                    </div>
                    <div class="col-lg-12">
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">
                                    <a class="btn btn-link collapsed" data-toggle="collapse" data-parent="#accordion"
                                                        href="#collapse1">
                                            1. Foreword
</a>
                                    </h5>
                                </div>

                                <div id="collapse1" class="collapse show" aria-labelledby="headingOne">
                                    <div class="card-body">
                                       Greetings from YouExcel to all the participants!
As an organization with the core values of fair play, transparency and equity, we are publishing this hand book containing a guide to the policies and procedures that we adopt to pursue our journey to impart 21st century skills to our aspiring youth and midcareer professionals. 

It is immensely important for us that our training participants benefit from our programs so that they achieve their goals with confidence and honour. The courses have been designed keeping in view the requirements of a modern organization and the skill gap that rapid advancement in technology leaves among students and employees seeking career advancement. Thus we seek to be of value to both – the employee and the employer.

We have a fully equipped institute located in the heart of Karachi. We have the facility of online training for those who cannot come to the institute. We have employed Learning Management System to facilitate your appetite for knowledge. The taught lectures and demonstrations are hoisted on our web portal for a repeat reading and firm grasp on the subject. With a view to facilitating our valuable corporate customers, we also impart training to their chosen group of employees at the costumer’s premises. 

The faculty of YouExcel comprises one of the finest and experienced trainers having a name and fame of their own! The unique feature of their professional competence is that they have the practical working experience in the related industry/organization. Once you are in touch with them, we assure you, you will be glued to them.

Care and courtesy is the hallmark of our employees. They greet you with respect and solve problems with a sense of empathy. A welcoming smile is the reflection of their character and reassuring conduct.  
 
We will welcome your valuable feedback so that we are enriched in our endeavors to continuously improve our course content; add new courses; and better our services so that you may achieve the level of excellence that you truly deserve.

All the best!


Farhan Shahid Qazi
CEO YouExcel
</div>
                                </div>
                            </div>
                            
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">
                                    <a class="btn btn-link collapsed" data-toggle="collapse" data-parent="#accordion"
                                                        href="">
                                             ABOUT YOUEXCEL
</a>
                                    </h5>
                                </div>
                                <div id="" class="collapse show" aria-labelledby="headingThree">
                                    <div class="card-body">
                                     
                                        <p>YouExcel is a FINTECH training consultancy which envisions to bridge the gap between potential
                                        employees and employers by creating a job-ready human resource in a practical learning environment
                                        that is in consonance with the technological requirements of the employer organization.
                                        Moreover, YouExcel’s mission is to enhance retainability and skill upgradation of the existing employees of an organization by addressing
                                        and responding to the changing skills landscape in real time among fresh graduates and mid-level professionals thereby contributing towards 
                                        the welfare of the economy, employer and employee.
                                        We pursue a non-discriminatory policy for the purpose of admission to our training programs. The only condition is competence and
                                        academic/experience yardstick for each program individually.
                                        We are affiliated with National Vocational and Technical Training Centre (NAVTTC), Institute of Financial Accountants (IFA) - UK, 
                                        Sindh Technical Education & Vocational Training Authority (STEVTA) and Trade Testing Board (TTB).  
                                        </p>
                                    </div>
                                    
                                    
                                    
                                    <h5 style="margin:15px!important">Modes of Training</h5>
                                    <p  style="margin:15px!important">
                                        In keeping with its remarkable approach towards facilitating the participants in all possible ways, YouExcel’s training modus operandi is flexible:
                                    </p>
                                    
                                    
                                    <h5  style="margin:15px!important">
                                        On-campus Training
                                    </h5>
                                    <p  style="margin:15px!important">
                                        Training is provided in a group environment enabling the participants to interact directly with the trainer and avail the IT Lab facility under the direct supervision of their teacher
                                    </p>
                                    
                                    
                                    <h5  style="margin:15px!important">
                                        Online Training
                                    </h5>
                                    <p  style="margin:15px!important">
                                        For those participants who cannot spare time for on-campus training, or they are stationed outside the Karachi, YouExcel provides the opportunity to avail the training remotely from their chosen destination. The trainer remains in direct contact with the participants, and screen-sharing makes for a near face-to-face/lab experience.
Note: Online training facility is not available for NAVTTC courses/Kamyab Jawan Program.

                                    </p>
                                    
                                    
                                    <h5  style="margin:15px!important">
                                        Onsite Training for Corporate Customers
                                    </h5>
                                    <p  style="margin:15px!important">
                                        Some of our corporate customers prefer training for their group of employees at their respective business premises. We are flexible in that respect too! Our faculty is detailed to the customer training site at the mutually agreed time
                                    </p>
                                    
                                    
                                    
                                    <h5  style="margin:15px!important">
                                        Our Team
                                    </h5>
                                    <p  style="margin:15px!important">
                                        A team of highly qualified, experienced and committed training facilitators is engaged with YouExcel instilling a great degree of 
                                        confidence among the seekers of knowledge. The outcome of the training are current, relevant and attuned to the industry best practices.
                                        
                                        YouExcel’s staff is dedicated to their individual responsibilities and work in a team. Our environment is congenial for a rich learning experience.    
                                    </p>
                                    
                                    
                                    
                                    <h5  style="margin:15px!important">
                                        Contact
                                    </h5>
                                    <p  style="margin:15px!important">
                                        The aspiring participants, potential training facilitators, employable youth and people belonging to Industry-Academia may reach out to us via:

Website: https://www.youexceltraining.com/

Email: info@youexceltraining.com 

Campus Location: Suite 503-506, 5th Floor, Al Samad Tower, Block 13-B, Main University Road Karachi, Pakistan.
https://maps.app.goo.gl/EDR1J7oucv12oi7X8
Facebook: www.facebook/youexceltraining
Linkedln: https://www.linkedin.com/company/youexceltraining/
https://pk.linkedin.com/company/youexceltraining 

WhatsApp: +92 331 3016699

                                    </p>
                                    
                                    
                                    <h4  style="margin:15px!important">
                                        POLICIES AND PROCEDURES
                                    </h4>
                                    
                                    
                                     <h5  style="margin:15px!important">
                                       Selection and Enrollment
                                    </h5>
                                    
                                    <p  style="margin:15px!important">
                                       We employ all possible modes of communication to enlighten the aspiring trainees with sufficient knowledge about the qualification criteria, course design, mode of training, available facilities, fee structure, assessment criteria and about the trainers, enabling them to take an informed decision. To ensure   
                                    </p>
                                    
                                    
                                    <h5  style="margin:15px!important">
                                        Enrollment Process:
                                    </h5>
                                    <p  style="">
                                
                                    <p style="margin:15px!important">For Enquiry: <a href="https://www.youexceltraining.com/enquiry-form">Click here</a></p>
                                    </p>
                                    
                                    
                                     <h5  style="margin:15px!important">
                                       IFA(UK) Recognized Course
                                    </h5>
                                    <p  style="margin:15px!important">
                                        <ul>
                                            <li>1-	Dashboard Reporting & Analysis with Power BI</li>
                                          
                                        </ul>

                                    </p>
                                    
                                    
                                     <h5  style="margin:15px!important">
                                      Trade Testing Board:  
                                    </h5>
                                    <p  style="margin:15px!important">
                                     
                                      <ul>
                                        <li>1. Graphic Design (UI/UX Designer)</li>
                                        <li>2. Dashboard Reporting & Analysis with Power BI</li>
                                        <li>3. Graphic Designing & Video Editing</li>
                                        <li>4. Artificial Intelligence (Machine & Deep Learning, Communication)</li>
                                        <li>5. SQL for Data Analytics</li>
                                        <li>6. Python Programming for Data Analysis</li>
                                        <li>7. Tax Management with Return Filing</li>
                                        <li>8. Advanced MS Excel: Business Intelligence with Data Visualization</li>
                                          <li>9. Certificate in I.T (06-Months)</li>
                                        <li>10. Digital Marketing & SEO (06-Months)</li>
                                        <li>11. Customer Service & Sales Representative (06-Months)</li>
                                          <li>12. Data Mining/Business Intelligence (06-Months)</li>
                                        <li>13. Office Management (06-Months)</li>
                                        <li>14. Data Science & Analytics (06-Months)</li>
                                        <li>15. Computerized Accounting (06-Months)</li>
                                        <li>16. E-Commerce (06-Months)</li>
                                        <li>17. Financial Modeling & Analysis</li>
                                        <li>18. Amazon Virtual Assistant</li>
                                        
                                           
                                        
                                        </ul>
                                        
                                        <p   style="margin:15px!important">
                                            For Enquiry Click here: https://www.youexceltraining.com/enquiry-form
                                        </p>
                                    </p>
                                    
                                    
                                    <h5   style="margin:15px!important">YouExcel’s Courses</h5>
                                    <p   style="margin:15px!important">
                                        To enroll in a YouExcel course the candidate will be required to complete an Enrollment Form available online. By submitting the form, the candidate undertakes to abide by the policies, procedures and conditions as provided here. We recommend that you retain a copy of this document along with the copy of your enrollment form for your personal record. For the sake of a clear understanding of all the prerequisites, you may visit our Institute during office hours.
Once you have filled-in the form, your eligibility will be assessed by our team. The assessment will include relevant work experience – if required; English language proficiency; literacy and numeracy skills; computer access and hands-on minimum skills. Additionally, the eligibility criteria would involve the prerequisites set by the respective organization with which we are affiliated for the particular course.
If you meet the prescribed criteria, you will be informed of the confirmation of your enrollment in the selected course, commencement date, fee options and venue of the training.

                                    </p>
                                    
                                    <h5  style="margin:15px!important">
                                        Online Access to Course Materials
                                    </h5>
                                    <p  style="margin:15px!important">
                                        Trainees will be provided with online access to course materials and assessments. Only enrolled participant shall be permitted to access the Learning Management System (LMS). Participants may remain cautioned that they should not share their username and password with any other person or permit any other person to access their account.
                                    </p>
                                    
                                    
                                    <h5  style="margin:15px!important">
                                        Assessment
                                    </h5>
                                    <p  style="margin:15px!important">
                                        Assessment is the key determinant of your learning abilities. It also provides the participant an opportunity to utilize, apply and demonstrate his/her knowledge and acquired skills. Our assessment is fair and transparent, and is compliant of the requirements of our training partners/organizations and the affiliating bodies. Our assessors will be available to you at the time of their convenience to explain your skill-gaps.
                                    </p>
                                    
                                    
                                    <h5  style="margin:15px!important">
                                        Submission of Assignment/Assessment
                                    </h5>
                                    <p  style="margin:15px!important">
                                        Participants will be given a timeframe within which they will have to submit their assignment/assessment. Upon submission, the assignment/assessment shall be marked ‘Satisfactory’ or ‘Not Yet Satisfactory’. You have the chance to discuss the result with your trainer/assessor in case you are not satisfied with the result. Following your discussion, the trainer will prescribe another timeframe within which you will be required to re-submit your improved assignment/assessment. That shall be the last chance for an improved result.
                                    </p>
                                    
                                    
                                    <h5  style="margin:15px!important">
                                        Right to Appeal
                                    </h5>
                                    <p  style="margin:15px!important">
                                        If even your re-submitted assignment/assessment is rated ‘Not Yet Satisfactory’, you have the right to prefer an appeal to the CEO YouExcel within seven (07) days from the date of conveyance of the result mentioning your name, course, name of the trainer/assessor, date of first submission and the date of the re-submission. You ought to clearly and succinctly mention the reasons why you want to prefer the appeal. Reasons must be only professional, and not in any case personal. You must adduce evidence in support of your version. Appeal shall be reviewed and decided within ten (10) working days and the decision be conveyed to you. All details will be kept confidential.  
                                    </p>
                                    
                                    
                                    <h5  style="margin:15px!important">
                                        Participant Obligations
                                    </h5>
                                    <p  style="margin:15px!important">
                                        All participants are expected to conduct themselves in a courteous and professional manner, treating the trainer, staff and the colleague participants with respect at all the times.
Participants are expected to:
<p  style="margin:15px!important">
•	Attend and actively participate in all learning activities    
</p>
<p  style="margin:15px!important">
•	Submit all assignments/assessments within the prescribed timeframe    
</p>
<p  style="margin:15px!important">
•	Exhibit commitment with the training program    
</p>
<p  style="margin:15px!important">
•	Communicate with the trainer and/or CEO if an assistance is required    
</p

                                    </p>
                                    
                                    
                                    <h5  style="margin:15px!important">
                                        Appropriate Behavior
                                    </h5>
                                    <p  style="margin:15px!important">
                                        We, at YouExcel are committed to provide a conducive learning environment, free from harassment, discrimination and bullying. The participants are required not to raise any ethical issues.
                                    </p>
                                    
                                    
                                    <h5  style="margin:15px!important">
                                        Health and Safety
                                    </h5>
                                    <p  style="margin:15px!important">
                                        We have arrangements for the first aid should any participant require such assistance. We expect that you would observe health and safety precautions -–not only for your own selves but also for your peers and staff members.
Carrying or use or being under the influence of all legally contraband items including intoxicating drugs, Paan, Gutka, Chhalia (Beetle Nuts) etc. is absolutely impermissible and intolerable in the Institute or any other training venue.

                                    </p>
                                    
                                    <h5  style="margin:15px!important">
                                        Plagiarism/Cheating/Collusion
                                    </h5>
                                    <p  style="margin:15px!important">
                                        YouExcel treats plagiarism, cheating and collusion as a serious offence. Any training participant found plagiarizing, cheating or colluding with other trainee(s) will be suspended from his/her course and may be disentitled from further pursuing the program/course. This shall be at the expense of the participant. Any work produced by someone else, quotes, ideas or other material used by any participant must be properly referenced. Failing to give reference of the author or producer of the work/material shall be treated as ‘Plagiarism’, entailing rejecting such material alongside any other penal action if so warranted.
                                    </p>
                                    
                                    
                                    <h5  style="margin:15px!important">
                                        Review of Enrolment
                                    </h5>
                                    <p  style="margin:15px!important">
                                        YouExcel reserves the right to review any participant’s enrolment whose conduct or progression is not of an acceptable standard and/or if the participant breaches any policy or condition stated in this handbook. If a participant is found to prima facei violate any of the policy of the Institute or a condition of the training program, a committee or a nominee of the CEO may investigate the matter, giving an opportunity of hearing/representation to the said participant against such allegation(s) duly conveyed to him/her in writing. The participant who receives the allegation(s) must respond within the prescribed timeframe failing which exparte decision will be taken with consequences thereof. The investigating committee or the nominee shall submit the report to the CEO within ten (10) working days. The decision of the CEO shall be final.
                                    </p>
                                    
                                    
                                    <h5  style="margin:15px!important">
                                        Right to Suggestions/Feedback
                                    </h5>
                                    <p  style="margin:15px!important">
                                        A ‘Suggestion/Feedback’ box has been installed close to the front desk. Should you have any complaint/suggestion/feedback you may drop it in the box, or you may email/WhatsApp directly to the CEO. You may choose not to mention your name or disclose your identity. If you mention your name but ask to keep it confidential, we will respect that. Your suggestions/feedback will be reviewed seriously and necessary action will be taken to improve the system. The aim is to facilitate you as far as possible.
                                    </p>
                                    
                                    <h5  style="margin:15px!important">
                                        Right to Respect & Protection of Privacy
                                    </h5>
                                    <p  style="margin:15px!important">
                                        YouExcel is subjected to the laws of Pakistan to protect your honour and dignity. We keep participants’ information private and confidential. If required by law or the policy, however, YouExcel may supply your required information to any government authority/organization or a regulatory body. From time to time YouExcel may release information about your academic progress to other parties including but not limited to employers or third party delivering services to or on behalf of YouExcel.
                                    </p>
                                    
                                    <h5  style="margin:15px!important">
                                        Access to Personal Records
                                    </h5>
                                    <p  style="margin:15px!important">
                                        Participants may request in writing access to their personal record at any time during the currency of the course.
                                    </p>
                                    
                                      <h5  style="margin:15px!important">
                                          Payment of Course Fee
                                     </h5>
                                    <p  style="margin:15px!important">
                                        Fee is payable in advance before a course commences. Individual payment arrangements can be discussed.
                                    </p>
                                    
                                      <h5  style="margin:15px!important">
                                          Certification
                                     </h5>
                                    <p  style="margin:15px!important">
                                        Upon completion of a course, participants will be issued a Certificate showing successful completion of the course. The participant who withdraws from the course before payment of the fees or who fails to make full payment or whose course is terminated as a result of disciplinary action shall not be entitled to the certificate
                                    </p>
                                    
                                      <h5  style="margin:15px!important">
                                          Copyright and Intellectual Property
                                     </h5>
                                    <p  style="margin:15px!important">
                                        YouExcel owns and has the exclusive right of use of all course materials, content, assignments, assessments, online courses, handbooks, policies, procedures, business practices and other intellectual property to which participants of the course, corporate trainees and trainers will be exposed to throughout the course and thereafter. YouExcel will provide the participants access to the relevant material prior to, and until completion of the concerned course. All materials are to remain for the exclusive use of the enrolled participants and must not be distributed, accessed to or, in any form made available to any other person or party whosoever. All documentations, logos, slogans, pictures, courseware and other material provided by YouExcel are copyrighted and should not be used for any unauthorized purpose. Participants are authorized only to use their course materials and content for the purpose of completing the course they are enrolled in, and not otherwise.
                                    </p>
                                    
                                      <h5  style="margin:15px!important">
                                          Use of Library
                                     </h5>
                                    <p  style="margin:15px!important">
                                        Users are expected to observe the following rules while using the library services; any violation of these rules will incur appropriate disciplinary action. Submit any book or object for inspection, when requested by the library staff.
Do not write, underline or mark any book. Library books are carefully examined on return and the borrower will be held responsible for the damage. After reading, do not leave books on the table or on the book trolley. Kindly place the book on its place. Complete silence should be observed except for brief and subdued talk with the library staff.
Drinks and eatables are not allowed in the library.

YouExcel is not responsible for any losses; please do not leave your belongings unattended.

                                    </p>
                                    
                                      <h5  style="margin:15px!important">
                                          Disclaimer
                                     </h5>
                                    <p  style="margin:15px!important">
                                        YouExcel has taken appropriate measures to ensure that the information published in this Guide is accurate at the time of its publication and/or hoisting. Due to a range of circumstances beyond our control, some information may change from time to time. We apologize for any inaccuracy of information supplied that may cause inconvenience to you. The YouExcel management reserves the right to make changes when required. Any change will be published/hoisted in the updated version of this Guide at the first available opportunity.
                                    </p>
                                    
                                    
                                       <h5  style="margin:15px!important">
                                          Further Information
                                     </h5>
                                     <p  style="margin:15px!important">
                                         You may contact our front desk or other relevant member of the staff should you require further details. 
                                         <p  style="margin:15px!important">Approved by CVO: August 2022</p>
 <p  style="margin:15px!important">
     (Farhan Shahid Qazi)
CVO YouExcel
 </p>








                                     </p>
                                    
                                    
                                </div>
                            </div>

                          
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection