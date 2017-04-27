@extends('layouts.master')
@section('css')
@stop

@section('content')
<div class="container-fluid">
	<div class="col-md-12 text-center">
		<h3 class="text-sm-center section-50"><!-- {!! trans('header.main.submenu.services.2') !!} -->
			CONSULTAS DE PSICOLOGIA CLÍNICA
		</h3>
		<div class="col-md-12 ">
			<p class="text-justify">	
			<!-- @choice('header.main.text.psychology',1) -->
			A doença mental é cada vez mais frequente em Portugal e a depressão é uma das doenças mais comuns nesta área. Proporcionamos um acompanhamento profissional, abordando a saúde mental de forma integral incluindo, por exemplo, hábitos de vida, tais como, a alimentação, descanso e atividade física.
			</p>
		</div>
		<div class="cell-sm-6 cell-md-12 offset-top-50 text-md-center">
	        <div class="service col-md-10 col-md-offset-1 "><img src="../images/pages/psicologia/psicologia1.jpg" class="img-responsive"/>
	    	</div>
    	</div>
		<div class="col-md-12 section-20">
			<h6 class="text-justify">
			<!-- @choice('header.main.text.psychology',2) --> 
			Estão disponíveis consultas individuais de acompanhamento de adultos, crianças e  jovens assim como terapia de casais e familiar. Problemas frequentemente abordados pelos profissionais da Associação Portuguesa de Medicina Preventiva:
			</h6>
		</div>
		<div class="col-md-12 section-20">
				<div class="col-md-6">
					<ul class="list-group">
						@for ($i = 3; $i < 7; $i++)
			    		<li class="text-sm-left"> @choice('header.main.text.psychology',$i)</li>
						@endfor
					</ul>
				</div>
				<div class="col-md-6">
					<ul class="list-group">
						@for ($i = 7; $i < 11; $i++)
			    		<li class="text-sm-left"> @choice('header.main.text.psychology',$i)</li>
						@endfor
					</ul>
					
			</div>
		</div>
		<div class="col-md-12 section-20">
			<h6 class="text-center">
			@choice('header.main.text.psychology',11)
			</h6>
		</div>

		<div class="col-md-12 ">
			<div class="col-md-12">
					<ul class="list-group list-none">
						@for ($i = 12; $i < 14; $i++)
			    		<li class="text-sm-center"><a href="{{ route('contacts')}}" class="btn btn-ellipse btn-java offset-top-10">@choice('header.main.text.psychology',$i)</a> </li>
						@endfor
					</ul>
					
			</div>
		</div>
	</div>
</div>
@stop

@section('js')
@stop