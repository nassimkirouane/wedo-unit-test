<?php
namespace Wedo;
class Math
{

    public static function divisors($number)
    {
        if (0 >= $number) {
            return [];
        }
        $divisors = [];
        for ($i = 1; $i <$number; $i++) {
            if ($number % $i === 0) {
                $divisors[] = $i;
            }
        }
        $divisors[] = $number;
        return $divisors;
    }
}