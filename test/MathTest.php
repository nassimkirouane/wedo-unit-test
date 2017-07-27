<?php
namespace Wedo;
use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    public function divisorsProvider()
    {
        return [
            [9, [1,3,9]],
            [10, [1,2, 5, 10]],
            [1, [1]],
            [0, []],
            [-1, []]
        ];
    }

    /**
     * 9 => [1,3,9]
     * @test
     * @dataProvider divisorsProvider
     *
     */
    public function divisors($number, $expectedDivisors)
    {
        $divisors = Math::divisors($number);
        self::assertSame($expectedDivisors, $divisors);
    }
}
