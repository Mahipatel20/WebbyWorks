<html>
    <body>
        <?php
        define("GREETING", "Welcome to W3Schools.com!" . "<br>");
        echo GREETING;

        const MYCAR = "Volvo";
        echo MYCAR . "<br>";

        define("cars", [
            "Alfa Romeo",
            "BMW",
            "Toyota"
        ]);
        echo cars[2];
        ?>
    </body>
</html>