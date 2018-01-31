@extends('layouts.app')

@section('content')
  <div class="row">
    @include('admin.menu')

    <div class="col-md-12">
      <div class="panel panel-default">

        <div class="panel-heading">
          <div class="pull-left"><h2>Search Students</h2></div>
          <div class="pull-right">
            <a href="{{ url('/students/create') }}" class="btn btn-success btn-xs" title="Add New Student">
              <i class="fa fa-plus" aria-hidden="true"></i> New
            </a>
          </div>
        </div>

        <div class="panel-body">
          <br/>
          <br/>

          <form method="GET" action="{{ url('/students') }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
            <div class="input-group">
              <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
              <span class="input-group-btn">
                <button class="btn btn-default" type="submit">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>

          @include('admin.info')

          <div class="table-responsive">
            <table class="table table-borderless">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Enrollment</th>
                  <th>Email</th>
                  <th style="width: 150px !important;">Actions</th>
                </tr>
              </thead>
              <tbody>
              @foreach($students as $item)
                <tr>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->enrollment }}</td>
                  <td>{{ $item->email }}</td>
                  <td>
                    <a href="{{ url('/students/' . $item->id) }}" title="Show Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> </button></a>
                    <a href="{{ url('/students/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </button></a>

                    <form method="POST" action="{{ url('/students' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                      {{ method_field('DELETE') }}
                      {{ csrf_field() }}
                      <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> </button>
                    </form>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
            <div class="pagination-wrapper"> {!! $students->appends(['name' => Request::get('name')])->render() !!} </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
