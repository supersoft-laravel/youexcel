@extends('website.app')

@section('title', 'Alumni Feedback Form')
@section('meta_description', 'Alumni Feedback Form')
@section('meta_keywords', 'Alumni Feedback Form')

@section('content')
    <br> <br>
    <br>
    <br>

    <section class="py-3 background-image" style="background-image: url('assets/img/bg/tutor-bg-1.jpg');">
        <div class="container">
            <div class="row flex-row-reverse justify-content-between">
                <div class="col-md-12 col-lg-12 col-xl-12 align-self-center text-center text-md-start mb-4 pb-md-0">
                    <div class="breadcumb-content text-center">
                        <p class="breadcumb-text" style="color:black">
                            <b>Alumni Feedback Form</b>
                        </p>
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
                        <div class="card-body" style="overflow-x: hidden;">
                            <div class="col-lg-12 text-center mb-4">
                                <img src="img/Yourexcel-img/excel-logo-new.png" alt="" style="width: 170px;">
                            </div>
                            <h4 class="text-center">Alumni Feedback Form</h4>

                            <form action="{{ route('store.alumni.feedform') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 mb-4">
                                        <label for="suggested_courses">Q1) Please suggest any new courses YouExcel may launch?</label>
                                        <input type="text" name="suggested_courses" class="form-control" placeholder="Eg: Soft Skills, Generative AI, etc." required>
                                    </div>

                                    <div class="col-lg-12 mb-4">
                                        <label for="training_consultancy">Q2) We would like to offer trainings and consultancy services to your organization. Can you please facilitate to send our training services details to your organisation? Please share the contact details.</label>
                                        <textarea name="training_consultancy" class="form-control" rows="3" placeholder="Enter contact details" required></textarea>
                                    </div>

                                    <div class="col-lg-12 mb-4">
                                        <label for="preferred_training_mode">Q3) 90% of the participants had previously preferred Online mode of training. Would you prefer that too or would rather prefer physical on-campus sessions only?</label>
                                        <input type="text" name="preferred_training_mode" class="form-control" placeholder="Enter your preference" required>
                                    </div>

                                    <div class="col-lg-12 mb-4">
                                        <label for="trainer_rating">Q4) How would you rate the trainer’s skills and style? (1 - Lowest, 10 - Highest)</label>
                                        <input type="number" name="trainer_rating" class="form-control" min="1" max="10" required>
                                    </div>

                                    <div class="col-lg-12 mb-4">
                                        <label for="most_critical_factor">Q5) What is the one most critical factor that you like the most about YouExcel, and one thing we might improve in future sessions?</label>
                                        <textarea name="most_critical_factor" class="form-control" rows="3" required></textarea>
                                    </div>

                                    <div class="col-lg-12 mb-4">
                                        <label for="overall_experience">Q6) How was your overall experience of Training at YouExcel? (1 - Lowest, 10 - Highest)</label>
                                        <input type="number" name="overall_experience" class="form-control" min="1" max="10" required>
                                    </div>

                                    <div class="col-lg-12 mb-4">
                                        <label for="recommendation">Q7) Based on your experience, would you like to recommend YouExcel Trainings to your family, friends, and colleagues?</label>
                                        <select name="recommendation" class="form-control" required>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row pl-4">
                                    <div class="col-12 text-center">
                                        <br />
                                        <button type="submit" class="vs-btn py-3">Submit</button>
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
