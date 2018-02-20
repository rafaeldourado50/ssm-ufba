@if (Auth::user()->hasRole('professor'))
  <li><a href="{{ url('/areas') }}">Areas</a></li>
  <li><a href="{{ url('/courses') }}">Courses</a></li>
  <li><a href="{{ url('/disciplines') }}">Disciplines</a></li>
  <li><a href="{{ url('/professors') }}">Professors</a></li>
@endif

@if (Auth::user()->hasRole('admin'))
  <li><a href="{{ url('/users') }}">Users</a></li>
  <li><a href="{{ url('/roles') }}">Roles</a></li>
  <li><a href="{{ url('/permissions') }}">Permissions</a></li>
@endif

@if (Auth::user()->hasRole('student'))
  <li><a href="{{ url('/records') }}">Records</a></li>
  <li><a href="{{ url('/suggestion') }}">Suggestion</a></li>
@endif
