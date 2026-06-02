@extends('website.app' , ['title'=>'Contact Us'])

@section('content')
    <style>
        :root {
            --primary-blue: #0056b3;
            --secondary-blue: #007bff;
            --accent-orange: #ff6b35;
            --light-blue: #e6f0ff;
            --dark-blue: #003d82;
            --light-gray: #f8f9fa;
            --text-dark: #333;
        }
        
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
        
        /* Main Content Styles */
        .contact-container {
            max-width: 100%;
            margin: 0 auto 80px;
            padding: 0 20px;
        }
        
        .contact-content {
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            margin-bottom: 60px;
        }
        
        .company-contact-info {
            flex: 2;
            min-width: 300px;
        }
        
        .contact-form {
            flex: 1;
            min-width: 300px;
        }
        
        .info-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
            padding: 35px;
            height: 100%;
            position: relative;
            overflow: hidden;
            border-top: 5px solid var(--accent-orange);
        }
        
        .info-card h2 {
            color: var(--primary-blue);
            font-weight: 700;
            margin-bottom: 25px;
            position: relative;
            padding-bottom: 15px;
            font-size: 2.1rem;
        }
        
        .info-card h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 4px;
            background: var(--accent-orange);
            border-radius: 3px;
        }
        
        .info-card p {
            margin-bottom: 25px;
            color: #555;
            font-size: 1.05rem;
        }
        
        /* Office Picture Section */
        .office-picture {
            margin: 30px 0;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            position: relative;
            height: 400px;
            transition: transform 0.3s ease;
        }
        
        .office-picture:hover {
            transform: translateY(-5px);
        }
        
        .office-picture img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .office-picture:hover img {
            transform: scale(1.05);
        }
        
        .office-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background: linear-gradient(transparent, rgba(0,0,0,0.7));
            color: white;
            padding: 20px;
        }
        
        .office-overlay h3 {
            margin: 0;
            font-size: 1.4rem;
        }
        
        /* FAQ Highlight */
        .faq-highlight {
            background: var(--light-blue);
            border-left: 4px solid var(--primary-blue);
            padding: 25px;
            border-radius: 10px;
            margin-bottom: 30px;
            transition: all 0.3s ease;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }
        
        .faq-highlight:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,86,179,0.15);
            border-left: 4px solid var(--accent-orange);
        }
        
        .faq-highlight i {
            font-size: 2.2rem;
            color: var(--primary-blue);
            margin-bottom: 20px;
            display: block;
            transition: transform 0.3s;
        }
        
        .faq-highlight:hover i {
            transform: scale(1.05);
            color: var(--accent-orange);
        }
        
        .faq-highlight h3 {
            color: var(--primary-blue);
            margin-bottom: 15px;
            font-size: 1.5rem;
        }
        
        .faq-highlight p {
            color: #555;
            margin-bottom: 15px;
        }
        
        .faq-highlight a {
            display: inline-flex;
            align-items: center;
            margin-top: 10px;
            color: var(--accent-orange);
            font-weight: 700;
            text-decoration: none;
            transition: all 0.3s;
            font-size: 1.1rem;
        }
        
        .faq-highlight a:hover {
            color: var(--dark-blue);
            text-decoration: underline;
        }
        
        .faq-highlight a i {
            font-size: 1.2rem;
            margin-left: 8px;
            margin-bottom: 0;
            display: inline-block;
        }
        
        /* Contact Details */
        .contact-detail {
            display: flex;
            align-items: flex-start;
            margin-bottom: 25px;
            padding-bottom: 25px;
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }
        
        .contact-detail:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }
        
        .contact-detail i {
            color: var(--accent-orange);
            font-size: 1.6rem;
            min-width: 40px;
            text-align: center;
            margin-right: 15px;
            margin-top: 5px;
        }
        
        .contact-detail-content h4 {
            color: var(--primary-blue);
            margin-bottom: 5px;
            font-size: 1.2rem;
        }
        
        .contact-detail-content p {
            margin-bottom: 0;
            color: #555;
            font-size: 1.05rem;
        }
        
        .contact-detail-content a {
            color: var(--secondary-blue);
            text-decoration: none;
            transition: all 0.3s;
            font-weight: 500;
        }
        
        .contact-detail-content a:hover {
            color: var(--accent-orange);
            text-decoration: underline;
        }
        
        /* Form Styles */
        .form-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
            padding: 35px;
            height: 100%;
            border-top: 5px solid var(--primary-blue);
        }
        
        .form-card h2 {
            color: var(--primary-blue);
            font-weight: 700;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 15px;
            font-size: 2.1rem;
        }
        
        .form-card h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 4px;
            background: var(--accent-orange);
            border-radius: 3px;
        }
        
        .form-card p {
            color: #555;
            margin-bottom: 25px;
            font-size: 1.05rem;
        }
        
        .form-group {
            margin-bottom: 25px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 10px;
            font-weight: 600;
            color: var(--primary-blue);
        }
        
        .form-control {
            width: 100%;
            padding: 14px 18px;
            border: 2px solid #e1e5eb;
            border-radius: 10px;
            font-family: 'Poppins', sans-serif;
            font-size: 1.05rem;
            transition: all 0.3s;
        }
        
        .form-control:focus {
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 4px rgba(0,86,179,0.15);
            outline: none;
        }
        
        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }
        
        .submit-btn {
            background: linear-gradient(135deg, var(--primary-blue), var(--dark-blue));
            color: white;
            border: none;
            padding: 16px 30px;
            font-size: 1.15rem;
            font-weight: 600;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.3s;
            width: 100%;
            display: block;
            text-align: center;
            font-family: 'Poppins', sans-serif;
            letter-spacing: 0.5px;
            box-shadow: 0 5px 15px rgba(0,86,179,0.3);
        }
        
        .submit-btn:hover {
            background: linear-gradient(135deg, var(--dark-blue), var(--accent-orange));
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0,86,179,0.4);
        }
        
        /* Map Section */
        .contact-container .map-section {
            margin: 50px 0;
        }
        
        .contact-container .map-section h2 {
            text-align: center;
            color: var(--primary-blue);
            margin-bottom: 40px;
            font-weight: 700;
            position: relative;
            padding-bottom: 20px;
            font-size: 2.2rem;
        }
        
        .contact-container .map-section h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 5px;
            background: var(--accent-orange);
            border-radius: 3px;
        }
        
        .contact-container .map-container {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(0,0,0,0.15);
            height: auto;
            border: 5px solid white;
        }
        
        /* Responsive Adjustments */
        @media (max-width: 992px) {
            .contact-header h1 {
                font-size: 2.6rem;
            }
            
            .contact-header p {
                font-size: 1.1rem;
            }
        }
        
        @media (max-width: 768px) {
            .contact-header {
                padding: 80px 0 40px;
            }
            
            .contact-header h1 {
                font-size: 2.2rem;
            }
            
            .contact-content {
                flex-direction: column;
                gap: 30px;
            }
            
            .contact-container .map-container {
                height: auto;
            }
        }
        
        /* Social Links */
        .contact-social-links {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }
        
        .contact-social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: var(--primary-blue);
            color: white;
            transition: all 0.3s;
            font-size: 1.3rem;
            text-decoration: none;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        
        .contact-social-links a:hover {
            background: var(--accent-orange);
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0,0,0,0.2);
        }
        
        /* Hours Badge */
        .hours-badge {
            background: rgba(255, 107, 53, 0.15);
            color: var(--accent-orange);
            padding: 8px 18px;
            border-radius: 25px;
            font-weight: 700;
            display: inline-block;
            margin-top: 8px;
            font-size: 0.95rem;
            border: 1px solid rgba(255, 107, 53, 0.3);
        }
    </style>
    
    <section class="space-top space-extra-bottom section-header">
        <div class="bg-pattern"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="section-title text-center position-relative">
                        <h2>Get in Touch with YouExcel</h2>
                        <p>We're here to help you achieve career excellence. Reach out to us with any questions or inquiries.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Main Content -->
    <div class="contact-container mt-5">
        <div class="contact-content">
            <!-- Contact Information -->
            <div class="company-contact-info">
                <div class="info-card">
                    <h2>Got a question for us?</h2>
                    <p>You’ve come to the right place.The team at YouExcel wants to make sure you achieve career excellence through our training programs.</p>
                    
                    <!-- FAQ Highlight Box -->
                    <div class="faq-highlight" onclick="window.location.href='faqs'">
                        <i class="fas fa-question-circle"></i>
                        <h3>Frequently Asked Questions</h3>
                        <p>Our FAQs are packed full of every question and answer you could have about YouExcel, including how to get admission, features and benefits of training programs, training mode offered etc.</p>
                        <a href="faqs">Explore All FAQs <i class="fas fa-arrow-right"></i></a>
                    </div>
                    
                    <!-- Office Picture -->
                    <div class="office-picture">
                        <img src="{{asset('img/contact-img.jpeg')}}" alt="YouExcel Office">
                        <div class="office-overlay">
                            <h3>Our Training Center</h3>
                        </div>
                    </div>
                    
                    <!-- Contact Details -->
                    <div class="contact-detail">
                        <i class="fas fa-clock"></i>
                        <div class="contact-detail-content">
                            <h4>Office Hours</h4>
                            <p>We're available to assist you during these hours:</p>
                            <div class="hours-badge">10am – 5pm Monday-Sunday</div>
                        </div>
                    </div>
                    
                    <div class="contact-detail">
                        <i class="fas fa-phone-alt"></i>
                        <div class="contact-detail-content">
                            <h4>Phone</h4>
                            <p>
                                <a href="tel:+923313016699">+92-331-3016699</a> (WhatsApp)<br>
                                <a href="tel:+922137121738">+92-21-37121738</a> (Office)
                            </p>
                        </div>
                    </div>
                    
                    <div class="contact-detail">
                        <i class="fas fa-envelope"></i>
                        <div class="contact-detail-content">
                            <h4>Email</h4>
                            <p>
                                <a href="mailto:info@youexceltraining.com">info@youexceltraining.com</a>
                            </p>
                        </div>
                    </div>
                    
                    <div class="contact-detail">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="contact-detail-content">
                            <h4>Address</h4>
                            <p>
                                YouExcel, Suite: 503-505, 5th Floor, Al Samad Tower,<br>
                                Block 13-B, Main University Road,<br>
                                Gulshan-e-Iqbal, Karachi, Pakistan.
                            </p>
                        </div>
                    </div>
                    
                    <div class="contact-social-links">
                        <a href="https://www.facebook.com/youexceltraining"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.youtube.com/c/youexceltraining/videos"><i class="fab fa-youtube"></i></a>
                        <a href="https://www.linkedin.com/company/youexceltraining"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.instagram.com/youexcel_official/"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.pinterest.com/youexceltraining/"><i class="fa-brands fa-pinterest-p"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Contact Form -->
            <div class="contact-form">
                <div class="form-card">
                    <h2>Speak to Us</h2>
                    <p>Have questions about our courses? Fill out the form below and our team will contact you shortly.</p>
                    
                    <form action="{{ route('contactForm') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Complete Name</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Enter your full name" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="number" class="form-control" placeholder="Enter your phone number">
                        </div>
                        
                        <div class="form-group">
                            <label for="course">Select Course</label>
                            <select name="subject" id="subjectY" class="form-control">
                                <option value="" selected disabled>Choose a course</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Your Message</label>
                            <textarea name="message" id="message" class="form-control" placeholder="Tell us about your training needs"></textarea>
                        </div>
                        
                        <button type="submit" class="submit-btn">Send Message <i class="fas fa-paper-plane ms-2"></i></button>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- Map Section -->
        <div class="map-section">
            <h2>Visit Our Training Center</h2>
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.808841149856!2d67.07564891500374!3d24.904501284033127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x86df1120fe0a52b9!2sYouExcel!5e0!3m2!1sen!2s!4v1638602168765!5m2!1sen!2s" 
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy">
                </iframe>
            </div>
        </div>
    </div>

    <script>
        // Add animation to FAQ box on hover
        const faqHighlight = document.querySelector('.faq-highlight');
        
        faqHighlight.addEventListener('mouseenter', function() {
            this.querySelector('a').style.transform = 'translateX(8px)';
            this.querySelector('a i').style.transform = 'rotate(-45deg)';
        });
        
        faqHighlight.addEventListener('mouseleave', function() {
            this.querySelector('a').style.transform = 'translateX(0)';
            this.querySelector('a i').style.transform = 'rotate(0deg)';
        });
        
        // Form validation
        // document.querySelector('form').addEventListener('submit', function(e) {
        //     e.preventDefault();
            
        //     // Show success message
        //     const submitBtn = this.querySelector('.submit-btn');
        //     submitBtn.innerHTML = '<i class="fas fa-check-circle me-2"></i> Message Sent!';
        //     submitBtn.disabled = true;
        //     submitBtn.style.background = 'linear-gradient(135deg, #28a745, #218838)';
            
        //     // Reset after 3 seconds
        //     setTimeout(() => {
        //         this.reset();
        //         submitBtn.innerHTML = 'Send Message <i class="fas fa-paper-plane ms-2"></i>';
        //         submitBtn.disabled = false;
        //         submitBtn.style.background = 'linear-gradient(135deg, var(--primary-blue), var(--dark-blue))';
        //     }, 3000);
        // });
    </script>
@endsection
