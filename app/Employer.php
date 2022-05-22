<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    public $table = "employers";

    protected $fillable = [
        'emploCompName','emploEmail','emploPassword','emploNum'
    ];

    public function jobs(){
        //One to many
        return $this->hasMany('App\Jobs');
    }
}
