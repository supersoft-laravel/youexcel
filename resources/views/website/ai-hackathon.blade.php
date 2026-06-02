@extends('website.app', ['title' => 'AI & Data Analytics Hackathon Registration'])

@section('content')
    <br><br><br><br>

    <section class="py-3 background-image" style="background-image: url({{assets/img/bg/hackathon-bg.jpg}});">
        <div class="container">
            <div class="row flex-row-reverse justify-content-between">
                <div class="col-md-12 col-lg-12 col-xl-12 align-self-center text-center text-md-start mb-4 pb-md-0">
                    <div class="breadcumb-content text-center">
                        <h1 class="breadcumb-text" style="color:black">
                            <b>AI & Data Analytics Hackathon</b>
                        </h1>
                        <h3 style="color: #2a2a2a;">Innovate. Analyze. Disrupt.</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-demofeature">
        <div class="container top-padding-register">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <div class="card mb-5">
                        <div class="card-body" style="overflow-x: hidden;">
                            <div class="col-lg-12 text-center mb-4">
                                <img src="img/yourexcel-logo.png" alt="YouExcel Logo" style="width: 170px;">
                            </div>
                            <h4 class="text-center">Registration Form</h4>

                            <form action="{{ route('hackathon.registration') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <!-- Full Name -->
                                    <div class="col-lg-12 mt-3">
                                        <label>Full Name <span style="color: red;">*</span></label>
                                        <input name="full_name" class="form-control" placeholder="Your Full Name" required>
                                    </div>

                                    <!-- Email -->
                                    <div class="col-lg-12 mt-3">
                                        <label>Email Address <span style="color: red;">*</span></label>
                                        <input name="email" type="email" class="form-control" 
                                            placeholder="your.email@example.com" 
                                            pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" required>
                                    </div>

                                    <!-- WhatsApp -->
                                    <div class="col-lg-12 mt-3">
                                        <label>WhatsApp Number <span style="color: red;">*</span></label>
                                        <input name="whatsapp" class="form-control" 
                                            placeholder="+92 3XX-XXXXXXX" 
                                            pattern="^\+92\s3\d{2}-\d{7}$" required>
                                    </div>

                                    <!-- City -->
                                    <div class="col-lg-12 mt-3">
                                        <label>City <span style="color: red;">*</span></label>
                                        <input name="city" class="form-control" placeholder="Your City" required>
                                    </div>

                                    <!-- Occupation -->
                                    <div class="col-lg-12 mt-3">
                                        <label>Are you a: <span style="color: red;">*</span></label>
                                        <div class="custom-control custom-radio mt-2">
                                            <input type="radio" id="student" name="occupation" 
                                                class="custom-control-input" value="University Student" required>
                                            <label class="custom-control-label" for="student">University Student</label>
                                        </div>
                                        <div class="custom-control custom-radio mt-2">
                                            <input type="radio" id="professional" name="occupation" 
                                                class="custom-control-input" value="Professional">
                                            <label class="custom-control-label" for="professional">Professional</label>
                                        </div>
                                        <div class="custom-control custom-radio mt-2">
                                            <input type="radio" id="freelancer" name="occupation" 
                                                class="custom-control-input" value="Freelancer">
                                            <label class="custom-control-label" for="freelancer">Freelancer</label>
                                        </div>
                                    </div>

                                    <!-- Organization -->
                                    <div class="col-lg-12 mt-3">
                                        <label>Organization Name</label>
                                        <input name="organization" class="form-control" 
                                            placeholder="University/Company Name">
                                    </div>

                                    <!-- Social Links -->
                                    <div class="col-lg-12 mt-3">
                                        <label>LinkedIn/GitHub Profile Link <span style="color: red;">*</span></label>
                                        <input name="profile_link" type="url" class="form-control" 
                                            placeholder="https://linkedin.com/in/yourprofile" required>
                                    </div>

                                    <!-- Topics -->
                                    <div class="col-lg-12 mt-3">
                                        <label>Choose the Topic: <span style="color: red;">*</span></label>
                                        @foreach([
                                            'Retail & Consumer Analytics',
                                            'Business Operations Optimization',
                                            'Customer Fraud Prediction using realworld Ecommerce Data',
                                            'Heath care Analytics for predictive diagnosis',
                                            'Speed Analytics using Python'
                                        ] as $key => $topic)
                                        <div class="custom-control custom-radio mt-2">
                                            <input type="radio" id="topic{{ $key }}" name="topic" 
                                                class="custom-control-input" value="{{ $topic }}" required>
                                            <label class="custom-control-label" for="topic{{ $key }}">{{ $topic }}</label>
                                        </div>
                                        @endforeach
                                    </div>

                                    <!-- Previous Hackathon -->
                                    <div class="col-lg-12 mt-3">
                                        <label>Have you participated in a Hackathon before? <span style="color: red;">*</span></label>
                                        <div class="custom-control custom-radio mt-2">
                                            <input type="radio" id="yes" name="previous_participation" 
                                                class="custom-control-input" value="Yes" required>
                                            <label class="custom-control-label" for="yes">Yes</label>
                                        </div>
                                        <div class="custom-control custom-radio mt-2">
                                            <input type="radio" id="no" name="previous_participation" 
                                                class="custom-control-input" value="No">
                                            <label class="custom-control-label" for="no">No</label>
                                        </div>
                                    </div>

                                    <!-- Remarks -->
                                    <div class="col-lg-12 mt-3">
                                        <label>Remarks (If any)</label>
                                        <textarea name="remarks" class="form-control" rows="3" 
                                            placeholder="Enter your remarks here..."></textarea>
                                    </div>

                                    <!-- Brochure -->
                                    <div class="col-lg-12 mt-4 text-center">
                                        <a href="#brochure-link" class="vs-btn">Click here to check the Brochure</a>
                                    </div>

                                    <!-- Submit -->
                                    <div class="col-lg-12 mt-4 text-center">
                                        <button type="submit" class="vs-btn py-3">Register Now</button>
                                    </div>

                                    <!-- Post-registration note -->
                                    <div class="col-lg-12 mt-4 text-center">
                                        <p class="text-muted small">
                                            *Post registration, a 'Thank you Email' with Brochure and WhatsApp group link will be sent
                                        </p>
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