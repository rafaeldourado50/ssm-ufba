<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class UserRolesController extends Controller
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
    $roles = Role::orderBy('name')->pluck('name', 'id');

    return view('user_roles.index', compact('user', 'roles'));
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
        'select_role' => 'required',
    ]);
    
    $role_id = Input::get('select_role');

    $role = Role::findOrFail($role_id);
    $user = User::findOrFail($user_id);

    $user->assignRole($role);

    return redirect('users/' . $user_id . '/roles')->with('success', 'Perfil do Usuário criado com sucesso!');
  }
  
  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $user_id
   * @param  int  $role_id
   *
   * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
   */
  public function destroy($user_id, $role_id)
  {
    $role = Role::findOrFail($role_id);
    $user = User::findOrFail($user_id);
    
    $user->removeRole($role);

    return redirect('users/' . $user_id . '/roles')->with('success', 'Perfil do Usuário removido com sucesso!');
  }
}
