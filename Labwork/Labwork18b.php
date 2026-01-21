<?php
$x = 10;
$y = 20;
function add()
{
    $GLOBALS['sum'] = $GLOBALS['x'] + $GLOBALS['y'];
}
add();
echo "The sum of x and y is: " . $sum;
?>