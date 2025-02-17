<html>
    <body>
        <?php
        $a = 5;
        $b = 1.23;
        $c = "Hello";
        $d = true;
        $e = NULL;

        $a = (string) $a;
        $b = (string) $b;
        $c = (string) $c;
        $d = (string) $d;
        $e = (string) $e;

        var_dump($a);
        var_dump($b);
        var_dump($c);
        var_dump($d);
        var_dump($e);

        echo "<br>";

        $a = 5;
        $b = 5.12;
        $c = "15 Kilometers";
        $d = "Kilometers 45";
        $e = "hello";
        $f = true;
        $g = NULL;

        $a = (int) $a;
        $b = (int) $b;
        $c = (int) $c;
        $d = (int) $d;
        $e = (int) $e;
        $f = (int) $f;
        $g = (int) $g;

        var_dump($a);
        var_dump($b);
        var_dump($c);
        var_dump($d);
        var_dump($e);
        var_dump($f);
        var_dump($g);

        echo "<br>";

        $a = 4;
        $b = 4.15;
        $c = "45 Kilometers";
        $d = "Kilometers 65";
        $e = "hello";
        $f = true;
        $g = NULL;

        $a = (float) $a;
        $b = (float) $b;
        $c = (float) $c;
        $d = (float) $d;
        $e = (float) $e;
        $f = (float) $f;
        $g = (float) $g;

        var_dump($a);
        var_dump($b);
        var_dump($c);
        var_dump($d);
        var_dump($e);
        var_dump($f);
        var_dump($g);

        echo "<br>";

        $a = 5;
        $b = 5.12;
        $c = 0;
        $d = -1;
        $e = 0.1;
        $f = "hello";
        $g = "";
        $h = true;
        $i = NULL;

        $a = (bool) $a;
        $b = (bool) $b;
        $c = (bool) $c;
        $d = (bool) $d;
        $e = (bool) $e;
        $f = (bool) $f;
        $g = (bool) $g;
        $h = (bool) $h;
        $i = (bool) $i;

        var_dump($a);
        var_dump($b);
        var_dump($c);
        var_dump($d);
        var_dump($e);
        var_dump($f);
        var_dump($g);
        var_dump($h);
        var_dump($i);

        echo "<br>";
        ?>
    </body>
</html>