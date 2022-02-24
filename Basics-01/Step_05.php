<?php

$course_name = " React JS";
$enrolled_students = 5;
$price = 20.50;
$on_discount = true;


echo 'Course title: ' . $course_name . "\n" . 'Enrolled Students: ' . $enrolled_students . "\n" . 'Course price: ' . $price . "\n" . "Course on discount: ";
echo ($on_discount == true) ? 'Yes' . "\n" : 'No' . "\n";
