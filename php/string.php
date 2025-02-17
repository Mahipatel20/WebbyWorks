<html>
    <body>
        <?php
        echo strlen("Hello world!");
        echo "<br>";
        echo str_word_count("Hello world!");
        echo "<br>";
        $x = "Hello world!";
        echo strtoupper($x);
        echo "<br>";
        echo strtolower($x);
        echo "<br>";
        echo str_replace("world", "Mahi", $x);
        echo "<br>";
        echo strrev($x);
        echo "<br>";
        echo trim($x);

        echo "<br>";
        $x = "Hello";
        $y = "Mahi";
        $z = $x . $y;
        echo $z;
        echo "<br>";
        $z = $x . " " . $y;
        echo $z;
        echo "<br>";
        $z = "$x $y";
        echo $z;
        echo "<br>";

        $x = "Hello world!";
        echo substr($x, 6, 5);
        echo "<br>";
        echo substr($x, 7);
        echo "<br>";
        echo substr($x, -4, 3);
        ?>
    </body>
</html>