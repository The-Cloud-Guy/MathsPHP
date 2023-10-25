<?php declare(strict_types= 1);

namespace App\Divisible;

class DivisibleByNine
{
    public function __construct(){}

    public function isDivisibleByNine(string $numberAsString): bool
    {
      
      // Compute sum of digits 
      $sizeOfTheString = strlen($numberAsString); 
      $digitsSum = 0; 
      for ($i = 0; $i < $sizeOfTheString; $i++) 
          $digitsSum += ($numberAsString[$i] - '0'); 
    
      // Check if sum of digits 
      // is divisible by 9. 
      return ($digitsSum % 9 == 0); 
      
    }

}