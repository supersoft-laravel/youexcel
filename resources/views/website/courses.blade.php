@extends('website.app')

@section('title', 'Advance IT Courses in Karachi Pakistan')
@section('meta_description', 'Explore Advance IT Courses in Karachi, Pakistan. Gain expert-level knowledge in programming, networking, cybersecurity, and more to enhance your career in technology.')
@section('meta_keywords', 'Advance IT Courses in Karachi Pakistan')


@section('content')
    <!--==============================
    Breadcumb
============================== -->
    <style>
        :root {
            --primary: #2c3e50;
            --secondary: #3498db;
            --accent: #e74c3c;
            --light: #f8f9fa;
            --dark: #212529;
            --card-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
            --transition: all 0.3s ease;
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
        
        /* Trainer Cards */
        .trainer-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: var(--card-shadow);
            transition: var(--transition);
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        
        .trainer-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }
        
        .trainer-img-container {
            height: 250px;
            overflow: hidden;
            position: relative;
        }
        
        .trainer-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }
        
        .trainer-card:hover .trainer-img {
            transform: scale(1.05);
        }
        
        .trainer-content {
            padding: 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        
        .trainer-name {
            font-weight: 700;
            font-size: 1.4rem;
            margin-bottom: 8px;
            color: var(--primary);
        }
        
        .trainer-expertise {
            display: inline-block;
            background: rgba(52, 152, 219, 0.1);
            color: var(--secondary);
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 15px;
        }
        
        .trainer-divider {
            border-top: 1px solid #eee;
            margin: 15px 0;
        }
        
        .trainer-link {
            display: inline-flex;
            align-items: center;
            color: #ff9800;
            font-weight: 600;
            text-decoration: none;
            margin-top: auto;
            transition: var(--transition);
        }
        
        .trainer-link:hover {
            color: #1a4480;
        }
        
        .trainer-link i {
            margin-left: 8px;
            transition: var(--transition);
        }
        
        .trainer-link:hover i {
            transform: translateX(5px);
        }
        
        /* Responsive adjustments */
        @media (max-width: 992px) {
            .trainer-card {
                margin-bottom: 30px;
            }
        }
        
        @media (max-width: 768px) {
            .section-title h2 {
                font-size: 2rem;
            }
            
            .trainer-img-container {
                height: 220px;
            }
        }
        
        .bg-pattern {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0.03;
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><rect fill="none" stroke="%232c3e50" stroke-width="2" x="10" y="10" width="80" height="80" rx="10" ry="10"/></svg>');
            background-size: 150px;
            pointer-events: none;
        }
    </style>
    <style>
        .deals-container {
            background: transparent;
            border-radius: 20px;
            padding: 30px;
            margin: 20px auto;
            max-width: 1200px;
        }

        .deals-container .product-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            position: relative;
            border: 1px solid #f0f4f8;
            height: 100%;
            margin-bottom: 30px;
        }

        .deals-container .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .deals-container .badge {
            position: absolute;
            top: 165px;
            right: 5px;
            background: linear-gradient(90deg, #ff6b6b, #ff8e53);
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
            z-index: 2;
        }

        .deals-container .product-img {
            height: 200px;
            width: 100%;
            background: linear-gradient(45deg, #f8f9fa, #e9ecef);
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .deals-container .product-img img {
            width: 100%;
            height: 100%;
            /* object-fit: cover; */
        }

        .deals-container .product-content {
            padding: 20px;
        }

        .deals-container .product-name {
            font-size: 20px;
            font-weight: 700;
            color: #2d3748;
            margin-bottom: 10px;
            min-height: 50px;
        }

        .deals-container .rating {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .deals-container .stars {
            color: #ffc107;
            margin-right: 8px;
        }

        .deals-container .rating-value {
            font-weight: 600;
            color: #4a5568;
        }

        .deals-container .pricing {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 8px;
            margin-bottom: 5px;
        }

        .deals-container .current-price {
            font-size: 22px;
            font-weight: 700;
            color: #3a0ca3;
        }

        .deals-container .original-price {
            font-size: 16px;
            color: #718096;
            text-decoration: line-through;
        }

        .deals-container .discount {
            background: #e9f7ef;
            color: #38a169;
            padding: 4px 10px;
            border-radius: 15px;
            font-size: 14px;
            font-weight: 600;
        }

        .deals-container .btn-container {
            display: flex;
            gap: 10px;
            margin-top: 15px;
        }

        .deals-container .btn-enquire {
            flex: 1;
            background: linear-gradient(90deg, #4361ee, #3a0ca3);
            color: white;
            border: none;
            border-radius: 10px;
            padding: 10px;
            font-weight: 600;
            transition: all 0.3s ease;
            text-align: center;
            text-decoration: none;
        }

        .deals-container .btn-learn {
            flex: 1;
            background: white;
            color: #4361ee;
            border: 1px solid #4361ee;
            border-radius: 10px;
            padding: 10px;
            font-weight: 600;
            transition: all 0.3s ease;
            text-align: center;
            text-decoration: none;
        }

        .deals-container .btn-enquire:hover {
            background: linear-gradient(90deg, #3a0ca3, #4361ee);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(67, 97, 238, 0.3);
            color: white;
        }

        .deals-container .btn-learn:hover {
            background: #4361ee;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(67, 97, 238, 0.3);
        }

        .deals-container .sale-banner {
            text-align: center;
            margin-top: 40px;
            padding: 20px;
            background: linear-gradient(90deg, #ff6b6b, #ff8e53);
            border-radius: 15px;
            color: white;
            font-size: 24px;
            font-weight: 700;
            box-shadow: 0 8px 20px rgba(255, 107, 107, 0.3);
        }
    </style>
    <section class="space-top space-extra-bottom section-header">
        <div class="bg-pattern"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="section-title text-center position-relative">
                        <h2>Our Training Program Offerings in a Snapshot</h2>
                        <p>Advance your career with industry-leading IT training programs</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<!--==============================
      Course Area
  ==============================-->
    
    <div class="deals-container">

        <div class="container">
            <div class="row">
                <!-- Course 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="badge">Popular</div>
                        <div class="product-img">
                            <img src="https://youexceltraining.com/img/Yourexcel-img/dscip.jpg" alt="Data Science and Analytics">
                        </div>
                        <div class="product-content">
                            <h3 class="product-name">Data Science and Analytics</h3>
                            <div class="rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <span class="rating-value">4.0 ★</span>
                            </div>
                            <div class="pricing">
                                <span class="current-price">60 hours</span>
                                <!--<span class="discount">2,059 Students</span>-->
                            </div>
                            <div class="btn-container">
                                <a href="enquiry-form/data-science-and-analytics" target="_blank" class="btn-enquire">Enquire Now</a>
                                <a href="courses/data-science" target="_blank" class="btn-learn">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Course 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="badge">Top Rated</div>
                        <div class="product-img">
                            <img src="https://youexceltraining.com/img/Yourexcel-img/powerBI.jpg" alt="Dashboard Reporting & Analysis with Power BI">
                        </div>
                        <div class="product-content">
                            <h3 class="product-name">Dashboard Reporting & Analysis with Power BI</h3>
                            <div class="rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="rating-value">5.0 ★</span>
                            </div>
                            <div class="pricing">
                                <span class="current-price">36 hours</span>
                                <!--<span class="discount">15,000 Students</span>-->
                            </div>
                            <div class="btn-container">
                                <a href="{{url("enquiry-form/dashboard-reporting-with-power-bi")}}" target="_blank" class="btn-enquire">Enquire Now</a>
                                <a href="{{url("courses/dashboard-reporting-powerbi-analysis")}}" target="_blank" class="btn-learn">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Course 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="badge">Popular</div>
                        <div class="product-img">
                            <img src="https://youexceltraining.com/img/Yourexcel-img/advancedExcel.jpg" alt="Advanced MS Excel">
                        </div>
                        <div class="product-content">
                            <h3 class="product-name">Advanced MS Excel: BI with Data Visualization</h3>
                            <div class="rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half"></i>
                                </div>
                                <span class="rating-value">4.5 ★</span>
                            </div>
                            <div class="pricing">
                                <span class="current-price">24 hours</span>
                                <!--<span class="discount">17,447 Students</span>-->
                            </div>
                            <div class="btn-container">
                                <a href="enquiry-form/advanced-ms-excel" target="_blank" class="btn-enquire">Enquire Now</a>
                                <a href="courses/advanced-excel" target="_blank" class="btn-learn">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                 <!--Course 12 -->
                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="badge">Popular</div>
                        <div class="product-img">
                            <img src="https://youexceltraining.com/img/Yourexcel-img/entrepreneurship-banner.jpg" alt="Entrepreneurship">
                        </div>
                        <div class="product-content">
                            <h3 class="product-name">Entrepreneurship</h3>
                            <div class="rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="rating-value">5.0 ★</span>
                            </div>
                            <div class="pricing">
                                <span class="current-price">24 hours</span>
                                <!--<span class="discount">537 Students</span>-->
                            </div>
                            <div class="btn-container">
                                <a href="enquiry-form/entrepreneurship" target="_blank" class="btn-enquire">Enquire Now</a>
                                <a href="courses/entrepreneurship" target="_blank" class="btn-learn">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="badge">Popular</div>
                        <div class="product-img">
                            <img src="https://youexceltraining.com/img/Yourexcel-img/GENAI.jpg" alt="Entrepreneurship">
                        </div>
                        <div class="product-content">
                            <h3 class="product-name">Become a GenAI Developer</h3>
                            <div class="rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="rating-value">5.0 ★</span>
                            </div>
                            <div class="pricing">
                                <span class="current-price">78 hours</span>
                                <!--<span class="discount">537 Students</span>-->
                            </div>
                            <div class="btn-container">
                                <a href="enquiry-form/Become-a-GenAI-Developer" target="_blank" class="btn-enquire">Enquire Now</a>
                                <a href="courses/become-a-genai-developer" target="_blank" class="btn-learn">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="badge">Popular</div>
                        <div class="product-img">
                            <img src="{{ asset('img/courses/bi-applications.jpeg') }}" alt="Dashboard Reporting & Analysis with BI Applications">
                        </div>
                        <div class="product-content">
                            <h3 class="product-name">Dashboard Reporting & Analysis with BI Applications</h3>
                            <div class="rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="rating-value">5.0 ★</span>
                            </div>
                            <div class="pricing">
                                <span class="current-price">36 hours</span>
                                <!--<span class="discount">537 Students</span>-->
                            </div>
                            <div class="btn-container">
                                <a href="enquiry-form/dashboard-reporting-and-analysis-with-bi-applications" target="_blank" class="btn-enquire">Enquire Now</a>
                                <a href="courses/dashboard-reporting-with-bi-applications" target="_blank" class="btn-learn">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Course 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="badge">Popular</div>
                        <div class="product-img">
                            <img src="https://youexceltraining.com/img/Yourexcel-img/fma.jpg" alt="Financial Modeling">
                        </div>
                        <div class="product-content">
                            <h3 class="product-name">Financial Modeling & Analysis</h3>
                            <div class="rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half"></i>
                                </div>
                                <span class="rating-value">4.5 ★</span>
                            </div>
                            <div class="pricing">
                                <span class="current-price">24 hours</span>
                                <!--<span class="discount">25,800 Students</span>-->
                            </div>
                            <div class="btn-container">
                                <a href="enquiry-form/financial-modeling-and-analysis" target="_blank" class="btn-enquire">Enquire Now</a>
                                <a href="courses/financial-modeling" target="_blank" class="btn-learn">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Course 5 -->
                <!--<div class="col-lg-4 col-md-6">-->
                <!--    <div class="product-card">-->
                <!--        <div class="badge">Popular</div>-->
                <!--        <div class="product-img">-->
                <!--            <img src="https://youexceltraining.com/img/Yourexcel-img/tax.jpg" alt="Tax Management">-->
                <!--        </div>-->
                <!--        <div class="product-content">-->
                <!--            <h3 class="product-name">Tax Management with Return Filing</h3>-->
                <!--            <div class="rating">-->
                <!--                <div class="stars">-->
                <!--                    <i class="fas fa-star"></i>-->
                <!--                    <i class="fas fa-star"></i>-->
                <!--                    <i class="fas fa-star"></i>-->
                <!--                    <i class="fas fa-star"></i>-->
                <!--                    <i class="far fa-star"></i>-->
                <!--                </div>-->
                <!--                <span class="rating-value">4.0 ★</span>-->
                <!--            </div>-->
                <!--            <div class="pricing">-->
                <!--                <span class="current-price">60 hours</span>-->
                                <!--<span class="discount">3,200 Students</span>-->
                <!--            </div>-->
                <!--            <div class="btn-container">-->
                <!--                <a href="enquiry-form/tax-management-with-return-filing" target="_blank" class="btn-enquire">Enquire Now</a>-->
                <!--                <a href="courses/tax-management" target="_blank" class="btn-learn">Learn More</a>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->

                <!-- Course 6 -->
                <!--<div class="col-lg-4 col-md-6">-->
                <!--    <div class="product-card">-->
                <!--        <div class="badge">Recommended</div>-->
                <!--        <div class="product-img">-->
                <!--            <img src="https://youexceltraining.com/img/Yourexcel-img/cap.jpeg" alt="Computerized Accounting">-->
                <!--        </div>-->
                <!--        <div class="product-content">-->
                <!--            <h3 class="product-name">Computerized Accounting (MS Excel, QuickBook, Tally, Power Point)</h3>-->
                <!--            <div class="rating">-->
                <!--                <div class="stars">-->
                <!--                    <i class="fas fa-star"></i>-->
                <!--                    <i class="fas fa-star"></i>-->
                <!--                    <i class="fas fa-star"></i>-->
                <!--                    <i class="far fa-star"></i>-->
                <!--                    <i class="far fa-star"></i>-->
                <!--                </div>-->
                <!--                <span class="rating-value">3.0 ★</span>-->
                <!--            </div>-->
                <!--            <div class="pricing">-->
                <!--                <span class="current-price">48 hours</span>-->
                                <!--<span class="discount">2,400 Students</span>-->
                <!--            </div>-->
                <!--            <div class="btn-container">-->
                <!--                <a href="enquiry-form/computerized-accounting" target="_blank" class="btn-enquire">Enquire Now</a>-->
                <!--                <a href="courses/computerized-accounting" target="_blank" class="btn-learn">Learn More</a>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->

                <!-- Course 7 -->
                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="badge">Featured</div>
                        <div class="product-img">
                            <img src="https://youexceltraining.com/img/Yourexcel-img/csmp.jpeg" alt="Cyber Security Mastery">
                        </div>
                        <div class="product-content">
                            <h3 class="product-name">Cyber Security Mastery</h3>
                            <div class="rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <span class="rating-value">3.5 ★</span>
                            </div>
                            <div class="pricing">
                                <span class="current-price">48 hours</span>
                                <!--<span class="discount">867 Students</span>-->
                            </div>
                            <div class="btn-container">
                                <a href="enquiry-form/cyber-security-mastery" target="_blank" class="btn-enquire">Enquire Now</a>
                                <a href="courses/cyber-security" target="_blank" class="btn-learn">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Course 8 -->
                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="badge">Featured</div>
                        <div class="product-img">
                            <img src="https://youexceltraining.com/img/Yourexcel-img/eduqannb.jpeg" alt="E-Dukaan">
                        </div>
                        <div class="product-content">
                            <h3 class="product-name">E-Dukaan (E-Commerce Business Setup)</h3>
                            <div class="rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="rating-value">5.0 ★</span>
                            </div>
                            <div class="pricing">
                                <span class="current-price">48 hours</span>
                                <!--<span class="discount">1,751 Students</span>-->
                            </div>
                            <div class="btn-container">
                                <a href="enquiry-form/e-dukan-specialist-course" target="_blank" class="btn-enquire">Enquire Now</a>
                                <a href="courses/e-dukaan-specialist" target="_blank" class="btn-learn">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Course 9 -->
                <!--<div class="col-lg-4 col-md-6">-->
                <!--    <div class="product-card">-->
                <!--        <div class="badge">New</div>-->
                <!--        <div class="product-img">-->
                <!--            <img src="https://youexceltraining.com/img/Yourexcel-img/python-azure.png" alt="Data Analytics Using Python">-->
                <!--        </div>-->
                <!--        <div class="product-content">-->
                <!--            <h3 class="product-name">Data Analytics Using Python with Azure DevOps</h3>-->
                <!--            <div class="rating">-->
                <!--                <div class="stars">-->
                <!--                    <i class="fas fa-star"></i>-->
                <!--                    <i class="fas fa-star"></i>-->
                <!--                    <i class="fas fa-star"></i>-->
                <!--                    <i class="fas fa-star"></i>-->
                <!--                    <i class="fas fa-star"></i>-->
                <!--                </div>-->
                <!--                <span class="rating-value">5.0 ★</span>-->
                <!--            </div>-->
                <!--            <div class="pricing">-->
                <!--                <span class="current-price">40 hours</span>-->
                                <!--<span class="discount">355 Students</span>-->
                <!--            </div>-->
                <!--            <div class="btn-container">-->
                <!--                <a href="enquiry-form/data-analytics-using-python-with-azure-devOps" target="_blank" class="btn-enquire">Enquire Now</a>-->
                <!--                <a href="courses/python-data-analysis-with-azure" target="_blank" class="btn-learn">Learn More</a>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->

                <!-- Course 10 -->
                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="badge">Trending</div>
                        <div class="product-img">
                            <img src="https://youexceltraining.com/img/Yourexcel-img/ai.jpg" alt="MS Office Management">
                        </div>
                        <div class="product-content">
                            <h3 class="product-name">MS Office Management</h3>
                            <div class="rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <span class="rating-value">3.5 ★</span>
                            </div>
                            <div class="pricing">
                                <span class="current-price">16 hours</span>
                                <!--<span class="discount">1,255 Students</span>-->
                            </div>
                            <div class="btn-container">
                                <a href="enquiry-form/ms-office-management" target="_blank" class="btn-enquire">Enquire Now</a>
                                <a href="courses/ai-integrated-office" target="_blank" class="btn-learn">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Course 11 -->
                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="badge">Featured</div>
                        <div class="product-img">
                            <img src="https://youexceltraining.com/img/Yourexcel-img/pdwip.jpg" alt="Presentation Delivery">
                        </div>
                        <div class="product-content">
                            <h3 class="product-name">Presentation Delivery with Impact</h3>
                            <div class="rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <span class="rating-value">4.0 ★</span>
                            </div>
                            <div class="pricing">
                                <span class="current-price">8 hours</span>
                                <!--<span class="discount">428 Students</span>-->
                            </div>
                            <div class="btn-container">
                                <a href="enquiry-form/presenting-with-impact-workshop" target="_blank" class="btn-enquire">Enquire Now</a>
                                <a href="courses/presentation-delivery-with-impact" target="_blank" class="btn-learn">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Course 12 -->
                <!--<div class="col-lg-4 col-md-6">-->
                <!--    <div class="product-card">-->
                <!--        <div class="badge">Popular</div>-->
                <!--        <div class="product-img">-->
                <!--            <img src="https://youexceltraining.com/img/Yourexcel-img/fma.jpg" alt="Financial Modeling">-->
                <!--        </div>-->
                <!--        <div class="product-content">-->
                <!--            <h3 class="product-name">Financial Modeling and Analysis - Self Paced Learning</h3>-->
                <!--            <div class="rating">-->
                <!--                <div class="stars">-->
                <!--                    <i class="fas fa-star"></i>-->
                <!--                    <i class="fas fa-star"></i>-->
                <!--                    <i class="fas fa-star"></i>-->
                <!--                    <i class="fas fa-star"></i>-->
                <!--                    <i class="fas fa-star-half"></i>-->
                <!--                </div>-->
                <!--                <span class="rating-value">4.5 ★</span>-->
                <!--            </div>-->
                <!--            <div class="pricing">-->
                <!--                <span class="current-price">24 hours</span>-->
                                <!--<span class="discount">537 Students</span>-->
                <!--            </div>-->
                <!--            <div class="btn-container">-->
                <!--                <a href="enquiry-form/financial-modeling-and-analysis" target="_blank" class="btn-enquire">Enquire Now</a>-->
                <!--                <a href="courses/financial-modeling-self" target="_blank" class="btn-learn">Learn More</a>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                
                
            </div>
        </div>
    </div>
    
    
    
    
    
@endsection
