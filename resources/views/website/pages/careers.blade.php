@extends('website.app')

@section('title', 'Career Training Programs Karachi | Microsoft Course training')
@section('meta_description', 'Boost your career with top career training programs in Karachi. Enroll in Microsoft course training and management course training for professional growth')
@section('meta_keywords', 'career training programs Karachi, microsoft course training, management course training')

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
</style>
<section class="space-top space-extra-bottom section-header">
    <div class="bg-pattern"></div>
    <div class="container section-content text-center">
        <div class="section-title">
            <h2>CAREERS </h2>
            <p>Shape your future with opportunities that inspire excellence.</p>
        </div>
    </div>
</section>
<section class="section-demofeature">
    <!-- ====================== Start CEO Area ======================== -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <!-- <div class="main_title" data-aos="fade-up">
                    <h2 class="mb-3">Founder and CEO</h2>
                </div> -->
            </div>
        </div>
        <div class="row ">
            
            <div class="col-lg-12">
                <div class="" >
                    <!--<h2 class="mb-3">CAREERS</h2>-->
                    <h3 class="mt-3 text-center">Submit Your Application</h3>
                </div>
            </div>
            <div class="col-lg-12 mb-3">
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8"> 
                        <div id="eligibilityBox" class="p-3 rounded" 
                             style="display:none; background:#f1f5ff; border-left:4px solid #0d6efd;    margin-top: 20px;">
                            <h6 class="fw-bold mb-2 text-primary">Eligibility Criteria</h6>
                            <p id="eligibilityText" class="mb-0" style="white-space: pre-line;"></p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="card mb-5">
                    <div class="card-body">
            
                        @if($positions->isEmpty())
                            <div class="text-center p-5">
                                <h4>No positions available at this time.</h4>
                            </div>
                        @else
                            <form action="{{ url('Careers') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row p-3">
            
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Position Applying For <span style="color: red;">*</span></label>
                                            <select class="form-control" name="applyfor" required>
                                                <option value="" disabled selected>Select Position</option>
                                                @foreach($positions as $position)
                                                    <option value="{{ $position->name }}" data-eligibility="{{ $position->eligibility }}">{{ $position->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Full Name <span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" name="fullname" placeholder="Full Name" required>
                                        </div>
                                    </div>
            
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Phone No <span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" name="cellno" placeholder="Phone No">
                                        </div>
                                    </div>
            
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Email <span style="color: red;">*</span></label>
                                            <input type="email" class="form-control" name="email" placeholder="Email"
                                                pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" required>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>City <span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" name="city" placeholder="i.e. Karachi" required>
                                        </div>
                                    </div>
            
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Cover Letter <span style="color: red;">*</span></label>
                                            <textarea class="form-control" name="coverletter" rows="3"></textarea>
                                        </div>
                                    </div>
            
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>LinkedIn Profile Link</label>
                                            <input type="text" class="form-control" name="linkedin" placeholder="LinkedIn Profile">
                                        </div>
                                    </div>
            
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Upload CV/Resume <small>(Max Upload Size 2MB)</small> <span style="color: red;">*</span></label>
                                            <input type="file" class="form-control" name="filee" required>
                                        </div>
                                    </div>
            
                                    <div class="col-md-12 mt-3 mb-3">
                                        <div class="g-recaptcha" data-sitekey="6LcCcgErAAAAAMj6AI5jc5za50PCchfFValVBY7Y"></div>
                                    </div>
            
                                    <div class="mb-3">
                                        @error('g-recaptcha-response')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
            
                                    <div class="col-lg-12 text-center">
                                        <button type="submit" id="submit" class="vs-btn py-3">Submit</button>
                                    </div>
                                </div>
                            </form>
                        @endif
            
                    </div>
                </div>
            </div>

        </div>

    </div>
    </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", function () {
    let positionSelect = document.querySelector('select[name="applyfor"]');
    let box = document.getElementById("eligibilityBox");
    let text = document.getElementById("eligibilityText");

    positionSelect.addEventListener("change", function () {
        let eligibility = this.options[this.selectedIndex].getAttribute("data-eligibility");

        if (eligibility && eligibility.trim() !== "") {
            text.innerText = eligibility;
            box.style.display = "block";
        } else {
            box.style.display = "none";
        }
    });
});
</script>

@endsection
<!-- Add the reCAPTCHA script -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>