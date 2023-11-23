<?php
declare(strict_types=1);

namespace App\Easy\Array;

class ContainsDuplicate
{
    /**
     * @param integer[] $nums
     * @return bool
     */
    public function __invoke(array $nums):bool
    {
        return count($nums) !== count(array_unique($nums));
    }
}