<?php
$fp = fopen("search.txt", "r");


while (($line = fgets($fp)) !== false) {
    $stopPos = strpos($line, "STOP");

    if ($stopPos !== false) {
        echo substr($line, 0, $stopPos) . "<br>";
        continue;
    }

    echo htmlspecialchars($line) . "<br>";
}

fclose($fp);

?>