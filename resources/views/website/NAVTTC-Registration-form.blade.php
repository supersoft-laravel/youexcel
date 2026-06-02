@extends('website.app')

@section('content')
<style>
    @media (max-width: 767px) {
            
            #main_ban_img{
            height:360px!important;
            }
        }
</style>
    <section class="section-demofeature">
     
            <div class="container">
                <div class="row">
                
                    <div class="col-lg-12 main-banner-padding">
                        <div class="text-center mb-5">
                            <br/><br/><br/><br/><br/>
                            <h1 class="font-register-h1">Prime Minister's Youth Skill Development Program</h1>
                            
                        </div>
                    </div>
                    
                    <div class="col-lg-12 mb-4 text-center">
                        <p style="font-size:24px;color:black">Please watch Video Tutorial Steps for Registration in Prime Minister's Youth Skill Development Program - Batch IV - Registration closing on 15-April-2023!</p>
                        
                        
                         <p style="font-size:24px;color:black">Contact YouExcel Online Help Desk for support if experiencing any issues while filling the registration form.
                                                                Contact at: 0334-6699336 / 0331-3016699. Timings: 9AM to 6PM. Sundays Open.</p>
                        <p>
                            
                            <video width="100%" controls>
                                <source src="{{url("/navttc_video.mp4")}}" type="video/mp4">
                                <source src="{{url("/navttc_video.mp4")}}" type="video/ogg">

                            </video>
                        </p>
                        <br/>
                    </div>
                    
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10 mb-4">
                        <p>
                           <img id="main_ban_img" style="height:920px" src="{{url("/navttc_form.jpeg")}}">
                        </p>
                        <br/>
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
                </div><br/><br/><br/>
            </div>
      

        </div>
    </section>
@endsection
