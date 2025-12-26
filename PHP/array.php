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

//Multidimensional Array
echo "<h3>Multidimensional Array</h3>";
$data3 = [
    ["Bipin", 19, 69000.50, true],
    ["Anush", 22, 75000.00, false],
    ["Ishan", 19, 80000.75, true]
];
foreach ($data3 as $mdArray) {
    foreach ($mdArray as $value) {
        echo "$value ";
    }
    echo "<br>";
}
?>