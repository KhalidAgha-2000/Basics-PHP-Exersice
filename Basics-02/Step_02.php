<?php

function greaterFn($num)
{
    switch ($num) {
        case $num > 30:
            echo "$num is greater than 30 \n";
            break;
        case   $num > 20:
            echo "$num is greater than 20 \n";
            break;
        case  $num > 10:
            echo "$num is greater than 10 \n";
            break;
        case   $num < 10:
            echo "$num is less than 10 \n";
            break;
    }
}
greaterFn(40);
greaterFn(21);
greaterFn(12);
greaterFn(8);
