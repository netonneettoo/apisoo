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

    public static function addHistoryWalter() {
        $datas = [
            [
                'year' => 2012,
                'half' => 2,
                'disciplines' => [41, 45, 43],
            ],
            [
                'year' => 2013,
                'half' => 1,
                'disciplines' => [46, 42, 47],
            ],
            [
                'year' => 2013,
                'half' => 2,
                'disciplines' => [44, 53, 62],
            ],
            [
                'year' => 2014,
                'half' => 1,
                'disciplines' => [51, 48, 54],
            ],
            [
                'year' => 2014,
                'half' => 2,
                'disciplines' => [50, 52, 58],
            ],
            [
                'year' => 2015,
                'half' => 1,
                'disciplines' => [56, 49, 8],
            ],
            [
                'year' => 2015,
                'half' => 2,
                'disciplines' => [57, 64, 60],
            ]
        ];

        $teachers = Teacher::all()->toArray();
        $needsLaboratory = [true, false];
        $day_of_week = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday'];

        foreach($datas as $data) {
            foreach($data['disciplines'] as $id) {
                $dc = DisciplineClass::create([
                    'discipline_id' => $id,
                    'teacher_id' => $teachers[array_rand($teachers)]['id'],
                    'year' => $data['year'],
                    'half' => $data['half'],
                    'day_of_week' => $day_of_week[array_rand($day_of_week)],
                    'rooms' => json_encode([]),
                    'max_students' => 40,
                    'needs_laboratory' => $needsLaboratory[array_rand($needsLaboratory)],
                    'status' => 'active'
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