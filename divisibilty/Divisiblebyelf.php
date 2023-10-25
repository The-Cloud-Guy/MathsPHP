<?php declare(strict_types= 1);

namespace App\Divisible;

class DivisibleByElf
{
    public function __construct(){}

    public function isDivisibleByElf(string $numberAsString): bool
    {
      
      $sizeOfTheString = strlen($numberAsString);
  
      // Compute sum of even 
      // and odd digit sums
      $oddDigitsSum = 0; $evenDigitsSum = 0;
      for ($i = 0; $i < $sizeOfTheString; $i++)
      {
           
          // When i is even, position
          // of digit is odd
          if ($i % 2 == 0)
              $oddDigitsSum += ($numberAsString[$i] - '0');
          else
              $evenDigitsSum += ($numberAsString[$i] - '0');
      }
   
      // Check its difference 
      // is divisible by 11 or not
      return (($oddDigitsSum - $evenDigitsSum) % 11 == 0); 
      
    }

}