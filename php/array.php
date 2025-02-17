<html>
    <body>
        <?php
        $cars = array("Volvo", "BMW", "Toyota"); 
        var_dump($cars);
        echo "<br>";

        function myFunction() {
            echo "This text comes from a function";
        }
        $myArr = array("Volvo", 15, ["apples", "bananas"], myFunction());
        $myArr[3];

        $cars = array("Volvo", "BMW", "Toyota");
        echo count($cars);

        // Indexed Array
        echo "<h2>Indexed Array</h2>";
        
        $cars = array("Volvo", "BMW", "Mercedes");
        var_dump($cars);
        echo "<br>";

        echo $cars[0] . "<br>";

        $cars[1] = "Ford";
        var_dump($cars);
        echo "<br>";

        $cars = array("Volvo", "BMW", "Toyota"); 
        foreach ($cars as $x) {
            echo "$x <br>";
        }

        $cars[0] = "Volvo";
        $cars[1] = "BMW";
        $cars[2] = "Toyota";

        array_push($cars, "Ford");
        var_dump($cars);
        echo "<br>";

        $cars[5] = "Volvo";
        $cars[7] = "BMW";
        $cars[14] = "Toyota";

        array_push($cars, "Ford");
        var_dump($cars);

        // Associative Array
        echo "<h2>Associative Array</h2>";

        $car = array("banana"=>"Ford", "model"=>"Mustang", "year"=>1964);
        var_dump($car);
        echo "<br>";

        echo $car["model"];
        echo "<br>";

        $car ["year"] = 2024;
        var_dump($car);
        echo "<br>";

        foreach ($car as $x => $y) {
            echo "$x: $y <br>";
        }

        // Create Array
        echo "<h2>Create Array</h2>";

        $cars = array("Volvo", "BMW", "Toyota");
        var_dump($cars);
        echo "<br>";

        $cars = ["Volvo", "BMW", "Toyota"];
        var_dump($cars);
        echo "<br>";

        $cars = [
            "Volvo",
            "BMW",
            "Toyota"
          ];
        var_dump($cars);
        echo "<br>";

        $cars = [
            0 => "Volvo",
            1 => "BMW",
            2 =>"Toyota"
          ];
          
        var_dump($cars);
        echo "<br>";

        $myCar = [
            "brand" => "Ford",
            "model" => "Mustang",
            "year" => 1964
          ];
          
        var_dump($myCar);
        echo "<br>";
        
        // Access Array
        echo "<h2>Access Array</h2>";

        $cars = array("Volvo", "BMW", "Toyota");
        echo $cars[2];
        echo "<br>";

        $cars = array("brand"=>"Ford", "model"=>"Mustang", "year"=>2024);
        echo $cars["year"];
        echo "<br>";

        echo $cars["model"];
        echo "<br>";
        echo $cars['model'];
        echo "<br>";

        function myFun() {
            echo "I come from a function!";
        }
        $myArr = array("Volvo", 15, myFun());
        $myArr[2];
        echo "<br>";

        function Fun() {
            echo "I come from a function!";
        }
        $myArr = array("car" => "Volvo", "age" => 15, "message" => Fun()); 
        $myArr["message"];
        echo "<br>";

        $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
        foreach ($car as $x => $y) {
            echo "$x: $y <br>";
        }

        $cars = array("Volvo", "BMW", "Toyota"); 
        foreach ($cars as $x) {
            echo "$x <br>";
        }

        // Add Array 
        echo "<h2>Add Array</h2>";

        $fruits = array("Apple", "Banana", "Cherry");
        $fruits[] = "Orange";
        var_dump($fruits);
        echo "<br>";

        $cars = array("brand"=>"Ford", "Model"=>"Mustang", "year"=>2021);
        $cars["color"] = "Red";
        var_dump($cars);
        echo "<br>";

        $fruits = array("Apple", "Banana", "Cherry");
        array_push($fruits, "Orange", "Kiwi", "Lemon");
        var_dump($fruits);
        echo "<br>";

        $cars = array("brand"=> "Ford", "model"=> "Mustang");
        $cars +=["color" => "red", "year" => 1967];
        var_dump($cars);

        // Delete Array
        echo "<h2>Delete Array</h2>";

        $cars = array("volvo", "Audi", "Hundai");
        array_splice($cars, 1, 1);
        var_dump($cars);
        echo "<br>";

        $cars = array("Audi", "BMW", "Mercedes");
        unset($cars[1]);
        var_dump($cars);
        echo "<br>";

        $cars = array("volvo", "Audi", "Hundai");
        array_splice($cars, 1, 2);
        var_dump($cars);
        echo "<br>";

        $cars = array("Audi", "BMW", "Mercedes");
        unset($cars[0], $cars[1]);
        var_dump($cars);
        echo "<br>";

        $cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
        unset($cars["model"]);
        var_dump($cars);
        echo "<br>";

        $cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
        $newarray = array_diff($cars, ["Mustang", 1964]);
        var_dump($cars);
        echo "<br>";

        $cars = array("Volvo", "BMW", "Toyota");
        array_pop($cars);
        var_dump($cars);
        echo "<br>";

        $cars = array("Volvo", "BMW", "Toyota");
        array_shift($cars);
        var_dump($cars);
        echo "<br>";

        // Sorting Array
        echo "<h2>Sorting Array</h2>";

        // Ascending order sort()
        echo "<h3>Ascending</h3>";
        $cars = array("Volvo", "BMW", "Toyota");
        sort($cars);
        $clength = count($cars);
        for($x = 0; $x < $clength; $x++) {
            echo $cars[$x];
            echo "<br>";
        }

        $numbers = array(2, 5, 8, 40, 6, 56, 10);
        sort($numbers);

        $arrlength = count($numbers);
        for($x = 0; $x < $arrlength; $x++) {
            echo $numbers[$x];
            echo "<br>";
        }

        // Descending order rsort()
        echo "<h3>Descending</h3>";

        $cars = array("Volvo", "BMW", "Toyota");
        rsort($cars);
        $clength = count($cars);
        for($x = 0; $x < $clength; $x++) {
            echo $cars[$x];
            echo "<br>";
        }

        $numbers = array(2, 5, 8, 40, 6, 56, 10);
        rsort($numbers);

        $arrlength = count($numbers);
        for($x = 0; $x < $arrlength; $x++) {
            echo $numbers[$x];
            echo "<br>";
        }

        // Ascending order value asort()

        echo "<h3>Ascending order value- asort()</h3>";

        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        asort($age);
        foreach($age as $x => $x_value) {
            echo "Key=" . $x . ", Value=" . $x_value;
            echo "<br>";
        }

        // Ascending order key ksort()

        echo "<h3>Ascending order key- ksort()</h3>";

        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        ksort($age);

        foreach($age as $x => $x_value) {
            echo "Key=" . $x . ", Value=" . $x_value;
            echo "<br>";
        }

        // Descending order value arsort()

        echo "<h3>Descending order value- arsort()</h3>";

        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        arsort($age);
        foreach($age as $x => $x_value) {
            echo "Key=" . $x . ", Value=" . $x_value;
            echo "<br>";
        }

        // Descending order key krsort()

        echo "<h3>Descending order key- krsort()</h3>";

        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        krsort($age);

        foreach($age as $x => $x_value) {
            echo "Key=" . $x . ", Value=" . $x_value;
            echo "<br>";
        }

        // Multidimensional Array
        echo "<h2>Multidimensional Array</h2>";

        $cars = array (
            array("Volvo", 22, 18),
            array("BMW", 15, 13),
            array("Saab", 5, 2),
            array("Land Rover", 17, 15)
        );

        echo $cars[0][0]. ": In Stock: ".$cars[0][1]. ", sold: ".$cars[0][2]. ".<br>";
        echo $cars[1][0]. ": In Stock: ".$cars[1][1]. ", sold: ".$cars[1][2]. ".<br>";
        echo $cars[2][0]. ": In Stock: ".$cars[2][1]. ", sold: ".$cars[2][2]. ".<br>";
        echo $cars[3][0]. ": In Stock: ".$cars[3][1]. ", sold: ".$cars[3][2]. ".<br>";

        for($row = 0; $row < 4; $row++) {
            echo "<p><b>Row number $row</b></p>";
            echo "<ul>";
            for($col = 0; $col < 3; $col++) {
                echo "<li>" . $cars[$row][$col]. "</li>";
            }
            echo "</ul>";
        }
        ?>
    </body>
</html>