<?php
declare(strict_types=1);

namespace easy\String;

use App\Easy\String\LengthLastWord;
use PHPUnit\Framework\TestCase;

class LengthLastWordTest extends TestCase
{
    public function testInvoke()
    {
        self::assertEquals(5, (new LengthLastWord())("Hello World"));
        self::assertEquals(4, (new LengthLastWord())("   fly me   to   the moon  "));
        self::assertEquals(6, (new LengthLastWord())("luffy is still joyboy"));
    }
}