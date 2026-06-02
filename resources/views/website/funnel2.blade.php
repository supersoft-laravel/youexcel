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

    .img-logo1 {
        width: 170%;
        margin-left: -90px;
    }

    .img-logo2 {
        width: 100%;
    }

    .img-logo3 {
        width: 164%;
        margin-left: -50px;
    }

    .img-logo4 {
        width: 87%;
        margin-left: 16px;
    }

    .img-logo5 {
        width: 106%;
    }

    .imagepic {
        width: 100%;
        border-radius: 7px;
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
        padding-top: 60px;
        border-radius: 20px;
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
        border-radius: 25px !important;
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
        border-radius: 25px !important;
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
        left: 43%;
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
        top: 0px;
        background-repeat: no-repeat;
        outline: none;
        width: 220px;
    }

    .btn:not(:disabled):not(.disabled) {
        cursor: pointer;
        background-color: #0066b2;
        border-radius: 4px;
        height: 60px;
        width: 250px;
        color: #fff;
    }


    /* LIST Funnel2 */

    .lii {
        color: #7b838a;
        list-style: none;
        position: relative;
        padding-left: 10px;
        font-weight: 500;
        line-height: 3;
        font-size: 20px;
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
        left: -30px;
        color: #318ca0;
        font-size: 25px;
        margin-top: -6px;
    }

    li.one:before {
        content: "\2713";
    }

    .heading-funnel2 {
        padding-top: 30px;
        padding-bottom: 30px;
        font-size: 32px;
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
        margin-top: 20px;
        margin-bottom: 65px;
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
        margin-top: 65px;
        /* text-align: center; */
        margin-left: 390px;
    }

    .logo-item1 {
        height: 50%;
    }

    .pragraph-line {
        text-align: center;
        padding: 40px;
        font-size: 22px;
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

    .img-logo2 {
        width: 160px;
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

    /* Media Query Start */
    @media only screen and (max-width: 600px) {
        .btn:not(:disabled):not(.disabled) {
            margin-left: -66px;
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
            margin-top: 65px;
            /* text-align: center; */
            margin-left: 10px;
        }

        .hding1 {
            font-size: 29px;
            color: white !important;
            font-family: 'Open Sans', sans-serif;
            font-weight: 700;
        }

        .pragraph-line {
            text-align: center;
            padding: 40px;
            font-size: 18px;
            font-weight: 500;
            font-family: 'Open Sans', sans-serif;
            margin-top: -230px;
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
            width: 100%;
        }

        .hding1 {
            font-size: 20px;
            color: white !important;
            font-family: 'Open Sans', sans-serif;
            font-weight: 700;
            margin-top: 6px;
        }

        .lii {
            color: #7b838a;
            list-style: none;
            position: relative;
            padding-left: 50px;
            font-weight: 500;
            line-height: 2;
            font-size: 18px;
            font-family: 'Open Sans', sans-serif;
        }

        .h2-lst {
            color: black;
            font-size: 29px;
            font-family: 'Open Sans', sans-serif;
        }

        li:before {
            font-family: FontAwesome;
            position: absolute;
            left: 0;
            color: #318ca0;
            font-size: 18px;
        }

        .head-lst {
            color: #0066B2;
            font-size: 27px;
            font-family: 'Open Sans', sans-serif;
            margin-top: 18px;
            margin-bottom: 15px;
        }

        body {
            width: 98%;
        }

        .heading-funnel2 {
            padding-top: 30px;
            padding-bottom: 30px;
            font-size: 26px;
            text-align: center;
            font-weight: 700;
            font-family: 'Open Sans', sans-serif;
        }

        .head-list {
            padding-top: 10px;
            color: #0066B2;
            font-weight: 700;
            font-size: 31px;
            font-family: 'Open Sans', sans-serif;
        }

        .organized {
            font-size: 32px;
            line-height: 35px;
            font-weight: bold;
            margin-bottom: 15px;
            text-align: initial;
            margin-top: 20px;
            font-family: 'Open Sans', sans-serif;
        }

        .img-logo2 {
            width: 90%;
            height: 155%;
        }

        .imagepic {
            width: 100%;
            margin-bottom: 20px;
        }

        .videos-first {
            opacity: 1;
            height: 240px;
            margin-top: -20px;
        }

        .feed-item--video .feed-item__banner {
            height: 260px;
            background-color: #232323;
            margin-bottom: 0;
            border-radius: 25px;
        }

        .img-logo1 {
            width: 100%;
            margin-left: 0px;
        }

        .img-logo2 {
            width: 63%;
            margin-top: 60px;
            margin-left: 15px;
        }

        .img-logo3 {
            width: 105%;
            margin-left: 0px;
            margin-top: 45px
        }

        .img-logo4 {
            width: 62%;
            margin-left: 25px;
            margin-top: 45px;
            height: 230px;
        }

        .img-logo5 {
            width: 75%;
            margin-top: 15px;
            margin-left: 10px;
            margin-bottom: -40px;
        }

        .col-img-center {
            text-align: center;
        }

        .lii {
            margin-left: -49px;
            font-size: 20px;
            margin-top: 0px;
        }

        li:before {
            margin-top: 0px;
            margin-left: 20px;
        }

        .feed-item--video .btn--play {
            left: 33% !important;
            top: 50%;
        }

        .col-1 {
            width: 8.33%;
        }

        .col-2 {
            width: 16.66%;
        }

        .col-3 {
            width: 25%;
        }

        .col-4 {
            width: 33.33%;
        }

        .col-5 {
            width: 41.66%;
        }

        .col-6 {
            width: 50%;
        }

        .col-7 {
            width: 58.33%;
        }

        .col-8 {
            width: 66.66%;
        }

        .col-9 {
            width: 75%;
        }

        .col-10 {
            width: 83.33%;
        }

        .col-11 {
            width: 91.66%;
        }

        .col-12 {
            width: 100%;
        }
        .videoWrapper169 {
        padding-top: 56%;
        border-radius: 10px;
        margin-bottom: 50px;
    }
    }


    /* Media Query End */
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
        height: 270px;
        background-color: transparent;
        border-radius: 8px;
    }

    .videoPoster {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        width: 100%;
        height: 270px;
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
        top: 53%;
        left: 50%;
        width: 55px;
        height: 55px;
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
        top: 53%;
        left: 50%;
        width: 0;
        height: 0px;
        margin: -22px 0 0 -17px;
        border-left: 17px solid #fff;
        border-top: 10px solid transparent;
        border-bottom: 10px solid transparent;
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
    </style>
</head>
@section('content')
<section class="ftco-section" style="padding-top: 150px;">
    <div class="col-lg-12 text-center mb-4">
        <img src="img/Yourexcel-img/excel-logo-new.png" alt="" style="width: 190px;margin-top: -120px;">
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

        <div class="main-video-container">
            <div class="video-player-main" id="player">
                <iframe id="videoplay" height="400" src="funnelimg\mov_bbb.mp4" type="video/mp4" preload="none"
                    controls="controls" frameborder="0" allowfullscreen></iframe>

                <div class="feed-item--video feed-video">

                    <div class="feed-item__banner init videos-first" role="banner">
                        <a href="#/" class="click">

                            <img class="img-first" src="funnelimg\f1.png" data-src="funnelimg\f1.png" type="video/mp4"
                                preload="none" controls="controls">

                            <button type="button" class="btn btn--play">
                                <span class="sprite sprite--play">
                                    <!-- <i class="fa fa-play " aria-hidden="true"></i> -->
                                    Yes! I want to watch the Demo
                                </span>
                            </button>



                        </a>

                    </div>

                </div>

            </div>
        </div>
    </div>







    <div class="container">
        <div class="row">
            <div class="col-lg-12 heading-funnel2">
                <h2 class="heading-funnel2">Can You See Why So Many Peoples Just Like You Are Enrolling In Our Program
                </h2>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- <div class="imgrow">
                    <img class="imagepic" src="funnelimg\1.png" alt="Italian Trulli">
                </div> -->
                <main>
                    <div class="videoWrapper videoWrapper169 js-videoWrapper">
                        <iframe class="videoIframe js-videoIframe" src="funnelimg/Youexcel.mp4" frameborder="0"
                            allowTransparency="true" allowfullscreen data-src="funnelimg/Youexcel.mp4"></iframe>
                        <!-- the poster frame - in the form of a button to make it keyboard accessible -->
                        <button class="videoPoster js-videoPoster" style="background-image:url(funnelimg/1.png);">Play
                            video</button>
                    </div>
                </main>
            </div>
            <div class="col-lg-3 col-6">
                <!-- <div class="imgrow">
                    <img class="imagepic" src="funnelimg\2.png" alt="Italian Trulli">
                </div> -->
                <main>
                    <div class="videoWrapper videoWrapper169 js-videoWrapper">
                        <iframe class="videoIframe js-videoIframe" src="funnelimg/Youexcel.mp4" frameborder="0"
                            allowTransparency="true" allowfullscreen data-src="funnelimg/Youexcel.mp4"></iframe>
                        <!-- the poster frame - in the form of a button to make it keyboard accessible -->
                        <button class="videoPoster js-videoPoster" style="background-image:url(funnelimg/2.png);">Play
                            video</button>
                    </div>
                </main>
            </div>
            <div class="col-lg-3 col-6">
                <!-- <div class="imgrow">
                    <img class="imagepic" src="funnelimg\3.png" alt="Italian Trulli">
                </div> -->
                <main>
                    <div class="videoWrapper videoWrapper169 js-videoWrapper">
                        <iframe class="videoIframe js-videoIframe" src="funnelimg/Youexcel.mp4" frameborder="0"
                            allowTransparency="true" allowfullscreen data-src="funnelimg/Youexcel.mp4"></iframe>
                        <!-- the poster frame - in the form of a button to make it keyboard accessible -->
                        <button class="videoPoster js-videoPoster" style="background-image:url(funnelimg/3.png);">Play
                            video</button>
                    </div>
                </main>
            </div>
            <div class="col-lg-3 col-6">
                <!-- <div class="imgrow">
                    <img class="imagepic" src="funnelimg\4.png" alt="Italian Trulli">
                </div> -->
                  <main>
                    <div class="videoWrapper videoWrapper169 js-videoWrapper">
                        <iframe class="videoIframe js-videoIframe" src="funnelimg/Youexcel.mp4" frameborder="0"
                            allowTransparency="true" allowfullscreen data-src="funnelimg/Youexcel.mp4"></iframe>
                        <!-- the poster frame - in the form of a button to make it keyboard accessible -->
                        <button class="videoPoster js-videoPoster" style="background-image:url(funnelimg/4.png);">Play
                            video</button>
                    </div>
                </main>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="head-list">
                    <h2 class="head-list">Why Should You Learn Financial Modeling And Analysis</h2>
                    <h2 class="head-lst">From The Youexcel Team?</h2>
                    <h2 class="h2-lst">Learn From A Team With:</h2>
                </div>



                <div class="bullet">
                    <ul class="ull">
                        <li class="one lii">
                            Over 5 Years Of Experience With Financial Modeling And Analysis.
                        </li>
                        <li class="one lii">
                            Face To Face Or Online Training To Get A Successful Career.
                        </li>
                        <li class="one lii">
                            Free Linkedin Profile Workshop.
                        </li>
                        <li class="one lii">
                            Free Life-time Facebook Group Alumni Access.
                        </li>
                        <li class="one lii">
                            Guest Speaker Session By Pro Freelancers.
                        </li>
                        <li class="one lii">
                            Plus Get Free Specials Bonuses.
                        </li>
                    </ul>

                </div>
            </div>
        </div>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-ligh mb-5 organized">Learning Outcomes</h2>
                <div class="col-lg-12">
                <img src="funnelimg/outcome.PNG" alt="" style="width: 100%">
            </div>
            </div>
        </div>
    </div>


    <!-- <section class="logo-section section_gap section-bottom-ga registration_are" style="background-color: #fff;"> -->
    <div class="container">
        <div class="row mt-3">
            <div class="col-lg-12">
                <!-- <div class="main_title" data-aos="fade-up"> -->
                <h2 class="text-ligh mb-5 organized">Officially Recognized By</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-2 col-img-center">
                <div class="logo-item1">
                    <img class="img-logo1" src="funnelimg\a.png" alt="logo_KNKX">
                </div>
            </div>
            <div class="col-lg-2 col-img-center">
                <div class="logo-item1">
                    <img class="img-logo5" src="funnelimg\navttc.png" alt="logo_KNKX">
                </div>
            </div>
            <div class="col-lg-2 col-img-center">
                <div class="logo-item1">
                    <img class="img-logo2" src="funnelimg\b.png" alt="logo_KNKX">
                </div>
            </div>
            <div class="col-lg-2 col-img-center">
                <div class="logo-item1">
                    <img class="img-logo3" src="funnelimg\c.png" alt="logo_KNKX">
                </div>
            </div>
            <div class="col-lg-2 col-img-center">
                <div class="logo-item1">
                    <img class="img-logo4" src="funnelimg\d.png" alt="logo_KNKX">
                </div>
            </div>
        </div>
    </div>
    <!-- 
    <div class="page-center">
        <div class="logo-inner mt-5 mb-5">
            <div class="logo-block">
                <div class="logo-block-inner responsive">
                
                    <div>
                        <div class="logo-item1">
                            <img src="funnelimg\a.png" alt="logo_KNKX">
                        </div>
                    </div>

                    <div>
                        <div class="logo-item1">
                            <img src="funnelimg\b.png" alt="Logo HIGH RES_Enginuity Podcast Group">
                        </div>
                    </div>

                    <div>
                        <div class="logo-item1">
                            <img src="funnelimg\c.png" alt="Logo_PRX">
                        </div>
                    </div>

                    <div>
                        <div class="logo-item1">
                            <img src="funnelimg\d.png" alt="logo_KUER">
                        </div>
                    </div>
                    <div>
                        <div class="logo-item1">
                            <img src="funnelimg\e.png" alt="logo_KUER">
                        </div>
                    </div> -->

    <!-- </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
</section> -->

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading1 heading-started">
                    <h1 class="hding1"><a class="hding1" href="funnel-form">Register Now</a></h1>
                </div>
            </div>
            <div class="pragraph-line">
                <p>The Choice Is Simple: Do What You're Doing Now</p>
                <p>Or Take Advantage Of This Amazing Opportunity</p>
            </div>
        </div>
    </div>


</section>
@endsection