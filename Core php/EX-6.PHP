<?php

//  Write a program to find whether a number is Armstrong or not


$numbers = [153, 370, 371, 407, 1634, 8208, 9474, 123, 10];

sort($numbers);

foreach ($numbers as $number) {
    $numStr = (string)$number;
    $numDigits = strlen($numStr);
    $sum = 0;

    for ($i = 0; $i < $numDigits; $i++) {
        $digit = (int)$numStr[$i];
        $sum += pow($digit, $numDigits);
    }

    if ($sum === $number) {
        echo $number . " is an Armstrong number.<br><br>";
    } else {
        echo $number . " is not an Armstrong number.<br><br>";
    }
}
?>