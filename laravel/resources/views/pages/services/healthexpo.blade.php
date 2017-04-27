@extends('layouts.master')
@section('css')
@stop

@section('content')
<div class="container-fluid">
	<div class="col-md-12 text-center">
		<h3 class="text-sm-center section-50">{!! trans('header.main.submenu.services.9') !!}</h3>
		<div class="col-md-12">
			<h5 class="text-sm-left">	
			Para mais informações .. 
			</h5>
		</div>
		
		<div class="col-md-12 section-20">
			<a href="{{ route('contacts')}}" class="btn btn-ellipse btn-java offset-top-24">{!! trans('header.main.menu.contacts') !!}</a>
		</div>
	</div>
</div>
@stop

@section('js')
@stop