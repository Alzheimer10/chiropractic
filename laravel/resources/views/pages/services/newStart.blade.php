@extends('layouts.master')
@section('css')
@stop

@section('content')
<h2>{!! trans('header.main.submenu.services.4') !!}</h2>
<p>	
@choice('header.main.text.newStart',1)
</p>
<p>
@choice('header.main.text.newStart',2) 
</p>
<p>
@choice('header.main.text.newStart',3)
</p>
<p>
@choice('header.main.text.newStart',4)
</p>


<a href="{{ route('contacts')}}">{!! trans('header.main.menu.contacts') !!}</a>
@stop

@section('js')
@stop