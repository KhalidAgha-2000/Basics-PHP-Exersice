<?php


function sum_of_digits($nums)
{
    $total = 0;
    for ($i = 0; $i < strlen($nums); $i++) {
        $total += $nums[$i];
    }
    return $total;
}
echo sum_of_digits("12345") . "\n";
echo sum_of_digits("9999") . "\n";
