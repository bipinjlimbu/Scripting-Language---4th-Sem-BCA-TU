<?php
function calculateCirleArea($radius)
{
    $area = pi() * pow($radius, 2);
    return $area;
}

echo "The area of the circle with radius 5 is: " . calculateCirleArea(5);
echo "<br>The area of the circle with radius 7 is: " . calculateCirleArea(7);
echo "<br>The area of the circle with radius 10 is: " . calculateCirleArea(10);
?>