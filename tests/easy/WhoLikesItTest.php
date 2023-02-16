<?php
declare(strict_types=1);

use App\Easy\Likes;
use PHPUnit\Framework\TestCase;

class WhoLikesItTest extends TestCase
{
    public function testInvoke()
    {
        self::assertSame('no one likes this', (new Likes)([]));
        self::assertSame('Peter likes this', (new Likes)(['Peter']));
        self::assertSame('Jacob and Alex like this', (new Likes)(['Jacob', 'Alex']));
        self::assertSame('Max, John and Mark like this', (new Likes)(['Max', 'John', 'Mark']));
        self::assertSame('Alex, Jacob and 2 others like this', (new Likes)(['Alex', 'Jacob', 'Mark', 'Max']));
    }
}