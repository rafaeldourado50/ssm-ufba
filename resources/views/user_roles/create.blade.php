@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">New User Role</div>
        <div class="panel-body">          

          <form method="POST" action="{{ url('/users/' . $user->id . '/roles') }}" accept-charset="UTF-8" enctype="multipart/form-data">

            {{ csrf_field() }}

            <div class="row {{ $errors->has('select_role') ? 'has-error' : ''}}">
              <label for="select_role" class="col-md-4 control-label">{{ 'Role' }}</label>
              <div class="col-md-12">
                <select id="select_role" name="select_role" class="form-control">
                  <option value="" >--- Select a role ---</option>
                  @foreach ($roles as $role => $value)
                    <option value="{{ $role }}" />{{ $value }}</option>
                  @endforeach
                </select>
                {!! $errors->first('select_role', '<p class="help-block">:message</p>') !!}
              </div>
            </div>

            <div class="form-group" style="margin-top: 6px;">
              <div class="pull-left">
                <button class="btn btn-primary" type="submit">
                  <i class="fa fa-check" aria-hidden="true"></i> Create
                </button>
              </div>
              <div class="pull-right">
                <a href="{{ url('/users/' . $user->id . '/roles') }}" class="btn btn-danger">
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