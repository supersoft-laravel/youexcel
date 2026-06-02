@extends('website.app')

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
    <style>
    body {
        font-family: 'Open Sans', sans-serif;

    }

    .header_area .navbar {
        display: none;
    }

    .footer-area {
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

    .heading1_btm {
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
        font-size: 25px;
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
        margin-top: 135px;
        /* z-index: 999999; */
        position: inherit;
        width: 435px;
        margin-left: 55px;
    }

    .card-img-left {
        margin-left: 376px;
        padding-top: 90px;
        height: 260px;
    }

    .card-img-right {
        padding-top: 90px;
        height: 260px;
    }

    .register {
        padding-bottom: 40px;
        padding-top: 63px;
    }


    /* Layout for this demo */

    .col-lg-10 {
        z-index: 3;
    }


    .heading-top {
        padding-top: 40px;
        font-size: 38px;
        font-family: 'Open Sans', sans-serif;
        font-weight: 700;
    }

    .paragraph1 {
        font-size: 17px;
        font-family: 'Open Sans', sans-serif;
        letter-spacing: 2px;
        line-height: 2.0;
        padding: 10px;
        font-weight: 500;
    }


    /* FORM CSS START */

    .price {
        color: #0066b2 !important;
        font-family: 'Open Sans', sans-serif;
    }

    .installement {
        color: black;
        font-family: 'Open Sans', sans-serif;
    }

    hr.hrfunnel {
        border: 0;
        height: 3px;
        color: #023155 !important;
        width: 20%;
        margin-left: 335px;
        margin-top: -30px;
    }

    .form-register {
        box-shadow: 10px 5px 5px rgb(211, 207, 207) !important;
        border-radius: 6px;
    }

    .form-label {
        color: #0066b2 !important;
        padding: 20px;
    }

    .button1 {
        margin-left: 360px;
        line-height: 292%;
        border-inline-width: 25px;
        border-radius: 7px;
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
        padding-top: 100px;
        border-radius: 10px;
    }

    .feed-item--video .feed-item__banner {
        height: 400px;
        background-color: #232323;
        margin-bottom: 0;
        border-radius: 25px;
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
        border-radius: 25px;
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
        height: 100%;
        border-radius: 25px;
    }

    .feed-item__banner:hover img {
        -webkit-transform: scale(1.1);
        transform: scale(1.1);
        transition: -webkit-transform 4s;
        transition: transform 4s;
    }

    .feed-video {
        border-radius: 40px;
    }

    .feed-item--video .btn--play {
        z-index: 8;
        position: absolute;
        width: 84px;
        height: 46px;
        line-height: 46px;
        left: 49%;
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
        height: 50px;
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
        top: 15px;
        background-repeat: no-repeat;
        outline: none;
        width: 110px;
        color: #fff;
    }


    /* LIST Funnel2 */

    .lii {
        color: black;
        list-style: none;
        position: relative;
        padding-left: 50px;
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
        margin-top: -470px;
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
        font-family: 'Open Sans', sans-serif;
        margin-top: -230px;
    }

    .head-list {
        padding-top: 40px;
        color: #0066B2;
        font-size: 30px;
        font-family: 'Open Sans', sans-serif;
    }

    .head-lst {
        color: #0066B2;
        font-size: 30px;
        font-family: 'Open Sans', sans-serif;
    }

    .hrline {
        border-top: 3px solid #0066b2;
        width: 110px;
        margin-top: 6px;
        margin-left: 0px;
    }

    .btn:not(:disabled):not(.disabled) {
        cursor: pointer;
        background-color: #0066b2;
        border-radius: 4px;
        height: 60px;
        width: 140px;
        color: #fff;
    }

    .fa-play:before {
        content: "\f04b";
        margin-top: 22px;
        color: #fff;
    }

    .videos-first {
        opacity: 1;
        height: 400px;
        margin-top: -40px;
    }

    .img-first {
        height: 400;
        width: 100%;
    }

    @media only screen and (max-width: 600px) {
        .instructor {
            background-color: #0066b2;
            text-align: center;
            font-size: 45px;
            color: white !important;
            padding-top: 18px;
            padding-bottom: 18px;
            border-radius: 12px;
            margin-top: 211px;
            /* z-index: 999999; */
            position: inherit;
            width: 300px;
            margin-left: 25px;
        }
        .lg-4{
            margin-bottom: 65px;
        }

        .card-img-left {
            margin-left: 0px;
            padding-top: 40px;
            padding-left: 65px;
            height: 250px;
        }

        .card-img-right {
            margin-left: 0px;
            padding-top: 30px;
            padding-left: 68px;
            height: 240px;
        }

        .card-top {
            padding-top: 60px;
            border-radius: 20px;
            width: 100%;
        }

        .hding1 {
            font-size: 20px;
            color: white !important;
            font-family: 'Open Sans', sans-serif;
            font-weight: 700;
        }

        .hrline {
            border-top: 3px solid #0066b2;
            width: 110px;
            margin-top: 6px;
            margin-left: 0px;
        }

        .feed-item--video .feed-item__banner {
            height: 260px;
            background-color: #232323;
            margin-bottom: 0;
            border-radius: 25px;
        }

        .videos-first {
            opacity: 1;
            height: 240px;
            margin-top: -20px;
        }

        .paragraph1 {
            font-size: 14px;
            font-family: 'Open Sans', sans-serif;
            letter-spacing: 2px;
            line-height: 2.5;
            padding: 10px;
            font-weight: 500;
        }

        .heading-top {
            padding-top: 40px;
            font-size: 30px;
            font-family: 'Open Sans', sans-serif;
            font-weight: 700;
        }

        .feed-item--video .feed-item__banner {
            height: 240px;
            background-color: #232323;
            margin-bottom: 0;
            border-radius: 25px;
            /* z-index: 5; */
        }

        .heading1 {
            background-color: #0066b2;
            text-align: center;
            font-size: 45px;
            color: white !important;
            padding-top: 12px;
            padding-bottom: 12px;
            font-family: 'Open Sans', sans-serif;
            border-radius: 12px;
        }

        .heading1_btm {
            background-color: #0066b2;
            text-align: center;
            font-size: 45px;
            color: white !important;
            padding-top: 12px;
            padding-bottom: 12px;
            font-family: 'Open Sans', sans-serif;
            border-radius: 12px;
            width: 100%;
            margin-left: 0px;
        }

        .feed-item--video .btn--play {
            left: 42%;
            top: 50%;
        }

        .register {
            padding-bottom: 35px;
            padding-top: 35px;
        }
        .lg-4{
            margin-top: 230px;
        }
    }
    </style>

    <style>
    .videoWrapper {
        position: relative;
        width: 100%;
        height: 230px;
        background-color: #000;
    }

    .videoWrapper43 {
        padding-top: 75%;
    }

    .videoWrapper169 {
        padding-top: 56%;
        border-radius: 10px;
    }

    .videoIframe {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 480px;
        background-color: transparent;
        border-radius: 8px;
    }

    .videoPoster {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        width: 100%;
        height: 480px;
        margin: 0;
        padding: 0;
        cursor: pointer;
        border: 0;
        border-radius: 10px;
        outline: none;
        background-position: 50% 50%;
        background-size: 100% 100%;
        background-size: cover;
        text-indent: -999em;
        overflow: hidden;
        opacity: 1;
        -webkit-transition: opacity 800ms, height 0s;
        -moz-transition: opacity 800ms, height 0s;
        transition: opacity 800ms, height 0s;
        -webkit-transition-delay: 0s, 0s;
        -moz-transition-delay: 0s, 0s;
        transition-delay: 0s, 0s;
    }

    .videoPoster:before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 80px;
        height: 80px;
        margin: -40px 0 0 -40px;
        border: 5px solid #fff;
        border-radius: 100%;
        -webkit-transition: border-color 300ms;
        -moz-transition: border-color 300ms;
        transition: border-color 300ms;
    }

    .videoPoster:after {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0;
        height: 0px;
        margin: -20px 0 0 -13px;
        border-left: 35px solid #fff;
        border-top: 20px solid transparent;
        border-bottom: 20px solid transparent;
        -webkit-transition: border-color 300ms;
        -moz-transition: border-color 300ms;
        transition: border-color 300ms;
    }

    .videoPoster:hover:before,
    .videoPoster:focus:before {
        border-color: #0066B2;
    }

    .videoPoster:hover:after,
    .videoPoster:focus:after {
        border-left-color: #0066B2;
    }

    .videoWrapperActive .videoPoster {
        opacity: 0;
        height: 0;
        -webkit-transition-delay: 0s, 800ms;
        -moz-transition-delay: 0s, 800ms;
        transition-delay: 0s, 800ms;
    }

    main {
        max-width: 800px;
        margin: 0px auto;
    }

    video:-webkit-full-page-media {
        height: 270px !important;
    }
    .display-flex1{
        display: inline-flex;
        align-items: center;
    }
    .free-icon{
        margin-top: -48px;
    position: absolute;
    margin-left: 250px;
}
     .free-icon1{
        margin-top: -48px;
    position: absolute;
    margin-left: 250px;
}
    </style>
</head>
@section('content')
<section class="ftco-section" style="padding-top: 150px;">
    <div class="col-lg-12 text-center mb-4">
        <img src="img/Yourexcel-img/excel-logo-new.png" alt="" style="width: 190px; margin-top: -88px;">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="colm col-lg-10">
                <div class="heading1">
                    <h1 class="hding1">FINANCIAL MODELING AND ANALYSIS</h1>
                </div>
            </div>
        </div>
    </div>





    <div class="container">
        <div class="feed-item__banner init videos-first" role="banner">
            <a href="funnel2" class="click">
                <img class="img-first" src="funnelimg/f2.png" data-src="funnelimg/f2.png">

                <!-- <img src="httpsfunnelimg/f2.png" data-src="https://i.ytimg.com/vi/eJidjJLfpl8/maxresdefault.jpg"  width="100%" height="400" > -->
                <div class="feed-item--video feed-video">


                    <button type="button" class="btn btn--play">
                        <span class="sprite sprite--play">
                            <!-- <i class="fa fa-play " aria-hidden="true"></i> -->
                            Watch a demo
                        </span>
                    </button>

                </div>




            </a>

        </div>
        <div class="main-video-container">
            <div class="video-player-main" id="player">
                <iframe id="videoplay" class="frameii" height="400" src="funnelimg/f2.png" type="" controls="controls"
                    preload="none" autoplay="none" frameborder="0" allowfullscreen></iframe>
                <!-- <img class="img-first" src="funnelimg/f2.png" data-src="funnelimg/f2.png"> -->


            </div>
        </div>
    </div>






    <!-- <div class="wrap"> -->


    <!-- <div class="box-video">
  <div class="bg-video" style="background-image: url(https://ununsplash.imgix.net/photo-1418225043143-90858d2301b4?fit=crop&fm=jpg&q=75&w=1000);">
    <div class="bt-play">Play</div>
  </div>
  <div class="video-container">
    <iframe width="590" height="332" src="https://youtu.be/sc6DAwLl2qY"></iframe>
  </div>
</div>
  </div>
    </div> -->

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="heading-top">Introduction</h1>
                <hr class="hrline">
                <p class="paragraph1">Financial Modeling & Analysis training is a competency based course adopting
                    structured approach to
                    translating business insights through numerous data visualization tools using dynamic Financial
                    Dashboards.</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="heading-top">Course Module</h1>
                <hr class="hrline">
            </div>
            <div class="col-lg-6">
                <img src="funnelimg/fundemental.png" alt="" style="width: 100%">
            </div>
            <div class="col-lg-6">
                <img src="funnelimg/professional.png" alt="" style="width: 100%">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="heading-top">Trainer Experience</h1>
                <hr class="hrline">
                <p class="paragraph1">Tanweer Bukhsh is currently serving as General Manager at Richko Group and is a
                    visiting
                    faculty member at YouExcel. He is a Masters degree holder in Economics from Karachi
                    University.
                    He has vast practical experience of working in equity market has enabled him to apply
                    tools and techniques in Financial Modeling and Analysis training.
                    He is passionate to share his practical experience of over 15 years of working in the
                    industry during training to help course participants learn from real-life case studies. </p>
            </div>
            <div class="col-lg-6">
                <!-- <img class="card-top" src="funnelimg/img.png"> -->
                <main class="card-top">
                    <div class="videoWrapper videoWrapper169 js-videoWrapper">
                        <iframe class="videoIframe js-videoIframe" src="funnelimg/Youexcel.mp4" frameborder="0"
                            allowTransparency="true" allowfullscreen data-src="funnelimg/Youexcel.mp4"></iframe>
                        <!-- the poster frame - in the form of a button to make it keyboard accessible -->
                        <button class="videoPoster js-videoPoster" style="background-image:url(funnelimg/img.png);">Play
                            video</button>
                    </div>
                </main>
                <div class="instructor">
                    <div class="col-lg-3"></div>
                    <h1 class="hding1">Your Training Facilitator</h1>
                </div>

            </div>
        </div>
    </div>


    <div class="container mt-5">
        <div class="row">
            <!-- <div class="col-lg-6">
                <img class="card-img-left" src="funnelimg/linkdin.png">
            </div>
            <div class="col-lg-6">
                <img class="card-img-right" src="funnelimg/facebook.png">

            </div> -->
            <div class="col-lg-2"></div>
            <div class="col-lg-4 lg-4">
                <div class="card" style="background-color: #0066b2; border-radius: 10px;">
                    <div class="card-body">
                        <h3 class="card-title text-center text-light">BONUS 1</h3>
                        <div class="display-flex text-center mb-3">
                        <img class="mt-3" src="funnelimg/link.png" style="width: 50px;">
                        <h3 class="ml-2 mt-3 text-light">Linkedin Profile <br> WorkShop</h3>
                            </div>
                    </div>
                </div>
                <div class="free-icon1"><img class="" src="funnelimg/free.png" style="width: 100px;"></div>
                </div>
                <div class="col-lg-4 lg-4">
                <div class="card" style="background-color: #475993; border-radius: 10px;">
                    <div class="card-body">
                        <h3 class="card-title text-center text-light">BONUS 2</h3>
                        <div class="display-flex text-center mb-3">
                        <img class="mt-3" src="funnelimg/facebook.png" style="width: 50px;">
                        <h3 class="ml-2 mt-3 text-light">Facebook Group Alumni Access</h3>
                            </div>
                    </div>
                </div>
                <div class="free-icon"><img class="" src="funnelimg/free.png" style="width: 100px;"></div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">

            <!-- <div class="col-lg-4"></div>
            <div class="colm col-lg-4 register">
                <div class="heading1_btm">
                    <h1 class="hding1"><a class="hding1" href="funnel-form">Register Now</a></h1>
                </div>
            </div> -->
            <div class="col-lg-4"></div>
            <div class="col-lg-4 register">
                <div class="heading1_btm">
                    <h1 class="hding1"><a class="hding1" href="funnel-form">Register Now</a></h1>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection