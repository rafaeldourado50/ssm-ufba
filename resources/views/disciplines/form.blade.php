<div class="form-group {{ $errors->has('code') ? 'has-error' : ''}}">
    <label for="code" class="col-md-4 control-label">{{ 'Code' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="code" type="text" id="code" value="{{ $discipline->code or ''}}" >
        {!! $errors->first('code', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="col-md-4 control-label">{{ 'Name' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="name" type="text" id="name" value="{{ $discipline->name or ''}}" >
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('curriculum') ? 'has-error' : ''}}">
    <label for="curriculum" class="col-md-4 control-label">{{ 'Curriculum' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="curriculum" type="text" id="curriculum" value="{{ $discipline->curriculum or ''}}" >
        {!! $errors->first('curriculum', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('load') ? 'has-error' : ''}}">
    <label for="load" class="col-md-4 control-label">{{ 'Load' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="load" type="number" id="load" value="{{ $discipline->load or ''}}" >
        {!! $errors->first('load', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
