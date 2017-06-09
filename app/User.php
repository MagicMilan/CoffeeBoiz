<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username' ,'email', 'password', 'name', 'dob', 'address', 'phone_nr', 'admin',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucfirst($value);
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = [
        'dob'
    ];
}