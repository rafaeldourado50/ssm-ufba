@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">New Course</div>
        <div class="panel-body">

          <form method="POST" action="{{ url('/courses') }}" accept-charset="UTF-8" enctype="multipart/form-data">
            
            {{ csrf_field() }}

            @include ('courses.form', ['submitButtonText' => 'Create', 'valueAreaSelected' => null])
          </form>

        </div>
      </div>
    </div>
  </div>
@endsection
