<?php
$fp = fopen("data.txt", "w");
fwrite($fp, "Hello, World!");
fclose($fp);
echo "File 'data.txt' created and written successfully.";
?>