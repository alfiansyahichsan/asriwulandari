@extends('layout.menu2')
@section('halaman')
Detail
@endsection
@section('content')

<!--page title start-->
        <section class="page-title" style="background-color: white;">
            <div class="container">
            </div>
        </section>
        <!--page title end-->

        <!--body content start-->
        <section class="body-content ">

            <div class="page-content">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">
                            <!--classic image post-->
                            <div class="blog-classic">
                                <div class="blog-post">
                                    <!-- <div class="full-width">
                                        <img src="img/post/p12.jpg" alt=""/>
                                    </div> -->
                                    <h4 class="text-uppercase"><a href="blog-single.html">{{$jurnal->title}}</a></h4>
                                    <ul class="post-meta">
                                    </ul>

                                    <p>{{$jurnal->detail}}</p>

                                    <div class="pagination-post">
                                        @if($previous)
                                            <div class="prev-post">
                                                <a href="{{URL::route('detailjurnal',$previous['id'])}}">
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
                                                <a href="{{URL::route('detailjurnal',$next['id'])}}">
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


                    </div>
                </div>
            </div>


        </section>
        <!--body content end-->

@section('script')

@endsection
@endsection()