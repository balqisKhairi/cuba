<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Studdent extends Model
{
   // public $table = "studdents";

    //protected $fillable = [
        //'studName','studIC','studGender', 'studNum','studAddress','studEmail','studPassword','certificateId','studStatus'
    //];

    protected $guarded =[];

    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
