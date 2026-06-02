<!--================ Start Header Menu Area =================-->
@extends('website.app')


@section('title', 'Live Webinars')

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
        
        /* === Existing Section Header Ke Sath Harmony === */
        .webinar-card {
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .webinar-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.2);
        }

        .webinar-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .webinar-card-header {
            background: #002347;
            color: #fff;
            padding: 17px;
            text-align: start;
            height: 150px;
        }
        .webinar-card-header h5 {
            font-size: 1.35rem;
            color: #fff;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .webinar-card-body {
            padding: 20px;
            flex-grow: 1;
        }

        .webinar-card-body h5 {
            font-size: 1.25rem;
            color: #1a2a3a;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .webinar-card-body p {
            font-size: 0.95rem;
            color: #333;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .webinar-card-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px 20px 20px;
        }

        .webinar-card-footer .btn-register {
            background: #ff9800;
            color: #fff;
            border-radius: 5px;
            padding: 6px 15px;
            font-weight: 600;
            transition: background 0.3s;
        }

        .webinar-card-footer .btn-register:hover {
            background: #e68a00;
            color: #fff;
        }

        .webinar-date {
            font-size: 0.85rem;
            color: #666;
            font-weight: 500;
        }
        
        .webinar-section .col-lg-4,
        .webinar-section .col-md-6,
        .webinar-section .col-sm-12 {
            display: flex;
        }

        @media (max-width: 576px){
            .webinar-card img {
                height: 180px;
            }
        }
    </style>

    <section class="space-top space-extra-bottom section-header">
        <div class="bg-pattern"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="section-title text-center position-relative">
                        <h2>Live Webinars</h2>
                        <p>Join our live webinars to enhance your skills, learn from experts, and stay updated with the latest industry trends. Don’t miss out on upcoming sessions!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- ================= Webinars Grid ================= -->
    <section class="space-top webinar-section">
        <div class="container">
            <div class="row g-4">
                @forelse($webinars as $webinar)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="webinar-card">
                            <!--<img src="{{ asset($webinar->image ?? 'website/images/default-webinar.jpg') }}" alt="{{ $webinar->title }}">-->
                            <div class="webinar-card-header">
                                <h5>{{ $webinar->title }}</h5>
                            </div>
                            <div class="webinar-card-body">
                                <p>{{ $webinar->description }}</p>
                            </div>
                            <div class="webinar-card-footer">
                                <span class="webinar-date">
                                    {{ \Carbon\Carbon::parse($webinar->date)->format('d M, Y') }}
                                    <br>
                                    {{ \Carbon\Carbon::parse($webinar->date)->format('g:i A') }} (PST) |
                                    {{ \Carbon\Carbon::parse($webinar->date)->format('l') }}
                                </span>
                                @if($webinar->reg_link)
                                    <a href="{{ $webinar->reg_link }}" target="_blank" class="btn btn-register">Register</a>
                                @endif
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p class="text-muted">No webinars available at the moment. Please check back later.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection
