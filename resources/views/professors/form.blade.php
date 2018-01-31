<div class="row {{ $errors->has('name') ? 'has-error' : ''}}">
  <label for="name" class="col-md-4 control-label">{{ 'Name' }}</label>
  <div class="col-md-12">
    <input class="form-control" name="name" type="text" id="name" value="{{ $professor->name or ''}}" >
  </div>
</div>

<br />

<div class="form-group">
  <input class="btn btn-primary" type="submit" value="{{ $submitButtonText }}">
</div>