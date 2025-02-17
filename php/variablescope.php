<html>
    <body>
        <?php
        // Global Scope
        $x = 5;

        function myTest() {
            echo "<p>Variable x inside function is : $x</p>";
        }
        myTest();
        echo "<p>Variable x outside function is : $x</p>";

        // Local Scope
        function myFunction() {
            $x = 5;
            echo "<p>Variable x inside function is : $x</p>";
        }
        myFunction();
        echo "<p>Variable x outside function is : $x</p>";

        // Global Keyword
        $x = 5;
        $y = 10;

        function myKey() {
            global $x, $y;
            $y = $x + $y;
        }
        myKey();
        echo $y;
        echo "<br>";

        // Global Keyword 2
        $x = 5;
        $y = 10;

        function myKey1() {
            $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
        }
        myKey1();
        echo $y;
        echo "<br>";

        // Static scope
        function myFun() {
            static $x = 0;
            echo $x;
            $x++;
        }
        myFun();
        echo "<br>";
        myFun();
        echo "<br>";
        myFun();

        
        ?>
    </body>
</html>