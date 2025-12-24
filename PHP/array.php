<?php

// Indexed Array
echo "<h3>Indexed Array</h3>";
$data1 = array("Bipin", 19, 69.67, true);
foreach ($data1 as $value) {
    echo "$value <br> ";
}

// Associative Array
echo "<h3>Associative Array</h3>";
$data2 = [
    "name" => "Bipin",
    "age" => 19,
    "salary" => 69000.50,
    "is_active" => true
];

foreach ($data2 as $key => $value) {
    echo "$key : $value <br> ";
}
?>