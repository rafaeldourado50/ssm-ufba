<?php

namespace App\Http\Controllers;

use Auth;

use App\Course;
use App\Student;
use App\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class StudentsController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\View\View
   */
  public function create()
  {
    $courses = Course::orderBy('name')->pluck('name', 'id');
    
    return view('students.create', compact('courses'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param \Illuminate\Http\Request $request
   *
   * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
   */
  public function store(Request $request)
  {
    $this->validate($request, [
      'enrollment' => 'required',
      'course' => 'required',
    ]);

    $course_id = Input::get('course');
    $user_id = Auth::user()->id;
    
    $student = new Student();
    $student->user_id = $user_id;
    $student->course_id = $course_id;
    $student->enrollment = $request->enrollment;

    $student->save();

    Auth::user()->assignRole('student');
    
    return redirect('/home')->with('success', 'Registration completed successfully!');
  }
}
