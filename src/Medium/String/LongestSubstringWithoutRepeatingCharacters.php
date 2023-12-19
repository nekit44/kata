<?php
declare(strict_types=1);

namespace App\Medium\String;
class LongestSubstringWithoutRepeatingCharacters
{
    /**
     * https://leetcode.com/problems/longest-substring-without-repeating-characters/
     * @param string $s
     * @return int
     */
    public function __invoke(string $s): int
    {
        $newstr = '';
        $maxlen = 0;
        for($i = 0; $i < strlen($s); $i++) {
            if(str_contains($newstr, $s[$i])) {
                $newstr = substr($newstr, strpos($newstr, $s[$i]) + 1) . $s[$i];

            } else
            {
                $newstr .= $s[$i];
            }
            $maxlen = $maxlen < strlen($newstr) ? strlen($newstr) : $maxlen;

        }
        return $maxlen;
    }
}