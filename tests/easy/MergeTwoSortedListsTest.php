<?php

namespace easy;

use App\Common\ListNode;
use App\Easy\MergeTwoSortedLists;
use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertEquals;

class MergeTwoSortedListsTest extends TestCase
{
    public function testInvoke()
    {
        $mergeTSL = new MergeTwoSortedLists();
        assertEquals([1,1,2,3,4,4],$mergeTSL(new ListNode()));
    }
}