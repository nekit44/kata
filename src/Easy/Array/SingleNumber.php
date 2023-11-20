<?php
declare(strict_types=1);

namespace App\Easy\Array;

class SingleNumber
{

    public function __invoke(array $nums): int
    {
        return array_search(1, array_count_values($nums));
    }
}