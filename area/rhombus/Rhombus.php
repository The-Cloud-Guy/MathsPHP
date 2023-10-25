<?php declare(strict_types= 1);

namespace App\Area\Rhombus ;

class Rhombus{
    public function __construct(){	}
    
    public function getRhombusArea(float $base, float $height):float
    {
        return $base * $height;
    }

    public function getRhombusPerimeter(float $base, float $height):float
    {
        return 2 * ($base + $height);
    }

}