<?php declare(strict_types= 1);

namespace App\Area\Rectangle ;

class Rectangle{
    public function __construct(){	}
    
    public function getRectangleArea(float $length, float $width):float
    {
        return $length * $width;
    }

    public function getRectangleDiagonalLength(float $length, float $width):float
    {
        return sqrt($length * $width);
    }

    public function getRectanglePerimeter(float $length, float $width):float 
    {
        return 2 * ($length + $width);
    }

}