<?php

namespace App\Http\Controllers;

use App\Oop\Cat;
use App\Oop\Dog;
use App\Oop\Animal;
use App\Oop\Circle;
use App\Oop\Employee;
use App\Oop\ErrorReport;
use App\Oop\Rectangle;
use App\Oop\SuccessReport;
use Illuminate\Http\Request;

class OopController extends Controller
{
    public function inheritance()
    {
        $rectangle = new Rectangle(150, 100);
        $rectangle_area = $rectangle->calculateArea();

        $circle = new Circle(100);
        $circle_area = $circle->calculateArea();

        return view('inheritance', compact('rectangle_area', 'circle_area'));
    }
    public function interface()
    {
        $error_report = new ErrorReport;
        $error_message = $error_report->report();

        $success_report = new SuccessReport;
        $success_message = $success_report->report();

        return view('interface', compact('error_message', 'success_message'));
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
