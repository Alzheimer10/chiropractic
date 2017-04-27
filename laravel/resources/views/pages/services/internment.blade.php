@extends('layouts.master')
@section('css')
@stop

@section('content')
<div class="container-fluid">
	<div class="col-md-12 text-center">
		<h3 class="text-sm-center section-50">{!! trans('header.main.submenu.services.6') !!}</h3>
		<div class="col-md-12 ">
			<h6 class="text-sm-left ">
			INTERNAMENTO PERSONALIZADO<!-- @choice('header.main.text.internment',1) --></h6>
			<div class="col-md-12">
				<p class="text-sm-justify">	
				@choice('header.main.text.internment',13)
				</p>
			</div>
		</div>
		<div class="cell-sm-6 cell-md-12 offset-top-50 text-md-center">
	        <div class="service col-md-10 col-md-offset-1 "><img src="../images/pages/internamiento/internamiento1.jpg" class="img-responsive"/>
	    	</div>
    	</div>
		<div class="col-md-12 section-20">
			<h6 class="text-sm-left section-20">@choice('header.main.text.internment',2)</h6>
		</div>
		<div class="col-md-12 ">
				<div class="col-md-6">
					<ul class="list-group">
						@for ($i = 3; $i < 7; $i++)
			    		<li class="text-sm-left"> @choice('header.main.text.internment',$i)</li>
						@endfor
					</ul>
				</div>
				<div class="col-md-6">
					<ul class="list-group">
						@for ($i = 7; $i < 13; $i++)
			    		<li class="text-sm-left"> @choice('header.main.text.internment',$i)</li>
						@endfor
					</ul>
					
			</div>
		</div>
		<div class="col-md-12 section-20">
			O Centro de Vida Saudável VitaSalus<sup>&reg;</sup>, localizado em ambiente serrano, calmo e natural, proporciona o espaço ideal para a realização de todas as atividades deste programa
		</div>
		<div class="col-md-12 ">
			<h6 class="text-center">
			<!-- @choice('header.main.text.dental',4) -->
			Local
			</h6>
		</div>
		<div class="col-md-12 ">
			<div class="col-md-12">
				<ul class="list-group list-none">
			    	<li class="text-sm-center"><a href="{{ route('contacts')}}" class="btn btn-ellipse btn-java offset-top-10"> 
			    	 Centro de Vida Saudável VitaSalus<sup>&reg;</sup>, Espinhal - Penela</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
@stop

@section('js')
@stop