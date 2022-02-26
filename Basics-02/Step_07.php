<?php

/***************************************** */

// $string1 = "php and python";
// echo str_replace("php", "python", $string1);

function replace($string)
{

    // $string = "you are learning php and then you have python";
    echo str_replace("php", "python", $string);
    echo str_replace("python", "php", $string);
}
replace("you are learning php and then you have python \n");
// function sum($number)
// {
//     $number . '';
//     $total = 0;
//     for ($i = 0; $i < strlen($number); $i++) {
//         $total += $total[$i];
//     }
// }
// sum(2);
// sum(2);
// sum(2);
// sum(3);
// sum(5);
