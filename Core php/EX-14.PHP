<?php
$jsonString = '{"name": "Charmi", "age": 20, "city": "Ahmedabad"}';

$array = json_decode($jsonString, true);

if ($array === null && json_last_error() !== JSON_ERROR_NONE) {
    echo "Error decoding JSON: " . json_last_error_msg();
} else {
    echo "Decoded Array:\n";
    print_r($array);
}