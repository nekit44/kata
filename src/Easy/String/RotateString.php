<?php
declare(strict_types=1);

namespace App\Easy\String;

class RotateString
{
    /**
     * @param string $s
     * @param string $goal
     * @return bool
     */
    public function __invoke(string $s, string $goal): bool
    {
        if (strlen($s) !== strlen($goal)) {
            return false;
        }
        $strlen = strlen($s);
        for ($i = 0; $i < $strlen; $i++) {
            $first = $s[0];
            $s = preg_replace('/' . $first . '/', '', $s, 1);
            $s .= $first;
            if ($s === $goal) {
                return true;
            }
        }

        return false;
    }
}