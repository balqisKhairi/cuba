<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\State;

class Job extends Model
{
    public $table = "jobs";

    protected $fillable = [
        'jobPic', 'jobName', 'jobDesc','jobLocation','jobPay','jobSkill','jobType'
    ];


    //public function states(){
        //return $this->belongsTo(State::class, 'jobLocation');
    //}
}
