<?php

namespace App\Oop;

use App\Oop\Logging;

class SuccessReport implements Logging
{
    public function report(): string
    {
        return "Getting success report";
    }
}
