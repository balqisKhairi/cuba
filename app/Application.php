<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Job;
use App\User;

class Application extends Model
{
    
    public $table = "applications";

    protected $fillable = [
        'student_id',  'job_id' 
    ];

    protected $guarded=[];

    public function jobs(){
        return $this->belongsTo(Job::class, 'job_id');
    }

    public function users(){
        return $this->belongsTo(User::class, 'student_id');
    }
    

   
}
