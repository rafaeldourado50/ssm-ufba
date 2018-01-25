<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\CourseDiscipline;
use Illuminate\Http\Request;

class CourseDisciplinesController extends Controller
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
            $course_disciplines = CourseDiscipline::paginate($perPage);
        } else {
            $course_disciplines = CourseDiscipline::paginate($perPage);
        }

        return view('course_disciplines.index', compact('course_disciplines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('course_disciplines.create');
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
        
        CourseDiscipline::create($requestData);

        return redirect('course_disciplines')->with('flash_message', 'CourseDiscipline added!');
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
        $course_discipline = CourseDiscipline::findOrFail($id);

        return view('course_disciplines.show', compact('course_discipline'));
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
        $course_discipline = CourseDiscipline::findOrFail($id);

        return view('course_disciplines.edit', compact('course_discipline'));
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
        
        $course_discipline = CourseDiscipline::findOrFail($id);
        $course_discipline->update($requestData);

        return redirect('course_disciplines')->with('flash_message', 'CourseDiscipline updated!');
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
        CourseDiscipline::destroy($id);

        return redirect('course_disciplines')->with('flash_message', 'CourseDiscipline deleted!');
    }
}
