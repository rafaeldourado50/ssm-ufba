<?php

namespace App\Http\Controllers;

use App\AchievedDiscipline;
use App\DisciplineClassOffer;
use App\Student;
use Illuminate\Http\Request;
use DB;

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
    {
        DB::beginTransaction();
        $user = Auth::user();

        $student = Student::where('user_id', '=', $user['id'])
            ->select('course_id', 'id')
            ->first();

        $suggestion = $this->makeSuggestion($student['id'], $student['course_id']);
dd($suggestion);

        DB::commit();

//        return view('records.index', compact('disciplines'), compact('achieved_disicplines'));
    }


    public function makeSuggestion($student_id, $course_id){

        $achieved_disicplines = AchievedDiscipline::where('student_id', '=', $student_id)
            ->join('disciplines as d', 'd.id', '=', 'achieved_disciplines.discipline_id')
            ->join('course_disciplines as cd', 'cd.discipline_id', '=', 'd.id')
            ->where('cd.course_id', '=', $course_id)
            ->select('d.id')
            ->get();

        $disciplinas_oferecidas =  DisciplineClassOffer::join('discipline_classes',
            'discipline_classes.id', '=', 'discipline_class_offers.discipline_class_id')
            ->join('disciplines as d', 'd.id', '=', 'discipline_classes.discipline_id')
            ->join('course_disciplines as cd', 'cd.discipline_id', '=', 'd.id')
            ->where('cd.course_id', '=', $course_id)
            ->whereNotIn('d.id', $achieved_disicplines)
            ->distinct()
            ->select('d.name', 'd.id', 'd.code')
            ->get();
        dd($disciplinas_oferecidas);
    }
}
