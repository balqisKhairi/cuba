<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public $table = "states";

    protected $fillable = [
        'stateName'
    ];
}
