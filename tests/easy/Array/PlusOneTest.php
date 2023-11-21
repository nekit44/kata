<?php
declare(strict_types=1);

namespace easy\Array;

use App\Easy\Array\PlusOne;
use PHPUnit\Framework\TestCase;

class PlusOneTest extends TestCase
{
    public function testInvoke()
    {
        self::assertEquals([1], (new PlusOne)([0]));
        self::assertEquals([1, 2, 4], (new PlusOne)([1, 2, 3]));
        self::assertEquals([4, 3, 2, 2], (new PlusOne)([4, 3, 2, 1]));
        self::assertEquals([1, 0], (new PlusOne)([9]));
        self::assertEquals([6, 1, 4, 5, 3, 9, 0, 1, 9, 5, 1, 8, 6, 7, 0, 5, 5, 4, 4], (new PlusOne)([6, 1, 4, 5, 3, 9, 0, 1, 9, 5, 1, 8, 6, 7, 0, 5, 5, 4, 3]));
        self::assertEquals([7, 2, 8, 5, 0, 9, 1, 2, 9, 5, 3, 6, 6, 7, 3, 2, 8, 4, 3, 7, 9, 5, 7, 7, 4, 7, 4, 9, 4, 7, 0, 1, 1, 1, 7, 4, 0, 0, 7], (new PlusOne)([7, 2, 8, 5, 0, 9, 1, 2, 9, 5, 3, 6, 6, 7, 3, 2, 8, 4, 3, 7, 9, 5, 7, 7, 4, 7, 4, 9, 4, 7, 0, 1, 1, 1, 7, 4, 0, 0, 6]));
        self::assertEquals([5,3,7,3,5,6,3,4,7,0,7,2,1,6,8,4,0,4,1,8,5,3,6,4,1,8,5,9,2,7], (new PlusOne)([5,3,7,3,5,6,3,4,7,0,7,2,1,6,8,4,0,4,1,8,5,3,6,4,1,8,5,9,2,6]));
    }
}