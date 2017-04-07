@extends('layouts.master')
@section('css')
@stop

@section('content')
<div class="container-fluid">
	<h3 class="text-sm-left section-34">{!! trans('header.main.submenu.services.8') !!}</h3>
	<div class="col-md-12 section-20">
		<h6 class="text-sm-left">	
		@choice('header.main.text.formation',1)
		</h6>
		<div class="col-md-12">
			<p class="text-sm-justify">	
			@choice('header.main.text.formation',2)
			</p>
		</div>
	</div>
	<div class="col-md-12 section-20">
		<h6 class="text-sm-left">	
		@choice('header.main.text.formation',3)
		</h6>
		<div class="col-md-12">
			<p class="text-sm-left">	
			@choice('header.main.text.formation',4)
			</p>
			<p class="text-sm-justify">	
			@choice('header.main.text.formation',5)
			</p>
			<h6 class="text-sm-left">	
			@choice('header.main.text.formation',6)
			</h6>
			<p class="text-sm-justify">	
			@choice('header.main.text.formation',7)
			</p>
			<h6 class="text-sm-left">	
			@choice('header.main.text.formation',8)
			</h6>
			<div class="col-md-6">
				<ul class="list-group">
			    	<li class="list-group-item text-sm-left"> @choice('header.main.text.formation',9)</li>
			    	<li class="list-group-item text-sm-left"> @choice('header.main.text.formation',10)</li>	
				</ul>
			</div>
		</div>
	</div>
	<div class="col-md-12 section-20">
		<h6 class="text-sm-left">	
		@choice('header.main.text.formation',11)
		</h6>
		<div class="col-md-12">
			<p class="text-sm-left">	
			@choice('header.main.text.formation',12)
			</p>
			<h6 class="text-sm-left">	
			@choice('header.main.text.formation',13)
			</h6>
			<div class="col-md-12 section-20">
				<div class="col-md-6">
					<ul class="list-group">
						@for ($i = 14; $i < 21; $i++)
			    		<li class="list-group-item text-sm-left"> @choice('header.main.text.formation',$i)</li>
						@endfor
					</ul>
				</div>
			</div>
			<h6 class="text-sm-left">	
			@choice('header.main.text.formation',21)
			</h6>
			<p class="text-sm-left">	
			@choice('header.main.text.formation',22)
			</p>

			<h6 class="text-sm-left">	
			@choice('header.main.text.formation',23)
			</h6>
			<p class="text-sm-left">	
			@choice('header.main.text.formation',24)
			</p>

			<h6 class="text-sm-left">	
			@choice('header.main.text.formation',25)
			</h6>
			<div class="col-md-6">
				<ul class="list-group">
			    	<li class="list-group-item text-sm-left"> @choice('header.main.text.formation',26)</li>
				</ul>
			</div>

		</div>
	</div>
	
	<div class="col-md-12 section-20">

		<p class="text-sm-left">	
			@choice('header.main.text.formation',27)
			<a href="https://hps.org" target="_blank" class="btn btn-ellipse btn-java ">www.HPS.org</a>
		</p>
	</div>
</div>
@stop

@section('js')
@stop