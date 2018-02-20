@extends('layouts.app')

@section('content')
    <div class="row">
        <script type="text/javascript">
            $(function () {

                $('.list-group-item').on('click', function () {
                    $('.glyphicon', this)
                        .toggleClass('glyphicon-chevron-right')
                        .toggleClass('glyphicon-chevron-down');
                });

            });

        </script>
        <div class="col-md-12">
            <form method="POST" action="{{ url('/suggestion') }}"
                  accept-charset="UTF-8" enctype="multipart/form-data">

                {{ csrf_field() }}

                <label for="disciplines_qtd" class="col-md-2 control-label">Quantidade de Disciplinas</label>
                <div class="col-md-4">
                    <input class="form-control" min="2" placeholder="2" name="disciplines_qtd" type="number" id="disciplines_qtd" value="">
                </div>
                <div class="form-group" style="margin-top: 6px;">
                    <div class="pull-left col-md-6">
                        <button class="btn btn-primary" type="submit">
                            <i class="fa fa-check" aria-hidden="true"></i> Gerar
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Segunda</th>
                        <th scope="col">Terça</th>
                        <th scope="col">Quarta</th>
                        <th scope="col">Quinta</th>
                        <th scope="col">Sexta</th>
                        <th scope="col">Sábado</th>
                        <th scope="col">Domingo</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">7:00</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
