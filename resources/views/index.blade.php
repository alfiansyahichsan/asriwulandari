@extends('layout.menu')
@section('halaman')
Home
@endsection
@section('content')
	<!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400, 900" rel="stylesheet"> -->
	<!-- Modernizr JS -->
	<script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>

	<section id="gtco-hero" class="gtco-cover" style="background-image: url(images/boom.jpg);"  data-section="home"  data-stellar-background-ratio="0.5">
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

	<section id="gtco-our-team" data-section="about">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn" >
					<h1>Welcome</h1>
					<p class="sub" style="margin-top: -20px;"></p>
					<h2 class="heading-colored" style="margin-top: 20px;">ASRI PENI WULANDARI, PhD</h2>
					<p class="subtle-text animate-box" data-animate-effect="fadeIn"></p>
				</div>
			</div>
			<div class="row team-item gtco-team-reverse">
				<div class="col-md-6 col-md-push-7 animate-box" data-animate-effect="fadeInRight">
					<div class="img-shadow">
						<img src="http://www.unpad.ac.id/wp-content/uploads/2015/04/asri-peni-DADAN.jpg" class="img-responsive" alt="Asri WULANDARI">
					</div>
				</div>
				<div class="col-md-6  col-md-pull-6 animate-box" data-animate-effect="fadeInRight">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus aliquid maiores, voluptatum ex. Accusantium, eum distinctio laudantium. Perferendis dolor, corporis quasi? Tempore quod molestiae quis cumque pariatur dolore vel sit, fugit delectus quasi reprehenderit officia voluptate incidunt, culpa odit impedit qui dolorum fugiat. Quidem possimus reprehenderit, quae recusandae voluptatibus magnam!</p>
					<p>Ratione facilis quod laborum eaque illo dolore blanditiis nobis dicta voluptatem fugit optio, eveniet non dolor quia delectus, sint, dignissimos atque porro consequuntur unde. Soluta ex necessitatibus delectus saepe aliquam, culpa officiis doloremque, ipsa facere hic, voluptatem accusantium veniam, quasi! Explicabo accusantium sint, corporis consequuntur fugit ipsam, dolorum excepturi adipisci.</p>
				</div>
			</div>

		</div>
	</section>
	
	<section id="gtco-about" data-section="about" style="background-image: url(images/4.png); background-size: cover;">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-8 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn">
					<img src="images/icons/medal.png" style="height: 100px; padding-bottom: 20px;">
					<h1 style="letter-spacing: 2px;">ACHIEVEMENT</h1>
					<p class="sub" style="margin-top: -20px;"></p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 animate-box" data-animate-effect="fadeInRight">
					<div class="img-shadow">
						<p>Penghargaan 1</p>
					</div>
				</div>
				<div class="col-md-4 animate-box" data-animate-effect="fadeInRight">
					<div class="img-shadow">
						<p>Penghargaan 2</p>
					</div>
				</div>
				<div class="col-md-4 animate-box" data-animate-effect="fadeInRight">
					<div class="img-shadow">
						<p>Penghargaan 3</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="gtco-practice-areas" data-section="practice-areas">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-8 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn">
					<h1 style="letter-spacing: 2px;">HASIL RISET</h1>
					<p class="sub" style="margin-top: -20px;"></p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="st-member">
						<div class="st-member-img">
							<img src="images/2.jpg" alt="" class="img-responsive">
						</div>
						<div class="st-member-info">
							<strong class="st-member-name">RISET 1</strong>
							<p class="st-member-pos">ini riset 1</p>
							<div class="skills">
								<div class="skill">
									<strong>PROGRESS</strong>
									<span>90%</span>
									<div class="progress">
										<div class="progress-bar progress-bar-sept" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
											<span class="sr-only">90% Complete</span>
										</div>
									</div>
								</div>
								<div class="skill">
									<strong>PROGRESS</strong>
									<span>70%</span>
									<div class="progress">
										<div class="progress-bar progress-bar-sept" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
											<span class="sr-only">70% Complete</span>
										</div>
									</div>
								</div>
								<div class="skill">
									<strong>PROGRESS</strong>
									<span>86%</span>
									<div class="progress">
										<div class="progress-bar progress-bar-sept" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
											<span class="sr-only">86% Complete</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="st-member">
						<div class="st-member-img">
							<img src="images/2.jpg" alt="" class="img-responsive">
						</div>
						<div class="st-member-info">
							<strong class="st-member-name">RISET 2</strong>
							<p class="st-member-pos">ini riset 2</p>
							<div class="skills">
								<div class="skill">
									<strong>PROGRESS</strong>
									<span>90%</span>
									<div class="progress">
										<div class="progress-bar progress-bar-sept" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
											<span class="sr-only">90% Complete</span>
										</div>
									</div>
								</div>
								<div class="skill">
									<strong>PROGRESS</strong>
									<span>70%</span>
									<div class="progress">
										<div class="progress-bar progress-bar-sept" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
											<span class="sr-only">70% Complete</span>
										</div>
									</div>
								</div>
								<div class="skill">
									<strong>PROGRESS</strong>
									<span>86%</span>
									<div class="progress">
										<div class="progress-bar progress-bar-sept" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
											<span class="sr-only">86% Complete</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="st-member">
						<div class="st-member-img">
							<img src="images/2.jpg" alt="" class="img-responsive">
						</div>
						<div class="st-member-info">
							<strong class="st-member-name">RISET 3</strong>
							<p class="st-member-pos">ini riset 3</p>
							<div class="skills">
								<div class="skill">
									<strong>PROGRESS</strong>
									<span>90%</span>
									<div class="progress">
										<div class="progress-bar progress-bar-sept" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
											<span class="sr-only">90% Complete</span>
										</div>
									</div>
								</div>
								<div class="skill">
									<strong>PROGRESS</strong>
									<span>70%</span>
									<div class="progress">
										<div class="progress-bar progress-bar-sept" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
											<span class="sr-only">70% Complete</span>
										</div>
									</div>
								</div>
								<div class="skill">
									<strong>PROGRESS</strong>
									<span>86%</span>
									<div class="progress">
										<div class="progress-bar progress-bar-sept" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
											<span class="sr-only">86% Complete</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				
			</div>
		</div>
		<div class="container" style="margin-top: 80px;">
			<div class="row row-pb-md">
				<div class="col-md-8 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn">
					<h1 style="letter-spacing: 2px;">LATEST JOURNAL</h1>
					<p class="sub" style="margin-top: -20px;"></p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="gtco-practice-area-item animate-box">
						<div class="gtco-icon">
							<img src="images/scale.png" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
						</div>
						<div class="gtco-copy">
							<h3>Journal 1</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed scelerisque sapien. Sed sodales, libero non faucibus rutrum, purus tellus finibus diam, eget ornare tortor leo eget erat. </p>
							<a href="#">Read More</a>
						</div>
					</div>

					<div class="gtco-practice-area-item animate-box">
						<div class="gtco-icon">
							<img src="images/scale.png" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
						</div>
						<div class="gtco-copy">
							<h3>Journal 1</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed scelerisque sapien. Sed sodales, libero non faucibus rutrum, purus tellus finibus diam, eget ornare tortor leo eget erat. </p>
							<a href="#">Read More</a>
						</div>
					</div>

				</div>
				<div class="col-md-6">
					
					<div class="gtco-practice-area-item animate-box">
						<div class="gtco-icon">
							<img src="images/scale.png" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
						</div>
						<div class="gtco-copy">
							<h3>Journal 1</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed scelerisque sapien. Sed sodales, libero non faucibus rutrum, purus tellus finibus diam, eget ornare tortor leo eget erat. </p>
							<a href="#">Read More</a>
						</div>
					</div>

					<div class="gtco-practice-area-item animate-box">
						<div class="gtco-icon">
							<img src="images/scale.png" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
						</div>
						<div class="gtco-copy">
							<h3>Journal 1</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed scelerisque sapien. Sed sodales, libero non faucibus rutrum, purus tellus finibus diam, eget ornare tortor leo eget erat. </p>
							<a href="#">Read More</a>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>

	<section class="body-content page-content" data-section="gallery">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="col-md-8 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn">
							<h1 style="letter-spacing: 2px;">GALLERY</h1>
							<p class="sub" style="margin-top: -20px;"></p>
						</div>

                        <div class="portfolio col-3 portfolio-gallery gutter ">

                            <div class="portfolio-item cat1 cat3 ">
                                <div class="thumb">
                                    <img src="images/2.jpg" alt="">
                                    <div class="portfolio-hover">
                                        <div class="action-btn">
                                            <a href="images/2.jpg" class="popup-gallery" title="Title 1"> <i class="icon-basic_magnifier"></i>  </a>
                                        </div>
                                        <div class="portfolio-description">
                                            <h4><a href="images/2.jpg" class="popup-gallery2" title="Title 1">lightbox view</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio-item cat2 cat4 ">
                                <div class="thumb">
                                    <img src="images/2.jpg" alt="">
                                    <div class="portfolio-hover">
                                        <div class="action-btn">
                                            <a href="images/2.jpg" class="popup-gallery" title="Title 2"> <i class="icon-basic_magnifier"></i>  </a>
                                        </div>
                                        <div class="portfolio-description">
                                            <h4><a href="images/2.jpg" class="popup-gallery2" title="Title 2">lightbox view</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio-item cat3 cat5 ">
                                <div class="thumb">
                                    <img src="images/2.jpg" alt="">
                                    <div class="portfolio-hover">
                                        <div class="action-btn">
                                            <a href="images/2.jpg" class="popup-gallery" title="Title 3"> <i class="icon-basic_magnifier"></i>  </a>
                                        </div>
                                        <div class="portfolio-description">
                                            <h4><a href="images/2.jpg" class="popup-gallery2" title="Title 3">lightbox view</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio-item cat1 cat4 ">
                                <div class="thumb">
                                    <img src="images/2.jpg" alt="">
                                    <div class="portfolio-hover">
                                        <div class="action-btn">
                                            <a href="images/2.jpg" class="popup-gallery" title="Title 4"> <i class="icon-basic_magnifier"></i>  </a>
                                        </div>
                                        <div class="portfolio-description">
                                            <h4><a href="images/2.jpg" class="popup-gallery2" title="Title 4">lightbox view</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="portfolio-item cat2 cat4">
                                <div class="thumb">
                                    <img src="images/2.jpg" alt="">
                                    <div class="portfolio-hover">
                                        <div class="action-btn">
                                            <a href="images/2.jpg" class="popup-gallery" title="Title 5"> <i class="icon-basic_magnifier"></i>  </a>
                                        </div>
                                        <div class="portfolio-description">
                                            <h4><a href="images/2.jpg" class="popup-gallery2" title="Title 5">lightbox view</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
					<h2 class="post-title"><a href="#">A example blog post with image</a></h2>
					<div class="post-thumb"><a href="#"><img src="photos/post-thumb.jpg" alt="" class="img-responsive"></a></div>
					<div class="post-content">
						<p>Torquatos nihil utuntur liberamur benivole epularum evertunt accommodare, democrito didicerimus occulta egregios, praeclaram familiaritatem novi accusamus delectus opinemur mutae expetenda perpauca eas, concederetur fecerit ignorare delectari industria patientiamque. Invenire probes contereret maior opinor iucundo inciderint depravate, concupiscunt, deorum didicerimus, solitudo ingeniis confectum attento illustribus. Quanta suam, quieti usu necessarius. Sapienter existimo fruenda contentiones deduceret dolere minuti animi scientia, inbecilloque servire evertunt. Exeduntur vivi laudatum dicitur omnia verterem fuerit inanitate efficiatur <a href="#" class="more-link">Continue reading <span class="meta-nav">&rarr;</span></a></p>
					</div>
				</div>
				<div class="blog-post">
					<div class="post-meta">
						<span class="author"><a href="#"><img src="photos/author.jpg" alt=""> Asri Wulandari</a></span>,
						<span>At <strong>22 September, 2017</strong></span>
					</div>
					<h2 class="post-title"><a href="#">A example blog post with image</a></h2>
					<div class="post-thumb"><a href="#"><img src="photos/post-thumb.jpg" alt="" class="img-responsive"></a></div>
					<div class="post-content">
						<p>Torquatos nihil utuntur liberamur benivole epularum evertunt accommodare, democrito didicerimus occulta egregios, praeclaram familiaritatem novi accusamus delectus opinemur mutae expetenda perpauca eas, concederetur fecerit ignorare delectari industria patientiamque. Invenire probes contereret maior opinor iucundo inciderint depravate, concupiscunt, deorum didicerimus, solitudo ingeniis confectum attento illustribus. Quanta suam, quieti usu necessarius. Sapienter existimo fruenda contentiones deduceret dolere minuti animi scientia, inbecilloque servire evertunt. Exeduntur vivi laudatum dicitur omnia verterem fuerit inanitate efficiatur <a href="#" class="more-link">Continue reading <span class="meta-nav">&rarr;</span></a></p>
					</div>
				</div>
				<div class="blog-post">
					<div class="post-meta">
						<span class="author"><a href="#"><img src="photos/author.jpg" alt=""> Asri Wulandari</a></span>,
						<span>At <strong>22 September, 2017</strong></span>
					</div>
					<h2 class="post-title"><a href="#">A example blog post without image</a></h2>
					<div class="post-content">
						<p>Torquatos nihil utuntur liberamur benivole epularum evertunt accommodare, democrito didicerimus occulta egregios, praeclaram familiaritatem novi accusamus delectus opinemur mutae expetenda perpauca eas, concederetur fecerit ignorare delectari industria patientiamque. Invenire probes contereret maior opinor iucundo inciderint depravate, concupiscunt, deorum didicerimus, solitudo ingeniis confectum attento illustribus. Quanta suam, quieti usu necessarius. Sapienter existimo fruenda contentiones deduceret dolere minuti animi scientia, inbecilloque servire evertunt. Exeduntur vivi laudatum dicitur omnia verterem fuerit inanitate efficiatur <a href="#" class="more-link">Continue reading <span class="meta-nav">&rarr;</span></a></p>

					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="widgets">
					<div class="widget">
						<form action="" class="">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Search...">
								<span class="input-group-btn">
									<button class="btn btn-default btn-lg" type="submit"><i class="fa fa-search"></i></button>
								</span>
							</div>
						</form>
					</div>
					<div class="widget">
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
					</div>
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
					<div id="tag_cloud-3" class="widget widget_tag_cloud">
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
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

@section('script')

@endsection
@endsection()