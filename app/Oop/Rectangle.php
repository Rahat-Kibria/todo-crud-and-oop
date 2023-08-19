<?php

namespace App\Oop;

class Rectangle extends GeometricShape
{
    protected $width;
    protected $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }
    public function calculateArea(): float
    {
        $this->area = $this->width * $this->height;
        return $this->area;
    }
}
