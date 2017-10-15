<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Blog - Fipulp</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- Mobile Specific Metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="{{asset('css/blogfp/base.css')}}">
	<link rel="stylesheet" href="{{asset('css/blogfp/main.css')}}">
   <link rel="stylesheet" href="{{asset('css/blogfp/media-queries.css')}}">         

   <!-- Script
   =================================================== -->
	<script src="{{asset('js/blogfp/modernizr.js')}}"></script>

   <!-- Favicons
	=================================================== -->
	<link rel="shortcut icon" href="favicon.png" >

</head>

<body>

	<div id="top"></div>
   <div id="preloader"> 
	   <div id="status">
         <img src="{{asset('images/fipulp/blog/loader.gif')}}" height="60" width="60" alt="">
         <div class="loader">Loading...</div>
      </div>
   </div>

   <!-- Header
   =================================================== -->
   <header id="main-header">

   	<div class="row header-inner">

	      <div class="logo">
	         <a href="{{URL::route('fipulp')}}">Fipulp.</a>
	      </div>

	      <nav id="nav-wrap">         
	         
	         <a class="mobile-btn" href="#nav-wrap" title="Show navigation">
	         	<span class='menu-text'>Show Menu</span>
	         	<span class="menu-icon"></span>
	         </a>
         	<a class="mobile-btn" href="#" title="Hide navigation">
         		<span class='menu-text'>Hide Menu</span>
         		<span class="menu-icon"></span>
         	</a>         

	         <ul id="nav" class="nav">
	            <li><a href="{{URL::route('fipulp')}}">Home.</a></li>
	         </ul> 

	      </nav> <!-- /nav-wrap -->	      

	   </div> <!-- /header-inner -->

   </header>


   <!-- Page Title
   ================================================== -->
   <section id="page-title">	
   	  
		<div class="row">

			<div class="twelve columns">

				<h1>Our Blog<span>.</span></h1>
				<p>Aenean condimentum lacus sit amet luctus lobortis.</p>

			</div>			    

		</div> <!-- /row -->	   

   </section> <!-- /page-title -->


   <!-- Content
   ================================================== -->
   <section id="content">

   	<div class="row">

	   	<div id="main" class="tab-whole eight columns">

	         <article class="entry">

					<header class="entry-header">

						<h1 class="entry-title">
							{{$detailblogfipulp->title}}
						</h1> 				 
						
						<div class="entry-meta">
							<ul>
								<li>{{date('M d', strtotime($detailblogfipulp->created_at))}}, {{date('Y', strtotime($detailblogfipulp->created_at))}}</li>
								<li>{{$detailblogfipulp->created_by}}</li>
							</ul>
						</div> 
						 
					</header>

					<div class="entry-content-media">
						<div class="post-thumb">
							<img src="{{asset('/images/asriw/posts/'.$detailblogfipulp->img_header)}}">
						</div> 
					</div> 
						
					<div class="entry-content">
						{!!$detailblogfipulp->content!!}
					</div> 

	  			   <div class="pagenav group">
	  			   @if($previous)
		  			   <div class="prev-post">
                        <span class="prev"><a href="{{URL::route('detailblogfipulp',$previous['id'])}}" rel="prev">Previous</a></span>
                         @else
                         <span class="prev"><a href="#" rel="prev">Previous</a></span>
                         @endif
                     @if($next) 
		  				<span class="next"><a href="{{URL::route('detailblogfipulp',$next['id'])}}" rel="next">Next</a></span>  	
		  				@else
		  				<span class="next"><a href="#" rel="next">Next</a></span>			   
	  				@endif
	  				</div>  

				</article> <!-- /entry -->
							   
	         
	   	</div> <!-- /main -->  

	      <div class="tab-whole four columns end" id="secondary">
				
				<aside id="sidebar">

	            <div class="widget widget_text">

	               <h5 class="widget-title">About Fipulp</h5>
	               <div class="textwidget">Proin gravida nibh vel velit auctor aliquet.
	               Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,
	               nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus
	               a sit amet mauris. Morbi accumsan ipsum velit. 
	            	</div>

			      </div> <!-- /widget_text -->

	            <h3><b>Latest</b> Posts</h3>
							
							@foreach($recent as $rec)
							<div class="recent_posts_widget clearfix">
								<div class="post_item_img_widget">
									<img src="{{asset('/images/asriw/posts/'.$rec->img_header)}}" alt="{{$rec->title}}" />
								</div>
								<div class="post_item_content_widget">
									<a class="title" href="{{URL::route('detailblogbiodegum',$rec->id)}}" >{{$rec->title}}</a>
									<ul class="post_item_inf_widget">
										<li>{{date('d M Y', strtotime($rec->created_at))}}</li>
									</ul>
								</div>
							</div>
							@endforeach
						</div><!-- //POPULAR POSTS WIDGET -->
	         </aside> <!-- /sidebar -->	            

	      </div> <!-- /secondary -->

	   </div> <!-- /row -->      

   </section> <!-- /content -->  


   <!-- Footer
   ================================================== -->
   <footer>

      <div class="row">       

         <div class="six columns tab-whole footer-about">
				
				<h3>About Puremedia</h3>
               
            <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
            Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
            nibh id elit. 
            </p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
            	incididunt ut labore et dolore magna aliqua.</p>        

         </div> <!-- /footer-about -->

         <div class="six columns tab-whole right-cols">

            <div class="row">

               <div class="columns">
                  <h3 class="address">Contact Us</h3>
                  <p>
                  1600 Amphitheatre Parkway<br>
                  Mountain View, CA<br>
                  94043 US
                  </p>

                  <ul>
                    <li><a href="tel:6473438234">647.343.8234</a></li>
                    <li><a href="tel:1234567890">123.456.7890</a></li>
                    <li><a href="mailto:someone@puremedia.com">someone@puremedia.com</a></li>
                  </ul>                  
               </div> <!-- /columns -->             

               <div class="columns last">
                  <h3 class="contact">Follow Us</h3>

                  <ul>
                     <li><a href="#">Facebook</a></li>
                     <li><a href="#">Twitter</a></li>
                     <li><a href="#">GooglePlus</a></li>
                     <li><a href="#">Instagram</a></li>
                     <li><a href="#">Flickr</a></li>
                     <li><a href="#">Skype</a></li>
                  </ul>
                  
               </div> <!-- /columns --> 

            </div> <!-- /Row(nested) -->

         </div>

         <p class="c-copyright c-font-white">2017 &copy; Asri Peni Wulandari, Developed by <a href="http://scriptpainter.com" style="color:#337ab7;">ScriptPainter</a>
                            <span class="c-font-white">All Rights Reserved.</span>
         <div id="go-top">
            <a class="smoothscroll" title="Back to Top" href="#top"><span>Top</span><i class="fa fa-long-arrow-up"></i></a>
         </div>

      </div> <!-- /row -->

   </footer> <!-- /footer -->


   <!-- Java Script
   ================================================== -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/blogfp/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="{{asset('js/blogfp/jquery-migrate-1.2.1.min.js')}}"></script>   
   <script src="{{asset('js/blogfp/jquery.flexslider.js')}}"></script>
   <script src="{{asset('js/blogfp/jquery.fittext.js')}}"></script>
   <script src="{{asset('js/blogfp/backstretch.js')}}"></script> 
   <script src="{{asset('js/blogfp/waypoints.js')}}"></script>  
   <script src="{{asset('js/blogfp/main.js')}}"></script>

</body>

</html>