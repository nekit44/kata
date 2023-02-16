<?php
declare(strict_types=1);

namespace App\Easy;

class Likes
{
    public function __invoke($names)
    {
        if (empty($names)) {
            return 'no one likes this';
        } elseif (($count = count($names)) <= 2) {
            return implode(' and ', $names) . ' like' . ($count == 1 ? 's' : '') . ' this';
        } elseif (count($names) == 3) {
            $first = array_shift($names);
            return $first . ', ' . implode(' and ', $names) . ' like this';
        } else {
            $first = array_shift($names);
            $second = array_shift($names);
            $count = count($names);
            return "{$first}, {$second} and {$count} others like this";
        }
    }
}