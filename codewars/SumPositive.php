<?php

class SumPositive
{
    static function positive_sum($arr): float|int
    {
        return array_sum(array_map(fn($num) => $num > 0 ? $num : 0, $arr));
    }
}

var_dump(SumPositive::positive_sum([-1, 2, 3, 4, -5]));