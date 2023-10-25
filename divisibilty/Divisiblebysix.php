<?php declare(strict_types= 1);

namespace App\Divisible;

class DivisibleBySix
{
    public function __construct(){}

    public function isDivisibleBySix(string $numberAsString): bool
    {
      
      $sizeOfTheString = strlen($numberAsString); 
  
      // Return false if number is 
      // not divisible by 2. 
      if (($numberAsString[$sizeOfTheString - 1] - '0') % 2 != 0) 
      return false; 
    
      // If we reach here, number  
      // is divisible by 2. 
      // Now check for 3. 
      // Compute sum of digits 
      $digitsSum = 0; 
      for ($i = 0; $i < $sizeOfTheString; $i++) 
          $digitsSum += ($numberAsString[$i] - '0'); 
    
      // Check if sum of digits 
      // is divisible by 3 
      return ($digitsSum % 3 == 0);   
      
    }

}