@extends('website.app')

@section('title', 'Executive Dashboard')
@section('meta_description', '')
@section('meta_keywords', '')

@section('content')
    <style>
        .mobile-layer-1 {
            width: 100%;
        }
        .scroll-indicator {
            position: absolute;
            bottom: 25px;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            z-index: 10;
        }
        
        /* Mouse */
        .mouse {
            width: 28px;
            height: 45px;
            border: 2px solid #fff;
            border-radius: 20px;
            position: relative;
            margin: auto;
        }
        
        .wheel {
            width: 4px;
            height: 8px;
            background: #fff;
            position: absolute;
            top: 8px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 2px;
            animation: scroll-wheel 1.5s infinite;
        }
        
        /* Wheel animation */
        @keyframes scroll-wheel {
            0% {
                opacity: 1;
                top: 8px;
            }
            100% {
                opacity: 0;
                top: 20px;
            }
        }
        
        /* Arrow */
        .arrow {
            margin-top: 8px;
            font-size: 16px;
            color: #fff;
            animation: bounce 1.5s infinite;
        }
        
        /* Arrow bounce */
        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
                opacity: 0.7;
            }
            50% {
                transform: translateY(6px);
                opacity: 1;
            }
        }
        
        .typing-text {
            display: inline-block;
            vertical-align: middle;
        
            position: relative;
            top: -3px;
        
            white-space: nowrap;
            overflow: hidden;
            border-right: 3px solid #2563eb;
        
            width: 0ch;
            animation: typing 3s steps(17) infinite alternate,
                       blink 0.7s infinite;
        }
        
        /* typing forward + backward */
        @keyframes typing {
            from { width: 0ch; }
            to { width: 16ch; }
        }
        
        /* cursor blink */
        @keyframes blink {
            50% { border-color: transparent; }
        }

        /* Hero Section */
.hero-section {
    position: relative;
    padding-top: 150px;
    background: linear-gradient(rgba(10, 25, 60, 0.92), rgba(10, 25, 60, 0.92)),
                url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80') center/cover no-repeat;
    color: #fff;
    display: flex;
    align-items: center;
    min-height: 100vh;
}

/* Bottom fade effect */
.hero-section::after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 150px;
    background: linear-gradient(to bottom, rgba(10,25,60,0) 0%, rgba(0,0,0,0.85) 100%);
}

/* Right image styling */
.hero-img {
    height: 68% !important;
    max-width: 100%;
    border-radius: 12px;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
}

/* Badge */
.hero-section .badge-box {
    display: inline-block;
    background: rgba(255, 255, 255, 0.12);
    padding: 8px 18px;
    border-radius: 30px;
    font-size: 14.5px;
    font-weight: 500;
}

/* Heading */
.hero-section .hero-title {
    font-size: 46px;
    color: #fff;
    font-weight: 700;
    line-height: 1.25;
    margin-bottom: 18px;
}

.hero-section .hero-title span {
    color: #f59e0b;
}

/* Subheadline */
.hero-section .hero-text {
    color: #cbd5e1;
    font-size: 18px;
    line-height: 1.5;
    margin-bottom: 30px;
    max-width: 580px;
}

/* Trust & Micro Lines */
.hero-section .trust-line {
    color: #94a3b8;
    font-size: 15.5px;
    margin-bottom: 6px;
}

.hero-section .micro-line {
    color: #64748b;
    font-size: 14.5px;
    margin-bottom: 30px;
}

/* Buttons */
.hero-section .btn-primary {
    background: #2563eb;
    border: none;
    padding: 14px 32px;
    font-size: 17px;
}

.hero-section .btn-outline-light {
    border: 1.5px solid #fff;
    padding: 14px 32px;
    font-size: 17px;
}

.hero-section .btn-warning {
    background: #f59e0b;
    color: #1e2937;
    font-weight: 600;
}

/* Stats */
.hero-section .stats h4 {
    font-weight: 700;
    margin-bottom: 4px;
    color: #fff;
    font-size: 28px;
}

.hero-section .stats p {
    font-size: 14.5px;
    color: #cbd5e1;
    margin: 0;
}

/* ================= MOBILE RESPONSIVE ================= */
@media (max-width: 991px) {
    .hero-section {
        padding: 130px 0 80px;
        text-align: center;
    }
    
    .hero-section .hero-title {
        font-size: 36px;
    }
    
    .hero-section .hero-text {
        font-size: 17px;
        max-width: 100%;
    }
    
    .hero-section .btn {
        width: 100%;
        margin-bottom: 12px;
    }
    
    .hero-section .stats {
        flex-direction: column;
        gap: 24px;
        text-align: center;
    }
}

@media (max-width: 576px) {
    .hero-section .hero-title {
        font-size: 30px;
    }
    
    .hero-section .badge-box,
    .hero-section .trust-line,
    .hero-section .micro-line {
        font-size: 13.5px;
    }
}
        
        
        .review-logo-section {
            background: #f8f9fa;
            padding: 20px 0;
            overflow: hidden;
        }
    
        .review-logo-section .container-custom {
            width: 95%;
            margin: 20px;
            /*overflow: hidden;*/
        }
    
        .review-logo-section .logo-slider {
            display: flex;
            width: max-content;
            animation: scroll 15s linear infinite;
        }
    
        .review-logo-section .logo-slider:hover {
            animation-play-state: paused;
        }
    
        .review-logo-section .logo-item {
            flex: 0 0 auto;
            margin: 0 150px;
            display: flex;
            align-items: center;
        }
    
        .review-logo-section .logo-item img {
            height: 40px;
            object-fit: contain;
            opacity: 0.9;
            transition: 0.3s ease;
        }
    
        .review-logo-section .logo-item img:hover {
            opacity: 1;
            transform: scale(1.08);
        }
    
        @keyframes scroll {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-50%);
            }
        }
    
        /* Responsive */
        @media (max-width: 768px) {
            /*.review-logo-section .logo-item {*/
            /*    margin: 0 20px;*/
            /*}*/
    
            .review-logo-section .logo-item img {
                height: 30px;
            }
        }

        .trusted-section {
            padding: 80px 0;
            text-align: center;
        }

        .trusted-section .trusted-title {
            color: #2563eb;
            font-size: 30px;
            font-weight: 600;
            letter-spacing: 2px;
        }

        .trusted-section .trusted-subtitle {
            color: #6b7280;
            margin-top: 10px;
            font-size: 16px;
        }

        .trusted-section .company-card {
            /*background: #fff;*/
            /*border: 1px solid #e5e7eb;*/
            border-radius: 12px;
            /*padding: 25px;*/
            height: 100%;
            display: flex;
            align-items: center;
            gap: 15px;
            
            transition: all 0.35s ease;
            transform: translateY(0);
        }
        
        .trusted-section .company-card:hover {
            transform: translateY(-8px) scale(1.03);
            box-shadow: 0 10px 30px rgba(37, 99, 235, 0.15);
        }

        /*.trusted-section .company-card:hover {*/
        /*    border-color: #2563eb;*/
        /*    box-shadow: 0 5px 20px rgba(37, 99, 235, 0.15);*/
        /*}*/

        .trusted-section .company-logo {
            width: 100%;
            /*height: 40px;*/
            /*background: #e5e7eb;*/
            border-radius: 6px;
            flex-shrink: 0;
        }
        
        .trusted-section .company-logo img {
            width: 100%;
            transition: all 0.4s ease;
            filter: grayscale(100%);
            opacity: 0.7;
        }
        
        .trusted-section .company-card:hover img {
            filter: grayscale(0%);
            opacity: 1;
            transform: scale(1.1);
        }
        
        .fade-up {
            opacity: 0;
            transform: translateY(40px);
            transition: all 0.6s ease;
        }
        
        .fade-up.show {
            opacity: 1;
            transform: translateY(0);
        }

        .trusted-section .company-name {
            font-weight: 600;
            font-size: 14px;
            color: #374151;
        }

        .trusted-section .trusted-footer {
            margin-top: 40px;
            color: #6b7280;
        }

        .trusted-section .trusted-footer strong {
            color: #111827;
        }

        /* ================= RESPONSIVE ================= */

        /* Tablet */
        @media (max-width: 991px) {
            .trusted-section {
                padding: 60px 20px;
            }

            .trusted-section .trusted-subtitle {
                font-size: 15px;
            }
        }

        /* Mobile */
        @media (max-width: 576px) {

            .trusted-section {
                padding: 50px 15px;
            }

            .trusted-section .trusted-title {
                font-size: 20px;
            }

            .trusted-section .trusted-subtitle {
                font-size: 14px;
                padding: 0 10px;
            }

            /* Cards better fit */
            .trusted-section .company-card {
                padding: 18px;
                gap: 12px;
            }

            /*.trusted-section .company-logo {*/
            /*    width: 32px;*/
            /*    height: 32px;*/
            /*}*/

            .trusted-section .company-name {
                font-size: 14px;
            }

            .trusted-section .trusted-footer {
                font-size: 14px;
                padding: 0 10px;
            }
        }

        /* Extra small devices */
        @media (max-width: 400px) {

            .trusted-section .company-card {
                flex-direction: column;
                text-align: center;
            }

            .trusted-section .company-logo {
                margin-bottom: 8px;
            }
        }

        .challenge-section {
            padding: 80px 0;
            text-align: center;
            background-color: #F4F6F8;
        }

        .challenge-section .challenge-label {
            color: #2563eb;
            font-size: 14px;
            font-weight: 600;
            letter-spacing: 2px;
        }

        .challenge-section .challenge-title {
            font-size: 42px;
            font-weight: 700;
            margin: 15px 0;
            color: #1f2937;
        }

        .challenge-section .challenge-subtitle {
            color: #6b7280;
            max-width: 650px;
            margin: 0 auto 50px;
            font-size: 16px;
        }

        .challenge-section .challenge-card {
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 25px;
            display: flex;
            align-items: flex-start;
            gap: 15px;
            text-align: left;
            transition: 0.3s;
            height: 100%;
        }

        .challenge-section .challenge-card:hover {
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
        }

        .challenge-section .icon-box {
            background: #fee2e2;
            color: #ef4444;
            width: 45px;
            height: 45px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            flex-shrink: 0;
        }

        .challenge-section .challenge-card h5 {
            font-weight: 600;
            margin-bottom: 5px;
            color: #1f2937;
        }

        .challenge-section .challenge-card p {
            font-size: 14px;
            color: #6b7280;
            margin: 0;
        }

        /* ================= RESPONSIVE ================= */

        /* Tablet */
        @media (max-width: 991px) {
            .challenge-section .challenge-title {
                font-size: 32px;
            }

            .challenge-section .challenge-subtitle {
                font-size: 15px;
                padding: 0 10px;
            }
        }

        /* Mobile */
        @media (max-width: 576px) {

            .challenge-section {
                padding: 50px 15px;
            }

            .challenge-section .challenge-title {
                font-size: 24px;
                line-height: 1.4;
            }

            .challenge-section .challenge-label {
                font-size: 12px;
            }

            .challenge-section .challenge-subtitle {
                font-size: 14px;
                margin-bottom: 30px;
            }

            /* Cards full width */
            .challenge-section .challenge-card {
                flex-direction: row;
                padding: 18px;
                gap: 12px;
            }

            /* Icon smaller */
            .challenge-section .icon-box {
                width: 38px;
                height: 38px;
                font-size: 16px;
            }

            .challenge-section .challenge-card h5 {
                font-size: 16px;
            }

            .challenge-section .challenge-card p {
                font-size: 13px;
            }
        }

        /* Extra small devices */
        @media (max-width: 400px) {

            .challenge-section .challenge-card {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .challenge-section .icon-box {
                margin-bottom: 10px;
            }
        }

        .solution-section {
            padding: 70px 0;
        }

        .solution-section .small-heading {
            color: #3b82f6;
            font-size: 12px;
            letter-spacing: 2px;
            font-weight: 600;
        }

        .solution-section .main-heading {
            font-size: 40px;
            font-weight: 700;
            color: #1f2937;
            margin-top: 10px;
            line-height: 1.2;
        }

        .solution-section .description {
            color: #6b7280;
            font-size: 16px;
            margin: 20px 0;
            line-height: 1.7;
        }

        .solution-section .feature {
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;
            font-size: 16px;
            color: #1f2937;
        }

        .solution-section .feature i {
            color: #22c55e;
            margin-right: 10px;
            font-size: 18px;
            margin-top: 3px;
            flex-shrink: 0;
        }

        .solution-section .stats-box {
            background: linear-gradient(135deg, #0f172a, #1e3a8a);
            color: #fff;
            border-radius: 20px;
            padding: 40px;
            text-align: center;
            height: 100%;
        }

        .solution-section .stats-box h1 {
            font-size: 56px;
            color: #fbbf24;
            font-weight: 700;
        }

        .solution-section .stats-box p {
            color: #cbd5f5;
            margin-bottom: 25px;
        }

        .solution-section .divider {
            height: 1px;
            background: rgba(255, 255, 255, 0.2);
            margin: 25px 0;
        }

        .solution-section .stat h2 {
            font-size: 32px;
            font-weight: 700;
            color: #fff;
        }

        .solution-section .stat p {
            font-size: 14px;
            color: #cbd5f5;
        }

        /* ✅ Tablet */
        @media (max-width: 991px) {
            .solution-section .main-heading {
                font-size: 32px;
            }

            .solution-section .stats-box {
                padding: 30px;
            }
        }

        /* ✅ Mobile */
        @media (max-width: 576px) {
            .solution-section {
                padding: 50px 15px;
            }

            .solution-section .main-heading {
                font-size: 26px;
            }

            .solution-section .description {
                font-size: 14px;
            }

            .solution-section .feature {
                font-size: 14px;
            }

            .solution-section .stats-box {
                padding: 25px;
                border-radius: 15px;
            }

            .solution-section .stats-box h1 {
                font-size: 42px;
            }

            .solution-section .stat h2 {
                font-size: 24px;
            }

            .solution-section .stat p {
                font-size: 12px;
            }
        }


        .program-section {
            padding: 70px 0;
            text-align: center;
            background-color: #F4F6F8;
        }

        .program-section h2 {
            font-weight: 700;
            color: #1f2937;
        }

        .program-section p.subtitle {
            color: #6b7280;
            margin-bottom: 40px;
        }

        .program-section .card-box {
            background: #fff;
            border-radius: 15px;
            padding: 25px;
            text-align: left;
            border: 1px solid #e5e7eb;
            transition: 0.3s;
            height: 100%;
        }

        .program-section .card-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        }

        .program-section .icon-box {
            width: 45px;
            height: 45px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
            font-size: 20px;
        }

        .program-section .icon-blue {
            background: #e0edff;
            color: #2563eb;
        }

        .program-section .icon-green {
            background: #e6f9f0;
            color: #10b981;
        }

        .program-section .icon-yellow {
            background: #fff4e5;
            color: #f59e0b;
        }

        .program-section .icon-red {
            background: #ffe5e5;
            color: #ef4444;
        }

        .program-section .icon-indigo {
            background: #e6e9ff;
            color: #6366f1;
        }

        .program-section .card-box h5 {
            font-weight: 600;
            margin-bottom: 10px;
            color: #1f2937;
        }

        .program-section .card-box p {
            color: #6b7280;
            font-size: 14px;
        }

        .program-section .learn-more {
            color: #2563eb;
            font-weight: 500;
            text-decoration: none;
            font-size: 14px;
            border: none;
            background: none;
        }

        .program-section .learn-more:hover {
            text-decoration: underline;
        }

        .program-section .bottom-text {
            margin-top: 40px;
            color: #6b7280;
        }

        .program-section .cta-btn {
            background: #2563eb;
            color: #fff;
            padding: 12px 25px;
            border-radius: 8px;
            display: inline-block;
            margin-top: 15px;
            text-decoration: none;
            border: none;
            font-weight: 500;
            transition: 0.3s;
        }

        .program-section .cta-btn:hover {
            background: #1e40af;
        }

        .program-section .cta-btn-outline {
            background: #fff;
            color: #2563eb;
            border: 1px solid #2563eb;
            padding: 12px 25px;
            border-radius: 8px;
            display: inline-block;
            margin-top: 15px;
            text-decoration: none;
            font-weight: 500;
            transition: 0.3s;
        }

        .program-section .cta-btn-outline:hover {
            background: #2563eb;
            color: #fff;
        }

        /* Mobile */
        @media (max-width: 576px) {
            .program-section {
                padding: 50px 15px;
            }
        }
        
        .program-section .brochure-card {
            background: linear-gradient(135deg, #0d6efd, #0a58ca);
            color: #fff;
            border-radius: 12px;
            padding: 25px;
            transition: 0.3s;
        }
        
        .program-section .brochure-card h5,
        .program-section .brochure-card p {
            color: #fff;
        }
        
        .program-section .brochure-card .btn {
            background: #fff;
            color: #0d6efd;
            font-weight: 600;
            border-radius: 30px;
            padding: 8px 18px;
        }
        
        .program-section .brochure-card .btn:hover {
            background: #f1f1f1;
        }
        
        .program-section .icon-dark {
            background: rgba(255,255,255,0.15);
            color: #fff;
        }

        /*Outcome Section*/
        .outcome-section {
            padding: 80px 0;
            text-align: center;
        }

        .outcome-section .small-title {
            color: #2563eb;
            font-size: 13px;
            letter-spacing: 2px;
            font-weight: 600;
        }

        .outcome-section .main-title {
            font-size: 42px;
            font-weight: 700;
            color: #1f2937;
            margin-top: 10px;
        }

        .outcome-section .subtitle {
            color: #6b7280;
            margin-top: 10px;
            margin-bottom: 50px;
        }

        .outcome-section .feature-box {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            text-align: left;
        }

        .outcome-section .icon-box {
            min-width: 45px;
            height: 45px;
            border-radius: 12px;
            background: #e0edff;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #2563eb;
            font-size: 20px;
        }

        .outcome-section .feature-box h6 {
            font-weight: 600;
            color: #1f2937;
            margin-bottom: 5px;
        }

        .outcome-section .feature-box p {
            font-size: 14px;
            color: #6b7280;
            margin: 0;
        }

        .outcome-section .cta-btn {
            margin-top: 50px;
            background: linear-gradient(90deg, #f59e0b, #f97316);
            color: #fff;
            padding: 14px 30px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: 600;
            display: inline-block;
            border: none;
            transition: 0.3s;
        }

        .outcome-section .cta-btn:hover {
            opacity: 0.9;
        }

        /* Tablet */
        @media (max-width: 991px) {
            .outcome-section .main-title {
                font-size: 32px;
            }
        }

        /* Mobile */
        @media (max-width: 576px) {
            .outcome-section {
                padding: 60px 15px;
            }

            .outcome-section .main-title {
                font-size: 26px;
            }

            .outcome-section .subtitle {
                font-size: 14px;
            }

            .outcome-section .feature-box {
                gap: 10px;
            }

            .outcome-section .icon-box {
                width: 40px;
                height: 40px;
                font-size: 18px;
            }

            .outcome-section .feature-box p {
                font-size: 13px;
            }

            .outcome-section .cta-btn {
                width: 100%;
                text-align: center;
                padding: 12px;
            }
        }

        .cta-section {
            background: linear-gradient(90deg, #f59e0b, #f97316);
            padding: 30px 20px;
        }

        .cta-section .cta-icon {
            width: 50px;
            height: 50px;
            background-color: rgba(0, 0, 0, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            margin-right: 15px;
            color: #111;
        }

        .cta-section .cta-title {
            font-weight: 700;
            font-size: 1.6rem;
            color: #111827;
            margin-bottom: 5px;
        }

        .cta-section .cta-subtitle {
            color: #1f2937;
            font-size: 0.95rem;
        }

        .cta-section .btn-primary-custom {
            background-color: #2563eb;
            border: none;
            padding: 10px 20px;
            font-weight: 500;
            border-radius: 8px;
            color: #fff;
        }

        .cta-section .btn-primary-custom:hover {
            background-color: #1d4ed8;
        }

        .cta-section .btn-secondary-custom {
            background-color: rgba(0, 0, 0, 0.1);
            border: none;
            padding: 10px 18px;
            font-weight: 500;
            border-radius: 8px;
            color: #111;
        }

        .cta-section .btn-secondary-custom:hover {
            background-color: rgba(0, 0, 0, 0.2);
        }

        /* Mobile adjustments */
        @media (max-width: 768px) {
            .cta-section {
                text-align: center;
            }

            .cta-section .cta-left {
                flex-direction: column;
                align-items: center;
            }

            .cta-section .cta-icon {
                margin-bottom: 10px;
                margin-right: 0;
            }

            .cta-section .cta-buttons {
                margin-top: 20px;
                display: flex;
                flex-direction: column;
                gap: 10px;
            }
        }


        .training-section {
            padding: 60px 20px;
            text-align: center;
            background-color: #F4F6F8;
        }

        .training-section .badge-custom {
            background-color: #e0edff;
            color: #2563eb;
            font-size: 0.8rem;
            padding: 6px 12px;
            border-radius: 50px;
            display: inline-block;
            margin-bottom: 15px;
            font-weight: 500;
        }

        .training-section .section-title {
            font-size: 1.8rem;
            font-weight: 700;
            color: #111827;
            padding: 0px;
        }

        .training-section .section-subtitle {
            color: #6b7280;
            font-size: 0.95rem;
            margin-top: 8px;
            margin-bottom: 35px;
        }

        .training-section .card-custom {
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.3s ease;
            background: #fff;
            height: 100%;
        }

        .training-section .card-custom:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        }

        .training-section .card-img-top {
            height: 180px;
            object-fit: cover;
        }

        .training-section .card-body {
            text-align: left;
            padding: 15px;
        }

        .training-section .card-title {
            font-size: 0.95rem;
            font-weight: 600;
            margin-bottom: 4px;
            color: #111827;
        }

        .training-section .card-text {
            font-size: 0.8rem;
            color: #6b7280;
        }

        .training-section .cta-btn {
            margin-top: 30px;
            background-color: #2563eb;
            color: #fff;
            padding: 10px 20px;
            border-radius: 8px;
            border: none;
            font-size: 0.9rem;
            font-weight: 500;
        }

        .training-section .cta-btn:hover {
            background-color: #1d4ed8;
        }

        /* Mobile tweaks */
        @media (max-width: 768px) {
            .training-section .section-title {
                font-size: 1.5rem;
            }

            .training-section .card-img-top {
                height: 160px;
            }

            .training-section .cta-btn {
                font-size: 0.8rem;
            }
        }


        .cta-demo {
            background: linear-gradient(90deg, #0b1f3a, #1e3a8a);
            color: #fff;
            padding: 50px 20px;
            text-align: center;
        }

        .cta-demo .badge-custom {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: rgba(255, 165, 0, 0.15);
            color: #f59e0b;
            padding: 6px 14px;
            border-radius: 50px;
            font-size: 0.8rem;
            margin-bottom: 20px;
            font-weight: 500;
        }

        .cta-demo .cta-title {
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 15px;
            color: #fbbf24;
        }

        .cta-demo .cta-subtitle {
            font-size: 1rem;
            color: #cbd5e1;
            max-width: 650px;
            margin: 0 auto 30px;
            line-height: 1.6;
        }

        .cta-demo .btn-primary-custom {
            background-color: #f59e0b;
            border: none;
            color: #000;
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 600;
        }

        .cta-demo .btn-primary-custom:hover {
            background-color: #d97706;
            color: #000;
        }

        .cta-demo .btn-secondary-custom {
            background-color: #e5e7eb;
            border: none;
            color: #111;
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 500;
        }

        .cta-demo .cta-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
        }

        /* Mobile */
        @media (max-width: 768px) {
            .cta-demo .cta-title {
                font-size: 1.7rem;
            }

            .cta-demo .cta-subtitle {
                font-size: 0.95rem;
            }

            .cta-demo .cta-buttons {
                flex-direction: column;
                align-items: center;
            }

            .cta-demo .cta-buttons button {
                width: 100%;
                max-width: 280px;
            }
        }


        .process-section .section-title {
            color: #0d6efd;
            font-size: 14px;
            letter-spacing: 2px;
            font-weight: 600;
            padding: 0px;
        }

        .process-section .main-heading {
            font-weight: 700;
            font-size: 36px;
        }

        .process-section .sub-text {
            color: #6c757d;
            max-width: 600px;
            margin: auto;
        }

        .process-section .process-card {
            background: #fff;
            border-radius: 16px;
            padding: 30px 20px;
            text-align: center;
            position: relative;
            transition: 0.3s ease;
            border: 1px solid #e9ecef;
            height: 100%;
        }

        .process-section .process-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
        }

        .process-section .step-number {
            font-size: 48px;
            color: #e6eefc;
            font-weight: 700;
        }

        .process-section .icon-circle {
            width: 60px;
            height: 60px;
            background: #e9f2ff;
            color: #0d6efd;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 10px auto 15px;
            font-size: 24px;
        }

        .process-section .card-title {
            font-weight: 600;
            font-size: 18px;
            margin-bottom: 10px;
        }

        .process-section .card-text {
            font-size: 14px;
            color: #6c757d;
        }

        @media (max-width: 768px) {
            .process-section .main-heading {
                font-size: 28px;
            }
        }

        .form-section {
            padding: 80px 0;
            background-color: #F4F6F8;
        }

        /* LEFT SIDE */
        .form-section .tag {
            color: #0d6efd;
            font-size: 13px;
            letter-spacing: 2px;
            font-weight: 600;
        }

        .form-section .heading {
            font-size: 42px;
            font-weight: 700;
            margin: 15px 0;
        }

        .form-section .desc {
            color: #6c757d;
            font-size: 16px;
            max-width: 520px;
        }

        .form-section .feature-list {
            margin-top: 25px;
        }

        .form-section .feature-list li {
            list-style: none;
            margin-bottom: 12px;
            color: #6c757d;
            font-size: 15px;
        }

        .form-section .feature-list i {
            color: #28a745;
            margin-right: 10px;
        }

        /* FORM CARD */
        .form-section .form-card {
            background: #fff;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.06);
        }

        .form-section .form-control,
        .form-section .form-select {
            border-radius: 10px;
            padding: 12px;
            font-size: 14px;
        }

        .form-section label {
            font-weight: 500;
            margin-bottom: 6px;
        }

        /*.form-section .btn-custom {*/
        /*    background: linear-gradient(90deg, #2563eb, #1d4ed8);*/
        /*    color: #fff;*/
        /*    padding: 14px;*/
        /*    border-radius: 10px;*/
        /*    font-weight: 600;*/
        /*    border: none;*/
        /*    width: 100%;*/
        /*    transition: 0.3s;*/
        /*}*/

        /*.form-section .btn-custom:hover {*/
        /*    opacity: 0.9;*/
        /*}*/
        
        .form-section .btn-custom {
            background: #0d6efd;
            color: #fff;
            border: 2px solid #0d6efd;
            padding: 10px 25px;
            border-radius: 6px;
            transition: 0.3s;
            width: 100%;
        }
        
        .form-section .btn-custom:hover {
            background: #0b5ed7;
            border-color: #0b5ed7;
        }
        
        .form-section .btn-outline-custom {
            background: transparent;
            color: #0d6efd;
            border: 2px solid #0d6efd;
            padding: 10px 25px;
            border-radius: 6px;
            transition: 0.3s;
            width: 100%;
        }
        
        .form-section .btn-outline-custom:hover {
            background: #0d6efd;
            color: #fff;
        }

        .form-section .privacy {
            font-size: 13px;
            color: #6c757d;
            margin-top: 10px;
            text-align: center;
        }

        .form-section .privacy i {
            margin-right: 5px;
        }

        /* Responsive */
        @media(max-width: 991px) {
            .form-section .heading {
                font-size: 32px;
            }

            .form-section {
                padding: 50px 0;
            }
        }

        @media(max-width: 768px) {
            .form-section .text-side {
                text-align: center;
                margin-bottom: 40px;
            }

            .form-section .desc {
                margin: auto;
            }
        }

        /* SECTION */
        .why-section {
            padding: 80px 0;
            text-align: center;
        }

        .why-section .tag {
            color: #2563eb;
            font-size: 13px;
            letter-spacing: 2px;
            font-weight: 600;
        }

        .why-section .heading {
            font-size: 40px;
            font-weight: 700;
            margin: 10px 0;
        }

        .why-section .subtext {
            color: #6c757d;
            max-width: 600px;
            margin: auto;
        }

        /* CARDS */
        .why-section .feature-card {
            background: #fff;
            border-radius: 16px;
            padding: 30px;
            text-align: left;
            border: 1px solid #e6ebf2;
            transition: 0.3s;
            height: 100%;
        }

        .why-section .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
        }

        .why-section .icon-box {
            width: 55px;
            height: 55px;
            background: #eaf1ff;
            color: #2563eb;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            margin-bottom: 15px;
        }

        .why-section .feature-title {
            font-weight: 600;
            font-size: 18px;
            margin-bottom: 8px;
        }

        .why-section .feature-text {
            color: #6c757d;
            font-size: 14px;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .why-section .heading {
                font-size: 32px;
            }
        }

        @media (max-width: 768px) {
            .why-section {
                padding: 50px 0;
            }
        }

        /* SECTION */
        .faq-section {
            padding: 80px 0;
            text-align: center;
            background-color: #F4F6F8;
        }

        .faq-section .tag {
            color: #2563eb;
            font-size: 13px;
            letter-spacing: 2px;
            font-weight: 600;
        }

        .faq-section .heading {
            font-size: 40px;
            font-weight: 700;
            margin-top: 10px;
        }

        .faq-section .accordion {
            max-width: 750px;
            margin: 40px auto 0;
        }

        /* ACCORDION STYLE */
        .faq-section .accordion-item {
            border: 1px solid #e3e8ef;
            border-radius: 12px;
            margin-bottom: 15px;
            overflow: hidden;
            background: #fff;
        }

        .faq-section .accordion-button {
            font-weight: 600;
            font-size: 16px;
            padding: 18px 20px;
            background: #fff;
            box-shadow: none;
        }

        .faq-section .accordion-button:not(.collapsed) {
            background: #fff;
            color: #000;
            box-shadow: none;
        }

        .faq-section .accordion-button:focus {
            box-shadow: none;
        }

        .faq-section .accordion-body {
            text-align: left;
            color: #6c757d;
            font-size: 15px;
            padding: 15px 20px 20px;
        }

        /* Remove default arrow + custom style */
        .faq-section .accordion-button::after {
            background-image: none;
            font-family: "bootstrap-icons";
            content: "\F282";
            /* chevron down */
            font-size: 14px;
            transform: rotate(0deg);
            transition: 0.3s;
        }

        .faq-section .accordion-button:not(.collapsed)::after {
            transform: rotate(180deg);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .faq-section .heading {
                font-size: 28px;
            }

            .faq-section {
                padding: 50px 15px;
            }
        }

        /* CTA SECTION */
        .footer-cta-section {
            background: linear-gradient(90deg, #0f2a4f, #1e3a8a);
            color: #fff;
            text-align: center;
            padding: 100px 20px;
        }

        .footer-cta-section .cta-heading {
            font-size: 44px;
            font-weight: 700;
            line-height: 1.2;
            max-width: 800px;
            margin: auto;
            color: #fff;
        }

        .footer-cta-section .cta-text {
            font-size: 18px;
            color: #d1d5db;
            margin-top: 20px;
            max-width: 650px;
            margin-left: auto;
            margin-right: auto;
        }

        /* BUTTON */
        .footer-cta-section .cta-btn {
            background: #f97316;
            color: #fff;
            padding: 16px 30px;
            border-radius: 10px;
            font-weight: 600;
            margin-top: 30px;
            display: inline-block;
            text-decoration: none;
            border: none;
            transition: 0.3s;
        }

        .footer-cta-section .cta-btn:hover {
            background: #ea580c;
            color: #fff;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .footer-cta-section .cta-heading {
                font-size: 30px;
            }

            .footer-cta-section .cta-text {
                font-size: 16px;
            }

            .footer-cta-section {
                padding: 70px 15px;
            }
        }
    </style>
    <style>
        .problem-section {
    padding: 70px 0;
    background-color: #f5f7fa; /* Light grey background */
}

.problem-section .small-heading {
    color: #dc2626; /* Urgent red for problem context */
    font-size: 12px;
    letter-spacing: 2px;
    font-weight: 600;
    text-transform: uppercase;
    margin-bottom: 10px;
}

.problem-section .main-heading {
    font-size: 40px;
    font-weight: 700;
    color: #111827;
    margin-top: 0;
    margin-bottom: 24px;
    line-height: 1.2;
}

.problem-section .feature {
    display: flex;
    align-items: flex-start;
    margin-bottom: 14px;
    font-size: 16px;
    color: #374151;
    line-height: 1.6;
}

.problem-section .feature i {
    color: #f59e0b; /* Warning amber */
    margin-right: 12px;
    font-size: 18px;
    margin-top: 3px;
    flex-shrink: 0;
    font-style: normal;
}

.problem-section .closing-line {
    margin-top: 28px;
    padding: 18px 24px;
    background: #ffffff;
    border-left: 4px solid #dc2626;
    border-radius: 0 12px 12px 0;
    font-size: 16px;
    color: #1f2937;
    font-weight: 500;
    line-height: 1.6;
    box-shadow: 0 4px 15px rgba(0,0,0,0.04);
}

/* ✅ Tablet */
@media (max-width: 991px) {
    .problem-section .main-heading {
        font-size: 32px;
    }
}

/* ✅ Mobile */
@media (max-width: 576px) {
    .problem-section {
        padding: 50px 15px;
    }
    .problem-section .main-heading {
        font-size: 26px;
    }
    .problem-section .feature {
        font-size: 14px;
    }
    .problem-section .closing-line {
        font-size: 14px;
        padding: 14px 16px;
    }
}



.outcomes-section {
    padding: 80px 0;
    background: linear-gradient(180deg, #ffffff 0%, #f8fafc 100%);
    position: relative;
    overflow: hidden;
}

.outcomes-section .small-tag {
    color: #2563eb;
    font-size: 12px;
    letter-spacing: 2px;
    font-weight: 600;
    text-transform: uppercase;
    margin-bottom: 14px;
    display: inline-block;
    background: rgba(37, 99, 235, 0.08);
    padding: 6px 14px;
    border-radius: 50px;
}

.outcomes-section .main-heading {
    font-size: 38px;
    font-weight: 700;
    color: #0f172a;
    margin-bottom: 24px;
    line-height: 1.25;
}

.outcomes-section .outcome-list {
    list-style: none;
    padding: 0;
    margin: 0 0 32px;
}

.outcomes-section .outcome-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 16px;
    font-size: 16px;
    color: #334155;
    line-height: 1.6;
}

.outcomes-section .outcome-icon {
    flex-shrink: 0;
    width: 22px;
    height: 22px;
    background: #10b981;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 12px;
    margin-top: 2px;
}

.outcomes-section .outcome-icon svg {
    width: 14px;
    height: 14px;
    fill: #ffffff;
}

.outcomes-section .cta-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 14px 28px;
    background: linear-gradient(135deg, #2563eb, #1d4ed8);
    color: #fff;
    font-size: 16px;
    font-weight: 600;
    text-decoration: none;
    border-radius: 10px;
    transition: all 0.3s ease;
    box-shadow: 0 4px 12px rgba(37, 99, 235, 0.25);
    cursor: pointer;
    border: none;
}

.outcomes-section .cta-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(37, 99, 235, 0.35);
    background: linear-gradient(135deg, #1d4ed8, #1e40af);
}

.outcomes-section .cta-btn svg {
    width: 18px;
    height: 18px;
    fill: currentColor;
    transition: transform 0.2s ease;
}

.outcomes-section .cta-btn:hover svg {
    transform: translateX(4px);
}

/* Dashboard Visual */
.outcomes-section .dashboard-visual {
    position: relative;
}

.outcomes-section .dashboard-frame {
    background: #ffffff;
    border-radius: 16px;
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.08), 0 8px 20px rgba(0, 0, 0, 0.04);
    padding: 20px;
    position: relative;
    overflow: hidden;
    border: 1px solid rgba(0, 0, 0, 0.05);
}

.outcomes-section .dashboard-frame::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 32px;
    background: #f1f5f9;
    border-radius: 16px 16px 0 0;
}

.outcomes-section .dashboard-dots {
    position: absolute;
    top: 12px; left: 16px;
    display: flex; gap: 6px;
}

.outcomes-section .dashboard-dots span {
    width: 10px; height: 10px;
    border-radius: 50%;
    background: #cbd5e1;
}
.outcomes-section .dashboard-dots span:nth-child(1) { background: #ef4444; }
.outcomes-section .dashboard-dots span:nth-child(2) { background: #f59e0b; }
.outcomes-section .dashboard-dots span:nth-child(3) { background: #22c55e; }

.outcomes-section .dashboard-content {
    margin-top: 16px;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 16px;
}

.outcomes-section .dash-card {
    background: #f8fafc;
    border-radius: 10px;
    padding: 16px;
    border: 1px solid #e2e8f0;
}

.outcomes-section .dash-card-title {
    font-size: 12px;
    color: #64748b;
    margin-bottom: 8px;
    font-weight: 500;
}

.outcomes-section .dash-card-value {
    font-size: 22px;
    font-weight: 700;
    color: #0f172a;
}

.outcomes-section .dash-card-change {
    font-size: 12px;
    color: #10b981;
    margin-top: 4px;
}

.outcomes-section .dash-chart {
    grid-column: span 2;
    background: #f8fafc;
    border-radius: 10px;
    padding: 16px;
    border: 1px solid #e2e8f0;
    height: 120px;
    display: flex;
    align-items: flex-end;
    gap: 8px;
    padding-bottom: 20px;
}

.outcomes-section .bar {
    flex: 1;
    background: linear-gradient(180deg, #3b82f6, #2563eb);
    border-radius: 4px 4px 0 0;
    height: var(--height, 40%);
    transition: height 0.6s cubic-bezier(0.4, 0, 0.2, 1);
}

.outcomes-section .floating-badge {
    position: absolute;
    bottom: -20px; right: -20px;
    background: #ffffff;
    padding: 12px 18px;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    display: flex;
    align-items: center;
    gap: 10px;
    border: 1px solid #e2e8f0;
    animation: float 4s ease-in-out infinite;
}

.outcomes-section .badge-icon {
    width: 36px; height: 36px;
    background: rgba(37, 99, 235, 0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #2563eb;
    font-size: 18px;
}

.outcomes-section .badge-text {
    font-size: 13px;
    color: #475569;
    line-height: 1.4;
}
.outcomes-section .badge-text strong {
    display: block;
    color: #0f172a;
}

@keyframes float {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-6px); }
}

/* ✅ Tablet */
@media (max-width: 991px) {
    .outcomes-section { padding: 60px 0; }
    .outcomes-section .main-heading { font-size: 32px; }
    .outcomes-section .dashboard-frame { margin-top: 30px; }
    .outcomes-section .floating-badge { right: 10px; bottom: -15px; }
}

/* ✅ Mobile */
@media (max-width: 576px) {
    .outcomes-section { padding: 50px 15px; }
    .outcomes-section .main-heading { font-size: 26px; }
    .outcomes-section .outcome-item { font-size: 14px; }
    .outcomes-section .dashboard-content { grid-template-columns: 1fr; }
    .outcomes-section .dash-chart { grid-column: span 1; height: 100px; }
    .outcomes-section .floating-badge { right: 0; bottom: -10px; }
}

.social-proof-section {
    padding: 100px 0;
    background: linear-gradient(180deg, #0f172a 0%, #1e293b 100%);
    position: relative;
    overflow: hidden;
    color: #ffffff;
}

/* Animated Background Orbs */
.social-proof-section::before,
.social-proof-section::after {
    content: '';
    position: absolute;
    border-radius: 50%;
    filter: blur(80px);
    opacity: 0.15;
    animation: float-orb 20s ease-in-out infinite;
    z-index: 0;
}

.social-proof-section::before {
    width: 400px;
    height: 400px;
    background: #3b82f6;
    top: -100px;
    right: -100px;
    animation-delay: 0s;
}

.social-proof-section::after {
    width: 300px;
    height: 300px;
    background: #10b981;
    bottom: -50px;
    left: -50px;
    animation-delay: 5s;
}

@keyframes float-orb {
    0%, 100% { transform: translate(0, 0) scale(1); }
    33% { transform: translate(30px, -30px) scale(1.1); }
    66% { transform: translate(-20px, 20px) scale(0.9); }
}

.social-proof-section .container {
    position: relative;
    z-index: 1;
}

.social-proof-section .section-header {
    text-align: center;
    margin-bottom: 60px;
    opacity: 0;
    transform: translateY(30px);
    animation: fadeInUp 0.8s ease forwards;
}

.social-proof-section .small-tag {
    display: inline-block;
    color: #60a5fa;
    font-size: 12px;
    letter-spacing: 2px;
    font-weight: 600;
    text-transform: uppercase;
    margin-bottom: 14px;
    background: rgba(96, 165, 250, 0.1);
    padding: 6px 16px;
    border-radius: 50px;
    border: 1px solid rgba(96, 165, 250, 0.2);
}

.social-proof-section .main-heading {
    font-size: 40px;
    font-weight: 700;
    color: #ffffff;
    margin: 0;
    line-height: 1.2;
}

/* Logo Grid */
.social-proof-section .logo-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
    gap: 30px;
    margin-bottom: 70px;
    align-items: center;
    justify-items: center;
}

/*.social-proof-section .logo-item {*/
/*    background: rgba(255, 255, 255, 0.05);*/
/*    border: 1px solid rgba(255, 255, 255, 0.1);*/
/*    border-radius: 12px;*/
/*    padding: 24px 20px;*/
/*    width: 100%;*/
/*    text-align: center;*/
/*    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);*/
/*    opacity: 0;*/
/*    transform: translateY(20px);*/
/*    backdrop-filter: blur(10px);*/
/*}*/

/*.social-proof-section .logo-item.visible {*/
/*    opacity: 1;*/
/*    transform: translateY(0);*/
/*}*/

.social-proof-section .logo-new-item {
    transition: transform 0.35s ease, box-shadow 0.35s ease;
    will-change: transform;
}

.social-proof-section .logo-new-item:hover {
    transform: translateY(-6px) scale(1.08);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.25);
}

.social-proof-section .logo-placeholder {
    font-size: 14px;
    color: #94a3b8;
    font-weight: 500;
    letter-spacing: 0.5px;
}

/* Metrics Section */
.social-proof-section .metrics-wrapper {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
    margin-bottom: 70px;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
}

.social-proof-section .metric-card {
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 16px;
    padding: 35px 25px;
    text-align: center;
    backdrop-filter: blur(10px);
    transition: all 0.4s ease;
    opacity: 0;
    transform: scale(0.9);
}

.social-proof-section .metric-card.visible {
    opacity: 1;
    transform: scale(1);
}

.social-proof-section .metric-card:hover {
    background: rgba(255, 255, 255, 0.08);
    border-color: rgba(16, 185, 129, 0.4);
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
}

.social-proof-section .metric-number {
    font-size: 52px;
    font-weight: 700;
    color: #10b981;
    margin-bottom: 8px;
    line-height: 1;
    display: block;
}

.social-proof-section .metric-label {
    font-size: 15px;
    color: #cbd5e1;
    font-weight: 400;
}

/* Testimonial Section */
/* ===== TESTIMONIAL SLIDER ===== */
.social-proof-section .testimonial-container {
    max-width: 780px;
    margin: 0 auto;
    position: relative;
}

.social-proof-section .testimonial-slider {
    display: grid;
    min-height: 360px; /* Prevents layout jump */
    perspective: 1000px;
}

.social-proof-section .testimonial-card {
    grid-area: 1 / 1;
    background: rgba(255, 255, 255, 0.04);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 24px;
    padding: 45px;
    backdrop-filter: blur(20px);
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.25);
    opacity: 0;
    transform: translateY(20px) scale(0.96);
    transition: opacity 0.7s cubic-bezier(0.4, 0, 0.2, 1), 
                transform 0.7s cubic-bezier(0.4, 0, 0.2, 1);
    visibility: hidden;
    pointer-events: none;
}

.social-proof-section .testimonial-card.active {
    opacity: 1;
    transform: translateY(0) scale(1);
    visibility: visible;
    pointer-events: auto;
}

.social-proof-section .quote-icon {
    position: absolute;
    top: 30px; left: 40px;
    font-size: 70px;
    color: rgba(96, 165, 250, 0.15);
    font-family: Georgia, serif;
    line-height: 1;
    z-index: 0;
}

.social-proof-section .testimonial-text {
    font-size: 18px;
    line-height: 1.8;
    color: #e2e8f0;
    margin: 0 0 30px;
    padding-left: 15px;
    position: relative;
    z-index: 1;
    font-style: italic;
}

.social-proof-section .testimonial-author {
    display: flex;
    align-items: center;
    gap: 16px;
    padding-top: 20px;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
}

.social-proof-section .author-avatar {
    width: 56px; height: 56px;
    border-radius: 50%;
    background: linear-gradient(135deg, #3b82f6, #10b981);
    display: flex; align-items: center; justify-content: center;
    font-size: 20px; font-weight: 700; color: #fff; flex-shrink: 0;
    box-shadow: 0 4px 12px rgba(0,0,0,0.3);
}

.social-proof-section .author-info h4 {
    margin: 0; font-size: 17px; color: #ffffff; font-weight: 600;
}
.social-proof-section .author-info p {
    margin: 4px 0 8px; font-size: 14px; color: #94a3b8;
}

.social-proof-section .company-badge {
    display: inline-flex; align-items: center; gap: 6px;
    background: rgba(16, 185, 129, 0.15); color: #10b981;
    padding: 5px 12px; border-radius: 50px; font-size: 12px; font-weight: 500;
    border: 1px solid rgba(16, 185, 129, 0.3);
}

/* Dots Navigation */
.social-proof-section .testimonial-dots {
    display: flex;
    justify-content: center;
    gap: 10px;
    margin-top: 25px;
}

.social-proof-section .dot {
    width: 10px; height: 10px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.2);
    cursor: pointer;
    transition: all 0.3s ease;
    border: 2px solid transparent;
}

.social-proof-section .dot.active {
    background: #60a5fa;
    transform: scale(1.3);
    border-color: rgba(96, 165, 250, 0.3);
    box-shadow: 0 0 10px rgba(96, 165, 250, 0.5);
}

.social-proof-section .dot:hover {
    background: rgba(96, 165, 250, 0.6);
}

/* ✅ Responsive */
@media (max-width: 768px) {
    .social-proof-section .testimonial-card { padding: 30px 25px; }
    .social-proof-section .testimonial-text { font-size: 16px; padding-left: 0; }
    .social-proof-section .quote-icon { top: 20px; left: 25px; font-size: 50px; }
    .social-proof-section .testimonial-author { flex-direction: column; text-align: center; }
}

/* Animations */
@keyframes fadeInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes countUp {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

/* ✅ Tablet */
@media (max-width: 991px) {
    .social-proof-section { padding: 70px 0; }
    .social-proof-section .main-heading { font-size: 32px; }
    .social-proof-section .logo-grid { grid-template-columns: repeat(3, 1fr); gap: 20px; }
    .social-proof-section .testimonial-card { padding: 35px 25px; }
    .social-proof-section .testimonial-text { font-size: 18px; }
}

/* ✅ Mobile */
@media (max-width: 576px) {
    .social-proof-section { padding: 50px 0; }
    .social-proof-section .main-heading { font-size: 26px; }
    .social-proof-section .logo-grid { grid-template-columns: repeat(2, 1fr); gap: 15px; }
    .social-proof-section .metrics-wrapper { grid-template-columns: 1fr; gap: 20px; }
    .social-proof-section .metric-number { font-size: 42px; }
    .social-proof-section .testimonial-card { padding: 30px 20px; }
    .social-proof-section .testimonial-text { font-size: 16px; padding-left: 0; }
    .social-proof-section .quote-icon { display: none; }
    .social-proof-section .testimonial-author { padding-left: 0; }
}

/* ===== NEWS TICKER SECTION ===== */
.news-ticker-section {
    background: linear-gradient(135deg, #1e293b, #0f172a);
    padding: 14px 0;
    position: relative;
    overflow: hidden;
    border-top: 1px solid rgba(255,255,255,0.1);
    border-bottom: 1px solid rgba(255,255,255,0.1);
}

.news-ticker-section::before {
    content: '';
    position: absolute;
    left: 0; top: 0; bottom: 0;
    width: 80px;
    background: linear-gradient(to right, #0f172a, transparent);
    z-index: 2;
    pointer-events: none;
}

.news-ticker-section::after {
    content: '';
    position: absolute;
    right: 0; top: 0; bottom: 0;
    width: 80px;
    background: linear-gradient(to left, #0f172a, transparent);
    z-index: 2;
    pointer-events: none;
}

.news-ticker-wrapper {
    display: flex;
    overflow: hidden;
    width: 100%;
    position: relative;
    z-index: 1;
}

.news-ticker-track {
    display: flex;
    align-items: center;
    gap: 60px;
    animation: scroll-left 35s linear infinite;
    will-change: transform;
}

.news-ticker-section:hover .news-ticker-track {
    animation-play-state: paused;
}

.news-ticker-item {
    display: flex;
    align-items: center;
    gap: 12px;
    flex-shrink: 0;
    white-space: nowrap;
}

.news-ticker-icon {
    width: 28px;
    height: 28px;
    background: linear-gradient(135deg, #3b82f6, #2563eb);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    box-shadow: 0 4px 12px rgba(37, 99, 235, 0.4);
}

.news-ticker-icon svg {
    width: 16px;
    height: 16px;
    fill: #ffffff;
}

.news-ticker-text {
    font-size: 15px;
    font-weight: 500;
    color: #f1f5f9;
    line-height: 1.5;
    letter-spacing: 0.2px;
}

.news-ticker-text strong {
    color: #60a5fa;
    font-weight: 600;
}

@keyframes scroll-left {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
}

/* ✅ Responsive */
@media (max-width: 768px) {
    .news-ticker-section { padding: 12px 0; }
    .news-ticker-text { font-size: 13px; }
    .news-ticker-icon { width: 24px; height: 24px; }
    .news-ticker-icon svg { width: 14px; height: 14px; }
    .news-ticker-track { gap: 40px; animation-duration: 28s; }
}

@media (max-width: 480px) {
    .news-ticker-text { font-size: 12px; }
    .news-ticker-track { gap: 30px; animation-duration: 22s; }
    .news-ticker-section::before,
    .news-ticker-section::after { width: 60px; }
}

/* ===== Reduced Motion Preference ===== */
@media (prefers-reduced-motion: reduce) {
    .news-ticker-track {
        animation: none !important;
        transform: translateX(0) !important;
    }
    .news-ticker-section::before,
    .news-ticker-section::after {
        display: none;
    }
}

/* ===== BUSINESS IMPACT CHECKLIST ===== */
.impact-checklist-section {
  padding: 60px 0;
  background: #f8fafc;
  position: relative;
}

.impact-checklist-section .container {
  position: relative;
  z-index: 1;
}

/* Header */
.impact-checklist-section .section-header {
  margin-bottom: 25px;
  opacity: 0;
  transform: translateY(20px);
  transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
}
.impact-checklist-section .section-header.visible {
  opacity: 1;
  transform: translateY(0);
}

.impact-checklist-section .small-tag {
  display: inline-block;
  background: linear-gradient(135deg, #3b82f6, #2563eb);
  color: #fff;
  font-size: 11px;
  font-weight: 600;
  letter-spacing: 1.5px;
  padding: 4px 12px;
  border-radius: 50px;
  margin-bottom: 12px;
  box-shadow: 0 3px 8px rgba(37, 99, 235, 0.2);
}

.impact-checklist-section .main-heading {
  font-size: 34px;
  font-weight: 800;
  color: #0f172a;
  margin: 0 0 10px;
  line-height: 1.25;
}

.impact-checklist-section .subtext {
  font-size: 15px;
  color: #64748b;
  margin: 0;
  line-height: 1.6;
}

/* Checklist Container */
.checklist-wrapper {
  background: #ffffff;
  border-radius: 16px;
  padding: 28px 32px;
  border: 1px solid #e2e8f0;
  box-shadow: 0 6px 20px rgba(0,0,0,0.03);
  position: relative;
  overflow: hidden;
}

.checklist-wrapper::before {
  content: '';
  position: absolute;
  left: 0; top: 0; bottom: 0;
  width: 4px;
  background: linear-gradient(180deg, #10b981, #3b82f6);
  border-radius: 4px 0 0 4px;
}

/* Checklist Items */
.checklist-item {
  display: flex;
  align-items: flex-start;
  gap: 14px;
  padding: 14px 0;
  border-bottom: 1px dashed #e5e7eb;
  opacity: 0;
  transform: translateX(-12px);
  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}
.checklist-item:last-child { border-bottom: none; }

.checklist-item.visible {
  opacity: 1;
  transform: translateX(0);
}

.checklist-item:hover {
  background: #f8fafc;
  margin: 0 -16px;
  padding-left: 16px;
  padding-right: 16px;
  border-radius: 10px;
  border-bottom-color: transparent;
}

/* Check Icon */
.check-icon {
  width: 22px;
  height: 22px;
  background: #ecfdf5;
  color: #059669;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  margin-top: 2px;
  transition: all 0.3s ease;
}
.checklist-item:hover .check-icon {
  background: #059669;
  color: #fff;
  transform: scale(1.15);
  box-shadow: 0 4px 10px rgba(5, 150, 105, 0.25);
}

.check-icon svg {
  width: 13px;
  height: 13px;
  stroke: currentColor;
  stroke-width: 3;
  fill: none;
  stroke-linecap: round;
  stroke-linejoin: round;
}

/* Text */
.check-text {
  font-size: 15px;
  font-weight: 500;
  color: #334155;
  line-height: 1.5;
  transition: color 0.3s ease;
}
.checklist-item:hover .check-text {
  color: #0f172a;
}

/* Stagger Delays */
.checklist-item:nth-child(1) { transition-delay: 0.1s; }
.checklist-item:nth-child(2) { transition-delay: 0.15s; }
.checklist-item:nth-child(3) { transition-delay: 0.2s; }
.checklist-item:nth-child(4) { transition-delay: 0.25s; }
.checklist-item:nth-child(5) { transition-delay: 0.3s; }

/* ✅ Responsive */
@media (max-width: 991px) {
  .impact-checklist-section { padding: 50px 20px; }
  .impact-checklist-section .main-heading { font-size: 28px; }
  .checklist-wrapper { padding: 24px 20px; }
}
@media (max-width: 576px) {
  .impact-checklist-section .main-heading { font-size: 24px; }
  .checklist-item { gap: 10px; padding: 12px 0; }
  .check-text { font-size: 14px; }
}


/* ===== WHY IT WORKS SECTION ===== */
.why-training-section {
  padding: 70px 0;
  background: linear-gradient(180deg, #ffffff 0%, #f1f5f9 100%);
  position: relative;
  overflow: hidden;
}

/* Subtle decorative elements */
.why-training-section::before {
  content: '';
  position: absolute;
  top: -50%;
  right: -20%;
  width: 600px;
  height: 600px;
  background: radial-gradient(circle, rgba(59, 130, 246, 0.04) 0%, transparent 70%);
  border-radius: 50%;
  pointer-events: none;
}

.why-training-section .container {
  position: relative;
  z-index: 1;
}

/* Header */
.why-training-section .section-header {
  text-align: center;
  max-width: 600px;
  margin: 0 auto 50px;
  opacity: 0;
  transform: translateY(20px);
  transition: all 0.6s ease;
}
.why-training-section .section-header.visible {
  opacity: 1;
  transform: translateY(0);
}

.why-training-section .small-tag {
  display: inline-block;
  background: linear-gradient(135deg, #8b5cf6, #6d28d9);
  color: #fff;
  font-size: 11px;
  font-weight: 600;
  letter-spacing: 1.5px;
  padding: 4px 12px;
  border-radius: 50px;
  margin-bottom: 12px;
  box-shadow: 0 3px 8px rgba(109, 40, 217, 0.25);
}

.why-training-section .main-heading {
  font-size: 30px;
  font-weight: 600;
  color: #0f172a;
  margin: 0;
  line-height: 1.25;
}

/* Pillars Grid */
.pillars-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 20px;
  max-width: 1100px;
  margin: 0 auto;
  position: relative;
}

/* Connecting line (desktop) */
.pillars-grid::before {
  content: '';
  position: absolute;
  top: 40px;
  left: 10%;
  right: 10%;
  height: 2px;
  background: linear-gradient(90deg, transparent, #cbd5e1, transparent);
  z-index: 0;
}

/* Pillar Card */
.pillar-item {
  position: relative;
  z-index: 1;
  text-align: center;
  padding: 24px 16px;
  opacity: 0;
  transform: translateY(25px);
  transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
}

.pillar-item.visible {
  opacity: 1;
  transform: translateY(0);
}

/* Pillar Icon */
.pillar-icon {
  width: 72px;
  height: 72px;
  margin: 0 auto 18px;
  border-radius: 20px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 28px;
  background: #ffffff;
  border: 2px solid var(--pillar-color);
  color: var(--pillar-color);
  box-shadow: 0 8px 25px rgba(0,0,0,0.06);
  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
  position: relative;
}

.pillar-icon::after {
  content: '';
  position: absolute;
  inset: -2px;
  border-radius: 22px;
  background: linear-gradient(135deg, var(--pillar-color), transparent);
  opacity: 0;
  transition: opacity 0.3s ease;
  z-index: -1;
}

.pillar-item:hover .pillar-icon {
  transform: translateY(-6px) scale(1.05);
  box-shadow: 0 15px 35px rgba(0,0,0,0.12);
  color: #fff;
  background: var(--pillar-color);
}
.pillar-item:hover .pillar-icon::after {
  opacity: 1;
}

.pillar-icon svg {
  width: 28px;
  height: 28px;
  stroke: currentColor;
  stroke-width: 1.8;
  fill: none;
  stroke-linecap: round;
  stroke-linejoin: round;
}

/* Pillar Content */
.pillar-title {
  font-size: 16px;
  font-weight: 700;
  color: #0f172a;
  margin: 0 0 8px;
  line-height: 1.3;
}

.pillar-desc {
  font-size: 13px;
  color: #64748b;
  margin: 0;
  line-height: 1.6;
  padding: 0 8px;
}

/* Pillar Colors */
.pillar-item:nth-child(1) { --pillar-color: #3b82f6; transition-delay: 0.1s; }
.pillar-item:nth-child(2) { --pillar-color: #10b981; transition-delay: 0.2s; }
.pillar-item:nth-child(3) { --pillar-color: #f59e0b; transition-delay: 0.3s; }
.pillar-item:nth-child(4) { --pillar-color: #8b5cf6; transition-delay: 0.4s; }

/* ✅ Responsive */
@media (max-width: 991px) {
  .why-training-section { padding: 50px 20px; }
  .why-training-section .main-heading { font-size: 28px; }
  .pillars-grid { grid-template-columns: repeat(2, 1fr); gap: 30px 20px; }
  .pillars-grid::before { display: none; }
  .pillar-icon { width: 64px; height: 64px; font-size: 24px; }
}

@media (max-width: 576px) {
  .pillars-grid { grid-template-columns: 1fr; gap: 25px; }
  .pillar-item { padding: 20px 10px; }
  .pillar-icon { width: 60px; height: 60px; font-size: 22px; }
  .pillar-title { font-size: 15px; }
  .pillar-desc { font-size: 13px; }
}

/* ===== TRAINER CREDIBILITY SECTION ===== */
.trainer-cred-section {
  padding: 60px 0;
  background: linear-gradient(180deg, #f8fafc 0%, #ffffff 100%);
  position: relative;
  overflow: hidden;
}

/* Subtle decorative glow */
.trainer-cred-section::before {
  content: '';
  position: absolute;
  top: -30%;
  left: 50%;
  transform: translateX(-50%);
  width: 600px;
  height: 600px;
  background: radial-gradient(circle, rgba(99, 102, 241, 0.06) 0%, transparent 70%);
  border-radius: 50%;
  pointer-events: none;
  z-index: 0;
}

.trainer-cred-section .container {
  position: relative;
  z-index: 1;
  max-width: 720px;
  margin: 0 auto;
  text-align: center;
}

/* Header */
.trainer-cred-section .section-header {
  margin-bottom: 35px;
  opacity: 0;
  transform: translateY(20px);
  transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
}
.trainer-cred-section .section-header.visible {
  opacity: 1;
  transform: translateY(0);
}

.trainer-cred-section .small-tag {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  background: linear-gradient(135deg, #6366f1, #8b5cf6);
  color: #fff;
  font-size: 11px;
  font-weight: 600;
  letter-spacing: 1.5px;
  padding: 4px 14px;
  border-radius: 50px;
  margin-bottom: 14px;
  box-shadow: 0 4px 12px rgba(99, 102, 241, 0.25);
}
.trainer-cred-section .small-tag svg {
  width: 12px;
  height: 12px;
  fill: currentColor;
}

.trainer-cred-section .main-heading {
  font-size: 32px;
  font-weight: 600;
  color: #0f172a;
  margin: 0 0 12px;
  line-height: 1.3;
}

.trainer-cred-section .subtext {
  font-size: 15px;
  color: #475569;
  margin: 0;
  line-height: 1.7;
  max-width: 580px;
  margin-left: auto;
  margin-right: auto;
}

/* Credibility List */
.cred-list {
  list-style: none;
  padding: 0;
  margin: 0;
  text-align: left;
  background: #ffffff;
  border-radius: 20px;
  padding: 28px 32px;
  border: 1px solid #e2e8f0;
  box-shadow: 0 8px 30px rgba(0,0,0,0.04);
  position: relative;
  overflow: hidden;
  opacity: 0;
  transform: translateY(25px);
  transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
}
.cred-list.visible {
  opacity: 1;
  transform: translateY(0);
}

/* Left accent bar */
.cred-list::before {
  content: '';
  position: absolute;
  left: 0; top: 0; bottom: 0;
  width: 4px;
  background: linear-gradient(180deg, #6366f1, #8b5cf6);
  border-radius: 4px 0 0 4px;
}

.cred-item {
  display: flex;
  align-items: flex-start;
  gap: 14px;
  padding: 15px 0;
  border-bottom: 1px dashed #e5e7eb;
  opacity: 0;
  transform: translateX(-10px);
  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}
.cred-item:last-child { border-bottom: none; }
.cred-item.visible {
  opacity: 1;
  transform: translateX(0);
}

.cred-item:hover {
  background: #f8fafc;
  margin: 0 -16px;
  padding-left: 16px;
  padding-right: 16px;
  border-radius: 12px;
  border-bottom-color: transparent;
}

/* Check Icon */
.cred-icon {
  width: 24px;
  height: 24px;
  background: #e0e7ff;
  color: #4f46e5;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  margin-top: 2px;
  transition: all 0.3s ease;
}
.cred-item:hover .cred-icon {
  background: #4f46e5;
  color: #fff;
  transform: scale(1.15);
  box-shadow: 0 4px 12px rgba(79, 70, 229, 0.3);
}
.cred-icon svg {
  width: 14px;
  height: 14px;
  stroke: currentColor;
  stroke-width: 3;
  fill: none;
  stroke-linecap: round;
  stroke-linejoin: round;
}

.cred-text {
  font-size: 15px;
  font-weight: 500;
  color: #334155;
  line-height: 1.5;
  transition: color 0.3s ease;
}
.cred-item:hover .cred-text {
  color: #0f172a;
}

/* Stagger delays */
.cred-item:nth-child(1) { transition-delay: 0.1s; }
.cred-item:nth-child(2) { transition-delay: 0.2s; }
.cred-item:nth-child(3) { transition-delay: 0.3s; }

/* ✅ Responsive */
@media (max-width: 768px) {
  .trainer-cred-section { padding: 50px 20px; }
  .trainer-cred-section .main-heading { font-size: 26px; }
  .cred-list { padding: 24px 20px; }
  .cred-item { gap: 12px; padding: 13px 0; }
  .cred-text { font-size: 14px; }
}

/* ===== CUSTOMIZATION SECTION ===== */
.customization-section {
  padding: 70px 0;
  background: #f8fafc;
  position: relative;
  overflow: hidden;
}

/* Subtle blueprint grid */
.customization-section::before {
  content: '';
  position: absolute;
  inset: 0;
  background-image: 
    linear-gradient(rgba(100, 116, 139, 0.03) 1px, transparent 1px),
    linear-gradient(90deg, rgba(100, 116, 139, 0.03) 1px, transparent 1px);
  background-size: 32px 32px;
  pointer-events: none;
  z-index: 0;
}

.customization-section .container {
  position: relative;
  z-index: 1;
}

/* Header */
.customization-section .section-header {
  text-align: center;
  max-width: 620px;
  margin: 0 auto 50px;
  opacity: 0;
  transform: translateY(20px);
  transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
}
.customization-section .section-header.visible {
  opacity: 1;
  transform: translateY(0);
}

.customization-section .small-tag {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  background: linear-gradient(135deg, #f59e0b, #d97706);
  color: #fff;
  font-size: 11px;
  font-weight: 600;
  letter-spacing: 1.5px;
  padding: 4px 14px;
  border-radius: 50px;
  margin-bottom: 14px;
  box-shadow: 0 4px 12px rgba(245, 158, 11, 0.25);
}

.customization-section .main-heading {
  font-size: 34px;
  font-weight: 600;
  color: #0f172a;
  margin: 0 0 12px;
  line-height: 1.3;
}

.customization-section .subtext {
  font-size: 15px;
  color: #475569;
  margin: 0;
  line-height: 1.7;
}

/* Customization Flow */
.custom-flow {
  position: relative;
  max-width: 700px;
  margin: 0 auto;
  padding-left: 40px;
}

/* Vertical Connecting Line */
.custom-flow::before {
  content: '';
  position: absolute;
  left: 24px;
  top: 0;
  bottom: 0;
  width: 2px;
  background: repeating-linear-gradient(
    to bottom,
    #cbd5e1 0,
    #cbd5e1 8px,
    transparent 8px,
    transparent 16px
  );
  transform: scaleY(0);
  transform-origin: top;
  transition: transform 0.8s cubic-bezier(0.4, 0, 0.2, 1) 0.3s;
}
.custom-flow.animate::before {
  transform: scaleY(1);
}

/* Flow Item */
.flow-item {
  position: relative;
  padding: 18px 20px 18px 40px;
  margin-bottom: 8px;
  background: #ffffff;
  border: 1px solid #e2e8f0;
  border-radius: 16px;
  display: flex;
  align-items: center;
  gap: 16px;
  cursor: default;
  opacity: 1;
  transform: translateX(-15px);
  transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
  box-shadow: 0 2px 8px rgba(0,0,0,0.02);
}
.flow-item.visible {
  opacity: 1;
  transform: translateX(0);
}

/* Stagger Delays */
.flow-item:nth-child(1) { transition-delay: 0.4s; }
.flow-item:nth-child(2) { transition-delay: 0.5s; }
.flow-item:nth-child(3) { transition-delay: 0.6s; }
.flow-item:nth-child(4) { transition-delay: 0.7s; }

/* Interactive Node */
.flow-node {
  position: absolute;
  left: -32px;
  top: 50%;
  transform: translateY(-50%);
  width: 26px;
  height: 26px;
  background: #ffffff;
  border: 3px solid #f59e0b;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.3s ease;
  z-index: 2;
}
.flow-item:hover .flow-node {
  background: #f59e0b;
  transform: translateY(-50%) scale(1.15);
  box-shadow: 0 4px 12px rgba(245, 158, 11, 0.3);
}

.flow-node svg {
  width: 14px;
  height: 14px;
  stroke: #f59e0b;
  stroke-width: 2.5;
  fill: none;
  transition: stroke 0.3s ease;
}
.flow-item:hover .flow-node svg {
  stroke: #fff;
}

/* Text */
.flow-text {
  font-size: 15px;
  font-weight: 500;
  color: #334155;
  flex: 1;
  transition: color 0.3s ease;
}
.flow-item:hover .flow-text {
  color: #0f172a;
}

/* Hover Badge */
.flow-badge {
  font-size: 11px;
  font-weight: 600;
  color: #d97706;
  background: #fffbeb;
  padding: 4px 10px;
  border-radius: 50px;
  border: 1px solid #fde68a;
  opacity: 0;
  transform: translateX(10px);
  transition: all 0.3s ease;
  pointer-events: none;
}
.flow-item:hover .flow-badge {
  opacity: 1;
  transform: translateX(0);
}

/* ✅ Responsive */
@media (max-width: 768px) {
  .customization-section { padding: 50px 20px; }
  .customization-section .main-heading { font-size: 28px; }
  .custom-flow { padding-left: 32px; }
  .custom-flow::before { left: 18px; }
  .flow-node { left: -26px; }
  .flow-item { padding: 16px 16px 16px 32px; }
  .flow-badge { display: none; }
}
@media (max-width: 480px) {
  .flow-text { font-size: 14px; }
  .customization-section .subtext { font-size: 14px; }
}
    </style>
    
    <!-- Hero -->
    <section class="hero-section" id="heroSection">
        <div class="container">
            <div class="row align-items-center">
       
                <!-- LEFT CONTENT -->
                <div class="col-lg-7">
                    <div class="hero-content">
       
                        <div class="badge-box mb-4">
                            <i class="fa-solid fa-briefcase"></i> 
                            Customizable Corporate Training Solutions
                        </div>
       
                        <h1 class="hero-title">
                            Executive Dashboard Training for<br>
                            <span>Faster, Data-Driven Decisions</span>
                        </h1>
       
                        <p class="hero-text">
                            Train your team members to build real-time dashboards, track KPIs, 
                            and improve decision-making across departments — fully customizable to your business needs.
                        </p>
    
                        <!-- Trust & Micro Lines -->
                        <div class="trust-line">
                            <strong>Trusted by 100+ corporate organizations</strong>
                        </div>
                        <div class="micro-line">
                            Available onsite in <strong>Karachi, Lahore, Islamabad</strong> and online nationwide
                        </div>
       
                        <div class="d-flex flex-wrap gap-3 mb-5">
                            <button class="btn btn-primary btn-lg scrollToForm">
                                Book a Free Corporate Demo
                            </button>
       
                            <button class="btn btn-outline-light btn-lg scrollToForm">
                                Request Customizable Proposal
                            </button>
                        </div>
       
                        <!-- Stats -->
                        <div class="stats d-flex flex-wrap gap-5">
                            <div>
                                <h4>5,000+</h4>
                                <p>Professionals Trained</p>
                            </div>
                            <div>
                                <h4>98%</h4>
                                <p>Client Satisfaction</p>
                            </div>
                            <div>
                                <h4>230+</h4>
                                <p>Programs Delivered</p>
                            </div>
                        </div>
       
                    </div>
                </div>
       
                <!-- RIGHT IMAGE -->
                <div class="col-lg-5 text-center d-none d-lg-block">
                    <img src="{{ asset('img/executive-dashboard/header.webp') }}" 
                         class="img-fluid hero-img" 
                         alt="Executive Dashboard Training">
                </div>
       
            </div>
        </div>
    </section>
    
    <section class="review-logo-section ">
        <div class="container-custom">
            <div class="logo-slider">
    
                <!-- First Set -->
                <div class="logo-item">
                        <img src="{{ asset('img/review-companies/clutch.webp') }}" alt="Clutch">
                    </div>
        
                    <div class="logo-item">
                        <img src="{{ asset('img/review-companies/trustpilot.webp') }}" alt="Trustpilot">
                    </div>
        
                    <div class="logo-item">
                        <img src="{{ asset('img/review-companies/google.webp') }}" alt="Google">
                    </div>
        
                    <div class="logo-item">
                        <img src="{{ asset('img/review-companies/site.webp') }}" alt="Site">
                    </div>
                    
                    <div class="logo-item">
                        <img src="{{ asset('img/review-companies/clutch.webp') }}" alt="Clutch">
                    </div>
        
                    <div class="logo-item">
                        <img src="{{ asset('img/review-companies/trustpilot.webp') }}" alt="Trustpilot">
                    </div>
        
                    <div class="logo-item">
                        <img src="{{ asset('img/review-companies/google.webp') }}" alt="Google">
                    </div>
        
                    <div class="logo-item">
                        <img src="{{ asset('img/review-companies/site.webp') }}" alt="Site">
                    </div>
    
            </div>
        </div>
    </section>
    
    <section class="problem-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 text-center d-none d-lg-block" style="height: 100%;">
                    <img src="{{ asset('img/executive-dashboard/header.webp') }}" 
                         class="img-fluid hero-img" 
                         alt="Executive Dashboard Training">
                </div>
                <div class="col-lg-8 col-xl-8">
                    
                    <!--<div class="small-heading">THE PROBLEM</div>-->
    
                    <div class="main-heading">
                        Are Your Teams Still Relying on Static Reports?
                    </div>
    
                    <div class="feature"><i>⚠</i> Reports are created but insights are limited</div>
                    <div class="feature"><i>⚠</i> Data is scattered across multiple files and systems</div>
                    <div class="feature"><i>⚠</i> Management lacks a single real-time view of performance</div>
                    <div class="feature"><i>⚠</i> Decision-making is delayed due to manual reporting</div>
    
                    <div class="closing-line">
                        This leads to slower decisions and limited visibility across the organization.
                    </div>
    
                </div>
            </div>
        </div>
    </section>
    
    <section class="outcomes-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left: Text -->
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <!--<div class="small-tag">OUTCOMES</div>-->
                    <h2 class="main-heading">What Your Team Will Be Able to Do</h2>
                    
                    <ul class="outcome-list">
                        <li class="outcome-item">
                            <span class="outcome-icon"><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/></svg></span>
                            Build executive dashboards for management reporting
                        </li>
                        <li class="outcome-item">
                            <span class="outcome-icon"><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/></svg></span>
                            Track KPIs across sales, finance, operations, and HR
                        </li>
                        <li class="outcome-item">
                            <span class="outcome-icon"><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/></svg></span>
                            Automate recurring reports
                        </li>
                        <li class="outcome-item">
                            <span class="outcome-icon"><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/></svg></span>
                            Identify trends and risks faster
                        </li>
                        <li class="outcome-item">
                            <span class="outcome-icon"><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/></svg></span>
                            Present insights clearly to leadership
                        </li>
                    </ul>
    
                    <a href="#demo" class="cta-btn">
                        See How It Works
                        <svg viewBox="0 0 24 24"><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8-8-8z"/></svg>
                    </a>
                </div>
    
                <!-- Right: Dashboard Visual -->
                <div class="col-lg-6">
                    <div class="dashboard-visual">
                        <div class="dashboard-frame">
                            <div class="dashboard-dots"><span></span><span></span><span></span></div>
                            <div class="dashboard-content">
                                <div class="dash-card">
                                    <div class="dash-card-title">Revenue Growth</div>
                                    <div class="dash-card-value">+24.8%</div>
                                    <div class="dash-card-change">↑ 3.2% vs last quarter</div>
                                </div>
                                <div class="dash-card">
                                    <div class="dash-card-title">Active Projects</div>
                                    <div class="dash-card-value">142</div>
                                    <div class="dash-card-change">● 89% On Track</div>
                                </div>
                                <div class="dash-chart">
                                    <div class="bar" style="--height: 45%"></div>
                                    <div class="bar" style="--height: 62%"></div>
                                    <div class="bar" style="--height: 38%"></div>
                                    <div class="bar" style="--height: 85%"></div>
                                    <div class="bar" style="--height: 70%"></div>
                                    <div class="bar" style="--height: 55%"></div>
                                    <div class="bar" style="--height: 92%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="floating-badge">
                            <div class="badge-icon">⚡</div>
                            <div class="badge-text"><strong>Real-time Sync</strong>Data updates automatically</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="social-proof-section">
        <div class="container">
            <!-- Header -->
            <div class="section-header">
                <!--<div class="small-tag">SOCIAL PROOF</div>-->
                <h2 class="main-heading">Trusted by Organizations Across Pakistan</h2>
            </div>
    
            <!-- Logo Grid -->
            <div class="logo-grid">
                 @foreach($trustedCompanies as $trustedCompany)
                    <div class="logo-new-item">
                        <img src="{{ asset($trustedCompany->logo) }}">
                    </div>
                @endforeach
            </div>
    
            <!-- Metrics -->
            <!--<div class="metrics-wrapper">-->
            <!--    <div class="metric-card">-->
            <!--        <span class="metric-number" data-target="100">0</span>-->
            <!--        <div class="metric-label">Corporate Trainings Delivered</div>-->
            <!--    </div>-->
            <!--    <div class="metric-card">-->
            <!--        <span class="metric-number" data-target="1000">0</span>-->
            <!--        <div class="metric-label">Professionals Trained</div>-->
            <!--    </div>-->
            <!--</div>-->
    
            <!-- Testimonial -->
            <div class="testimonial-container">
                <div class="testimonial-slider">
                    <!-- Testimonial 1 -->
                    <div class="testimonial-card active">
                        <div class="quote-icon">"</div>
                        <p class="testimonial-text">
                            The training helped our team move from manual reports to real-time dashboards. Decision-making has improved significantly.
                        </p>
                        <div class="testimonial-author">
                            <div class="author-avatar">ZK</div>
                            <div class="author-info">
                                <h4>Zermeena Khan</h4>
                                <p>Senior Manager, Business Intelligence</p>
                                <div class="company-badge">✓ Engro Corporation Ltd.</div>
                            </div>
                        </div>
                    </div>
            
                    <!-- Testimonial 2 -->
                    <div class="testimonial-card">
                        <div class="quote-icon">"</div>
                        <p class="testimonial-text">
                            We saw immediate ROI within the first quarter. The practical, KPI-focused approach made complex data storytelling feel effortless for our analysts.
                        </p>
                        <div class="testimonial-author">
                            <div class="author-avatar">AR</div>
                            <div class="author-info">
                                <h4>Ahmed Raza</h4>
                                <p>Head of Data & Analytics</p>
                                <div class="company-badge">✓ HBL Pakistan</div>
                            </div>
                        </div>
                    </div>
            
                    <!-- Testimonial 3 -->
                    <div class="testimonial-card">
                        <div class="quote-icon">"</div>
                        <p class="testimonial-text">
                            Finally, a training program that understands enterprise workflows. Our leadership now receives automated, executive-ready reports every Monday morning.
                        </p>
                        <div class="testimonial-author">
                            <div class="author-avatar">FS</div>
                            <div class="author-info">
                                <h4>Farah Siddiqui</h4>
                                <p>Director of Operations</p>
                                <div class="company-badge">✓ Jazz (PMCL)</div>
                            </div>
                        </div>
                    </div>
            
                    <!-- Testimonial 4 -->
                    <div class="testimonial-card">
                        <div class="quote-icon">"</div>
                        <p class="testimonial-text">
                            The hands-on datasets matched our actual industry challenges. Our team's reporting time dropped by 60%, and board presentations became data-driven.
                        </p>
                        <div class="testimonial-author">
                            <div class="author-avatar">MT</div>
                            <div class="author-info">
                                <h4>Muhammad Tariq</h4>
                                <p>VP Finance & Strategy</p>
                                <div class="company-badge">✓ Nestlé Pakistan</div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <!-- Navigation Dots -->
                <div class="testimonial-dots"></div>
            </div>  
        </div>
    </section>
    
    <section class="news-ticker-section">
        <div class="news-ticker-wrapper">
            <div class="news-ticker-track">
                <!-- Item 1 -->
                <div class="news-ticker-item">
                    <div class="news-ticker-icon">
                        <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                    </div>
                    <span class="news-ticker-text">
                        The training is tailored to your organization's <strong>KPIs</strong>, reporting structure, and business needs so your team can apply learning immediately.
                    </span>
                </div>
                
                <!-- Item 2 (Duplicate for seamless loop) -->
                <div class="news-ticker-item">
                    <div class="news-ticker-icon">
                        <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                    </div>
                    <span class="news-ticker-text">
                        The training is tailored to your organization's <strong>KPIs</strong>, reporting structure, and business needs so your team can apply learning immediately.
                    </span>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const container = document.querySelector('.social-proof-section .testimonial-container');
            const cards = document.querySelectorAll('.social-proof-section .testimonial-card');
            const dotsContainer = document.querySelector('.social-proof-section .testimonial-dots');
            let currentIndex = 0;
            let autoSlide;
        
            // Generate dots dynamically
            cards.forEach((_, i) => {
                const dot = document.createElement('div');
                dot.classList.add('dot');
                if (i === 0) dot.classList.add('active');
                dot.addEventListener('click', () => goToSlide(i));
                dotsContainer.appendChild(dot);
            });
            const dots = document.querySelectorAll('.social-proof-section .dot');
        
            function goToSlide(index) {
                cards[currentIndex].classList.remove('active');
                dots[currentIndex].classList.remove('active');
                currentIndex = index;
                cards[currentIndex].classList.add('active');
                dots[currentIndex].classList.add('active');
            }
        
            function nextSlide() {
                goToSlide((currentIndex + 1) % cards.length);
            }
        
            function startAutoSlide() {
                autoSlide = setInterval(nextSlide, 4500);
            }
        
            function stopAutoSlide() {
                clearInterval(autoSlide);
            }
        
            // Hover pause for better UX
            container.addEventListener('mouseenter', stopAutoSlide);
            container.addEventListener('mouseleave', startAutoSlide);
        
            // Initialize
            startAutoSlide();
        });
        // Counter Animation
        function animateCounter(element) {
            const target = parseInt(element.getAttribute('data-target'));
            const duration = 2000;
            const step = target / (duration / 16);
            let current = 0;
            
            const timer = setInterval(() => {
                current += step;
                if (current >= target) {
                    element.textContent = target + (target === 1000 ? '+' : '+');
                    clearInterval(timer);
                } else {
                    element.textContent = Math.floor(current) + (target === 1000 ? '+' : '+');
                }
            }, 16);
        }
        
        // Intersection Observer for scroll animations
        const observerOptions = {
            threshold: 0.2,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Logo items stagger animation
                    if (entry.target.classList.contains('logo-item')) {
                        const index = Array.from(entry.target.parentElement.children).indexOf(entry.target);
                        setTimeout(() => {
                            entry.target.classList.add('visible');
                        }, index * 100);
                    }
                    // Metric cards
                    else if (entry.target.classList.contains('metric-card')) {
                        entry.target.classList.add('visible');
                        const counter = entry.target.querySelector('.metric-number');
                        if (counter) animateCounter(counter);
                    }
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);
        
        // Observe elements
        document.querySelectorAll('.logo-item, .metric-card').forEach(el => {
            observer.observe(el);
        });
        
        // Add hover sound effect (optional - subtle feedback)
        document.querySelectorAll('.logo-item, .metric-card').forEach(item => {
            item.addEventListener('mouseenter', function() {
                this.style.transition = 'all 0.3s cubic-bezier(0.4, 0, 0.2, 1)';
            });
        });
    </script>

    <section class="program-section">
        <div class="container">

            <h2>Executive Dashboards & Data Storytelling</h2>
            <p class="subtitle">Standard Training Modules</p>

            <div class="row g-4 justify-content-center">

                <!-- Card 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card-box">
                        <div class="icon-box icon-blue">
                            <i class="fa-solid fa-gauge-high"></i>
                        </div>
                        <h5>1. Executive View of Dashboards</h5>
                        <p>Strategic dashboards that drive leadership decisions.</p>
                        <!--<button class="learn-more scrollDownload">Learn More <i class="fa-solid fa-arrow-right ms-1"></i></button>-->
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card-box">
                        <div class="icon-box icon-green">
                            <i class="fa-solid fa-chart-line"></i>
                        </div>
                        <h5>2. KPI Framework & Performance Metrics</h5>
                        <p>Track the metrics that truly matter.</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card-box">
                        <div class="icon-box icon-yellow">
                            <i class="fa-solid fa-table"></i>
                        </div>
                        <h5>3. Data Preparation & Analysis in Excel</h5>
                        <p>Clean, structure, and analyze data like a pro.</p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card-box">
                        <div class="icon-box icon-red">
                            <i class="fa-solid fa-palette"></i>
                        </div>
                        <h5>4. Executive Data Visualization Principles</h5>
                        <p>Create dashboards that are clear, impactful, and executive-ready.</p>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card-box">
                        <div class="icon-box icon-indigo">
                            <i class="fa-solid fa-sliders"></i>
                        </div>
                        <h5>5. Dynamic & Interactive Dashboards in Excel</h5>
                        <p>Interactive dashboards with drill-downs and live insights.</p>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card-box">
                        <div class="icon-box icon-indigo">
                            <i class="fa-solid fa-chart-column"></i>
                        </div>
                        <h5>6. Dashboard Development with Power BI</h5>
                        <p>Build interactive dashboards for real-time business insights.</p>
                    </div>
                </div>

                <!-- Card 7 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card-box">
                        <div class="icon-box icon-indigo">
                            <i class="fa-solid fa-comment-dots"></i>
                        </div>
                        <h5>7. Data Storytelling for Leadership</h5>
                        <p>Turn numbers into actionable stories for executives.</p>
                    </div>
                </div>

                <!-- Card 8 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card-box">
                        <div class="icon-box icon-indigo">
                            <i class="fa-solid fa-chalkboard"></i>
                        </div>
                        <h5>8. Executive Reporting & Presentation</h5>
                        <p>Present insights effectively to senior management.</p>
                    </div>
                </div>
                
                <!-- Card 9 (Special CTA Card) -->
                <!--<div class="col-md-6 col-lg-4">-->
                <!--    <div class="card-box brochure-card text-center">-->
                <!--        <div class="icon-box icon-dark mb-3">-->
                <!--            <i class="fa-solid fa-download"></i>-->
                <!--        </div>-->
                <!--        <h5>Download Training Brochure</h5>-->
                <!--        <p>Detailed modules, customizable to your requirements.</p>-->
                <!--        <button class="btn btn-primary mt-2">-->
                <!--            Download Brochure Now <i class="fa-solid fa-arrow-right ms-1"></i>-->
                <!--        </button>-->
                <!--    </div>-->
                <!--</div>-->

            </div>

            <!-- Bottom CTA -->
            <div class="bottom-text text-center mt-5">
            
                <!--<p>Need a program not listed? We customize training for any skill or industry.</p>-->
            
                <div class="d-flex justify-content-center gap-3 flex-wrap mt-3">
            
                    <button class="cta-btn-outline scrollToForm">
                        Download Brochure Now <i class="fa-solid fa-arrow-right ms-1"></i>
                    </button>
            
                    <button class="cta-btn scrollToForm">
                        Request Customizable Training Plan <i class="fa-solid fa-arrow-right ms-1"></i>
                    </button>
            
                </div>
            
            </div>

        </div>
    </section>
    
    <section class="training-section">
        <div class="container">
            <div class="badge-custom">
                <i class="fa-solid fa-award me-1"></i> Our Track Record
            </div>
            <h2 class="section-title">Previous Corporate Trainings</h2>
            <p class="section-subtitle">
                A glimpse into our world-class training sessions delivered across industries.
            </p>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card-custom">
                        <img src="{{ asset('img/executive-dashboard/Dow-University-of-Health-Sciences.jpg') }}" alt="Dow University of Health Sciences" class="card-img-top">
                        <div class="card-body">
                            <div class="card-title">Leadership Summit 2024</div>
                            <div class="card-text">Dow University of Health Sciences</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card-custom">
                        <img src="{{ asset('img/executive-dashboard/Engro-Corporation-Limited.jpg') }}" alt="Engro Corporation Limited" class="card-img-top">
                        <div class="card-body">
                            <div class="card-title">Strategic Planning Workshop</div>
                            <div class="card-text">Engro Corporation Limited</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card-custom">
                        <img src="{{ asset('img/executive-dashboard/Lucky-Textile-Mills-Limited.jpg') }}" alt="Lucky Textile Mills Limited" class="card-img-top">
                        <div class="card-body">
                            <div class="card-title">Annual Sales Conference</div>
                            <div class="card-text">Lucky Textile Mills Limited</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card-custom">
                        <img src="{{ asset('img/executive-dashboard/National-Insurance-Company-Limited.jpeg') }}" alt="National Insurance Company Limited" class="card-img-top">
                        <div class="card-body">
                            <div class="card-title">Team Collaboration Bootcamp</div>
                            <div class="card-text">National Insurance Company Limited</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card-custom">
                        <img src="{{ asset('img/executive-dashboard/Nimir-Resins-Limited.jpg') }}" alt="Nimir Industries Chemical Ltd" class="card-img-top">
                        <div class="card-body">
                            <div class="card-title">Virtual Digital Skills Program</div>
                            <div class="card-text">Nimir Industries Chemical Ltd</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card-custom">
                        <img src="{{ asset('img/executive-dashboard/Sante-Private-Limited.jpg') }}" alt="Sante (Private) Limited" class="card-img-top">
                        <div class="card-body">
                            <div class="card-title">Team Building Retreat</div>
                            <div class="card-text">Sante (Private) Limited</div>
                        </div>
                    </div>
                </div>

            </div>
            <button class="cta-btn scrollToForm">
                Want Similar Results? Book a Free Demo <i class="fa-solid fa-arrow-right ms-1"></i>
            </button>

        </div>
    </section>
    
    <section class="impact-checklist-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left: Header -->
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <div class="section-header">
                        <!--<span class="small-tag">BUSINESS IMPACT</span>-->
                        <h2 class="main-heading">Business Impact for Your Organization</h2>
                        <p class="subtext">Transform how your team works with data-driven clarity, speed, and executive-ready visibility.</p>
                    </div>
                </div>
    
                <!-- Right: Checklist -->
                <div class="col-lg-7">
                    <div class="checklist-wrapper">
                        <div class="checklist-item">
                            <span class="check-icon"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
                            <span class="check-text">Faster reporting cycles</span>
                        </div>
                        <div class="checklist-item">
                            <span class="check-icon"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
                            <span class="check-text">Improved management visibility</span>
                        </div>
                        <div class="checklist-item">
                            <span class="check-icon"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
                            <span class="check-text">Reduced manual reporting effort</span>
                        </div>
                        <div class="checklist-item">
                            <span class="check-icon"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
                            <span class="check-text">Better and quicker decision-making</span>
                        </div>
                        <div class="checklist-item">
                            <span class="check-icon"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
                            <span class="check-text">More effective management review meetings</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.15, rootMargin: '0px 0px -30px 0px' });
        
            document.querySelectorAll('.section-header, .checklist-item').forEach(el => observer.observe(el));
        });
    </script>
    
    <section class="why-training-section">
        <div class="container">
            <div class="section-header">
                <!--<span class="small-tag">WHY IT WORKS</span>-->
                <h2 class="main-heading">Why This Training Delivers Results</h2>
            </div>
    
            <div class="pillars-grid">
                <!-- Pillar 1 -->
                <div class="pillar-item">
                    <div class="pillar-icon">
                        <svg viewBox="0 0 24 24"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
                    </div>
                    <h3 class="pillar-title">Hands-on Dashboard Development</h3>
                    <p class="pillar-desc">Build real dashboards from scratch using your actual data and tools.</p>
                </div>
    
                <!-- Pillar 2 -->
                <div class="pillar-item">
                    <div class="pillar-icon">
                        <svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                    </div>
                    <h3 class="pillar-title">Real Business Use Cases</h3>
                    <p class="pillar-desc">Scenarios drawn from actual Pakistani enterprise challenges and workflows.</p>
                </div>
    
                <!-- Pillar 3 -->
                <div class="pillar-item">
                    <div class="pillar-icon">
                        <svg viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                    </div>
                    <h3 class="pillar-title">Practical, Implementation-Focused</h3>
                    <p class="pillar-desc">No theory fluff—every session ends with a deployable output.</p>
                </div>
    
                <!-- Pillar 4 -->
                <div class="pillar-item">
                    <div class="pillar-icon">
                        <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/><circle cx="12" cy="12" r="10" fill="none" stroke="currentColor" stroke-width="2"/></svg>
                    </div>
                    <h3 class="pillar-title">Immediate Application at Work</h3>
                    <p class="pillar-desc">Start applying new skills the very next day with ready-to-use templates.</p>
                </div>
            </div>
        </div>
    </section>
    
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.15, rootMargin: '0px 0px -30px 0px' });
        
            document.querySelectorAll('.section-header, .pillar-item').forEach(el => observer.observe(el));
        });
    </script>
    
    <section class="trainer-cred-section">
        <div class="container">
            <div class="section-header">
                <!--<span class="small-tag">-->
                <!--    <svg viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>-->
                <!--    EXPERT GUIDANCE-->
                <!--</span>-->
                <h2 class="main-heading">Learn from Experienced Corporate Trainers</h2>
                <p class="subtext">Our trainers bring strong experience in corporate trainings and practical dashboard implementation across industries.</p>
            </div>
    
            <ul class="cred-list">
                <li class="cred-item">
                    <span class="cred-icon">
                        <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    </span>
                    <span class="cred-text">Corporate training experience</span>
                </li>
                <li class="cred-item">
                    <span class="cred-icon">
                        <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    </span>
                    <span class="cred-text">Industry-relevant examples</span>
                </li>
                <li class="cred-item">
                    <span class="cred-icon">
                        <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    </span>
                    <span class="cred-text">Focus on practical learning</span>
                </li>
            </ul>
        </div>
    </section>
    
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.15, rootMargin: '0px 0px -30px 0px' });
        
            document.querySelectorAll('.section-header, .cred-list, .cred-item').forEach(el => observer.observe(el));
        });
    </script>
    
    <!--<section class="customization-section">-->
    <!--    <div class="container">-->
    <!--        <div class="section-header">-->
                <!--<span class="small-tag">-->
                <!--    <svg viewBox="0 0 24 24" width="12" height="12" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1.41 16.09V20h-2.67v-1.93c-1.71-.36-3.16-1.46-3.27-3.4h1.96c.1 1.05.72 1.67 1.57 1.67.78 0 1.43-.57 1.43-1.5 0-.8-.38-1.25-1.6-1.58-1.65-.46-2.8-1.18-2.8-2.64 0-1.32 1.12-2.2 2.6-2.45V6h2.67v1.9c1.5.33 2.5 1.32 2.5 2.9 0 1.58-1.14 2.53-2.73 2.8.78.33 1.2 1.03 1.2 1.82 0 1.33-1.14 2.16-2.66 2.37z"/></svg>-->
                <!--    HR & OPERATIONS READY-->
                <!--</span>-->
    <!--            <h2 class="main-heading">Built Around Your Business Needs</h2>-->
    <!--            <p class="subtext">No off-the-shelf programs. Every session is calibrated to your workflows, tools, and performance goals.</p>-->
    <!--        </div>-->
    
    <!--        <div class="custom-flow">-->
    <!--            <div class="flow-item">-->
    <!--                <div class="flow-node">-->
    <!--                    <svg viewBox="0 0 24 24"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>-->
    <!--                </div>-->
    <!--                <span class="flow-text">Pre-training requirement discussion</span>-->
    <!--                <span class="flow-badge">✓ Aligned</span>-->
    <!--            </div>-->
    
    <!--            <div class="flow-item">-->
    <!--                <div class="flow-node">-->
    <!--                    <svg viewBox="0 0 24 24"><ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path></svg>-->
    <!--                </div>-->
    <!--                <span class="flow-text">Customized datasets</span>-->
    <!--                <span class="flow-badge">✓ Relevant</span>-->
    <!--            </div>-->
    
    <!--            <div class="flow-item">-->
    <!--                <div class="flow-node">-->
    <!--                    <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>-->
    <!--                </div>-->
    <!--                <span class="flow-text">Department-specific KPI focus</span>-->
    <!--                <span class="flow-badge">✓ Targeted</span>-->
    <!--            </div>-->
    
    <!--            <div class="flow-item">-->
    <!--                <div class="flow-node">-->
    <!--                    <svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>-->
    <!--                </div>-->
    <!--                <span class="flow-text">Flexible scheduling for your teams</span>-->
    <!--                <span class="flow-badge">✓ Adaptable</span>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    
    <!--<script>-->
    <!--    document.addEventListener('DOMContentLoaded', () => {-->
    <!--        const observer = new IntersectionObserver((entries) => {-->
    <!--            entries.forEach(entry => {-->
    <!--                if (entry.isIntersecting) {-->
    <!--                    entry.target.classList.add('visible', 'animate');-->
    <!--                    observer.unobserve(entry.target);-->
    <!--                }-->
    <!--            });-->
    <!--        }, { threshold: 0.2, rootMargin: '0px 0px -40px 0px' });-->
        
    <!--        document.querySelectorAll('.section-header, .custom-flow').forEach(el => observer.observe(el));-->
    <!--    });-->
    <!--</script>-->

    <section class="form-section" id="formSection">
        <div class="container">
            <div class="row align-items-center">

                <!-- LEFT CONTENT -->
                <div class="col-lg-6 text-side">
                    <p class="tag">GET STARTED</p>
                    <h2 class="heading">Get Your Free Training Proposal</h2>
                    <p class="desc">
                        Tell us about your team's training needs and we'll create a customized proposal completely
                        free and with no obligation.
                    </p>

                    <ul class="feature-list mt-4 p-0">
                        <li><i class="fa-solid fa-shield-halved"></i>Free consultation with no strings attached</li>
                        <li><i class="fa-solid fa-shield-halved"></i>Custom proposal within 48 hours</li>
                        <li><i class="fa-solid fa-shield-halved"></i>We respect your privacy no spam</li>
                    </ul>
                </div>

                <!-- FORM -->
                <div class="col-lg-6">
                    <div class="form-card">
                        <style>
                            .form-step {
                                display: none;
                            }
                            
                            .form-step.active {
                                display: block;
                            }
                            
                            .input-error {
                                border: 2px solid #dc3545 !important;
                            }
                            
                            .error-text {
                                color: #dc3545;
                                font-size: 13px;
                                margin-top: 5px;
                                display: none;
                            }
                            .form-progress {
                                width: 100%;
                                height: 6px;
                                background: #e9ecef;
                                border-radius: 50px;
                                margin-bottom: 15px;
                                overflow: hidden;
                            }
                            
                            .progress-bar {
                                height: 100%;
                                width: 33%;
                                background: #0d6efd;
                                transition: 0.4s ease;
                            }
                            
                            .step-label {
                                font-size: 14px;
                                font-weight: 500;
                                color: #666;
                            }
                        </style>
                        
                        <div class="step-label text-center mb-3">
                            Step <span id="stepCount">1</span> of 3
                        </div>
                        
                        <div class="form-progress">
                            <div class="progress-bar"></div>
                        </div>
                        
                        <form action="{{ route('lead.corporate') }}" method="POST" id="wizardForm">
                            @csrf
                        
                            <!-- STEP 1 -->
                            <div class="form-step active">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label>Full Name *</label>
                                        <input type="text" class="form-control" name="focal_contact_name" placeholder="John Smith" required>
                                        <small class="error-text">This field is required</small>
                                    </div>
                        
                                    <div class="col-md-6">
                                        <label>Company Name *</label>
                                        <input type="text" class="form-control" name="organization_name" placeholder="Acme Corp" required>
                                        <small class="error-text">This field is required</small>
                                    </div>
                                </div>
                        
                                <button type="button" class="btn-custom next-btn mt-3">Next</button>
                            </div>
                        
                            <!-- STEP 2 -->
                            <div class="form-step">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label>Work Email *</label>
                                        <input type="email" class="form-control" name="focal_contact_email" placeholder="john@company.com" required>
                                        <small class="error-text">This field is required</small>
                                    </div>
                        
                                    <div class="col-md-6">
                                        <label>Phone Number *</label>
                                        <input type="text" class="form-control" name="focal_contact_number" placeholder="+1 (555) 000-0000" required>
                                        <small class="error-text">This field is required</small>
                                    </div>
                                </div>
                        
                                <div class="d-flex justify-content-between gap-2 mt-3">
                                    <button type="button" class="btn-outline-custom prev-btn">Back</button>
                                    <button type="button" class="btn-custom next-btn">Next</button>
                                </div>
                            </div>
                        
                            <!-- STEP 3 -->
                            <div class="form-step">
                                <div class="row g-3">
                        
                                    <div class="col-md-6">
                                        <label>Number of Employees</label>
                                        <select class="form-select" name="approx_nominations" required>
                                            <option value="" disabled selected>Select range</option>
                                            <option value="5-10">5-10</option>
                                            <option value="11-20">11-20</option>
                                            <option value="21-30">21-30</option>
                                            <option value="31-40">31-40</option>
                                            <option value="40+">40+</option>
                                        </select>
                                        <small class="error-text">This field is required</small>
                                    </div>
                        
                                    <div class="col-md-6">
                                        <label>Training Requirement</label>
                                        <select class="form-select" disabled>
                                            @foreach($program as $item)
                                                <option value="{{ $item->id }}" {{ $item->id == '8' ? 'selected' : '' }}>
                                                    {{$item->program_name}}
                                                </option>
                                            @endforeach
                                        </select>
                        
                                        <input type="hidden" name="training_program_name" value="8">
                                    </div>
                        
                                    <div class="col-md-12">
                                        <div class="g-recaptcha" data-sitekey="6LcCcgErAAAAAMj6AI5jc5za50PCchfFValVBY7Y"></div>
                                    </div>
                        
                                </div>
                        
                                <div class="d-flex justify-content-between gap-2 mt-3">
                                    <button type="button" class="btn-outline-custom prev-btn">Back</button>
                                    <button type="submit" class="btn-custom">
                                        Submit <i class="fa-solid fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        
                        </form>

                        <p class="privacy mt-3">
                            <i class="fa-solid fa-shield-halved"></i>We respect your privacy, No spam, ever.
                        </p>

                    </div>
                </div>

            </div>
        </div>
    </section>
    
    <script>
        document.addEventListener("DOMContentLoaded", function () {
        
            let currentStep = 0;
            const steps = document.querySelectorAll(".form-step");
            const progressBar = document.querySelector(".progress-bar");
            const stepCount = document.getElementById("stepCount");
        
            function updateUI() {
                steps.forEach((el, index) => {
                    el.classList.toggle("active", index === currentStep);
                });
        
                // progress bar update
                let percent = ((currentStep + 1) / steps.length) * 100;
                progressBar.style.width = percent + "%";
        
                stepCount.innerText = currentStep + 1;
            }
        
            function validateStep(step) {
                const inputs = steps[step].querySelectorAll("input, select, textarea");
                let valid = true;
        
                inputs.forEach(input => {
                    const errorText = input.parentElement.querySelector(".error-text");
        
                    if (!input.value.trim()) {
                        input.classList.add("input-error");
                        if (errorText) errorText.style.display = "block";
                        valid = false;
                    } else {
                        input.classList.remove("input-error");
                        if (errorText) errorText.style.display = "none";
                    }
                });
        
                return valid;
            }
        
            function nextStep() {
                if (!validateStep(currentStep)) return;
        
                if (currentStep < steps.length - 1) {
                    currentStep++;
                    updateUI();
                }
            }
        
            function prevStep() {
                if (currentStep > 0) {
                    currentStep--;
                    updateUI();
                }
            }
        
            document.querySelectorAll(".next-btn").forEach(btn => {
                btn.addEventListener("click", nextStep);
            });
        
            document.querySelectorAll(".prev-btn").forEach(btn => {
                btn.addEventListener("click", prevStep);
            });
        
            // ENTER KEY = NEXT STEP
            document.addEventListener("keydown", function (e) {
                if (e.key === "Enter") {
                    const activeStep = steps[currentStep];
                    const isLastStep = currentStep === steps.length - 1;
        
                    // prevent form submit on enter except last step
                    if (!isLastStep) {
                        e.preventDefault();
                        nextStep();
                    }
                }
            });
        
            updateUI();
        
        });
    </script>

    <section class="py-5 process-section">
        <div class="container text-center">

            <!-- Header -->
            <p class="section-title">OUR PROCESS</p>
            <h2 class="main-heading mb-3">How It Works</h2>
            <p class="sub-text mb-5">
                A proven 4-step process to deliver impactful corporate training.
            </p>

            <!-- Cards -->
            <div class="row g-4">

                <!-- Step 1 -->
                <div class="col-lg-3 col-md-6">
                    <div class="process-card">
                        <div class="step-number">01</div>
                        <div class="icon-circle">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                        <h5 class="card-title">Consultation & Needs Analysis</h5>
                        <p class="card-text">
                            We identify your current reporting challenges, skill gaps, and how dashboards are used in
                            your role.
                        </p>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="col-lg-3 col-md-6">
                    <div class="process-card">
                        <div class="step-number">02</div>
                        <div class="icon-circle">
                            <i class="fa-solid fa-file-lines"></i>
                        </div>
                        <h5 class="card-title">Customized Training Plan</h5>
                        <p class="card-text">
                            A focused learning path covering dashboards, KPIs, and data storytelling aligned with
                            business needs.
                        </p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="process-card">
                        <div class="step-number">03</div>
                        <div class="icon-circle">
                            <i class="fa-solid fa-graduation-cap"></i>
                        </div>
                        <h5 class="card-title">Training Delivery</h5>
                        <p class="card-text">
                            Expert-led sessions delivered on-site, online, or in a blended format for maximum
                            flexibility.
                        </p>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="process-card">
                        <div class="step-number">04</div>
                        <div class="icon-circle">
                            <i class="fa-solid fa-chart-simple"></i>
                        </div>
                        <h5 class="card-title">Performance Evaluation</h5>
                        <p class="card-text">
                            Pre & Post-training assessments and analytics to measure impact and guide continuous
                            improvement.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    
    <!--@if(isset($trustedCompanies) && count($trustedCompanies) > 0)-->
    <!--    <section class="trusted-section">-->
    <!--        <div class="container">-->
    
    <!--            <div class="trusted-title">TRUSTED BY LEADING COMPANIES</div>-->
    <!--            <div class="trusted-subtitle">-->
    <!--                Empowering teams at organizations across industries-->
    <!--            </div>-->
    
    <!--            <div class="row g-4 mt-4">-->
    
                    <!-- Card -->
    <!--                @foreach($trustedCompanies as $trustedCompany)-->
    <!--                    <div class="col-12 col-sm-6 col-lg-3 fade-up">-->
    <!--                        <div class="company-card">-->
    <!--                            <div class="company-logo"><img src="{{ asset($trustedCompany->logo) }}"></div>-->
                                <!--<div class="company-name">{{ $trustedCompany->name }}</div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                @endforeach-->
    
    <!--            </div>-->
    
    <!--            <div class="trusted-footer">-->
    <!--                ...and many companies trust us with their training needs-->
    <!--            </div>-->
    
    <!--        </div>-->
    <!--    </section>-->
    <!--@endif-->

    <!--<section class="challenge-section">-->
    <!--    <div class="container">-->

    <!--        <div class="challenge-label">THE CHALLENGE</div>-->

    <!--        <h2 class="challenge-title">-->
    <!--            Is Your Workforce Keeping Up?-->
    <!--        </h2>-->

    <!--        <p class="challenge-subtitle">-->
    <!--            These common challenges are silently draining your company’s potential and profitability.-->
    <!--        </p>-->

    <!--        <div class="row g-4">-->

    <!--            <div class="col-12 col-md-6">-->
    <!--                <div class="challenge-card">-->
    <!--                    <div class="icon-box">-->
    <!--                        <i class="fa-solid fa-gauge-high"></i>-->
    <!--                    </div>-->
    <!--                    <div>-->
    <!--                        <h5>Lack of Executive-Level Dashboards</h5>-->
    <!--                        <p>-->
    <!--                            Organizations rely on basic reports instead of structured dashboards, limiting-->
    <!--                            visibility into overall performance and key metrics.-->
    <!--                        </p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->

    <!--            <div class="col-12 col-md-6">-->
    <!--                <div class="challenge-card">-->
    <!--                    <div class="icon-box">-->
    <!--                        <i class="fa-solid fa-file-lines"></i>-->
    <!--                    </div>-->
    <!--                    <div>-->
    <!--                        <h5>Unstructured & Inefficient Reporting</h5>-->
    <!--                        <p>-->
    <!--                            Reports lack consistency and clarity, making it difficult for stakeholders to quickly-->
    <!--                            interpret data and make informed decisions.-->
    <!--                        </p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->

    <!--            <div class="col-12 col-md-6">-->
    <!--                <div class="challenge-card">-->
    <!--                    <div class="icon-box">-->
    <!--                        <i class="fa-solid fa-hourglass-half"></i>-->
    <!--                    </div>-->
    <!--                    <div>-->
    <!--                        <h5>Manual & Time-Consuming Analysis</h5>-->
    <!--                        <p>-->
    <!--                            Heavy reliance on manual Excel processes leads to inefficiencies, delays, and increased-->
    <!--                            risk of errors in reporting.-->
    <!--                        </p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->

    <!--            <div class="col-12 col-md-6">-->
    <!--                <div class="challenge-card">-->
    <!--                    <div class="icon-box">-->
    <!--                        <i class="fa-solid fa-comments"></i>-->
    <!--                    </div>-->
    <!--                    <div>-->
    <!--                        <h5>No Structured Data Storytelling</h5>-->
    <!--                        <p>-->
    <!--                            Data is presented without context or narrative, making it difficult for leadership to-->
    <!--                            understand insights and take action.-->
    <!--                        </p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->

    <!--            <div class="col-12 col-md-6">-->
    <!--                <div class="challenge-card">-->
    <!--                    <div class="icon-box">-->
    <!--                        <i class="fa-solid fa-user-graduate"></i>-->
    <!--                    </div>-->
    <!--                    <div>-->
    <!--                        <h5>Critical Skill Gaps</h5>-->
    <!--                        <p>-->
    <!--                            Rapid industry changes leave teams behind. Without upskilling, your competitive edge-->
    <!--                            erodes every quarter.-->
    <!--                        </p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->

    <!--        </div>-->

    <!--    </div>-->
    <!--</section>-->

    <!--<section class="solution-section">-->
    <!--    <div class="container">-->
    <!--        <div class="row align-items-center">-->

                <!-- Left -->
    <!--            <div class="col-lg-6 mb-4 mb-lg-0">-->
    <!--                <div class="small-heading">THE SOLUTION</div>-->

    <!--                <div class="main-heading">-->
    <!--                    Training That Moves the Needle-->
    <!--                </div>-->

    <!--                <div class="description">-->
    <!--                    We don't offer generic workshops. Our programs are built around-->
    <!--                    your business objectives, ensuring every hour invested translates-->
    <!--                    into measurable performance gains.-->
    <!--                </div>-->

    <!--                <div class="feature"><i>✔</i> Customized programs tailored to your industry and team needs</div>-->
    <!--                <div class="feature"><i>✔</i> Measurable outcomes tied directly to business KPIs</div>-->
    <!--                <div class="feature"><i>✔</i> Executive-focused dashboard design aligned with business goals </div>-->
    <!--                <div class="feature"><i>✔</i> KPI-driven Hands-on training using real-world datasets </div>-->
    <!--            </div>-->

                <!-- Right -->
    <!--            <div class="col-lg-6">-->
    <!--                <div class="stats-box">-->

    <!--                    <h1>3.2×</h1>-->
    <!--                    <p>Average ROI on Training Investment</p>-->

    <!--                    <div class="divider"></div>-->

    <!--                    <div class="row">-->
    <!--                        <div class="col-6 stat">-->
    <!--                            <h2>47%</h2>-->
    <!--                            <p>Productivity Increase</p>-->
    <!--                        </div>-->
    <!--                        <div class="col-6 stat">-->
    <!--                            <h2>89%</h2>-->
    <!--                            <p>Employee Retention</p>-->
    <!--                        </div>-->
    <!--                    </div>-->

    <!--                </div>-->
    <!--            </div>-->

    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->


    <!--<div class="cta-section">-->
    <!--    <div class="container-fluid">-->
    <!--        <div class="row align-items-center">-->

                <!-- Left Content -->
    <!--            <div class="col-lg-8 d-flex align-items-center cta-left">-->
    <!--                <div class="cta-icon">-->
    <!--                    <i class="fa-solid fa-fire"></i>-->
    <!--                </div>-->
    <!--                <div>-->
    <!--                    <div class="cta-title">-->
    <!--                        Don't Let Skill Gaps Hold Your Team Back-->
    <!--                    </div>-->
    <!--                    <div class="cta-subtitle">-->
    <!--                        Companies that invest in training see 24% higher profit margins — start today.-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->

                <!-- Right Buttons -->
    <!--            <div class="col-lg-4 text-lg-end cta-buttons">-->
    <!--                <button class="btn btn-primary-custom me-lg-2 scrollToForm">-->
    <!--                    Get Started Now <i class="fa-solid fa-arrow-right ms-1"></i>-->
    <!--                </button>-->
    <!--                <button class="btn btn-secondary-custom scrollToForm">-->
    <!--                    <i class="fa-solid fa-phone me-1"></i> Call Us-->
    <!--                </button>-->
    <!--            </div>-->

    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->

    <!--<section class="outcome-section">-->
    <!--    <div class="container">-->

            <!-- Heading -->
    <!--        <div class="small-title">WHY IT WORKS</div>-->
    <!--        <div class="main-title">Outcomes That Matter</div>-->
    <!--        <p class="subtitle">-->
    <!--            We focus on tangible business results, not just training hours.-->
    <!--        </p>-->

            <!-- Features -->
    <!--        <div class="row g-4 text-start">-->

    <!--            <div class="col-md-6 col-lg-4">-->
    <!--                <div class="feature-box">-->
    <!--                    <div class="icon-box"><i class="fa-solid fa-gauge-high"></i></div>-->
    <!--                    <div>-->
    <!--                        <h6>Increased Productivity</h6>-->
    <!--                        <p>Through automated MS Excel and Power BI based dashboards we aim to reduce time spent on-->
    <!--                            manual reporting and focus more on analysis and strategic work.</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->

    <!--            <div class="col-md-6 col-lg-4">-->
    <!--                <div class="feature-box">-->
    <!--                    <div class="icon-box"><i class="fa-solid fa-coins"></i></div>-->
    <!--                    <div>-->
    <!--                        <h6>Better ROI from Data</h6>-->
    <!--                        <p>Turn existing data into valuable insights that support measurable business outcomes.</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->

    <!--            <div class="col-md-6 col-lg-4">-->
    <!--                <div class="feature-box">-->
    <!--                    <div class="icon-box"><i class="fa-solid fa-users"></i></div>-->
    <!--                    <div>-->
    <!--                        <h6>Stronger Team Alignment</h6>-->
    <!--                        <p>Standardized dashboards and KPIs create consistency across teams and departments.</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->

    <!--            <div class="col-md-6 col-lg-4">-->
    <!--                <div class="feature-box">-->
    <!--                    <div class="icon-box"><i class="fa-solid fa-circle-check"></i></div>-->
    <!--                    <div>-->
    <!--                        <h6>Effective Decision-Making</h6>-->
    <!--                        <p>Gain clarity through structured dashboards that highlight key insights for faster and-->
    <!--                            better business decisions.</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->

    <!--            <div class="col-md-6 col-lg-4">-->
    <!--                <div class="feature-box">-->
    <!--                    <div class="icon-box"><i class="fa-solid fa-database"></i></div>-->
    <!--                    <div>-->
    <!--                        <h6>Data-Driven Culture</h6>-->
    <!--                        <p>Enable teams to rely on data, not assumptions, when making decisions.</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->

    <!--            <div class="col-md-6 col-lg-4">-->
    <!--                <div class="feature-box">-->
    <!--                    <div class="icon-box"><i class="fa-solid fa-diagram-project"></i></div>-->
    <!--                    <div>-->
    <!--                        <h6>Scalable Reporting Solutions</h6>-->
    <!--                        <p>Build dashboards that can adapt from small teams to large organizational needs.</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->

    <!--        </div>-->

            <!-- CTA -->
    <!--        <button class="cta-btn scrollToForm">-->
    <!--            See How We Deliver Results <i class="fa-solid fa-arrow-right ms-1"></i>-->
    <!--        </button>-->

    <!--    </div>-->
    <!--</section>-->

    <!--<section class="cta-demo">-->
    <!--    <div class="container">-->

            <!-- Heading -->
    <!--        <h2 class="cta-title">-->
    <!--            Get a Free Corporate Training Demo-->
    <!--        </h2>-->

            <!-- Subtitle -->
    <!--        <p class="cta-subtitle">-->
    <!--            Experience our training methodology firsthand. Book a complimentary demo-->
    <!--            session and receive a free Training Needs Analysis for your team.-->
    <!--        </p>-->

            <!-- Buttons -->
    <!--        <div class="cta-buttons">-->
    <!--            <button class="btn btn-primary-custom scrollToForm">-->
    <!--                Book Free Demo Session <i class="fa-solid fa-arrow-right ms-1"></i>-->
    <!--            </button>-->

    <!--            <button class="btn btn-secondary-custom scrollToForm">-->
    <!--                Schedule a Call-->
    <!--            </button>-->
    <!--        </div>-->

    <!--    </div>-->
    <!--</section>-->

    <!--<section class="why-section">-->
    <!--    <div class="container">-->

            <!-- HEADER -->
    <!--        <p class="tag">OUR EDGE</p>-->
    <!--        <h2 class="heading">Why Companies Choose Us</h2>-->
    <!--        <p class="subtext mb-5">-->
    <!--            What sets us apart from generic training providers.-->
    <!--        </p>-->

            <!-- GRID -->
    <!--        <div class="row g-4">-->

                <!-- Card 1 -->
    <!--            <div class="col-lg-4 col-md-6">-->
    <!--                <div class="feature-card">-->
    <!--                    <div class="icon-box"><i class="fa-solid fa-id-badge"></i></div>-->
    <!--                    <div class="feature-title">Industry Expert Trainers</div>-->
    <!--                    <div class="feature-text">-->
    <!--                        Learn from internationally certified professionals with 10+ years of real-world corporate-->
    <!--                        experience.-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->

                <!-- Card 2 -->
    <!--            <div class="col-lg-4 col-md-6">-->
    <!--                <div class="feature-card">-->
    <!--                    <div class="icon-box"><i class="fa-solid fa-chart-line"></i></div>-->
    <!--                    <div class="feature-title">Measurable ROI</div>-->
    <!--                    <div class="feature-text">-->
    <!--                        Pre- and post-training analytics to track exactly what changed and prove the value of your-->
    <!--                        investment.-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->

                <!-- Card 3 -->
    <!--            <div class="col-lg-4 col-md-6">-->
    <!--                <div class="feature-card">-->
    <!--                    <div class="icon-box"><i class="fa-solid fa-laptop"></i></div>-->
    <!--                    <div class="feature-title">On-site & Online Options</div>-->
    <!--                    <div class="feature-text">-->
    <!--                        Flexible delivery wherever your team is office, remote, or hybrid.-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->

                <!-- Card 4 -->
    <!--            <div class="col-lg-4 col-md-6">-->
    <!--                <div class="feature-card">-->
    <!--                    <div class="icon-box"><i class="fa-solid fa-award"></i></div>-->
    <!--                    <div class="feature-title">Completion Certificate</div>-->
    <!--                    <div class="feature-text">-->
    <!--                        Receive a certificate recognized by the Trade Testing Board, Government of Pakistan.-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->

                <!-- Card 5 -->
    <!--            <div class="col-lg-4 col-md-6">-->
    <!--                <div class="feature-card">-->
    <!--                    <div class="icon-box"><i class="fa-solid fa-graduation-cap"></i></div>-->
    <!--                    <div class="feature-title">Claim CPD Points</div>-->
    <!--                    <div class="feature-text">-->
    <!--                        Earn Continuing Professional Development (CPD) hours for career growth.-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->

                <!-- Card 6 -->
    <!--            <div class="col-lg-4 col-md-6">-->
    <!--                <div class="feature-card">-->
    <!--                    <div class="icon-box"><i class="fa-solid fa-book-open"></i></div>-->
    <!--                    <div class="feature-title">Post-Training LMS Portal Access</div>-->
    <!--                    <div class="feature-text">-->
    <!--                        Lifetime access to recorded sessions via a personalized Learning Management System (LMS) and-->
    <!--                        ongoing WhatsApp support.-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->

    <!--        </div>-->

    <!--    </div>-->
    <!--</section>-->

    <section class="faq-section">
        <div class="container">

            <!-- HEADER -->
            <p class="tag">FAQ</p>
            <h2 class="heading">Frequently Asked Questions</h2>

            <!-- ACCORDION -->
            <div class="accordion" id="faqAccordion">

                <!-- Item 1 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button d-flex justify-content-between" data-bs-toggle="collapse" data-bs-target="#faq1">
                            Who is this program most relevant for?
                            <i class="fa-solid fa-chevron-down ms-auto"></i>
                        </button>
                    </h2>
                    <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            This program is designed for CXOs, senior executives, managers, business professionals, and
                            decision-makers responsible for reporting, performance tracking, and presenting insights to
                            leadership.
                        </div>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq2">
                            Are there any pre-requisites for this program?
                            <i class="fa-solid fa-chevron-down ms-auto"></i>
                        </button>
                    </h2>
                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Familiarity with Microsoft Excel fundamentals will be helpful.
                        </div>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq3">
                            How is this program different from standard Excel training?
                            <i class="fa-solid fa-chevron-down ms-auto"></i>
                        </button>
                    </h2>
                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            This program goes beyond Excel functions and focuses on building executive dashboards,
                            defining KPIs, and presenting insights for business decision-making.
                        </div>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq4">
                            What business value can I expect from this program?
                            <i class="fa-solid fa-chevron-down ms-auto"></i>
                        </button>
                    </h2>
                    <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            You will learn how to convert data into clear, actionable insights enabling faster
                            decisions, automated reporting, and better alignment with business goals.
                        </div>
                    </div>
                </div>

                <!-- Item 5 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq5">
                            Can this program be customized for our organization?
                            <i class="fa-solid fa-chevron-down ms-auto"></i>
                        </button>
                    </h2>
                    <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes. The training can be tailored based on your business objectives, team structure, and
                            reporting requirements.
                        </div>
                    </div>
                </div>

                <!-- Item 6 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq6">
                            Will I receive detailed program information or a proposal?
                            <i class="fa-solid fa-chevron-down ms-auto"></i>
                        </button>
                    </h2>
                    <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes. After submitting your details, our team will share a comprehensive program outline and,
                            if required, a customized proposal based on your needs.
                        </div>
                    </div>
                </div>

                <!-- Item 7 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq7">
                            Do you offer online and on-site training?
                            <i class="fa-solid fa-chevron-down ms-auto"></i>
                        </button>
                    </h2>
                    <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes. We offer on-site training at your location, fully virtual sessions, and blended
                            learning programs that combine both for maximum flexibility and engagement.
                        </div>
                    </div>
                </div>

                <!-- Item 8 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq8">
                            How can I get more details or attend a demo session?
                            <i class="fa-solid fa-chevron-down ms-auto"></i>
                        </button>
                    </h2>
                    <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            You can fill out the form on this page to receive the brochure. We will contact you to schedule a demo.
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="footer-cta-section">
        <div class="container">

            <h2 class="cta-heading">
                Ready to Unlock Your Team's <br class="d-none d-md-block">
                Full Potential?
            </h2>

            <p class="cta-text">
                Join 100+ companies that have transformed their workforce with our training programs.
                Book your free demo today and see the difference.
            </p>

            <button class="cta-btn scrollToForm">
                Book Your Free Demo Today <i class="fa-solid fa-arrow-right ms-1"></i>
            </button>

        </div>
    </section>
    
    <!-- Add the reCAPTCHA script -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    
    <script>
        document.querySelectorAll(".scrollToForm").forEach(function(btn) {
            btn.addEventListener("click", function () {
                document.getElementById("formSection").scrollIntoView({
                    behavior: "smooth"
                });
            });
        });
        document.querySelectorAll(".scrollDownload").forEach(function(btn) {
            btn.addEventListener("click", function () {
                document.getElementById("heroSection").scrollIntoView({
                    behavior: "smooth"
                });
            });
        });
    </script>
    
    <script id="fadeup-js">
    document.addEventListener("DOMContentLoaded", function () {
        const elements = document.querySelectorAll(".fade-up");
    
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("show");
                }
            });
        }, { threshold: 0.2 });
    
        elements.forEach(el => observer.observe(el));
    });
    </script>
@endsection
