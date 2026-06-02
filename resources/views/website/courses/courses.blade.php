@extends('website.app')

@section('title', 'Advance IT Courses in Karachi Pakistan')
@section('meta_description',
    'Explore Advance IT Courses in Karachi, Pakistan. Gain expert-level knowledge in
    programming, networking, cybersecurity, and more to enhance your career in technology.')
@section('meta_keywords', 'Advance IT Courses in Karachi Pakistan')


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
        .course-section {
            padding: 60px 0;
        }

        .course-card {
            background: #fff;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
            transition: 0.3s ease;
            height: 100%;

            display: flex;
            flex-direction: column;
        }

        .course-card:hover {
            transform: translateY(-5px);
        }

        .card-top {
            display: flex;
            justify-content: space-between;
            font-size: 14px;
            margin-bottom: 15px;
        }

        .difficulty {
            font-weight: 500;
            color: #333;
        }

        .card-image img {
            width: 100%;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .course-name {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 15px;
            min-height: 60px;
        }

        .course-meta {
            display: flex;
            justify-content: space-between;
            font-size: 14px;
            margin-bottom: 15px;
            color: #444;
        }

        .course-meta i {
            margin-right: 5px;
        }

        .price {
            font-size: 28px;
            font-weight: 700;
            margin: 20px 0;
        }

        .view-btn {
            display: block;
            text-align: center;
            padding: 14px;
            border-radius: 30px;
            background: linear-gradient(90deg, #0f2027, #203a43);
            color: #fff;
            text-decoration: none;
            font-weight: 600;
            transition: 0.3s;
            margin-top: auto;
        }

        .view-btn:hover {
            background: linear-gradient(90deg, #203a43, #0f2027);
            color: #fff;
        }

        .rating .fa-star {
            position: relative;
            font-size: 16px;
            margin-left: 2px;
        }

        /* Full */
        .star-filled {
            color: #f4b400;
        }

        /* Empty */
        .star-empty {
            color: #ddd;
        }

        /* Half */
        .star-half {
            color: #ddd;
            /* base empty color */
        }

        .star-half::before {
            content: "\f005";
            /* same star icon */
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            position: absolute;
            left: 0;
            top: 0;
            width: 50%;
            overflow: hidden;
            color: #f4b400;
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

    <section class="course-section">
        <div class="container">
            <div class="row g-4">

                @if (isset($courses) && count($courses) > 0)
                    @foreach ($courses as $course)
                        <div class="col-md-4">
                            <div class="course-card">

                                <div class="card-top">
                                    <div class="difficulty">{{ $course->difficulty ?? 'Beginners to Intermediate' }}</div>
                                    @php
                                        $rating = (float) ($course->rating ?? 0);
                                    @endphp

                                    <div class="rating">
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($rating >= $i)
                                                <i class="fa-solid fa-star star-filled"></i>
                                            @elseif ($rating >= $i - 0.5)
                                                <i class="fa-solid fa-star-half-stroke star-filled"></i>
                                            @else
                                                <i class="fa-regular fa-star star-empty"></i>
                                            @endif
                                        @endfor
                                    </div>
                                </div>

                                <div class="card-image">
                                    <img src="{{ $course->image_url ? asset($course->image_url) : 'img/courses/default.png' }}"
                                        alt="{{ $course->coursename }}">
                                </div>
                                <div class="course-name">{{ $course->coursename }}</div>
                                <div class="course-meta">
                                    <span><i class="fa-regular fa-circle-play"></i> {{ $course->sessions ?? '0' }}
                                        Sessions</span>
                                    <span><i class="fa-regular fa-clock"></i> {{ $course->duration ?? '0' }} Hours</span>
                                </div>
                                <hr>
                                <div class="price">
                                    RS.{{ $course->lump_sum_fee ?? 0 }}
                                </div>
                                <a href="{{ route('course.details', $course->slug) }}" target="_blank" class="view-btn">View Details</a>

                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-12">
                        <div class="alert alert-info text-center" role="alert">
                            No courses available at the moment. Please check back later.
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </section>

@endsection
