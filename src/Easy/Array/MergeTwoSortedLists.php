<?php
declare(strict_types=1);

namespace App\Easy\Array;

use App\Common\ListNode;

class MergeTwoSortedLists
{
    /**
     * https://leetcode.com/problems/merge-two-sorted-lists/solutions/3356849/clean-solution-in-php-no-recursion/
     * @param ListNode $list1
     * @param ListNode $list2
     * @return array
     */
    public function __invoke(?ListNode $list1, ?ListNode $list2): ?ListNode
    {
        $head = $tail = new ListNode();
        while (isset($list1, $list2)) {
            if ($list1->val < $list2->val) {
                $tail->next = $list1;
                $list1 = $list1->next;
            } else {
                $tail->next = $list2;
                $list2 = $list2->next;
            }
            $tail = $tail->next;
        }
        $tail->next = $list1 ?? $list2;
        return $head->next;
    }
}