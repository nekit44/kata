<?php
declare(strict_types=1);

namespace App\Easy\Int;

class SquareEveryDigit
{
    public function __invoke(int $num): int
    {
        $list = str_split((string)$num);
        return (int) implode('', array_map(function ($i){
            return $i * $i;
        }, $list));
    }
}