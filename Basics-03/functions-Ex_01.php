<?php
function personal_details($name, $occupation, $age, $country)
{
    $personal_details = array(
        "name" => $name,
        "occupation" => $occupation,
        "age" => $age,
        "country" => $country
    );

    foreach ($personal_details as $key => $value) {
        echo "$key=$value\n";
    }
}
personal_details("khalid", "CS", "22", "T") . "\n";
personal_details("Ahmad", "IT", "21", "E") . "\n";
