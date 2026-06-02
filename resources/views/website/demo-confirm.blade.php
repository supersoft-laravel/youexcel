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
        z-index: 1;
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
        z-index: 1;
        position: relative;
    }

    .card {
        border: none;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        border-radius: 12px;
    }

    .card-body {
        padding: 2.5rem;
    }

    label {
        font-weight: 600;
        margin-top: 20px;
        color: #333;
    }

    .form-control {
        border-radius: 8px;
        border: 1px solid #ced4da;
        padding: 0.75rem 1rem;
        font-size: 1rem;
        transition: border-color 0.3s, box-shadow 0.3s;
    }

    .form-control:focus {
        border-color: #0062cc;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }

    .custom-control-label {
        font-weight: 500;
        color: #555;
        margin-left: 8px;
    }

    .custom-control-input:checked ~ .custom-control-label::before {
        background-color: #0062cc;
        border-color: #0062cc;
    }

    .vs-btn {
        background-color: #0062cc;
        color: white;
        border: none;
        padding: 0.75rem 2rem;
        font-size: 1rem;
        border-radius: 8px;
        transition: background-color 0.3s ease;
    }

    .vs-btn:hover {
        background-color: #004fa3;
    }

    .g-recaptcha {
        transform: scale(0.95);
        transform-origin: 0 0;
    }
</style>


    <section class="space-top space-extra-bottom section-header">
        <div class="bg-pattern"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="section-title text-center position-relative">
                        <h2>Experience the First Step to Your Career Transformation</h2>
                        <p>Join a free demo to explore the skills that shape your future.</p>
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
                                <img src="{{ asset('img/Yourexcel-img/excel-logo-new.png') }}" alt="" style="width: 170px;">
                            </div>
                            <h4 class="text-center">Demo Confirmation</h4>

                            <form action="{{ route('store.demo.confirmation') }}" method="POST">
                                @csrf
                                <div class="row">

                                    <div class="col-lg-12">
                                        <label for="">Email <span style="color: red;">*</span></label>
                                        <input name="email" placeholder="Your Email Address" class="form-control"
                                            pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" required=""
                                            type="email">
                                    </div>

                                    <div class="col-lg-12">
                                        <label for="">Complete Name<span style="color: red;">*</span></label>
                                        <input c name="name" class="form-control" placeholder="Your Name" required="" type="text">
                                    </div>

                                    <div class="col-lg-12">
                                        <label for="">Cell / WhatsApp No<span style="color: red;">*</span></label>
                                        <input class="form-control" name="whatsapp" id="whatsapp" placeholder="Whatsapp No"type="tel">
                                    </div>

                                    <div class="col-lg-12">
                                        <label for="">Choose the FREE demo you'd like to attend<span style="color: red;">*</span></label>
                                        
                                        @if(isset($singleCalendar))
                                            <div class="custom-control custom-radio mt-4">
                                                <input type="radio" id="demo{{ $singleCalendar->id }}" name="demo" class="custom-control-input" value="{{ $singleCalendar->course_name }}" required checked>
                                                <label class="custom-control-label" for="demo{{ $singleCalendar->id }}">{{ $singleCalendar->course_name }} ({{ \Carbon\Carbon::parse($singleCalendar->d_date)->format('d-M-Y') }})</label>
                                            </div>
                                        @else

                                        @foreach ($calendars as $item)
                                            <div class="custom-control custom-radio mt-4">
                                                <input type="radio" id="demo{{ $item->id }}" name="demo" class="custom-control-input" value="{{ $item->course_name }}" required>
                                                <label class="custom-control-label" for="demo{{ $item->id }}">{{ $item->course_name }} ({{ \Carbon\Carbon::parse($item->d_date)->format('d-M-Y') }})</label>
                                            </div>
                                        @endforeach
                                        
                                        @endif
                                        
                                    </div>



                                    <div class="col-lg-12">
                                        <label for="">Mode of Attend<span style="color: red;">*</span></label>
                                        
                                        <div class="custom-control custom-radio mt-4">
                                            <input type="radio" id="attend1" name="mode_of_attend" class="custom-control-input" value="On-Campus Suite: 503-505, 5th Floor, Al Samad Tower, Block 13-B, Main University Road, Gulshan-e-Iqbal, Karachi, Pakistan" required>
                                            <label class="custom-control-label" for="attend1">On-Campus (Karachi)</label>
                                        </div>
                                        
                                        <div class="custom-control custom-radio mt-4">
                                            <input type="radio" id="attend2" name="mode_of_attend" class="custom-control-input" value="Online via Zoom meeting" required>
                                            <label class="custom-control-label" for="attend2">Online via Zoom meeting</label>
                                        </div>
                                        
                                        <div class="custom-control custom-radio mt-4">
                                            <input type="radio" id="attend3" name="mode_of_attend" class="custom-control-input" value="Not sure" required>
                                            <label class="custom-control-label" for="attend3">Interested, but can’t attend</label>
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
@endsection
<!-- Add the reCAPTCHA script -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
