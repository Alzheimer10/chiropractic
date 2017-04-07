@extends('layouts.master')
@section('css')
@stop

@section('content')
<div class="container-fluid">
	<h3 class="text-sm-left section-34">{!! trans('header.main.submenu.services.7') !!}</h3>
	<div class="col-md-12 section-20">
		<p class="text-sm-justify">	
		@choice('header.main.text.healthy',1)
		</p>
		<p class="text-sm-justify">
		@choice('header.main.text.healthy',2) 
		</p>
	</div>
	
	<div class="col-md-12 section-20">
		<a href="{{ route('contacts')}}" class="btn btn-ellipse btn-java offset-top-24">{!! trans('header.main.menu.contacts') !!}</a>
	</div>
</div>
@stop

@section('js')
@stop