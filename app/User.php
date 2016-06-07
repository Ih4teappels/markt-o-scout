<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        // 'name', 'username', 'email', 'password',
        'name', 'username', 'email', 'residence', 'password', 'image'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function ads() {
        return $this->hasMany('App\Ad');
    }

    public function comments() {
        return $this->hasMany('App\Comment');
    }
}
