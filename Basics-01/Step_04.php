<?php
//variables
$name = 'Khalid Agha';
$position = 'Web Developer ,';
$github_url = 'github@github';

// Using the double quotation " and the .
$information1 = "Hello I`am" . $name . " I`am a " . $position . "Please check my github link:" . $github_url;

// Using the double quotation " and without using the .
$information2 = "Hello I`am $name I`am a $position Please check my github link: $github_url";

//Without using the double quotation ".
$information3 = 'Hello I`am ' . $name . ' I`am ' . $position . 'My Github Link: ' . $github_url;

echo $information1, "\n", $information2, "\n", $information3, "\n", $information4, "\n";
