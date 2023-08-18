<?php

namespace App\Oop;

use App\Oop\Logging;

class ErrorReport implements Logging
{
    public function report(): string
    {
        return "Getting error report";
    }
}
