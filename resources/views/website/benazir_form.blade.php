@extends('website.app')

@section('title', 'YouExcel now introducing 100% Free Skills Development Program for Youth in Sindh')
<!--@section('meta_description', 'Enroll in the Microsoft Excel Mastery Course in Karachi, Pakistan. Learn advanced-->
<!--Excel skills to boost your career with expert training and hands-on experience.')-->
<!--@section('meta_keywords', 'Microsoft Excel Mastery Course in Karachi Pakistan')-->
@section('content')
<style>
    .section-header {
        background: linear-gradient(135deg, #1a2a3a 0%, #2c3e50 100%) !important;
        color: white !important;
        padding: 60px 0 40px 0 !important;
        margin-top: 120px;
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
        background: linear-gradient(rgba(0, 40, 104, 0.85), rgba(0, 40, 104, 0.9)), 
                    url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');
        background-size: cover;
        background-position: center;
        z-index: 0;
    }

    .section-content {
        position: relative;
        z-index: 2;
    }

    .logo-row {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 40px;
        flex-wrap: nowrap;
        margin-bottom: 30px;
    }

    .logo-row img {
        height: 120px;
        object-fit: contain;
        /*filter: brightness(0) invert(1);*/
        transition: transform 0.3s ease;
    }

    .logo-row img:hover {
        transform: scale(1.05);
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
        
        <!-- Three Logos -->
        <!--<div class="logo-row">-->
        <!--    <img src="{{ asset('img/benazir-form/Picture1.png') }}" alt="YouExcel Logo">-->
        <!--    <img src="{{ asset('img/benazir-form/Picture2.png') }}" alt="BBSHRRDB Logo">-->
        <!--    <img src="{{ asset('img/benazir-form/Picture3.png') }}" alt="Universities and Boards Department Logo">-->
        <!--</div>-->

        <!-- Heading and Description -->
        <div class="section-title">
            <p>
                <strong>YouExcel</strong> now introducing<br> 
                <strong>100% Free Skills Development Program for Youth in Sindh</strong><br>
                <!--<strong>Universities and Boards Department, Government of Sindh<br></strong> now introducing-->
                <!--<strong>Skills Development Program for Youth in Sindh</strong>-->
            </p>
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
						<div class="col-lg-12 text-center mb-4 mt-5">
                            <div class="logo-row">
                                <!--<img src="{{ asset('img/benazir-form/Picture1.png') }}" alt="YouExcel Logo">-->
                                <!--<img src="{{ asset('img/benazir-form/Picture2.png') }}" alt="BBSHRRDB Logo">-->
                                <img src="{{ asset('img/benazir-form/Picture3.png') }}" alt="Universities and Boards Department Logo">
                            </div>
						</div>

						<h4 class="text-center">Enquiry Form</h4>

						<form action="{{ route('store.project.benazir') }}" method="POST">
							@csrf
							<div class="row">

								<div class="col-lg-4">
									<label for="" style="font-weight: bold;">Name <span style="color: red;">*</span></label>
									<input name="name" class="form-control" placeholder="Your Name" required=""
										type="text">
								</div>

								<div class="col-lg-3">
									<label for="" style="font-weight: bold;">Contact No<span style="color: red;">*</span></label>
									<input class="form-control" name="contact_no" id="phone" placeholder="Phone No"
										required="" type="tel">
								</div>

								<div class="col-lg-5">
									<label for="" style="font-weight: bold;">WhatsApp No (Mention again if Contact no is same)</label>
									<input class="form-control" name="whatsapp_no" id="whatsapp" placeholder="03XX-XXXXXXX"
										type="tel">
								</div>

								<div class="col-lg-4">
									<label for="" style="font-weight: bold;">Email <span style="color: red;">*</span></label>
									<input name="email" placeholder="Your Email Address" class="form-control"
										pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" required=""
										type="email">

								</div>

								<div class="col-lg-4">
                                	<label for="age" style="font-weight: bold;">Age (18 to 35 years only) <span style="color: red;">*</span></label>
                                	<select name="age" id="age" class="form-control" required>
                                		<option value="" disabled selected>Select Age</option>
                                		@for ($i = 18; $i <= 35; $i++)
                                			<option value="{{ $i }}">{{ $i }}</option>
                                		@endfor
                                	</select>
                                </div>
                                <div class="col-lg-4">
									<label for="" style="font-weight: bold;">City (Only Karachi Residents) <span style="color: red;">*</span></label>
									<input name="city" placeholder="Your City" class="form-control" required=""
										type="text">
								</div>
								<!--<div class="col-lg-6">-->
        <!--                            <label for="">Trade Preference<span style="color: red;">*</span></label>-->
        <!--                            @if (isset($preferences) && count($preferences) > 0)-->
        <!--                                <select class="form-control select2" name="trade_preference[]" id="trade_preference" multiple>-->
        <!--                                    @foreach ($preferences as $preference)-->
        <!--                                        <option value="{{ $preference }}">{{ $preference }}</option>-->
        <!--                                    @endforeach-->
                                            <!--<option value="Other">Other</option>-->
        <!--                                </select>-->
        <!--                            @endif-->
        <!--                        </div>-->
                                <div class="col-lg-12">
                                    <label for="" style="font-weight: bold;">Trade Preferences <span style="color: red;">*</span></label>
                                    <div class="row">
                                        @for ($i = 1; $i <= 3; $i++)
                                            <div class="col-lg-4 mb-3">
                                                <label for="trade_preference_{{ $i }}">Preference {{ $i }}</label>
                                                @if (isset($preferences) && count($preferences) > 0)
                                                    <select class="form-control select2" name="trade_preference[]" id="trade_preference_{{ $i }}">
                                                        <option value="">-- Select Trade --</option>
                                                        @foreach ($preferences as $preference)
                                                            <option value="{{ $preference }}">{{ $preference }}</option>
                                                        @endforeach
                                                    </select>
                                                @endif
                                            </div>
                                        @endfor
                                    </div>
                                </div>

								<div class="col-lg-6">
								    <div class="row">
    								    <div class="col-lg-12">
            								<label for="last_education" style="font-weight: bold;">Last Education (Minimum Intermediate required) <span style="color: red;">*</span></label>
                                        	<!--<small class="form-text text-muted mb-2">(Minimum Intermediate required)</small>-->
                                        
                                        	<div class="form-check">
                                        		<input class="form-check-input" type="radio" name="last_education" id="Intermediate" value="Intermediate" required>
                                        		<label class="form-check-label" for="Intermediate">
                                        			Intermediate
                                        		</label>
                                        	</div>
                                        	<div class="form-check">
                                        		<input class="form-check-input" type="radio" name="last_education" id="Bachelors" value="Bachelors">
                                        		<label class="form-check-label" for="Bachelors">Bachelors</label>
                                        	</div>
                                        	<div class="form-check">
                                        		<input class="form-check-input" type="radio" name="last_education" id="masters" value="Masters">
                                        		<label class="form-check-label" for="masters">Masters</label>
                                        	</div>
                                        	<div class="form-check">
                                        		<input class="form-check-input" type="radio" name="last_education" id="phd" value="PhD">
                                        		<label class="form-check-label" for="phd">PhD</label>
                                        	</div>
                                        	<div class="form-check">
                                        		<input class="form-check-input" type="radio" name="last_education" id="Other" value="Other">
                                        		<label class="form-check-label" for="Other">Other</label>
                                        	</div>
    								    </div>
								        <div class="col-lg-12 mt-3">
								            <label for="" style="font-weight: bold;">Preferred Timing (Morning shift available only)</label>
        									<div>
        										<input type="checkbox" id="morning" name="preferred_timing[]" value="Morning">
        										<label for="morning">Morning (Tentative 9am to 1pm)</label>
        									</div>
								        </div>
								    </div>
                                	
                                </div>

                                <div class="col-lg-6">
                                    <label for="" class="fw-bold text-primary mb-2">Eligibility Criteria</label>
                                    <div class="p-4 border rounded shadow-sm bg-white">
                                        <ul class="list-unstyled mb-0">
                                            <li class="d-flex align-items-start mb-2">
                                                <i class="bi bi-person-fill-check text-success me-2 fs-5"></i>
                                                <span>Age limit between <strong>18–35 years</strong></span>
                                            </li>
                                            <li class="d-flex align-items-start mb-2">
                                                <i class="bi bi-mortarboard-fill text-success me-2 fs-5"></i>
                                                <span>Minimum Qualification: <strong>Intermediate</strong></span>
                                            </li>
                                            <li class="d-flex align-items-start mb-2">
                                                <i class="bi bi-card-text text-success me-2 fs-5"></i>
                                                <span>Must have a valid <strong>CNIC</strong> and <strong>Domicile of Sindh</strong></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

								
								<div class="col-lg-12 mt-3">
                                    <label for="" style="font-weight: bold;">Comments</label>
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