<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function addCourse(Course $course) {
        return StudentCourse::create([
            'user_id' => $this->getAttribute('id'),
            'course_id' => $course->getAttribute('id'),
        ]);
    }
}
