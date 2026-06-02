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
    
    <style>
        .info {
            margin-bottom: 10px;
        }
        .info strong {
            width: 120px;
            display: inline-block;
        }
    </style>
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
                    <p>New Project Enquiry Form Submission</p>
                    <p>
                        <div class="info"><strong>Name:</strong> {{ $email_data['name'] }}</div>
                        <div class="info"><strong>Email:</strong> {{ $email_data['email'] }}</div>
                        <div class="info"><strong>Phone:</strong> {{ $email_data['phone'] }}</div>
                        <div class="info"><strong>Whatsapp:</strong> {{ $email_data['whatsapp'] }}</div>
                        <div class="info"><strong>Project Name:</strong> {{ $email_data['project_name'] }}</div>
                        <div class="info"><strong>City:</strong> {{ $email_data['city'] }}</div>
                        <div class="info"><strong>Preferred Timing:</strong> {{ is_array($email_data['preferred_timing']) ? implode(', ', $email_data['preferred_timing']) : $email_data['preferred_timing'] }}</div>
                        <div class="info"><strong>Comments:</strong> {!! $email_data['comments'] !!}</div>
                    </p>

                    <div style="font-size:11px!important">Warm regards,<br/>
                        YouExcel Team<br/>
                        Suite: 503-505, 5th Floor, Al Samad Tower,<br/>
                        Block 13-B, Gulshan-e-Iqbal, Main University Road,<br/>
                        Karachi, Pakistan.<br/>
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
