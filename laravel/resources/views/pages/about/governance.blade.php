@extends('layouts.master')
@section('css')
@stop

@section('content')
<h2>
{!! trans('header.main.submenu.about.3') !!}	
</h2>
<p>
	
 @choice('header.main.text.about3',1)
</p>
<p>
@choice('header.main.text.about3',2) 
</p>
<p>
@choice('header.main.text.about3',3)
</p>
@stop

@section('js')
@stop