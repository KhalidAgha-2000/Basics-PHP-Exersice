<?php


function reverseSente($sentence)
{

    for ($i = (strlen($sentence) - 1); $i >= 0; $i--) {
        echo $sentence[$i];
    }
    echo PHP_EOL;
}
reverseSente("Helolo looo");
// $x = "hello world";

// echo "The input string is: ", $x, "\n\n";
// echo "The reverse of the string is: ";

// for ($i = (strlen($x) - 1); $i >= 0; $i--) {
//     echo $x[$i];
// }

// echo "\n";
