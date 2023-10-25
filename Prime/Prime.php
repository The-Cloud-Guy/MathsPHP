<?php declare(strict_types= 1);

namespace App\Prime;

class Prime
{
    public function __construct(){}

    public static function isPrimeNumber(int $number): bool
    {
      $number = abs($number);
      // Corner case
      if ($number <= 1)
          return false;
   
      // Check from 2 to n-1
      for ($i = 2; $i < $number; $i++)
          if ($number % $i == 0)
              return false;
   
      return true;
    }

    public static function getListOfPrimeNumbers(int $firstNthPrimeNumbers): array
    {
        $listOfPrimeNumbers = [];

        for($i = 0; $i < $firstNthPrimeNumbers; $i++)
        {
            if(Prime::isPrimeNumber($i)){
                $listOfPrimeNumbers += $i;
            }
        }
        
        return $listOfPrimeNumbers;
    }
}