@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">{{ __('Dashboard') }}</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                @foreach($components as $component)
                        <div class="row">
                            @foreach($component as $item)
                                <div class="col-md-{{$item['size']}}">
                                    @includeIf('dashboard.'.$item['template'], ['items' => $item['content']])
                                </div>
                            @endforeach
                        </div>
                @endforeach

            </div>
        </div>
    </div>
</div>

@endsection
