@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">Users</div>
        <div class="panel-body">

          @include('admin.info')

          <form method="GET" action="{{ url('/users') }}" accept-charset="UTF-8" style="display:inline" role="search">
            <input type="text" class="form-control" name="name" placeholder="Search by name..." value="{{ request('name') }}">

            <button type="submit" class="btn btn-success" style="margin-top: 6px;">
              <i class="fa fa-search" aria-hidden="true"></i> Search
            </button>
          </form>

          <div class="table-responsive">
            <table class="table table-borderless">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>E-mail</th>
                  <th style="width: 165px !important;">Actions</th>
                </tr>
              </thead>
              <tbody>
              @foreach($users as $item)
                <tr>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->email }}</td>
                  <td>
                    <a href="{{ url('/users/' . $item->id) }}" title="Show"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> </button></a>
                    <a href="{{ url('/users/' . $item->id . '/edit') }}" title="Edit"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </button></a>
                    
                    <a href="{{ url('/users/' . $item->id . '/roles') }}" title="User Roles"><button class="btn btn-info btn-sm"><i class="fa fa-cogs" aria-hidden="true"></i> </button></a>
                    <a href="{{ url('/users/' . $item->id . '/permissions') }}" title="User Permissions"><button class="btn btn-primary btn-sm"><i class="fa fa-cogs" aria-hidden="true"></i> </button></a>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
            <div class="pagination-wrapper"> {!! $users->appends(['name' => Request::get('name')])->render() !!} </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
