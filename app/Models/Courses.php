<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    public function trainor(){
        return $this->belongsTo('App\Trainors');
    }

    public function trainees(){
        return $this->hasMany('App\Trainees');
    }
}
