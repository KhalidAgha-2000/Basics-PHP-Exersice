<?php
echo "I am getting errors but I can't see the errors ";
?>

<?php
print "I am getting errors but I can't see the errors ";
?>


<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>