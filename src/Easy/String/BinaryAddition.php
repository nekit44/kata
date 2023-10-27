<?php
declare(strict_types=1);

namespace App\Easy\String;

class BinaryAddition
{
    public function __invoke(int $a, int $b): string
    {
        return decbin($a + $b);
    }
}