@extends('layouts.master')
@section('css')
@stop

@section('content')
<h2>{!! trans('header.main.submenu.services.7') !!}</h2>
<p>	
@choice('header.main.text.healthy',1)
</p>
<p>
@choice('header.main.text.healthy',2) 
</p>

<a href="{{ route('contacts')}}">{!! trans('header.main.menu.contacts') !!}</a>
@stop

@section('js')
@stop