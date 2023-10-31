<?php
declare(strict_types=1);

namespace easy\Array;

use App\Easy\Array\RemoveDuplicatesFromSortedArray;
use PHPUnit\Framework\TestCase;

class RemoveDuplicatesFromSortedArrayTest extends TestCase
{
    public function testInvoke()
    {
        self::assertEquals([1,2], (new RemoveDuplicatesFromSortedArray())([1,1,2]));
        self::assertEquals([0,1,2,3,4], (new RemoveDuplicatesFromSortedArray())([0,0,1,1,1,2,2,3,3,4]));
    }
}