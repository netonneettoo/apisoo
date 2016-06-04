<?php

namespace App\Http\Controllers;

use App\Course;
use App\CourseDiscipline;
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

    public function registration20161($courseId = null)
    {
        $user = Auth::user();
        $student = Student::where('user_id', $user->id)->first();

        $studentCourses = $student->studentCourses;
        $courses = array();
        foreach ($studentCourses as $studentCourse) {
            if ($studentCourse->course->status == 'active') {
                array_push($courses, $studentCourse->course->id);
            }
        }

        if ($courseId == null || !in_array($courseId, $courses)) {
            return view('choose_course', compact('courses'));
        }

        $chosenCourse = Course::find($courseId);

        $coursedDisciplines = array();
        $coursedDisciplinesIds = array();
        foreach($student->studentClasses as $studentClass) {
            if ($studentClass->status == 'completed') {
                if (intval($studentClass->approved)) {
                    if ($studentClass->discipline_class_id) {
                        $disciplineClass = DisciplineClass::find($studentClass->discipline_class_id);
                        array_push($coursedDisciplinesIds, $disciplineClass->discipline_id);
                        array_push($coursedDisciplines, Discipline::find($disciplineClass->discipline_id));
                    }
                }
            }
        }

        $remainderDisciplines = array();
        $remainderDisciplineIds = array();
        foreach (Discipline::all()->where('status', 'active') as $d) {
            if (!in_array($d->id, $coursedDisciplinesIds)) {
                if ($d->courseDisciplines->where('course_id', $chosenCourse->id)->first()) {
                    $requirements = json_decode($d->requirements);

                    $continue = false;
                    foreach($requirements as $requirement) {
                        if (!in_array($requirement, $coursedDisciplinesIds)) {
                            $continue = true;
                        }
                    }

                    if ($continue) {
                        continue;
                    }

                    array_push($remainderDisciplines, $d);
                    array_push($remainderDisciplineIds, $d->id);
                }
            }
        }

//        $offeredClasses = DisciplineClass::all()->where('year', 2016)->where('half', 1)->where('status', 'active');
//        $offeredDisciplines = array();
//        $offeredDisciplineIds = array();
//        foreach($offeredClasses as $offeredClass) {
//            array_push($offeredDisciplineIds, $offeredClass->getAttribute('discipline_id'));
//            array_push($offeredDisciplines, Discipline::find($offeredClass->getAttribute('discipline_id')));
//        }
//
//        $showOfferedDisciplines = array();
//        $showOfferedDisciplineIds = array();
//        $diffIds = array_diff($offeredDisciplineIds, $disciplineIds);
//        foreach($diffIds as $disciplineId) {
//            $discipline = Discipline::find($disciplineId);
//            $requirements = json_decode($discipline->getAttribute('requirements'));
//            $countRequirements = 0;
//            foreach($requirements as $requirement) {
//                if (in_array($requirement, $disciplineIds)) {
//                    $countRequirements++;
//                }
//            }
//            if ($countRequirements != count($requirements)) {
//                continue;
//            }
//            if (CourseDiscipline::all()->where('course_id', $chosenCourse->getAttribute('id'))->where('discipline_id', $disciplineId)->first() != null) {
//                array_push($showOfferedDisciplineIds, $disciplineId);
//                array_push($showOfferedDisciplines, $discipline);
//            }
//        }

//        $disciplineClasses = DisciplineClass::all()->where('year', 2016)->where('half', 1)->where('status', 'active')->whereIn('discipline_id', $showOfferedDisciplineIds);
//        $mondayList = $disciplineClasses->where('day_of_week', 'monday');
//        $tuesdayList = $disciplineClasses->where('day_of_week', 'tuesday');
//        $wednesdayList = $disciplineClasses->where('day_of_week', 'wednesday');
//        $thursdayList = $disciplineClasses->where('day_of_week', 'thursday');
//        $fridayList = $disciplineClasses->where('day_of_week', 'friday');

//        echo json_encode($disciplineClasses);
//        echo json_encode($mondayList);
//        exit;

        return view('registration20161', compact('chosenCourse', 'remainderDisciplines'));
    }
}
