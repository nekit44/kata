<?php
declare(strict_types=1);

namespace medium\string;

use App\Medium\String\LongestSubstringWithoutRepeatingCharacters;
use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertEquals;

class LongestSubstringWithoutRepeatingCharactersTest extends TestCase
{
    public function testInvoke()
    {
       // assertEquals(3, (new LongestSubstringWithoutRepeatingCharacters())('abcabcbb'));
       // assertEquals(1, (new LongestSubstringWithoutRepeatingCharacters())('bbbbb'));
        assertEquals(3, (new LongestSubstringWithoutRepeatingCharacters())('pwwkew'));
    }
}