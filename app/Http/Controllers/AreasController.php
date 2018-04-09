<?php

namespace App\Http\Controllers;

use Auth;

use App\Area;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AreasController extends Controller
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

    if ($user->hasPermissionTo('list areas')) {

      $keyword = $request->get('description');
      $perPage = 5;

      if (!empty($keyword)) {
          $areas = Area::where('description', 'LIKE', "%$keyword%")->orderBy('name')->paginate($perPage);
      } else {
          $areas = Area::orderBy('name')->paginate($perPage);
      }

      return view('areas.index', compact('areas'));  
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

    if ($user->hasPermissionTo('edit area')) {

      return view('areas.create');
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
      'description' => 'required',
    ]);

    $requestData = $request->all();

    Area::create($requestData);

    return redirect('areas')->with('success', 'Área criada com sucesso!');
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

    if ($user->hasPermissionTo('list areas')) {

      $area = Area::findOrFail($id);

      return view('areas.show', compact('area'));
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

    if ($user->hasPermissionTo('edit area')) {

      $area = Area::findOrFail($id);

      return view('areas.edit', compact('area'));
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
      'description' => 'required',
    ]);

    $requestData = $request->all();

    $area = Area::findOrFail($id);
    $area->update($requestData);

    return redirect('areas')->with('success', 'Área atualizada com sucesso!');
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
    Area::destroy($id);

    return redirect('areas')->with('success', 'Área removida com sucesso!');
  }
}
