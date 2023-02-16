<?php
declare(strict_types=1);

namespace App\Easy;

class ReverseWords
{
    public function __invoke($str)
    {
        return implode(' ', array_reverse(explode(' ', strrev($str))));
    }
}