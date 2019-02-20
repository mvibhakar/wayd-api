<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['date', 'start_time', 'end_time', 'title'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
