<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User_Type extends Model
{
    protected $table = 'user_types';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'name'
    ];
}
