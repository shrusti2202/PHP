<!-- Write a program in PHP to print Fibonacci series. 0, 1, 1, 2, 3, 5, 8, 13, 21,34
Function to print Fibonacci series up to a given number -->

<?php

function printFibonacci($n) {
    $first = 0;
    $second = 1;
    echo $first . ", " . $second;

    $next = $first + $second;
    while ($next <= $n) {
        echo ", " . $next;
        $first = $second;
        $second = $next;
        $next = $first + $second;
    }
}

// Call the function to print Fibonacci series up to 34
printFibonacci(34);

// without using function

$a = 0;
$b = 1;


echo "<br>" .$a ." , ". $b;


$c = $a + $b;

while($c <= 34){
    echo ", ". $c;
    $a = $b;
    $b = $c;
    $c = $a + $b;
}


?>