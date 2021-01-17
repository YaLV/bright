<div class="form-group row">
    <label for="{{ $config['name'] }}" class="col-md-4 col-form-label text-md-right">{{ $config['title']??__($currentRouteName.".".$config['name']) }}</label>

    <div class="col-md-6">
        <input type="{{ $config['type'] }}" name="{{ $config['name'] }}" id="{{ $config['name'] }}" class="{{ $config['classes']??'' }} form-control @error($config['name']) is-invalid @enderror"
               @foreach($config['data']??[] as $dataTag => $dataContent)
                   data-{{$dataTag}}="{{$dataContent}}"
               @endforeach
               value="{{ old($config['name'], $item->getFieldValue($config['name'], $config['type'])) }}" {{ !in_array('required', $config)?:'required' }} />
        @error($config['name'])
        <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

