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
    public function index()
    {
        //print_r('index');die;

        return view('suggestion.index');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int $role_id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        $user = Auth::user();

        $disciplines_qtd = $request->input('disciplines_qtd');

        $student = Student::where('user_id', '=', $user['id'])
            ->select('course_id', 'id')
            ->first();

        $suggestion = $this->makeSuggestion($student['id'], $student['course_id']);
        dd($suggestion);

        DB::commit();

//        return view('records.index', compact('disciplines'), compact('achieved_disicplines'));
    }


    public function makeSuggestion($student_id, $course_id, $disciplines_qtd = 2)
    {

        $achieved_disciplines = AchievedDiscipline::where('student_id', '=', $student_id)
            ->join('disciplines as d', 'd.id', '=', 'achieved_disciplines.discipline_id')
            ->join('course_disciplines as cd', 'cd.discipline_id', '=', 'd.id')
            ->where('cd.course_id', '=', $course_id)
            ->select('d.id')
            ->get();

        $disciplinas_oferecidas = DisciplineClassOffer::join('discipline_classes as dc',
            'dc.id', '=', 'discipline_class_offers.discipline_class_id')
            ->join('schedules as s', 's.discipline_class_id', '=', 'dc.id')
            ->join('disciplines as d', 'd.id', '=', 'dc.discipline_id')
            ->leftJoin('pre_requisites as pr', function ($query) use ($achieved_disciplines) {
                $query->on('pr.post_discipline_id', '=', 'd.id');
                //->whereIn('pr.pre_discipline_id', $achieved_disciplines->toArray());
            })
            ->whereIn('pr.pre_discipline_id', $achieved_disciplines)
            ->join('course_class_offers as cco', 'cco.discipline_class_offer_id', '=', 'discipline_class_offers.id')
            ->where('cco.course_id', '=', $course_id)
            ->whereNotIn('d.id', $achieved_disciplines)
            ->distinct()
            ->select('d.name', 'd.id', 'd.code', 's.day', 's.start_hour', 's.start_minute',
                's.end_hour', 's.end_minute', 's.class_count', 's.id as schedule_id', 's.discipline_class_id',
                'pr.pre_discipline_id')
            ->orderBy('d.code', 'asc')
            ->get();

//        $disciplinas_oferecidas = $disciplinas_oferecidas->groupBy('discipline_class_id');

        $result = [];

        foreach ($disciplinas_oferecidas as $oferecida) {

            if ($result == []) {
                array_push($result, $oferecida);
            } else if (count($result) < $disciplines_qtd){
                if ($this->compareDayHourMinute($result, $oferecida)) {
                    array_push($result, $oferecida);
                }
            }
        };

        dd($result);
//            "s"."start_hour", "s"."start_minute", "s"."end_hour", "s"."end_minute"'))

       // echo($disciplinas_oferecidas);
    }

    public function compareDayHourMinute($array, $item)
    {
        foreach ($array as $value) {
          //  foreach ($disc as $value) {
                //dd($item);
                if ($item['day'] == $value['day']) {
                    if ($item['start_hour'] == $value['start_hour']) {
                        if ($item['start_minute'] == $value['start_minute']) {
                            return false;
                        } else if ($item['start_hour'] == $value['end_hour'] &&
                            ($item['start_minute'] > $value['end_hour'] ||
                                $item['start_minute'] == $value['end_hour'])
                        ) {
                            continue;
                        }
                    } elseif ($item['start_hour'] > $value['start_hour'] &&
                        $item['end_hour'] < $value['end_hour']
                    ) {
                        return false;
                    } else if ($item['start_hour'] == $value['end_hour']) {
                        if ($item['start_minute'] == $value['end_minute']) {
                            continue;
                        } elseif ($item['start_minute'] < $value['end_minute']) {
                            return false;
                        }
                    }
                }
           // }
        }
        return true;
    }
}
