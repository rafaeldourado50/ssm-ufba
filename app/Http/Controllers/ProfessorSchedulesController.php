<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ProfessorSchedule;
use Illuminate\Http\Request;

class ProfessorSchedulesController extends Controller
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
            $professor_schedules = ProfessorSchedule::paginate($perPage);
        } else {
            $professor_schedules = ProfessorSchedule::paginate($perPage);
        }

        return view('professor_schedules.index', compact('professor_schedules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('professor_schedules.create');
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
        
        ProfessorSchedule::create($requestData);

        return redirect('professor_schedules')->with('flash_message', 'ProfessorSchedule added!');
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
        $professor_schedule = ProfessorSchedule::findOrFail($id);

        return view('professor_schedules.show', compact('professor_schedule'));
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
        $professor_schedule = ProfessorSchedule::findOrFail($id);

        return view('professor_schedules.edit', compact('professor_schedule'));
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
        
        $professor_schedule = ProfessorSchedule::findOrFail($id);
        $professor_schedule->update($requestData);

        return redirect('professor_schedules')->with('flash_message', 'ProfessorSchedule updated!');
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
        ProfessorSchedule::destroy($id);

        return redirect('professor_schedules')->with('flash_message', 'ProfessorSchedule deleted!');
    }
}
