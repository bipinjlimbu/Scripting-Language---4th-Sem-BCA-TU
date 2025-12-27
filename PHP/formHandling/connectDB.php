<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "scripringlanguage";

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("Database connection error.");
} else {
    echo "Database connected successfully.";
}
?>