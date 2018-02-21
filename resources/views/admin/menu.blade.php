@if (Auth::user()->hasRole('professor'))
  <li><a href="{{ url('/areas') }}">Areas</a></li>
  <li><a href="{{ url('/courses') }}">Cursos</a></li>
  <li><a href="{{ url('/disciplines') }}">Disciplinas</a></li>
  <li><a href="{{ url('/professors') }}">Professores</a></li>
@endif

@if (Auth::user()->hasRole('admin'))
  <li><a href="{{ url('/users') }}">Usuários</a></li>
  <li><a href="{{ url('/roles') }}">Perfis</a></li>
  <li><a href="{{ url('/permissions') }}">Permissões</a></li>
@endif

@if (Auth::user()->hasRole('student'))
  <li><a href="{{ url('/records') }}">Histórico</a></li>
  <li><a href="{{ url('/suggestion') }}">Sugestão</a></li>
@endif
