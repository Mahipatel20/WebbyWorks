<html>
    <body>
        <?php
        $a = 5;
        $b = 12.2;
        $c = "23";

        var_dump($a);
        echo "<br>";
        var_dump($b);
        echo "<br>";
        var_dump($c);

        echo "<br>";

        $x = 1515;
        var_dump(is_int($x));

        echo "<br>";

        $x = 15.12;
        var_dump(is_int($x));

        echo "<br>";

        $x = 10.12;
        var_dump(is_float($x));

        echo "<br>";

        $x = acos(8);
        var_dump($x);

        echo "<br>";

        $x = 4565;
        var_dump(is_numeric($x));

        echo "<br>";

        $x = "1548";
        var_dump(is_numeric($x));

        echo "<br>";

        $x = "15.32" + 200;
        var_dump(is_numeric($x));

        echo "<br>";

        $x = "Hello";
        var_dump(is_numeric($x));

        echo "<br>";
        // Cast float to int
        $x = 1545.265;
        $int_cast = (int)$x;
        echo $int_cast;
        echo "<br>";

        // Cast string to int
        $x = "4561.213";
        $int_cast = (int)$x;
        echo $int_cast;
        ?>
        <p>Line breaks were added for better readabilitiy.</p>
    </body>
</html>