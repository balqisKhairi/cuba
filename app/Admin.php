<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//class Admin extends Authenticatable

class Admin extends Model
{
    //public $admin = "admins";

    protected $guarded =[];
    public $table = "admins";

    //protected $fillable = [
        //'adminName','adminEmail', 'adminPassword'
    //];

    protected $hidden = [
        'adminPassword', 'remember_token',
    ];
}
