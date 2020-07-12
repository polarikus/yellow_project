<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Task extends Model
{
    protected $table = 'tasks';

    protected $fillable = [
        'team_id', 'task_type_id', 'name', 'status_id', 'before_date', 'solved_at'
    ];

    public function getAllTasks(array $param = [])
    {
        $resp = DB::table('all_tasks')->orderBy('task_id')->paginate(5);
        if (!$resp) {
            throw new NotFoundException();
        }
        return $resp;
    }

}
