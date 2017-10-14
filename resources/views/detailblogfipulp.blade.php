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
				<h2><b>Blog</b></h2>
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
								<div class="single_blog_post_date">{{date('d M Y', strtotime($detailblogfipulp->created_at))}}</div>
								<div class="single_blog_post_title">{{$detailblogfipulp->title}}</div>
								<ul class="single_blog_post_info">
									<li><a href="javascript:void(0);" >Created by {{$detailblogfipulp->created_by}}</a></li>
								</ul>
							</div>
							<div class="single_blog_post_img"><img src="{{asset('/images/asriw/posts/'.$detailblogfipulp->img_header)}}" alt="{{$detailblogfipulp->img_header}}" /></div>
							
							<div class="single_blog_post_content">
								<p class="margbot50">{!!$detailblogfipulp->content!!}}</p>
							</div>
							
						</div><!-- //SINGLE BLOG POST -->
						
						
						<!-- SINGLE BLOG POST TAG -->
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

                                        

                                    </a></li>
								
							</ul>
						</div><!-- //SINGLE BLOG POST TAG -->
						
						
						<hr class="margbot80">
						
					</div><!-- //BLOG BLOCK -->
					
					
					<!-- SIDEBAR -->
					<div class="sidebar col-lg-3 col-md-3 padbot50">
						
						
						<!-- POPULAR POSTS WIDGET -->
						<div class="sidepanel widget_popular_posts">
							<h3><b>Latest</b> Posts</h3>
							
							@foreach($recent as $rec)
							<div class="recent_posts_widget clearfix">
								<div class="post_item_img_widget">
									<img src="{{asset('/images/asriw/posts/'.$rec->img_header)}}" alt="{{$rec->img_header}}" />
								</div>
								<div class="post_item_content_widget">
									<a class="title" href="{{URL::route('detailblogfipulp',$rec->id)}}" >{{$rec->title}}</a>
									<ul class="post_item_inf_widget">
										<li>{{date('d M Y', strtotime($rec->created_at))}}</li>
									</ul>
								</div>
							</div>
							@endforeach
						</div><!-- //POPULAR POSTS WIDGET -->
						
						<hr>
												
						<!-- TEXT WIDGET -->
						<div class="sidepanel widget_text">
							<h3>About<b> Blog</b></h3>
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