<?php

function countString($str, $word)
{
    $a = explode(" ", $str);
    $count = 0;
    $i = 0;
    while ($i < sizeof($a)) {
        if ($word == $a[$i])
            $count++;
        $i++;
    }
    return $count;
}

// Driver code
$str = "you can find count of any string ";
$word = "you";
echo "match count of ($word) word is " .  countString($str, $word) . "\n";
