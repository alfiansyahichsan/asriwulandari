@extends('layout.menu')
@section('halaman')
Home
@endsection
@section('content')
	<!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400, 900" rel="stylesheet"> -->
	<!-- Modernizr JS -->
	<script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>

	<section id="gtco-hero" class="gtco-cover" style="background-image: url(images/bum.jpg);"  data-section="home"  data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
					<div class="display-t">
						<div class="display-tc">
							<h3 class="animate-box" data-animate-effect="fadeIn">Scientist | Lecturer</h3>
							<span class="line"></span>
							<h1 class="animate-box" data-animate-effect="fadeIn">ASRI PENI WULANDARI</h1>
							<!-- <p class="gtco-video-link animate-box" data-animate-effect="fadeIn"><a href="https://vimeo.com/channels/staffpicks/93951774" class="popup-vimeo"><i class="icon-controller-play"></i></a></p>  -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="gtco-our-team" data-section="about" style="margin-bottom: 40px;">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn" >
					<h1>Welcome</h1>
					<p class="sub" style="margin-top: -20px;"></p>
					<h2 class="heading-colored" style="margin-top: 20px;">ASRI PENI WULANDARI, PhD</h2>
					<p class="subtle-text animate-box" data-animate-effect="fadeIn"></p>
				</div>
			</div>
			<div class="row gtco-team-reverse">
				<div class="col-md-6 col-md-push-7 animate-box" data-animate-effect="fadeInRight">
					<div class="img-shadow">
						<img src="http://www.unpad.ac.id/wp-content/uploads/2015/04/asri-peni-DADAN.jpg" class="img-responsive" alt="Asri WULANDARI">
					</div>
				</div>
				<div class="col-md-6  col-md-pull-6 animate-box" data-animate-effect="fadeInRight">
					<p>Tentang Asri Peni Wulandari Torquatos nihil utuntur liberamur benivole epularum evertunt accommodare, democrito didicerimus occulta egregios, praeclaram familiaritatem novi accusamus delectus opinemur mutae expetenda perpauca eas, concederetur fecerit ignorare delectari industria patientiamque. Invenire probes contereret maior opinor iucundo inciderint depravate, concupiscunt, deorum didicerimus, solitudo ingeniis confectum attento illustribus. Quanta suam, quieti usu necessarius. Sapienter existimo fruenda contentiones deduceret dolere minuti animi scientia, inbecilloque servire evertunt. Exeduntur vivi laudatum dicitur omnia verterem fuerit inanitate efficiatur Torquatos nihil utuntur liberamur benivole epularum evertunt accommodare, democrito didicerimus occulta egregios, praeclaram familiaritatem novi accusamus delectus opinemur mutae expetenda perpauca eas, concederetur fecerit ignorare delectari industria patientiamque.</p>
				</div>
			</div>

		</div>
	</section>
	
	<section id="gtco-about" data-section="about" style="background-image: url(images/header-back.png); background-repeat: no-repeat; background-position: center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; margin-bottom: 50px;">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-8 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn">
					
					<h1 style="letter-spacing: 2px; color: white;">ACHIEVEMENT</h1>
					<p class="sub" style="margin-top: -20px;"></p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 animate-box" data-animate-effect="fadeInRight">
					<div class="img-shadow test">
						<a data-toggle="modal" href="#myModal"><img src="images/icons/bdg.png" style="height: 60px;"></a>
						<p>Penghargaan 1</p>
					</div>
				</div>
				<div class="col-md-4 animate-box" data-animate-effect="fadeInRight">
					<div class="img-shadow test">
						<a data-toggle="modal" href="#myModal"><img src="images/icons/bdg.png" style="height: 60px;"></a>
						<p>Penghargaan 2</p>
					</div>
				</div>
				<div class="col-md-4 animate-box" data-animate-effect="fadeInRight">
					<div class="img-shadow test">
						<a data-toggle="modal" href="#myModal"><img src="images/icons/bdg.png" style="height: 60px;"></a>
						<p>Penghargaan 3</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="gtco-practice-areas" data-section="practice-areas">
		<div class="container" style="margin-bottom: 50px;">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn">
					<h1 style="letter-spacing: 2px;">HASIL RISET</h1>
					<p class="sub" style="margin-top: -20px;"></p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="st-member">
						<div class="st-member-img object-fit_cover" style="background-image: url(images/yuhu.jpg);">
						</div>
						<div class="st-member-info">

							<strong class="st-member-name"><a href="{{URL::route('biodegum')}}" style="color: black;">BIODEGUM</a></strong>
							<p>riset ini merupakan riset di bidang mikroorganisme</p>
							<div class="skills">
								<div class="skill">
									<strong>PROGRESS</strong>
									<span>100%</span>
									<div class="progress">
										<div class="progress-bar progress-bar-sept" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
											<span class="sr-only">100% Complete</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="st-member">
						<div class="st-member-img object-fit_cover" style="background-image: url(images/yuhu.jpg);">
						</div>
						<div class="st-member-info">
							<strong class="st-member-name"><a href="{{URL::route('fipulp')}}" style="color: black;">FIPULP</a></strong>
							<p>riset ini merupakan riset di bidang mikroorganisme</p>
							<div class="skills">
								<div class="skill">
									<strong>PROGRESS</strong>
									<span>100%</span>
									<div class="progress">
										<div class="progress-bar progress-bar-sept" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
											<span class="sr-only">100% Complete</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				
			</div>
		</div>
	</section>

	<section id="gtco-practice-areas" style="background-image: url(images/funfact4.png); background-size: cover; margin-bottom: 50px;">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-8 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn">
					<h1 style="letter-spacing: 2px;">LATEST JOURNAL</h1>
					<p class="sub" style="margin-top: -20px;"></p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="gtco-practice-area-item animate-box">
						<div class="gtco-icon">
							<img src="images/scale.png" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
						</div>
						<div class="gtco-copy">
							<h3><a href="{{URL::route('detailjurnal')}}" style="color: black;">Journal 1</a></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed scelerisque sapien. Sed sodales, libero non faucibus rutrum, purus tellus finibus diam, eget ornare tortor leo eget erat. </p>
							<a href="{{URL::route('detailjurnal')}}">Read More</a>
						</div>
					</div>

				</div>
				<div class="col-md-4">
					
					<div class="gtco-practice-area-item animate-box">
						<div class="gtco-icon">
							<img src="images/scale.png" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
						</div>
						<div class="gtco-copy">
							<h3><a href="{{URL::route('detailjurnal')}}" style="color: black;">Journal 2</a></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed scelerisque sapien. Sed sodales, libero non faucibus rutrum, purus tellus finibus diam, eget ornare tortor leo eget erat. </p>
							<a href="{{URL::route('detailjurnal')}}">Read More</a>
						</div>
					</div>

				</div>
				<div class="col-md-4">
					
					<div class="gtco-practice-area-item animate-box">
						<div class="gtco-icon">
							<img src="images/scale.png" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
						</div>
						<div class="gtco-copy">
							<h3><a href="{{URL::route('detailjurnal')}}" style="color: black;">Journal 3</a></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed scelerisque sapien. Sed sodales, libero non faucibus rutrum, purus tellus finibus diam, eget ornare tortor leo eget erat. </p>
							<a href="{{URL::route('detailjurnal')}}">Read More</a>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
		

	<section id="gtco-practice-areas" data-section="gallery">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="col-md-8 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn">
							<h1 style="letter-spacing: 2px;">GALLERY</h1>
							<p class="sub" style="margin-top: -20px;"></p>
						</div>

						<div class="aduh col-sm-4">
			                <div class="blogBox">   
			                    <div class="gallerySection">
			                        <figure>
			                                    <!-- Single Album Image -->
			                            <figcaption>
			                                <!-- Single Album Image -->
			                                <div class="hovereffect">
			                                    <img class="img-responsive object-fit_contain" src="/images/bum.jpg" alt="">
			                                    <div class="overlay">
			                                       <a class="info lightbox" href="images/bum.jpg"></a>
			                                    </div>
			                                </div>
			                            </figcaption>
			                            <!-- Single Album View Button -->
			                            
			                        </figure>
			                    </div>
			                    
			                </div><!-- end blogBox -->
			            </div><!-- end col-sm-4 --> 

			            <div class="aduh col-sm-4">
			                <div class="blogBox">   
			                    <div class="gallerySection">
			                        <figure>
			                                    <!-- Single Album Image -->
			                            <figcaption>
			                                <!-- Single Album Image -->
			                                <div class="hovereffect">
			                                    <img class="img-responsive object-fit_contain" src="/images/yuhu.jpg" alt="">
			                                    <div class="overlay">
			                                       <a class="info lightbox" href="images/yuhu.jpg"></a>
			                                    </div>
			                                </div>
			                            </figcaption>
			                            <!-- Single Album View Button -->
			                            
			                        </figure>
			                    </div>
			                    
			                </div><!-- end blogBox -->
			            </div>

			            <div class="aduh col-sm-4">
			                <div class="blogBox">   
			                    <div class="gallerySection">
			                        <figure>
			                                    <!-- Single Album Image -->
			                            <figcaption>
			                                <!-- Single Album Image -->
			                                <div class="hovereffect">
			                                    <img class="img-responsive object-fit_contain" src="/images/yuhu.jpg" alt="">
			                                    <div class="overlay">
			                                       <a class="info lightbox" href="images/yuhu.jpg"></a>
			                                    </div>
			                                </div>
			                            </figcaption>
			                            <!-- Single Album View Button -->
			                            
			                        </figure>
			                    </div>
			                    
			                </div><!-- end blogBox -->
			            </div>

			            <div class="aduh col-sm-4">
			                <div class="blogBox">   
			                    <div class="gallerySection">
			                        <figure>
			                                    <!-- Single Album Image -->
			                            <figcaption>
			                                <!-- Single Album Image -->
			                                <div class="hovereffect">
			                                    <img class="img-responsive object-fit_contain" src="/images/yuhu.jpg" alt="">
			                                    <div class="overlay">
			                                       <a class="info lightbox" href="images/yuhu.jpg"></a>
			                                    </div>
			                                </div>
			                            </figcaption>
			                            <!-- Single Album View Button -->
			                            
			                        </figure>
			                    </div>
			                    
			                </div><!-- end blogBox -->
			            </div><!-- end col-sm-4 --> 

			            <div class="aduh col-sm-4">
			                <div class="blogBox">   
			                    <div class="gallerySection">
			                        <figure>
			                                    <!-- Single Album Image -->
			                            <figcaption>
			                                <!-- Single Album Image -->
			                                <div class="hovereffect">
			                                    <img class="img-responsive object-fit_contain" src="/images/yuhu.jpg" alt="">
			                                    <div class="overlay">
			                                       <a class="info lightbox" href="images/yuhu.jpg"></a>
			                                    </div>
			                                </div>
			                            </figcaption>
			                            <!-- Single Album View Button -->
			                            
			                        </figure>
			                    </div>
			                    
			                </div><!-- end blogBox -->
			            </div>

			            <div class="aduh col-sm-4">
			                <div class="blogBox">   
			                    <div class="gallerySection">
			                        <figure>
			                                    <!-- Single Album Image -->
			                            <figcaption>
			                                <!-- Single Album Image -->
			                                <div class="hovereffect">
			                                    <img class="img-responsive object-fit_contain" src="/images/yuhu.jpg" alt="">
			                                    <div class="overlay">
			                                       <a class="info lightbox" href="images/yuhu.jpg"></a>
			                                    </div>
			                                </div>
			                            </figcaption>
			                            <!-- Single Album View Button -->
			                            
			                        </figure>
			                    </div>
			                    
			                </div><!-- end blogBox -->
			            </div>
                        
                    </div>
                </div>
            </div>
        </section>

        <section class="blog" id="blog" data-section="blog">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-8 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn">
					<h1 style="letter-spacing: 2px;">RECENT NEWS</h1>
					<p class="sub" style="margin-top: -20px;"></p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<div class="blog-post">
					<div class="post-meta">
						<span class="author"><a href="#"><img src="photos/author.jpg" alt=""> Asri Wulandari</a></span>,
						<span>At <strong>22 September, 2017</strong></span>
					</div>
					<h2 class="post-title"><a href="{{URL::route('detailblog')}}">Asri Peni Wulandari, PhD Teliti Manfaat Tanaman Rami untuk Tekstil dan Biobriket</a></h2>
					<div class="post-thumb"><a href="{{URL::route('detailblog')}}"><img src="http://www.unpad.ac.id/wp-content/uploads/2015/04/asri-peni-DADAN.jpg" alt="" class="img-responsive"></a></div>
					<div class="post-content">
						<p>Torquatos nihil utuntur liberamur benivole epularum evertunt accommodare, democrito didicerimus occulta egregios, praeclaram familiaritatem novi accusamus delectus opinemur mutae expetenda perpauca eas, concederetur fecerit ignorare delectari industria patientiamque. Invenire probes contereret maior opinor iucundo inciderint depravate, concupiscunt, deorum didicerimus, solitudo ingeniis confectum attento illustribus. Quanta suam, quieti usu necessarius. Sapienter existimo fruenda contentiones deduceret dolere minuti animi scientia, inbecilloque servire evertunt. Exeduntur vivi laudatum dicitur omnia verterem fuerit inanitate efficiatur <a href="{{URL::route('detailblog')}}" class="more-link">Continue reading <span class="meta-nav">&rarr;</span></a></p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="widgets">
					<!-- <div class="widget">
						<form action="" class="">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Search...">
								<span class="input-group-btn">
									<button class="btn btn-default btn-lg" type="submit"><i class="fa fa-search"></i></button>
								</span>
							</div>
						</form>
					</div> -->
					<!-- <div class="widget">
						<h2 class="widget-title">Categories</h2>
						<ul>
							<li><a href="#">Video <span class="badge pull-right">5</span></a></li>
							<li><a href="#">Flyer <span class="badge pull-right">7</span></a></li>
							<li><a href="#">PSD <span class="badge pull-right">2</span></a></li>
							<li><a href="#">Theme <span class="badge pull-right">6</span></a></li>
							<li><a href="#">Music <span class="badge pull-right">8</span></a></li>
							<li><a href="#">Bootstrap <span class="badge pull-right">2</span></a></li>
							<li><a href="#">WordPress <span class="badge pull-right">9</span></a></li>
							<li><a href="#">Framework <span class="badge pull-right">7</span></a></li>
						</ul>
					</div> -->
					<div class="widget">
						<h2 class="widget-title">Recent Post</h2>
						<ul>
							<li>
								<div class="recent-post clearfix">
									<a href="#" class="post-thumb"><img src="photos/post-thumb-sm.jpg"></a>
									<h2 class="post-title">
										<a href="#">A example blog post with image</a>
									</h2>
									<div class="post-meta">
										<span>Posted in <a href="#">WordPress</a></span>
									</div>
									
								</div>
							</li>
							<li>
								<div class="recent-post clearfix">
									<a href="#" class="post-thumb"><img src="photos/post-thumb-sm.jpg"></a>
									<h2 class="post-title">
										<a href="#">A example blog post with image</a>
									</h2>
									<div class="post-meta">
										<span>Posted in <a href="#">WordPress</a></span>
									</div>
									
								</div>
							</li>
							<li>
								<div class="recent-post clearfix">
									<a href="#" class="post-thumb"><img src="photos/post-thumb-sm.jpg"></a>
									<h2 class="post-title">
										<a href="#">A example blog post with image</a>
									</h2>
									<div class="post-meta">
										<span>Posted in <a href="#">WordPress</a></span>
									</div>
									
								</div>
							</li>
							<li>
								<div class="recent-post clearfix">
									<a href="#" class="post-thumb"><img src="photos/post-thumb-sm.jpg"></a>
									<h2 class="post-title">
										<a href="#">A example blog post with image</a>
									</h2>
									<div class="post-meta">
										<span>Posted in <a href="#">WordPress</a></span>
									</div>
									
								</div>
							</li>
						</ul>
					</div>
					<!-- <div id="tag_cloud-3" class="widget widget_tag_cloud">
						<h2 class="widget-title">Tags</h2>
						<div class="tagcloud">
							<a href="#">bootstrap3</a>
							<a href="#">css</a>
							<a href="#">html</a>
							<a href="#">js</a>
							<a href="#">php</a>
							<a href="#">wordpress</a>
							<a href="#">jquery</a>
							<a href="#">less</a>
							<a href="#">editor</a>
							<a href="#">responsive</a>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</div>
</section>

<div id="myModal" class="modal fade" role="dialog">
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h3 class="modal-title" style="text-align: center; letter-spacing: 3px;">ACHIEVEMENT</h3>
		</div>
		<div class="modal-body" style="text-align: center;">
			<p>Penghargaan 1</p>
			<p>Mikro</p>
			<p>Pada tahun 2017</p>
			<div class="modal-footer">
				<button type="button" class="btn btn-success" data-dismiss="modal">
					<span class='glyphicon glyphicon-remove'></span> Close
				</button>
			</div>
		</div>
		</div>
	</div>
</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

@section('script')

@endsection
@endsection()