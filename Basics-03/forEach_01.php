<?php
// $fruits = array("Orange", "Apple", "Banana",  "Cherry", "Mango");
// foreach ($fruits as $value) {
//     echo  "$value\n";
// }

$transactions = array(
    array(
        "id" => 1,
        "debit" => 2,
        "credit" => 3
    ),
    array(
        "id" => 2,
        "debit" => 15,
        "credit" => 10
    )
);
foreach ($transactions as  $key => $value) {
    echo $transactions[$value];
    // echo "$key=$value\n";
}
