<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\State;

class Job extends Model
{
    protected $guarded =[];
    public $table = "jobs";

    /**protected $fillable = [
        'jobPic', 'jobName', 'jobDesc','jobLocation','jobPay','skillId','jobType'
    ];**/


    public function employer(){
        //One to many(inverse)
        return $this->belongsTo('App\Employer');
    }
}
