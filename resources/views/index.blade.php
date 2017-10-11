@extends('layout.menu')
@section('halaman')
Home
@endsection
@section('content')

<div class="wrapper">

    <!--hero section-->
    <div  class="parallax text-center vertical-align" style="background-image: url('{{asset('storage/asriw/page/'.$page)}}');">
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
        <div class="parallax-inner" style="background-image: url('{{asset('storage/asriw/page/'.$achieve)}}');">
            <div class="container">
                <div class="row">
                    <div class="heading-title-alt text-center m-bot-0 inline-block">
                        <h1 class="text-uppercase light-txt">ACHIEVEMENT</h1>
                        @foreach($achievement as $key=>$acv)
                         <div class="col-md-4 animate-box" data-animate-effect="fadeInRight">
							<div class="img-shadow test yuhu">
                                <a data-toggle="modal" data-id="{{$acv->id}}" data-title="{{$acv->title}}" data-detail="{{$acv->detail}}" class="myModal" href="#myModal"><img src="images/icons/bdg.png" style="height: 60px;">
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
        <div class="parallax-inner" style="background-image: url('{{asset('storage/asriw/page/'.$journal)}}');">
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
                            @foreach($jurnal as $jrn)
                            <div class="col-md-4 ">
                                <div class="featured-item career-box">
                                    <div class="title text-uppercase">
                                        <h2 class="m-bot-0">{{$jrn->title}}</h2>
                                        <h5>Asri Peni Wulandari</h5>
                                    </div>
                                    <div class="desc">
                                        <p>{{str_limit($jrn->detail,100)}}</p>
                                    </div>
                                    <a href="{{URL::route('detailjurnal',$jrn->id)}}" class="p-read-more">Read More <i class="icon-arrows_slim_right"></i></a>
                                </div>
                            </div>
                            @endforeach
                            
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
                        @foreach($blog as $blg)
                        @if(!empty($blg->subtitle))
                        <div class="post-list-aside">
                            <div class="post-single">
                                <div class="col-md-6">
                                    <div class="post-img title-img">
                                        <img src="{{asset('/images/asriw/posts/'.$blg->img_header)}}" alt="{{$blg->img_header}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="post-desk">
                                        <h3 class="text-uppercase">
                                            <a href="{{URL::route('detailblog',$blg->id)}}">{{$blg->title}}</a>
                                        </h3>
                                        <div class="date">
                                            <a href="#" class="author">Asri Wulandari</a> {{date('d M Y', strtotime($blg->created_at))}}
                                        </div>
                                        <p>
                                            {!!str_limit($blg->content,200)!!}
                                        </p>
                                        <a href="{{URL::route('detailblog',$blg->id)}}" class="p-read-more">Read More <i class="icon-arrows_slim_right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="post-list-aside">
                            <div class="post-single">
                                <div class="col-md-6">
                                    <div class="post-img title-img">
                                        <iframe width="100%" height="300" src="{{$blg->subtitle}}" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="post-desk">
                                        <h3 class="text-uppercase">
                                            <a href="{{URL::route('detailblog',$blg->id)}}">{{$blg->title}}</a>
                                        </h3>
                                        <div class="date">
                                            <a href="#" class="author">Asri Wulandari</a> {{date('d M Y', strtotime($blg->created_at))}}
                                        </div>
                                        <p>
                                            {!!str_limit($blg->content,200)!!}
                                        </p>
                                        <a href="{{URL::route('detailblog',$blg->id)}}" class="p-read-more">Read More <i class="icon-arrows_slim_right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach

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

                            @foreach($gallery as $gal)
                            <div class="portfolio-item ">
                                <div class="thumb">
                                    <img src="{{asset('storage/asriw/gallery/'.$gal->image)}}" alt="{{$gal->title}}">
                                    <div class="portfolio-hover">
                                        <div class="action-btn">
                                            <a href="{{asset('storage/asriw/gallery/'.$gal->image)}}" class="popup-gallery" title="{{$gal->title}}"> <i class="icon-basic_magnifier"></i>  </a>
                                        </div>
                                        <div class="portfolio-description">
                                            <h4><a href="{{asset('storage/asriw/gallery/'.$gal->image)}}" class="popup-gallery2" title="{{$gal->title}}">{{$gal->title}}</a></h4>
                                            <p><a href="#"> </a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!--body content end-->
        <hr/>

</div>

<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title" style="text-align: center; letter-spacing: 3px;">ACHIEVEMENT</h3>
            </div>
            <div class="modal-body" style="text-align: center;">
                <textarea type="text" name="title" id="title" style="border: none; text-align: center; width: 100%;"></textarea>
                <br>
                <textarea type="text" name="detail" id="detail" value="" style="border: none; text-align: center; width: 100%; height: 500px; border: none;"></textarea><br><br>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">
                        <span class='glyphicon glyphicon-remove'></span> Close
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

@section('script')

@endsection
@endsection()