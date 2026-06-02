@extends('website.app')

@section('content')
    <section class="section-demofeature">
        <div class="">
            <div class="container top-padding-register">
                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4 section-demofeatur">
                        <img src="{{url("/img/Yourexcel-img/aboutuslogo.png")}}" style="background-size: cover; width: 93%; position: absolute; margin-top: 220px; opacity: 0.2;">
                    </div>
                    <!-- <img src="img/Yourexcel-img/aboutuslogo.png" alt="" style="position:absolute;"> -->
                    <div class="col-lg-12 main-banner-padding">
                        <div class="text-center mb-5">
                            <h1 class="font-register-h1">Registration Confirmed</h1>
                        </div>
                    </div>
                    <p>We have received  your payment and your registration is confirmed. Confirmation email has also been sent to you.</p>
                </div>
            </div>
        </div>
    </section>

@endsection
