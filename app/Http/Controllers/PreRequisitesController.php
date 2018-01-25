<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\PreRequisite;
use Illuminate\Http\Request;

class PreRequisitesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $pre_requisites = PreRequisite::paginate($perPage);
        } else {
            $pre_requisites = PreRequisite::paginate($perPage);
        }

        return view('pre_requisites.index', compact('pre_requisites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('pre_requisites.create');
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
        
        $requestData = $request->all();
        
        PreRequisite::create($requestData);

        return redirect('pre_requisites')->with('flash_message', 'PreRequisite added!');
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
        $pre_requisite = PreRequisite::findOrFail($id);

        return view('pre_requisites.show', compact('pre_requisite'));
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
        $pre_requisite = PreRequisite::findOrFail($id);

        return view('pre_requisites.edit', compact('pre_requisite'));
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
        
        $requestData = $request->all();
        
        $pre_requisite = PreRequisite::findOrFail($id);
        $pre_requisite->update($requestData);

        return redirect('pre_requisites')->with('flash_message', 'PreRequisite updated!');
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
        PreRequisite::destroy($id);

        return redirect('pre_requisites')->with('flash_message', 'PreRequisite deleted!');
    }
}
