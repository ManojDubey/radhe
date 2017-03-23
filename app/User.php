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
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * @return array
     */
    public function post(){
        return $this->hasOne('App\Post');
    }


    /**
     * @return array
     */
    public function posts(){
        return $this->hasMany('App\Post');
    }


    public function roles(){
        return $this->belongsToMany('App\Role')->withPivot('created_at');

       // To Customize table name and columns follow the code below
        //return $this->belongsToMany('App\Role','user_roles','user_id','role_id');

    }

    public function photos(){
        return $this->morphMany('App\Photo','imageable');
    }

    public function address(){
        return $this->hasOne('App\Address');
    }



}
