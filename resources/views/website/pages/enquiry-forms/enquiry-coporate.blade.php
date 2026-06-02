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
                        <h2>Corporate Enquiry Form</h2>
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
                                <img src="img/Yourexcel-img/excel-logo-new.png" alt="" style="width: 170px;">
                            </div>

                            <h4 class="text-center">Corporate Enquiry Form</h4>

                            <form action="{{ route('lead.corporate') }}" method="POST">
                                @csrf
                                <div class="row">
                                    {{-- <div class="col-lg-6">
                                        <label for="">Training Program Name <span style="color: red;">*</span></label>
                                        <input name="training_program_name" class="form-control" placeholder="Program Name" required type="text">
                                    </div> --}}

                                    <div class="col-lg-6">
                                        <label for="">Training Program Name <span style="color: red;">*</span></label>
                                            <select class="form-control " name="program_id" id="training_program_name"
                                                    aria-label="Default select example" data-live-search="true"
                                                    placeholder="Choose from dropdown list">
                                                <option value="" readonly>Choose Program</option>
                                                @foreach($program as $item)
                                                    <option value="{{ $item->id }}">{{$item->program_name}}</option>
                                                @endforeach
                                                {{-- <option value="Other">Other</option> --}}
                                            </select>
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="">Organization Name <span style="color: red;">*</span></label>
                                        <input name="organization_name" class="form-control" placeholder="Organization Name" required type="text">
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="">Approx No. Of Nominations <span style="color: red;">*</span></label>
                                        <select id="employees" class="form-control" name="approx_nominations" aria-label="Default select example" data-live-search="true" required>
                                            <option value="" selected disabled>Select Range</option>
                                            <option value="5-10">5-10</option>
                                            <option value="11-20">11-20</option>
                                            <option value="21-30">21-30</option>
                                            <option value="31-40">31-40</option>
                                            <option value="40+">40+</option>
                                        </select>
                                        <!--<input name="approx_nominations" class="form-control" placeholder="Number of Nominations" required type="number">-->
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="">Focal Contact Name <span style="color: red;">*</span></label>
                                        <input name="focal_contact_name" class="form-control" placeholder="Contact Name" required type="text">
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="">Focal Contact Cell Number <span style="color: red;">*</span></label>
                                        <input name="focal_contact_number" class="form-control" placeholder="Contact Number" required type="tel">
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="">Focal Contact Email <span style="color: red;">*</span></label>
                                        <input name="focal_contact_email" class="form-control" placeholder="Contact Email" required type="email">
                                    </div>

                                    <div class="col-lg-12">
                                        <label for="">Remarks</label>
                                        <textarea name="remarks" class="form-control" placeholder="Remarks" rows="3"></textarea>
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
                                        <button type="submit" class="vs-btn py-3">Submit</button>
                                    </div>
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
