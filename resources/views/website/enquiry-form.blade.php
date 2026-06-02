@extends('website.app', ['title' => 'Enquiry Form'])

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
                        <h2>Enquiry Form</h2>
                        <p>Start a conversation with one of our Training Solutions Experts to see if YouExcel is the
                                right platform to fuel your Career Growth.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section-demofeature">
        <div class="container top-padding-register">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10 ">
                    <div class="card mb-5">

                        <div class="card-body" style="overflow-x: hidden;">
                            <div class="col-lg-12 text-center mb-4">
                                <img src="{{asset('img/Yourexcel-img/excel-logo-new.png')}}" alt="" style="width: 170px;">
                            </div>
                            <h4 class="text-center">Enquiry Form</h4>

                            <form action="{{ url('nomanform') }}" method="POST">
                                @csrf
                                <div class="row">
                            
                                    <div class="col-lg-6">
                                        <label for="">Enquiry Type <span style="color: red;">*</span></label>
                                        <select class="form-control" id="enquiry_type" name="enquiry_type" required>
                                            <option value="">Select Enquiry Type</option>
                                            <option value="individual">Individual Learner</option>
                                            <option value="corporate">Corporate / Organization</option>
                                        </select>
                                    </div>
                            
                                    <!-- Corporate fields (hidden by default) -->
                                    <div class="col-lg-6 corporate-fields d-none">
                                        <label for="company_name">Company Name <span style="color: red;">*</span></label>
                                        <input type="text" class="form-control" name="company_name" id="company_name" placeholder="Company Name">
                                    </div>
                            
                                    <div class="col-lg-6 corporate-fields d-none">
                                        <label for="participants">Number of Participants <span style="color: red;">*</span></label>
                                        <input type="number" class="form-control" name="participants" id="participants" placeholder="No. of Participants">
                                    </div>
                            
                                    <div class="col-lg-6">
                                        <label for="">Name <span style="color: red;">*</span></label>
                                        <input name="name" class="form-control" placeholder="Your Name" required type="text">
                                    </div>
                            
                                    <div class="col-lg-6">
                                        <label for="">Contact No <span style="color: red;">*</span></label>
                                        <input class="form-control" name="phone" id="phone" placeholder="Phone No" required type="tel">
                                    </div>
                            
                                    <div class="col-lg-6">
                                        <label for="">WhatsApp No <small>(Mention again if Contact no is same)</small></label>
                                        <input class="form-control" name="whatsapp" id="whatsapp" placeholder="Whatsapp No" type="tel">
                                    </div>
                            
                                    <div class="col-lg-6">
                                        <label for="">Email <span style="color: red;">*</span></label>
                                        <input name="email" placeholder="Your Email Address" class="form-control"
                                               pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" required type="email">
                                    </div>
                            
                                    @if (isset($course))
                                        <input hidden name="course_id" value="{{ $course->id }}">
                                    @endif
                            
                                    <div class="col-lg-6">
                                        <label for="">Course <span style="color: red;">*</span></label>
                                        @if (isset($course_name))
                                            <input class="form-control" name="coursesintrested_name" id="coursesintrested_name"
                                                   readonly value="{{ $course_name }}">
                                        @else
                                            <select class="form-control" name="course_id" id="coursesintrested" data-live-search="true">
                                                @foreach ($courses as $cour)
                                                    <option value="{{ $cour->id }}">{{ $cour->coursename }}</option>
                                                @endforeach
                                                <option value="Other">Other</option>
                                            </select>
                                        @endif
                                    </div>
                            
                                    <div class="col-lg-6">
                                        <label for="city">City <small>(Only Karachi Residents must apply)</small><span style="color: red;">*</span></label>
                                        <select name="city" class="form-control" required>
                                            <option value="">Select City</option>
                                            <option value="Karachi">Karachi</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                            
                                    <div class="col-lg-12">
                                        <label for="comments">Comments</label>
                                        <textarea class="form-control" name="comments" id="comments" placeholder="Comments" rows="4"></textarea>
                                    </div>
                            
                                    <div class="col-md-12 mt-3 mb-3">
                                        <div class="g-recaptcha" data-sitekey="6LcCcgErAAAAAMj6AI5jc5za50PCchfFValVBY7Y"></div>
                                    </div>
                                    <div class="mb-3">
                                        @error('g-recaptcha-response')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            
                                <div class="row pl-4">
                                    <div class="col-12 text-center">
                                        <br />
                                        <input type="hidden" id="zc_gad" name="zc_gad" value="" />
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
    
    <script>
    document.getElementById('enquiry_type').addEventListener('change', function() {
        let corporateFields = document.querySelectorAll('.corporate-fields');
        if (this.value === 'corporate') {
            corporateFields.forEach(f => f.classList.remove('d-none'));
            document.getElementById('company_name').setAttribute('required', 'required');
            document.getElementById('participants').setAttribute('required', 'required');
        } else {
            corporateFields.forEach(f => f.classList.add('d-none'));
            document.getElementById('company_name').removeAttribute('required');
            document.getElementById('participants').removeAttribute('required');
        }
    });
    </script>
@endsection
<!-- Add the reCAPTCHA script -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
