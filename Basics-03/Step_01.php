<?php

function stars($number)
{
    $x = 1;
    while ($x <= $number) {
        $y = 1;
        while ($y <= $x) {
            echo "*";
            $y++;
        }
        echo "\n";
        $x++;
    }
}
stars(8);
