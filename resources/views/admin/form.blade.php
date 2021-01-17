@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">@currentForm($currentRouteName)</div>

                    <div class="card-body">
                        <form method="post" action="{{ route(implode('.', [$currentRouteName,'save']), ['item' => $item->id]) }}">
                            @csrf

                            @if($item->id !== null)
                                <input type="hidden" name="id" value="{{ $item->id }}"/>
                            @endif

                            @foreach($item::FORM_FIELDS as $itemName => $itemConfig)
                                @includeIf('admin.components.'.$itemConfig['type'], ['config' => $itemConfig, 'item' => $item])
                            @endforeach

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Save') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
