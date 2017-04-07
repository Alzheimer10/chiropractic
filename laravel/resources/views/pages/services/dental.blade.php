@extends('layouts.master')
@section('css')
@stop

@section('content')
<div class="container-fluid">
	<h3 class="text-sm-left section-34">{!! trans('header.main.submenu.services.3') !!}</h3>
	<div class="col-md-12 section-20">
		<p class="text-justify">	
		@choice('header.main.text.dental',1)
		</p>
	</div>
	<div class="col-md-12 section-20">
		<p class="text-justify">
		@choice('header.main.text.dental',2) 
		</p>
	</div>
	<div class="col-md-12 section-20">
		<p class="text-justify">
		@choice('header.main.text.dental',3)
		</p>
	</div>
	<div class="col-md-12 section-20">
		<h6 class="text-justify">
		@choice('header.main.text.dental',4)
		</h6>
		<div class="col-md-5">
			<ul class="list-group">
		    	<li class="list-group-item text-sm-left"> @choice('header.main.text.dental',5)</li>
			</ul>
		</div>
	</div>
	<div class="col-md-12 section-20">
		<a href="{{ route('contacts')}}" class="btn btn-ellipse btn-java offset-top-24">{!! trans('header.main.menu.contacts') !!}</a>
	</div>
</div>

@stop

@section('js')
@stop