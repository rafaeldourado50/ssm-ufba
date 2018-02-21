@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">Permissão do Perfil</div>
        <div class="panel-body">

          <form method="POST" action="{{ url('/roles/' . $role->id . '/permissions') }}" accept-charset="UTF-8" enctype="multipart/form-data">

            {{ csrf_field() }}

            <div class="row {{ $errors->has('select_permission') ? 'has-error' : ''}}">
              <label for="select_permission" class="col-md-4 control-label">{{ 'Permissão' }}</label>
              <div class="col-md-12">
                <select id="select_permission" name="select_permission" class="form-control">
                  <option value="" >--- Selecione ---</option>
                  @foreach ($permissions as $permission => $value)
                    <option value="{{ $permission }}" />{{ $value }}</option>
                  @endforeach
                </select>
                {!! $errors->first('select_permission', '<p class="help-block">:message</p>') !!}
              </div>
            </div>

            <div class="form-group" style="margin-top: 6px;">
              <div class="pull-left">
                <button class="btn btn-success" type="submit">
                  <i class="fa fa-plus" aria-hidden="true"></i> Adicionar
                </button>
              </div>
              <div class="pull-right">
                <a href="{{ url('/roles') }}" class="btn btn-warning">
                  <i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar
                </a>
              </div>
            </div>
          </form>

        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">Lista de Permissões do Perfil</div>
        <div class="panel-body">

          @include('admin.info')

          <div class="table-responsive">
            <table class="table table-borderless">
              <thead>
                <tr>
                  <th>Nome da Permissão</th>
                  <th style="width: 50px !important;">Ação</th>
                </tr>
              </thead>
              <tbody>
              @foreach($role->permissions as $permission)
                <tr>
                  <td>{{ $permission->name }}</td>
                  <td>
                    <form method="POST" action="{{ url('/roles/' . $role->id . '/permissions/' . $permission->id) }}" accept-charset="UTF-8" style="display:inline">
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

        </div>
      </div>
    </div>
  </div>
@endsection
