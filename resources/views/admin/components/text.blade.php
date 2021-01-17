<div class="form-group row">
    <label for="{{ $config['name'] }}" class="col-md-4 col-form-label text-md-right">{{ $config['title']??__($currentRouteName.".".$config['name']) }}</label>

    <div class="col-md-6">
        <textarea type="text" name="{{ $config['name'] }}" class="form-control @error($config['name']) is-invalid @enderror" {{ !in_array('required', $config)?:'required' }}>{{ old($config['name'],$item->getFieldValue($config['name'])) }}</textarea>
        @error($config['name'])
        <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>



