@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">Nova Permissão</div>
        <div class="panel-body">

          <form method="POST" action="{{ url('/permissions') }}" accept-charset="UTF-8" enctype="multipart/form-data">
            
            {{ csrf_field() }}

            @include ('permissions.form')
          </form>

        </div>
      </div>
    </div>
  </div>
@endsection
