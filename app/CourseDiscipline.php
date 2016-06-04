<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseDiscipline extends Model
{
    public function discipline() {
        return $this->belongsTo('App\Discipline');
    }
}
