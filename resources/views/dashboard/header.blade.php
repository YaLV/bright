<h3
    {{ ($items['classes']??false)?"class=".$items['classes']:'' }}
    {{ ($items['css']??false)?"style=".$items['css']:'' }}
>{{ $items['text'] }}</h3>
