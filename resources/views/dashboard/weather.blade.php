@if($items->weatherData->weather !== null)
    @php($weather = current($items->weatherData->weather))

    <div class="row">
        <div class="col-md-3"><img
                src="{{ (string)sprintf(config('app.weather_icon_location'), (string)$weather->icon) }}"
                alt="{{ $weather->main }}" style="height:30px;"/></div>
        <div class="col-md-9" style="vertical-align:middle;"><h3>{{ $items->weatherData->main->temp }}
                &#0176;, {{ $items->weatherData->wind->speed }} m/s</h3></div>
    </div>
@endif
