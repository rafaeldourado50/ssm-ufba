<?php

namespace App\Http\Controllers;

use App\Permission;
use App\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class UserPermissionsController extends Controller
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
   * @param  int  $user_id
   *
   * @return \Illuminate\View\View
   */
  public function index($user_id)
  {
    $user = User::findOrFail($user_id);
    $permissions = Permission::orderBy('id')->pluck('name', 'id');

    return view('user_permissions.index', compact('user', 'permissions'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param \Illuminate\Http\Request $request
   * @param  int  $user_id
   *
   * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
   */
  public function store(Request $request, $user_id)
  {
    $this->validate($request, [
        'select_permission' => 'required',
    ]);
    
    $permission_id = Input::get('select_permission');

    $permission = Permission::findOrFail($permission_id);
    $user = User::findOrFail($user_id);

    $user->givePermissionTo($permission);

    return redirect('users/' . $user_id . '/permissions')->with('success', 'Permissão do Usuário criada com sucesso!');
  }
  
  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $user_id
   * @param  int  $permission_id
   *
   * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
   */
  public function destroy($user_id, $permission_id)
  {
    $permission = Permission::findOrFail($permission_id);
    $user = User::findOrFail($user_id);
    
    $user->revokePermissionTo($permission);

    return redirect('users/' . $user_id . '/permissions')->with('success', 'Permissão do Usuário removida com sucesso!');
  }
}
