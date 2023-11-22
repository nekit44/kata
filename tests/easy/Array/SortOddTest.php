<?php
declare(strict_types=1);

namespace easy\Array;

use App\Easy\Array\SortOdd;
use PHPUnit\Framework\TestCase;

class SortOddTest extends TestCase
{
    public function testInvoke()
    {
        $this->assertSame([1, 3, 2, 8, 5, 4], (new SortOdd())([5, 3, 2, 8, 1, 4]));
        $this->assertSame([1, 3, 5, 8, 0], (new SortOdd())([5, 3, 1, 8, 0]));
        $this->assertSame([], (new SortOdd())([]));
}
}