<?php
declare(strict_types=1);

namespace easy\Array;

use App\Easy\Array\FindMissingLetter;
use PHPUnit\Framework\TestCase;

class FindMissingLetterTest extends TestCase
{
    public function testInvoke()
    {
        $this->assertSame('e', (new FindMissingLetter())(['a','b','c','d','f']));
        $this->assertSame('P', (new FindMissingLetter())(['O', 'Q', 'R', 'S']));
    }
}