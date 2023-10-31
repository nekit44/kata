<?php
declare(strict_types=1);

namespace App\Easy\Array;

class RemoveDuplicatesFromSortedArray
{
    /**
     * @param Integer[] $nums
     * @return array
     */
    public function __invoke($nums): array
    {
        return array_values(array_unique($nums));
    }
}