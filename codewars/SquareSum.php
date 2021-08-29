<?php

class SquareSum
{
    static function square_sum($numbers) : int
    {
        foreach($numbers as &$number)
        {
            $number **= 2;
        }
        unset($number);

        return array_reduce($numbers, fn($acc, $num) => $acc + $num);
    }
}

echo SquareSum::square_sum([1,2]);