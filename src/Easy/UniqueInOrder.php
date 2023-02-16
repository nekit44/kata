<?php
declare(strict_types=1);

namespace App\Easy;

class UniqueInOrder
{
    public function __invoke($iterable): array
    {
        $last = null;
        $ret = [];
        if (!empty($iterable)) {
            if (is_array($iterable)){
                $iterable = implode('', $iterable);
            }
            $iterable = (string) $iterable;
            $iterable = str_split($iterable);
            foreach ($iterable as $item) {
                if ($last == null or $last !== $item) {
                    $ret[] = is_numeric($item) ? (int) $item : $item;
                }
                $last = $item;
            }
        }
        return $ret;
    }
}