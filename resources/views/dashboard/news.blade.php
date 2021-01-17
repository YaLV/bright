@foreach($items->news as $item)
    <div style="float:left; width: 25%;padding:5px;border:1px solid silver;height: 400px;text-align:center;position:relative">
        <div style="height: 150px;">
            <img src="{{ $item->title_image }}" style="object-fit: scale-down;width:100%;" alt="{{ $item->title }}">
        </div>
        <div style="height:80px;">
            <strong>{{ $item->title }}</strong>
        </div>
        <hr />
        <div style="text-align: left;">
            {!! \Illuminate\Support\Str::limit($item->short_description, 100, '...') !!}
        </div>
        <div class="float-right"><a href="{{ $item->url }}" target="_blank">Read more &raquo;</a></div>
    </div>
@endforeach
