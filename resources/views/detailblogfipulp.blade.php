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
							Hey, This Is a Raleway Typeface!
						</h1> 				 
						
						<div class="entry-meta">
							<ul>
								<li>July 12, 2014</li>
								<span class="meta-sep">•</span>								
								<li><a rel="category tag" title="" href="#">Ghost</a></li>
								<span class="meta-sep">•</span>
								<li>John Doe</li>
							</ul>
						</div> 
						 
					</header>

					<div class="entry-content-media">
						<div class="post-thumb">
							<img src="{{asset('images/fipulp/blog/post-thumb.jpg')}}">
						</div> 
					</div> 
						
					<div class="entry-content">
						<p class="lead">Lorem ipsum Nisi enim est proident est magna occaecat dolore proident eu ex sunt consectetur consectetur dolore enim nisi exercitation adipisicing magna culpa commodo deserunt ut do Ut occaecat. Lorem ipsum Veniam consequat quis aliquip dolore minim ex labore dolor Excepteur Duis velit in officia Excepteur officia officia officia cillum ut elit in fugiat incididunt ea ad Ut ut ea ea dolor ex dolor eu magna voluptate irure consectetur.</p>

						<p>Duis ex ad cupidatat tempor Excepteur cillum cupidatat fugiat nostrud cupidatat dolor sunt sint sit nisi est eu exercitation incididunt adipisicing veniam velit id fugiat enim mollit amet anim veniam dolor dolor irure velit commodo cillum sit nulla ullamco magna amet magna cupidatat qui labore cillum sit in tempor veniam consequat non laborum adipisicing aliqua ea nisi sint ut quis proident ullamco ut dolore culpa occaecat ut laboris in sit minim cupidatat ut dolor voluptate enim veniam consequat occaecat fugiat in adipisicing in amet Ut nulla nisi non ut enim aliqua laborum mollit quis nostrud sed sed.
						</p>

						<p>Duis ex ad cupidatat tempor Excepteur cillum cupidatat fugiat nostrud cupidatat dolor sunt sint sit nisi est eu exercitation incididunt adipisicing veniam velit id fugiat enim mollit amet anim veniam dolor dolor irure velit commodo cillum sit nulla ullamco magna amet magna cupidatat qui labore cillum sit in tempor veniam consequat non laborum adipisicing aliqua ea nisi sint ut quis proident ullamco ut dolore culpa occaecat ut laboris in sit minim cupidatat ut dolor voluptate enim veniam consequat occaecat fugiat in adipisicing in amet Ut nulla nisi non ut enim aliqua laborum mollit quis nostrud sed sed.
						</p>
					</div> 

					<p class="tags">
	  			     	<span>Tagged in </span>:
	  				  	<a href="#">orci</a>, <a href="#">lectus</a>, <a href="#">varius</a>, <a href="#">turpis</a>
	  			   </p>

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

				<div id="comments">

	            <h3>5 Comments</h3>

	            <ol class="commentlist">

	               <li class="depth-1">

	                  <div class="avatar">
	                     <img width="50" height="50" alt="" src="{{asset('images/fipulp/blog/user-01.png')}}" class="avatar">
	                  </div>

	                  <div class="comment-content">

		                  <div class="comment-info">
		                     <cite>Itachi Uchiha</cite>

		                     <div class="comment-meta">
		                        <time datetime="2014-07-12T23:05" class="comment-time">Jul 12, 2014 @ 23:05</time>
		                        <span class="sep">/</span><a href="#" class="reply">Reply</a>
		                     </div>
		                  </div>

		         	     	<div class="comment-text">
		                    	<p>Adhuc quaerendum est ne, vis ut harum tantas noluisse, id suas iisque mei. Nec te inani ponderum vulputate,
		                        facilisi expetenda has et. Iudico dictas scriptorem an vim, ei alia mentitum est, ne has voluptua praesent.</p>
		                  </div>

		               </div>

	               </li>

	               <li class="thread-alt depth-1">

	                  <div class="avatar">
	                     <img width="50" height="50" alt="" src="{{asset('images/fipulp/blog/user-03.png')}}" class="avatar">
	                  </div>

	                  <div class="comment-content">

		                  <div class="comment-info">
		                     <cite>John Doe</cite>

		                     <div class="comment-meta">
		                        <time datetime="2014-07-12T24:05" class="comment-time">Jul 12, 2014 @ 24:05</time>
		                        <span class="sep">/</span><a href="#" class="reply">Reply</a>
		                     </div>
		                  </div>

		                  <div class="comment-text">
		                     <p>Sumo euismod dissentiunt ne sit, ad eos iudico qualisque adversarium, tota falli et mei. Esse euismod
		                        urbanitas ut sed, et duo scaevola pericula splendide. Primis veritus contentiones nec ad, nec et
		                        tantas semper delicatissimi.</p>                        
		                  </div>

		               </div>

	                  <ul class="children">

	                     <li class="depth-2">

	                        <div class="avatar">
	                           <img width="50" height="50" alt="" src="{{asset('images/fipulp/blog/user-03.png')}}" class="avatar">
	                        </div>

	                        <div class="comment-content">

		                        <div class="comment-info">
		                           <cite>Kakashi Hatake</cite>

		                           <div class="comment-meta">
		                              <time datetime="2014-07-12T25:05" class="comment-time">Jul 12, 2014 @ 25:05</time>
		                              <span class="sep">/</span><a href="#" class="reply">Reply</a>
		                           </div>
		                        </div>

		                        <div class="comment-text">
		                           <p>Duis sed odio sit amet nibh vulputate
		                              cursus a sit amet mauris. Morbi accumsan ipsum velit. Duis sed odio sit amet nibh vulputate
		                              cursus a sit amet mauris</p>
		                        </div>

	                        </div>

	                        <ul class="children">

	                           <li class="depth-3">

	                              <div class="avatar">
	                                 <img width="50" height="50" alt="" src="{{asset('images/fipulp/blog/user-03.png')}}" class="avatar">
	                              </div>

	                              <div class="comment-content">

		                              <div class="comment-info">
		                                 <cite>John Doe</cite>

		                                 <div class="comment-meta">
		                                    <time datetime="2014-07-12T25:15" class="comment-time">July 12, 2014 @ 25:15</time>
		                                    <span class="sep">/</span><a href="#" class="reply">Reply</a>
		                                 </div>
		                              </div>

		                              <div class="comment-text">
		                                 <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est
		                                    etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
		                              </div>

	                              </div>

	                           </li>

	                        </ul> <!-- /children -->	

	                     </li>

	                  </ul> <!-- /children -->

	               </li>

	               <li class="depth-1">

	                  <div class="avatar">
	                     <img width="50" height="50" alt="" src="{{asset('images/fipulp/blog/user-02.png')}}" class="avatar">
	                  </div>

	                  <div class="comment-content">

		                  <div class="comment-info">
		                     <cite>Hinata Hyuga</cite>

		                     <div class="comment-meta">
		                        <time datetime="2014-07-12T25:15" class="comment-time">July 12, 2014 @ 25:15</time>
		                        <span class="sep">/</span><a href="#" class="reply">Reply</a>
		                     </div>
		                  </div>

		                  <div class="comment-text">
		                     <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
		                  </div>

	                  </div>

	               </li>

	            </ol> <!-- /commentlist -->


	            <!-- respond -->
	            <div class="respond">

	               <h3>Leave a Comment</h3>

	               <!-- form -->
	               <form action="" method="post" id="contactForm" name="contactForm">
	  					<fieldset>

	                  <div class="group">
	  						   <label for="cName">Name <span class="required">*</span></label>
	  						   <input type="text" value="" size="35" id="cName" name="cName">
	                  </div>

	                  <div class="group">
	  						   <label for="cEmail">Email <span class="required">*</span></label>
	  						   <input type="text" value="" size="35" id="cEmail" name="cEmail">
	                  </div>

	                  <div class="group">
	  						   <label for="cWebsite">Website</label>
	  						   <input type="text" value="" size="35" id="cWebsite" name="cWebsite">
	                  </div>

	                  <div class="message group">
	                     <label for="cMessage">Message <span class="required">*</span></label>
	                     <textarea cols="50" rows="10" id="cMessage" name="cMessage"></textarea>
	                  </div>

	                  <button class="stroke medium" type="submit">Submit</button>

	  					</fieldset>
	  				   </form> <!-- /contactForm -->

	            </div> <!-- /respond -->

         	</div> <!-- /comments -->							   
	         
	   	</div> <!-- /main -->  

	      <div class="tab-whole four columns end" id="secondary">
				
				<aside id="sidebar">

	            <div class="widget widget_search">

	               <h5>Search</h5>
	               <form action="#">

	                  <input type="text" value="Search here..." onblur="if(this.value == '') { this.value = 'Search here...'; }" onfocus="if (this.value == 'Search here...') { this.value = ''; }" class="text-search" kl_virtual_keyboard_secure_input="on">
	                  <input type="submit" value="" class="submit-search">

	               </form>

	            </div> <!-- /widget_search -->

	            <div class="widget widget_text">

	               <h5 class="widget-title">Text Widget</h5>
	               <div class="textwidget">Proin gravida nibh vel velit auctor aliquet.
	               Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,
	               nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus
	               a sit amet mauris. Morbi accumsan ipsum velit. 
	            	</div>

			      </div> <!-- /widget_text -->

	            <div class="widget widget_categories">

	               <h5 class="widget-title">Categories</h5>
	               <ul class="link-list group">
	               	<li><a href="blog.html">All</a></li>
	                  <li><a href="#">Designs</a></li>
	                  <li><a href="#">Internet</a></li>
	                  <li><a href="#">Typography</a></li>
	                  <li><a href="#">Photography</a></li>
	                  <li><a href="#">Web Development</a></li>
	                  <li><a href="#">Projects</a></li>
	                  <li><a href="#">Other Stuff</a></li>
	               </ul>

	            </div> <!-- /widget_categories -->

	            <div class="widget widget_tag_cloud group">

	               <h5 class="widget-title">Tags</h5>
	               <div class="tagcloud group">
	                  <a href="#">drupal</a>
	                  <a href="#">joomla</a>
	                  <a href="#">ghost</a>
	                  <a href="#">wordpress</a>
	                  <a href="#">magento</a>
	                  <a href="#">tumblr</a>
	               </div>

	            </div> <!-- /widget_tag_cloud -->

	            <div class="widget widget_photostream">

	               <h5>Photostream</h5>
	               <ul class="photostream group">
	                  <li><a href="#"><img alt="thumbnail" src="{{asset('images/fipulp/blog/thumb.jpg')}}"></a></li>
	                  <li><a href="#"><img alt="thumbnail" src="{{asset('images/fipulp/blog/thumb.jpg')}}"></a></li>
	                  <li><a href="#"><img alt="thumbnail" src="{{asset('images/fipulp/blog/thumb.jpg')}}"></a></li>
	                  <li><a href="#"><img alt="thumbnail" src="{{asset('images/fipulp/blog/thumb.jpg')}}"></a></li>
	                  <li><a href="#"><img alt="thumbnail" src="{{asset('images/fipulp/blog/thumb.jpg')}}"></a></li>
	                  <li><a href="#"><img alt="thumbnail" src="{{asset('images/fipulp/blog/thumb.jpg')}}"></a></li>
	                  <li><a href="#"><img alt="thumbnail" src="{{asset('images/fipulp/blog/thumb.jpg')}}"></a></li>
	                  <li><a href="#"><img alt="thumbnail" src="{{asset('images/fipulp/blog/thumb.jpg')}}"></a></li>
	               </ul>

		         </div> <!-- /widget_photostream -->

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

         <p class="copyright">&copy; Copyright 2014 Puremedia. Design by <a href="http://www.styleshout.com/">Styleshout.</a></p>        

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