<?php
declare(strict_types=1);

namespace App\Easy\Array;

class MergeSortedArray
{
    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return void
     */
    public function __invoke(array &$nums1, int $m, array $nums2, int $n):void
    {
        array_splice($nums1, $m, null, $nums2);
        sort($nums1);
    }
}