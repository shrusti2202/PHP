<?php
$array = [1, 2, 2, 3, 4, 4, 5];

$uniqueArray = array_unique($array);

echo "Original Array: ";
print_r($array);
echo "<br>";
echo "Array with Duplicates Removed: ";
print_r($uniqueArray);
?>