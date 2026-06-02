@extends('website.app')

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
                            <div class="col-lg-12 text-center mb-4">
                                <img src="img/Yourexcel-img/excel-logo-new.png" alt="" style="width: 170px;">
                            </div>
                            <h2 class="mb-5 text-center">Enquire Now</h2>
                            <form action="{{url('nomanformcustomBBS')}}" method="POST">
                                @csrf
                                <div class="row">

                                    <div class="col-lg-4">
                                        <label for="">Name <span style="color: red;">*</span></label>
                                        <input  name="name" class="form-control" placeholder="Your Name" required=""
                                               type="text">
                                    </div>

                                    <div class="col-lg-4">
                                        <label for="">Contact <span style="color: red;">*</span></label>
                                        <input class="form-control" name="phone" id="phone" placeholder="Phone No"
                                               required="" type="tel">
                                    </div>

                                    <div class="col-lg-4">
                                        <label for="">Email <span style="color: red;">*</span></label>
                                        <input name="email" placeholder="Your Email Address"
                                               class="form-control"
                                               pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" required=""
                                               type="email">
                                    </div>

                                    <div class="col-lg-4">
                                        <label for="">Course <span style="color: red;">*</span></label>
                                        @if(isset($course_name))
                                            <input class="form-control" name="coursesintrested" id="coursesintrested"
                                                   readonly="true" value="{{$course_name}}">
                                        @else
                                            <select class="form-control selectpicker" name="coursesintrested"
                                                    id="coursesintrested"
                                                    aria-label="Default select example" data-live-search="true"
                                                    placeholder="Choose from dropdown list">
                                                <!-- <option value="Choose from dropdown list" selected readonly>Choose from dropdown list</option> -->
                                                <option selected value="0">Please select option</option>
                                                <option value="Computerized Accounting">Computerized Accounting
                                                </option>
                                                <option value="Certificate in Office Management Course">
                                                    Certificate in Office Management Course
                                                </option>
                                                <!--<option value="Other">Other</option>-->
                                            </select>
                                        @endif

                                    </div>


                                    <div class="col-lg-4">
                                        <label for="">Comments</label>
                                        <input class="form-control" name="comments" placeholder="Comments" type="text">

                                    </div>
                                    <br/><br/>

                                    <div class="col-lg-12" style="margin-top:20px">
                                        <div class="captcha">
                                            <div class="spinner">
                                                <label>
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
                                                <img src="img/Yourexcel-img/captcha.PNG"/>
                                                <p>reCAPTCHA</p>
                                                <!-- <small>Privacy - Terms</small> -->
                                            </div>
                                        </div>

                                    </div>
                                    <!-- <input name="datetime" placeholder="Date & Time" required="" type="datetime-local"> -->

                                    <!-- <input name="coursesintrested" placeholder="Course You are Intrested In " required=""
                                        type="text"> -->
                                    <!-- <input type="search" placeholder="Type of Courses"> -->


                                    {{--                                   f--}}
                                </div>
                                <div class="row pl-4">
                                    <div class="col-12 text-center">
                                        <br/>
                                        <button
                                                style="width:30%"
                                                type="submit" class="btn btn-lmslogin1">Submit
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
