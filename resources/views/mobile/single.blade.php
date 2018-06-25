<!DOCTYPE html>
<html lang="zxx">
<head>
	<meta charset="UTF-8">
	<title>Country House Realty</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-touch-fullscreen" content="yes">
	<meta name="HandheldFriendly" content="True">

	<link rel="stylesheet" href="/mobile/css/materialize.css">
	<link rel="stylesheet" href="/mobile/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="/mobile/css/normalize.css">
	<link rel="stylesheet" href="/mobile/css/owl.carousel.css">
	<link rel="stylesheet" href="/mobile/css/owl.theme.css">
	<link rel="stylesheet" href="/mobile/css/owl.transitions.css">
	<link rel="stylesheet" href="/mobile/css/fakeLoader.css">
	<link rel="stylesheet" href="/mobile/css/magnific-popup.css">
	<link rel="stylesheet" href="/mobile/css/style.css">

	<link rel="shortcut icon" href="/upload/favicon.png">

</head>
<body>

	<!-- navbar top -->
	<div class="navbar-top">
		<div class="side-nav-panel-left">
			<!-- site brand	 -->
			<div class="site-brand">
				<a href="/"><h1><span><i class="fa fa-key"></i></span> 8-916-7301-777</h1></a>
			</div>
			<!-- end site brand	 -->
		</div>
		<div class="triangle-border"></div>
		<div class="side-nav-panel-right">
			<a href="#" data-activates="slide-out-left" class="side-nav-right"><i class="fa fa-bars"></i></a>
		</div>
	</div>
	<!-- end navbar top -->

	<!-- side nav left-->
	<div class="side-nav-panel-left">
		<ul id="slide-out-left" class="side-nav side-nav-panel collapsible">
			<li class="profil">
				<img src="/upload/logo.png" alt="">
				{{-- <h2>John Doe</h2>
				<h6>Mobile Developer</h6> --}}
			</li>
			<li><a href=""><i class="fa fa-home"></i>All Objects</a></li>
			<li><a href=""><i class="fa fa-home"></i>Sale</a></li>
			<li><a href=""><i class="fa fa-home"></i>Rent</a></li>
			<li><a href=""><i class="fa fa-user"></i>About Us</a></li>
			<li><a href=""><i class="fa fa-envelope-o"></i>Contact Us</a></li>
			<li><a href=""><i class="fa fa-sign-in"></i>Login</a></li>
			<li><a href=""><i class="fa fa-user-plus"></i>Register</a></li>
		</ul>
	</div>
	<!-- end side nav left-->


	<!-- single -->
	<div class="pages section">
		<div class="container">
			<div class="single">
				<div class="properties">
					<div id="owl-properties">
						@foreach($property_gallery_images as $key=>$gallery_img)
						<div class="item">
							{{-- <div class="img-container" data-bg-img="{{ URL::asset('upload/gallery/'.$gallery_img->image_name) }}"></div> --}}
							<a href="{{ URL::asset('upload/gallery/'.$gallery_img->image_name) }}" class="image-popup"><img class="responsive-img" src="{{ URL::asset('upload/gallery/'.$gallery_img->image_name) }}" alt="sample image"></a>
						</div>
						@endforeach
						{{-- <div class="item">
							<a href="img/real-estate1.jpg" class="image-popup" data-effect="mfp-zoom-in"><img class="responsive-img" src="img/real-estate1.jpg" alt="sample image"></a>
						</div> --}}
					</div>
				</div>
				<div class="single-content">
					<h5>{{ $property->property_name }}</h5>
					<span><i class="fa fa-map-marker"></i>{{ $property->address }}</span>
					{{-- <div class="date">
						<span><i class="fa fa-user"></i>Posted By: <a href="">John Doe</a></span>
						<span><i class="fa fa-calendar"></i> Dec 22, 2018</span>
					</div> --}}
					<div class="line"></div>
					<p>{!! stripslashes($property->description) !!}</p>

					<h6>Характеристики объекта</h6>
					<ul>
						<li>Название: {{ $property->property_name }}</li>
						<li>Цена: {{$property->currency.' '.number_format($property->price)}}</li>
						<li>Цель: {{ $property->property_purpose }}</li>
						<li>МКАД: {{$property->range}} км</li>
						<li>Участок: {{$property->land_area}} соток</li>
						<li>Дом: {{$property->build_area}} м<sup>2</sup></li>
						{{-- <li>bedroom: 3</li>
						<li>Bathroom: 2</li>
						<li>Car Park: 2</li> --}}
					</ul>

					<p>Более подробные сведения представлены в компьютерной версии сайта.</p>
<br><br>
					{{-- <h6>Property Features</h6>
					<ul>
						<li>Sport Arena</li>
						<li>Food</li>
						<li>Wifi</li>
						<li>Pool Tour</li>
						<li>Orchards</li>
						<li>Airport</li>
						<li>Univercity</li>
					</ul> --}}

					{{-- <div class="share-post">
						<ul>
							<li><a href=""><i class="fa fa-facebook"></i></a></li>
							<li><a href=""><i class="fa fa-twitter"></i></a></li>
							<li><a href=""><i class="fa fa-google"></i></a></li>
							<li><a href=""><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="comment">
					<h5>1 Comments</h5>
					<div class="comment-details">
						<div class="row">
							<div class="col s3">
								<img src="img/user-comment.jpg" alt="">
							</div>
							<div class="col s9">
								<div class="comment-title">
									<span><strong>John Doe</strong> | Juni 5, 2016 at 9:24 am | <a href="">Reply</a></span>
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis accusantium corrupti asperiores et praesentium dolore.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="comment-form">
					<div class="comment-head">
						<h5>Post Comment in Below</h5>
						<p>Lorem ipsum dolor sit amet consectetur*</p>
					</div>
					<div class="row">
						<form class="col s12 form-details">
							<div class="input-field">
								<input type="text" required class="validate" placeholder="Name">
							</div>
							<div class="input-field">
								<input type="email" class="validate" placeholder="Email" required>
							</div>
							<div class="input-field">
								<input type="text" class="validate" placeholder="Subject" required>
							</div>
							<div class="input-field">
								<textarea name="textarea-message" id="textarea1" cols="30" rows="10" class="materialize-textarea" class="validate" placeholder="Your Comment"></textarea>
							</div>
							<div class="form-button">
								<button class="button-default">Post Comments</button>
							</div>
						</form>
					</div>
				</div> --}}


			</div>
		</div>
	</div>
	<!-- end single post -->

	<!-- loader -->
	{{-- <div id="fakeLoader"></div> --}}
	<!-- end loader -->

	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="about-us-foot">
				<h6>Country House Realty</h6>
				<p>is a lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit.</p>
			</div>
			<div class="social-media">
				<a href=""><i class="fa fa-facebook"></i></a>
				<a href=""><i class="fa fa-twitter"></i></a>
				<a href=""><i class="fa fa-google"></i></a>
				<a href=""><i class="fa fa-linkedin"></i></a>
				<a href=""><i class="fa fa-instagram"></i></a>
			</div>
			<div class="copyright">
				<span>© All Right Reserved</span>
			</div>
		</div>
	</div>
	<!-- end footer -->

	<!-- scripts -->
	<script src="/mobile/js/jquery.min.js"></script>
	<script src="/mobile/js/materialize.min.js"></script>
	<script src="/mobile/js/owl.carousel.min.js"></script>
	<script src="/mobile/js/fakeLoader.min.js"></script>
	<script src="/mobile/js/jquery.magnific-popup.min.js"></script>
	<script src="/mobile/js/main.js"></script>

	<script>

		$(function(){
			'use-strict';

			// portfolio image-popup
			$(".image-popup").magnificPopup({
			    type: "image",
			    removalDelay: 200,
			    mainClass: "mfp-with-zoom",
			    zoom: {
    				enabled: true,
					duration: 300,
    				easing: 'ease-in-out',
				}
			});

		});

	</script>

</body>
</html>
