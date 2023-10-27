<?php
declare(strict_types=1);

namespace easy\String;

use App\Easy\String\BinaryAddition;
use PHPUnit\Framework\TestCase;

class BinaryAdditionTest extends TestCase
{
    public function testInvoke()
    {
        $this->assertEquals("10", (new BinaryAddition)(1,1), "Invalid result for a = 1, b = 1");
        $this->assertEquals("1", (new BinaryAddition)(0,1), "Invalid result for a = 0, b = 1");
        $this->assertEquals("1", (new BinaryAddition)(1,0), "Invalid result for a = 1, b = 0");
        $this->assertEquals("100", (new BinaryAddition)(2,2), "Invalid result for a = 2, b = 2");
        $this->assertEquals("111111", (new BinaryAddition)(51,12), "Invalid result for a = 51, b = 12");
    }
}