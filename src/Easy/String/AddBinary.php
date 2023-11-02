<?php
declare(strict_types=1);

namespace App\Easy\String;

class AddBinary
{
    public function __invoke(string $a, string $b): string
    {
        $len1 = strlen($num1 = $a);
        $len2 = strlen($num2 = $b);
        //length normalization
        if ($len1 > $len2) {
            $num2 = str_pad($num2, $len1, "0", STR_PAD_LEFT);
        } else if ($len2 > $len1) {
            $num1 = str_pad($num1, $len2, "0", STR_PAD_LEFT);
        }

        $carry = 0;
        $result = '';

        for ($i = strlen($num1) - 1; $i >= 0; $i--) {
            $r = $carry;
            $r += ($num1[$i] == '1') ? 1 : 0;
            $r += ($num2[$i] == '1') ? 1 : 0;
            $result = (($r % 2 == 1) ? '1' : '0') . $result;
            $carry = ($r < 2) ? 0 : 1;
        }

        if ($carry != 0){
            $result = '1' . $result;
        }
        return $result;
    }
}