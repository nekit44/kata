<?php
declare(strict_types=1);

use App\Easy\UniqueInOrder;
use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertSame;

class UniqueInOrderTest extends TestCase
{
    public function testInvoke()
    {
        assertSame(['A', 'B', 'C', 'D', 'A', 'B'], (new UniqueInOrder())('AAAABBBCCDAABBB'));
        assertSame(['A'], (new UniqueInOrder())('AAAA'));
        assertSame([], (new UniqueInOrder())(''));
        assertSame(['A',1], (new UniqueInOrder())('A1'));
        assertSame([1,2], (new UniqueInOrder())('11112222'));
        assertSame([1,2], (new UniqueInOrder())(11112222));
        assertSame([1,2], (new UniqueInOrder())([1,1,1,1,2,2,2,2]));
    }
}