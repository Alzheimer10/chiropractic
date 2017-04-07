@extends('layouts.master')
@section('css')
@stop

@section('content')
<div class="container-fluid">
	<h3 class="text-sm-left section-34">{!! trans('header.main.submenu.services.6') !!}</h3>
	<div class="col-md-12 section-20">
		<h6 class="text-sm-left section-20">@choice('header.main.text.internment',1)</h6>
		<p class="text-sm-justify">	
		@choice('header.main.text.internment',13)
		</p>
	</div>
	<div class="col-md-12 section-20">
		<h6 class="text-sm-left section-20">@choice('header.main.text.internment',2)</h6>
	</div>
	<div class="col-md-12 section-20">
			<div class="col-md-6">
				<ul class="list-group">
					@for ($i = 3; $i < 7; $i++)
		    		<li class="list-group-item text-sm-left"> @choice('header.main.text.internment',$i)</li>
					@endfor
				</ul>
			</div>
			<div class="col-md-6">
				<ul class="list-group">
					@for ($i = 7; $i < 13; $i++)
		    		<li class="list-group-item text-sm-left"> @choice('header.main.text.internment',$i)</li>
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