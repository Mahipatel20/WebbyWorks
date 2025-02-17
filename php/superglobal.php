<html>
    <body>
        <?php
        // $GLOBALS
        echo "<h2>Global variable</h2>";
           $x = 75;
           function myschool() {
               echo $GLOBALS['x'];
           }
           myschool();
           echo "<br>";
   
           $x = 50;
           function myclass() {
               global $x;
               echo $x;
           }
           myclass();
           echo "<br>";
   
           function myclg() {
               $GLOBALS["x"] = 100;
           }
           myclg();
           echo $GLOBALS["x"];
           echo $x;
           echo "<br>";
   
        // $SERVER
        echo "<h2>Server variable</h2>";
           echo $_SERVER['PHP_SELF'];
           echo "<br>";
           echo $_SERVER['SERVER_NAME'];
           echo "<br>";
           echo $_SERVER['HTTP_HOST'];
           echo "<br>";
           echo $_SERVER['HTTP_REFERER'];
           echo "<br>";
           echo $_SERVER['HTTP_USER_AGENT'];
           echo "<br>";
           echo $_SERVER['SCRIPT_NAME'];
           echo "<br>";
           echo $_SERVER['SERVER_SOFTWARE'];
        ?>
    </body>
</html>
