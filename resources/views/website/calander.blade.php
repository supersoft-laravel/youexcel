<!--================ Start Header Menu Area =================-->
@extends('website.app')


@section('title', 'Data Science Course Karachi | Computerized Accounting')
@section('meta_description', 'Enroll in our Data Science Course Karachi and Computerized Accounting Course Karachi. Gain
    in-demand skills to excel in data analysis and financial management')
@section('meta_keywords', 'Data Science Course Karachi, computerized accounting course karachi')


<!--================ End Header Menu Area =================-->

<!--================ Start Home Banner Area =================-->


@push('style')
    @media (max-width: 991px) {
    .breadcumb-wrapper {
    padding-top: 140px;
    }
    .table100{
    overflow-x: auto;

    border-collapse: collapse;
    }
    }



    table thead tr {
    height: 60px;
    color:white;
    background: #f58333
    }

    .table100 {
    width: 100%;
    overflow-x: auto; /* Enables horizontal scrolling */
    -webkit-overflow-scrolling: touch; /* Enables smooth scrolling on iOS devices */
    display: block; /* Ensures the table can scroll */
    }

    .table100 table {
    width: 100%;
    border-collapse: collapse; /* Ensures borders are not doubled */
    }

    .table100 th, .table100 td {
    white-space: nowrap; /* Prevents text wrapping */
    padding: 8px;
    text-align: left;

    }


    th{
    color:white;

    }
    td, th {
    /* font-weight: 700; */
    border: 3px solid #d0e4f9 !important;
    padding: 7px 5px;
    }
    .table100 tr {
    border-bottom: 1px solid #ddd;
    }

    /* Optional: Better visibility on mobile */
    .table100 th {
    background-color: #f2f2f2;
    font-weight: bold;
    }

    .table100 tr:hover {
    background-color: #f5f5f5;
    }

    .container-table100{
    zoom: 75%;
    }



    @media(max-width: 576px) {
        .container-table100 {
            padding-left:15px;
            padding-right: 15px
        }
        .table-responsive{
            margin: 0 !important; 
            overflow: auto !important; 
            width: auto  !important;
        }
    }
@endpush
@section('content')
<style>
    th {
        font-size: large;
        font-weight: 900;
        vertical-align: middle !important;
        text-align: center; /* optional if you want horizontal center too */
    }
    td {
        vertical-align: middle !important;
        text-align: center; /* optional if you want horizontal center too */
    }

</style>
    <div class="breadcumb-wrapper "style="background-color: #fff;" data-bg-src="">
        <div class="container z-index-common">
            <div class="breadcumb-content text-center">
                    @if ($calendars->isNotEmpty())
                    <h1 class="breadcumb-title mb-3" style="color: #ff5656 !important;">
                        Open Enrollments in Training Calendar
                    </h1>
                    @php
                        $minDate = $calendars
                            ->flatMap(function ($items) {
                                return $items->pluck('class_date');
                            })
                            ->min();

                        $maxDate = $calendars
                            ->flatMap(function ($items) {
                                return $items->pluck('class_date');
                            })
                            ->max();

                        $minMonth = \Carbon\Carbon::parse($minDate)->format('F Y');
                        $maxMonth = \Carbon\Carbon::parse($maxDate)->format('F Y');
                    @endphp
                    <h4 style="color: #000;">{{ $minMonth }} to {{ $maxMonth }}</h4>
                    @else
                        <h1 class="breadcumb-title">No Training Available</h1>
                    @endif
            </div>
        </div>
    </div>


    @php
        if (!function_exists('adjustBrightness')) {
            function adjustBrightness($hex, $percent) {
                $hex = str_replace('#', '', $hex);
                if (strlen($hex) == 3) {
                    $hex = $hex[0].$hex[0].$hex[1].$hex[1].$hex[2].$hex[2];
                }
    
                $r = hexdec(substr($hex, 0, 2));
                $g = hexdec(substr($hex, 2, 2));
                $b = hexdec(substr($hex, 4, 2));
    
                $r = min(255, max(0, $r + ($r * $percent / 100)));
                $g = min(255, max(0, $g + ($g * $percent / 100)));
                $b = min(255, max(0, $b + ($b * $percent / 100)));
    
                return sprintf("#%02x%02x%02x", $r, $g, $b);
            }
        }
    @endphp
    <div class="limiter">
        <div class="container-table100">
            <div class="wrap-table100">
                    <div class="table-responsive" style="margin: 0px 50px; overflow: hidden; width: fit-content;">
                        <table class="table table-bordered align-middle">
                            <thead>
                                <tr style="background-color: rgb(26, 102, 173);">
                                    <!--<th style="text-align: center; color: #fff !important;">Month</th>-->
                                    <th style="color: #fff !important;">Program</th>
                                    <th style="color: #fff !important;">Duration</th>
                                    <th style="color: #fff !important;">Demo Date</th>
                                    <th style="color: #fff !important;">Demo Timing (PKT)</th>
                                    <th style="color: #fff !important;">Session Start Date</th>
                                    <th style="color: #fff !important;">Session Timing (PKT)</th>
                                    <!--<th style="color: #fff !important;">Monthly Fees</th>-->
                                    <th style="color: #fff !important;">Investment in <br>Installment (PKR)</th>
                                    <th style="color: #fff !important;">Investment in <br>Lump Sum (PKR)</th>
                                    <th style="color: #fff !important;">Program Outline</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($calendars as $month => $items)
                                    @php
                                        $rowCount = count($items);
                                        $monthColors = [
                                            'january' => '#FFB6C1',
                                            'february' => '#FF69B4',
                                            'march' => '#98FB98',
                                            'april' => '#ADD8E6',
                                            'may' => '#90EE90',
                                            'june' => '#FFD700',
                                            'july' => '#FFA500',
                                            'august' => '#FF8C00',
                                            'september' => '#D2691E',
                                            'october' => '#FF6347',
                                            'november' => '#CD5C5C',
                                            'december' => '#9370DB',
                                        ];
                                        $monthSlug = strtolower($month);
                                        $baseColor = $monthColors[$monthSlug] ?? '#CCCCCC';
                                        $monthCellColor = adjustBrightness($baseColor, -20); // darker by 20%
                                        $rowCellColor = adjustBrightness($baseColor, 40);    // lighter by 40%
                                    @endphp

                                    @foreach ($items as $index => $item)
                                        <!--<tr style="background-color: {{ $rowCellColor }};">-->
                                        <tr>
                                            <!--@if ($index === 0)-->
                                            <!--    <td class="month-cell" style="background-color: {{ $monthCellColor  }}; text-align: center; vertical-align: middle; color: #fff !important;"-->
                                            <!--        rowspan="{{ $rowCount }}">{{ $month }}</td>-->
                                            <!--@endif-->
                                            <td>{{ $item->course_name }}</td>
                                            <td>{{ $item->duration }}</td>
                                            <td>{{ \Carbon\Carbon::parse($item->d_date)->format('d-M-Y') }}</td>
                                            <td>{!! nl2br(e($item->d_timing)) !!}</td>
                                            <td>{{ \Carbon\Carbon::parse($item->class_date)->format('d-M-Y') }}</td>
                                            <td>{!! nl2br(e($item->class_timing)) !!}</td>
                                            <!--<td>{{ $item->monthly_fee ? $item->monthly_fee : '-' }}</td>-->
                                            <td>{{ $item->course ? $item->course->program_fee : '-' }}</td>
                                            <td>{{ $item->course ? $item->course->lump_sum_fee : '-' }}</td>
                                            <td class="program-outline">
                                                <a href="{{ $item->d_btn }}" target="_blank"
                                                    class="btn btn-outline-primary btn-sm">View</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>

            </div>
        </div>
    </div>

        <div class="row mx-2">
            <div class="col-md-12 col-xl-6">
                <section ction class="pb-5">
                    <div class="container">
                    </div>
                    <div class="container cta-style2" style="border: 3px solid #fbce4d;">
                        <div class="row gx-100 gy-4">
                            <div class="col-lg-12 col-xl-12 col-xxl-12 pt-2 text-center">
                                <h2 class="pt-1 text-white">Get Ready for an Exclusive Demo!</h2>
                                <p class="pt-1 fs-md text-white">
                                    Fill out the form below and take the first step towards an exciting journey.
                                    Register now and experience the best we have to offer!
                                </p>
                                <br>
                            </div>
                        </div>
                        <div class="row gx-100 gy-4 justify-content-md-center">
                            <div class="col-lg-10 col-xl-10 col-xxl-10 pb-5">
                                <form class="newsletter-form d-flex flex-row justify-content-center align-items-center">
                                    <a href="{{ route('demo.confirmation') }}" class="vs-btn style2">
                                        <i class="far fa-angle-right"></i> Sign Up for Demo
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-12 col-xl-6">
                <section ction class="pb-5">
                    <div class="container">
                    </div>
                    <div class="container cta-style2" style="border: 3px solid #fbce4d;">
                        <div class="row gx-100 gy-4">
                            <div class="col-lg-12 col-xl-12 col-xxl-12 pt-2 text-center">
                                <h2 class="pt-1 text-white">Want to enquire for a Corporate Training Solution?</h2>
                                <p class="pt-1 fs-md text-white">
                                    Please fill the simple enquiry form and our representative will get back to you within 24 hours.
                                </p>
                                <br>
                            </div>
                        </div>
                        <div class="row gx-100 gy-4 justify-content-md-center">
                            <div class="col-lg-10 col-xl-10 col-xxl-10 pb-5">
                                <form class="newsletter-form d-flex flex-row justify-content-center align-items-center">
                                    <a href="{{ route('enquiry.corporate') }}" class="vs-btn style2">
                                        <i class="far fa-angle-right"></i> Request a Corporate Training Proposal
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>



    @endsection
