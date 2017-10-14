@extends('layout.menu3')
@section('halaman')
Super user dashboard
@endsection
@section('content')

<div class="wrapper">

<hr>
    <section data-section="journal">
                <div class="container">
                    <div class="career-list">
                    	<div class="m-bot-20 inline-block" style="margin-top: 5%; ">
                        <!--title-->
	                        <div class="heading-title-alt border-short-bottom text-center">
	                            <h2 class="text-uppercase">DASHBOARD SUPER USER</h2>
	                        </div>
	                        <!--title-->
	                    </div>
                        <div class="row">
                            <div class="col-md-4">
                              <!-- small box -->
                              <div class="small-box bg-yellow">
                                <div class="inner">
                                  <h3>{{$total["posts"]}}</h3>

                                  <p>Blog</p>
                                </div>
                                <div class="icon">
                                  <i class="ion ion-ios-paper"></i>
                                </div>
                                <a href="{{URL::Route('asriwulandari.blog.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                              </div>
                            </div>
                            <!-- ./col -->
                            
                            <div class="col-md-4">
                              <!-- small box -->
                              <div class="small-box bg-green">
                                <div class="inner">
                                  <h3>{{$total["view"]}}</h3>

                                  <p>Viewed Website</p>
                                </div>
                                <div class="icon">
                                  <i class="ion ion-person-add"></i>
                                </div>
                                <a href="#" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
                              </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-md-4">
                              <!-- small box -->
                              <div class="small-box bg-red">
                                <div class="inner">
                                  <h3>{{$total["click"]}}</h3>

                                  <p>Clicked Journal</p>
                                </div>
                                <div class="icon">
                                  <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="{{URL::Route('asriwulandari.journal.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                              </div>
                            </div>
                        </div>

                        <div class="col-md-4 ">
                            <div class="featured-item career-box" style="width: 300px; text-align: center; margin-top: 25%; box-shadow: 2px 2px 2px 2px #888888">
                                <div class="title text-uppercase bum">
                                    <a href="{{URL::Route('suasridashboard')}}"><h2 class="m-bot-0">Asriwulandari</h2></a>
                                </div>
                                <a href="{{URL::Route('suasridashboard')}}" class="p-read-more">GO <i class="icon-arrows_slim_right"></i></a>
                            </div>
                        </div>

                        <div class="col-md-4 ">
                            <div class="featured-item career-box" style="width: 300px; text-align: center; margin-top: 25%; box-shadow: 2px 2px 2px 2px #888888">
                                <div class="title text-uppercase bum">
                                    <a href="{{URL::Route('subiodegumdashboard')}}"><h2 class="m-bot-0">Biodegum</h2></a>
                                </div>
                                <a href="{{URL::Route('subiodegumdashboard')}}" class="p-read-more">GO <i class="icon-arrows_slim_right"></i></a>
                            </div>
                        </div>

                        <div class="col-md-4 ">
                            <div class="featured-item career-box" style="width: 300px; text-align: center; margin-top: 25%; box-shadow: 2px 2px 2px 2px #888888">
                                <div class="title text-uppercase bum">
                                    <a href="{{URL::Route('sufipulpdashboard')}}"><h2 class="m-bot-0">Fipulp</h2></a>
                                </div>
                                <a href="{{URL::Route('sufipulpdashboard')}}" class="p-read-more">GO <i class="icon-arrows_slim_right"></i></a>
                            </div>
                        </div>
                        
                    </div>

                </div>

    </section>
</div>


@section('script')

@endsection
@endsection()