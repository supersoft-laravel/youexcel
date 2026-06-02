<head>
        <!-- contact us page start  -->
        <link rel="stylesheet" href="{{asset('contactus/css/style.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- contact us page start  -->


</head>
@extends('website.app' , ['title'=>'Contact Us'])

@section('content')
<section class="ftco-section">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1 class="text-center mb-4" data-aos="fade-up">CONTACT US</h1>
                <div class="wrapper">
                    <div class="row no-gutters mb-5">
                        <div class="col-md-7">
                            <div class="contact-wrap w-100 p-md-5 p-4">
                                <h3 class="mb-4">HOW CAN WE HELP?</h3>
                                <div id="form-message-warning" class="mb-4"></div>
                                <div id="form-message-success" class="mb-4">
{{--                                    Your message was sent, thank you!--}}
                                </div>
                                <form method="POST" action="{{url('contact-us')}}" class="contactForm">
								@csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label" for="name">Full Name</label>
                                                <input type="text" class="form-control" name="name" id="name"
                                                    placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label" for="email">Email Address</label>
                                                <input type="email" class="form-control" name="email" id="email"
                                                    placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label" for="email">Phone No</label>
                                                <input type="text" class="form-control" name="phone" id="phone"
                                                    placeholder="Phone No">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label" for="email">Your Availability </label>
                                                <input type="datetime-local" class="form-control" name="datetime" id="datetime"
                                                    placeholder="date and time">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="label" for="subject">Subject</label>
                                                <input type="text" class="form-control" name="subject" id="subject"
                                                    placeholder="Subject">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="label" for="#">Message</label>
                                                <textarea name="message" class="form-control" id="message" cols="30"
                                                    rows="4" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="submit" value="Send Message" class="btn btn-primary">
                                                <div class="submitting"></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-5 d-flex align-items-stretch">
						<div style="width: 100%; height: 100%">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.808841149856!2d67.07564891500374!3d24.904501284033127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x86df1120fe0a52b9!2sYouExcel!5e0!3m2!1sen!2s!4v1638602168765!5m2!1sen!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
						</div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-md-3">
                            <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-phone"></span>
                                </div>
                                <div class="text">
                                    <p><span>Landline:</span> <a href="tel://+92-21-34982348"> <br>+92-21-34982348</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fab fa-whatsapp"></span>
                                </div>
                                <div class="text">
                                    <p><span>WhatsApp:</span> <a target="_blank" href="http://wa.me/+923313016699"><br>+92-331-3016699</a>
                                </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-paper-plane"></span>
                                </div>
                                <div class="text">
                                    <p><span>Email:</span> <a target="_blank" href="mailto:info@youexceltraining.com"><br>info@youexceltraining.com</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-globe"></span>
                                </div>
                                <div class="text">
                                    <p><span>Website</span> <a target="_blank" href="https://youexceltraining.com/"><br>https://youexceltraining.com</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4"></div>
                        <div class="col-md-4 mt-5">
                            <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-map-marker"></span>
                                </div>
                                <div class="text">
                                    <p><span>Address:</span> <a target="_blank" href="https://maps.app.goo.gl/EDR1J7oucv12oi7X8"><br> YouExcel,
                        Suite: 503-506, 5th Floor, Al Samad Tower, Block 13-B, Main University Road, Gulshan-e-Iqbal,
                        Karachi, Pakistan.</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
