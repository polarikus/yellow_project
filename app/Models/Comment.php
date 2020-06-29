<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    protected $fillable = [

        'id',
        'task_id',
        'user_id',
        'text'
    ];

    public function comments()
    {
        
    }
}
