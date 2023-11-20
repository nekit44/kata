<?php
declare(strict_types=1);

namespace easy\Array;

use App\Easy\Array\SingleNumber;
use PHPUnit\Framework\TestCase;

class SingleNumberTest extends TestCase
{
    public function testInvoke()
    {
        self::assertEquals(1, (new SingleNumber)([2, 2, 1]));
        self::assertEquals(4, (new SingleNumber)([4,1,2,1,2]));
        self::assertEquals(1, (new SingleNumber)([1]));
    }
}