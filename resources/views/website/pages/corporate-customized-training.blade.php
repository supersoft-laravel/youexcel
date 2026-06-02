@extends('website.app')

@section('title', 'Corporate Customized Training')
@section('meta_description', '')
@section('meta_keywords', '')

@push('style')
    
@endpush

@section('content')
    <style>
        :root {
            --primary: #1a4480;
            /* YouExcel primary blue */
            --secondary: #4caf50;
            /* YouExcel green */
            --accent: #ff9800;
            /* YouExcel orange */
            --dark: #2d3748;
            --light: #f8f9fa;
            --gray: #718096;
            --light-blue: #e3f2fd;
            /* Light blue background */
        }

        .corporate-training-section h1,
        .corporate-training-section h2,
        .corporate-training-section h3,
        .corporate-training-section h4 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            margin-bottom: 1rem;
            color: var(--primary);
        }

        .corporate-training-section .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .corporate-training-section .btn {
            display: inline-block;
            padding: 12px 28px;
            border-radius: 4px;
            text-decoration: none;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.3s ease;
            cursor: pointer;
            text-align: center;
            margin: 8px 5px;
            white-space: normal; /* Allow wrapping */
            word-break: break-word; /* Break long strings */
        }

        .corporate-training-section .btn-primary {
            background: var(--accent);
            color: white;
            border: 2px solid var(--accent);
        }

        .corporate-training-section .btn-secondary {
            background: transparent;
            color: white;
            border: 2px solid #fff;
        }

        .corporate-training-section .btn-outline {
            background: transparent;
            color: var(--primary);
            border: 2px solid var(--primary);
        }

        .corporate-training-section .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .corporate-training-section .btn-primary:hover {
            background: #e78b01;
        }

        .corporate-training-section .btn-secondary:hover {
            background: #fff;
            color: #0d3a70;
        }

        .corporate-training-section .btn-outline:hover {
            background: var(--primary);
            color: white;
        }

        /* Hero Section */
        .corporate-training-section .hero {
            background: linear-gradient(rgb(48 48 48 / 85%), rgba(0, 40, 104, 0.9)),
            url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
            text-align: center;
        }

        .corporate-training-section .hero h1 {
            font-size: 3.2rem;
            margin-bottom: 1.5rem;
            line-height: 1.2;
            color: #fff;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
        }

        .corporate-training-section .hero p {
            font-size: 1.4rem;
            max-width: 800px;
            margin: 0 auto 2.5rem;
            color: #fff;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }

        .corporate-training-section .hero-btns {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
            margin-top: 20px;
        }

        /* Why Choose Section */
        .corporate-training-section .why-choose {
            padding: 100px 0;
            background-color: white;
            position: relative;
            overflow: hidden;
        }

        .corporate-training-section .why-choose::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 15px;
            background: linear-gradient(to right, var(--primary), var(--secondary));
        }

        .corporate-training-section .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .corporate-training-section .section-title h2 {
            font-size: 2.5rem;
            color: var(--primary);
            position: relative;
            display: inline-block;
            padding-bottom: 15px;
        }

        .corporate-training-section .section-title h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: var(--accent);
            border-radius: 2px;
        }

        .corporate-training-section .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .corporate-training-section .feature-card {
            background: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-align: center;
            border-top: 4px solid var(--accent);
            position: relative;
            overflow: hidden;
        }

        .corporate-training-section .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .corporate-training-section .feature-icon {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 20px;
        }

        .corporate-training-section .feature-card h3 {
            color: var(--primary);
            font-size: 1.4rem;
            margin-bottom: 15px;
        }

        /* Training Categories */
        .corporate-training-section .training-categories {
            padding: 100px 0;
            background: var(--light-blue);
        }

        .corporate-training-section .categories {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 25px;
        }

        .corporate-training-section .category-card {
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            overflow: hidden;
            transition: all 0.3s ease;
            background: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            position: relative;
        }

        .corporate-training-section .category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
        }

        .corporate-training-section .category-header {
            background: linear-gradient(to right, var(--primary), #2a5a9c);
            color: white;
            padding: 20px;
            text-align: center;
        }

        .corporate-training-section .category-header i {
            font-size: 2.5rem;
            margin-bottom: 15px;
        }

        .corporate-training-section .category-header h3 {
            font-size: 1.4rem;
            margin-bottom: 0;
            color: white;
        }

        .corporate-training-section .category-body {
            padding: 20px;
        }

        .corporate-training-section .category-body ul {
            list-style-type: none;
            padding: 0;
        }

        .corporate-training-section .category-body li {
            padding: 10px 0;
            border-bottom: 1px solid #edf2f7;
            display: flex;
            align-items: center;
        }

        .corporate-training-section .category-body li:last-child {
            border-bottom: none;
        }

        .corporate-training-section .category-body li i {
            color: var(--accent);
            margin-right: 10px;
        }

        /* How It Works */
        .corporate-training-section .how-it-works {
            padding: 100px 0;
            background: white;
            position: relative;
        }

        .corporate-training-section .how-it-works::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 15px;
            background: linear-gradient(to right, var(--secondary), var(--primary));
        }

        .corporate-training-section .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .corporate-training-section .testimonial-card {
            background-color: #f8f9fa;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0,0,0,0.06);
            border: 1px solid #ddd;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .corporate-training-section .testimonial-header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .corporate-training-section .avatar {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 1.2rem;
            margin-right: 15px;
        }

        .corporate-training-section .avatar-blue {
            background-color: rgba(13, 110, 253, 0.25);
            color: #0d6efd;
        }

        .corporate-training-section .avatar-green {
            background-color: rgba(25, 135, 84, 0.25);
            color: #198754;
        }

        .corporate-training-section .avatar-purple {
            background-color: rgba(111, 66, 193, 0.25);
            color: #6f42c1;
        }

        .corporate-training-section .testimonial-name {
            margin: 0;
            font-weight: bold;
            white-space: nowrap;
        }

        .corporate-training-section .testimonial-role {
            margin: 0;
            color: #6c757d;
            font-size: 0.95rem;
        }

        .corporate-training-section .testimonial-text {
            font-style: italic;
            color: #6c757d;
            margin: 20px 0;
            flex-grow: 1;
        }

        .corporate-training-section .testimonial-stars {
            color: #ffc107;
            font-size: 1.2rem;
            letter-spacing: 2px;
        }

        .corporate-training-section .steps {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 30px;
            margin-top: 50px;
        }

        .corporate-training-section .step-card {
            background: white;
            border-radius: 10px;
            padding: 40px 25px;
            text-align: center;
            flex: 1;
            min-width: 250px;
            max-width: 320px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            position: relative;
            z-index: 1;
            border: 1px solid #e2e8f0;
        }

        .corporate-training-section .step-number {
            position: absolute;
            top: -20px;
            left: 50%;
            transform: translateX(-50%);
            width: 40px;
            height: 40px;
            background: var(--accent);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 1.2rem;
        }

        .corporate-training-section .step-icon {
            font-size: 3rem;
            color: var(--primary);
            margin-bottom: 20px;
        }

        .corporate-training-section .step-card h3 {
            color: var(--primary);
            margin-bottom: 15px;
        }

        /* Testimonials */
        .corporate-training-section .testimonials {
            padding: 100px 0;
            background: linear-gradient(to bottom, var(--light-blue), white);
        }

        .corporate-training-section .testimonial-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 40px;
            background: white;
            border-radius: 10px;
            position: relative;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            border-left: 4px solid var(--accent);
        }

        .corporate-training-section .testimonial-container::before {
            content: '"';
            position: absolute;
            top: 20px;
            left: 30px;
            font-size: 6rem;
            color: var(--primary);
            opacity: 0.1;
            font-family: serif;
        }

        .corporate-training-section .testimonial-text {
            font-size: 1.2rem;
            font-style: italic;
            color: var(--dark);
            margin-bottom: 25px;
            position: relative;
            z-index: 1;
        }

        .corporate-training-section .testimonial-author {
            font-weight: 600;
            color: var(--primary);
        }

        .corporate-training-section .client-logos {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 40px;
            margin-top: 50px;
        }

        .corporate-training-section .client-logo {
            height: 50px;
            filter: grayscale(100%);
            opacity: 0.6;
            transition: all 0.3s ease;
        }

        .corporate-training-section .client-logo:hover {
            filter: grayscale(0);
            opacity: 1;
        }

        /* CTA Section */
        .corporate-training-section .cta-section {
            padding: 100px 0;
            background: linear-gradient(135deg, #1a237e 0%, #0d47a1 100%);
            color: white;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .corporate-training-section .cta-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 10px;
            background: var(--accent);
        }

        .corporate-training-section .cta-content {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .corporate-training-section .cta-section h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: white;
        }

        .corporate-training-section .cta-section p {
            font-size: 1.2rem;
            margin-bottom: 40px;
            max-width: 700px;
            color: #fff;
            margin-left: auto;
            margin-right: auto;
        }

        .corporate-training-section .brochure-btn {
            display: inline-flex;
            align-items: center;
            background: white;
            color: var(--primary);
            padding: 12px 30px;
            border-radius: 4px;
            font-weight: 600;
            margin-top: 20px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .corporate-training-section .brochure-btn i {
            margin-right: 10px;
            font-size: 1.2rem;
        }

        .corporate-training-section .brochure-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            background: #f0f0f0;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .corporate-training-section .hero h1 {
                font-size: 2.5rem;
            }

            .corporate-training-section .hero p {
                font-size: 1.2rem;
            }

            .corporate-training-section .section-title h2 {
                font-size: 2rem;
            }

            .corporate-training-section .hero-btns {
                flex-direction: column;
                align-items: center;
            }

            .corporate-training-section .btn {
                width: 100%;
                max-width: 300px;
            }

            .corporate-training-section .youexcel-logo {
                position: relative;
                top: 0;
                left: 0;
                margin-bottom: 20px;
            }
        }
    </style>
        
    <style>
        /* same styling (no change) */
        .custom-tabs {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 30px;
        }
        
        .custom-tabs button {
            border: none;
            background: #f5f7fa;
            padding: 2px 22px;
            border-radius: 30px;
            font-weight: 600;
            color: #555;
            transition: 0.3s;
            cursor: pointer;
            font-size: 12px;
        }
        
        .custom-tabs button:hover {
            background: #007bff;
            color: #fff;
        }
        
        .custom-tabs button.active {
            background: #007bff;
            color: #fff;
            box-shadow: 0 4px 15px rgba(0,123,255,0.3);
        }
        
        .tab-pane-custom {
            display: none;
            animation: fadeIn 0.4s ease-in-out;
        }
        
        .tab-pane-custom.active {
            display: block;
        }
        
        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(10px);}
            to {opacity: 1; transform: translateY(0);}
        }
        
        .company-box {
            /*padding: 15px;*/
            /*background: #fff;*/
            /*border-radius: 12px;*/
            transition: 0.3s;
            height: 100%;
            /*box-shadow: 0 2px 10px rgba(0,0,0,0.05);*/
        }
        
        .company-box:hover {
            transform: translateY(-5px);
            /*box-shadow: 0 6px 20px rgba(0,0,0,0.1);*/
        }
        
        .company-box img {
            width: 100%;
            height: 80px;
            object-fit: contain;
        }
    </style>
    
    <div class="corporate-training-section">
        <!-- Hero Section -->
        <section class="hero">
            <div class="container mt-5">
                <h1>Customized Corporate Training for Teams That Drive Practical Results</h1>
                <p>Delivered by Certified Industry Experts</p>
                <div class="hero-btns">
                    <a href="{{ route('enquiry.corporate') }}" class="btn btn-primary">
                        <i class="fas fa-envelope"></i> Request a Training Proposal
                    </a>
                    <a href="tel:+923313016699" class="btn btn-secondary">
                        <i class="fas fa-phone"></i> Book a Discovery Call: +92-331-3016699
                    </a>
                </div>
            </div>
        </section>
    
        <!-- Why Choose Section -->
        <section class="why-choose">
            <div class="container">
                <div class="section-title">
                    <h2>Why Choose YouExcel for Corporate Training?</h2>
                    <p>Designed for Business Goals. Delivered for Real Impact.</p>
                </div>
                <div class="features">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3>ROI-Focused Assessments</h3>
                        <p>Pre & post training assessments and reports to measure impact on performance and ROI.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <h3>KPI-Aligned Training</h3>
                        <p>Aligned with your KPIs through comprehensive Training Need Analysis (TNA) Reports.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-hands-helping"></i>
                        </div>
                        <h3>Post-Training Support</h3>
                        <p>WhatsApp groups and access to customized LMS recordings for continued learning.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <h3>Comprehensive Modules</h3>
                        <p>Modules designed across technical, analytical & leadership domains for holistic development.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <h3>Expert Trainers</h3>
                        <p>Trainers with extensive corporate training and industry experience.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-laptop-house"></i>
                        </div>
                        <h3>Flexible Delivery</h3>
                        <p>Onsite at our Training Center, Online via Zoom, or Hybrid models to suit your needs.</p>
                    </div>
                </div>
            </div>
        </section>
    
        <!-- Training Categories -->
        <section class="training-categories">
            <div class="container">
                <div class="section-title">
                    <h2>Training Solutions Across All Levels</h2>
                </div>
                <div class="categories">
                    <!-- 1. Data & Analytics -->
                    <div class="category-card">
                        <div class="category-header">
                            <i class="fas fa-database"></i>
                            <h3>Data & Analytics</h3>
                        </div>
                        <div class="category-body">
                            <ul>
                                <li><i class="fas fa-check-circle"></i> Python for Data Analysis</li>
                                <li><i class="fas fa-check-circle"></i> Structured Query Language</li>
                                <li><i class="fas fa-check-circle"></i> R Language</li>
                                <li><i class="fas fa-check-circle"></i> Power BI & Tableau</li>
                                <li><i class="fas fa-check-circle"></i> Advanced MS Excel</li>
                            </ul>
                        </div>
                    </div>
    
                    <!-- 2. Cyber Security & IT -->
                    <div class="category-card">
                        <div class="category-header">
                            <i class="fas fa-shield-alt"></i>
                            <h3>Cyber Security & IT</h3>
                        </div>
                        <div class="category-body">
                            <ul>
                                <li><i class="fas fa-check-circle"></i> Network Security</li>
                                <li><i class="fas fa-check-circle"></i> Ethical Hacking</li>
                                <li><i class="fas fa-check-circle"></i> Cloud Security</li>
                                <li><i class="fas fa-check-circle"></i> IT Infrastructure</li>
                                <li><i class="fas fa-check-circle"></i> Compliance & Governance</li>
                            </ul>
                        </div>
                    </div>
    
                    <!-- 3. Sales & Digital Marketing -->
                    <div class="category-card">
                        <div class="category-header">
                            <i class="fas fa-shopping-cart"></i>
                            <h3>E-commerce & Digital Marketing</h3>
                        </div>
                        <div class="category-body">
                            <ul>
                                <li><i class="fas fa-check-circle"></i> Ecommerce Major Tools and Strategiess</li>
                                <li><i class="fas fa-check-circle"></i> Digital Marketing</li>
                                <li><i class="fas fa-check-circle"></i> Social Media Marketing</li>
                                <li><i class="fas fa-check-circle"></i> Search Engine Optimization (SEO)</li>
                                <li><i class="fas fa-check-circle"></i> Search Engine Management (SEM)</li>
                            </ul>
                        </div>
                    </div>
    
                    <!-- 4. Finance & Accounting -->
                    <div class="category-card">
                        <div class="category-header">
                            <i class="fas fa-chart-pie"></i>
                            <h3>Finance & Accounting</h3>
                        </div>
                        <div class="category-body">
                            <ul>
                                <li><i class="fas fa-check-circle"></i> Financial Modeling and Analysis</li>
                                <li><i class="fas fa-check-circle"></i> Budgeting and Forecasting</li>
                                <li><i class="fas fa-check-circle"></i> Accounting Software</li>
                                <li><i class="fas fa-check-circle"></i> Tax Management</li>
                            </ul>
                        </div>
                    </div>
    
                    <!-- 6. Office Productivity & Tech Tools -->
                    <div class="category-card">
                        <div class="category-header">
                            <i class="fas fa-laptop"></i>
                            <h3>Office Productivity and Tech Tools</h3>
                        </div>
                        <div class="category-body">
                            <ul>
                                <li><i class="fas fa-check-circle"></i> MS Office (2019 above and 365 versions)</li>
                                <li><i class="fas fa-check-circle"></i> Power Automate</li>
                                <li><i class="fas fa-check-circle"></i> Power Apps</li>
                                <li><i class="fas fa-check-circle"></i> Google Workspace</li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- 5. Leadership & Communication -->
                    <div class="category-card">
                        <div class="category-header">
                            <i class="fas fa-users"></i>
                            <h3>Soft Skills</h3>
                        </div>
                        <div class="category-body">
                            <ul>
                                <li><i class="fas fa-check-circle"></i> Effective Communication Skills</li>
                                <li><i class="fas fa-check-circle"></i> Presentation Skills</li>
                                <li><i class="fas fa-check-circle"></i> Personal Grooming Skills</li>
                                <li><i class="fas fa-check-circle"></i> Work Ethics</li>
                                <li><i class="fas fa-check-circle"></i> Team Management</li>
                            </ul>
                        </div>
                    </div>
    
    
                </div>
            </div>
        </section>
    
    
        <!-- How It Works -->
        <!--<section class="how-it-works">-->
        <!--    <div class="container">-->
        <!--        <div class="section-title">-->
        <!--            <h2>Your Training, Your Way – In 3 Steps</h2>-->
        <!--        </div>-->
        <!--        <div class="steps">-->
        <!--            <div class="step-card">-->
        <!--                <div class="step-number">1</div>-->
        <!--                <div class="step-icon">-->
        <!--                    <i class="fas fa-clipboard-list"></i>-->
        <!--                </div>-->
        <!--                <h3>Needs Assessment</h3>-->
        <!--                <p>We analyze your business challenges and training requirements to identify skill gaps and-->
        <!--                    opportunities.</p>-->
        <!--            </div>-->
        <!--            <div class="step-card">-->
        <!--                <div class="step-number">2</div>-->
        <!--                <div class="step-icon">-->
        <!--                    <i class="fas fa-pencil-ruler"></i>-->
        <!--                </div>-->
        <!--                <h3>Customization & Design</h3>-->
        <!--                <p>We tailor content, case studies, and delivery format specifically for your team and industry.</p>-->
        <!--            </div>-->
        <!--            <div class="step-card">-->
        <!--                <div class="step-number">3</div>-->
        <!--                <div class="step-icon">-->
        <!--                    <i class="fas fa-chalkboard-teacher"></i>-->
        <!--                </div>-->
        <!--                <h3>Delivery & Impact</h3>-->
        <!--                <p>Expert-led sessions with continuous impact tracking, feedback, and optional post-training-->
        <!--                    support.</p>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</section>-->
    
        <!-- Testimonials -->
        <!--<section class="testimonials">-->
        <!--    <div class="container">-->
        <!--        <div class="section-title">-->
        <!--            <h2>Trusted by Pakistan's Top Companies</h2>-->
        <!--        </div>-->
        <!--        <div class="testimonials-grid">-->
        <!--             Testimonial 1 -->
        <!--            <div class="testimonial-card">-->
        <!--                <div class="testimonial-header">-->
        <!--                    <div class="avatar avatar-blue">FU</div>-->
        <!--                    <div>-->
        <!--                        <h4 class="testimonial-name">FMCG Sector</h4>-->
        <!--                        <p class="testimonial-role">HR Manager</p>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <p class="testimonial-text">-->
        <!--                    "YouExcel's Excel and Dashboard program reduced our reporting time by 40% and improved data-->
        <!--                    accuracy across departments."-->
        <!--                </p>-->
        <!--                <div class="testimonial-stars">★★★★★</div>-->
        <!--            </div>-->
    
        <!--             Testimonial 2 -->
        <!--            <div class="testimonial-card">-->
        <!--                <div class="testimonial-header">-->
        <!--                    <div class="avatar avatar-green">BK</div>-->
        <!--                    <div>-->
        <!--                        <h4 class="testimonial-name">Banking Industry</h4>-->
        <!--                        <p class="testimonial-role">Learning & Development Head</p>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <p class="testimonial-text">-->
        <!--                    "The customized leadership program transformed our mid-level managers into confident leaders who-->
        <!--                    drive team performance."-->
        <!--                </p>-->
        <!--                <div class="testimonial-stars">★★★★☆</div>-->
        <!--            </div>-->
    
        <!--             Testimonial 3 -->
        <!--            <div class="testimonial-card">-->
        <!--                <div class="testimonial-header">-->
        <!--                    <div class="avatar avatar-purple">TL</div>-->
        <!--                    <div>-->
        <!--                        <h4 class="testimonial-name">Telecom Company</h4>-->
        <!--                        <p class="testimonial-role">CTO</p>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <p class="testimonial-text">-->
        <!--                    "After YouExcel's cybersecurity training, we saw a 65% reduction in security incidents and-->
        <!--                    improved compliance scores."-->
        <!--                </p>-->
        <!--                <div class="testimonial-stars">★★★★★</div>-->
        <!--            </div>-->
        <!--        </div>-->
    
        <!--        <div class="client-logos">-->
        <!--            <img style="height: 100px;" src="{{ asset('img/corporate-logos/Habib-Girls-school.png') }}" alt="Habib Girls School"-->
        <!--                class="client-logo">-->
        <!--            <img src="{{ asset('img/corporate-logos/NICL.png') }}" alt="NICL"-->
        <!--                class="client-logo">-->
        <!--            <img src="{{ asset('img/corporate-logos/PII.jpg') }}" alt="PII"-->
        <!--                class="client-logo">-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</section>-->
            
            
        <div class="mt-5">
            @php
                $categories = App\Models\CompanyCategory::orderBy('name')->get();
                $trustedCompanies = App\Models\TrustedCompany::with('category')
                    ->where('is_active', '1')
                    ->orderByRaw('CAST(position AS UNSIGNED) ASC')
                    ->get();
            @endphp
        
            @if($trustedCompanies->count() > 0)
        
            <div class="space-top space-extra-bottom">
                <div class="container text-center">
                    <h2 class="sec-subtitle2" style="font-size:35px;">
                        Trusted by Pakistan's Top Companies
                    </h2>
        
                    <!-- TABS -->
                    <div class="custom-tabs">
                        
                        <!-- ALL TAB -->
                        <button class="tab-btn active" data-tab="all">All</button>
        
                        <!-- DYNAMIC CATEGORY TABS -->
                        @foreach($categories as $category)
                            <button class="tab-btn" data-tab="cat-{{ $category->id }}">
                                {{ ucfirst($category->name) }}
                            </button>
                        @endforeach
                    </div>
        
                    <!-- TAB CONTENT -->
                    <div class="mt-4">
        
                        <!-- ALL TAB -->
                        <div class="tab-pane-custom active" id="all">
                            <div class="row justify-content-center">
                                @foreach($trustedCompanies as $company)
                                    <div class="col-md-2 col-6 mb-4">
                                        <div class="company-box">
                                            <img src="{{ asset($company->logo) }}">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
        
                        <!-- CATEGORY WISE -->
                        @foreach($categories as $category)
                            <div class="tab-pane-custom" id="cat-{{ $category->id }}">
                                <div class="row justify-content-center">
        
                                    @foreach($trustedCompanies->where('category_id', $category->id) as $company)
                                        <div class="col-md-2 col-6 mb-4">
                                            <div class="company-box">
                                                <img src="{{ asset($company->logo) }}">
                                            </div>
                                        </div>
                                    @endforeach
        
                                </div>
                            </div>
                        @endforeach
        
                    </div>
        
                </div>
            </div>
        
            @endif
        </div>
        
        <section class="space-top space-extra-bottom bg-title">
            <div class="container">
                <div class="title-area text-center wow fadeInUp" data-wow-delay="0.3s">
                    <h2 class="sec-title h1 text-yellow">Discover why participants Love YouExcel?</h2>
                </div>
                @include('website.sections.videos-section')
            </div>
        </section>
        
        <!-- CTA Section -->
        <section class="cta-section" id="contact">
            <div class="container">
                <div class="cta-content">
                    <h2>Let's Build Your Team's Competitive Edge</h2>
                    <p>Ready to explore a tailored training plan for your team? Whether for a department or the entire
                        company, we're ready to co-design your learning solution.</p>
                    <div>
                        <a href="{{ route('enquiry.corporate') }}" class="btn btn-primary">
                            <i class="fas fa-envelope"></i> Request Custom Proposal
                        </a>
                        <a href="tel:+923313016699" class="btn btn-secondary">
                            <i class="fas fa-phone"></i> Schedule a Call: +92-331-3016699
                        </a>
                    </div>
                    <a href="{{ route('download.company_profile') }}" class="brochure-btn">
                        <i class="fas fa-download"></i> Download Company Profile
                    </a>
                </div>
            </div>
        </section>
    </div>
    
    
    <script>
        $(document).ready(function(){
    
            $('.tab-btn').click(function(){
    
                var tab = $(this).data('tab');
    
                $('.tab-btn').removeClass('active');
                $(this).addClass('active');
    
                $('.tab-pane-custom').removeClass('active');
                $('#' + tab).addClass('active');
    
            });
    
        });
    </script>
@endsection
