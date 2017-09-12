<?php

namespace Wedo;
class Math
{
    /**
     * @param int $number
     * @return int
     */
    public static function summationOfPrime(int $number): int
    {
        $sum = 0;
        for ($i = 1; $i < $number; $i++) {
            if (self::isPrime($i)) {
                $sum += $i;
            }
        }

        return $sum;
    }

    /**
     * @param int $number
     * @return bool
     */
    private static function isPrime(int $number): bool
    {
        $divisors = [];
        for ($i = 1; $i <= $number; $i++) {
            if ($number % $i === 0) {
                $divisors[] = $i;
            }
        }

        return 2 === count($divisors);
    }
}