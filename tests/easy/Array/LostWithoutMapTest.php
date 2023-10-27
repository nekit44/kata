<?php
declare(strict_types=1);

namespace easy\Array;

use App\Easy\Array\LostWithoutMap;
use PHPUnit\Framework\TestCase;

class LostWithoutMapTest extends TestCase
{
    public function testInvoke()
    {
        $this->assertSame([2, 4, 6], (new LostWithoutMap)([1, 2, 3]));
        $this->assertSame([8, 2, 2, 2, 8], (new LostWithoutMap)([4, 1, 1, 1, 4]));
        $this->assertSame([4, 4, 4, 4, 4, 4], (new LostWithoutMap)([2, 2, 2, 2, 2, 2]));
    }
}