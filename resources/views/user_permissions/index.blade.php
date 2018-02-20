@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">User Permissions for {{ $user->name }}</div>
        <div class="panel-body">

          @include('admin.info')

          <div class="table-responsive">
            <table class="table table-borderless">
              <thead>
                <tr>
                  <th>Permission</th>
                  <th style="width: 50px !important;">Actions</th>
                </tr>
              </thead>
              <tbody>
              @foreach($user->permissions as $permission)
                <tr>
                  <td>{{ $permission->name }}</td>
                  <td>
                    <form method="POST" action="{{ url('/users/' . $user->id . '/permissions/' . $permission->id) }}" accept-charset="UTF-8" style="display:inline">
                      {{ method_field('DELETE') }}
                      {{ csrf_field() }}
                      <button type="submit" class="btn btn-danger btn-sm" title="Remove" onclick="return confirm(&quot;Confirm remove?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> </button>
                    </form>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>

          <div class="form-group">
            <div class="pull-left">
              <a href="{{ url('/users/' . $user->id . '/permissions/create') }}" class="btn btn-success">
                <i class="fa fa-plus" aria-hidden="true"></i> New
              </a>
            </div>
            <div class="pull-right">
              <a href="{{ url('/users') }}" class="btn btn-warning">
                <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
              </a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
@endsection
