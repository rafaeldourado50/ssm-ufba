@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">Editar Usuário</div>
        <div class="panel-body">

          <form method="POST" action="{{ url('/users/' . $user->id) }}" accept-charset="UTF-8" enctype="multipart/form-data">
            {{ method_field('PATCH') }}
            {{ csrf_field() }}

            <div class="row {{ $errors->has('name') ? 'has-error' : ''}}">
              <label for="name" class="col-md-4 control-label">{{ 'Nome' }}</label>
              <div class="col-md-12">
                <input class="form-control" name="name" type="text" id="name" value="{{ $user->name or ''}}" >
                {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
              </div>
            </div>

            <div class="form-group" style="margin-top: 6px;">
              <div class="pull-left">
                <button class="btn btn-success" type="submit">
                  <i class="fa fa-check" aria-hidden="true"></i> Salvar
                </button>
              </div>
              <div class="pull-right">
                <a href="{{ url('/users') }}" class="btn btn-danger">
                  <i class="fa fa-ban" aria-hidden="true"></i> Cancelar
                </a>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
@endsection
