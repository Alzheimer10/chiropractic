@extends('layouts.master')
@section('css')
@stop

@section('content')
<h2>
{!! trans('header.main.submenu.about.2') !!}	
</h2>
<p>	
@choice('header.main.text.about2',1)
</p>
<p>
@choice('header.main.text.about2',2) 
</p>
<p>
@choice('header.main.text.about2',3)
</p>
<p>	
@choice('header.main.text.about2',4)
</p>
@stop

@section('js')
@stop