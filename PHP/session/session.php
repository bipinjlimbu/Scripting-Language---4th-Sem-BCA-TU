<?php
session_start();
$_SESSION['username'] = 'Bipin712';
$_SESSION['email'] = 'bipin@gmail.com';
$_SESSION['password'] = '1234567';

echo "Session variables are set.";
?>