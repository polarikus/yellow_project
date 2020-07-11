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
        return $this->belongsTo('App\User','team_id', 'id', 'role_team_user');
    }
    public function role()
    {
        return $this->belongsTo('App\Models\Role','role_team_user', 'team_id', 'role_id');
    }
    public function creator()
    {
        return $this->hasMany('App\Models\User', 'creator_id', 'id');
    }


}


