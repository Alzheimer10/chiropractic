@extends('layouts.master')
@section('css')
@stop

@section('content')
<div class="container-fluid">
	<div class="col-md-12 text-center">
		<h3 class="text-sm-center section-50">{!! trans('header.main.submenu.services.1') !!}</h3>
		<div class="col-md-12">
			<p class="text-justify">	
			<!-- @choice('header.main.text.medica',1) -->
			Fruto de anos de experiência, a nossa prática clínica tem como objectivo a promoção da saúde em todas as suas vertentes.
			</p>
		</div>
		<div class="col-md-12 section-20">
			<h6 class="text-justify">
			<!-- @choice('header.main.text.medica',2) --> 
			PRESTAMOS ESPECIAL ATENÇÃO À RELAÇÃO ENTRE HÁBITOS DE VIDA TAIS COMO A ALIMENTAÇÃO, ATIVIDADE FÍSICA, DESCANSO, ENTRE OUTROS, E A SAÚDE
			</h6>
		</div>
		<div class="cell-sm-6 cell-md-12 offset-top-50 text-md-center">
	        <div class="service col-md-10 col-md-offset-1 "><img src="../images/pages/medica/consultamedica1.jpg" class="img-responsive"/>
	    	</div>
    	</div>
		<div class="col-md-12 section-20">
			<div class="col-md-6">
				<ul class="list-group" >
					@for ($i = 3; $i < 11; $i++)
		    		<li class="text-sm-left"> @choice('header.main.text.medica',$i)</li>
					@endfor
				</ul>
			</div>
			<div class="col-md-6">
				<ul class="list-group">
					@for ($i = 11; $i < 18; $i++)
		    		<li class="text-sm-left"> @choice('header.main.text.medica',$i)</li>
					@endfor
				</ul>
				
			</div>
		</div>
		<div class="col-md-12  section-20">
			<h6 class="text-sm-center">	
			@choice('header.main.text.medica',19)
			</h6>
		</div>
		<div class="col-md-12">
			<ul class="list-group list-none">
				@for ($i = 20; $i < 23; $i++)
			    	<li class=" text-sm-center">
			    	<a href="{{ route('contacts')}}" class="btn btn-ellipse btn-java offset-top-10"> @choice('header.main.text.medica',$i)</a></li>
				@endfor
			</ul>	
		</div>
		
	</div>
</div>
@stop

@section('js')
@stop