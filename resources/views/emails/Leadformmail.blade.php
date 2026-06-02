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
                    Dear {{ $email_data['name'] }},
                    <p>
                        Thank you for your interest in <span><b>{{ $email_data['coursesintrested'] }}</b></span>. YouExcel customer services team
                        member will contact you to provide further details. If this is an urgent query, please
                        call/WhatsApp  Mr. Naveed Alam at +92 335 6699331  or email at admissions@youexceltraining.com

                    </p>


                    <div style="font-size:11px!important">Regards,<br/>
                        YouExcel Team<br/>
                        Suite: 503-505,<br/>
                        5th Floor,<br/>
                        Al Samad Tower,<br/>
                        Block 13-B,<br/>
                        Main University Road, Gulshan-e-Iqbal, Karachi, Pakistan.<br/>
                        Nearest Landmark: Opposite Baitul Mukkarram Masjid<br/>
                        +92-21-37121738 | +92 335 6699331<br/>
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
