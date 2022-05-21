<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    public $table = "employers";

    protected $fillable = [
        'emploCompName','emploEmail','emploPassword','emploNum'
    ];
}
