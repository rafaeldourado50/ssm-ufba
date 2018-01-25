<div class="form-group {{ $errors->has('day') ? 'has-error' : ''}}">
    <label for="day" class="col-md-4 control-label">{{ 'Day' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="day" type="number" id="day" value="{{ $schedule->day or ''}}" >
        {!! $errors->first('day', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('first_class_number') ? 'has-error' : ''}}">
    <label for="first_class_number" class="col-md-4 control-label">{{ 'First Class Number' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="first_class_number" type="number" id="first_class_number" value="{{ $schedule->first_class_number or ''}}" >
        {!! $errors->first('first_class_number', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('class_count') ? 'has-error' : ''}}">
    <label for="class_count" class="col-md-4 control-label">{{ 'Class Count' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="class_count" type="number" id="class_count" value="{{ $schedule->class_count or ''}}" >
        {!! $errors->first('class_count', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
