@extends('layouts.master')
@section('css')
@stop

@section('content')
<h2>{!! trans('header.main.submenu.services.3') !!}</h2>
<p>	
@choice('header.main.text.dental',1)
</p>
<p>
@choice('header.main.text.dental',2) 
</p>
<p>
@choice('header.main.text.dental',3)
</p>
<p>
@choice('header.main.text.dental',4)
</p>

<a href="{{ route('contacts')}}">{!! trans('header.main.menu.contacts') !!}</a>
@stop

@section('js')
@stop