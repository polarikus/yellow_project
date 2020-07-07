<?php

namespace App\Exceptions;

use Exception;
use Throwable;

class NotFoundException extends Exception
{

    public function render()
    {
        return response('', 204);
    }
}
