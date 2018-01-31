<div class="row {{ $errors->has('name') ? 'has-error' : ''}}">
  <label for="name" class="col-md-4 control-label">{{ 'Name' }}</label>
  <div class="col-md-12">
    <input class="form-control" name="name" type="text" id="name" value="{{ $professor->name or ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
  </div>
</div>

<div class="form-group" style="margin-top: 6px;">
  <div class="pull-left">
    <button class="btn btn-primary" type="submit">
      <i class="fa fa-check" aria-hidden="true"></i> {{ $submitButtonText }}
    </button>
  </div>
  <div class="pull-right">
    <a href="{{ url('/professors') }}" class="btn btn-warning" title="Back">
      <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
    </a>
  </div>
</div>