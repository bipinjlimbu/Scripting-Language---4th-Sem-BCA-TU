<?php
class division
{
    public function divide($a, $b)
    {
        try {
            $div = $a / $b;
            echo "Result: " . $div . "<br>";
        } catch (DivisionByZeroError $e) {
            echo "Error: Division by zero is not allowed.<br>";
        }
    }
}

$divObj = new division();
$divObj->divide(10, 2);
$divObj->divide(10, 0);
$divObj->divide(15, 7);
?>