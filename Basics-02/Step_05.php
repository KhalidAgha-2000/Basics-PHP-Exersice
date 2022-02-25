<?php
//***************************** */

function convertWordToDigit($num)
{
    switch ($num) {
        case 'zero':
            echo $num . " " . 0 . "\n";
            break;
        case 'one':
            echo $num . " " . 1 . "\n";
            break;
        case 'two':
            echo $num . " " . 2 . "\n";
            break;
        case 'three':
            echo $num . " " . 3 . "\n";
            break;
        case 'four':
            echo $num . " " . 4 . "\n";
            break;
        case 'five':
            echo $num . " " . 5 . "\n";
            break;
        case 'six':
            echo $num . " " . 6 . "\n";
            break;
        case 'seven':
            echo $num . " " . 7 . "\n";
            break;
        case 'eight':
            echo $num . " " . 8 . "\n";
            break;
        case 'nine':
            echo $num . " " . 9 . "\n";
            break;
        case 'ten':
            echo $num . " " . 10 . "\n";
            break;
    }
}
convertWordToDigit('zero');
convertWordToDigit('one');
convertWordToDigit('two');
convertWordToDigit('three');
convertWordToDigit('four');
convertWordToDigit('five');
convertWordToDigit('six');
convertWordToDigit('seven');
convertWordToDigit('eight');
convertWordToDigit('nine');
convertWordToDigit('ten');
