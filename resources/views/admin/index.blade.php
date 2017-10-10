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
                        <div class="col-md-4 ">
                            <div class="featured-item career-box" style="width: 300px; text-align: center; margin-top: 25%;">
                                <div class="title text-uppercase">
                                    <h2 class="m-bot-0">Asriwulandari</h2>
                                </div>
                                <a href="{{URL::Route('suasridashboard')}}" class="p-read-more">GO <i class="icon-arrows_slim_right"></i></a>
                            </div>
                        </div>

                        <div class="col-md-4 ">
                            <div class="featured-item career-box" style="width: 300px; text-align: center; margin-top: 25%;">
                                <div class="title text-uppercase">
                                    <h2 class="m-bot-0">Biodegum</h2>
                                </div>
                                <a href="{{URL::Route('subiodegumdashboard')}}" class="p-read-more">GO <i class="icon-arrows_slim_right"></i></a>
                            </div>
                        </div>

                        <div class="col-md-4 ">
                            <div class="featured-item career-box" style="width: 300px; text-align: center; margin-top: 25%;">
                                <div class="title text-uppercase">
                                    <h2 class="m-bot-0">Fipulp</h2>
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