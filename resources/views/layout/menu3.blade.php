@extends('master')
@section('layout')

    <!--header end-->
<body data-spy="scroll" data-target=".navbar" data-offset="50">
	<div class="pull-right">
		<a href="{{url('logout')}}" class="btn btn-default btn-flat">Sign out</a>
	</div>
    
@yield('content');

</body>
@endsection()