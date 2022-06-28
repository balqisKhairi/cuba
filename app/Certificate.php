<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;

class Certificate extends Model
{
    
    //protected $table = "certificates";
   // protected $guarded =[];
  

    protected $fillable = [
        'certiType'
    ];

    public function users(){
        return $this->belongsToMany(User::class)->withTimestamps();
    }

}
