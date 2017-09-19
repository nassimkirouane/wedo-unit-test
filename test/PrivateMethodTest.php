<?php

namespace Wedo;

use PHPUnit\Framework\TestCase;

class PrivateMethodTest extends TestCase
{
    private $testedInstance;

    public function setUp()
    {
        $this->testedInstance = new PrivateMethod();
    }
    public function providerCalculateVATAmount()
    {
        return [
            [
                'final_price' => 0,
                'quantity'    => 0,
            ],
            [
                'final_price' => 18,
                'quantity'    => 1,
            ],
            [
                'final_price' => 144,
                'quantity'    => 10,
            ],
            [
                'final_price' => 2304,
                'quantity'    => 158,
            ],
        ];
    }

    /**
     * @dataProvider providerCalculateVATAmount
     */
    public function testCalculateVATAmount($finalPrice, $quantity)
    {
        $computer = new Computer('PC', 15);

        self::assertEquals($finalPrice, $this->testedInstance->calculateVATAmount($computer, $quantity));
    }

    public function providerCalculateChildCompanyAmount()
    {
        return [
            [
                'final_price' => 0,
                'quantity'    => 0,
                'rate'        => 0.9,
            ],
            [
                'final_price' => 27,
                'quantity'    => 1,
                'rate'        => 0.9,
            ],
            [
                'final_price' => 216,
                'quantity'    => 10,
                'rate'        => 0.9,
            ],
            [
                'final_price' => 1674,
                'quantity'    => 76,
                'rate'        => 0.9,
            ],
        ];
    }

    /**
     * @dataProvider providerCalculateChildCompanyAmount
     */
    public function testCalculateChildCompanyAmount($finalPrice, $quantity, $rate)
    {
        $computer = new Computer('Apple', 30);

        $testedInstance = new PrivateMethod();

        self::assertEquals($finalPrice, $this->testedInstance->calculateChildCompanyAmount($computer, $quantity, $rate));
    }

    public function testRateTooLow()
    {
        $computer = new Computer('PS4', 20);
        self::assertEquals(12, $this->testedInstance->calculateChildCompanyAmount($computer, 1, 0.6));

        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('You can not use a rate dat low !');

        self::assertEquals(10, $this->testedInstance->calculateChildCompanyAmount($computer, 1, 0.5));
    }
}
