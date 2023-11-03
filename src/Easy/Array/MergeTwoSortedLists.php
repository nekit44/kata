<?php
declare(strict_types=1);

namespace App\Easy\Array;

class MergeTwoSortedLists
{
    public function __invoke(array $list1, array $list2): array
    {
        $result = [];
        array_map(function ($a, $b) use (&$result) {
           if ($a !== null) $result[] = $a;
           if ($b !== null) $result[] = $b;
        }, $list1, $list2);
        asort($result);
        return $result;
    }
}