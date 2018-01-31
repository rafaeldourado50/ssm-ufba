@extends('layouts.app')

@section('content')
  <div class="row">
    @include('admin.menu')

    <div class="col-md-12">
      <div class="panel panel-default">

        <div class="panel-heading">
          <div class="pull-left"><h2>Edit Area #{{ $area->id }}</h2></div>
          <div class="pull-right">
            <a href="{{ url('/areas') }}" class="btn btn-warning btn-xs" title="Back">
              <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
            </a>
          </div>
        </div>

        <div class="panel-body">

          @include('admin.error')

          <form method="POST" action="{{ url('/areas/' . $area->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
            {{ method_field('PATCH') }}
            {{ csrf_field() }}

            @include ('areas.form', ['submitButtonText' => 'Update'])
          </form>

        </div>
      </div>
    </div>
  </div>
@endsection
