<?php

namespace App\Http\Controllers;

use Auth;

use App\Discipline;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DisciplinesController extends Controller
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

    if ($user->hasPermissionTo('list disciplines')) {

      $keyword = $request->get('code');
      $perPage = 5;

      if (!empty($keyword)) {
          $disciplines = Discipline::where('code', 'LIKE', "%$keyword%")->orderBy('code')->paginate($perPage);
      } else {
          $disciplines = Discipline::orderBy('code')->paginate($perPage);
      }

      return view('disciplines.index', compact('disciplines'));
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

    if ($user->hasPermissionTo('edit discipline')) {

      return view('disciplines.create');
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
      'load' => 'required',
    ]);
    
    $requestData = $request->all();

    Discipline::create($requestData);

    return redirect('disciplines')->with('success', 'Discipline created successfully!');
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

    if ($user->hasPermissionTo('list disciplines')) {

      $discipline = Discipline::findOrFail($id);

      return view('disciplines.show', compact('discipline'));
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

    if ($user->hasPermissionTo('edit discipline')) {

      $discipline = Discipline::findOrFail($id);

      return view('disciplines.edit', compact('discipline'));
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
      'load' => 'required',
    ]);
    
    $requestData = $request->all();

    $discipline = Discipline::findOrFail($id);
    $discipline->update($requestData);

    return redirect('disciplines')->with('success', 'Discipline updated successfully!');
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
    Discipline::destroy($id);

    return redirect('disciplines')->with('success', 'Discipline deleted successfully!');
  }
}
