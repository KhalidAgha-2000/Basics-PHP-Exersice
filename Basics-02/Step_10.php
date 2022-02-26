<?php

function isPalindrome($word)
{

    if ($word === strrev($word)) {
        echo "$word is palindrome \n";
    } else {
        echo "$word not palindrome \n";
    }
}
isPalindrome('wordf');
isPalindrome('madam');
