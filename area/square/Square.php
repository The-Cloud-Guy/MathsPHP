<?php declare(strict_types= 1);

namespace App\Area\Square ;

class Square{
    public function __construct(){	}
    
    public function getSquareArea(float $side):float
    {
        return $side * $side;
    }

    public function getSquareDiagonalLength(float $side):float
    {
        return (sqrt(2* $side)) + 2;
    }

    public function getSquareLength(float $side):float 
    {
        return sqrt($side);
    }

    public function getSquarePerimeter(float $side):float 
    {
        return 4 * $side;
    }
}