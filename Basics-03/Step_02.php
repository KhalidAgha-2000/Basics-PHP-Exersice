<?php

function stars($number)
{
    $i = 1;
    $f = 1;
    while ($i <= $number) {
        $f = $f * $i;
        $i++;
    }
    printf(" The Factorial of $number is $f, \n ");
}

stars(3);
