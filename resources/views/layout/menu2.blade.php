@extends('master')
@section('layout')
<div id="page">
	<nav class="gtco-nav" role="navigation" style="background-color: green;">
		<div class="container">
			<div class="row">
				<div class="col-sm-2 col-xs-12">
					<div id="gtco-logo"><a href="index.html"><img src="{{ asset('images/logo/asri.png') }}" style="height: 35px;"></a></div>
				</div>
				<div class="col-xs-10 text-right menu-1 main-nav">
					<ul>
						<li class="active"><a href="#" data-nav-section="home">Home</a></li>
						<li><a href="#" data-nav-section="about">About</a></li>
						<li><a href="#" data-nav-section="practice-areas">Riset</a></li>
						<li><a href="#" data-nav-section="gallery">Gallery</a></li>
						<li><a href="<?php echo url('blogasri') ?>"">Blog</a></li>
						<!-- For external page link -->
						<!-- <li><a href="http://freehtml5.co/" class="external">External</a></li> -->
					</ul>
				</div>
			</div>
			
		</div>
	</nav>

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