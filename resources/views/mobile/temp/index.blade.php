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


<br>
<br>
	<!-- find home -->
	<div class="section find-home bg-second">
		<div class="container">
			<div class="section-head">
				{{-- <h4><h4>{{$page='Все объекты'}}. {{session('currencyname')}}</h4></h4> --}}
				<div class="underline"></div>
				<div class="underline2"></div>

				<nav>
			    <div class="nav-wrapper">
			      {{-- <a href="#" class="brand-logo">Logo</a> --}}
			      <ul id="nav-mobile" class="left">
			        <li><a href="{{ URL::to('/') }}" class="{{classActivePathPublic('')}}">Все</a></li>
			        <li><a href="{{ URL::to('sale/') }}" class="{{classActivePathPublic('sale')}}">Продажа</a></li>
			        <li><a href="{{ URL::to('rent/') }}" class="{{classActivePathPublic('rent')}}">Аренда</a></li>
							<li><a href="{{ URL::to('') }}" class="{{classActivePathPublic('')}}">О нас</a></li>
			      </ul>
			    </div>
			  </nav>

				{{-- <br>
				<br> --}}

				{{-- <h5 style="color:orange;">Мобильная версия. Находится в разработке. Некоторые функции временно недоступны.</h5> --}}
				{{-- <h3 style="color:red;">{{session('currencyname')}}</h3> --}}

			</div>


{{-- <div class="row">
<div class="col s10"> --}}
@if (\Request::is('searchproperties'))
		{{-- <h5 style="color:darkred;">Валюта не меняется</h5> --}}
		@if ($page=='Все объекты')
			{{-- <input id="property_purpose" name="purpose" type="hidden" value="all"> --}}
			<a style="color:orange;" href="/"><span><i class="fa fa-backward"></i></span>
				 Сбросить фильтр <span><i class="fa fa-backward"></i></span></a>

		@elseif ($page=='Продажа')
			{{-- <input id="property_purpose" name="purpose" type="hidden" value="Продажа"> --}}
			<a href="/sale"><span><i class="fa fa-backward"></i></span>
				 Сбросить фильтр <span><i class="fa fa-backward"></i></span></a>
		@else
			{{-- <input id="property_purpose" name="purpose" type="hidden" value="Аренда"> --}}
			<a href="/rent"><span><i class="fa fa-backward"></i></span>
				 Сбросить фильтр <span><i class="fa fa-backward"></i></span></a>
		@endif

@else
			<div class="row">
{{-- <div class="col s9"> --}}
			<div class="col s2">
			{!! Form::open(array('url'=>'currency','method'=>'POST', 'id'=>'agent_contact_form')) !!}
				<input type="hidden" name="currencysymbol" value="₽">
				<input type="hidden" name="currencyname" value="Рубли">
						 <button type="submit" class="btn submit" name="submit">₽</button>
			{!! Form::close() !!}
			</div>

			<div class="col s2">
			{!! Form::open(array('url'=>'currency','method'=>'POST', 'id'=>'agent_contact_form')) !!}
				<input type="hidden" name="currencysymbol" value="$">
				<input type="hidden" name="currencyname" value="Доллары">
						 <button type="submit" class="btn submit" name="submit">$</button>
			{!! Form::close() !!}
			</div>

			<div class="col s2">
			{!! Form::open(array('url'=>'currency','method'=>'POST', 'id'=>'agent_contact_form')) !!}
				<input type="hidden" name="currencysymbol" value="€">
				<input type="hidden" name="currencyname" value="Евро">
						 <button type="submit" class="btn submit" name="submit">€</button>
			{!! Form::close() !!}
			</div>
{{-- </div> --}}
			</div>
@endif
{{-- </div>
</div> --}}

		</div>
	</div>
	<!-- end find home -->

	<!-- new properties -->
	<div class="section real-estate bg-second">
		<div class="container">
			<div class="section-head">
				<h3>{{$page='Все объекты'}}. {{session('currencyname')}}</h3>
				<div class="underline"></div>
				<div class="underline2"></div>
			</div>

			{{-- <div class="filter-head">
				<ul>
					<li>
						<select>
							<option value="" disabled selected>Newest</option>
							<option value="1">Price: Hight to Low</option>
							<option value="2">Price: Low to Hight</option>
						</select>
					</li>
				</ul>
				<ul class="ul-right">
					<li class="active"><i class="fa fa-usd"></i></li>
					<li><a href="index3.html"><i class="fa fa-rub"></i></a></li>
					<li><a href="index4.html"><i class="fa fa-eur"></i></a></li>
				</ul>
			</div> --}}

			@foreach($propertieslist->chunk(2) as $chunked_property)
			<div class="row">
				@foreach($chunked_property as $property)
				<div class="col s6">
					<div class="content">

						{{-- <div class="direction">
							<span>{{ $property->direction_to->name }}</span>
						</div> --}}

						@if ( session('currencyname') == 'Рубли' )
              <span class="price">{{session('currencysymbol').' '.number_format($property->crossrubl)}}</span>
            @elseif ( session('currencyname') == 'Доллары' )
              <span class="price">{{session('currencysymbol').' '.number_format($property->crossdollar)}}</span>
            @elseif ( session('currencyname') == 'Евро' )
              <span class="price">{{session('currencysymbol').' '.number_format($property->crosseuro)}}</span>
            @endif
						{{-- <span class="price">{{$property->currency.' '.number_format($property->price)}}</span> --}}
						{{-- <span class="price">$1700</span> --}}
						<img src="{{ URL::asset('upload/properties/'.$property->featured_image.'-s.jpg') }}" alt="Image of Property">
						{{-- <img src="img/real-estate1.jpg" alt=""> --}}
						<div class="offer-type">
							<span>{{ $property->property_purpose }}</span>
						</div>
						<div class="sub-content">
							<a href="{{ url('properties/'.$property->property_slug.'/'.Crypt::encryptString($property->id)) }}"><h5>{{ str_limit($property->property_name,35) }}</h5></a>
							<span style="color:maroon;"> {{ $property->direction_to->name }}</span><br>
							<span><i class="fa fa-map-marker"></i> {{ str_limit($property->address,40) }}</span><br>
							<span><i class="fa fa-road"></i> {{ $property->range }} км;</span>
							<span><i class="fa fa-home"></i> {{ $property->build_area }} м2;</span>
							<span><i class="fa fa-square-o"></i> {{ $property->land_area }} сот;</span>
							<span>{{ getPropertyTypeName($property->property_type)->types }};</span>
							<span>{{ $property->readiness_of->name }}</span>

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

	<!-- side nav left-->
	<div class="side-nav-panel-left">
		<ul id="slide-out-left" class="side-nav side-nav-panel collapsible">
			{{-- <li class="profil">
				<img src="/upload/logo.png" alt="">
				<h2>John Doe</h2>
				<h6>Mobile Developer</h6>
			</li> --}}

			{{-- {{$page='Все объекты'}}

		  {{session('currencyname')}} --}}

			@include('mobile.filter')

			{{-- <li><a href=""><i class="fa fa-home"></i>All Objects</a></li>
			<li><a href=""><i class="fa fa-home"></i>Sale</a></li>
			<li><a href=""><i class="fa fa-home"></i>Rent</a></li>
			<li><a href=""><i class="fa fa-user"></i>About Us</a></li>
			<li><a href=""><i class="fa fa-envelope-o"></i>Contact Us</a></li>
			<li><a href=""><i class="fa fa-sign-in"></i>Login</a></li>
			<li><a href=""><i class="fa fa-user-plus"></i>Register</a></li> --}}
		</ul>
	</div>
	<!-- end side nav left-->

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
