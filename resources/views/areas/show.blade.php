@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      @include('admin.menu')

      <div class="col-md-12">
        <div class="panel panel-default">
          
          <div class="panel-heading">
            <div class="pull-left"><h2>Show Area #{{ $area->id }}</h2></div>
            <div class="pull-right">
              <a href="{{ url('/areas') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
              <a href="{{ url('/areas/' . $area->id . '/edit') }}" title="Edit Area"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

              <form method="POST" action="{{ url('areas' . '/' . $area->id) }}" accept-charset="UTF-8" style="display:inline">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <button type="submit" class="btn btn-danger btn-xs" title="Delete Area" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
              </form>
            </div>
          </div>
          
          <div class="panel-body">
            <br/>
            <br/>

            <div class="table-responsive">
              <table class="table table-borderless">
                <tbody>
                  <tr>
                    <th style="width: 120px !important;"> ID</th><td>{{ $area->id }}</td>
                  </tr>
                  <tr>
                    <th style="width: 120px !important;"> Name </th><td> {{ $area->name }} </td>
                  </tr>
                  <tr>
                    <th style="width: 120px !important;"> Description </th><td> {{ $area->description }} </td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
