<?php
declare(strict_types=1);

namespace easy;

use App\Easy\PalindromeNumber;
use PHPUnit\Framework\TestCase;

class PalindromeNumberTest extends TestCase
{
    /**
     * https://leetcode.com/problems/palindrome-number/
     * @return void
     */
    public function testInvoke()
    {
        $palindromeNumber = new PalindromeNumber();

        self::assertSame(true, $palindromeNumber(121));
        self::assertSame(true, $palindromeNumber(987789));
        self::assertSame(false, $palindromeNumber(-121));
        self::assertSame(false, $palindromeNumber(10));
    }
}