<?php
declare(strict_types=1);

namespace App\Easy\Array;

class TwoSum
{
    /**
     * @param array $nums
     * @param int $target
     * @return array
     */
    public function __invoke(array $nums, int $target): array
    {
        $result = [];
        array_map(function ($key, $value) use ($nums, $target, &$result) {
            $k = $key;
            $k++;
            while (isset($nums[$k])) {
                if ($k != 0 && $nums[$k] + $value == $target) {
                    $result[] = $key;
                    $result[] = $k;
                }
                $k++;
            }
        }, array_keys($nums), $nums);

        return $result;
    }
}