<?php

namespace App\Http\Controllers;

use App\Oop\Cat;
use App\Oop\Dog;
use App\Oop\Animal;
use App\Oop\Employee;
use Illuminate\Http\Request;

class OopController extends Controller
{
    public function inheritance()
    {
        return view('inheritance');
    }
    public function interface()
    {
        return view('interface');
    }
    public function encapsulation()
    {
        $employee = new Employee;
        $set_salary = $employee->setSalary(25000);
        $get_salary = $employee->getSalary();
        return view('encapsulation', compact('get_salary'));
    }
    public function polymorphism()
    {
        $animal = new Animal();
        $animal_sound = $animal->animalSound();

        $dog = new Dog();
        $dog_sound = $dog->animalSound();

        $cat = new Cat();
        $cat_sound = $cat->animalSound();

        return view('polymorphism', compact('animal_sound', 'dog_sound', 'cat_sound'));
    }
}
