@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      @include('admin.menu')

      <div class="col-md-12">
        <div class="panel panel-default">
          
          <div class="panel-heading">
            <div class="pull-left"><h2>Create New Area</h2></div>
            <div class="pull-right">
              <a href="{{ url('/areas') }}" class="btn btn-warning btn-xs" title="Back">
                <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
              </a>
            </div>
          </div>
          
          <div class="panel-body">
            <br />
            <br />

            @if ($errors->any())
              <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            @endif

            <form method="POST" action="{{ url('/areas') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
              {{ csrf_field() }}

              @include ('areas.form')
            </form>
            
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
