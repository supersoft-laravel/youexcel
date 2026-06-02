@extends('website.app')

@section('title', 'Project Enquiry Form')
{{-- @section('meta_description', 'Enroll in the Microsoft Excel Mastery Course in Karachi, Pakistan. Learn advanced
Excel skills to boost your career with expert training and hands-on experience.')
@section('meta_keywords', 'Microsoft Excel Mastery Course in Karachi Pakistan') --}}
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
                    <h2 style="margin-top: 30px;">Prime Minister Youth Skill Development in collaboration with YouExcel (100% Free of Cost
						Training)
						Enquiry Form</h2>
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
						<p class="text-center">This is only Enquiry Form. You still have to Register in the NAVTTC PORTAL. Please visit YouExcel to complete registration.</p>

						<h4 class="text-center">Project Enquiry Form</h4>

						<form action="{{ route('store.project.website') }}" method="POST">
							@csrf
							<div class="row">

								<div class="col-lg-4">
									<label for="">Name <span style="color: red;">*</span></label>
									<input c name="name" class="form-control" placeholder="Your Name" required=""
										type="text">
								</div>

								<div class="col-lg-3">
									<label for="">Contact No<span style="color: red;">*</span></label>
									<input class="form-control" name="phone" id="phone" placeholder="Phone No"
										required="" type="tel">
								</div>

								<div class="col-lg-5">
									<label for="">WhatsApp No(Mention again if Contact no is same)</label>
									<input class="form-control" name="whatsapp" id="whatsapp" placeholder="03XX-XXXXXXX"
										type="tel">
								</div>

								<div class="col-lg-6">
									<label for="">Email <span style="color: red;">*</span></label>
									<input name="email" placeholder="Your Email Address" class="form-control"
										pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" required=""
										type="email">

								</div>
								<div class="col-lg-6">
                                    <label for="">Trade Preference<span style="color: red;">*</span></label>
                                    @if (isset($course_name) && $course_name)
                                        <input class="form-control" name="project_name" id="project_name" readonly value="{{ $course_name }}">
                                    @else
                                        <select class="form-control select2" name="project_name[]" id="project_name" multiple>
                                            @foreach ($projects as $project)
                                                <option value="{{ $project }}">{{ $project }}</option>
                                            @endforeach
                                            <option value="Other">Other</option>
                                        </select>
                                    @endif
                                </div>

								
								<div class="col-lg-6">
                                	<label for="age">Age <span style="color: red;">*</span></label>
                                	<select name="age" id="age" class="form-control" required>
                                		<option value="" disabled selected>Select Age</option>
                                		@for ($i = 18; $i <= 40; $i++)
                                			<option value="{{ $i }}">{{ $i }}</option>
                                		@endfor
                                	</select>
                                </div>


								<div class="col-lg-6">
									<label for="">City <span style="color: red;">*</span></label>
									<input name="city" placeholder="Your City" class="form-control" required=""
										type="text">
								</div>

								<div class="col-lg-12">
                                	<label for="last-education">Last Education <span style="color: red;">*</span></label>
                                	<!--<small class="form-text text-muted mb-2">Minimum Graduation complete is required</small>-->
                                
                                	<div class="form-check">
                                		<input class="form-check-input" type="radio" name="last_education" id="bachelors" value="Bachelors of IT, Computer Science, Maths, Statistics, Economics, Physics OR Any Bachelors of Engineering or Higher
                                        Degree in the Above fields." required>
                                		<label class="form-check-label" for="bachelors">
                                			Bachelors of IT, Computer Science, Maths, Statistics, Economics, Physics OR Any Bachelors of Engineering or Higher
                                        Degree in the Above fields.
                                		</label>
                                	</div>
                                	<div class="form-check">
                                		<input class="form-check-input" type="radio" name="last_education" id="acca" value="ACCA/ICAP">
                                		<label class="form-check-label" for="acca">ACCA/ICAP</label>
                                	</div>
                                	<div class="form-check">
                                		<input class="form-check-input" type="radio" name="last_education" id="masters" value="Masters">
                                		<label class="form-check-label" for="masters">Masters</label>
                                	</div>
                                	<div class="form-check">
                                		<input class="form-check-input" type="radio" name="last_education" id="phd" value="PhD">
                                		<label class="form-check-label" for="phd">PhD</label>
                                	</div>
                                </div>


								<label for="" style="font-weight: bold; margin-top: 5px;">Preferred Timing
									(Tentative)</label>
								<div class="col-lg-4">
									<div>
										<input type="checkbox" id="morning" name="preferred_timing[]" value="Morning">
										<label for="morning">Morning (9:00 AM to 12:30 PM)</label>
									</div>
								</div>

								<div class="col-lg-4">
									<div>
										<input type="checkbox" id="afternoon" name="preferred_timing[]"
											value="Afternoon">
										<label for="afternoon">Afternoon (1:00 PM to 4:30 PM)</label>
									</div>
								</div>

								<div class="col-lg-4">
									<div>
										<input type="checkbox" id="evening" name="preferred_timing[]" value="Evening">
										<label for="evening">Evening (6:00 PM to 9:30 PM)</label>
									</div>
								</div>

								<div class="col-lg-12">
                                    <label for="">Comments</label>
                                    <textarea class="form-control" name="comments" rows="3" placeholder="Enter Comments..."></textarea>
                                </div>


								<div class="col-md-12 mt-3">
									<!-- Add Google reCAPTCHA -->
									<div class="g-recaptcha" data-sitekey="6LcCcgErAAAAAMj6AI5jc5za50PCchfFValVBY7Y">
									</div>
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
	</div>
</section>


@endsection
<!-- Add the reCAPTCHA script -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>