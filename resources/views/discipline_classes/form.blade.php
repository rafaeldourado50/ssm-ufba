<div class="form-group {{ $errors->has('class_number') ? 'has-error' : ''}}">
    <label for="class_number" class="col-md-4 control-label">{{ 'Class Number' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="class_number" type="text" id="class_number" value="{{ $discipline_class->class_number or ''}}" >
        {!! $errors->first('class_number', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
