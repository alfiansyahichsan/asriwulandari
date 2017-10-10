<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="img/favicon.png">

    <title>Asri Peni Wulandari PhD</title>
@yield('css')
    <!--common style-->


    <link href='http://fonts.googleapis.com/css?family=Abel|Source+Sans+Pro:400,300,300italic,400italic,600,600italic,700,700italic,900,900italic,200italic,200' rel='stylesheet' type='text/css'>
    <link href="{{ asset('css/asriw/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/asriw/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/asriw/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('css/asriw/css/shortcodes/shortcodes.css') }}" rel="stylesheet">
    <link href="{{ asset('css/asriw/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/asriw/css/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/asriw/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/asriw/css/style-responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/asriw/css/default-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/asriw/css/blog.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<!--  preloader start -->
<div id="tb-preloader">
    <div class="tb-preloader-wave"></div>
</div>
<!-- preloader end -->
@yield('layout')
@yield('script')
	<!-- Placed js at the end of the document so the pages load faster -->
	<script src="{{ asset('js/asriw/js/jquery-1.10.2.min.js') }}"></script>
	<script src="{{ asset('js/asriw/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/asriw/js/menuzord.js') }}"></script>
	<script src="{{ asset('js/asriw/js/jquery.flexslider-min.js') }}"></script>
	<script src="{{ asset('js/asriw/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('js/asriw/js/jquery.isotope.js') }}"></script>
	<script src="{{ asset('js/asriw/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('js/asriw/js/jquery.countTo.js') }}"></script>
	<script src="{{ asset('js/asriw/js/visible.js') }}"></script>
	<script src="{{ asset('js/asriw/js/smooth.js') }}"></script>
	<script src="{{ asset('js/asriw/js/wow.min.js') }}"></script>
	<script src="{{ asset('js/asriw/js/imagesloaded.js') }}"></script>
	    <!--common scripts-->
	<script src="{{ asset('js/asriw/js/scripts.js?6') }}"></script>
	
    <script type="text/javascript">
        $(document).on("click", ".myModal", function () {
         var title = $(this).data('title');
         var detail = $(this).data('detail');
         $(".modal-body #title").val( title );
         $(".modal-body #detail").val( detail );
    });
    </script>
	</body>
</html>