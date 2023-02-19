<!DOCTYPE html>
<html lang='en-GB'>
<head>
<title>PHP 02A</title>
</head>
<body>
<h1>Our first PHP script</h1>
<?php
$user = "Mohammed Alotaibi";
echo "<p><b>Hello $user<br>\nHello World!</b></p>\n";
echo "<h2>Exercise 2a</h2>\n";
$text = "stop!";
echo 'Single-quotes: ','don\'t \'don\'t\'"don\'t" $text', "<br>\n";
echo "Double-quotes: ","don't 'don't'\"don\'t\" $text", "<br>\n";
echo 'Single-quotes: ','glass\\table glass\table glass\ntable', "<br>\n";
echo "Double-quotes: ","glass\\table glass\table glass\ntable", "<br>\n";
echo "<h2>Exercise 2b</h2>\n";
$student_id = "200846369";
$staff_id = "E10481370";
echo "1: \$student_id = $student_id<br>";
echo "1: \$staff_id = $staff_id <br>";
$student_id++;
$staff_id++;
echo "2: \$student_id = $student_id<br>";
echo "2: \$staff_id = $staff_id <br>";
$student_id = (int)$student_id + 1;
$staff_id = (int)$staff_id + 1;
echo "3: \$student_id = $student_id<br>";
echo "3: \$staff_id = $staff_id <br>";
echo "<h2>Exercise 2c</h2>\n";
if (FALSE) {
error_reporting( E_ALL );
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
}
echo "Logarithm of 0: ", log(0), "<br>\n";
echo "Square root of -2: ", sqrt(-2), "<br>\n";
echo "Dividing 1 by 0: ", 1/0, "<br>\n";
echo "Dividing 0 by 0: ", 0/0, "<br>\n";
?>
</body>
</html>