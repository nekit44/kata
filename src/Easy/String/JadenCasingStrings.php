<?php
declare(strict_types=1);

namespace App\Easy\String;

class JadenCasingStrings
{
    public function __invoke(string $string): string
    {
        $list = explode(' ', $string);
        return implode(' ', array_map(function (string $str): string {
            return ucfirst($str);
        }, $list));
    }
}