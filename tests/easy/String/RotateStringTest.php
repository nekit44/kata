<?php
declare(strict_types=1);

namespace easy\String;

use App\Easy\String\RotateString;
use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertEquals;

class RotateStringTest extends TestCase
{
    public function testInvoke()
    {
        assertEquals(true, (new RotateString())('abcde', 'cdeab'));
        assertEquals(false, (new RotateString())('abcde', 'abced'));
    }
}