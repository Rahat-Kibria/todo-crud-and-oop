<?php

namespace App\Oop;

class GeometricShape
{
    protected $area = 0;
    public function calculateArea(): float
    {
        return $this->area;
    }
}
