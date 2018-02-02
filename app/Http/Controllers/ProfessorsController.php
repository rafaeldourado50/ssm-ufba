<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Professor;
use Illuminate\Http\Request;

class ProfessorsController extends Controller
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
    $keyword = $request->get('name');
    $perPage = 5;

    if (!empty($keyword)) {
      $professors = Professor::where('name', 'LIKE', "%$keyword%")->orderBy('name')->paginate($perPage);
    } else {
      $professors = Professor::orderBy('name')->paginate($perPage);
    }

    return view('professors.index', compact('professors'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\View\View
   */
  public function create()
  {
    return view('professors.create');
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
    ]);
    
    $requestData = $request->all();

    Professor::create($requestData);

    return redirect('professors')->with('success', 'Professor created successfully!');
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
    $professor = Professor::findOrFail($id);

    return view('professors.show', compact('professor'));
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
    $professor = Professor::findOrFail($id);

    return view('professors.edit', compact('professor'));
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
    ]);
    
    $requestData = $request->all();

    $professor = Professor::findOrFail($id);
    $professor->update($requestData);

    return redirect('professors')->with('success', 'Professor updated successfully!');
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
    Professor::destroy($id);

    return redirect('professors')->with('success', 'Professor deleted successfully!');
  }
}
