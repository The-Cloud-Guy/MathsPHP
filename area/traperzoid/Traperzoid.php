<?php declare(strict_types= 1);

namespace App\Area\Traperzoid ;

class Traperzoid{
    public function __construct(){	}
    
    public function getTraperzoidArea(float $largeLength, float $smallLentgh, float $width):float
    {
        return (($largeLength * $smallLentgh) / 2) * $width;
    }

    public function getTraperzoidMedian(float $largeLength, float $smallLentgh):float
    {
        return ($largeLength * $smallLentgh) / 2;
    }

    public function getTraperzoidPerimeter(float $firstBase, float $secondBase, float $firstSide, float $secondSide ):float 
    {
        return $firstBase + $secondBase + $firstSide + $secondSide;
    }

}