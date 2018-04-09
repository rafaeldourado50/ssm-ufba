<?php

namespace App\Http\Controllers;

use Auth;

use App\Area;
use App\Course;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CoursesController extends Controller
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
   * Display a listing of the resource.
   *
   * @return \Illuminate\View\View
   */
  public function index(Request $request)
  {
    $user = Auth::user();

    if ($user->hasPermissionTo('list courses')) {

      $keyword = $request->get('name');
      $perPage = 5;

      if (!empty($keyword)) {
          $courses = Course::where('name', 'LIKE', "%$keyword%")->orderBy('name')->paginate($perPage);
      } else {
          $courses = Course::orderBy('name')->paginate($perPage);
      }

      return view('courses.index', compact('courses'));
    } else {
      return view('errors.forbidden');
    }
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\View\View
   */
  public function create()
  {
    $user = Auth::user();

    if ($user->hasPermissionTo('edit course')) {

      $areas = Area::orderBy('name')->pluck('name', 'id');
    
      return view('courses.create', compact('areas'));
    } else {
      return view('errors.forbidden');
    }
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
      'name' => 'required',
      'code' => 'required',
    ]);

    $requestData = $request->all();

    Course::create($requestData);

    return redirect('courses')->with('success', 'Curso criado com sucesso!');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   *
   * @return \Illuminate\View\View
   */
  public function show($id)
  {
    $user = Auth::user();

    if ($user->hasPermissionTo('list courses')) {

      $course = Course::findOrFail($id);

      return view('courses.show', compact('course'));
    } else {
      return view('errors.forbidden');
    }
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   *
   * @return \Illuminate\View\View
   */
  public function edit($id)
  {
    $user = Auth::user();

    if ($user->hasPermissionTo('edit course')) {

      $course = Course::findOrFail($id);
    
      $areas = Area::orderBy('name')->pluck('name', 'id');

      return view('courses.edit', compact('course', 'areas'));
    } else {
      return view('errors.forbidden');
    }
  }

  /**
   * Update the specified resource in storage.
   *
   * @param \Illuminate\Http\Request $request
   * @param  int  $id
   *
   * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
   */
  public function update(Request $request, $id)
  {
    $this->validate($request, [
      'name' => 'required',
      'code' => 'required',
    ]);

    $requestData = $request->all();

    $course = Course::findOrFail($id);
    $course->update($requestData);

    return redirect('courses')->with('success', 'Curso atualizado com sucesso!');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   *
   * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
   */
  public function destroy($id)
  {
    Course::destroy($id);

    return redirect('courses')->with('success', 'Curso removido com sucesso!');
  }
}
