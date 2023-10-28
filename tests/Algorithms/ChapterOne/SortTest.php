<?php
declare(strict_types=1);

namespace Algorithms\ChapterOne;

use PHPUnit\Framework\TestCase;

class SortTest extends TestCase
{
    public function testSort()
    {
        self::assertEquals([1, 2, 3, 4], $this->sortArray([1, 4, 2, 3]));
        self::assertEquals([98, 101, 999], $this->sortArray([101, 98, 999]));
        self::assertEquals([154, 245, 324, 324, 568, 654], $this->sortArray([154, 245, 568, 324, 654, 324]));
        self::assertEquals([1000, 2000, 3000, 4000], $this->sortArray([1000, 4000, 2000, 3000]));
        self::assertEquals(['Abba', 'Baab', 'Caab'], $this->sortArray(['Caab', 'Baab', 'Abba']));
    }

    public function sortArray(array $list)
    {
        $count = count($list);
        for ($i = 0; $i < $count; $i++) {
            $j = $i;
            while (($j > 0) && ($list[$j]) < $list[$j - 1]) {
                list($list[$j - 1], $list[$j]) = [$list[$j], $list[$j - 1]];
                $j = $j - 1;
            }
        }
        return $list;
    }
}