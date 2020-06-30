<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    protected $table = 'attachments';
    protected $fillable = [

        'id',
        'task_id',
        'path',
        'file_extension'
    ];
}
