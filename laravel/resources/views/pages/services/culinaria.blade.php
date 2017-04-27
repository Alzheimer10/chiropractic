@extends('layouts.master')
@section('css')
@stop

@section('content')


<div class="container-fluid">
	<div class="col-md-12 text-center">
		<h3 class="text-sm-center section-50">CURSO DE INTRODUÇÃO À NUTRIÇÃO E À CULINÁRIA VEGETARIANA</h3>
		<div class="col-md-12">
			<div class="col-md-12">
				<p class="text-justify">	
				O que são proteínas? Será que consigo desfrutar de uma boa saúde se for vegetariano? E as crianças? Como posso cozinhar com tofu? Será que o feijão é um bom alimento? Como posso preparar uma sobremesa mais saudável? Que combinações de alimentos promovem o bem-estar?
				</p>
    		</div>
    	</div>
		<div class="cell-sm-6 cell-md-12 offset-top-50 section-20 text-md-center">
	        <div class="service col-md-10 col-md-offset-1 "><img src="../images/pages/culinaria/culinaria1.jpg" class="img-responsive"/>
	    	</div>
    	</div>
    	<div class="col-md-12 section-20">
				<p class="text-justify">	
				Estas e muitas outras perguntas são respondidas no <b>Curso de Introdução à Nutrição e à Culinária Vegetariana.</b> Médicos e profissionais de cozinha ensinar-lhe-ão a preparar pratos deliciosos, totalmente vegetarianos (veganos) e saudáveis. Venha aprender mais
				</p>
		</div>
		<div class="cell-sm-6 cell-md-12 offset-top-50 text-md-center">
		        <div class="service col-md-10 col-md-offset-1 "><img src="../images/pages/culinaria/culinaria2.jpg" class="img-responsive"/>
		    	</div>
    	</div>
		<div class="col-md-12 section-20">
			<p class="text-sm-left">	
				<h6 class="text-sm-left">Duração do curso:</h6>
			</p>
			<p class="text-sm-left">
				12 horas (2 a 2,5 horas por sessão) em horário pós-laboral ou em dois Domingos consecutivos.
			</p>
		</div>
		<div class="col-md-12 ">
			<h6 class="text-sm-center">	
				@choice('header.main.text.formation',8)
				</h6>
		</div>
		<div class="col-md-12">
			<div class="col-md-6 col-md-offset-3">
					<ul class="list-group list-none ">
				    	<li class=" text-sm-center"><a href="{{ route('contacts')}}" class="btn btn-ellipse btn-java offset-top-10"> Centro de Vida Saudável VitaSalus <sup>&reg;</sup>, Espinhal - Penela</a> </li>
				    	<li class=" text-sm-center"><a href="{{ route('contacts')}}" class="btn btn-ellipse btn-java offset-top-10"> Consultório Médico na Picoas Medical, Lisboa</a> </li>
					</ul>
			</div>
		</div>
	</div>
</div>
@stop

@section('js')
@stop