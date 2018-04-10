<div class="row {{ $errors->has('code') ? 'has-error' : ''}}">
  <label for="code" class="col-md-4 control-label">{{ 'Código' }}</label>
  <div class="col-md-12">
    <input class="form-control" name="code" type="text" id="code" value="{{ $discipline->code or ''}}" >
    {!! $errors->first('code', '<p class="help-block">:message</p>') !!}
  </div>
</div>

<div class="row {{ $errors->has('name') ? 'has-error' : ''}}">
  <label for="name" class="col-md-4 control-label">{{ 'Nome' }}</label>
  <div class="col-md-12">
    <input class="form-control" name="name" type="text" id="name" value="{{ $discipline->name or ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
  </div>
</div>

<div class="row {{ $errors->has('curriculum') ? 'has-error' : ''}}">
  <label for="curriculum" class="col-md-4 control-label">{{ 'Currículo' }}</label>
  <div class="col-md-12">
    <input class="form-control" name="curriculum" type="number" id="curriculum" value="{{ $discipline->curriculum or ''}}" min="0" max="99999" >
    {!! $errors->first('curriculum', '<p class="help-block">:message</p>') !!}
  </div>
</div>

<div class="row {{ $errors->has('load') ? 'has-error' : ''}}">
  <label for="load" class="col-md-4 control-label">{{ 'Carga Horária' }}</label>
  <div class="col-md-12">
    <input class="form-control" name="load" type="number" id="load" value="{{ $discipline->load or ''}}" min="0" max="999" >
    {!! $errors->first('load', '<p class="help-block">:message</p>') !!}
  </div>
</div>

<div class="form-group" style="margin-top: 6px;">
  <div class="pull-left">
    <button class="btn btn-success" type="submit">
      <i class="fa fa-check" aria-hidden="true"></i> Salvar
    </button>
  </div>
  <div class="pull-right">
    <a href="{{ url('/disciplines') }}" class="btn btn-danger">
      <i class="fa fa-ban" aria-hidden="true"></i> Cancelar
    </a>
  </div>
</div>