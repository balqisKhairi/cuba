<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Job;

class Skill extends Model
{
    public function job(){
        //One to one
        return $this->belongsTo('App\Job');
    }

}
