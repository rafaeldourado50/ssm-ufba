@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">Welcome</div>
        <div class="panel-body">
          <center>
            <h1>Sistema de Sugestão de Matrícula</h1>
            <h3>Universidade Federal da Bahia</h3>
            <div class="links">
              <a href="https://www.moodle.ufba.br/#">Moodle</a>
              <a href="https://siac.ufba.br/SiacWWW/Welcome.do">SIAC</a>
              <a href="https://siav.ufba.br/siav/privado/index.faces">SIAV</a>
              <a href="http://www.agenda.ufba.br/">Agenda</a>
              <a href="http://meuhorario.dcc.ufba.br/index.php">MeuHorario</a>
              <a href="https://pt.wikipedia.org/wiki/Universidade_Federal_da_Bahia">Wiki</a>
            </div>
          </center>
        </div>
      </div>
    </div>
  </div>
  <style>
    .links > a {
      color: #636b6f;
      padding: 0 25px;
      font-size: 12px;
      font-weight: 600;
      letter-spacing: .1rem;
      text-decoration: none;
      text-transform: uppercase;
    }
  </style>
@endsection
