<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task_Type extends Model
{
    protected $table = 'task_types';

    protected $fillable = [
        'name', 'description'
    ];
}
