<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Studdent extends Model
{
   // public $table = "studdents";

    //protected $fillable = [
        //'studName','studIC','studGender', 'studNum','studAddress','studEmail','studPassword','certificateId','studStatus'
    //];

    use Notifiable;

    protected $guarded =[];
    public $table = "studdents";

    public function certificates(){
      //One to many
      return $this->hasMany('App\Certificates');
  }
}
