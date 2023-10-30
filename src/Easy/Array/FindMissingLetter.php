<?php
declare(strict_types=1);

namespace App\Easy\Array;

class FindMissingLetter
{
    public function __invoke(array $array): string
    {
        $letters = range($array[0], end($array));
        return implode('', array_diff($letters, $array));
    }
}