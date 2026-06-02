
@extends('website.app')
   
  @push('style')  
   
        /* Icon set - http://ionicons.com */

        @import url(https://fonts.googleapis.com/css?family=Raleway:400,500);

        .tp-grid {
	list-style-type: none;
	position: relative;
	display: block;
	margin-top: 45px;
	z-index: 9;
}
.tp-grid li {
	margin-bottom: 30px;
	position: absolute;
	display: none;
	overflow: hidden;
	box-shadow: 0 2px 3px rgba(0,0,0,0.2);
	-webkit-backface-visibility: hidden;
	-moz-backface-visibility: hidden;
	-o-backface-visibility: hidden;
	-ms-backface-visibility: hidden;
	backface-visibility: hidden;
}
.ie8 .tp-grid li {
	margin-left: 9px !important
}
.tp-grid li a {
	border: 7px solid #3747FF;
}
.no-js .tp-grid li {
	position: relative;
	display: inline-block;
}
.tp-grid li a {
	display: block;
	outline: none;
}
.tp-grid li img {
	display: block;
	border: none;
}
.tp-info,
.tp-title {
	position: absolute;
	background: #fff;
	line-height: 20px;
	color: #333;
	bottom: 6%;
	max-width: 75%;
	padding: 10px;
	font-weight: 700;
	left: -100%;
	box-shadow: 
		1px 1px 1px rgba(0,0,0,0.1),
		5px 0 5px -3px rgba(0,0,0,0.4),
		inset 0 0 5px rgba(0,0,0,0.04);
}
.touch .tp-info {
	left: 0px;
}
.no-touch .tp-info {
	-webkit-transition: all 0.3s ease-in-out;
	-moz-transition: all 0.3s ease-in-out;
	-o-transition: all 0.3s ease-in-out;
	-ms-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out;
}

.no-touch .tp-grid li:hover .tp-info {
	-webkit-transition-delay: 150ms;
	-moz-transition-delay: 150ms;
	-o-transition-delay: 150ms;
	-ms-transition-delay: 150ms;
	transition-delay: 150ms;
}
.no-touch .tp-open li:hover .tp-info {
	left: 0px;
}
.tp-title {
	padding: 10px 35px 10px 20px;
	left: 0px;
}
.tp-title span:nth-child(2){
	color: #aaa;
	padding: 0 5px;
	background: #F7F7F7;
	right: 0px;
	height: 100%;
	line-height: 40px;
	top: 0px;
	position: absolute;
	display: block;
}
.topbar {
	position: relative;
}
.tback {
	position: absolute;
	right: 0;
	top: -4px;
	cursor: pointer;
	display: none;
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}
.no-touch .tback:hover {}
.topbar h2,
.topbar h3 {
	display: inline-block;
	font-weight: 300;
	font-size: 40px;
	width: 49%;
	min-width: 320px;
}
.topbar h2 {
	padding-right: 20px;
	color: #666;
}
.topbar h3 {
	text-align: right;
	padding-left: 20px;
	color: #aaa;
}
/* Loader */
.loader {
	left: 50%;
	position: absolute;
	margin-left: -120px;
}
.loader i {
	display: inline-block;
	width: 40px;
	height: 40px;
	-webkit-animation: loading 1s linear infinite forwards;
	-moz-animation: loading 1s linear infinite forwards;
	-o-animation: loading 1s linear infinite forwards;
	-ms-animation: loading 1s linear infinite forwards;
	animation: loading 1s linear infinite forwards;
}
.cssanimations .loader span {
	display: none;
}
.no-cssanimations .loader i {
	display: none;
}
.loader i:nth-child(2){
	-webkit-animation-delay: 0.1s;
	-moz-animation-delay: 0.1s;
	-o-animation-delay: 0.1s;
	-ms-animation-delay: 0.1s;
	animation-delay: 0.1s;
}
.loader i:nth-child(3){
	-webkit-animation-delay: 0.2s;
	-moz-animation-delay: 0.2s;
	-o-animation-delay: 0.2s;
	-ms-animation-delay: 0.2s;
	animation-delay: 0.2s;
}
.loader i:nth-child(4){
	-webkit-animation-delay: 0.3s;
	-moz-animation-delay: 0.3s;
	-o-animation-delay: 0.3s;
	-ms-animation-delay: 0.3s;
	animation-delay: 0.3s;
}
.loader i:nth-child(5){
	-webkit-animation-delay: 0.4s;
	-moz-animation-delay: 0.4s;
	-o-animation-delay: 0.4s;
	-ms-animation-delay: 0.4s;
	animation-delay: 0.4s;
}
.loader i:nth-child(6){
	-webkit-animation-delay: 0.5s;
	-moz-animation-delay: 0.5s;
	-o-animation-delay: 0.5s;
	-ms-animation-delay: 0.5s;
	animation-delay: 0.5s;
}
@-webkit-keyframes loading{
	0%{
		opacity: 0;
		background-color: rgba(255,255,255,0.9);
	}

	100%{
		opacity: 1;
		-webkit-transform: scale(0.25) rotate(75deg);
		background-color: rgba(155,155,155,0.9);
	}
}

@-moz-keyframes loading{
	0%{
		opacity: 0;
		background-color: rgba(255,255,255,0.9);
	}

	100%{
		opacity: 1;
		-moz-transform: scale(0.25) rotate(75deg);
		background-color: rgba(155,155,155,0.9);
	}
}

@-o-keyframes loading{
	0%{
		opacity: 0;
		background-color: rgba(255,255,255,0.9);
	}

	100%{
		opacity: 1;
		-o-transform: scale(0.25) rotate(75deg);
		background-color: rgba(155,155,155,0.9);
	}
}

@-ms-keyframes loading{
	0%{
		opacity: 0;
		background-color: rgba(255,255,255,0.9);
	}

	100%{
		opacity: 1;
		-ms-transform: scale(0.25) rotate(75deg);
		background-color: rgba(155,155,155,0.9);
	}
}

@keyframes loading{
	0%{
		opacity: 0;
		background-color: rgba(255,255,255,0.9);
	}

	100%{
		opacity: 1;
		transform: scale(0.25) rotate(75deg);
		background-color: rgba(155,155,155,0.9);
	}
}

@endpush
@section('content')
    <section class="view-courses-bg ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8">
                            <h2 class="text-center" style="margin-top: 150px;">Gallery</h2>
                        </div>
                    </div>
                </div>

            </div>
   
        </section>
		<div class="container-fluid back_to_up " style="margin-left:20px; ">
                    <div class="row row-fluid clearfix mbf">
                        <div class="posts">
                            <div class="def-block" style="min-height: 1px;">
        
                            <div class="topbar">
                                <div id="close" class="tbutton small tback btn btn-success"><span>< Back to Albums</span></div>
                             
                            </div>
						</div>

                        
                            {{-- <ul id="tp-grid" class="tp-grid "> --}}
							@foreach ($dataGroupedByYear as $year => $items)								
							{{-- {{ dd($dataGroupedByYear) }} --}}
							
								<h3  data-year="{{ $year }}"></h3>
								<h3>{{ $year }}</h3>
								<ul id="tp-grid-{{ $year }}" class="tp-grid">
									@foreach ($items as $item)
									
										{{-- <li data-pile="{{ $item->category->cat_name }}" class="grid_3">
											<a href="../storage/app/public/{{ $item->image }}" data-gal="photo[{{ $item->category->cat_name }}]">
												<img src="../storage/app/public/{{ $item->image }}" alt="#{{ $item->id }}" width="500px" style="height: 500px" />
											</a>
										</li> --}}

										<li data-pile="{{ $item->category->cat_name }}" class="grid_3">
											<a href="{{ asset('gallery_images/' . $item->image) }}" data-gal="photo[{{ $item->category->cat_name }}]">
												<img src="{{ asset('gallery_images/' . $item->image) }}" alt="#{{ $item->id }}" width="500px" style="height: 500px" />
											</a>
										</li>
									
									@endforeach
								</ul><br>
								<br><br><br>
								<br><br>
							@endforeach
                          
							<br>
							<br><br><br><br><br><br>
                            </div><!-- def block -->
                        </div><!-- posts -->
        
                    </div><!-- row clearfix -->
                </div>
            

@endsection

@push('scripts')


<script type="text/javascript" src="{{asset('js/modernizr.js')}}"></script>
<script type="text/javascript" src="{{asset('js/codevz.js')}}"></script>
<script type="text/javascript" src="{{asset('js/stapel.js')}}"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/stapes/1.0.0/stapes.min.js" integrity="sha512-ZC4ofKP2dGxuku3/VDWxznZzumALYxl++B8gRdORDOlti05+YY2f4rPEN3j7FEA87a0k1geyTdjLIJbtMrr6aw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
<script type="text/javascript" src="{{asset('js/prettyPhoto.js')}}"></script>
<script>
    // Gallery
	
    // Initialize Stapel for each ul.tp-grid
    $('.tp-grid').each(function () {
        var $grid = $(this); // Current ul
        var $name = $('#name');
        var $close = $('#close');

        var stapel = $grid.stapel({
            randomAngle: true,
            delay: 100,
            gutter: 50, // Adjust spacing between items
            pileAngles: 3,
            onBeforeOpen: function (pileName) {
                $name.html(pileName); // Update the header with pile name
            },
            onAfterOpen: function (pileName) {
                $("a[data-gal^='photo']").prettyPhoto({ theme: 'dark_rounded' }); // Initialize PrettyPhoto
                $close.show();
            },
        });

        $close.on('click', function () {
            $("a[data-gal^='photo']").prettyPhoto().unbind();
            $close.hide();
            $name.empty().html('Photo Gallery');
            stapel.closePile();
        });
    });

    // PrettyPhoto for gallery links
    if ($("a[data-gal^='photo']")[0]) {
        $("a[data-gal^='photo']").prettyPhoto({ theme: 'dark_rounded' });
    }

	// prettyPhoto
	if ($("a[data-gal^='photo']")[0]) {
		$("a[data-gal^='photo']").prettyPhoto({theme: 'dark_rounded'});
	}
	// quicksand
	if ($(".filter")[0]) {
		var $portfolioClone = $(".portfolio").clone();
		$(".filter a").on( 'click', function (e) {
			$(".filter li").removeClass("current");
			var $filterClass = $(this).parent().attr("class");
			if ($filterClass === "all") {
				var $filteredPortfolio = $portfolioClone.find("li");
			} else {
				var $filteredPortfolio = $portfolioClone.find("li[data-type~=" + $filterClass + "]");
			}
			// Call quicksand
			$(".portfolio").quicksand($filteredPortfolio, {
				duration: 600,
				easing: 'easeOutExpo',
				adjustHeight: 'dynamic'
			}, function () {
				$(".portfolio a[data-gal^='photo']").prettyPhoto({
					theme: 'facebook',
					autoplay_slideshow: false,
					overlay_gallery: false,
					show_title: false
				});
				if (!(jQuery.browser.msie && parseInt(jQuery.browser.version, 10) < 6)) {
					jQuery('.hover-fx').each(function () {
						var overImg = jQuery(this).find('.overlay');
						jQuery(this).hover(function () {
							overImg.stop().fadeIn();
							$(this).removeClass('flipOutX');
						}, function () {
							overImg.stop().fadeOut('fast');
							$(this).addClass('flipOutX');
						});
					});
				}
			});
			$(this).parent().addClass("current");
			e.preventDefault();
		});
	}
    if ($("#flickr-photos")[0]) {
		$('#flickr-photos').jflickrfeed({
			limit: 6,
			qstrings: {
				id: '52617155@N08'
			},
			itemTemplate: '<li>' + '<a href="@{{image_b}}" data-gal="photo[flickr]"><img src="@{{image_s}}" alt="@{{title}}" /></a>' + '</li>',
			itemCallback: function (data) {
				$("a[data-gal^='photo']").prettyPhoto({theme: 'dark_rounded'});
			}
		});
	}

</script>
@endpush
