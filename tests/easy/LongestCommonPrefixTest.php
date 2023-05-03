<?php
declare(strict_types=1);

namespace easy;

use App\Easy\LongestCommonPrefix;
use PHPUnit\Framework\TestCase;

class LongestCommonPrefixTest extends TestCase
{
    /**
     * https://leetcode.com/problems/longest-common-prefix/description/
     * @return void
     */
    public function testInvoke()
    {
        $logComPref = new LongestCommonPrefix();
        self::assertEquals("flower", $logComPref(["flower","flower","flower","flower"]));
        self::assertEquals('c', $logComPref(["cir","car"]));
        self::assertEquals('a', $logComPref(["ab","a"]));
        self::assertEquals('fl', $logComPref(["flower","flow","flight"]));
        self::assertEquals('', $logComPref(["dog","racecar","car"]));
    }
}