<?php


function isPowerOfTwo($number)
{

    if ($number % 2 == 0) {
        echo "$number is power of 2 \n";
    } else {
        echo "$number is not power of 2 \n";
    }
}
isPowerOfTwo(2);
isPowerOfTwo(8);
isPowerOfTwo(7);
isPowerOfTwo(6);
isPowerOfTwo(5);
isPowerOfTwo(4);
isPowerOfTwo(301);
isPowerOfTwo(205);
isPowerOfTwo(21);
isPowerOfTwo(12);
