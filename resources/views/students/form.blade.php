<div class="row {{ $errors->has('name') ? 'has-error' : ''}}">
  <label for="name" class="col-md-4 control-label">{{ 'Name' }}</label>
  <div class="col-md-12">
    <input class="form-control" name="name" type="text" id="name" value="{{ $student->name or ''}}" >
  </div>
</div>

<div class="row {{ $errors->has('enrollment') ? 'has-error' : ''}}">
  <label for="enrollment" class="col-md-4 control-label">{{ 'Enrollment' }}</label>
  <div class="col-md-12">
    <input class="form-control" name="enrollment" type="number" id="enrollment" value="{{ $student->enrollment or ''}}" >
  </div>
</div>

<div class="row {{ $errors->has('email') ? 'has-error' : ''}}">
  <label for="email" class="col-md-4 control-label">{{ 'Email' }}</label>
  <div class="col-md-12">
    <input class="form-control" name="email" type="email" id="email" value="{{ $student->email or ''}}" >
  </div>
</div>

<div class="row {{ $errors->has('password') ? 'has-error' : ''}}">
  <label for="password" class="col-md-4 control-label">{{ 'Password' }}</label>
  <div class="col-md-12">
    <input class="form-control" name="password" type="password" id="password" value="{{ $student->password or ''}}" >
  </div>
</div>

<div class="row {{ $errors->has('passwordConfirm') ? 'has-error' : ''}}">
  <label for="passwordConfirm" class="col-md-4 control-label">{{ 'Confirm Password' }}</label>
  <div class="col-md-12">
    <input class="form-control" name="passwordConfirm" type="password" id="passwordConfirm" value="{{ $passwordConfirm or ''}}" >
  </div>
</div>

<br />

<div class="form-group">
  <input class="btn btn-primary" type="submit" value="{{ $submitButtonText }}">
</div>