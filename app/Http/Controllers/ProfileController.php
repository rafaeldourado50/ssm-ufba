<?php

namespace App\Http\Controllers;

use Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use Illuminate\Http\Request;

class ProfileController extends Controller
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
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $user = Auth::user();

    return view('profile.data', compact('user'));
  }
}
