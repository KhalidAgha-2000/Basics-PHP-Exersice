<?php

function replace($string)
{
    echo str_replace("php", "python", $string);
    echo str_replace("python", "php", $string);
}
replace("you are learning php and then you have python \n");
