<?php

namespace App\Http\Controllers;

use Auth;

use App\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class UsersController extends Controller
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

    if ($user->hasPermissionTo('list users')) {

      $keyword = $request->get('name');
      $perPage = 5;

      if (!empty($keyword)) {
        $users = User::where('name', 'LIKE', "%$keyword%")->orderBy('name')->paginate($perPage);
      } else {
        $users = User::orderBy('name')->paginate($perPage);
      }

      return view('users.index', compact('users'));
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

    if ($user->hasPermissionTo('edit user')) {

      return view('users.create');
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

    User::create($requestData);

    return redirect('users')->with('success', 'Usuário criado com sucesso!');
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

    if ($user->hasPermissionTo('list users')) {

      $user = User::findOrFail($id);

      return view('users.show', compact('user'));
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

    if ($user->hasPermissionTo('edit user')) {

      $user = User::findOrFail($id);

      return view('users.edit', compact('user'));
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

    $user = User::findOrFail($id);
    $user->update($requestData);

    return redirect('users')->with('success', 'Usuário atualizado com sucesso!');
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
    User::destroy($id);

    return redirect('users')->with('success', 'Usuário removido com sucesso!');
  }
}
