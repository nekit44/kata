<?php
declare(strict_types=1);

namespace App\Easy;

class LongestCommonPrefix
{
    /**
     * @param string[] $strs
     * @return string
     */
    public function __invoke(array $strs): string
    {
        if (count($strs) == 0) return '';
        $lengthPrefix = $this->lengthPrefix($strs);
        $prefix = mb_substr(array_shift($strs), 0, $lengthPrefix);
        foreach ($strs as $item) {
            if (!str_starts_with($item, $prefix)) {
                return '';
            }
        }
        return $prefix;
    }

    /**
     * @param array $strs
     * @return int
     */
    private function lengthPrefix(array $strs): int
    {
        $map = array_map(function ($str) {
            return str_split($str);
        }, $strs);
        $intersect = array_intersect_assoc(...$map);
        $index = 0;
        foreach ($intersect as $v) {
            if (!isset($intersect[$index])) break;
            $index++;
        }
        return $index;
    }
}