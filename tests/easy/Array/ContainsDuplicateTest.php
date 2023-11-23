<?php
declare(strict_types=1);

namespace easy\Array;

use App\Easy\Array\ContainsDuplicate;
use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertEquals;

class ContainsDuplicateTest extends TestCase
{
    public function testInvoke()
    {
        assertEquals(true, (new ContainsDuplicate())([1,2,3,1]));
        assertEquals(true, (new ContainsDuplicate())([1,1,1,3,3,4,3,2,4,2]));
        assertEquals(false, (new ContainsDuplicate())([1,2,3,4]));
    }
}