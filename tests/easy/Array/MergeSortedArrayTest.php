<?php
declare(strict_types=1);

namespace easy\Array;

use App\Easy\Array\MergeSortedArray;
use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertEquals;

class MergeSortedArrayTest extends TestCase
{
    public function testInvoke()
    {
        $arr = [1, 2, 3, 0, 0, 0];
        (new MergeSortedArray())(nums1: $arr, m: 3, nums2: [2, 5, 6], n: 3);
        assertEquals([1, 2, 2, 3, 5, 6], $arr);
        $arr = [1];
        (new MergeSortedArray())($arr, 1, [], 0);
        assertEquals([1], $arr);
        $arr = [1];
        (new MergeSortedArray())($arr, 0, [1], 1);
        assertEquals([1], $arr);
    }
}