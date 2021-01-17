@extends('layouts.app')

@push('headItems')
    <tr>
        @foreach($model::LIST as $lineContent)
            @if($lineContent['title']??false)
                <th>{{ $lineContent['title'] }}</th>
            @else
                <td class="controls">@include('admin.components.controls', ['mainControls' => true])</td>
            @endif
        @endforeach
    </tr>
@endpush

@foreach($items as $item)
    @push('contentItems')
        <tr>
        @foreach($item::LIST as $lineContent)
            @if($lineContent['name']??false)
                <td>{{ $item->getFieldValue($lineContent['name'], $lineContent['type']) }}</td>
            @else
                <td class="controls">@include('admin.components.controls')</td>
            @endif
        @endforeach
        </tr>
    @endpush
@endforeach

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">@currentForm($currentRouteName)</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table style="border-collapse: collapse;border: 1px solid silver;">
                            <thead>
                                @stack('headItems')
                            </thead>
                            <tbody>
                                @stack('contentItems')
                            </tbody>
                            <tfoot>
                                {{ $items->links() }}
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
