@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">Usuários</div>
        <div class="panel-body">

          @include('admin.info')

          <form method="GET" action="{{ url('/users') }}" accept-charset="UTF-8" style="display:inline" role="search">
            <input type="text" class="form-control" name="name" placeholder="Pesquisar por nome..." value="{{ request('name') }}">

            <button type="submit" class="btn btn-success" style="margin-top: 6px;">
              <i class="fa fa-search" aria-hidden="true"></i> Pesquisar
            </button>
          </form>

          <div class="table-responsive">
            <table class="table table-borderless">
              <thead>
                <tr>
                  <th>Nome</th>
                  <th>E-mail</th>
                  <th style="width: 165px !important;">Ações</th>
                </tr>
              </thead>
              <tbody>
              @foreach($users as $item)
                <tr>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->email }}</td>
                  <td>
                    <a href="{{ url('/users/' . $item->id) }}" title="Visualizar"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> </button></a>
                    <a href="{{ url('/users/' . $item->id . '/edit') }}" title="Editar"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </button></a>
                    
                    <a href="{{ url('/users/' . $item->id . '/roles') }}" title="Perfis do Usuário"><button class="btn btn-success btn-sm"><i class="fa fa-cog" aria-hidden="true"></i> </button></a>
                    <a href="{{ url('/users/' . $item->id . '/permissions') }}" title="Permissões do Usuário"><button class="btn btn-success btn-sm"><i class="fa fa-cogs" aria-hidden="true"></i> </button></a>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
            <div class="pagination-wrapper"> {!! $users->appends(['name' => Request::get('name')])->render() !!} </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
