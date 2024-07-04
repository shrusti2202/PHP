<?php
$array = ['apple', 'banana', 'cherry', 'strawberry'];

$randomKey = array_rand($array);
$randomValue = $array[$randomKey];

echo "Random Value: $randomValue <br>";