<div>
<select name="lang" id="lang" class="selectpicker" onChange="window.location.href=this.value">

    <option   value="">{!! trans('header.main.lang') !!} </option>
	@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

    <option data-icon="flag {{$localeCode}}" value="{{LaravelLocalization::getLocalizedURL($localeCode) }}">{{ $properties['native'] }}</option>
	@endforeach
</select>	
</div>
