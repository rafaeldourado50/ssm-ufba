<div class="row {{ $errors->has('code') ? 'has-error' : ''}}">
  <label for="code" class="col-md-4 control-label">{{ 'Code' }}</label>
  <div class="col-md-12">
    <input class="form-control" name="code" type="text" id="code" value="{{ $discipline->code or ''}}" >
    {!! $errors->first('code', '<p class="help-block">:message</p>') !!}
  </div>
</div>

<div class="row {{ $errors->has('name') ? 'has-error' : ''}}">
  <label for="name" class="col-md-4 control-label">{{ 'Name' }}</label>
  <div class="col-md-12">
    <input class="form-control" name="name" type="text" id="name" value="{{ $discipline->name or ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
  </div>
</div>

<div class="row {{ $errors->has('curriculum') ? 'has-error' : ''}}">
  <label for="curriculum" class="col-md-4 control-label">{{ 'Curriculum' }}</label>
  <div class="col-md-12">
    <input class="form-control" name="curriculum" type="number" id="curriculum" value="{{ $discipline->curriculum or ''}}" min="0" max="99999" >
    {!! $errors->first('curriculum', '<p class="help-block">:message</p>') !!}
  </div>
</div>

<div class="row {{ $errors->has('load') ? 'has-error' : ''}}">
  <label for="load" class="col-md-4 control-label">{{ 'Load' }}</label>
  <div class="col-md-12">
    <input class="form-control" name="load" type="number" id="load" value="{{ $discipline->load or ''}}" min="0" max="999" >
    {!! $errors->first('load', '<p class="help-block">:message</p>') !!}
  </div>
</div>

<br />

<div class="form-group">
  <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
</div>
