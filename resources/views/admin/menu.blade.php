@if (Auth::user()->hasPermission('list areas'))
  <li><a href="{{ url('/areas') }}">Areas</a></li>
@endif
@if (Auth::user()->hasPermission('list courses'))
  <li><a href="{{ url('/courses') }}">Cursos</a></li>
@endif
@if (Auth::user()->hasPermission('list disciplines'))
  <li><a href="{{ url('/disciplines') }}">Disciplinas</a></li>
@endif
@if (Auth::user()->hasPermission('list professors'))
  <li><a href="{{ url('/professors') }}">Professores</a></li>
@endif
@if (Auth::user()->hasPermission('list users'))
  <li><a href="{{ url('/users') }}">Usuários</a></li>
@endif
@if (Auth::user()->hasPermission('list roles'))
  <li><a href="{{ url('/roles') }}">Perfis</a></li>
@endif
@if (Auth::user()->hasPermission('list permissions'))
  <li><a href="{{ url('/permissions') }}">Permissões</a></li>
@endif
@if (Auth::user()->hasPermission('list records'))
  <li><a href="{{ url('/records') }}">Histórico</a></li>
@endif
@if (Auth::user()->hasPermission('show suggestion'))
  <li><a href="{{ url('/suggestion') }}">Sugestão</a></li>
@endif
