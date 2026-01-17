<?php
$fp = fopen('myfile.txt', 'r');
while (!feof($fp)) {
    $line = fgets($fp);
    echo $line . "</br>";
}
fclose($fp);
?>