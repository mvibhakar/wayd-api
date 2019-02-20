<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemList extends Model
{
    protected $fillable = ['date', 'title', 'checked'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
