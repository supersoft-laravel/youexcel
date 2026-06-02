@extends('website.app', ['title' => 'Enquiry Form'])

@section('content')
    <br> <br>
    <br>
    <br>

    <section class="py-3 background-image" style="background-image: url(&quot;assets/img/bg/tutor-bg-1.jpg&quot;);">
        <div class="container">
            <div class="row flex-row-reverse justify-content-between">

                <div class="col-md-12 col-lg-12 col-xl-12 align-self-center text-center text-md-start mb-4 pb-md-0">
                    <div class="breadcumb-content  text-center">
                        <p class="breadcumb-text" style="color:black">
                            <b>
                                Start a conversation with one of our Training Solutions Experts to see if YouExcel is the
                                right platform to fuel your Career Growth. </b>
                        </p>
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
                                        <input name="approx_nominations" class="form-control" placeholder="Number of Nominations" required type="number">
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
