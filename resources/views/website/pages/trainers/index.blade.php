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
        /* Section spacing */
        .trainer-section{
            padding:80px 0;
            background:#f7f9fc;
        }
        
        /* Trainer Card */
        .trainer-card{
            background:#fff;
            border-radius:16px;
            overflow:hidden;
            box-shadow:0 8px 25px rgba(0,0,0,0.08);
            transition:all .35s ease;
            height:100%;
            display:flex;
            flex-direction:column;
        }
        
        .trainer-card:hover{
            transform:translateY(-10px);
            box-shadow:0 20px 40px rgba(0,0,0,0.15);
        }
        
        .trainer-img-container{
            position:relative;
            height:260px;
            overflow:hidden;
        }
        
        /* Image fix */
        .trainer-img{
            position:absolute;
            top:0;
            left:0;
            width:100% !important;
            height:100% !important;
            object-fit:cover;
            object-position:center;
            transition:transform .5s ease;
        }
        
        /* Hover zoom */
        .trainer-card:hover .trainer-img{
            transform:scale(1.1);
        }
        
        /* Overlay */
        .trainer-overlay{
            position:absolute;
            top:0;
            left:0;
            width:100%;
            height:100%;
            background:linear-gradient(180deg, transparent, rgba(0,0,0,0.6));
            display:flex;
            justify-content:center;
            align-items:center;
            opacity:0;
            transition:all .35s ease;
        }
        
        .trainer-card:hover .trainer-overlay{
            opacity:1;
        }
        
        /* Button */
        .trainer-btn{
            background:#ff9800;
            color:#fff;
            padding:10px 22px;
            border-radius:30px;
            font-size:14px;
            font-weight:600;
            text-decoration:none;
            transition:.3s;
        }
        
        .trainer-btn:hover{
            background:#1a4480;
            color:#fff;
        }
        
        /* Badge */
        .trainer-badge{
            position:absolute;
            top:15px;
            left:15px;
            background:#ff9800;
            color:#fff;
            font-size:12px;
            padding:6px 12px;
            border-radius:20px;
            font-weight:600;
        }
        
        /* Content */
        .trainer-content{
            padding:22px;
            display:flex;
            flex-direction:column;
            flex-grow:1;
        }
        
        /* Name */
        .trainer-name{
            font-size:20px;
            font-weight:700;
            margin-bottom:5px;
            color:#1a4480;
        }
        
        /* Expertise */
        .trainer-expertise{
            font-size:14px;
            color:#777;
            margin-bottom:15px;
        }
        
        /* Link */
        .trainer-link{
            margin-top:auto;
            font-weight:600;
            color:#ff9800;
            text-decoration:none;
            display:inline-flex;
            align-items:center;
            gap:6px;
            transition:.3s;
        }
        
        .trainer-link:hover{
            color:#1a4480;
        }
        
        .trainer-link i{
            transition:.3s;
        }
        
        .trainer-link:hover i{
            transform:translateX(6px);
        }
        
        /* Responsive */
        @media(max-width:768px){
        
        .trainer-img-container{
            height:220px;
        }
        
        .trainer-section{
            padding:60px 0;
        }
        
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

    <section class="trainer-section">
        <div class="container">
            <div class="row g-4">
    
                @if(isset($trainers) && count($trainers) > 0)
                    @foreach($trainers as $trainer)
    
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="trainer-card">
    
                            <div class="trainer-img-container">
                                <img src="{{ asset($trainer->picture) }}" 
                                     alt="{{ $trainer->name }}" 
                                     class="trainer-img">
    
                                <div class="trainer-overlay">
                                    <a href="{{ route('web.trainers.show', $trainer->slug) }}" class="trainer-btn">
                                        View Profile
                                    </a>
                                </div>
    
                                <span class="trainer-badge">
                                    {{ $trainer->experience }}+ Years
                                </span>
                            </div>
    
                            <div class="trainer-content">
                                <h3 class="trainer-name">{{ $trainer->name }}</h3>
    
                                <p class="trainer-expertise">
                                    Professional Trainer
                                </p>
    
                                <a href="{{ route('web.trainers.show', $trainer->slug) }}" class="trainer-link">
                                    Get Trainer Info
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
    
                        </div>
                    </div>
    
                    @endforeach
                @else
                    <div class="col-12 text-center">
                        <p>No Trainer Found!</p>
                    </div>
                @endif
    
            </div>
        </div>
    </section>
    
    @include('website.sections.courses-redirection-section')

@endsection