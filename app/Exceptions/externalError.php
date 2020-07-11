<?php

namespace App\Exceptions;

use Exception;

class externalError extends Exception
{
    public function render(){
        return response()->json(['error' => 'Internal Server Error'], 500);
    }
}
