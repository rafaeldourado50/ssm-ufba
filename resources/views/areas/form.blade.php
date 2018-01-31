<div class="row {{ $errors->has('name') ? 'has-error' : ''}}">
  <label for="name" class="col-md-4 control-label">{{ 'Name' }}</label>
  <div class="col-md-12">
    <input class="form-control" name="name" type="text" id="name" value="{{ $area->name or ''}}" >
  </div>
</div>

<div class="row {{ $errors->has('description') ? 'has-error' : ''}}">
  <label for="description" class="col-md-4 control-label">{{ 'Description' }}</label>
  <div class="col-md-12">
    <textarea class="form-control" rows="5" name="description" type="textarea" id="description" >{{ $area->description or ''}}</textarea>
  </div>
</div>

<br />

<div class="form-group">
  <input class="btn btn-primary" type="submit" value="{{ $submitButtonText }}">
</div>