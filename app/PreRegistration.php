<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PreRegistration extends Model
{
    public function course() {
        return $this->belongsTo('App\Course');
    }

    public function discipline() {
        return $this->belongsTo('App\Discipline');
    }

    public function dayOfWeek() {
        switch ($this->day_of_week) {
            case 'monday':
                return 'Segunda-Feira';
            case 'tuesday':
                return 'Terça-Feira';
            case 'wednesday':
                return 'Quarta-Feira';
            case 'thursday':
                return 'Quinta-Feira';
            case 'friday':
                return 'Sexta-Feira';
            default:
                return '...';
        }
    }
}
