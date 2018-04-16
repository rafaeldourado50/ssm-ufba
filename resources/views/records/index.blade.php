@extends('layouts.app')

@section('content')
  <script type="text/javascript">
    $(function() {

      $('.list-group-item').on('click', function() {
        $('.glyphicon', this)
          .toggleClass('glyphicon-chevron-right')
          .toggleClass('glyphicon-chevron-down');
      });

    });
    $(function() {
      $('.selectpicker').on('click', function () {
        console.log('aqui');
      });
    });
  </script>
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">Disciplinas Ofertadas</div>
        <div class="panel-body">

          <form method="POST" action="{{ url('/records') }}" accept-charset="UTF-8" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="col-md-12">
              @foreach($disciplines as $index => $discipline)
                {{$index}}
                {!! Form::select('selected[]', $discipline, null, ['multiple' => true, 'class' => 'selectpicker', 'data-live-search' => true, 'title' => 'Selecionar disciplinas']) !!}
              @endforeach
            </div>

            <button class="btn btn-success" type="submit" style="margin-top: 6px;">
              <i class="fa fa-check" aria-hidden="true"></i> Salvar
            </button>

          </form>
        </div>
      </div>
    </div>
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">Disciplinas Cursadas</div>
        <div class="panel-body">

          @include('admin.info')

          <div class="just-padding">
            <div class="list-group list-group-root well">
              @foreach($achieved_disciplines  as $index => $discipline)
                <a href="#{{$index}}" class="list-group-item" data-toggle="collapse">
                  <i class="glyphicon glyphicon-chevron-right"></i>{{$index}}
                </a>
                <div class="list-group collapse" id="{{$index}}">
                  @foreach($discipline as $item)
                    <a href="#" class="list-group-item">
                      {{$item['name']}}
                    </a>
                  @endforeach
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
