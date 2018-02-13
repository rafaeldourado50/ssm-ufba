<?php

namespace App\Http\Controllers;

use Auth;

use App\Role;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class RolesController extends Controller
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

    if ($user->hasPermissionTo('list roles')) {

      $keyword = $request->get('name');
      $perPage = 5;

      if (!empty($keyword)) {
        $roles = Role::where('name', 'LIKE', "%$keyword%")->orderBy('name')->paginate($perPage);
      } else {
        $roles = Role::orderBy('name')->paginate($perPage);
      }

      return view('roles.index', compact('roles'));
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

    if ($user->hasPermissionTo('edit role')) {

      return view('roles.create');
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
    ]);
    
    $requestData = $request->all();

    Role::create($requestData);

    return redirect('roles')->with('success', 'Role created successfully!');
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

    if ($user->hasPermissionTo('list roles')) {

      $role = Role::findOrFail($id);

      return view('roles.show', compact('role'));
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

    if ($user->hasPermissionTo('edit role')) {

      $role = Role::findOrFail($id);

      return view('roles.edit', compact('role'));
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
    ]);
    
    $requestData = $request->all();

    $role = Role::findOrFail($id);
    $role->update($requestData);

    return redirect('roles')->with('success', 'Role updated successfully!');
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
    Role::destroy($id);

    return redirect('roles')->with('success', 'Role deleted successfully!');
  }
}