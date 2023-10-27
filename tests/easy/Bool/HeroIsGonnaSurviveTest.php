<?php
declare(strict_types=1);

namespace easy\Bool;

use App\Easy\Bool\HeroIsGonnaSurvive;
use PHPUnit\Framework\TestCase;

class HeroIsGonnaSurviveTest extends TestCase
{
    public function testInvoke()
    {
        $this->assertSame(True, (new HeroIsGonnaSurvive())(10,5));
        $this->assertSame(False, (new HeroIsGonnaSurvive())(7,4));
        $this->assertSame(False, (new HeroIsGonnaSurvive())(4,5));
        $this->assertSame(True,  (new HeroIsGonnaSurvive())(100,40));
        $this->assertSame(False, (new HeroIsGonnaSurvive())(1500,751));
        $this->assertSame(False, (new HeroIsGonnaSurvive())(0,1));
}
}