<?php

namespace App\Exceptions;

use Exception;

class UnsupportedMediaType extends Exception
{
    public function render(string $type){
        return response()->json([
            'Supported Media Type' => $type
        ], 415);
    }
}
