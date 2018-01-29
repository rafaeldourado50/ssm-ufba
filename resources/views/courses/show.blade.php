@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      @include('admin.menu')

      <div class="col-md-12">
        <div class="panel panel-default">
          
          <div class="panel-heading">
            <div class="pull-left"><h2>Show Course #{{ $course->id }}</h2></div>
            <div class="pull-right">
              <a href="{{ url('/courses') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
              <a href="{{ url('/courses/' . $course->id . '/edit') }}" title="Edit Course"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

              <form method="POST" action="{{ url('courses' . '/' . $course->id) }}" accept-charset="UTF-8" style="display:inline">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <button type="submit" class="btn btn-danger btn-xs" title="Delete Course" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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
                    <th style="width: 120px !important;"> ID</th><td>{{ $course->id }}</td>
                  </tr>
                  <tr>
                    <th style="width: 120px !important;"> Name </th><td> {{ $course->name }} </td>
                  </tr>
                  <tr>
                    <th style="width: 120px !important;"> Code </th><td> {{ $course->code }} </td>
                  </tr>
                  <tr>
                    <th style="width: 120px !important;"> Curriculum </th><td> {{ $course->curriculum }} </td>
                  </tr>
                  <tr>
                    <th style="width: 120px !important;"> Area </th><td> {{ $course->area->name }} </td>
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
