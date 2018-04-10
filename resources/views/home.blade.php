@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">Início</div>
        <div class="panel-body">
          @include('admin.info')

          @if (empty(Auth::user()->student))
            <p>Clique no link abaixo para completar seu cadastro!</p>

            <a href="{{ url('/students/create') }}" class="btn btn-success" style="margin-top: 6px;">
              <i class="fa fa-graduation-cap" aria-hidden="true"></i> Avançar
            </a>
          @else
            <p>Estamos prontos para começar!</p>
          @endif
        </div>
      </div>
    </div>
  </div>
@endsection
