<?php
declare(strict_types=1);

namespace easy\Array;

use App\Easy\Array\TwoSum;
use PHPUnit\Framework\TestCase;

class TwoSumTest extends TestCase
{
    public function testInvoke()
    {
        self::assertEquals([0, 1], (new TwoSum())([2, 7, 11, 15], 9));
        self::assertEquals([1, 2], (new TwoSum())([3, 2, 4], 6));
        self::assertEquals([0, 1], (new TwoSum())([3, 3], 6));
        self::assertEquals([0,2], (new TwoSum())([3,2,3], 6));
    }
}