@extends('layout.menu2')
@section('halaman')
Detail
@endsection
@section('content')

<!--body content start-->
        <section class="body-content ">

            <div class="page-content" style="margin-top: 80px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <!--classic image post-->
                            <div class="blog-classic">
                                <div class="blog-post">
                                    @if($detailblog->category == 1)
                                    <div class="full-width">
                                        <img src="{{asset('/images/asriw/posts/'.$detailblog->img_header)}}" alt=""/>
                                    </div>
                                    @else
                                    <iframe width="100%" height="415" src="{{$detailblog->subtitle}}" frameborder="0" allowfullscreen style="margin-bottom: 20px;"></iframe>
                                    @endif
                                    <h4 class="text-uppercase"><a href="#">{{$detailblog->title}}</a></h4>
                                    <ul class="post-meta">
                                        <li><i class="fa fa-user"></i>posted by <a href="#">Asri Wulandari</a></li>
                                    </ul>

                                    <p>{!!$detailblog->content!!}</p>

                                    
                                    <div class="pagination-row">

                                        <div class="pagination-post">
                                            @if($previous)
                                            <div class="prev-post">
                                                <a href="{{URL::route('detailblog',$previous['id'])}}">
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
                                            @endif

                                            <div class="post-list-link">
                                                <a href="{{URL::route('home')}}">
                                                    <i class="fa fa-home"></i>
                                                </a>
                                            </div>

                                        @if($next)  
                                            <div class="next-post">
                                                <a href="{{URL::route('detailblog',$next['id'])}}">
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

                                    </div>


                                    

                                </div>
                            </div>
                            <!--classic image post-->

                        </div>
                        <div class="col-md-1">
                            
                        </div>
                        <div class="col-md-3">

                            <!--author widget-->
                            <div class="widget">
                                <div class="heading-title-alt text-left heading-border-bottom">
                                    <h6 class="text-uppercase" style="letter-spacing: 1px;">about author</h6>
                                </div>
                                <div class="full-width avatar">
                                    <img src="{{asset('storage/asriw/about/'.$ab->image)}}" alt=""/>
                                </div>
                                <p>{{str_limit($ab->detail,50)}}</p>

                                <span class="">- ASRI PENI WULANDARI</span>
                            </div>
                            <!--author widget-->

                            <!--latest post widget-->
                            <div class="widget">
                                <div class="heading-title-alt text-left heading-border-bottom">
                                    <h6 class="text-uppercase">latest post</h6>
                                </div>
                                <ul class="widget-latest-post" style="margin-top: -20px;">
                                    @foreach($recent as $re)
                                    <li>
                                        <div class="thumb"><a href="#"><img src="{{asset('/images/asriw/posts/'.$re->img_header)}}" alt=""/></a></div>
                                        <div class="w-desk">
                                            <a href="{{URL::route('detailblog',$re->id)}}">{{$re->title}}</a>
                                            {{date('d M Y', strtotime($re->created_at))}}
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <!--latest post widget-->

                            

                        </div>
                    </div>
                </div>
            </div>


        </section>
        <!--body content end-->

@section('script')

@endsection
@endsection()