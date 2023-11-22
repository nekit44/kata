<?php
declare(strict_types=1);

namespace App\Easy\Array;

class PlusOne
{
    /**
     * https://leetcode.com/problems/plus-one/
     * @param $digits
     * @return array
     */
    public function __invoke($digits): array
    {
        return str_split((string)bcadd(implode($digits),'1'));
    }
}