<!DOCTYPE html>
<html>
<head>
    <title>Leap Years Check</title>
</head>
<body>
    <h2>Leap Years between 1901 to 2016</h2>
    <form method="post" action="">
        <input type="submit" name="submit" value="Check Leap Years">
    </form>

    <?php
    function isLeapYear($year) {
        if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
            return true;
        } else {
            return false;
        }
    }

    if (isset($_POST['submit'])) {
        echo "<ul>";
        for ($year = 1901; $year <= 2016; $year++) {
            if (isLeapYear($year)) {
                echo "<li>$year</li>";
            }
        }
        echo "</ul>";
    }
    ?>

</body>
</html>