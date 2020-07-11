<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';

    protected $fillable = [
        'team_id', 'task_type_id', 'name', 'status_id', 'before_date', 'solved_at'
    ];
}
