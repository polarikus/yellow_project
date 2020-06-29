<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task_User_User_Type extends Model
{
    protected $table =  'Task_User_User_Type';
    protected $fillable = [

        'task_id',
        'user_id',
        'user_type_id'

    ];
}
