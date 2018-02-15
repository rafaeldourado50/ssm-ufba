@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">New Role Permission</div>
        <div class="panel-body">          

          <form method="POST" action="{{ url('/roles/' . $role->id . '/permissions') }}" accept-charset="UTF-8" enctype="multipart/form-data">

            {{ csrf_field() }}

            <div class="row {{ $errors->has('select_permission') ? 'has-error' : ''}}">
              <label for="select_permission" class="col-md-4 control-label">{{ 'Permission' }}</label>
              <div class="col-md-12">
                <select id="select_permission" name="select_permission" class="form-control">
                  <option value="" >--- Select a Permission ---</option>
                  @foreach ($permissions as $permission => $value)
                    <option value="{{ $permission }}" />{{ $value }}</option>
                  @endforeach
                </select>
                {!! $errors->first('select_permission', '<p class="help-block">:message</p>') !!}
              </div>
            </div>

            <div class="form-group" style="margin-top: 6px;">
              <div class="pull-left">
                <button class="btn btn-primary" type="submit">
                  <i class="fa fa-check" aria-hidden="true"></i> Create
                </button>
              </div>
              <div class="pull-right">
                <a href="{{ url('/roles/' . $role->id . '/permissions') }}" class="btn btn-danger">
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