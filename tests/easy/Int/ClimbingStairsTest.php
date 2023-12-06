<?php
declare(strict_types=1);

namespace easy\Int;

use App\Easy\Int\ClimbingStairs;
use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertEquals;

class ClimbingStairsTest extends TestCase
{
    public function testInvoke()
    {
        assertEquals(2, (new ClimbingStairs())(2));
        assertEquals(3, (new ClimbingStairs())(3));
    }
}