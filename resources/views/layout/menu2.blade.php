@extends('master')
@section('layout')
<!--header start-->
        <header id="header" class=" header-full-width ">

            <div class="header-sticky light-header " style="background-color: #58914C !important;">

                <div class="container">
                    <div id="massive-menu" class="menuzord">

                        <!--logo start-->
                        <a href="{{URL::Route('home')}}" class="logo-brand">
                            <img class="retina" src="{{ asset('images/logo/asri.png') }}" alt=""/>
                        </a>
                        <!--logo end-->

                        <!--mega menu start-->
                        <ul class="menuzord-menu pull-right">
                            <li><a href="{{URL::Route('home')}}" data-nav-section="home">Home</a></li>
                        </ul>
                        <!--mega menu end-->

                    </div>
                </div>
            </div>

        </header>

@yield('content');

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