<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<title>Blog Fipulp</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<link rel="shortcut icon" href="images/favicon.ico">
    
	<!-- CSS -->
	<link href="{{asset('css/blogbdg/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('css/blogbdg/flexslider.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('css/blogbdg/animate.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('css/blogbdg/owl.carousel.css')}}" rel="stylesheet">
	<link href="{{asset('css/blogbdg/style.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('css/blogbdg/colors/')}}" rel="stylesheet" type="text/css" id="colors" />
    
	<!-- FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,700,500,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">	
    
	<!-- SCRIPTS -->
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if IE]><html class="ie" lang="en"> <![endif]-->
	
	<script src="{{asset('js/blogbdg/jquery.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('js/blogbdg/bootstrap.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('js/blogbdg/jquery.nicescroll.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('js/blogbdg/superfish.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('js/blogbdg/jquery.flexslider-min.js')}}" type="text/javascript"></script>
	<script src="{{asset('js/blogbdg/owl.carousel.js')}}"></script>
	<script src="{{asset('js/blogbdg/animate.js')}}" type="text/javascript"></script>
	<script src="{{asset('js/blogbdg/myscript.js')}}" type="text/javascript"></script>
	
</head>
<body>

<!-- PRELOADER -->
<img id="preloader" src="{{asset('images/preloader.gif')}}" alt="" />
<!-- //PRELOADER -->
<div class="preloader_hide">

	<!-- PAGE -->
	<div id="page" class="single_page">
	
		<!-- HEADER -->
		<header>
			
			<!-- MENU BLOCK -->
			<div class="menu_block">
			
				<!-- CONTAINER -->
				<div class="container clearfix">
					
					<!-- LOGO -->
					<div class="logo pull-left">
						<a href="{{URL::route('fipulp')}}" ><span class="b2">F</span><span class="b2">I</span><span class="b2">P</span><span class="b2">U</span><span class="b2">L</span><span class="b2">P</span></a>
					</div><!-- //LOGO -->
					
					<!-- SEARCH FORM -->
					<div id="search-form" class="pull-right">
						<form method="get" action="#">
							<input type="text" name="Search" value="Search" onFocus="if (this.value == 'Search') this.value = '';" onBlur="if (this.value == '') this.value = 'Search';" />
						</form>
					</div><!-- SEARCH FORM -->
					
					<!-- MENU -->
					<div class="pull-right">
						<nav class="navmenu center">
							<ul>
								<li class="first scroll_btn"><a href="{{URL::route('fipulp')}}">Home</a></li>
							</ul>
						</nav>
					</div><!-- //MENU -->
				</div><!-- //MENU BLOCK -->
			</div><!-- //CONTAINER -->
		</header><!-- //HEADER -->
		
		
		<!-- BREADCRUMBS -->
		<section class="breadcrumbs_block clearfix parallax">
			<div class="container center">
				<h2><b>The</b> Blog</h2>
				<p>Publication of the latest news, articles, and free apps.</p>
			</div>
		</section><!-- //BREADCRUMBS -->
		
		
		<!-- BLOG -->
		<section id="blog">
			
			<!-- CONTAINER -->
			<div class="container">
				
				<!-- ROW -->
				<div class="row">
				
					<!-- BLOG BLOCK -->
					<div class="blog_block col-lg-9 col-md-9 padbot50">
						
						<!-- SINGLE BLOG POST -->
						<div class="single_blog_post clearfix" data-animated="fadeInUp">
							<div class="single_blog_post_descr">
								<div class="single_blog_post_date">JANUARY 30 | 21:30</div>
								<div class="single_blog_post_title">Rihanna's Costume Designer Comes Into His Own with New Show</div>
								<ul class="single_blog_post_info">
									<li><a href="javascript:void(0);" >Admin</a></li>
									<li><a href="javascript:void(0);" >Creative</a></li>
									<li><a href="javascript:void(0);" >3 Comments</a></li>
								</ul>
							</div>
							<div class="single_blog_post_img"><img src="{{asset('images/blog/1.jpg')}}" alt="" /></div>
							
							<div class="single_blog_post_content">
								<p class="margbot50">On Tuesday, the daughters of Texas state senator Wendy Davis defended their mom against charges that she’s been smudging her biography to make it look like she was a more involved mom than she actually was. Davis, who is running for governor, has been under fire since a Dallas Morning News article accused her of “blurring” facts, like exactly when she got divorced and how long her family lived in a trailer park. That DMN article also seemingly took her to task for allowing her ex-husband to have parental custody of their daughter, quoting an anonymous source who said, Davis was “not going to let family or raising children or anything else get in her way.”</p>
								<p class="margbot30">I understand why Davis’ daughters felt they needed to defend their mom and her parenting. The onslaught on Davis’ parenting (and her politics) from the right, particularly in the wake of that DMN article, has been appalling: They’ve called her everything from “Abortion Barbie” to implying she’s a bad, gold digging mom. Her daughter, Dru, points out that her mom always shared joint custody, even though she was living in her father’s house.</p>
								<p class="margbot40">But she also discusses her mom’s involvement in other ways: Her mom was her Brownie troop leader. Her mom was her team’s field hockey mom when Dru was a senior in high school. “She went with me to every field hockey camp, tryout, program that I ever had,” Dru writes, adding, “my sister and I were always her first priority.”</p>
							</div>
							
						</div><!-- //SINGLE BLOG POST -->
						
						
						<!-- pagination -->
						<div class="single_blog_post_tags margbot50" data-animated="fadeInUp">
							<ul>
								<li><div class="pagination-row">

                                        <div class="pagination-post">
                                            @if($previous)
                                            <div class="prev-post">
                                                <a href="{{URL::route('detailblogfipulp',$previous['id'])}}">
                                                    <div class="arrow">
                                                        <i class="fa fa-angle-double-left"></i>
                                                    </div>
                                                    <div class="pagination-txt">
                                                        <span>Previous Post</span>
                                                    </div>
                                                </a>
                                            </div>
                                        @else
                                            <div class="prev-post">
                                                <a href="#">
                                                    <div class="arrow">
                                                        <i class="fa fa-angle-double-left"></i>
                                                    </div>
                                                    <div class="pagination-txt">
                                                        <span>Previous Post</span>
                                                    </div>
                                                </a>
                                            </div>
                                            @endif</a></li>
								<li> @if($next)  
                                            <div class="next-post">
                                                <a href="{{URL::route('detailblogfipulp',$next['id'])}}">
                                                    <div class="arrow">
                                                        <i class="fa fa-angle-double-right"></i>
                                                    </div>
                                                    <div class="pagination-txt">
                                                        <span>Next Post</span>
                                                    </div>
                                                </a>
                                            </div>
                                        @else
                                            <div class="next-post">
                                                <a href="#">
                                                    <div class="arrow">
                                                        <i class="fa fa-angle-double-right"></i>
                                                    </div>
                                                    <div class="pagination-txt">
                                                        <span>Next Post</span>
                                                    </div>
                                                </a>
                                            </div>
                                            @endif

                                        </div>

                                    </div></a></li>
								
							</ul>
						</div><!-- //pagination -->
						
						<hr>
						
						<!-- COMMENTS -->
						<div id="comments" class="margbot30" data-animated="fadeInUp">
							<h3><b>Comments </b><span class="comments_count">(152)</span></h3>
							
							<ul>
							   <li class="clearfix" data-animated="fadeInUp">
									<div class="pull-left avatar">
										<a href="javascript:void(0);" ><img src="{{asset('images/avatar1.jpg')}}" alt="" /></a>
									</div>
									<div class="comment_right">
										<div class="comment_info clearfix">
											<div class="pull-left comment_author">Stanislav Kerimov</div>
											<div class="pull-left comment_inf_sep">|</div>
											<div class="pull-left comment_date">13 January 2014</div>
										</div>
										<p>Thank you so much for putting this together Jeremy. Most of these seem like common sense but it is amazing how many times I see new employees having the worst days of their life because managers/leaders don’t want to be “bothered” with the new guy.</p>
									</div>
								</li>
								<li class="clearfix" data-animated="fadeInUp">
									<div class="pull-left avatar">
										<a href="javascript:void(0);" ><img src="{{asset('images/avatar2.jpg')}}" alt="" /></a>
									</div>
									<div class="comment_right">
										<div class="comment_info clearfix">
											<div class="pull-left comment_author">Anna Balashova</div>
											<div class="pull-left comment_inf_sep">|</div>
											<div class="pull-left comment_date">10 January 2014</div>
										</div>
										<p>I would add under “keep the busy” to make sure that every team member is aware of the new team member starting, and even thought the first 1-2 days may be meet and greats, to have them up with access to everything they need to preform their tasks.</p>
									</div>
								</li>
							</ul>
						</div>
						<!-- //COMMENTS -->
						
						<hr class="margbot80">
						
						<!-- LEAVE A COMMENT -->
						<div class="leave_comment" data-animated="fadeInUp">
							<h3><b>Leave a</b> Comment</h3>
							
							<form id="comment_form" class="row" action="#" method="post">
								<div class="col-lg-4 col-md-4">
									<input type="text" name="name" value="Your Name *" onFocus="if (this.value == 'Your Name *') this.value = '';" onBlur="if (this.value == '') this.value = 'Your Name *';" />
									<input type="text" name="phone" value="E-mail *" onFocus="if (this.value == 'E-mail *') this.value = '';" onBlur="if (this.value == '') this.value = 'E-mail *';" />
									<input type="text" name="phone" value="Web site" onFocus="if (this.value == 'Web site') this.value = '';" onBlur="if (this.value == '') this.value = 'Web site';" />
									<div class="comment_note">All fields marked with an asterisk (*) are required</div>
								</div>
								<div class="col-lg-8 col-md-8">
									<textarea name="message" onFocus="if (this.value == 'Your message *') this.value = '';" onBlur="if (this.value == '') this.value = 'Your message *';">Your message *</textarea>
									<input class="contact_btn pull-right" type="submit" value="Send message" />
								</div>
							</form>
						</div><!-- //LEAVE A COMMENT -->
					</div><!-- //BLOG BLOCK -->
					
					
					<!-- SIDEBAR -->
					<div class="sidebar col-lg-3 col-md-3 padbot50">
						
						<!-- META WIDGET -->
						<div class="sidepanel widget_meta">
							<ul>
								<li><a href="javascript:void(0);" >Advertising</a></li>
								<li><a href="javascript:void(0);" >Fashion & Trends</a></li>
								<li><a href="javascript:void(0);" >Media Projects</a></li>
								<li><a href="javascript:void(0);" >Small Business</a></li>
								<li><a href="javascript:void(0);" >Creative</a></li>
							</ul>
						</div><!-- //META WIDGET -->
						
						
						<!-- POPULAR POSTS WIDGET -->
						<div class="sidepanel widget_popular_posts">
							<h3><b>Popular</b> Posts</h3>
							
							<div class="recent_posts_widget clearfix">
								<div class="post_item_img_widget">
									<img src="{{asset('images/blog/1.jpg')}}" alt="" />
								</div>
								<div class="post_item_content_widget">
									<a class="title" href="blog.html" >How the Denver Broncos Cheerleaders Get in Shape for the Super Bowl</a>
									<ul class="post_item_inf_widget">
										<li>JANUARY 30  |  21:30</li>
									</ul>
								</div>
							</div>
							<div class="recent_posts_widget clearfix">
								<div class="post_item_img_widget">
									<img src="{{asset('images/blog/2.jpg')}}" alt="" />
								</div>
								<div class="post_item_content_widget">
									<a class="title" href="blog.html" >Barneys Spring Campaign Stars 17 Transgender Models</a>
									<ul class="post_item_inf_widget">
										<li>JANUARY 25  |  9:30</li>
									</ul>
								</div>
							</div>
							<div class="recent_posts_widget clearfix">
								<div class="post_item_img_widget">
									<img src="{{asset('images/blog/3.jpg')}}" alt="" />
								</div>
								<div class="post_item_content_widget">
									<a class="title" href="blog.html" >Dominic Cooper: I'm Nothing Like the Real James Bond</a>
									<ul class="post_item_inf_widget">
										<li>JANUARY 21  |  13:30</li>
									</ul>
								</div>
							</div>
						</div><!-- //POPULAR POSTS WIDGET -->
						
						<hr>
						
						<!-- POPULAR TAGS WIDGET -->
						<div class="sidepanel widget_tags">
							<h3><b>Popular</b> Tags</h3>
							<ul>
								<li><a href="javascript:void(0);" >Fashion</a></li>
								<li><a href="javascript:void(0);" >Shop</a></li>
								<li><a href="javascript:void(0);" >Color</a></li>
								<li><a href="javascript:void(0);" >Creative Agency</a></li>
								<li><a href="javascript:void(0);" >Theme</a></li>
								<li><a href="javascript:void(0);" >Dress</a></li>
								<li><a href="javascript:void(0);" >Wordpress</a></li>
							</ul>
						</div><!-- POPULAR TAGS WIDGET -->
						
						<hr>
						
						<!-- TEXT WIDGET -->
						<div class="sidepanel widget_text">
							<h3><b>About</b> Blog</h3>
							<p>I must admit this particular defense set me on edge a little bit, for two reasons. The first is that she’s being held to a completely different standard than male politicians are held to.</p>
						</div><!-- //TEXT WIDGET -->
					</div><!-- //SIDEBAR -->
				</div><!-- //ROW -->
			</div><!-- //CONTAINER -->
		</section><!-- //BLOG -->
	</div><!-- //PAGE -->

	
	<!-- CONTACTS -->
	<section id="contacts">
	</section><!-- //CONTACTS -->
	
	<!-- FOOTER -->
	<footer>
			
		<!-- CONTAINER -->
		<div class="container">
			
			<!-- ROW -->
			<div class="row" data-appear-top-offset="-200" data-animated="fadeInUp">
				
				<div class="col-lg-4 col-md-4 col-sm-6 padbot30">
				</div>
			</div><!-- //ROW -->
			<div class="row copyright">
				<div class="col-lg-12 text-center">
				
				 <p class="c-copyright c-font-white">2017 &copy; Asri Peni Wulandari, Developed by <a href="http://scriptpainter.com" style="color:#337ab7;">ScriptPainter</a>
                            <span class="c-font-white">All Rights Reserved.</span>
				</div>
			
			</div><!-- //ROW -->
		</div><!-- //CONTAINER -->
	</footer><!-- //FOOTER -->
	
	
	<!-- MAP -->
	<div id="map">
		<a class="map_hide" href="javascript:void(0);"><i class="fa fa-angle-right"></i><i class="fa fa-angle-left"></i></a>
		<iframe src="http://maps.google.com/maps?f=q&amp;give%20a%20hand=s_q&amp;hl=en&amp;geocode=&amp;q=london&amp;sll=37.0625,-95.677068&amp;sspn=42.631141,90.263672&amp;ie=UTF8&amp;hq=&amp;hnear=London,+United+Kingdom&amp;ll=51.500141,-0.126257&amp;spn=0.026448,0.039396&amp;z=14&amp;output=embed" ></iframe>
	</div><!-- //MAP -->

</div>
</body>
</html>