@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">Home</div>
        <div class="panel-body">
          @include('admin.info')
          
          @if (empty(Auth::user()->student))
            <p>Welcome! Click the link below to complete your registration!</p>
          
            <a href="{{ url('/students/create') }}" class="btn btn-success" style="margin-top: 6px;">
              <i class="fa fa-plus" aria-hidden="true"></i> New Student
            </a>
          @else
            <p>Done! Now we are ready to start!</p>
          @endif
        </div>
      </div>
    </div>
  </div>
@endsection
