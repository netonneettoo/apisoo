<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //

    public function addDisciplines(array $disciplines) {
        foreach($disciplines as $discipline) {
            $this->addDiscipline($discipline);
        }
    }

    private function addDiscipline(Discipline $discipline) {
        return CourseDiscipline::create([
            'course_id' => $this->getAttribute('id'),
            'discipline_id' => $discipline->getAttribute('id')
        ]);
    }
}
