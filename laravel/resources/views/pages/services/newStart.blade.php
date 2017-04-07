@extends('layouts.master')
@section('css')
@stop

@section('content')
<div class="container-fluid">
	<h3 class="text-sm-left section-34">@choice('header.main.text.newStart',1)
	</h3>

	<div class="col-md-12 section-20">
		<h6 class="text-sm-justify">	
		@choice('header.main.text.newStart',32)
		</h6>
	</div>
	<div class="col-md-12 section-20">
		<p class="text-sm-justify">
		@choice('header.main.text.newStart',2) 
		</p>
	</div>
	<div class="col-md-12 section-20">
		<h6 class="text-sm-justify">
		@choice('header.main.text.newStart',3)
		</h6>
	</div>
	<div class="col-md-12 section-20">
			<div class="col-md-6">
				<ul class="list-group">
					@for ($i = 4; $i < 11; $i++)
		    		<li class="list-group-item text-sm-left"> @choice('header.main.text.newStart',$i)</li>
					@endfor
				</ul>
			</div>
			<div class="col-md-6">
				<ul class="list-group">
					@for ($i = 11; $i < 18; $i++)
		    		<li class="list-group-item text-sm-left"> @choice('header.main.text.newStart',$i)</li>
					@endfor
				</ul>
				
		</div>
	</div>
	<div class="col-md-12 section-20">
		<h6 class="text-sm-justify">
		@choice('header.main.text.newStart',18)
		</h6>
	</div>
	<div class="col-md-12 section-20">
			<div class="col-md-6">
				<ul class="list-group">
					@for ($i = 19; $i < 24; $i++)
		    		<li class="list-group-item text-sm-left"> @choice('header.main.text.newStart',$i)</li>
					@endfor
				</ul>
			</div>
			<div class="col-md-6">
				<ul class="list-group">
					@for ($i = 24; $i < 29; $i++)
		    		<li class="list-group-item text-sm-left"> @choice('header.main.text.newStart',$i)</li>
					@endfor
				</ul>
				
		</div>
	</div>
	<div class="col-md-12 section-20">
		<h6 class="text-sm-center">
			@choice('header.main.text.newStart',29)
		</h6>
	</div>
	<div class="col-md-12 section-20">
		<h6 class="text-sm-left">
			@choice('header.main.text.newStart',30)
		</h6>
		<p class="text-sm-justify" >
			@choice('header.main.text.newStart',31)
		</p>
	</div>


	<div class="col-md-12 section-20">
		<a href="{{ route('contacts')}}" class="btn btn-ellipse btn-java offset-top-24">{!! trans('header.main.menu.contacts') !!}</a>
	</div>
</div>
@stop

@section('js')
@stop