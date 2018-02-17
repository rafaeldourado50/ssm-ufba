<?php

namespace App\Http\Controllers;

use App\AchievedDiscipline;
use App\Course;
use App\Student;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

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
        $user = Auth::user();
        $keyword = $request->get('name');
        $perPage = 5;

        $student = Student::where('user_id', '=', $user['id'])
            ->select('course_id', 'id')
            ->first();

        $disciplines = Course::where('courses.id', '=', $student['course_id'])
            ->join('course_disciplines as cd', 'cd.course_id', '=', 'courses.id')
            ->join('disciplines as d', 'd.id', '=', 'cd.discipline_id')
            ->select('d.name', 'd.id', 'cd.nature')
            ->get();

        $achieved_disicplines = AchievedDiscipline::where('student_id', '=', $student['id'])
            ->select('discipline_id')
            ->get();


//        $disciplines = $disciplines->each(function ($item) use ($achieved_disicplines){
//           if($achieved_disicplines->contains($item['id'])){
//               $item['check'] = 1;
//           } else {
//               $item['check'] = 0;
//           }
//        });

        //$disciplines = $disciplines->keyBy('id');
        $disciplines = $disciplines->groupBy('nature');
        $disciplines = $disciplines->filter(function (&$item){
            $keys = $item->pluck('id');
            $names = $item->pluck('name');
            return $item = $keys->combine($names);
        });
//        dd($disciplines);

//        if (!empty($keyword)) {
//            $permissions = Permission::where('name', 'LIKE', "%$keyword%")->orderBy('name')->paginate($perPage);
//        } else {
//            $permissions = Permission::orderBy('name')->paginate($perPage);
//        }

        return view('records.index', compact('disciplines'));
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
    {
        print_r($request->all());die;
//        $this->validate($request, [
//            'select_permission' => 'required',
//        ]);
//
//        $permission_id = Input::get('select_permission');
//
//        $permission = Permission::findOrFail($permission_id);
//        $role = Role::findOrFail($role_id);
//
//        $role->givePermissionTo($permission);
//
//        return redirect('roles/' . $role_id . '/permissions')->with('success', 'Role Permission created successfully!');
    }
}
