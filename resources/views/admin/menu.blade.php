<style>
  ul.menu {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
  }

  li.item {
    float: left;
  }

  li.item a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }

  li.item a:hover {
    background-color: #111;
  }

  li.active {
    float: left;
    background-color: #4CAF50;
  }
  
  li.active a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }
</style>

<div class="col-md-12">
  <ul class="menu">
    <li {{{ (Request::is('/') ? 'class=active' : 'class=item') }}}><a href="{{ url('/') }}"><i class="fa fa-home fa-fw"></i>Home</a></li>
    <li {{{ (Request::is('areas') ? 'class=active' : 'class=item') }}}><a href="{{ url('/areas') }}"><i class="fa fa-list-alt fa-fw"></i>Areas</a></li>
    <li {{{ (Request::is('courses') ? 'class=active' : 'class=item') }}}><a href="{{ url('/courses') }}"><i class="fa fa-book fa-fw"></i>Courses</a></li>
    <!-- <li><a href="{{ url('/course_disciplines') }}"><i class="fa fa-bar-chart-o fa-fw"></i>Course Disciplines</a></li> -->
    <li {{{ (Request::is('disciplines') ? 'class=active' : 'class=item') }}}><a href="{{ url('/disciplines') }}"><i class="fa fa-file-o fa-fw"></i>Disciplines</a></li>
    <!-- <li><a href="{{ url('/discipline_class_offers') }}"><i class="fa fa-tasks fa-fw"></i>Discipline Class Offers</a></li> -->
    <!-- <li><a href="{{ url('/discipline_classes') }}"><i class="fa fa-table fa-fw"></i>Discipline Classes</a></li> -->
    <li {{{ (Request::is('professors') ? 'class=active' : 'class=item') }}}><a href="{{ url('/professors') }}"><i class="fa fa-pencil fa-fw"></i>Professors</a></li>
    <!-- <li><a href="{{ url('/schedules') }}"><i class="fa fa-calendar fa-fw"></i>Schedules</a></li> -->
    <li {{{ (Request::is('students') ? 'class=active' : 'class=item') }}}><a href="{{ url('/students') }}"><i class="fa fa-cogs fa-fw"></i>Students</a></li>
  </ul>
  <br />
</div>