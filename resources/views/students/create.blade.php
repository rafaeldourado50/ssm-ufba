@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">New Student</div>
        <div class="panel-body">          

          <form method="POST" action="{{ url('/students') }}" accept-charset="UTF-8" enctype="multipart/form-data">

            {{ csrf_field() }}

            <div class="row {{ $errors->has('enrollment') ? 'has-error' : ''}}">
              <label for="enrollment" class="col-md-4 control-label">{{ 'Enrollment' }}</label>
              <div class="col-md-12">
                <input class="form-control" name="enrollment" type="text" id="enrollment" value="{{ $student->enrollment or ''}}" >
                {!! $errors->first('enrollment', '<p class="help-block">:message</p>') !!}
              </div>
            </div>
            
            <div class="row {{ $errors->has('course') ? 'has-error' : ''}}">
              <label for="course" class="col-md-4 control-label">{{ 'Course' }}</label>
              <div class="col-md-12">
                <select id="course" name="course" class="form-control">
                  <option value="" >--- Select a Course ---</option>
                  @foreach ($courses as $course => $value)
                    <option value="{{ $course }}" />{{ $value }}</option>
                  @endforeach
                </select>
                {!! $errors->first('course', '<p class="help-block">:message</p>') !!}
              </div>
            </div>

            <div class="form-group" style="margin-top: 6px;">
              <div class="pull-left">
                <button class="btn btn-primary" type="submit">
                  <i class="fa fa-check" aria-hidden="true"></i> Create
                </button>
              </div>
              <div class="pull-right">
                <a href="{{ url('/home') }}" class="btn btn-danger">
                  <i class="fa fa-ban" aria-hidden="true"></i> Cancel
                </a>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
@endsection