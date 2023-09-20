<?php
//  Looping with Increment using a Function Using For Loop

function printEvenNumbersWithForLoop($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        echo $i . " ";
    }
}

$start = 2;
$end = 20;
$step = 2;

echo "Using for loop: ";
printEvenNumbersWithForLoop($start, $end, $step);

// Looping with Increment using a Function Using while loop 

function printEvenNumbersWithWhileLoop($start, $end, $step) {
    $i = $start;
    echo "Using while loop: ";
    while ($i <= $end) {
        echo $i . " ";
        $i += $step;
    }
}

$start = 2;
$end = 20;
$step = 2;

printEvenNumbersWithWhileLoop($start, $end, $step);

// Looping with Increment using a Function Using do while loop 


function printEvenNumbersWithDoWhileLoop($start, $end, $step) {
    $i = $start;
    echo "Using do-while loop: ";
    do {
        echo $i . " ";
        $i += $step;
    } while ($i <= $end);
}

$start = 2;
$end = 20;
$step = 2;

printEvenNumbersWithDoWhileLoop($start, $end, $step);
