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
   public function users(){
       return $this->belongsToMany('App\User', 'role_team_user', 'role_id', 'user_id');
   }
}


