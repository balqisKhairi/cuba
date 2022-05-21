<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
 
class Admin extends Authenticatable

//class Admin extends Model
{
    //public $admin = "admins";

    use Notifiable;
    protected $guard = "admin";

    protected $fillable = [
        'adminEmail', 'adminPassword'
    ];

    protected $hidden = [
        'adminPassword', 'remember_token',
    ];
}
