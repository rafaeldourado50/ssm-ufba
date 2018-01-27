@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      @include('admin.sidebar')

      <div class="col-md-9">
        <div class="panel panel-default">
          
          <div class="panel-heading">
            <div class="pull-left"><h2>Search Professors</h2></div>
            <div class="pull-right">
              <a href="{{ url('/professors/create') }}" class="btn btn-success btn-xs" title="Add New Professor">
                <i class="fa fa-plus" aria-hidden="true"></i> New
              </a>
            </div>
          </div>
          
          <div class="panel-body">
            <br/>
            <br/>

            <form method="GET" action="{{ url('/professors') }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
              <div class="input-group">
                <input type="text" class="form-control" name="name" placeholder="Search by name..." value="{{ request('name') }}">
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
                    <th style="width: 150px !important;">Actions</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($professors as $item)
                  <tr>
                    <td>{{ $item->name }}</td>
                    <td>
                      <a href="{{ url('/professors/' . $item->id) }}" title="Show Professor"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> </button></a>
                      <a href="{{ url('/professors/' . $item->id . '/edit') }}" title="Edit Professor"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </button></a>

                      <form method="POST" action="{{ url('/professors' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Professor" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> </button>
                      </form>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
              <div class="pagination-wrapper"> {!! $professors->appends(['name' => Request::get('name')])->render() !!} </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
