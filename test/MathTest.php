<?php
namespace Wedo;
use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    public function summationOfPrimeProvider()
    {
        return [
            [9, 2 + 3 + 5 + 7],
            [10, 2 + 3 + 5 + 7],
            [15, 2 + 3 + 5 + 7 + 11 + 13],
            [0, 0],
            [1, 0],
        ];
    }

    /**
     * @test
     * @dataProvider summationOfPrimeProvider
     *
     */
    public function summationOfPrime($number, $expectedDivisors)
    {
        $divisors = Math::summationOfPrime($number);
        self::assertSame($expectedDivisors, $divisors);
    }
}
