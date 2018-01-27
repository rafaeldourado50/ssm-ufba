<style>
  body {
    margin-top:20px;
   }
  .fa-fw {
    width: 2em;
  }
</style>
<div class="col-md-3">
  <ul class="nav nav-pills nav-stacked">
    <li class="active"><a href="#"><i class="fa fa-home fa-fw"></i>Home</a></li>
    <li><a href="{{ url('/areas') }}"><i class="fa fa-list-alt fa-fw"></i>Areas</a></li>
    <li><a href="{{ url('/courses') }}"><i class="fa fa-bar-chart-o fa-fw"></i>Courses</a></li>
    <li><a href="{{ url('/course_disciplines') }}"><i class="fa fa-book fa-fw"></i>Course Disciplines</a></li>
    <li><a href="{{ url('/disciplines') }}"><i class="fa fa-file-o fa-fw"></i>Disciplines</a></li>
    <li><a href="{{ url('/discipline_class_offers') }}"><i class="fa fa-pencil fa-fw"></i>Discipline Class Offers</a></li>
    <li><a href="{{ url('/discipline_classes') }}"><i class="fa fa-cogs fa-fw"></i>Discipline Classes</a></li>       
    <li><a href="{{ url('/professors') }}"><i class="fa fa-tasks fa-fw"></i>Professors</a></li>
    <li><a href="{{ url('/schedules') }}"><i class="fa fa-calendar fa-fw"></i>Schedules</a></li>
    <li><a href="{{ url('/students') }}"><i class="fa fa-table fa-fw"></i>Students</a></li>
  </ul>
</div>