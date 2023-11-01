<?php
declare(strict_types=1);

namespace App\Easy\String;

class LengthLastWord
{
    public function __invoke(string $s): int
    {
        $list = explode(' ', trim($s));
        return mb_strlen(end($list));
    }
}