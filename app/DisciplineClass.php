<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DisciplineClass extends Model
{
    public function discipline() {
        return $this->belongsTo('App\Discipline');
    }

    public function teacher() {
        return $this->belongsTo('App\Teacher');
    }

    public static function addDisciplineClass($year, $half, $day_of_week, $needsLaboratory, Discipline $discipline, Teacher $teacher) {
        return DisciplineClass::create([
            'discipline_id' => $discipline->getAttribute('id'),
            'teacher_id' => $teacher->getAttribute('id'),
            'year' => $year,
            'half' => $half,
            'day_of_week' => $day_of_week,
            'rooms' => json_encode([]),
            'max_students' => 40,
            'needs_laboratory' => $needsLaboratory,
            'status' => 'active'
        ]);
    }

    public static function addAllDisciplineClasses() {
        $teachers = Teacher::all()->toArray();
        $disciplineClasses = Discipline::all()->shuffle()->toArray();
        $day_of_week = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday'];
        $needsLaboratory = [true, false];
        foreach($disciplineClasses as $disciplineClass) {
            DisciplineClass::create([
                'discipline_id' => $disciplineClass['id'],
                'teacher_id' => $teachers[array_rand($teachers)]['id'],
                'year' => 2016,
                'half' => 1,
                'day_of_week' => $day_of_week[array_rand($day_of_week)],
                'rooms' => json_encode([]),
                'max_students' => 40,
                'needs_laboratory' => $needsLaboratory[array_rand($needsLaboratory)],
                'status' => 'active'
            ]);
        }
    }
}