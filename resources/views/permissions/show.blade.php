@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">Permissão</div>
        <div class="panel-body">

          <div class="table-responsive">
            <table class="table table-borderless">
              <tbody>
                <tr>
                  <th class="col-md-2"> ID </th><td class="col-md-10"> {{ $permission->id }} </td>
                </tr>
                <tr>
                  <th class="col-md-2"> Nome </th><td class="col-md-10"> {{ $permission->name }} </td>
                </tr>
              </tbody>
            </table>
          </div>
          
          <div class="pull-left">
            <a href="{{ url('/permissions/' . $permission->id . '/edit') }}" class="btn btn-primary">
              <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar
            </a>

            <form method="POST" action="{{ url('permissions' . '/' . $permission->id) }}" accept-charset="UTF-8" style="display:inline">
              {{ method_field('DELETE') }}
              {{ csrf_field() }}
              <button type="submit" class="btn btn-danger" onclick="return confirm(&quot;Confirma exclusão?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Excluir</button>
            </form>
          </div>
          <div class="pull-right">
            <a href="{{ url('/permissions') }}" class="btn btn-warning">
              <i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
