<?php
declare(strict_types=1);

use App\Easy\ReverseWords;
use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertSame;

class ReverseWordsTest extends TestCase
{
    public function testInvoke()
    {
        assertSame('ehT kciuq nworb xof spmuj revo eht yzal .god', (new ReverseWords())('The quick brown fox jumps over the lazy dog.'));
        assertSame('elppa', (new ReverseWords())('apple'));
        assertSame('a b c d', (new ReverseWords())('a b c d'));
        assertSame('elbuod  decaps  sdrow', (new ReverseWords())('double  spaced  words'));
        assertSame('desserts stressed', (new ReverseWords())('stressed desserts'));
        assertSame('olleh olleh', (new ReverseWords())('hello hello'));
    }
}