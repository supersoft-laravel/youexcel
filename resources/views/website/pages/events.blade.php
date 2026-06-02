@extends('website.app')

@section('title', 'Upcoming Events & Workshops | [Your Organization Name]')
@section('meta_description', 'Explore upcoming events, workshops, and seminars. Discover learning opportunities, networking events, and professional development...')
@section('meta_keywords', 'events, workshops, seminars, professional development, networking events, educational conferences')

@section('content')
<!-- Breadcrumb Section -->
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
        margin-bottom: 10px;
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
                    <h2>Announcements & Events</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Events Section -->
<section class="py-5 space-top space-extra-bottom">
    <div class="container">
        <div class="row g-4">
            @if(isset($events) && count($events) > 0)
                @foreach($events as $event)
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm">
                            <div class="position-relative">
                                <img src="{{$event->main_image ? asset($event->main_image) : asset('deafult-img.jpg')}}" class="card-img-top" alt="{{$event->title}}">
                            </div>
                            
                            <div class="card-body d-flex flex-column">
                                <h2 class="h5 card-title">{{$event->title}}</h2>
                                <p class="card-text text-muted flex-grow-1">
                                    {!! Str::limit($event->description, 120, '...') !!}
                                </p>
                                <div class="d-grid gap-2">
                                    <a href="{{ route('web.events.details', $event->id) }}" class="btn btn-outline-primary">
                                        View Details
                                    </a>
                                </div>
                            </div>
                            
                            <div class="card-footer bg-transparent">
                                <div class="d-flex justify-content-between small text-muted">
                                    <div>
                                        <i class="fas fa-calendar-alt me-1"></i>
                                        {{ \Carbon\Carbon::parse($event->date)->format('d M, Y') }}
                                    </div>
                                    @php
                                    $statusClass = match($event->status) {
                                            'upcoming' => 'bg-primary',
                                            'ongoing' => 'bg-warning text-dark',
                                            'completed' => 'bg-success',
                                            'cancelled' => 'bg-danger',
                                            'postponed' => 'bg-secondary',
                                            default => 'bg-light text-dark',
                                        };
                                    @endphp
                                    
                                    <span class="{{ $statusClass }} text-white px-3 py-1 rounded-pill small">
                                        {{ strtoupper($event->status) }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-12 text-center py-5">
                    <div class="alert alert-info">
                        No upcoming events at the moment. Check back soon!
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>
@endsection