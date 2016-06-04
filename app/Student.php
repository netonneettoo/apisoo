<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function studentClasses() {
        return $this->hasMany('App\StudentClass');
    }

    public function user() {
        return $this->belongsTo('App\User')->first();
    }

    public function studentCourses() {
        return $this->hasMany('App\StudentCourse');
    }

    public function addCourse(Course $course) {
        return StudentCourse::create([
            'student_id' => $this->getAttribute('id'),
            'course_id' => $course->getAttribute('id'),
        ]);
    }

    public function addStudentClasses(array $disciplineClasses) {
        foreach ($disciplineClasses as $disciplineClass) {
            $ap1 = rand(7.0, 10.0);
            $ap2 = rand(7.0, 10.0);
            $m = ($ap1 + $ap2) / 2;
            if ($this->getAttribute('registration') == 2012207180 || $this->getAttribute('registration') == 2012215117) {
                $ap1 = $disciplineClass->getAttribute('discipline_id') == 18 ? 4.0 : rand(7.0, 10.0);
                $ap2 = $disciplineClass->getAttribute('discipline_id') == 18 ? 2.0 : rand(7.0, 10.0);
                $m = ($ap1 + $ap2) / 2;
            }
            StudentClass::create([
                'discipline_class_id' => $disciplineClass->getAttribute('id'),
                'student_id' => $this->getAttribute('id'),
                'ap1' => $ap1,
                'ap2' => $ap2,
                'm' => $m,
                'af' => null,
                'mf' => null,
                'approved' => $m >= 7.0,
                'status' => 'completed'
            ]);
        }
    }
}
