@extends('website.app', ['title'=>'FOC Enquiry Form'])

@section('content')
    <section class="section-demofeature">
        <div class="container top-padding-register">
            <div class="row">
                <!-- <div class="col-lg-12 main-banner-padding">
                    <div class="text-center mb-5">
                        <h1 class="font-register-h1">YouExcel - Training Feedback Form</h1>
                    </div>
                </div> -->
                <div class="col-lg-1"></div>
                <div class="col-lg-10 main-banner-padding">
                    <div class="card mb-5">

                        <div class="card-body" style="overflow-x: hidden;">
                            <div class="row logosDiv">
                                        <div class="col-6 text-center">
                                      
                                            <img style="width: 163px;height: 105px;" src="https://youexceltraining.com/img/Yourexcel-img/excel-logo-new.png">
                                        </div>
                                         <div class="col-6 text-center">
                                           <img style="idth: 200px;height: 106px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRvuJdiwUwCHpaftFqup50YOe8zIg2vTI_iOGZqDpJjIW90ZtYWpS0z_FzjYebLi75H2u0&usqp=CAU">
                                        </div>

                                    

                                        <div class="col-md-3">
                                            <!--	<img src="img/33.png" class="center" />-->
                                        </div>

                                </div>
                                
                                <br/><br/>
                                 <div class="row pl-4">
                                    <div class="col-12">
                                        <h4>Eligibility Criteria</h3>
                                        <p style="color:red;font-size:13px">Valid CNIC Holder</p>
                                         <p style="color:red;font-size:13px"> Computer Science or related field students from 5th semester onwards</p>
                                          <p style="color:red;font-size:13px">Bachelors with Math, Statistics, or Engineering can also apply</p>
                                         <p style="color:red;font-size:13px"> Only those who haven’t previously taken a NAVTTC course can apply for this Program</p>
                                    </div>
                                </div>
                                
                            <h2 class="mb-5 text-center">Enquiry Form</h2>
                            <form action="{{url('nomanformcustom')}}" method="POST">
                                @csrf
                                
                               
                                
                                <div class="row">

                                    <div class="col-lg-4">
                                        <label for="">Name <span style="color: red;">*</span></label>
                                        <input c name="name" class="form-control" placeholder="Your Name" required
                                               type="text">
                                    </div>

                                    <div class="col-lg-4">
                                        <label for="">Contact No ( Mobile/Whatsapp no) <span style="color: red;">*</span></label>
                                        <input class="form-control" name="phone" id="phone" placeholder="Phone No"
                                               required type="tel">
                                    </div>

                                    <div class="col-lg-4">
                                        <label for="">Gender <span style="color: red;">*</span></label>
                                        <input class="form-control" name="gender" id="gender" placeholder="Gender"
                                                type="text">
                                    </div>
                                    
                                    
                                     <div class="col-lg-4">
                                        <label for="">Area <span style="color: red;">*</span></label>
                                        <input class="form-control" name="area" id="area" placeholder="Area"
                                                type="text">
                                    </div>


                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <span class="form-label">Applicant CNIC<span
                                                    style="color: red;">*</span></span>
                                            <input

                                                data-inputmask="'mask': '99999-9999999-9'"
                                                placeholder="XXXXX-XXXXXXX-X"
                                                 class="form-control" type="text" name="cnic">
                                        </div>
                                    </div>
                                            
                                    <div class="col-lg-4">
                                        <label for="">Email <span style="color: red;">*</span></label>
                                        <input name="email" placeholder="Your Email Address"
                                               class="form-control"
                                               pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" required
                                               type="email">
                                    </div>
                                    
                                     <div class="col-lg-4">
                                        <label for="">Address <span style="color: red;">*</span></label>
                                        <input class="form-control" name="address" id="address" placeholder="Address"
                                               type="text">
                                    </div>
                                    
                                      <div class="col-lg-4">
                                        <label for="">City <span style="color: red;">*</span></label>
                                        <input class="form-control" name="city" id="City" placeholder="City"
                                               required type="text">
                                    </div>
                                    
                                      <div class="col-lg-4">
                                        <label for="">Age <span style="color: red;">*</span></label>
                                        <input class="form-control" name="age" id="Age" placeholder="Age"
                                                type="text">
                                    </div>
                                    
                                      <div class="col-lg-4">
                                        <label for="">Education <span style="color: red;">*</span></label>
                                        <input class="form-control" name="education" id="Education" placeholder="Education"
                                              type="text">
                                    </div>

                                    <div class="col-lg-4">
                                        <label for="">Course(First Preference) <span style="color: red;">*</span></label>
                                        @if(isset($course_name))
                                            
                                        @else
                                            <select class="form-control " name="coursesintrested"
                                                    required >
                                                <!-- <option value="Choose from dropdown list" selected readonly>Choose from dropdown list</option> -->
                                                <!--<option selected value="0">Course(First Preference)</option>-->
                                                <!--<option value="Computerized Accounting">Computerized-->
                                                <!--                Accounting-->
                                                <!--            </option>-->
                                                   <option value="" disabled selected>Select First Course </option>
                                                        <option value="Big Data Analytic Technique">Big Data Analytic Technique</option>
                                                          <option value="Advanced Python Programming & Applications
">Advanced Python Programming & Applications
                                                     <option value="Advanced Programming Coding Machine Learning">Advanced Programming/Coding (Machine Learning)</option>
</option>
                                            </select>
                                        @endif

                                    </div>
                                    
                                     <div class="col-lg-4">
                                        <label for="">Course(Second Preference) <span style="color: red;">*</span></label>
                                        @if(isset($course_name))
                                            <input class="form-control" name="coursesintrestedsecond" id="coursesintrestedsecond"
                                                   readonly="true" value="{{$course_name}}">
                                        @else
                                            <select class="form-control " name="coursesintrestedsecond"
                                                   required="required" >
                                                <!-- <option value="Choose from dropdown list" selected readonly>Choose from dropdown list</option> -->
                                                <!--<option selected value="0">Course(Second Preference)</option>-->
                                                <!--<option value="Computerized Accounting">Computerized-->
                                                <!--                Accounting-->
                                                <!--            </option>-->
                                                  <option value="" disabled selected>Select Second Course </option>
                                                    <option value="Big Data Analytic Technique">Big Data Analytic Technique</option>
                                                          <option value="Advanced Python Programming & Applications
">Advanced Python Programming & Applications
                                                     <option value="Advanced Programming Coding Machine Learning">Advanced Programming/Coding (Machine Learning)</option>
</option>
                                            </select>
                                        @endif
    
                                    </div>
                                    
                                    <div class="col-lg-4">
                                        <label for="">Course(Third Preference) <span style="color: red;">*</span></label>
                                        @if(isset($course_name))
                                            <input class="form-control" name="coursesintrestedthird" id="coursesintrestedthird"
                                                   readonly="true" value="{{$course_name}}">
                                        @else
                                            <select class="form-control " name="coursesintrestedthird"
                                                   required="required">
                                                <!-- <option value="Choose from dropdown list" selected readonly>Choose from dropdown list</option> -->
                                                <!--<option selected value="0">Course(Third Preference) </option>-->
                                                <!--<option value="Computerized Accounting">Computerized-->
                                                <!--                Accounting-->
                                                <!--            </option>-->
                                                  <option value="" disabled selected>Select Third Course </option>
                                                  <option value="" disabled selected>Select Third Course </option>
                                                     <option value="Big Data Analytic Technique">Big Data Analytic Technique</option>
                                                          <option value="Advanced Python Programming & Applications
">Advanced Python Programming & Applications
                                                     <option value="Advanced Programming Coding Machine Learning">Advanced Programming/Coding (Machine Learning)</option>
</option>
                                            </select>
                                        @endif
    
    
    
                                    </div>
                               
                                    
                                    
                              
                                    <div class="col-md-4">
                                                <div class="form-group">
                                                       <label for="">Class Timing Preference <span style="color: red;">*</span></label>
                                                         <select class="form-control " name="class_timing"
                                                    id="class_timing" required="required"
                                                   >
                                                <option value="" disabled selected>Select Timing Preference </option>
                                                <option   value="Morning: 8:30 am to 1:30 pm"> Morning: 8:30 am to 1:30 pm </option>
                                                <option  value="Afternoon: 1:30 pm to 5:30 pm">Afternoon: 1:30 pm to 5:30 pm</option>
                                                <option  value=" Evening: 4:30 pm to 9:30 pm"> Evening: 4:30 pm to 9:30 pm</option>
                                                <option  value="Flexible with Any time">Flexible with Any time</option>
                                            </select>
                                                  
                                                </div>
                                                

                                                
                                            </div>
                                    
                                           <div class="col-lg-4">
                                        <label for="">Comments</label>
                                        <input class="form-control" name="comments" placeholder="Comments" type="text">

                                    </div>


                                  
                                    <br/><br/>


                                
                                <br/><br/>
                                    <!--<div class="col-lg-12" style="margin-top:20px">-->
                                    <!--    <div class="captcha">-->
                                    <!--        <div class="spinner">-->
                                    <!--            <label>-->
                                    <!--                <input type="checkbox"-->

                                    <!--                       onclick="$(this).attr('disabled','disabled');"-->
                                    <!--                       required>-->
                                    <!--                <span class="checkmark"><span>&nbsp;</span></span>-->
                                    <!--            </label>-->
                                    <!--        </div>-->
                                    <!--        <div class="text1">-->
                                    <!--            I'm not a robot-->
                                    <!--        </div>-->
                                    <!--        <div class="logo">-->
                                    <!--            <img src="img/Yourexcel-img/captcha.PNG"/>-->
                                    <!--            <p>reCAPTCHA</p>-->
                                                <!-- <small>Privacy - Terms</small> -->
                                    <!--        </div>-->
                                    <!--    </div>-->

                                    <!--</div>-->
                                    <!-- <input name="datetime" placeholder="Date & Time" required="" type="datetime-local"> -->

                                    <!-- <input name="coursesintrested" placeholder="Course You are Intrested In " required=""
                                        type="text"> -->
                                    <!-- <input type="search" placeholder="Type of Courses"> -->


                                  
                                </div>
                               
                                <div class="row pl-4">
                                    <div class="col-12 text-center">
                                        <br/>
                                        <button
                                            style="width:30%"
                                            type="submit" class="btn btn-primary">Submit
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    
    
    
    
@endsection
