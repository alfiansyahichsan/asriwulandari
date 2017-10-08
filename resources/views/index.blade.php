@extends('layout.menu')
@section('halaman')
Home
@endsection
@section('content')

<div class="wrapper">

    <!--hero section-->
    <div  class="parallax text-center vertical-align" style="background-image: url('images/bum.jpg');">
        <div class="container-mid">
            <div class="container">
                <div class="banner-title light-txt">
                    <h3 class="text-uppercase ls-20">Scientist | Lecturer</h3>
                    <h1 class="text-uppercase">ASRI PENI WULANDARI</h1>
                </div>
            </div>
        </div>
    </div>
    <!--hero section-->

    <!--body content start-->
        <section id="about" class="body-content" data-section="about">
            <div class="container">
                <div class="row page-content">
                	<div class="m-bot-20 inline-block">
                        <!--title-->
                        <div class="heading-title-alt border-short-bottom text-center">
                            <h2 class="text-uppercase">WELCOME</h2>
                        </div>
                        <!--title-->
                    </div>
                    <div class="post-list-aside">
                        <div class="post-single">
                    @foreach($about as $key=>$ab)
                            <div class="col-md-6">
                                <div class="post-slider post-img text-center">
                                    <ul class="slides">
                                            <img src="{{asset('storage/asriw/about/'.$ab->image)}}" alt="{{$ab->name}}">
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="">
                                    <h2 class="text-uppercase">
                                        {{$ab->name}}
                                    </h2>

                                    <p>
                                        {{$ab->detail}}
                                    </p>

                                </div>
                            </div>
                    @endforeach
                        </div>
                    </div>
                </div>

        </section>
        <!--body content end-->

    <section>
        <!--parallax-->
        <div class="parallax-inner" style="background-image: url(images/bum.jpg);">
            <div class="container">
                <div class="row">
                    <div class="heading-title-alt text-center m-bot-0 inline-block">
                        <h1 class="text-uppercase light-txt">ACHIEVEMENT</h1>
                        @foreach($achievement as $key=>$acv)
                         <div class="col-md-4 animate-box" data-animate-effect="fadeInRight">
							<div class="img-shadow test yuhu">
								<a data-toggle="modal" href="#myModal" data-id="{{$acv->id}}"><img src="images/icons/bdg.png" style="height: 60px;">
								<p>{{$acv->title}}</p></a>
							</div>
						</div>
		                @endforeach 
                    </div>

                </div>
            </div>
        </div>
        <!--parallax-->
    </section>
<hr>
    <section id="riset" data-section="hasilriset">

        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="m-bot-20 inline-block">
                        <!--title-->
                        <div class="heading-title-alt border-short-bottom text-center">
                            <h2 class="text-uppercase">HASIL RISET</h2>
                        </div>
                        <!--title-->
                    </div>
                    @foreach($riset as $key=>$rs)
                    @if (count($rs) < 1)
                    <div class="col-md-3"></div>
                    <div class="col-md-6" style="padding-bottom: 10px;">
                        <div class="team-member">
                            <div class="team-img">
                                <img src="{{asset('storage/asriw/hasilriset/'.$rs->image)}}" alt=""/>
                            </div>
                            <div class="team-hover">
                                <div class="desk">
                                    <a href=""><h2>{{$rs->title}}</h2>
                                    <p>{{$rs->deskripsi}}</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                    @else ($loop->reamaining)
                    <div class="col-md-6" style="padding-bottom: 10px;">
                        <div class="team-member">
                            <div class="team-img">
                                <img src="{{asset('storage/asriw/hasilriset/'.$rs->image)}}" alt=""/>
                            </div>
                            <div class="team-hover">
                                <div class="desk">
                                    <a href=""><h2>{{$rs->title}}</h2>
                                    <p>{{$rs->deskripsi}}</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach

                </div>
            </div>
        </div>
        <!--team member-->
    </section>
<hr>
    <section data-section="journal">
       <div class="page-content" style="background-image: url(images/4.png);">
                <div class="container">
                    <div class="row">
                        <div class="m-bot-20 inline-block">
                        <!--title-->
                        <div class="heading-title-alt border-short-bottom text-center">
                            <h2 class="text-uppercase">LATEST JOURNAL</h2>
                        </div>
                        <!--title-->
                    </div>
                        <div class="career-list">
                            <div class="col-md-4 ">
                                <div class="featured-item career-box">
                                    <div class="title text-uppercase">
                                        <h4 class="m-bot-0">Software Engineer</h4>
                                        <p>London</p>
                                    </div>
                                    <div class="desc">
                                        <p>We are a team of multi-skilled and curious digital specialists who are always up for a challenge and learning as fast as. We are a team of multi-skilled and curious digital specialists who are always ready to do.</p>
                                    </div>
                                    <a href="#" class="p-read-more">Read More <i class="icon-arrows_slim_right"></i></a>
                                </div>
                            </div>

                            <div class="col-md-4 ">
                                <div class="featured-item career-box">
                                    <div class="title text-uppercase">
                                        <h4 class="m-bot-0">Brand Manager</h4>
                                        <p>new york</p>
                                    </div>
                                    <div class="desc">
                                       <p> We are a team of multi-skilled and curious digital specialists who are always up for a challenge and learning as fast as. We are a team of multi-skilled and curious digital specialists who are always ready to do.</p>
                                    </div>
                                    <a href="#" class="p-read-more">Read More <i class="icon-arrows_slim_right"></i></a>
                                </div>
                            </div>

                            <div class="col-md-4 ">
                                <div class="featured-item career-box">
                                    <div class="title text-uppercase">
                                        <h4 class="m-bot-0">Php Developer</h4>
                                        <p>melbourn</p>
                                    </div>
                                    <div class="desc">
                                       <p> We are a team of multi-skilled and curious digital specialists who are always up for a challenge and learning as fast as. We are a team of multi-skilled and curious digital specialists who are always ready to do.</p>
                                    </div>
                                    <a href="#" class="p-read-more">Read More <i class="icon-arrows_slim_right"></i></a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
    </section>
    <hr>
    <section id="blog" data-section="blog">
        <!--blog-->
        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="m-bot-50 inline-block">
                        <!--title-->
                        <div class="heading-title-alt border-short-bottom text-center">
                            <h2 class="text-uppercase">LATEST BLOG</h2>
                        </div>
                        <!--title-->
                    </div>


                    <!--blog post-->
                    <div class="post-list-aside">
                        <div class="post-single">
                            <div class="col-md-6">
                                <div class="post-img title-img">
                                    <img src="images/4.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="post-desk">
                                    <h3 class="text-uppercase">
                                        <a href="#">teliti manfaat tanaman rami</a>
                                    </h3>
                                    <div class="date">
                                        <a href="#" class="author">Asri Wulandari</a> oktober 04, 2017
                                    </div>
                                    <p>
                                        Phasellus fringilla suscipit risus nec eleifend. Pellentesque eu quam sem, ac malesuada leo sem quam pellente. Awesome sliders give you the opportunity to showcase your content.
                                        fringilla suscipit risus nec eleifend. Pellentesque eu quam sem, ac malesuada leo sem quam pellente. Awesome sliders give you the opportunity to showcase your content.
                                    </p>
                                    <a href="#" class="p-read-more">Read More <i class="icon-arrows_slim_right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--blog post-->
                    <div class="post-list-aside">
                        <div class="post-single">
                            <div class="col-md-6">
                                <div class="post-img title-img">
                                    <img src="images/4.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="post-desk">
                                    <h3 class="text-uppercase">
                                        <a href="#">teliti manfaat tanaman rami</a>
                                    </h3>
                                    <div class="date">
                                        <a href="#" class="author">Asri Wulandari</a> oktober 04, 2017
                                    </div>
                                    <p>
                                        Phasellus fringilla suscipit risus nec eleifend. Pellentesque eu quam sem, ac malesuada leo sem quam pellente. Awesome sliders give you the opportunity to showcase your content.
                                        fringilla suscipit risus nec eleifend. Pellentesque eu quam sem, ac malesuada leo sem quam pellente. Awesome sliders give you the opportunity to showcase your content.
                                    </p>
                                    <a href="#" class="p-read-more">Read More <i class="icon-arrows_slim_right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post-list-aside">
                        <div class="post-single">
                            <div class="col-md-6">
                                <div class="post-img title-img">
                                    <img src="images/4.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="post-desk">
                                    <h3 class="text-uppercase">
                                        <a href="#">teliti manfaat tanaman rami</a>
                                    </h3>
                                    <div class="date">
                                        <a href="#" class="author">Asri Wulandari</a> oktober 04, 2017
                                    </div>
                                    <p>
                                        Phasellus fringilla suscipit risus nec eleifend. Pellentesque eu quam sem, ac malesuada leo sem quam pellente. Awesome sliders give you the opportunity to showcase your content.
                                        fringilla suscipit risus nec eleifend. Pellentesque eu quam sem, ac malesuada leo sem quam pellente. Awesome sliders give you the opportunity to showcase your content.
                                    </p>
                                    <a href="#" class="p-read-more">Read More <i class="icon-arrows_slim_right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!--blog-->

    </section>

    <!--body content start-->
        <section id="gallery" class="body-content page-content" data-section="gallery">
            <div class="page-content" id="portfolio">
                <div class="container-fluid">

                    <div class="row">
                        <div class="heading-title text-center">
                            <h2 class="text-uppercase">GALLERY</h2>
                        </div>

                        <div class="portfolio col-4 portfolio-gallery gutter m-bot-0 inline-block">

                            <div class="portfolio-item cat1 cat3 ">
                                <div class="thumb">
                                    <img src="images/img_team_2.jpg" alt="">
                                    <div class="portfolio-hover">
                                        <div class="action-btn">
                                            <a href="images/img_team_2.jpg" class="popup-gallery" title="Title 1"> <i class="icon-basic_magnifier"></i>  </a>
                                        </div>
                                        <div class="portfolio-description">
                                            <h4><a href="images/img_team_2.jpg" class="popup-gallery2" title="Title 1">lightbox view</a></h4>
                                            <p><a href="#">category</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio-item cat2 cat4 ">
                                <div class="thumb">
                                    <img src="images/img_team_1.jpg" alt="">
                                    <div class="portfolio-hover">
                                        <div class="action-btn">
                                            <a href="images/img_team_1.jpg" class="popup-gallery" title="Title 2"> <i class="icon-basic_magnifier"></i>  </a>
                                        </div>
                                        <div class="portfolio-description">
                                            <h4><a href="images/img_team_1.jpg" class="popup-gallery2" title="Title 2">lightbox view</a></h4>
                                            <p><a href="#">category</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio-item cat3 cat5 ">
                                <div class="thumb">
                                    <img src="images/img_team_2.jpg" alt="">
                                    <div class="portfolio-hover">
                                        <div class="action-btn">
                                            <a href="images/img_team_2.jpg" class="popup-gallery" title="Title 3"> <i class="icon-basic_magnifier"></i>  </a>
                                        </div>
                                        <div class="portfolio-description">
                                            <h4><a href="images/img_team_2.jpg" class="popup-gallery2" title="Title 3">lightbox view</a></h4>
                                            <p><a href="#">category</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio-item cat3 cat5 ">
                                <div class="thumb">
                                    <img src="images/img_team_1.jpg" alt="">
                                    <div class="portfolio-hover">
                                        <div class="action-btn">
                                            <a href="images/img_team_1.jpg" class="popup-gallery" title="Title 3"> <i class="icon-basic_magnifier"></i>  </a>
                                        </div>
                                        <div class="portfolio-description">
                                            <h4><a href="images/img_team_1.jpg" class="popup-gallery2" title="Title 3">lightbox view</a></h4>
                                            <p><a href="#">category</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio-item cat3 cat5 ">
                                <div class="thumb">
                                    <img src="images/img_team_2.jpg" alt="">
                                    <div class="portfolio-hover">
                                        <div class="action-btn">
                                            <a href="images/img_team_2.jpg" class="popup-gallery" title="Title 3"> <i class="icon-basic_magnifier"></i>  </a>
                                        </div>
                                        <div class="portfolio-description">
                                            <h4><a href="images/img_team_2.jpg" class="popup-gallery2" title="Title 3">lightbox view</a></h4>
                                            <p><a href="#">category</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!--body content end-->
        <hr/>

</div>



@section('script')

@endsection
@endsection()