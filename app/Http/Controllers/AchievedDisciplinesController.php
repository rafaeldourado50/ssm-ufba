<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\AchievedDiscipline;
use Illuminate\Http\Request;

class AchievedDisciplinesController extends Controller
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
            $achieved_disciplines = AchievedDiscipline::paginate($perPage);
        } else {
            $achieved_disciplines = AchievedDiscipline::paginate($perPage);
        }

        return view('achieved_disciplines.index', compact('achieved_disciplines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('achieved_disciplines.create');
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
        
        AchievedDiscipline::create($requestData);

        return redirect('achieved_disciplines')->with('flash_message', 'AchievedDiscipline added!');
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
        $achieved_discipline = AchievedDiscipline::findOrFail($id);

        return view('achieved_disciplines.show', compact('achieved_discipline'));
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
        $achieved_discipline = AchievedDiscipline::findOrFail($id);

        return view('achieved_disciplines.edit', compact('achieved_discipline'));
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
        
        $achieved_discipline = AchievedDiscipline::findOrFail($id);
        $achieved_discipline->update($requestData);

        return redirect('achieved_disciplines')->with('flash_message', 'AchievedDiscipline updated!');
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
        AchievedDiscipline::destroy($id);

        return redirect('achieved_disciplines')->with('flash_message', 'AchievedDiscipline deleted!');
    }
}
