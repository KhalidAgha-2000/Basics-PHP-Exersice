<?php


function reverseSente($sentence)
{

    for ($i = (strlen($sentence) - 1); $i >= 0; $i--) {
        echo $sentence[$i];
    }
    echo PHP_EOL;
}

reverseSente("Helolo looo");
