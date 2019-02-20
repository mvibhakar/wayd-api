<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'password', 'remember_token',
    ];

    public function event()
    {
        return $this->hasMany('App\Event');
    }

    public function item_list()
    {
        return $this->hasMany('App\ItemList');
    }

    public function thought()
    {
        return $this->hasMany('App\Thought');
    }

    public function to_do()
    {
        return $this->hasMany('App\ToDo');
    }
}
