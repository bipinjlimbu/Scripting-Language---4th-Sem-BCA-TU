<?php
$age = 25;

if ($age >= 18 && $age <= 65) {
    echo "You are eligible to work.";
} elseif ($age < 18 || $age > 65) {
    echo "You are not eligible to work.";
} else {
    echo "Invalid age.";
}
?>