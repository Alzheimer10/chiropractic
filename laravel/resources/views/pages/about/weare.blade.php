@extends('layouts.master')
@section('css')
@stop

@section('content')
<div class="container-fluid">
	<div class="col-md-12 text-center">
		<h3 class="text-sm-center section-50">{!! trans('header.main.submenu.about.1') !!}</h3>
		<div class="col-md-12">
			<p class="text-justify">	
			<!-- @choice('header.main.text.about1',1) -->
			A Associação Portuguesa de Medicina Preventiva (APMP) é uma organização sem fins lucrativos, fundada em 2003, por um grupo de profissionais com o objectivo de melhorar a saúde de indivíduos e comunidades através da promoção de hábitos de vida saudável.
			</p>
		</div>
		<div class="col-md-12 section-20">
			<p class="text-justify">
			<!-- @choice('header.main.text.about1',2) --> 
			A saúde é um estado de bem-estar físico, mental, emocional e espiritual. Reconhecemos que esta não depende apenas da genética ou da constituição física adquirida. Factores tais como hábitos de vida (alimentação, atividade física, descanso, higiene, etc), condições sócio-económicas e acessibilidade a serviços de saúde, contribuem para a saúde de indivíduos e comunidades.
			</p>
		</div>
		<div class="col-md-12 section-20">
			<p class="text-justify">	
			<!-- @choice('header.main.text.about1',4) -->
			A Associação Portuguesa de Medicina Preventiva dedica-se primariamente à promoção de hábitos de vida saudável através de consultas médicas, programas clínicos residenciais e de outras actividades, individuais e públicas, de educação
			para a saúde. Participa também em projectos humanitários de prestação de serviços médicos e de educação para a saúde em comunidades desfavorecidas tais como grupos de refugiados, predominantemente no estrangeiro.
			</p>
			
		</div>
		<div class="col-md-12 section-20">
			<p class="text-justify">
			<!-- @choice('header.main.text.about1',3) -->
			A Associação Portuguesa de Medicina Preventiva cumpre com os seus objectivos através da implementação de projectos de iniciativa e administração própria ou em colaboração/ parceria com autarquias e instituições públicas ou privadas.
			</p>
		</div>
	</div>
</div>
@stop

@section('js')
@stop