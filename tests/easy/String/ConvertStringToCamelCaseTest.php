<?php
declare(strict_types=1);

namespace easy\String;

use App\Easy\String\ConvertStringToCamelCase;
use PHPUnit\Framework\TestCase;

class ConvertStringToCamelCaseTest extends TestCase
{
    public function testInvoke()
    {
        $this->assertSame("theStealthWarrior", (new ConvertStringToCamelCase())("the_stealth_warrior"));
        $this->assertSame("theStealthWarrior", (new ConvertStringToCamelCase())("the-Stealth-Warrior"));
    }
}