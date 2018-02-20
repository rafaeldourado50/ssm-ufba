<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class SuggestionController extends Controller
{
    public function index(){
        //print_r('index');die;

        return view('suggestion.index');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $role_id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {dd($request->all());
        $disciplines = $request->input('selected');

        DB::beginTransaction();
        $user = Auth::user();


        DB::commit();



//        return view('records.index', compact('disciplines'), compact('achieved_disicplines'));
    }


    public function makeSuggestion(Request $request){
        //$data = $request->all();
        $user = Auth::user();
        print_r($user['name']);die;
    }
}
