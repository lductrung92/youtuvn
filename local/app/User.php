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
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'rid', 'name', 'password', 'email' , 'avatar' , 'phone' , 'address', 'remember_token',
    ];

    public function youtubes () {
        return $this->hasMany('App\Youtube', 'uid', 'id');
    }

    public function role () {
        return $this->belongsTo('App\Role', 'uid', 'id');
    }
}
