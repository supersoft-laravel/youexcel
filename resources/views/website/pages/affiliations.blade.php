@extends('website.app', ['title'=>'Affiliations'])

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
</style>
<section class="space-top space-extra-bottom section-header">
    <div class="bg-pattern"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="section-title text-center position-relative">
                    <h2>Our Affiliations</h2>
                </div>
            </div>
        </div>
    </div>
</section>

@if(isset($recogLogos) && count($recogLogos) > 0)
<section class="space-top space-extra-bottom">
    <div class="container">
        <div class="row">
            @foreach($recogLogos as $recogLogo)
                <div class="col-md-6 col-xl-12">
                    <div class="course-style4 layout2">
                        <div class="course-img">
                            <a >
                                <img class="w-100" style="width: 300px; height: 300px;" src="{{ asset($recogLogo->image) }}" alt="Course Img">
                            </a>
                        </div>
                        <div class="course-content">
                            <h3 class="course-name">
                            <a> {{ $recogLogo->title }} </a>
                            </h3>
                            <p class="">
                               {{ $recogLogo->description }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif

@include('website/sections/recognized-logos-section')

@endsection