@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">Curso</div>
        <div class="panel-body">

          <div class="table-responsive">
            <table class="table table-borderless">
              <tbody>
                <tr>
                  <th class="col-md-2"> ID </th><td class="col-md-10"> {{ $course->id }} </td>
                </tr>
                <tr>
                  <th class="col-md-2"> Nome </th><td class="col-md-10"> {{ $course->name }} </td>
                </tr>
                <tr>
                  <th class="col-md-2"> Código </th><td class="col-md-10"> {{ $course->code }} </td>
                </tr>
                <tr>
                  <th class="col-md-2"> Currículo </th><td class="col-md-10"> {{ $course->curriculum }} </td>
                </tr>
                <tr>
                  <th class="col-md-2"> Área </th><td class="col-md-10"> {{ $course->area->name }} </td>
                </tr>
              </tbody>
            </table>
          </div>
          
          <div class="pull-left">
            <a href="{{ url('/courses/' . $course->id . '/edit') }}" class="btn btn-primary">
              <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar
            </a>

            <form method="POST" action="{{ url('courses' . '/' . $course->id) }}" accept-charset="UTF-8" style="display:inline">
              {{ method_field('DELETE') }}
              {{ csrf_field() }}
              <button type="submit" class="btn btn-danger" onclick="return confirm(&quot;Confirma exclusão?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Excluir</button>
            </form>
          </div>
          <div class="pull-right">
            <a href="{{ url('/courses') }}" class="btn btn-warning">
              <i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
