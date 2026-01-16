<?php

$file_name = $_FILES['fileUpload']['name'];
$file_tmp = $_FILES['fileUpload']['tmp_name'];

move_uploaded_file($file_tmp, "uploads/" . $file_name);
echo "File uploaded successfully: " . $file_name;
?>