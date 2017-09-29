<!DOCTYPE HTML>
<html lang="en" class="no-js">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Asri Peni Wulandari, PhD</title>
	<link rel="icon" href="{{ asset('images/logo/asri2.png')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1">

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
@yield('css')
	<script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/jquery.fancybox.css') }}">
	<link rel="stylesheet" href="{{ asset('css/flickity.css') }}">
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
	<!-- ========== CSS INCLUDES ========== -->
	<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
	<!-- Animate.css -->
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ asset('css/linea-icon.css') }}">
	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<link href="{{ asset('css/queries.css') }}" rel="stylesheet">
</head>
<body>
	<div class="gtco-loader"></div>
@yield('layout')
@yield('script')
	<script src="{{ asset('js/min/toucheffects-min.js') }}"></script>
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/flickity.pkgd.min.js') }}"></script>
	<script src="{{ asset('js/jquery.fancybox.pack.js') }}"></script>
	<!-- ================================================== -->
	<!-- =============== START JQUERY SCRIPTS ================ -->
	<!-- ================================================== -->
	<!-- jQuery -->
	<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
	<!-- Bootstrap -->
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<!-- Waypoints -->
	<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
	<!-- Stellar -->
	<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
	<!-- Magnific Popup -->
	<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('js/magnific-popup-options.js') }}"></script>
	<!-- Main -->
	<script src="{{ asset('js/main.js') }}"></script>

	<script src="{{ asset('js/retina.js') }}"></script>
	<script src="{{ asset('js/min/scripts-min.js') }}"></script>
	<!-- <script src="{{ asset('js/menuzord.js') }}"></script>
	<script src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
	<script src="{{ asset('js/jquery.isotope.js') }}"></script>
	<script src="{{ asset('js/smooth.js') }}"></script>
	<script src="{{ asset('js/wow.min.js') }}"></script> -->
	

	</body>
</html>