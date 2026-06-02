<!--================ Start Header Menu Area =================-->
@extends('website.app')
<!--================ End Header Menu Area =================-->

<!--================ Start Home Banner Area =================-->
@section('content')

<style>

@import url('https://fonts.googleapis.com/css?family=Montserrat:400,700,900');

body {
  font-family: Montserrat;
  line-height: 1.4;
  font-size: 18px;
}
img {
  max-width: 100%;
  width: auto;
  height: auto;
}
a {
  color: #08c;
  font-weight: bold;
  text-decoration: none;
}
.hentry {
  max-width: 46em;
  margin: auto;
}
.entry-title {
  grid-area: header;
  
  text-transform: uppercase;
  margin: 1em 0 0.5em;
  line-height: 1;
}
.entry-meta {
  grid-area: meta;
  margin-bottom: 2em;
}
.entry-content {
  grid-area: content;
}
.entry-footer {
  grid-area: footer;
  text-align: right;
  border-top: 1px solid #777;
  margin-top: 1em;
}
.author, .date {
  color: #777;
}
.author+.date:before {
    content: " | ";
}

@media (min-width: 40em) {
  .hentry {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-column-gap: 20px;
    grid-template-areas: "header header header header" "meta meta meta meta" "featimg featimg featimg featimg" "content content content content" "footer footer footer footer";
  }
  .entry-title {
    font-size: 2.5em;
    margin-bottom: 0;
  }
}
@media (min-width: 50em) {
  .hentry {
    grid-template-areas: "header header header header" "featimg featimg featimg featimg" "meta content content content" "footer footer footer footer";
  }
  .author, .date {
    display: block;
    margin: 1em 0;
  }
  .author+.date:before {
    display: none;
  }
  .entry-title {
    font-size: 3m;
    margin-bottom: 0.7em;
  }
}

</style>

<article class="hentry">

  <div class="featured-image">
    <img src="https://images.unsplash.com/photo-1531096187418-86ac6b31baea?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=9d6cd4e7c48dfc78f5e9c0fb07b692f0&auto=format&fit=crop&w=1350&q=80" alt="">
  </div>
   <h1 class="entry-title">Event 1</h1>
  <div class="entry-meta">
    <p><span class="author">Written by <a href="#">Author name</a></span> <span class="date">Thursday, July 14, 2022</span></p>
  </div>
  <div class="entry-content">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, necessitatibus, veritatis voluptates corrupti ipsum minus accusamus dicta mollitia inventore doloribus omnis ex! Nemo doloribus molestias saepe, rerum possimus molestiae est.</p>
    <p>Obcaecati laboriosam non sunt, consequuntur nam quae repudiandae animi dolore atque aut aliquam aspernatur praesentium officiis magnam esse aliquid eveniet veritatis consequatur ducimus! Totam aperiam ex porro nostrum rem quos!</p>
    <p>A quos tenetur dolor laboriosam, eveniet ex qui ullam quibusdam magnam eius debitis possimus nesciunt distinctio dolores dignissimos! Alias explicabo maiores cum iure inventore harum deleniti odio doloribus sequi magnam!</p>
    <h2>Secondary Title</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, omnis quo? Hic assumenda adipisci cupiditate labore et animi illum magnam at. Sed est nobis similique doloribus? Culpa laudantium laboriosam asperiores?</p>
    <h2>Another One</h2>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos rem error laudantium eveniet, sed, eius rerum omnis cupiditate odio tenetur accusantium quaerat explicabo provident vero a qui optio. Ut, magni.</p>
    <p>Enim natus modi aspernatur eaque, facere eius nihil perspiciatis at? Temporibus, sequi cum similique veniam corrupti, obcaecati eligendi expedita rerum necessitatibus iste exercitationem voluptatem, maiores voluptatibus impedit enim assumenda quisquam.</p>
    
    
  </div>
  </article>

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
 </section>
@endsection
<!-- ====================== End CEO Area ======================== -->