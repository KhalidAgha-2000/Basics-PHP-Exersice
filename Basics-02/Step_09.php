<?php

function squareRoot($number)
{
    if ($number <= 0) {
        echo "$number !! ---> enter a positive number !! \n";
    } else {
        echo "square root for $number is " . sqrt($number) . "\n";
    }
}
squareRoot(4);
squareRoot(0);
squareRoot(-1);
squareRoot(16);
squareRoot(12);
