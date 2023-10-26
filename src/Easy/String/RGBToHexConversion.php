<?php
declare(strict_types=1);

namespace App\Easy\String;

class RGBToHexConversion
{
    public function __invoke(int $r, int $g, int $b)
    {
        $r = $this->normalise($r);
        $g = $this->normalise($g);
        $b = $this->normalise($b);
        return strtoupper(
            str_pad(dechex(abs($r)), 2, '0', STR_PAD_LEFT)
            . str_pad(dechex(abs($g)), 2, '0', STR_PAD_LEFT)
            . str_pad(dechex(abs($b)), 2, '0', STR_PAD_LEFT)
        );
    }

    private function normalise(int $i)
    {
        if ($i < 0) return 0;
        if ($i > 256) return 255;
        return $i;
    }
}