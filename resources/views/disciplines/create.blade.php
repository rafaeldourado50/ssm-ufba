@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">Nova Disciplina</div>
        <div class="panel-body">

          <form method="POST" action="{{ url('/disciplines') }}" accept-charset="UTF-8" enctype="multipart/form-data">
            
            {{ csrf_field() }}

            @include ('disciplines.form', ['submitButtonText' => 'Persistir'])
          </form>

        </div>
      </div>
    </div>
  </div>
@endsection
