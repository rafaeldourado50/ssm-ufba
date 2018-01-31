<div class="row {{ $errors->has('code') ? 'has-error' : ''}}">
  <label for="name" class="col-md-4 control-label">{{ 'Name' }}</label>
  <div class="col-md-12">
    <input class="form-control" name="name" type="text" id="name" value="{{ $course->name or ''}}" >
  </div>
</div>

<div class="row {{ $errors->has('code') ? 'has-error' : ''}}">
  <label for="code" class="col-md-4 control-label">{{ 'Code' }}</label>
  <div class="col-md-12">
    <input class="form-control" name="code" type="number" id="code" value="{{ $course->code or ''}}" min="0" max="999999" >
  </div>
</div>

<div class="row">
  <label for="curriculum" class="col-md-4 control-label">{{ 'Curriculum' }}</label>
  <div class="col-md-12">
    <input class="form-control" name="curriculum" type="number" id="curriculum" value="{{ $course->curriculum or ''}}" min="0" max="99999" >
  </div>
</div>

<div class="row">
  <label for="area" class="col-md-4 control-label">{{ 'Area' }}</label>
  <div class="col-md-12">
    {!! Form::select('area_id', $areas, $valueAreaSelected, ['class' => 'form-control', 'placeholder' => 'Choose an area...']) !!}
  </div>
</div>

<br />

<div class="form-group">
  <input class="btn btn-primary" type="submit" value="{{ $submitButtonText }}">
</div>