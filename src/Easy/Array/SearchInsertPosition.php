<?php
declare(strict_types=1);

namespace App\Easy\Array;

class SearchInsertPosition
{
    /**
     * @param int[] $nums
     * @param int $target
     * @return int
     */
    public function __invoke(array $nums, int $target): int
    {
        for ($i = 0; $i < count($nums); $i++) {
            if ($nums[$i] >= $target) {
                return $i;
            }
        }
        return count($nums);
    }
}