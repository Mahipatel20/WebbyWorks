<html>
    <body>
        <?php
        // __CLASS__
        echo "<h2>__CLASS__</h2>";
        class Fruits {
            public function myValue() {
                return __CLASS__;
            }
        }
        $kiwi = new Fruits();
        echo $kiwi -> myValue();

        // __DIR__
        echo "<h2>__DIR__</h2>";
        echo "the current directory is: " . __DIR__ . "<br>";

        // __FILE__
        echo "<h2>__FILE__</h2>";
        echo "this file is located at: " . __FILE__ . "<br>";

        // __FUNCTION__
        echo "<h2>__FUNCTION__</h2>";
        function myFunction() {
            echo "Function name: " . __FUNCTION__ . "<br>";
        }
        myFunction();

        function myValue() {
            return __FUNCTION__;
        }
        echo myValue();

        // __LINE__
        echo "<h2>__LINE__</h2>";
        echo "this is line number:" . __LINE__ . "<br>";

        // __METHOD__
        echo "<h2>__METHOD__</h2>";
        class Fruit {
            public function myValue() {
                return __METHOD__ . "<br>";
            }
        } 
        $kiwi = new Fruit();
        echo $kiwi -> myValue();

        class myClass {
            function MyMethod() {
                echo "Method name: " . __METHOD__;
            }
        }
        $obj = new myClass();
        $obj ->myMethod();
        echo "<br>";
        ?>
    </body>
</html>