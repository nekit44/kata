<?php
declare(strict_types=1);

namespace easy\Int;

use App\Easy\Int\SquareEveryDigit;
use PHPUnit\Framework\TestCase;

class SquareEveryDigitTest extends TestCase
{
    public function testInvoke()
    {
        $this->assertSame(811181, (new SquareEveryDigit)(9119));
        $this->assertSame(41636640, (new SquareEveryDigit)(24680));
        $this->assertSame(19254981, (new SquareEveryDigit)(13579));
        $this->assertSame(0, (new SquareEveryDigit)(0));
    }
}