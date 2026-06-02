@extends('website.app', ['title' => 'Certificate Collection Form'])

@section('content')
<style>
        .section-header {
            background: linear-gradient(135deg, #1a2a3a 0%, #2c3e50 100%) !important;
            color: white !important;
            padding: 35px 0 0 0 !important;
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
            background: linear-gradient(rgba(0, 40, 104, 0.8), rgba(0, 40, 104, 0.9)), url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');
            background-size: cover;
            background-position: center;
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
                    <div class="section-title text-center position-relative mt-5">
                        <h2>Congratulations! Your Certificate is Ready for Collection/Delivery</h2>
                        <p>Please fill out the form below to arrange your certificate collection or delivery.</p>
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
                                <img src="{{ asset('img/Yourexcel-img/excel-logo-new.png') }}" alt="" style="width: 170px;">
                            </div>

                            <h4 class="text-center">Certificate Collection / Delivery Form</h4>

                            <form action="{{ url('certificate-submit') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">

                                    <div class="col-lg-6 mb-3">
                                        <label for="">Full Name <span style="color:red">*</span></label>
                                        <input type="text" name="full_name" class="form-control" required placeholder="Your Full Name">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="">Cell/WhatsApp No <span style="color:red">*</span></label>
                                        <input type="text" name="phone" class="form-control" required placeholder="03XX-XXXXXXX">
                                    </div>
                                    
                                    <div class="col-lg-6 mb-3">
                                        <label for="">Email <span style="color:red">*</span></label>
                                        <input type="email" name="email" class="form-control" required placeholder="Your Email">
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <label for="">Course Name <span style="color:red">*</span></label>
                                        <select name="course_name" class="form-control" required>
                                            <option value="">Select Course</option>
                                            @foreach ($courses as $course)
                                                <option value="{{ $course->coursename }}">{{ $course->coursename }}</option>
                                            @endforeach
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <label for="">Batch Number <span style="color:red">*</span></label>
                                        <input type="text" name="batch_number" class="form-control" required placeholder="e.g., 23A, 2024-B2">
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <label for="">Delivery Mode <span style="color:red">*</span></label>
                                        <select name="delivery_mode" class="form-control" id="delivery_mode" required>
                                            <option value="">Select Mode</option>
                                            <option value="On-campus">YouExcel On-campus Collection</option>
                                            <option value="Courier">Delivery via Courier</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-6 mb-3" id="delivery_option_container" style="display: none;">
                                        <label for="">Delivery Option (if Courier selected) <span style="color:red">*</span></label>
                                        <select name="delivery_option" class="form-control">
                                            <option value="">Choose Delivery Option</option>
                                            <option value="Karachi">TCS Express Delivery within Karachi - PKR 550</option>
                                            <option value="Outside Karachi">TCS Express Delivery outside Karachi - PKR 950</option>
                                            <option value="International">International Delivery - Contact YouExcel Team</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-12 mt-4 mb-3">
                                        <div class="border p-3 rounded bg-light">
                                            <h5 class="mb-3">💳 Payment Details (for Delivery)</h5>
                                    
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h6><strong>Bank Transfer:</strong></h6>
                                                    <ul class="list-unstyled mb-3">
                                                        <li><strong>Bank:</strong> Habib Bank Limited</li>
                                                        <li><strong>Account Title:</strong> YOUEXCEL</li>
                                                        <li><strong>Account Number:</strong> 00567901144003</li>
                                                        <li><strong>IBAN:</strong> PK44HABB0000567901144003</li>
                                                        <li><strong>Branch Code:</strong> 0056</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <h6><strong>JazzCash:</strong></h6>
                                                    <ul class="list-unstyled">
                                                        <li><strong>JazzCash Number:</strong> 0331 301 6699</li>
                                                    </ul>
                                                </div>
                                            </div>
                                    
                                            <div class="mt-3">
                                                <label for="payment_screenshot"><strong>Attach Payment Screenshot</strong> (Only if Delivery selected)</label>
                                                <input type="file" name="payment_screenshot" class="form-control" accept="image/*">
                                            </div>
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

                                </div>

                                <div class="row">
                                    <div class="col-12 text-center">
                                        <input type="hidden" id="zc_gad" name="zc_gad" value="">
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

<!-- reCAPTCHA Script -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<!-- Show delivery options only when Courier selected -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const deliveryModeSelect = document.getElementById('delivery_mode');
        const deliveryOptionContainer = document.getElementById('delivery_option_container');

        deliveryModeSelect.addEventListener('change', function () {
            if (this.value === 'Courier') {
                deliveryOptionContainer.style.display = 'block';
            } else {
                deliveryOptionContainer.style.display = 'none';
            }
        });
    });
</script>
