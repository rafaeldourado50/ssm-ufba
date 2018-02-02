@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">Disciplines</div>
        <div class="panel-body">

          @include('admin.info')

          <form method="GET" action="{{ url('/disciplines') }}" accept-charset="UTF-8" style="display:inline" role="search">
            <input type="text" class="form-control" name="code" placeholder="Search by code..." value="{{ request('code') }}">

            <button type="submit" class="btn btn-success" style="margin-top: 6px;">
              <i class="fa fa-search" aria-hidden="true"></i> Search
            </button>

            <a href="{{ url('/disciplines/create') }}" class="btn btn-success" style="margin-top: 6px;">
              <i class="fa fa-plus" aria-hidden="true"></i> New
            </a>
          </form>

          <div class="table-responsive">
            <table class="table table-borderless">
              <thead>
                <tr>
                  <th>Code</th>
                  <th>Name</th>
                  <th>Curriculum</th>
                  <th>Load</th>
                  <th style="width: 150px !important;">Actions</th>
                </tr>
              </thead>
              <tbody>
              @foreach($disciplines as $item)
                <tr>
                  <td>{{ $item->code }}</td>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->curriculum }}</td>
                  <td>{{ $item->load }}</td>
                  <td>
                    <a href="{{ url('/disciplines/' . $item->id) }}" title="Show"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> </button></a>
                    <a href="{{ url('/disciplines/' . $item->id . '/edit') }}" title="Edit"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </button></a>

                    <form method="POST" action="{{ url('/disciplines' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                      {{ method_field('DELETE') }}
                      {{ csrf_field() }}
                      <button type="submit" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> </button>
                    </form>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
            <div class="pagination-wrapper"> {!! $disciplines->appends(['code' => Request::get('code')])->render() !!} </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
