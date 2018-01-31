@extends('layouts.app')

@section('content')
  <div class="row">
    @include('admin.menu')

    <div class="col-md-12">
      <div class="panel panel-default">

        <div class="panel-heading">
          <div class="pull-left"><h2>Show Professor #{{ $professor->id }}</h2></div>
          <div class="pull-right">
            <a href="{{ url('/professors') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
            <a href="{{ url('/professors/' . $professor->id . '/edit') }}" title="Edit professor"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

            <form method="POST" action="{{ url('professors' . '/' . $professor->id) }}" accept-charset="UTF-8" style="display:inline">
              {{ method_field('DELETE') }}
              {{ csrf_field() }}
              <button type="submit" class="btn btn-danger btn-xs" title="Delete professor" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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
                  <th class="col-md-2"> ID </th><td class="col-md-10"> {{ $professor->id }} </td>
                </tr>
                <tr>
                  <th class="col-md-2"> Name </th><td class="col-md-10"> {{ $professor->name }} </td>
                </tr>
              </tbody>
            </table>
          </div>

        </div>
      </div>
    </div>
  </div>
@endsection
