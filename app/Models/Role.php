<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $timestamps = false;
    protected $table = 'roles';
    protected $fiilable =[
        'id',
        'name'
    ];

    public function users()
    {
        return $this->belongsToMany('App\User', 'role_team_user', 'role_id', 'user_id');
    }

    public function teams(){
        $this->belongsToMany('App\Models\Team', 'role_team_user', 'role_id', 'team_id');
    }
}
