<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
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
      $students = Student::where('name', 'LIKE', "%$keyword%")->orderBy('name')->paginate($perPage);
    } else {
      $students = Student::orderBy('name')->paginate($perPage);
    }

    return view('students.index', compact('students'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\View\View
   */
  public function create()
  {
    return view('students.create');
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
      'enrollment' => 'required',
      'password' => 'required',
      'email' => 'required',
    ]);

    $requestData = $request->all();

    Student::create($requestData);

    return redirect('students')->with('success', 'Student created successfully!');
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
    $student = Student::findOrFail($id);

    return view('students.show', compact('student'));
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
    $student = Student::findOrFail($id);

    return view('students.edit', compact('student'));
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
      'enrollment' => 'required',
      'password' => 'required',
      'email' => 'required',
    ]);

    $requestData = $request->all();

    $student = Student::findOrFail($id);
    $student->update($requestData);

    return redirect('students')->with('success', 'Student updated successfully!');
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
    Student::destroy($id);

    return redirect('students')->with('success', 'Student deleted successfully!');
  }
}
