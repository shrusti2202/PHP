<!-- Write a PHP program to enter marks of five subjects Physics, Chemistry, 
Biology, Mathematics and Computer, calculate percentage and grade by if 
else  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marksheet</title>
</head>
<body>
    
    <form action="" method="post">

    <p>Name : <input type="text" name="student_name" id="student_name" required placeholder="Enter your name" ></p>
    <p>Physics : <input type="number" name="physics" id="physics" min="10" max="100" required placeholder="00" width="100%" ></p>
    <p>Chemistry : <input type="number" name="chemistry" id="chemistry" min="10" max="100" required placeholder="00" ></p>
    <p>Biology : <input type="number" name="biology" id="biology" min="10" max="100" required placeholder="00" ></p>
    <p>Mathematics : <input type="number" name="mathematics" id="mathematics" min="10" max="100" required placeholder="00" ></p>
    <p>Computer : <input type="number" name="computer" id="computer" min="10" max="100" required placeholder="00" ></p>
    <p><input type="submit" name="submit" id="Submit"></p>

    </form>

</body>
</html>

<?php



if(isset($_POST['submit'])){

    $physics = $_POST['physics'];
    $chemistry = $_POST['chemistry'];
    $biology = $_POST['biology'];
    $mathematics = $_POST['mathematics'];
    $computer = $_POST['computer'];

    $total_marks = $physics + $chemistry + $biology + $mathematics + $computer;
    echo "<h2>  TOTAL MARKS : ". $total_marks . "</h2> <br>";

    $per = ($total_marks / 500) * 100;
    echo "<h2>  PERCENATGE : ". $per . "</h2> <br>";


    if($per >= 90){
        $grade = 'A';
    } elseif($per >= 80){
        $grade = 'B';
    } elseif($per >= 70){
        $grade = 'C';
    } elseif($per >= 60){
        $grade = 'D';
    } elseif($per >= 50){
        $grade = 'E';
    } else {
        $grade = 'F';
    }

    echo "<h2>  GRADE : ". $grade . "</h2> <br>";
    
}


