<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table ="statuses";

    protected $fillable = [
        "status_name",
        "is_stop_time"
    ];
}
