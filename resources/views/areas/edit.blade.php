@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">Editar Área</div>
        <div class="panel-body">

          <form method="POST" action="{{ url('/areas/' . $area->id) }}" accept-charset="UTF-8" enctype="multipart/form-data">
            {{ method_field('PATCH') }}
            {{ csrf_field() }}

            @include ('areas.form')
          </form>

        </div>
      </div>
    </div>
  </div>
@endsection
