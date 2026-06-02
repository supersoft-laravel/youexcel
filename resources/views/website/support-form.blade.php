@extends('website.app', ['title'=>'Support Form'])

@section('content')<div class="breadcumb-wrapper " data-bg-src="">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                             <h1 class="breadcumb-title">Complaint/Support Form</h1>
            </div>
        </div>
    </div>
    <section class="">
        <div class="container">
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
                            <!--<div class="col-lg-12 text-center mb-4">-->
                            <!--    <img src="img/Yourexcel-img/excel-logo-new.png" alt="" style="width: 170px;">-->
                            <!--</div>-->
                          
                            <form action="{{url('submit-support-form')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">

                                <div class="col-lg-6">
                                    <label for="">Full Name <span style="color: red;">*</span></label>
                                    <input c name="name" class="form-control" placeholder="Your Name" required=""
                                           type="text">
                                </div>

                                <div class="col-lg-6">
                                    <label for="">Contact <span style="color: red;">*</span></label>
                                    <input class="form-control" name="phone" id="phone" placeholder="Phone No"
                                           required="" type="tel">
                                </div>

                                <div class="col-lg-6" style="margin-bottom:20px">
                                    <label for="">Registered Email Address <span style="color: red;">*</span></label>
                                    <input name="email" placeholder="Your Email Address"
                                           class="form-control"
                                           pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" required=""
                                           type="email">
                                </div>
                                
                                <div class="col-lg-6 mb-4">
                                    <label for="exampleFormControlSelect1">Enrolled Course Name: <span style="color: red;">*</span></label>
                                         <select class="form-control " name="course_id" id="yourcourse" required
                                            aria-label="Default select example"
                                            data-live-search="true" placeholder="Choose from dropdown list">
                                       
                                         @foreach($courses as $cour)
                                            <option value="{{$cour->id}}">{{$cour->coursename}}</option>
                                        @endforeach
                                     
                                        <option value="Other">Other</option>
                                    </select>
                                </div>


                                <div class="col-lg-6 mb-4">
                                    <label for="">Batch Number (eg: Power BI Batch 24): <span style="color: red;">*</span></label>
                                    <input name="batchno" placeholder="Enter your Batch Number"
                                           class="form-control"
                                            required
                                           type="text">
                                </div>
                                
                                <div class="col-lg-6 mb-4">
                                    <label for="request_type" class="form-label">Support Request Type <span style="color: red;">*</span></label>
                                    <select class="form-control" name="request_type" id="request_type" required>
                                        <option value="" selected disabled>Select Request Type</option>
                                        <option value="LMS Access">LMS Access</option>
                                        <option value="Recordings Issue">Recordings Issue</option>
                                        <option value="Certificate Request">Certificate Request</option>
                                        <option value="Course Extension">Course Extension</option>
                                        <option value="Access Revoked">Access Revoked</option>
                                        <option value="Payment/Invoice Issue">Payment/Invoice Issue</option>
                                        <option value="Trainer/Support">Trainer/Support</option>
                                        <option value="Technical Issue">Technical Issue</option>
                                        <option value="Session/Batch Concern">Session/Batch Concern</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>



                                <div class="col-lg-12">
                                    <label for="">Detailed Description of the Issue<span style="color: red;">*</span></label>
                                    <textarea class="form-control" name="comments" placeholder="Please explain your issue"
                                    required="" rows="5" cols="5"></textarea>

                                </div>
                                    
                                <div class="col-lg-12 mb-4">
                                    <label for="attachments">Attach a Screenshot / File <small>(Please compress the file to maximum 2 MB | You can select multiple files)</small></label>
                                    <input type="file" name="attachments[]" class="form-control @error('attachments.*') is-invalid @enderror" id="attachments" multiple>
                                
                                    @error('attachments.*')
                                        <span class="text-danger d-block mt-1">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12 mt-3 mb-3">
                                         <!-- Add Google reCAPTCHA -->
                                        <div class="g-recaptcha" data-sitekey="6LcCcgErAAAAAMj6AI5jc5za50PCchfFValVBY7Y"></div>
                                    </div>
                                    <div class="mb-3">
                                        @error('g-recaptcha-response')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                   </div>
                                </div>

                                <!--<div class="col-lg-12" style="margin-top:">-->
                                <!--    <div class="captcha d-flex align-items-center">-->
                                <!--        <div class="spinner">-->
                                <!--            <label class="d-flex mt-4 me-2" >-->
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

                                <div class="row pl-4">
                                    <div class="col-12 text-center">
                                        <button
                                          
                                            type="submit" class="vs-btn py-3">Submit
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
<!-- Add the reCAPTCHA script -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
