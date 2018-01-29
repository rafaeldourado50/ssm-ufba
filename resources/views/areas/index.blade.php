@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      @include('admin.menu')

      <div class="col-md-12">
        <div class="panel panel-default">
          
          <div class="panel-heading">
            <div class="pull-left"><h2>Search Areas</h2></div>
            <div class="pull-right">
              <a href="{{ url('/areas/create') }}" class="btn btn-success btn-xs" title="Add New Area">
                <i class="fa fa-plus" aria-hidden="true"></i> New
              </a>
            </div>
          </div>
          
          <div class="panel-body">
            <br/>
            <br/>

            <form method="GET" action="{{ url('/areas') }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
              <div class="input-group">
                <input type="text" class="form-control" name="description" placeholder="Search by description..." value="{{ request('description') }}">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="submit">
                    <i class="fa fa-search"></i>
                  </button>
                </span>
              </div>
            </form>

            <br/>

            @if ($message = Session::get('success'))
              <div class="alert alert-success">
                <p>{{ $message }}</p>
              </div>
            @endif

            <div class="table-responsive">
              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th style="width: 150px !important;">Actions</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($areas as $item)
                  <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description }}</td>
                    <td>
                      <a href="{{ url('/areas/' . $item->id) }}" title="Show Area"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                      <a href="{{ url('/areas/' . $item->id . '/edit') }}" title="Edit Area"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>

                      <form method="POST" action="{{ url('/areas' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Area" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                      </form>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
              <div class="pagination-wrapper"> {!! $areas->appends(['description' => Request::get('description')])->render() !!} </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
