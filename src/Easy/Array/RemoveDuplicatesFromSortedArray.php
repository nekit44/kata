<?php
declare(strict_types=1);

namespace App\Easy\Array;

use App\Common\ListNode;

class RemoveDuplicatesFromSortedArray
{
    /**
     * @param ListNode $head
     * @return ListNode
     */
    public function __invoke(ListNode $head): ListNode
    {
        $current = $head;
        while ($current !== null && $current->next !== null) {
            if ($current->val === $current->next->val) {
                $current->next = $current->next->next;
            } else {
                $current = $current->next;
            }
        }
        return $head;
    }
}