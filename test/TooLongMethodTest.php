<?php

namespace Wedo;

use PHPUnit\Framework\TestCase;

class TooLongMethodTest extends TestCase
{
    public function testGetFileName()
    {
        $testedInstance = new TooLongMethod;

        self::assertEquals('FileNameTest4558', $testedInstance->getFileName([45, 58]));
        self::assertEquals('FileNameTest11', $testedInstance->getFileName([1, 1]));
        self::assertEquals('FileNameTest9999', $testedInstance->getFileName([99, 99]));
    }
}
