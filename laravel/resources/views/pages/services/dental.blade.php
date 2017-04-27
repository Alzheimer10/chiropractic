@extends('layouts.master')
@section('css')
@stop

@section('content')
<div class="container-fluid">
	<div class="col-md-12 text-center">
		<h3 class="text-sm-center section-50"><!-- {!! trans('header.main.submenu.services.3') !!} -->
			ODONTOLOGIA E MEDICINA DENTÁRIA
		</h3>
		<div class="col-md-12">
			<p class="text-center">	
			<!-- @choice('header.main.text.dental',1) -->
			<b>30 ANOS A CRIAR SORRISOS! </b>
			</p>
		</div>
		<div class="col-md-12 section-20">
			<p class="text-justify">
			<!-- @choice('header.main.text.dental',2) --> 
			Uma alimentação saudável promove uma boa saúde oral.  A equipa da Clínica Médica-Dentária VitaSalus® ajudá-lo(a)-á a adoptar hábitos de vida mais saudáveis.
			</p>
			<p class="text-justify">
			<!-- @choice('header.main.text.dental',3) -->
			Está disponível uma ampla gama de tratamentos de medicina dentária incluindo ortodôncia, implantologia e prótese.
			</p>
		</div>
		<div class="cell-sm-6 cell-md-12 section-20 offset-top-50 text-md-center">
	        <div class="service col-md-10 col-md-offset-1 "><img src="../images/pages/dentaria/dentaria1.jpg" class="img-responsive"/>
	    	</div>
    	</div>
		<div class="col-md-12 section-20">
			<h6 class="text-center">
			@choice('header.main.text.dental',4)
			</h6>
		</div>
		<div class="col-md-12 section-20">
			<div class="col-md-12">
				<ul class="list-group list-none">
			    	<li class="text-sm-center"><a href="{{ route('contacts')}}" class="btn btn-ellipse btn-java offset-top-10"> @choice('header.main.text.dental',5)</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

@stop

@section('js')
@stop