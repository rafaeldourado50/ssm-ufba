@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">Course Disciplines: {{ $course->name }}</div>
        <div class="panel-body">
         <div class="table-responsive">
            <table class="table table-borderless">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Load</th>
                  <th>Semester</th>
                  <th>Nature</th>
                 </tr>
              </thead>
              <tbody>
              @foreach($disciplines as $item)
                <tr>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->load }}</td>
                  <td>{{ $item->semester }}</td>
                  <td>{{ $item->nature }}</td>                       
                </tr>
               @endforeach
              </tbody>
            </table>
        </div>
          <div class="pull-right">
            <a href="{{ url('/courses') }}" class="btn btn-warning">
              <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
            </a>
          </div>
      </div>
    </div>
  </div>
</div>
          
@endsection