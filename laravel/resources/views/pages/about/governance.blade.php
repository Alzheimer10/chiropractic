@extends('layouts.master')
@section('css')
@stop

@section('content')
<div class="container-fluid">
<h3 class="text-sm-left section-34">{!! trans('header.main.submenu.about.3') !!}</h3>
<div class="col-md-12">
	<p class="text-justify">	
	@choice('header.main.text.about3',1)
	</p>
</div>
<div class="col-md-4 section-20">
	
	<ul class="list-group">
		<li class="list-group-item">	
		@choice('header.main.text.about3',2) 
		</li>
		<li class="list-group-item">	
		@choice('header.main.text.about3',3) 
		</li>
		<li class="list-group-item">
		@choice('header.main.text.about3',4) 	
		</li>
	</ul>
</div>

<div class="col-md-12 section-20">
	<p class="text-justify">
	@choice('header.main.text.about3',5)
	</p>
	<p class="text-justify">	
	@choice('header.main.text.about3',6)
	</p>
</div>
<div class="col-md-8 section-20">
	<ul class="list-group">
		<li class="list-group-item">	
		@choice('header.main.text.about3',7) 
		</li>
		<li class="list-group-item">	
		@choice('header.main.text.about3',8) 
		</li>
		<li class="list-group-item">
		@choice('header.main.text.about3',9) 	
		</li>
	</ul>
</div>
</div>
@stop

@section('js')
@stop