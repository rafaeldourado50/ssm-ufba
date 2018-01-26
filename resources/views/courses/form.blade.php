<div class="row {{ $errors->has('code') ? 'has-error' : ''}}">
  <label for="name" class="col-md-2 control-label">{{ 'Name' }}</label>
  <div class="col-md-12">
    <input class="form-control" name="name" type="text" id="name" value="{{ $course->name or ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
  </div>
</div>

<div class="row {{ $errors->has('code') ? 'has-error' : ''}}">
  <label for="code" class="col-md-2 control-label">{{ 'Code' }}</label>
  <div class="col-md-12">
    <input class="form-control" name="code" type="text" id="code" value="{{ $course->code or ''}}" >
    {!! $errors->first('code', '<p class="help-block">:message</p>') !!}
  </div>
</div>

<div class="row">
  <label for="curriculum" class="col-md-2 control-label">{{ 'Curriculum' }}</label>
  <div class="col-md-12">
    <input class="form-control" name="curriculum" type="text" id="curriculum" value="{{ $course->curriculum or ''}}" >
  </div>
</div>

<div class="row">
  <label for="area" class="col-md-2 control-label">{{ 'Area' }}</label>
  <div class="col-md-12">
    {!! Form::select('area_id', $areas, $valueAreaSelected, ['class' => 'form-control', 'placeholder' => 'Choose an area...']) !!}
  </div>
</div>

<br />

<div class="form-group">
  <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
</div>