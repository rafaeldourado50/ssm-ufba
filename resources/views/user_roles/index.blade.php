@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">Perfil do Usuário</div>
        <div class="panel-body">

          <form method="POST" action="{{ url('/users/' . $user->id . '/roles') }}" accept-charset="UTF-8" enctype="multipart/form-data">

            {{ csrf_field() }}

            <div class="row {{ $errors->has('select_role') ? 'has-error' : ''}}">
              <label for="select_role" class="col-md-4 control-label">{{ 'Perfil' }}</label>
              <div class="col-md-12">
                <select id="select_role" name="select_role" class="form-control">
                  <option value="" >--- Selecione ---</option>
                  @foreach ($roles as $role => $value)
                    <option value="{{ $role }}" />{{ $value }}</option>
                  @endforeach
                </select>
                {!! $errors->first('select_role', '<p class="help-block">:message</p>') !!}
              </div>
            </div>

            <div class="form-group" style="margin-top: 6px;">
              <div class="pull-left">
                <button class="btn btn-primary" type="submit">
                  <i class="fa fa-plus" aria-hidden="true"></i> Adicionar
                </button>
              </div>
            </div>
          </form>

        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">Lista de Perfis do Usuário</div>
        <div class="panel-body">

          @include('admin.info')

          <div class="table-responsive">
            <table class="table table-borderless">
              <thead>
                <tr>
                  <th>Nome do Perfil</th>
                  <th style="width: 50px !important;">Ação</th>
                </tr>
              </thead>
              <tbody>
              @foreach($user->roles as $role)
                <tr>
                  <td>{{ $role->name }}</td>
                  <td>
                    <form method="POST" action="{{ url('/users/' . $user->id . '/roles/' . $role->id) }}" accept-charset="UTF-8" style="display:inline">
                      {{ method_field('DELETE') }}
                      {{ csrf_field() }}
                      <button type="submit" class="btn btn-danger btn-sm" title="Excluir" onclick="return confirm(&quot;Confirma exclusão?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> </button>
                    </form>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>

          <div class="form-group">
            <div class="pull-right">
              <a href="{{ url('/users') }}" class="btn btn-warning">
                <i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar
              </a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
@endsection
