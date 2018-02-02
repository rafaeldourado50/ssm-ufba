<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;

class PermissionsController extends Controller
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
      $permissions = Permission::where('name', 'LIKE', "%$keyword%")->orderBy('name')->paginate($perPage);
    } else {
      $permissions = Permission::orderBy('name')->paginate($perPage);
    }

    return view('permissions.index', compact('permissions'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\View\View
   */
  public function create()
  {
    return view('permissions.create');
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

    Permission::create($requestData);

    return redirect('permissions')->with('success', 'Permission created successfully!');
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
    $permission = Permission::findOrFail($id);

    return view('permissions.show', compact('permission'));
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
    $permission = Permission::findOrFail($id);

    return view('permissions.edit', compact('permission'));
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

    $permission = Permission::findOrFail($id);
    $permission->update($requestData);

    return redirect('permissions')->with('success', 'Permission updated successfully!');
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
    Permission::destroy($id);

    return redirect('permissions')->with('success', 'Permission deleted successfully!');
  }
}