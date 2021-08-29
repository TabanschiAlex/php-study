<?php
    $v_bool = true;
    $v_str = 'hi' & "hi";
    $v_int = 10;
    $v_float = 10.55;

    echo gettype($v_bool);
    echo '<br>';
    echo gettype($v_int);
    echo '<br>';
    echo gettype($v_float);
    echo '<br>';

    function checkType($a) {
        if (is_int($a)) {
            return 'int: ' . $a;
        }

        if (is_string($a)) {
            return 'string: ' . $a;
        }

        if (is_float($a)) {
            return 'float or double: ' . $a;
        }

        return 'something else';
    }

    echo checkType($v_float);
    echo '<br>';

    settype($v_float, "integer");
    echo gettype($v_float);
    echo '<br>';

    var_dump($v_float);
    var_dump((bool) array());

    $arr = array(1, 2, 3);
    echo @$foo = "10.0 pigs " + 1.0;

    $hashtable = [
        NAN => 'value'
    ];

    echo $hashtable[(int) 'a'] . "\n";

    $array = array(
        "a",
        "b",
        6 => "c",
        "d",
        "d",
        "d",
        "d",
        "d",
    );

    unset($array[7]);

    foreach ($array as $i => $value) {
        unset($array[$i]);
    }

    $array = array_values($array);
    $array[] = 5;

echo @$array[2] . "\n";

var_dump($array);

const PI = 3.14;

$colors = ['red', 'blue', 'green', 'yellow'];

foreach ($colors as &$color) {
    $color = strtoupper($color);
}

print_r($colors);




