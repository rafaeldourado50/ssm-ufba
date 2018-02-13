<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

use App\Http\Requests;

class RecordsController extends Controller
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
        $keyword = $request->get('name');
        $perPage = 5;

        $disciplines = Course::where('courses.id', '=', 101)
            ->join('course_disciplines as cd', 'cd.course_id', '=', 'courses.id')
            ->join('disciplines as d', 'd.id', '=', 'cd.discipline_id')
            ->get();
        //dd($disciplines->groupBy('nature'));

        $disciplines = $disciplines->groupBy('nature');

//        if (!empty($keyword)) {
//            $permissions = Permission::where('name', 'LIKE', "%$keyword%")->orderBy('name')->paginate($perPage);
//        } else {
//            $permissions = Permission::orderBy('name')->paginate($perPage);
//        }

        return view('records.index', compact('disciplines'));
    }
}
