<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentClass extends Model
{
    public function student() {
        return $this->belongsTo('App\Student')->first();
    }

    public function disciplineClass() {
        return $this->belongsTo('App\DisciplineClass');
    }
}
