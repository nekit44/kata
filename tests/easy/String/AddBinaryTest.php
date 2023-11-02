<?php
declare(strict_types=1);

namespace easy\String;

use App\Easy\String\AddBinary;
use PHPUnit\Framework\TestCase;

class AddBinaryTest extends TestCase
{
    public function testInvoke()
    {
        self::assertEquals('100', (new AddBinary())('11', '1'));
    }
}