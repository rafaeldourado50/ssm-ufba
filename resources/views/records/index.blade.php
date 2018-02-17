@extends('layouts.app')

@section('content')
  <div class="row">
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
    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">Disciplinas cursadas</div>
        <div class="panel-body">

          @include('admin.info')

          <div class="just-padding">

            <div class="list-group list-group-root well">

              @foreach($disciplines  as $index => $discipline)
              <a href="#item-1" class="list-group-item" data-toggle="collapse">
                <i class="glyphicon glyphicon-chevron-right"></i>{{$index}}
              </a>
              <div class="list-group collapse" id="item-1">
                @foreach($discipline as $item)
                <a href="#" class="list-group-item">
                  {{$item}}
                </a>
                @endforeach
               </div>
              @endforeach

            </div>

          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <form method="POST" action="{{ url('/records') }}" accept-charset="UTF-8" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="col-md-12">
        @foreach($disciplines  as $index => $discipline)
        {!! Form::select('selected[]', $discipline, null, ['multiple' => true, 'class' => 'selectpicker']) !!}
        @endforeach
        </div>
        <div class="pull-left">
          <button class="btn btn-primary" type="submit">
            <i class="fa fa-check" aria-hidden="true"></i> Salvar
          </button>
        </div>

      </form>
    </div>
  </div>
@endsection
