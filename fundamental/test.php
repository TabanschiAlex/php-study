<?php

$a = new ArrayObject() instanceof ArrayObject;
var_dump($a);


$res = match (5) {
    1, 2 => [1, 2],
    5 => true
};

echo $res;

require_once('../advanced/singleton-db/ConnectDB.php');
require_once('../advanced/singleton-db/ConnectDB.php');

ConnectDB::getInstance()->connect();


echo strlen('sdfgs');
echo count([]);

function bar($a, $b = 5) {
    echo "$a";
}

$f = 'bar';
$f(5);

$fn1 = fn($x, $y) => $x + $y;