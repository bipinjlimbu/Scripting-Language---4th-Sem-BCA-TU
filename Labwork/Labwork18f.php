<?php
$fp = fopen("data.txt", "r");
$content = fread($fp, filesize("data.txt"));
echo "Content of 'data.txt':<br>" . $content;
fclose($fp);
?>