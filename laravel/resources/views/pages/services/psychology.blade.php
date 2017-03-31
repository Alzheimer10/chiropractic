@extends('layouts.master')
@section('css')
@stop

@section('content')
<h2>{!! trans('header.main.submenu.services.2') !!}</h2>
<p>	
@choice('header.main.text.psychology',1)
</p>
<p>
@choice('header.main.text.psychology',2) 
</p>
<p>
@choice('header.main.text.psychology',3)
</p>

<a href="{{ route('contacts')}}">{!! trans('header.main.menu.contacts') !!}</a>
@stop

@section('js')
@stop