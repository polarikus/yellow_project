<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'teams';
    protected $fillable = [

            'id',
            'creator_id',
            'name'
    ];
    public function user()
    {
        //return $this->belongsTo('App\Models\Manager');
    }
}
