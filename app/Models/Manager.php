<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    public function users()
    {
        return $this->hasOne('App\Models\Team');
    }

}
