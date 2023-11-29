<?php
declare(strict_types=1);

namespace App\Easy\Int;

class Sqrt
{
    public function __invoke(int $x): int
    {
        $result = 1;
        while ($x >= $result * $result) {
            $result++;
        }
        return $result - 1;
    }

}