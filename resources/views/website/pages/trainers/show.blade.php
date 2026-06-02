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
    
    .trainer-details-section{
        padding:80px 0;
        background:#f8fafc;
    }
    
    /* Top Section */
    .trainer-top{
        background:#fff;
        padding:40px;
        border-radius:14px;
        box-shadow:0 10px 35px rgba(0,0,0,0.08);
        margin-bottom:40px;
    }
    
    /* Profile Image */
    .trainer-profile-img{
        width:220px;
        height:220px;
        margin:auto;
        border-radius:50%;
        overflow:hidden;
        border:6px solid #fff;
        box-shadow:0 10px 30px rgba(0,0,0,0.15);
    }
    
    .trainer-profile-img img{
        width:100%;
        height:100%;
        object-fit:cover;
    }
    
    /* Info */
    .trainer-info{
        padding-left:20px;
    }
    
    .trainer-title{
        font-size:32px;
        font-weight:700;
        color:#1a4480;
        margin-bottom:10px;
    }
    
    .trainer-experience{
        font-size:16px;
        color:#777;
        margin-bottom:15px;
    }
    
    .trainer-experience i{
        color:#ff9800;
        margin-right:8px;
    }
    
    /* Rating */
    .trainer-rating{
        display:flex;
        align-items:center;
        gap:10px;
        margin-bottom:20px;
    }
    
    .trainer-rating .stars i{
        color:#ffb400;
        font-size:18px;
    }
    
    .rating-number{
        color:#666;
        font-size:14px;
    }
    
    /* Social Icons */
    .trainer-social a{
        display:inline-flex;
        align-items:center;
        justify-content:center;
        width:42px;
        height:42px;
        border-radius:50%;
        background:#f1f3f7;
        margin-right:10px;
        color:#1a4480;
        transition:all .3s;
    }
    
    .trainer-social a:hover{
        background:#ff9800;
        color:#fff;
        transform:translateY(-3px);
    }
    
    /* Bio Section */
    .trainer-bio{
        background:#fff;
        padding:35px;
        border-radius:12px;
        box-shadow:0 10px 30px rgba(0,0,0,0.07);
        margin-bottom:35px;
    }
    
    .section-title{
        font-weight:700;
        margin-bottom:15px;
        color:#1a4480;
    }
    
    .trainer-description{
        margin-top:15px;
    }
    
    /* Certifications */
    .trainer-certifications{
        background:#fff;
        padding:35px;
        border-radius:12px;
        box-shadow:0 10px 30px rgba(0,0,0,0.07);
    }
    
    .trainer-certifications ul{
        padding-left:20px;
    }
    
    .trainer-certifications li{
        margin-bottom:8px;
        position:relative;
    }
    
    /* Mobile */
    @media(max-width:992px){
    
        .trainer-info{
            padding-left:0;
            text-align:center;
            margin-top:20px;
        }
        
        .trainer-profile-img{
            width:180px;
            height:180px;
        }
        
        .trainer-title{
            font-size:26px;
        }
        
        .trainer-rating{
            justify-content: center;
        }
    
    }
</style>
<section class="space-top space-extra-bottom section-header">
    <div class="bg-pattern"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="section-title text-center position-relative">
                    <h2>Trainer Profile</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="trainer-details-section">
    <div class="container">

        <div class="row align-items-center trainer-top">

            <!-- Trainer Image -->
            <div class="col-lg-4 text-center">
                <div class="trainer-profile-img">
                    <img src="{{ asset($trainer->picture) }}" alt="{{ $trainer->name }}">
                </div>
            </div>

            <!-- Trainer Info -->
            <div class="col-lg-8">

                <div class="trainer-info">

                    <h2 class="trainer-title">{{ $trainer->name }}</h2>

                    <p class="trainer-experience">
                        <i class="fa-solid fa-briefcase"></i>
                        {{ $trainer->experience }}+ Years Experience
                    </p>

                    <!-- Rating -->
                    <div class="trainer-rating">

                        <div class="stars">
                            @for ($i = 1; $i <= 5; $i++)
                                @if ($trainer->rating >= $i)
                                    <i class="fa-solid fa-star"></i>
                                @elseif ($trainer->rating >= $i - 0.5)
                                    <i class="fa-solid fa-star-half-stroke"></i>
                                @else
                                    <i class="fa-regular fa-star"></i>
                                @endif
                            @endfor
                        </div>

                        <span class="rating-number">
                            ({{ $trainer->rating }}/5)
                        </span>

                    </div>

                    <!-- Social Links -->
                    <div class="trainer-social">

                        @if($trainer->linkedin)
                            <a href="{{ $trainer->linkedin }}" target="_blank">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        @endif

                        @if($trainer->facebook)
                            <a href="{{ $trainer->facebook }}" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        @endif

                        @if($trainer->instagram)
                            <a href="{{ $trainer->instagram }}" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        @endif

                    </div>

                </div>

            </div>

        </div>


        <!-- Bio -->
        <div class="trainer-bio">

            <h4 class="section-title">Brief Bio</h4>

            <p>{{ $trainer->bio }}</p>

            <div class="trainer-description">
                {!! $trainer->description !!}
            </div>

        </div>


        <!-- Certifications -->
        @php
            $certifications = json_decode($trainer->certifications);
        @endphp

        @if(isset($certifications) && count($certifications) > 0)

        <div class="trainer-certifications">

            <h4 class="section-title">Certifications</h4>

            <ul>
                @foreach($certifications as $cert)
                    <li>{{ $cert }}</li>
                @endforeach
            </ul>

        </div>

        @endif

    </div>
</section>

@include('website.sections.courses-redirection-section')
@endsection