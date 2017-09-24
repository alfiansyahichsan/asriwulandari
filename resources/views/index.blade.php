@extends('layout.menu')
@section('halaman')
Home
@endsection
@section('content')
	<!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400, 900" rel="stylesheet"> -->
	<!-- Modernizr JS -->
	<script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>

	<section id="gtco-hero" class="gtco-cover bgImg" style="background-image: url(images/boom.jpg);"  data-section="home"  data-stellar-background-ratio="0.5">
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
              <div class="mb-sm-20 wow fadeInUp col-md-4 col-sm-6 col-xs-12" onclick="wow fadeInUp">
                <div class="team-item">
                  <div class="team-image"><img src="/images/ijo.jpg" alt="Member Photo"/>
                    <div class="team-detail">
                      <h3 class="font-alt" style="color: white;">RISET 1</h3>
                      <p class="font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&amp;nbsp;iaculis diam.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mb-sm-20 wow fadeInUp col-md-4 col-sm-6 col-xs-12" onclick="wow fadeInUp">
                <div class="team-item">
                  <div class="team-image"><img src="/images/ijo.jpg" alt="Member Photo"/>
                    <div class="team-detail">
                      <h3 class="font-alt" style="color: white;">RISET 2</h3>
                      <p class="font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&amp;nbsp;iaculis diam.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mb-sm-20 wow fadeInUp col-md-4 col-sm-6 col-xs-12" onclick="wow fadeInUp">
                <div class="team-item">
                  <div class="team-image"><img src="/images/ijo.jpg" alt="Member Photo"/>
                    <div class="team-detail">
                      <h3 class="font-alt" style="color: white;">RISET 3</h3>
                      <p class="font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&amp;nbsp;iaculis diam.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
		</div>
		<div class="container" style="margin-top: 60px;">
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
						</div>
					</div>

					<div class="gtco-practice-area-item animate-box">
						<div class="gtco-icon">
							<img src="images/scale.png" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
						</div>
						<div class="gtco-copy">
							<h3>Journal 1</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed scelerisque sapien. Sed sodales, libero non faucibus rutrum, purus tellus finibus diam, eget ornare tortor leo eget erat. </p>
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
						</div>
					</div>

					<div class="gtco-practice-area-item animate-box">
						<div class="gtco-icon">
							<img src="images/scale.png" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
						</div>
						<div class="gtco-copy">
							<h3>Journal 1</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed scelerisque sapien. Sed sodales, libero non faucibus rutrum, purus tellus finibus diam, eget ornare tortor leo eget erat. </p>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>

	<section class="portfolio" id="portfolio" data-section="gallery">
			<div class="container-fluid ">
				<div class="row">
					<div class="col-md-12 no-padding ">
						<div class="row row-pb-md">
							<div class="col-md-8 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn">
								<h1 style="letter-spacing: 2px;">GALLERY</h1>
								<p class="sub" style="margin-top: -20px;"></p>
							</div>
						</div>

						<div class="grid">
							<figure class="portfolio-item" data-groups='["photography"]'>
								<img src="photos/portfolio.jpg" alt=""/>
								<figcaption>
									<h2>Nice <span>Lily</span></h2>
									<p>Lily likes to play with crayons and pencils</p>
									<a href="#" class="btn btn-main"><i class="fa fa-link"></i> View more</a>
								</figcaption>
							</figure>
							<figure class="portfolio-item" data-groups='["design"]'>
								<img src="photos/portfolio2.jpg" alt=""/>
								<figcaption>
									<h2>Nice <span>Lily</span></h2>
									<p>Lily likes to play with crayons and pencils</p>
									<a href="#" class="btn btn-main"><i class="fa fa-link"></i> View more</a>
								</figcaption>
							</figure>
							<figure class="portfolio-item" data-groups='["photography"]'>
								<img src="photos/portfolio3.jpg" alt=""/>
								<figcaption>
									<h2>Nice <span>Lily</span></h2>
									<p>Lily likes to play with crayons and pencils</p>
									<a href="#" class="btn btn-main"><i class="fa fa-link"></i> View more</a>
								</figcaption>
							</figure>
							<figure class="portfolio-item" data-groups='["design"]'>
								<img src="photos/portfolio4.jpg" alt=""/>
								<figcaption>
									<h2>Nice <span>Lily</span></h2>
									<p>Lily likes to play with crayons and pencils</p>
									<a href="#" class="btn btn-main"><i class="fa fa-link"></i> View more</a>
								</figcaption>
							</figure>
							<figure class="portfolio-item" data-groups='["design"]'>
								<img src="photos/portfolio5.jpg" alt=""/>
								<figcaption>
									<h2>Nice <span>Lily</span></h2>
									<p>Lily likes to play with crayons and pencils</p>
									<a href="#" class="btn btn-main"><i class="fa fa-link"></i> View more</a>
								</figcaption>
							</figure>
							<figure class="portfolio-item" data-groups='["photography"]'>
								<img src="photos/portfolio6.jpg" alt=""/>
								<figcaption>
									<h2>Nice <span>Lily</span></h2>
									<p>Lily likes to play with crayons and pencils</p>
									<a href="#" class="btn btn-main"><i class="fa fa-link"></i> View more</a>
								</figcaption>
							</figure>
							<figure class="portfolio-item" data-groups='["codding"]'>
								<img src="photos/portfolio7.jpg" alt=""/>
								<figcaption>
									<h2>Nice <span>Lily</span></h2>
									<p>Lily likes to play with crayons and pencils</p>
									<a href="#" class="btn btn-main"><i class="fa fa-link"></i> View more</a>
								</figcaption>
							</figure>
							<figure class="portfolio-item" data-groups='["photography"]'>
								<img src="photos/portfolio8.jpg" alt=""/>
								<figcaption>
									<h2>Nice <span>Lily</span></h2>
									<p>Lily likes to play with crayons and pencils</p>
									<a href="#" class="btn btn-main"><i class="fa fa-link"></i> View more</a>
								</figcaption>
							</figure>
							<figure class="portfolio-item" data-groups='["codding"]'>
								<img src="photos/portfolio9.jpg" alt=""/>
								<figcaption>
									<h2>Nice <span>Lily</span></h2>
									<p>Lily likes to play with crayons and pencils</p>
									<a href="#" class="btn btn-main"><i class="fa fa-link"></i> View more</a>
								</figcaption>
							</figure>
							<figure class="portfolio-item" data-groups='["codding"]'>
								<img src="photos/portfolio10.jpg" alt=""/>
								<figcaption>
									<h2>Nice <span>Lily</span></h2>
									<p>Lily likes to play with crayons and pencils</p>
									<a href="#" class="btn btn-main"><i class="fa fa-link"></i> View more</a>
								</figcaption>
							</figure>
							<figure class="portfolio-item" data-groups='["design"]'>
								<img src="photos/portfolio11.jpg" alt=""/>
								<figcaption>
									<h2>Nice <span>Lily</span></h2>
									<p>Lily likes to play with crayons and pencils</p>
									<a href="#" class="btn btn-main"><i class="fa fa-link"></i> View more</a>
								</figcaption>
							</figure>
							<figure class="portfolio-item" data-groups='["design"]'>
								<img src="photos/portfolio12.jpg" alt=""/>
								<figcaption>
									<h2>Nice <span>Lily</span></h2>
									<p>Lily likes to play with crayons and pencils</p>
									<a href="#" class="btn btn-main"><i class="fa fa-link"></i> View more</a>
								</figcaption>
							</figure>
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