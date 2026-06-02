@extends('website.app')
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: 'Open Sans', sans-serif;

        }
        .header_area .navbar{
            display: none;
        }
        .footer-area{
            display: none;
        }
        /* html {
    height: 100%;
    overflow: hidden;
} */


/* body {
    margin: 0;
    height: 100%;
    overflow-y: scroll;
    overflow-x: hidden;
    perspective: 1px;
    transform-style: preserve-3d;
} */
.contain{
    margin-top: -30px;
}
.heading1 {
    background-color: #0066b2;
    text-align: center;
    font-size: 45px;
    color: white !important;
    padding-top: 18px;
    padding-bottom: 18px;
    font-family: 'Open Sans', sans-serif;
    border-radius: 12px;
}

.hding1 {
    font-size: 36px;
    color: white !important;
    font-family: 'Open Sans', sans-serif;
    font-weight: 700;
}

.instructor {
    background-color: #0066b2;
    text-align: center;
    font-size: 45px;
    color: white !important;
    padding-top: 18px;
    padding-bottom: 18px;
    border-radius: 12px;
    margin-top: -45px;
    /* z-index: 999999; */
    position: inherit;
    width: 380px;
    margin-left: 55px;
}

.card-img-left {
    margin-left: 223px;
    padding-top: 90px;
    height: 400px;
}

.card-img-right {
    padding-top: 90px;
    height: 400px;
}

.register {
    padding-bottom: 90px;
    padding-top: 90px;
}


/* Layout for this demo */

.col-lg-10 {
    z-index: 3;
}


.heading-top {
    padding-top: 40px;
    font-size: 45px;
    font-family: 'Open Sans', sans-serif;
    font-weight: 700;
}

.paragraph1 {
    font-size: 26px;
    font-family: 'Open Sans', sans-serif;
    letter-spacing: 2px;
    line-height: 1.5;
    padding: 10px;
    font-weight: 500;
}


/* FORM CSS START */

.price {
    color: #0066b2 !important;
    font-family: 'Open Sans', sans-serif;
    font-weight: 700;
}

.installement {
    color: black;
    font-family: 'Open Sans', sans-serif;
    font-weight: 900;
}

hr.hrfunnel {
    border-top: 2px solid blue;
    height: 3px;

    width: 20%;
    margin-left: 420px;
    margin-top: -30px;
}

.form-register {
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    height: calc(4.5rem + 4px);
    /* box-shadow: 10px 5px 5px rgb(211, 207, 207) !important; */
    border-radius: 15px;
    display: block;
    width: 100%;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 5.5;
    color: #212529;
    border: 1px solid #ced4da;
    background-color: #fff;
    background-clip: padding-box;
    /* border: 1px solid #ced4da; */
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.25rem;
    transition: border-color .15s
}

.form-label {
    color: #0066b2 !important;
    padding: 20px;
    font-weight: 400;
}

.button1 {
    /* margin-left: 460px; */
    line-height: 292%;
    border-inline-width: 25px;
    border-radius: 7px;
    display: inline-block;
    font-weight: 400;
    line-height: 2.5;
    width: 125px;
    color: #212529;
    text-align: center;
    text-decoration: none;
    vertical-align: middle;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    padding: 0.375rem 0.75rem;
    font-size: 20px;
    border-radius: 10px;
    transition: color .15s
}

.button11 {
    padding: 20px;
}


/* NEW vIDEO */

.video-player-main iframe {
    width: 100%;
    border: 0px;
    display: none;
    border-radius: 22px;
}

.card-top {
    padding-top: 60px;
    border-radius: 20px;
}

.feed-item--video .feed-item__banner {
    height: 400px;
    background-color: #232323;
    margin-bottom: 0;
    /* z-index: 5; */
}

.feed-item--video .feed-item__banner img {
    opacity: .4;
}

.js .feed-item__banner {
    opacity: 0;
}

.feed-item__banner {
    margin-bottom: -10px;
    height: 330px;
    overflow: hidden;
    position: relative;
    font-size: 0;
    line-height: 0;
    opacity: 1;
    background-color: #edede8;
}

.feed-item--video .feed-item__banner img {
    opacity: .4;
    
}

.feed-item__banner img {
    position: absolute;
    transition: -webkit-transform .3s;
    transition: transform .3s;
    width: 100%;
    max-width: 100%;
    height: auto;
}

.feed-item__banner:hover img {
    -webkit-transform: scale(1.1);
    transform: scale(1.1);
    transition: -webkit-transform 4s;
    transition: transform 4s;
}
.feed-video{
    border-radius: 40px;
}
.feed-item--video .btn--play {
    z-index: 8;
    position: absolute;
    width: 84px;
    height: 46px;
    line-height: 46px;
    left: 50%;
    top: 50%;
    margin-left: -42px;
    margin-top: -23px;
}

.btn--play {
    color: #fff;
    background-color: #232323;
    padding-left: 2.5em;
    padding-right: 2.5em;
    line-height: 3.5em;
    outline: none;
}

.feed-item--video .btn--play:hover {
    background-color: #90c42d;
    outline: none;
}

.sprite--play {
    width: 10px;
    height: 13px;
    background-position: -120px -150px;
    outline: none;
}

.feed-item__icon i,
.post__icon i,
.sprite {
    width: 16px;
    height: 16px;
    overflow: hidden;
    background-image: url(../images/playbutton.png);
    background-repeat: no-repeat;
    background-position: 9999px 9999px;
    background-size: auto;
    outline: none;
}

.feed-item__icon i,
.icon,
.post__icon i,
.sprite {
    display: inline-block;
    line-height: 1;
    position: relative;
    vertical-align: middle;
    zoom: 1;
    font-style: normal;
    font-weight: 400;
    text-align: center;
    top: -6px;
    background-repeat: no-repeat;
    outline: none;
}


/* LIST Funnel2 */

.lii {
    color: black;
    list-style: none;
    position: relative;
    padding-left: 50px;
    font-weight: 500;
    line-height: 2;
    font-size: 32px;
    font-family: 'Open Sans', sans-serif;
}

li {
    list-style: none;
    position: relative;
    padding-left: 50px;
    line-height: 2;
    /* font-size: 32px; */
}

.h2-lst {
    color: black;
    font-size: 30px;
    font-family: 'Open Sans', sans-serif;
}

li:before {
    font-family: FontAwesome;
    position: absolute;
    left: 0;
    color: #318ca0;
    font-size: 32px;
}

li.one:before {
    content: "\f111";
}

.heading-funnel2 {
    padding-top: 30px;
    padding-bottom: 30px;
    font-size: 45px;
    text-align: center;
    font-weight: 700;
    font-family: 'Open Sans', sans-serif;
}

.organized {
    font-size: 36px;
    line-height: 30px;
    font-weight: bold;
    margin-bottom: 15px;
    text-align: initial;
    font-family: 'Open Sans', sans-serif;
}

.heading-started {
    background-color: #0066b2;
    text-align: center;
    font-size: 45px;
    color: white !important;
    padding-top: 18px;
    padding-bottom: 18px;
    border-radius: 12px;
    width: 320px;
    margin-top: 0px;
    /* text-align: center; */
    margin-left: 390px;
}

.logo-item1 {
    height: 50%;
}

.pragraph-line {
    text-align: center;
    padding: 40px;
    font-size: 30px;
    font-weight: 500;
    font-family: 'Open Sans', sans-serif;
    margin-top: -230px;
}

.head-list {
    padding-top: 40px;
    color: #0066B2;
    font-weight: 700;
    font-size: 30px;
    font-family: 'Open Sans', sans-serif;
}

.head-lst {
    color: #0066B2;
    font-size: 30px;
    font-family: 'Open Sans', sans-serif;
}



/* body {font-family: Arial, Helvetica, sans-serif;} */

h1 {
  text-align: center;
}

input[type=text], input[type=email], input[type=password], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    /* background-color: #f2f2f2; */
    padding: 20px;
}

.error {
  display: block;
  margin-bottom: 10px;
  color: red;
}
@media only screen and (max-width: 600px) {
   body{
    font-size: 20px;
   }
    .button1 {
    line-height: 292%;
    border-inline-width: 25px;
    border-radius: 7px;
    display: inline-block;
    font-weight: 400;
    line-height: 2.5;
    width: 125px;
    color: #212529;
    text-align: center;
    text-decoration: none;
    vertical-align: middle;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    padding: 0.375rem 0.75rem;
    font-size: 20px;
    border-radius: 10px;
    transition: color .15s
}
hr.hrfunnel {
    border-top: 2px solid blue;
    height: 3px;
    width: 20%;
    margin-left: 108px;
    margin-top: -30px;
}
.installement {
    color: black;
    font-family: 'Open Sans', sans-serif;
    font-weight: 900;
    font-size: 20px;
}
.price {
    color: #0066b2 !important;
    font-family: 'Open Sans', sans-serif;
    font-weight: 700;
    font-size: 20px;
}

}
.error{
  color:red;
}




/* @media only screen and (max-width: 600px) {
    hr.hrfunnel {
    border-top: 2px solid blue;
    height: 3px;
    width: 20%;
    margin-left: 237px;
    margin-top: -30px;
}
} */

    </style>


<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

<!-- <script>
$(document).ready(function() {
   $("#form").validate();
});
</script>
 -->

 <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.js"></script> -->









<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- <script type="text/javascript">
		

		function validation(){

			
			var emails = document.getElementById('email').value;




            if (emails == "") {
                document.getElementById('emaill').innerHTML = " ** Please fill the email idx` field";
                return false;
            }
            if (emails.indexOf('@') <= 0) {
                document.getElementById('emaill').innerHTML = " ** @ Invalid Position";
                return false;
            }

            if ((emails.charAt(emails.length - 4) != '.') && (emails.charAt(emails.length - 3) != '.')) {
                document.getElementById('email').innerHTML = " ** . Invalid Position";
                return false;
            }
        }

            function validation(){
            var mobileNumber = document.getElementById('pnumber').value;
            if (pnumber == "") {
                document.getElementById('mobileno').innerHTML = " ** Please fill the mobile NUmber field";
                return false;
            }
            if (isNaN(mobileNumber)) {
                document.getElementById('mobileno').innerHTML = " ** user must write digits only not characters";
                return false;
            }
            if (mobileNumber.length != 10) {
                document.getElementById('mobileno').innerHTML = " ** Mobile Number must be 10 digits only";
                return false;
            }
        }

     
</script> -->
</head>
@section('content')
                    <div class="container">
                    <div class="card-body">
                        <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6 text-center mb-4">
                            <!-- <img src="img/Yourexcel-img/excel-logo-new.png" alt="" style="width: 170px;"> -->
                            <img src="funnelimg/certificate.png" alt="" style="width: 100%; text-align: center;">
                        </div>
                        </div>
                        <div class="container contain">
                            <div class="row">
                                <div class="col-lg-12">
                                <h2 class="mb-3 text-center installement">Course Fees</h2>
                            </div>
                            <div class="row">
                                <h2 class="mb-4 text-center price">4 Installemt > Rs. 22,000 | 48 Hours | 4 Months</h2>
                            </div>
                            <div class="row">
                                <h2 class="mb-2 text-center installement">Admission Form </h2>
                                <h2 class="mb-5 text-center price">Financial Modeling and Analysis</h2>
                                <hr class="hrfunnel">
                            </div>
                        </div>
                        </div>

                        <form action="{{url('funnel-form')}}" method="POST" id="register-form" onsubmit="return validation()">
                            @csrf
                            <div class="row p-3">
                                <div class="col-lg-6">
                                    <div class="form-group">

                                        <input type="text" class=" form-register" id="name" name="name"
                                            placeholder="Enter Full Name" required style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                            <span id="username" class="text-danger font-weight-bold"> </span>
                                            <!-- <label for="name" class="form-label"
                                            style="color: #0066b2">Example: John</label> -->
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">

                                        <input type="text" class=" form-register" id="email" name="email"
                                            placeholder="Enter Your Email" required>
                                            <span id="emaill" class="text-danger font-weight-bold"> </span>
                                        <!-- <label for="email" class="form-label"
                                            style="color: #0066b2">Example: john@gmail.com</label> -->
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">

                                        <input type="text" class=" form-register" id="cnic" name="cnic"
                                            placeholder="Enter Your CNIC" required>
                                            <span id="cnicno" class="text-danger font-weight-bold"> </span>
                                        <!-- <label for="cnic" class="form-label"
                                            style="color: #0066b2">Example: 42101xxxxxxxx</label> -->
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">

                                        <input type="text" class="form-register" id="pnumber"
                                            name="pnumber" placeholder="Enter Your Phone" required>
                                            <span id="mobileno" class="text-danger font-weight-bold"> </span>
                                        <!-- <label for="number" class="form-label"
                                            style="color: #0066b2">Example: 03xxxxxxxx</label> -->
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">

                                        <input type="text" class="form-register" id="address"
                                            name="address" placeholder="Enter Your Address" required>
                                        <!-- <label for="address" class="form-label">Example: Street No, Block
                                            or Anything</label> -->
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">

                                        <input type="text" class="form-register" id="age " name="age"
                                            placeholder="Enter Your Age" required>
                                            <span id="ageno" class="text-danger font-weight-bold"> </span>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">

                                        <input type="text" class="form-register" id="city" name="city"
                                            placeholder="Enter City" required>

                                    </div>
                                </div>
                                <div class="col-lg-5"></div>
                                <div class="col-lg-7 button11">
                                    <button type="submit" id="submit1" class="btn-lmslogin1 button1">Submit</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div> 
    <script type="text/javascript">
		

		function validation(){

            var user = document.getElementById('name').value;
			var emails = document.getElementById('email').value;
            var mobileNumber = document.getElementById('pnumber').value;
            var cnicNumber = document.getElementById('cnic').value;
            // var ageNumber = document.getElementById('age').value;




           
            if (user == "") {
                document.getElementById('username').innerHTML = " ** Please fill the username field";
                return false;
            }
            if ((user.length <= 2) || (user.length > 20)) {
                document.getElementById('username').innerHTML = " ** Username lenght must be between 2 and 20";
                return false;
            }
          
            if (!isNaN(user)) {
                document.getElementById('username').innerHTML = " ** only characters are allowed";
                return false;
            }
           
            if (emails == "") {
                document.getElementById('emaill').innerHTML = " ** Please fill the email idx` field";
                return false;
            }
            if (emails.indexOf('@') <= 0) {
                document.getElementById('emaill').innerHTML = " ** @ Invalid Position";
                return false;
            }

            if ((emails.charAt(emails.length - 4) != '.') && (emails.charAt(emails.length - 3) != '.')) {
                document.getElementById('email').innerHTML = " ** . Invalid Position";
                return false;
            }
           
            if (cnic == "") {
                document.getElementById('cnicno').innerHTML = " ** Please fill the CNIC NUmber field";
                return false;
            }
            if (isNaN(cnicNumber)) {
                document.getElementById('cnicno').innerHTML = " ** user must write digits only not characters";
                return false;
            }
            if (cnicNumber.length != 14) {
                document.getElementById('cnicno').innerHTML = " ** CNIC Number must be 14 digits only";
                return false;
            }
            






            if (pnumber == "") {
                document.getElementById('mobileno').innerHTML = " ** Please fill the mobile NUmber field";
                return false;
            }
            if (isNaN(mobileNumber)) {
                document.getElementById('mobileno').innerHTML = " ** user must write digits only not characters";
                return false;
            }
            if (mobileNumber.length != 11) {
                document.getElementById('mobileno').innerHTML = " ** Mobile Number must be 11 digits only";
                return false;
            }

            
            
        }

        //     function validation(){
            // var mobileNumber = document.getElementById('pnumber').value;
            // if (pnumber == "") {
            //     document.getElementById('mobileno').innerHTML = " ** Please fill the mobile NUmber field";
            //     return false;
            // }
            // if (isNaN(mobileNumber)) {
            //     document.getElementById('mobileno').innerHTML = " ** user must write digits only not characters";
            //     return false;
            // }
            // if (mobileNumber.length != 10) {
            //     document.getElementById('mobileno').innerHTML = " ** Mobile Number must be 10 digits only";
            //     return false;
            // }
        // }

     
</script>

</section>
@endsection