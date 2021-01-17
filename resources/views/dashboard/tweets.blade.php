@foreach($items->tweets as $item)
    <div class="row">
        <div class="col-md-12 absence_item">
            {!! $item !!}
        </div>
    </div>
@endforeach
