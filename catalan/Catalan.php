<?php declare(strict_types= 1);

namespace App\Catalan;

class Catalan
{
    public function __construct(){}

    public static function getCatalanNumber(int $nthCatalanNumber): int
    {
         
      if ($nthCatalanNumber <= 1)
          return 1;

      $result = 0;
      for($i = 0; $i < $nthCatalanNumber; $i++)
          $result += Catalan::getCatalanNumber($i) * Catalan::getCatalanNumber($nthCatalanNumber - $i - 1);
   
      return $result;
    }

    public static function getListOfCatalanNumbers(int $firstNthCatalanNumbers): array
    {
        $listOfCatalanNumbers = [];

        for($i = 0; $i < $firstNthCatalanNumbers; $i++)
        {
            $listOfCatalanNumbers += Catalan::getCatalanNumber($i);
        }
        
        return $listOfCatalanNumbers ;
    }
}