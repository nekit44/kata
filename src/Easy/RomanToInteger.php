<?php
declare(strict_types=1);

namespace App\Easy;

class RomanToInteger
{
    const ROMAN = [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000,
    ];

    /**
     * @param String $s
     * @return Integer
     */
    public function __invoke(string $s): int
    {
        $result = 0;
        foreach ($roman = str_split($s) as $key => $item) {
            if (isset($roman[$key + 1]) && self::ROMAN[$roman[$key]] < (self::ROMAN[$roman[$key + 1]] )) {
                $result -= self::ROMAN[$roman[$key]];
            } else {
                $result += self::ROMAN[$roman[$key]];
            }
        }
        return $result;
    }


}