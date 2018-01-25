<div class="form-group {{ $errors->has('semester') ? 'has-error' : ''}}">
    <label for="semester" class="col-md-4 control-label">{{ 'Semester' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="semester" type="number" id="semester" value="{{ $couse_discipline->semester or ''}}" >
        {!! $errors->first('semester', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('nature') ? 'has-error' : ''}}">
    <label for="nature" class="col-md-4 control-label">{{ 'Nature' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="nature" type="text" id="nature" value="{{ $couse_discipline->nature or ''}}" >
        {!! $errors->first('nature', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
