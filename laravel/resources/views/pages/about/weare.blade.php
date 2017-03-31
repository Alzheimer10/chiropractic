@extends('layouts.master')
@section('css')
@stop

@section('content')
<h2>{!! trans('header.main.submenu.about.1') !!}</h2>
<p>	
@choice('header.main.text.about1',1)
</p>
<p>
@choice('header.main.text.about1',2) 
</p>
<p>
@choice('header.main.text.about1',3)
</p>
<p>	
@choice('header.main.text.about1',4)
</p>
@stop

@section('js')
@stop