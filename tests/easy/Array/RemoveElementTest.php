<?php
declare(strict_types=1);

namespace easy\Array;

use App\Easy\Array\RemoveElement;
use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertEquals;

class RemoveElementTest extends TestCase
{
    public function testInvoke()
    {
        $nums = [3, 2, 2, 3];
        (new RemoveElement())($nums, 3);
        assertEquals([1 => 2, 2 => 2], $nums);
        $nums1 = [0, 1, 2, 2, 3, 0, 4, 2];
        (new RemoveElement())($nums1, 2);
        assertEquals([0 => 0, 1 => 1, 4 => 3, 5 => 0, 6 => 4], $nums1);
    }
}