<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "users";

    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
    {
        return $this->belongsToMany('App\Models\Role', 'role_team_user', 'user_id', 'role_id');
    }

    public function teams()
    {
        return $this->belongsToMany('App\Models\Team', 'role_team_user', 'user_id', 'team_id');
    }

}
