@extends('layouts.master')
@section('css')
@stop

@section('content')
<div class="container-fluid">
	<h3 class="text-sm-left section-34">{!! trans('header.main.submenu.services.5') !!}</h3>
	<div class="col-md-12 section-20">
		<h6 class="text-sm-left">	
		@choice('header.main.text.depresion',1)
		</h6>
		<p class="text-justify">
		@choice('header.main.text.depresion',2) 
		</p>
		<p class="text-justify">
		@choice('header.main.text.depresion',3) 
		</p>
	</div>
	<div class="col-md-12 section-20">
		<h6 class="text-sm-left section-34">	
		@choice('header.main.text.depresion',4)
		</h6>
	</div>
	<div class="col-md-12 section-20">
			<div class="col-md-6">
				<ul class="list-group">
					@for ($i = 5; $i < 9; $i++)
		    		<li class="list-group-item text-sm-left"> @choice('header.main.text.depresion',$i)</li>
					@endfor
				</ul>
			</div>
			<div class="col-md-6">
				<ul class="list-group">
					@for ($i = 9; $i < 15; $i++)
		    		<li class="list-group-item text-sm-left"> @choice('header.main.text.depresion',$i)</li>
					@endfor
				</ul>
				
		</div>
	</div>
	<div class="col-md-12 section-20">
	<h6 class="text-left">
			@choice('header.main.text.depresion',15)
		</h6>
		<p class="text-justify" >
			@choice('header.main.text.depresion',16)
		</p>
	</div>
	<div class="col-md-12 section-20">
		<a href="{{ route('contacts')}}" class="btn btn-ellipse btn-java offset-top-24">{!! trans('header.main.menu.contacts') !!}</a>
	</div>
</div>
@stop

@section('js')
@stop