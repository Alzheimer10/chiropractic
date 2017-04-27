@extends('layouts.master')
@section('css')
@stop

@section('content')
<div class="container-fluid">
	<div class="col-md-12 text-center">
		<h3 class="text-sm-center section-50">@choice('header.main.text.newStart',1)
		</h3>
		<div class="cell-sm-6 cell-md-12 offset-top-50 text-md-center">
	        <div class="service col-md-10 col-md-offset-1 "><img src="../images/pages/newstart/newstart1.jpg" class="img-responsive"/>
	    	</div>
    	</div>
		<div class="col-md-12">
			<h6 class="text-sm-justify section-20">	
			<!-- @choice('header.main.text.newStart',32) -->
			MUITAS DOENÇAS TÊM A SUA ORIGEM EM HÁBITOS DE VIDA TAIS COMO UM ALIMENTAÇÃO INCORRETA, SEDENTARISMO E A PRESENÇA FREQUENTE DE SENTIMENTOS DE ANSIEDADE E DEPRESSÃO.
			</h6>
		</div>
		<div class="col-md-12 section-20">
			<div class="col-md-12">
				<p class="text-sm-justify">
				<!-- @choice('header.main.text.newStart',2) --> 
				O programa <b>NEWSTART<sup>&reg;</sup></b> tem a duração de 8 ou 10 dias e foi elaborado por profissionais de saúde com o objetivo de proporcionar aos participantes, sob orientação clínica, uma excelente oportunidade para renovarem a sua saúde, através da adopção de 8 princípios de vida importantes tais como uma boa alimentação, atividade física adequada, água, luz solar, descanso, entre outros.
				</p>
				
			</div>
		</div>
		<div class="cell-sm-6 cell-md-12 offset-top-50 text-md-center">
	        <div class="service col-md-10 col-md-offset-1 "><img src="../images/pages/newstart/newstart2.jpg" class="img-responsive"/>
	    	</div>
    	</div>
		<div class="col-md-12 section-20">
			<h6 class="text-sm-justify">
			<!-- @choice('header.main.text.newStart',3) -->
			Hábitos de vida saudável são de especial importância na prevenção e tratamento de doenças tais como:
			</h6>
		</div>
		<div class="col-md-12 section-20">
				<div class="col-md-6">
					<ul class="list-group">
						@for ($i = 4; $i < 11; $i++)
			    		<li class=" text-sm-left"> @choice('header.main.text.newStart',$i)</li>
						@endfor
					</ul>
				</div>
				<div class="col-md-6">
					<ul class="list-group">
						@for ($i = 11; $i < 18; $i++)
			    		<li class=" text-sm-left"> @choice('header.main.text.newStart',$i)</li>
						@endfor
					</ul>
					
			</div>
		</div>
		<div class="cell-sm-6 cell-md-12 offset-top-50 text-md-center">
	        <div class="service col-md-10 col-md-offset-1 "><img src="../images/pages/newstart/newstart3.jpg" class="img-responsive"/>
	    	</div>
    	</div>
		<div class="col-md-12 section-20">
			<h6 class="text-sm-justify">
			<!-- @choice('header.main.text.newStart',18) -->
			Uma equipa multidisciplinar acompanhá-lo(a)-á durante o programa que terá a duração de 8 ou 10 dias, dependendo da época do ano em que se realiza. O programa inclui:
			</h6>
		</div>
		<div class="col-md-12 section-20">
				<div class="col-md-6">
					<ul class="list-group">
						@for ($i = 19; $i < 24; $i++)
			    		<li class=" text-sm-left"> @choice('header.main.text.newStart',$i)</li>
						@endfor
					</ul>
				</div>
				<div class="col-md-6">
					<ul class="list-group">
						@for ($i = 24; $i < 29; $i++)
			    		<li class=" text-sm-left"> @choice('header.main.text.newStart',$i)</li>
						@endfor
					</ul>
					
			</div>
		</div>
		<div class="col-md-12 section-20">
			<h6 class="text-sm-center">
				<!-- @choice('header.main.text.newStart',29) -->
				ESPERAMOS POR SI NO PROGRAMA <b>NEWSTART<sup>&reg;</sup></b>
			</h6>
		</div>
		<div class="col-md-12 section-20">
			<p>
				O Centro de Vida Saudável VitaSalus<sup>&reg;</sup>, localizado em <b>ambiente serrano, calmo e natural</b>, proporciona o espaço ideal para a realização de todas as atividades deste programa.
			</p>
		</div>
		<div class="col-md-12 section-20">
			<h6 class="text-sm-center">
				@choice('header.main.text.newStart',30)
			</h6>
			<p class="text-sm-center" >
				<a href="{{ route('contacts')}}" class="btn btn-ellipse btn-java offset-top-10">Centro de Vida Saudável VitaSalus<sup>&reg;</sup>, Espinhal - Penela</a>
			</p>
		</div>

	</div>
</div>
@stop

@section('js')
@stop