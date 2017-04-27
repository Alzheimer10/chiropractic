@extends('layouts.master')
@section('css')
@stop

@section('content')
<div class="container-fluid">
	<div class="col-md-12 text-center">
		<h3 class="text-sm-center section-50">{!! trans('header.main.submenu.services.7') !!}</h3>
		<div class="col-md-12">
			<p class="text-sm-justify section-20">
			Já sonhou em passar um fim-de-semana saudável ou umas férias em que o descanso do corpo e da mente seria acompanhado de uma alimentação vegetariana equilibrada, tudo isto num ambiente natural? Só, ou acompanhado, o Centro de Vida Saudável VitaSalus® é o lugar ideal para concretizar esse sonho.	
			<!-- @choice('header.main.text.healthy',1) -->
			</p>
		</div>
		<div class="cell-sm-6 cell-md-12 offset-top-50 text-md-center">
	        <div class="service col-md-10 col-md-offset-1 "><img src="../images/pages/saludable/saludable1.jpg" class="img-responsive"/>
	    	</div>
    	</div>
    	<div class="col-md-12 section-20">
    		<p class="text-sm-justify">
    		O AMBIENTE SERRANO E NATURAL, A AMIZADE GENUÍNA DE TODA A EQUIPA E A AJUDA QUE AQUI ENCONTRARÁ, CONTRIBUIRÃO PARA QUE DESFRUTE DE MAIS SAÚDE E REGANHE A ESPERANÇA.	
    		</p>
    	</div>
    	<div class="cell-sm-6 cell-md-12 offset-top-50 text-md-center">
	        <div class="service col-md-10 col-md-offset-1 "><img src="../images/pages/saludable/saludable2.jpg" class="img-responsive"/>
	    	</div>
    	</div>
    	<div class="col-md-12 section-20">
    		<p class="text-sm-justify">
    			Situado no Concelho de Penela, a poucos quilómetros da serra da Lousã e perto da bela cidade de Coimbra, este local oferece uma grande diversidade turística. Visite as cascatas da Pedra da Ferida, as Fragas de S. Simão, ou faça passeios na serra da Lousã. Aproveite para passear pelas históricas aldeias do xisto ou dar um mergulho na praia fluvial da Louçainha, muito próximo da propriedade.
    		</p>
    	</div>
    	<div class="cell-sm-6 cell-md-12 offset-top-50 text-md-center">
	        <div class="service col-md-10 col-md-offset-1 "><img src="../images/pages/saludable/saludable3.jpg" class="img-responsive"/>
	    	</div>
    	</div>
    	<div class="col-md-12 section-20">
    		<p class="text-sm-justify">
    			O Centro de Vida Saudável VitaSalus<sup>&reg;</sup>, localizado em <b>ambiente serrano, calmo e natural</b>, proporciona o espaço ideal para a realização de todas as atividades deste programa.
    		</p>
    	</div>
    	<div class="col-md-12">
    		<h6 class="text-sm-center">
    			LOCAL
    		</h6>
    	</div>

		<div class="col-md-12 section-20">
			<a href="{{ route('contacts')}}" class="btn btn-ellipse btn-java offset-top-10">Centro de Vida Saudável VitaSalus<sup>&reg;</sup>, Espinhal - Penela</a>
		</div>
	</div>
</div>
@stop

@section('js')
@stop