<?php

namespace App\Oop;

use App\Oop\Animal;

class Dog extends Animal
{
    public function animalSound(): string
    {
        return "Dog sound: wuf wuf";
    }
}
