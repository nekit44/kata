<?php
declare(strict_types=1);

namespace App\Easy\Bool;

class HeroIsGonnaSurvive
{
    public function __invoke(int $bullets, int $dragons)
    {
        return $bullets >= $dragons * 2;
    }
}