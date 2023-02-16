<?php
declare(strict_types=1);

namespace App\Easy;

class Mumbling
{
    public function __invoke($s)
    {
        $result = [];
        $arr = str_split($s);
        foreach ($arr as $key => $item) {
            $result[] = ($key == 0 ? strtoupper($item) : strtoupper($item) . str_repeat(strtolower($item), $key));
        }
        return implode('-', $result);
    }
}