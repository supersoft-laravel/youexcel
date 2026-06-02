@extends('website.app', ['title' => 'Career Opportunities'])

@section('content')
<style>
    .jobs-header {
        background: linear-gradient(135deg, #1a2a3a 0%, #2c3e50 100%) !important;
        color: white !important;
        padding: 180px 0 40px 0 !important;
        /*margin-top: 120px;*/
        position: relative !important;
        overflow: hidden !important;
    }

    .jobs-header::before {
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

    .jobs-title {
        position: relative;
        text-align: center;
        margin: 60px;
    }

    .jobs-title h2 {
        font-size: 2.5rem;
        font-weight: 700;
        color: #fff;
        margin-bottom: 20px;
        position: relative;
    }

    .jobs-title h2::after {
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

    .jobs-title p {
        color: #fff;
        font-size: 1.1rem;
        opacity: 0.9;
        margin-top: 25px;
    }

    .jobs-section {
        padding: 80px 0;
        background-color: #f8f9fc;
    }

    .job-card {
        background: #fff;
        border-radius: 16px;
        padding: 30px 25px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        transition: all 0.35s ease;
        position: relative;
        overflow: hidden;
        height: 100%;
    }

    .job-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.12);
    }

    .job-card::before {
        content: "";
        position: absolute;
        width: 100%;
        height: 4px;
        background: #ff9800;
        top: 0;
        left: 0;
        opacity: 0;
        transition: 0.4s;
    }

    .job-card:hover::before {
        opacity: 1;
    }

    .job-card h5 {
        font-size: 1.3rem;
        font-weight: 700;
        color: var(--primary, #1a2a3a);
        margin-bottom: 10px;
    }

    .job-card .company-name {
        font-weight: 600;
        color: #ff9800;
        margin-bottom: 10px;
    }

    .job-card .ref-no {
        font-size: 0.85rem;
        color: #888;
        margin-bottom: 15px;
    }

    .job-card .expertise,
    .job-card .experience {
        color: #555;
        font-size: 0.95rem;
        margin-bottom: 10px;
    }

    .job-card .deadline {
        color: #c00;
        font-size: 0.9rem;
        margin-bottom: 15px;
    }

    .btn-apply {
        background-color: #ff9800;
        color: #fff;
        font-weight: 600;
        border-radius: 30px;
        padding: 10px 25px;
        transition: all 0.3s ease;
        border: none;
    }

    .btn-apply:hover {
        background-color: var(--primary, #1a2a3a);
        transform: scale(1.05);
        color: #fff;
    }

    .no-jobs {
        text-align: center;
        color: #777;
        font-size: 1.1rem;
        margin-top: 60px;
    }
    
    .available-jobs-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 50px;
        position: relative;
    }
    
    .available-jobs-badge {
        background: linear-gradient(135deg, #ffb300, #ff9800);
        color: #1a2a3a;
        font-weight: 700;
        font-size: 1.1rem;
        padding: 14px 30px;
        border-radius: 50px;
        box-shadow: 0 6px 20px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
    }
    
    .available-jobs-badge:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    }
    
    .available-jobs-badge i {
        color: #1a2a3a;
        transition: transform 0.3s ease;
    }
    
    .available-jobs-badge:hover i {
        transform: rotate(-10deg);
    }
    
    .available-jobs-badge strong {
        color: #1a2a3a;
        font-size: 1.2rem;
    }

</style>

<section class="jobs-header">
    <div class="container">
        <div class="jobs-title">
            <h2>Career Connect - Job Board (For Students / Alumni)</h2>
            <p>Discover your next career move with YouExcel’s trusted partners</p>
        </div>
    </div>
</section>

<section class="jobs-section">
    <div class="container">
        <div class="available-jobs-wrapper text-center mb-5">
            <div class="available-jobs-badge d-inline-flex align-items-center justify-content-center">
                <i class="fas fa-briefcase me-2 fs-5"></i>
                <span>Available Job(s):</span>
                <strong class="ms-2">{{ count($jobs) }}</strong>
            </div>
        </div>

        <div class="row g-4 justify-content-center">
            @forelse($jobs as $job)
                @if($job->status === 'approved')
                <div class="col-md-4 d-flex">
                    <div class="job-card w-100">
                        <h5>{{ $job->job_title ?? 'Untitled Position' }}</h5>
                        <div class="company-name">{{ $job->company_name ?? 'Confidential' }}</div>
                        <div class="ref-no"><strong>Ref#:</strong> {{ $job->ref_no }}</div>

                        <div class="expertise">
                            <strong>Expertise:</strong><br>
                            @php
                                $expertiseArray = is_array(json_decode($job->expertise, true))
                                    ? json_decode($job->expertise, true)
                                    : [];
                                $expertiseText = implode(', ', $expertiseArray);
                            @endphp
                            {{ $expertiseText ?: 'Not specified' }}
                        </div>

                        <div class="experience">
                            <strong>Minimum Experience:</strong> {{ $job->minimum_experience ?? 'Not specified' }}
                        </div>

                        <div class="deadline">
                            <strong>Deadline:</strong> {{ \Carbon\Carbon::parse($job->deadline)->format('M d, Y') }}
                        </div>

                        <div class="mt-3">
                            <a href="{{ route('career.connect.form', ['formType' => 'student_alumni']) }}?job_ref={{ $job->ref_no }}" class="btn btn-apply">Apply Now</a>
                        </div>
                    </div>
                </div>
                @endif
            @empty
                <div class="col-12">
                    <div class="no-jobs">
                        <i class="bi bi-briefcase"></i> No job opportunities available at the moment. Please check back later.
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</section>

@endsection
