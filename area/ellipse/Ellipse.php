<?php declare(strict_types= 1);

namespace App\Area\Ellipse ;

class Ellipse{
    public function __construct(){	}
    
    public function getEllipseArea(float $majorRadius, float $minorRadius):float
    {
        return pi() * $majorRadius * $minorRadius;
    }


}