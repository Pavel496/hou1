<!DOCTYPE html>
<html lang="zxx">
<head>

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
