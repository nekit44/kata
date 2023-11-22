<?php
declare(strict_types=1);

namespace easy\Array;

use App\Easy\Array\SearchInsertPosition;
use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertEquals;

class SearchInsertPositionTest extends TestCase
{
    public function testInvoke()
    {
        assertEquals(2, (new SearchInsertPosition())([1, 3, 5, 6], 5));
        assertEquals(1, (new SearchInsertPosition())([1,3,5,6], 2));
        assertEquals(4, (new SearchInsertPosition())([1,3,5,6], 7));
        assertEquals(0, (new SearchInsertPosition())([1], 0));
    }
}