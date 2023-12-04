<?php
declare(strict_types=1);

namespace App\Easy\String;

class FindIndexString
{
    /**
     * https://leetcode.com/problems/find-the-index-of-the-first-occurrence-in-a-string
     * @param string $haystack
     * @param string $needle
     * @return int
     */
    public function __invoke(string $haystack, string $needle): int
    {
        $pos = strpos($haystack, $needle);
        if($pos !== false){
            return $pos;
        }
        return -1;
    }
}