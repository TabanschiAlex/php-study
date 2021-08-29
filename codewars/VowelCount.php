<?php

class VowelCount
{
    static function getCount($str)
    {
        return preg_match_all('/[aeiou]/', $str);
    }
}

var_dump(VowelCount::getCount('wsexdrctfvijasdfhcvnkfgdfgwh'));