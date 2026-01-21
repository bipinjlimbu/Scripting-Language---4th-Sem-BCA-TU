<?php
$fp = fopen("essay.txt", "r");
$count = 0;
while (fgetc($fp) !== false) {
    $count++;
}
fclose($fp);
echo "Total number of characters in 'essay.txt': " . $count;
?>