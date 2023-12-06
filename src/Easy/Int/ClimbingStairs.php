<?php
declare(strict_types=1);

namespace App\Easy\Int;

class ClimbingStairs
{
    /**
     * https://leetcode.com/problems/climbing-stairs/solutions/1966313/
     * @param int $n
     * @return int
     */
    public function __invoke(int $n):int
    {
        return (int) round(pow((sqrt(5)+1)/2, $n+1) / sqrt(5));
    }
}