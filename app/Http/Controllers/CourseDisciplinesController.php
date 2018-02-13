<?php

namespace App\Http\Controllers;

use App\Course;
use App\Discipline;
use App\CourseDiscipline;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseDisciplinesController extends Controller
{
  public function index($course_id)
  {
    $course = Course::findOrFail($course_id);
    
    $disciplines = DB::table('disciplines')
      ->join('course_disciplines', 'disciplines.id', '=', 'course_disciplines.discipline_id')
      ->join('courses', 'course_disciplines.course_id', '=', 'courses.id')
      ->where('courses.id', '=', $course_id)
      ->select('disciplines.name', 'disciplines.load', 'course_disciplines.semester', 'course_disciplines.nature')
      ->get();

    return view('course_disciplines.index', compact('course', 'disciplines'));
  }
}
