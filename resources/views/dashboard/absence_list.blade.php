@foreach($items as $item)
<div class="row">
    <div class="col-md-12 absence_item">
        <div class="row">
            <div class="col-md-5">
                {{ $item->timeFrom }}
                <br />
                <strong>Absent:</strong> <br /> {{ $item->getMissingFor() }}
            </div>
            <div class="col-md-7">
                <strong>{{ $item->title }}</strong>
                <br />
                {{ $item->description }}
            </div>
        </div>
    </div>
</div>
    <hr />
@endforeach
