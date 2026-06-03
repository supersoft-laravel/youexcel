@extends('website.app')

@section('title', 'Government Sponsored Programs – YouExcel')
@section('meta_description', '100% Government Funded training programs at YouExcel Karachi. Browse NAVTTC-sponsored AI and digital skills courses for youth.')

@section('content')

<style>
    .govsp-hero {
        background: linear-gradient(135deg, #1a2a3a 0%, #2c3e50 100%);
        color: #fff;
        padding: 180px 0 50px;
        position: relative;
        overflow: hidden;
    }
    .govsp-hero::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(rgba(0, 40, 104, 0.85), rgba(0, 40, 104, 0.9)),
                    url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');
        background-size: cover;
        background-position: center;
        z-index: 0;
    }
    .govsp-hero .hero-inner {
        display: block !important;
        position: relative;
        z-index: 1;
        text-align: center;
        background: transparent !important;
        padding: 0 !important;
        min-height: 0 !important;
    }
    .govsp-hero h1 {
        font-size: 2.2rem;
        font-weight: 700;
        color: #fff;
        margin-bottom: 12px;
        line-height: 1.3;
    }
    .govsp-hero p {
        font-size: 1.05rem;
        color: rgba(255,255,255,0.9);
        max-width: 600px;
        margin: 0 auto;
    }

    /* Card grid */
    .govsp-grid {
        padding: 60px 0 80px;
    }
    .govsp-card {
        background: #fff;
        border: 1px solid #e3e8f0;
        border-radius: 12px;
        overflow: hidden;
        transition: transform 0.25s ease, box-shadow 0.25s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
    }
    .govsp-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 30px rgba(0,0,0,0.12);
    }
    .govsp-card img {
        width: 100%;
        height: 210px;
        object-fit: cover;
    }
    .govsp-card-body {
        padding: 22px 20px 24px;
        display: flex;
        flex-direction: column;
        flex: 1;
    }
    /* Status + rating row */
    .govsp-card-top {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 10px;
    }
    .govsp-status {
        font-size: 0.8rem;
        font-weight: 700;
        color: #28a745;
        border: 1.5px solid #28a745;
        border-radius: 5px;
        padding: 2px 10px;
    }
    .govsp-stars { color: #f8a223; font-size: 0.85rem; letter-spacing: 1px; }
    .govsp-card-badge {
        display: inline-block;
        font-size: 0.75rem;
        font-weight: 600;
        color: #666;
        margin-bottom: 6px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    .govsp-card h4 {
        font-size: 1.05rem;
        font-weight: 700;
        color: #1a2a3a;
        margin-bottom: 12px;
        line-height: 1.4;
    }
    .govsp-card p {
        font-size: 0.93rem;
        color: #555;
        line-height: 1.6;
        flex: 1;
        margin-bottom: 14px;
    }
    /* Meta row: trades + duration */
    .govsp-card-meta {
        display: flex;
        gap: 10px;
        margin-bottom: 16px;
        border-top: 1px solid #e8ecf0;
        padding-top: 12px;
    }
    .govsp-meta-item {
        display: flex;
        align-items: center;
        gap: 6px;
        font-size: 0.88rem;
        color: #444;
        font-weight: 500;
    }
    .govsp-meta-item i { color: #002347; font-size: 0.9rem; }
    .govsp-card .vs-btn {
        align-self: stretch;
        width: 100%;
        text-align: center;
        padding-top: 12px;
        padding-bottom: 12px;
    }

    @media (max-width: 767px) {
        .govsp-hero h1 { font-size: 1.65rem; }
    }
</style>

{{-- Hero --}}
<section class="govsp-hero">
    <div class="container hero-inner">
        <h1>Government Sponsored Programs</h1>
        <p>100% Government Funded skill development initiatives by YouExcel in partnership with NAVTTC, Govt. of Pakistan.</p>
    </div>
</section>

{{-- Program Listing --}}
<section class="govsp-grid">
    <div class="container">
        <div class="row justify-content-center">

            {{-- Card 1: Skills of Tomorrow --}}
            <div class="col-sm-6 col-lg-4 mb-4">
                <div class="govsp-card">
                    <img src="{{ asset('uploads/courses/images/govsp-1.jpeg') }}"
                         alt="Skills of Tomorrow – Freelancing">
                    <div class="govsp-card-body">

                        {{-- Status + Stars row --}}
                        <div class="govsp-card-top">
                            <span class="govsp-status">Status: Active</span>
                            <span class="govsp-stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </span>
                        </div>

                        {{-- Program type label --}}
                        <span class="govsp-card-badge">Scholarship Program</span>

                        {{-- Title --}}
                        <h4>NAVTTC Skills of Tomorrow</h4>

                        {{-- Meta: trades + duration --}}
                        <div class="govsp-card-meta">
                            <div class="govsp-meta-item">
                                <i class="fas fa-graduation-cap"></i>
                                <span>6 Trades</span>
                            </div>
                            <div class="govsp-meta-item">
                                <i class="fas fa-clock"></i>
                                <span>3 Months</span>
                            </div>
                        </div>

                        <a href="{{ route('govsp.navttcsotb1') }}" class="vs-btn">View Details</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
