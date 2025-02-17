<html>
    <body>
        <h1>Welcome to my home page!</h1>
        <p>some text.</p>
        <p>Some more text.</p>
        <?php include 'footer.php';?>
        <div class="menu">
            <?php include 'menu.php';?>
        </div>
        <?php
        include 'menu.php';
        echo "I have a $color $car. <br> ";
        ?>
        <?php
        include 'noFileExists.php';
        echo "I have a $color $car. <br> ";

        require 'noFileExists.php';
        echo "I have $color $car. ";

        ?>
    </body>
</html>