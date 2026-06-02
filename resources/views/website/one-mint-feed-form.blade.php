@extends('website.app')

@section('title', 'One Minute Feed Back Form')
@section('meta_description', 'One Minute Feed Back Form')
@section('meta_keywords', 'One Minute Feed Back Form')


@section('content')
    <br> <br>
    <br>
    <br>

    <section class="py-3 background-image" style="background-image: url(&quot;assets/img/bg/tutor-bg-1.jpg&quot;);">
        <div class="container">
            <div class="row flex-row-reverse justify-content-between">

                <div class="col-md-12 col-lg-12 col-xl-12 align-self-center text-center text-md-start mb-4 pb-md-0">
                    <div class="breadcumb-content  text-center">
                        <p class="breadcumb-text" style="color:black">
                            <b>1-Minute Feedback Form</b>
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
                <div class="col-lg-10 ">
                    <div class="card mb-5">

                        <div class="card-body" style="overflow-x: hidden;">
                            <div class="col-lg-12 text-center mb-4">
                                <img src="img/Yourexcel-img/excel-logo-new.png" alt="" style="width: 170px;">
                            </div>
                            <h4 class="text-center">1-Minute Feedback Form</h4>

                            <form action="{{ route('store.one.mint.feedform') }}" method="POST">
                                @csrf
                                <div class="row">

                                    <div class="col-lg-6 mb-4">
                                        <label for="exampleFormControlSelect1">Training Name: <span style="color: red;">*</span> Please press "Ctrl" for multiselect </label>
                                             <select class="form-control " name="course[]" id="yourcourse" multiple
                                                aria-label="Default select example"
                                                data-live-search="true" placeholder="Choose from dropdown list">
                                           
                                             @foreach($courses as $cour)
                                                <option value="{{$cour->coursename}}">{{$cour->coursename}}</option>
                                            @endforeach
                                         
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="">Batch No. (Please check your WhatsApp group title)<span style="color: red;">*</span></label>
                                        <input name="batch_no" class="form-control" placeholder="Batch No" required="" type="text">
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="">Name (Optional):</label>
                                        <input name="name" class="form-control" placeholder="Your Name" required="" type="text">
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="">Date of Session:</label>
                                        <input name="session_date" class="form-control" placeholder="Date" required="" type="date">
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="">Email <span style="color: red;">*</span></label>
                                        <input name="email" placeholder="Your Email Address" class="form-control"
                                            pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" required=""
                                            type="email">
                                    </div>

                                    <div class="col-lg-6">
                                        {{-- <label for="">Date of Session:</label> --}}
                                        <input name="" class="form-control" placeholder="Your Name" required="" type="hidden">
                                    </div>

                                    

                                    

                                    <div class="col-lg-6">
                                        <label for="">Session commenced on Time:<span style="color: red;">*</span></label>
                                        
                                        <div class="custom-control custom-radio mt-4">
                                            <input type="radio" id="agree" name="session_time" class="custom-control-input" value="Agree" required>
                                            <label class="custom-control-label" for="agree">Agree</label>
                                        </div>
                                    
                                        <div class="custom-control custom-radio mt-4">
                                            <input type="radio" id="disagree" name="session_time" class="custom-control-input" value="Disagree" required>
                                            <label class="custom-control-label" for="disagree">Disagree</label>
                                        </div>
                                    
                                        <div class="custom-control custom-radio mt-4">
                                            <input type="radio" id="neutral" name="session_time" class="custom-control-input" value="Neutral" required>
                                            <label class="custom-control-label" for="neutral">Neutral (Mention Remarks at the end of Question)</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="">Topics covered were relevant and presented in a logical sequence:<span style="color: red;">*</span></label>
                                        
                                        <div class="custom-control custom-radio mt-4">
                                            <input type="radio" id="agree_topics" name="topics_relevance" class="custom-control-input" value="Agree" required>
                                            <label class="custom-control-label" for="agree_topics">Agree</label>
                                        </div>
                                    
                                        <div class="custom-control custom-radio mt-4">
                                            <input type="radio" id="disagree_topics" name="topics_relevance" class="custom-control-input" value="Disagree" required>
                                            <label class="custom-control-label" for="disagree_topics">Disagree</label>
                                        </div>
                                    
                                        <div class="custom-control custom-radio mt-4">
                                            <input type="radio" id="neutral_topics" name="topics_relevance" class="custom-control-input" value="Neutral" required>
                                            <label class="custom-control-label" for="neutral_topics">Neutral (Mention Remarks at the end of Question)</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="">Clarity in delivery of Content:<span style="color: red;">*</span></label>
                                        
                                        <div class="custom-control custom-radio mt-4">
                                            <input type="radio" id="agree_clarity" name="content_clarity" class="custom-control-input" value="Agree" required>
                                            <label class="custom-control-label" for="agree_clarity">Agree</label>
                                        </div>
                                    
                                        <div class="custom-control custom-radio mt-4">
                                            <input type="radio" id="disagree_clarity" name="content_clarity" class="custom-control-input" value="Disagree" required>
                                            <label class="custom-control-label" for="disagree_clarity">Disagree</label>
                                        </div>
                                    
                                        <div class="custom-control custom-radio mt-4">
                                            <input type="radio" id="neutral_clarity" name="content_clarity" class="custom-control-input" value="Neutral" required>
                                            <label class="custom-control-label" for="neutral_clarity">Neutral (Mention Remarks at the end of Question)</label>
                                        </div>
                                    </div>


                                    <div class="col-lg-6">
                                        <label for="">Facilities were readily provided by the training management:<span style="color: red;">*</span></label>
                                        
                                        <div class="custom-control custom-radio mt-4">
                                            <input type="radio" id="agree_facilities" name="facilities_provided" class="custom-control-input" value="Agree" required>
                                            <label class="custom-control-label" for="agree_facilities">Agree</label>
                                        </div>
                                    
                                        <div class="custom-control custom-radio mt-4">
                                            <input type="radio" id="disagree_facilities" name="facilities_provided" class="custom-control-input" value="Disagree" required>
                                            <label class="custom-control-label" for="disagree_facilities">Disagree</label>
                                        </div>
                                    
                                        <div class="custom-control custom-radio mt-4">
                                            <input type="radio" id="neutral_facilities" name="facilities_provided" class="custom-control-input" value="Neutral" required>
                                            <label class="custom-control-label" for="neutral_facilities">Neutral (Mention Remarks at the end of Question)</label>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6">
                                        <label for="">Overall, this training was a successful experience for me:<span style="color: red;">*</span></label>
                                        
                                        <div class="custom-control custom-radio mt-4">
                                            <input type="radio" id="agree_overall" name="training_success" class="custom-control-input" value="Agree" required>
                                            <label class="custom-control-label" for="agree_overall">Agree</label>
                                        </div>
                                    
                                        <div class="custom-control custom-radio mt-4">
                                            <input type="radio" id="disagree_overall" name="training_success" class="custom-control-input" value="Disagree" required>
                                            <label class="custom-control-label" for="disagree_overall">Disagree</label>
                                        </div>
                                    
                                        <div class="custom-control custom-radio mt-4">
                                            <input type="radio" id="neutral_overall" name="training_success" class="custom-control-input" value="Neutral" required>
                                            <label class="custom-control-label" for="neutral_overall">Neutral (Mention Remarks at the end of Question)</label>
                                        </div>
                                    </div>
                                    

                                    <div class="col-lg-12">
                                        <label for="">Remarks or Any suggestions for improvement?</label>
                                        <input name="remarks" class="form-control" placeholder="Remarks" required="" type="text">
                                    </div>




                                </div>
                                <div class="row pl-4">
                                    <div class="col-12 text-center">
                                        <br />
                                        {{-- <input type="hidden" id="zc_gad" name="zc_gad" value="" /> --}}
                                        <button type="submit" class="vs-btn py-3">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
