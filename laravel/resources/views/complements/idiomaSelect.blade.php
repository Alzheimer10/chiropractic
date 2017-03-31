<select name="lang" id="lang" class="selectpicker" onChange="window.location.href=this.value" data-size="4" data-dropup-auto="true" data-width="100%">
    <option   value="">{!! trans('header.main.lang') !!} </option>
	@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
    	<option data-icon="flag {{$localeCode}}" value="{{LaravelLocalization::getLocalizedURL($localeCode) }}" 
			@if(LaravelLocalization::getCurrentLocale() == $localeCode) selected @endif
    	>{{ $properties['native'] }}</option>
	@endforeach
</select>	

<style type="text/css">
	.bootstrap-select .btn{
		padding: 9px;
		padding-right: 15px;
	}
</style>