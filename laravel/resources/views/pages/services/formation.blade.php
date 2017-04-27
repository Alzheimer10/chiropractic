@extends('layouts.master')
@section('css')
@stop

@section('content')
<div class="container-fluid">
	<div class="col-md-12 text-center">
		<h3 class="text-sm-center section-50">{!! trans('header.main.submenu.services.8') !!}</h3>
		<div class="cell-sm-6 cell-md-12 offset-top-50 text-md-center">
	        <div class="service col-md-10 col-md-offset-1 "><img src="../images/pages/formacion/formacion1.jpg" class="img-responsive"/>
	    	</div>
    	</div>
		<div class="col-md-12 section-20">
			<h6 class="text-sm-left">	
			@choice('header.main.text.formation',11)
			</h6>
			<div class="col-md-12">
				<p class="text-sm-left">	
				@choice('header.main.text.formation',12)
				</p>
    		</div>
    	</div>
		<div class="cell-sm-6 cell-md-12 offset-top-50 text-md-center">
		        <div class="service col-md-10 col-md-offset-1 "><img src="../images/pages/formacion/formacion2.jpg" class="img-responsive"/>
		    	</div>
    	</div>
    	<div class="col-md-12 section-20">
				<h6 class="text-sm-left">	
				@choice('header.main.text.formation',13)
				</h6>
				<div class="col-md-12 section-20">
					<div class="col-md-6">
						<ul class="list-group">
							@for ($i = 14; $i < 21; $i++)
				    		<li class="text-sm-left"> @choice('header.main.text.formation',$i)</li>
							@endfor
						</ul>
					</div>
				</div>
				<h6 class="text-sm-left">	
				@choice('header.main.text.formation',21)
				</h6>
				<p class="text-sm-left">	
				@choice('header.main.text.formation',22)
				</p>

				<h6 class="text-sm-left">	
				@choice('header.main.text.formation',23)
				</h6>
				<p class="text-sm-left">	
				@choice('header.main.text.formation',24)
				</p>

		</div>
		
		<div class="col-md-12 section-20">

			<h6 class="text-sm-left">
				@choice('header.main.text.formation',27)
			</h6>	
			<p class="text-sm-left">
				<br>
				<a href="https://hps.org" target="_blank" class="btn btn-ellipse btn-java ">www.HPS.org</a>
                <a target="_blank" href="https://www.facebook.com/HealthPromotionSpiritualityTraining7/" class="icon fa fa-facebook icon-xs icon-rounded icon-gray-light-2">
                </a>
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
				    	<li class=" text-sm-center section-20"><a href="{{ route('contacts')}}" class="btn btn-ellipse btn-java "> @choice('header.main.text.formation',26)</a> </li>
					</ul>
			</div>
		</div>
	</div>
</div>
@stop

@section('js')
@stop