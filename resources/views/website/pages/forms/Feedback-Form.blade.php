@extends('website.app',['title'=> 'Feedback Form'])
@section('title', 'Feedback Form')
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
                        <h2>Feedback Form</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="">
        <div class="container">
            <div class="row">
                <!-- <div class="col-lg-12 main-banner-padding">
                    <div class="text-center mb-5">
                        <h1 class="font-register-h1">YouExcel - Training Feedback Form</h1>
                    </div>
                </div> -->
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <div class="card mb-5">

                        <div class="card-body" style="overflow-x: hidden;">
                            <div class="col-lg-12 text-center mb-4">
                                <img src="img/Yourexcel-img/excel-logo-new.png" alt="" style="width: 170px;">
                            </div>
                         
                            <form action="{{url('Feedback-Form')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="">Email <span style="color: red;">*</span></label>
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" name="email"
                                                   aria-describedby="emailHelp" placeholder="Enter email" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="">Full Name</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="fullname" name="fullname"
                                                   aria-describedby="emailHelp" placeholder="Full Name" required>
                                        </div>
                                    </div>
                                   
                                    <div class="col-lg-12 mb-4">
                                        <label for="exampleFormControlSelect1">Your Course: <span
                                                style="color: red;">*</span></label>
                                                   @if(isset($course))
                                       <input type="text" class="form-control" id="cfma"
                                                                       name="cfma"
                                                                       placeholder="CourseName"
                                                                       required value="{{$course}}"
                                                                       readonly>
                                                    </div>
                                                @else

                                                    <select class="form-control" name="cfma" id="cfma"
                                                            aria-label="Default select example" data-live-search="true"
                                                            required>
                                                        <!-- <option value="Choose from dropdown list" selected>Choose from dropdown list</option> -->
                                                        @foreach($courses as $cour)
                                                            <option value="{{$cour->coursename}}">{{$cour->coursename}}</option>
                                                        @endforeach
                                                        <option value="Other">Other</option>
                                                    </select>
                                                @endif
                                               
                                    </div>

                                   
                                    <!-- 1 -->
                                    <div class="col-lg-6 mt-4">
                                        <h5>I was properly briefed regarding the training before registering for this
                                            programme: <span style="color: red;">*</span></h5>

                                        <div class="custom-control custom-radio mt-4">
                                            <input type="radio" id="customRadio1" name="radio1"
                                                   class="custom-control-input"
                                                   value="Strongly Agree" required>
                                            <label class="custom-control-label" for="customRadio1">Strongly
                                                Agree</label>
                                        </div>
                                        <br>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio2" name="radio1"
                                                   class="custom-control-input"
                                                   value="Agree">
                                            <label class="custom-control-label" for="customRadio2">Agree</label>
                                        </div>
                                        <br>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio3" name="radio1"
                                                   class="custom-control-input"
                                                   value="Disagree">
                                            <label class="custom-control-label" for="customRadio3">Disagree</label>
                                        </div>
                                        <br>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio4" name="radio1"
                                                   class="custom-control-input"
                                                   value="Strongly disagree">
                                            <label class="custom-control-label" for="customRadio4">Strongly
                                                disagree</label>
                                        </div>
                                        <br>
                                    </div>
                                    <br>
                                    <!-- 2 -->
                                    <div class="col-lg-6 mt-4">
                                        <h5>All the topics were relevant and presented in a logical sequence <span
                                                style="color: red;">*</span></h5>

                                        <div class="custom-control custom-radio mt-4">
                                            <input type="radio" id="customRadio5" name="radio2"
                                                   class="custom-control-input"
                                                   value="Strongly Agree" required>
                                            <label class="custom-control-label" for="customRadio5">Strongly
                                                Agree</label>
                                        </div>
                                        <br>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio6" name="radio2"
                                                   class="custom-control-input"
                                                   value="Agree">
                                            <label class="custom-control-label" for="customRadio6">Agree</label>
                                        </div>
                                        <br>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio7" name="radio2"
                                                   class="custom-control-input"
                                                   value="Disagree">
                                            <label class="custom-control-label" for="customRadio7">Disagree</label>
                                        </div>
                                        <br>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio8" name="radio2"
                                                   class="custom-control-input"
                                                   value="Strongly disagree">
                                            <label class="custom-control-label" for="customRadio8">Strongly
                                                disagree</label>
                                        </div>
                                        <br>
                                    </div>
                                    <br>

                                    <!-- 3 -->
                                    <div class="col-lg-6 mt-4">
                                        <h5>The training has provided me with added technical and personality
                                            development skills to apply at work: <span style="color: red;">*</span></h5>

                                        <div class="custom-control custom-radio mt-4">
                                            <input type="radio" id="customRadio9" name="radio3"
                                                   class="custom-control-input"
                                                   value="Strongly Agree" required>
                                            <label class="custom-control-label" for="customRadio9">Strongly
                                                Agree</label>
                                        </div>
                                        <br>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio10" name="radio3"
                                                   class="custom-control-input"
                                                   value="Agree">
                                            <label class="custom-control-label" for="customRadio10">Agree</label>
                                        </div>
                                        <br>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio11" name="radio3"
                                                   class="custom-control-input"
                                                   value="Disagree">
                                            <label class="custom-control-label" for="customRadio11">Disagree</label>
                                        </div>
                                        <br>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio12" name="radio3"
                                                   class="custom-control-input"
                                                   value="Strongly disagree">
                                            <label class="custom-control-label" for="customRadio12">Strongly
                                                disagree</label>
                                        </div>
                                        <br>
                                    </div>
                                    <br>

                                    <!-- 4 -->
                                    <div class="col-lg-6 mt-4">
                                        <h5>The activities were timely and relevant to the needs of the training: <span
                                                style="color: red;">*</span></h5>

                                        <div class="custom-control custom-radio mt-4">
                                            <input type="radio" id="customRadio13" name="radio4"
                                                   class="custom-control-input"
                                                   value="Strongly Agree" required>
                                            <label class="custom-control-label" for="customRadio13">Strongly
                                                Agree</label>
                                        </div>
                                        <br>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio14" name="radio4"
                                                   class="custom-control-input"
                                                   value="Agree">
                                            <label class="custom-control-label" for="customRadio14">Agree</label>
                                        </div>
                                        <br>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio15" name="radio4"
                                                   class="custom-control-input"
                                                   value="Disagree">
                                            <label class="custom-control-label" for="customRadio15">Disagree</label>
                                        </div>
                                        <br>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio16" name="radio4"
                                                   class="custom-control-input"
                                                   value="Strongly disagree">
                                            <label class="custom-control-label" for="customRadio16">Strongly
                                                disagree</label>
                                        </div>
                                        <br>
                                    </div>
                                    <br>

                                    <!-- 5 -->
                                    <div class="col-lg-6 mt-4">
                                        <h5>The methods used are participatory and consensus building activities were
                                            timely and relevant to the needs of the training: <span style="color: red;">*</span>
                                        </h5>
                                        <div class="custom-control custom-radio mt-4">
                                            <input type="radio" id="customRadio17" name="radio5"
                                                   class="custom-control-input"
                                                   value="Strongly Agree" required>
                                            <label class="custom-control-label" for="customRadio17">Strongly
                                                Agree</label>
                                        </div>
                                        <br>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio18" name="radio5"
                                                   class="custom-control-input"
                                                   value="Agree">
                                            <label class="custom-control-label" for="customRadio18">Agree</label>
                                        </div>
                                        <br>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio19" name="radio5"
                                                   class="custom-control-input"
                                                   value="Disagree">
                                            <label class="custom-control-label" for="customRadio19">Disagree</label>
                                        </div>
                                        <br>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio20" name="radio5"
                                                   class="custom-control-input"
                                                   value="Strongly disagree">
                                            <label class="custom-control-label" for="customRadio20">Strongly
                                                disagree</label>
                                        </div>
                                        <br>
                                    </div>
                                    <br>

                                    <!-- 6 -->
                                    <div class="col-lg-6 mt-4">
                                        <h5>My experiences were utilized through brainstorming activities: <span
                                                style="color: red;">*</span></h5><br>

                                        <div class="custom-control custom-radio mt-4">
                                            <input type="radio" id="customRadio21" name="radio6"
                                                   class="custom-control-input"
                                                   value="Strongly Agree" required>
                                            <label class="custom-control-label" for="customRadio21">Strongly
                                                Agree</label>
                                        </div>
                                        <br>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio22" name="radio6"
                                                   class="custom-control-input"
                                                   value="Agree">
                                            <label class="custom-control-label" for="customRadio22">Agree</label>
                                        </div>
                                        <br>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio23" name="radio6"
                                                   class="custom-control-input"
                                                   value="Disagree">
                                            <label class="custom-control-label" for="customRadio23">Disagree</label>
                                        </div>
                                        <br>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio24" name="radio6"
                                                   class="custom-control-input"
                                                   value="Strongly disagree">
                                            <label class="custom-control-label" for="customRadio24">Strongly
                                                disagree</label>
                                        </div>
                                        <br>
                                    </div>
                                    <br>

                                    <!-- 7 -->
                                    <div class="col-lg-6 mt-4">
                                        <h5>The Co-ordinators were sensitive to the needs of the participants: <span
                                                style="color: red;">*</span></h5>

                                        <div class="custom-control custom-radio mt-4">
                                            <input type="radio" id="customRadio25" name="radio7"
                                                   class="custom-control-input"
                                                   value="Strongly Agree" required>
                                            <label class="custom-control-label" for="customRadio25">Strongly
                                                Agree</label>
                                        </div>
                                        <br>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio26" name="radio7"
                                                   class="custom-control-input"
                                                   value="Agree">
                                            <label class="custom-control-label" for="customRadio26">Agree</label>
                                        </div>
                                        <br>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio27" name="radio7"
                                                   class="custom-control-input"
                                                   value="Disagree">
                                            <label class="custom-control-label" for="customRadio27">Disagree</label>
                                        </div>
                                        <br>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio28" name="radio7"
                                                   class="custom-control-input"
                                                   value="Strongly disagree">
                                            <label class="custom-control-label" for="customRadio28">Strongly
                                                disagree</label>
                                        </div>
                                        <br>
                                    </div>
                                    <br>

                                    <!-- 8 -->
                                    <div class="col-lg-6 mt-4">
                                        <h5>Materials were readily provided by the training management: <span
                                                style="color: red;">*</span></h5>

                                        <div class="custom-control custom-radio mt-4">
                                            <input type="radio" id="customRadio29" name="radio8"
                                                   class="custom-control-input"
                                                   value="Strongly Agree" required>
                                            <label class="custom-control-label" for="customRadio29">Strongly
                                                Agree</label>
                                        </div>
                                        <br>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio30" name="radio8"
                                                   class="custom-control-input"
                                                   value="Agree">
                                            <label class="custom-control-label" for="customRadio30">Agree</label>
                                        </div>
                                        <br>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio31" name="radio8"
                                                   class="custom-control-input"
                                                   value="Disagree">
                                            <label class="custom-control-label" for="customRadio31">Disagree</label>
                                        </div>
                                        <br>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio32" name="radio8"
                                                   class="custom-control-input"
                                                   value="Strongly disagree">
                                            <label class="custom-control-label" for="customRadio32">Strongly
                                                disagree</label>
                                        </div>
                                        <br>
                                    </div>
                                    <br>

                                    <!-- 9 -->
                                    <div class="col-lg-6 mt-4">
                                        <h5>Questions and Concerns were handled properly and in timely manner: <span
                                                style="color: red;">*</span></h5>

                                        <div class="custom-control custom-radio mt-4">
                                            <input type="radio" id="customRadio33" name="radio9"
                                                   class="custom-control-input"
                                                   value="Strongly Agree" required>
                                            <label class="custom-control-label" for="customRadio33">Strongly
                                                Agree</label>
                                        </div>
                                        <br>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio34" name="radio9"
                                                   class="custom-control-input"
                                                   value="Agree">
                                            <label class="custom-control-label" for="customRadio34">Agree</label>
                                        </div>
                                        <br>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio35" name="radio9"
                                                   class="custom-control-input"
                                                   value="Disagree">
                                            <label class="custom-control-label" for="customRadio35">Disagree</label>
                                        </div>
                                        <br>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio36" name="radio9"
                                                   class="custom-control-input"
                                                   value="Strongly disagree">
                                            <label class="custom-control-label" for="customRadio36">Strongly
                                                disagree</label>
                                        </div>
                                        <br>
                                    </div>
                                    <br>

                                    <!-- 10 -->
                                    <div class="col-lg-6 mt-4">
                                        <h5>Overall, this training was a successful experience for me: <span
                                                style="color: red;">*</span></h5>

                                        <div class="custom-control custom-radio mt-4">
                                            <input type="radio" id="customRadio37" name="radio10"
                                                   class="custom-control-input"
                                                   value="Strongly Agree" required>
                                            <label class="custom-control-label" for="customRadio37">Strongly
                                                Agree</label>
                                        </div>
                                        <br>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio38" name="radio10"
                                                   class="custom-control-input"
                                                   value="Agree">
                                            <label class="custom-control-label" for="customRadio38">Agree</label>
                                        </div>
                                        <br>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio39" name="radio10"
                                                   class="custom-control-input"
                                                   value="Disagree">
                                            <label class="custom-control-label" for="customRadio39">Disagree</label>
                                        </div>
                                        <br>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio40" name="radio10"
                                                   class="custom-control-input"
                                                   value="Strongly disagree">
                                            <label class="custom-control-label" for="customRadio40">Strongly
                                                disagree</label>
                                        </div>
                                        <br>
                                    </div>
                                       <div class="col-lg-12 mt-4">
                                        <h5>On a scale of 0 to 10, how likely are you to recommend YouExcel to a colleague/friend looking to improve their skills in the training program you atteded: <span
                                                style="color: red;">*</span></h5>
                                     <div class="d-flex flex-wrap flex-row justify-content-evenly mt-5">
    <div class="custom-control custom-radio">
        <input type="radio" id="radio101-0" name="radio101" class="custom-control-input" value="0">
        <label class="custom-control-label" for="radio101-0">0</label>
    </div>
    
    <div class="custom-control custom-radio">
        <input type="radio" id="radio101-1" name="radio101" class="custom-control-input" value="1">
        <label class="custom-control-label" for="radio101-1">1</label>
    </div>
    
    <div class="custom-control custom-radio">
        <input type="radio" id="radio101-2" name="radio101" class="custom-control-input" value="2">
        <label class="custom-control-label" for="radio101-2">2</label>
    </div>
    
    <div class="custom-control custom-radio">
        <input type="radio" id="radio101-3" name="radio101" class="custom-control-input" value="3">
        <label class="custom-control-label" for="radio101-3">3</label>
    </div>
    
    <div class="custom-control custom-radio">
        <input type="radio" id="radio101-4" name="radio101" class="custom-control-input" value="4">
        <label class="custom-control-label" for="radio101-4">4</label>
    </div>
    
    <div class="custom-control custom-radio">
        <input type="radio" id="radio101-5" name="radio101" class="custom-control-input" value="5">
        <label class="custom-control-label" for="radio101-5">5</label>
    </div>
    
    <div class="custom-control custom-radio">
        <input type="radio" id="radio101-6" name="radio101" class="custom-control-input" value="6">
        <label class="custom-control-label" for="radio101-6">6</label>
    </div>
    
    <div class="custom-control custom-radio">
        <input type="radio" id="radio101-7" name="radio101" class="custom-control-input" value="7">
        <label class="custom-control-label" for="radio101-7">7</label>
    </div>
    
    <div class="custom-control custom-radio">
        <input type="radio" id="radio101-8" name="radio101" class="custom-control-input" value="8">
        <label class="custom-control-label" for="radio101-8">8</label>
    </div>
    
    <div class="custom-control custom-radio">
        <input type="radio" id="radio101-9" name="radio101" class="custom-control-input" value="9">
        <label class="custom-control-label" for="radio101-9">9</label>
    </div>
    
    <div class="custom-control custom-radio">
        <input type="radio" id="radio101-10" name="radio101" class="custom-control-input" value="10">
        <label class="custom-control-label" for="radio101-10">10</label>
    </div>
</div>
 
                                    </div>
                                    
                                    
                                    <br>
                                </div>

                                <div class="row p-3">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Kindly share your experience and how this
                                                course has benefited you as a testimonial for our future candidates.
                                                Your testimonial may be shared on Social Media:<span
                                                    style="color: red;">*</span></label>
                                            <input type="text" class="form-control" id="socailmedia" name="socailmedia"
                                                   placeholder="Your Answer"
                                                   required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Any Comments / Suggestions on this course
                                                and for future courses that may help in excelling in your Professional /
                                                Personal lives:</label>
                                            <input type="text" class="form-control" id="personallive"
                                                   name="personallive"
                                                   placeholder="Your Answer" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Feedback about the conduct of Trainer(s) such as Punctuality, Regularity, Knowledge and Command on subject: </label>
                                            <input type="text" class="form-control" id="powerbi" name="powerbi"
                                                   placeholder="Your Answer" required>
                                        </div>
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
                                <div class="row pl-4 mt-3">
                                    <div class="col-lg-12 text-center">
                                        <button type="submit" class="vs-btn py-3">Submit</button>
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
