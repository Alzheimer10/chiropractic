@extends('layouts.master')
@section('css')
@stop

@section('content')
<div class="container-fluid">
	<div class="col-md-12 text-center">
		<h3 class="text-sm-center section-50">{!! trans('header.main.submenu.services.5') !!}</h3>
		<div class="col-md-12 ">
			<h6 class="text-sm-left">	
			@choice('header.main.text.depresion',1)
			</h6>
    	 </div>
		 <div class="cell-sm-6 cell-md-12 offset-top-50 text-md-center section-20">
		    <div class="service col-md-10 col-md-offset-1 "><img src="../images/pages/depresion/depresion1.jpg" class="img-responsive"/>
		    </div>
    	 </div>
    	 <div class="col-md-12 ">
			<div class="col-md-12 section-20">
			<p class="text-justify">
			@choice('header.main.text.depresion',2) 
			</p>
			<p class="text-justify">
			@choice('header.main.text.depresion',3) 
			</p>
			</div>
		</div>
		<div class="cell-sm-6 cell-md-12 offset-top-50 text-md-center">
		        <div class="service col-md-10 col-md-offset-1 "><img src="../images/pages/depresion/depresion2.jpg" class="img-responsive"/>
		    	</div>
    	 </div>
		<div class="col-md-12 ">
			<p class="text-sm-left section-34">	
			<!-- @choice('header.main.text.depresion',4) -->
			Para fazer face à crescente necessidade de apoio a pessoas que sofrem de depressão, foi desenvolvido um programa multidisciplinar que integra a saúde física, mental, social e espiritual, na ajuda à recuperação da depressão e ansiedade.  O programa tem a duração de 10 dias e inclui:
			</p>
		</div>
		<div class="col-md-12 ">
				<div class="col-md-6">
					<ul class="list-group">
						@for ($i = 5; $i < 9; $i++)
			    		<li class=" text-sm-left"> @choice('header.main.text.depresion',$i)</li>
						@endfor
					</ul>
				</div>
				<div class="col-md-6">
					<ul class="list-group">
						@for ($i = 9; $i < 15; $i++)
			    		<li class="text-sm-left"> @choice('header.main.text.depresion',$i)</li>
						@endfor
					</ul>
					
			</div>
		</div>
		<div class="col-md-12 section-20">
			<p class="text-justify">
				O Centro de Vida Saudável VitaSalus<sup>&reg;</sup>, localizado em ambiente serrano, calmo e natural, proporciona o espaço ideal para a realização de todas as atividades deste programa.
		</div>
		<div class="col-md-12 section-20">
		<h6 class="text-center">
				@choice('header.main.text.depresion',15)
			</h6>
			<p class="text-center" >
				<a href="{{ route('contacts')}}" class="btn btn-ellipse btn-java offset-top-10">Centro de Vida Saudável VitaSalus<sup>&reg;</sup>, Espinhal - Penela</a>
			</p>
		</div>
		
	</div>
</div>
@stop

@section('js')
@stop