<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phone',
        'username',
        'password',
        'address',
        'id_card',
        'role_id'
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }

    public function getFirstNameAttribute($value){
        return ucfirst($value);
    }

    public function getLastnameAttribute($value){
        return ucfirst($value);
    }


}
