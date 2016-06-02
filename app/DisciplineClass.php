<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DisciplineClass extends Model
{
    //

//    public static function addDisciplineClasses($year, $half, $day_of_week, $max_students, array $disciplineClasses) {
//        $teachers = Teacher::all()->toArray();
//        $needsLaboratory = [true, false];
//        foreach($disciplineClasses as $disciplineClass) {
//            DisciplineClass::create([
//                'discipline_id' => $disciplineClass->getAttribute('id'),
//                'teacher_id' => $teachers[array_rand($teachers)]['id'],
//                'year' => $year,
//                'half' => $half,
//                'day_of_week' => $day_of_week,
//                'rooms' => json_encode([]),
//                'max_students' => $max_students,
//                'needs_laboratory' => $needsLaboratory[array_rand($needsLaboratory)],
//                'status' => 'active'
//            ]);
//        }
//    }

    public static function addHistoryToWalter(Student $student) {
        $histories = [
            ['year' => 2012, 'half' => 2, 'disciplines' => [1,5,3]],
            ['year' => 2013, 'half' => 1, 'disciplines' => [6,2,8]],
            ['year' => 2013, 'half' => 2, 'disciplines' => [4,14,23]],
            ['year' => 2014, 'half' => 1, 'disciplines' => [12,9,15]],
            ['year' => 2014, 'half' => 2, 'disciplines' => [11,13,19]],
            ['year' => 2015, 'half' => 1, 'disciplines' => [17,10,7]],
            ['year' => 2015, 'half' => 2, 'disciplines' => [18,25,21]]
            //18,22,16,20,24
        ];

        $teachers = Teacher::all()->toArray();
        $needsLaboratory = [true, false];
        $day_of_week = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday'];

        foreach($histories as $history) {
            foreach($history['disciplines'] as $id) {
                $dc = DisciplineClass::create([
                    'discipline_id' => $id,
                    'teacher_id' => $teachers[array_rand($teachers)]['id'],
                    'year' => $history['year'],
                    'half' => $history['half'],
                    'day_of_week' => $day_of_week[array_rand($day_of_week)],
                    'rooms' => json_encode([]),
                    'max_students' => 40,
                    'needs_laboratory' => $needsLaboratory[array_rand($needsLaboratory)],
                    'status' => 'active'
                ]);

                $ap1 = rand(7.0, 10.0);
                $ap2 = rand(7.0, 10.0);
                $m = ($ap1 + $ap2) / 2;

                StudentClass::create([
                    'discipline_class_id' => $dc->getAttribute('id'),
                    'student_id' => $student->getAttribute('id'),
                    'ap1' => $ap1,
                    'ap2' => $ap2,
                    'm' => $m,
                    'af' => null,
                    'mf' => null
                ]);
            }
        }
    }

    public static function addAllDisciplineClasses() {
        $teachers = Teacher::all()->toArray();
        $disciplineClasses = Discipline::all()->toArray();
        $day_of_week = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday'];
        $needsLaboratory = [true, false];
        foreach($disciplineClasses as $disciplineClass) {
            DisciplineClass::create([
                'discipline_id' => $disciplineClass['id'],
                'teacher_id' => $teachers[array_rand($teachers)]['id'],
                'year' => 2016,
                'half' => 2,
                'day_of_week' => $day_of_week[array_rand($day_of_week)],
                'rooms' => json_encode([]),
                'max_students' => 40,
                'needs_laboratory' => $needsLaboratory[array_rand($needsLaboratory)],
                'status' => 'active'
            ]);
        }
    }
}