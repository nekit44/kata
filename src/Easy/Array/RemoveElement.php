<?php
declare(strict_types=1);

namespace App\Easy\Array;

class RemoveElement
{
    /**
     * @param int[] $nums
     * @param int $val
     * @return int
     */
    public function __invoke(array &$nums, int $val): int
    {
        foreach ($nums as $k => $num) {
            if ($num == $val) unset($nums[$k]);
        }
        return count($nums);
    }
}