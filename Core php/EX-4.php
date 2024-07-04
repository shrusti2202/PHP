<!-- Write a PHP program to find the largest of three numbers using ternary Operator.
Function to find the largest of three numbers using ternary operator -->


<?php

function findLargest($a, $b, $c) {
    // Use nested ternary operators to find the largest number
    $largest = ($a >= $b) ? (($a >= $c) ? $a : $c) : (($b >= $c) ? $b : $c);
    return $largest;
}

$num1 = 15;
$num2 = 29;
$num3 = 23;


// Find and display the largest number
$largest = findLargest($num1, $num2, $num3);
echo "The largest number among $num1, $num2, and $num3 is $largest.";

