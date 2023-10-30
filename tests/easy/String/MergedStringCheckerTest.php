<?php
declare(strict_types=1);

namespace easy\String;

use App\Easy\String\MergedStringChecker;
use PHPUnit\Framework\TestCase;

class MergedStringCheckerTest extends TestCase
{
    public function testInvoke()
    {
        $this->assertSame(true,  (new MergedStringChecker())('codewars', 'code', 'wars'));
        $this->assertSame(true,  (new MergedStringChecker())('codewars', 'cdw', 'oears'));
        $this->assertSame(false, (new MergedStringChecker())('codewars', 'cod', 'wars'));
        $this->assertSame(true, (new MergedStringChecker())('nikita', 'ni', 'kita'));
        $this->assertSame(false, (new MergedStringChecker())('nikita', 'nik', 'it'));
    }
}