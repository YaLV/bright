@foreach($items as $item)
    <div class="row">
        <div class="col-md-4">
            {{$item->date->format(config('app.date_format'))}}
        </div>
        <div class="col-md-8">
            {{$item->activity}}
        </div>
    </div>
@endforeach
