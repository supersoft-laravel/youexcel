@extends('website.app')

@section('content')
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
    <section class="space-top space-extra-bottom section-header">
        <div class="bg-pattern"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="section-title text-center position-relative">
                        <h2>YouExcel Trainer Profiles</h2>
                        <p>We take pride in bringing you the best trainers certified in their specialized fields with several years of practical industry experience. Click trainer info to learn more.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-content">
        <div class="container">
            <div class="row g-4">
                <!-- Trainer 1 -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="trainer-card">
                        <div class="trainer-img-container">
                            <img src="{{ asset('img/trainer/tanweer.png') }}" alt="Tanweer Bukhsh" class="trainer-img">
                        </div>
                        <div class="trainer-content">
                            <h3 class="trainer-name">Tanweer Bukhsh</h3>
                            <span class="trainer-expertise">FINANCIAL MODELING AND ANALYSIS</span>
                            <hr class="trainer-divider">
                            <a href="Tanveer-Bukhsh" class="trainer-link">
                                Get Trainer Info
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Trainer 2 -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="trainer-card">
                        <div class="trainer-img-container">
                            <img src="{{ asset('img/trainer/new2/Tahir-Ali-BI-APPLICATION.png') }}" alt="Tahir Ali" class="trainer-img">
                        </div>
                        <div class="trainer-content">
                            <h3 class="trainer-name">Tahir Ali</h3>
                            <span class="trainer-expertise">Dashboard Reporting & Analysis with Power BI</span>
                            <hr class="trainer-divider">
                            <a href="Tahir-Ali" class="trainer-link">
                                Get Trainer Info
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Trainer 3 -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="trainer-card">
                        <div class="trainer-img-container">
                            <img src="https://youexceltraining.com/img/Yourexcel-img/sumaira-ghouri.jpg" alt="Sumaira Ghouri" class="trainer-img">
                        </div>
                        <div class="trainer-content">
                            <h3 class="trainer-name">Sumaira Ghouri</h3>
                            <span class="trainer-expertise">ADVANCED MS EXCEL: BI WITH DATA VISUALIZATION</span>
                            <hr class="trainer-divider">
                            <a href="Sumaira-Ghouri" class="trainer-link">
                                Get Trainer Info
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Trainer 4 -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="trainer-card">
                        <div class="trainer-img-container">
                            <img src="https://youexceltraining.com/img/Yourexcel-img/Osfh9uPk.jpeg" alt="Murtaza Ghazi" class="trainer-img">
                        </div>
                        <div class="trainer-content">
                            <h3 class="trainer-name">Murtaza Ghazi</h3>
                            <span class="trainer-expertise">Tax Management with Returns Filing</span>
                            <hr class="trainer-divider">
                            <a href="Murtaza-Ghazi" class="trainer-link">
                                Get Trainer Info
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Trainer 5 -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="trainer-card">
                        <div class="trainer-img-container">
                            <img src="{{ asset('/img/trainer/basit.jpg') }}" alt="Muhammad Basit Rana" class="trainer-img">
                        </div>
                        <div class="trainer-content">
                            <h3 class="trainer-name">Muhammad Basit Rana</h3>
                            <span class="trainer-expertise">CUSTOMER SERVICES AND SALES REPRESENTATIVE</span>
                            <hr class="trainer-divider">
                            <a href="Basit-Rana" class="trainer-link">
                                Get Trainer Info
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Trainer 6 -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="trainer-card">
                        <div class="trainer-img-container">
                            <img src="{{ asset('/img/trainer/uzair-ahmad.jpeg') }}" alt="Uzair Rasheed Baig" class="trainer-img">
                        </div>
                        <div class="trainer-content">
                            <h3 class="trainer-name">Uzair Rasheed Baig</h3>
                            <span class="trainer-expertise">ADVANCED MS EXCEL: BI WITH DATA VISUALIZATION</span>
                            <hr class="trainer-divider">
                            <a href="Uzair-Rasheed-Baig" class="trainer-link">
                                Get Trainer Info
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Trainer 7 -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="trainer-card">
                        <div class="trainer-img-container">
                            <img src="{{ asset('/img/trainer/mahir.jpeg') }}" alt="Mahir Alam" class="trainer-img">
                        </div>
                        <div class="trainer-content">
                            <h3 class="trainer-name">Mahir Alam</h3>
                            <span class="trainer-expertise">Tax Management with Returns Filing</span>
                            <hr class="trainer-divider">
                            <a href="Mahir-Alam" class="trainer-link">
                                Get Trainer Info
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Trainer 8 -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="trainer-card">
                        <div class="trainer-img-container">
                            <img src="{{ asset('/img/trainer/zeeshan.jpeg') }}" alt="Zeeshan Zubair" class="trainer-img">
                        </div>
                        <div class="trainer-content">
                            <h3 class="trainer-name">Zeeshan Zubair</h3>
                            <span class="trainer-expertise">SQL for Data Analytics</span>
                            <hr class="trainer-divider">
                            <a href="Zeeshan-Zubair" class="trainer-link">
                                Get Trainer Info
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="trainer-card">
                        <div class="trainer-img-container">
                            <img src="{{ asset('img/trainer/new2/Jahanzeb-Feroz-Cyber-Security-Mastery.png') }}" alt="Jahanzeb Feroz Khan" class="trainer-img">
                        </div>
                        <div class="trainer-content">
                            <h3 class="trainer-name">Jahanzeb Feroz Khan</h3>
                            <span class="trainer-expertise" style="text-transform: uppercase;">Digital Forensic and Cyber Security Expert</span>
                            <hr class="trainer-divider">
                            <a href="Jahanzeb-Feroz-Khan" class="trainer-link">
                                Get Trainer Info
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="trainer-card">
                        <div class="trainer-img-container">
                            <img src="{{ asset('/img/trainer/Kashif-Mughal.png') }}" alt="Kashif Mughal" class="trainer-img">
                        </div>
                        <div class="trainer-content">
                            <h3 class="trainer-name">Kashif Mughal</h3>
                            <span class="trainer-expertise" style="text-transform: uppercase;">Data Mining and Business Intelligence</span>
                            <hr class="trainer-divider">
                            <a href="Kashif-Mughal" class="trainer-link">
                                Get Trainer Info
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="trainer-card">
                        <div class="trainer-img-container">
                            <img src="{{ asset('/img/trainer/Ahsan-Masroor.jpg') }}" alt="Ahsan Masroor" class="trainer-img">
                        </div>
                        <div class="trainer-content">
                            <h3 class="trainer-name">Ahsan Masroor</h3>
                            <span class="trainer-expertise" style="text-transform: uppercase;">Data Science and Machine Learning</span>
                            <hr class="trainer-divider">
                            <a href="Ahsan-Masroor" class="trainer-link">
                                Get Trainer Info
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="trainer-card">
                        <div class="trainer-img-container">
                            <img src="{{ asset('img/trainer/new2/M-Rafay-Shaikh-DATA-SCIENCE.png') }}" alt="Muhammad Rafay Shaikh" class="trainer-img">
                        </div>
                        <div class="trainer-content">
                            <h3 class="trainer-name">Muhammad Rafay Shaikh</h3>
                            <span class="trainer-expertise" style="text-transform: uppercase;">Data Science and Analytics</span>
                            <hr class="trainer-divider">
                            <a href="Muhammad-Rafay-Shaikh" class="trainer-link">
                                Get Trainer Info
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="trainer-card">
                        <div class="trainer-img-container">
                            <img src="{{ asset('img/trainer/new2/Syed-Asif-Ashraf-E-Dukaan-Specialist.png') }}" alt="Syed Asif Ashraf" class="trainer-img">
                        </div>
                        <div class="trainer-content">
                            <h3 class="trainer-name">Syed Asif Ashraf</h3>
                            <span class="trainer-expertise" style="text-transform: uppercase;">Digital Marketing and Ecommerce</span>
                            <hr class="trainer-divider">
                            <a href="Syed-Asif-Ashraf" class="trainer-link">
                                Get Trainer Info
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="trainer-card">
                        <div class="trainer-img-container">
                            <img src="{{ asset('/img/trainer/Muhammad-Zohaib.png') }}" alt="Muhammad Zohaib" class="trainer-img">
                        </div>
                        <div class="trainer-content">
                            <h3 class="trainer-name">Muhammad Zohaib</h3>
                            <span class="trainer-expertise" style="text-transform: uppercase;">Computerized Accounting</span>
                            <hr class="trainer-divider">
                            <a href="Muhammad-Zohaib" class="trainer-link">
                                Get Trainer Info
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    @include('website.sections.courses-redirection-section')

@endsection