@extends('website.app', ['title'=>'TNA - 2025'])

@section('content')
<br> <br>
<br>
<br>

<section class="py-3 background-image" style="background-image: url(&quot;assets/img/bg/tutor-bg-1.jpg&quot;);">
    <div class="container">
        <div class="row flex-row-reverse justify-content-between">
            <div class="col-md-12 col-lg-12 col-xl-12 d-flex flex-column align-items-center text-center mb-4 pb-md-0">
    <img class="mx-auto" style="width: 70%;" src="https://youexceltraining.com/img/Yourexcel-img/assements.jpg" alt="Dinosaur" />
    <div class="breadcumb-content text-center mt-3">
                             <p class="breadcumb-text" style="color:black">
                                 <b style="font-size: 2rem;">YouExcel Training Needs Assessment (TNA) – 2025</b></p>
                                 <p style="font-size: 1.2rem;">Thank you for taking the time to help us understand your training needs and interests. Your feedback will guide us in designing relevant training programs for the upcoming year.</p>
            </div>   
                        </div>
                    </div></div></section>







    <section class="section-demofeature">
        <div class="container top-padding-register">
            <div class="row">
                <!-- <div class="col-lg-12 main-banner-padding">
                    <div class="text-center mb-5">
                        <h1 class="font-register-h1">YouExcel - Training Feedback Form</h1>
                    </div>
                </div> -->
                <div class="col-lg-1"></div>
                <div class="col-lg-10 ">
                    <div class="card mb-5">

                        <div class="card-body" style="overflow-x: hidden;">
                            <div class="col-lg-12 text-center mb-4">
                                <img src="img/Yourexcel-img/excel-logo-new.png" alt="" style="width: 170px;">
                            </div>
                       
                            <form action="{{url('assestform')}}" method="POST">
                                @csrf
                                <div class="row">

                                    <div class="col-lg-4">
                                        <label for="">Name <span style="color: red;">*</span></label>
                                        <input c name="name" class="form-control" placeholder="Your Name" required="" type="text">
                                    </div>

                                    <div class="col-lg-3">
                                        <label for="">Contact No<span style="color: red;">*</span></label>
                                        <input  class="form-control" name="contact" id="contact" placeholder="Phone No" required="" type="tel">
                                    </div>
                                    
                                     

                                    
                                 
                                    <div class="col-lg-4">
                                        <label for="">Are you a <span style="color: red;">*</span></label>
                                           
                                            <select class="form-control " name="member" id="member"
                                                    aria-label="Default select example" data-live-search="true"
                                                    placeholder="Choose from dropdown list">

                                                <option value="YouExcel Alumni Member">YouExcel Alumni Member</option>
                                                <option value="New Learner">New Learner</option>  
                                            </select>
                                      

                                    </div>
                                    
                                    <div  class="col-lg-12">
                                        <label for="">Preferred Training Topics for 2025 (AI, IT or Finance Related)<span style="color: red;">*</span></label>
                                        <input name="topic"
                                               class="form-control"
                                              required=""
                                               type="text">
                                    </div>

                                    <div class="col-lg-4 mt-3">
                                        <label for="">Preferred Learning Format<span style="color: red;">*</span></label>
                                           
                                            <select class="form-control " name="format" id="format"
                                                    aria-label="Default select example" data-live-search="true"
                                                    placeholder="Choose from dropdown list">

                                                <option value="In-person (classroom-based)">In-person (classroom-based)</option>
                                                <option value="Online (live virtual sessions)">Online (live virtual sessions)</option>
                                                <option value="Self-paced (recorded sessions)">Self-paced (recorded sessions)</option>
                                            </select>
                                      

                                    </div>
                                    
                                    <div class="col-lg-4 mt-3">
                                        <label for="">Duration Preference for Training<span style="color: red;">*</span></label>
                                           
                                            <select class="form-control " name="duration" id="duration"
                                                    aria-label="Default select example" data-live-search="true"
                                                    placeholder="Choose from dropdown list">

                                                <option value="Professional Development Training Workshops (1-3 Days)">Professional Development Training Workshops (1-3 Days)</option>
                                                <option value="Short Courses Certifications (1-3 Months)">Short Courses Certifications (1-3 Months)</option>
                                                <option value="Extended Diploma (6 Months+)">Extended Diploma (6 Months+)</option>
                                            </select>
                                      

                                    </div>


                                    
                                    <div class="col-lg-12 mt-3">
                                          <label for="">Remarks: Is there anything specific you hope to achieve from future training?</label>
                                        <textarea class="form-control" name="remark" placeholder="Remarks" rows="4"></textarea>


                                    </div>
                                    
                                    <br/><br/>

                                



                                </div>
                                <div class="row pl-4">
                                    <div class="col-12 text-center">
                                        <br/>
                                        <button
                                          
                                            type="submit" class="vs-btn py-3">Submit</button>
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
