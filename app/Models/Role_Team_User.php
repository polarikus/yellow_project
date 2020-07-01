<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role_Team_User extends Model
{
    protected $table = 'role_team_user';
    public $timestamps = false;
    protected $fillable = [

        'role_id',
        'team_id',
        'user_id'
    ];

}
