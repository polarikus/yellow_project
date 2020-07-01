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
    public function users()
    {
        return $this->belongsToMany('App\User', 'role_team_user', 'team_id', 'user_id');
    }

    public function roles()
    {
        return $this->belongsToMany('App\Models\Role', 'role_team_user', 'team_id', 'role_id');
    }
}
