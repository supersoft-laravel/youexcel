@extends('website.app', ['title' => 'Registration Form'])
@section('title', 'Registration Form')
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
        .blinking-note {
            color: red;
            font-weight: bold;
            font-size: 14px;
            margin-top: 8px;
            animation: blinkText 3s infinite;
        }
        
        @keyframes blinkText {
            0%   { opacity: 1; }
            50%  { opacity: 0; }
            100% { opacity: 1; }
        }
    </style>
    <section class="space-top space-extra-bottom section-header">
        <div class="bg-pattern"></div>
        <div class="container section-content text-center">
            <div class="section-title">
                <h2>
                    Registration Form
                </h2>
            </div>
        </div>
    </section>
    <section class="">
        <div class="container">
            <div class="row">
                <!-- <div class="col-lg-12 ">
                        <div class="text-center mb-5">
                            <h1 class="font-register-h1">YouExcel Training Course Registration Form</h1>
                        </div>
                    </div> -->
                <div class="col-lg-1"></div>
                <div class="col-lg-10 main-banner-padding">
                    <div class="card mb-5">

                        <div class="card-body ">
                            <div class="col-lg-12 text-center mb-4">
                                <img src="{{ url('/img/Yourexcel-img/excel-logo-new.png') }}" alt=""
                                    style="width: 170px;">
                            </div>
                            <div class="col-lg-12 text-center">
                                <p class="blinking-note">
                                    ⚠️ Please fill out the form carefully. Once submitted, changes cannot be made.
                                    The name you enter will appear on your certificate.
                                </p>
                            </div>


                            <form action="{{  route('Registration-Form-two') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="email">Email<span style="color: red;">*</span></label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                aria-describedby="emailHelp" placeholder="Enter email"
                                                pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="">Registartion Type <span style="color: red;">*</span></label>
                                        <select class="form-control" id="registration_type" name="registration_type" required>
                                            <option value="">Select Registration Type</option>
                                            <option value="Individual Learner (Self-Paid)">Individual Learner (Self-Paid)</option>
                                            <option value="Corporate / Organization (Sponsored by Organization)">Corporate / Organization (Sponsored by Organization)</option>
                                        </select>
                                    </div>
                                    @if (isset($course))
                                        <input type="text" name="course_id" value="{{ $course->id }}" hidden>
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Program <span style="color: red;">*</span></label>
                                            @if (isset($course_name))
                                                <input type="text" class="form-control" id="cfma" name="course_name" placeholder="CourseName" required
                                                    value="{{ $course_name }}" readonly>
                                            @else
                                                <select class="form-control" name="course_id" id="cfma" aria-label="Default select example"
                                                    data-live-search="true" required>
                                                    @foreach ($courses as $cour)
                                                        <option value="{{ $cour->id }}">{{ $cour->coursename }}
                                                        </option>
                                                    @endforeach
                                                    <option value="Other">Other</option>
                                                </select>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Complete Name (As per your last education
                                                document)</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="Name" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Father's Name/Husband's Name <span
                                                    style="color: red;">*</span></label>
                                            <input type="text" class="form-control" id="fname" name="fname"
                                                placeholder="Father's Name/Husband's Name" required>
                                        </div>
                                    </div>

                                    <!-- <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Date & Time <span
                                                        style="color: red;">*</span></label>
                                                <input type="datetime-local" class="form-control" id="datetime" name="datetime"
                                                    placeholder="Date & Time" required>
                                            </div>
                                        </div> -->

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Complete Address <span
                                                    style="color: red;">*</span></label>
                                            <input type="text" class="form-control" id="address" name="address"
                                                placeholder="Complete Address" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">City <span
                                                    style="color: red;">*</span></label>
                                            <input type="text" class="form-control" id="city" name="city"
                                                placeholder="City" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Employer Name <span
                                                    style="color: red;">*</span></label>
                                            <input type="text" class="form-control" id="empname" name="empname"
                                                placeholder="Employer Name" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Designation <span
                                                    style="color: red;">*</span></label>
                                            <input type="text" class="form-control" id="designation "
                                                name="designation" placeholder="Designation" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Cell / WhatsApp Number<span
                                                    style="color: red;">*</span></label>
                                            <input {{--                                                data-inputmask="'mask': '0399-9999999'" --}} placeholder="Mobile No(XXXX-XXXXXXX)"
                                                type="text" class="form-control" id="phone" name="cellnumber"
                                                required="">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Date of Birth (MM-DD-YYYY) <span
                                                    style="color: red;">*</span></label>
                                            <input type="date" class="form-control" id="date " name="date"
                                                placeholder="Date Of Birth" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">CNIC/National ID No: <span
                                                    style="color: red;">*</span></label>
                                            <input type="text" class="form-control"
                                                data-inputmask="'mask': '99999-9999999-9'" placeholder="XXXXX-XXXXXXX-X"
                                                id="cnic " name="cnic" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Qualifications <span
                                                    style="color: red;">*</span></label>
                                            <input type="text" class="form-control" id="qualification  "
                                                name="qualification" placeholder="Qualification" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Upload Your Image <span
                                                    style="color: red;">*</span></label>
                                            <input type="file" class="form-control" id="file1"
                                                name="file1" style="border:none" placeholder="" required>
                                        </div>
                                    </div>
                                    <!--<div class="col-lg-6">-->
                                    <!--    <div class="form-group">-->
                                    <!--        <label for="exampleInputPassword1">Upload the Payment Proof / Screenshot here</label>-->
                                    <!--        <input type="file" class="form-control" id="file2" name="file2"-->
                                    <!--            style="border:none" placeholder="">-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="cnic_front">Upload CNIC Front Photo <span
                                                    style="color: red;">*</span></label>
                                            <input type="file" class="form-control" id="cnic_front"
                                                name="cnic_front" style="border:none" placeholder="" required>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="cnic_back">Upload CNIC Back Photo <span
                                                    style="color: red;">*</span></label>
                                            <input type="file" class="form-control" id="cnic_back"
                                                name="cnic_back" style="border:none" placeholder="" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pl-4" style="display: inline-flex;">
                                    <h6 class="">Declaration</h6>
                                    <div class="col-lg-12 pl-0">

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" required
                                                name="check" id="customCheck1">
                                            <label class="form-check-label" for="customCheck1">
                                                I confirm that the information given on this form is
                                                complete and accurate and
                                                nothing has been omitted. I accept that if I don’t fully comply with the
                                                requirement
                                                of the institute it can reject my application at any stage. I understand
                                                that
                                                all
                                                the dues I have paid are non-refundable, and that I shall abide by the <a
                                                    style="color: blue;" href="/Student-Policy">student policy</a> of
                                                YouExcel.
                                                I, hereby, give my consent to the <a href="/Privacy-Policy"
                                                    style="color: blue;">privacy policy </a>of
                                                YouExcel.
                                            </label>
                                        </div>
                                        <div class="form-check" style="
    padding-bottom: 4px;
">


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

                                <div class="col-lg-12 mt-4 text-center">
                                    <button type="submit" class="vs-btn py-3">Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
<!-- Add the reCAPTCHA script -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
