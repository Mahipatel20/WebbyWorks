<html>
    <body>
        <?php
        if (5 > 3) {
            echo "Have a good day! <br>";
        }
        $t = 14;
        if ($t < 20) {
            echo "good day! <br>";
          }
        $t = 14;
        if ($t == 14) {
            echo "Good! <br>";
          }
        
        // Comparison Operators
        echo "<h2>Comparison Operators</h2>";
        $x = 100;  
        $y = 100;

        if ($x == $y) {
            echo "$x is equal to $y <br>";
        }
        if ($x === $y) {
            echo "$x is identical to $y <br>";
        }

        $x = 100;  
        $y = 50;

        if ($x != $y) {
            echo "$x is not equal to $y <br>";
        }
        if ($x <> $y) {
            echo "$x is not equal to $y <br>";
        }
        if ($x !== $y) {
            echo "$x is not identical to $y <br>";
        }
        if ($x > $y) {
            echo "$x is greater than $y <br>";
        }
        if ($y < $x) {
            echo "$y is less than $x <br>";
        }

        $x = 100;  
        $y = 100;

        if ($x >= $y) {
            echo "$x is greater than, or equal to $y <br>";
        }
        if ($y <= $x) {
            echo "$y is less than, or equal to $x";
        }

        // Logical Operators
        echo "<h2>Logical Operators</h2>";
        
        $a = 200;
        $b = 33;
        $c = 500;

        if ($a > $b && $a < $c ) {
            echo "Both conditions are true <br>";
        }

        $x = 100;  
        $y = 50;

        if ($x == 100 and $y == 50) {
            echo "Hello world! <br>";
        }
        if ($x == 100 && $y == 50) {
            echo "Hello! <br>";
        }
        if ($x == 100 or $y == 80) {
            echo "world! <br>";
        }
        if ($x == 100 || $y == 80) {
            echo "Morning! <br>";
        }
        if ($x == 100 xor $y == 80) {
            echo "Good! <br>";
        }
        if (!($x == 90)) {
            echo "Hello world! <br>";
        }

        $a = 6;

        if ($a == 2 || $a == 3 || $a == 4 || $a == 5 || $a == 6 || $a == 7) {
            echo "$a is a number between 2 and 7";
        }

        ?>
    </body>
</html>