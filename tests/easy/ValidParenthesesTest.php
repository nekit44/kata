<?php
declare(strict_types=1);

namespace easy;

use PHPUnit\Framework\TestCase;

class ValidParenthesesTest extends TestCase
{
    /**
     * https://leetcode.com/problems/valid-parentheses/
     * @return void
     */
    public function testInvoke()
    {
        $validParentheses = new \App\Easy\ValidParentheses();
        self::assertFalse($validParentheses("({{{{}}}))"));
        self::assertTrue($validParentheses("{[]}"));
        self::assertTrue($validParentheses("()"));
        self::assertTrue($validParentheses("()[]{}"));
        self::assertFalse($validParentheses("(]"));
        self::assertFalse($validParentheses("{[]})"));
        self::assertFalse($validParentheses("([)]"));
    }
}