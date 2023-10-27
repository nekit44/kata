<?php
declare(strict_types=1);

namespace easy\String;

use App\Easy\String\JadenCasingStrings;
use PHPUnit\Framework\TestCase;

class JadenCasingStringsTest extends TestCase
{
    public function testInvoke()
    {
        $str = "How can mirrors be real if our eyes aren't real";
        $exp = "How Can Mirrors Be Real If Our Eyes Aren't Real";
        $this->assertSame($exp, (new JadenCasingStrings())($str));
    }
}