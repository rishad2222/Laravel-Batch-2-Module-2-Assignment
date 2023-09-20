<?php
$first = 0;
$second = 1;
$count = 0;

echo "First 10 Fibonacci numbers: ";

while ($count < 10) {
    if ($count === 0) {
        echo $first . " ";
    } else {
        echo $second . " ";
    }

    $next = $first + $second;

    if ($next > 100) {
        break; 
    }

    $first = $second;
    $second = $next;
    
    $count++;
}
