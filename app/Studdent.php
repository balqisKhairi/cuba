<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Studdent extends Model
{
   // public $table = "studdents";

    //protected $fillable = [
        //'studName','studIC','studGender', 'studNum','studAddress','studEmail','studPassword','certificateId','studStatus'
    //];

    protected $guarded =[];
    public $table = "studdents";

    public function certificates(){
      //One to many
      return $this->hasMany('App\Certificates');
  }
}
