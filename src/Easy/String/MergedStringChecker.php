<?php
declare(strict_types=1);

namespace App\Easy\String;

class MergedStringChecker
{
    public function __invoke(string $s, string $part1, string $part2): bool
    {
        $listString = str_split($s);
        $listPart = str_split($part1 . $part2);
        return empty(array_diff($listString, $listPart));
    }
}