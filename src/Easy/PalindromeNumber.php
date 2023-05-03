<?php
declare(strict_types=1);

namespace App\Easy;

class PalindromeNumber
{
    /**
     * @param Integer $x
     * @return Boolean
     */
    public function __invoke(int $x): bool
    {
        return (string) $x === strrev((string) $x);
    }
}