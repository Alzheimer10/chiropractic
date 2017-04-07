@extends('layouts.master')
@section('css')
@stop

@section('content')
<div class="container-fluid">
	<h3 class="text-sm-left section-34">
	{!! trans('header.main.submenu.about.2') !!}	
	</h3>
	<div class="col-md-12 section-20">
		<p class="text-justify">	
		@choice('header.main.text.about2',1)
		</p>
	</div>
	<div class="col-md-12 section-20">
		<p class="text-justify">	
		@choice('header.main.text.about2',2)
		</p>
	</div>
	<div class="col-md-12 section-20">
		<p class="text-justify">
		@choice('header.main.text.about2',3) 
		</p>
	</div>
	<div class="col-md-12 section-20">
		<p class="text-justify">
		@choice('header.main.text.about2',4)
		</p>
	</div>
	<div class="col-md-12 section-20">
		<p class="text-justify">	
		@choice('header.main.text.about2',5)
		</p>
	</div>
</div>
@stop

@section('js')
@stop