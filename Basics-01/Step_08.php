<!-- Step_08 -- a -->
<?php

$grocery = ["Eggs", "Milk", " Cheese", "Water", "Pack", "Tissues", " Watermelon"];

$lasIndex = end($grocery);
echo "Hello Sir, do you have $grocery[0], $grocery[1] and $grocery[2] ? Also if you sell fruits I find a $lasIndex  ";
// ------------------------------------------------------
?>
<!-- Step_08 -- b -->
<?php
$grocery = array(
    array('balade', 'mazere3'),
    array('Fresh', 'Taanayel'),
    array('Tanoureen', 'Reem')
);
echo "Hey Sir, Please I need 1 pack of " . $grocery[0][0] . " eggs and 3 " . $grocery[2][1] . " Water Pack \n";
