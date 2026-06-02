<!--================ Start Header Menu Area =================-->
@extends('website.app')
<!--================ End Header Menu Area =================-->

<!--================ Start Home Banner Area =================-->
@section('content')

<style>

@import url(https://fonts.googleapis.com/css?family=Montserrat:500);

:root {
	/* Base font size */
	font-size: 10px;
}

*,
*::before,
*::after {
	box-sizing: border-box;
}

body {
	min-height: 100vh;
	background-color: #fafafa;
}

.container {
	max-width: 100rem;
	margin: 0 auto;
	padding: 0 2rem 2rem;
}
.header{
  margin-bottom: 50px;
}

.heading {
	font-family: "Montserrat", Arial, sans-serif;
	font-size: 4rem;
	font-weight: 500;
	line-height: 1.5;
	text-align: center;
	padding: 3.5rem 0;
	color: #1a1a1a;
}

.heading span {
	display: block;
}

.gallery {
	display: flex;
	flex-wrap: wrap;
	/* Compensate for excess margin on outer gallery flex items */
	margin: -1rem -1rem;
}

.gallery-item {
	/* Minimum width of 24rem and grow to fit available space */
	flex: 1 0 24rem;
	/* Margin value should be half of grid-gap value as margins on flex items don't collapse */
	margin: 1rem;
	box-shadow: 0.3rem 0.4rem 0.4rem rgba(0, 0, 0, 0.4);
	overflow: hidden;
}

.gallery-image {
	display: block;
	width: 100%;
	height: 100%;
	object-fit: cover;
	transition: transform 400ms ease-out;
}

.gallery-image:hover {
	transform: scale(1.15);
}


@supports (display: grid) {
	.gallery {
		display: grid;
		grid-template-columns: repeat(auto-fit, minmax(24rem, 1fr));
		grid-gap: 2rem;
	}

	.gallery,
	.gallery-item {
		margin: 0;
	}
}

.row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Create four equal columns that floats next to eachother */
.column {
  float: left;
  width: 25%;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

/* Hide the slides by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Caption text */
.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

img.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s;
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

 </style>


<div class="container">
<h1 class="heading"><span>& Flexbox Fallback</span></h1>


	<div class="gallery">

		<div class="gallery-item" >
			<img class="gallery-image" src="https://images.unsplash.com/photo-1488190211105-8b0e65b80b4e?w=500&h=500&fit=crop" onclick="openModal();currentSlide(1)" alt="img1">
        </div>

		<div class="gallery-item">
			<img class="gallery-image" src="https://images.unsplash.com/photo-1515260268569-9271009adfdb?w=500&h=500&fit=crop" onclick="openModal();currentSlide(2)" alt="img2">
		</div>

		<div class="gallery-item">
			<img class="gallery-image" src="https://images.unsplash.com/photo-1506045412240-22980140a405?w=500&h=500&fit=crop" onclick="openModal();currentSlide(3)" alt="img3">
		</div>

		<div class="gallery-item">
			<img class="gallery-image" src="https://images.unsplash.com/photo-1514041181368-bca62cceffcd?w=500&h=500&fit=crop" onclick="openModal();currentSlide(4)" alt="img4">
		</div>

		<div class="gallery-item">
			<img class="gallery-image" src="https://images.unsplash.com/photo-1445810694374-0a94739e4a03?w=500&h=500&fit=crop" onclick="openModal();currentSlide(5)" alt="img5">
		</div>

		<div class="gallery-item">
			<img class="gallery-image" src="https://images.unsplash.com/photo-1486334803289-1623f249dd1e?w=500&h=500&fit=crop" onclick="openModal();currentSlide(6)" alt="img6">
		</div>

	</div>

    <div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img src="img\Yourexcel-img\accounting.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
      <img src="img\Yourexcel-img\akber-bojani.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
      <img src="img\Yourexcel-img\mainpage1.PNG" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
      <img src="img\Yourexcel-img\financial-accounting.jpg" style="width:100%">
    </div>

    <!-- Next/previous controls -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <!-- Caption text -->
    <div class="caption-container">
      <p id="caption"></p>
    </div>

    <!-- Thumbnail image controls -->
    <div class="column">
      <img class="demo" src="img\Yourexcel-img\accounting.jpg" onclick="currentSlide(1)" alt="Nature">
    </div>

    <div class="column">
      <img class="demo" src="img\Yourexcel-img\accounting.jpg" onclick="currentSlide(2)" alt="Snow">
    </div>

    <div class="column">
      <img class="demo" src="img\Yourexcel-img\accounting.jpg" onclick="currentSlide(3)" alt="Mountains">
    </div>

    <div class="column">
      <img class="demo" src="img\Yourexcel-img\accounting.jpg" onclick="currentSlide(4)" alt="Lights">
    </div>
  </div>
</div>

</div>

        <!-- modal box Lead Form start  -->
<!-- Modal -->
<div class="modal fade" id="Lead-form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onClick="window.location.reload();">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="register_form">
                    <img src="img/Yourexcel-img/excel-logo-new.png" class="Logo" alt="">
                    <h3 style="text-align: lef;">Enquire Now</h3>
                    <p style="text-align: lef;">our representative will contact you.</p>
                    <form class="form_area" action="{{url('nomanform')}}" method="POST">
                    @csrf
                    <div class="row">
                            <div class="col-lg-12 form_group">
                                <input name="name" placeholder="Your Name" required="" type="text">
                                <input name="phone" id="phone" placeholder="Phone No" required="" type="tel">
                                <!-- <input name="datetime" placeholder="Date & Time" required="" type="datetime-local"> -->
                                <input name="email" placeholder="Your Email Address"
                                    pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" required=""
                                    type="email">
                                <!-- <input name="coursesintrested" placeholder="Course You are Intrested In " required=""
                                    type="text"> -->
                                <!-- <input type="search" placeholder="Type of Courses"> -->
                                <select class="selectpicker" name="coursesintrested" id="coursesintrested" multiple
                                    aria-label="Default select example" data-live-search="true"
                                    placeholder="Choose from dropdown list">
                                    <!-- <option value="Choose from dropdown list" selected readonly>Choose from dropdown list</option> -->
                                    <option value="Financial Modeling and Analysis">Financial Modeling and Analysis</option>
                                    <option value="Dashboard Reporting">Dashboard Reporting</option>
                                    <option value="Advanced MS Excel">Advanced MS Excel</option>
                                    <option value="Data Analytics with Tableau">Data Analytics with Tableau</option>
                                    <option value="Computerized Accounting">Computerized Accounting</option>
                                    <option value="Financial Accounting">Financial Accounting</option>
                                    <option value="Other">Other</option>
                                </select>
                                <input name="comments" placeholder="Comments" type="text" required="">
                                <div class="captcha">
                                    <div class="spinner">
                                        <label>
                                            <input type="checkbox" onclick="$(this).attr('disabled','disabled');"
                                                required>
                                            <span class="checkmark"><span>&nbsp;</span></span>
                                        </label>
                                    </div>
                                    <div class="text1">
                                        I'm not a robot
                                    </div>
                                    <div class="logo">
                                        <img src="img/Yourexcel-img/captcha.PNG" />
                                        <p>reCAPTCHA</p>
                                        <!-- <small>Privacy - Terms</small> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 text-center">
                                <button type="submit" id="submit" class="primary-btn primary-btnn">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modal box Lead Form start  -->

    </div>
    <script>
  $(document).on("click", '[data-toggle="lightbox"]', function(event) {
  event.preventDefault();
  $(this).ekkoLightbox();
});

function openModal() {
  document.getElementById("myModal").style.display = "block";
}

// Close the Modal
function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}

 </script>
</section>
@endsection
<!-- ====================== End CEO Area ======================== -->