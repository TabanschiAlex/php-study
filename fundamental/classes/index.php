<?php

interface One
{

}

interface Two
{

}

class Test
{
    public function __construct()
    {
        echo 'hi';
    }

    static public function getNew(): static
    {
        return new static;
    }
}

class Test2 extends Test implements One, Two
{
    public function __construct()
    {
        parent::__construct();
    }

    static function getSuper()
    {
        parent::getNew();
    }
}

$obj1 = new Test();
$obj2 = new $obj1;
var_dump($obj1 !== $obj2);