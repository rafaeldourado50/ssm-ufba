@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">Áreas</div>
        <div class="panel-body">

          @include('admin.info')

          <form method="GET" action="{{ url('/areas') }}" accept-charset="UTF-8" style="display:inline" role="search">
            <input type="text" class="form-control" name="description" placeholder="Pesquisar por descrição..." value="{{ request('description') }}">

            <button type="submit" class="btn btn-success" style="margin-top: 6px;">
              <i class="fa fa-search" aria-hidden="true"></i> Pesquisar
            </button>

            <a href="{{ url('/areas/create') }}" class="btn btn-success" style="margin-top: 6px;">
              <i class="fa fa-plus" aria-hidden="true"></i> Novo
            </a>
          </form>

          <div class="table-responsive">
            <table class="table table-borderless">
              <thead>
                <tr>
                  <th>Nome</th>
                  <th>Descrição</th>
                  <th style="width: 150px !important;">Ações</th>
                </tr>
              </thead>
              <tbody>
              @foreach($areas as $item)
                <tr>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->description }}</td>
                  <td>
                    <a href="{{ url('/areas/' . $item->id) }}" title="Visualizar"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                    <a href="{{ url('/areas/' . $item->id . '/edit') }}" title="Editar"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>

                    <form method="POST" action="{{ url('/areas' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                      {{ method_field('DELETE') }}
                      {{ csrf_field() }}
                      <button type="submit" class="btn btn-danger btn-sm" title="Excluir" onclick="return confirm(&quot;Confirma exclusão?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                    </form>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
            <div class="pagination-wrapper"> {!! $areas->appends(['description' => Request::get('description')])->render() !!} </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
