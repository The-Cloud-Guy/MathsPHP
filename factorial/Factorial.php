<?php declare(strict_types= 1);

namespace App\Factorial;

class Factorial
{
    public function __construct(){}

    public static function getFactorialNumber(int $number): int
    {
      if ($number == 0) 
        return 1; 
      return $number * Factorial::getFactorialNumber($number - 1); 
      
    }

}