@extends('layouts.master')
@section('css')
@stop

@section('content')
<div class="container-fluid">
  <div class="col-md-12 text-center">
	<h3 class="text-sm-center section-50">{!! trans('header.main.submenu.about.3') !!}</h3>
	<div class="col-md-12">
		<p class="text-justify">	
		<!-- @choice('header.main.text.about3',1) -->
		O modelo de organização da Associação Portuguesa de Medicina Preventiva assenta na acção de três grupos de associados efectivos que compõem os corpos sociais da mesma:
		</p>
	</div>
	<div class="col-md-12 section-20">
		
		<p class="text-left">
		1) Assembleia Geral <br>
		2) Conselho Fiscal<br>
		3) Direcção<br>
		</p>
	</div>

	<div class="col-md-12 section-20">
		<p class="text-justify">
		<!-- @choice('header.main.text.about3',5) -->
		As reuniões da Assembleia Geral da associação têm uma periodicidade anual e os associados eleitos para servir nos corpos sociais são mandatados para o fazer no período entre as Assembleias Gerais ordinárias.
		</p>
		<p class="text-justify">	
		<!-- @choice('header.main.text.about3',6) -->
		A Direcção da Associação é presentemente composta pelos seguintes sócios efectivos:
		</p>
	</div>
	<div class="col-md-12  text-sm-center section-20">
		<ul class="list-group list-none">
			<li >	
			@choice('header.main.text.about3',7) 
			</li>
			<li >	
			@choice('header.main.text.about3',8) 
			</li>
			<li >
			@choice('header.main.text.about3',9) 	
			</li>
		</ul>
	</div>
  </div>
</div>
@stop

@section('js')
@stop