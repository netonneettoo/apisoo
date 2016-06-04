<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discipline extends Model
{
    public function disciplineClasses() {
        return $this->hasMany('App\DisciplineClass');
    }

    public function courseDisciplines() {
        return $this->hasMany('App\CourseDiscipline');
    }
}
