<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

use App\User;
use App\Skill;

class Job extends Model
{

    use Notifiable;

   //public function getRouteKeyName(){
       // return'slug';
    //} 

    //protected $table = "jobs";
    protected $guarded =[];
    
   

    /**protected $fillable = [
        'jobPic', 'jobName', 'jobDesc','jobLocation','jobPay','skillId','jobType','jobStatus','slug'
    ]; **/


    public function employer(){
        //One to many(inverse)
        return $this->belongsTo('App\Employer');
    }

    public function skill(){
        //One to many(inverse)
        return $this->belongsTo('App\Skill');
    }

    public function users(){
        return $this->belongsToMany(User::class)->withTimestamps();
    }

    public function checkApplication(){
        return \DB::table('job_user')->where('user_id',auth()->user()->id)
        ->where('job_id',$this->id)->exists();
    }
}
