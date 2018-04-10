@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">Novo Perfil</div>
        <div class="panel-body">

          <form method="POST" action="{{ url('/roles') }}" accept-charset="UTF-8" enctype="multipart/form-data">
            
            {{ csrf_field() }}

            @include ('roles.form')
          </form>

        </div>
      </div>
    </div>
  </div>
@endsection
