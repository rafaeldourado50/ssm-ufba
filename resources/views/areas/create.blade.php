@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">Nova Área</div>
        <div class="panel-body">

          <form method="POST" action="{{ url('/areas') }}" accept-charset="UTF-8" enctype="multipart/form-data">
            
            {{ csrf_field() }}

            @include ('areas.form', ['submitButtonText' => 'Persistir'])
          </form>

        </div>
      </div>
    </div>
  </div>
@endsection
