<div style="width:100px;float:left;margin-bottom: 20px; text-align: center;">
    <div style="width:20px;height:200px;margin:auto;">
        <a style="display:block;background:blue;width:100%;height:{{ ($item['amount_1']/$item['totalAmount'])*200 }}px;"
           title="{{$item['amount_1']}}"></a>
        <a style="display:block;background:red;width:100%;height:{{ ($item['amount_2']/$item['totalAmount'])*200 }}px;"
           title="{{$item['amount_2']}}"></a>
        <a style="display:block;background:green;width:100%;height:{{ ($item['amount_3']/$item['totalAmount'])*200 }}px;"
           title="{{$item['amount_3']}}"></a>
    </div>
    <div style="">
        {{ $item['title'] }}
    </div>
</div>
