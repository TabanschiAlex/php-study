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