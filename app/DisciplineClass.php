<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DisciplineClass extends Model
{
    //

    public static function addDisciplineClasses($year, $half, $day_of_week, $max_students, array $disciplineClasses) {
        $teachers = Teacher::all()->toArray();
        $needsLaboratory = [true, false];
        foreach($disciplineClasses as $disciplineClass) {
            DisciplineClass::create([
                'discipline_id' => $disciplineClass->getAttribute('id'),
                'teacher_id' => $teachers[array_rand($teachers)]['id'],
                'year' => $year,
                'half' => $half,
                'day_of_week' => $day_of_week,
                'rooms' => json_encode([]),
                'max_students' => $max_students,
                'needs_laboratory' => $needsLaboratory[array_rand($needsLaboratory)],
                'status' => 'active'
            ]);
        }
    }
}