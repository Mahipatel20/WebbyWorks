<html>
    <body>
        <?php
        // while loop
        echo "<h2>while loop</h2>";
        $i = 1;
        while ($i < 6) {
            echo $i;
            $i++;
        }
        echo "<br>";

        $i = 1;
        while($i < 6) {
            if($i == 4) break;
            echo $i;
            $i++;
        }
        echo "<br>";
        
        $i = 1;
        while ($i < 6):
            echo $i;
            $i++;
        endwhile;
        echo "<br>";

        $i = 0;
        while ($i < 100) {
            $i+=10;
            echo "$i<br>";
        }

        // do while loop
        echo "<h2>do while loop</h2>";
        $i = 1;
        
        do {
            echo $i;
            $i++;
        }while ($i < 6);
        echo "<br>";

        $i = 1;
        
        do {
            if($i == 3) break;
            echo $i;
            $i++;
        } while ($i < 6);

        // for loop
        echo "<h2>for loop</h2>";
        for ($x = 0; $x <= 5; $x++) {
            echo "The number is: $x <br>";
        }

        for ($x = 0; $x <= 10; $x++) {
            if ($x == 3) break;
            echo "The number is: $x <br>";
        }

        for ($x = 0; $x <= 4; $x++) {
            if ($x == 3) continue;
            echo "The number is: $x <br>";
        }

        for ($x = 0; $x <= 100; $x+=10) {
            echo "The number is: $x <br>";
        }

        // foreach loop
        echo "<h2>foreach loop</h2>";

        $colors = array("red", "green", "blue", "yellow");
        foreach ($colors as $x) {
            echo "$x <br>";
        }

        $members = array ("peter"=>"35", "ben"=>"37", "joe"=>"40");
        foreach ($members as $x =>$y) {
            echo "$x : $y <br>";
        }

        class Car {
            public $color;
            public $model;
            public function __construct($color, $model) {
              $this->color = $color;
              $this->model = $model;
            }
          }
          
          $myCar = new Car("red", "Volvo");
          
          foreach ($myCar as $x => $y) {
            echo "$x: $y<br>";
          }
        
        $colors = array("red", "green", "blue", "yellow");
        foreach ($colors as $x) {
            if($x == "blue") break;
            echo "$x <br>";
        }

        $colors = array ("red", "green", "blue", "yellow");
        foreach ($colors as $x) {
            if($x == "green") continue;
            echo "$x <br>";
        }

        $colors = array("red", "green", "blue", "yellow");
        foreach ($colors as $x) {
            if($x == "blue") $x = "pink";
        }
        var_dump($colors);

        $colors = array("red", "green", "blue", "yellow");
        foreach ($colors as &$x) {
            if($x == "blue") $x = "pink";
        }
        var_dump($colors);

        $colors = array("red", "green", "blue", "yellow");
        foreach ($colors as $x) :
        echo "$x <br>";
        endforeach;

        // Break 
        echo "<h2>Break</h2>";

        echo "<h2>Break in for</h2>";
        for ($x = 0; $x < 10; $x++) {
            if ($x == 4) {
              break;
            }
            echo "The number is: $x <br>";
          }
        
        echo "<h2>Break in while</h2>";
        $x = 0;
        while($x < 10) {
            if ($x == 4) {
              break;
            }
            echo "The number is: $x <br>";
            $x++;
          } 

        echo "<h2>Break in do while</h2>";
        $i = 1;
        do {
            if ($i == 3) break;
            echo $i;
            $i++;
          } while ($i < 6);
        echo "<br>";

        echo "<h2>Break in foreach</h2>";
        $colors = array ("red", "blue", "green", "yellow");
        foreach ($colors as $x) {
            if($x == "blue") break;
            echo "$x <br>";
        }

        // Continue 
        echo "<h2>Continue</h2>";

        echo "<h2>continue in for</h2>";
        for ($x = 0; $x < 10; $x++) {
            if ($x == 4) {
              continue;
            }
            echo "The number is: $x <br>";
          }
        
        echo "<h2>continue in while</h2>";
        $x = 0;
        while($x < 10) {
            if ($x == 4) {
              continue;
            }
            echo "The number is: $x <br>";
            $x++;
          } 

        echo "<h2>continue in do while</h2>";
        $i = 1;
        do {
            if ($i == 3) continue;
            echo $i;
            $i++;
          } while ($i < 6);
        echo "<br>";

        echo "<h2>continue in foreach</h2>";
        $colors = array ("red", "blue", "green", "yellow");
        foreach ($colors as $x) {
            if($x == "blue") continue;
            echo "$x <br>";
        }
        ?>
    </body>
</html>