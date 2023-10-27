<?php
declare(strict_types=1);

namespace App\Easy\Array;

class LostWithoutMap
{
    public function __invoke(array $x): array
    {
        return array_map(function ($i) {
            return $i * 2;
        }, $x);
    }
}