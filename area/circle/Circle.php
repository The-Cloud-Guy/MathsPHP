<?php declare(strict_types= 1);

namespace App\Area\Circle;

class Circle{
    public function __construct(){	}
    
    public function getCircleArea(float $radius): float
    {
        return pi() * ($radius * $radius);
    }

    public function getCircleCircumference(float $radius): float
    {
        return 2 * pi() * $radius;
    }

    public function getCircleRadius(float $number): float 
    {
        $circumference = 2 * pi() * $number;

        return $circumference / (2 * pi());
    }

}