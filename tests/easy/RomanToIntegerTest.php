<?php
declare(strict_types=1);

namespace easy;

use App\Easy\RomanToInteger;
use PHPUnit\Framework\TestCase;

class RomanToIntegerTest extends TestCase
{
    /**
     * https://leetcode.com/problems/roman-to-integer/description/
     * @return void
     */
    public function testInvoke()
    {
        $romanToInteger = new RomanToInteger();
        self::assertSame(3, $romanToInteger('III'));
        self::assertSame(4, $romanToInteger('IV'));
        self::assertSame(9, $romanToInteger('IX'));
        self::assertSame(58, $romanToInteger('LVIII'));
        self::assertSame(1994, $romanToInteger('MCMXCIV'));
    }
}