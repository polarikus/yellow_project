<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'role_team_user', 'role_id', 'user_id');
    }
    public function team()
    {
        return $this->belongsTo('App\Models\User', 'role_team_user', 'role_id', 'team_id');
    }
}
