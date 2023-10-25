<?php declare(strict_types= 1);

namespace App\Fibonacci;


//use App\Prime\PrimeNumber;

class Fibonacci
{
    public function __construct(){}

    public static function getFibonacciNumber(int $nthFibonacciNumber): int
    {
        if ($nthFibonacciNumber <= 1) {
            return $nthFibonacciNumber;
        }
        else {
            return Fibonacci::getFibonacciNumber($nthFibonacciNumber - 1) + Fibonacci::getFibonacciNumber($nthFibonacciNumber - 2);
        }
      
    }

    public static function getListOfFibonacciNumbers(int $firstNthFibonacciNumbers): array
    {
        $listOfFibonacciNumbers = [];

        for($i = 0; $i < $firstNthFibonacciNumbers; $i++)
        {
            $listOfFibonacciNumbers += Fibonacci::getFibonacciNumber($i);
        }
        
        return $listOfFibonacciNumbers;
    }

}
