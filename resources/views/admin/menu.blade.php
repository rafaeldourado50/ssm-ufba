@if (Auth::user()->hasPermissionTo('list areas'))
  <li><a href="{{ url('/areas') }}">Areas</a></li>
@endif

@if (Auth::user()->hasPermissionTo('list courses'))
  <li><a href="{{ url('/courses') }}">Courses</a></li>
@endif

@if (Auth::user()->hasPermissionTo('list disciplines'))
  <li><a href="{{ url('/disciplines') }}">Disciplines</a></li>
@endif

@if (Auth::user()->hasPermissionTo('list professors'))
  <li><a href="{{ url('/professors') }}">Professors</a></li>
@endif

@if (Auth::user()->hasRole('admin'))
  <li><a href="{{ url('/users') }}">Users</a></li>
@endif

@if (Auth::user()->hasRole('admin'))
  <li><a href="{{ url('/roles') }}">Roles</a></li>
@endif

@if (Auth::user()->hasRole('admin'))
  <li><a href="{{ url('/permissions') }}">Permissions</a></li>
@endif

{{--@if (Auth::user()->hasRole('editProfile'))--}}
  <li><a href="{{ url('/records') }}">Meu histórico</a></li>
{{--@endif--}}