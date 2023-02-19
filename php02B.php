<!DOCTYPE html>
<html lang='en-GB'>
<head>
<title>PHP 02B</title>
</head>
<body>
<h1>PHP Floating-point Arithmetic</h1>
<?php
error_reporting( E_ALL );
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
echo "<h2>Exercises 3b</h2>\n";

function sign($n) {
    return ($n > 0) - ($n < 0);
}

function toString($res) {
    return ($res) ? 'TRUE': 'FALSE';
}

foreach (array(-4,0,4) as $i) {
    echo "<h3>Computations for $i</h3>\n";

    // $d is the square root of $i
    $d = sqrt($i);

    // $e is NULL if $d equals zero and 4 divided by $d otherwise
    $e = ($d == 0) ? NULL : 4 / $d;

    // $f is $e rounded
    $f = ($e === NULL) ? NULL : round($e);

    echo "sqrt($i) = $d<br>\n";
    echo "4/$d = $e<br>\n";
    echo "round($e) = $f<br>\n";
    echo "$e > 0 : ",toString($e > 0), "<br>\n";
    echo "$e <= 0 : ",toString($e <= 0),"<br>\n";

    for ($g = 0.4; $g < 0.7; $g = $g + 0.1) {
        $r = $i + $g * sign($i);
        // $s is $r rounded
        $s = round($r);
        echo "round($r) = $s<br>\n";
    }
}

echo "<h2>Exercise 3e</h2>\n";
$x = 0.3 - 0.2;
$y = 0.2 - 0.1;
echo "\$x = $x<br>\n";
echo "\$y = $y<br>\n";
echo "(\$x == \$y) = ",toString($x == $y),"<br>\n";
echo "(\$x == 0.1) = ",toString($x == 0.1),"<br>\n";
echo "(\$y == 0.1) = ",toString($y == 0.1),"<br>\n";
echo "\$x = ",sprintf("%.20f",$x),"<br>\n";
echo "\$y = ",sprintf("%.20f",$y),"<br>\n";
echo "0.1 = ",sprintf("%.20f",0.1),"<br>\n";
?>
</body>
</html>
