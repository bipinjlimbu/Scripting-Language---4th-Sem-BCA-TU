<?php
$f = fopen('myfile.txt', 'r');
echo $f . "</br>";

$content = fread($f, filesize('myfile.txt'));
echo $content . "</br>";

fclose($f);
?>