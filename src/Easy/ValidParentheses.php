<?php
declare(strict_types=1);

namespace App\Easy;

class ValidParentheses
{
    /**
     * @param String $s
     * @return Boolean
     */
    public function __invoke(string $s): bool
    {
        $symbols = [];
        $split = str_split($s);
        foreach ($split as $key => $item) {
            if ($item == '(' || $item == '{' || $item == '[') {
                $symbols[] = $item;
            }elseif($item == ')' && !empty($symbols) && $symbols[count($symbols) - 1] == '('){
                array_pop($symbols);
            }elseif($item == '}' && !empty($symbols) && $symbols[count($symbols) - 1] == '{'){
                array_pop($symbols);
            }elseif($item == ']' && !empty($symbols) && $symbols[count($symbols) - 1] == '['){
                array_pop($symbols);
            }else{
                return false;
            }
        }
        return empty($symbols);
    }
}