<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;


class Job extends Model
{

   // public function getRouteKeyName(){
       // return'';
    //} 

    //protected $table = "jobs";
    protected $guarded =[];
    

    protected $fillable = [
        'jobPic', 'jobName', 'jobDesc','jobLocation','jobPay','skillId','jobType','jobStatus'
    ];


    public function employer(){
        //One to many(inverse)
        return $this->belongsTo('App\Employer');
    }

    public function users(){
        return $this->belongsToMany(User::class)->withTimestamps();
    }

    public function checkApplication(){
        return \DB::table('job_user')->where('user_id',auth()->user()->id)
        ->where('job_id',$this->id)->exists();
    }
}
