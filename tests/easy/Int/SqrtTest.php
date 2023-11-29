<?php
declare(strict_types=1);

namespace easy\Int;

use App\Easy\Int\Sqrt;
use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertEquals;

class SqrtTest extends TestCase
{
    public function testInvoke()
    {
        assertEquals(2, (new Sqrt())(4));
        assertEquals(2, (new Sqrt())(8));
    }
}