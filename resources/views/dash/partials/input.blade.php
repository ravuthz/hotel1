<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
    <label for="name" class="col-md-4 control-label">
        {{ isset($label) ? $label : ucfirst($name) }}
    </label>

    <div class="col-md-6">
        <input id="{{ $name }}" type="{{ isset($type) ? $type : 'text' }}" class="form-control" name="{{ $name }}" value="{{ old($name) }}">

        @if ($errors->has($name))
            <span class="help-block">
                <strong>{{ $errors->first($name) }}</strong>
            </span>
        @endif
    </div>
</div>