<?php

namespace App\Http\Controllers;

use App\AchievedDiscipline;
use App\Course;
use App\Student;
use Illuminate\Http\Request;
use DB;

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

        $student = Student::where('user_id', '=', $user['id'])
            ->select('course_id', 'id')
            ->first();

        $data = $this->getDisciplines($student['id'], $student['course_id']);
        $disciplines = $data['disciplines'];
        $achieved_disicplines = $data['achieved_disicplines'];

        return view('records.index', compact('disciplines'), compact('achieved_disicplines'));
    }

    public function getDisciplines($student_id, $course_id){

        $disciplines = Course::where('courses.id', '=', $course_id)
            ->join('course_disciplines as cd', 'cd.course_id', '=', 'courses.id')
            ->join('disciplines as d', 'd.id', '=', 'cd.discipline_id')
            ->select('d.name', 'd.id', 'cd.nature')
            ->get();

        $achieved_disicplines = AchievedDiscipline::where('student_id', '=', $student_id)
            ->join('disciplines as d', 'd.id', '=', 'achieved_disciplines.discipline_id')
            ->join('course_disciplines as cd', 'cd.discipline_id', '=', 'd.id')
            ->where('cd.course_id', '=', $course_id)
            ->select('d.id', 'd.name', 'cd.nature')
            ->get();

        $achieved_disicplines = $achieved_disicplines->groupBy('nature');
//dd($achieved_disicplines);
        $disciplines = $disciplines->groupBy('nature');
        $disciplines = $disciplines->filter(function (&$item){
            $keys = $item->pluck('id');
            $names = $item->pluck('name');
            return $item = $keys->combine($names);
        });

        return ['disciplines' => $disciplines,
            'achieved_disicplines' => $achieved_disicplines];

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
        $disciplines = $request->input('selected');

        DB::beginTransaction();
        $user = Auth::user();

        $student = Student::where('user_id', '=', $user['id'])
            ->select('id', 'course_id')
            ->first();

        foreach ($disciplines as $discipline){
            $create = AchievedDiscipline::create(['student_id' => $student['id'],
                'discipline_id' => $discipline]);

            if (!$create){
                DB::rollback();
                return 'error';
            }
        }

        DB::commit();

        $data = $this->getDisciplines($student['id'], $student['course_id']);
        $disciplines = $data['disciplines'];
        $achieved_disicplines = $data['achieved_disicplines'];

        return view('records.index', compact('disciplines'), compact('achieved_disicplines'));
       }
}
