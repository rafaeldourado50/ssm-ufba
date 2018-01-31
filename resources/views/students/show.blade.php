@extends('layouts.app')

@section('content')
  <div class="row">
    @include('admin.menu')

    <div class="col-md-12">
      <div class="panel panel-default">

        <div class="panel-heading">
          <div class="pull-left"><h2>Show Student #{{ $student->id }}</h2></div>
          <div class="pull-right">
            <a href="{{ url('/students') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
            <a href="{{ url('/students/' . $student->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

            <form method="POST" action="{{ url('students' . '/' . $student->id) }}" accept-charset="UTF-8" style="display:inline">
              {{ method_field('DELETE') }}
              {{ csrf_field() }}
              <button type="submit" class="btn btn-danger btn-xs" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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
                  <th class="col-md-2"> ID </th><td class="col-md-10"> {{ $student->id }} </td>
                </tr>
                <tr>
                  <th class="col-md-2"> Name </th><td class="col-md-10"> {{ $student->name }} </td>
                </tr>
                <tr>
                  <th class="col-md-2"> Enrollment </th><td class="col-md-10"> {{ $student->enrollment }} </td>
                </tr>
                <tr>
                  <th class="col-md-2"> Email </th><td class="col-md-10"> {{ $student->email }} </td>
                </tr>
              </tbody>
            </table>
          </div>

        </div>
      </div>
    </div>
  </div>
@endsection
