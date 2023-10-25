<?php
declare(strict_types=1);

namespace App\Easy\String;

class ConvertStringToCamelCase
{
    public function __invoke(string $str): string
    {
        $str = str_replace(['_'], '-', $str);
        $list = explode('-', $str);
        $firstWorld = array_shift($list);
        $list = array_map(function ($i) {
            return ucfirst($i);
        }, $list);
        return $firstWorld . implode('', $list);
    }
}