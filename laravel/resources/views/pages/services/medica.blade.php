@extends('layouts.master')
@section('css')
@stop

@section('content')
<h2>{!! trans('header.main.submenu.services.1') !!}</h2>
<p>	
@choice('header.main.text.medica',1)
</p>
<p>
@choice('header.main.text.medica',2) 
</p>
<p>
@choice('header.main.text.medica',3)
</p>
<p>	
@choice('header.main.text.medica',4)
<a href="{{ route('contacts')}}">{!! trans('header.main.menu.contacts') !!}</a>
</p>
@stop

@section('js')
@stop