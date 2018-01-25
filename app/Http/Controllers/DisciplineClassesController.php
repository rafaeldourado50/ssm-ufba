<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\DisciplineClass;
use Illuminate\Http\Request;

class DisciplineClassesController extends Controller
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
            $discipline_classes = DisciplineClass::paginate($perPage);
        } else {
            $discipline_classes = DisciplineClass::paginate($perPage);
        }

        return view('discipline_classes.index', compact('discipline_classes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('discipline_classes.create');
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
        
        DisciplineClass::create($requestData);

        return redirect('discipline_classes')->with('flash_message', 'DisciplineClass added!');
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
        $discipline_class = DisciplineClass::findOrFail($id);

        return view('discipline_classes.show', compact('discipline_class'));
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
        $discipline_class = DisciplineClass::findOrFail($id);

        return view('discipline_classes.edit', compact('discipline_class'));
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
        
        $discipline_class = DisciplineClass::findOrFail($id);
        $discipline_class->update($requestData);

        return redirect('discipline_classes')->with('flash_message', 'DisciplineClass updated!');
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
        DisciplineClass::destroy($id);

        return redirect('discipline_classes')->with('flash_message', 'DisciplineClass deleted!');
    }
}
