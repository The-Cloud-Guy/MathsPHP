<?php declare(strict_types= 1);

namespace App\CommonDivisor;

class GCD
{
    public function __construct(){}

    public static function getGCD(int $firstNumber, int $secondNumber): int
    {
      // Everything divides 0  
      if ($firstNumber == 0) 
        return $secondNumber ;  
      if ($secondNumber   == 0) 
        return $firstNumber; 
  
      // Base case 
      if($firstNumber == $secondNumber )  
          return $firstNumber ; 
        
      // a is greater 
      if($firstNumber > $secondNumber )  
          return GCD::getGCD( $firstNumber-$secondNumber, $secondNumber ) ; 
     
      return GCD::getGCD( $firstNumber , $secondNumber - $firstNumber ) ; 
      
    }

}