<?php
$fp = fopen('myfile.txt', 'r');
while (!feof($fp)) {
    $char = fgetc($fp);
    echo $char;
    if ($char == ".") {
        echo "<br>";
    }
}
fclose($fp);
?>