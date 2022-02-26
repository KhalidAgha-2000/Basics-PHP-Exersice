<?php
//----------------
function isArmstrong($num)
{
    $total = 0;
    $x = $num;
    while ($x != 0) {
        $rem = $x % 10;
        $total = $total + $rem * $rem * $rem;
        $x = $x / 10;
    }
    if ($num == $total) {
        echo "$num Armstrong number \n";
    } else {
        echo "$num not an armstrong number \n";
    }
}

isArmstrong(407);

isArmstrong(9);
isArmstrong(1534);
isArmstrong(10);
isArmstrong(104);
