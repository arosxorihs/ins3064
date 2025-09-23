<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
        // http://localhost:8008/index.php?x=5&y=8
            $x = $_GET['x'];
            $y = $_GET['y'];
        // Arithmetic Operators
        echo "x + y = ". ($x + $y). "<br>";

        echo "x - y = ". ($x - $y) . "<br>";

        echo "x/y = ". ($x / $y) . "<br>";

        echo "x * y = ". ($x * $y). "<br>";

        echo "x % y = ". ($x % $y) . "<br>";

        // Comparison Operators

        echo "x == y: " . ($x == $y) . "<br>";

        echo "x != y:

        ". ($x != $y) . "<br>";

        echo "x > y: ". ($x > $y). "<br>";

    ?>
    </body>

</html>