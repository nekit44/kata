<?php
declare(strict_types=1);

namespace easy\Array;

use App\Common\ListNode;
use App\Easy\Array\MergeTwoSortedLists;
use PHPUnit\Framework\TestCase;

class MergeTwoSortedListsTest extends TestCase
{
    public function testInvoke()
    {
        $test = (new MergeTwoSortedLists())(new ListNode([1,2,4]), new ListNode([1,3,4]));
        self::assertTrue($test instanceof ListNode);
    }
}