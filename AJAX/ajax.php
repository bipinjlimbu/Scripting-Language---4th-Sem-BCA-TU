<?php
$name = $_POST['name'] ?? 'Guest';
$age = $_POST['age'] ?? 'unknown';
echo "Hello, " . htmlspecialchars($name) . "! You are " . htmlspecialchars($age) . " years old.";
?>