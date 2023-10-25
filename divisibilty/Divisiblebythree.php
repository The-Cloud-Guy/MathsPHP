<?php declare(strict_types= 1);

namespace App\Divisible;

class DivisibleByThree
{
    public function __construct(){}

    public function isDivisibleByThree(string $numberAsString): bool
    {
      $sizeOfTheString = strlen($numberAsString); 

      // Empty string 
      if ($sizeOfTheString == 0) 
          return false; 

      $digitsSum = 0; 
      for ($i = 0; $i < $sizeOfTheString; $i++) 
          $digitsSum += ($numberAsString[$i] - '0'); 
    
      // Check if sum of digits 
      // is divisible by 3. 
      return ($digitsSum % 3 == 0); 
      
    }

}