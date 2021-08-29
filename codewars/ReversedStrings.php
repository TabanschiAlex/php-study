<?php

class ReversedStrings
{
    static function solution($str): string
    {
        return strrev($str);
        /*return join(array_reverse(str_split($str)));*/
    }
}

var_dump(ReversedStrings::solution('hello world'));