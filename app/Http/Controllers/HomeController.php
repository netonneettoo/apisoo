<?php

namespace App\Http\Controllers;

use App\Course;
use App\CourseDiscipline;
use App\Discipline;
use App\DisciplineClass;
use App\Http\Requests;
use App\PreRegistration;
use App\Student;
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

        $preRegistrationFromUser = PreRegistration::where('student_id', $student->id)
            ->where('year', 2016)
            ->where('half', 1)
            ->where('status', 'pending')
            ->get();
        if (count($preRegistrationFromUser) > 0) {
            return view('registration20161_only_view', compact('chosenCourse', 'preRegistrationFromUser'));
        }

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

//        echo json_encode($disciplineClasses);
//        echo json_encode($mondayList);
//        exit;

        return view('registration20161', compact('chosenCourse', 'remainderDisciplines'));
    }

    public function postRegistration20161(Request $request) {
        try {
            DB::beginTransaction();
            $return = ['code' => 200, 'message' => 'Sua pré-matrícula será analisada pela nossa equipe e em breve entraremos em contato. Obrigado!', 'data' => []];
            $dayOfWeeks = ['monday','tuesday','wednesday','thursday','friday'];
            foreach($dayOfWeeks as $day) {
                if ($request->{$day} == "") {
                    continue;
                }
                $pr = new PreRegistration();
                $pr->course_id = intval($request->course_id);
                $pr->student_id = $request->user()->student->id;
                $pr->discipline_id = intval($request->{$day});
                $pr->year = 2016;
                $pr->half = 1;
                $pr->day_of_week = $day;
                $pr->status = 'pending';
                if (!$pr->save()) {
                    throw new \Exception('Ocorreu um erro ao realizar sua pré-matrícula. Tente novamente!', 422);
                } else {
                    $return['data'][$day] = $pr;
                }

            }
            DB::commit();
            return $return;
        } catch (\Exception $e) {
            DB::rollback();
            return [
                'code' => $e->getCode(),
                'message' => $e->getMessage()
            ];
        }

    }
}
