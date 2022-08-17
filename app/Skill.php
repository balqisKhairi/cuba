<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Job;
use App\User;

class Skill extends Model
{

    protected $guarded =[];

    public function job(){
        //One to one
        return $this->belongsTo('App\Job');
    }

    public function users(){
        return $this->belongsToMany(User::class)->withTimestamps();
    }

}
