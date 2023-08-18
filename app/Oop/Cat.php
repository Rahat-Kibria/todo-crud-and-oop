<?php

namespace App\Oop;

use App\Oop\Animal;

class Cat extends Animal
{
    public function animalSound(): string
    {
        return "Cat sound: meow";
    }
}
