<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'teams';
    public function user()
    {
        return $this->belongsTo('App\Models\Manager');
    }
}
