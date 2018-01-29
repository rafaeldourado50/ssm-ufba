<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Discipline;
use Illuminate\Http\Request;

class DisciplinesController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\View\View
   */
  public function index(Request $request)
  {
    $keyword = $request->get('code');
    $perPage = 5;

    if (!empty($keyword)) {
        $disciplines = Discipline::where('code', 'LIKE', "%$keyword%")->orderBy('code')->paginate($perPage);
    } else {
        $disciplines = Discipline::orderBy('code')->paginate($perPage);
    }

    return view('disciplines.index', compact('disciplines'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\View\View
   */
  public function create()
  {
    return view('disciplines.create');
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
      'code' => 'required',
      'load' => 'required',
    ]);
    
    $requestData = $request->all();

    Discipline::create($requestData);

    return redirect('disciplines')->with('success', 'Discipline created successfully!');
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
    $discipline = Discipline::findOrFail($id);

    return view('disciplines.show', compact('discipline'));
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
    $discipline = Discipline::findOrFail($id);

    return view('disciplines.edit', compact('discipline'));
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
      'code' => 'required',
      'load' => 'required',
    ]);
    
    $requestData = $request->all();

    $discipline = Discipline::findOrFail($id);
    $discipline->update($requestData);

    return redirect('disciplines')->with('success', 'Discipline updated successfully!');
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
    Discipline::destroy($id);

    return redirect('disciplines')->with('success', 'Discipline deleted successfully!');
  }
}
