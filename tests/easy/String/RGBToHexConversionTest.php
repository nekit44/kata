<?php
declare(strict_types=1);

namespace easy\String;

use App\Easy\String\RGBToHexConversion;
use PHPUnit\Framework\TestCase;

class RGBToHexConversionTest extends TestCase
{
    public function testInvoke()
    {
        $this->assertSame("FFFFFF", (new RGBToHexConversion())(255, 255, 255));
        $this->assertSame("FFFFFF", (new RGBToHexConversion())(255, 255, 300));
        $this->assertSame("000000", (new RGBToHexConversion())(0,0,0));
        $this->assertSame("000000", (new RGBToHexConversion())(-500,0,0));
        $this->assertSame("9400D3", (new RGBToHexConversion())(148, 0, 211));
        $this->assertSame("FF00D3", (new RGBToHexConversion())(255, 0, 211));
    }
}