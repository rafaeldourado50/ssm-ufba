@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">Edit Professor</div>
        <div class="panel-body">

          <form method="POST" action="{{ url('/professors/' . $professor->id) }}" accept-charset="UTF-8" enctype="multipart/form-data">
            {{ method_field('PATCH') }}
            {{ csrf_field() }}

            @include ('professors.form', ['submitButtonText' => 'Update'])
          </form>

        </div>
      </div>
    </div>
  </div>
@endsection
