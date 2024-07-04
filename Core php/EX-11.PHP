<!-- 1. Declaring Arrays in PHP
Indexed Array:
An indexed array uses numeric keys to access values.


$indexedArray = array('apple', 'banana', 'orange');

Or using short array syntax (PHP 5.4+):

$indexedArray = ['apple', 'banana', 'orange'];
Associative Array:
An associative array uses named keys (strings) to access values.


$assocArray = array('name' => 'SHRUSTI', 'age' => 20, 'city' => 'Ahmedabad');
Or with short array syntax:

$assocArray = ['name' => 'SHRUSTI', 'age' => 20, 'city' => 'Ahmedabad'];
Mixed Type Array:
PHP allows arrays to have elements of different types:

$mixedArray = array(10, 'apple', true, 3.14, ['a', 'b', 'c']);
Or using short array syntax:


$mixedArray = [10, 'apple', true, 3.14, ['a', 'b', 'c']];
2. Converting JSON String to Array in PHP
PHP provides built-in functions to convert JSON strings to arrays (json_decode()) and arrays to JSON strings (json_encode()).
$jsonString = '{"name":"Charmi","age":20,"city":"Ahmedabad"}';

 Convert JSON string to associative array
$arrayFromJson = json_decode($jsonString, true); -->
<?php
echo "Example:";

$jsonString = '{"name":"shrusti","age":20,"city":"Ahmedabad"}';

// Convert JSON string to associative array
$arrayFromJson = json_decode($jsonString, true); 

// Access elements of the array
echo "<br>".$arrayFromJson['name']."<br>";  // Outputs: shrusti
echo $arrayFromJson['age']."<br>";   // Outputs: 20
echo $arrayFromJson['city']."<br>";  // Outputs: Ahmedabad