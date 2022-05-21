<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    //follow table name in db
    public $table = "student_timetables";

    //isi dalam db
    protected $fillable = [
        'student_id','subject_id','day_id','hall_id','time_from','time_to'
    ];
}
