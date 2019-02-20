<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thought extends Model
{
    protected $fillable = ['date', 'content'];

    public function user()
    {
        return $this->belongsTo('App\User', 'foreign_key');
    }
}
