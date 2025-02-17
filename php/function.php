<html>
    <body>
        <?php
        function familyName ($fname) {
            echo "$fname Refsnes.<br>"; 
        }
        familyName("Jani");
        familyName("Hege");
        familyName("Stale");
        familyName("Kai jim");
        familyName("Borge");

        function family($fname, $year) {
            echo "$fname Patel. Born in $year <br>";
        }
        family("Mahi", "2004");
        family("Kalgi", "2000");
        family("Yatri", "2005");
        family("Dev", "2008");

        function setHeight ($minheight = 50) {
            echo "The height is : $minheight <br>";
        }
        setHeight(350);
        setHeight();
        setHeight(135);
        setHeight(80);

        function sum ($x, $y) {
            $z = $x + $y;
            return $z;
        }
        echo "5 + 10 = " . sum(5,10) . "<br>";
        echo "7 + 13 = " . sum(7,13) . "<br>";
        echo "2 + 4 = " . sum(2,4) . "<br>";

        function add_five(&$value) {
            $value +=5;
        }
        $num = 2;
        add_five($num);
        echo $num;

        function sumMyNumbers(...$x) {
            $n = 0;
            $len = count($x);
            for($i = 0; $i < $len; $i++) {
                $n += $x[$i];
            }
            return $n;
        }
        $a = sumMyNumbers(7, 7, 5, 2, 6, 4);
        echo $a;
        echo "<br>";

        function myFamily($lastname,...$firstname) {
            $txt = "";
            $len = count($firstname);
            for($i = 0; $i < $len; $i++) {
                $txt = $txt. "Hi, $firstname[$i] $lastname. <br>"; 
            }
            return $txt;
        }
        $a = myFamily("Doe", "Jane", "John", "Joey");
        echo $a;
        echo "<br>";

        function addNumbers(float $a , float $b) : float {
            return $a + $b;
        }
        echo addNumbers(1.2, 5.2);

        ?>
    </body>
</html>