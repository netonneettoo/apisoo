<?php

namespace App\Http\Controllers;

use App\Discipline;
use App\DisciplineClass;
use App\Http\Requests;
use App\Student;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function registration20161()
    {
        $user = Auth::user();
        $student = Student::find($user->getAttribute('id'));

        $disciplineIds = array();
        $disciplines = array();
        foreach($student->studentClasses as $studentClass) {
            if ($studentClass->getAttribute('status') == 'completed') {
                if (intval($studentClass->getAttribute('approved'))) {
                    if ($studentClass->getAttribute('discipline_class_id')) {
                        $disciplineClass = DisciplineClass::find($studentClass->getAttribute('discipline_class_id'));
                        array_push($disciplineIds, $disciplineClass->getAttribute('discipline_id'));
                        array_push($disciplines, Discipline::find($disciplineClass->getAttribute('discipline_id')));
                    }
                }
            }
        }

        $offeredClasses = DisciplineClass::all()->where('year', 2016)->where('half', 1)->where('status', 'active');
        $offeredDisciplines = array();
        $offeredDisciplineIds = array();
        foreach($offeredClasses as $offeredClass) {
            array_push($offeredDisciplineIds, $offeredClass->getAttribute('discipline_id'));
            array_push($offeredDisciplines, Discipline::find($offeredClass->getAttribute('discipline_id')));
        }

        $showOfferedDisciplines = array();
        $showOfferedDisciplineIds = array();
        $diffIds = array_diff($offeredDisciplineIds, $disciplineIds);
        foreach($diffIds as $disciplineId) {
            $discipline = Discipline::find($disciplineId);
            $requirements = json_decode($discipline->getAttribute('requirements'));
            $countRequirements = 0;
            foreach($requirements as $requirement) {
                if (in_array($requirement, $disciplineIds)) {
                    $countRequirements++;
                }
            }
            if ($countRequirements != count($requirements)) {
                continue;
            }
            array_push($showOfferedDisciplineIds, $disciplineId);
            array_push($showOfferedDisciplines, $discipline);
        }

        $disciplineClasses = DisciplineClass::all()->where('year', 2016)->where('half', 1)->where('status', 'active')->whereIn('discipline_id', $showOfferedDisciplineIds);
        $mondayList = $disciplineClasses->where('day_of_week', 'monday');
        $tuesdayList = $disciplineClasses->where('day_of_week', 'tuesday');
        $wednesdayList = $disciplineClasses->where('day_of_week', 'wednesday');
        $thursdayList = $disciplineClasses->where('day_of_week', 'thursday');
        $fridayList = $disciplineClasses->where('day_of_week', 'friday');

//        echo json_encode($disciplineClasses);
//        echo json_encode($mondayList);
//        exit;

        return view('registration20161', compact('mondayList', 'tuesdayList', 'wednesdayList', 'thursdayList', 'fridayList'));
    }
}
