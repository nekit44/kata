<?php
declare(strict_types=1);

namespace easy\Array;

use App\Easy\Array\MergeTwoSortedLists;
use PHPUnit\Framework\TestCase;

class MergeTwoSortedListsTest extends TestCase
{
    public function testInvoke()
    {
        self::assertEquals([1,1,2,3,4,4], (new MergeTwoSortedLists())([1,2,4], [1,3,4]));
        self::assertEquals([], (new MergeTwoSortedLists())([], []));
        self::assertEquals([0], (new MergeTwoSortedLists())([], [0]));
    }
}