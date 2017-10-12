@extends('layout.menu2')
@section('halaman')
Blog
@endsection
@section('content')
<!--body content start-->

        <section class="body-content ">

            <div class="page-content" style="margin-top: 100px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <!--classic image post-->
                            @foreach($blog as $blogs)
                            @if(!empty($blogs->subtitle))
                            <div class="blog-classic">
                                <div class="date">
                                    {{date('d', strtotime($blogs->created_at))}}
                                    <span>{{date('M Y', strtotime($blogs->created_at))}}</span>
                                </div>
                                <div class="blog-post">
                                    <div class="full-width">
                                        <img src="{{asset('/images/asriw/posts/'.$blogs->img_header)}}" alt=""/>
                                    </div>
                                    <h4 class="text-uppercase"><a href="blog-single.html">{{$blogs->title}}</a></h4>
                                    <ul class="post-meta">
                                        <li><i class="fa fa-user"></i>posted by <a href="#">asri wulandari</a></li>
                                    </ul>
                                    <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.  </p>
                                    <a href="blog-single.html" class="btn btn-small btn-dark-solid  " style="background-color: #58914C !important;"> Continue Reading</a>
                                </div>
                            </div>
                            @else
                            <!--classic video post-->
                            <div class="blog-classic">
                                <div class="date">
                                    10
                                    <span>MAR 2015</span>
                                </div>
                                <div class="blog-post">
                                    <p class="video-fit m-bot-50">
                                        <iframe width="560" height="315" src="{{$blogs->subtitle}}"  allowfullscreen></iframe>
                                    </p>
                                    <h4 class="text-uppercase"><a href="blog-single.html">Video post</a></h4>
                                    <ul class="post-meta">
                                        <li><i class="fa fa-user"></i>posted by <a href="#">admin</a></li>
                                    </ul>
                                    <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.  </p>
                                    <a href="blog-single.html" class="btn btn-small btn-dark-solid  "> Continue Reading</a>
                                </div>

                            </div>
                            <!--classic video post-->
                            @endif
                            @endforeach

                            
                            <div class="paginate" style="text-align: center;">
                                {{ $blog->links() }}
                            </div>

                            <!--pagination-->
                            <!-- <div class="text-center">
                                <ul class="pagination custom-pagination">
                                    <li><a href="#">Prev</a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">Next</a></li>
                                </ul>
                            </div> -->
                            <!--pagination-->

                        </div>
                        <div class="col-md-1">
                            
                        </div>
                        <div class="col-md-3">

                            <!--author widget-->
                            <div class="widget">
                                <div class="heading-title-alt text-left heading-border-bottom">
                                    <h6 class="text-uppercase">about author</h6>
                                </div>
                                <div class="full-width avatar">
                                    <img src="{{asset('storage/asriw/about/'.$ab->image)}}" alt=""/>
                                </div>
                                <p>{{str_limit($ab->detail,50)}}</p>

                                <span class="">- ASRI PENI WULANDARI</span>
                            </div>
                            <!--author widget-->

                            <!--follow us widget-->
                            <div class="widget">
                                <div class="heading-title-alt text-left heading-border-bottom">
                                    <h6 class="text-uppercase">follow us</h6>
                                </div>
                                <div class="widget-social-link circle">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-behance"></i></a>
                                </div>
                            </div>
                            <!--follow us widget-->

                        </div>
                    </div>
                </div>
            </div>


        </section>
        <!--body content end-->
@section('script')

@endsection
@endsection()