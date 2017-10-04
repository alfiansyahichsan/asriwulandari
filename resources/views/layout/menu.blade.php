@extends('master')
@section('layout')
<!--header start-->
    <header id="header" class=" header-full-width  transparent-header ">

        <div class="header-sticky light-header- dark-header header-bottom-border- ">
            <div class="container">
                <div id="massive-menu" class="menuzord">

                    <!--logo start-->
                    <a href="index.html" class="logo-brand">
                        <img class="retina" src="images/logo/asri.png" alt=""/>
                    </a>
                    <!--logo end-->
                    <!--mega menu start-->
                    <ul class="menuzord-menu pull-right light">
                        <li><a href="#" data-nav-section="home">Home</a></li>
						<li><a href="#about" data-nav-section="about">About</a></li>
						<li><a href="#riset" data-nav-section="practice-areas">Riset</a></li>
						<li><a href="#blog" data-nav-section="blog">Blog</a></li>
						<li><a href="#gallery" data-nav-section="gallery">Gallery</a></li>
                    </ul>
                    <!--mega menu end-->
                </div>
            </div>
        </div>

    </header>

    <!--header end-->
<body data-spy="scroll" data-target=".navbar" data-offset="50">
@yield('content');
</body>
<!--footer 1 start -->
    <footer id="gtco-footer" role="contentinfo">
	<div class="container">
		
		<div class="row copyright">
			<div class="col-md-12">
				<p class="pull-left">
					<small class="block">2017 &copy; Asri Peni Wulandari, Developed by <a href="http://scriptpainter.com" style="color:#337ab7;">ScriptPainter</a>
				</p><!-- 
				<p class="pull-right">
					<ul class="gtco-social-icons pull-right">
						<li><a href="#"><i class="icon-twitter"></i></a></li>
						<li><a href="#"><i class="icon-facebook"></i></a></li>
						<li><a href="#"><i class="icon-linkedin"></i></a></li>
						<li><a href="#"><i class="icon-dribbble"></i></a></li>
					</ul>
				</p> -->
			</div>
		</div>

	</div>
</footer>

@endsection()