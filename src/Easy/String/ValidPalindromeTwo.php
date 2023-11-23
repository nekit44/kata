<?php
declare(strict_types=1);

namespace App\Easy\String;

class ValidPalindromeTwo
{
    /**
     * https://leetcode.com/problems/valid-palindrome-ii
     * @param string $s
     * @return bool
     */
    public function __invoke(string $s): bool
    {
        if (strrev($s) == $s) {
            return true;
        }
        $count = strlen($s);
        for ($i = 0; $i <= $count; $i++) {
            $s1 = mb_substr($s, 0, $i) . mb_substr($s, $i + 1);
            if ($s1 == strrev($s1)) return true;
        }
        return false;
    }
}