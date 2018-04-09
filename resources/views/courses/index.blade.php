@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">Cursos</div>
        <div class="panel-body">

          @include('admin.info')
          
          <form method="GET" action="{{ url('/courses') }}" accept-charset="UTF-8" style="display:inline" role="search">
            <input type="text" class="form-control" name="name" placeholder="Pesquisar por nome..." value="{{ request('name') }}">

            <button type="submit" class="btn btn-success" style="margin-top: 6px;">
              <i class="fa fa-search" aria-hidden="true"></i> Pesquisar
            </button>

            <a href="{{ url('/courses/create') }}" class="btn btn-success" style="margin-top: 6px;">
              <i class="fa fa-plus" aria-hidden="true"></i> Novo
            </a>
          </form>

          <div class="table-responsive">
            <table class="table table-borderless">
              <thead>
                <tr>
                  <th>Nome</th>
                  <th>Código</th>
                  <th>Currículo</th>
                  <th style="width: 165px !important;">Ações</th>
                </tr>
              </thead>
              <tbody>
              @foreach($courses as $item)
                <tr>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->code }}</td>
                  <td>{{ $item->curriculum }}</td>
                  <td>
                    <a href="{{ url('/courses/' . $item->id) }}" title="Visualizar"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> </button></a>
                    <a href="{{ url('/courses/' . $item->id . '/edit') }}" title="Editar"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </button></a>

                    <form method="POST" action="{{ url('/courses' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                      {{ method_field('DELETE') }}
                      {{ csrf_field() }}
                      <button type="submit" class="btn btn-danger btn-sm" title="Excluir" onclick="return confirm(&quot;Confirma exclusão?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> </button>
                    </form>

                    <a href="{{ url('/courses/' . $item->id . '/disciplines') }}" title="Disciplinas do Curso"><button class="btn btn-success btn-sm"><i class="fa fa-folder-open" aria-hidden="true"></i> </button></a>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
            <div class="pagination-wrapper"> {!! $courses->appends(['name' => Request::get('name')])->render() !!} </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
