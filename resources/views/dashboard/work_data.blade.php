@php($totals = $items['totals'])
@php($items = $items['items'])
<div class="row">
    <div class="col-md-10">
        <div class="row" style="overflow-x:scroll;">
            @foreach($items as $item)
                @if($item['title']??false)
                    @include('dashboard.work_data_item')
                @endif
            @endforeach
        </div>
    </div>
    @include('dashboard.work_data_item', ['item' => $totals])
</div>


