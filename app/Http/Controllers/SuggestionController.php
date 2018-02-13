<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class SuggestionController extends Controller
{
    public function makeSuggestion(Request $request){
        //$data = $request->all();
        $user = Auth::user();
        print_r($user['name']);die;
    }
}
