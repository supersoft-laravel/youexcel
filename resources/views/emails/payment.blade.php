<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Youexcel Training</title>
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <!-- <img src="../../../public/img/Yourexcel-img/excel-logo-new.png" alt="" style="height: 100px; width: 150px;"> -->
                    <!-- <img src="{{asset('img/Yourexcel-img/excel-logo-new.png')}}" alt="" style="height: 100px; width: 150px;"> -->
                </div>
                <div class="card-body text-center">
                    <h2 class="card-title">Dear {{ $user_data->name }}</h2>

                    <p>Congratulations! We are pleased to inform you of your enrollment in the {{ $user_data->chooseprogramme }}.</p>
                    
                    <p>You have taken the step towards building a successful future, and we are delighted you have chosen YouExcel as your institution for professional development.</p>
                    
                    <p>
                        We aim to produce outstanding leaders by fostering excellence in our training program and participants.

                    </p>
                    
                    <p>
                        Please review your payment amount below, detailing your order.
                    </p>
                    
                    <p>
                        Course Name: {{ $user_data->chooseprogramme }}
                    </p>
                    
                       <p>
                       Payment Method: : {{$payment_method }}
                    </p>
                    
                       <p>
                        Amount: PKR : {{ $course_amount }}
                    </p>
                    
                    
                    <p>
                        We wish you the best with your studies and look forward to hearing about your accomplishments.<br/>
If you have any questions as you’re getting started, please contact us at +92-331-3016699 or reply to this email. We’re glad you have chosen YouExcel as your learning partner.

                    </p>


                    <div style="font-size:11px!important">Regards,<br/>
                        YouExcel Team<br/>
                        Suite: 503-505,<br/>
                        5th Floor,<br/>
                        Al Samad Tower,<br/>
                        Block 13-B,<br/>
                        Main University Road, Gulshan-e-Iqbal, Karachi, Pakistan.<br/>
                        Nearest Landmark: Opposite Baitul Mukkarram Masjid<br/>
                        021-34982348 | 0331-3016699<br/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
</body>

</html>
