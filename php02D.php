<!DOCTYPE html>
<html lang='en-GB'>

<head>
    <title>PHP 02D</title>
</head>

<body>
    <h1>HTML Tables and Comparisons</h1>
    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    echo "<h2>Exercise 4</h2>\n";
    $array = [0, 123, 1.23e2, "123", TRUE, FALSE];
    echo "<table border='1'cellpadding='5'>\n";
    foreach ($array as $a) foreach ($array as $b) {
            $val_a = gettype($a) . "(" . var_export($a, true) . ")";
            $val_b = gettype($b) . "(" . var_export($b, true) . ")";
            echo "<tr>";
            printf(
                "<td>%20s == %20s -> %5s</td>",
                $val_a,
                $val_b,
                ($a == $b) ? "TRUE" : "FALSE"
            );
            printf(
                "<td>%20s === %20s -> %5s</td>",
                $val_a,
                $val_b,
                ($a === $b) ? "TRUE" : "FALSE"
            );
            printf(
                "<td>%20s != %20s -> %5s</td>",
                $val_a,
                $val_b,
                ($a != $b) ? "TRUE" : "FALSE"
            );
            printf(
                "<td>%20s !== %20s -> %5s</td>",
                $val_a,
                $val_b,
                ($a !== $b) ? "TRUE" : "FALSE"
            );
            echo "</tr>";
        }
    echo "</table>\n";
    ?>
</body>

</html>