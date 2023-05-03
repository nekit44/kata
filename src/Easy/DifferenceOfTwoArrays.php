<?php
declare(strict_types=1);

namespace App\Easy;

class DifferenceOfTwoArrays
{
    public function __invoke(array $nums1, array $nums2)
    {
        $diff1 = array_unique(array_values(array_diff($nums1, $nums2)));
        $diff2 = array_unique(array_values(array_diff($nums2, $nums1)));
        return [$diff1, $diff2];
    }
}