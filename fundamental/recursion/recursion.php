<?php
function factorial($n): int
{
    if ($n < 2)
    {
        return 1;
    }

    return $n * factorial($n - 1);
}

echo factorial(5);

function staticVar(): void
{
    static $count = 1;

    echo $count++;
    if ($count > 10) {
        return;
    }

    staticVar();
}

staticVar();