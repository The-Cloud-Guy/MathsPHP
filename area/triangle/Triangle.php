<?php declare(strict_types= 1);

namespace App\Area\Triangle ;

class Triangle{
    public function __construct(){	}
    
    public function getTriangleArea(float $base, float $height): float
    {
        return ($base * $height) / 2;
    }

    public function getTrianglePerimeter(float $leftSide, float $rightSide, float $base): float
    {
        return $leftSide + $rightSide + $base;
    }

    public function getEquilateralTriangleArea(float $side): float 
    {
        return (sqrt(3)/4) * $side * $side;
    }

    public function getEquilateralTriangleHeight(float $side): float
    {
        return 0.5 * sqrt(3) * $side;
    }

}