<?php
session_start();
echo "Hello " . $_SESSION['username'] . "<br>";
echo "Your email is " . $_SESSION['email'] . "<br>";
?>