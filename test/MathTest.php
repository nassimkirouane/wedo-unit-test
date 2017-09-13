<?php
namespace Wedo;
use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    public function curveProvider()
    {
        return [
            ['$x**2', 0, 4, [0 => 0, 1 => 1, 2 => 4, 3 => 9, 4 => 16]],
            ['$x + 1', 0, 4, [0 => 1, 1 => 2, 2 => 3, 3 => 4, 4 => 5]]

        ];
    }

    /**
     * @test
     * @dataProvider curveProvider
     *
     */
    public function curve($formula, $start, $end, $y)
    {
        $fs = Math::curve($formula, $start, $end);
        self::assertSame($y, $fs);
    }
}
