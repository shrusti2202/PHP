<?php
/*
 print the below format : 
5 9 
26 10 
37 11 
48 12 
*/

$a = 5;
$b = 9;

for ($i = 0; $i < 4; $i++) {
    echo $a . " " . $b . "<br>";
    
    if($a == 5) 
    {
         $a += 21;
    }else{ 
        $a += 11;
    }
   
    $b += 1;  
}