<?php
declare(strict_types=1);

namespace easy;

use App\Easy\DifferenceOfTwoArrays;
use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertSame;

class DifferenceOfTwoArraysTest extends TestCase
{
    /**
     * https://leetcode.com/problems/find-the-difference-of-two-arrays/
     * @return void
     */
    public function testInvoke()
    {
        $diff = new DifferenceOfTwoArrays();

        assertSame([[1, 3], [4, 6]], $diff([1, 2, 3], [2, 4, 6]));
        assertSame([[3], []], $diff([1,2,3,3], [1,1,2,2]));
    }
}