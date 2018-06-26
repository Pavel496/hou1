<!DOCTYPE html>
<html lang="zxx">
<head>
	{{-- <meta charset="UTF-8">
	<title>Country House Realty</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-touch-fullscreen" content="yes">
	<meta name="HandheldFriendly" content="True"> --}}
	<meta charset="UTF-8">
  <title>@yield('head_title', getcong('site_name'))</title>
  <meta name="description" content="@yield('head_description', getcong('site_description'))">
    <meta property="keywords" content="@yield('head_keywords', getcong('site_keywords'))" />

    <meta property="og:type" content="article"/>
    <meta property="og:title" content="@yield('head_title',  getcong('site_name'))"/>
    <meta property="og:description" content="@yield('head_description', getcong('site_description'))"/>

    <meta property="og:image" content="@yield('head_image', url('/upload/logo.png'))" />
    <meta property="og:url" content="@yield('head_url', url('/'))" />

    <meta name="viewport" content="width=device-width, initial-scale=1">

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
			{{-- <li class="li-top">
				<div class="collapsible-header"><i class="fa fa-home"></i>Home <span><i class="fa fa-caret-down"></i></span></div>
				<div class="collapsible-body">
					<ul class="side-nav-panel">
						<li><a href="index.html">Home v1</a></li>
						<li><a href="index2.html">Home v2</a></li>
						<li><a href="index3.html">Home v3</a></li>
						<li><a href="index4.html">Home v4</a></li>
					</ul>
				</div>
			</li>
			<li>
				<div class="collapsible-header"><i class="fa fa-th-list"></i>Properties List <span><i class="fa fa-caret-down"></i></span></div>
				<div class="collapsible-body">
					<ul class="side-nav-panel">
						<li><a href="list-grid.html">List Grid</a></li>
						<li><a href="list-list.html">List List</a></li>
						<li><a href="list-full.html">List Full</a></li>
					</ul>
				</div>
			</li>
			<li>
				<div class="collapsible-header"><i class="fa fa-th-large"></i>Properties Details <span><i class="fa fa-caret-down"></i></span></div>
				<div class="collapsible-body">
					<ul class="side-nav-panel">
						<li><a href="single.html">Details v1</a></li>
						<li><a href="single2.html">Details v2</a></li>
						<li><a href="single3.html">Details v3</a></li>
						<li><a href="single4.html">Details v4</a></li>
					</ul>
				</div>
			</li>
			<li>
				<div class="collapsible-header"><i class="fa fa-file-o"></i>Pages <span><i class="fa fa-caret-down"></i></span></div>
				<div class="collapsible-body">
					<ul class="side-nav-panel">
						<li><a href="agent.html">Agent</a></li>
						<li><a href="gallery.html">Gallery</a></li>
						<li><a href="pricing.html">Pricing</a></li>
						<li><a href="error404.html">404</a></li>
						<li><a href="testimonial.html">Testimonial</a></li>
					</ul>
				</div>
			</li>
			<li>
				<div class="collapsible-header"><i class="fa fa-bold"></i>Blog <span><i class="fa fa-caret-down"></i></span></div>
				<div class="collapsible-body">
					<ul class="side-nav-panel">
						<li><a href="blog.html">Blog</a></li>
						<li><a href="blog-single.html">Blog Single</a></li>
					</ul>
				</div>
			</li> --}}
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

	<!-- slider -->
<!--
	<div class="slider">

		<ul class="slides">
			<li>
				<img src="img/slide1.jpg" alt="">
				<div class="caption slider-content center-align ">
					<div class="container">
						<h2>WELCOME TO BAITUN</h2>
						<h4>Lorem ipsum dolor sit amet.</h4>
						<a href="" class="button-default">Get Now</a>
					</div>
				</div>
			</li>
			<li>
				<img src="img/slide2.jpg" alt="">
				<div class="caption slider-content center-align">
					<div class="container">
						<h2>BAITUN MINIMALIST</h2>
						<h4>Lorem ipsum dolor sit amet.</h4>
						<a href="" class="button-default">Get Now</a>
					</div>
				</div>
			</li>
			<li>
				<img src="img/slide3.jpg" alt="">
				<div class="caption slider-content center-align">
					<div class="container">
						<h2>LUXURY PARK BAITUN</h2>
						<h4>Lorem ipsum dolor sit amet.</h4>
						<a href="" class="button-default">Get Now</a>
					</div>
				</div>
			</li>
		</ul>

	</div>
-->
	<!-- end slider -->
<br>
<br>
	<!-- find home -->
	<div class="section find-home bg-second">
		<div class="container">
			<div class="section-head">
				<h4>Country House Realty</h4>
				<div class="underline"></div>
				<div class="underline2"></div>
			</div>
			<form>
				{{-- <div class="input-field col s12">
					<select>
						<option value="" disabled selected>Location</option>
						<option value="1">Arizona</option>
						<option value="2">California</option>
						<option value="3">Florida</option>
						<option value="4">New York</option>
						<option value="5">Texas</option>
					</select>
				</div>
				<div class="input-field col s12">
					<select>
						<option value="" disabled selected>Sub Location</option>
						<option value="1">Los Angeles</option>
						<option value="2">San Diego</option>
						<option value="3">San Francisco</option>
						<option value="4">San Jose</option>
					</select>
				</div> --}}
				<div class="input-field col s12">
					<select>
						<option value="" disabled selected>Цель объекта</option>
						<option value="1">Продажа</option>
						<option value="2">Аренда</option>
					</select>
				</div>
				<div class="row">
					<div class="col s6">
						<input placeholder="Min Цена" type="number">
					</div>
					<div class="col s6">
						<input type="number" placeholder="Max Цена">
					</div>
				</div>
				<button class="button-default">НАЙТИ</button>
			</form>
		</div>
	</div>
	<!-- end find home -->

	<!-- new properties -->
	<div class="section real-estate bg-second">
		<div class="container">
			<div class="section-head">
				<h4>Новые объекты</h4>
				<div class="underline"></div>
				<div class="underline2"></div>
			</div>
			@foreach($propertieslist->chunk(2) as $chunked_property)
			<div class="row">
				@foreach($chunked_property as $property)
				<div class="col s6">
					<div class="content">
						<span class="price">{{$property->currency.' '.number_format($property->price)}}</span>
						{{-- <span class="price">$1700</span> --}}
						<img src="{{ URL::asset('upload/properties/'.$property->featured_image.'-s.jpg') }}" alt="Image of Property">
						{{-- <img src="img/real-estate1.jpg" alt=""> --}}
						<div class="offer-type">
							<span>{{ $property->property_purpose }}</span>
						</div>
						<div class="sub-content">
							<a href="{{ url('properties/'.$property->property_slug.'/'.Crypt::encryptString($property->id)) }}"><h5>{{ str_limit($property->property_name,35) }}</h5></a>
							<span><i class="fa fa-map-marker"></i> {{ str_limit($property->address,40) }}</span>
						</div>
					</div>
				</div>
				@endforeach
			</div>
			@endforeach
			<div class="pagination-real-estate">
				<ul>
					{{ $propertieslist->links() }}
				</ul>
			</div>


			{{-- <div class="row">
				<div class="col s6">
					<div class="content">
						<span class="price">$400</span>
						<img src="img/real-estate3.jpg" alt="">
						<div class="offer-type">
							<span>For Rent</span>
						</div>
						<div class="sub-content">
							<a href=""><h5>Minimalist Home Luxury</h5></a>
							<span><i class="fa fa-map-marker"></i> 574 Green Park, New York</span>
						</div>
					</div>
				</div>
				<div class="col s6">
					<div class="content">
						<span class="price">$1500</span>
						<img src="img/real-estate4.jpg" alt="">
						<div class="offer-type">
							<span>For Sale</span>
						</div>
						<div class="sub-content">
							<a href=""><h5>Minimalist Home Luxury</h5></a>
							<span><i class="fa fa-map-marker"></i> 574 Green Park, New York</span>
						</div>
					</div>
				</div>
			</div> --}}


		</div>
	</div>
	<!-- end new properties -->

	<!-- who we are -->
<!--
	<div class="section who-we-are">
		<div class="container">
			<div class="head">
				<h4>WHO WE ARE <span>BAITUN</span></h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus a mollitia, numquam similique porro nam autem rem repudiandae ullam alias.</p>
			</div>
			<div class="row">
				<div class="col s6">
					<div class="content">
						<i class="fa fa-support"></i>
						<h5>Trusted</h5>
						<p>Lorem ipsum dolor sit amet, consectetur</p>
					</div>
				</div>
				<div class="col s6">
					<div class="content">
						<i class="fa fa-code"></i>
						<h5>Easy to Use</h5>
						<p>Lorem ipsum dolor sit amet, consectetur</p>
					</div>
				</div>
			</div>
			<div class="row mb">
				<div class="col s6">
					<div class="content">
						<i class="fa fa-bar-chart"></i>
						<h5>Marketing</h5>
						<p>Lorem ipsum dolor sit amet, consectetur</p>
					</div>
				</div>
				<div class="col s6">
					<div class="content">
						<i class="fa fa-cogs"></i>
						<h5>Consulting</h5>
						<p>Lorem ipsum dolor sit amet, consectetur</p>
					</div>
				</div>
			</div>
		</div>
	</div>
-->
	<!-- end who we are -->

	<!-- most view -->
	{{-- <div class="section real-estate bg-second">
		<div class="container">
			<div class="section-head">
				<h4>MOST POPULAR VIEW</h4>
				<div class="underline"></div>
				<div class="underline2"></div>
			</div>
			<div class="row">
				<div class="col s6">
					<div class="content">
						<span class="price">$700</span>
						<img src="img/real-estate5.jpg" alt="">
						<div class="offer-type">
							<span>For Rent</span>
						</div>
						<div class="sub-content">
							<a href=""><h5>Minimalist Home Luxury</h5></a>
							<span><i class="fa fa-map-marker"></i> 574 Green Park, New York</span>
						</div>
					</div>
				</div>
				<div class="col s6">
					<div class="content">
						<span class="price">$1800</span>
						<img src="img/real-estate6.jpg" alt="">
						<div class="offer-type">
							<span>For Sale</span>
						</div>
						<div class="sub-content">
							<a href=""><h5>Minimalist Home Luxury</h5></a>
							<span><i class="fa fa-map-marker"></i> 574 Green Park, New York</span>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col s6">
					<div class="content">
						<span class="price">$400</span>
						<img src="img/real-estate1.jpg" alt="">
						<div class="offer-type">
							<span>For Rent</span>
						</div>
						<div class="sub-content">
							<a href=""><h5>Minimalist Home Luxury</h5></a>
							<span><i class="fa fa-map-marker"></i> 574 Green Park, New York</span>
						</div>
					</div>
				</div>
				<div class="col s6">
					<div class="content">
						<span class="price">$1700</span>
						<img src="img/real-estate2.jpg" alt="">
						<div class="offer-type">
							<span>For Sale</span>
						</div>
						<div class="sub-content">
							<a href=""><h5>Minimalist Home Luxury</h5></a>
							<span><i class="fa fa-map-marker"></i> 574 Green Park, New York</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> --}}
	<!-- end moss views -->

	<!-- loader -->
	{{-- <div id="fakeLoader"></div> --}}
	<!-- end loader -->

	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="about-us-foot">
				<h6>Country House Realty</h6>
				<p>Мобильная версия сайта в разработке.</p>
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
	<script src="/mobile/js/jquery.magnific-popup.min.js"></script>
	<script src="/mobile/js/owl.carousel.min.js"></script>
	<script src="/mobile/js/fakeLoader.min.js"></script>
	<script src="/mobile/js/main.js"></script>

</body>
</html>
