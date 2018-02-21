<?php

namespace App\Http\Controllers;

use App\Permission;
use App\Role;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class RolePermissionsController extends Controller
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
   * @param  int  $role_id
   *
   * @return \Illuminate\View\View
   */
  public function index($role_id)
  {
    $role = Role::findOrFail($role_id);
    $permissions = Permission::orderBy('id')->pluck('name', 'id');

    return view('role_permissions.index', compact('role', 'permissions'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param \Illuminate\Http\Request $request
   * @param  int  $role_id
   *
   * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
   */
  public function store(Request $request, $role_id)
  {
    $this->validate($request, [
        'select_permission' => 'required',
    ]);
    
    $permission_id = Input::get('select_permission');

    $permission = Permission::findOrFail($permission_id);
    $role = Role::findOrFail($role_id);

    $role->givePermissionTo($permission);

    return redirect('roles/' . $role_id . '/permissions')->with('success', 'Permissão do Perfil criada com sucesso!');
  }
  
  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $role_id
   * @param  int  $permission_id
   *
   * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
   */
  public function destroy($role_id, $permission_id)
  {
    $permission = Permission::findOrFail($permission_id);
    $role = Role::findOrFail($role_id);
    
    $role->revokePermissionTo($permission);

    return redirect('roles/' . $role_id . '/permissions')->with('success', 'Permissão do Perfil removida com sucesso!');
  }
}
