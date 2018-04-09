<div class="row {{ $errors->has('name') ? 'has-error' : ''}}">
  <label for="name" class="col-md-4 control-label">{{ 'Nome' }}</label>
  <div class="col-md-12">
    <input class="form-control" name="name" type="text" id="name" value="{{ $course->name or ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
  </div>
</div>

<div class="row {{ $errors->has('code') ? 'has-error' : ''}}">
  <label for="code" class="col-md-4 control-label">{{ 'Código' }}</label>
  <div class="col-md-12">
    <input class="form-control" name="code" type="number" id="code" value="{{ $course->code or ''}}" min="0" max="999999" >
    {!! $errors->first('code', '<p class="help-block">:message</p>') !!}
  </div>
</div>

<div class="row {{ $errors->has('curriculum') ? 'has-error' : ''}}">
  <label for="curriculum" class="col-md-4 control-label">{{ 'Currículo' }}</label>
  <div class="col-md-12">
    <input class="form-control" name="curriculum" type="number" id="curriculum" value="{{ $course->curriculum or ''}}" min="0" max="99999" >
    {!! $errors->first('curriculum', '<p class="help-block">:message</p>') !!}
  </div>
</div>

<div class="row">
  <label for="area" class="col-md-4 control-label">{{ 'Área' }}</label>
  <div class="col-md-12">
    {!! Form::select('area_id', $areas, $valueAreaSelected, ['class' => 'form-control', 'placeholder' => '--- Selecione uma Área ---']) !!}
  </div>
</div>

<div class="form-group" style="margin-top: 6px;">
  <div class="pull-left">
    <button class="btn btn-primary" type="submit">
      <i class="fa fa-check" aria-hidden="true"></i> {{ $submitButtonText }}
    </button>
  </div>
  <div class="pull-right">
    <a href="{{ url('/courses') }}" class="btn btn-danger">
      <i class="fa fa-ban" aria-hidden="true"></i> Cancelar
    </a>
  </div>
</div>