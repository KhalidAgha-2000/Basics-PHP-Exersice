<?php

function isPrime($number)
{
    $count = 0;

    for ($i = 2; $i < $number; $i++) {
        if ($number % $i == 0) {
            $count++;
            break;
        }
    }
    if ($number == 1) {
        echo "1 is prime \n";
    } else if ($number == 2) {
        echo "2 is prime \n";
    } else if ($count == 0) {

        echo "$number is prime \n";
    } else {
        echo "$number is NOT Prime \n";
    }
}
isPrime(1);
isPrime(2);
isPrime(5);
isPrime(4);
isPrime(6);
isPrime(13);
isPrime(100);
