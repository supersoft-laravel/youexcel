<style>
        .get-in-touch-section {
            background: #f4f6f9;
        }
        
        .touch-wrapper {
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0,0,0,0.06);
        }
        
        .touch-left {
            background: linear-gradient(135deg, #1a4480, #0d2c54);
            color: #fff;
        }
        
        .touch-left h3 {
            color: #fff;
        }
        
        .contact-info{
            position: relative;
            margin: 0 0 7px 0;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            padding: 0px;
        }
        .contact-info .info-item {
            display: flex;
            align-items: start;
            margin-bottom: 20px;
        }
        
        .contact-info .info-item i {
            font-size: 18px;
            margin-right: 15px;
            background: rgba(255,255,255,0.15);
            padding: 12px;
            border-radius: 50%;
        }
        
        .contact-highlight {
            background: rgba(255,255,255,0.1);
            padding: 15px;
            border-radius: 8px;
        }
        
        .touch-right {
            background: #fff;
        }
        
        .touch-right .form-control {
            border-radius: 8px;
            border: 1px solid #ddd;
            padding: 10px 12px;
        }
        
        .touch-right .form-control:focus {
            border-color: #ff9800;
            box-shadow: none;
        }
        .get-in-touch-section p{
            color: #fff;
        }
        .get-in-touch-section strong{
            color: #f8a223;
        }
        
        /* Mobile Responsive */
        @media (max-width: 991px) {
            .touch-left, .touch-right {
                padding: 30px;
            }
        }
    </style>
    <!-- ================= Get In Touch Section ================= -->
    <section class="get-in-touch-section py-5">
        <div class="container">
            <div class="row align-items-stretch g-0 touch-wrapper">
    
                <!-- LEFT SIDE : CONTACT DETAILS -->
                <div class="col-lg-5 touch-left p-5">
                    <h3 class="fw-bold mb-3">Get in Touch</h3>
                    <p class="mb-4">
                        Have questions about this course? Our admissions team is ready to assist you.
                    </p>
    
                    <div class="contact-info mb-4">
                        <div class="info-item">
                            <i class="fas fa-phone-alt"></i>
                            <div>
                                <strong>Call Us</strong>
                                <p class="mb-0">+92-331-3016699 (WhatsApp)</p>
                                <p class="mb-0">+92-21-37121738 (Office)</p>
                            </div>
                        </div>
    
                        <div class="info-item">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <strong>Email Us</strong>
                                <p class="mb-0">info@youexceltraining.com</p>
                            </div>
                        </div>
    
                        <div class="info-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <strong>Campus</strong>
                                <p class="mb-0">YouExcel, Suite: 503-505, 5th Floor, Al Samad Tower, Block 13-B, Main University Road, Gulshan-e-Iqbal, Karachi, Pakistan.</p>
                            </div>
                        </div>
                    </div>
    
                    <div class="contact-highlight">
                        <p class="mb-0">
                            <strong>Office Hours:</strong><br>
                            Mon – Sun | 10:00 AM – 5:00 PM
                        </p>
                    </div>
                </div>
    
                <!-- RIGHT SIDE : FORM -->
                <div class="col-lg-7 touch-right p-5">
                    <form action="{{ route('contactForm') }}" method="POST">
                        @csrf
                        
                        <input type="text" name="subject" value="{{ $courseName }}" hidden>
    
                        <div class="row g-3">
    
                            <div class="col-md-6">
                                <label class="form-label">Full Name<span class="text-danger">*</span></label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
    
                            <div class="col-md-6">
                                <label class="form-label">Phone Number<span class="text-danger">*</span></label>
                                <input type="text" name="number" class="form-control" required>
                            </div>
    
                            <div class="col-md-12">
                                <label class="form-label">Email Address<span class="text-danger">*</span></label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
    
                            <div class="col-md-12">
                                <label class="form-label">Message<span class="text-danger">*</span></label>
                                <textarea name="message" rows="4" class="form-control" required></textarea>
                            </div>
    
                            <div class="col-md-12 mt-3">
                                <button type="submit" class="apply-btn w-100">
                                    Submit Inquiry
                                </button>
                            </div>
    
                        </div>
                    </form>
                </div>
    
            </div>
        </div>
    </section>