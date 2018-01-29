<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Area;
use App\Course;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\View\View
   */
  public function index(Request $request)
  {
    $keyword = $request->get('name');
    $perPage = 5;

    if (!empty($keyword)) {
        $courses = Course::where('name', 'LIKE', "%$keyword%")->orderBy('name')->paginate($perPage);
    } else {
        $courses = Course::orderBy('name')->paginate($perPage);
    }

    return view('courses.index', compact('courses'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\View\View
   */
  public function create()
  {
    $areas = Area::orderBy('name')->pluck('name', 'id');
    
    return view('courses.create', compact('areas'));
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

    return redirect('courses')->with('success', 'Course created successfully!');
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
    $course = Course::findOrFail($id);

    return view('courses.show', compact('course'));
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
    $course = Course::findOrFail($id);
    
    $areas = Area::orderBy('name')->pluck('name', 'id');

    return view('courses.edit', compact('course', 'areas'));
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

    return redirect('courses')->with('success', 'Course updated successfully!');
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

    return redirect('courses')->with('success', 'Course deleted successfully!');
  }
}
