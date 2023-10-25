<?php declare(strict_types= 1);

namespace App\CommonDivisor;
 

class LCM
{
    public function __construct(){}
    
    public static function getLCM(int $firstNumber, int $secondNumber): int
    {
        $gcd = new GCD();
        return ($firstNumber / $gcd->getGCD($firstNumber, $secondNumber)) * $secondNumber; 
    }

}