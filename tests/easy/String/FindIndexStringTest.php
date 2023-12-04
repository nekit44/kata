<?php
declare(strict_types=1);

namespace easy\String;

use App\Easy\String\FindIndexString;
use PHPUnit\Framework\TestCase;

class FindIndexStringTest extends TestCase
{
    public function testInvoke()
    {
        self::assertEquals(0, (new FindIndexString())('sadbutsad', 'sad'));
        self::assertEquals(-1, (new FindIndexString())('leetcode', 'leeto'));
    }
}