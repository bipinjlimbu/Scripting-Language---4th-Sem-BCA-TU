<?php
$fp = fopen('myfile.txt', 'w');
fwrite($fp, "Hello, World!\n");
fwrite($fp, "This is a test file.\n");
echo "Data written to file successfully.";
fclose($fp);
?>