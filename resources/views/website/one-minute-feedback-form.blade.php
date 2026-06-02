@extends('website.app', ['title' => 'One Minute Feedback'])

@section('content')

<style>
    .section-header {
        background: linear-gradient(135deg, #1a2a3a 0%, #2c3e50 100%) !important;
        color: white !important;
        padding: 35px 0 0 0 !important;
        margin-top: 120px;
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
        background: linear-gradient(rgba(0, 40, 104, 0.8), rgba(0, 40, 104, 0.9)), url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');
        background-size: cover;
        background-position: center;
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
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="section-title text-center position-relative mt-5 mb-5">
                    <h2>One Minute Feedback</h2>
                    <p>Your feedback helps us improve future sessions. Please complete this short form.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="space-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="section-title text-center position-relative">
                    <img src="{{ asset('img/feedback-image.jpg') }}">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-demofeature">
    <div class="container top-padding-register">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="card mb-5">
                    <div class="card-body">
                        <form action="{{ url('1-Minute-Feedback-submit') }}" method="POST">
                            @csrf
                            <h4 class="text-center mb-4">1-Minute Feedback Form</h4>
                            <div class="row">
                                <div class="col-lg-12 mb-3">
                                    <label class="form-label-required">Training Name <span style="color: red;">*</span></label>
                                    <input type="text" name="training_name" class="form-control" required value="{{ $courseName }}" readonly>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label class="form-label-required">Email <span style="color: red;">*</span></label>
                                    <input type="email" name="email" class="form-control" required>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label class="form-label-required">Batch No. <small>(Please check your WhatsApp group title)</small> <span style="color: red;">*</span></label>
                                    <input type="text" name="batch_no" class="form-control" required>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label>Name (Optional)</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label>Date of Session</label>
                                    <input type="date" name="date_of_session" class="form-control">
                                </div>

                                {{-- Feedback Radio Fields --}}
                                @php
                                    $fields = [
                                        'session_on_time' => 'Session commenced on Time:',
                                        'topics_relevant_sequence' => 'Topics covered were relevant and presented in a logical sequence:',
                                        'clarity_of_content' => 'Clarity in delivery of Content:',
                                        'facilities_provided' => 'Facilities were readily provided by the training management:',
                                        'training_successful' => 'Overall, this training was a successful experience for me:',
                                    ];

                                    $options = ['Agree', 'Neutral', 'Disagree'];
                                @endphp

                                @foreach($fields as $field => $label)
                                    <div class="col-lg-12 mt-4">
                                        <h6>{{ $label }} <span style="color: red;">*</span></h6>

                                        @foreach($options as $index => $option)
                                            @php $id = $field . '_' . $index; @endphp
                                            <div class="custom-control custom-radio mt-2">
                                                <input type="radio" id="{{ $id }}" name="{{ $field }}"
                                                       class="custom-control-input"
                                                       value="{{ $option }}" required>
                                                <label class="custom-control-label" for="{{ $id }}">{{ $option }}</label>
                                            </div>
                                        @endforeach
                                    </div>
                                @endforeach

                                <div class="col-lg-12 mt-4">
                                    <label>Remarks (Optional)</label>
                                    <textarea name="remarks" class="form-control" rows="4" placeholder="Any additional comments or suggestions..."></textarea>
                                </div>
                                
                                <div class="col-md-12 mt-3 mb-3">
                                    <div class="g-recaptcha" data-sitekey="6LcCcgErAAAAAMj6AI5jc5za50PCchfFValVBY7Y"></div>
                                </div>
                        
                                <div class="mb-3">
                                    @error('g-recaptcha-response')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-12 text-center mt-4">
                                    <button type="submit" class="vs-btn py-3">Submit Feedback</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
