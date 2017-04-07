@extends('layouts.master')
@section('css')
@stop

@section('content')
<div class="container-fluid">
	<h3 class="text-sm-left section-34">{!! trans('header.main.submenu.services.1') !!}</h3>
	<div class="col-md-12 section-20">
		<p class="text-justify">	
		@choice('header.main.text.medica',1)
		</p>
	</div>
	<div class="col-md-12 section-20">
		<h6 class="text-justify">
		@choice('header.main.text.medica',2) 
		</h6>
	</div>
	<div class="col-md-12">
		<div class="col-md-6">
			<ul class="list-group">
				@for ($i = 3; $i < 12; $i++)
	    		<li class="list-group-item text-sm-left"> @choice('header.main.text.medica',$i)</li>
				@endfor
			</ul>
		</div>
		<div class="col-md-6">
			<ul class="list-group">
				@for ($i = 12; $i < 19; $i++)
	    		<li class="list-group-item text-sm-left"> @choice('header.main.text.medica',$i)</li>
				@endfor
			</ul>
			
		</div>
	</div>
	<div class="col-md-12 section-20">
		<h6 class="text-sm-left">	
		@choice('header.main.text.medica',19)
		</h6>
		<div class="col-md-6">
				<ul class="list-group">
					@for ($i = 20; $i < 23; $i++)
		    		<li class="list-group-item text-sm-left"> @choice('header.main.text.medica',$i)</li>
					@endfor
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