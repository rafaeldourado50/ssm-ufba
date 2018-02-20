@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">Home</div>
        <div class="panel-body">
          @include('admin.info')
          
          @if (empty(Auth::user()->student))
            <p>Click the link below to complete your registration!</p>
          
            <a href="{{ url('/students/create') }}" class="btn btn-success" style="margin-top: 6px;">
              <i class="fa fa-graduation-cap" aria-hidden="true"></i> Student Data
            </a>
          @else
            <p>Now we are ready to start!</p>

            <a href="{{ url('/records') }}" class="btn btn-success" style="margin-top: 6px;">
                <i class="fa fa-files-o" aria-hidden="true"></i> Records
            </a>
          @endif
        </div>
      </div>
    </div>
  </div>
@endsection
