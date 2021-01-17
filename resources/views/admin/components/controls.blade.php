@if(!($mainControls??false))
    @if(\Illuminate\Support\Facades\Route::has($currentRouteName.'.edit'))
    <a href="{{ route($currentRouteName.'.edit', ['item' => $item->getFieldValue($item->primaryKey??'id')]) }}" class="btn btn-primary btn-sm">{{ __('Edit') }}</a>
    @endif

    @if(\Illuminate\Support\Facades\Route::has($currentRouteName.'.remove'))
        <a href="{{ route($currentRouteName.'.remove', ['item' => $item->getFieldValue($item->primaryKey??'id')]) }}" onclick="if(!confirm('Are you sure you want to remove this item?')) return false;" class="btn btn-danger btn-sm">{{ __('Remove') }}</a>
    @endif
@else
    @if(\Illuminate\Support\Facades\Route::has($currentRouteName.'.create'))
        <a href="{{ route($currentRouteName.'.create') }}" class="btn btn-success btn-sm">{{ __('New') }}</a>
    @endif
@endif
