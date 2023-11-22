<?php
declare(strict_types=1);

namespace App\Easy\Array;

class SortOdd
{
    /**
     * https://www.codewars.com/kata/578aa45ee9fd15ff4600090d/train/php
     * @param array $arr
     * @return array
     */
    public function __invoke(array $arr): array
    {
        return array_values(array_flip($arr));
    }
}