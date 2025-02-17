<html>
    <body>
        <?php
        // Operators
        echo "<h2>Operators</h2>";
        $x = 10;
        $y = 5;

        echo $x + $y . "<br>";
        echo $x - $y . "<br>";
        echo $x * $y . "<br>";
        echo $x / $y . "<br>";
        echo $x % $y . "<br>";
        echo $x ** $y . "<br>";

        // Assignment Operators
        echo "<h2>Assingment Operators</h2>";
        $x = 10;
        echo $x . "<br>";

        $x = 20;
        $x += 100;
        echo $x . "<br>";

        $x = 50;
        $x -= 30;
        echo $x . "<br>";

        $x = 20;
        $x *= 100;
        echo $x . "<br>";

        $x = 10;
        $x /= 5;
        echo $x . "<br>";

        $x = 15;
        $x %= 4;
        echo $x . "<br>";

        // Comparison Operators
        echo "<h2>Comparison Operators</h2>";
        $x = 100;
        $y = "100";
        var_dump($x == $y);
        echo "<br>";
        var_dump($x === $y);
        echo "<br>";
        var_dump($x != $y);
        echo "<br>";
        var_dump($x <> $y);
        echo "<br>";
        var_dump($x !== $y);
        echo "<br>";

        $x = 100;
        $y = 50;
        var_dump($x> $y);
        echo "<br>";

        $x = 10;
        $y = 50;
        var_dump($x < $y);
        echo "<br>";

        $x = 50;
        $y = 50;
        var_dump($x >= $y);
        echo "<br>"; 

        $x = 50;
        $y = 40;
        var_dump($x <= $y);
        echo "<br>";

        $x = 5;
        $y = 10;
        echo ($x <=> $y);
        echo "<br>";

        $x = 10;
        $y = 10;
        echo ($x <=> $y);
        echo "<br>";

        $x = 15;
        $y = 10;
        echo ($x <=> $y);
        echo "<br>";

        // Increment/ Decrement Operators
        echo "<h2>Increment/ Decrement Operators</h2>";
        $x = 10;
        echo ++$x . "<br>";
        $x = 10;
        echo $x++ . "<br>";
        $x = 10;
        echo --$x . "<br>";
        $x = 10;
        echo $x-- . "<br>";

        // String Operators
        echo "<h2>String Operators</h2>";
        $txt1 = "Hello";
        $txt2 = "world!";
        echo $txt1 . $txt2 . "<br>";
        $txt1 .= $txt2;
        echo $txt1 . "<br>";

        // Array Operators 
        echo "<h2>Array Operators</h2>";
        $x = array("a" => "red", "b" => "green");  
        $y = array("c" => "blue", "d" => "yellow");  
        print_r($x + $y); 
        echo "<br>";

        var_dump($x == $y);
        echo "<br>";

        var_dump($x === $y);
        echo "<br>";

        var_dump($x != $y);
        echo "<br>";

        var_dump($x <> $y);
        echo "<br>";

        var_dump($x !== $y);
        ?>
    </body>
</html>