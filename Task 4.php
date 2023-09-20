<?php
function printFibonacci($count)
{
    $first = 0;
    $second = 1;

    echo "First $count Fibonacci numbers: ";

    for ($i = 0; $i < $count; $i++) {
        if ($i === 0) {
            echo $first . " ";
        } else {
            echo $second . " ";
        }

        $next = $first + $second;
        $first = $second;
        $second = $next;
    }
}

$count = 15;
printFibonacci($count);
