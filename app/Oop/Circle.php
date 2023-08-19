<?php

namespace App\Oop;

class Circle extends GeometricShape
{
    protected $radius;
    protected $pi = 3.1416;
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    public function calculateArea(): float
    {
        $this->area = $this->pi * $this->radius * $this->radius;
        return $this->area;
    }
}
